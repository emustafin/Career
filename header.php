<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>М.ВидеоЭльдорадо</title>
    <?php wp_head(); ?>
</head>
<body>
    <!-- Header -->
    <header class="it-header">
      <div class="container">
        <div class="it-header__wrapper">
          <div class="it-header__item">
            <div class="it-header__directions">
              <p class="it-header__directions-title">Направления</p>
              <span class="it-header__directions-value">(5)</span>
              <div class="it-header__directions-arrow">
                <img
                  class="it-header__directions-image"
                  src="<?php echo THEME_URL; ?>/assets/images/arrows/arrow-bottom.svg"
                  alt="directions"
                />
              </div>
            </div>
          </div>

          <div class="it-header__item">
            <a href="#" class="it-header__logo"></a>
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

            <h2 class="create-future__typing-title">
              идея <br />
              за идеей
            </h2>

            <h2 class="create-future__typing-title-mobile">идея за идеей</h2>

            <a href="#" class="create-future__button">узнай, как именно</a>
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
      <div class="create-future__gradient"></div>
    </header>
    <!-- Header -->