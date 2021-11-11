<?php

namespace Career\API;

class Boot {

	public function init( $headers, $url, $content ) {

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); // отправка заголовков
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $content); // POST-данные
		curl_setopt($ch, CURLOPT_URL, $url);
		$result = curl_exec($ch);  
		curl_close($ch);

		return $result;
	}
	
	public function log( $content ){

		file_put_contents( 'xxx2.txt', print_r( $content, true ), FILE_APPEND );
	}
}
