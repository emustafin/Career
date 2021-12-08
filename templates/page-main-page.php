<?php 
/*
Template Name: Main Page
*/
?>
<?php get_header(); ?>
<script>
    var rel_type = 'mainpage';
    var vacancyid = '';
    var sourceurl = '';
</script>
<?php

if( have_rows('mainpage_content') ):
  while ( have_rows('mainpage_content') ) : the_row();

    switch ( get_row_layout() ) {

      case 'page__stage':
        include(THEME_DIR . '/template-parts/mainpage/page__stage.php');
        break;

      case 'division':
        include(THEME_DIR . '/template-parts/mainpage/division.php');
        break;

      case 'mission':
        include(THEME_DIR . '/template-parts/mainpage/mission.php');
        break;

      case 'why-us':
        include(THEME_DIR . '/template-parts/retail__why-us.php');
        break;

      case 'video':
        include(THEME_DIR . '/template-parts/mainpage/video.php');
        break;

      case 'awards':
        include(THEME_DIR . '/template-parts/mainpage/awards.php');
        break;

      case 'running-line':
        include(THEME_DIR . '/template-parts/mainpage/running-line.php');
        break;

      case 'news-events':
        // include(THEME_DIR . '/template-parts/mainpage/news-events.php');
        include(THEME_DIR . '/template-parts/intern.php');
        break;

      case 'sustainability':
        include(THEME_DIR . '/template-parts/mainpage/sustainability.php');
        break;

      case 'stability':
        include(THEME_DIR . '/template-parts/mainpage/stability.php');
        break;
    }

  endwhile;
endif;
?>

<?php get_footer(); ?>