<?php
/**
 * Init and control CPT Reviews
 *
 * @package Career\Core
 */

namespace Career\CPT;

class Taxonomies {

    /**
	 * Available specificator codes (aka slugs).
	 */
	const SPECIFICATORS_CODES = [ 'it', 'retail', 'office', 'logistics', 'students' ];

    /**
	 * Constructor. Initializes class autoloading.
	 */
	public function __construct() {

        add_action( 'init', [ $this, 'create_taxonomies' ], 90 );
	}

	/**
     * Register taxonomies.
    */
    public function create_taxonomies() {

        foreach ( self::SPECIFICATORS_CODES as $specificator ) {

            /**
             * Add taxonomy specialization
             */
            register_taxonomy( 
                $specificator.'_specialization',
                $specificator.'_vacancies',
                array(
                    'label'                 => '',
                    'labels'                => array(
                        'name'              => 'Специализация',
                        'singular_name'     => 'Специализация',
                        'search_items'      => 'Поиск специализации',
                        'all_items'         => 'Все Специализации',
                        'view_item '        => 'Просмотр Специализации',
                        'parent_item'       => 'Родительская Специализация',
                        'parent_item_colon' => 'Родительская Специализация:',
                        'edit_item'         => 'Изменить Специализацию',
                        'update_item'       => 'Обновить Специализацию',
                        'add_new_item'      => 'Добавить новую Специализацию',
                        'new_item_name'     => 'Название новой Специализации',
                        'menu_name'         => 'Специализация',
                    ),
                    'description'           => '',
                    'public'                => true,
                    'hierarchical'          => true,
                    'rewrite'               => false,
                    'query_var'             => 'relation',
                    'capabilities'          => array(),
                    'meta_box_cb'           => 'post_categories_meta_box', 
                    'show_admin_column'     => true, 
                    'show_in_rest'          => true,
                    'rest_base'             => null,
                ) 
            );

            /**
             * Add taxonomy level
             */
            register_taxonomy( 
                $specificator.'_level',
                $specificator.'_vacancies',
                array(
                    'label'                 => '',
                    'labels'                => array(
                        'name'              => 'Уровень',
                        'singular_name'     => 'Уровень',
                        'search_items'      => 'Поиск уровня',
                        'all_items'         => 'Все уровни',
                        'view_item '        => 'Просмотр уровня',
                        'parent_item'       => 'Родительский уровень',
                        'parent_item_colon' => 'Родительский уровень:',
                        'edit_item'         => 'Изменить уровень',
                        'update_item'       => 'Обновить уровень',
                        'add_new_item'      => 'Добавить новый уровень',
                        'new_item_name'     => 'Название нового уровня',
                        'menu_name'         => 'Уровень',
                    ),
                    'description'           => '',
                    'public'                => true,
                    'hierarchical'          => true,
                    'rewrite'               => false,
                    'query_var'             => 'relation',
                    'capabilities'          => array(),
                    'meta_box_cb'           => 'post_categories_meta_box', 
                    'show_admin_column'     => true, 
                    'show_in_rest'          => true,
                    'rest_base'             => null,
                ) 
            );

            /**
             * Add taxonomy city
             */
            register_taxonomy(
                $specificator.'_city',
                $specificator.'_vacancies',
                array(
                    'label'                 => '',
                    'labels'                => array(
                        'name'              => 'Город',
                        'singular_name'     => 'Город',
                        'search_items'      => 'Поиск города',
                        'all_items'         => 'Все города',
                        'view_item '        => 'Просмотр города',
                        'parent_item'       => 'Родительский город',
                        'parent_item_colon' => 'Родительский город:',
                        'edit_item'         => 'Изменить город',
                        'update_item'       => 'Обновить город',
                        'add_new_item'      => 'Добавить новый город',
                        'new_item_name'     => 'Название нового города',
                        'menu_name'         => 'Город',
                    ),
                    'description'           => '',
                    'public'                => true,
                    'hierarchical'          => true,
                    'rewrite'               => false,
                    'query_var'             => 'relation',
                    'capabilities'          => array(),
                    'meta_box_cb'           => 'post_categories_meta_box', 
                    'show_admin_column'     => true, 
                    'show_in_rest'          => true,
                    'rest_base'             => null,
                ) 
            );

            /**
             * Add taxonomy metro
             */
            register_taxonomy( 
                $specificator.'_metro',
                $specificator.'_vacancies',
                array(
                    'label'                 => '',
                    'labels'                => array(
                        'name'              => 'Метро',
                        'singular_name'     => 'Метро',
                        'search_items'      => 'Поиск метро',
                        'all_items'         => 'Все метро',
                        'view_item '        => 'Просмотр метро',
                        'parent_item'       => 'Родительское метро',
                        'parent_item_colon' => 'Родительское метро:',
                        'edit_item'         => 'Изменить метро',
                        'update_item'       => 'Обновить метро',
                        'add_new_item'      => 'Добавить новое метро',
                        'new_item_name'     => 'Название нового метро',
                        'menu_name'         => 'Метро',
                    ),
                    'description'           => '',
                    'public'                => true,
                    'hierarchical'          => true,
                    'rewrite'               => false,
                    'query_var'             => 'relation',
                    'capabilities'          => array(),
                    'meta_box_cb'           => 'post_categories_meta_box', 
                    'show_admin_column'     => true, 
                    'show_in_rest'          => true,
                    'rest_base'             => null,
                ) 
            );
        }
    }

}