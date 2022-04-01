<?php

namespace Career\API;

class Skillaz_Org_Structure extends Boot {

	public static function get_data_org_structure() {

		$param = '5d69251551e9b613e4787ef7';
    
        $choise_url = get_option( 'select_skillaz_url' );
        $url = SKILLAZ_URL[$choise_url]['link'].'open-api/org-structure/units/'.$param;
        $headers = array('Content-Type: application/json', SKILLAZ_URL[$choise_url]['key']);

        $result = self::init_get( $headers, $url );
        self::log( $result );
	}
}
