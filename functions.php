<?php
/**
 * Theme functions main file.
 *
 * @package Career\Core
 */
session_start();
define( 'THEME_DIR', get_stylesheet_directory() );
define( 'THEME_URL', get_stylesheet_directory_uri() );

require_once THEME_DIR . '/classes/class-core.php';

/**
 * Returns instance of theme's main class.
 *
 * @return Career
 */
function TC() : \Career\Core { //phpcs:ignore
	return \Career\Core::instance();
}
TC();

// add_action('wpcf7_mail_sent', function ($cf7) {

// 	$submission = WPCF7_Submission::get_instance();
// 	$posted_data = $submission->get_posted_data();
	
// 	$url = 'https://mvideo-api.huntflow.ru/account/2/applicants';
// 	$params = array();

// 	if( $posted_data['text-name'] ){
// 		$params['last_name'] = $posted_data['text-name'];
// 	}
// 	if( $posted_data['mask-176'] ){
// 		$params['phone'] = $posted_data['mask-176'];
// 	}
// 	if( $posted_data['mask-348'] ){
// 		$params['phone'] = $posted_data['mask-348'];
// 	}
// 	if( $posted_data['email-88'] ){
// 		$params['email'] = $posted_data['email-88'];
// 	}
// 	if( $posted_data['email-717'] ){
// 		$params['email'] = $posted_data['email-717'];
// 	}

// 	$externals_body = "";
// 	$account_source = "";
// 	if( $posted_data["text-town"] ){
// 		$externals_body .= "Город - ".json_decode( $posted_data["text-town"] )[0]->value."\n";
// 	}
// 	if( $posted_data["text-931"] ){
// 		$externals_body .= "Направление - ".json_decode( $posted_data["text-931"] )[0]->value."\n";
// 	}
// 	if( $posted_data["text-932"] ){
// 		$externals_body .= "Специализация - ".json_decode( $posted_data["text-932"] )[0]->value."\n";
// 	}
// 	if( $posted_data["text-341"] ){
// 		$externals_body .= "Дополнительная информация - ".$posted_data["text-932"]."\n";
// 	}
// 	if( $posted_data["upload-file-803"] ){
// 		foreach ($posted_data["upload-file-803"] as $file) {
// 			$account_source .= $file.","; //TODO запятую последнюю убрать
// 		}
// 	}
// 	if( $posted_data["upload-file-805"] ){
// 		foreach ($posted_data["upload-file-805"] as $file) {
// 			$account_source .= $file.","; //TODO запятую последнюю убрать
// 		}
// 	}
// 	if( "" != $account_source ){
// 		$externals_body .= "Файлы - ".$account_source."\n";
// 	}

// 	if( '' != $externals_body ){
// 		$params['externals'] = [
// 			[
// 				"data"=> [
// 					"body" => "Тестовый кандидат\nТестируем новый карьерный сайт\n".$externals_body
// 				],
// 				"auth_type" => "NATIVE"
// 			]
// 		];
// 	}

// 	$xxxx = json_encode($params);

// 	$headers = array('Content-Type: application/json', 'Authorization: Bearer 66233397cc55c4714d52a78821c92910634e369cc3abee006304ccf6fb887097');

// 	$ch = curl_init();
// 	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// 	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
// 	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); // отправка заголовков
// 	curl_setopt($ch, CURLOPT_POST, true);
// 	curl_setopt($ch, CURLOPT_POSTFIELDS, $xxxx); // POST-данные
// 	curl_setopt($ch, CURLOPT_URL, $url);
// 	$result = curl_exec($ch);  
// 	curl_close($ch);
// 	// file_put_contents( 'xxx.txt', print_r( $result,true ), FILE_APPEND );
// });
function get_habr_url( $post_id ){

	$finded_url = '';  
	$pattern = '~[a-z]+://\S+~';
	$content = get_the_content( '', '', $post_id );

	if($num_found = preg_match_all($pattern, $content, $out)){
		foreach ($out[0] as $surl) {

			if( strpos( $surl, 'Читать') != false && strpos( $surl, 'ttps://habr.com') != false ){
				$finded_url = str_replace( '">Читать', '', $surl );
				break;
			}
		}
	}

	return $finded_url;  
}