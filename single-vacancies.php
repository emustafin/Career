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

$relationship_terms = get_the_terms( $post_id, 'relationship' );
if( is_array( $relationship_terms ) ){
	$current_relationship = $relationship_terms[0]->slug;
}

$current_catgs = '';
$catgs_terms = get_the_terms( $post_id, 'vaccat' );
if( is_array( $catgs_terms ) ){
    $current_catgs = $catgs_terms[0]->slug;
}

$not_show_for_retail = 'display:block;';
if( 'roznica' == $current_relationship ){
    $not_show_for_retail = 'display:none;';
}
$vacancy_towns = array('Любой');
$current_vacancy_towns = (array)get_the_terms( get_the_ID(), 'town' );
    if( is_array( $current_vacancy_towns ) ){
      foreach( $current_vacancy_towns as $current_vacancy_town ){
          $vacancy_towns[] = $current_vacancy_town->name;
      }
    }
?>
<script>
    var rel_type = '<?php echo $current_relationship; ?>';
    var vacancyid = '<?php echo get_the_ID(); ?>';
    var sourceurl = '<?php echo get_permalink(); ?>';
    var vacancy_towns = '<?php echo json_encode( $vacancy_towns ); ?>';
</script>
<div class="direct-link__container">
    <div class="direct-link__content-wrapper">
    <div class="direct-link__side-bar">
        <div class="direct-link__side-bar-wrapper">
          <a href="#" id="copy_link" class="direct-link__header-head-copy">
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
                <div class="direct-link__vacancy-item" style="<?php echo $not_show_for_retail; ?>">
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

                <div class="direct-link__vacancy-item" style="<?php echo $not_show_for_retail; ?>">
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

        <?php include(THEME_DIR . '/template-parts/single/vacancy-content.php'); ?>

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
                'posts_per_page'    => -1,
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
