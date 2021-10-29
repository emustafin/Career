<!-- Vacancy Intro-block -->
<div class="vacancy__intro">
    <div class="vacancy__video">
        <div class="vacancy__video-container loading" data-name="muted">
            <video
                class="vacancy__video-preview"
                muted
                data-src="<?php echo THEME_URL; ?>/assets/images/flyout/flyout-intro/video/revyachko-preview.mp4"
                src="<?php echo THEME_URL; ?>/assets/images/Lazy-loading/1x1.png"
                autoplay
                loop
            ></video>
            <svg class="vacancy__progress-container" viewBox="0 0 280 280">
            <circle
                class="vacancy__progress-bar"
                stroke="#E31235"
                stroke-width="2"
                cx="140"
                cy="140"
                r="139"
                fill="transparent"
            ></circle>
            </svg>

            <div class="vacancy__video-sound">
            <svg
                class="vacancy__video-sound-muted"
                width="18"
                height="18"
                viewBox="0 0 18 18"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                d="M5.67721 10.2L3.87721 12H1.49902V6H4.90794L10.499 0V5.37819L8.69902 7.17819V4.57196L5.69098 7.8H3.29902V10.2H5.67721Z"
                fill="white"
                />
                <path
                d="M10.499 9.62083L8.69902 11.4208V13.428L7.73083 12.389L6.45724 13.6626L10.499 18V9.62083Z"
                fill="white"
                />
                <path
                d="M15.8633 0.863525L0.863281 15.8635L2.13607 17.1363L17.1361 2.13632L15.8633 0.863525Z"
                fill="white"
                />
            </svg>

            <svg
                class="vacancy__video-sound-loud hide"
                width="16"
                height="18"
                viewBox="0 0 16 18"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M3.90891 12L9.5 18V0L3.90891 6H0.5V12H3.90891ZM2.3 10.2H4.69196L7.7 13.428V4.57196L4.69196 7.8H2.3V10.2ZM13.8507 8.99992C13.8507 7.16006 12.6276 5.89965 11.8643 5.13632L13.137 3.86353L13.1672 3.8937C13.9211 4.64702 15.6507 6.37546 15.6507 8.99992C15.6507 11.6244 13.9211 13.3528 13.1672 14.1061L13.137 14.1363L11.8643 12.8635C12.6276 12.1002 13.8507 10.8398 13.8507 8.99992ZM12.1137 9C12.1137 9.40043 11.8284 10.125 11 10.125V7.875C11.8284 7.875 12.1137 8.59957 12.1137 9Z"
                fill="white"
                />
            </svg>
            </div>

            <!-- <img src="<?php echo $img; ?>" alt=""> -->
        </div>
    </div>
    <div class="vacancy__intro-description">
        <?php echo $content; ?>
    </div>
</div>
<!-- //Vacancy Intro-block -->

<!-- Vacancy Description-block -->
<div id="expectations" class="vacancy__description">

    <?php
    if( have_rows('vacancy_repeater', $post_id ) ):

        while( have_rows('vacancy_repeater', $post_id ) ) : the_row();

            ?>
            <div class="vacancy__description-block">
                <div class="vacancy__description-title">
                <p class="vacancy__description-title-text"><?php echo get_sub_field('item_title'); ?></p>
                </div>
                <div class="vacancy__description-list">
                <?php echo get_sub_field('item_contect'); ?>
                </div>
            </div>
            <?php
        endwhile;
    endif;
    ?>

</div>
<!-- //Vacancy Description-block -->

<div id="can_work_remotely">

    <?php
    if( get_field( 'can_work_remotely', $post_id ) ){
        ?>
        <!-- Vacancy Remote-block -->
        <div class="vacancy__remote">
            <div class="vacancy__remote-title-wrapper">
                <h2 class="vacancy__remote-title">Работай откуда угодно</h2>
                <p class="vacancy__remote-info">
                На этой позиции можно работать удалённо и не ходить в офис.
                Нужно иметь разрешение на работу в России.
                </p>
            </div>
            <div class="vacancy__remote-image-container">
                <img
                class="vacancy__remote-image"
                src="<?php echo THEME_URL; ?>/assets/images/flyout/flyout-remote/palm.svg"
                alt="Picture"
                />
            </div>
        </div>
        <!-- //Vacancy Remote-block -->
        <?php
    }
    ?>
</div>

<!-- Vacancy Form-block -->
<div class="vacancy__form">
    <div class="vacancy__form-title-block">
        <h2 class="vacancy__form-title">Расскажи нам о себе</h2>
    </div>
    <div class="vacancy__form-inner-block">
        <?php echo do_shortcode('[contact-form-7 id="224" title="Popap Vacancy"]'); ?>
    </div>
</div>
<!-- //Vacancy Form-block -->