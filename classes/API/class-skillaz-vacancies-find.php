<?php

namespace Career\API;

class Skillaz_Vacancies_Find extends Boot {

	public static function vacancies_find() {

		$params = array(
            "PageSize" => 0,
            "CurrentPage" => 0,
            "Data" => [
                "ExtraData.NeedToPublishToEmLife" => true
            ]
        );
    
        $content = json_encode($params);
    
        $url = 'https://api-feature-mvideo.dev.skillaz.ru/open-api/objects/vacancies/find';
        $headers = array('Content-Type: application/json', 'Authorization: Bearer WXIGzUxm23bXoKv/AlbA8Lgmd3Yq3tsgpg5x5mMK77I=');

        $result = self::init_post( $headers, $url, $content );
        self::finded_vacancies( $result );
	}

    public function finded_vacancies( $result ){

        $content = (object)json_decode($result);

        $items = $content->Items;
        $i = 1;
        foreach ($items as $vacancy) {
            
            echo $i.' - '.$vacancy->Name.'<br>';
            // $vacancy_id = self::create_single_vacancy( $vacancy );
            $i++;
        }
    }

    public function create_single_vacancy( $vacancy_data ){

        $term_id = get_term_by( 'slug', 'roznica', 'relationship')->term_id;

        $post_data = array(
            'post_title'    => sanitize_text_field( $vacancy_data->Name ),
            'post_content'  => '',
            'post_status'   => 'publish',
            'post_author'   => 1,
            'post_category' => array( $term_id )
        );

        // Вставляем запись в базу данных
        // $post_id = wp_insert_post( $post_data );

        // return $post_id;
        return 1;
    }
}
