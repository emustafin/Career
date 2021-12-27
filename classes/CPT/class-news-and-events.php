<?php
/**
 * Init and control CPT News_and_events
 *
 * @package Career\Core
 */

namespace Career\CPT;

class News_and_events {

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
            'name'                  => 'Новости и события',
            'singular_name'         => 'Новость или событие',
            'menu_name'             => 'Новости и события',
            'name_admin_bar'        => 'Новости и события',
            'archives'              => 'Новости и события',
            'label'                 => 'Новости и события',
            'description'           => 'Новости и события',
			'attributes'            => 'Атрибуты Новости или события',
			'parent_item_colon'     => 'Родительская Новость или событие:',
			'all_items'             => 'Все Новости и события',
			'add_new_item'          => 'Добавить новую Новость или событие',
			'add_new'               => 'Добавить новую',
			'new_item'              => 'Новая Новость или событие',
			'edit_item'             => 'Редактировать Новость или событие',
			'update_item'           => 'Обновить Новость или событие',
			'view_item'             => 'Посмотреть Новость или событие',
			'view_items'            => 'Посмотреть Новости и события',
			'search_items'          => 'Поиск Новость или событие',
			'not_found'             => 'Не найдено',
			'not_found_in_trash'    => 'Не найдено в корзине',
			'featured_image'        => 'Изображение',
			'set_featured_image'    => 'Установить изображение',
			'remove_featured_image' => 'Удалить изображение',
			'use_featured_image'    => 'Использовать как изображение записи',
			'insert_into_item'      => 'Вставить в Новость или событие',
			'uploaded_to_this_item' => 'Загрузить в Новость или событие',
			'items_list'            => 'Список новостей или событий',
			'items_list_navigation' => 'Навигация по новостям и событиям',
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
            'menu_position'         => 8,
			'supports'              => array( 'title', 'editor', 'thumbnail' ),
			'menu_icon'             => 'dashicons-index-card',
			'publicly_queryable'    => true,
			'show_in_admin_bar'     => true,
			'can_export'            => true,
			'taxonomies'            => array( 'relation' ),
			'has_archive'           => true,
			'show_in_rest'          => true,
		);

		register_post_type( 'news_and_events', $args );

	}
}