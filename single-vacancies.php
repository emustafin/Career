<?php
/**
 *
 * @package Career\Template
 */


get_header();
the_post();
$post_id = get_the_ID();
$title = get_the_title( $post_id );
$content = get_the_content( $post_id );
$img = get_the_post_thumbnail_url( $post_id, 'full' );
$money_from = number_format( get_field( 'money_from', $post_id ), 0, ',', ' ');
$vacancy_project = get_field( 'vacancy_project', $post_id );
$can_without_experience = get_field( 'can_without_experience', $post_id )['label'];
$can_work_remotely = get_field( 'can_work_remotely', $post_id );
$img_map = get_field( 'img_map', $post_id );
$map_full_adress = get_field( 'map_full_adress', $post_id );
$related_vacancies = get_field( 'related_vacancies', $post_id );
$news = get_field( 'news', $post_id );
$url = get_post_permalink( $post_id );

$k = 1;
$vaccat_names = '';
$vaccat_terms = get_the_terms( $post_id, 'vaccat' );
if( is_array( $vaccat_terms ) ){
	foreach( $vaccat_terms as $vaccat_term ){
        $vaccat_names .= $vaccat_term->name;
        
        if( $k != count( $vaccat_terms ) ){
            $vaccat_names .= ', ';
        }
        $k++;
	}
}

$k = 1;
$town_names = '';
$town_terms = get_the_terms( $post_id, 'town' );
if( is_array( $town_terms ) ){
	foreach( $town_terms as $town_term ){
        $town_names .= $town_term->name;
        
        if( $k != count( $town_terms ) ){
            $town_names .= ', ';
        }
        $k++;
	}
}

if( get_field( 'can_without_experience', $post_id ) ){
    $experience = get_field( 'can_without_experience', $post_id )['label'];
} else{
    $experience = get_field( 'can_without_experience', $post_id )['label'];
}

?>

<div class="direct-link__container">
    <div class="direct-link__content-wrapper">
    <div class="direct-link__side-bar">
        <a href="#" class="direct-link__header-head-copy">
        Скопировать ссылку
              <svg
                width="14"
                height="10"
                viewBox="0 0 14 10"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M5.88332 3.8842C4.88525 4.88228 4.88525 6.50048 5.88332 7.49856C6.8814 8.49663 8.4996 8.49663 9.49768 7.49856L12.2635 4.73273C13.2616 3.73465 13.2616 2.11645 12.2635 1.11837C11.2654 0.120293 9.64723 0.120293 8.64915 1.11837C8.41484 1.35268 8.41484 1.73258 8.64915 1.9669C8.88347 2.20121 9.26337 2.20121 9.49768 1.9669C10.0271 1.43745 10.8855 1.43745 11.415 1.9669C11.9444 2.49635 11.9444 3.35475 11.415 3.8842L8.64915 6.65003C8.1197 7.17948 7.2613 7.17948 6.73185 6.65003C6.2024 6.12058 6.2024 5.26218 6.73185 4.73273C6.96617 4.49841 6.96617 4.11851 6.73185 3.8842C6.49754 3.64988 6.11764 3.64988 5.88332 3.8842Z"
                  fill="black"
                />
                <path
                  d="M1.73293 5.26726C0.734856 6.26533 0.734856 7.88354 1.73293 8.88161C2.73101 9.87969 4.34921 9.87969 5.34729 8.88161C5.5816 8.6473 5.5816 8.2674 5.34729 8.03309C5.11298 7.79877 4.73308 7.79877 4.49876 8.03309C3.96931 8.56253 3.11091 8.56253 2.58146 8.03309C2.05201 7.50364 2.05201 6.64523 2.58146 6.11578L5.34729 3.34995C5.87674 2.82051 6.73514 2.82051 7.26459 3.34995C7.79404 3.8794 7.79404 4.73781 7.26459 5.26726C7.03028 5.50157 7.03028 5.88147 7.26459 6.11578C7.49891 6.3501 7.8788 6.3501 8.11312 6.11578C9.1112 5.11771 9.1112 3.4995 8.11312 2.50143C7.11504 1.50335 5.49684 1.50335 4.49876 2.50143L1.73293 5.26726Z"
                  fill="black"
                />
              </svg>

        </a>

        <div class="direct-link__vacancy-description-block">
        <div class="direct-link__vacancy-container">
            <div class="direct-link__vacancy-item">
            <p class="direct-link__vacancy-title">Город</p>
            <p class="direct-link__vacancy-argument">
                <?php echo $town_names; ?>
            </p>
            </div>

            <div class="direct-link__vacancy-item">
            <p class="direct-link__vacancy-title">Подразделение</p>
            <p class="direct-link__vacancy-argument">
                <?php echo $vaccat_names; ?>
            </p>
            </div>

            <div class="direct-link__vacancy-item">
            <p class="direct-link__vacancy-title">Заработная плата</p>
            <p class="direct-link__vacancy-argument">
                <span>от</span>
                <span class="direct-link__vacancy-price"><?php echo $money_from; ?></span>
                <span>₽</span>
                <?php if( !get_field( 'not_gross', $post_id) ): ?>
                    <span> - Гросс</span>
                <?php endif; ?>
            </p>
            </div>

            <div class="direct-link__vacancy-item">
            <p class="direct-link__vacancy-title">Опыт</p>
            <p class="direct-link__vacancy-argument"><?php echo $experience; ?></p>
            </div>
        </div>
        <a href="#" class="direct-link__vacancy-link">
            откликнуться
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
    </div>

    <div class="direct-link__content">
        <div class="direct-link__header-headline">
        <h2 class="direct-link__headline-title">
            <?php the_title(); ?>
        </h2>
        <a href="#" class="direct-link__headline-link">
            откликнуться
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

        <div class="direct-link__vacancy-description-block-mobile">
        <div class="direct-link__vacancy-container">
            <div class="direct-link__vacancy-item">
            <p class="direct-link__vacancy-title">Город</p>
            <p class="direct-link__vacancy-argument">
                <?php echo $town_names; ?>
            </p>
            </div>

            <div class="direct-link__vacancy-item">
            <p class="direct-link__vacancy-title">Подразделение</p>
            <p class="direct-link__vacancy-argument">
                <?php echo $vaccat_names; ?>
            </p>
            </div>

            <div class="direct-link__vacancy-item">
            <p class="direct-link__vacancy-title">Заработная плата</p>
            <p class="direct-link__vacancy-argument">
                <span>от</span>
                <span class="direct-link__vacancy-price"><?php echo $money_from; ?></span>
                <span>₽</span>
                <?php if( !get_field( 'not_gross', $post_id) ): ?>
                    <span> - Гросс</span>
                <?php endif; ?>
            </p>
            </div>

            <div class="direct-link__vacancy-item">
            <p class="direct-link__vacancy-title">Опыт</p>
            <p class="direct-link__vacancy-argument"><?php echo $experience; ?></p>
            </div>
        </div>
        <a href="#" class="direct-link__header-head-copy">
            Скопировать ссылку
              <svg
                width="14"
                height="10"
                viewBox="0 0 14 10"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M5.88332 3.8842C4.88525 4.88228 4.88525 6.50048 5.88332 7.49856C6.8814 8.49663 8.4996 8.49663 9.49768 7.49856L12.2635 4.73273C13.2616 3.73465 13.2616 2.11645 12.2635 1.11837C11.2654 0.120293 9.64723 0.120293 8.64915 1.11837C8.41484 1.35268 8.41484 1.73258 8.64915 1.9669C8.88347 2.20121 9.26337 2.20121 9.49768 1.9669C10.0271 1.43745 10.8855 1.43745 11.415 1.9669C11.9444 2.49635 11.9444 3.35475 11.415 3.8842L8.64915 6.65003C8.1197 7.17948 7.2613 7.17948 6.73185 6.65003C6.2024 6.12058 6.2024 5.26218 6.73185 4.73273C6.96617 4.49841 6.96617 4.11851 6.73185 3.8842C6.49754 3.64988 6.11764 3.64988 5.88332 3.8842Z"
                  fill="black"
                />
                <path
                  d="M1.73293 5.26726C0.734856 6.26533 0.734856 7.88354 1.73293 8.88161C2.73101 9.87969 4.34921 9.87969 5.34729 8.88161C5.5816 8.6473 5.5816 8.2674 5.34729 8.03309C5.11298 7.79877 4.73308 7.79877 4.49876 8.03309C3.96931 8.56253 3.11091 8.56253 2.58146 8.03309C2.05201 7.50364 2.05201 6.64523 2.58146 6.11578L5.34729 3.34995C5.87674 2.82051 6.73514 2.82051 7.26459 3.34995C7.79404 3.8794 7.79404 4.73781 7.26459 5.26726C7.03028 5.50157 7.03028 5.88147 7.26459 6.11578C7.49891 6.3501 7.8788 6.3501 8.11312 6.11578C9.1112 5.11771 9.1112 3.4995 8.11312 2.50143C7.11504 1.50335 5.49684 1.50335 4.49876 2.50143L1.73293 5.26726Z"
                  fill="black"
                />
              </svg>

        </a>
        </div>

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
        <div class="vacancy__description">

            <?php
            if( have_rows('vacancy_repeater') ):

                while( have_rows('vacancy_repeater') ) : the_row();

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
                    <svg
                        class="vacancy__remote-image"
                        width="128"
                        height="144"
                        viewBox="0 0 128 144"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                        d="M61.7063 59.0752C47.375 72.8418 21.9244 106.33 21.9244 143.589M21.3733 2.30084C24.1468 2.30084 25.2939 4.32359 27.0608 6.84128C28.7351 4.32359 29.8821 2.30084 32.7483 2.30084M0.0585938 8.91183C2.83215 8.91183 3.9792 10.9346 5.74609 13.4523C7.42038 10.9346 8.56744 8.91183 11.4336 8.91183M60.3733 59.1757C64.2727 49.6472 73.7169 42.9257 84.7483 42.9257C93.7829 42.9257 101.753 47.4341 106.484 54.3007C107.53 55.8182 108.417 57.451 109.123 59.1757H60.3733ZM60.3733 59.1757C60.8112 58.1056 61.3187 57.071 61.8908 56.0773M60.3733 59.1757H16.4983C20.3977 49.6472 29.8419 42.9257 40.8733 42.9257C44.2953 42.9257 47.5645 43.5725 50.5629 44.7492L61.8908 56.0773M63.2085 59.1757H62.1969L66.2996 106.096C67.9562 105.243 69.5055 104.217 70.9262 103.043C77.3544 97.7312 81.1516 89.3987 80.3646 80.3984C80.2143 78.6802 79.9038 77.0149 79.4492 75.4164L63.2085 59.1757ZM63.2085 59.1757H84.2946C86.7653 60.4167 89.0847 62.07 91.1498 64.135C97.5382 70.5235 99.9859 79.3471 98.4761 87.548C98.1425 89.3605 97.6155 91.1426 96.895 92.8612L63.2085 59.1757ZM61.8908 56.0773C63.103 53.972 64.6039 52.0505 66.3402 50.3655C66.8558 43.0324 64.2873 35.4929 58.6464 29.8519C50.8461 22.0516 39.4151 20.1264 29.9202 24.1067L61.8908 56.0773ZM127.382 13.2937C127.382 20.2622 121.733 25.9113 114.764 25.9113C107.796 25.9113 102.147 20.2622 102.147 13.2937C102.147 6.32514 107.796 0.676025 114.764 0.676025C121.733 0.676025 127.382 6.32514 127.382 13.2937Z"
                        stroke="#76BC21"
                        stroke-width="1.2"
                        />
                    </svg>
                </div>
            </div>
            <!-- //Vacancy Remote-block -->
            <?php
        }
        ?>

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

        <?php
        if( '' != get_field('related_vacancies') ){
            ?>
            <!-- Vacancy Positions-block -->
            <div class="vacancy__positions">
                <p class="vacancy__positions-title">Похожие вакансии</p>

                <div class="vacancy__positions-wrapper">

                    <?php
                    foreach (get_field('related_vacancies') as $post_id) {

                        $k = 1;
                        $vaccat_names = '';
                        $vaccat_terms = get_the_terms( $post_id, 'vaccat' );
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

                        $k = 1;
                        $town_names = '';
                        $town_terms = get_the_terms( $post_id, 'town' );
                        if( is_array( $town_terms ) ){
                            foreach( $town_terms as $town_term ){
                                $town_names .= $town_term->name;
                                
                                if( $k != count( $town_terms ) ){
                                    $town_names .= ', ';
                                }
                                $k++;
                            }
                        }

                        if( get_field( 'can_without_experience', $post_id ) ){
                            $experience = get_field( 'can_without_experience', $post_id )['label'];
                        } else{
                            $experience = get_field( 'can_without_experience', $post_id )['label'];
                        }
                        ?>
                        <div class="vacancy__positions-item">
                            <div class="vacancy__item-positions-name-block">
                                <a href="<?php the_permalink($post_id); ?>" class="vacancy__item-positions-name">
                                    <?php echo get_the_title($post_id); ?>
                                </a>
                                <div class="vacancy__bread-crumbs-block">
                                <a href="<?php echo get_permalink( $first_vaccat->term_id ); ?>" class="vacancy__bread-crumbs-item">IT-хаб</a>
                                    <span class="vacancy__bread-crumbs-item"><?php echo $first_vaccat->name; ?></span>
                                </div>
                            </div>

                            <div class="vacancy__item-positions-price-block">
                                <p class="vacancy__item-positions-price">
                                от
                                <span class="vacancy__item-positions-price-value">
                                    <?php echo get_field( 'money_from', $post_id ); ?>
                                </span>
                                <span class="vacancy__item-positions-currency">₽</span>
                                <?php if( !get_field( 'not_gross', $post_id) ): ?>
                                    <span> - Гросс</span>
                                <?php endif; ?>
                                </p>
                                <p class="vacancy__item-positions-experience">
                                    <?php echo $experience; ?>
                                </p>
                            </div>

                            <div class="vacancy__item-positions-location-block">
                                <p class="vacancy__item-positions-city"><?php echo $town_names; ?></p>
                                <?php
                                if( get_field( 'can_work_remotely', $post_id ) ){
                                    ?>
                                    <p class="vacancy__item-positions-location">Можно удалённо</p>
                                    <?php
                                    }
                                ?>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <!-- //Vacancy Positions-block -->
            <?php
        }
        ?>
    </div>
    </div>
</div>

<!-- Vacancy News-block -->
<div class="vacancy__news-block-desktop">
    <div class="vacancy__news swiper newsSliderDirectLink">
        <div class="vacancy__news-title">
            <div class="vacancy__news-tabs">
            <a href="#" class="vacancy__news-link vacancy__news-link-active">
                Новости
            </a>
            <!-- <a href="#" class="vacancy__news-link">События</a> -->
            </div>
            <div class="vacancy__news-arrows">
            <button class="vacancy__news-btn-prev">
                 <svg
                    width="14"
                    height="10"
                    viewBox="0 0 14 10"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M4.57661 0.575745L0.152344 5.00001L4.57661 9.42427L5.42514 8.57574L2.4494 5.60001H14.0009V4.40001H2.4494L5.42514 1.42427L4.57661 0.575745Z"
                      fill="black"
                    />
                  </svg>

            </button>
            <button class="vacancy__news-btn-next">
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

            </button>
            </div>
            <a href="#" class="vacancy__news-link-mobile"> Все новости </a>
        </div>

        <div class="vacancy__news-row swiper-wrapper">
            <?php
            $args = array(
                'post_type'         => 'post',
                'posts_per_page'    => 6,
                'post_status'       => 'publish',
                'order'             => 'DESC',
                'order_by'          => 'date'
            );

            $actually_news = new WP_Query( $args );

            if ( $actually_news->have_posts() ) {
                while ( $actually_news->have_posts() ) {
                $actually_news->the_post();
                $news_item_id = get_the_ID();

                $thumbnail_url = get_the_post_thumbnail_url( $news_item_id, 'full' );
                if( false == $thumbnail_url ){
                    $thumbnail_url = THEME_URL .'/assets/images/default/post-image-default.jpg';
                }

                if( null != get_field( 'url_from_habr' ) ){
                    $url_from_habr = get_field( 'url_from_habr' );
                } else{
                    $url_from_habr = get_habr_url( $news_item_id );
                }
                ?>


                <a href="<?php echo $url_from_habr; ?>" target="_blank" class="vacancy__news-item swiper-slide">
                    <div class="vacancy__news-item-image-block loading">
                        <img
                        class="vacancy__news-image"
                        data-src="<?php echo $thumbnail_url; ?>"
                        src="<?php echo THEME_URL; ?>/assets/images/Lazy-loading/1x1.png"
                        alt="News"
                        title="Новости"
                        />
                    </div>

                    <div class="vacancy__news-title-info">
                        <?php the_title(); ?>
                    </div>
                    <p class="vacancy__news-date-container">
                        <span class="vacancy__news-date"><?php echo get_the_date( 'j F Y', $news_item_id ); ?></span>
                    </p>
                </a>


                <?php
                }
            }
            ?>

        </div>
    </div>
</div>
<!-- //Vacancy News-block -->

<!-- Vacancy New-block-mobile -->
<div class="vacancy__news-block-mobile">
    <div class="vacancy__news">
        <div class="vacancy__news-title">
            <div class="vacancy__news-tabs">
            <a href="#" class="vacancy__news-link vacancy__news-link-active"
                >Новости</a
            >
            <a href="#" class="vacancy__news-link">События</a>
            </div>
            <div class="vacancy__news-arrows">
            <button class="vacancy__news-btn-prev">
                  <svg
                    width="14"
                    height="10"
                    viewBox="0 0 14 10"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M4.57661 0.575745L0.152344 5.00001L4.57661 9.42427L5.42514 8.57574L2.4494 5.60001H14.0009V4.40001H2.4494L5.42514 1.42427L4.57661 0.575745Z"
                      fill="black"
                    />
                  </svg>

            </button>
            <button class="vacancy__news-btn-next">
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

            </button>
            </div>
            <a href="#" class="vacancy__news-link-mobile"> Все новости </a>
        </div>

        <div class="vacancy__news-row">
            
            <?php

            if ( $actually_news->have_posts() ) {
                while ( $actually_news->have_posts() ) {

                $actually_news->the_post();
                $news_item_id = get_the_ID();

                $thumbnail_url = get_the_post_thumbnail_url( $news_item_id, 'full' );
                if( false == $thumbnail_url ){
                    $thumbnail_url = THEME_URL .'/assets/images/default/post-image-default.jpg';
                }

                if( null != get_field( 'url_from_habr' ) ){
                    $url_from_habr = get_field( 'url_from_habr' );
                } else{
                    $url_from_habr = get_habr_url( $news_item_id );
                }
                ?>

                <a href="<?php echo $url_from_habr; ?>" target="_blank"class="vacancy__news-item">
                    <div class="vacancy__news-item-image-block loading">
                        <img
                        class="vacancy__news-image"
                        data-src="<?php echo $thumbnail_url; ?>"
                        src="<?php echo THEME_URL; ?>/assets/images/Lazy-loading/1x1.png"
                        alt="News"
                        title="Новости"
                        width="500"
                        height="280"
                        />
                    </div>

                    <div class="vacancy__news-title-info">
                        <?php the_title(); ?>
                    </div>
                    <p class="vacancy__news-date-container">
                        <span class="vacancy__news-date"><?php echo get_the_date( 'j F Y', $news_item_id ); ?></span>
                    </p>
                </a>

                <?php
                }
            }
            ?>

        </div>
    </div>
</div>
<!-- //Vacancy New-block-mobile -->

<?php
get_footer();
