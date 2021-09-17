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

            foreach ($vaccat_terms as $vaccat_term) {
                $first_vaccat = $vaccat_term;
                break;
            }

            if( !empty($_GET) ){
                if( !empty($_GET['vaccat_slug']) && null != $_GET['vaccat_slug'] ){
                    $vaccat_slug = $_GET['vaccat_slug'];
                } else{
                    foreach ($vaccat_terms as $vaccat_term) {
                        $vaccat_slug = $vaccat_term->slug;
                        break;
                    }
                }
    
                if( !empty($_GET['town_slug']) && null != $_GET['town_slug'] ){
                    $town_slug = $_GET['town_slug'];
                } else{
                    $town_slug = '';
                }
    
                if( !empty($_GET['level_slug']) && null != $_GET['level_slug'] ){
                    $level_slug = $_GET['level_slug'];
                } else{
                    $level_slug = '';
                }
    
                if( !empty($_GET['can_work_remotely']) && null != $_GET['can_work_remotely'] ){
                    $can_work_remotely = 'checked';
                } else{
                    $can_work_remotely = '';
                }
    
                if( !empty($_GET['can_without_experience']) && null != $_GET['can_without_experience'] ){
                    $can_without_experience = 'checked';
                } else{
                    $can_without_experience = '';
                }
            } else{
                foreach ($vaccat_terms as $vaccat_term) {
                    $vaccat_slug = $vaccat_term->slug;
                    break;
                }
                $town_slug = '';
                $level_slug = '';
                $can_work_remotely = '';
                $can_without_experience = '';
            }


            if( $vaccat_terms && ! is_wp_error($vaccat_terms) ){
                ?><nav class="profession__menu"><?php
                foreach( $vaccat_terms as $vaccat_term ){

                    $profession__technology = '';
                    if( get_field( 'vaccat_tehnologies', $vaccat_term ) ){
                        foreach (get_field( 'vaccat_tehnologies', $vaccat_term ) as $tech) {
                            $profession__technology .= '<div class="profession__technology-item '.$tech['value'].'">'.$tech['label'].'</div>';
                        }
                    }

                    $vaccat_data = array(
                        'profession__description'   => term_description( $vaccat_term->term_id, 'vaccat' ),
                        'profession__tehnology'     => $profession__technology,
                        'profession__permalink'     => get_term_link( $vaccat_term->term_id, 'vaccat'),
                        'profession__count'         => $vaccat_term->count,
                        'profession__img'           => get_field( 'vaccat_img', $vaccat_term )
                    );

                    if( $vaccat_term->slug != $vaccat_slug ){
                        ?>
                        <span data-vaccat_info='<?php echo json_encode($vaccat_data); ?>' data-vaccat_slug="<?php echo $vaccat_term->slug; ?>" class="cursor-pointer profession__menu-item"><?php echo $vaccat_term->name; ?></span>
                        <?php            
                    } elseif( $vaccat_term->slug == $vaccat_slug ){
                        ?>
                        <span data-vaccat_info='<?php echo json_encode($vaccat_data); ?>' data-vaccat_slug="<?php echo $vaccat_term->slug; ?>" class="cursor-pointer profession__menu-item profession__menu-item-active"><?php echo $vaccat_term->name; ?></span>
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
                    <div id="profession__description" class="profession__side-bar-text">
                        <?php echo term_description( $first_vaccat->term_id, 'vaccat' ); ?>
                    </div>
                    <p class="profession__side-bar-text">Мы используем</p>
                    <div id="profession__tehnology" class="profession__side-bar-image-tools-wrapper">
                        <?php
                        foreach (get_field( 'vaccat_tehnologies', $first_vaccat ) as $tech) {
                            ?>
                            <div class="profession__technology-item <?= $tech['value']; ?>"><?= $tech['label']; ?></div>
                            <?php
                        }
                        ?>
                        <!-- <div class="profession__technology-item confluence">Confluence</div>
                        <div class="profession__technology-item google-docs">Google Docs</div>
                        <div class="profession__technology-item gitlab">Gitlab CI</div>
                        <div class="profession__technology-item slack">Slack</div>
                        <div class="profession__technology-item swagger">Swagger</div> -->
                    </div>

                    <!-- <a id="profession__permalink_mob" href="<?php echo get_term_link( $first_vaccat->term_id, 'vaccat'); ?>" class="profession__side-bar-vacancy-mobile">
                        <span id="profession__count_mob" class="profession__side-bar-vacancy-value"><?php echo $first_vaccat->count; ?></span>
                        вакансии в
                        <span class="profession__side-bar-vacancy-value">
                            Менеджменте
                        </span>
                        <span class="profession__side-bar-vacancy-value-arrow"></span>
                    </a> -->
                </div>

                <!-- <a id="profession__permalink" href="<?php echo get_term_link( $first_vaccat->term_id, 'vaccat'); ?>" class="profession__side-bar-vacancy">
                    <span id="profession__count" class="profession__side-bar-vacancy-value"><?php echo $first_vaccat->count; ?></span>
                    вакансии в
                    <span class="profession__side-bar-vacancy-value">
                    Менеджменте
                    </span>
                    <span class="profession__side-bar-vacancy-value-arrow"></span>
                </a> -->

                <div class="profession__side-bar-image-wrapper">
                    <img id="profession__img" class="profession__side-bar-image" src="<?php echo get_field( 'vaccat_img', $first_vaccat ); ?>" alt="management"/>
                </div>
            </div>

            <div class="profession__main-content">
                <div class="profession__filter-wrapper">
                    <div class="profession__filter-item">
                        <p class="profession__filter-item-title">Уровень</p>
                        <div class="profession__filter-item-select">
                            <select name="level" id="level">
                                <option value="-1">Выберите уровень</option>
                                <?php
                                foreach( $level_terms as $level_term ){
                                    if( $level_slug == $level_term->slug ){
                                        ?>
                                        <option value="<?php echo $level_term->slug; ?>" selected><?php echo $level_term->name; ?></option>
                                        <?php
                                    } else{
                                        ?>
                                        <option value="<?php echo $level_term->slug; ?>"><?php echo $level_term->name; ?></option>
                                        <?php
                                    }
                                }
                                ?>
                            </select>
                            <!-- <p class="profession__filter-item-select-value">
                            Junior, Senior
                            </p>
                            <div class="profession__filter-item-select-arrow">
                            <img
                                class="profession__filter-item-select-arrow-image"
                                src="<?php echo THEME_URL; ?>/assets/images/arrows/arrow-bottom.svg"
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
                            </div> -->
                        </div>

                        <!-- <label class="profession__filter-checbox-wrapper-mobile">
                            <input class="profession__filter-input can_without_experience" type="checkbox" <?php echo $can_without_experience; ?>/>
                            Без опыта
                            <span class="profession__filter-checbox-value"></span>
                        </label> -->
                    </div>

                    <div class="profession__filter-item">
                        <p class="profession__filter-item-title">Город</p>
                        <div class="profession__filter-item-select">
                            <select name="town" id="town">
                                <option value="-1">Выберите город</option>
                                <?php
                                foreach( $town_terms as $town_term ){
                                    if( $town_slug == $town_term->slug ){
                                        ?>
                                        <option value="<?php echo $town_term->slug; ?>" selected><?php echo $town_term->name; ?></option>
                                        <?php
                                    } else{
                                        ?>
                                        <option value="<?php echo $town_term->slug; ?>"><?php echo $town_term->name; ?></option>
                                        <?php
                                    }
                                }
                                ?>
                            </select>
                            <!-- <p class="profession__filter-item-select-value">Любой</p>
                            <div class="profession__filter-item-select-arrow">
                            <img
                                class="profession__filter-item-select-arrow-image"
                                src="<?php echo THEME_URL; ?>/assets/images/arrows/arrow-bottom.svg"
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
                            </div> -->
                        </div>

                        <!-- <label class="profession__filter-checbox-wrapper-mobile">
                            <input class="profession__filter-input can_work_remotely" type="checkbox" <?php echo $can_work_remotely; ?>/>
                            Удалённо
                            <span class="profession__filter-checbox-value"></span>
                        </label> -->
                    </div>

                    <div class="profession__checkbox-container">
                    <label class="profession__filter-checbox-wrapper">
                        <input class="profession__filter-input can_work_remotely" type="checkbox" <?php echo $can_work_remotely; ?>/>

                        Удалённо
                        <span class="profession__filter-checbox-value"></span>
                    </label>

                    <label class="profession__filter-checbox-wrapper">
                        <input class="profession__filter-input can_without_experience" type="checkbox"  <?php echo $can_without_experience; ?>/>

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
                            'post_status'       => 'publish'
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