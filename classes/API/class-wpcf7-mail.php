<?php

namespace Career\API;

class WPcf7_Mail extends Boot {

	public function __construct() {

		// add_action( 'wpcf7_mail_sent', [ $this, 'sent_data_to_huntflow'] );
        add_action( 'wpcf7_after_flamingo', [ $this, 'sent_data_to_service'] );
	}

    public function sent_data_to_service( $cf7 ){

        $submission = \WPCF7_Submission::get_instance();
        $posted_data = $submission->get_posted_data();

        if( $posted_data['text-rel_type'] ){
            $rel_type = $posted_data['text-rel_type'];
        }
        
        if( 'it' == $rel_type ){
            self::sent_data_to_huntflow( $posted_data, $submission );
        } elseif( 'roznica' == $rel_type ){
            self::sent_data_to_skillaz( $posted_data, $submission );
        }
    }

    public function sent_data_to_huntflow( $posted_data, $submission ){

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

    public function sent_data_to_skillaz( $posted_data, $submission ){

        $url = 'https://api-feature-mvideo.dev.skillaz.ru/open-api/objects/candidates';
        $params = array();

        if( $posted_data['vacancyid'] ){
            $params['VacancyId'] = $posted_data['vacancyid'];
        } else{
            $params['VacancyId'] = '60fec01df37e005d6777d853';
        }
        if( $posted_data['sourceurl'] ){
            $params['SourceUrl'] = $posted_data['sourceurl'];
        } else{
            $params['SourceUrl'] = 'https://job.mvideoeldorado.ru/shop/vacancy/3679';
        }
        $params['BirthDate'] = '1999-03-03T00:00:00'; //надо обсудить, пока заглушка
        $params['Source'] = 'CorporatePortal'; //надо обсудить, пока заглушка
        $params['AddWay'] = 'negotiation'; //надо обсудить, пока заглушка
        $params['Comment'] = 'Отклик пришел в Магазин № E181, ул.Телевизорная д.1.'; //надо обсудить, пока заглушка

        if( $posted_data['text-name'] ){
            $params['FirstName'] = $posted_data['text-name'];
        } elseif( $posted_data['text-name2'] ){
            $params['FirstName'] = $posted_data['text-name2'];
        } else{
            $params['FirstName'] = 'Тест1';
        }
        if( $posted_data['text-name'] ){
            $params['LastName'] = $posted_data['text-name'];
        } else{
            $params['LastName'] = 'Тест1';
        }
        if( $posted_data['text-name'] ){
            $params['MiddleName'] = '';
        } else{
            $params['MiddleName'] = '';
        }
        if( $posted_data['mask-176'] ){
            $params['PhoneNumber'] = $posted_data['mask-176'];
        } else{
            $params['PhoneNumber'] = '+7 (999) 992-9999';
        }
        if( $posted_data['mask-348'] ){
            $params['PhoneNumber'] = $posted_data['mask-348'];
        } else{
            $params['PhoneNumber'] = '+7 (999) 992-9999';
        }
        if( $posted_data['email-88'] ){
            $params['Email'] = $posted_data['email-88'];
        } else{
            $params['Email'] = 'test-email1@skillaz.ru';
        }
        if( $posted_data['email-717'] ){
            $params['Email'] = $posted_data['email-717'];
        } else{
            $params['Email'] = 'test-email1@skillaz.ru';
        }

        // -----another_params---------
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
                $another_params['externals'] = [
                    [
                        "data"=> [
                            "body" => "Тестовый кандидат\nТестируем новый карьерный сайт\n".$externals_body
                        ],
                        "auth_type" => "NATIVE"
                    ]
                ];
            }
        // --------------

        $content = json_encode($params);

        $headers = array('Content-Type: application/json', 'Authorization: Bearer WXIGzUxm23bXoKv/AlbA8Lgmd3Yq3tsgpg5x5mMK77I=');
        $result = self::init( $headers, $url, $content );
        // var_dump($result);
        self::log( $result );
    }
}
