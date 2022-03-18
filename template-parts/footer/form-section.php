<div class="form">
    <div class="form__side-bar"></div>
    <div class="form__content">
    <div class="form__container">
        <div class="form__header">
        <a href="#" class="form__link-back">
            Вернуться назад
            <svg
                width="14"
                height="10"
                viewBox="0 0 14 10"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M4.57661 0.575684L0.152344 4.99995L4.57661 9.42421L5.42514 8.57568L2.4494 5.59995H14.0009V4.39995H2.4494L5.42514 1.42421L4.57661 0.575684Z"
                  fill="black"
                />
              </svg>
        </a>
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

        $info_product_directions = array( 'Любое' );

        if ( $product_directions->have_posts() ) {
            while ( $product_directions->have_posts() ) {
            $product_directions->the_post();

            $title = get_the_title();
            $info_product_directions[] .= $title;
            }
        }
        wp_reset_postdata();

        $info_vaccat = array();
        $terms = get_terms( 'vaccat' );
        if( $terms && ! is_wp_error($terms) ){
            foreach( $terms as $term ){
                $info_vaccat[] .= $term->name;
            }
        }
        ?>

        <script>
            const cities = town_titles;
            var info_product_directions = '<?php echo json_encode( $info_product_directions ); ?>'; // Направление
            var info_vaccat = '<?php echo json_encode( $info_vaccat ); ?>'; // Специализация
        </script>
        <div id="popup_form" class="form__content-right-bar-wrapper">
            <div class="form__content-right-bar form__content-right-bar-100">

                <div id="hold_form">

                    <?php //echo do_shortcode('[contact-form-7 id="487" title="Анкета"]'); ?>
                    <?php include(THEME_DIR . '/template-parts/footer/hold_form.php'); ?>
                    <?php //include(THEME_DIR . '/template-parts/footer/old_form.php'); ?>
                    
                </div>

            </div>
        </div>

        </div>
    </div>
    </div>
</div>