<?php
/**
 * Theme functions main file.
 *
 * @package Career\Core
 */

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

function NotEmptyGetParam( $param ){
	return !empty($_GET) && !empty($_GET[ $param ]) && null != $_GET[ $param ];
}

add_action('wpcf7_mail_sent', function ($cf7) {

	$submission = WPCF7_Submission::get_instance();
	$posted_data = $submission->get_posted_data();
	
	$url = 'https://mvideo-api.huntflow.ru/account/2/applicants';
	$params = array(
		'last_name' => $posted_data['text-name'],
		'phone' => $posted_data['mask-348'],
		'email' => $posted_data['email-717'],
		"externals" => [
			[
				"data"=> [
					"body" => "Тестовый кандидат\nТестируем новый карьерный сайт"
				],
				"auth_type" => "NATIVE"
			]
		]
	);

	$xxxx = json_encode($params);

	$headers = array('Content-Type: application/json', 'Authorization: Bearer 66233397cc55c4714d52a78821c92910634e369cc3abee006304ccf6fb887097');

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); // отправка заголовков
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $xxxx); // POST-данные
	curl_setopt($ch, CURLOPT_URL, $url);
	$result = curl_exec($ch);  
	curl_close($ch);
	// echo $result;

});