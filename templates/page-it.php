<?php 
/*
Template Name: IT
*/
?>
<?php 
get_header();
$rel_type = 'it';
?>
<script>
    var rel_type = '<?php echo $rel_type; ?>';
    var vacancyid = '';
    var sourceurl = '';
</script>
<?php

if( have_rows('content_blocks') ):
  while ( have_rows('content_blocks') ) : the_row();

    switch ( get_row_layout() ) {

      case 'create-future':
        include(THEME_DIR . '/template-parts/it/create-future.php');
        break;

      case 'why-are-we':
        include(THEME_DIR . '/template-parts/it/why-are-we.php');
        break;

      case 'goal':
        include(THEME_DIR . '/template-parts/it/goal.php');
        break;

      case 'profession':
        include(THEME_DIR . '/template-parts/it/profession.php');
        break;

      case 'direction':
        include(THEME_DIR . '/template-parts/it/direction.php');
        break;

      case 'upgrade':
        $relation = 'it';
        include(THEME_DIR . '/template-parts/common/upgrade.php');
        break;

      case 'find':
        include(THEME_DIR . '/template-parts/it/find.php');
        break;

      case 'intern':
        include(THEME_DIR . '/template-parts/common/intern.php');
        break;
    }

  endwhile;
endif;
?>

<?php get_footer(); ?>