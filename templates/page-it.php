<?php 
/*
Template Name: IT
*/
?>
<?php get_header(); ?>
<script>
    var rel_type = 'it';
</script>
<?php

if( have_rows('content_blocks') ):
  while ( have_rows('content_blocks') ) : the_row();

    switch ( get_row_layout() ) {

      case 'create-future':
        include(THEME_DIR . '/template-parts/create-future.php');
        break;

      case 'why-are-we':
        include(THEME_DIR . '/template-parts/why-are-we.php');
        break;

      case 'goal':
        include(THEME_DIR . '/template-parts/goal.php');
        break;

      case 'profession':
        include(THEME_DIR . '/template-parts/profession.php');
        break;

      case 'direction':
        include(THEME_DIR . '/template-parts/direction.php');
        break;

      case 'upgrade':
        $relation = 'it';
        include(THEME_DIR . '/template-parts/upgrade.php');
        break;

      case 'find':
        include(THEME_DIR . '/template-parts/find.php');
        break;

      case 'intern':
        include(THEME_DIR . '/template-parts/intern.php');
        break;
    }

  endwhile;
endif;
?>

<?php get_footer(); ?>