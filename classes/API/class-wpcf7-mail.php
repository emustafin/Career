<?php

namespace Career\API;

class WPcf7_Mail extends Boot {

	public function __construct() {

        add_filter( 'wpcf7_feedback_response', [ $this, 'sent_data_to_service' ], 10, 2 );

        add_action( 'wp_ajax_send_hold_form', [$this, 'send_hold_form'] );
		add_action( 'wp_ajax_nopriv_send_hold_form', [$this, 'send_hold_form'] );

        add_action( 'wp_ajax_upload_file', [$this, 'upload_file'] );
		add_action( 'wp_ajax_nopriv_upload_file', [$this, 'upload_file'] );
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
        }
        elseif( in_array( $posted_data['text-vacancyid'], $_SESSION['send_post_id'] ) ){
            $result['api_send_status'] = 'data_false';
            return $response;
        }
        if( 'hold' == $rel_type ){
            $send_result = self::sent_data_to_skillaz( $posted_data, false );
        } elseif( 'it' == $rel_type ){
            $send_result = self::sent_data_to_huntflow( $posted_data, false );
        } elseif( 'roznica' == $rel_type || 'mainpage' == $rel_type ){
            $send_result = self::sent_data_to_skillaz( $posted_data, false );
        } elseif( 'archive' == $rel_type ){
            if( $posted_data['text-vacancyid'] ){
                $relationship_terms = get_the_terms( $posted_data['text-vacancyid'], 'relationship' );
                if( is_array( $relationship_terms ) ){
                    $current_relationship = $relationship_terms[0]->slug;
                }
                if( 'it' == $current_relationship ){
                    $send_result = self::sent_data_to_huntflow( $posted_data, false );
                } else{
                    $send_result = self::sent_data_to_skillaz( $posted_data, false );
                }
            } else{
                $send_result = self::sent_data_to_skillaz( $posted_data, false );
            }
        }
        
        // file_put_contents( 'wp-content/themes/career_theme/classes/API/cf7.json', print_r( $send_result, true ), FILE_APPEND );
        
        $response['api_send_status'] = 'data_sent';
        if( isset( $send_result->IsOk ) ){
            if( false == $send_result->IsOk ){
                $response['api_send_status'] = 'data_false';
            }
        } elseif( isset( $send_result->doubles ) ){
            if( !empty( $send_result->doubles[0]->double ) ){
                $response['api_send_status'] = 'data_false';
            }
        }

        return $response;
    }

    public function sent_data_to_huntflow( $posted_data, $sending ){

        $mail_info = '';
        $url = 'https://mvideo-api.huntflow.ru/account/2/applicants';
        $params = array();

        if( $posted_data['text-name'] ){
            $full_name = $posted_data['text-name'];
        }
        if( $posted_data['holdf_name'] ){
            $full_name = $posted_data['holdf_name'];
        }
        $mail_info .= 'Имя и Фамилия - '.$full_name.'\n';

        $names = explode(" ", $full_name);

        if( '' != $names[0] ){
            $params['first_name'] = $names[0];
        }
        if( '' != $names[1] ){
            $params['last_name'] = $names[1];
        }
        
        if( $posted_data['holdf_tel'] ){
            $params['phone'] = $posted_data['holdf_tel'];
        }
        if( $posted_data['mask-348'] ){
            $params['phone'] = $posted_data['mask-348'];
        }
        $mail_info .= 'Телефон - '.$params['phone'].'\n';

        if( $posted_data['holdf_email'] ){
            $params['email'] = $posted_data['holdf_email'];
        }
        if( $posted_data['email-717'] ){
            $params['email'] = $posted_data['email-717'];
        }
        $mail_info .= 'Email - '.$params['email'].'\n';

        if( $posted_data['holdf_citizenship'] ){
            $params['citizenship'] = 'Гражданство - '.$posted_data['holdf_citizenship'];
        } else{
            $params['citizenship'] = '';
        }
        $mail_info .= 'Гражданство - '.$params['citizenship'].'\n';

        $externals_body = "";
        $account_source = "";
        if( $posted_data['text-vacancyid'] ){
            $externals_body .= "Название вакансии - ".get_the_title( $posted_data['text-vacancyid'] )."\n";
            $externals_body .= "Ссылка на вакансию - ".get_permalink( $posted_data['text-vacancyid'] )."\n";
        }
        if( $posted_data["holdf_town"] ){
            $externals_body .= "Город - ".json_decode( $posted_data["holdf_town"] )[0]->value."\n";
        }
        if( $posted_data["holdf_directions"] ){
            $externals_body .= "Направление - ".json_decode( $posted_data["holdf_directions"] )[0]->value."\n";
        }
        if( $posted_data["holdf_citizenship"] ){
            $externals_body .= "Специализация - ".json_decode( $posted_data["holdf_citizenship"] )[0]->value."\n";
        }
        if( $posted_data["holdf_information"] ){
            $externals_body .= "Дополнительная информация - ".$posted_data["holdf_information"]."\n";
        }
        if( $posted_data["hold_file_array"] ){
            $externals_body .= "Файлы - ".$posted_data["hold_file_array"]."\n";
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
            $mail_info .= 'Доп.Материалы - \n'.$externals_body;
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

        if( true == $sending ){
            self::sending_email( $mail_info );
        }

        return json_decode( $result );
    }

    public function sent_data_to_skillaz( $posted_data, $sending ){

        $choise_url = get_option( 'select_skillaz_url' );
        $idvac_hold_form = get_option( 'idvac_hold_form' );

        $mail_info = '';
        $url = SKILLAZ_URL[$choise_url]['link'].'open-api/objects/candidates';
        $params = array();

        if( 'hold' != $posted_data['text-rel_type'] ){
            $page_type = get_post_type( $posted_data['text-vacancyid'] );
            if( 'vacancies' == $page_type ){
                if( $posted_data['text-vacancyid'] ){
                    $unique_code = get_field( 'unique_code', $posted_data['text-vacancyid'] );
                    if( '' == $unique_code ){
                        $unique_code = $idvac_hold_form;
                    }
                    $params['VacancyId'] = $unique_code;
                } else{
                    $params['VacancyId'] = $idvac_hold_form;
                }
                if( $posted_data['text-sourceurl'] ){
                    $params['SourceUrl'] = $posted_data['text-sourceurl'];
                } else{
                    $params['SourceUrl'] = 'https://job.mvideoeldorado.ru/shop/vacancy/3679';
                }
            }  else{
                $params['VacancyId'] = $idvac_hold_form;
                $params['SourceUrl'] = 'https://job.mvideoeldorado.ru/shop/vacancy/3679';
            }
        } else{
            $params['VacancyId'] = $idvac_hold_form;
            $params['SourceUrl'] = 'https://job.mvideoeldorado.ru/shop/vacancy/3679';
        }
        $mail_info .= 'VacancyId - '.$params['VacancyId'].'\n';
        $mail_info .= 'SourceUrl - '.$params['SourceUrl'].'\n';
        $params['BirthDate'] = '1999-03-03T00:00:00'; //надо обсудить, пока заглушка
        $params['Source'] = 'CorporatePortal'; //надо обсудить, пока заглушка
        $params['AddWay'] = 'negotiation'; //надо обсудить, пока заглушка
        $params['Comment'] = 'Отклик пришел в Магазин № E181, ул.Телевизорная д.1.'; //надо обсудить, пока заглушка

        if( $posted_data['text-name'] ){
            $params['FirstName'] = $posted_data['text-name'];
        } elseif( $posted_data['holdf_name'] ){
            $params['FirstName'] = $posted_data['holdf_name'];
        } else{
            $params['FirstName'] = 'Тест1';
        }
        if( $posted_data['text-name'] ){
            $params['LastName'] = $posted_data['text-name'];
        } else{
            $params['LastName'] = 'Тест1';
        }
        $mail_info .= 'Имя и Фамилия - '.$params['FirstName'].' '.$params['LastName'].'\n';

        if( $posted_data['text-name'] ){
            $params['MiddleName'] = '';
        } else{
            $params['MiddleName'] = '';
        }
        if( $posted_data['holdf_tel'] ){
            $params['PhoneNumber'] = $posted_data['holdf_tel'];
        } else{
            $params['PhoneNumber'] = '+7 (999) 992-9999';
        }
        if( $posted_data['mask-348'] ){
            $params['PhoneNumber'] = $posted_data['mask-348'];
        } else{
            $params['PhoneNumber'] = '+7 (999) 992-9999';
        }
        $mail_info .= 'Телефон - '.$params['PhoneNumber'].'\n';

        if( $posted_data['holdf_email'] ){
            $params['Email'] = $posted_data['holdf_email'];
        } else{
            $params['Email'] = 'test-email1@skillaz.ru';
        }
        if( $posted_data['email-717'] ){
            $params['Email'] = $posted_data['email-717'];
        } else{
            $params['Email'] = 'test-email1@skillaz.ru';
        }
        $mail_info .= 'Email - '.$params['Email'].'\n';

        if( $posted_data['holdf_citizenship'] ){
            $params['Citizenship'] = 'Гражданство - '.$posted_data['holdf_citizenship'];
        } else{
            $params['Citizenship'] = '';
        }
        $mail_info .= 'Гражданство - '.$params['citizenship'].'\n';

        // -----another_params---------
            $externals_body = "";
            $account_source = "";
            if( $posted_data["holdf_town"] ){
                $externals_body .= "Город - ".json_decode( $posted_data["holdf_town"] )[0]->value."\n";
            }
            if( $posted_data["holdf_directions"] ){
                $externals_body .= "Направление - ".json_decode( $posted_data["holdf_directions"] )[0]->value."\n";
            }
            if( $posted_data["holdf_citizenship"] ){
                $externals_body .= "Специализация - ".json_decode( $posted_data["holdf_citizenship"] )[0]->value."\n";
            }
            if( $posted_data["holdf_information"] ){
                $externals_body .= "Дополнительная информация - ".$posted_data["holdf_citizenship"]."\n";
            }
            if( $posted_data["hold_file_array"] ){
                $externals_body .= "Файлы - ".$posted_data["hold_file_array"]."\n";
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
                $mail_info .= 'Доп.Материалы - '.$externals_body.'\n';
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

        $headers = array('Content-Type: application/json', SKILLAZ_URL[$choise_url]['key']);
        $result = self::init_post( $headers, $url, $content );
        self::log( $result );

        if( true == $sending ){
            self::sending_email( $mail_info );
        }

        return json_decode( $result );
    }

    public function send_hold_form() {

        $result = false;
        if( !empty($_POST) ){

            if( $_POST['rel_type'] ){
                $rel_type = $_POST['rel_type'];
            }
    
            if( 'hold' != $rel_type ){
                if( empty( $_SESSION['send_post_id'] ) ){
                    $_SESSION['send_post_id'] = array( (int) $_POST['text-vacancyid'] );
                } elseif( !in_array( $_POST['text-vacancyid'], $_SESSION['send_post_id'] ) ){
                    $_SESSION['send_post_id'][] = (int) $_POST['text-vacancyid'];
                }
                elseif( in_array( $_POST['text-vacancyid'], $_SESSION['send_post_id'] ) ){
                    $return = array(
                        'success' 	=> false,
                    );
            
                    wp_send_json($return);
    
                    return false;
                }
            }

            if( 'hold' == $rel_type ){
                $send_result = self::sent_data_to_skillaz( $_POST, true );
            } elseif( 'it' == $rel_type ){
                $send_result = self::sent_data_to_huntflow( $_POST, true );
            } elseif( 'roznica' == $rel_type || 'mainpage' == $rel_type ){
                $send_result = self::sent_data_to_skillaz( $_POST, true );
            } elseif( 'archive' == $rel_type ){
                if( $_POST['text-vacancyid'] ){
                    $relationship_terms = get_the_terms( $_POST['text-vacancyid'], 'relationship' );
                    if( is_array( $relationship_terms ) ){
                        $current_relationship = $relationship_terms[0]->slug;
                    }
                    if( 'it' == $current_relationship ){
                        $send_result = self::sent_data_to_huntflow( $_POST, true );
                    } else{
                        $send_result = self::sent_data_to_skillaz( $_POST, true );
                    }
                } else{
                    $send_result = self::sent_data_to_skillaz( $_POST, true );
                }
            }

            if( isset( $send_result->IsOk ) ){
                if( false == $send_result->IsOk ){
                    $result = false;
                } else{
                    $result = true;
                }
            } elseif( isset( $send_result->doubles ) ){
                if( !empty( $send_result->doubles[0]->double ) ){
                    $result = false;
                } else{
                    $result = true;
                }
            } else{
                $result = true;
            }
        }

        $return = array(
            'success' 	=> $result,
        );

        wp_send_json($return);

    }

    public function sending_email( $content ) {
        
        $headers = 'From: admin@career.com'       . "\r\n" .
            'Reply-To: '. get_option( 'admin_email' ) . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        file_put_contents( 'wp-content/themes/career_theme/classes/API/email-sending.json', print_r( $content, true ), FILE_APPEND );
        
		wp_mail( get_option( 'admin_email' ), 'Анкета', $content, $headers);
	}
    
    public function upload_file() {

        $link = '';

        $valid_formats = array("pdf", "doc", "docx", "rtf"); // Supported file types
        $max_file_size = 1024 * 5000; // in kb
        $wp_upload_dir = wp_upload_dir();
        $path = $wp_upload_dir['path'] . '/';

        $extension = pathinfo( $_POST['name'], PATHINFO_EXTENSION );

        if ( $_FILES['hold_file']['error'] == 0 ) {
            // Check if image size is larger than the allowed file size
            if ( $_FILES['hold_file']['size'] > $max_file_size ) {
                // is too large!
                $result = false;
        
            // Check if the file being uploaded is in the allowed file types
            } elseif( ! in_array( strtolower( $extension ), $valid_formats ) ){
                // is not a valid format
                $result = false;
        
            } else{
                require_once( ABSPATH . 'wp-admin/includes/file.php' );

                $overrides = [ 'test_form' => false ];

                $movefile = wp_handle_upload( $_FILES["hold_file"], $overrides );

                if ( $movefile && empty($movefile['error']) ) {
                    $link = $movefile['url'];
                    $path_parts = pathinfo($link);
                    $filename = $path_parts['filename'];
                    $result = true;
                } else {
                    $result = false;
                }
            }
        }

        $return = array(
            'success' 	=> $result,
            'filename'  => $filename,
            'link'      => $link
        );

        wp_send_json($return);

    }
}
