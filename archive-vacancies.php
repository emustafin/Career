<?php
/**
 *
 * @package Career\Template
 */


get_header();

global $wp_query;

$count_posts = wp_count_posts('vacancies');
$published_posts = $count_posts->publish;
$paged = get_query_var('paged') ? get_query_var('paged') : 1;

$vaccat_terms = get_terms( 'vaccat' );
$town_terms = get_terms( 'town' );
$level_terms = get_terms( 'level' );

$town_arr = array();

$level_arr['-1'] = 'Любой';
foreach( $level_terms as $level_term ):
    $level_arr[$level_term->slug] = $level_term->name;
endforeach;

$town_arr['-1'] = 'Любой';
foreach( $town_terms as $town_term ):
    $town_arr[$town_term->slug] = $town_term->name;
endforeach;

foreach( $vaccat_terms as $vaccat_term ):
    $vaccat_arr[$vaccat_term->slug] = $vaccat_term->name;
endforeach;

$args = array(
    'post_type'         => 'vacancies',
    'posts_per_page'    => -1,
    'post_status'       => 'publish'
);
$all_vacancies = new WP_Query( $args );
if ( $all_vacancies->have_posts() ) {
    while ( $all_vacancies->have_posts() ) {
        $all_vacancies->the_post();
        $vacancy_titles .= get_the_title().',';
    }
}
wp_reset_postdata();
?>

<script>
    var level_arr = '<?php echo json_encode( $level_arr ); ?>';
    var town_arr = '<?php echo json_encode( $town_arr ); ?>';
    var vaccat_arr = '<?php echo json_encode( $vaccat_arr ); ?>';
    var vacancy_titles = '<?php echo json_encode( $vacancy_titles ); ?>';
    var rel_type = 'it';
    var vacancyid = '';
    var sourceurl = '';
</script>

<!-- Section Listing-Top -->
<section class="listing-top">
    <div class="page-container">
        <h2 class="listing-top__title">
        Вакансии
        <span class="listing-top__counter"><?php echo $published_posts; ?></span>
        </h2>
        <div class="listing-top__dropdown">
            <!-- <div class="listing-top__dropdown-container">
                    <span class="listing-top__in">в</span>
                    <span class="listing-top__where">
                        <span> IT-хабе </span>
                        <svg
                        width="38"
                        height="36"
                        viewBox="0 0 38 36"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        >
                        <path
                            d="M16.3663 28.118V0.159515H21.4663V27.9699L34.0469 15.5057L37.6363 19.1287L22.1319 34.4897C20.3098 36.2949 17.3734 36.2949 15.5513 34.4897L0.046875 19.1287L3.63632 15.5057L16.3663 28.118Z"
                            fill="black"
                        />
                        </svg>
                    </span>
                </div>

            <div class="listing-top__dropdown-list hide">
                <p class="listing-top__dropdown-list-item">
                <span class="listing-top__dropdown-list-item-value">
                    Розничных магазинах
                </span>

                <span class="listing-top__counter-list-item">1184</span>
                </p>
                <p class="listing-top__dropdown-list-item">
                <span class="listing-top__dropdown-list-item-value">
                    Сервисе и логистике
                </span>

                <span class="listing-top__counter-list-item">52</span>
                </p>
                <p class="listing-top__dropdown-list-item">
                <span class="listing-top__dropdown-list-item-value">
                    Центральном офисе
                </span>

                <span class="listing-top__counter-list-item">34</span>
                </p>
                <p class="listing-top__dropdown-list-item">
                <span class="listing-top__dropdown-list-item-value">
                    IT-хабе
                </span>

                <span class="listing-top__counter-list-item">162</span>
                </p>
            </div> -->
        </div>

        <div class="listing-top__filters-wrapper">
            <div class="listing-top__filter-item">
                <input type="hidden" id="listing-top__profession-filter" />
                <input
                    name="tags-outside"
                    class="tagify--outside listing-top__profession-filter"
                    placeholder="Выбери профессию"
                    value="<?php echo $_GET['s']; ?>"
                />

                <svg
                    class="listing-top__filter-item-search-icon"
                    width="10"
                    height="10"
                    viewBox="0 0 10 10"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M4.50039 0.399994C2.23602 0.399994 0.400391 2.23563 0.400391 4.49999C0.400391 6.76436 2.23602 8.59999 4.50039 8.59999C5.41615 8.59999 6.26178 8.29977 6.94424 7.79237L8.57613 9.42426L9.42465 8.57573L7.79276 6.94384C8.30016 6.26139 8.60039 5.41575 8.60039 4.49999C8.60039 2.23563 6.76476 0.399994 4.50039 0.399994ZM1.60039 4.49999C1.60039 2.89837 2.89876 1.59999 4.50039 1.59999C6.10202 1.59999 7.40039 2.89837 7.40039 4.49999C7.40039 6.10162 6.10202 7.39999 4.50039 7.39999C2.89876 7.39999 1.60039 6.10162 1.60039 4.49999Z"
                    fill="black"
                    />
                </svg>
            </div>

            <div class="listing-top__filter-item">
                <p class="profession__filter-item-title">Специализация</p>
                <div class="profession__filter-item-select">

                    <input type="hidden" id="listing__specialization-select" />
                    <input
                        class="selectMode listing__specialization-select"
                        name="tags-select-mode"
                        placeholder="Выбери специализацию"
                        value=""
                    />
                    <div class="listing__filter-item-select-arrow">
                    <svg
                        class="listing__filter-item-select-arrow-image"
                        width="10"
                        height="10"
                        viewBox="0 0 10 10"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                        d="M5.58286 7.56905V0.925293H4.38286V7.53389L1.4247 4.57574L0.576172 5.42426L4.22262 9.07071C4.65219 9.50029 5.34868 9.50029 5.77825 9.07071L9.4247 5.42426L8.57617 4.57574L5.58286 7.56905Z"
                        fill="black"
                        />
                    </svg>
                    </div>
              </div>
              <div class="listing__filter-item-border-bottom"></div>
            </div>

            <div class="listing-top__filter-item">
                <p class="profession__filter-item-title">Уровень</p>
                <div class="profession__filter-item-select">
                    <input type="hidden" id="listing__level-select" value="-1"/>
                    <input
                        class="selectMode listing__level-select"
                        name="tags-select-mode"
                        placeholder="Выбери уровень"
                    />

                    <div class="listing__filter-item-select-arrow">
                        <svg
                            class="listing__filter-item-select-arrow-image"
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
                </div>
                <div class="listing__filter-item-border-bottom">
                    <label class="profession__filter-checbox-listing">
                    <input class="profession__filter-input archive_without_experience" type="checkbox" />
                    Без опыта
                    <span class="profession__filter-checbox-value">
                    <svg
                      width="16"
                      height="16"
                      viewBox="0 0 16 16"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M12.5 5L6.5 11L3.5 8"
                        stroke="black"
                        stroke-width="1.2"
                      />
                    </svg>

                    </span>
                    </label>
                </div>
            </div>

            <div class="listing-top__filter-item">
                <p class="profession__filter-item-title">Город</p>
                <div class="profession__filter-item-select">
                    <input type="hidden" id="listing__city-select" value="-1"/>
                    <input
                    class="selectMode listing__city-select"
                    name="tags-select-mode"
                    placeholder="Выбери город"
                    />

                    <div class="listing__filter-item-select-arrow">
                    <svg
                        class="listing__filter-item-select-arrow-image"
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
                </div>

                <div class="listing__filter-item-border-bottom">
                    <label class="profession__filter-checbox-listing">
                    <input class="profession__filter-input archive_remotely" type="checkbox" />
                    Удалённо
                    <span class="profession__filter-checbox-value">
                    <svg
                      width="16"
                      height="16"
                      viewBox="0 0 16 16"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M12.5 5L6.5 11L3.5 8"
                        stroke="black"
                        stroke-width="1.2"
                      />
                    </svg>

                    </span>
                    </label>
                </div>
            </div>

            <button id="archive_clear_all_filters" class="listing-top__filter-item-button-reset">
                Сбросить фильтры
            </button>
        </div>
    </div>
</section>

<!-- //Section Listing-Top -->

<!-- Section Position-card -->
<div class="position__card-wrapper">
    <div id="archive_vacancies" class="page-container">

        <?php if(have_posts()) : ?>
            <?php $i=1; while(have_posts()) : 
                the_post();

                include(THEME_DIR . '/template-parts/loop-parts/archive_vacancies_item.php');
                
                if( $i == 3 ): ?>
                    <!-- Banner S-->
                    <div class="banner-S">
                        <div class="banner-S__content">
                            <div class="banner-S__side-bar"></div>
                            <div class="banner-S__image-container">
                                <img
                                    class="banner-S__image"
                                    src="<?php echo THEME_URL; ?>/assets/images/listing/Banner-S/banner-s-image.png"
                                    alt="Banner"
                                />
                            </div>
                            <div class="banner-S__title-container">
                                <h2 class="banner-S__title">
                                    Набираем команду разработки мобильных приложений

                                    <a href="#" class="banner-S__link">
                                    посмотреть вакансии
                                    <svg
                                        class="banner-S__link-arrow"
                                        width="12"
                                        height="8"
                                        viewBox="0 0 12 8"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                        d="M9.4136 3.55001L7.1818 1.3182L7.8182 0.681808L11.1364 4.00001L7.8182 7.3182L7.1818 6.68181L9.4136 4.45001H0.75V3.55001H9.4136Z"
                                        fill="black"
                                        />
                                    </svg>
                                    </a>
                                </h2>

                                <p class="banner-S__info">
                                    Ищем продактов, Kotlin- и Swift-разработчиков, системных
                                    аналитиков и продуктовых дизайнеров.
                                    <a href="#" class="banner-S__link-mobile">
                                    посмотреть вакансии
                                    <svg
                                        class="banner-S__link-arrow"
                                        width="12"
                                        height="8"
                                        viewBox="0 0 12 8"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                        d="M9.4136 3.55001L7.1818 1.3182L7.8182 0.681808L11.1364 4.00001L7.8182 7.3182L7.1818 6.68181L9.4136 4.45001H0.75V3.55001H9.4136Z"
                                        fill="black"
                                        />
                                    </svg>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- //Banner S-->
                <?php endif; ?>

                <?php if( $i == 5 ): ?>
                    <!-- Section Banner-L -->
                    <div class="banner-l">
                        <div class="banner-l__content">
                            <h2 class="banner-l__title">Приходи на стажировку!</h2>
                            <div class="banner-l__header-background">
                            <svg
                                class="banner-l__header-background-image"
                                width="921"
                                height="284"
                                viewBox="0 0 921 284"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M686.378 1.37198H546.555C510.972 1.37198 482.127 30.242 482.127 65.8551C482.127 101.468 510.972 130.338 546.555 130.338H686.378C721.961 130.338 750.807 101.468 750.807 65.8551C750.807 30.242 721.961 1.37198 686.378 1.37198ZM546.555 0C510.215 0 480.756 29.4843 480.756 65.8551C480.756 102.226 510.215 131.71 546.555 131.71H686.378C722.718 131.71 752.178 102.226 752.178 65.8551C752.178 29.4843 722.718 0 686.378 0H546.555Z"
                                fill="#E31235"
                                />
                                <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M632.916 65.8551C632.916 95.4063 656.851 119.362 686.378 119.362C715.904 119.362 739.839 95.4063 739.839 65.8551C739.839 36.3038 715.904 12.3478 686.378 12.3478C656.851 12.3478 632.916 36.3038 632.916 65.8551ZM686.378 10.9758C656.094 10.9758 631.545 35.5461 631.545 65.8551C631.545 96.164 656.094 120.734 686.378 120.734C716.661 120.734 741.21 96.164 741.21 65.8551C741.21 35.5461 716.661 10.9758 686.378 10.9758Z"
                                fill="#E31235"
                                />
                                <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M205.622 1.37198H65.7992C30.2164 1.37198 1.37082 30.242 1.37082 65.8551C1.37082 101.468 30.2164 130.338 65.7992 130.338H205.622C241.205 130.338 270.051 101.468 270.051 65.8551C270.051 30.242 241.205 1.37198 205.622 1.37198ZM65.7992 0C29.4593 0 0 29.4843 0 65.8551C0 102.226 29.4593 131.71 65.7992 131.71H205.622C241.962 131.71 271.422 102.226 271.422 65.8551C271.422 29.4843 241.962 0 205.622 0H65.7992Z"
                                fill="#76BC21"
                                />
                                <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M152.16 65.8551C152.16 95.4063 176.096 119.362 205.622 119.362C235.148 119.362 259.084 95.4063 259.084 65.8551C259.084 36.3038 235.148 12.3478 205.622 12.3478C176.096 12.3478 152.16 36.3038 152.16 65.8551ZM205.622 10.9758C175.338 10.9758 150.789 35.5461 150.789 65.8551C150.789 96.164 175.338 120.734 205.622 120.734C235.905 120.734 260.454 96.164 260.454 65.8551C260.454 35.5461 235.905 10.9758 205.622 10.9758Z"
                                fill="#76BC21"
                                />
                                <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M477.044 153.662H337.221C301.638 153.662 272.793 182.532 272.793 218.145C272.793 253.758 301.638 282.628 337.221 282.628H477.044C512.627 282.628 541.473 253.758 541.473 218.145C541.473 182.532 512.627 153.662 477.044 153.662ZM337.221 152.29C300.881 152.29 271.422 181.774 271.422 218.145C271.422 254.516 300.881 284 337.221 284H477.044C513.384 284 542.844 254.516 542.844 218.145C542.844 181.774 513.384 152.29 477.044 152.29H337.221Z"
                                fill="#E31235"
                                />
                                <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M423.582 218.145C423.582 247.696 447.517 271.652 477.044 271.652C506.57 271.652 530.505 247.696 530.505 218.145C530.505 188.594 506.57 164.638 477.044 164.638C447.517 164.638 423.582 188.594 423.582 218.145ZM477.044 163.266C446.76 163.266 422.211 187.836 422.211 218.145C422.211 248.454 446.76 273.024 477.044 273.024C507.327 273.024 531.876 248.454 531.876 218.145C531.876 187.836 507.327 163.266 477.044 163.266Z"
                                fill="#E31235"
                                />
                                <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M957.798 153.662H817.975C782.392 153.662 753.547 182.532 753.547 218.145C753.547 253.758 782.392 282.628 817.975 282.628H957.798C993.381 282.628 1022.23 253.758 1022.23 218.145C1022.23 182.532 993.381 153.662 957.798 153.662ZM817.975 152.29C781.635 152.29 752.176 181.774 752.176 218.145C752.176 254.516 781.635 284 817.975 284H957.798C994.138 284 1023.6 254.516 1023.6 218.145C1023.6 181.774 994.138 152.29 957.798 152.29H817.975Z"
                                fill="#76BC21"
                                />
                                <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M904.336 218.145C904.336 247.696 928.271 271.652 957.797 271.652C987.324 271.652 1011.26 247.696 1011.26 218.145C1011.26 188.594 987.324 164.638 957.797 164.638C928.271 164.638 904.336 188.594 904.336 218.145ZM957.797 163.266C927.514 163.266 902.965 187.836 902.965 218.145C902.965 248.454 927.514 273.024 957.797 273.024C988.081 273.024 1012.63 248.454 1012.63 218.145C1012.63 187.836 988.081 163.266 957.797 163.266Z"
                                fill="#76BC21"
                                />
                                <path
                                d="M936.953 67.0261H774.109V65.6541H936.953L927.156 55.8493L928.125 54.8792L939.577 66.3401L928.125 77.801L927.156 76.8309L936.953 67.0261Z"
                                fill="#E31235"
                                />
                                <path
                                d="M456.199 67.0261H293.355V65.6541H456.199L446.402 55.8493L447.372 54.8792L458.823 66.3401L447.372 77.801L446.402 76.8309L456.199 67.0261Z"
                                fill="#76BC21"
                                />
                                <path
                                d="M727.621 218.831H564.777V217.459H727.621L717.824 207.654L718.793 206.684L730.245 218.145L718.793 229.606L717.824 228.636L727.621 218.831Z"
                                fill="#E31235"
                                />
                            </svg>
                            </div>
                            <a href="#" class="banner-l__header-link">
                            заполнить анкету
                            <svg
                                class="banner-l__header-link-arrow"
                                width="12"
                                height="8"
                                viewBox="0 0 12 8"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                d="M9.4136 3.55001L7.1818 1.3182L7.8182 0.681808L11.1364 4.00001L7.8182 7.3182L7.1818 6.68181L9.4136 4.45001H0.75V3.55001H9.4136Z"
                                fill="black"
                                />
                            </svg>
                            </a>
                        </div>
                    </div>
                    <!-- //Section Banner-L -->
                <?php endif; ?>

                <?php if( $i == 7 ): ?>
                    <!-- Section Subscribe -->
                    <div class="position-subscribe">
                        <div class="position-subscribe__side-bar"></div>
                        <div class="position-subscribe__content">
                            <h2 class="position-subscribe__title">Подпишись на новые вакансии</h2>
                            <p class="position-subscribe__info">
                            Каждую пятницу тебе будет приходить письмо с учётом фильтров:
                            специализация «Менеджмент», ключевые слова: «продукт», «jira».
                            </p>
                            <div class="position-subscribe__mail-container">
                            <input
                                class="position-subscribe__input"
                                type="text"
                                value="Электронная почта"
                            />
                            <a href="#" class="position-subscribe__button">
                                <svg
                                width="12"
                                height="8"
                                viewBox="0 0 12 8"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                                >
                                <path
                                    d="M9.4136 3.55001L7.1818 1.3182L7.8182 0.681808L11.1364 4.00001L7.8182 7.3182L7.1818 6.68181L9.4136 4.45001H0.75V3.55001H9.4136Z"
                                    fill="black"
                                />
                                </svg>
                            </a>
                            </div>
                        </div>
                    </div>
                    <!-- //Section Subscribe -->
                <?php endif; ?>

            <?php //$i++; 
                endwhile;  ?>
        <?php endif; ?>

    </div>
</div>

<?php 
if( $wp_query->max_num_pages > $paged ): 
    $button_show_more_display = 'display:flex;';
else:
    $button_show_more_display = 'display:none;';
endif; ?>
<!-- Button Show-more -->
<div class="products__show-more" style="<?php echo $button_show_more_display; ?>">
    <div href="#" class="position__show-more-button">
        показать ещё
        <svg class="position__show-more-button-link" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M4.40039 5.60002V9.5H5.60039V5.60002H9.5V4.40002H5.60039V0.5H4.40039V4.40002H0.5L0.5 5.60002H4.40039Z" fill="black"/>
        </svg>
    </div>
</div>
<script>
    var paged = '<?php echo $paged; ?>';
    var query_vars = `<?php echo json_encode($wp_query->query_vars); ?>`;
    var max_num_pages = '<?php echo json_encode($wp_query->max_num_pages); ?>';
</script>
<!-- //Button Show-more -->

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
