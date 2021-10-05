
    <!--  Footer  -->
    <footer class="footer">
      <div class="container">
        <div class="footer__title-container">
          <h2 class="footer__title">Хочешь стать частью команды?</h2>
          <form method="GET" action="/vacancies/" class="footer__search-block">
            <input
              name="s"
              class="footer__search-field"
              type="text"
              placeholder="найти вакансию"
              value=""
            />
            <button class="footer__search-button"></button>
          </form>
        </div>

        <div class="footer__wrapper">
          <div class="footer__item">
            <div class="footer__item-wrapper">
              <a href="/" class="footer__logo-link">
                <img
                  src="<?php echo THEME_URL; ?>/assets/images/footer/footer__logo.svg"
                  alt="Logo"
                  class="footer__logo"
                />
              </a>

              <div class="footer__item-contact-wrapper">
                <p class="footer__item-title">Служба подбора персонала</p>
                <div class="footer__contacts-block">
                  <p class="footer__contact-mail">job@mvideoeldorado.ru</p>
                  <button class="footer__contact-button">скопировать</button>
                  <a href="mailto:job@mvideoeldorado.ru" class="footer__contact-button">написать</a>
                </div>

                <div class="footer__contacts-block">
                  <a href="tel:+78002002311 " class="footer__contact-phone"
                    >8-800-200-23-11
                  </a>
                  <p class="footer__contacts-time">пн–пт, 10–19 по Москве</p>
                </div>
              </div>
            </div>

            <p class="footer__info-text">© 2021 Группа «М.Видео-Эльдорадо»</p>
          </div>

          <div class="footer__item">
            <p class="footer__item-title">Наши соцсети</p>

            <div class="footer__item-social-block">
              <p class="footer__item-social-title">Группа</p>

              <div class="footer__item-social-row">
                <div class="footer__item-social-item">
                  <a href="https://www.facebook.com/mvideoeldorado/" class="footer__item-social-link" target="blank">Facebook</a>
                  <a href="https://habr.com/ru/company/mvideo/blog/" class="footer__item-social-link" target="blank">Хабр</a>
                  <a href="https://inplacers.ru/mvideo" class="footer__item-social-link" target="blank">Inplace</a>
                </div>
              </div>
            </div>

            <div class="footer__item-social-block">
              <p class="footer__item-social-title">М.Видео</p>

              <div class="footer__item-social-row">
                <div class="footer__item-social-item">
                  <a href="https://vk.com/myjobby" class="footer__item-social-link" target="blank">ВК</a>
                  <a href="https://www.youtube.com/user/wwwmvideoru" class="footer__item-social-link" target="blank">YouTube</a>
                  <a href="https://www.instagram.com/myjobby/" class="footer__item-social-link" target="blank">Instagram</a>
                </div>
              </div>
            </div>

            <div class="footer__item-social-block">
              <p class="footer__item-social-title">Эльдорадо</p>

              <div class="footer__item-social-row">
                <div class="footer__item-social-item">
                  <a href="https://vk.com/eldorado_job" class="footer__item-social-link" target="blank">ВК</a>
                  <a href="https://www.youtube.com/channel/UCF9nmUgfNLpHAM4FPB1I3uA" class="footer__item-social-link" target="blank">YouTube</a>
                  <a href="https://www.instagram.com/eldorado_job/" class="footer__item-social-link" target="blank">Instagram</a>
                </div>
              </div>
            </div>

            <a href="/privacy-policy/" class="footer__info-text">Политика конфиденциальности</a>
          </div>

          <div class="footer__item">
            <p class="footer__item-title">Направления</p>
            <a target="blank" href="https://emlifewp.mvideoeldorado.ru/" class="footem__item-directions-link">IT-департамент</a>
            <a target="blank" href="https://job.mvideoeldorado.ru/shops" class="footem__item-directions-link"
              >Розничные магазины</a
            >
            <a target="blank" href="https://jobinme.mvideoeldorado.ru/office" class="footem__item-directions-link"
              >Центральный офиc</a
            >
            <a target="blank" href="https://jobinme.mvideoeldorado.ru/logistics" class="footem__item-directions-link"
              >Сервис и логистика</a
            >
            <a target="blank" href="https://job.mvideoeldorado.ru/students" class="footem__item-directions-link">Студентам</a>

            <p class="footer__info-text">Made by Annti + AmberLabs</p>
          </div>
        </div>

        <a href="/" class="footer__logo-link-mobile">
          <img
            src="<?php echo THEME_URL; ?>/assets/images/footer/footer__logo.svg"
            alt="Logo"
            class="footer__logo"
          />
        </a>

        <div class="footer__info-block-mobile">
          <div class="footer__info-block-item-mobile">
            <p class="footer__info-text-mobile">
              © 2021 Группа «М.Видео-Эльдорадо»
            </p>
          </div>

          <div class="footer__info-block-item-mobile">
            <a href="/privacy-policy/" class="footer__info-text-mobile">Политика конфиденциальности</a>
          </div>

          <div class="footer__info-block-item-mobile">
            <p class="footer__info-text-mobile">Made by Annti + AmberLabs</p>
          </div>
        </div>
      </div>
    </footer>
    <!--  //Footer  -->

    <?php if( !is_single() ): ?>
    <!-- Flyout section -->
      <?php include(THEME_DIR . '/template-parts/flyout.php'); ?>
      <!-- //Flyout section -->
      <?php endif; ?>
      
    <!-- Form section -->
      <?php include(THEME_DIR . '/template-parts/form-section.php'); ?>
    <!-- //Form section -->

    <?php wp_footer(); ?>

    </body>
</html>
