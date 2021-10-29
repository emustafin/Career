<?php
/**
 * Template Name: Skillaz
 *
 * @package Career\Template
 */

use \Career\API\Skillaz_Vacancies_Find;

Skillaz_Vacancies_Find::vacancies_find();

get_header();
the_post();
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
