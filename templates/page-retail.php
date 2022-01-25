<?php 
/*
Template Name: Retail
*/
?>
<?php get_header(); ?>
<script>
    var rel_type = 'roznica';
    var modificator = 'retail_';
    var vacancyid = '';
    var sourceurl = '';
</script>
<?php

$_modificator = 'retail_';

if( have_rows('content_blocks') ):
  while ( have_rows('content_blocks') ) : the_row();

    switch ( get_row_layout() ) {

      case 'retail__preview':
        include(THEME_DIR . '/template-parts/retail/retail__preview.php');
        break;

      case 'retail__mission':
        include(THEME_DIR . '/template-parts/retail/retail__mission.php');
        break;

      case 'retail__why-us':
        include(THEME_DIR . '/template-parts/retail/retail__why-us.php');
        break;

      case 'brands':
        include(THEME_DIR . '/template-parts/retail/retail__brands.php');
        break;

      case 'retail__position':
        include(THEME_DIR . '/template-parts/retail/retail__position.php');
        break;

      case 'retail__quote':
        include(THEME_DIR . '/template-parts/retail/retail__quote.php');
        break;

      case 'retail__internship':
        include(THEME_DIR . '/template-parts/retail/retail__internship.php');
        break;

      case 'retail__advantages':
        include(THEME_DIR . '/template-parts/retail/retail__advantages.php');
        break;

      case 'retail__upgrade':
        $relation = 'roznica';
        include(THEME_DIR . '/template-parts/common/upgrade.php');
        break;

      case 'running_title':
        $relation = 'roznica';
        include(THEME_DIR . '/template-parts/common/running-line.php');
        break;

    }

  endwhile;
endif;
?>

<?php get_footer(); ?>