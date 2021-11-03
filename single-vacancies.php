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
        <a href="#" class="direct-link__header-head-copy direct-link__header-head-copy-mobile">
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

        <?php include(THEME_DIR . '/template-parts/vacancy-content.php'); ?>

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

<!-- Страница вакансии для блока "Розница" -->
        <!-- Content -->
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
                d="M5.88332 3.8845C4.88525 4.88258 4.88525 6.50078 5.88332 7.49886C6.8814 8.49694 8.4996 8.49694 9.49768 7.49886L12.2635 4.73303C13.2616 3.73496 13.2616 2.11675 12.2635 1.11867C11.2654 0.120598 9.64723 0.120598 8.64915 1.11868C8.41484 1.35299 8.41484 1.73289 8.64915 1.9672C8.88347 2.20152 9.26337 2.20152 9.49768 1.9672C10.0271 1.43776 10.8855 1.43776 11.415 1.9672C11.9444 2.49665 11.9444 3.35506 11.415 3.8845L8.64915 6.65033C8.1197 7.17978 7.2613 7.17978 6.73185 6.65033C6.2024 6.12089 6.2024 5.26248 6.73185 4.73303C6.96617 4.49872 6.96617 4.11882 6.73185 3.8845C6.49754 3.65019 6.11764 3.65019 5.88332 3.8845Z"
                fill="black"
              />
              <path
                d="M1.73293 5.26756C0.734856 6.26564 0.734856 7.88384 1.73293 8.88192C2.73101 9.88 4.34921 9.88 5.34729 8.88192C5.5816 8.6476 5.5816 8.2677 5.34729 8.03339C5.11298 7.79908 4.73308 7.79908 4.49876 8.03339C3.96931 8.56284 3.11091 8.56284 2.58146 8.03339C2.05201 7.50394 2.05201 6.64554 2.58146 6.11609L5.34729 3.35026C5.87674 2.82081 6.73514 2.82081 7.26459 3.35026C7.79404 3.87971 7.79404 4.73811 7.26459 5.26756C7.03028 5.50188 7.03028 5.88177 7.26459 6.11609C7.49891 6.3504 7.8788 6.3504 8.11312 6.11609C9.1112 5.11801 9.1112 3.49981 8.11312 2.50173C7.11504 1.50365 5.49684 1.50365 4.49876 2.50173L1.73293 5.26756Z"
                fill="black"
              />
            </svg>
          </a>

          <div class="direct-link__vacancy-description-block">
            <div class="direct-link__vacancy-container">
              <div class="direct-link__vacancy-item">
                <p class="direct-link__vacancy-title">Город</p>
                <p class="direct-link__vacancy-argument">Москва</p>
              </div>

              <div class="direct-link__vacancy-item">
                <p class="direct-link__vacancy-title">Направление</p>
                <p class="direct-link__vacancy-argument">Розничные продажи</p>
              </div>

              <div class="direct-link__vacancy-item">
                <p class="direct-link__vacancy-title">Заработная плата</p>
                <p class="direct-link__vacancy-argument">
                  <span>от</span>
                  <span class="direct-link__vacancy-price">50 000</span>
                  <span>₽</span>
                </p>
              </div>

              <div class="direct-link__vacancy-item">
                <p class="direct-link__vacancy-title">Опыт</p>
                <p class="direct-link__vacancy-argument">не требуется</p>
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
                  d="M11.5515 4.40044L8.57574 1.4247L9.42426 0.576172L13.8485 5.00044L9.42426 9.4247L8.57574 8.57617L11.5515 5.60044H0L0 4.40044H11.5515Z"
                  fill="black"
                />
              </svg>
            </a>
          </div>
        </div>

        <div class="direct-link__content">
          <div class="direct-link__header-headline">
            <h2 class="direct-link__headline-title">
              Специалист клиентского сервиса
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
                  d="M11.5515 4.40044L8.57574 1.4247L9.42426 0.576172L13.8485 5.00044L9.42426 9.4247L8.57574 8.57617L11.5515 5.60044H0L0 4.40044H11.5515Z"
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
                  Петропавловск-Камчатский
                </p>
              </div>

              <div class="direct-link__vacancy-item">
                <p class="direct-link__vacancy-title">Подразделение</p>
                <p class="direct-link__vacancy-argument">
                  Информационные технологии
                </p>
              </div>

              <div class="direct-link__vacancy-item">
                <p class="direct-link__vacancy-title">Заработная плата</p>
                <p class="direct-link__vacancy-argument">
                  <span>от</span>
                  <span class="direct-link__vacancy-price">80 000</span>
                  <span>₽</span>
                </p>
              </div>

              <div class="direct-link__vacancy-item">
                <p class="direct-link__vacancy-title">Опыт</p>
                <p class="direct-link__vacancy-argument">не требуется</p>
              </div>
            </div>
            <a
              href="#"
              class="
                direct-link__header-head-copy
                direct-link__header-head-copy-mobile
              "
            >
              Скопировать ссылку

              <svg
                width="14"
                height="10"
                viewBox="0 0 14 10"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M5.88332 3.8845C4.88525 4.88258 4.88525 6.50078 5.88332 7.49886C6.8814 8.49694 8.4996 8.49694 9.49768 7.49886L12.2635 4.73303C13.2616 3.73496 13.2616 2.11675 12.2635 1.11867C11.2654 0.120598 9.64723 0.120598 8.64915 1.11868C8.41484 1.35299 8.41484 1.73289 8.64915 1.9672C8.88347 2.20152 9.26337 2.20152 9.49768 1.9672C10.0271 1.43776 10.8855 1.43776 11.415 1.9672C11.9444 2.49665 11.9444 3.35506 11.415 3.8845L8.64915 6.65033C8.1197 7.17978 7.2613 7.17978 6.73185 6.65033C6.2024 6.12089 6.2024 5.26248 6.73185 4.73303C6.96617 4.49872 6.96617 4.11882 6.73185 3.8845C6.49754 3.65019 6.11764 3.65019 5.88332 3.8845Z"
                  fill="black"
                />
                <path
                  d="M1.73293 5.26756C0.734856 6.26564 0.734856 7.88384 1.73293 8.88192C2.73101 9.88 4.34921 9.88 5.34729 8.88192C5.5816 8.6476 5.5816 8.2677 5.34729 8.03339C5.11298 7.79908 4.73308 7.79908 4.49876 8.03339C3.96931 8.56284 3.11091 8.56284 2.58146 8.03339C2.05201 7.50394 2.05201 6.64554 2.58146 6.11609L5.34729 3.35026C5.87674 2.82081 6.73514 2.82081 7.26459 3.35026C7.79404 3.87971 7.79404 4.73811 7.26459 5.26756C7.03028 5.50188 7.03028 5.88177 7.26459 6.11609C7.49891 6.3504 7.8788 6.3504 8.11312 6.11609C9.1112 5.11801 9.1112 3.49981 8.11312 2.50173C7.11504 1.50365 5.49684 1.50365 4.49876 2.50173L1.73293 5.26756Z"
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
                  autoplay
                  loop
                  data-src="./images/flyout/flyout-intro/video/retail-video-preview.mp4"
                  src="./images/Lazy-loading/1x1.png"
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
              </div>
            </div>
            <div class="vacancy__intro-description">
              <p class="vacancy__intro-description-text">
                Человек, в котором удивительным образом сочетаются красивая
                улыбка, гибкое мышление, золотые руки. Человек, в котором
                удивительным образом сочетаются красивая улыбка, гибкое
                мышление, золотые руки. Человек, в котором удивительным образом
                сочетаются красивая улыбка, гибкое мышление, золотые руки.
              </p>
            </div>
          </div>
          <!-- //Vacancy Intro-block -->

          <!-- Vacancy Description-block -->
          <div class="vacancy__description">
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
                    <h2 class="vacancy__advantages-item-title">Retail Tech</h2>
                    <p class="vacancy__advantages-item-description">
                      Реализуем концепцию OneRetail, стирающую границу
                      между офлайн — и онлайн-ритейлом. Для тебя
                      у нас есть гибридные форматы работы, гибкий график,
                      а также собственная академия ритейла.
                    </p>
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
                    <h2 class="vacancy__advantages-item-title">Лидер рынка</h2>
                    <p class="vacancy__advantages-item-description">
                      Мы — № 1 в России и № 10 в мире в сегменте потребительской
                      электроники. Для тебя у нас есть высококонкурентные
                      заработные платы и регулярная индексация.
                    </p>
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
                    <h2 class="vacancy__advantages-item-title">
                      Стабильный рост
                    </h2>
                    <p class="vacancy__advantages-item-description">
                      Общие продажи за 2020 год составили 505 млрд рублей.
                      У нас 1074 магазина в 279 городах России, а доля
                      онлайн-рынка составляет 33%.
                    </p>
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
            <div class="vacancy__description-block">
              <div class="vacancy__description-title">
                <p class="vacancy__description-title-text">Наши ожидания</p>
              </div>
              <div class="vacancy__description-list">
                <ul class="vacancy__description-list-wrapper">
                  <li class="vacancy__description-list-item">
                    Высшее образование как преимущество
                  </li>
                  <li class="vacancy__description-list-item">
                    Уверенное знание технико-эксплуатационных характеристик и
                    стандартов бытовой электроники
                  </li>
                  <li class="vacancy__description-list-item">
                    Знание правил и стандартов установки программного
                    обеспечения
                  </li>
                  <li class="vacancy__description-list-item">
                    Знание принципов работы с сервисными центрами
                  </li>
                  <li class="vacancy__description-list-item">
                    Знание законодательства о защите прав потребителей
                  </li>
                  <li class="vacancy__description-list-item">
                    Коммуникабельность, стрессоустойчивость, внимательность,
                    ответственность
                  </li>
                </ul>
              </div>
            </div>

            <div class="vacancy__description-block">
              <div class="vacancy__description-title">
                <p class="vacancy__description-title-text">Что нужно делать</p>
              </div>
              <div class="vacancy__description-list">
                <ul class="vacancy__description-list-wrapper">
                  <li class="vacancy__description-list-item">
                    Послепродажная проверка, настройка технического оборудования
                    покупателей
                  </li>
                  <li class="vacancy__description-list-item">
                    Продажа товаров и услуг покупателям
                  </li>
                  <li class="vacancy__description-list-item">
                    Консультирование и экспресс-обучение покупателей по вопросам
                    эксплуатации технического оборудования (мобильные телефоны,
                    компьютеры, фотоаппараты, видеокамеры и другие)
                  </li>
                  <li class="vacancy__description-list-item">
                    Консультирование покупателей по условиям сервисных программ
                    и ПДО, оформление документов
                  </li>
                </ul>
              </div>
            </div>

            <div class="vacancy__description-block">
              <div class="vacancy__description-title">
                <p class="vacancy__description-title-text">Что мы предлагаем</p>
              </div>
              <div class="vacancy__description-list">
                <ul class="vacancy__description-list-wrapper">
                  <li class="vacancy__description-list-item">
                    Достойную заработную плату
                  </li>
                  <li class="vacancy__description-list-item">
                    Оформление в полном соответствии с Трудовым кодексом РФ
                  </li>
                  <li class="vacancy__description-list-item">
                    Оплачиваемый отпуск, больничный лист
                  </li>
                  <li class="vacancy__description-list-item">
                    Корпоративные скидки (льготная мобильная связь, кредитование
                    в банках)
                  </li>
                  <li class="vacancy__description-list-item">
                    Бесплатное обучение по корпоративным программам
                  </li>
                  <li class="vacancy__description-list-item">
                    Профессиональный и карьерный рост
                  </li>
                  <li class="vacancy__description-list-item">
                    Дружный коллектив
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- //Vacancy Description-block -->

          <!-- Vacancy Office-block -->
          <div class="vacancy__office">
            <div class="vacancy__office-map">
              <div class="vacancy__office-map-selectors">
                <p class="vacancy__office-map-title">Эта вакансия на карте</p>
              </div>

              <div class="vacancy__office-map-wrapper">
                <img
                  class="vacancy__office-map-image"
                  src="./images/flyout/flyout-office/map.png"
                  alt="Map"
                />

                <img
                  class="vacancy__office-selector-image"
                  src="./images/flyout/flyout-office/map-selector.svg"
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
          </div>
          <!-- //Vacancy Office-block -->

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

          <!-- Vacancy Form-block -->
          <div class="vacancy__form">
            <div class="vacancy__form-title-block">
              <h2 class="vacancy__form-title">Расскажи нам о себе</h2>
            </div>
            <div class="vacancy__form-inner-block">
              <div class="vacancy__form-top">
                <div class="vacancy__form-name">
                  <p class="vacancy__form-name-value">Имя и фамилия</p>
                  <input
                    class="vacancy__form-input"
                    type="text"
                    value="Константин Константинопольский"
                  />
                </div>

                <div class="vacancy__form-name">
                  <p class="vacancy__form-name-value">Электронная почта</p>
                  <input
                    class="vacancy__form-input"
                    type="text"
                    value="test@test.ru"
                  />
                </div>

                <div class="vacancy__form-name">
                  <p class="vacancy__form-name-value">Телефон</p>
                  <input
                    class="vacancy__form-input"
                    type="text"
                    value="+7 (999) 999-99-99"
                  />
                </div>

                <a href="#" class="vacancy__add-contact">
                  добавить другие контакты
                </a>
              </div>

              <div class="vacancy__form-bottom">
                <label class="vacancy__form-label">
                  <input type="checkbox" class="vacancy__input-checkbox" />
                  <span class="vacncy__checkbox">
                    <svg
                      width="10"
                      height="8"
                      viewBox="0 0 10 8"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M3.49848 5.65191L9.07422 0.0761719L9.92275 0.9247L3.49848 7.34896L0.0742188 3.9247L0.922747 3.07617L3.49848 5.65191Z"
                        fill="black"
                      />
                    </svg>
                  </span>
                  <span class="vacancy__form-agree">Я согласен с</span>
                  <a href="#" class="vacancy__form-politics">
                    Политикой обработки персональных данных
                  </a>
                </label>
                <a href="#" class="vacancy__response">
                  откликнуться
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
                </a>
              </div>
            </div>
          </div>
          <!-- //Vacancy Form-block -->

          <!-- Vacancy Positions-block -->
          <div class="vacancy__positions">
            <p class="vacancy__positions-title">Похожие вакансии</p>

            <div class="vacancy__positions-wrapper">
              <div class="vacancy__positions-item">
                <div class="vacancy__item-positions-name-block">
                  <a href="#" class="vacancy__item-positions-name">
                    Старший кассир
                  </a>
                  <div class="vacancy__bread-crumbs-block">
                    <a href="#" class="vacancy__bread-crumbs-item">
                      Розничные магазины

                      <svg
                        width="12"
                        height="8"
                        viewBox="0 0 12 8"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M9.4136 3.54984L7.1818 1.31804L7.8182 0.681641L11.1364 3.99984L7.8182 7.31804L7.1818 6.68164L9.4136 4.44984H0.75V3.54984H9.4136Z"
                          fill="#969696"
                        />
                      </svg>
                    </a>
                    <a href="#" class="vacancy__bread-crumbs-item">
                      Продажи

                      <svg
                        width="12"
                        height="8"
                        viewBox="0 0 12 8"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M9.4136 3.54984L7.1818 1.31804L7.8182 0.681641L11.1364 3.99984L7.8182 7.31804L7.1818 6.68164L9.4136 4.44984H0.75V3.54984H9.4136Z"
                          fill="#969696"
                        />
                      </svg>
                    </a>
                  </div>
                </div>

                <div class="vacancy__item-positions-price-block">
                  <p class="vacancy__item-positions-price">
                    от
                    <span class="vacancy__item-positions-price-value"
                      >80 000</span
                    >
                    <span class="vacancy__item-positions-currency">₽</span>
                  </p>
                  <p class="vacancy__item-positions-experience">
                    Можно без опыта
                  </p>
                </div>

                <div class="vacancy__item-positions-location-block">
                  <p class="vacancy__item-positions-city">Москва</p>
                  <div class="vacancy__item-positions-location">
                    <div
                      class="
                        vacancy__item-positions-location-metro-item
                        vacancy__metro-socolnicheskaya-line
                      "
                    >
                      Красносельская
                    </div>
                    <div
                      class="
                        vacancy__item-positions-location-metro-item
                        vacancy__metro-arbatsko-pokrovskaya-line
                      "
                    >
                      Бауманская
                    </div>
                  </div>
                </div>
              </div>

              <div class="vacancy__positions-item">
                <div class="vacancy__item-positions-name-block">
                  <a href="#" class="vacancy__item-positions-name"> Кассир </a>
                  <div class="vacancy__bread-crumbs-block">
                    <a href="#" class="vacancy__bread-crumbs-item">
                      Розничные магазины

                      <svg
                        width="12"
                        height="8"
                        viewBox="0 0 12 8"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M9.4136 3.54984L7.1818 1.31804L7.8182 0.681641L11.1364 3.99984L7.8182 7.31804L7.1818 6.68164L9.4136 4.44984H0.75V3.54984H9.4136Z"
                          fill="#969696"
                        />
                      </svg>
                    </a>
                    <a href="#" class="vacancy__bread-crumbs-item">
                      Продажи

                      <svg
                        width="12"
                        height="8"
                        viewBox="0 0 12 8"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M9.4136 3.54984L7.1818 1.31804L7.8182 0.681641L11.1364 3.99984L7.8182 7.31804L7.1818 6.68164L9.4136 4.44984H0.75V3.54984H9.4136Z"
                          fill="#969696"
                        />
                      </svg>
                    </a>
                  </div>
                </div>

                <div class="vacancy__item-positions-price-block">
                  <p class="vacancy__item-positions-price">
                    от
                    <span class="vacancy__item-positions-price-value"
                      >80 000</span
                    >
                    <span class="vacancy__item-positions-currency">₽</span>
                  </p>
                  <p class="vacancy__item-positions-experience">
                    Можно без опыта
                  </p>
                </div>

                <div class="vacancy__item-positions-location-block">
                  <p class="vacancy__item-positions-city">Москва</p>
                  <div class="vacancy__item-positions-location">
                    <div
                      class="
                        vacancy__item-positions-location-metro-item
                        vacancy__metro-socolnicheskaya-line
                      "
                    >
                      Красносельская
                    </div>
                    <div
                      class="
                        vacancy__item-positions-location-metro-item
                        vacancy__metro-arbatsko-pokrovskaya-line
                      "
                    >
                      Бауманская
                    </div>
                  </div>
                </div>
              </div>

              <div class="vacancy__positions-item">
                <div class="vacancy__item-positions-name-block">
                  <a href="#" class="vacancy__item-positions-name">
                    Продавец
                  </a>
                  <div class="vacancy__bread-crumbs-block">
                    <a href="#" class="vacancy__bread-crumbs-item">
                      Розничные магазины

                      <svg
                        width="12"
                        height="8"
                        viewBox="0 0 12 8"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M9.4136 3.54984L7.1818 1.31804L7.8182 0.681641L11.1364 3.99984L7.8182 7.31804L7.1818 6.68164L9.4136 4.44984H0.75V3.54984H9.4136Z"
                          fill="#969696"
                        />
                      </svg>
                    </a>
                    <a href="#" class="vacancy__bread-crumbs-item">
                      Продажи

                      <svg
                        width="12"
                        height="8"
                        viewBox="0 0 12 8"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M9.4136 3.54984L7.1818 1.31804L7.8182 0.681641L11.1364 3.99984L7.8182 7.31804L7.1818 6.68164L9.4136 4.44984H0.75V3.54984H9.4136Z"
                          fill="#969696"
                        />
                      </svg>
                    </a>
                  </div>
                </div>

                <div class="vacancy__item-positions-price-block">
                  <p class="vacancy__item-positions-price">
                    от
                    <span class="vacancy__item-positions-price-value"
                      >80 000</span
                    >
                    <span class="vacancy__item-positions-currency">₽</span>
                  </p>
                  <p class="vacancy__item-positions-experience">
                    Можно без опыта
                  </p>
                </div>

                <div class="vacancy__item-positions-location-block">
                  <p class="vacancy__item-positions-city">Москва</p>
                  <div class="vacancy__item-positions-location">
                    <div
                      class="
                        vacancy__item-positions-location-metro-item
                        vacancy__metro-socolnicheskaya-line
                      "
                    >
                      Красносельская
                    </div>
                    <div
                      class="
                        vacancy__item-positions-location-metro-item
                        vacancy__metro-arbatsko-pokrovskaya-line
                      "
                    >
                      Бауманская
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- //Vacancy Positions-block -->
        </div>
      </div>
    </div>
    <!-- //Content -->

    <!-- Vacancy News-block -->
    <div class="vacancy__news-block-desktop">
      <div class="vacancy__news swiper newsSliderDirectLink">
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
                  d="M4.57661 0.576172L0.152344 5.00044L4.57661 9.4247L5.42514 8.57617L2.4494 5.60044H14.0009V4.40044H2.4494L5.42514 1.4247L4.57661 0.576172Z"
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
                  d="M11.5515 4.40044L8.57574 1.4247L9.42426 0.576172L13.8485 5.00044L9.42426 9.4247L8.57574 8.57617L11.5515 5.60044H0L0 4.40044H11.5515Z"
                  fill="black"
                />
              </svg>
            </button>
          </div>
          <a href="#" class="vacancy__news-link-mobile"> Все новости </a>
        </div>

        <div class="vacancy__news-row swiper-wrapper">
          <div class="vacancy__news-item swiper-slide">
            <div class="vacancy__news-item-image-block">
              <img
                class="vacancy__news-image"
                src="./images/flyout/flyout-news/news1.png"
                alt="News"
              />
            </div>

            <a href="#" class="vacancy__news-title-info">
              Группа «М.Видео-Эльдорадо» запустила программу стажировок
              для программистов
            </a>
            <p class="vacancy__news-date-container">
              <span class="vacancy__news-date">16</span>
              <span class="vacancy__news-month">июля</span>
              <span class="vacancy__news-year">2021</span>
            </p>
          </div>

          <div class="vacancy__news-item swiper-slide">
            <div class="vacancy__news-item-image-block">
              <img
                class="vacancy__news-image"
                src="./images/flyout/flyout-news/news2.png"
                alt="News"
              />
            </div>

            <a href="#" class="vacancy__news-title-info">
              Группа «М.Видео-Эльдорадо» запустила программу стажировок
              для программистов
            </a>
            <p class="vacancy__news-date-container">
              <span class="vacancy__news-date">16</span>
              <span class="vacancy__news-month">июля</span>
              <span class="vacancy__news-year">2021</span>
            </p>
          </div>

          <div class="vacancy__news-item swiper-slide">
            <div class="vacancy__news-item-image-block">
              <img
                class="vacancy__news-image"
                src="./images/flyout/flyout-news/news1.png"
                alt="News"
              />
            </div>

            <a href="#" class="vacancy__news-title-info">
              Группа «М.Видео-Эльдорадо» запустила программу стажировок
              для программистов
            </a>
            <p class="vacancy__news-date-container">
              <span class="vacancy__news-date">16</span>
              <span class="vacancy__news-month">июля</span>
              <span class="vacancy__news-year">2021</span>
            </p>
          </div>

          <div class="vacancy__news-item swiper-slide">
            <div class="vacancy__news-item-image-block">
              <img
                class="vacancy__news-image"
                src="./images/flyout/flyout-news/news2.png"
                alt="News"
              />
            </div>

            <a href="#" class="vacancy__news-title-info">
              Группа «М.Видео-Эльдорадо» запустила программу стажировок
              для программистов
            </a>
            <p class="vacancy__news-date-container">
              <span class="vacancy__news-date">16</span>
              <span class="vacancy__news-month">июля</span>
              <span class="vacancy__news-year">2021</span>
            </p>
          </div>
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
                  d="M4.57661 0.576172L0.152344 5.00044L4.57661 9.4247L5.42514 8.57617L2.4494 5.60044H14.0009V4.40044H2.4494L5.42514 1.4247L4.57661 0.576172Z"
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
                  d="M11.5515 4.40044L8.57574 1.4247L9.42426 0.576172L13.8485 5.00044L9.42426 9.4247L8.57574 8.57617L11.5515 5.60044H0L0 4.40044H11.5515Z"
                  fill="black"
                />
              </svg>
            </button>
          </div>
          <a href="#" class="vacancy__news-link-mobile">
            Все новости
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
          </a>
        </div>

        <div class="vacancy__news-row">
          <div class="vacancy__news-item">
            <div class="vacancy__news-item-image-block">
              <img
                class="vacancy__news-image"
                src="./images/flyout/flyout-news/news1.png"
                alt="News"
              />
            </div>

            <a href="#" class="vacancy__news-title-info">
              Группа «М.Видео-Эльдорадо» запустила программу стажировок
              для программистов
            </a>
            <p class="vacancy__news-date-container">
              <span class="vacancy__news-date">16</span>
              <span class="vacancy__news-month">июля</span>
              <span class="vacancy__news-year">2021</span>
            </p>
          </div>

          <div class="vacancy__news-item">
            <div class="vacancy__news-item-image-block">
              <img
                class="vacancy__news-image"
                src="./images/flyout/flyout-news/news2.png"
                alt="News"
              />
            </div>

            <a href="#" class="vacancy__news-title-info">
              Группа «М.Видео-Эльдорадо» запустила программу стажировок
              для программистов
            </a>
            <p class="vacancy__news-date-container">
              <span class="vacancy__news-date">16</span>
              <span class="vacancy__news-month">июля</span>
              <span class="vacancy__news-year">2021</span>
            </p>
          </div>

          <div class="vacancy__news-item">
            <div class="vacancy__news-item-image-block">
              <img
                class="vacancy__news-image"
                src="./images/flyout/flyout-news/news1.png"
                alt="News"
              />
            </div>

            <a href="#" class="vacancy__news-title-info">
              Группа «М.Видео-Эльдорадо» запустила программу стажировок
              для программистов
            </a>
            <p class="vacancy__news-date-container">
              <span class="vacancy__news-date">16</span>
              <span class="vacancy__news-month">июля</span>
              <span class="vacancy__news-year">2021</span>
            </p>
          </div>

          <div class="vacancy__news-item">
            <div class="vacancy__news-item-image-block">
              <img
                class="vacancy__news-image"
                src="./images/flyout/flyout-news/news2.png"
                alt="News"
              />
            </div>

            <a href="#" class="vacancy__news-title-info">
              Группа «М.Видео-Эльдорадо» запустила программу стажировок
              для программистов
            </a>
            <p class="vacancy__news-date-container">
              <span class="vacancy__news-date">16</span>
              <span class="vacancy__news-month">июля</span>
              <span class="vacancy__news-year">2021</span>
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- //Vacancy New-block-mobile -->

    <!-- Form section -->
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
                Заполни анкету и мы обязательно с тобой свяжемся!
              </p>
            </div>

            <div class="form__content-right-bar">
              <div class="form__form-name">
                <p class="form__form-name-value">Имя и фамилия</p>
                <input
                  class="form__form-input"
                  type="text"
                  value="Константин Константинопольский"
                />
              </div>

              <div class="form__form-name">
                <p class="form__form-name-value">Электронная почта</p>
                <input
                  class="form__form-input"
                  type="text"
                  value="test@test.ru"
                />
              </div>

              <div class="form__form-name">
                <p class="form__form-name-value">Телефон</p>
                <input
                  class="form__form-input"
                  type="text"
                  value="+7 (999) 999-99-99"
                />
              </div>

              <div class="form__form-name">
                <p class="form__form-name-value">Город</p>
                <input
                  class="form__form-input"
                  type="text"
                  value="Санкт-Петербург"
                />
              </div>

              <div class="form__form-name">
                <p class="form__form-name-value">Направление</p>
                <div class="form__dropdown">
                  <p class="form__dropdown-result">IT-хаб</p>
                  <div class="form__dropdown-list hide">
                    <div class="form__dropdown-list-item">
                      <p class="form__dropdown-item-position">IT-хаб</p>
                      <div class="form__dropdown-item-checked">
                        <img
                          class="form__dropdown-item-checked-image"
                          src="./images/form/check.svg"
                          alt="Check"
                        />
                      </div>
                    </div>

                    <div class="form__dropdown-list-item">
                      <p class="form__dropdown-item-position">Розница</p>
                      <div class="form__dropdown-item-checked">
                        <img
                          class="form__dropdown-item-checked-image"
                          src="./images/form/check.svg"
                          alt="Check"
                        />
                      </div>
                    </div>

                    <div class="form__dropdown-list-item">
                      <p class="form__dropdown-item-position">
                        Сервис и логистика
                      </p>
                      <div class="form__dropdown-item-checked">
                        <img
                          class="form__dropdown-item-checked-image"
                          src="./images/form/check.svg"
                          alt="Check"
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form__form-name">
                <p class="form__form-name-value">Специализация</p>
                <div class="form__dropdown">
                  <p class="form__dropdown-result">
                    Менеджер по управлению технической поддержкой SAP
                  </p>
                  <div class="form__dropdown-list hide">
                    <div class="form__dropdown-list-item">
                      <p class="form__dropdown-item-position">
                        Менеджер по управлению технической поддержкой SAP
                      </p>
                      <div class="form__dropdown-item-checked">
                        <img
                          class="form__dropdown-item-checked-image"
                          src="./images/form/check.svg"
                          alt="Check"
                        />
                      </div>
                    </div>

                    <div class="form__dropdown-list-item">
                      <p class="form__dropdown-item-position">
                        Менеджер по управлению технической поддержкой SAP
                      </p>
                      <div class="form__dropdown-item-checked">
                        <img
                          class="form__dropdown-item-checked-image"
                          src="./images/form/check.svg"
                          alt="Check"
                        />
                      </div>
                    </div>

                    <div class="form__dropdown-list-item">
                      <p class="form__dropdown-item-position">
                        Менеджер по управлению технической поддержкой SAP
                      </p>
                      <div class="form__dropdown-item-checked">
                        <img
                          class="form__dropdown-item-checked-image"
                          src="./images/form/check.svg"
                          alt="Check"
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form__file-uploader">
                <button class="form__add-link">
                  <svg
                    class="form__file-link-image"
                    width="40"
                    height="40"
                    viewBox="0 0 40 40"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M19.5155 20.484V39.3549H20.4832V20.484H39.3542V19.5162H20.4832V0.645264H19.5155V19.5162H0.644531V20.484H19.5155Z"
                      fill="black"
                    />
                  </svg>
                </button>
                <div class="form__file-uploader-container">
                  <p class="form__file-uploader-text">
                    Выберите файл или перетащите сюда
                  </p>
                  <p class="form__file-uploader-text-correction">
                    До 2 файлов по 5 Мб форматов pdf, doc, docx, rtf
                  </p>
                </div>
              </div>

              <div class="form__form-name">
                <input
                  class="form__information"
                  type="text"
                  value="Дополнительная информация"
                />
              </div>

              <label class="form__form-label">
                <input type="checkbox" class="form__input-checkbox" />
                <span class="form__checkbox"></span>
                <span class="form__form-agree">Я согласен с</span>
                <a href="#" class="form__form-politics">
                  Политикой обработки персональных данных
                </a>
              </label>
              <a href="#" class="form__response">отправить</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- //Form section -->

<!-- //Страница вакансии для блока "Розница" -->

<?php
get_footer();
