<!-- Vacancy Intro-block -->
<div class="vacancy__intro">
    <div class="vacancy__video">
        <div class="vacancy__video-container loading" data-name="muted">
            <?php 
            if( 'roznica' == $current_relationship ){ 
                $data_src_video = THEME_URL.'/assets/images/flyout/flyout-intro/video/retail-video-preview.mp4';
            } elseif( 'it' == $current_relationship ){
                if( 'management' == $current_catgs ){
                    $data_src_video = THEME_URL.'/assets/images/flyout/flyout-intro/video/management-video-preview.mp4';
                } else{
                    $data_src_video = THEME_URL.'/assets/images/flyout/flyout-intro/video/revyachko-preview.mp4';
                }
            } 
            $src_video = THEME_URL.'/assets/images/Lazy-loading/1x1.png';
            ?>
            <video
                  class="vacancy__video-preview"
                  muted
                  autoplay
                  loop
                  data-src="<?php echo $data_src_video; ?>"
                  src="<?php echo $src_video; ?>" >
            </video>
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

    <?php if( 'roznica' == $current_relationship ){
        if( get_field('is_retail_vacancy', $post_id) ) {
            $mvideo_eldorado = get_field('mvideo-eldorado_eto');
        ?>

            <div class="vacancy__description-block">
                <div class="vacancy__description-title">
                    <p class="vacancy__description-title-text">
                        «М.Видео-Эльдорадо» — это
                    </p>
                    <div class="vacancy__advantages-slider-navigation-mobile">
                        <button class="vacancy__advantages-slider-prev">
                        <svg
                            width="14"
                            height="10"
                            viewBox="0 0 14 10"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                            d="M4.57661 0.576172L0.152344 5.00044L4.57661 9.4247L5.42514 8.57617L2.4494 5.60044H14.0009V4.40044H2.4494L5.42514 1.4247L4.57661 0.576172Z"
                            fill="black"
                            />
                        </svg>
                        </button>
                        <div class="vacancy__advantages-slider-counter">
                        <span class="vacancy__advantages-slider-current-slide"
                            >1</span
                        >/<span class="vacancy__advantages-slider-slides-all"
                            >3</span
                        >
                        </div>

                        <button class="vacancy__advantages-slider-next">
                        <svg
                            width="14"
                            height="10"
                            viewBox="0 0 14 10"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                            d="M11.5515 4.40044L8.57574 1.4247L9.42426 0.576172L13.8485 5.00044L9.42426 9.4247L8.57574 8.57617L11.5515 5.60044H0L0 4.40044H11.5515Z"
                            fill="black"
                            />
                        </svg>
                        </button>
                    </div>
                </div>
                <div class="vacancy__description-list">
                    <div class="vacancy__advantages-item-wrapper">
                        <div class="vacancy__advantages-item">
                            <h2 class="vacancy__advantages-item-title"><?php echo $mvideo_eldorado['mvideo_eldorado_title_1']; ?></h2>
                            <div class="vacancy__advantages-item-description">
                                <?php echo $mvideo_eldorado['mvideo_eldorado_content_1']; ?>
                            </div>
                            <div class="vacancy__advantages-item-image">
                                <svg
                                    width="56"
                                    height="56"
                                    viewBox="0 0 56 56"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                    >
                                    <path
                                        d="M50.8346 32.6673C50.8346 45.2778 40.6118 55.5006 28.0013 55.5006C15.3908 55.5006 5.16797 45.2778 5.16797 32.6673C5.16797 20.0568 15.3908 9.83398 28.0013 9.83398C40.6118 9.83398 50.8346 20.0568 50.8346 32.6673Z"
                                        stroke="#E31235"
                                        stroke-miterlimit="1.24264"
                                    />
                                </svg>
                            </div>
                        </div>

                        <div class="vacancy__advantages-item">
                            <h2 class="vacancy__advantages-item-title"><?php echo $mvideo_eldorado['mvideo_eldorado_title_2']; ?></h2>
                            <div class="vacancy__advantages-item-description">
                                <?php echo $mvideo_eldorado['mvideo_eldorado_content_2']; ?>
                            </div>
                            <div class="vacancy__advantages-item-image">
                                <svg
                                    width="56"
                                    height="56"
                                    viewBox="0 0 56 56"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                    >
                                    <path
                                        d="M32.1667 34.9993C32.1667 43.7439 25.0778 50.8327 16.3333 50.8327C7.58882 50.8327 0.5 43.7439 0.5 34.9993C0.5 26.2548 7.58882 19.166 16.3333 19.166C25.0778 19.166 32.1667 26.2548 32.1667 34.9993Z"
                                        stroke="#E31235"
                                    />
                                    <circle
                                        cx="39.6654"
                                        cy="34.9994"
                                        r="15.8333"
                                        stroke="#E31235"
                                    />
                                </svg>
                            </div>
                        </div>

                        <div class="vacancy__advantages-item">
                            <h2 class="vacancy__advantages-item-title"><?php echo $mvideo_eldorado['mvideo_eldorado_title_3']; ?></h2>
                            <div class="vacancy__advantages-item-description">
                                <?php echo $mvideo_eldorado['mvideo_eldorado_content_3']; ?>
                            </div>
                            <div class="vacancy__advantages-item-image">
                                <svg
                                    width="56"
                                    height="56"
                                    viewBox="0 0 56 56"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                    >
                                    <path
                                        d="M50.8346 24.7923C50.8346 33.0536 44.1376 39.7507 35.8763 39.7507C27.615 39.7507 20.918 33.0536 20.918 24.7923C20.918 16.5311 27.615 9.83398 35.8763 9.83398C44.1376 9.83398 50.8346 16.5311 50.8346 24.7923Z"
                                        stroke="#E31235"
                                    />
                                    <path
                                        d="M32.168 38.5C32.168 44.0228 27.6908 48.5 22.168 48.5C16.6451 48.5 12.168 44.0228 12.168 38.5C12.168 32.9772 16.6451 28.5 22.168 28.5C27.6908 28.5 32.168 32.9772 32.168 38.5Z"
                                        stroke="#E31235"
                                    />
                                    <path
                                        d="M19.918 48.125C19.918 52.1981 16.6161 55.5 12.543 55.5C8.46987 55.5 5.16797 52.1981 5.16797 48.125C5.16797 44.0519 8.46987 40.75 12.543 40.75C16.6161 40.75 19.918 44.0519 19.918 48.125Z"
                                        stroke="#E31235"
                                    />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        <?php 
        } 
    }
    ?>
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
        <?php 
        if( 'it' == $current_relationship ){
            echo do_shortcode('[contact-form-7 id="224" title="Popap Vacancy"]'); 
        } elseif( 'roznica' == $current_relationship ){
            echo do_shortcode('[contact-form-7 id="729" title="Popup vacancy V.Retail"]'); 
        }
        ?>
    </div>
</div>
<!-- //Vacancy Form-block -->

<!-- Vacancy Office-block -->
<!-- <div class="vacancy__office">
    <div class="vacancy__office-map">
        <div class="vacancy__office-map-selectors">
        <p class="vacancy__office-map-title">Офис на карте</p>
        <div class="vacancy__office-map-links-wrapper">
            <a href="" class="vacancy__office-map-link vacancy__office-map-link-active">БЦ «Новь»</a>
            <a href="" class="vacancy__office-map-link">БЦ «Вега»</a>
        </div>
        </div>

        <div class="vacancy__office-map-wrapper">
        <img
            class="vacancy__office-map-image"
            src="<?php echo $img_map; ?>"
            alt="Map"
        />

        <img
            class="vacancy__office-selector-image"
            src="<?php echo THEME_URL; ?>/assets/images/flyout/flyout-office/map-selector.svg"
            alt="Selector"
        />
        </div>
    </div>

    <div class="vacancy__office-content">
        <div class="vacancy__office-content-top">
        <div class="vacancy__office-adress">
            <p class="vacancy__office-adress-text">
                <?php echo $map_full_adress; ?>
            </p>
        </div>

        <a href="#" class="vacancy__office-content-link">
            Построить маршрут
        </a>
        </div>
        <div class="vacancy__office-content-bottom">
        <div class="vacancy__office-location-wrapper">
            <p class="vacancy__office-location vacancy__office-location-cokol">
                Красносельская
                <span class="vacancy__office-location-time">7</span>
                <span class="vacancy__office-location-minutes">мин</span>
            </p>
            <p
            class="
                vacancy__office-location vacancy__office-location-cokol
            "
            >
            Комсомольская
            <span class="vacancy__office-location-time">7</span>
            <span class="vacancy__office-location-minutes">мин</span>
            </p>
        </div>

        <div class="vacancy__office-location-wrapper">
            <p
            class="
                vacancy__office-location vacancy__office-location-arbat
            "
            >
            Бауманская
            <span class="vacancy__office-location-time">7</span>
            <span class="vacancy__office-location-minutes">мин</span>
            </p>
            <p
            class="
                vacancy__office-location vacancy__office-location-mck
            "
            >
            Каланчёвская
            <span class="vacancy__office-location-time">7</span>
            <span class="vacancy__office-location-minutes">мин</span>
            </p>
        </div>
        </div>
        <a href="#" class="vacancy__office-content-link-mobile">
        Построить маршрут
        </a>
    </div>
</div> -->
<!-- //Vacancy Office-block -->

<div id="flexible_schedule">
    <?php if( 'roznica' == $current_relationship ){ ?>
    
        <!-- Vacancy Office-block -->
        <!-- <div class="vacancy__office">
            <div class="vacancy__office-map">
            <div class="vacancy__office-map-selectors">
                <p class="vacancy__office-map-title">Эта вакансия на карте</p>
            </div>
    
            <div class="vacancy__office-map-wrapper">
                <img
                class="vacancy__office-map-image"
                src="<?php echo THEME_URL; ?>/assets/images/flyout/flyout-office/map.png"
                alt="Map"
                />
    
                <img
                class="vacancy__office-selector-image"
                src="<?php echo THEME_URL; ?>/assets/images/flyout/flyout-office/map-selector.svg"
                alt="Selector"
                />
            </div>
            </div>
    
            <div class="vacancy__office-content">
            <div class="vacancy__office-content-top">
                <div class="vacancy__office-adress">
                <p class="vacancy__office-adress-text">
                    ТРК «Европолис» <br />
                    г. Москва, пр. Мира, д. 211, корп. 1, этаж 2
                </p>
                </div>
    
                <a href="#" class="vacancy__office-content-link">
                Построить маршрут
    
                <svg
                    width="14"
                    height="10"
                    viewBox="0 0 14 10"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                    d="M11.5515 4.40001L8.57574 1.42427L9.42426 0.575745L13.8485 5.00001L9.42426 9.42427L8.57574 8.57574L11.5515 5.60001H0L0 4.40001H11.5515Z"
                    fill="black"
                    />
                </svg>
                </a>
            </div>
            <div class="vacancy__office-content-bottom">
                <div class="vacancy__office-location-wrapper">
                <p
                    class="
                    vacancy__office-location vacancy__office-location-cokol
                    "
                >
                    Красносельская
                    <span class="vacancy__office-location-time">7</span>
                    <span class="vacancy__office-location-minutes">мин</span>
                </p>
                <p
                    class="
                    vacancy__office-location vacancy__office-location-cokol
                    "
                >
                    Комсомольская
                    <span class="vacancy__office-location-time">7</span>
                    <span class="vacancy__office-location-minutes">мин</span>
                </p>
                </div>
    
                <div class="vacancy__office-location-wrapper">
                <p
                    class="
                    vacancy__office-location vacancy__office-location-arbat
                    "
                >
                    Бауманская
                    <span class="vacancy__office-location-time">7</span>
                    <span class="vacancy__office-location-minutes">мин</span>
                </p>
                <p
                    class="
                    vacancy__office-location vacancy__office-location-mck
                    "
                >
                    Каланчёвская
                    <span class="vacancy__office-location-time">7</span>
                    <span class="vacancy__office-location-minutes">мин</span>
                </p>
                </div>
            </div>
            <a href="#" class="vacancy__office-content-link-mobile">
                Построить маршрут
    
                <svg
                width="14"
                height="10"
                viewBox="0 0 14 10"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                >
                <path
                    d="M11.5515 4.40001L8.57574 1.42427L9.42426 0.575745L13.8485 5.00001L9.42426 9.42427L8.57574 8.57574L11.5515 5.60001H0L0 4.40001H11.5515Z"
                    fill="black"
                />
                </svg>
            </a>
            </div>
        </div> -->
        <!-- //Vacancy Office-block -->
    
        <?php if( get_field('flexible_schedule', $post_id) ){ ?>
            <!-- Vacancy Remote-block -->
            <div class="vacancy__remote">
                <div class="vacancy__remote-title-wrapper">
                <h2 class="vacancy__remote-title">
                    Выбери собственный график работы
                </h2>
                <p class="vacancy__remote-info">
                    На этой позиции можно работать стандартным графиком 5/2, а можно
                    и 2/2. Всё для твоего развития!
                </p>
                </div>
                <div class="vacancy__remote-image-container">
                <svg
                    class="vacancy__remote-image"
                    width="155"
                    height="142"
                    viewBox="0 0 155 142"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                    d="M74.0531 14.6324L72.6422 22.634L74.5626 22.9726L75.9735 14.971L74.0531 14.6324Z"
                    fill="#76BC21"
                    />
                    <path
                    d="M71.8537 38.3356L69.9333 37.997L64.6848 67.7628L83.8885 71.1489L84.2271 69.2285L66.9438 66.181L71.8537 38.3356Z"
                    fill="#76BC21"
                    />
                    <path
                    d="M23.0767 60.4261L15.0751 59.0153L15.4137 57.0949L23.4153 58.5058L23.0767 60.4261Z"
                    fill="#76BC21"
                    />
                    <path
                    d="M109.494 75.6638L117.495 77.0747L117.834 75.1543L109.832 73.7434L109.494 75.6638Z"
                    fill="#76BC21"
                    />
                    <path
                    d="M55.9937 117.052L57.4046 109.051L59.325 109.389L57.9141 117.391L55.9937 117.052Z"
                    fill="#76BC21"
                    />
                    <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M1.65006 54.6683C-4.25668 88.167 16.2321 120.215 48.1757 129.474C58.2225 137.233 70.8221 141.85 84.4973 141.85C109.556 141.85 130.996 126.352 139.754 104.418C148.745 96.1057 154.375 84.2102 154.375 70.9997C154.375 49.5545 139.539 31.5746 119.57 26.7638C109.871 13.7119 95.3574 4.19862 78.0792 1.15201C42.1958 -5.17521 7.97727 18.7848 1.65006 54.6683ZM3.57043 55.0069C9.71064 20.184 42.9177 -3.06782 77.7406 3.07239C100.481 7.08217 118.287 22.6348 126.196 42.6424L126.194 42.6433C130.396 53.2726 131.804 65.1589 129.673 77.2427C124.682 105.548 101.808 126.208 74.7195 129.653C73.6897 129.784 72.6539 129.89 71.6127 129.97C66.3476 130.378 60.946 130.136 55.5049 129.177C20.6821 123.037 -2.56977 89.8297 3.57043 55.0069ZM131.595 77.5811C126.43 106.877 102.674 128.225 74.5996 131.633C73.6593 131.747 72.7141 131.842 71.7647 131.915C66.3386 132.335 60.7718 132.086 55.1644 131.098C54.5606 130.991 53.9602 130.877 53.3633 130.755C62.3371 136.542 73.024 139.9 84.4973 139.9C116.267 139.9 142.022 114.145 142.022 82.3747C142.022 68.9557 137.429 56.6114 129.727 46.826C132.687 56.4779 133.469 66.9565 131.595 77.5811ZM143.972 82.3747C143.972 88.5413 143.034 94.4888 141.292 100.082C148.214 92.3713 152.425 82.1773 152.425 70.9997C152.425 51.2784 139.316 34.6187 121.337 29.2588C123.97 33.1668 126.189 37.3565 127.943 41.7569C137.885 52.3867 143.972 66.6708 143.972 82.3747Z"
                    fill="#76BC21"
                    />
                </svg>
                </div>
            </div>
            <!-- //Vacancy Remote-block -->
        <?php } ?>
    
    <?php } ?>
</div>