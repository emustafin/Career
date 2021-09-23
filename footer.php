
    <!--  Footer  -->
    <footer class="footer">
      <div class="container">
        <!-- <div class="footer__title-container">
          <h2 class="footer__title">Хочешь стать частью команды?</h2>
          <div class="footer__search-block">
            <input
              class="footer__search-field"
              type="text"
              placeholder="найти вакансию"
            />
            <button class="footer__search-button"></button>
          </div>
        </div> -->

        <div class="footer__wrapper">
          <div class="footer__item">
            <div class="footer__item-wrapper">
              <a href="/" class="footer__logo-link">
                <img
                  src="<?php echo THEME_URL; ?>/assets/images/footer/footer__logo.svg"
                  alt="Logo"
                  class="footer__logo"
                />
              </a>

              <div class="footer__item-contact-wrapper">
                <p class="footer__item-title">Служба подбора персонала</p>
                <div class="footer__contacts-block">
                  <p class="footer__contact-mail">job@mvideoeldorado.ru</p>
                  <button class="footer__contact-button">скопировать</button>
                  <a href="mailto:job@mvideoeldorado.ru" class="footer__contact-button">написать</a>
                </div>

                <div class="footer__contacts-block">
                  <a href="tel:+78002002311 " class="footer__contact-phone"
                    >8-800-200-23-11
                  </a>
                  <p class="footer__contacts-time">пн–пт, 10–19 по Москве</p>
                </div>
              </div>
            </div>

            <p class="footer__info-text">© 2021 Группа «М.Видео-Эльдорадо»</p>
          </div>

          <div class="footer__item">
            <p class="footer__item-title">Наши соцсети</p>

            <div class="footer__item-social-block">
              <p class="footer__item-social-title">Группа</p>

              <div class="footer__item-social-row">
                <div class="footer__item-social-item">
                  <a href="https://www.facebook.com/mvideoeldorado/" class="footer__item-social-link" target="blank">Facebook</a>
                  <a href="https://habr.com/ru/company/mvideo/blog/" class="footer__item-social-link" target="blank">Хабр</a>
                  <a href="https://inplacers.ru/mvideo" class="footer__item-social-link" target="blank">Inplace</a>
                </div>
              </div>
            </div>

            <div class="footer__item-social-block">
              <p class="footer__item-social-title">М.Видео</p>

              <div class="footer__item-social-row">
                <div class="footer__item-social-item">
                  <a href="https://vk.com/myjobby" class="footer__item-social-link" target="blank">ВК</a>
                  <a href="https://www.youtube.com/user/wwwmvideoru" class="footer__item-social-link" target="blank">YouTube</a>
                  <a href="https://www.instagram.com/mvideo_ru/" class="footer__item-social-link" target="blank">Instagram</a>
                </div>
              </div>
            </div>

            <div class="footer__item-social-block">
              <p class="footer__item-social-title">Эльдорадо</p>

              <div class="footer__item-social-row">
                <div class="footer__item-social-item">
                  <a href="https://vk.com/eldorado_job" class="footer__item-social-link" target="blank">ВК</a>
                  <a href="https://www.youtube.com/channel/UCF9nmUgfNLpHAM4FPB1I3uA" class="footer__item-social-link" target="blank">YouTube</a>
                  <a href="https://www.instagram.com/eldorado_job/" class="footer__item-social-link" target="blank">Instagram</a>
                </div>
              </div>
            </div>

            <a href="/privacy-policy/" class="footer__info-text">Политика конфиденциальности</a>
          </div>

          <div class="footer__item">
            <p class="footer__item-title">Направления</p>
            <a target="blank" href="https://jobinme.mvideoeldorado.ru/it" class="footem__item-directions-link">IT-департамент</a>
            <a target="blank" href="https://jobinme.mvideoeldorado.ru/mvideo" class="footem__item-directions-link"
              >Розничные магазины</a
            >
            <a target="blank" href="https://jobinme.mvideoeldorado.ru/office" class="footem__item-directions-link"
              >Центральный офиc</a
            >
            <a target="blank" href="https://jobinme.mvideoeldorado.ru/logistics" class="footem__item-directions-link"
              >Сервис и логистика</a
            >
            <a target="blank" href="https://jobinme.mvideoeldorado.ru/" class="footem__item-directions-link">Студентам</a>

            <p class="footer__info-text">Made by Annti + AmberLabs</p>
          </div>
        </div>

        <a href="/" class="footer__logo-link-mobile">
          <img
            src="<?php echo THEME_URL; ?>/assets/images/footer/footer__logo.svg"
            alt="Logo"
            class="footer__logo"
          />
        </a>

        <div class="footer__info-block-mobile">
          <div class="footer__info-block-item-mobile">
            <p class="footer__info-text-mobile">
              © 2021 Группа «М.Видео-Эльдорадо»
            </p>
          </div>

          <div class="footer__info-block-item-mobile">
            <a href="/privacy-policy/" class="footer__info-text-mobile">Политика конфиденциальности</a>
          </div>

          <div class="footer__info-block-item-mobile">
            <p class="footer__info-text-mobile">Made by Annti + AmberLabs</p>
          </div>
        </div>
      </div>
    </footer>
    <!--  //Footer  -->

    <?php if( !is_single() ): ?>
    <!-- Flyout section -->
    <div class="flyout">
      <div class="flyout__side-bar"></div>
      <div class="vacancy">
        <div class="container">
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

          <!-- Vacancy Intro-block -->
          <div class="vacancy__intro">
            <div class="vacancy__video">
              <div class="vacancy__video-container">
                <img src="<?php echo THEME_URL; ?>/assets/images/flyout/flyout-intro/intro-bg.png" alt="">
              </div>
            </div>
            <div class="vacancy__intro-description">
              <p class="vacancy__intro-description-text">
                В команду Аналитики ищем опытного руководителя, который возьмёт
                на себя ответственность за управление нашими ключевыми
                аналитическими продуктами — автоматизированной системой
                пополнения складских запасов и системой предсказания количества
                покупателей в магазине.
              </p>
              <p class="vacancy__intro-description-text">
                У нас мощная и дружная команда аналитиков и разработчиков
                с опытом работы в геймдеве, фудтехе и инщуртехе, которой нужно
                помочь правильно выстроить рабочие процессы и бэклог задач.
              </p>
            </div>
          </div>
          <!-- //Vacancy Intro-block -->

          <!-- Vacancy Description-block -->
          <div id="expectations" class="vacancy__description">

            <div class="vacancy__description-block">
              <div class="vacancy__description-title">
                <p class="vacancy__description-title-text">Проект</p>
              </div>
              <div class="vacancy__description-list">
                <ul id="vacancy_project" class="vacancy__description-list-wrapper">
                  <li class="vacancy__description-list-item">
                    Высшее образование (экономическое/техническое)
                  </li>
                  <li class="vacancy__description-list-item">
                    Аналогичный опыт работы от трёх лет
                  </li>
                  <li class="vacancy__description-list-item">
                    Базовое понимание и формирование стратегии развития
                    продукта, технологический кругозор, базовое понимание
                    принципов и подходов создания ИТ решений
                  </li>
                  <li class="vacancy__description-list-item">
                    Понимание экономики и финансов продукта, метрики и TCO
                  </li>
                  <li class="vacancy__description-list-item">
                    Глубокое понимание работы бизнеса. Отличное понимание
                    продуктового подхода
                  </li>
                  <li class="vacancy__description-list-item">
                    Умение организовывать и делать прототипирование и MVP
                    (Minimum Valuable Product), навыки формирования стратегии
                    развития продукта
                  </li>
                  <li class="vacancy__description-list-item">
                    Умение работать с данными, создавать ИТ решения, опыт
                    запуска и лидирования продуктов и проектов
                  </li>
                </ul>
              </div>
            </div>

          </div>
          <!-- //Vacancy Description-block -->

          <!-- Vacancy Office-block -->
          <!-- <div class="vacancy__office">
            <div class="vacancy__office-map">
              <div class="vacancy__office-map-selectors">
                <p class="vacancy__office-map-title">Офис на карте</p>
                <div class="vacancy__office-map-links-wrapper">
                  <a
                    href=""
                    class="
                      vacancy__office-map-link vacancy__office-map-link-active
                    "
                    >БЦ «Новь»</a
                  >
                  <a href="" class="vacancy__office-map-link">БЦ «Вега»</a>
                </div>
              </div>

              <div class="vacancy__office-map-wrapper">
                <img
                  class="vacancy__office-map-image"
                  src="<?php echo THEME_URL; ?>/assets/images/flyout/flyout-office/map.png"
                  alt="Map"
                />
              </div>
            </div>

            <div class="vacancy__office-content">
              <div class="vacancy__office-content-top">
                <div class="vacancy__office-adress">
                  <p class="vacancy__office-adress-text">
                    г. Москва, <br />
                    ул. Нижняя Красносельская, д. 40/12, корп. 20
                  </p>
                </div>

                <a href="#" class="vacancy__office-content-link">
                  Построить маршрут
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
              </a>
            </div>
          </div> -->
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
              <?php echo do_shortcode('[contact-form-7 id="224" title="Popap Vacancy"]'); ?>
            </div>
          </div>
          <!-- //Vacancy Form-block -->

          <!-- Vacancy Positions-block -->
          <!-- <div class="vacancy__positions">
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
           -->
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
                          <div class="vacancy__news-item-image-block">
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
                          <div class="vacancy__news-item-image-block">
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
        <!-- //Vacancy New-block-mobile -->

      </div>
    </div>
    <!-- //Flyout section -->
    <?php endif; ?>

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

            <?php
            $formdata = array();

            $args = array(
              'post_type'         => 'product_directions',
              'posts_per_page'    => -1,
            );
            
            $product_directions = new WP_Query( $args );

            $info_product_directions = '';

            if ( $product_directions->have_posts() ) {
              while ( $product_directions->have_posts() ) {
                $product_directions->the_post();

                // $info_product_directions = get_the_title();
                $info_product_directions .= '
                <div class="form__dropdown-list-item">
                  <p class="form__dropdown-item-position">'.get_the_title().'</p>
                  <div class="form__dropdown-item-checked">
                    <img class="form__dropdown-item-checked-image" src="'.THEME_URL.'/assets/images/form/check.svg" alt="Check"></img>
                  </div>
                </div>';
              }
            }
            wp_reset_postdata();

            $info_vaccat = '';
            $terms = get_terms( 'vaccat' );
            if( $terms && ! is_wp_error($terms) ){
              foreach( $terms as $term ){
                $info_vaccat .= '
                <div class="form__dropdown-list-item">
                  <p class="form__dropdown-item-position">'.$term->name.'</p>
                  <div class="form__dropdown-item-checked">
                    <img class="form__dropdown-item-checked-image" src="'.THEME_URL.'/assets/images/form/check.svg" alt="Check"></img>
                  </div>
                </div>';
              }
            }

            $formdata = array(
              'info_product_directions' => $info_product_directions,
              'info_vaccat'             => $info_vaccat
            );
            ?>

            <div class="form__content-right-bar">
              <?php echo do_shortcode('[contact-form-7 id="289" title="Анкета"]'); ?>
              <div id="forminfo" data-formdata='<?php echo json_encode($formdata); ?>' ></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- //Form section -->

<?php
if( is_front_page() ){
  ?>
  <script>
    // Данные для фильтров
    const currentLevels = JSON.parse(levels);
    const currentCities = JSON.parse(towns);

    // Страница IT
    const idPageTagifyLevelInput = document.querySelector('input[name="tags-select-mode"].profession__level-select');
    const idPageTagifyCityInput = document.querySelector('input[name="tags-select-mode"].profession__city-select');
    const idPageLevelInput = document.querySelector('#level')
    const idPageCityInput = document.querySelector('#town')

    // Инициализация селекта выбора уровня
    const idPageLevelSelect = new Tagify(idPageTagifyLevelInput, {
      enforceWhitelist: true,
      mode: 'select',
      whitelist: Object.values(currentLevels),
      userInput: false,
    });

    idPageLevelSelect.on('change', () => {
      let currentValue;

      for (let prop in currentLevels) {
        if (currentLevels[prop] === JSON.parse(idPageTagifyLevelInput.value)[0].value) {
          currentValue = prop
        }
      }
      idPageLevelInput.value = currentValue;
    })

    // Инициализация селекта выбора города
    const idPageCitySelect= new Tagify(idPageTagifyCityInput, {
      enforceWhitelist: true,
      mode: 'select',
      whitelist: ['Москва'],
      userInput: false,
    });

    idPageCitySelect.on('change', () => {
      let currentValue;

      for (let prop in currentCities) {
        if (currentCities[prop] === JSON.parse(idPageTagifyCityInput.value)[0].value) {
          currentValue = prop
        }
      }
      idPageCityInput.value = currentValue;
    })

  </script>
  <?php
} else{
  ?>
  <script>
    // Страница Листинга вакансий
    const listingTagifyLevelInput = document.querySelector('.listing__level-select');
    const listingTagifyCityInput = document.querySelector('.listing__city-select');

    const listingLevelInput = document.querySelector('#listing__level-select');
    const listingCityInput = document.querySelector('#listing__city-select');

    // Данные для фильтров
    const currentLevels = JSON.parse(level_arr);
    const currentCities = JSON.parse(town_arr);
    const currentVaccat = JSON.parse(vaccat_arr);
    const currentVacancyTitles = JSON.parse(vacancy_titles); // ОБЯЗАТЕЛЬНО ПОСМОТРЕТЬ КАК ВЫГЛЯДИТ! ИНАЧЕ НЕЖЕЛИ ДРУГИЕ, КОТОРЫЕ ВЫШЕ!!!

    // Инициализация селекта Уровень
    const listingLevelSelect = new Tagify(listingTagifyLevelInput, {
      enforceWhitelist: true,
      mode: 'select',
      whitelist: Object.values(currentLevels),
      userInput: false,
    });

    listingLevelSelect.on('change', () => {
      let currentValue;

      for (let prop in currentLevels) {
        if (currentLevels[prop] === JSON.parse(listingTagifyLevelInput.value)[0].value) {
          currentValue = prop
        }
      }
      listingLevelInput.value = currentValue;
    })

    // Инициализация селекта Город
    const listingCitySelect = new Tagify(listingTagifyCityInput, {
      enforceWhitelist: true,
      mode: 'select',
      whitelist: ['Москва'],
      userInput: false,
    });

    listingCitySelect.on('change', () => {
      let currentValue;

      for (let prop in currentCities) {
        if (currentCities[prop] === JSON.parse(listingTagifyCityInput.value)[0].value) {
          currentValue = prop
        }
      }
      listingCityInput.value = currentValue;
    })
  </script>
  <?php
}
?>
<?php wp_footer(); ?>


    </body>
</html>