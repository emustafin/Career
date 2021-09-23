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

        <div class="custom-select" id="custom-select-first">
          <span class="custom-select__label">Выбери направление</span>
          <span class="custom-select__change-select"><?= get_the_title($product_directions->posts[0]->ID); ?></span>
          <div class="custom-select__select-list-wrap">
            <ul class="custom-select__select-list">
              <? if ( $product_directions->have_posts() ):
                while ( $product_directions->have_posts() ): $product_directions->the_post(); ?>

                  <li class="custom-select__select-list-item tab-list-item <?= $active; ?>" data-tab-uid="<? the_ID(); ?>" data-value="<? the_title(); ?>">
                    <? the_title(); ?>
                    <svg class="custom-select__list-icon" width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M6.5 10.151l5.576-5.575.849.848L6.5 11.848 3.076 8.425l.849-.848L6.5 10.15z" fill="#000"/>
                    </svg>
                  </li>
                  
                  <? endwhile;
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
              <? $i = 1;
              if ( $product_directions->have_posts() ):
                while ( $product_directions->have_posts() ):
                  $product_directions->the_post();
                  $active = '';
                  if( 1 == $i ) $active = 'direction__direction-item-active'; ?>

                  <div class="direction__direction-item tab-list-item <?= $active; ?>" data-tab-uid="<? the_ID(); ?>">
                    <p class="direction__direction"><? the_title(); ?></p>
                  </div>

                  <? $i++;
                endwhile;
              endif; ?>
            </div>
          </div>
      <div class="direction__main-content" id="tab-content">
          <? $j = 1;
            if ( $product_directions->have_posts() ):
              while ( $product_directions->have_posts() ):
                $product_directions->the_post();
                $main_display = 'display: none;';
                if( 1 == $j )  $main_display = 'display: block;'; ?>

                <div class="tab-item-content" data-tab-uid='<?= the_ID(); ?>' style="<?= $main_display; ?>" >
                  <div class="direction__tribe-description">
                    <div class="direction__choosed tab-choice">
                      <p class="direction__choosed-item"><? the_title(); ?></p>
                    </div>

                    <div class="direction__description-container">
                      <div class="direction__director-container-mobile">
                        <div class="direction__director-block">
                          <div class="direction__director-image-block-mobile">
                            <img
                              src="<?= get_the_post_thumbnail_url(); ?>"
                              alt="director"
                              class="direction__director-image"
                            />
                          </div>
                          <div class="direction__director-name-wrapper">
                            <p class="direction__director-name">
                              <?= get_field( 'director_name' ); ?><span>,</span>
                            </p>
                            <p class="direction__director-name"><?= get_field( 'director_position' ); ?></p>
                          </div>
                        </div>

                        <div class="direction__director-block">
                          <div class="direction__director-image-block-mobile">
                            <img
                              src="<?= get_the_post_thumbnail_url(); ?>"
                              alt="director"
                              class="direction__director-image"
                            />
                          </div>
                          <div class="direction__director-name-wrapper">
                            <p class="direction__director-name">
                              <?= get_field( 'director_name' ); ?><span>,</span>
                            </p>
                            <p class="direction__director-name"><?= get_field( 'director_position' ); ?></p>
                          </div>
                        </div>
                      </div>

                      <div class="direction__description-text">
                        <?php the_content(); ?>
                      </div>

                      <a href="#" class="direction__description-link-mobile">Развернуть текст</a>
                    </div>

                    <div class="direction__director-container">

                      <? if( have_rows('people') ):
                        while( have_rows('people') ) : the_row();
                            $sub_value = get_sub_field('sub_field'); ?>

                            <div class="direction__director-block">
                              <div class="direction__director-image-block">
                                <img
                                  src="<?= get_sub_field('img'); ?>"
                                  alt="director"
                                  class="direction__director-image"
                                />
                              </div>
                              <p class="direction__director-name">
                                <?= get_sub_field('director_name'); ?><span>,</span>
                              </p>
                              <p class="direction__director-name"><?= get_sub_field('director_position'); ?></p>
                            </div>

                        <? endwhile;
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
                                  <p class="direction__item-title"><?= get_sub_field('title'); ?></p>
                                  <p class="direction__item-text"><?= get_sub_field('description'); ?></p>
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

                <? $j++;
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