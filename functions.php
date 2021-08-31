<?php
/**
 * Theme functions main file.
 *
 * @package Career\Core
 */

define( 'THEME_DIR', get_stylesheet_directory() );
define( 'THEME_URL', get_stylesheet_directory_uri() );

require_once THEME_DIR . '/classes/class-core.php';

/**
 * Returns instance of theme's main class.
 *
 * @return Career
 */
function TC() : \Career\Core { //phpcs:ignore
	return \Career\Core::instance();
}
TC();
