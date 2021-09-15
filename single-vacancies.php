<?php
/**
 * Index template file.
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
$can_without_experience = get_field( 'can_without_experience', $post_id );
$can_work_remotely = get_field( 'can_work_remotely', $post_id );
$expectations = get_field( 'expectations', $post_id );
$what_you_need_to_do = get_field( 'what_you_need_to_do', $post_id );
$what_do_we_offer = get_field( 'what_do_we_offer', $post_id );
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

if( get_field( 'map_full_adress', $post_id ) ){
    $experience = 'не требуется';
} else{
    $experience = 'требуется опыт';
}

?>

<div class="direct-link__container">
    <div class="direct-link__content-wrapper">
    <div class="direct-link__side-bar">
        <a href="#" class="direct-link__header-head-copy">
        Скопировать ссылку
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
            </p>
            </div>

            <div class="direct-link__vacancy-item">
            <p class="direct-link__vacancy-title">Опыт</p>
            <p class="direct-link__vacancy-argument"><?php echo $experience; ?></p>
            </div>
        </div>
        <a href="#" class="direct-link__vacancy-link">откликнуться</a>
        </div>
    </div>

    <div class="direct-link__content">
        <div class="direct-link__header-headline">
        <h2 class="direct-link__headline-title">
            <?php the_title(); ?>
        </h2>
        <a href="#" class="direct-link__headline-link">откликнуться</a>
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
            </p>
            </div>

            <div class="direct-link__vacancy-item">
            <p class="direct-link__vacancy-title">Опыт</p>
            <p class="direct-link__vacancy-argument"><?php echo $experience; ?></p>
            </div>
        </div>
        <a href="#" class="direct-link__header-head-copy">
            Скопировать ссылку
        </a>
        </div>

        <!-- Vacancy Intro-block -->
        <div class="vacancy__intro">
        <div class="vacancy__video">
            <div class="vacancy__video-container">
                <img src="<?php echo $img; ?>" alt="">
            </div>
        </div>
        <div class="vacancy__intro-description">
            <?php echo $content; ?>
        </div>
        </div>
        <!-- //Vacancy Intro-block -->

        <!-- Vacancy Description-block -->
        <div class="vacancy__description">
        <div class="vacancy__description-block">
            <div class="vacancy__description-title">
            <p class="vacancy__description-title-text">Наши ожидания</p>
            </div>
            <div class="vacancy__description-list">
                <?php echo $expectations; ?>
            </div>
        </div>

        <div class="vacancy__description-block">
            <div class="vacancy__description-title">
            <p class="vacancy__description-title-text">Что нужно делать</p>
            </div>
            <div class="vacancy__description-list">
                <?php echo $what_you_need_to_do; ?>
            </div>
        </div>

        <div class="vacancy__description-block">
            <div class="vacancy__description-title">
            <p class="vacancy__description-title-text">Что мы предлагаем</p>
            </div>
            <div class="vacancy__description-list">
                <?php echo $what_do_we_offer; ?>
            </div>
        </div>
        </div>
        <!-- //Vacancy Description-block -->

        <!-- Vacancy Office-block -->
        <div class="vacancy__office">
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
        </div>
        <!-- //Vacancy Office-block -->

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
                    <span class="vacncy__checkbox"></span>
                    <span class="vacancy__form-agree">Я согласен с</span>
                    <a href="/privacy-policy/" class="vacancy__form-politics">
                    Политикой обработки персональных данных
                    </a>
                </label>
                <a href="#" class="vacancy__response">откликнуться</a>
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
                Менеджер по управлению технической поддержкой SAP
                </a>
                <div class="vacancy__bread-crumbs-block">
                <a href="#" class="vacancy__bread-crumbs-item">IT-хаб</a>
                <span class="vacancy__bread-crumbs-item">SAP</span>
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
                <p class="vacancy__item-positions-location">Можно удалённо</p>
            </div>
            </div>

            <div class="vacancy__positions-item">
            <div class="vacancy__item-positions-name-block">
                <a href="#" class="vacancy__item-positions-name">
                Менеджер по управлению технической поддержкой SAP
                </a>
                <div class="vacancy__bread-crumbs-block">
                <a href="#" class="vacancy__bread-crumbs-item">IT-хаб</a>
                <span class="vacancy__bread-crumbs-item">SAP</span>
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
                <p class="vacancy__item-positions-location">Можно удалённо</p>
            </div>
            </div>

            <div class="vacancy__positions-item">
            <div class="vacancy__item-positions-name-block">
                <a href="#" class="vacancy__item-positions-name">
                Менеджер по управлению технической поддержкой SAP
                </a>
                <div class="vacancy__bread-crumbs-block">
                <a href="#" class="vacancy__bread-crumbs-item">IT-хаб</a>
                <span class="vacancy__bread-crumbs-item">SAP</span>
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
                <p class="vacancy__item-positions-location">Можно удалённо</p>
            </div>
            </div>
        </div>
        </div>

        <!-- //Vacancy Positions-block -->
    </div>
    </div>
</div>

<!-- Vacancy News-block -->
<div class="vacancy__news-block-desktop">
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
        <div class="vacancy__news-item">
        <div class="vacancy__news-item-image-block">
            <img
            class="vacancy__news-image"
            src="<?php echo THEME_URL; ?>/assets/images/flyout/flyout-news/news1.png"
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
            src="<?php echo THEME_URL; ?>/assets/images/flyout/flyout-news/news2.png"
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
            src="<?php echo THEME_URL; ?>/assets/images/flyout/flyout-news/news1.png"
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
            src="<?php echo THEME_URL; ?>/assets/images/flyout/flyout-news/news2.png"
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
        <button class="vacancy__news-btn-prev"></button>
        <button class="vacancy__news-btn-next"></button>
        </div>
        <a href="#" class="vacancy__news-link-mobile"> Все новости </a>
    </div>

    <div class="vacancy__news-row">
        <div class="vacancy__news-item">
        <div class="vacancy__news-item-image-block">
            <img
            class="vacancy__news-image"
            src="<?php echo THEME_URL; ?>/assets/images/flyout/flyout-news/news1.png"
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
            src="<?php echo THEME_URL; ?>/assets/images/flyout/flyout-news/news2.png"
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
            src="<?php echo THEME_URL; ?>/assets/images/flyout/flyout-news/news1.png"
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
            src="<?php echo THEME_URL; ?>/assets/images/flyout/flyout-news/news2.png"
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

<?php
get_footer();
