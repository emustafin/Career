<!-- Section Brands -->
<section class="brands">
  <div class="brands__head">
    <div class="brands__head-title">
      <div class="brands__navigation-container">
        <p class="brands__navigation-title">Выбери, что нравится тебе</p>
        <button class="brands__navigation-button brands__navigation-button-active" data-name="mvideo">
          М.Видео
        </button>
        <button
          class="brands__navigation-button"
          data-name="eldorado"
        >
          Эльдорадо
        </button>
      </div>

      <div class="brands__headline">
        <h2 class="brands__headline-title"><?php echo get_sub_field('title_1'); ?></h2>
        <h2 class="brands__headline-title brands__headline-title-brand">
          <?php echo get_sub_field('title_2'); ?>
        </h2>
      </div>

      <div class="brands__headline mvideo">
        <h2 class="brands__headline-title">М.Видео</h2>
        <h2
          class="brands__headline-title brands__headline-title-brand-mvideo"
        >
          Заряжай <br />на впечатления
        </h2>
      </div>

      <div class="brands__headline eldorado hide">
        <h2 class="brands__headline-title">Эльдорадо</h2>
        <h2
          class="
            brands__headline-title brands__headline-title-brand-eldorado
          "
         >
          Заряжай <br />на результат
        </h2>
      </div>

    </div>

    <div class="brands__head-image-container">
      <img
        class="brands__head-image"
        src="<?php echo THEME_URL; ?>/assets/images/retail/brands/brand-eldorado.png"
        alt="brand"
        title="Элдорадо"
      />
    </div>

    <div class="brands__head-image-container eldorado hide">
      <img
        class="brands__head-image"
        src="<?php echo THEME_URL; ?>/assets/images/retail/brands/brand-eldorado.png"
        alt="brand"
        title="Эльдорадо"
      />
    </div>
    <div class="brands__head-image-container mvideo">
      <img
        class="brands__head-image"
        src="<?php echo THEME_URL; ?>/assets/images/retail/brands/brands-mvideo.png"
        alt="brand"
        title="М.Видео"
      />
    </div>
  </div>

  <div class="brands__content">
    <div class="brands__content-side-bar">
      <div class="brands__content-text">
        <?php echo get_sub_field('description'); ?>
      </div>

      <div class="brands__content-statistic-wrapper">
        <div class="brands__content-statistic-item">
          <h2 class="brands__content-statistic-item-title"><?php echo get_sub_field('number_text_1'); ?></h2>
          <div class="brands__content-statistic-item-text">
            <?php echo get_sub_field('description_numbers_1'); ?>
          </div>
        </div>

        <div class="brands__content-statistic-item">
          <h2 class="brands__content-statistic-item-title"><?php echo get_sub_field('number_text_2'); ?></h2>
          <div class="brands__content-statistic-item-text">
            <?php echo get_sub_field('description_numbers_2'); ?>
          </div>
        </div>

        <div class="brands__content-statistic-item">
          <h2 class="brands__content-statistic-item-title"><?php echo get_sub_field('number_text_3'); ?></h2>
          <div class="brands__content-statistic-item-text">
            <?php echo get_sub_field('description_numbers_3'); ?>
          </div>
        </div>
      </div>
      <p class="brands__content-research">
        <?php echo get_sub_field('mini_description'); ?>
      </p>
    </div>

    <div class="brands__content-slider-container">
      <div class="brands__content-slider">
        <div class="brands__content-slider-row">
          <div class="brands__content-slider-item">
            <div class="brands__content-slider-item-image-container">
              <img
                class="brands__content-slider-item-image"
                src="<?php echo get_sub_field('main_img'); ?>"
                alt="slide"
                title="slide-image"
              />
            </div>

            <p class="brands__content-slider-item-text">
              <?php echo get_sub_field('description_img'); ?>
            </p>
          </div>
        </div>

        <div class="brands__content-slider-button-container">
          <button class="brands__content-slider-button-prev">
            <svg
              width="88"
              height="10"
              viewBox="0 0 88 10"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M4.64652 0.646484L0.646522 4.64648L0.292969 5.00004L0.646522 5.35359L4.64652 9.35359L5.35363 8.64648L2.20714 5.5H88V4.5H2.20722L5.35363 1.35359L4.64652 0.646484Z"
                fill="black"
              />
            </svg>
          </button>
          <button class="brands__content-slider-button-next">
            <svg
              width="88"
              height="10"
              viewBox="0 0 88 10"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M85.7929 5.50004H0V4.50004H85.7929L82.6464 1.35359L83.3536 0.646484L87.3536 4.64648L87.7071 5.00004L87.3536 5.35359L83.3536 9.35359L82.6464 8.64648L85.7929 5.50004Z"
                fill="black"
              />
            </svg>
          </button>
        </div>
      </div>
    </div>
  </div>

  <div class="brands__content mvideo">
        <div class="brands__content-side-bar">
          <p class="brands__content-text">
            Работа в магазинах М. Видео — это твоя возможность заряжать клиентов
            на новые впечатления.
          </p>
          <p class="brands__content-text">
            Стань экспертом технологий, работая с новейшей техникой и командой
            профессионалов.
          </p>

          <div class="brands__content-statistic-wrapper">
            <div class="brands__content-statistic-item">
              <h2
                class="
                  brands__content-statistic-item-title
                  brands__content-statistic-item-title-mvideo
                "
              >
                562
              </h2>
              <p class="brands__content-statistic-item-text">
                магазина по всей стране
              </p>
            </div>

            <div class="brands__content-statistic-item">
              <h2
                class="
                  brands__content-statistic-item-title
                  brands__content-statistic-item-title-mvideo
                "
              >
                86%
              </h2>
              <p class="brands__content-statistic-item-text">
                менеджеров вырасли внутри компании
              </p>
            </div>

            <div class="brands__content-statistic-item">
              <h2
                class="
                  brands__content-statistic-item-title
                  brands__content-statistic-item-title-mvideo
                "
              >
                100%
              </h2>
              <p class="brands__content-statistic-item-text">
                людей знают бренд М.Видео*
              </p>
            </div>
          </div>
          <p class="brands__content-research">
            *по данным количественного маркетингового трекингового исследования,
            проведённого ООО «Миллвард Браун АРМИ-Маркетинг», в период
            с 13.01.2020 г. по 27.12.2020 г. среди 9599 респондентов,
            проживающих в 260 городах России с численностью населения свыше
            100 тысяч человек.
          </p>
        </div>

        <div class="brands__content-slider-container">
          <div class="brands__content-slider">
            <div class="brands__content-slider-row">
              <div class="brands__content-slider-item">
                <div class="brands__content-slider-item-image-container">
                  <img
                    class="brands__content-slider-item-image"
                    src="<?php echo THEME_URL; ?>/assets/images/retail/brands/brands__slider-img.png"
                    alt="slide"
                    title="slide-image"
                  />
                </div>

                <p class="brands__content-slider-item-text">
                  В наших магазинах продаётся только самая современная техника —
                  сможешь прикоснуться к ней первым!
                </p>
              </div>

              <div class="brands__content-slider-item">
                <div class="brands__content-slider-item-image-container">
                  <img
                    class="brands__content-slider-item-image"
                    src="<?php echo THEME_URL; ?>/assets/images/retail/brands/brands__slider-img.png"
                    alt="slide"
                    title="slide-image"
                  />
                </div>

                <p class="brands__content-slider-item-text">
                  В наших магазинах продаётся только самая современная техника —
                  сможешь прикоснуться к ней первым!
                </p>
              </div>
            </div>

            <div class="brands__content-slider-button-container">
              <button class="brands__content-slider-button-prev">
                <svg
                  width="88"
                  height="10"
                  viewBox="0 0 88 10"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M4.64652 0.646484L0.646522 4.64648L0.292969 5.00004L0.646522 5.35359L4.64652 9.35359L5.35363 8.64648L2.20714 5.5H88V4.5H2.20722L5.35363 1.35359L4.64652 0.646484Z"
                    fill="black"
                  />
                </svg>
              </button>
              <button class="brands__content-slider-button-next">
                <svg
                  width="88"
                  height="10"
                  viewBox="0 0 88 10"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M85.7929 5.50004H0V4.50004H85.7929L82.6464 1.35359L83.3536 0.646484L87.3536 4.64648L87.7071 5.00004L87.3536 5.35359L83.3536 9.35359L82.6464 8.64648L85.7929 5.50004Z"
                    fill="black"
                  />
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>

      <div class="brands__content eldorado hide">
        <div class="brands__content-side-bar">
          <p class="brands__content-text">
            Ставишь амбициозные цели для развития? Тогда драйв Эльдорадо у тебя
            в ДНК. Мы поможем реализовать твой потенциал и научим добиваться
            большего!
          </p>
          <p class="brands__content-text">
            Работа в магазинах Эльдорадо — это твоя возможность добиваться
            результата и заряжать миллионы людей своей энергией.
          </p>

          <div class="brands__content-statistic-wrapper">
            <div class="brands__content-statistic-item">
              <h2
                class="
                  brands__content-statistic-item-title
                  brands__content-statistic-item-title-eldorado
                "
              >
                612
              </h2>
              <p class="brands__content-statistic-item-text">
                магазинов по всей стране
              </p>
            </div>

            <div class="brands__content-statistic-item">
              <h2
                class="
                  brands__content-statistic-item-title
                  brands__content-statistic-item-title-eldorado
                "
              >
                81%
              </h2>
              <p class="brands__content-statistic-item-text">
                менеджеров вырасли внутри компании
              </p>
            </div>

            <div class="brands__content-statistic-item">
              <h2
                class="
                  brands__content-statistic-item-title
                  brands__content-statistic-item-title-eldorado
                "
              >
                99%
              </h2>
              <p class="brands__content-statistic-item-text">
                людей знают бренд Эльдорадо*
              </p>
            </div>
          </div>
          <p class="brands__content-research">
            *по данным количественного маркетингового трекингового исследования,
            проведённого ООО «Миллвард Браун АРМИ-Маркетинг», в период
            с 13.01.2020 г. по 27.12.2020 г. среди 9599 респондентов,
            проживающих в 260 городах России с численностью населения свыше
            100 тысяч человек.
          </p>
        </div>

        <div class="brands__content-slider-container">
          <div class="brands__content-slider">
            <div class="brands__content-slider-row">
              <div class="brands__content-slider-item">
                <div class="brands__content-slider-item-image-container">
                  <img
                    class="brands__content-slider-item-image"
                    src="<?php echo THEME_URL; ?>/assets/images/retail/brands/brands-gallery-eldorado.png"
                    alt="slide"
                    title="slide-image"
                  />
                </div>

                <p class="brands__content-slider-item-text">
                  В наших магазинах продаётся только самая современная техника —
                  сможешь прикоснуться к ней первым!
                </p>
              </div>

              <div class="brands__content-slider-item">
                <div class="brands__content-slider-item-image-container">
                  <img
                    class="brands__content-slider-item-image"
                    src="<?php echo THEME_URL; ?>/assets/images/retail/brands/brands-gallery-eldorado.png"
                    alt="slide"
                    title="slide-image"
                  />
                </div>

                <p class="brands__content-slider-item-text">
                  В наших магазинах продаётся только самая современная техника —
                  сможешь прикоснуться к ней первым!
                </p>
              </div>
            </div>

            <div class="brands__content-slider-button-container">
              <button class="brands__content-slider-button-prev">
                <svg
                  width="88"
                  height="10"
                  viewBox="0 0 88 10"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M4.64652 0.646484L0.646522 4.64648L0.292969 5.00004L0.646522 5.35359L4.64652 9.35359L5.35363 8.64648L2.20714 5.5H88V4.5H2.20722L5.35363 1.35359L4.64652 0.646484Z"
                    fill="black"
                  />
                </svg>
              </button>
              <button class="brands__content-slider-button-next">
                <svg
                  width="88"
                  height="10"
                  viewBox="0 0 88 10"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M85.7929 5.50004H0V4.50004H85.7929L82.6464 1.35359L83.3536 0.646484L87.3536 4.64648L87.7071 5.00004L87.3536 5.35359L83.3536 9.35359L82.6464 8.64648L85.7929 5.50004Z"
                    fill="black"
                  />
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>

</section>
<!-- //Section Brands -->