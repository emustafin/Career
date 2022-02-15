<?php

namespace Career\API;

class Skillaz_Vacancies_Find extends Boot {

	public static function vacancies_find( $page ) {

		$params = array(
            "PageSize" => 0,
            "CurrentPage" => $page,
            "Data" => [
                "ExtraData.NeedToPublishToEmLife" => true
            ]
        );
    
        $content = json_encode($params);
    
        $url = 'https://api-feature-mvideo.dev.skillaz.ru/open-api/objects/vacancies/find';
        $headers = array('Content-Type: application/json', 'Authorization: Bearer WXIGzUxm23bXoKv/AlbA8Lgmd3Yq3tsgpg5x5mMK77I=');

        $result = self::init_post( $headers, $url, $content );
        self::finded_vacancies( $result );
        self::log( $result );
	}

    public function finded_vacancies( $result ){

        $content = (object)json_decode($result);

        $items = $content->Items;
        $i = 1;
        // $funnelid = (array)get_option( 'funnelid' );
        $vacancy_skillaz_id = (array)get_option( 'vacancy_skillaz_id' );

        foreach ($items as $vacancy) {
            
            if( false == $vacancy_skillaz_id ){
                $vacancy_skillaz_id[0] = $vacancy->Id;
            } elseif( !in_array( $vacancy->Id, $vacancy_skillaz_id ) ){
                $vacancy_skillaz_id[] = $vacancy->Id;
            }

            update_option( 'vacancy_skillaz_id', $vacancy_skillaz_id );

            $single_permalink = self::create_single_vacancy( $vacancy );
            if( 'no1' != $single_permalink && 'no2' != $single_permalink ){
                echo $i. ' - <a href="'.$single_permalink.'">'.$vacancy->Name.'</a><br>';
            }

            $i++;
        }
    }

    public function create_single_vacancy( $vacancy_data ){

        if( !self::check_live_vacancy( $vacancy_data->Id ) ){
    
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

                $WorkLocation = (array)$work_vacancy_data['WorkLocation'];
                
                if( null == $WorkLocation ){
                    $WorkLocation = (array)$work_vacancy_data['Address'];
                }

                if( null != $WorkLocation['Longitude'] && null != $WorkLocation['Latitude'] ){

                    $post_data = array(
                        'post_title'    => sanitize_text_field( $title ),
                        'post_content'  => $work_vacancy_data['ExtraData.Opisanie'],
                        'post_status'   => 'publish',
                        'post_type'     => 'vacancies',
                        'post_author'   => 1,
                    );
            
                    // Вставляем запись в базу данных
                    $post_id = wp_insert_post( $post_data );
            
                    // Установка таксономии
                    self::set_post_to_terms( $post_id, $vacancy_data->FunnelId );
        
                    // Устанавливает уникальный код из скиллаза
                    update_field( 'unique_code', $vacancy_data->Id, $post_id );
        
                    // ЗП от и до
                    $salary = (array)$work_vacancy_data['Salary'];
                    update_field( 'money_from', $salary['From'], $post_id );
                    update_field( 'money_to', $salary['To'], $post_id );
                    
                    // Полный адрес магазина
                    update_field( 'map_full_adress', $WorkLocation['Text'], $post_id );
                    
                    // Город
                    self::update_vacancy_town( $work_vacancy_data, $post_id );
                    
                    // Магазин
                    self::update_vacancy_shop( $work_vacancy_data, $post_id );
    
                    // Устанавливает дату обновления
                    $blogtime = current_time('mysql');
                    $date_update = get_post_meta( $post_id, 'date_update' );
                    if( false == $date_update ){
                        add_post_meta( $post_id, 'date_update', $blogtime );
                    } else{
                        update_post_meta( $post_id, 'date_update', $blogtime );
                    }
            
                    $url = get_permalink( $post_id );
                    return $url;
                } else{
                    file_put_contents( 'wp-content/themes/career_theme/classes/empty_coordinates.json', print_r( $vacancy_data, true ), FILE_APPEND );
                    return 'no1';
                }

            } else{
                file_put_contents( 'wp-content/themes/career_theme/classes/NeedToPublishToJobMve-false-or-null.json', print_r( $vacancy_data, true ), FILE_APPEND );
                return 'no1';
            }
    
        } else{
            // file_put_contents( 'wp-content/themes/career_theme/classes/broken.json', print_r( $vacancy_data, true ), FILE_APPEND );
            return 'no2';
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

        return $check_query->have_posts();
    }

    public function set_post_to_terms( $post_id, $funnel_id ){

        $tax_terms = array();

        switch ($funnel_id) {
            case 'MvideoMassRetail':
                $term = get_term_by( 'slug', 'roznica', 'relationship' );
                wp_set_post_terms( $post_id, $term->term_id, 'relationship', true );
                break;
            
            case 'prof_podbor_servis_Retail':
                $term = get_term_by( 'slug', 'roznica', 'relationship' );
                wp_set_post_terms( $post_id, $term->term_id, 'relationship', true );
                break;
            
            default:
                # code...
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

            if( null != $Data['FunnelId'] ){
                switch ($Data['FunnelId']) {
                    case 'MvideoMassRetail':
                        update_field( 'mvideo_or_eldorado', 'mvideo', $shop_l );
                        break;
                        
                    case 'prof_podbor_servis_Retail':
                        update_field( 'mvideo_or_eldorado', 'eldorado', $shop_l );
                        break;
                }
            }
        }

    }
}
