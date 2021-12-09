<?php
$args = array(
    'post_type'         => 'reviews',
    'posts_per_page'    => -1,
    'post_status'       => 'publish',
);

if( '' != $relation ){
    $args['relation'] = $relation;

    if( 'roznica' == $relation ){
        $args['meta_query'] = array(
            array(
                'key'		=> 'story-mvideo-eldorado',
                'value'		=> 'mvideo',
                'compare'	=> '='
            )
        );
    }
}

$reviews = new WP_Query( $args );
?>
<!--  Career Upgrade Section mvideo -->
<section class="upgrade">
    <div class="container">
    <h2 class="upgrade__title">
        <?php echo get_sub_field('title'); ?>
    </h2>
    <div class="upgrade__content-wrapper mvideo">
        <div class="upgrade__side-bar">
            <p class="upgrade__text">
                <?php echo get_sub_field('description'); ?>
            </p>
        </div>

        <div class="upgrade__slider-wrapper">

            <div class="slider" id="slider-main" data-slider-id="slider-left slider-main slider-right">
                <div class="slider__btn slider slider__left" id="slider-left"  data-slider-id="slider-left slider-main slider-right" data-slider-side="right">
                    <div class="slider__list slider__list_m-0 slider__list_w-100 slider__list_h-100">

                        <?php
                        if ( $reviews->have_posts() ) {
                            $post = $reviews->posts[count($reviews->posts)-1];
                            $thumbnail_url = get_the_post_thumbnail_url( $post->ID, 'full' );
                            if( false == $thumbnail_url ){
                                $thumbnail_url = THEME_URL .'/assets/images/default/post-image-default.jpg';
                            }
                            ?>
                            <div class="slider__item loading">
                                <img class="slider__left-img"
                                    data-src="<?php echo $thumbnail_url; ?>"
                                    src="<?php echo THEME_URL; ?>/assets/images/Lazy-loading/1x1.png"
                                    alt="Photo"
                                    width="100"
                                    height="100"
                                >
                            </div>
                            <?php
                            for ($i=0; $i < count($reviews->posts)-1; $i++) {
                                $post = $reviews->posts[$i];
                                $thumbnail_url = get_the_post_thumbnail_url( $post->ID, 'full' );
                                if( false == $thumbnail_url ){
                                    $thumbnail_url = THEME_URL .'/assets/images/default/post-image-default.jpg';
                                }
                                ?>
                                <div class="slider__item loading">
                                    <img class="slider__left-img"
                                        data-src="<?php echo $thumbnail_url; ?>"
                                        src="<?php echo THEME_URL; ?>/assets/images/Lazy-loading/1x1.png"
                                        alt="Photo"
                                        width="100"
                                        height="100"
                                    >
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
                <div data-slider-id="slider-left slider-main slider-right" data-slider-side="right" class="slider__btn slider__btn-left"></div>
                <div class="slider__list">

                    <?php
                    if ( $reviews->have_posts() ) {
                        while ( $reviews->have_posts() ) {
                            $reviews->the_post();

                            $thumbnail_url = get_the_post_thumbnail_url( get_the_ID(), 'full' );
                            if( false == $thumbnail_url ){
                                $thumbnail_url = THEME_URL .'/assets/images/default/post-image-default.jpg';
                            }
                            ?>
                            <div class="slider__item">
                                <div class="slider__content">
                                    <div class="slider__content-paragraph">
                                        <div class="slider__info-people loading">
                                            <img class="slider__img"
                                                data-src="<?php echo $thumbnail_url; ?>"
                                                src="<?php echo THEME_URL; ?>/assets/images/Lazy-loading/1x1.png"
                                                alt="Photo"
                                                title="Наши истории успеха"
                                                width="100"
                                                height="100"
                                            >
                                            <p class="slider__job">
                                                <span class="slider__job-name"><?php the_title(); ?></span>, 
                                                <br> 
                                                <span class="slider__job-profession">
                                                    <?php echo get_field('proffesion'); ?>
                                                </span>
                                            </p>
                                        </div>
                                        <p class="slider__main-text"><?php the_content(); ?></p>
                                    </div>
                                    <div class="slider__content-road">
                                        <div class="slider__way">
                                            <?php
                                            $k = 1;
                                            if( have_rows('career_way') ):

                                                while( have_rows('career_way') ) : the_row();

                                                    ?>
                                                    <div class="slider__way-item">
                                                        <span class="slider__way-year"><?php echo get_sub_field('year'); ?></span>
                                                        <span class="slider__way-profession"><?php echo get_sub_field('proff'); ?></span>
                                                    </div>
                                                    <?php
                                                    $k++;
                                                endwhile;
                                            endif;
                                            ?>
                                        </div>
                                        <div class="slider__way-mobile">
                                            <?php
                                            if( have_rows('career_way') ):

                                                while( have_rows('career_way') ) : the_row();
                                                    ?>
                                                    <div class="slider__way-item-mobile">
                                                        <span class="slider__way-year"><?php echo get_sub_field('year'); ?></span>&nbsp;<span class="slider__way-profession"><?php echo get_sub_field('proff'); ?></span>
                                                    </div>
                                                    <?php
                                                endwhile;
                                            endif;
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>

                </div>
                <div data-slider-id="slider-left slider-main slider-right" data-slider-side="left" class="slider__btn slider__btn-right"></div>
                <div data-slider-id="slider-left slider-main slider-right" data-slider-side="left" class="slider__btn slider slider__right" id="slider-right">
                    <div class="slider__list slider__list_m-0 slider__list_2-100 slider__list_w_40px">

                        <?php
                        if ( $reviews->have_posts() ) {

                            for ($i=1; $i < count($reviews->posts); $i++) {
                                $post = $reviews->posts[$i];
                                $thumbnail_url = get_the_post_thumbnail_url( $post->ID, 'full' );
                                if( false == $thumbnail_url ){
                                    $thumbnail_url = THEME_URL .'/assets/images/default/post-image-default.jpg';
                                }
                                ?>
                                <div class="slider__item loading">
                                    <img class="slider__right-img"
                                        data-src="<?php echo $thumbnail_url; ?>"
                                        src="<?php echo THEME_URL; ?>/assets/images/Lazy-loading/1x1.png"
                                        alt="Image"
                                        title="Наши истории успеха"
                                        width="100"
                                        height="100"
                                    >
                                    <p class="slider__right-name-and-position"><span class="slider__job-name"><?php echo get_the_title( $post->ID ); ?>	</span>, <br> <span class="slider__job-profession"><?php echo get_field('proffesion', $post->ID ); ?></span></p>
                                </div>
                                <?php
                            }

                            $post = $reviews->posts[0];
                            $thumbnail_url = get_the_post_thumbnail_url( $post->ID, 'full' );
                            if( false == $thumbnail_url ){
                                $thumbnail_url = THEME_URL .'/assets/images/default/post-image-default.jpg';
                            }
                            ?>
                            <div class="slider__item loading">
                                <img class="slider__right-img"
                                    data-src="<?php echo $thumbnail_url; ?>"
                                    src="<?php echo THEME_URL; ?>/assets/images/Lazy-loading/1x1.png"
                                    alt="Image"
                                    title="Наши истории успеха"
                                    width="100"
                                    height="100"
                                >
                                <p class="slider__right-name-and-position"><span class="slider__job-name"><?php echo get_the_title( $post->ID ); ?>	</span>, <br> <span class="slider__job-profession"><?php echo get_field('proffesion', $post->ID ); ?></span></p>
                            </div>
                            <?php
                        }
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>

        </div>
    </div>


<?php
$args = array(
    'post_type'         => 'reviews',
    'posts_per_page'    => -1,
    'post_status'       => 'publish',
    'meta_query'        => array(
        array(
            'key'		=> 'story-mvideo-eldorado',
            'value'		=> 'eldorado',
            'compare'	=> '='
        )
    )
);

if( '' != $relation ){
    $args['relation'] = $relation;
}

$reviews = new WP_Query( $args );
?>
    <div class="upgrade__content-wrapper eldorado hide">
        <div class="upgrade__side-bar">
            <p class="upgrade__text">
                <?php echo get_sub_field('description'); ?>
            </p>
        </div>

        <div class="upgrade__slider-wrapper">
            <div class="upgrade__slider-prev-block">
                <div class="upgrade__slider-prev-block-container">
                    <div class="upgrade__slider-prev-image-wrapper swiper swiperUpgrage_eldorado">
                        <div class="upgrade__slider-prev-image-row swiper-wrapper">

                            <?php
                            if ( $reviews->have_posts() ) {
                                $post = $reviews->posts[count($reviews->posts)-1];
                                $postrelation = get_field( 'story-mvideo-eldorado', $post->ID );
                                $thumbnail_url = get_the_post_thumbnail_url( $post->ID, 'full' );
                                if( false == $thumbnail_url ){
                                    $thumbnail_url = THEME_URL .'/assets/images/default/post-image-default.jpg';
                                }
                                ?>
                                <div class="upgrade__slider-prev-image swiper-slide loading">
                                    <img
                                    class="upgrade__slider-prev-picture"
                                    data-src="<?php echo $thumbnail_url; ?>"
                                    src="<?php echo THEME_URL; ?>/assets/images/Lazy-loading/1x1.png"
                                    alt="Photo"
                                    width="100"
                                    height="100"
                                    />
                                </div>
                                <?php
                                for ($i=0; $i < count($reviews->posts)-1; $i++) {
                                    $post = $reviews->posts[$i];
                                    $thumbnail_url = get_the_post_thumbnail_url( $post->ID, 'full' );
                                    if( false == $thumbnail_url ){
                                        $thumbnail_url = THEME_URL .'/assets/images/default/post-image-default.jpg';
                                    }
                                    ?>
                                    <div class="upgrade__slider-prev-image swiper-slide loading">
                                        <img
                                        class="upgrade__slider-prev-picture"
                                        data-src="<?php echo $thumbnail_url; ?>"
                                        src="<?php echo THEME_URL; ?>/assets/images/Lazy-loading/1x1.png"
                                        alt="Photo"
                                        title="Наши истории успеха"
                                        width="100"
                                        height="100"
                                        />
                                    </div>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="upgrade__middle-block-container swiper mainSlider_eldorado">
                <div class="upgrade__middle-image-row swiper-wrapper">

                    <?php
                    if ( $reviews->have_posts() ) {
                        while ( $reviews->have_posts() ) {
                            $reviews->the_post();

                            $thumbnail_url = get_the_post_thumbnail_url( get_the_ID(), 'full' );
                            if( false == $thumbnail_url ){
                                $thumbnail_url = THEME_URL .'/assets/images/default/post-image-default.jpg';
                            }
                            ?>
                            <div class="upgrade__middle-image-item swiper-slide">
                                <div class="upgrade__middle-image-item-container">
                                    <div class="upgrade__middle-image loading">
                                        <img
                                        class="upgrade__main-image"
                                        data-src="<?php echo $thumbnail_url; ?>"
                                        src="<?php echo THEME_URL; ?>/assets/images/Lazy-loading/1x1.png"
                                        alt="Photo"
                                        title="Наши истории успеха"
                                        width="100"
                                        height="100"
                                        />
                                    </div>
                                    <p class="upgrade__main-job">
                                        <span class="upgrade__main-name"><?php the_title(); ?></span>,
                                        <br />
                                        <span class="upgrade__main-profession"
                                        ><?php echo get_field('proffesion'); ?></span
                                        >
                                    </p>
                                </div>

                                <div class="upgrade__main-text">
                                <?php the_content(); ?>
                                </div>

                                <div class="upgrade__way-wrapper">
                                    <div class="upgrade__way-mobile">
                                        <?php
                                        if( have_rows('career_way') ):

                                            while( have_rows('career_way') ) : the_row();
                                                ?>
                                                <p class="upgrade__way-text"><?php echo get_sub_field('year'); ?> <?php echo get_sub_field('proff'); ?></p>
                                                <?php
                                            endwhile;
                                        endif;
                                        ?>
                                    </div>

                                    <?php
                                    $k = 1;
                                    if( have_rows('career_way') ):

                                        while( have_rows('career_way') ) : the_row();

                                            ?>
                                            <div class="upgrade__way-item">
                                                <p class="upgrade__way-year"><?php echo get_sub_field('year'); ?></p>
                                                <p class="upgrade__way-job"><?php echo get_sub_field('proff'); ?></p>
                                                <svg
                                                    class="upgrade__way-arrow"
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
                                            </div>

                                            <?php
                                            if( $k < count(get_field('career_way')) ):
                                                ?>
                                                <!-- <div class="upgrade__way-arrow-block">
                                                    <img
                                                    src="<?php echo THEME_URL; ?>/assets/images/arrows/arrow-right.svg"
                                                    alt="Arrow"
                                                    class="upgrade__way-arrow"
                                                    />
                                                </div> -->
                                                <?php
                                            endif;
                                            $k++;
                                        endwhile;
                                    endif;
                                    ?>

                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>

            <div class="upgrade__slider-next-block">
                <div class="upgrade__slider-next-block-wrapper swiper nextSlider_eldorado">
                    <div class="upgrade__slider-next-row swiper-wrapper">
                        
                        <?php
                        if ( $reviews->have_posts() ) {

                            for ($i=1; $i < count($reviews->posts); $i++) {
                                $post = $reviews->posts[$i];
                                $thumbnail_url = get_the_post_thumbnail_url( $post->ID, 'full' );
                                if( false == $thumbnail_url ){
                                    $thumbnail_url = THEME_URL .'/assets/images/default/post-image-default.jpg';
                                }
                                ?>
                                <div class="upgrade__slider-next-item swiper-slide">
                                    <div class="upgrade__slider-next-item-image-block loading">
                                        <img
                                        class="upgrade__slider-next-item-image"
                                        data-src="<?php echo $thumbnail_url; ?>"
                                        src="<?php echo THEME_URL; ?>/assets/images/Lazy-loading/1x1.png"
                                        alt="Image"
                                        title="Наши истории успеха"
                                        width="100"
                                        height="100"
                                        />
                                    </div>
                                    <div class="upgrade__slider-next-name-text-wrapper">
                                        <p class="upgrade__slider-next-name">
                                        <?php the_title(); ?><span>,</span>
                                        </p>
                                        <p class="upgrade__slider-next-job"><?php echo get_field('proffesion', $post->ID ); ?></p>
                                    </div>
                                </div>
                                <?php
                            }

                            $post = $reviews->posts[0];
                            $thumbnail_url = get_the_post_thumbnail_url( $post->ID, 'full' );
                            if( false == $thumbnail_url ){
                                $thumbnail_url = THEME_URL .'/assets/images/default/post-image-default.jpg';
                            }
                            ?>
                            <div class="upgrade__slider-next-item swiper-slide">
                                <div class="upgrade__slider-next-item-image-block loading">
                                    <img
                                    class="upgrade__slider-next-item-image"
                                    data-src="<?php echo $thumbnail_url; ?>"
                                    src="<?php echo THEME_URL; ?>/assets/images/Lazy-loading/1x1.png"
                                    alt="Image"
                                    title="Наши истории успеха"
                                    width="100"
                                    height="100"
                                    />
                                </div>
                                <div class="upgrade__slider-next-name-text-wrapper">
                                    <p class="upgrade__slider-next-name">
                                    <?php the_title(); ?><span>,</span>
                                    </p>
                                    <p class="upgrade__slider-next-job"><?php echo get_field('proffesion', $post->ID ); ?></p>
                                </div>
                            </div>
                            <?php
                        }
                        wp_reset_postdata();
                        ?>

                    </div>
                </div>
            </div>
            <button class="upgrade__arrow-prev">
                <svg
                width="300"
                height="10"
                viewBox="0 0 300 10"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                >
                <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M297.793 4.50004L294.646 1.35359L295.354 0.646484L299.354 4.64648L299.707 5.00004L299.354 5.35359L295.354 9.35359L294.646 8.64648L297.793 5.50004H0V4.50004H297.793Z"
                    fill="black"
                />
                </svg>
            </button>
            <button class="upgrade__slider-next-arrow">
                <svg
                width="300"
                height="10"
                viewBox="0 0 300 10"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                >
                <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M297.793 4.50004L294.646 1.35359L295.354 0.646484L299.354 4.64648L299.707 5.00004L299.354 5.35359L295.354 9.35359L294.646 8.64648L297.793 5.50004H0V4.50004H297.793Z"
                    fill="black"
                />
                </svg>
            </button>
        </div>
    </div>
    </div>
</section>
<!--  //Career Upgrade Section mvideo -->