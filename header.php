<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="<?php echo THEME_URL; ?>/assets/images/favicon/favicon.svg" rel="shortcut icon" type="image/x-icon"/>
  <title>М.ВидеоЭльдорадо</title>
  <?php wp_head(); ?>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-6ZQL');</script>
  <!-- End Google Tag Manager -->
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
?>
<body class='<?php echo $body_class; ?>'>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-6ZQL"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


    <!-- Header -->
    <header class="it-header">
      <div class="container">
        <div class="it-header__wrapper">

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
                  <a
                    href="https://emlifewp.mvideoeldorado.ru/"
                    class="it-header__directions-dropdown-item"
                    target="blank"
                    >IT-департамент
                  </a>
                  <a
                    href="https://job.mvideoeldorado.ru/shops"
                    class="it-header__directions-dropdown-item"
                    target="blank"
                  >
                    Розничные магазины
                  </a>
                  <a
                    href="https://job.mvideoeldorado.ru/office"
                    class="it-header__directions-dropdown-item"
                    target="blank"
                  >
                    Центральный офиc
                  </a>
                  <a
                    href="https://jobinme.mvideoeldorado.ru/logistics"
                    class="it-header__directions-dropdown-item"
                    target="blank"
                  >
                    Сервис и логистика
                  </a>
                  <a
                    href="https://job.mvideoeldorado.ru/students"
                    class="it-header__directions-dropdown-item"
                    target="blank"
                  >
                    Студентам
                  </a>
                </div>
              </div>
              <!-- //Дропдаун "НАПРАВЛЕНИЯ" -->
            </div>
          </div>


          <div class="it-header__item">
            <a href="/" class="it-header__logo"></a>
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
            <a href="tel:+78002002311" class="it-header__phone-mobile"
              >8-800-200-23-11</a
            >
          </div>

          <a href="#" class="it-header__button">Заполнить анкету</a>
        </div>
      </div>

      <?php if( is_page('it') ){ ?>
        <div class="create-future">
          <!-- <div class="create-future__image"></div> -->
            <div class="spiral__wrap">
                <div class="spiral__wrap_twist">
                  <img 
                    src="<?php echo THEME_URL; ?>/assets/images/create-future/spiral_anim.svg"
                    class="spiral__img"
                    alt="">
                </div>
            </div>
          <div class="create-future__container">
            <div class="create-future__title-wrapper">
              <h2 class="create-future__title">
                Создавай <br />
                будущее
              </h2>

              <div class="text-animate create-future__typing-title">
              <div class="text-animate_desktop">
                <div id="typed-strings">
                  <span>идея за&nbsp;идеей</span>
                  <span>проект за&nbsp;проектом</span>
                  <span>код за&nbsp;кодом</span>
                </div>

                <div class="text-typing">
                  <span id="typed"></span>
                </div>
              </div>
            </div>
              <a class="create-future__button">узнай, как именно</a>
            </div>

            <p class="create-future__text">
              Мы не только кодим — мы трансформируем традиционный розничный бизнес
              в Retail Tech: генерим инновации, пилим собственную платформу
              микросервисов, развиваем культуру стартапа.
            </p>

            <p class="create-future__text-mobile">
              Мы не только кодим — <br />
              мы трансформируем традиционный розничный бизнес в Retail Tech:
              генерим инновации, пилим собственную платформу микросервисов,
              развиваем культуру стартапа.
            </p>
          </div>
        </div>
      <?php } ?>

    </header>
    <!-- Header -->
