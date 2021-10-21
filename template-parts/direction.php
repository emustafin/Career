<?php
$args = array(
  'post_type'         => 'product_directions',
  'posts_per_page'    => -1,
);

$product_directions = new WP_Query( $args );
?>
<!--  Product Direction Section  -->
<section class="direction">
      <div class="container">
        <h2 class="direction__title">
          Продуктовые <br />
          направления
        </h2>

        <!-- Кастомный селект, который делал Никита -->
<!-- 
        <div class="custom-select" id="custom-select-first">
          <span class="custom-select__label">Выбери направление</span>
          <span class="custom-select__change-select"><?php echo get_the_title($product_directions->posts[0]->ID); ?></span>
          <div class="custom-select__select-list-wrap">
            <ul class="custom-select__select-list">
              <?php if ( $product_directions->have_posts() ):
                while ( $product_directions->have_posts() ): $product_directions->the_post(); ?>

                  <li class="custom-select__select-list-item tab-list-item <?php echo $active; ?>" data-tab-uid="<?php the_ID(); ?>" data-value="<?php the_title(); ?>">
                    <?php the_title(); ?>
                    <svg class="custom-select__list-icon" width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M6.5 10.151l5.576-5.575.849.848L6.5 11.848 3.076 8.425l.849-.848L6.5 10.15z" fill="#000"/>
                    </svg>
                  </li>
                  
                  <?php endwhile;
              endif;?>
            </ul>
          </div>
        </div>
 -->
        <div class="direction__select-container-mobile" data-name="closed">
        <svg
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

          <p class="direction__select-title">Выбери направление</p>
          <div class="direction__select-field"><?php echo get_the_title($product_directions->posts[0]->ID); ?></div>
          <div class="direction__select-list-wrapper hide" >
            <ul class="direction__select">
            <?php if ( $product_directions->have_posts() ):
                while ( $product_directions->have_posts() ): $product_directions->the_post(); ?>
              <li class="direction__select-item <?php echo $active; ?>" data-tab-uid="<?php the_ID(); ?>" data-value="<?php the_title(); ?>"><?php the_title(); ?></li>

              <?php endwhile;
              endif;?>
            </ul>
          </div>
        </div>


        <div class="direction__content-wrapper tab-content">
          <div class="direction__side-bar">
            <div class="direction__choose-container">
              <p class="direction__choose">Выбери направление</p>
            </div>

            <div class="direction__direction-container tab-list" id="tabController">
              <p class="direction__choose-mobile">Выбери направление</p>
              <?php $i = 1;
              if ( $product_directions->have_posts() ):
                while ( $product_directions->have_posts() ):
                  $product_directions->the_post();
                  $active = '';
                  if( 1 == $i ) $active = 'direction__direction-item-active'; ?>

                  <div class="direction__direction-item tab-list-item <?php echo $active; ?>" data-tab-uid="<?php the_ID(); ?>">
                  <p class="direction__direction"><?php the_title(); ?></p>
                  
                  <svg
                    width="14"
                    height="10"
                    viewBox="0 0 14 10"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M11.5515 4.39995L8.57574 1.42421L9.42426 0.575684L13.8485 4.99995L9.42426 9.42421L8.57574 8.57568L11.5515 5.59995H0V4.39995H11.5515Z"
                      fill="black"
                    />
                  </svg>
                  </div>

                  <?php $i++;
                endwhile;
              endif; ?>
            </div>
          </div>
      <div class="direction__main-content" id="tab-content">
          <?php $j = 1;
            if ( $product_directions->have_posts() ):
              while ( $product_directions->have_posts() ):
                $product_directions->the_post();
                $main_display = 'display: none;';
                if( 1 == $j )  $main_display = 'display: block;'; ?>

                <div class="tab-item-content" data-tab-uid='<?php echo the_ID(); ?>' style="<?php echo $main_display; ?>" >
                  <div class="direction__tribe-description">
                    <div class="direction__choosed tab-choice">
                      <p class="direction__choosed-item"><?php the_title(); ?></p>
                    </div>

                    <div class="direction__description-container">
                      <div class="direction__director-container-mobile">

                         <?php if( have_rows('people') ):
                        while( have_rows('people') ) : the_row();
                            $sub_value = get_sub_field('sub_field'); ?>

                            <div class="direction__director-block">
                              <div class="direction__director-image-block loading">
                                <img
                                  data-src="<?php echo get_sub_field('img'); ?>"
                                  src="<?php echo THEME_URL; ?>/assets/images/Lazy-loading/1x1.png"
                                  alt="director"
                                  class="direction__director-image"
                                  width="100"
                                  height="100"
                                />
                              </div>
                              <p class="direction__director-name">
                                <?php echo get_sub_field('director_name'); ?><span>,</span>
                              </p>
                              <p class="direction__director-name"><?php echo get_sub_field('director_position'); ?></p>
                            </div>

                        <?php endwhile;
                      endif; ?>

                      </div>

                      <div class="direction__description-text">
                        <?php the_content(); ?>
                      </div>

                      <!-- <a href="#" class="direction__description-link-mobile">Развернуть текст</a> -->
                    </div>

                    <div class="direction__director-container">

                      <?php if( have_rows('people') ):
                        while( have_rows('people') ) : the_row();
                            $sub_value = get_sub_field('sub_field'); ?>

                            <div class="direction__director-block">
                              <div class="direction__director-image-block loading">
                                <img
                                  data-src="<?php echo get_sub_field('img'); ?>"
                                  src="<?php echo THEME_URL; ?>/assets/images/Lazy-loading/1x1.png"
                                  alt="director"
                                  class="direction__director-image"
                                  width="100"
                                  height="100"
                                />
                              </div>
                              <p class="direction__director-name">
                                <?php echo get_sub_field('director_name'); ?><span>,</span>
                              </p>
                              <p class="direction__director-name"><?php echo get_sub_field('director_position'); ?></p>
                            </div>

                        <?php endwhile;
                      endif; ?>
                    </div>
                  </div>

                  <!-- Блок с продуктами по направлениям -->
                  <!-- 
                    <div class="direction__products-wrapper">
                      <div class="direction__products-container">
                        <p class="direction__products-title">Продукты трайба</p>
                      </div>

                      <div class="direction__products-table-wrapper">
                        <?php
                        if( have_rows('direction_products') ):

                            while( have_rows('direction_products') ) : the_row();

                                ?>
                                <div class="direction__products-table-item">
                                  <p class="direction__item-title"><?php echo get_sub_field('title'); ?></p>
                                  <p class="direction__item-text"><?php echo get_sub_field('description'); ?></p>
                                </div>
                                <?php

                            endwhile;
                        endif;
                        ?>
                      </div>

                    </div>
                    <a href="#" class="direction__products-link-mobile">
                      еще
                      <span class="direction__products-link-mobile-number">3</span>
                      продукта
                    </a> 
                  -->
                  <!-- //Блок с продуктами по направлениям -->

                </div>

                <?php $j++;
              endwhile;
            endif;
            wp_reset_postdata();
          ?>
            </div>
        </div>
      </div>

      </div>

    </section>
<!--  //Product Direction Section  -->