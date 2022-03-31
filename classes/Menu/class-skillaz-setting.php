<?php
/**
 * Init and control Skillaz Vacancy
 *
 * @package Career\Core
 */

namespace Career\Menu;

use \Career\API\Skillaz_Vacancies_Find;

class Skillaz_setting{

    public $page_slug;
	public $option_group;
    public $select_skillaz_url = SKILLAZ_URL;

	public function __construct() {

        $this->page_slug = 'skillaz_control';
		$this->option_group = 'main_skillaz_control';

        add_action( 'admin_menu', [ $this, 'add_skillaz_control' ], 25 );
        add_action( 'admin_init',  [ $this, 'theme_settings_fields' ] );
        add_action( 'admin_notices', [ $this, 'notice' ] );
	}

    public function add_skillaz_control() {

        add_menu_page(
            'Skillaz control',
            'Skillaz control',
            'manage_options',
            $this->page_slug,
            [ $this, 'content_skillaz_control' ],
            'dashicons-admin-generic',
            81
        );
 
    }

    public function content_skillaz_control(){

        $autorun = '';
        if( 'on' == $_POST['autorun'] ){
            $autorun = 'checked';
        }

        $autocleaning = '';
        if( 'on' == $_POST['autocleaning'] ){
            $autocleaning = 'checked';
        }

        if( $_POST['mapping_page'] ){
            $mapping_page = intval($_POST['mapping_page']) + 1;
        } elseif( '0' == $_POST['mapping_page'] ) {
            $mapping_page = 1;
        } else{
            $mapping_page = -1;
        }
        ?>
        <div class="container">
            <div class="row">
                <h1>Skillaz управление</h1>
            </div>

            <div class="row" style="display:flex;">
                <div class="col-12" style="margin-top:20px;">

                    <form method="post" action="options.php">
                        <?php
                            settings_fields( $this->option_group );
                            do_settings_sections( $this->page_slug );
                            submit_button();
                        ?>
                    </form>

                </div>
            </div>

            <div class="row" style="display:flex;">
                <div class="col-6" style="margin-top:20px;width:49%;">
                    <div style="margin-top:20px;">
                        <h3>Страница <span style="color:green"><?php echo $mapping_page-1;?></span> из <span style="color:blue"><?php echo get_option( 'skillaz_total_pages' );?></span></h3>
                        <div class="info">
                            <p> <span style="display:inline-block;width:9px;height:9px;background:red"></span> - недобавленные/необновленные вакансии </p>
                            <p> <span style="display:inline-block;width:9px;height:9px;background:green"></span> - новые вакансии </p>
                            <p> <span style="display:inline-block;width:9px;height:9px;background:blue"></span> - обновленные вакансии </p>
                        </div>
                    </div>
                    <div style="margin-top:50px;">
                        <h3>Запустить обновление данных по вакансиям из Skillaz</h3>
                        <form id="mapping" method="POST">
                            <label for="autorun">Запустить автоматическое обновление? <input type="checkbox" name="autorun" id="autorun" <?php echo $autorun; ?> ></label>
                            <p>
                                <label for="mapping_page">Следующая страница</label>
                                <input id="mapping_page" type="number" name="mapping_page" value="<?php echo $mapping_page; ?>">
                                <button type="submit" >GO!</button>
                            </p>
                        </form>
                    </div>
                    <?php if( '-1' != $mapping_page ){ ?>
                        <h3>Вакансии:</h3>
                        <div style="margin-top:50px;"><?php Skillaz_Vacancies_Find::vacancies_find( $mapping_page ); ?></div>
                    <?php } ?>
                </div>
                <div class="col-6" style="margin-top:20px;width:49%;">
                    <h3>Зачистка после обновления</h3>
                    <form id="cleaning" method="POST">
                        <label for="autocleaning">Запустить автоматическую зачистку? <input type="checkbox" name="autocleaning" id="autocleaning" <?php echo $autocleaning; ?> ></label>
                        <button type="submit" >GO!</button>
                    </form>

                    <?php
                    if( 'on' == $_POST['autocleaning'] ){

                        $blogtime = current_time('mysql');
    
                        $args = array(
                            'post_type'         => 'vacancies',
                            'posts_per_page'    => -1,
                            'tax_query'         => array( 
                                array(
                                    'taxonomy' => 'relationship',
                                    'field'    => 'slug',
                                    'terms'    => 'roznica'
                                )
                            )
                        );
    
                        $clean_vacancies = new \WP_Query( $args );
                        $k = 1;
    
                        if( $clean_vacancies->have_posts() ) :
                            while( $clean_vacancies->have_posts() ) :
                                $clean_vacancies->the_post();
                                $post_id = get_the_ID();
    
                                $date_update = get_post_meta( $post_id, 'date_update' );
                                $d = strtotime( $blogtime ) - strtotime( $date_update[0] );
                                if( $d > 86000 ){
                                    $res = self::delete_vacancy( $post_id );
                                    if( false != $res ){
                                        echo '<p style="color:blue;">'.$k.' - '.$res.'</p>';
                                    }
                                }
    
                                $k++;
                            endwhile;
                        endif;
                    }
                    ?>
                </div>
            </div>
        </div>
        <?php

        if( 'on' == $_POST['autorun'] ){
            if( isset($_POST['mapping_page']) && $mapping_page <= get_option( 'skillaz_total_pages' ) && $mapping_page > 0 ){
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
        }
    }

    public function delete_vacancy( $post_id ){

        $deleted = wp_delete_post( $post_id );

        if( false != $deleted ){
            return $deleted->post_title;
        } else{
            return false;
        }
    }

    public function theme_settings_fields(){

        register_setting(
            $this->option_group,
            'select_skillaz_url'
        );

        add_settings_section(
            'footer_theme_settings',
            '',
            '',
            $this->page_slug
        );

        add_settings_field(
            'select_skillaz_url',
            'Выбор ссылки по которой будет работать Skillaz',
            [ $this, 'get_select_skillaz_url' ],
            $this->page_slug,
            'footer_theme_settings',
            array( 
                'label_for' => 'select_skillaz_url',
                'class' => 'select_skillaz_url-class',
                'name' => 'select_skillaz_url',
            )
        );
    }

    public function get_select_skillaz_url( $args ){

        $choise_url = get_option( $args[ 'name' ] );
        ?>
        <select name="select_skillaz_url" id="select_skillaz_url-dropdown" class="select_skillaz_url-dropdown">
            <?php
            
            foreach ($this->select_skillaz_url as $key => $content) {
                $selected = '';
                if( $key == $choise_url ){
                    $selected = 'selected="selected"';
                }
                ?>
                <option value="<?php echo $key; ?>" <?php echo $selected; ?>><?php echo $content['name']; ?></option>
                <?php
            }
            ?>
        </select>
        <?php
    }

    public function notice() {
 
		if(
			isset( $_GET[ 'page' ] )
			&& $this->page_slug == $_GET[ 'page' ]
			&& isset( $_GET[ 'settings-updated' ] )
			&& true == $_GET[ 'settings-updated' ]
		) {
			echo '<div class="notice notice-success is-dismissible"><p>Настройки сохранены!</p></div>';
		}
	}

}