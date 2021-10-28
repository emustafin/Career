<?php
$vaccat_terms = get_the_terms( $vacancy_item_id, 'vaccat' );
if( is_array( $vaccat_terms ) ){
	foreach( $vaccat_terms as $vaccat_term ){
        $first_vaccat = $vaccat_term;
        break;
	}
}
?>
<div class="profession__job-item" data-vacancy_id="<?php echo $vacancy_item_id; ?>">
    <div class="profession__job-title-container">
        <div class="profession__job-title" data-vacancy_id="<?php echo $vacancy_item_id; ?>" >
            <?php echo get_the_title($vacancy_item_id); ?>
        </div>

        <div class="profession__bread-crumbs">
            <a href="#" class="profession__crumb">
                IT-департамент
                <svg
                        width="12"
                        height="8"
                        viewBox="0 0 12 8"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M9.4136 3.55008L7.1818 1.31828L7.8182 0.681885L11.1364 4.00008L7.8182 7.31828L7.1818 6.68189L9.4136 4.45008H0.75V3.55008H9.4136Z"
                          fill="rgba(0, 0, 0, 0.5)"
                        />
                    </svg>

            </a>
            <a href="<?php echo get_term_link( $first_vaccat->term_id, 'vaccat'); ?>" class="profession__crumb">
                <?php echo $first_vaccat->name; ?>
                    <!-- <svg
                        width="12"
                        height="8"
                        viewBox="0 0 12 8"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M9.4136 3.55008L7.1818 1.31828L7.8182 0.681885L11.1364 4.00008L7.8182 7.31828L7.1818 6.68189L9.4136 4.45008H0.75V3.55008H9.4136Z"
                          fill="rgba(0, 0, 0, 0.5)"
                        />
                    </svg> -->
            </a>
        </div>
    </div>
    <a href="#" class="profession__more-info">
    Посмотреть вакансию
    
                <svg
                  width="14"
                  height="10"
                  viewBox="0 0 14 10"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M11.5515 4.39995L8.57574 1.42421L9.42426 0.575684L13.8485 4.99995L9.42426 9.42421L8.57574 8.57568L11.5515 5.59995H0V4.39995H11.5515Z"
                    fill="black"
                  />
                </svg>
    </a>
    
    <div class="profession__job-price-container">
        <p class="profession__job-price">
            от
            <span class="profession__job-price-value"><?php echo number_format( get_field( 'money_from', $vacancy_item_id ), 0, ',', ' '); ?></span>
            <span class="profession__currency">&#8381;</span>
            <?php if( !get_field( 'not_gross', $vacancy_item_id) ): ?>
                <span> - Гросс</span>
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
        <!-- <a href="#" class="profession__location-map">
            На карте
        
            <svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.5515 4.39995L8.57574 1.42421L9.42426 0.575684L13.8485 4.99995L9.42426 9.42421L8.57574 8.57568L11.5515 5.59995H0V4.39995H11.5515Z" fill="black"/>
            </svg>
        </a> -->
    </div>
</div>
