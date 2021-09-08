<?php 
/*
Template Name: Policy
*/
?>
<?php get_header(); ?>

<div class="politics-wrap">
    <div class="politics">
        <h1 class="politics__header"><?php the_title(); ?></h1>
        <p class="politics__description">
            <?php the_content(); ?>
        </p>
    </div>
</div>

<?php get_footer(); ?>