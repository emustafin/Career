<!-- Section Why-us -->
<div class="retail__why-us">
  <div class="goal__content-wrapper">
    <div class="goal__side-block">
      <div class="goal__side-block-container">
        <div class="goal__item-text">
            <?php echo get_sub_field('description'); ?>
        </div>
      </div>
    </div>

    <!-- Goal main block - Desktop -->
    <div class="goal__main-block">
      <div class="goal__main-block-title-wrapper">
        <p class="goal__facts">Цифры и факты</p>

        <div class="goal__slide-buttons-mobile">
          <button class="why-are-we__slide-arrow" data-name="prev">
            <img
              src="<?php echo THEME_URL; ?>/assets/images/advantages/small-arrow-left.svg"
              alt="Arrow-right"
            />
          </button>

          <p class="why-are-we__slide-number-mobile">
            <span>1</span>/<span>4</span>
          </p>

          <button class="why-are-we__slide-arrow" data-name="next">
            <img
              src="<?php echo THEME_URL; ?>/assets/images/advantages/small-arrow-right.svg"
              alt="Arrow-right"
            />
          </button>
        </div>
      </div>
      <div class="goal__wrapper">
        <div class="goal__item">
          <h3 class="goal__item-title"><?php echo get_sub_field('block_title_1'); ?></h3>
          <div class="goal__item-text">
            <?php echo get_sub_field('block_description_1'); ?>
          </div>
          <div class="goal__item-image-container">
            <svg width="96" height="96" viewBox="0 0 96 96" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="48" cy="56" r="39.5" stroke="#E31235" stroke-miterlimit="1.24264"/>
            </svg>
          </div>
        </div>

        <div class="goal__item">
          <h3 class="goal__item-title"><?php echo get_sub_field('block_title_2'); ?></h3>
          <div class="goal__item-text">
            <?php echo get_sub_field('block_description_2'); ?>
          </div>
          <div class="goal__item-image-container">
            <svg width="96" height="96" viewBox="0 0 96 96" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="28" cy="60" r="27.5" stroke="#E31235"/>
                <circle cx="68" cy="60" r="27.5" stroke="#E31235"/>
            </svg>
          </div>
        </div>

        <div class="goal__item">
          <h3 class="goal__item-title"><?php echo get_sub_field('block_title_3'); ?></h3>
          <div class="goal__item-text">
            <?php echo get_sub_field('block_description_3'); ?>
          </div>
          <div class="goal__item-image-container">
            <svg width="96" height="96" viewBox="0 0 96 96" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="61.5" cy="42.5" r="26" stroke="#E31235"/>
                <circle cx="38" cy="66" r="17.5" stroke="#E31235"/>
                <circle cx="21.5" cy="82.5" r="13" stroke="#E31235"/>
            </svg>
          </div>
        </div>

        <div class="goal__item">
          <h3 class="goal__item-title"><?php echo get_sub_field('block_title_4'); ?></h3>
          <div class="goal__item-text">
            <?php echo get_sub_field('block_description_4'); ?>
          </div>
          <div class="goal__item-image-container">
            <svg width="96" height="96" viewBox="0 0 96 96" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="48" cy="56" r="39.5" stroke="#E31235"/>
                <circle cx="35" cy="47" r="23.5" stroke="#E31235"/>
            </svg>
          </div>
        </div>
      </div>
    </div>
    <!-- //Goal main block - Desktop -->

    <!-- Goal main block - Mobile -->
    <div
      class="goal__main-block goal__main-block-mobile swiper goal-slider"
    >
      <div class="goal__main-block-title-wrapper">
        <p class="goal__facts">Цифры и факты</p>

        <div class="goal__slide-buttons-mobile">
          <button class="why-are-we__slide-arrow" data-name="prev">
            <img
              src="<?php echo THEME_URL; ?>/assets/images/advantages/small-arrow-left.svg"
              alt="Arrow-right"
            />
          </button>

          <p class="why-are-we__slide-number-mobile">
            <span class="goal__current-slide">1</span>/<span
              class="goal__slide-value"
              >4</span
            >
          </p>

          <button class="why-are-we__slide-arrow" data-name="next">
            <img
              src="<?php echo THEME_URL; ?>/assets/images/advantages/small-arrow-right.svg"
              alt="Arrow-right"
            />
          </button>
        </div>
      </div>
      <div class="goal__wrapper goal__wrapper-mobile swiper-wrapper">
        <div class="goal__item swiper-slide">
          <h3 class="goal__item-title"><?php echo get_sub_field('block_title_1'); ?></h3>
          <div class="goal__item-text">
            <?php echo get_sub_field('block_description_1'); ?>
          </div>
          <div class="goal__item-image-container">
            <svg width="96" height="96" viewBox="0 0 96 96" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="48" cy="56" r="39.5" stroke="#E31235" stroke-miterlimit="1.24264"/>
            </svg>
          </div>
        </div>

        <div class="goal__item swiper-slide">
          <h3 class="goal__item-title"><?php echo get_sub_field('block_title_2'); ?></h3>
          <div class="goal__item-text">
            <?php echo get_sub_field('block_description_2'); ?>
          </div>
          <div class="goal__item-image-container">
            <svg width="96" height="96" viewBox="0 0 96 96" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="28" cy="60" r="27.5" stroke="#E31235"/>
                <circle cx="68" cy="60" r="27.5" stroke="#E31235"/>
            </svg>
          </div>
        </div>

        <div class="goal__item swiper-slide">
          <h3 class="goal__item-title"><?php echo get_sub_field('block_title_3'); ?></h3>
          <div class="goal__item-text">
            <?php echo get_sub_field('block_description_3'); ?>
          </div>
          <div class="goal__item-image-container">
            <svg width="96" height="96" viewBox="0 0 96 96" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="61.5" cy="42.5" r="26" stroke="#E31235"/>
                <circle cx="38" cy="66" r="17.5" stroke="#E31235"/>
                <circle cx="21.5" cy="82.5" r="13" stroke="#E31235"/>
            </svg>
          </div>
        </div>

        <div class="goal__item swiper-slide">
          <h3 class="goal__item-title"><?php echo get_sub_field('block_title_4'); ?></h3>
          <div class="goal__item-text">
            <?php echo get_sub_field('block_description_4'); ?>
          </div>
          <div class="goal__item-image-container">
              <svg width="96" height="96" viewBox="0 0 96 96" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="48" cy="56" r="39.5" stroke="#E31235"/>
                  <circle cx="35" cy="47" r="23.5" stroke="#E31235"/>
              </svg>
          </div>
        </div>
      </div>
    </div>
    <!-- //Goal main block - Mobile -->
  </div>
</div>
<!-- //Section Why-us -->