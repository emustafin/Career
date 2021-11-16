<?php

namespace Career\API;

class Skillaz_Candidates extends Boot {

	public static function get_data_candidates() {

		$params = array(
            'VacancyId' => '60fec01df37e005d6777d853',
            'FirstName' => 'Тест1',
            'LastName' => 'Тест1',
            'MiddleName' => '',
            'Email' => 'test-email1@skillaz.ru',
            'PhoneNumber' => '+7 (999) 992-9999',
            'SourceUrl' => 'https://job.mvideoeldorado.ru/shop/vacancy/3679',
            'BirthDate' => '1999-03-03T00:00:00',
            'Source' => 'CorporatePortal',
            'AddWay' => 'negotiation',
            'Comment' => 'Отклик пришел в Магазин № E181, ул.Телевизорная д.1.',
            
        );
    
        $content = json_encode($params);
    
        $url = 'https://api-feature-mvideo.dev.skillaz.ru/open-api/objects/candidates';
        $headers = array('Content-Type: application/json', 'Authorization: Bearer WXIGzUxm23bXoKv/AlbA8Lgmd3Yq3tsgpg5x5mMK77I=');

        $result = Boot::init_post( $headers, $url, $content );
        Boot::log( $result );
	}
}
