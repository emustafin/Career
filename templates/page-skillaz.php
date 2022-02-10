<?php
/**
 * Template Name: Skillaz
 *
 * @package Career\Template
 */

use \Career\API\Skillaz_Vacancies_Find;

get_header();
the_post();
?>

<section>
    <div class="container">
        <div class="row">
            <h1><?php the_title(); ?></h1>
        </div>
        <div class="row">
            <div class="col-12" style="margin-top:150px;"><?php the_content(); ?></div>
            <div class="col-12" style="margin-top:150px;">
                <?php

                if( $_POST['mapping_page'] ){
                    $mapping_page = intval($_POST['mapping_page']) + 1;
                } elseif( '0' == $_POST['mapping_page'] ) {
                    $mapping_page = 0;
                }?>
                <form id="mapping" action="/skillaz/" method="POST">
                    <p>
                        <label for="mapping_page">mapping_page</label>
                        <input id="mapping_page" type="number" name="mapping_page" value="<?php echo $mapping_page; ?>">
                        <button type="submit" >GO!</button>
                    </p>
                </form>
            </div>
            <div class="col-12" style="margin-top:150px;"><?php Skillaz_Vacancies_Find::vacancies_find( $mapping_page ); ?></div>
        </div>
    </div>
</section>

<?php
get_footer();
?>
<?php
if( $mapping_page <= 221 ){
    ?>
    <script>
        jQuery(document).ready(function() {
            setTimeout(() => {
                jQuery('form#mapping button').click()
            }, 1000);
        })
    </script>
    <?php
}
?>