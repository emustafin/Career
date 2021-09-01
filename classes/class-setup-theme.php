<?php
/**
 * Setup theme features and core functions.
 *
 * @package Career\Core
 */

namespace Career;

/**
 * Setup theme main features
 *
 * @package Career
 */
class Setup_Theme {

	const THEME_ID = 'Career';

	/**
	 * Identifier to determine which assets to load
	 *
	 * @var string
	 */
	public $assets_id = null;

	/**
	 * Constructor.
	 */
	public function __construct() {

		define( 'THEME_VSN', 'v1' );

		add_theme_support( 'post-thumbnails' );
		add_filter( 'template_include', [ $this, 'set_assets' ], PHP_INT_MAX );

		add_action( 'wp_enqueue_scripts', [ $this, 'theme_scripts' ] );
		add_action( 'wp_enqueue_scripts', [ $this, 'theme_styles' ] );

	}

	/**
	 * Reads Assets ID from template header and sets releveant class variable.
	 * Post meta 'assets_id' if set will override value from template.
	 *
	 * @param string $template - template name.
	 * @return string
	 */
	public function set_assets( $template ) {

		$data = get_file_data( $template, [ 'assetsID' => 'Assets ID' ] );

		if ( $data['assetsID'] ) {
			$this->assets_id = $data['assetsID'];
		} else {
			$this->assets_id = 'index';
		}

		if ( is_singular() ) {
			global $post;
			if ( get_post_meta( $post->ID, 'assets_id', true ) ) {
				$this->assets_id = get_post_meta( $post->ID, 'assets_id', true );
			}
		}

		return $template;
	}

	/**
	 * Register theme styles.
	 *
	 * @return void
	 */
	public function theme_styles() {

		wp_enqueue_style( self::THEME_ID . "-swiper-css", "https://unpkg.com/swiper/swiper-bundle.min.css", [], THEME_VSN, 'all' );
		wp_enqueue_style( self::THEME_ID . "-main-css", THEME_URL . "/assets/css/main.css", [], THEME_VSN, 'all' );
		wp_enqueue_style( self::THEME_ID . "-styles-css", THEME_URL . "/assets/css/styles.css", [], THEME_VSN, 'all' );
	}

	/**
	 * Register theme scripts.
	 *
	 * @return void
	 */
	public function theme_scripts() {

		wp_deregister_script( 'jquery' );

		// Bring back jQuery for  now.
		wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.5.1.min.js', [], '3.5.1', false );

		wp_enqueue_script( self::THEME_ID . "swiper-js", "https://unpkg.com/swiper/swiper-bundle.min.js", [], THEME_VSN, true );
		wp_enqueue_script( self::THEME_ID . "ajax-js", THEME_URL . "/assets/js/ajax.js", [], THEME_VSN, true );
		wp_enqueue_script( self::THEME_ID . "bundle-js", THEME_URL . "/assets/js/bundle.js", [], THEME_VSN, true );
		wp_enqueue_script( self::THEME_ID . "popup_vacancy-js", THEME_URL . "/assets/js/popup_vacancy.js", [], THEME_VSN, true );
		wp_localize_script(
			self::THEME_ID . 'ajax-js',
			'ajax',
			array(
				'url' => admin_url( 'admin-ajax.php' ),
				'nonce' => wp_create_nonce( 'tc-ajax-nonce' ),
			)
		);
	}

}
