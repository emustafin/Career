
    <!--  Footer  -->
    <footer class="footer">
      <div class="container">
        <!-- <div class="footer__title-container">
          <h2 class="footer__title">Хочешь стать частью команды?</h2>
          <div class="footer__search-block">
            <input
              class="footer__search-field"
              type="text"
              placeholder="найти вакансию"
            />
            <button class="footer__search-button"></button>
          </div>
        </div> -->

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
                  <a href="https://www.instagram.com/mvideo_ru/" class="footer__item-social-link" target="blank">Instagram</a>
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
            <a target="blank" href="https://jobinme.mvideoeldorado.ru/it" class="footem__item-directions-link">IT-департамент</a>
            <a target="blank" href="https://jobinme.mvideoeldorado.ru/mvideo" class="footem__item-directions-link"
              >Розничные магазины</a
            >
            <a target="blank" href="https://jobinme.mvideoeldorado.ru/office" class="footem__item-directions-link"
              >Центральный офиc</a
            >
            <a target="blank" href="https://jobinme.mvideoeldorado.ru/logistics" class="footem__item-directions-link"
              >Сервис и логистика</a
            >
            <a target="blank" href="https://jobinme.mvideoeldorado.ru/" class="footem__item-directions-link">Студентам</a>

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
    <div class="form">
      <div class="form__side-bar"></div>
      <div class="form__content">
        <div class="form__container">
          <div class="form__header">
            <a href="#" class="form__link-back">Вернуться назад</a>
          </div>

          <div class="form__content-wrapper">
            <div class="form__content-left-bar">
              <h2 class="form__title">Хочу работать с вами!</h2>

              <p class="form__text-left-bar">Рады это слышать!</p>
              <p class="form__text-left-bar">
                Заполни анкету и мы обязательно с тобой свяжемся!
              </p>
            </div>

            <?php
            $formdata = array();

            $args = array(
              'post_type'         => 'product_directions',
              'posts_per_page'    => -1,
            );
            
            $product_directions = new WP_Query( $args );

            $info_product_directions = '
            <div class="form__dropdown-list-item">
              <p class="form__dropdown-item-position">Любое</p>
              <div class="form__dropdown-item-checked">
                <img class="form__dropdown-item-checked-image" src="'.THEME_URL.'/assets/images/form/check.svg" alt="Check"></img>
              </div>
            </div>';

            if ( $product_directions->have_posts() ) {
              while ( $product_directions->have_posts() ) {
                $product_directions->the_post();

                $info_product_directions .= '
                <div class="form__dropdown-list-item">
                  <p class="form__dropdown-item-position">'.get_the_title().'</p>
                  <div class="form__dropdown-item-checked">
                    <img class="form__dropdown-item-checked-image" src="'.THEME_URL.'/assets/images/form/check.svg" alt="Check"></img>
                  </div>
                </div>';
              }
            }
            wp_reset_postdata();

            $info_vaccat = '
            <div class="form__dropdown-list-item">
              <p class="form__dropdown-item-position">Любая</p>
              <div class="form__dropdown-item-checked">
                <img class="form__dropdown-item-checked-image" src="'.THEME_URL.'/assets/images/form/check.svg" alt="Check"></img>
              </div>
            </div>';
            $terms = get_terms( 'vaccat' );
            if( $terms && ! is_wp_error($terms) ){
              foreach( $terms as $term ){
                $info_vaccat .= '
                <div class="form__dropdown-list-item">
                  <p class="form__dropdown-item-position">'.$term->name.'</p>
                  <div class="form__dropdown-item-checked">
                    <img class="form__dropdown-item-checked-image" src="'.THEME_URL.'/assets/images/form/check.svg" alt="Check"></img>
                  </div>
                </div>';
              }
            }

            $formdata = array(
              'info_product_directions' => $info_product_directions,
              'info_vaccat'             => $info_vaccat
            );
            ?>

            <div class="form__content-right-bar-wrapper">
              <div class="form__content-right-bar form__content-right-bar-100">
                <?php echo do_shortcode('[contact-form-7 id="289" title="Анкета"]'); ?>
                <!-- Вставить разметку об успешной отправке -->
                <div class="form__response-block">
                  <h2 class="form__response-title">
                    Спасибо за отклик! Скоро ответим!
                  </h2>
                </div>
  
                <div id="forminfo" data-formdata='<?php echo json_encode($formdata); ?>' ></div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    <!-- //Form section -->

<?php
if( is_front_page() ){
  ?>
  <script>
    // Данные для фильтров
    const currentLevels = JSON.parse(levels);
    const currentCities = JSON.parse(towns);

    // Страница IT
    const idPageTagifyLevelInput = document.querySelector('input[name="tags-select-mode"].profession__level-select');
    const idPageTagifyCityInput = document.querySelector('input[name="tags-select-mode"].profession__city-select');
    const idPageLevelInput = document.querySelector('#level')
    const idPageCityInput = document.querySelector('#town')

    // Инициализация селекта выбора уровня
    const idPageLevelSelect = new Tagify(idPageTagifyLevelInput, {
      enforceWhitelist: true,
      mode: 'select',
      whitelist: Object.values(currentLevels),
      userInput: false,
    });

    idPageLevelSelect.on('change', () => {

      if (idPageTagifyLevelInput.value === '') return;

      let currentValue;


      for (let prop in currentLevels) {
        if (currentLevels[prop] === JSON.parse(idPageTagifyLevelInput.value)[0].value) {
          currentValue = prop
        }
      }
      idPageLevelInput.value = currentValue;
    })


    // Инициализация селекта выбора города
    const idPageCitySelect= new Tagify(idPageTagifyCityInput, {
      enforceWhitelist: true,
      mode: 'select',
      whitelist: ['Любой','Москва'],
      userInput: false,
    });

    idPageCitySelect.on('change', () => {

      if (idPageTagifyCityInput.value === '') return;


      let currentValue;

      for (let prop in currentCities) {
        if (currentCities[prop] === JSON.parse(idPageTagifyCityInput.value)[0].value) {
          currentValue = prop
        }
      }
      idPageCityInput.value = currentValue;
    })

      // Отправка анкеты на сервер
  const form = document.querySelector('#wpcf7-f437-o2')
  
  form.addEventListener( 'wpcf7submit', function( event ) {
    const submitBtn = document.querySelector('.wpcf7-form-control.wpcf7-submit.form__response');
    const answerTitle = document.querySelector('.form__response-block')

    const result = event.detail;

    if (result.status === 'mail_sent')
      submitBtn.style.display = 'none';
      answerTitle.style.display = 'block';
  }, false );




  </script>
  <?php
} elseif( is_post_type_archive('vacancies') ){
  ?>
  <script>

    // Страница Листинга вакансий
    const listingTagifyLevelInput = document.querySelector('.listing__level-select');
    const listingTagifyCityInput = document.querySelector('.listing__city-select');
    const listingTagifySpecializationgInput = document.querySelector('.selectMode.listing__specialization-select');
    const listingTagifyProfessionInput = document.querySelector('.listing-top__profession-filter');

    const listingLevelInput = document.querySelector('#listing__level-select');
    const listingCityInput = document.querySelector('#listing__city-select');
    const listingspecializationInput = document.querySelector('#listing__specialization-select');
    const listingProfessionInput = document.querySelector('#listing-top__profession-filter')



    // Данные для фильтров
    const currentLevelsDataListing = JSON.parse(level_arr);
    const currentCitiesDataListing = JSON.parse(town_arr);
    const currentVaccatDataListing = JSON.parse(vaccat_arr); // Специализации
    const currentVacancyTitlesDataListing = JSON.parse(vacancy_titles); // Профессии - ОБЯЗАТЕЛЬНО ПОСМОТРЕТЬ КАК ВЫГЛЯДИТ! ИНАЧЕ НЕЖЕЛИ ДРУГИЕ, КОТОРЫЕ ВЫШЕ!!!

    
    // Инициализация селекта Профессии
    const stringVacancyesToArray = currentVacancyTitlesDataListing.split(',');
    const currentProfessionList = stringVacancyesToArray.filter((profession) => profession !== '');

    const professionListingSelect = new Tagify(listingTagifyProfessionInput, {
      // whitelist: currentProfessionList,
      dropdown: {
      position: "input",
      enabled : 0, // always opens dropdown when input gets focus
      dropdown: {
        maxItems: 5,
        },
      }
    })

    professionListingSelect.on('change', () => {
      let selectedProfessionList = [];

      if (listingTagifyProfessionInput.value === '') {
        selectedProfessionList = [];
        listingProfessionInput.value = '';
        return
      } 

      const savedInInputProfessions = JSON.parse(listingTagifyProfessionInput.value);

      for (let profession of savedInInputProfessions) {
        selectedProfessionList.push(profession.value)
      }

      listingProfessionInput.value = selectedProfessionList
    })
    
    // Инициализация селекта Специализация
    const specializationListingSelect = new Tagify(listingTagifySpecializationgInput, {
      enforceWhitelist: true,
      mode: 'select',
      whitelist: Object.values(currentVaccatDataListing),
      userInput: false,
    })

    specializationListingSelect.on('change', selectValueFromSingleSelect(currentVaccatDataListing, listingTagifySpecializationgInput, listingspecializationInput))

    
    // Инициализация селекта Уровень
    const listingLevelSelect = new Tagify(listingTagifyLevelInput, {
      enforceWhitelist: true,
      mode: 'select',
      whitelist: Object.values(currentLevelsDataListing),
      userInput: false,
    });

    listingLevelSelect.on('change', selectValueFromSingleSelect(currentLevelsDataListing, listingTagifyLevelInput, listingLevelInput))

    
    // Инициализация селекта Город
    const listingCitySelect = new Tagify(listingTagifyCityInput, {
      enforceWhitelist: true,
      mode: 'select',
      whitelist: ['Любой', 'Москва'],
      userInput: false,
    });
    
    listingCitySelect.on('change', selectValueFromSingleSelect(currentCitiesDataListing, listingTagifyCityInput, listingCityInput))


    // Функция выбора элемента из выпадающего списка
    function selectValueFromSingleSelect(data, tagifyInput, targetInput) {
      return function() {
        if (tagifyInput.value === '') return;

        let currentValue;

        for (let prop in data) {
          if (data[prop] === JSON.parse(tagifyInput.value)[0].value) {
            currentValue = prop
          }
        }
        targetInput.value = currentValue;
      }
    }





  </script>
  <?php
}



?>
<?php wp_footer(); ?>


    </body>
</html>