<?php 
/*
Template Name: Office
*/
?>
<?php get_header(); ?>
<script>
    var rel_type = 'office';
    var vacancyid = '';
    var sourceurl = '';
</script>
<?php

if( have_rows('office_blocks') ):
  while ( have_rows('office_blocks') ) : the_row();

    switch ( get_row_layout() ) {

      case 'main_screen':
        include(THEME_DIR . '/template-parts/office/main_screen.php');
        break;

      case 'why-are-we':
        include(THEME_DIR . '/template-parts/it/why-are-we.php');
        break;

      case 'profession':
        include(THEME_DIR . '/template-parts/it/profession.php');
        // include(THEME_DIR . '/template-parts/office/office__vacancies.php');
        break;

      case 'reason':
        include(THEME_DIR . '/template-parts/logistic/why-we-are.php');
        break;

      case 'upgrade_screen':
        $relation = 'office';
        include(THEME_DIR . '/template-parts/common/upgrade.php');
        break;

      case 'running_line':
        include(THEME_DIR . '/template-parts/common/running-line.php');
        break;

      case 'quote':
        include(THEME_DIR . '/template-parts/logistic/quote_screen.php');
        break;

      case 'intern':
        include(THEME_DIR . '/template-parts/common/intern.php');
        break;
    }

  endwhile;
endif;
?>

<?php get_footer(); ?>