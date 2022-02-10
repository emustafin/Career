<?php 
/*
Template Name: Listing Map
*/

$page_data = array(
  'it'        => array( '/vacancies/?type=it', 'IT-хабе' ),
  'retail'    => array( '/listing-map/?type=retail', 'Розничных магазинах' ),
  'logistic'  => array( '/vacancies/?type=logistic', 'Сервисе и логистике' ),
  'office'    => array( '/vacancies/?type=office', 'Центральном офисе' ),
);

$page_title = $page_data[ 'retail' ][1];
$type_page = 'retail';
if( !empty( $_GET['type'] ) && array_key_exists( $_GET['type'], $page_data ) ){
  $page_title = $page_data[ $_GET['type'] ][1];
  $type_page = $_GET['type'];
} 

$args = array(
  'post_type'         => 'vacancies',
  'posts_per_page'    => -1,
  'post_status'       => 'publish',
  'tax_query'         => array( 
    array(
      'taxonomy' => 'relationship',
      'field'    => 'slug',
      'terms'    => 'roznica'
    )
  )
);

$actually_vacancies_retail = new \WP_Query( $args );
$published_posts = $actually_vacancies_retail->post_count;

if( $actually_vacancies_retail->have_posts() ) :
  while( $actually_vacancies_retail->have_posts() ) :
    $actually_vacancies_retail->the_post();
  endwhile;
endif;

$vacancy_titles = $_GET["search"];

$vaccat_terms = get_terms( 'vaccat' );
$town_terms = get_terms( 'town' );
$level_terms = get_terms( 'level' );
$shop_terms = get_terms( 'shop' );

$town_arr = array();

$level_arr['-1'] = 'Любой';
foreach( $level_terms as $level_term ):
    $level_arr[$level_term->slug] = $level_term->name;
endforeach;

$town_arr['-1'] = 'Любой';
foreach( $town_terms as $town_term ):
    $town_arr[$town_term->slug] = $town_term->name;
endforeach;

foreach( $vaccat_terms as $vaccat_term ):
    $vaccat_arr[$vaccat_term->slug] = $vaccat_term->name;
endforeach;

// Координаты всех магазинов
$defaultIcons = array();
foreach ($shop_terms as $shop_term ) {

  switch ( get_field( 'mvideo_or_eldorado', $shop_term ) ) {
    case 'mvideo':
      $name_icon = THEME_URL . '/assets/images/listing/map/mvideo-icon.png';
      if( empty( $mvideoIcons ) ){
        $mvideoCenter = [
          get_field( 'shop_koordinates_latitude', $shop_term ),
          get_field( 'shop_koordinates_longitude', $shop_term )
        ];
      }
      $mvideoIcons[] = array(
        [
          get_field( 'shop_koordinates_latitude', $shop_term ),
          get_field( 'shop_koordinates_longitude', $shop_term )
        ],
        THEME_URL . '/assets/images/listing/map/mvideo-icon.png'
      );
      break;
    
    case 'eldorado':
      $name_icon = THEME_URL . '/assets/images/listing/map/eldorado-icon.png';
      if( empty( $eldoradoIcons ) ){
        $eldoradoCenter = [
          get_field( 'shop_koordinates_latitude', $shop_term ),
          get_field( 'shop_koordinates_longitude', $shop_term )
        ];
      }
      $eldoradoIcons[] = array(
        [
          get_field( 'shop_koordinates_latitude', $shop_term ),
          get_field( 'shop_koordinates_longitude', $shop_term )
        ],
        THEME_URL . '/assets/images/listing/map/eldorado-icon.png'
      );
      break;
    
    default:
    $name_icon = THEME_URL . '/assets/images/listing/map/mvideo-icon.png';
      if( empty( $mvideoIcons ) ){
        $mvideoCenter = [
          get_field( 'shop_koordinates_latitude', $shop_term ),
          get_field( 'shop_koordinates_longitude', $shop_term )
        ];
      }
      $mvideoIcons[] = array(
        [
          get_field( 'shop_koordinates_latitude', $shop_term ),
          get_field( 'shop_koordinates_longitude', $shop_term )
        ],
        THEME_URL . '/assets/images/listing/map/mvideo-icon.png'
      );
      break;
  }

  if( empty( $defaultIcons ) ){
    $defaultCenter = [
      get_field( 'shop_koordinates_latitude', $shop_term ),
      get_field( 'shop_koordinates_longitude', $shop_term )
    ];
  }

  $defaultIcons[] = array(
    [
      get_field( 'shop_koordinates_latitude', $shop_term ),
      get_field( 'shop_koordinates_longitude', $shop_term )
    ],
    $name_icon
  );
}

get_header();
?>

<script>
    var level_arr = '<?php echo json_encode( $level_arr ); ?>';
    var town_arr = '<?php echo json_encode( $town_arr ); ?>';
    var vaccat_arr = '<?php echo json_encode( $vaccat_arr ); ?>';
    var vacancy_titles = '<?php echo json_encode( $vacancy_titles ); ?>';
    var rel_type = 'archive';
    var rt = 'retail';
    var vacancyid = '';
    var sourceurl = '';
    const defaultCenter = JSON.parse( '<?php echo json_encode( $defaultCenter ); ?>' );
    const defaultIcons = JSON.parse( '<?php echo json_encode( $defaultIcons ); ?>' );
    var newDefaultCenter = JSON.parse( '<?php echo json_encode( $defaultCenter ); ?>' );
    var newDefaultIcons = JSON.parse( '<?php echo json_encode( $defaultIcons ); ?>' );
    const mvideoCenter = JSON.parse( '<?php echo json_encode( $mvideoCenter ); ?>' );
    const mvideoIcons = JSON.parse( '<?php echo json_encode( $mvideoIcons ); ?>' );
    const eldoradoCenter = JSON.parse( '<?php echo json_encode( $eldoradoCenter ); ?>' );
    const eldoradoIcons = JSON.parse( '<?php echo json_encode( $eldoradoIcons ); ?>' );
</script>

<script src="https://api-maps.yandex.ru/2.1/?apikey=ваш API-ключ&lang=ru_RU"></script>

    <!-- Section Listing-filter-Top -->
    <section class="listing-top">
      <div class="page-container">
        <h2 class="listing-top__title">
          Вакансии
          <span class="listing-top__counter"><?php echo $published_posts; ?></span>
        </h2>
        <div class="listing-top__dropdown">
            <button onclick="myFunction()" class="dropbtn">в <?php echo $page_title; ?></button>
            <div id="Dropdown" class="dropdown-content">

            <?php
            foreach ($page_data as $key => $data) {
                
                if( $type_page != $key ){
                    ?>
                    <a href="<?php echo $data[0]; ?>"><?= $data[1]; ?></a>
                    <?php
                }
            }
            ?>
            </div>
        </div>

        <div class="listing-top__filters-wrapper filters__map-wrapper">
          <div class="listing-top__filter-item">
              <input type="hidden" id="listing-top__profession-filter" />
              <input name="tags-outside" class="tagify--outside listing-top__profession-filter" placeholder="Выбери профессию" value="<?php echo $_GET['s']; ?>" />
              <svg class="listing-top__filter-item-search-icon" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg" >
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M4.50039 0.399994C2.23602 0.399994 0.400391 2.23563 0.400391 4.49999C0.400391 6.76436 2.23602 8.59999 4.50039 8.59999C5.41615 8.59999 6.26178 8.29977 6.94424 7.79237L8.57613 9.42426L9.42465 8.57573L7.79276 6.94384C8.30016 6.26139 8.60039 5.41575 8.60039 4.49999C8.60039 2.23563 6.76476 0.399994 4.50039 0.399994ZM1.60039 4.49999C1.60039 2.89837 2.89876 1.59999 4.50039 1.59999C6.10202 1.59999 7.40039 2.89837 7.40039 4.49999C7.40039 6.10162 6.10202 7.39999 4.50039 7.39999C2.89876 7.39999 1.60039 6.10162 1.60039 4.49999Z" fill="black" />
              </svg>
          </div>

          <!-- <div class="listing-top__filter-item">
              <p class="profession__filter-item-title">Специализация</p>
              <div class="profession__filter-item-select">

                  <input type="hidden" id="listing__specialization-select" />
                  <input
                      class="selectMode listing__specialization-select"
                      name="tags-select-mode"
                      placeholder="Выбери специализацию"
                      value=""
                  />
                  <div class="listing__filter-item-select-arrow">
                  <svg
                      class="listing__filter-item-select-arrow-image"
                      width="10"
                      height="10"
                      viewBox="0 0 10 10"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                      d="M5.58286 7.56905V0.925293H4.38286V7.53389L1.4247 4.57574L0.576172 5.42426L4.22262 9.07071C4.65219 9.50029 5.34868 9.50029 5.77825 9.07071L9.4247 5.42426L8.57617 4.57574L5.58286 7.56905Z"
                      fill="black"
                      />
                  </svg>
                  </div>
            </div>
            <div class="listing__filter-item-border-bottom">
                    <label class="profession__filter-checbox-listing">
                    <input class="profession__filter-input archive_without_experience" type="checkbox" />
                    Без опыта
                    <span class="profession__filter-checbox-value">
                    <svg
                      width="16"
                      height="16"
                      viewBox="0 0 16 16"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M12.5 5L6.5 11L3.5 8"
                        stroke="black"
                        stroke-width="1.2"
                      />
                    </svg>

                    </span>
                    </label>
                </div>
          </div> -->

          <div class="listing-top__filter-item">
              <p class="profession__filter-item-title">Город</p>
              <div class="profession__filter-item-select">
                  <input type="hidden" id="listing__city-select" value="-1"/>
                  <input
                  class="selectMode listing__city-select"
                  name="tags-select-mode"
                  placeholder="Выбери город"
                  />

                  <div class="listing__filter-item-select-arrow">
                  <svg
                      class="listing__filter-item-select-arrow-image"
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
                  </div>
              </div>
          </div>

          <button id="archive_clear_all_filters" class="listing-top__filter-item-button-reset listing-top__filter-item-button-reset-map">
            Сбросить фильтры
          </button>

          <div class="listing-top__filter-item listing-top__filter-list-wrapper">
            <div class="listing-top__filter-list-item" data-name="list">
              <svg
                class="listing-top__filter-list-item-arrow"
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

              <span class="listing-top__filter-list-item-text"> списком </span>
            </div>

            <div
              class="
                listing-top__filter-list-item
                listing-top__filter-list-item-active
              "
              data-name="map"
            >
              <svg
                class="listing-top__filter-list-item-arrow"
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

              <span class="listing-top__filter-list-item-text"> на карте </span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- //Section Listing-filter-Top -->

    <!-- Content block -->
    <div class="listing-metro__content listing-metro__content-map">
      <!-- Left bar -->
      <div class="listing-metro__left-bar">
        <div class="isting-metro__shops-list-container">
          <div class="listing-metro__shops-list-title">
            Выберите удобное место работы на карте или из списка
          </div>

          <div class="listing-metro__shops-list mvideo">
            <?php
            foreach( $shop_terms as $shop_term ):
              if( 'mvideo' == get_field( 'mvideo_or_eldorado', $shop_term ) ){                
                ?>
                <div class="listing-metro__shop" 
                  data-shop_slug="<?php echo $shop_term->slug; ?>" 
                  data-latitude="<?php echo get_field( 'shop_koordinates_latitude', $shop_term );?>" 
                  data-longitude="<?php echo get_field( 'shop_koordinates_longitude', $shop_term );?>"
                  >
                  <div class="listing-metro__shop-title"><?php echo $shop_term->name; ?></div>
                  <div class="listing-metro__shop-address"><?php echo get_field( 'shop_adress', $shop_term ); ?></div>
                </div>
                <?php
              }
            endforeach;
            ?>
          </div>

          <div class="listing-metro__shops-list eldorado">
            <?php
            foreach( $shop_terms as $shop_term ):
              if( 'eldorado' == get_field( 'mvideo_or_eldorado', $shop_term ) ){                
                ?>
                <div class="listing-metro__shop" 
                  data-shop_slug="<?php echo $shop_term->slug; ?>" 
                  data-latitude="<?php echo get_field( 'shop_koordinates_latitude', $shop_term );?>" 
                  data-longitude="<?php echo get_field( 'shop_koordinates_longitude', $shop_term );?>"
                  >
                  <div class="listing-metro__shop-title"><?php echo $shop_term->name; ?></div>
                  <div class="listing-metro__shop-address"><?php echo get_field( 'shop_adress', $shop_term ); ?></div>
                </div>
                <?php
              }
            endforeach;
            ?>
          </div>
        </div>

        <div class="isting-metro__single-shop-container hide">
          <div class="listing-metro__location-wrapper">
            <a href="#" class="listing-metro__link-to-shops">
              <svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg" >
                <path d="M4.57661 0.576172L0.152344 5.00044L4.57661 9.4247L5.42514 8.57617L2.4494 5.60044H14.0009V4.40044H2.4494L5.42514 1.4247L4.57661 0.576172Z" fill="black" />
              </svg>
              Назад к списку магазинов
            </a>
            <span class="listing-metro__location-place">ТРК «Европолис»</span>
            <span class="listing-metro__location-adress">г. Москва, пр. Мира, д. 211, корп. 1, этаж 2</span>
            <!-- <button class="listing-metro__route-button">
              Построить маршрут
              <svg class="listing-metro__route-arrow" width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg" >
                <path d="M11.5515 4.40044L8.57574 1.4247L9.42426 0.576172L13.8485 5.00044L9.42426 9.4247L8.57574 8.57617L11.5515 5.60044H0V4.40044H11.5515Z" fill="black" />
              </svg>
            </button> -->

            <div class="listing-metro__location-metro-container listing-metro__location-on-map">
              <div class="listing-metro__location-metro-item sokol-line">
                <span class="listing-metro__location-metro-station">
                  Красносельская
                </span>
                <span class="listing-metro__location-metro-time">7 мин</span>
              </div>
              <div class="listing-metro__location-metro-item arbat-line">
                <span class="listing-metro__location-metro-station">
                  Бауманская
                </span>
                <span class="listing-metro__location-metro-time">7 мин</span>
              </div>
              <div class="listing-metro__location-metro-item sokol-line">
                <span class="listing-metro__location-metro-station">
                  Комсомольская
                </span>
                <span class="listing-metro__location-metro-time">7 мин</span>
              </div>
              <div class="listing-metro__location-metro-item mcd-line">
                <span class="listing-metro__location-metro-station">
                  Каланчёвская
                </span>
                <span class="listing-metro__location-metro-time">7 мин</span>
              </div>
            </div>
          </div>

          <div class="listing-metro__profession-container">
            <div class="listing-metro__profession-title">
              Вакансии магазина
            </div>

            <div class="listing-vacancy_items profession__job-wrapper retail__position"></div>
          </div>
        </div>

        <!-- <div class="listing-metro__subscribe-block">
          <h2 class="listing-metro__subscribe-title">
            Подпишись на новые вакансии
          </h2>
          <p class="listing-metro__subscribe-text">
            Каждую пятницу тебе будет приходить письмо с учётом фильтров:
            специализация «Розничная продажа», ключевые слова: «продавец»,
            «кассир».
          </p>
          <div class="position-subscribe__mail-container">
            <input
              class="position-subscribe__input"
              type="text"
              value="Электронная почта"
            />
            <a href="#" class="position-subscribe__button">
              <svg
                width="12"
                height="8"
                viewBox="0 0 12 8"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M9.4136 3.55001L7.1818 1.3182L7.8182 0.681808L11.1364 4.00001L7.8182 7.3182L7.1818 6.68181L9.4136 4.45001H0.75V3.55001H9.4136Z"
                  fill="black"
                />
              </svg>
            </a>
          </div>
        </div> -->
      </div>

      <!-- //Left bar -->

      <!-- Right bar -->
      <div class="listing-metro__right-bar">
        <div class="listing-metro__shops-list-title-mobile">
          Выберите удобное место работы на карте или из списка
        </div>

        <a href="#" class=" listing-metro__link-to-shops listing-metro__link-to-shops-mobile">
          <svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg" >
            <path d="M4.57661 0.576172L0.152344 5.00044L4.57661 9.4247L5.42514 8.57617L2.4494 5.60044H14.0009V4.40044H2.4494L5.42514 1.4247L4.57661 0.576172Z" fill="black" />
          </svg>
          Назад к списку магазинов
        </a>

        <div class="listing-metro__map-wrapper">
          <div id="yandex-map" class="listing-metro__map-place">
            <!-- Сюда вставить карту -->
          </div>
          <!-- <button class="listing-metro__map-button-plus">
            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg" >
              <path d="M4.40039 5.60002V9.5H5.60039V5.60002H9.5V4.40002H5.60039V0.5H4.40039V4.40002H0.5V5.60002H4.40039Z" fill="black" />
            </svg>
          </button>

          <button class="listing-metro__map-button-minus">
            <svg width="10" height="2" viewBox="0 0 10 2" fill="none" xmlns="http://www.w3.org/2000/svg" >
              <path fill-rule="evenodd" clip-rule="evenodd" d="M9.5 1.60039H0.5V0.400391H9.5V1.60039Z" fill="black" />
            </svg>
          </button> -->

          <div class="listing-metro__select-shop-container">
            <label class="listing-metro__select-shop-item" data-name="mvideo">
              <input class="listing-metro__shop-input mvideo-input" type="checkbox" checked />
              <span class="listing-metro__select-shop-checkbox">
                <svg class="listing-metro__select-shop-checkbox-image" width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg" >
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M3.50044 6.15191L9.07617 0.576172L9.9247 1.4247L3.50044 7.84896L0.0761719 4.4247L0.9247 3.57617L3.50044 6.15191Z" fill="black" />
                </svg>
              </span>
              Магазины М.Видео
            </label>

            <label class="listing-metro__select-shop-item" data-name="eldorado">
              <input class="listing-metro__shop-input eldorado-input" type="checkbox" checked />
              <span class="listing-metro__select-shop-checkbox">
                <svg class="listing-metro__select-shop-checkbox-image" width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg" >
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M3.50044 6.15191L9.07617 0.576172L9.9247 1.4247L3.50044 7.84896L0.0761719 4.4247L0.9247 3.57617L3.50044 6.15191Z" fill="black" />
                </svg>
              </span>
              Магазины Эльдорадо
            </label>
          </div>

          <!-- <div class="listing-metro__look-another-store-container">
            <h2 class="listing-metro__look-another-store-title">
              Не нашли нужную вакансию в
              <span class="listing-metro__look-another-shop"> М.Видео</span>?
            </h2>
            <p class="listing-metro__look-another-text">
              Посмотрите также вакансии в
              <span class="listing-metro__look-another-shop"> Эльдорадо</span>!
            </p>
            <button class="listing-metro__show-another-shop">посмотреть</button>
            <button class="listing-metro__not-show-another-shop">
              спасибо, не надо
            </button>
          </div> -->

          <!-- <div class="listing-metro__shops-nearby-container">
            <div class="listing-metro__nearest-store-container">
              <div class="listing-metro__nearest-store-item">
                <svg
                  width="24"
                  height="18"
                  viewBox="0 0 24 18"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M9.5272 17.6669C9.01018 17.6604 8.516 17.4547 8.1491 17.0932C6.88918 15.7834 8.07451 11.3586 8.32529 10.4025C8.33138 10.3819 8.3326 10.3603 8.32881 10.3393C8.32507 10.3182 8.31636 10.2983 8.30352 10.2811C8.29062 10.264 8.27393 10.25 8.25467 10.2404C8.23541 10.2308 8.21419 10.2257 8.19265 10.2256C8.16601 10.2257 8.13978 10.2324 8.11655 10.2454C8.09333 10.2584 8.07384 10.2771 8.06 10.2997C7.52534 11.373 4.63661 17.6669 2.0877 17.6669H1.93849C-0.53581 17.4304 -0.20839 14.048 0.560426 11.9898H4.54749C4.22215 12.8719 4.11853 13.4291 4.11853 13.7252C4.13304 13.9308 4.31125 14.048 4.47289 13.9617C4.88735 13.7396 5.56913 12.8575 6.1618 11.8438C7.229 9.9768 8.62162 7.1825 11.0171 0.111328H15.3793C14.0903 4.05094 13.0376 7.61017 12.4678 11.6814C12.4601 11.7304 12.4681 11.7807 12.4908 11.825C12.5134 11.8692 12.5495 11.9053 12.594 11.9281C12.6385 11.9508 12.6891 11.9591 12.7386 11.9518C12.7881 11.9444 12.834 11.9217 12.8698 11.887C14.1132 10.7253 18.6722 0.962581 18.9436 0.111328H23.3306C23.3306 0.111328 19.0182 11.9466 19.3747 13.9308C19.3807 14.004 19.4096 14.0735 19.4575 14.1296C19.5053 14.1856 19.5696 14.2253 19.6414 14.2432C19.7132 14.2611 19.7888 14.2563 19.8577 14.2294C19.9265 14.2025 19.9852 14.1549 20.0254 14.0933C20.2782 13.7848 20.6346 13.3284 20.8854 13.0487L21.507 13.6656C20.2637 15.1933 18.2328 17.9424 16.2186 17.6196C15.8969 17.5533 15.6016 17.3954 15.3689 17.1652C13.2656 15.3578 16.1979 9.30033 16.718 7.87338C16.8361 7.56494 16.9397 7.27091 17.0144 7.0941C17.0219 7.07257 17.0242 7.04959 17.0211 7.02706C17.0179 7.00447 17.0094 6.98299 16.9962 6.9643C16.9831 6.94566 16.9657 6.93036 16.9454 6.91968C16.9251 6.909 16.9026 6.90321 16.8796 6.90288C16.853 6.90265 16.8267 6.90939 16.8034 6.92241C16.7802 6.93537 16.7607 6.95417 16.747 6.97687C16.6434 7.19686 16.3761 7.77057 16.2725 7.96179C14.9794 10.6225 11.987 17.6669 9.5272 17.6669ZM22.8291 15.3434C23.0607 15.3434 23.2871 15.4116 23.4796 15.5392C23.6722 15.6669 23.8223 15.8483 23.9109 16.0606C23.9995 16.2729 24.0227 16.5064 23.9775 16.7318C23.9323 16.9572 23.8208 17.1641 23.6571 17.3266C23.4933 17.4891 23.2847 17.5997 23.0576 17.6446C22.8305 17.6894 22.595 17.6664 22.3811 17.5785C22.1672 17.4905 21.9843 17.3416 21.8557 17.1506C21.727 16.9595 21.6583 16.7349 21.6583 16.5051C21.6572 16.3523 21.6867 16.2008 21.7452 16.0593C21.8036 15.9178 21.8898 15.7893 21.9988 15.6812C22.1077 15.5731 22.2373 15.4876 22.3798 15.4296C22.5224 15.3716 22.6751 15.3423 22.8291 15.3434Z"
                    fill="#E31235"
                  />
                </svg>
              </div>

              <div class="listing-metro__nearest-store-item">
                <p class="isting-metro__nearest-store-text">
                  ул. Нижняя Красносельская, д. 40/12, корп. 20
                </p>
              </div>

              <div class="listing-metro__nearest-store-item">
                <svg
                  width="10"
                  height="10"
                  viewBox="0 0 10 10"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M7.55191 1.60039H3.00044V0.400391H9.00044C9.33181 0.400391 9.60044 0.66902 9.60044 1.00039V7.00039H8.40044V2.44892L1.4247 9.42465L0.576172 8.57613L7.55191 1.60039Z"
                    fill="black"
                  />
                </svg>
              </div>
            </div>

            <div class="listing-metro__another-store-item">
              <svg
                class="listing-metro__another-store-item-image"
                width="18"
                height="18"
                viewBox="0 0 18 18"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M14.5548 0.333984H7.5446L6.87113 3.64011H12.8405C13.2079 3.64011 13.2997 3.82378 13.2691 4.25235L12.5038 8.20133H8.79971L9.35073 5.44623L0.779297 9.54827H7.14664L6.59562 12.3034L12.2283 9.60949L11.463 13.5279C11.3711 13.9258 11.1568 14.1095 10.7283 14.1095H4.85073L4.20787 17.4462H11.2181C13.4528 17.4462 14.5242 16.1299 14.8915 14.2319L17.0038 3.51766C17.3405 1.65031 16.8201 0.333984 14.5548 0.333984Z"
                  fill="#76BC21"
                />
              </svg>

              <p class="listing-metro__another-store-text">ТЦ Атриум</p>
            </div>

            <div class="listing-metro__another-store-item">
              <svg
                class="listing-metro__another-store-item-image"
                width="18"
                height="18"
                viewBox="0 0 18 18"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M14.5548 0.333984H7.5446L6.87113 3.64011H12.8405C13.2079 3.64011 13.2997 3.82378 13.2691 4.25235L12.5038 8.20133H8.79971L9.35073 5.44623L0.779297 9.54827H7.14664L6.59562 12.3034L12.2283 9.60949L11.463 13.5279C11.3711 13.9258 11.1568 14.1095 10.7283 14.1095H4.85073L4.20787 17.4462H11.2181C13.4528 17.4462 14.5242 16.1299 14.8915 14.2319L17.0038 3.51766C17.3405 1.65031 16.8201 0.333984 14.5548 0.333984Z"
                  fill="#76BC21"
                />
              </svg>

              <p class="listing-metro__another-store-text">ТЦ Вегас</p>
            </div>

            <div class="listing-metro__another-store-item">
              <svg
                class="listing-metro__another-store-item-image"
                width="18"
                height="18"
                viewBox="0 0 18 18"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M14.5548 0.333984H7.5446L6.87113 3.64011H12.8405C13.2079 3.64011 13.2997 3.82378 13.2691 4.25235L12.5038 8.20133H8.79971L9.35073 5.44623L0.779297 9.54827H7.14664L6.59562 12.3034L12.2283 9.60949L11.463 13.5279C11.3711 13.9258 11.1568 14.1095 10.7283 14.1095H4.85073L4.20787 17.4462H11.2181C13.4528 17.4462 14.5242 16.1299 14.8915 14.2319L17.0038 3.51766C17.3405 1.65031 16.8201 0.333984 14.5548 0.333984Z"
                  fill="#76BC21"
                />
              </svg>

              <p class="listing-metro__another-store-text">ТЦ Космос</p>
            </div>
          </div> -->
        </div>
      </div>
      <!-- //Right bar -->
    </div>

    <div class="position__card-wrapper listing-metro__content listing-metro__content-list hide transparent">
      <div id="archive_vacancies" class="listing-metro__content-list-container">

        <?php 
        if( $actually_vacancies_retail->have_posts() ) :

          while( $actually_vacancies_retail->have_posts() ) :
 
            $actually_vacancies_retail->the_post();
            $vacancy_item_id = get_the_ID();

            include(THEME_DIR . '/template-parts/loop-parts/archive_vacancies_item.php');

          endwhile;

        endif;

        wp_reset_postdata();
        ?>
        
      </div>
    </div>

    <!-- //Content block -->

    <!-- Mobile block profession -->
    <div class="listing-metro__profession-container listing-metro__profession-container-mobile">
      <div class="listing-metro__profession-title">
        Вакансии магазина
        <span class="listing-metro__profession-title-shop"> «М.Видео» </span>
      </div>

      <div class="listing-metro__profession-item">
        <div class="listing-metro__profession-item-left-bar">
          <p class="listing-metro__profession-name">Продавец</p>
          <div class="listing-metro__profession-bread-crumbs">
            <a href="#" class="listing-metro__profession-crumb">
              Розничные магазины

              <svg
                class="listing-metro__profession-crumb-arrow"
                width="12"
                height="8"
                viewBox="0 0 12 8"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M9.4136 3.54984L7.1818 1.31804L7.8182 0.681641L11.1364 3.99984L7.8182 7.31804L7.1818 6.68164L9.4136 4.44984H0.75V3.54984H9.4136Z"
                  fill="rgba(0, 0, 0, 0.5)"
                />
              </svg>
            </a>

            <a href="#" class="listing-metro__profession-crumb">
              Продажи

              <svg
                class="listing-metro__profession-crumb-arrow"
                width="12"
                height="8"
                viewBox="0 0 12 8"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M9.4136 3.54984L7.1818 1.31804L7.8182 0.681641L11.1364 3.99984L7.8182 7.31804L7.1818 6.68164L9.4136 4.44984H0.75V3.54984H9.4136Z"
                  fill="rgba(0, 0, 0, 0.5)"
                />
              </svg>
            </a>
          </div>
        </div>

        <div class="listing-metro__profession-item-right-bar">
          <p class="listing-metro__profession-conditions">
            от
            <span class="listing-metro__profession-price">80 000</span>
            ₽
          </p>
          <div class="listing-metro__profession-expiriens">Можно без опыта</div>
        </div>
      </div>

      <div class="listing-metro__profession-item">
        <div class="listing-metro__profession-item-left-bar">
          <p class="listing-metro__profession-name">Менеджер торгового зала</p>
          <div class="listing-metro__profession-bread-crumbs">
            <a href="#" class="listing-metro__profession-crumb">
              Розничные магазины

              <svg
                class="listing-metro__profession-crumb-arrow"
                width="12"
                height="8"
                viewBox="0 0 12 8"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M9.4136 3.54984L7.1818 1.31804L7.8182 0.681641L11.1364 3.99984L7.8182 7.31804L7.1818 6.68164L9.4136 4.44984H0.75V3.54984H9.4136Z"
                  fill="rgba(0, 0, 0, 0.5)"
                />
              </svg>
            </a>

            <a href="#" class="listing-metro__profession-crumb">
              Продажи

              <svg
                class="listing-metro__profession-crumb-arrow"
                width="12"
                height="8"
                viewBox="0 0 12 8"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M9.4136 3.54984L7.1818 1.31804L7.8182 0.681641L11.1364 3.99984L7.8182 7.31804L7.1818 6.68164L9.4136 4.44984H0.75V3.54984H9.4136Z"
                  fill="rgba(0, 0, 0, 0.5)"
                />
              </svg>
            </a>
          </div>
        </div>

        <div class="listing-metro__profession-item-right-bar">
          <p class="listing-metro__profession-conditions">
            от
            <span class="listing-metro__profession-price">80 000</span>
            ₽
          </p>
          <div class="listing-metro__profession-expiriens">Можно без опыта</div>
        </div>
      </div>
      <div class="listing-metro__profession-item">
        <div class="listing-metro__profession-item-left-bar">
          <p class="listing-metro__profession-name">Кладовщик</p>
          <div class="listing-metro__profession-bread-crumbs">
            <a href="#" class="listing-metro__profession-crumb">
              Розничные магазины

              <svg
                class="listing-metro__profession-crumb-arrow"
                width="12"
                height="8"
                viewBox="0 0 12 8"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M9.4136 3.54984L7.1818 1.31804L7.8182 0.681641L11.1364 3.99984L7.8182 7.31804L7.1818 6.68164L9.4136 4.44984H0.75V3.54984H9.4136Z"
                  fill="rgba(0, 0, 0, 0.5)"
                />
              </svg>
            </a>

            <a href="#" class="listing-metro__profession-crumb">
              Продажи

              <svg
                class="listing-metro__profession-crumb-arrow"
                width="12"
                height="8"
                viewBox="0 0 12 8"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M9.4136 3.54984L7.1818 1.31804L7.8182 0.681641L11.1364 3.99984L7.8182 7.31804L7.1818 6.68164L9.4136 4.44984H0.75V3.54984H9.4136Z"
                  fill="rgba(0, 0, 0, 0.5)"
                />
              </svg>
            </a>
          </div>
        </div>

        <div class="listing-metro__profession-item-right-bar">
          <p class="listing-metro__profession-conditions">
            от
            <span class="listing-metro__profession-price">80 000</span>
            ₽
          </p>
          <div class="listing-metro__profession-expiriens">Можно без опыта</div>
        </div>
      </div>
      <div class="listing-metro__profession-item">
        <div class="listing-metro__profession-item-left-bar">
          <p class="listing-metro__profession-name">Старший кассир</p>
          <div class="listing-metro__profession-bread-crumbs">
            <a href="#" class="listing-metro__profession-crumb">
              Розничные магазины

              <svg
                class="listing-metro__profession-crumb-arrow"
                width="12"
                height="8"
                viewBox="0 0 12 8"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M9.4136 3.54984L7.1818 1.31804L7.8182 0.681641L11.1364 3.99984L7.8182 7.31804L7.1818 6.68164L9.4136 4.44984H0.75V3.54984H9.4136Z"
                  fill="rgba(0, 0, 0, 0.5)"
                />
              </svg>
            </a>

            <a href="#" class="listing-metro__profession-crumb">
              Продажи

              <svg
                class="listing-metro__profession-crumb-arrow"
                width="12"
                height="8"
                viewBox="0 0 12 8"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M9.4136 3.54984L7.1818 1.31804L7.8182 0.681641L11.1364 3.99984L7.8182 7.31804L7.1818 6.68164L9.4136 4.44984H0.75V3.54984H9.4136Z"
                  fill="rgba(0, 0, 0, 0.5)"
                />
              </svg>
            </a>
          </div>
        </div>

        <div class="listing-metro__profession-item-right-bar">
          <p class="listing-metro__profession-conditions">
            от
            <span class="listing-metro__profession-price">80 000</span>
            ₽
          </p>
          <div class="listing-metro__profession-expiriens">Можно без опыта</div>
        </div>
      </div>
      <div class="listing-metro__profession-item">
        <div class="listing-metro__profession-item-left-bar">
          <p class="listing-metro__profession-name">Кассир</p>
          <div class="listing-metro__profession-bread-crumbs">
            <a href="#" class="listing-metro__profession-crumb">
              Розничные магазины

              <svg
                class="listing-metro__profession-crumb-arrow"
                width="12"
                height="8"
                viewBox="0 0 12 8"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M9.4136 3.54984L7.1818 1.31804L7.8182 0.681641L11.1364 3.99984L7.8182 7.31804L7.1818 6.68164L9.4136 4.44984H0.75V3.54984H9.4136Z"
                  fill="rgba(0, 0, 0, 0.5)"
                />
              </svg>
            </a>

            <a href="#" class="listing-metro__profession-crumb">
              Продажи

              <svg
                class="listing-metro__profession-crumb-arrow"
                width="12"
                height="8"
                viewBox="0 0 12 8"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M9.4136 3.54984L7.1818 1.31804L7.8182 0.681641L11.1364 3.99984L7.8182 7.31804L7.1818 6.68164L9.4136 4.44984H0.75V3.54984H9.4136Z"
                  fill="rgba(0, 0, 0, 0.5)"
                />
              </svg>
            </a>
          </div>
        </div>

        <div class="listing-metro__profession-item-right-bar">
          <p class="listing-metro__profession-conditions">
            от
            <span class="listing-metro__profession-price">80 000</span>
            ₽
          </p>
          <div class="listing-metro__profession-expiriens">Можно без опыта</div>
        </div>
      </div>
    </div>
    <!-- //Mobile block profession -->

  <!-- Subscribe block -->
  <!-- <div class="listing-metro__subscribe-block">
    <h2 class="listing-metro__subscribe-title">
      Подпишись на новые вакансии
    </h2>
    <p class="listing-metro__subscribe-text">
      Каждую пятницу тебе будет приходить письмо с учётом фильтров:
      специализация «Розничная продажа», ключевые слова: «продавец», «кассир».
    </p>
    <div class="position-subscribe__mail-container">
      <input
        class="position-subscribe__input"
        type="text"
        value="Электронная почта"
      />
      <a href="#" class="position-subscribe__button">
        <svg
          width="12"
          height="8"
          viewBox="0 0 12 8"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M9.4136 3.55001L7.1818 1.3182L7.8182 0.681808L11.1364 4.00001L7.8182 7.3182L7.1818 6.68181L9.4136 4.45001H0.75V3.55001H9.4136Z"
            fill="black"
          />
        </svg>
      </a>
    </div>
  </div> -->
  <!-- //Subscribe block -->

<!-- Vacancy News-block -->
<div class="vacancy__news-block-desktop">
    <div class="vacancy__news swiper newsSliderDirectLink">
        <div class="vacancy__news-title">
            <div class="vacancy__news-tabs">
            <a href="#" class="vacancy__news-link vacancy__news-link-active">
                Новости
            </a>
            <!-- <a href="#" class="vacancy__news-link">События</a> -->
            </div>
            <div class="vacancy__news-arrows">
            <button class="vacancy__news-btn-prev">
                 <svg
                    width="14"
                    height="10"
                    viewBox="0 0 14 10"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M4.57661 0.575745L0.152344 5.00001L4.57661 9.42427L5.42514 8.57574L2.4494 5.60001H14.0009V4.40001H2.4494L5.42514 1.42427L4.57661 0.575745Z"
                      fill="black"
                    />
                  </svg>

            </button>
            <button class="vacancy__news-btn-next">
                  <svg
                    width="14"
                    height="10"
                    viewBox="0 0 14 10"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M11.5515 4.40001L8.57574 1.42427L9.42426 0.575745L13.8485 5.00001L9.42426 9.42427L8.57574 8.57574L11.5515 5.60001H0L0 4.40001H11.5515Z"
                      fill="black"
                    />
                  </svg>

            </button>
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
                    $url_from_habr = get_habr_url( $news_item_id );
                }
                ?>


                <a href="<?php echo $url_from_habr; ?>" target="_blank" class="vacancy__news-item swiper-slide">
                    <div class="vacancy__news-item-image-block loading">
                        <img
                        class="vacancy__news-image"
                        data-src="<?php echo $thumbnail_url; ?>"
                        src="<?php echo THEME_URL; ?>/assets/images/Lazy-loading/1x1.png"
                        alt="News"
                        title="Новости"
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
            <a href="#" class="vacancy__news-link vacancy__news-link-active">Новости</a>
            <!-- <a href="#" class="vacancy__news-link">События</a> -->
            </div>
            <div class="vacancy__news-arrows">
              <button class="vacancy__news-btn-prev">
                <svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg" >
                  <path d="M4.57661 0.575745L0.152344 5.00001L4.57661 9.42427L5.42514 8.57574L2.4494 5.60001H14.0009V4.40001H2.4494L5.42514 1.42427L4.57661 0.575745Z" fill="black" />
                </svg>
              </button>
              <button class="vacancy__news-btn-next">
                <svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg" >
                  <path d="M11.5515 4.40001L8.57574 1.42427L9.42426 0.575745L13.8485 5.00001L9.42426 9.42427L8.57574 8.57574L11.5515 5.60001H0L0 4.40001H11.5515Z" fill="black" />
                </svg>
              </button>
            </div>
            <!-- <a href="#" class="vacancy__news-link-mobile"> Все новости </a> -->
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
                    $url_from_habr = get_habr_url( $news_item_id );
                }
                ?>

                <a href="<?php echo $url_from_habr; ?>" target="_blank"class="vacancy__news-item">
                    <div class="vacancy__news-item-image-block loading">
                        <img
                        class="vacancy__news-image"
                        data-src="<?php echo $thumbnail_url; ?>"
                        src="<?php echo THEME_URL; ?>/assets/images/Lazy-loading/1x1.png"
                        alt="News"
                        title="Новости"
                        width="500"
                        height="280"
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

<?php get_footer(); ?>
