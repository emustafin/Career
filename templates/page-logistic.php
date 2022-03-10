<?php 
/*
Template Name: Logistic
*/
?>
<?php
get_header();
$rel_type = 'logistic';
?>
<script>
    var rel_type = '<?php echo $rel_type; ?>';
    var vacancyid = '';
    var sourceurl = '';
</script>
<?php

if( have_rows('logistic_blocks') ):
  while ( have_rows('logistic_blocks') ) : the_row();

    switch ( get_row_layout() ) {

      case 'main_screen':
        include(THEME_DIR . '/template-parts/logistic/main_screen.php');
        break;

      case 'advantages_screen':
        include(THEME_DIR . '/template-parts/logistic/advantages_screen.php');
        break;

      case 'career_screen':
        include(THEME_DIR . '/template-parts/common/join-the-team.php');
        break;

      case 'directions_screen':
        include(THEME_DIR . '/template-parts/it/profession.php');
        // include(THEME_DIR . '/template-parts/logistic/directions_screen.php');
        break;

      case 'why-we-are':
        include(THEME_DIR . '/template-parts/logistic/why-we-are.php');
        break;

      case 'upgrade_screen':
        $relation = 'logistic';
        include(THEME_DIR . '/template-parts/common/upgrade.php');
        break;

      case 'running_line_screen':
        include(THEME_DIR . '/template-parts/common/running-line.php');
        break;

      case 'quote_screen':
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