<div class="flyout">
    <div class="flyout__side-bar"></div>
    <div class="vacancy">
    <div id="vacancy_popup" class="container">
        
        <div class="loader-wrapp" style="display: none;">
            <div class="loader-bg"><div class="lds-ripple"><div></div><div></div></div></div>
        </div>
        <!-- Vacancy header-block -->
        <header class="vacancy__header">
        <div class="vacancy__header-head">
            <div class="vacancy__header-head-links">
            <a href="#" class="vacancy__header-head-link-main"> IT-хаб </a>
            <a href="#" class="vacancy__header-head-link-vacancy">
                Вакансии в IT-хабе
            </a>
            </div>
            <a href="#" class="vacancy__header-head-copy">
            Скопировать ссылку
            </a>
        </div>

        <div class="vacancy__header-headline">
            <h2 class="vacancy__headline-title">
            Руководитель по управлению и развитию аналитических продуктов
            </h2>
            <a href="#" class="vacancy__headline-link">откликнуться</a>
        </div>

        <div class="vacancy__header-meta">
            <div class="vacancy__meta-info">
            <div class="vacancy__meta-info-item">
                <span class="vacancy__meta-info-title">Город</span>
                <span id="town_info_vacancy" class="vacancy__meta-info-value"
                >Петропавловск-Камчатский</span
                >
            </div>
            <div class="vacancy__meta-info-item">
                <span class="vacancy__meta-info-title">Направление</span>
                <span id="vaccat_info_vacancy" class="vacancy__meta-info-value">
                Информационные технологии
                </span>
            </div>
            </div>

            <div class="vacancy__meta-info">
            <div class="vacancy__meta-info-item">
                <span class="vacancy__meta-info-title">Заработная плата</span>
                <span class="vacancy__meta-info-value">
                от
                <span class="vacancy__meta-info-sum">80 000</span>
                ₽
                </span>
                <span class="vacancy__meta-info-sum-after"></span>
            </div>
            <div class="vacancy__meta-info-item">
                <span class="vacancy__meta-info-title">Опыт</span>
                <span id="experience_important" class="vacancy__meta-info-value"> не требуется </span>
            </div>
            </div>
        </div>
        <a href="#" class="vacancy__header-head-copy-mobile">
            Скопировать ссылку
        </a>
        </header>
        <!-- //Vacancy header-block -->

        <div class="popup_vacancy_content">
            <?php $post_id = get_the_ID(); include(THEME_DIR . '/template-parts/vacancy-content.php'); ?>
        </div>

    </div>
    <!-- //Vacancy Positions-block -->

    <!-- Vacancy News-block -->
    <!-- <div class="vacancy__news">
        <div class="vacancy__news-title">
        <div class="vacancy__news-tabs">
            <a href="#" class="vacancy__news-link vacancy__news-link-active">
            Новости
            </a>
            <a href="#" class="vacancy__news-link">События</a>
        </div>
        <div class="vacancy__news-arrows">
            <button class="vacancy__news-btn-prev"></button>
            <button class="vacancy__news-btn-next"></button>
        </div>
        <a href="#" class="vacancy__news-link-mobile"> Все новости </a>
        </div>

        <div class="vacancy__news-row">
        <?php
        $args = array(
            'post_type'         => 'post',
            'posts_per_page'    => 6,
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
            ?>
            <div class="vacancy__news-item">
                <div class="vacancy__news-item-image-block">
                <img
                    class="vacancy__news-image"
                    src="<?php echo $thumbnail_url; ?>"
                    alt="News"
                />
                </div>

                <a href="#" class="vacancy__news-title-info">
                <?php the_title(); ?>
                </a>
                <p class="vacancy__news-date-container">
                <span class="vacancy__news-date"><?php echo get_the_date( 'j F Y', $news_item_id ); ?></span>
                </p>
            </div>
            <?php
            }
        }
        ?>
        </div>
    </div> -->
    <!-- //Vacancy News-block -->

    <!-- Vacancy News-block -->
    <div class="vacancy__news-block-desktop">
        <div class="vacancy__news swiper newsSlider">
            <div class="vacancy__news-title">
                <div class="vacancy__news-tabs">
                <a href="#" class="vacancy__news-link vacancy__news-link-active">
                    Новости
                </a>
                <!-- <a href="#" class="vacancy__news-link">События</a> -->
                </div>
                <div class="vacancy__news-arrows">
                <button class="vacancy__news-btn-prev"></button>
                <button class="vacancy__news-btn-next"></button>
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
                        $url_from_habr = get_permalink();
                    }
                    ?>


                    <a href="<?php echo $url_from_habr; ?>" target="_blank" class="vacancy__news-item swiper-slide">
                        <div class="vacancy__news-item-image-block ">
                            <img
                            class="vacancy__news-image"
                            src="<?php echo $thumbnail_url; ?>"
                            alt="News"
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
                <button class="vacancy__news-btn-prev"></button>
                <button class="vacancy__news-btn-next"></button>
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
                        $url_from_habr = get_permalink();
                    }
                    ?>

                    <a href="<?php echo $url_from_habr; ?>" target="_blank" class="vacancy__news-item">
                        <div class="vacancy__news-item-image-block loading">
                            <img
                            class="vacancy__news-image loading"
                            data-src="<?php echo $thumbnail_url; ?>"
                            src="<?php echo THEME_URL; ?>/assets/images/Lazy-loading/1x1.png"
                            alt="News"
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

    </div>
</div>