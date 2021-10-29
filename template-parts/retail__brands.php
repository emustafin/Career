<!-- Section Brands -->
<section class="brands">
  <div class="brands__head">
    <div class="brands__head-title">
      <div class="brands__navigation-container">
        <p class="brands__navigation-title">Выбери, что нравится тебе</p>
        <button class="brands__navigation-button" data-name="mvideo">
          М.Видео
        </button>
        <button
          class="brands__navigation-button brands__navigation-button-active"
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
    </div>

    <div class="brands__head-image-container">
      <img
        class="brands__head-image"
        src="<?php echo THEME_URL; ?>/assets/images/retail/brands/brand-eldorado.png"
        alt="brand"
        title="Элдорадо"
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
</section>
<!-- //Section Brands -->