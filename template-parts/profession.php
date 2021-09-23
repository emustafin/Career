<!--  Profession  -->
<section class="profession">
    <div class="container">
        <div id="vaccat_items" class="profession__header">
            <p class="profession__question">Что подходит тебе?</p>
            
            <?
            $vaccat_terms = get_terms( 'vaccat' );
            $town_terms = get_terms( 'town' );
            $level_terms = get_terms( 'level' );

            // TODO Иногда массив приходит без нулевого элемента
            foreach ($vaccat_terms as $vaccat_term) {
                $first_vaccat = $vaccat_term;
                $vaccat_slug = $vaccat_term->slug;
                break;
            }

            $town_slug = '';
            $level_slug = '';
            $can_work_remotely = '';
            $can_without_experience = '';

            if( NotEmptyGetParam('vaccat_slug') )               $vaccat_slug = $_GET['vaccat_slug'];
            if( NotEmptyGetParam('town_slug') )                 $town_slug = $_GET['town_slug'];
            if( NotEmptyGetParam('level_slug') )                $level_slug = $_GET['level_slug'];
            if( NotEmptyGetParam('can_work_remotely') )         $can_work_remotely = 'checked';
            if( NotEmptyGetParam('can_without_experience') )    $can_without_experience = 'checked';

            $profession__title = '';

            if( $vaccat_terms && ! is_wp_error($vaccat_terms) ): ?>
                
                <nav class="profession__menu">
                    
                <? foreach( $vaccat_terms as $vaccat_term ):

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
                    
                    $active_class = '';

                    if( $vaccat_term->slug == $vaccat_slug ){
                        $active_class = 'profession__menu-item-active';
                        $profession__title = $vaccat_term->name;
                    }
                    ?>

                    <span 
                        data-vaccat_info='<?= json_encode($vaccat_data); ?>' 
                        data-vaccat_slug="<?= $vaccat_term->slug; ?>" 
                        class="cursor-pointer profession__menu-item <?= $active_class; ?>"
                    >
                        <?= $vaccat_term->name; ?>
                    </span>

                <? endforeach; ?>
                </nav>
            <?php endif; ?>
        </div>

        <h2 class="profession__title"><?= $profession__title; ?></h2>

        <div class="profession__content">
            <div class="profession__side-bar">
                <div class="profession__side-bar-text-wrapper">
                    <div id="profession__description" class="profession__side-bar-text">
                        <?= term_description( $first_vaccat->term_id, 'vaccat' ); ?>
                    </div>
                    <p class="profession__side-bar-text">Мы используем</p>
                    <div id="profession__tehnology" class="profession__side-bar-image-tools-wrapper">
                        <? if( get_field( 'vaccat_tehnologies', $first_vaccat ) != null ):
                            foreach (get_field( 'vaccat_tehnologies', $first_vaccat ) as $tech) : ?>
                            <div class="profession__technology-item <?= $tech['value']; ?>"><?= $tech['label']; ?></div>
                        <?  endforeach; 
                           endif;?>
                    </div>

                    <!-- 
                        <a id="profession__permalink_mob" href="<?= get_term_link( $first_vaccat->term_id, 'vaccat'); ?>" class="profession__side-bar-vacancy-mobile">
                            <span id="profession__count_mob" class="profession__side-bar-vacancy-value"><?= $first_vaccat->count; ?></span>
                            вакансии в
                            <span class="profession__side-bar-vacancy-value">
                                Менеджменте
                            </span>
                            <span class="profession__side-bar-vacancy-value-arrow"></span>
                        </a> 
                    -->
                </div>

                <!-- 
                    <a id="profession__permalink" href="<?= get_term_link( $first_vaccat->term_id, 'vaccat'); ?>" class="profession__side-bar-vacancy">
                        <span id="profession__count" class="profession__side-bar-vacancy-value"><?= $first_vaccat->count; ?></span>
                        вакансии в
                        <span class="profession__side-bar-vacancy-value">
                        Менеджменте
                        </span>
                        <span class="profession__side-bar-vacancy-value-arrow"></span>
                    </a> 
                -->

                <div class="profession__side-bar-image-wrapper">
                    <img id="profession__img" class="profession__side-bar-image" src="<?= get_field( 'vaccat_img', $first_vaccat ); ?>" alt="management"/>
                </div>
            </div>

            <div class="profession__main-content">
                <div class="profession__filter-wrapper">
                    <div class="profession__filter-item">
                        <p class="profession__filter-item-title">Уровень</p>
                        <div class="profession__filter-item-select">
<!-- 
                            <select name="level" id="level">
                                <option value="-1">Выберите уровень</option>

                                <? $level_arr = array();
                                foreach( $level_terms as $level_term ):
                                    $selected = '';
                                    $level_arr[$level_term->slug] = $level_term->name;
                                    if( $level_slug == $level_term->slug ) $selected = 'selected'; ?>
                                    <option value="<?= $level_term->slug; ?>" <?= $selected; ?>><?= $level_term->name; ?></option>
                                <? endforeach; ?>

                            </select>
                             -->
                             
                             <input type="hidden" id="level" />
                             <input
                                id="level"
                                class="selectMode profession__level-select"
                                name="tags-select-mode"
                                placeholder="Выбери уровень"
                                value=""
                            />

                            <div class="profession__filter-item-select-arrow">
                                <svg
                                class="profession__filter-item-select-arrow-image"
                                width="10"
                                height="10"
                                viewBox="0 0 10 10"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                                >
                                <path
                                    d="M5.58286 7.56905V0.925293H4.38286V7.53389L1.4247 4.57574L0.576172 5.42426L4.22262 9.07071C4.65219 9.50029 5.34868 9.50029 5.77825 9.07071L9.4247 5.42426L8.57617 4.57574L5.58286 7.56905Z"
                                    fill="black"
                                />
                                </svg>
                            </div>


                            <script>
                                var levels = '<?= json_encode( $level_arr ); ?>';
                            </script>
                            <!-- 
                                <p class="profession__filter-item-select-value">
                                Junior, Senior
                                </p>
                                <div class="profession__filter-item-select-arrow">
                                <img
                                    class="profession__filter-item-select-arrow-image"
                                    src="<?= THEME_URL; ?>/assets/images/arrows/arrow-bottom.svg"
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
                            -->
                        </div>

                        <!-- 
                            <label class="profession__filter-checbox-wrapper-mobile">
                                <input class="profession__filter-input can_without_experience" type="checkbox" <?= $can_without_experience; ?>/>
                                Без опыта
                                <span class="profession__filter-checbox-value"></span>
                            </label> 
                        -->
                    </div>

                    <div class="profession__filter-item">
                        <p class="profession__filter-item-title">Город</p>
                        <div class="profession__filter-item-select">
<!-- 
                            <select name="town" id="town">
                                <option value="-1">Выберите город</option>
                                <?php
                                $towns_array = array();
                                foreach( $town_terms as $town_term ):
                                    $towns_array[$town_term->slug] = $town_term->name;
                                    if( $town_slug == $town_term->slug ) $selected = 'selected'; ?>
                                        <option value="<?= $town_term->slug; ?>" <?= $selected; ?>><?= $town_term->name; ?></option>
                                <?php endforeach; ?>
                            </select>
                             -->

                             <input type="hidden" id="town" />
                             <input
                                id="town"
                                name="tags-select-mode"
                                class="selectMode profession__city-select"
                                placeholder="Выбери город"
                                value=""
                            />
                            <div class="profession__filter-item-select-arrow">
                                <svg
                                class="profession__filter-item-select-arrow-image"
                                width="10"
                                height="10"
                                viewBox="0 0 10 10"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                                >
                                <path
                                    d="M5.58286 7.56905V0.925293H4.38286V7.53389L1.4247 4.57574L0.576172 5.42426L4.22262 9.07071C4.65219 9.50029 5.34868 9.50029 5.77825 9.07071L9.4247 5.42426L8.57617 4.57574L5.58286 7.56905Z"
                                    fill="black"
                                />
                                </svg>
                            </div>

                            <script>
                               var towns = '<?= json_encode( $towns_array ); ?>';
                            </script>
                            <!-- 
                                <p class="profession__filter-item-select-value">Любой</p>
                                <div class="profession__filter-item-select-arrow">
                                <img
                                    class="profession__filter-item-select-arrow-image"
                                    src="<?= THEME_URL; ?>/assets/images/arrows/arrow-bottom.svg"
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
                            -->
                        </div>

                        <!-- 
                            <label class="profession__filter-checbox-wrapper-mobile">
                                <input class="profession__filter-input can_work_remotely" type="checkbox" <?= $can_work_remotely; ?>/>
                                Удалённо
                                <span class="profession__filter-checbox-value"></span>
                            </label> 
                        -->
                    </div>

                    <div class="profession__checkbox-container">
                    <label class="profession__filter-checbox-wrapper">
                        <input class="profession__filter-input can_work_remotely" type="checkbox" <?= $can_work_remotely; ?>/>
                        Удалённо
                        <span class="profession__filter-checbox-value"></span>
                    </label>

                    <label class="profession__filter-checbox-wrapper">
                        <input class="profession__filter-input can_without_experience" type="checkbox"  <?= $can_without_experience; ?>/>
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
                                include(THEME_DIR . '/template-parts/loop-parts/actually_vacancy_item.php');
                            }
                        } else {
                            echo 'Вакансий не найдено';
                        }
                        wp_reset_postdata();
                    ?>
                    <!-- <a href="#" class="profession__show-more">Показать <span class="profession__show-more-number">6</span> вакансий +</a> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--  //Profession  -->