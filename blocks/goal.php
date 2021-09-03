<!--  Our Goal Section  -->
<section class="goal">
    <div class="container">
    <div class="goal__inner-mobile"></div>
    <div class="goal__title-wrapper">
        <p class="goal-goal">Наша цель</p>
        <h2 class="goal__title">
            <?php echo get_sub_field('title'); ?>
        </h2>
        <a href="#" class="goal__button">хочу работать с вами!</a>
    </div>

    <div class="goal__content-wrapper">
        <div class="goal__side-block">
        <div class="goal__side-block-container">
            <p class="goal__item-text">
                <?php echo get_sub_field('description'); ?>
            </p>
        </div>
        </div>

        <div class="goal__main-block">
        <div class="goal__main-block-title-wrapper">
            <p class="goal__facts">Цифры и факты</p>

            <div class="goal__slide-buttons-mobile">
            <button class="why-are-we__slide-arrow">
                <img
                src="<?php echo THEME_URL; ?>/assets/images/advantages/small-arrow-left.svg"
                alt="Arrow-right"
                />
            </button>

            <p class="why-are-we__slide-number-mobile">
                <span>1</span>
                /
                <span>4</span>
            </p>

            <button class="why-are-we__slide-arrow">
                <img
                src="<?php echo THEME_URL; ?>/assets/images/advantages/small-arrow-right.svg"
                alt="Arrow-right"
                />
            </button>
            </div>
        </div>
        <div class="goal__wrapper">
            <div class="goal__item">
                <h3 class="goal__item-title"><?php echo get_sub_field('block_title_1'); ?></h3>
                <p class="goal__item-text">
                    <?php echo get_sub_field('block_description_1'); ?>
                </p>
                <div class="goal__item-image-container">
                    <img
                    class="goal__item-image"
                    src="<?php echo THEME_URL; ?>/assets/images/goal/one-retail.svg"
                    alt="Retail Tech"
                    />
                </div>
            </div>

            <div class="goal__item">
                <h3 class="goal__item-title"><?php echo get_sub_field('block_title_2'); ?></h3>
                <p class="goal__item-text">
                    <?php echo get_sub_field('block_description_2'); ?>
                </p>
                <div class="goal__item-image-container">
                    <img
                    class="goal__item-image"
                    src="<?php echo THEME_URL; ?>/assets/images/goal/leader.svg"
                    alt="Лидер рынка"
                    />
                </div>
            </div>

            <div class="goal__item">
                <h3 class="goal__item-title"><?php echo get_sub_field('block_title_3'); ?></h3>
                <p class="goal__item-text">
                    <?php echo get_sub_field('block_description_3'); ?>
                </p>
                <div class="goal__item-image-container">
                    <img
                    class="goal__item-image"
                    src="<?php echo THEME_URL; ?>/assets/images/goal/height.svg"
                    alt="Стабильный рост"
                    />
                </div>
            </div>

            <div class="goal__item">
                <h3 class="goal__item-title"><?php echo get_sub_field('block_title_4'); ?></h3>
                <p class="goal__item-text">
                    <?php echo get_sub_field('block_description_4'); ?>
                </p>
                <div class="goal__item-image-container">
                    <img
                    class="goal__item-image"
                    src="<?php echo THEME_URL; ?>/assets/images/goal/care-future.svg"
                    alt="Забота о будущем"
                    />
                </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!--  //Our Goal Section  -->