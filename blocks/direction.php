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

        <div class="direction__select-container-mobile">
          <p class="direction__select-title">Выбери направление</p>
          <div class="direction__select-field"><?php echo get_the_title($product_directions->posts[0]->ID); ?></div>
          <div class="direction__select-list-wrapper hide">
            <ul class="direction__select">
              <?php
              $i = 1;
              if ( $product_directions->have_posts() ) {
                while ( $product_directions->have_posts() ) {
                  $product_directions->the_post();
                  if( 1 == $i ){
                    $active = 'direction__direction-item-active';
                  } else{
                    $active = '';
                  }
                  ?>
                  <li class="direction__select-item <?php echo $active; ?>" data-tab-uid="<?php the_ID(); ?>"><?php the_title(); ?></li>
                  <?php
                  $i++;
                }
              }
              ?>
            </ul>
          </div>
        </div>
      </div>
      <!-- tab content-->
      <div class="direction__main-content tab-item-content" data-tab-uid='1'>
        <div class="direction__tribe-description">
          <div class="direction__choosed tab-choice">
            <p class="direction__choosed-item">B2C</p>
          </div>

          <div class="direction__description-container">
            <div class="direction__director-container-mobile">
              <div class="direction__director-image-block-mobile">
                <img src="./images/direction/director.png" alt="" class="direction__director-image" />
              </div>
              <div class="direction__director-name-wrapper">
                <p class="direction__director-name">
                  Андрей Пчелинцев<span>,</span>
                </p>
                <p class="direction__director-name">СРО трайба B2C</p>
              </div>
            </div>

            <div class="direction__direction-container tab-list">
              <p class="direction__choose-mobile">Выбери направление</p>
              <?php
              $i = 1;
              if ( $product_directions->have_posts() ) {
                while ( $product_directions->have_posts() ) {
                  $product_directions->the_post();
                  if( 1 == $i ){
                    $active = 'direction__direction-item-active';
                  } else{
                    $active = '';
                  }
                  ?>
                  <div class="direction__direction-item tab-list-item <?php echo $active; ?>" data-tab-uid="<?php the_ID(); ?>">
                    <p class="direction__direction"><?php the_title(); ?></p>
                  </div>
                  <?php
                  $i++;
                }
              }
              ?>
            </div>
          </div>

          <?php
            $j = 1;
            if ( $product_directions->have_posts() ) {
              while ( $product_directions->have_posts() ) {
                $product_directions->the_post();
                if( 1 == $j ){
                  $main_display = 'display: block;';
                } else{
                  $main_display = 'display: none;';
                }
                ?>
                <div class="direction__main-content tab-item-content" data-tab-uid='<?php echo the_ID(); ?>' style="<?php echo $main_display; ?>" >
                  <div class="direction__tribe-description">
                    <div class="direction__choosed tab-choice">
                      <p class="direction__choosed-item"><?php the_title(); ?></p>
                    </div>

                    <div class="direction__description-container">
                      <div class="direction__director-container-mobile">
                        <div class="direction__director-image-block-mobile">
                          <img
                            src="<?php echo get_the_post_thumbnail_url(); ?>"
                            alt=""
                            class="direction__director-image"
                          />
                        </div>
                        <div class="direction__director-name-wrapper">
                          <p class="direction__director-name">
                            <?php echo get_field( 'director_name' ); ?><span>,</span>
                          </p>
                          <p class="direction__director-name"><?php echo get_field( 'director_position' ); ?></p>
                        </div>
                      </div>

                      <div class="direction__description-text">
                        <?php the_content(); ?>
                      </div>

                      <a href="#" class="direction__description-link-mobile">Развернуть текст</a>
                    </div>

                    <div class="direction__director-container">
                      <div class="direction__director-image-block">
                        <img
                          src="<?php echo get_the_post_thumbnail_url(); ?>"
                          alt=""
                          class="direction__director-image"
                        />
                      </div>
                      <p class="direction__director-name">
                        <?php echo get_field( 'director_name' ); ?><span>,</span>
                      </p>
                      <p class="direction__director-name"><?php echo get_field( 'director_position' ); ?></p>
                    </div>
                  </div>

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
                </div>
                <?php
                $j++;
              }
            }
            wp_reset_postdata();
          ?>
        </div>
      </div>

  </div>

</section>
<!--  //Product Direction Section  -->
