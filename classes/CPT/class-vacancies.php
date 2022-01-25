<?php
/**
 * Init All CPT Vacancies
 *
 * @package Career\CPT
 */

namespace Career\CPT;

class Vacancies {

    /**
	 * Constructor. Initializes class autoloading.
	 */
	public function __construct() {

		add_action( 'init', [ $this, 'register' ] );
	}

    /**
	 * Start to register all CPT Vacancies.
	 */
	public function register() {

		$this->register_it_vacancies();
		$this->register_retail_vacancies();
		$this->register_office_vacancies();
		$this->register_logistics_vacancies();
		// $this->register_students_vacancies();
	}

    /**
     * Register CPT It Vacancies
     */
    public function register_it_vacancies() {

        $labels = array(
            'name'                  => 'Вакансии IT',
            'singular_name'         => 'Вакансия IT',
            'menu_name'             => 'Вакансии IT',
            'name_admin_bar'        => 'Вакансии IT',
            'archives'              => 'Вакансии IT',
            'label'                 => 'Вакансии IT',
            'description'           => 'Вакансии IT',
			'attributes'            => 'Атрибуты Вакансии IT',
			'parent_item_colon'     => 'Родительская вакансия IT:',
			'all_items'             => 'Все Вакансии IT',
			'add_new_item'          => 'Добавить новую вакансию IT',
			'add_new'               => 'Добавить новую',
			'new_item'              => 'Новая вакансия IT',
			'edit_item'             => 'Редактировать вакансию IT',
			'update_item'           => 'Обновить вакансию IT',
			'view_item'             => 'Посмотреть вакансию IT',
			'view_items'            => 'Посмотреть Вакансии IT',
			'search_items'          => 'Поиск вакансии IT',
			'not_found'             => 'Не найдено',
			'not_found_in_trash'    => 'Не найдено в корзине',
			'featured_image'        => 'Изображение',
			'set_featured_image'    => 'Установить изображение',
			'remove_featured_image' => 'Удалить изображение',
			'use_featured_image'    => 'Использовать как изображение записи',
			'insert_into_item'      => 'Вставить в вакансию',
			'uploaded_to_this_item' => 'Загрузить в эту вакансию',
			'items_list'            => 'Список вакансий',
			'items_list_navigation' => 'Навигация по вакансиям',
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
            'menu_position'         => 5,
			'supports'              => array( 'title', 'editor', 'thumbnail' ),
			'menu_icon'             => 'dashicons-id',
			'publicly_queryable'    => true,
			'show_in_admin_bar'     => true,
			'can_export'            => true,
            'taxonomies'            => array( 'specialization', 'level', 'city', 'metro' ),
			'has_archive'           => true,
			'show_in_rest'          => true,
		);

		register_post_type( 'it_vacancies', $args );
    }

    /**
     * Register CPT Retail Vacancies
     */
    public function register_retail_vacancies() {

        $labels = array(
            'name'                  => 'Вакансии розницы',
            'singular_name'         => 'Вакансия розницы',
            'menu_name'             => 'Вакансии розницы',
            'name_admin_bar'        => 'Вакансии розницы',
            'archives'              => 'Вакансии розницы',
            'label'                 => 'Вакансии розницы',
            'description'           => 'Вакансии розницы',
			'attributes'            => 'Атрибуты вакансии розницы',
			'parent_item_colon'     => 'Родительская вакансия розницы:',
			'all_items'             => 'Все вакансии розницы',
			'add_new_item'          => 'Добавить новую вакансию розницы',
			'add_new'               => 'Добавить новую',
			'new_item'              => 'Новая вакансия розницы',
			'edit_item'             => 'Редактировать вакансию розницы',
			'update_item'           => 'Обновить вакансию розницы',
			'view_item'             => 'Посмотреть вакансию розницы',
			'view_items'            => 'Посмотреть вакансии розницы',
			'search_items'          => 'Поиск вакансии розницы',
			'not_found'             => 'Не найдено',
			'not_found_in_trash'    => 'Не найдено в корзине',
			'featured_image'        => 'Изображение',
			'set_featured_image'    => 'Установить изображение',
			'remove_featured_image' => 'Удалить изображение',
			'use_featured_image'    => 'Использовать как изображение записи',
			'insert_into_item'      => 'Вставить в вакансию',
			'uploaded_to_this_item' => 'Загрузить в эту вакансию',
			'items_list'            => 'Список вакансий',
			'items_list_navigation' => 'Навигация по вакансиям',
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
            'menu_position'         => 5,
			'supports'              => array( 'title', 'editor', 'thumbnail' ),
			'menu_icon'             => 'dashicons-id',
			'publicly_queryable'    => true,
			'show_in_admin_bar'     => true,
			'can_export'            => true,
            'taxonomies'            => array( 'specialization', 'level', 'city', 'metro' ),
			'has_archive'           => true,
			'show_in_rest'          => true,
		);

		register_post_type( 'retail_vacancies', $args );
    }

    /**
     * Register CPT Office Vacancies
     */
    public function register_office_vacancies() {

        $labels = array(
            'name'                  => 'Вакансии офиса',
            'singular_name'         => 'Вакансия офиса',
            'menu_name'             => 'Вакансии офиса',
            'name_admin_bar'        => 'Вакансии офиса',
            'archives'              => 'Вакансии офиса',
            'label'                 => 'Вакансии офиса',
            'description'           => 'Вакансии офиса',
			'attributes'            => 'Атрибуты вакансии офиса',
			'parent_item_colon'     => 'Родительская вакансия офиса:',
			'all_items'             => 'Все вакансии офиса',
			'add_new_item'          => 'Добавить новую вакансию офиса',
			'add_new'               => 'Добавить новую',
			'new_item'              => 'Новая вакансия офиса',
			'edit_item'             => 'Редактировать вакансию офиса',
			'update_item'           => 'Обновить вакансию офиса',
			'view_item'             => 'Посмотреть вакансию офиса',
			'view_items'            => 'Посмотреть вакансии офиса',
			'search_items'          => 'Поиск вакансии офиса',
			'not_found'             => 'Не найдено',
			'not_found_in_trash'    => 'Не найдено в корзине',
			'featured_image'        => 'Изображение',
			'set_featured_image'    => 'Установить изображение',
			'remove_featured_image' => 'Удалить изображение',
			'use_featured_image'    => 'Использовать как изображение записи',
			'insert_into_item'      => 'Вставить в вакансию',
			'uploaded_to_this_item' => 'Загрузить в эту вакансию',
			'items_list'            => 'Список вакансий',
			'items_list_navigation' => 'Навигация по вакансиям',
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
            'menu_position'         => 5,
			'supports'              => array( 'title', 'editor', 'thumbnail' ),
			'menu_icon'             => 'dashicons-id',
			'publicly_queryable'    => true,
			'show_in_admin_bar'     => true,
			'can_export'            => true,
            'taxonomies'            => array( 'specialization', 'level', 'city', 'metro' ),
			'has_archive'           => true,
			'show_in_rest'          => true,
		);

		register_post_type( 'office_vacancies', $args );
    }

    /**
     * Register CPT Logistics Vacancies
     */
    public function register_logistics_vacancies() {

        $labels = array(
            'name'                  => 'Вакансии логистики',
            'singular_name'         => 'Вакансия логистики',
            'menu_name'             => 'Вакансии логистики',
            'name_admin_bar'        => 'Вакансии логистики',
            'archives'              => 'Вакансии логистики',
            'label'                 => 'Вакансии логистики',
            'description'           => 'Вакансии логистики',
			'attributes'            => 'Атрибуты вакансии логистики',
			'parent_item_colon'     => 'Родительская вакансия логистики:',
			'all_items'             => 'Все Вакансии логистики',
			'add_new_item'          => 'Добавить новую вакансию логистики',
			'add_new'               => 'Добавить новую',
			'new_item'              => 'Новая вакансия логистики',
			'edit_item'             => 'Редактировать вакансию логистики',
			'update_item'           => 'Обновить вакансию логистики',
			'view_item'             => 'Посмотреть вакансию логистики',
			'view_items'            => 'Посмотреть Вакансии логистики',
			'search_items'          => 'Поиск вакансии логистики',
			'not_found'             => 'Не найдено',
			'not_found_in_trash'    => 'Не найдено в корзине',
			'featured_image'        => 'Изображение',
			'set_featured_image'    => 'Установить изображение',
			'remove_featured_image' => 'Удалить изображение',
			'use_featured_image'    => 'Использовать как изображение записи',
			'insert_into_item'      => 'Вставить в вакансию',
			'uploaded_to_this_item' => 'Загрузить в эту вакансию',
			'items_list'            => 'Список вакансий',
			'items_list_navigation' => 'Навигация по вакансиям',
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
            'menu_position'         => 5,
			'supports'              => array( 'title', 'editor', 'thumbnail' ),
			'menu_icon'             => 'dashicons-id',
			'publicly_queryable'    => true,
			'show_in_admin_bar'     => true,
			'can_export'            => true,
            'taxonomies'            => array( 'specialization', 'level', 'city', 'metro' ),
			'has_archive'           => true,
			'show_in_rest'          => true,
		);

		register_post_type( 'logistics_vacancies', $args );
    }

    /**
     * Register CPT Students Vacancies
     */
    public function register_students_vacancies() {

        $labels = array(
            'name'                  => 'Вакансии студентов',
            'singular_name'         => 'Вакансия студентов',
            'menu_name'             => 'Вакансии студентов',
            'name_admin_bar'        => 'Вакансии студентов',
            'archives'              => 'Вакансии студентов',
            'label'                 => 'Вакансии студентов',
            'description'           => 'Вакансии студентов',
			'attributes'            => 'Атрибуты вакансии студентов',
			'parent_item_colon'     => 'Родительская вакансия студентов:',
			'all_items'             => 'Все Вакансии студентов',
			'add_new_item'          => 'Добавить новую вакансию студентов',
			'add_new'               => 'Добавить новую',
			'new_item'              => 'Новая вакансия студентов',
			'edit_item'             => 'Редактировать вакансию студентов',
			'update_item'           => 'Обновить вакансию студентов',
			'view_item'             => 'Посмотреть вакансию студентов',
			'view_items'            => 'Посмотреть Вакансии студентов',
			'search_items'          => 'Поиск вакансии студентов',
			'not_found'             => 'Не найдено',
			'not_found_in_trash'    => 'Не найдено в корзине',
			'featured_image'        => 'Изображение',
			'set_featured_image'    => 'Установить изображение',
			'remove_featured_image' => 'Удалить изображение',
			'use_featured_image'    => 'Использовать как изображение записи',
			'insert_into_item'      => 'Вставить в вакансию',
			'uploaded_to_this_item' => 'Загрузить в эту вакансию',
			'items_list'            => 'Список вакансий',
			'items_list_navigation' => 'Навигация по вакансиям',
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
            'menu_position'         => 5,
			'supports'              => array( 'title', 'editor', 'thumbnail' ),
			'menu_icon'             => 'dashicons-id',
			'publicly_queryable'    => true,
			'show_in_admin_bar'     => true,
			'can_export'            => true,
            'taxonomies'            => array( 'specialization', 'level', 'city', 'metro' ),
			'has_archive'           => true,
			'show_in_rest'          => true,
		);

		register_post_type( 'students_vacancies', $args );
    }
}