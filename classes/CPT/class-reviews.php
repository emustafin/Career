<?php
/**
 * Init and control CPT Reviews
 *
 * @package Career\Core
 */

namespace Career\CPT;

class Reviews {

    /**
	 * Constructor. Initializes class autoloading.
	 */
	public function __construct() {

        // add_action( 'init', [ $this, 'create_taxonomies' ], 90 );
		add_action( 'init', [ $this, 'register' ] );
	}

    /**
	 * Register custom post type.
	 */
	public function register() {

		$labels = array(
            'name'                  => 'Отзывы',
            'singular_name'         => 'Отзыв',
            'menu_name'             => 'Отзывы',
            'name_admin_bar'        => 'Отзывы',
            'archives'              => 'Отзывы',
            'label'                 => 'Отзывы',
            'description'           => 'Отзывы',
			'attributes'            => 'Атрибуты Отзывов',
			'parent_item_colon'     => 'Родительское Отзыв:',
			'all_items'             => 'Все Отзывы',
			'add_new_item'          => 'Добавить новое Отзыв',
			'add_new'               => 'Добавить новое',
			'new_item'              => 'Новое Отзыв',
			'edit_item'             => 'Редактировать Отзыв',
			'update_item'           => 'Обновить Отзыв',
			'view_item'             => 'Посмотреть Отзыв',
			'view_items'            => 'Посмотреть Отзывы',
			'search_items'          => 'Поиск отзыва',
			'not_found'             => 'Не найдено',
			'not_found_in_trash'    => 'Не найдено в корзине',
			'featured_image'        => 'Изображение',
			'set_featured_image'    => 'Установить изображение',
			'remove_featured_image' => 'Удалить изображение',
			'use_featured_image'    => 'Использовать как изображение записи',
			'insert_into_item'      => 'Вставить в Отзыв',
			'uploaded_to_this_item' => 'Загрузить в это Отзыв',
			'items_list'            => 'Список Отзывов',
			'items_list_navigation' => 'Навигация по Отзывам',
		);

		$args = array(
            'public'                => true,
			'labels'                => $labels,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'show_in_nav_menus'     => true,
            'query_var'             => true,
            'rewrite'               => true,
            'capability_type'       => 'page',
            'has_archive'           => true,
            'hierarchical'          => true,
            'menu_position'         => 6,
			'supports'              => array( 'title', 'editor', 'thumbnail' ),
			'menu_icon'             => 'dashicons-admin-comments',
			'publicly_queryable'    => true,
			'show_in_admin_bar'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'show_in_rest'          => true,
		);

		register_post_type( 'reviews', $args );

	}
}