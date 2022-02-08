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

        add_action( 'wp_ajax_archive_show_more_items', [$this, 'archive_show_more_items'] );
		add_action( 'wp_ajax_nopriv_archive_show_more_items', [$this, 'archive_show_more_items'] );

        add_action( 'wp_ajax_archive_get_profession__menu_items', [$this, 'archive_get_profession__menu_items'] );
		add_action( 'wp_ajax_nopriv_archive_get_profession__menu_items', [$this, 'archive_get_profession__menu_items'] );

        add_action( 'wp_ajax_get_retail_list_vacancy', [$this, 'get_retail_list_vacancy'] );
		add_action( 'wp_ajax_nopriv_get_retail_list_vacancy', [$this, 'get_retail_list_vacancy'] );

        add_action( 'wp_ajax_get_vacancy_data', [$this, 'get_vacancy_data'] );
		add_action( 'wp_ajax_nopriv_get_vacancy_data', [$this, 'get_vacancy_data'] );
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
            'taxonomies'            => array( 'relationship', 'vaccat', 'town', 'level' ),
			'has_archive'           => true,
			'show_in_rest'          => true,
		);

		register_post_type( 'vacancies', $args );

	}

    /**
     * Register taxonomies.
    */
    public function create_taxonomies() {

        register_taxonomy( 'shop', ['vacancies'], array(
            'label'                 => '',
            'labels'                => array(
                'name'              => 'Магазины',
                'singular_name'     => 'Магазины',
                'search_items'      => 'Поиск магазина',
                'all_items'         => 'Все магазины',
                'view_item '        => 'Просмотр магазина',
                'parent_item'       => 'Родительский магазин',
                'parent_item_colon' => 'Родительский магазин:',
                'edit_item'         => 'Изменить магазин',
                'update_item'       => 'Обновить магазин',
                'add_new_item'      => 'Добавить новый магазин',
                'new_item_name'     => 'Название нового магазина',
                'menu_name'         => 'Магазины',
            ),
            'description'           => '',
            'public'                => true,
            'hierarchical'          => true,
            'rewrite'               => array('slug' => 'shop', 'with_front' => false),
            'query_var'             => 'shop',
            'capabilities'          => array(),
            'meta_box_cb'           => 'post_categories_meta_box', 
            'show_admin_column'     => true, 
            'show_in_rest'          => true,
            'rest_base'             => null,
        ) );

        register_taxonomy( 'relationship', ['vacancies'], array(
            'label'                 => '',
            'labels'                => array(
                'name'              => 'Отношение',
                'singular_name'     => 'Отношение',
                'search_items'      => 'Поиск Отношения',
                'all_items'         => 'Все Отношения',
                'view_item '        => 'Просмотр Отношения',
                'parent_item'       => 'Родительскоя Отношение',
                'parent_item_colon' => 'Родительскоя Отношение:',
                'edit_item'         => 'Изменить Отношение',
                'update_item'       => 'Обновить Отношение',
                'add_new_item'      => 'Добавить новое Отношение',
                'new_item_name'     => 'Название нового Отношения',
                'menu_name'         => 'Отношение',
            ),
            'description'           => '',
            'public'                => true,
            'hierarchical'          => true,
            'rewrite'               => array('slug' => 'relationship', 'with_front' => false),
            'query_var'             => 'relationship',
            'capabilities'          => array(),
            'meta_box_cb'           => 'post_categories_meta_box', 
            'show_admin_column'     => true, 
            'show_in_rest'          => true,
            'rest_base'             => null,
        ) );

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
                'posts_per_page'    => 6,
                'post_status'       => 'publish',
                'relationship'      => 'it'
            );

            if( 'default' != $_POST['default'] ){
                if( null != $_POST['vaccat_slug'] && '-1'!= $_POST['vaccat_slug']  ){
                    $args['tax_query'][] = array(
                        'taxonomy' => 'vaccat',
                        'field'    => 'slug',
                        'terms'    => $_POST['vaccat_slug']
                    );
                }
    
                if( '-1' != $_POST['town_slug'] ){
                    $args['tax_query'][] = array(
                        'taxonomy' => 'town',
                        'field'    => 'slug',
                        'terms'    => $_POST['town_slug']
                    );
                }

                if( '-1' != $_POST['level_slug'] ){
                    $args['tax_query'][] = array(
                        'taxonomy' => 'level',
                        'field'    => 'slug',
                        'terms'    => $_POST['level_slug']
                    );
                }

                if( $_POST['can_work_remotely'] == 'true' ){
                    $args['meta_query'] = 
                    array(
                        'relation'		=> 'AND',
                        array(
                            'key'		=> 'can_work_remotely',
                            'value'		=> true,
                            'compare'	=> '='
                        )
                    );
                }

                if( $_POST['can_without_experience'] == 'true' ){

                    if( isset($args['meta_query']) ){
                        $args['meta_query'][] = array(
                            'key'		=> 'can_without_experience',
                            'value'		=> 'can_without_experience',
                            'compare'	=> '='
                        );
                    } else{
                        $args['meta_query'] = 
                        array(
                            'relation'		=> 'AND',
                            array(
                                'key'		=> 'can_without_experience',
                                'value'		=> 'can_without_experience',
                                'compare'	=> '='
                            )
                        );
                    }
                }
            } else{
                if( null != $_POST['vaccat_slug'] && '-1'!= $_POST['vaccat_slug']  ){
                    $args['tax_query'][] = array(
                        'taxonomy' => 'vaccat',
                        'field'    => 'slug',
                        'terms'    => $_POST['vaccat_slug']
                    );
                }
            }

            $actually_vacancies_by = new \WP_Query( $args );

            if ( $actually_vacancies_by->have_posts() ) {
                while ( $actually_vacancies_by->have_posts() ) {
                    $actually_vacancies_by->the_post();
                    $vacancy_item_id = get_the_ID();
                    ob_start();
                    include(THEME_DIR . '/template-parts/loop-parts/actually_vacancy_item.php');
                    $html .= ob_get_clean();
                }
            }

            $result = false;
            if( '' != $html ) $result = true;


            if( '' != $html ){
                $return = array(
                    'success' 	=> $result,
                    'html' 	=> $html,
                );
        
                wp_send_json($return);
            }
        }
    }

    public function archive_show_more_items() {

        $html = '';
        if( !empty( $_POST ) ){

            $args = (array) json_decode( str_replace( "\\", '', $_POST['query_vars'] ) );
            $paged = $_POST['paged']+1;
            $args['paged'] = $paged;
            $args['post_type'] = 'vacancies';
            $args['post_status'] = 'publish';

            $archive_vacancies = new \WP_Query( $args );

            if ( $archive_vacancies->have_posts() ) {
                while ( $archive_vacancies->have_posts() ) {
                    $archive_vacancies->the_post();
                    $vacancy_item_id = get_the_ID();

                    ob_start();
                    include(THEME_DIR . '/template-parts/loop-parts/archive_vacancies_item.php');
                    $html .= ob_get_clean();
                }
            }

            if( '' != $html ){
                $return = array(
                    'success' 	=> true,
                    'html' 	=> $html,
                    'paged' => $paged
                );
        
            } else{
                $return = array(
                    'success' 	=> false,
                    'html' 	=> '',
                    'paged' => $paged
                );
            }
            wp_send_json($return);
        }
    }

    public function archive_get_profession__menu_items() {

        $html = '';
        $mvideoIcons = array();
        $eldoradoIcons = array();

        if( !empty( $_POST ) ){

            $args = array(
                'post_type'         => 'vacancies',
                'posts_per_page'    => 10,
                'post_status'       => 'publish',
                // 'relationship'      => 'it' //TODO переделать под Query правильный
            );

            if( 'default' != $_POST['default'] ){

                if( null != $_POST['top__profession'] ){
                    $args['s'] = $_POST['top__profession'];
                }

                if( null != $_POST['vaccat_slug'] && '-1'!= $_POST['vaccat_slug'] ){
                    $args['tax_query'][] = array(
                        'taxonomy' => 'vaccat',
                        'field'    => 'slug',
                        'terms'    => $_POST['vaccat_slug']
                    );
                }
    
                if( '-1' != $_POST['city_slug'] ){
                    $args['tax_query'][] = array(
                        'taxonomy' => 'town',
                        'field'    => 'slug',
                        'terms'    => $_POST['city_slug']
                    );
                }

                if( '-1' != $_POST['level_slug'] ){
                    $args['tax_query'][] = array(
                        'taxonomy' => 'level',
                        'field'    => 'slug',
                        'terms'    => $_POST['level_slug']
                    );
                }

                if( $_POST['archive_remotely'] == 'true' ){
                    $args['meta_query'] = 
                    array(
                        'relation'		=> 'AND',
                        array(
                            'key'		=> 'can_work_remotely',
                            'value'		=> true,
                            'compare'	=> '='
                        )
                    );
                }

                if( $_POST['archive_without_experience'] == 'true' ){

                    if( isset($args['meta_query']) ){
                        $args['meta_query'][] = array(
                            'key'		=> 'can_without_experience',
                            'value'		=> 'can_without_experience',
                            'compare'	=> '='
                        );
                    } else{
                        $args['meta_query'] = 
                        array(
                            'relation'		=> 'AND',
                            array(
                                'key'		=> 'can_without_experience',
                                'value'		=> 'can_without_experience',
                                'compare'	=> '='
                            )
                        );
                    }
                }
            }

            if( null != $_POST['rt'] ){
                if( 'retail' == $_POST['rt'] ){
                    $args['tax_query'][] = array(
                        'taxonomy' => 'relationship',
                        'field'    => 'slug',
                        'terms'    => 'roznica'
                    );
                } elseif( '-1' != $_POST['rt'] ){
                    $args['tax_query'][] = array(
                        'taxonomy' => 'relationship',
                        'field'    => 'slug',
                        'terms'    => $_POST['rt']
                    );
                }
            }

            $actually_vacancies_by = new \WP_Query( $args );

            $arr_mvideo_shops = array();
            $arr_eldorado_shops = array();

            $html_mvideo_shops = '';
            $html_eldorado_shops = '';

            if ( $actually_vacancies_by->have_posts() ) {
                while ( $actually_vacancies_by->have_posts() ) {
                    $actually_vacancies_by->the_post();
                    $vacancy_item_id = get_the_ID();
                    ob_start();
                    include(THEME_DIR . '/template-parts/loop-parts/archive_vacancies_item.php');
                    $html .= ob_get_clean();

                    $shop_terms = get_the_terms( $vacancy_item_id, 'shop' );
                    if( is_array( $shop_terms ) ){
                        foreach( $shop_terms as $shop_term ){

                            if( 'eldorado' == get_field( 'mvideo_or_eldorado', $shop_term ) ){

                                if( !in_array( $shop_term->slug, $arr_eldorado_shops ) ){

                                    $arr_eldorado_shops[] = $shop_term->slug;

                                    if( empty( $eldoradoIcons ) ){
                                        $сenterMap = [
                                          get_field( 'shop_koordinates_latitude', $shop_term ),
                                          get_field( 'shop_koordinates_longitude', $shop_term )
                                        ];
                                    }

                                    $eldoradoIcons[] = array(
                                        [
                                          get_field( 'shop_koordinates_latitude', $shop_term ),
                                          get_field( 'shop_koordinates_longitude', $shop_term )
                                        ],
                                        THEME_URL . '/assets/images/listing/map/eldorado-icon.png'
                                    );

                                    $html_eldorado_shops .= '
                                        <div class="listing-metro__shop" 
                                            data-shop_slug="'.$shop_term->slug.'" 
                                            data-latitude="'.get_field( 'shop_koordinates_latitude', $shop_term ).'" 
                                            data-longitude="'.get_field( 'shop_koordinates_longitude', $shop_term ).'"
                                        >
                                            <div class="listing-metro__shop-title">'.$shop_term->name.'</div>
                                            <div class="listing-metro__shop-address">'.get_field( 'shop_adress', $shop_term ).'</div>
                                        </div>
                                    ';
                                }
                            }
                            
                            if( 'mvideo' == get_field( 'mvideo_or_eldorado', $shop_term ) ){

                                if( !in_array( $shop_term->slug, $arr_mvideo_shops ) ){

                                    $arr_mvideo_shops[] = $shop_term->slug;

                                    if( empty( $сenterMap ) ){
                                        $сenterMap = [
                                          get_field( 'shop_koordinates_latitude', $shop_term ),
                                          get_field( 'shop_koordinates_longitude', $shop_term )
                                        ];
                                    }

                                    $mvideoIcons[] = array(
                                        [
                                          get_field( 'shop_koordinates_latitude', $shop_term ),
                                          get_field( 'shop_koordinates_longitude', $shop_term )
                                        ],
                                        THEME_URL . '/assets/images/listing/map/mvideo-icon.png'
                                    );
                                    
                                    $html_mvideo_shops .= '
                                        <div class="listing-metro__shop" 
                                            data-shop_slug="'.$shop_term->slug.'" 
                                            data-latitude="'.get_field( 'shop_koordinates_latitude', $shop_term ).'" 
                                            data-longitude="'.get_field( 'shop_koordinates_longitude', $shop_term ).'"
                                        >
                                            <div class="listing-metro__shop-title">'.$shop_term->name.'</div>
                                            <div class="listing-metro__shop-address">'.get_field( 'shop_adress', $shop_term ).'</div>
                                        </div>
                                    ';
                                }
                            }

                        }
                    }
                }
            }

            if( '' != $html ){
                $return = array(
                    'success' 	=> true,
                    'html' 	=> $html,
                    'query_vars'  => $actually_vacancies_by->query_vars,
                    'max_num_pages' => $actually_vacancies_by->max_num_pages,
                    'html_eldorado_shops' => $html_eldorado_shops,
                    'html_mvideo_shops' => $html_mvideo_shops,
                    'iconsmap' => array_merge( $eldoradoIcons, $mvideoIcons ),
                    'centermap' => $сenterMap
                );
        
                wp_send_json($return);
            }
        }
    }

    public function get_retail_list_vacancy() {

        $html = '';
        if( !empty( $_POST ) ){

            $args = array(
                'post_type'         => 'vacancies',
                'posts_per_page'    => 10,
                'post_status'       => 'publish',
            );

            $args['tax_query'][] = array(
                'taxonomy' => 'relationship',
                'field'    => 'slug',
                'terms'    => 'roznica'
            );

            if( null != $_POST['shop'] && '-1'!= $_POST['shop'] ){
                $args['tax_query'][] = array(
                    'taxonomy' => 'shop',
                    'field'    => 'slug',
                    'terms'    => $_POST['shop']
                );
            }

            if( null != $_POST['top__profession'] ){
                $args['s'] = $_POST['top__profession'];
            }

            if( null != $_POST['vaccat_slug'] && '-1'!= $_POST['vaccat_slug'] ){
                $args['tax_query'][] = array(
                    'taxonomy' => 'vaccat',
                    'field'    => 'slug',
                    'terms'    => $_POST['vaccat_slug']
                );
            }

            if( '' != $_POST['kind_shops'] ){

                if( isset($args['meta_query']) ){
                    $args['meta_query'][] = array(
                        'relation'		=> 'AND',
                        array(
                            'key'		=> 'check_mvideo_eldorado',
                            'value'		=> $_POST['kind_shops'],
                            'compare'	=> '='
                        )
                    );
                }
            }

            if( $_POST['archive_remotely'] == 'true' ){

                if( isset($args['meta_query']) ){
                    $args['meta_query'][] = 
                    array(
                        'relation'		=> 'AND',
                        array(
                            'key'		=> 'can_work_remotely',
                            'value'		=> true,
                            'compare'	=> '='
                        )
                    );
                } else{
                    $args['meta_query'] = 
                    array(
                        'relation'		=> 'AND',
                        array(
                            'key'		=> 'can_work_remotely',
                            'value'		=> true,
                            'compare'	=> '='
                        )
                    );
                }
            }

            if( $_POST['archive_without_experience'] == 'true' ){

                if( isset($args['meta_query']) ){
                    $args['meta_query'][] = array(
                        'key'		=> 'can_without_experience',
                        'value'		=> 'can_without_experience',
                        'compare'	=> '='
                    );
                } else{
                    $args['meta_query'] = 
                    array(
                        'relation'		=> 'AND',
                        array(
                            'key'		=> 'can_without_experience',
                            'value'		=> 'can_without_experience',
                            'compare'	=> '='
                        )
                    );
                }
            }
            
            $actually_vacancies_by = new \WP_Query( $args );

            if ( $actually_vacancies_by->have_posts() ) {
                while ( $actually_vacancies_by->have_posts() ) {
                    $actually_vacancies_by->the_post();
                    $vacancy_item_id = get_the_ID();
                    ob_start();
                    include(THEME_DIR . '/template-parts/loop-parts/actually_vacancy_item.php');
                    $html .= ob_get_clean();
                }
            }

            if( '' != $html ){
                $return = array(
                    'success' 	=> true,
                    'html' 	=> $html,
                    'query_vars'  => $actually_vacancies_by->query_vars,
                    'max_num_pages' => $actually_vacancies_by->max_num_pages,
                );
        
                wp_send_json($return);
            }
        }
    }

    public function get_vacancy_data(){

        $html = '';
        if( !empty( $_POST ) ){

            $vacancy_item_id = $_POST['post_id'];

            if( get_field( 'not_gross', $vacancy_item_id) ):
                $gross = '';
            else:
                $gross = '<span> - Гросс</span>';
            endif;

            $relationship_terms = get_the_terms( $vacancy_item_id, 'relationship' );
            if( is_array( $relationship_terms ) ){
                $current_relationship = $relationship_terms[0]->slug;
            }

            $current_catgs = '';
            $catgs_terms = get_the_terms( $vacancy_item_id, 'vaccat' );
            if( is_array( $catgs_terms ) ){
                $current_catgs = $catgs_terms[0]->slug;
            }

            $title                     = get_the_title( $vacancy_item_id );
            
            $pre_conten = '';
            if( 'roznica' == $current_relationship ){
                if( get_field('is_retail_vacancy', $vacancy_item_id) ) {
                    $mvideo_eldorado = get_field('mvideo-eldorado_eto', $vacancy_item_id);

                    $pre_content = '
                    <div class="vacancy__description-block">
                        <div class="vacancy__description-title">
                            <p class="vacancy__description-title-text">
                                «М.Видео-Эльдорадо» — это
                            </p>
                            <div class="vacancy__advantages-slider-navigation-mobile">
                                <button class="vacancy__advantages-slider-prev">
                                <svg
                                    width="14"
                                    height="10"
                                    viewBox="0 0 14 10"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                    d="M4.57661 0.576172L0.152344 5.00044L4.57661 9.4247L5.42514 8.57617L2.4494 5.60044H14.0009V4.40044H2.4494L5.42514 1.4247L4.57661 0.576172Z"
                                    fill="black"
                                    />
                                </svg>
                                </button>
                                <div class="vacancy__advantages-slider-counter">
                                <span class="vacancy__advantages-slider-current-slide"
                                    >1</span
                                >/<span class="vacancy__advantages-slider-slides-all"
                                    >3</span
                                >
                                </div>
        
                                <button class="vacancy__advantages-slider-next">
                                <svg
                                    width="14"
                                    height="10"
                                    viewBox="0 0 14 10"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                    d="M11.5515 4.40044L8.57574 1.4247L9.42426 0.576172L13.8485 5.00044L9.42426 9.4247L8.57574 8.57617L11.5515 5.60044H0L0 4.40044H11.5515Z"
                                    fill="black"
                                    />
                                </svg>
                                </button>
                            </div>
                        </div>
                        <div class="vacancy__description-list">
                            <div class="vacancy__advantages-item-wrapper">
                                <div class="vacancy__advantages-item">
                                    <h2 class="vacancy__advantages-item-title">'.$mvideo_eldorado['mvideo_eldorado_title_1'].'</h2>
                                    <div class="vacancy__advantages-item-description">
                                        '.$mvideo_eldorado['mvideo_eldorado_content_1'].'
                                    </div>
                                    <div class="vacancy__advantages-item-image">
                                        <svg
                                            width="56"
                                            height="56"
                                            viewBox="0 0 56 56"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            >
                                            <path
                                                d="M50.8346 32.6673C50.8346 45.2778 40.6118 55.5006 28.0013 55.5006C15.3908 55.5006 5.16797 45.2778 5.16797 32.6673C5.16797 20.0568 15.3908 9.83398 28.0013 9.83398C40.6118 9.83398 50.8346 20.0568 50.8346 32.6673Z"
                                                stroke="#E31235"
                                                stroke-miterlimit="1.24264"
                                            />
                                        </svg>
                                    </div>
                                </div>
        
                                <div class="vacancy__advantages-item">
                                    <h2 class="vacancy__advantages-item-title">'.$mvideo_eldorado['mvideo_eldorado_title_2'].'</h2>
                                    <div class="vacancy__advantages-item-description">
                                        '.$mvideo_eldorado['mvideo_eldorado_content_2'].'
                                    </div>
                                    <div class="vacancy__advantages-item-image">
                                        <svg
                                            width="56"
                                            height="56"
                                            viewBox="0 0 56 56"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            >
                                            <path
                                                d="M32.1667 34.9993C32.1667 43.7439 25.0778 50.8327 16.3333 50.8327C7.58882 50.8327 0.5 43.7439 0.5 34.9993C0.5 26.2548 7.58882 19.166 16.3333 19.166C25.0778 19.166 32.1667 26.2548 32.1667 34.9993Z"
                                                stroke="#E31235"
                                            />
                                            <circle
                                                cx="39.6654"
                                                cy="34.9994"
                                                r="15.8333"
                                                stroke="#E31235"
                                            />
                                        </svg>
                                    </div>
                                </div>
        
                                <div class="vacancy__advantages-item">
                                    <h2 class="vacancy__advantages-item-title">'.$mvideo_eldorado['mvideo_eldorado_title_3'].'</h2>
                                    <div class="vacancy__advantages-item-description">
                                        '.$mvideo_eldorado['mvideo_eldorado_content_3'].'
                                    </div>
                                    <div class="vacancy__advantages-item-image">
                                        <svg
                                            width="56"
                                            height="56"
                                            viewBox="0 0 56 56"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            >
                                            <path
                                                d="M50.8346 24.7923C50.8346 33.0536 44.1376 39.7507 35.8763 39.7507C27.615 39.7507 20.918 33.0536 20.918 24.7923C20.918 16.5311 27.615 9.83398 35.8763 9.83398C44.1376 9.83398 50.8346 16.5311 50.8346 24.7923Z"
                                                stroke="#E31235"
                                            />
                                            <path
                                                d="M32.168 38.5C32.168 44.0228 27.6908 48.5 22.168 48.5C16.6451 48.5 12.168 44.0228 12.168 38.5C12.168 32.9772 16.6451 28.5 22.168 28.5C27.6908 28.5 32.168 32.9772 32.168 38.5Z"
                                                stroke="#E31235"
                                            />
                                            <path
                                                d="M19.918 48.125C19.918 52.1981 16.6161 55.5 12.543 55.5C8.46987 55.5 5.16797 52.1981 5.16797 48.125C5.16797 44.0519 8.46987 40.75 12.543 40.75C16.6161 40.75 19.918 44.0519 19.918 48.125Z"
                                                stroke="#E31235"
                                            />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    ';
                }
            }

            $flexible_schedule = '';
            if( get_field('flexible_schedule', $vacancy_item_id) ){
                $flexible_schedule = '
                <!-- Vacancy Remote-block -->
                <div class="vacancy__remote">
                    <div class="vacancy__remote-title-wrapper">
                    <h2 class="vacancy__remote-title">
                        Выбери собственный график работы
                    </h2>
                    <p class="vacancy__remote-info">
                        На этой позиции можно работать стандартным графиком 5/2, а можно
                        и 2/2. Всё для твоего развития!
                    </p>
                    </div>
                    <div class="vacancy__remote-image-container">
                    <svg
                        class="vacancy__remote-image"
                        width="155"
                        height="142"
                        viewBox="0 0 155 142"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                        d="M74.0531 14.6324L72.6422 22.634L74.5626 22.9726L75.9735 14.971L74.0531 14.6324Z"
                        fill="#76BC21"
                        />
                        <path
                        d="M71.8537 38.3356L69.9333 37.997L64.6848 67.7628L83.8885 71.1489L84.2271 69.2285L66.9438 66.181L71.8537 38.3356Z"
                        fill="#76BC21"
                        />
                        <path
                        d="M23.0767 60.4261L15.0751 59.0153L15.4137 57.0949L23.4153 58.5058L23.0767 60.4261Z"
                        fill="#76BC21"
                        />
                        <path
                        d="M109.494 75.6638L117.495 77.0747L117.834 75.1543L109.832 73.7434L109.494 75.6638Z"
                        fill="#76BC21"
                        />
                        <path
                        d="M55.9937 117.052L57.4046 109.051L59.325 109.389L57.9141 117.391L55.9937 117.052Z"
                        fill="#76BC21"
                        />
                        <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M1.65006 54.6683C-4.25668 88.167 16.2321 120.215 48.1757 129.474C58.2225 137.233 70.8221 141.85 84.4973 141.85C109.556 141.85 130.996 126.352 139.754 104.418C148.745 96.1057 154.375 84.2102 154.375 70.9997C154.375 49.5545 139.539 31.5746 119.57 26.7638C109.871 13.7119 95.3574 4.19862 78.0792 1.15201C42.1958 -5.17521 7.97727 18.7848 1.65006 54.6683ZM3.57043 55.0069C9.71064 20.184 42.9177 -3.06782 77.7406 3.07239C100.481 7.08217 118.287 22.6348 126.196 42.6424L126.194 42.6433C130.396 53.2726 131.804 65.1589 129.673 77.2427C124.682 105.548 101.808 126.208 74.7195 129.653C73.6897 129.784 72.6539 129.89 71.6127 129.97C66.3476 130.378 60.946 130.136 55.5049 129.177C20.6821 123.037 -2.56977 89.8297 3.57043 55.0069ZM131.595 77.5811C126.43 106.877 102.674 128.225 74.5996 131.633C73.6593 131.747 72.7141 131.842 71.7647 131.915C66.3386 132.335 60.7718 132.086 55.1644 131.098C54.5606 130.991 53.9602 130.877 53.3633 130.755C62.3371 136.542 73.024 139.9 84.4973 139.9C116.267 139.9 142.022 114.145 142.022 82.3747C142.022 68.9557 137.429 56.6114 129.727 46.826C132.687 56.4779 133.469 66.9565 131.595 77.5811ZM143.972 82.3747C143.972 88.5413 143.034 94.4888 141.292 100.082C148.214 92.3713 152.425 82.1773 152.425 70.9997C152.425 51.2784 139.316 34.6187 121.337 29.2588C123.97 33.1668 126.189 37.3565 127.943 41.7569C137.885 52.3867 143.972 66.6708 143.972 82.3747Z"
                        fill="#76BC21"
                        />
                    </svg>
                    </div>
                </div>
                <!-- //Vacancy Remote-block -->
                ';
            }

            if( 'roznica' == $current_relationship ){ 
                $data_src_video = THEME_URL.'/assets/images/flyout/flyout-intro/video/retail-video-preview.mp4';
            } elseif( 'it' == $current_relationship ){
                if( 'management' == $current_catgs ){
                    $data_src_video = THEME_URL.'/assets/images/flyout/flyout-intro/video/management-video-preview.mp4';
                } elseif( 'analyst' == $current_catgs ){
                    $data_src_video = THEME_URL.'/assets/images/flyout/flyout-intro/video/analytic-video-preview.mp4';
                } elseif( 'other' == $current_catgs ){
                    $data_src_video = THEME_URL.'/assets/images/flyout/flyout-intro/video/analytic-video-preview.mp4';
                } elseif( 'backend' == $current_catgs ){
                    $data_src_video = THEME_URL.'/assets/images/flyout/flyout-intro/video/backend-video-preview.mp4';
                } else{
                    $data_src_video = THEME_URL.'/assets/images/flyout/flyout-intro/video/revyachko-preview.mp4';
                }
            } else{
                if( 'backend' == $current_catgs ){
                    $data_src_video = THEME_URL.'/assets/images/flyout/flyout-intro/video/backend-video-preview.mp4';
                }
            }

            $content                   = get_the_content( '','',$vacancy_item_id );
            $can_work_remotely         = '';
            $img                       = get_the_post_thumbnail_url( $vacancy_item_id, 'full' );
            $money_from                = number_format( get_field( 'money_from', $vacancy_item_id ), 0, ',', ' ');
            $gross                     = $gross;
            // $vacancy_project           = get_field( 'vacancy_project', $vacancy_item_id );
            $img_map                   = get_field( 'img_map', $vacancy_item_id );
            $map_full_adress           = get_field( 'map_full_adress', $vacancy_item_id );
            $url                       = get_post_permalink( $vacancy_item_id );

            $expectations = $pre_content.'';
            if( have_rows('vacancy_repeater', $vacancy_item_id) ):

                while( have_rows('vacancy_repeater', $vacancy_item_id) ) : the_row();

                    $expectations .= '<div class="vacancy__description-block">
                        <div class="vacancy__description-title">
                            <p class="vacancy__description-title-text">'.get_sub_field('item_title').'</p>
                        </div>
                        <div class="vacancy__description-list">
                            '.get_sub_field('item_contect').'
                        </div>
                    </div>';
                endwhile;
            endif;

            $k = 1;
            $vaccat_names = '';
            $vaccat_terms = get_the_terms( $vacancy_item_id, 'vaccat' );
            if( is_array( $vaccat_terms ) ){
                foreach( $vaccat_terms as $vaccat_term ){
                    $vaccat_names .= $vaccat_term->name;
                    
                    if( $k != count( $vaccat_terms ) ){
                        $vaccat_names .= ', ';
                    }
                    $k++;
                }
            }

            $k = 1;
            $town_names = '';
            $town_terms = get_the_terms( $vacancy_item_id, 'town' );
            if( is_array( $town_terms ) ){
                foreach( $town_terms as $town_term ){
                    $town_names .= $town_term->name;
                    
                    if( $k != count( $town_terms ) ){
                        $town_names .= ', ';
                    }
                    $k++;
                }
            }

            if( get_field( 'can_without_experience', $vacancy_item_id ) ){
                $can_without_experience = get_field( 'can_without_experience', $vacancy_item_id )['label'];
            } else{
                $can_without_experience = get_field( 'can_without_experience', $vacancy_item_id )['label'];
            }

            if( get_field( 'can_work_remotely', $vacancy_item_id ) ){
                $can_work_remotely = '
                <!-- Vacancy Remote-block -->
                <div class="vacancy__remote">
                    <div class="vacancy__remote-title-wrapper">
                        <h2 class="vacancy__remote-title">Работай откуда угодно</h2>
                        <p class="vacancy__remote-info">
                        На этой позиции можно работать удалённо и не ходить в офис.
                        Нужно иметь разрешение на работу в России.
                        </p>
                    </div>
                    <div class="vacancy__remote-image-container">
                        <img
                        class="vacancy__remote-image"
                        src="'.THEME_URL.'/assets/images/flyout/flyout-remote/palm.svg"
                        alt="Picture"
                        />
                    </div>
                </div>
                <!-- //Vacancy Remote-block -->
                ';
            }
            
            $return = array(
                'success'           => true,
                'title'             => $title,
                'img'               => $img,
                'data_src_video'    => $data_src_video,
                'content'           => $content,
                'flexible_schedule' => $flexible_schedule,
                'expectations'      => $expectations,
                'can_work_remotely' => $can_work_remotely,
                'img_map'           => $img_map,
                'map_full_adress'   => $map_full_adress,
                'money_from'        => $money_from,
                'gross'             => $gross,
                'vaccat'            => $vaccat_names,
                'town'              => $town_names,
                'experience'        => $can_without_experience,
                'url'               => $url,
            );
    
            wp_send_json($return);
        }

    }
}