<!-- Section positions -->
<?php
if( 'roznica' == $rel_type ){
    $mvideo_retail_position = get_sub_field('mvideo_retail_position');
    $eldorado_retail_position = get_sub_field('eldorado_retail_position');
}
?>
<section class="retail__position">

    <?php if( 'roznica' == $rel_type ){ ?>
        <div class="retail__position-title-wrapper mvideo">
            <h2 class="retail__position-title"><?php echo $mvideo_retail_position['title_1']; ?></h2>
            <h2 class="retail__position-title-brand-mvideo"><?php echo $mvideo_retail_position['title_2']; ?></h2>
        </div>

        <div class="retail__position-title-wrapper eldorado hide">
            <h2 class="retail__position-title"><?php echo $eldorado_retail_position['title_1']; ?></h2>
            <h2 class="retail__position-title-brand-eldorado"><?php echo $eldorado_retail_position['title_2']; ?></h2>
        </div>
    <?php } elseif( 'logistic' == $rel_type ){ ?>
        <div class="retail__position-title-wrapper eldorado">
            <h2 class="retail__position-title"><?php echo get_sub_field('title'); ?></h2>
        </div>
    <?php } ?>

    <?php if( 'roznica' == $rel_type ){ ?>
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
                    <a href="/listing-map/" class="retail__position-headline-link">
                    Все вакансии
                    <svg class="retail__position-headline-link-arrow" width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg" >
                        <path d="M11.5515 4.40044L8.57574 1.4247L9.42426 0.576172L13.8485 5.00044L9.42426 9.4247L8.57574 8.57617L11.5515 5.60044H0V4.40044H11.5515Z" fill="black" />
                    </svg>
                    </a>
                </div>

                <div class="retail__position-list">

                    <?php
                    if( 'roznica' == $rel_type ){
                        $main_search_link = 'listing-map';
                        $vacancies_search_content = array(
                            array(
                                'title'     => 'Продавец',
                                'context'   => 'Настоящий техноэксперт, который является проводником в мир инноваций для людей! Знает все последние новинки из мира бытовой техники и электроники и подберет самое технологичное решение запроса покупателя. Именно ради консультации и мнения техноэкспертов клиенты возвращаются в наши магазины.',
                            ),
                            array(
                                'title'     => 'Кладовщик',
                                'context'   => 'Супергерой в мире товаров! Кладовщик знает, как правильно хранить, перемещать и готовить товары к продаже, чтобы наши клиенты ушли довольными новой покупкой.',
                            ),
                            array(
                                'title'     => 'Специалист по клиентскому сервису',
                                'context'   => 'Человек с невероятно красивой улыбкой, который стоит на страже высокого уровня нашего клиентского сервиса. Не только проверит и настроит товар после покупки, но еще и проведет обучение покупателей, как правильно пользоваться техникой.',
                            ),
                        );
                    } elseif( 'logistic' == $rel_type ){
                        $main_search_link = 'vacancies';
                        $vacancies_search_content = array(
                            array(
                                'title'     => 'Продавец',
                                'context'   => 'Главный человек в компании! Правая рука покупателя, может подобрать идеальный гаджет одной левой.',
                            ),
                            array(
                                'title'     => 'Кассир',
                                'context'   => 'Главный человек в компании! Правая рука покупателя, может подобрать идеальный гаджет одной левой.',
                            ),
                        );
                    }

                    foreach ($vacancies_search_content as $vacancy_search_content) {
                        include(THEME_DIR . '/template-parts/loop-parts/jointeam__position_list_item.php');
                    }
                    ?>
                </div>
            </div>
        </div>
    <?php } ?>

    <?php if( 'roznica' == $rel_type ){ ?>
        <div class="retail__position-content eldorado hide">
    <?php } elseif( 'logistic' == $rel_type ){ ?>
        <div class="retail__position-content eldorado">
    <?php } ?>
            <div class="retail__position-side-bar">
                <p class="retail__position-side-bar-title">Начать карьеру просто</p>

                <?php if( 'roznica' == $rel_type ){ ?>
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
                <?php } elseif( 'logistic' == $rel_type ){ ?>
                    <div class="retail__position-side-bar-item">
                        <h3 class="retail__position-side-bar-item-title-eldorado">01</h3>
                        <p class="retail__position-side-bar-text"><?php echo get_sub_field('text_step_1'); ?></p>
                    </div>

                    <div class="retail__position-side-bar-item">
                        <h3 class="retail__position-side-bar-item-title-eldorado">02</h3>
                        <p class="retail__position-side-bar-text"><?php echo get_sub_field('text_step_2'); ?></p>
                    </div>

                    <div class="retail__position-side-bar-item">
                        <h3 class="retail__position-side-bar-item-title-eldorado">03</h3>
                        <p class="retail__position-side-bar-text"><?php echo get_sub_field('text_step_3'); ?></p>
                    </div>
                <?php } ?>

            </div>

            <div class="retail__position-content-bar">
                <div class="retail__position-headline">
                    <p class="retail__position-headline-text">Наши вакансии</p>
                    <?php if( 'roznica' == $rel_type ){ ?>
                        <a href="/listing-map/" class="retail__position-headline-link">
                    <?php } elseif( 'logistic' == $rel_type ){ ?>
                        <a href="/vacancies/?type=logistic" class="retail__position-headline-link">
                    <?php } ?>
                            Все вакансии
                            <svg class="retail__position-headline-link-arrow" width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg" >
                                <path d="M11.5515 4.40044L8.57574 1.4247L9.42426 0.576172L13.8485 5.00044L9.42426 9.4247L8.57574 8.57617L11.5515 5.60044H0V4.40044H11.5515Z" fill="black" />
                            </svg>
                        </a>
                </div>

                <div class="retail__position-list">

                    <?php
                    if( 'roznica' == $rel_type ){
                        $main_search_link = 'listing-map';
                        $vacancies_search_content = array(
                            array(
                                'title'     => 'Продавец',
                                'context'   => 'Настоящий техноэксперт, который является проводником в мир инноваций для людей! Знает все последние новинки из мира бытовой техники и электроники и подберет самое технологичное решение запроса покупателя. Именно ради консультации и мнения техноэкспертов клиенты возвращаются в наши магазины.',
                            ),
                            array(
                                'title'     => 'Кладовщик',
                                'context'   => 'Супергерой в мире товаров! Кладовщик знает, как правильно хранить, перемещать и готовить товары к продаже, чтобы наши клиенты ушли довольными новой покупкой.',
                            ),
                            array(
                                'title'     => 'Специалист по клиентскому сервису',
                                'context'   => 'Человек с невероятно красивой улыбкой, который стоит на страже высокого уровня нашего клиентского сервиса. Не только проверит и настроит товар после покупки, но еще и проведет обучение покупателей, как правильно пользоваться техникой.',
                            ),
                        );
                    } elseif( 'logistic' == $rel_type ){
                        $main_search_link = 'vacancies';
                        $vacancies_search_content = array(
                            array(
                                'title'     => 'Продавец',
                                'context'   => 'Главный человек в компании! Правая рука покупателя, может подобрать идеальный гаджет одной левой.',
                            ),
                            array(
                                'title'     => 'Кассир',
                                'context'   => 'Главный человек в компании! Правая рука покупателя, может подобрать идеальный гаджет одной левой.',
                            ),
                        );
                    }

                    foreach ($vacancies_search_content as $vacancy_search_content) {
                        include(THEME_DIR . '/template-parts/loop-parts/jointeam__position_list_item.php');
                    }
                    ?>

                </div>
            </div>
        </div>

</section>
<!-- //Section positions -->