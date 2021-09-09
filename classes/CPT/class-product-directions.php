<?php
/**
 * Init and control CPT Product_directions
 *
 * @package Career\Core
 */

namespace Career\CPT;

class Product_directions {

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
            'name'                  => 'Продуктовые направления',
            'singular_name'         => 'Продуктовое направление',
            'menu_name'             => 'Продуктовые направления',
            'name_admin_bar'        => 'Продуктовые направления',
            'archives'              => 'Продуктовые направления',
            'label'                 => 'Продуктовые направления',
            'description'           => 'Продуктовые направления',
			'attributes'            => 'Атрибуты Продуктовых направлений',
			'parent_item_colon'     => 'Родительское Продуктовое направление:',
			'all_items'             => 'Все Продуктовые направления',
			'add_new_item'          => 'Добавить новое продуктовое направление',
			'add_new'               => 'Добавить новое',
			'new_item'              => 'Новое Продуктовое направление',
			'edit_item'             => 'Редактировать продуктовое направление',
			'update_item'           => 'Обновить продуктовое направление',
			'view_item'             => 'Посмотреть продуктовое направление',
			'view_items'            => 'Посмотреть Продуктовые направления',
			'search_items'          => 'Поиск Продуктового направления',
			'not_found'             => 'Не найдено',
			'not_found_in_trash'    => 'Не найдено в корзине',
			'featured_image'        => 'Изображение',
			'set_featured_image'    => 'Установить изображение',
			'remove_featured_image' => 'Удалить изображение',
			'use_featured_image'    => 'Использовать как изображение записи',
			'insert_into_item'      => 'Вставить в продуктовое направление',
			'uploaded_to_this_item' => 'Загрузить в это продуктовое направление',
			'items_list'            => 'Список продуктовых направлений',
			'items_list_navigation' => 'Навигация по Продуктовым направлениям',
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
			'menu_icon'             => 'dashicons-admin-generic',
			'publicly_queryable'    => true,
			'show_in_admin_bar'     => true,
			'can_export'            => true,
            // 'taxonomies'            => array( 'vaccat', 'town', 'level' ),
			'has_archive'           => true,
			'show_in_rest'          => true,
		);

		register_post_type( 'product_directions', $args );

	}

    /**
     * Register taxonomies.
    */
    public function create_taxonomies() {

        // register_taxonomy( 'vaccat', ['Product_directions'], array(
        //     'label'                 => '',
        //     'labels'                => array(
        //         'name'              => 'Категории',
        //         'singular_name'     => 'Категория',
        //         'search_items'      => 'Поиск категории',
        //         'all_items'         => 'Все категории',
        //         'view_item '        => 'Просмотр категории',
        //         'parent_item'       => 'Родительская категория',
        //         'parent_item_colon' => 'Родительская категория:',
        //         'edit_item'         => 'Изменить категория',
        //         'update_item'       => 'Обновить категорию',
        //         'add_new_item'      => 'Добавить новую категорию',
        //         'new_item_name'     => 'Название новой категории',
        //         'menu_name'         => 'Категория',
        //     ),
        //     'description'           => '',
        //     'public'                => true,
        //     'hierarchical'          => true,
        //     'rewrite'               => false,
        //     'query_var'             => 'vaccat',
        //     'capabilities'          => array(),
        //     'meta_box_cb'           => 'post_categories_meta_box', 
        //     'show_admin_column'     => true, 
        //     'show_in_rest'          => true,
        //     'rest_base'             => null,
        // ) );
    }
}