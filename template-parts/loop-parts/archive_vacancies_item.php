<?php
$experience = 'Опыт не требуется';
if( get_field( 'can_without_experience', $vacancy_item_id ) ) $experience = get_field( 'can_without_experience', $vacancy_item_id )['label'];

// TODO надо будет посмотреть и переделать
$k = 1;
$vaccat_terms = get_the_terms( $vacancy_item_id, 'vaccat' );
if( is_array( $vaccat_terms ) ){
    foreach( $vaccat_terms as $vaccat_term ){
        $first_vaccat = $vaccat_term;
        break;
    }
}
?>
<div class="position__card-item">
    
    <a href="<?php echo get_the_permalink($vacancy_item_id); ?>" class="position__info-link">
        Посмотреть вакансию
        <svg class="position__link-arrow-black" width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9.4136 3.55001L7.1818 1.3182L7.8182 0.681808L11.1364 4.00001L7.8182 7.3182L7.1818 6.68181L9.4136 4.45001H0.75V3.55001H9.4136Z" fill="rgba(0, 0, 0, 1)"/>
        </svg>
    </a>

    <div class="position__job-title-container">
        <a href="<?php echo get_the_permalink($vacancy_item_id); ?>" class="position__job-title"><?php echo get_the_title($vacancy_item_id); ?></a>
        <div class="position__bread-crumbs-container-mobile">
            <a href="#" class="position__link">
                IT-департамент
                <svg class="position__link-arrow" width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg" >
                    <path d="M9.4136 3.55001L7.1818 1.3182L7.8182 0.681808L11.1364 4.00001L7.8182 7.3182L7.1818 6.68181L9.4136 4.45001H0.75V3.55001H9.4136Z" fill="rgba(0, 0, 0, 0.5)"/>
                </svg>
            </a>
            <a href="<?php echo get_term_link( $first_vaccat->term_id, 'vaccat'); ?>" class="position__link">
                <?php echo $first_vaccat->name; ?>
                <svg class="position__link-arrow" width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg" >
                    <path d="M9.4136 3.55001L7.1818 1.3182L7.8182 0.681808L11.1364 4.00001L7.8182 7.3182L7.1818 6.68181L9.4136 4.45001H0.75V3.55001H9.4136Z" fill="rgba(0, 0, 0, 0.5)"/>
                </svg>
            </a>
        </div>
    </div>

    <div class="position__bread-crumbs-block">
        <div class="position__bread-crumbs-container">
            <a href="#" class="position__link">
                IT-департамент
                <svg class="position__link-arrow" width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg" >
                    <path d="M9.4136 3.55001L7.1818 1.3182L7.8182 0.681808L11.1364 4.00001L7.8182 7.3182L7.1818 6.68181L9.4136 4.45001H0.75V3.55001H9.4136Z" fill="rgba(0, 0, 0, 0.5)" />
                </svg>
            </a>
            <a href="<?php echo get_term_link( $first_vaccat->term_id, 'vaccat'); ?>" class="position__link">
                <?php echo $first_vaccat->name; ?>
                <svg class="position__link-arrow" width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg" >
                    <path d="M9.4136 3.55001L7.1818 1.3182L7.8182 0.681808L11.1364 4.00001L7.8182 7.3182L7.1818 6.68181L9.4136 4.45001H0.75V3.55001H9.4136Z" fill="rgba(0, 0, 0, 0.5)"/>
                </svg>
            </a>
        </div>
    </div>

    <div class="position__payment-container">
        <p class="position__payment">
        от
        <span class="position__payment-value"><?php echo number_format( get_field( 'money_from', $vacancy_item_id ), 0, ',', ' '); ?></span>
        <span class="position__currency">&#8381;</span>
        <?php if( !get_field( 'not_gross', $vacancy_item_id) ): ?>
            <span> - Гросс</span>
        <?php endif; ?>
        </p>

        <p class="position__job-expiriens"><?php echo $experience; ?></p>
    </div>

    <div class="position__location-container">
        <?php $cur_terms = get_the_terms( $vacancy_item_id, 'town' );
        if( is_array( $cur_terms ) ):
            foreach( $cur_terms as $cur_term ):
            ?>
                <p class="position__location-city"><?php echo $cur_term->name; ?></p>
            <?php
            endforeach;

            if( true == get_field( 'check_metro', $vacancy_item_id ) ) echo get_field( 'metro_name', $vacancy_item_id );
        endif;
        
        if( get_field( 'can_work_remotely', $vacancy_item_id ) ): ?>
            <p class="position__location">Можно удаленно</p>
        <?php endif; ?>
    </div>
</div>