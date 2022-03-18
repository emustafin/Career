<?php
/**
 * Init and control CPT Menu
 *
 * @package Career\Core
 */

namespace Career\Menu;

class Menu {

    /**
	 * Constructor. Initializes class autoloading.
	 */
	public function __construct() {

        add_theme_support( 'menus' );
        add_action( 'after_setup_theme', [ $this, 'theme_register_nav_menu' ] );
        $this->add_option_page();
	}

    public function theme_register_nav_menu() {
        register_nav_menu( 'primary', 'Primary Menu' );
    }

    public function add_option_page() {

        if( function_exists('acf_add_options_page') ) {
	
            acf_add_options_page(array(
                'page_title' 	=> 'Theme General Settings',
                'menu_title'	=> 'Theme Settings',
                'menu_slug' 	=> 'theme-general-settings',
                'capability'	=> 'edit_posts',
                'redirect'		=> false
            ));
            
        }
    }
}