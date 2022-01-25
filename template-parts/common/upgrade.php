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

            <?php if ( $reviews->have_posts() ) { ?>
                <div class="slider" id="slider-main-mvideo" data-slider-id="slider-left-mvideo slider-main-mvideo slider-right-mvideo">
                    <div class="slider__btn slider slider__left" id="slider-left-mvideo"  data-slider-id="slider-left-mvideo slider-main-mvideo slider-right-mvideo" data-slider-side="right">
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
                    <div data-slider-id="slider-left-mvideo slider-main-mvideo slider-right-mvideo" data-slider-side="right" class="slider__btn slider__btn-left"></div>
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
                    <div data-slider-id="slider-left-mvideo slider-main-mvideo slider-right-mvideo" data-slider-side="left" class="slider__btn slider__btn-right"></div>
                    <div data-slider-id="slider-left-mvideo slider-main-mvideo slider-right-mvideo" data-slider-side="left" class="slider__btn slider slider__right" id="slider-right-mvideo">
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
            <?php } ?>

        </div>
    </div>


<?php

if( !is_front_page() ){
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
        <div class="upgrade__content-wrapper eldorado ">
            <div class="upgrade__side-bar">
                <p class="upgrade__text">
                    <?php echo get_sub_field('description'); ?>
                </p>
            </div>

            <div class="upgrade__slider-wrapper">

                <div class="slider" id="slider-main-eldorado" data-slider-id="slider-left-eldorado slider-main-eldorado slider-right-eldorado">
                    <div class="slider__btn slider slider__left" id="slider-left-eldorado"  data-slider-id="slider-left-eldorado slider-main-eldorado slider-right-eldorado" data-slider-side="right">
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
                    <div data-slider-id="slider-left-eldorado slider-main-eldorado slider-right-eldorado" data-slider-side="right" class="slider__btn slider__btn-left"></div>
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
                    <div data-slider-id="slider-left-eldorado slider-main-eldorado slider-right-eldorado" data-slider-side="left" class="slider__btn slider__btn-right"></div>
                    <div data-slider-id="slider-left-eldorado slider-main-eldorado slider-right-eldorado" data-slider-side="left" class="slider__btn slider slider__right" id="slider-right-eldorado">
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
<?php } ?>
    </div>
</section>
<!--  //Career Upgrade Section mvideo -->