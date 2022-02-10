<?php
get_header();
the_post();
?>

<section class="post__name">
    <h4 class="title__post">
        <?php the_title();?>
    </h4>
    <p class="date__post">
        <?php the_date('F j Y, g:i');?>
    </p>
</section>

<section class="text__post">
    <div class="section__text">
        <p>Группа М.Видео-Эльдорадо, ведущая российская компания в сфере электронной коммерции и розничной торговли электроникой и бытовой техникой (МосБиржа: MVID) запускает коливинг как новый формат удалённой работы персонала. Это первый совместный проект Станции Смена и крупного российского бизнеса, когда сотрудники могут жить и работать, общаться, проходить тренинги за корпоративный счёт в рекреационных местах. Коливинг-хабы располагаются в России (Красная Поляна, Эльбрус, Калининград, Геленджик), Грузии, Марокко, Шри-Ланке и Турции. Компания планирует, что программой в течение первого года смогут воспользоваться примерно 10% офисного персонала.</p>
    </div>
    <img class="news__pic" src="<?php echo get_template_directory_uri()?>/webpack-work/src/images/single/news__pic.png" alt="">
    <div class="section__text">
        <p style="margin-bottom: 25px;">Коливинг (от англ. co-living, рус. — «совместное проживание») — тип сообщества, предоставляющий собой формат временного совместного проживания для людей с общими намерениями. Отличительная черта такого типа жилья — это совместные мероприятия, такие как приём пищи, тренинги или коммуникация в общих жилых зонах. В отличие от отелей коливинг-хабы имеют хорошо обустроенное общее рабочее пространство, что позволяет сотрудникам в полном объёме выполнять все операционные задачи.</p>
        <p style="margin-bottom: 25px;">Благодаря коливингу для членов команды М.Видео-Эльдорадо открываются возможности для ярких впечатлений, новых знакомств, обмена знаниями, получения новых навыков. Для компании – это новый формат мотивации и развития персонала, создания неформальных рабочих связей между разными командами, работающими в частично или полностью удалённо.</p>
        <p>Каждая коливинг-станция — это красивый дом в живописном месте с удобной инфраструктурой, быстрым интернетом и рабочими местами. Территория также оборудована индивидуальными зонами, что создаёт комфортные условия для продуктивного рабочего процесса. Хаб рассчитан на одновременное проживание группы до 20 человек. Конечно же, там соблюдаются все антиковидные меры. Двухнедельная программа представляет собой баланс между работой, интересными вечерними мероприятиями и активным отдыхом с исследованием окрестностей.</p>
    </div>
    <div class="section__quote" style="background-image: url(<?php echo get_template_directory_uri()?>/webpack-work/src/images/single/quote__placeholder.png);">
        <div class="section__text__quote">
            <p class="text_quote">
            — Уже больше года команда офиса М.Видео-Эльдорадо функционирует в гибридном режиме – до 80% наших сотрудников работают вне офиса или посещают его только часть рабочего времени, при этом мы видим растущую продуктивность.
            </p>
            <p class="author_quote">
            Алина Рыженкова, <br> Директор по работе с персоналом Группы М.Видео-Эльдорадо
            </p>
        </div>
    </div>
    <div class="section__text">
        <p style="margin-bottom: 25px;">
        «Уже больше года команда офиса М.Видео-Эльдорадо функционирует в гибридном режиме – до 80% наших сотрудников работают вне офиса или посещают его только часть рабочего времени, при этом мы видим растущую продуктивность – об этом говорят и операционные итоги компании, и темпы цифровой трансформации, развития новых проектов внутри компании.
        </p>
        <p style="margin-bottom: 25px;">
        Мы планируем и дальше сохранять такой формат, считая полностью или частично удалённую работу новой нормой. При этом мы даём возможность командам, например, тем, кто занят в разработке продуктов, больше времени проводить вместе, если это необходимо для более эффективного труда. Вместе со Сменой мы запустили один из первых среди российского крупного бизнеса коливинг, который позволяет нашим командам не только эффективно решать рабочие вопросы, сохранять высокий темп продуктивности, но и получить вдохновение и эмоциональный заряд от более неформального общения друг с другом». 
        </p>
        <p>
        Специально для сотрудников М.Видео-Эльдорадо Смена подобрала несколько удобных локаций на Эльбрусе, в Калининграде, Краснодарском крае и Геленджике, где планируется яхтинг и парусные регаты. Заявку можно подать как всем отделом, так и индивидуально, в рамках проекта компания берет на себя все расходы для групповой программы и 50% - для индивидуальных поездок. При востребованности формата компания планирует расширить географию проекта, добавив наиболее интересные международные направления.
        </p>
    </div>
    <div class="section__quote-two">
        <p class="text__quote-two">
        — Мы планируем и дальше сохранять такой формат, считая полностью или частично удалённую работу новой нормой.
        </p>
        <p class="author_quote-two">
        Константин <br> Константинопольский,<br>
        руководитель трайба B2C
        </p>
    </div>
    <div class="section__text">
        <p style="margin-bottom: 25px;">
        «Уже больше года команда офиса М.Видео-Эльдорадо функционирует в гибридном режиме – до 80% наших сотрудников работают вне офиса или посещают его только часть рабочего времени, при этом мы видим растущую продуктивность – об этом говорят и операционные итоги компании, и темпы цифровой трансформации, развития новых проектов внутри компании.        </p>
        <p style="margin-bottom: 25px;">
        Мы планируем и дальше сохранять такой формат, считая полностью или частично удалённую работу новой нормой. При этом мы даём возможность командам, например, тем, кто занят в разработке продуктов, больше времени проводить вместе, если это необходимо для более эффективного труда. Вместе со Сменой мы запустили один из первых среди российского крупного бизнеса коливинг, который позволяет нашим командам не только эффективно решать рабочие вопросы, сохранять высокий темп продуктивности, но и получить вдохновение и эмоциональный заряд от более неформального общения друг с другом». 
        </p>
        <p>
        Специально для сотрудников М.Видео-Эльдорадо Смена подобрала несколько удобных локаций на Эльбрусе, в Калининграде, Краснодарском крае и Геленджике, где планируется яхтинг и парусные регаты. Заявку можно подать как всем отделом, так и индивидуально, в рамках проекта компания берет на себя все расходы для групповой программы и 50% - для индивидуальных поездок. При востребованности формата компания планирует расширить географию проекта, добавив наиболее интересные международные направления.
        </p>
    </div>
</section>

<!-- Vacancy News-block -->
<div class="vacancy__news-block-desktop" style="margin-top: 96px;">
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
                'posts_per_page'    => -1,
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
            <a href="#" class="vacancy__news-link vacancy__news-link-active"
                >Новости</a
            >
            <a href="#" class="vacancy__news-link">События</a>
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

<?php
get_footer();
