<?php
if( get_field( 'not_gross', $vacancy_item_id) ):
    $gross = '<span> - не гросс</span>';
else:
    $gross = '<span> - гросс</span>';
endif;
$popup_info = array(
    'title'                     => get_the_title( $vacancy_item_id ),
    'content'                   => get_the_content( $vacancy_item_id ),
    'img'                       => get_the_post_thumbnail_url( $vacancy_item_id, 'full' ),
    'money_from'                => number_format( get_field( 'money_from', $vacancy_item_id ), 0, ',', ' '),
    'gross'                     => $gross,
    'vacancy_project'           => get_field( 'vacancy_project', $vacancy_item_id ),
    'can_without_experience'    => get_field( 'can_without_experience', $vacancy_item_id ),
    'can_work_remotely'         => get_field( 'can_work_remotely', $vacancy_item_id ),
    'img_map'                   => get_field( 'img_map', $vacancy_item_id ),
    'map_full_adress'           => get_field( 'map_full_adress', $vacancy_item_id ),
    'related_vacancies'         => get_field( 'related_vacancies', $vacancy_item_id ),
    'news'                      => get_field( 'news', $vacancy_item_id ),
    'url'                       => get_post_permalink( $vacancy_item_id ),
);

$expectations = '';
if( have_rows('vacancy_repeater', $vacancy_item_id) ):

    while( have_rows('vacancy_repeater', $vacancy_item_id) ) : the_row();

        $expectations .= '<div class="vacancy__description-block">
            <div class="vacancy__description-title">
            <p class="vacancy__description-title-text">'.get_sub_field('item_title').'</p>
            </div>
            <div class="vacancy__description-list">
            '.get_sub_field('item_contect').'
            </div>
        </div>';
    endwhile;
endif;
$popup_info['expectations'] = $expectations;

$k = 1;
$vaccat_names = '';
$vaccat_terms = get_the_terms( $vacancy_item_id, 'vaccat' );
if( is_array( $vaccat_terms ) ){
	foreach( $vaccat_terms as $vaccat_term ){
        $vaccat_names .= $vaccat_term->name;
        
        if( $k != count( $vaccat_terms ) ){
            $vaccat_names .= ', ';
        }
        if( $k == 1 ){
            $first_vaccat = $vaccat_term;
        }
        $k++;
	}
}
$popup_info['vaccat'] = $vaccat_names;

$k = 1;
$town_names = '';
$town_terms = get_the_terms( $vacancy_item_id, 'town' );
if( is_array( $town_terms ) ){
	foreach( $town_terms as $town_term ){
        $town_names .= $town_term->name;
        
        if( $k != count( $town_terms ) ){
            $town_names .= ', ';
        }
        $k++;
	}
}
$popup_info['town'] = $town_names;

if( get_field( 'can_without_experience', $vacancy_item_id ) ){
    $popup_info['experience'] = get_field( 'can_without_experience', $vacancy_item_id )['label'];
} else{
    $popup_info['experience'] = get_field( 'can_without_experience', $vacancy_item_id )['label'];
}

?>
<div class="profession__job-item" data-vacancy_id="<?php echo $vacancy_item_id; ?>" >
    <div class="profession__job-title-container">
        <div class="profession__job-title"
        data-vacancy_id="<?php echo $vacancy_item_id; ?>"
        data-info='<?php echo json_encode($popup_info); ?>'
        ><?php echo get_the_title($vacancy_item_id); ?></div>

        <div class="profession__bread-crumbs">
            <a href="#" class="profession__crumb">IT-департамент</a>
            <a href="<?php echo get_term_link( $first_vaccat->term_id, 'vaccat'); ?>" class="profession__crumb"><?php echo $first_vaccat->name; ?></a>
        </div>
        <!-- <a href="#" class="profession__more-info">Больше о направлении</a> -->
    </div>

    <div class="profession__job-price-container">
        <p class="profession__job-price">
            от
            <span class="profession__job-price-value"><?php echo number_format( get_field( 'money_from', $vacancy_item_id ), 0, ',', ' '); ?></span>
            <span class="profession__currency">&#8381;</span>
            <?php if( get_field( 'not_gross', $vacancy_item_id) ): ?>
                <span> - не гросс</span>
            <?php else: ?>
                <span> - гросс</span>
            <?php endif; ?>
        </p>


        <?php //var_dump(get_field( 'can_without_experience', $vacancy_item_id ));
        if( get_field( 'can_without_experience', $vacancy_item_id ) ){
            ?>
            <p class="profession__job-expiriens"><?php echo get_field( 'can_without_experience', $vacancy_item_id )['label']; ?></p>
            <?php
        }
        ?>
    </div>

    <div class="profession__location-container">
        <?php
        $cur_terms = get_the_terms( get_the_ID(), 'town' );
        if( is_array( $cur_terms ) ){
            foreach( $cur_terms as $cur_term ){
                ?>
                <p class="profession__location-city"><?php echo $cur_term->name; ?></p>
                <?php
            }

            if( true == get_field( 'check_metro', $vacancy_item_id ) ){

                $metro = get_field( 'metro_name', $vacancy_item_id );
                echo $metro;
            }
        }
        ?>
        <!-- <p class="profession__location-city-metro profession__location-city-metro-arbat">Бауманская</p> -->
        <?php
        if( get_field( 'can_work_remotely', $vacancy_item_id ) ){
            ?>
            <p class="profession__location">Можно удаленно</p>
            <?php
        }
        ?>
        <!-- <a href="#" class="profession__location-map">На карте</a> -->
    </div>
</div>
