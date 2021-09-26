<?php
$args = array(
    'post_type'         => 'reviews',
    'posts_per_page'    => -1,
    'post_status'       => 'publish',
);

$reviews = new WP_Query( $args );
?>
<!--  Career Upgrade Section  -->
<section class="upgrade">
    <div class="container">
    <h2 class="upgrade__title">
        <?php echo get_sub_field('title'); ?>
    </h2>
    <div class="upgrade__content-wrapper">
        <div class="upgrade__side-bar">
            <p class="upgrade__text">
                <?php echo get_sub_field('description'); ?>
            </p>
        </div>

        <div class="upgrade__slider-wrapper">
            <div class="upgrade__slider-prev-block">
                <div class="upgrade__slider-prev-block-container">
                    <div class="upgrade__slider-prev-image-wrapper swiper swiperUpgrage">
                        <div class="upgrade__slider-prev-image-row swiper-wrapper">

                            <?php
                            if ( $reviews->have_posts() ) {
                                $post = $reviews->posts[count($reviews->posts)-1];
                                $thumbnail_url = get_the_post_thumbnail_url( $post->ID, 'full' );
                                if( false == $thumbnail_url ){
                                    $thumbnail_url = THEME_URL .'/assets/images/default/post-image-default.jpg';
                                }
                                ?>
                                <div class="upgrade__slider-prev-image swiper-slide">
                                    <img
                                    class="upgrade__slider-prev-picture"
                                    src="<?php echo $thumbnail_url; ?>"
                                    alt="Photo"
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
                                    <div class="upgrade__slider-prev-image swiper-slide">
                                        <img
                                        class="upgrade__slider-prev-picture"
                                        src="<?php echo $thumbnail_url; ?>"
                                        alt="Photo"
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

            <div class="upgrade__middle-block-container swiper mainSlider">
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
                                    <div class="upgrade__middle-image">
                                        <img
                                        class="upgrade__main-image"
                                        src="<?php echo $thumbnail_url; ?>"
                                        alt="Photo"
                                        />
                                    </div>
                                    <p class="upgrade__main-job">
                                        <span class="upgrade__main-name"><?php the_title(); ?> </span>,
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

                                    <?php
                                    $k = 1;
                                    if( have_rows('career_way') ):

                                        while( have_rows('career_way') ) : the_row();

                                            ?>
                                            <div class="upgrade__way-item">
                                                <p class="upgrade__way-year"><?php echo get_sub_field('year'); ?></p>
                                                <p class="upgrade__way-job"><?php echo get_sub_field('proff'); ?></p>
                                            </div>

                                            <?php
                                            if( $k < count(get_field('career_way')) ):
                                                ?>
                                                <div class="upgrade__way-arrow-block">
                                                    <img
                                                    src="<?php echo THEME_URL; ?>/assets/images/arrows/arrow-right.svg"
                                                    alt="Arrow"
                                                    class="upgrade__way-arrow"
                                                    />
                                                </div>
                                                <?php
                                            endif;
                                            $k++;
                                        endwhile;
                                    endif;
                                    ?>

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
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>

            <div class="upgrade__slider-next-block">
                <div class="upgrade__slider-next-block-wrapper swiper nextSlider">
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
                                    <div class="upgrade__slider-next-item-image-block">
                                        <img
                                        class="upgrade__slider-next-item-image"
                                        src="<?php echo $thumbnail_url; ?>"
                                        alt="Image"
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
                                <div class="upgrade__slider-next-item-image-block">
                                    <img
                                    class="upgrade__slider-next-item-image"
                                    src="<?php echo $thumbnail_url; ?>"
                                    alt="Image"
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
<!--  //Career Upgrade Section  -->