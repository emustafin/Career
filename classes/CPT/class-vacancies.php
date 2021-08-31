<?php
/**
 * Init and control CPT Vacancies
 *
 * @package Career\Core
 */

namespace Career\CPT;

class Vacancies {

    /**
	 * Constructor. Initializes class autoloading.
	 */
	public function __construct() {

        add_action( 'init', [ $this, 'create_taxonomies' ], 90 );
		add_action( 'init', [ $this, 'register' ] );

        add_action( 'wp_ajax_get_profession__menu_items', [$this, 'get_profession__menu_items'] );
		add_action( 'wp_ajax_nopriv_get_profession__menu_items', [$this, 'get_profession__menu_items'] );
	}

    /**
	 * Register custom post type.
	 */
	public function register() {

		$labels = array(
            'name'                  => 'Вакансии',
            'singular_name'         => 'Вакансия',
            'menu_name'             => 'Вакансии',
            'name_admin_bar'        => 'Вакансии',
            'archives'              => 'Вакансии',
            'label'                 => 'Вакансии',
            'description'           => 'Вакансии',
			'attributes'            => 'Атрибуты Вакансии',
			'parent_item_colon'     => 'Родительская вакансия:',
			'all_items'             => 'Все Вакансии',
			'add_new_item'          => 'Добавить новую вакансию',
			'add_new'               => 'Добавить новую',
			'new_item'              => 'Новая вакансия',
			'edit_item'             => 'Редактировать вакансию',
			'update_item'           => 'Обновить вакансию',
			'view_item'             => 'Посмотреть вакансию',
			'view_items'            => 'Посмотреть Вакансии',
			'search_items'          => 'Поиск вакансии',
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
            'taxonomies'            => array( 'vaccat', 'town', 'level' ),
			'has_archive'           => true,
			'show_in_rest'          => true,
		);

		register_post_type( 'vacancies', $args );

	}

    /**
     * Register taxonomies.
    */
    public function create_taxonomies() {

        register_taxonomy( 'vaccat', ['vacancies'], array(
            'label'                 => '',
            'labels'                => array(
                'name'              => 'Категории',
                'singular_name'     => 'Категория',
                'search_items'      => 'Поиск категории',
                'all_items'         => 'Все категории',
                'view_item '        => 'Просмотр категории',
                'parent_item'       => 'Родительская категория',
                'parent_item_colon' => 'Родительская категория:',
                'edit_item'         => 'Изменить категория',
                'update_item'       => 'Обновить категорию',
                'add_new_item'      => 'Добавить новую категорию',
                'new_item_name'     => 'Название новой категории',
                'menu_name'         => 'Категория',
            ),
            'description'           => '',
            'public'                => true,
            'hierarchical'          => true,
            'rewrite'               => false,
            'query_var'             => 'vaccat',
            'capabilities'          => array(),
            'meta_box_cb'           => 'post_categories_meta_box', 
            'show_admin_column'     => true, 
            'show_in_rest'          => true,
            'rest_base'             => null,
        ) );

        register_taxonomy( 'town', ['vacancies'], array(
            'label'                 => '',
            'labels'                => array(
                'name'              => 'Города',
                'singular_name'     => 'Город',
                'search_items'      => 'Поиск города',
                'all_items'         => 'Все города',
                'view_item '        => 'Просмотр города',
                'edit_item'         => 'Изменить город',
                'update_item'       => 'Обновить город',
                'add_new_item'      => 'Добавить новый город',
                'new_item_name'     => 'Название нового города',
                'menu_name'         => 'Город',
            ),
            'description'           => '',
            'public'                => true,
            'hierarchical'          => false,
            'rewrite'               => false,
            'query_var'             => 'town',
            'capabilities'          => array(),
            'meta_box_cb'           => 'post_categories_meta_box', 
            'show_admin_column'     => true, 
            'show_in_rest'          => true,
            'rest_base'             => null,
        ) );

        register_taxonomy( 'level', ['vacancies'], array(
            'label'                 => '',
            'labels'                => array(
                'name'              => 'Уровни',
                'singular_name'     => 'Уровень',
                'search_items'      => 'Поиск уровня',
                'all_items'         => 'Все уровни',
                'view_item '        => 'Просмотр уровня',
                'edit_item'         => 'Изменить уровень',
                'update_item'       => 'Обновить уровень',
                'add_new_item'      => 'Добавить новый уровень',
                'new_item_name'     => 'Название нового уровня',
                'menu_name'         => 'Уровень',
            ),
            'description'           => '',
            'public'                => true,
            'hierarchical'          => false,
            'rewrite'               => false,
            'query_var'             => 'level',
            'capabilities'          => array(),
            'meta_box_cb'           => 'post_categories_meta_box', 
            'show_admin_column'     => true, 
            'show_in_rest'          => true,
            'rest_base'             => null,
        ) );
    }

    public function get_profession__menu_items() {

        $html = '';
        if( !empty( $_POST ) ){

            $args = array(
                'post_type'         => 'vacancies',
                'posts_per_page'    => 6
            );

            if( 'default' != $_POST['default'] ){
                if( '' != $_POST['vaccat_slug'] ){
                    $args['tax_query'][] = array(
                        'taxonomy' => 'vaccat',
                        'field'    => 'slug',
                        'terms'    => $_POST['vaccat_slug']
                    );
                }
    
                if( '' != $_POST['town_slug'] ){
                    $args['tax_query'][] = array(
                        'taxonomy' => 'town',
                        'field'    => 'slug',
                        'terms'    => $_POST['town_slug']
                    );
                }
    
                if( '' != $_POST['level_slug'] ){
                    $args['tax_query'][] = array(
                        'taxonomy' => 'level',
                        'field'    => 'slug',
                        'terms'    => $_POST['level_slug']
                    );
                }
            }


            $actually_vacancies_by = new \WP_Query( $args );

            if ( $actually_vacancies_by->have_posts() ) {
                while ( $actually_vacancies_by->have_posts() ) {
                    $actually_vacancies_by->the_post();
                    $vacancy_item_id = get_the_ID();
                    ob_start();
                    include(THEME_DIR . '/template-parts/actually_vacancy_item.php');;
                    $html .= ob_get_clean();
                }
            }

            if( '' != $html ){
                $return = array(
                    'success' 	=> true,
                    'html' 	=> $html,
                );
        
                wp_send_json($return);
            }
        }
    }
}