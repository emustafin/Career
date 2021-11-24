<?php
/**
 * Init and control CPT Reviews
 *
 * @package Career\Core
 */

namespace Career\CPT;

class Vacancies_In_Town {

    /**
	 * Constructor. Initializes class autoloading.
	 */
	public function __construct() {

		add_action( 'init', [ $this, 'register' ] );
	}

    /**
	 * Register custom post type.
	 */
	public function register() {

		$labels = array(
            'name'                  => 'Вакансия в городе',
            'singular_name'         => 'Вакансия в городе',
            'menu_name'             => 'Вакансия в городе',
            'name_admin_bar'        => 'Вакансия в городе',
            'archives'              => 'Вакансия в городе',
            'label'                 => 'Вакансия в городе',
            'description'           => 'Вакансия в городе',
			'attributes'            => 'Атрибуты Вакансии в городе',
			'parent_item_colon'     => 'Родительская Вакансия в городе:',
			'all_items'             => 'Все Вакансии в городе',
			'add_new_item'          => 'Добавить новую Вакансию в городе',
			'add_new'               => 'Добавить новую',
			'new_item'              => 'Новая Вакансия в городе',
			'edit_item'             => 'Редактировать Вакансию в городе',
			'update_item'           => 'Обновить Вакансию в городе',
			'view_item'             => 'Посмотреть Вакансию в городе',
			'view_items'            => 'Посмотреть Вакансию в городе',
			'search_items'          => 'Поиск Вакансии в городе',
			'not_found'             => 'Не найдено',
			'not_found_in_trash'    => 'Не найдено в корзине',
			'featured_image'        => 'Изображение',
			'set_featured_image'    => 'Установить изображение',
			'remove_featured_image' => 'Удалить изображение',
			'use_featured_image'    => 'Использовать как изображение записи',
			'insert_into_item'      => 'Вставить в Вакансию в городе',
			'uploaded_to_this_item' => 'Загрузить в Вакансию в городе',
			'items_list'            => 'Список Вакансий в городе',
			'items_list_navigation' => 'Навигация по Вакансиям в городе',
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
			'supports'              => array( 'title', 'editor' ),
			'menu_icon'             => 'dashicons-embed-post',
			'publicly_queryable'    => true,
			'show_in_admin_bar'     => true,
			'can_export'            => true,
			'taxonomies'            => array(),
			'has_archive'           => true,
			'show_in_rest'          => true,
		);

		register_post_type( 'vacancies_in_town', $args );

	}
}