<!--  Profession  -->
<section class="profession">
    <div class="container">
        <div id="vaccat_items" class="profession__header">
            <p class="profession__question">Что подходит тебе?</p>
            <?php
            $profession__title = '';

            $vaccat_terms = get_terms( 'vaccat' );
            $town_terms = get_terms( 'town' );
            $level_terms = get_terms( 'level' );

            if( null != $_GET['vaccat'] ){
                $vaccat_slug = $_GET['vaccat'];
            } else{
                $vaccat_slug = '';
            }

            if( null != $_GET['town'] ){
                $town_slug = $_GET['town'];
            } else{
                $town_slug = '';
            }

            if( null != $_GET['level'] ){
                $level_slug = $_GET['level'];
            } else{
                $level_slug = '';
            }

            if( $vaccat_terms && ! is_wp_error($vaccat_terms) ){
                ?><nav class="profession__menu"><?php
                foreach( $vaccat_terms as $vaccat_term ){
                    if( $vaccat_term->slug != $vaccat_slug ){
                        ?>
                        <span data-vaccat_id="<?php echo $vaccat_term->slug; ?>" class="cursor-pointer profession__menu-item"><?php echo $vaccat_term->name; ?></span>
                        <?php            
                    } elseif( $vaccat_term->slug == $vaccat_slug ){
                        ?>
                        <span data-vaccat_id="<?php echo $vaccat_term->slug; ?>" class="cursor-pointer profession__menu-item profession__menu-item-active"><?php echo $vaccat_term->name; ?></span>
                        <?php
                        $profession__title = $vaccat_term->name;
                    }
                }
                ?></nav><?php
            }
            ?>
        </div>

        <?php
        if( '' != $profession__title ){
            ?>
            <h2 class="profession__title"><?php echo $profession__title; ?></h2>
            <?php
        } else{
            ?> <h2 class="profession__title"></h2> <?php
        }
        ?>

        <div class="profession__content">
            <div class="profession__side-bar">
                <div class="profession__side-bar-text-wrapper">
                    <p class="profession__side-bar-text">
                    <?php echo get_sub_field('what_you_need_text'); ?>
                    </p>

                    <p class="profession__side-bar-text">Мы используем</p>

                    <div class="profession__side-bar-image-tools-wrapper">
                    <img
                        class="profession__side-bar-tools"
                        src="<?php echo THEME_URL; ?>/assets/img/management/tools.svg"
                        alt="Tools"
                    />
                    </div>

                    <a href="#" class="profession__side-bar-vacancy-mobile">
                    <span class="profession__side-bar-vacancy-value">192</span>
                    вакансии в
                    <span class="profession__side-bar-vacancy-value">
                        Менеджменте
                    </span>
                    <span class="profession__side-bar-vacancy-value-arrow"></span>
                    </a>
                </div>

                <a href="#" class="profession__side-bar-vacancy">
                    <span class="profession__side-bar-vacancy-value">192</span>
                    вакансии в
                    <span class="profession__side-bar-vacancy-value">
                    Менеджменте
                    </span>
                    <span class="profession__side-bar-vacancy-value-arrow"></span>
                </a>

                <div class="profession__side-bar-image-wrapper">
                    <img
                    class="profession__side-bar-image"
                    src="<?php echo THEME_URL; ?>/assets/img/management/management.png"
                    alt="management"
                    />
                </div>
            </div>

            <div class="profession__main-content">
                <div class="profession__filter-wrapper">
                    <div class="profession__filter-item">
                    <p class="profession__filter-item-title">Уровень</p>
                    <div class="profession__filter-item-select">
                        <p class="profession__filter-item-select-value">
                        Junior, Senior
                        </p>
                        <div class="profession__filter-item-select-arrow">
                        <img
                            class="profession__filter-item-select-arrow-image"
                            src="<?php echo THEME_URL; ?>/assets/img/arrows/arrow-bottom.svg"
                            alt="arrow-bottom"
                        />
                        </div>
                        <div class="profession__filter-item-select-list hide">
                        <p class="profession__filter-item-select-list-item">
                            Junior, Senior
                        </p>
                        <p class="profession__filter-item-select-list-item">Lead</p>
                        <p class="profession__filter-item-select-list-item">
                            Middle
                        </p>
                        </div>
                    </div>

                    <label class="profession__filter-checbox-wrapper-mobile">
                        <input class="profession__filter-input" type="checkbox" />
                        Без опыта
                        <span class="profession__filter-checbox-value"></span>
                    </label>
                    </div>

                    <div class="profession__filter-item">
                    <p class="profession__filter-item-title">Город</p>
                    <div class="profession__filter-item-select">
                        <p class="profession__filter-item-select-value">Любой</p>
                        <div class="profession__filter-item-select-arrow">
                        <img
                            class="profession__filter-item-select-arrow-image"
                            src="<?php echo THEME_URL; ?>/assets/img/arrows/arrow-bottom.svg"
                            alt="arrow-bottom"
                        />
                        </div>
                        <div class="profession__filter-item-select-list hide">
                        <p class="profession__filter-item-select-list-item">
                            Любой
                        </p>
                        <p class="profession__filter-item-select-list-item">
                            Москва
                        </p>
                        <p class="profession__filter-item-select-list-item">
                            Санкт-Петербург
                        </p>
                        </div>
                    </div>

                    <label class="profession__filter-checbox-wrapper-mobile">
                        <input class="profession__filter-input" type="checkbox" />
                        Удалённо
                        <span class="profession__filter-checbox-value"></span>
                    </label>
                    </div>

                    <div class="profession__checkbox-container">
                    <label class="profession__filter-checbox-wrapper">
                        <input class="profession__filter-input" type="checkbox" />

                        Удалённо
                        <span class="profession__filter-checbox-value"></span>
                    </label>

                    <label class="profession__filter-checbox-wrapper">
                        <input class="profession__filter-input" type="checkbox" />

                        Без опыта
                        <span class="profession__filter-checbox-value"></span>
                    </label>
                    </div>

                    <div id="clear_all_filters" class="cursor-pointer profession__filter-reset">Сбросить фильтры</div>
                </div>

                <div id="actually_vacancies" class="profession__job-wrapper">

                    <?php                    
                        $args = array(
                            'post_type'         => 'vacancies',
                            'posts_per_page'    => -1,
                        );

                        if( '' != $vaccat_slug ){
                            $args['tax_query'][] = array(
                                'taxonomy' => 'vaccat',
                                'field'    => 'slug',
                                'terms'    => $vaccat_slug
                            );
                        }

                        if( '' != $town_slug ){
                            $args['tax_query'][] = array(
                                'taxonomy' => 'town',
                                'field'    => 'slug',
                                'terms'    => $town_slug
                            );
                        }

                        if( '' != $level_slug ){
                            $args['tax_query'][] = array(
                                'taxonomy' => 'level',
                                'field'    => 'slug',
                                'terms'    => $level_slug
                            );
                        }

                        $actually_vacancies = new WP_Query( $args );

                        if ( $actually_vacancies->have_posts() ) {
                            while ( $actually_vacancies->have_posts() ) {
                                $actually_vacancies->the_post();
                                $vacancy_item_id = get_the_ID();
                                include(THEME_DIR . '/template-parts/actually_vacancy_item.php');
                            }
                        } else {
                            // Постов не найдено
                        }
                        // Возвращаем оригинальные данные поста. Сбрасываем $post.
                        wp_reset_postdata();
                    ?>
                    <!-- <a href="#" class="profession__show-more">Показать <span class="profession__show-more-number">6</span> вакансий +</a> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--  //Profession  -->