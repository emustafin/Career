<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-5KK9TMS');</script>
  <!-- End Google Tag Manager -->

  <!-- Yandex.Metrika counter -->
  <script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
    m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(86134928, "init", {
          clickmap:true,
          trackLinks:true,
          accurateTrackBounce:true,
          webvisor:true
    });
  </script>
  <!-- /Yandex.Metrika counter -->

  <link href="<?php echo THEME_URL; ?>/assets/images/favicon/favicon.svg" rel="shortcut icon" type="image/x-icon"/>
  <title>М.ВидеоЭльдорадо</title>
  <?php wp_head(); ?>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-5KK9TMS');</script>
  <!-- End Google Tag Manager -->

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5KK9TMS"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
    

  <!-- Yandex.Metrika counter -->
  <script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
    m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(86134928, "init", {
          clickmap:true,
          trackLinks:true,
          accurateTrackBounce:true,
          webvisor:true
    });
  </script>
  <noscript><div><img src="https://mc.yandex.ru/watch/86134928" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
  <!-- /Yandex.Metrika counter -->

</head>
<?php
$post_slug = get_post_field( 'post_name', get_post() );
switch ($post_slug) {
  case 'it-hub':
    $body_class = 'it-hub direct-link';
    break;
    
  default:
    $body_class = 'it-hub direct-link';
    break;
}

$myterms = get_terms('town', 'orderby=count&hide_empty=1');
$array_town = array('Любой');
foreach( $myterms as $term ){
  $array_town[] = $term->name;
}

// Гражданство
$array_citizenship = array();
foreach( get_field('citizenship', 'option') as $item ) {
  $array_citizenship[] = $item['name'];
}
$array_citizenship[] = 'Другое';

// Направление
$array_directions = array(
  'IT-хаб',
  'Розничные магазины',
  'Центральный офис',
  'Сервис и Логистика',
);

// Список городов для холодной формы
$hformTowns = file_get_contents(get_template_directory().'/assets/towns/townsHform.json');
?>
<body class='<?php echo $body_class; ?>'>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5KK9TMS"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<!-- Yandex.Metrika counter -->
<noscript><div><img src="https://mc.yandex.ru/watch/86134928" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<script>
  var hformTowns = JSON.parse('<?php echo $hformTowns; ?>');
  var town_titles = JSON.parse('<?php echo json_encode( $array_town ); ?>');
  var array_citizenship = JSON.parse('<?php echo json_encode( $array_citizenship ); ?>');
  var array_directions = JSON.parse('<?php echo json_encode( $array_directions ); ?>');
</script>
    <!-- Header -->
    <header class="it-header">
      <div class="container">
        <div class="it-header__wrapper">

          <?php if( is_single() ){ ?>
            <?php
              $relationship_terms = get_the_terms( get_the_ID(), 'relationship' );
              if( is_array( $relationship_terms ) ){
                $current_relationship = $relationship_terms[0]->slug;
              }
              if( 'it' == $current_relationship ){
                  $link_main = 'IT-хаб ';
                  $link_vacancy = 'Вакансии в IT-хабе ';
                  $link_main_url = '/';
                  $link_vacancy_url = '/vacancies/';
              } elseif( 'roznica' == $current_relationship ) {
                  $link_main = 'Розничные магазины ';
                  $link_vacancy = 'Вакансии в Розничных магазинах ';
                  $link_main_url = '/retail/';
                  $link_vacancy_url = '/vacancies/';
              } else{
                  $link_main = 'Вернуться назад ';
                  $link_vacancy = '';
                  $link_main_url = '/';
                  $link_vacancy_url = '/vacancies/';
              }
              ?>
              <div class="it-header__item">
                <?php include(THEME_DIR . '/template-parts/header/vacancy__header-head-links.php'); ?>
              </div>
          <?php } else{ ?>

            <div class="it-header__item">
              <div class="it-header__directions" data-name="closed">
                <p class="it-header__directions-title">Направления</p>
                <span class="it-header__directions-value"></span>
                <div class="it-header__directions-arrow">
                  <svg
                    class="it-header__arrow-bottom"
                    width="10"
                    height="10"
                    viewBox="0 0 10 10"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M5.58237 7.56905V0.925293H4.38237V7.53389L1.42421 4.57574L0.575684 5.42426L4.22213 9.07071C4.65171 9.50029 5.34819 9.50029 5.77776 9.07071L9.42421 5.42426L8.57568 4.57574L5.58237 7.56905Z"
                      fill="black"
                    />
                  </svg>
                </div>

                  <!-- Дропдаун "НАПРАВЛЕНИЯ" -->
                  <div class="it-header__directions-dropdown-wrapper">
                    <div class="it-header__directions-dropdown-list">
                      <?php
                      $menu_name = 'primary';
                      $locations = get_nav_menu_locations();
                      $menu_items = wp_get_nav_menu_items( $locations[ $menu_name ] );
                      $current__url = home_url( $wp->request );
                      
                      foreach ($menu_items as $item) :

                        $target_blank = '';
                        $pos = strripos( $item->url, get_site_url() );
                        if( $pos === false ){
                          $target_blank = 'target="blank"';
                        }
                        
                        ?>

                        <a href="<?php echo $item->url;?>" class="it-header__directions-dropdown-item" <?php echo $target_blank; ?>>
                          <?php
                            if ($item->object_id == get_queried_object_id()) {
                              ?><strong>
                                <?php echo $item->title;?>
                              </strong><?php
                            } else {
                              echo $item->title;
                            }
                          ?>
                        </a>

                      <?php endforeach; ?>
                      
                    </div>
                  </div>
                  <!-- //Дропдаун "НАПРАВЛЕНИЯ" -->
                
              </div>
            </div>
          <?php } ?>


          <div class="it-header__item">
            <a href="/" class="it-header__logo">
            <svg
                width="140"
                height="24"
                viewBox="0 0 140 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <g clip-path="url(#clip0_3867:27828)">
                  <path d="M0 21.2667H69.75V24H0V21.2667Z" fill="#E31235" />
                  <path
                    d="M69.75 21.2667H139.5V24H69.75V21.2667Z"
                    fill="#76BC21"
                  />
                  <path
                    d="M45.9377 8.4H49.5063C49.409 7.93333 49.1819 7.6 48.8574 7.33333C48.533 7.06667 48.1437 6.93333 47.722 6.93333C47.3002 6.93333 46.9109 7.06667 46.5865 7.33333C46.2945 7.63333 46.0674 7.96667 45.9377 8.4ZM50.4795 11.4333L51.1284 12.7667C50.6742 13.2 49.636 13.6667 48.0788 13.6667C47.1056 13.6667 45.8728 13.3 45.1266 12.6C44.3805 11.9 43.9912 10.8667 43.9912 9.53333C43.9912 8.26667 44.3156 7.23333 44.9969 6.46667C45.6781 5.7 46.5541 5.33333 47.6895 5.33333C48.9872 5.33333 49.9605 5.8 50.6093 6.76667C51.0959 7.5 51.323 8.43333 51.323 9.63333V9.93333H45.8404C45.8404 10.6 46.0674 11.1 46.4892 11.4667C46.9109 11.8333 47.722 12.0333 48.241 12.0333C49.1494 12 49.8631 11.8 50.4795 11.4333ZM11.0627 0L6.78035 9.66667L2.56291 0L0 13.4H1.91407L3.1793 5.86667L6.68302 13.9667L10.2192 5.86667L11.452 13.4H13.3336L11.0627 0ZM14.9881 13.1333C14.761 12.9 14.6637 12.6333 14.6637 12.3C14.6637 11.9667 14.761 11.7 14.9881 11.4667C15.2152 11.2333 15.4748 11.1333 15.7992 11.1333C16.1236 11.1333 16.3831 11.2333 16.6102 11.4667C16.8373 11.7 16.9347 11.9667 16.9347 12.3C16.9347 12.6333 16.8373 12.9 16.6102 13.1333C16.3831 13.3667 16.1236 13.4667 15.7992 13.4667C15.4748 13.4667 15.2152 13.3667 14.9881 13.1333ZM20.3735 7.86667V11.6333H21.4765C22.3524 11.6333 23.0013 11.4333 23.3581 11.0667C23.715 10.7 23.8772 10.2333 23.8772 9.73333C23.8772 9.2 23.715 8.76667 23.3581 8.4C23.0013 8.03333 22.3849 7.86667 21.509 7.86667H20.3735ZM20.3735 2.7V6.26667H20.925C22.2551 6.26667 22.904 5.66667 22.904 4.43333C22.904 3.26667 22.2551 2.7 20.9899 2.7H20.3735ZM18.5243 0.933333H20.3735C20.8601 0.933333 21.217 0.933333 21.4116 0.966667C21.6387 0.966667 21.9307 1.03333 22.32 1.13333C22.7093 1.2 23.0662 1.36667 23.3581 1.6C24.2665 2.26667 24.7207 3.2 24.7207 4.4C24.7207 5.36667 24.3638 6.1 23.6501 6.66667C24.3638 6.9 24.8829 7.3 25.2398 7.86667C25.5966 8.43333 25.7588 9.03333 25.7588 9.7C25.7588 10.9 25.3371 11.8333 24.526 12.5333C24.2016 12.8 23.8123 13 23.3581 13.1333C22.904 13.2667 22.5471 13.3333 22.32 13.3667C22.0605 13.4 21.736 13.4 21.2819 13.4H18.4919V0.933333H18.5243ZM27.0565 5.53333H28.8408V10L34.0964 4.8V13.4H32.3445V8.83333L27.0565 14V5.53333ZM40.6497 11.7667V7.16667H38.3463V9.33333C38.3463 10.4667 38.0543 11.2667 37.4379 11.7667H40.6497ZM36.6593 5.53333H42.434V11.7667H43.5694V15.6667H41.9473V13.4333H36.562V15.6667H34.9399V11.7667C35.5887 11.7 36.0429 11.3667 36.3673 10.7333C36.562 10.3 36.6917 9.6 36.6917 8.63333V5.53333H36.6593ZM79.0933 5.53333V13.4H77.309V7.16667H75.0056V10.3333C75.0056 11.3 74.7785 12.0667 74.2919 12.6C73.8052 13.1667 73.124 13.4333 72.2156 13.4333C72.1183 13.4333 71.956 13.4333 71.7614 13.4V11.7667C71.8912 11.8 72.0209 11.8 72.0858 11.8C72.4751 11.8 72.7995 11.6667 73.0266 11.4C73.1888 11.2 73.2862 10.8667 73.2862 10.3667V5.53333H79.0933ZM82.5645 11.8333H83.3756C83.7973 11.8333 84.1217 11.7667 84.284 11.6667C84.5435 11.5 84.6733 11.2333 84.6733 10.8667C84.6733 10.5333 84.5435 10.2667 84.284 10.0667C84.0893 9.93333 83.7973 9.9 83.3756 9.9H82.5645V11.8333ZM80.7802 5.53333H82.5645V8.33333H83.6027C83.9271 8.33333 84.1866 8.33333 84.3813 8.36667C84.5759 8.4 84.8355 8.46667 85.1599 8.56667C85.4843 8.7 85.7438 8.86667 85.9385 9.13333C86.3278 9.56667 86.5224 10.1333 86.5224 10.8333C86.5224 11.6667 86.2953 12.3 85.8412 12.7333C85.6465 12.9333 85.387 13.1 85.095 13.2C84.803 13.3 84.5759 13.3667 84.3813 13.3667C84.1866 13.3667 83.9271 13.4 83.5702 13.4H80.7802V5.53333ZM92.6864 11.7667V7.16667H90.383V9.33333C90.383 10.4667 90.091 11.2667 89.4746 11.7667H92.6864ZM88.6636 5.53333H94.4383V11.7667H95.5737V15.6667H93.9516V13.4333H88.5663V15.6667H86.9442V11.7667C87.593 11.7 88.0472 11.3667 88.3716 10.7333C88.5663 10.3 88.696 9.6 88.696 8.63333V5.53333H88.6636ZM109.037 6.96667C108.453 6.96667 107.934 7.2 107.512 7.63333C107.091 8.1 106.863 8.7 106.863 9.5C106.863 10.2 107.058 10.8 107.447 11.3C107.837 11.7667 108.356 12.0333 109.037 12.0333C109.686 12.0333 110.205 11.8 110.594 11.3C110.984 10.8 111.178 10.2 111.178 9.46667C111.178 8.66667 110.951 8.06667 110.529 7.63333C110.14 7.16667 109.621 6.96667 109.037 6.96667ZM106.993 5.53333V6.4C107.577 5.7 108.356 5.33333 109.329 5.33333C110.367 5.33333 111.243 5.7 111.957 6.46667C112.671 7.23333 113.027 8.23333 113.027 9.46667C113.027 10.7 112.638 11.7 111.892 12.5C111.146 13.3 110.27 13.6667 109.329 13.6667C109.134 13.6667 108.907 13.6333 108.713 13.6C108.518 13.5667 108.226 13.4333 107.869 13.2667C107.512 13.0667 107.22 12.8333 106.993 12.5333V17.2H105.209V5.53333H106.993ZM117.894 6.96667C117.245 6.96667 116.726 7.2 116.337 7.7C115.947 8.2 115.753 8.8 115.753 9.53333C115.753 10.2333 115.947 10.8333 116.337 11.3C116.726 11.8 117.245 12.0333 117.894 12.0333C118.543 12.0333 119.094 11.8 119.451 11.3333C119.84 10.8667 120.035 10.2667 120.035 9.5C120.035 8.7 119.84 8.06667 119.418 7.63333C119.029 7.16667 118.51 6.96667 117.894 6.96667ZM119.938 5.53333H121.722V13.4H119.938V12.5667C119.354 13.2667 118.575 13.6333 117.602 13.6333C116.466 13.6333 115.59 13.2333 114.909 12.4C114.228 11.5667 113.903 10.6 113.903 9.46667C113.903 8.33333 114.228 7.36667 114.909 6.53333C115.59 5.7 116.499 5.3 117.634 5.3C118.64 5.3 119.386 5.66667 119.938 6.43333V5.53333ZM128.243 11.7667V7.16667H125.939V9.33333C125.939 10.4667 125.647 11.2667 125.031 11.7667H128.243ZM124.252 5.53333H130.027V11.7667H131.162V15.6667H129.54V13.4333H124.155V15.6667H122.533V11.7667C123.182 11.7 123.636 11.3667 123.96 10.7333C124.155 10.3 124.285 9.6 124.285 8.63333V5.53333H124.252ZM62.0937 3.83333L61.0556 2.66667C62.1586 1.3 64.17 0.666667 65.6299 0.666667C67.3493 0.666667 68.7767 1.2 69.8798 2.3C71.0801 3.5 71.6965 5.1 71.6965 7.13333C71.6965 9.06667 71.0801 10.6667 69.8798 11.9C68.7443 13.0667 67.3169 13.6333 65.565 13.6333C64.2673 13.6333 62.0937 12.9 61.0556 11.6L62.0937 10.4333C63.0994 11.3667 64.2349 11.8333 65.4352 11.8333C66.8302 11.8333 67.9333 11.4 68.7119 10.5C69.3607 9.76667 69.7176 8.86667 69.7824 7.83333H63.7483V6.06667H69.75C69.6202 5.1 69.2309 4.26667 68.647 3.6C67.9008 2.8 66.8951 2.4 65.5974 2.4C64.2673 2.46667 63.1319 2.93333 62.0937 3.83333ZM56.3191 7.1C55.0214 7.1 53.9833 8.16667 53.9833 9.5C53.9833 10.8 55.0214 11.9 56.3191 11.9C57.6167 11.9 58.6549 10.8333 58.6549 9.5C58.6549 8.16667 57.6167 7.1 56.3191 7.1ZM56.3191 13.6667C54.0806 13.6667 52.2638 11.8 52.2638 9.5C52.2638 7.2 54.0806 5.33333 56.3191 5.33333C58.5576 5.33333 60.3743 7.2 60.3743 9.5C60.3743 11.8 58.5576 13.6667 56.3191 13.6667ZM135.445 7.1C134.147 7.1 133.109 8.16667 133.109 9.5C133.109 10.8 134.147 11.9 135.445 11.9C136.742 11.9 137.781 10.8333 137.781 9.5C137.748 8.16667 136.71 7.1 135.445 7.1ZM135.445 13.6667C133.206 13.6667 131.39 11.8 131.39 9.5C131.39 7.2 133.206 5.33333 135.445 5.33333C137.683 5.33333 139.5 7.2 139.5 9.5C139.5 11.8 137.683 13.6667 135.445 13.6667ZM100.116 7.1C98.8179 7.1 97.7798 8.16667 97.7798 9.5C97.7798 10.8 98.8179 11.9 100.116 11.9C101.413 11.9 102.451 10.8333 102.451 9.5C102.451 8.16667 101.413 7.1 100.116 7.1ZM100.116 13.6667C97.8771 13.6667 96.0603 11.8 96.0603 9.5C96.0603 7.2 97.8771 5.33333 100.116 5.33333C102.354 5.33333 104.171 7.2 104.171 9.5C104.203 11.8 102.354 13.6667 100.116 13.6667Z"
                    fill="black"
                  />
                </g>
                <defs>
                  <clipPath id="clip0_3867:27828">
                    <rect width="139.5" height="24" fill="white" />
                  </clipPath>
                </defs>
              </svg>
            </a>
          </div>

          <div class="it-header__item">
            <div class="it-header__contact-us">
              <p class="it-header__contact-text">Свяжитесь с нами</p>
              <a href="tel:+78002002311" class="it-header__phone"
                >8-800-200-23-11</a
              >
            </div>
          </div>

          <div class="it-header__item-mobile">
          <a href="tel:+78002002311" class="it-header__phone-mobile">
              8-800-200-23-11
            <svg width="11.75" height="11.75" viewBox="0 0 11.75 11.75" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M3.96922 0.585176C3.73823 0.350297 3.36106 0.345586 3.12428 0.574622L1.69904 1.95322L1.68232 1.967C1.65377 1.99091 1.61735 2.02327 1.57573 2.06442C1.49264 2.14657 1.38763 2.26493 1.28296 2.42235C1.07145 2.74047 0.866649 3.21079 0.842278 3.84248C0.79364 5.10319 1.46316 6.84722 3.80749 9.19155C6.15183 11.5359 7.89593 12.2056 9.15667 12.1573C9.78838 12.133 10.2588 11.9284 10.5769 11.717C10.7344 11.6124 10.8528 11.5074 10.935 11.4244C10.9761 11.3828 11.0085 11.3464 11.0324 11.3178L11.0431 11.3049L12.4394 9.90186C12.5521 9.78864 12.615 9.63515 12.6141 9.47542C12.6133 9.31568 12.5488 9.16288 12.4349 9.05086L10.4218 7.07077C10.187 6.83976 9.80976 6.84131 9.57681 7.07426L8.20204 8.44903C8.19105 8.44876 8.17577 8.44766 8.15533 8.44485C8.04077 8.4291 7.86022 8.36797 7.61752 8.23582C7.13847 7.97496 6.55941 7.51629 6.02136 6.97824C5.48331 6.44019 5.02464 5.86113 4.76378 5.38208C4.63163 5.13939 4.5705 4.95883 4.55475 4.84427C4.55194 4.82383 4.55084 4.80855 4.55057 4.79756L5.92534 3.42279C6.15827 3.18986 6.15985 2.81269 5.92887 2.57782L3.96922 0.585176ZM2.44732 2.89089L2.4464 2.89156L2.45501 2.88514L2.4518 2.88758L2.44902 2.88965L2.44732 2.89089ZM2.45501 2.88514L2.45276 2.88702C2.44764 2.8913 2.43587 2.9015 2.41941 2.91776C2.38636 2.95044 2.3357 3.00636 2.28224 3.08676C2.1775 3.24429 2.05624 3.50379 2.04139 3.88875C2.01158 4.66134 2.41096 6.09796 4.65602 8.34302C6.90108 10.5881 8.33788 10.9878 9.11069 10.9581C9.49575 10.9434 9.75532 10.8222 9.91288 10.7175L10.1683 10.4828L11.1631 9.48315L10.0046 8.34356L9.01782 9.33031C8.71242 9.63571 8.31426 9.67798 7.99191 9.63367C7.67377 9.58994 7.34724 9.45502 7.04365 9.28971C6.43014 8.95563 5.75979 8.41371 5.17284 7.82677C4.58589 7.23982 4.04397 6.56946 3.7099 5.95595C3.54458 5.65236 3.40966 5.32583 3.36593 5.00769C3.32162 4.68534 3.36389 4.28718 3.66929 3.98178L4.65607 2.995L3.53087 1.85085L2.5111 2.83725C2.49323 2.85454 2.47489 2.87021 2.45501 2.88514Z" fill="black"/>
            </svg>
          </a>
          </div>
          <a href="#" class="it-header__button">Заполнить анкету</a>
        </div>
      </div>
    </header>
    <!-- Header -->
