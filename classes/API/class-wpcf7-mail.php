<?php

namespace Career\API;

class WPcf7_Mail extends Boot {

	public function __construct() {

		add_action( 'wpcf7_mail_sent', [ $this, 'sent_data_to_huntflow'] );
	}

    public function sent_data_to_huntflow( $cf7 ){

        $submission = \WPCF7_Submission::get_instance();
        $posted_data = $submission->get_posted_data();
        
        $url = 'https://mvideo-api.huntflow.ru/account/2/applicants';
        $params = array();

        if( $posted_data['text-name'] ){
            $params['last_name'] = $posted_data['text-name'];
        }
        if( $posted_data['mask-176'] ){
            $params['phone'] = $posted_data['mask-176'];
        }
        if( $posted_data['mask-348'] ){
            $params['phone'] = $posted_data['mask-348'];
        }
        if( $posted_data['email-88'] ){
            $params['email'] = $posted_data['email-88'];
        }
        if( $posted_data['email-717'] ){
            $params['email'] = $posted_data['email-717'];
        }

        $externals_body = "";
        $account_source = "";
        if( $posted_data["text-town"] ){
            $externals_body .= "Город - ".json_decode( $posted_data["text-town"] )[0]->value."\n";
        }
        if( $posted_data["text-931"] ){
            $externals_body .= "Направление - ".json_decode( $posted_data["text-931"] )[0]->value."\n";
        }
        if( $posted_data["text-932"] ){
            $externals_body .= "Специализация - ".json_decode( $posted_data["text-932"] )[0]->value."\n";
        }
        if( $posted_data["text-341"] ){
            $externals_body .= "Дополнительная информация - ".$posted_data["text-932"]."\n";
        }
        if( $posted_data["upload-file-803"] ){
            foreach ($posted_data["upload-file-803"] as $file) {
                $account_source .= $file.","; //TODO запятую последнюю убрать
            }
        }
        if( $posted_data["upload-file-805"] ){
            foreach ($posted_data["upload-file-805"] as $file) {
                $account_source .= $file.","; //TODO запятую последнюю убрать
            }
        }
        if( "" != $account_source ){
            $externals_body .= "Файлы - ".$account_source."\n";
        }

        if( '' != $externals_body ){
            $params['externals'] = [
                [
                    "data"=> [
                        "body" => "Тестовый кандидат\nТестируем новый карьерный сайт\n".$externals_body
                    ],
                    "auth_type" => "NATIVE"
                ]
            ];
        }

        $content = json_encode($params);

        $headers = array('Content-Type: application/json', 'Authorization: Bearer 66233397cc55c4714d52a78821c92910634e369cc3abee006304ccf6fb887097');
        
        $result = self::init( $headers, $url, $content );
        self::log( $result );
    }
}
