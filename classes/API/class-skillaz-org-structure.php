<?php

namespace Career\API;

class Skillaz_Org_Structure extends Boot {

	public static function get_data_org_structure() {

		$params = array();
    
        $content = json_encode($params);
    
        $url = 'https://api-feature-mvideo.dev.skillaz.ru/open-api/org-structure/units';
        $headers = array('Content-Type: application/json', 'Authorization: Bearer WXIGzUxm23bXoKv/AlbA8Lgmd3Yq3tsgpg5x5mMK77I=');

        $result = self::init( $headers, $url, $content );
        self::log( $result );
	}
}
