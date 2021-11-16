<?php

namespace Career\API;

class Skillaz_Org_Structure extends Boot {

	public static function get_data_org_structure() {

		$param = '5d69251551e9b613e4787ef7';
    
        $url = 'https://api-feature-mvideo.dev.skillaz.ru/open-api/org-structure/units/'.$param;
        $headers = array('Content-Type: application/json', 'Authorization: Bearer WXIGzUxm23bXoKv/AlbA8Lgmd3Yq3tsgpg5x5mMK77I=');

        $result = self::init_get( $headers, $url );
        self::log( $result );
	}
}
