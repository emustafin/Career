<?php
$popup_info = array(
    'title'                     => get_the_title( $vacancy_item_id ),
    'content'                   => get_the_content( $vacancy_item_id ),
    'img'                       => get_the_post_thumbnail_url( $vacancy_item_id, 'full' ),
    'money_from'                => number_format( get_field( 'money_from', $vacancy_item_id ), 0, ',', ' '),
    'vacancy_project'           => get_field( 'vacancy_project', $vacancy_item_id ),
    'can_without_experience'    => get_field( 'can_without_experience', $vacancy_item_id ),
    'can_work_remotely'         => get_field( 'can_work_remotely', $vacancy_item_id ),
    'expectations'              => get_field( 'expectations', $vacancy_item_id ),
    'what_you_need_to_do'       => get_field( 'what_you_need_to_do', $vacancy_item_id ),
    'what_do_we_offer'          => get_field( 'what_do_we_offer', $vacancy_item_id ),
    'img_map'                   => get_field( 'img_map', $vacancy_item_id ),
    'map_full_adress'           => get_field( 'map_full_adress', $vacancy_item_id ),
    'related_vacancies'         => get_field( 'related_vacancies', $vacancy_item_id ),
    'news'                      => get_field( 'news', $vacancy_item_id ),
    'url'                       => get_post_permalink( $vacancy_item_id ),
);

$vaccat_names = '';
$vaccat_terms = get_the_terms( $vacancy_item_id, 'vaccat' );
if( is_array( $vaccat_terms ) ){
	foreach( $vaccat_terms as $vaccat_term ){
        $vaccat_names .= $vaccat_term->name;
        
        if( $k != count( $vaccat_terms ) ){
            $vaccat_names .= ', ';
        }
        $k++;
	}
}
$popup_info['vaccat'] = $vaccat_names;

$town_names = '';
$town_terms = get_the_terms( $towny_item_id, 'town' );
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

if( get_field( 'map_full_adress', $vacancy_item_id ) ){
    $popup_info['experience'] = 'не требуется';
} else{
    $popup_info['experience'] = 'требуется опыт';
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
            <a href="#" class="profession__crumb"><?php echo $vaccat_terms[0]->name; ?></a>
        </div>
        <a href="#" class="profession__more-info">Больше о направлении</a>
    </div>

    <div class="profession__job-price-container">
        <p class="profession__job-price">
            от
            <span class="profession__job-price-value"><?php echo number_format( get_field( 'money_from', $vacancy_item_id ), 0, ',', ' '); ?></span>
            <span class="profession__currency">&#8381;</span>
        </p>


        <?php
        if( get_field( 'can_without_experience', $vacancy_item_id ) ){
            ?>
            <p class="profession__job-expiriens">Можно без опыта</p>
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
        <a href="#" class="profession__location-map">На карте</a>
    </div>
</div>
