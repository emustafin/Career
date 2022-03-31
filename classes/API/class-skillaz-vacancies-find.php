<?php

namespace Career\API;

class Skillaz_Vacancies_Find extends Boot {

	public static function vacancies_find( $page ) {

		$params = array(
            "PageSize" => 0,
            "CurrentPage" => $page,
            'IsActive'  => true,
            // "Data" => [
            //     "ExtraData.NeedToPublishToEmLife" => true
            // ]
        );
    
        $content = json_encode($params);
    
        // $url = 'https://api-feature-mvideo.dev.skillaz.ru/open-api/objects/vacancies/find';
        // $headers = array('Content-Type: application/json', 'Authorization: Bearer WXIGzUxm23bXoKv/AlbA8Lgmd3Yq3tsgpg5x5mMK77I=');
        $url = 'https://api.skillaz.ru/open-api/objects/vacancies/find';
        $headers = array('Content-Type: application/json', 'Authorization: Bearer +GfochhSwjsyfsnp9n7HhM4GcFBhhOv/rAoRR3Z+nWc=');

        $result = self::init_post( $headers, $url, $content );
        self::finded_vacancies( $result );
        self::log( $result );
	}

    public function finded_vacancies( $result ){

        $content = (object)json_decode($result);

        update_option( 'skillaz_total_pages', $content->TotalPages );

        $i = 1;

        foreach ($content->Items as $vacancy) {

            $single_permalink = self::create_single_vacancy( $vacancy );
            switch ($single_permalink) {
                case '/not_public':
                    echo '<p style="color:red;">'.$i.' - <span style="color:red;">'.$vacancy->Name.'</span> - '.$vacancy->Id.'</p>';
                    break;
                
                case '/update':
                    $vacancy_id = self::check_live_vacancy( $vacancy->Id );
                    echo '<p style="color:blue;">'.$i.' - <a href="'.get_permalink($vacancy_id).'" style="color:blue;">'.$vacancy->Name.'</a> - '.$vacancy->Id.'</p>';
                    break;
                
                default:
                    echo '<p style="color:green;">'.$i.' - <a href="'.$single_permalink.'" style="color:green;">'.$vacancy->Name.'</a> - '.$vacancy->Id.'</p>';
                    break;
            }

            $i++;
        }
    }

    public function create_single_vacancy( $vacancy_data ){

        $vacancy_id = self::check_live_vacancy( $vacancy_data->Id );

        if( false == $vacancy_id ){
    
            $work_vacancy_data = (array)$vacancy_data->Data;

            if( true == $work_vacancy_data['ExtraData.NeedToPublishToJobMve'] ){

                if( null != $work_vacancy_data['ExtraData.ProfileName'] ){
                    $title = $work_vacancy_data['ExtraData.ProfileName'];
                } else{
                    $ProfileId = (array)$work_vacancy_data['ProfileId'];
                    if( null != $ProfileId ){
                        $title = $ProfileId['Name'];
                    } elseif( null != $work_vacancy_data['Name'] ){
                        $title = $work_vacancy_data['Name'];
                    }
                }

                $post_data = array(
                    'post_title'    => sanitize_text_field( $title ),
                    'post_content'  => $work_vacancy_data['ExtraData.Opisanie'],
                    'post_status'   => 'draft',
                    'post_type'     => 'vacancies',
                    'post_author'   => 1,
                );
        
                // Вставляем запись в базу данных
                $post_id = wp_insert_post( $post_data );
        
                self::set_vacancy_params( $post_id, $vacancy_data, $work_vacancy_data );
        
                $res = get_permalink( $post_id );

            } else{
                $res = '/not_public';
            }
    
        } else{
            // Update
            $work_vacancy_data = (array)$vacancy_data->Data;

            if( true == $work_vacancy_data['ExtraData.NeedToPublishToJobMve'] ){

                self::set_vacancy_params( $vacancy_id, $vacancy_data, $work_vacancy_data );
            }

            $res = '/update';
        }

        return $res;
    }

    public function set_vacancy_params( $post_id, $vacancy_data, $work_vacancy_data ){

        // Установка таксономии
        self::set_post_to_terms( $post_id, $vacancy_data->FunnelId );
        
        // Устанавливает уникальный код из скиллаза
        update_field( 'unique_code', $vacancy_data->Id, $post_id );

        // ЗП от и до
        $salary = (array)$work_vacancy_data['Salary'];
        $salary_from = $salary['From'];
        if( null == $salary_from ){
            $salary_from = 0;
        }
        $salary_to = $salary['To'];
        if( null == $salary_to ){
            $salary_to = 0;
        }
        update_field( 'money_from', $salary_from, $post_id );
        update_field( 'money_to', $salary_to, $post_id );

        $WorkLocation = (array)$work_vacancy_data['WorkLocation'];
    
        if( null == $WorkLocation ){
            $WorkLocation = (array)$work_vacancy_data['Address'];
        }
        
        // Полный адрес магазина
        update_field( 'map_full_adress', $WorkLocation['Text'], $post_id );
        
        // Город
        self::update_vacancy_town( $work_vacancy_data, $post_id );
        
        if( null != $WorkLocation['Longitude'] && null != $WorkLocation['Latitude'] ){
            // Магазин
            self::update_vacancy_shop( $work_vacancy_data, $post_id );
        } else{
            file_put_contents( '../wp-content/themes/career_theme/classes/API/empty_coordinates.json', print_r( $vacancy_data, true ), FILE_APPEND );
            echo '<h3><b>Пустые координаты: </b></h3>';
        }

        // Устанавливает дату обновления
        $blogtime = current_time('mysql');
        $date_update = get_post_meta( $post_id, 'date_update' );
        if( false == $date_update ){
            add_post_meta( $post_id, 'date_update', $blogtime );
        } else{
            update_post_meta( $post_id, 'date_update', $blogtime );
        }

        // Устанавливает флаг эльдорадо или мвидео
        if( null != $work_vacancy_data['ExtraData.Brend'] ){
            $Brend = $work_vacancy_data['ExtraData.Brend'];
            switch ($Brend) {
                case 'EM':
                    update_field( 'check_mvideo_eldorado', 'mvideo', $post_id );
                    break;

                case 'MV':
                    update_field( 'check_mvideo_eldorado', 'mvideo', $post_id );
                    break;
                
                case 'EL':
                    update_field( 'check_mvideo_eldorado', 'eldorado', $post_id );
                    break;
            }
            update_field( 'is_retail_vacancy', true, $post_id );
        }

        // Устанавливает контентную часть в повторитель
        $add_content = array();        
        if( '' != $work_vacancy_data['ExtraData.ResponsibilityProf'] ){
            $add_content[] = array(
                'item_title'    => 'Ты будешь заниматься',
                'item_contect'  => $work_vacancy_data['ExtraData.ResponsibilityProf']
            );
        }
        
        if( '' != $work_vacancy_data['ExtraData.RequirementsProf'] ){
            $add_content[] = array(
                'item_title'    => 'Мы знаем, что ты',
                'item_contect'  => $work_vacancy_data['ExtraData.RequirementsProf']
            );
        }
        
        if( '' != $work_vacancy_data['ExtraData.OfferProf'] ){
            $add_content[] = array(
                'item_title'    => 'Что ты получишь',
                'item_contect'  => $work_vacancy_data['ExtraData.OfferProf']
            );
        }

        update_field( 'vacancy_repeater', $add_content, $post_id );

        // Установка специализации
        self::set_vaccat_vacancy( $work_vacancy_data, $post_id );

    }

    public function set_vaccat_vacancy( $work_vacancy_data, $post_id ){

        // Получаем название
        if( null != $work_vacancy_data['ExtraData.ProfileName'] ){
            $title = $work_vacancy_data['ExtraData.ProfileName'];
        } else{
            $ProfileId = (array)$work_vacancy_data['ProfileId'];
            if( null != $ProfileId ){
                $title = $ProfileId['Name'];
            } elseif( null != $work_vacancy_data['Name'] ){
                $title = $work_vacancy_data['Name'];
            }
        }

        // Превращаем название в массив слов
        $stitle_array = array();
        $title_array = explode( " ", $title );
        foreach ($title_array as $word) {
            $sword = str_replace( ",", "", $word );
            $stitle_array[] = $sword;
        }

        // Получаем все термы специализации
        $vaccat_terms = get_terms('vaccat', [ 'hide_empty' => false, ]);
        $current_vaccat = array();

        // Проходимся по всем термам для сравнения по ключевым словам название
        foreach ($vaccat_terms as $term) {
            
            $d = false;
            $keywords = get_field('keywords', $term);

            if( null != $keywords || '' != $keywords ){
                $skeywords_array = array();
                // Превращаем полученное в массив
                $keywords_array = explode( ",", $keywords );
                foreach ($keywords_array as $keyword) {
                    $skeyword = str_replace( " ", "", $keyword );
                    $skeywords_array[] = $skeyword;
                }
                
                // Цикл по ключевым словам для сравнения...
                foreach ($skeywords_array as $keyword) {
    
                    // ...с каждым из слов в названии вакансии
                    foreach ($stitle_array as $word) {
                        if( $keyword == $word ){
                            $d = true;
                        }
                    }
                }
            }

            // Проверяем есть ли совпадения
            if( $d ){
                $current_vaccat[] = $term;
            }
        }

        // Устанавливаем вакансии специализацию в зависимости от совпадений по ключевым словам
        if( empty($current_vaccat) ){
            $another_term = get_term_by( 'slug', 'other', 'vaccat' );
            wp_set_post_terms( $post_id, $another_term->term_id, 'vaccat', true );
        } else{
            wp_set_post_terms( $post_id, $current_vaccat[0]->term_id, 'vaccat', true );
        }

    }

    public function check_live_vacancy( $unique_code ){

        $args = array(
            'post_type'         => 'vacancies',
            'meta_query' => array(
                array(
                    'key'		=> 'unique_code',
                    'value'		=> $unique_code,
                    'compare'	=> '='
                )
            )
        );

        $check_query = new \WP_Query( $args );

        $result_vacancy_id = false;
        if( false != $check_query->have_posts() ) $result_vacancy_id = $check_query->posts[0]->ID;

        return $result_vacancy_id;
    }

    public function set_post_to_terms( $post_id, $funnel_id ){

        switch ($funnel_id) {
            case 'MVideoITPodbor':
                $term = get_term_by( 'slug', 'it', 'relationship' );
                wp_set_post_terms( $post_id, $term->term_id, 'relationship', true );
                break;
            
            case 'MvideoMassRetail':
                $term = get_term_by( 'slug', 'roznica', 'relationship' );
                wp_set_post_terms( $post_id, $term->term_id, 'relationship', true );
                break;

            case 'prof_podbor_servis_SLF':
                $term = get_term_by( 'slug', 'logistic', 'relationship' );
                wp_set_post_terms( $post_id, $term->term_id, 'relationship', true );
                break;
            
            case 'ServisPodborSklad':
                $term = get_term_by( 'slug', 'logistic', 'relationship' );
                wp_set_post_terms( $post_id, $term->term_id, 'relationship', true );
                break;
            
            case 'ServisPodborViezdnoiServis':
                $term = get_term_by( 'slug', 'logistic', 'relationship' );
                wp_set_post_terms( $post_id, $term->term_id, 'relationship', true );
                break;
            
            case 'MvideoServisPodborSLC':
                $term = get_term_by( 'slug', 'logistic', 'relationship' );
                wp_set_post_terms( $post_id, $term->term_id, 'relationship', true );
                break;
            
            case 'ServisPodborKontaktCenter':
                $term = get_term_by( 'slug', 'logistic', 'relationship' );
                wp_set_post_terms( $post_id, $term->term_id, 'relationship', true );
                break;
            
            case 'MvideoCallCenterProfRetailFunnel':
                $term = get_term_by( 'slug', 'logistic', 'relationship' );
                wp_set_post_terms( $post_id, $term->term_id, 'relationship', true );
                break;
            
            case 'prof_podbor_servis':
                $term = get_term_by( 'slug', 'office', 'relationship' );
                wp_set_post_terms( $post_id, $term->term_id, 'relationship', true );
                break;
        }

    }

    public function update_vacancy_town( $Data, $post_id ){

        $City = '-1';
        if( null != $Data['City'] ){
            $City = $Data['City'];
        } elseif( null != $Data['WorkLocation'] ) {
            $WorkLocation = (array)$Data['WorkLocation'];

            if( null == $WorkLocation ){
                $WorkLocation = (array)$Data['Address'];
            }

            if( null != $WorkLocation['City'] ){
                $City = $WorkLocation['City'];
            }
        }

        if( '-1' != $City ){
            wp_set_post_terms( $post_id, $City, 'town', true );
        }
    }

    public function update_vacancy_shop( $Data, $post_id  ){

        $current_shop_id = '-1';
        $ShopName = '-1';
        $FullAdress = '-1';
        $Longitude = '-1';
        $Latitude = '-1';

        if( null != $Data['WorkLocation'] ) {
            $WorkLocation = (array)$Data['WorkLocation'];

            if( null == $WorkLocation ){
                $WorkLocation = (array)$Data['Address'];
            }

            if( null != $Data['OrgUnitId'] ){
                $OrgUnitId = (array)$Data['OrgUnitId'];
                if( null != $OrgUnitId['Name'] ){
                    $ShopName = $OrgUnitId['Name'];
                }
            }
            if( null != $WorkLocation['City'] ){
                $FullAdress = $WorkLocation['Text'];
            }
            if( null != $WorkLocation['Longitude'] ){
                $Longitude = $WorkLocation['Longitude'];
            } elseif( null != $WorkLocation['Coordinates'] ){
                $Coordinates = $WorkLocation['Coordinates'];
                $Longitude = $Coordinates['Longitude'];
            }
            if( null != $WorkLocation['Latitude'] ){
                $Latitude = $WorkLocation['Latitude'];
            } elseif( null != $WorkLocation['Coordinates'] ){
                $Coordinates = $WorkLocation['Coordinates'];
                $Latitude = $Coordinates['Latitude'];
            }
        } elseif( null != $Data['ExtraData.OrgUnitName'] ) {
            $ShopName = $Data['ExtraData.OrgUnitName'];
        } elseif( null != $Data['OrgUnitId'] ){
            $OrgUnitId = (array)$Data['OrgUnitId'];
            $ShopName = $OrgUnitId['Name'];
        }

        if( '-1' != $ShopName ){
            $shop = get_term_by( 'name', $ShopName, 'shop' );
            if( false != $shop ){
                $current_shop_id = $shop->term_id;
                wp_set_post_terms( $post_id, $shop->term_id, 'shop', true );
            } else{
                $insert_res = wp_insert_term(
                    $ShopName,
                    'shop'
                );
                $current_shop_id = $insert_res['term_id'];
                wp_set_post_terms( $post_id, $insert_res['term_id'], 'shop', true );
            }
        }

        if( '-1' != $current_shop_id ){
            
            $shop_l = get_term_by( 'id', $current_shop_id, 'shop' );

            if( '-1' != $FullAdress ){
                update_field( 'shop_adress', $FullAdress, $shop_l );
            }
            if( '-1' != $Longitude ){
                update_field( 'shop_koordinates_longitude', $Longitude, $shop_l );
            }
            
            if( '-1' != $Latitude ){
                update_field( 'shop_koordinates_latitude', $Latitude, $shop_l );
            }

            if( null != $Data['ExtraData.Brend'] ){
                $Brend = $Data['ExtraData.Brend'];
                switch ($Brend) {
                    case 'EM':
                        update_field( 'mvideo_or_eldorado', 'mvideo', $shop_l );
                        break;

                    case 'MV':
                        update_field( 'mvideo_or_eldorado', 'mvideo', $shop_l );
                        break;
                    
                    case 'EL':
                        update_field( 'mvideo_or_eldorado', 'eldorado', $shop_l );
                        break;
                }
            }

        }

    }
}
