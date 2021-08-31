<?php 
/*
Template Name: IT
*/
?>
<?php get_header(); ?>

<?php

if( have_rows('content_blocks') ):
  while ( have_rows('content_blocks') ) : the_row();

    switch ( get_row_layout() ) {

      case 'why-are-we':
        include(THEME_DIR . '/blocks/why-are-we.php');
        break;

      case 'goal':
        include(THEME_DIR . '/blocks/goal.php');
        break;

      case 'profession':
        include(THEME_DIR . '/blocks/profession.php');
        break;

      case 'direction':
        include(THEME_DIR . '/blocks/direction.php');
        break;

      case 'upgrade':
        include(THEME_DIR . '/blocks/upgrade.php');
        break;

      case 'find':
        include(THEME_DIR . '/blocks/find.php');
        break;

      case 'intern':
        include(THEME_DIR . '/blocks/intern.php');
        break;
    }

  endwhile;
endif;
?>

<?php get_footer(); ?>