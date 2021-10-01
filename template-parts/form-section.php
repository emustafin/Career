<div class="form">
    <div class="form__side-bar"></div>
    <div class="form__content">
    <div class="form__container">
        <div class="form__header">
        <a href="#" class="form__link-back">Вернуться назад</a>
        </div>

        <div class="form__content-wrapper">
        <div class="form__content-left-bar">
            <h2 class="form__title">Хочу работать с вами!</h2>

            <p class="form__text-left-bar">Рады это слышать!</p>
            <p class="form__text-left-bar">
            Заполни анкету, и мы обязательно с тобой свяжемся!
            </p>
        </div>

        <?php
        $formdata = array();

        $args = array(
            'post_type'         => 'product_directions',
            'posts_per_page'    => -1,
        );
        
        $product_directions = new WP_Query( $args );

        $info_product_directions = '
        <div class="form__dropdown-list-item">
            <p class="form__dropdown-item-position">Любое</p>
            <div class="form__dropdown-item-checked">
            <img class="form__dropdown-item-checked-image" src="'.THEME_URL.'/assets/images/form/check.svg" alt="Check"></img>
            </div>
        </div>';

        if ( $product_directions->have_posts() ) {
            while ( $product_directions->have_posts() ) {
            $product_directions->the_post();

            $info_product_directions .= '
            <div class="form__dropdown-list-item">
                <p class="form__dropdown-item-position">'.get_the_title().'</p>
                <div class="form__dropdown-item-checked">
                <img class="form__dropdown-item-checked-image" src="'.THEME_URL.'/assets/images/form/check.svg" alt="Check"></img>
                </div>
            </div>';
            }
        }
        wp_reset_postdata();

        $info_vaccat = '';
        $terms = get_terms( 'vaccat' );
        if( $terms && ! is_wp_error($terms) ){
            foreach( $terms as $term ){
            $info_vaccat .= '
            <div class="form__dropdown-list-item">
                <p class="form__dropdown-item-position">'.$term->name.'</p>
                <div class="form__dropdown-item-checked">
                <img class="form__dropdown-item-checked-image" src="'.THEME_URL.'/assets/images/form/check.svg" alt="Check"></img>
                </div>
            </div>';
            }
        }

        $formdata = array(
            'info_product_directions' => $info_product_directions,
            'info_vaccat'             => $info_vaccat
        );
        ?>

        <div id="popup_form" class="form__content-right-bar-wrapper">
            <div class="form__content-right-bar form__content-right-bar-100">
            <?php echo do_shortcode('[contact-form-7 id="289" title="Анкета"]'); ?>
            <!-- Вставить разметку об успешной отправке -->
            <div class="form__response-block">
                <h2 class="form__response-title">
                Спасибо за отклик! Скоро ответим!
                </h2>
            </div>

            <div id="forminfo" data-formdata='<?php echo json_encode($formdata); ?>' ></div>
            </div>
        </div>

        </div>
    </div>
    </div>
</div>