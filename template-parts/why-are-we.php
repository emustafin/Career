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
            <button class="why-are-we__slide-arrow why-are-we__slide-btn-prev" data-name="prev" >
                <svg
                width="14"
                height="10"
                viewBox="0 0 14 10"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                >
                <path
                    d="M4.57661 0.575729L0.152344 4.99999L4.57661 9.42426L5.42514 8.57573L2.4494 5.59999H14.0009V4.39999H2.4494L5.42514 1.42426L4.57661 0.575729Z"
                    fill="black"
                />
                </svg>
            </button>

            <p class="why-are-we__slide-number-mobile">
            <span class="why-are-we__slide-number-mobile-value">1</span>
            /
            <span class="why-are-we__slide-number-mobile-total"><?php echo count( $slides ); ?></span>
            </p>

            <button class="why-are-we__slide-arrow why-are-we__slide-btn-next" data-name="next">
                <svg
                width="14"
                height="10"
                viewBox="0 0 14 10"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                >
                <path
                    d="M11.5515 4.39999L8.57574 1.42426L9.42426 0.575729L13.8485 4.99999L9.42426 9.42426L8.57574 8.57573L11.5515 5.59999H0V4.39999H11.5515Z"
                    fill="black"
                />
                </svg>
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
                                <span class="why-are-we__slide-number why-are-we__slide-value">0<?php echo count( $slides ); ?></span
                                >
                            </div>

                            <h3 class="why-are-we__slide-title"><?php echo $slides[$i]['title']; ?></h3>
                            <p class="why-are-we__slide-text">
                                <?php echo $slides[$i]['desription']; ?>
                            </p>
                        </div>

                        <div class="why-are-we__slide-image-wrapper loading">
                            <img
                                class="why-are-we__slide-image"
                                data-src="<?php echo $slides[$i]['img']; ?>"
                                src="<?php echo THEME_URL; ?>/assets/images/Lazy-loading/1x1.png"
                                alt="Img Slide"
                                width="1000"
                                height="563"
                            />
                        </div>
                    </div>
                <?php
            }
            ?>
        </div>
        <div class="why-are-we__slide-buttons">
            <button
                data-name="prev"
                class="
                why-are-we__slide-arrow why-are-we__slide-main-button-prev
                swiper-button-prev
                "
            >
                <svg
                class="why-are-we__slide-arrow-prev-image"
                width="192"
                height="10"
                viewBox="0 0 192 10"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                >
                <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M4.64652 0.646454L0.646522 4.64645L0.292969 5.00001L0.646522 5.35356L4.64652 9.35356L5.35363 8.64645L2.20714 5.49997H192V4.49997H2.20722L5.35363 1.35356L4.64652 0.646454Z"
                    fill="black"
                />
                </svg>
            </button>

            <button
                data-name="next"
                class="
                why-are-we__slide-arrow why-are-we__slide-main-button-next
                swiper-button-next
                "
            >
                <svg
                class="why-are-we__slide-arrow-next-image"
                width="224"
                height="10"
                viewBox="0 0 224 10"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                >
                <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M221.793 5.50004H0V4.50004H221.793L218.646 1.35359L219.354 0.646484L223.354 4.64648L223.707 5.00004L223.354 5.35359L219.354 9.35359L218.646 8.64648L221.793 5.50004Z"
                    fill="black"
                />
                </svg>
            </button>
        </div>
    </div>
    </div>
</section>
<!--  //Slider "Why are we"  -->