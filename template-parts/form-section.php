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
            Заполни анкету, и мы обязательно с тобой свяжемся!
            </p>
        </div>

        <?php
        $formdata = array();

        $args = array(
            'post_type'         => 'product_directions',
            'posts_per_page'    => -1,
        );
        
        $product_directions = new WP_Query( $args );

        $info_product_directions = array( 'Любое' );

        if ( $product_directions->have_posts() ) {
            while ( $product_directions->have_posts() ) {
            $product_directions->the_post();

            $title = get_the_title();
            $info_product_directions[] .= $title;
            }
        }
        wp_reset_postdata();

        $info_vaccat = array();
        $terms = get_terms( 'vaccat' );
        if( $terms && ! is_wp_error($terms) ){
            foreach( $terms as $term ){
                $info_vaccat[] .= $term->name;
            }
        }
        ?>

        <script>
            const cities = ['Любой', 'Москва']
            var info_product_directions = '<?php echo $info_product_directions; ?>'; // Направление
            var info_vaccat = '<?php echo $info_vaccat; ?>'; // Специализация

            // Данные для фильтров
            const dataDirection = JSON.parse(info_product_directions)
            const dataSpecialization = JSON.parse(info_vaccat)            
            
            // Инициализация селекта Тагифай в анкете. Поле "Город"
            const formCityTagifyInput = document.querySelector('input[name=tags-select-mode].form__city-select');
            const formCityInput = document.querySelector('#form__town');


            const formCitySelect = new Tagify(formCityTagifyInput, {
            enforceWhitelist: true,
            mode: 'select',
            whitelist: ['Любой', 'Москва'],
            userInput: false,
            });

            formCitySelect.on('change', selectValueFromSingleSelect(cities, formCityTagifyInput, formCityInput))

            // Инициализация селекта Тагифай в анкете. Поле "Направление"
            const directionFormTagifyInput = document.querySelector('input[name=tags-select-mode].form__direction-select');
            const directionFormInput = document.querySelector('.form__value1')

            const directionSelect = new Tagify(directionFormTagifyInput, {
            enforceWhitelist: true,
            mode: 'select',
            whitelist: ['IT-департамент', 'Розничные магазины', 'Центральный офиc', 'Сервис и логистика', 'Студентам'],
            userInput: false,
            });

            formCitySelect.on('change', selectValueFromSingleSelect(dataDirection, directionFormTagifyInput, directionFormInput))

            // Инициализация селекта Тагифай в анкете. Поле "Специализация"
            const specializationFormTagifyInput = document.querySelector('input[name=tags-select-mode].form__spezialisation-select');
            const specializationFormInput = document.querySelector('.form__value2');

            const spezialisationSelect = new Tagify(specializationFormTagifyInput, {
            enforceWhitelist: true,
            mode: 'select',
            whitelist: ['Java', 'Product manager', 'Project manager', 'QA', 'Аналитика'],
            userInput: false,
            });


            formCitySelect.on('change', selectValueFromSingleSelect(dataSpecialization, specializationFormTagifyInput, specializationFormInput))


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

                console.log(targetInput.value, 1);
                }
            }

        </script>
        <div id="popup_form" class="form__content-right-bar-wrapper">
            <div class="form__content-right-bar form__content-right-bar-100">
            <?php echo do_shortcode('[contact-form-7 id="289" title="Анкета"]'); ?>
            <!-- Вставить разметку об успешной отправке -->
            <div class="form__response-block">
                <h2 class="form__response-title">
                Спасибо за отклик! Скоро ответим!
                </h2>
            </div>
            </div>
        </div>

        </div>
    </div>
    </div>
</div>