<?php
/**
 * Index template file.
 *
 * @package Career\Template
 */


get_header();
?>

<section>
    <div class="container">
        <div class="row">
            <h1><?php the_title(); ?></h1>
        </div>
        <div class="row">
            <div class="col-12"><?php the_content(); ?></div>
        </div>
    </div>
</section>

<?php
get_footer();
