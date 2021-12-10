<!-- Section positions -->
<?php
$mvideo_retail_position = get_sub_field('mvideo_retail_position');
$eldorado_retail_position = get_sub_field('eldorado_retail_position');
?>
<section class="retail__position">

  <div class="retail__position-title-wrapper mvideo">
    <h2 class="retail__position-title"><?php echo $mvideo_retail_position['title_1']; ?></h2>
    <h2 class="retail__position-title-brand-mvideo"><?php echo $mvideo_retail_position['title_2']; ?></h2>
  </div>

  <div class="retail__position-title-wrapper eldorado hide">
    <h2 class="retail__position-title"><?php echo $eldorado_retail_position['title_1']; ?></h2>
    <h2 class="retail__position-title-brand-eldorado"><?php echo $eldorado_retail_position['title_2']; ?></h2>
  </div>

  <div class="retail__position-content mvideo">
    <div class="retail__position-side-bar">
      <p class="retail__position-side-bar-title">Начать карьеру просто</p>

      <div class="retail__position-side-bar-item">
        <h3 class="retail__position-side-bar-item-title-mvideo">01</h3>
        <div class="retail__position-side-bar-text">
          <?php echo $mvideo_retail_position['description_item_1']; ?>
        </div>
      </div>

      <div class="retail__position-side-bar-item">
        <h3 class="retail__position-side-bar-item-title-mvideo">02</h3>
        <div class="retail__position-side-bar-text">
          <?php echo $mvideo_retail_position['description_item_2']; ?>
        </div>
      </div>

      <div class="retail__position-side-bar-item">
        <h3 class="retail__position-side-bar-item-title-mvideo">03</h3>
        <div class="retail__position-side-bar-text">
          <?php echo $mvideo_retail_position['description_item_3']; ?>
        </div>
      </div>
    </div>

    <div class="retail__position-content-bar">
      <div class="retail__position-headline">
        <p class="retail__position-headline-text">Наши вакансии</p>
        <!-- <a href="#" class="retail__position-headline-link">
          Все вакансии

          <svg
            class="retail__position-headline-link-arrow"
            width="14"
            height="10"
            viewBox="0 0 14 10"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M11.5515 4.40044L8.57574 1.4247L9.42426 0.576172L13.8485 5.00044L9.42426 9.4247L8.57574 8.57617L11.5515 5.60044H0V4.40044H11.5515Z"
              fill="black"
            />
          </svg>
        </a> -->
      </div>

      <div class="retail__position-list">

        <?php
          $args = array(
              'post_type'         => 'vacancies',
              'posts_per_page'    => -1,
              'post_status'       => 'publish',
              'posts_per_page'    => 5,
              'meta_query'        => array(
                'relation'		=> 'AND',
                array(
                    'key'		=> 'check_mvideo_eldorado',
                    'value'		=> 'mvideo',
                    'compare'	=> '='
                )
              )
          );

          $retail_vacancies = new WP_Query( $args );

          if ( $retail_vacancies->have_posts() ) {
              while ( $retail_vacancies->have_posts() ) {
                  $retail_vacancies->the_post();
                  $vacancy_item_id = get_the_ID();
                  include(THEME_DIR . '/template-parts/loop-parts/retail__position_list_item.php');
              }
          } else {
              echo 'Вакансий не найдено';
          }
          wp_reset_postdata();
        ?>
      </div>
    </div>
  </div>

  <div class="retail__position-content eldorado hide">
    <div class="retail__position-side-bar">
      <p class="retail__position-side-bar-title">Начать карьеру просто</p>

      <div class="retail__position-side-bar-item">
        <h3 class="retail__position-side-bar-item-title-eldorado">01</h3>
        <div class="retail__position-side-bar-text">
          <?php echo $eldorado_retail_position['description_item_1']; ?>
        </div>
      </div>

      <div class="retail__position-side-bar-item">
        <h3 class="retail__position-side-bar-item-title-eldorado">02</h3>
        <div class="retail__position-side-bar-text">
          <?php echo $eldorado_retail_position['description_item_2']; ?>
        </div>
      </div>

      <div class="retail__position-side-bar-item">
        <h3 class="retail__position-side-bar-item-title-eldorado">03</h3>
        <div class="retail__position-side-bar-text">
          <?php echo $eldorado_retail_position['description_item_3']; ?>
        </div>
      </div>
    </div>

    <div class="retail__position-content-bar">
      <div class="retail__position-headline">
        <p class="retail__position-headline-text">Наши вакансии</p>
        <!-- <a href="#" class="retail__position-headline-link">
          Все вакансии

          <svg
            class="retail__position-headline-link-arrow"
            width="14"
            height="10"
            viewBox="0 0 14 10"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
            >
            <path
              d="M11.5515 4.40044L8.57574 1.4247L9.42426 0.576172L13.8485 5.00044L9.42426 9.4247L8.57574 8.57617L11.5515 5.60044H0V4.40044H11.5515Z"
              fill="black"
            />
          </svg>
        </a> -->
      </div>

      <div class="retail__position-list">

        <?php
          $args = array(
              'post_type'         => 'vacancies',
              'posts_per_page'    => -1,
              'post_status'       => 'publish',
              'posts_per_page'    => 5,
              'meta_query'        => array(
                'relation'		=> 'AND',
                array(
                    'key'		=> 'check_mvideo_eldorado',
                    'value'		=> 'eldorado',
                    'compare'	=> '='
                )
              )
          );

          $retail_vacancies = new WP_Query( $args );

          if ( $retail_vacancies->have_posts() ) {
              while ( $retail_vacancies->have_posts() ) {
                  $retail_vacancies->the_post();
                  $vacancy_item_id = get_the_ID();
                  include(THEME_DIR . '/template-parts/loop-parts/retail__position_list_item.php');
              }
          } else {
              echo 'Вакансий не найдено';
          }
          wp_reset_postdata();
        ?>
      </div>
    </div>
  </div>

</section>
<!-- //Section positions -->