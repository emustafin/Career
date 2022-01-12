<?php

namespace Career\API;

class WPcf7_Mail extends Boot {

	public function __construct() {

        add_filter( 'wpcf7_feedback_response', [ $this, 'sent_data_to_service' ], 10, 2 );
	}

    public function sent_data_to_service( $response, $result ){

        $submission = \WPCF7_Submission::get_instance();
        $posted_data = $submission->get_posted_data();

        if( $posted_data['text-rel_type'] ){
            $rel_type = $posted_data['text-rel_type'];
        }

        if( empty( $_SESSION['send_post_id'] ) ){
            $_SESSION['send_post_id'] = array( (int) $posted_data['text-vacancyid'] );
        } elseif( !in_array( $posted_data['text-vacancyid'], $_SESSION['send_post_id'] ) ){
            $_SESSION['send_post_id'][] = (int) $posted_data['text-vacancyid'];
        } elseif( in_array( $posted_data['text-vacancyid'], $_SESSION['send_post_id'] ) ){
            $result['api_send_status'] = 'data_false';
            return $result;
        }
        
        if( 'it' == $rel_type ){
            $send_result = self::sent_data_to_huntflow( $posted_data );
        } elseif( 'roznica' == $rel_type ){
            $send_result = self::sent_data_to_skillaz( $posted_data );
        }

        
        $result['api_send_status'] = 'data_sent';
        if( isset( $send_result->IsOk ) ){
            if( false == $send_result->IsOk ){
                $result['api_send_status'] = 'data_false';
            }
        } elseif( isset( $send_result->doubles ) ){
            if( !empty( $send_result->doubles[0]->double ) ){
                $result['api_send_status'] = 'data_false';
            }
        }

        return $result;
    }

    public function sent_data_to_huntflow( $posted_data ){

        $url = 'https://mvideo-api.huntflow.ru/account/2/applicants';
        $params = array();

        if( $posted_data['text-name'] ){
            $full_name = $posted_data['text-name'];
        }
        if( $posted_data['text-name'] ){
            $full_name = $posted_data['text-name'];
        }
        if( $posted_data['text-name2'] ){
            $full_name = $posted_data['text-name2'];
        }
        if( $posted_data['text-name2'] ){
            $full_name = $posted_data['text-name2'];
        }

        $names = explode(" ", $full_name);

        if( '' != $names[0] ){
            $params['first_name'] = $names[0];
        }
        if( '' != $names[1] ){
            $params['last_name'] = $names[1];
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
        if( $posted_data['text-vacancyid'] ){
            $externals_body .= "Название вакансии - ".get_the_title( $posted_data['text-vacancyid'] )."\n";
            $externals_body .= "Ссылка на вакансию - ".get_permalink( $posted_data['text-vacancyid'] )."\n";
        }
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
            $externals_body .= "Дополнительная информация - ".$posted_data["text-341"]."\n";
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
                        "body" => "Новая заявка кандидата\n".$externals_body
                    ],
                    "auth_type" => "NATIVE",
                    "account_source" => 74
                ]
            ];
        }

        $content = json_encode($params);

        $headers = array('Content-Type: application/json', 'Authorization: Bearer 66233397cc55c4714d52a78821c92910634e369cc3abee006304ccf6fb887097');
        
        $result = self::init_post( $headers, $url, $content );
        self::log( $result );

        return json_decode( $result );
    }

    public function sent_data_to_skillaz( $posted_data ){

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
        $result = self::init_post( $headers, $url, $content );
        self::log( $result );

        return json_decode( $result );
    }
}
