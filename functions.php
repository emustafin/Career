<?php
/**
 * Theme functions main file.
 *
 * @package Career\Core
 */
session_start();
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

function NotEmptyGetParam( $param ){
	return !empty($_GET) && !empty($_GET[ $param ]) && null != $_GET[ $param ];
}

function get_habr_url( $post_id ){

	$finded_url = '';  
	$pattern = '~[a-z]+://\S+~';
	$content = get_the_content( '', '', $post_id );

	if($num_found = preg_match_all($pattern, $content, $out)){
		foreach ($out[0] as $surl) {

			if( strpos( $surl, 'Читать') != false && strpos( $surl, 'ttps://habr.com') != false ){
				$finded_url = str_replace( '">Читать', '', $surl );
				break;
			}
		}
	}

	return $finded_url;  
}