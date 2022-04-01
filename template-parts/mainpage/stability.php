<!-- Section Stability -->
<div class="main-stability">
  <div class="main-stability__left-bar">
    <div class="main-stability__text"><?php echo get_sub_field('description'); ?></div>

    <a href="<?php echo get_sub_field('left_url_link'); ?>" class="main-stability__left-bar-link">
      <?php echo get_sub_field('left_url_text'); ?>
      <svg
        width="10"
        height="10"
        viewBox="0 0 10 10"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          d="M7.55142 1.5999H2.99995V0.399902H8.99995C9.33132 0.399902 9.59995 0.668531 9.59995 0.999902V6.9999H8.39995V2.44843L1.42421 9.42417L0.575684 8.57564L7.55142 1.5999Z"
          fill="black"
        />
      </svg>
    </a>
  </div>

  <div class="main-stability__right-bar">
    <div class="main-stability__right-bar-controls-mobile">
      <button class="main-stability__button-show-text">
        Развернуть текст
        <svg
          width="10"
          height="10"
          viewBox="0 0 10 10"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M5.58237 7.56954V0.925781H4.38237V7.53438L1.42421 4.57622L0.575684 5.42475L4.22213 9.0712C4.65171 9.50078 5.34819 9.50078 5.77776 9.0712L9.42421 5.42475L8.57568 4.57622L5.58237 7.56954Z"
            fill="black"
          />
        </svg>
      </button>

      <div class="goal__slide-buttons-mobile main-awards__buttons-mobile">
        <button class="why-are-we__slide-arrow" data-name="prev">
            <svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.57563 0.575729L0.151367 4.99999L4.57563 9.42426L5.42416 8.57573L2.44842 5.59999H13.9999V4.39999H2.44842L5.42416 1.42426L4.57563 0.575729Z" fill="black"/>
            </svg>
        </button>

        <p class="why-are-we__slide-number-mobile">
          <span class="main-stability__current-slide"> 
            1
          </span>
          /
          <span class="main-stability__slide-value">
            4
          </span>
        </p>

        <button class="why-are-we__slide-arrow" data-name="next">
            <svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.5515 4.39999L8.57574 1.42426L9.42426 0.575729L13.8485 4.99999L9.42426 9.42426L8.57574 8.57573L11.5515 5.59999H0V4.39999H11.5515Z" fill="black"/>
            </svg>
        </button>
      </div>
    </div>

    <div class="main-stability__content-container">
      <div class="main-stability__item">
        <h3 class="main-stability__item-title"><?php echo get_sub_field('block_title_1'); ?></h3>

        <?php
        $block_group_1 = get_sub_field('block_group_1');
        foreach ($block_group_1['block_points'] as $item) {
          ?>
          <div class="main-stability__content-text-wrapper">
            <div class="main-stability__content-number"><?php echo $item['point_number']; ?></div>
            <div class="main-stability__content-text"><?php echo $item['point_text']; ?></div>
          </div>
          <?php
        }
        ?>

        <div class="main-stability__content-icon">
          <svg class="first__svg-main-stability" width="96" height="96" viewBox="0 0 96 96" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="39" cy="29" r="5.5" stroke="#E31235" />
            <circle cx="71" cy="35" r="15.5" stroke="#E31235" />
            <circle cx="33" cy="68" r="23.5" stroke="#E31235" />
          </svg>
        </div>
      </div>

      <div class="main-stability__item">
        <h3 class="main-stability__item-title"><?php echo get_sub_field('block_title_2'); ?></h3>

        <?php
        $block_group_1 = get_sub_field('block_group_2');
        foreach ($block_group_1['block_points'] as $item) {
          ?>
          <div class="main-stability__content-text-wrapper">
            <div class="main-stability__content-number"><?php echo $item['point_number']; ?></div>
            <div class="main-stability__content-text"><?php echo $item['point_text']; ?></div>
          </div>
          <?php
        }
        ?>

        <div class="main-stability__content-icon">
          <svg class="second__svg-main-stability" width="96" height="96" viewBox="0 0 96 96" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="54" cy="44" r="19.5" stroke="#E31235" />
            <circle cx="32" cy="64" r="23.5" stroke="#E31235" />
            <circle cx="71" cy="28" r="13.5" stroke="#E31235" />
          </svg>
        </div>
      </div>

      <div class="main-stability__item">
        <h3 class="main-stability__item-title"><?php echo get_sub_field('block_title_3'); ?></h3>

        <?php
        $block_group_1 = get_sub_field('block_group_3');
        foreach ($block_group_1['block_points'] as $item) {
          ?>
          <div class="main-stability__content-text-wrapper">
            <div class="main-stability__content-number"><?php echo $item['point_number']; ?></div>
            <div class="main-stability__content-text"><?php echo $item['point_text']; ?></div>
          </div>
          <?php
        }
        ?>

        <div class="main-stability__content-icon">
          <svg class="third__svg-main-stability" width="96" height="96" viewBox="0 0 96 96" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M59.5 71.4325C58.5689 71.9545 57.6246 72.4702 56.6678 72.9789C31.3106 86.4616 6.78007 89.9165 1.87728 80.6957C-3.02551 71.4749 13.5561 53.0701 38.9133 39.5875C64.2705 26.1048 88.801 22.6499 93.7038 31.8707C96.3906 36.9237 92.6255 44.7346 84.5 52.9822" stroke="#E31235"/>
            <circle cx="72" cy="62" r="15.5" stroke="#E31235" />
          </svg>
        </div>
      </div>

      <div class="main-stability__item">
        <h3 class="main-stability__item-title"><?php echo get_sub_field('block_title_4'); ?></h3>

        <?php
        $block_group_1 = get_sub_field('block_group_4');
        foreach ($block_group_1['block_points'] as $item) {
          ?>
          <div class="main-stability__content-text-wrapper">
            <div class="main-stability__content-number"><?php echo $item['point_number']; ?></div>
            <div class="main-stability__content-text"><?php echo $item['point_text']; ?></div>
          </div>
          <?php
        }
        ?>

        <div class="main-stability__content-icon">
          <svg class="fourth__svg-main-stability" width="96" height="96" viewBox="0 0 96 96" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="48.1765" cy="33.1765" r="20.6765" stroke="#E31235"/>
            <circle cx="62.8235" cy="48.1765" r="20.6765" transform="rotate(90 62.8235 48.1765)" stroke="#E31235"/>
            <circle cx="48.1765" cy="63.1765" r="20.6765" stroke="#E31235"/>
            <circle cx="32.8235" cy="48.1765" r="20.6765" transform="rotate(90 32.8235 48.1765)" stroke="#E31235"/>
          </svg>
        </div>
      </div>
    </div>
    <div class="main-stability__content-container-mobile swiper">
      <div class="main-stability__content-container-wrapper-mobile swiper-wrapper">
        <div class="main-stability__item swiper-slide">
          <h3 class="main-stability__item-title"><?php echo get_sub_field('block_title_1'); ?></h3>

          <?php
          $block_group_1 = get_sub_field('block_group_1');
          foreach ($block_group_1['block_points'] as $item) {
            ?>
            <div class="main-stability__content-text-wrapper">
              <div class="main-stability__content-number"><?php echo $item['point_number']; ?></div>
              <div class="main-stability__content-text"><?php echo $item['point_text']; ?></div>
            </div>
            <?php
          }
          ?>

          <div class="main-stability__content-icon">
            <svg class="first__svg-main-stability" width="96" height="96" viewBox="0 0 96 96" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="39" cy="29" r="5.5" stroke="#E31235" />
              <circle cx="71" cy="35" r="15.5" stroke="#E31235" />
              <circle cx="33" cy="68" r="23.5" stroke="#E31235" />
            </svg>
          </div>
        </div>

        <div class="main-stability__item swiper-slide">
          <h3 class="main-stability__item-title"><?php echo get_sub_field('block_title_2'); ?></h3>

          <?php
          $block_group_1 = get_sub_field('block_group_2');
          foreach ($block_group_1['block_points'] as $item) {
            ?>
            <div class="main-stability__content-text-wrapper">
              <div class="main-stability__content-number"><?php echo $item['point_number']; ?></div>
              <div class="main-stability__content-text"><?php echo $item['point_text']; ?></div>
            </div>
            <?php
          }
          ?>

          <div class="main-stability__content-icon">
            <svg class="second__svg-main-stability" width="96" height="96" viewBox="0 0 96 96" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="54" cy="44" r="19.5" stroke="#E31235" />
              <circle cx="32" cy="64" r="23.5" stroke="#E31235" />
              <circle cx="71" cy="28" r="13.5" stroke="#E31235" />
            </svg>
          </div>
        </div>

        <div class="main-stability__item swiper-slide">
          <h3 class="main-stability__item-title"><?php echo get_sub_field('block_title_3'); ?></h3>

          <?php
          $block_group_1 = get_sub_field('block_group_3');
          foreach ($block_group_1['block_points'] as $item) {
            ?>
            <div class="main-stability__content-text-wrapper">
              <div class="main-stability__content-number"><?php echo $item['point_number']; ?></div>
              <div class="main-stability__content-text"><?php echo $item['point_text']; ?></div>
            </div>
            <?php
          }
          ?>

          <div class="main-stability__content-icon">
            <svg class="third__svg-main-stability" width="96" height="96" viewBox="0 0 96 96" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M59.5 71.4325C58.5689 71.9545 57.6246 72.4702 56.6678 72.9789C31.3106 86.4616 6.78007 89.9165 1.87728 80.6957C-3.02551 71.4749 13.5561 53.0701 38.9133 39.5875C64.2705 26.1048 88.801 22.6499 93.7038 31.8707C96.3906 36.9237 92.6255 44.7346 84.5 52.9822" stroke="#E31235"/>
              <circle cx="72" cy="62" r="15.5" stroke="#E31235" />
            </svg>
          </div>
        </div>

        <div class="main-stability__item swiper-slide">
          <h3 class="main-stability__item-title"><?php echo get_sub_field('block_title_4'); ?></h3>

          <?php
          $block_group_1 = get_sub_field('block_group_4');
          foreach ($block_group_1['block_points'] as $item) {
            ?>
            <div class="main-stability__content-text-wrapper">
              <div class="main-stability__content-number"><?php echo $item['point_number']; ?></div>
              <div class="main-stability__content-text"><?php echo $item['point_text']; ?></div>
            </div>
            <?php
          }
          ?>

          <div class="main-stability__content-icon">
            <svg class="fourth__svg-main-stability" width="96" height="96" viewBox="0 0 96 96" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="48.1765" cy="33.1765" r="20.6765" stroke="#E31235"/>
              <circle cx="62.8235" cy="48.1765" r="20.6765" transform="rotate(90 62.8235 48.1765)" stroke="#E31235"/>
              <circle cx="48.1765" cy="63.1765" r="20.6765" stroke="#E31235"/>
              <circle cx="32.8235" cy="48.1765" r="20.6765" transform="rotate(90 32.8235 48.1765)" stroke="#E31235"/>
            </svg>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- //Section Stability -->