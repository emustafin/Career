<?php
/**
 * Init CPT Supporting functions
 *
 * @package Career\CPT
 */

namespace Career\CPT;

class Supporting {

    /**
	 * Constructor. Initializes class autoloading.
	 */
	public function __construct() {

        
	}

    /**
	 * Проверяет не пустой ли параметр в GET запросе
	 */
    public function NotEmptyGetParam( $param ){
        return !empty($_GET) && !empty($_GET[ $param ]) && null != $_GET[ $param ];
    }

    /**
	 * 
	 */
	public function get_specialization_data( $specialization_terms, $GET ) {
        
        $first_specialization = '';
        $specialization_slug = '';

        foreach ($specialization_terms as $specialization_term) {
            $first_specialization = $specialization_term;
            $specialization_slug = $specialization_term->slug;
            break;
        }

        if( empty($_GET) ){
            if( $this->NotEmptyGetParam('specialization_slug') ) 
            $specialization_slug = $GET['specialization_slug'];
        }
        
        return array( 'first_specialization' => $first_specialization, 'specialization_slug' => $specialization_slug );
	}
    
    /**
	 * 
	 */
    public function get_filter_params( $GET ) {

        $params = array(
            'town_slug' => '',
            'level_slug' => '',
            'can_work_remotely' => '',
            'can_without_experience' => '',
        );

        if( $this->NotEmptyGetParam('town_slug') )                 
            $params['town_slug'] = $GET['town_slug'];

        if( $this->NotEmptyGetParam('level_slug') )                
            $params['level_slug'] = $GET['level_slug'];

        if( $this->NotEmptyGetParam('can_work_remotely') )         
            $params['can_work_remotely'] = 'checked';

        if( $this->NotEmptyGetParam('can_without_experience') && true == $GET['can_without_experience'] ) 
            $params['can_without_experience'] = 'checked';

        return $params;
    }
}