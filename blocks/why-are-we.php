<!--  Slider "Why are we"  -->
<?php
$slides = get_sub_field('slides');
?>
<section class="why-are-we">
    <div class="why-are-we__mobile-block">
        <p class="why-are-we__text-mobile">
            <?php echo get_sub_field('title'); ?>
        </p>

        <div class="why-are-we__slide-buttons-mobile">
            <button class="why-are-we__slide-arrow" data-name="prev">
            <img
                src="<?php echo THEME_URL; ?>/assets/img/advantages/small-arrow-left.svg"
                alt="Arrow-right"
            />
            </button>

            <p class="why-are-we__slide-number-mobile">
            <span class="why-are-we__slide-number-mobile-value">1</span>
            /
            <span class="why-are-we__slide-number-mobile-total"><?php echo count( $slides ); ?></span>
            </p>

            <button class="why-are-we__slide-arrow" data-name="next">
            <img
                src="<?php echo THEME_URL; ?>/assets/img/advantages/small-arrow-right.svg"
                alt="Arrow-right"
            />
            </button>
        </div>
    </div>

    <div class="why-are-we__wrapper">
        <div class="why-are-we__side-bar">
            <p class="why-are-we__side-bar-text">
            <?php echo get_sub_field('title'); ?>
            </p>
        </div>

        <div class="why-are-we__slider-wrapper swiper">
            <div class="why-are-we__slider-row swiper-wrapper">

                <?php
                for ($i=0; $i < count($slides); $i++) { 
                    ?>
                    <div class="why-are-we__slide swiper-slide">
                        <div class="why-are-we__slide-info">
                            <div class="why-are-we__slide-numbers">
                                <span class="why-are-we__slide-number">0<?php echo $i+1; ?></span>
                                -
                                <span class="why-are-we__slide-number">0<?php echo count( $slides ); ?></span>
                            </div>

                            <h3 class="why-are-we__slide-title"><?php echo $slides[$i]['title']; ?></h3>
                            <p class="why-are-we__slide-text">
                            <?php echo $slides[$i]['desription']; ?>
                            </p>
                        </div>

                        <div class="why-are-we__slide-image-wrapper">
                            <img
                                class="why-are-we__slide-image"
                                src="<?php echo $slides[$i]['img']; ?>"
                                alt="Удаленка навсегда"
                            />
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
            <div class="why-are-we__slide-buttons">
                <button class="why-are-we__slide-arrow-prev">
                <img
                    src="<?php echo THEME_URL; ?>/assets/img/advantages/arrow-left.svg"
                    alt="Arrow-right"
                />
                </button>

                <button class="why-are-we__slide-arrow-next">
                <img
                    src="<?php echo THEME_URL; ?>/assets/img/advantages/arrow-right.svg"
                    alt="Arrow-right"
                />
                </button>
            </div>
        </div>
    </div>
</section>
<!--  //Slider "Why are we"  -->