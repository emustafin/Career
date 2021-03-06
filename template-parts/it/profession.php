<!--  Profession  -->
<?php
$vaccat_terms = get_terms( 'vaccat', 'meta_key=type_vaccat&meta_value='.$rel_type );
$town_terms = get_terms( 'town' );
$level_terms = get_terms( 'level' );

if( !empty($vaccat_terms) ){
  foreach ($vaccat_terms as $vaccat_term) {
      $first_vaccat = $vaccat_term;
      $vaccat_slug = $vaccat_term->slug;
      break;
  }
  
  $town_slug = '';
  $level_slug = '';
  $can_work_remotely = '';
  $can_without_experience = '';

  if( NotEmptyGetParam('vaccat_slug') )               $vaccat_slug = $_GET['vaccat_slug'];
  if( NotEmptyGetParam('town_slug') )                 $town_slug = $_GET['town_slug'];
  if( NotEmptyGetParam('level_slug') )                $level_slug = $_GET['level_slug'];
  if( NotEmptyGetParam('can_work_remotely') )         $can_work_remotely = 'checked';
  if( NotEmptyGetParam('can_without_experience') && true == $_GET['can_without_experience'] ) $can_without_experience = 'checked';

  $profession__title = '';
?>
<section class="profession">
    <div class="container">
        <div id="vaccat_items" class="profession__header">
            <p class="profession__question">Что подходит тебе?</p>
            
            <?php if( $vaccat_terms && ! is_wp_error($vaccat_terms) ): ?>
              <nav class="profession__menu">
                <?php foreach( $vaccat_terms as $vaccat_term ):

                    $profession__technology = '';
                    if( get_field( 'vaccat_tehnologies', $vaccat_term ) ){
                        foreach (get_field( 'vaccat_tehnologies', $vaccat_term ) as $tech) {
                            $profession__technology .= '<div class="profession__technology-item '.$tech['value'].'">'.$tech['label'].'</div>';
                        }
                    }

                    $vaccat_data = array(
                        'profession__description'   => term_description( $vaccat_term->term_id, 'vaccat' ),
                        'profession__tehnology'     => $profession__technology,
                        'profession__permalink'     => get_term_link( $vaccat_term->term_id, 'vaccat'),
                        'profession__count'         => $vaccat_term->count,
                        'profession__img'           => get_field( 'vaccat_img', $vaccat_term )
                    );
                    
                    $active_class = '';

                    if( $vaccat_term->slug == $vaccat_slug ){
                        $active_class = 'profession__menu-item-active';
                        $profession__title = $vaccat_term->name;
                    }
                    ?>

                    <span 
                        data-vaccat_info='<?php echo json_encode($vaccat_data); ?>' 
                        data-vaccat_slug="<?php echo $vaccat_term->slug; ?>" 
                        class="cursor-pointer profession__menu-item <?php echo $active_class; ?>"
                    >
                        <?php echo $vaccat_term->name; ?>
                    </span>

                <?php endforeach; ?>
              </nav>
            <?php endif; ?>
        </div>

        <h2 class="profession__title"><?php echo $profession__title; ?></h2>

        <div class="profession__content">
            <div class="profession__side-bar">
              <?php if( null != $first_vaccat ){ ?>
                <div class="profession__side-bar-text-wrapper">
                    <div id="profession__description" class="profession__side-bar-text">
                        <?php echo term_description( $first_vaccat->term_id, 'vaccat' ); ?>
                    </div>
                    <p class="profession__side-bar-text">Мы используем</p>
                    <div id="profession__tehnology" class="profession__side-bar-image-tools-wrapper">
                        <?php if( get_field( 'vaccat_tehnologies', $first_vaccat ) != null ):
                            foreach (get_field( 'vaccat_tehnologies', $first_vaccat ) as $tech) : ?>
                            <div class="profession__technology-item <?php echo $tech['value']; ?>"><?php echo $tech['label']; ?></div>
                        <?php  endforeach; 
                          endif;?>
                    </div>

                    <!-- 
                        <a id="profession__permalink_mob" href="<?php echo get_term_link( $first_vaccat->term_id, 'vaccat'); ?>" class="profession__side-bar-vacancy-mobile">
                            <span id="profession__count_mob" class="profession__side-bar-vacancy-value"><?php echo $first_vaccat->count; ?></span>
                            вакансии в
                            <span class="profession__side-bar-vacancy-value">
                                Менеджменте
                            </span>
                            <span class="profession__side-bar-vacancy-value-arrow">
                                <svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.5515 4.39995L8.57574 1.42421L9.42426 0.575684L13.8485 4.99995L9.42426 9.42421L8.57574 8.57568L11.5515 5.59995H0V4.39995H11.5515Z" fill="black"/>
                                </svg>
                            </span>
                        </a> 
                    -->
                </div>

                <!-- 
                    <a id="profession__permalink" href="<?php echo get_term_link( $first_vaccat->term_id, 'vaccat'); ?>" class="profession__side-bar-vacancy">
                        <span id="profession__count" class="profession__side-bar-vacancy-value"><?php echo $first_vaccat->count; ?></span>
                        вакансии в
                        <span class="profession__side-bar-vacancy-value">
                        Менеджменте
                        </span>
                        <span class="profession__side-bar-vacancy-value-arrow">
                            <svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.5515 4.39995L8.57574 1.42421L9.42426 0.575684L13.8485 4.99995L9.42426 9.42421L8.57574 8.57568L11.5515 5.59995H0V4.39995H11.5515Z" fill="black"/>
                            </svg>
                        </span>
                    </a> 
                -->

                <div class="profession__side-bar-image-wrapper loading">
                    <img id="profession__img" class="profession__side-bar-image" data-src="<?php echo get_field( 'vaccat_img', $first_vaccat ); ?>" alt="management" title="Профессии" src="<?php echo THEME_URL; ?>/assets/images/Lazy-loading/1x1.png" width="1000" height="563"/>
                </div>
                <?php } ?>
            </div>

            <div class="profession__main-content">
              <?php if( null != $first_vaccat ){ ?>
                <div class="profession__filter-wrapper">
                  <div class="profession__filter-item">
                    <p class="profession__filter-item-title">Уровень</p>
                    <div class="profession__filter-item-select">
                        <!-- 
                        <select name="level" id="level">
                            <option value="-1">Выберите уровень</option>

                            <?php $level_arr = array( '-1' => 'Любой' );
                            foreach( $level_terms as $level_term ):
                                $selected = '';
                                $level_arr[$level_term->slug] = $level_term->name;
                                if( $level_slug == $level_term->slug ) $selected = 'selected'; ?>
                                <option value="<?php echo $level_term->slug; ?>" <?php echo $selected; ?>><?php echo $level_term->name; ?></option>
                            <?php endforeach; ?>

                        </select>
                          -->
                          
                          <input type="hidden" id="level" value="-1"/>
                          <input
                            class="selectMode profession__level-select"
                            name="tags-select-mode"
                            placeholder="Выбери уровень"
                            value=""
                        />

                        <div class="profession__filter-item-select-arrow">
                            <svg
                            class="profession__filter-item-select-arrow-image"
                            width="10"
                            height="10"
                            viewBox="0 0 10 10"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                            >
                            <path
                                d="M5.58286 7.56905V0.925293H4.38286V7.53389L1.4247 4.57574L0.576172 5.42426L4.22262 9.07071C4.65219 9.50029 5.34868 9.50029 5.77825 9.07071L9.4247 5.42426L8.57617 4.57574L5.58286 7.56905Z"
                                fill="black"
                            />
                            </svg>
                        </div>


                        <script>
                            var levels = '<?php echo json_encode( $level_arr ); ?>';
                        </script>
                        <!-- 
                            <p class="profession__filter-item-select-value">
                            Junior, Senior
                            </p>
                            <div class="profession__filter-item-select-arrow">
                            <img
                                class="profession__filter-item-select-arrow-image"
                                src="<?php echo THEME_URL; ?>/assets/images/arrows/arrow-bottom.svg"
                                alt="arrow-bottom"
                            />
                            </div>
                            <div class="profession__filter-item-select-list hide">
                                <p class="profession__filter-item-select-list-item">
                                    Junior, Senior
                                </p>
                                <p class="profession__filter-item-select-list-item">Lead</p>
                                <p class="profession__filter-item-select-list-item">
                                    Middle
                                </p>
                            </div> 
                        -->
                    </div>

                    <label class="profession__filter-checbox-wrapper-mobile">
                        <input class="profession__filter-input can_without_experience" type="checkbox" <?php echo $can_without_experience; ?>/>
                        Без опыта
                        <span class="profession__filter-checbox-value">
                            <svg
                                width="16"
                                height="16"
                                viewBox="0 0 16 16"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                                >
                                <path
                                    d="M12.5 5L6.5 11L3.5 8"
                                    stroke="black"
                                    stroke-width="1.2"
                                />
                            </svg>
                        </span>
                    </label>
                  </div>

                  <div class="profession__filter-item">
                    <p class="profession__filter-item-title">Город</p>
                    <div class="profession__filter-item-select">
                        <!-- 
                        <select name="town" id="town">
                            <option value="-1">Выберите город</option>
                            <?php $towns_array = array( '-1' => 'Любой' );
                            foreach( $town_terms as $town_term ):
                                $towns_array[$town_term->slug] = $town_term->name;
                                if( $town_slug == $town_term->slug ) $selected = 'selected'; ?>
                                    <option value="<?php echo $town_term->slug; ?>" <?php echo $selected; ?>><?php echo $town_term->name; ?></option>
                            <?php endforeach; ?>
                        </select>
                          -->

                          <input type="hidden" id="town" value="-1"/>
                          <input
                            name="tags-select-mode"
                            class="selectMode profession__city-select"
                            placeholder="Выбери город"
                            value=""
                        />
                        <div class="profession__filter-item-select-arrow">
                            <svg
                            class="profession__filter-item-select-arrow-image"
                            width="10"
                            height="10"
                            viewBox="0 0 10 10"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                            >
                            <path
                                d="M5.58286 7.56905V0.925293H4.38286V7.53389L1.4247 4.57574L0.576172 5.42426L4.22262 9.07071C4.65219 9.50029 5.34868 9.50029 5.77825 9.07071L9.4247 5.42426L8.57617 4.57574L5.58286 7.56905Z"
                                fill="black"
                            />
                            </svg>
                        </div>

                        <script>
                            var towns = '<?php echo json_encode( $towns_array ); ?>';
                        </script>
                        <!-- 
                            <p class="profession__filter-item-select-value">Любой</p>
                            <div class="profession__filter-item-select-arrow">
                            <img
                                class="profession__filter-item-select-arrow-image"
                                src="<?php echo THEME_URL; ?>/assets/images/arrows/arrow-bottom.svg"
                                alt="arrow-bottom"
                            />
                            </div>
                            <div class="profession__filter-item-select-list hide">
                            <p class="profession__filter-item-select-list-item">
                                Любой
                            </p>
                            <p class="profession__filter-item-select-list-item">
                                Москва
                            </p>
                            <p class="profession__filter-item-select-list-item">
                                Санкт-Петербург
                            </p>
                            </div> 
                        -->
                    </div>

                    <label class="profession__filter-checbox-wrapper-mobile">
                        <input class="profession__filter-input can_work_remotely" type="checkbox" <?php echo $can_work_remotely; ?>/>
                        Удалённо
                        <span class="profession__filter-checbox-value">
                        <svg
                            width="16"
                            height="16"
                            viewBox="0 0 16 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                            >
                            <path
                                d="M12.5 5L6.5 11L3.5 8"
                                stroke="black"
                                stroke-width="1.2"
                            />
                        </svg>
                        </span>
                    </label> 
                  </div>

                  <div class="profession__checkbox-container">
                    <label class="profession__filter-checbox-wrapper">
                      <input class="profession__filter-input can_work_remotely" type="checkbox" <?php echo $can_work_remotely; ?>/>
                      Удалённо
                      <span class="profession__filter-checbox-value">
                      <svg
                          width="16"
                          height="16"
                          viewBox="0 0 16 16"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                          >
                          <path
                              d="M12.5 5L6.5 11L3.5 8"
                              stroke="black"
                              stroke-width="1.2"
                          />
                      </svg>
                      </span>
                    </label>

                    <label class="profession__filter-checbox-wrapper">
                        <input class="profession__filter-input can_without_experience" type="checkbox"  <?php echo $can_without_experience; ?>/>
                        Без опыта
                        <span class="profession__filter-checbox-value">
                        <svg
                            width="16"
                            height="16"
                            viewBox="0 0 16 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                            >
                            <path
                                d="M12.5 5L6.5 11L3.5 8"
                                stroke="black"
                                stroke-width="1.2"
                            />
                        </svg>
                        </span>
                    </label>
                  </div>

                  <div id="clear_all_filters" class="cursor-pointer profession__filter-reset">Сбросить фильтры</div>
                </div>
              <?php } ?>

              <div id="actually_vacancies" class="profession__job-wrapper">

                  <?php                    
                      $args = array(
                          'post_type'         => 'vacancies',
                          'posts_per_page'    => -1,
                          'post_status'       => 'publish',
                          'relationship'      => $rel_type
                      );

                      if( '' != $vaccat_slug ){
                          $args['tax_query'][] = array(
                              'taxonomy' => 'vaccat',
                              'field'    => 'slug',
                              'terms'    => $vaccat_slug
                          );
                      }

                      if( '' != $town_slug ){
                          $args['tax_query'][] = array(
                              'taxonomy' => 'town',
                              'field'    => 'slug',
                              'terms'    => $town_slug
                          );
                      }

                      if( '' != $level_slug ){
                          $args['tax_query'][] = array(
                              'taxonomy' => 'level',
                              'field'    => 'slug',
                              'terms'    => $level_slug
                          );
                      }

                      if( $can_without_experience == true ){
                          $args['meta_query'] = 
                          array(
                              'relation'		=> 'AND',
                              array(
                                  'key'		=> 'can_without_experience',
                                  'value'		=> 'can_without_experience',
                                  'compare'	=> '='
                              )
                          );
                      }

                      $actually_vacancies = new WP_Query( $args );

                      $town_titles = array('Любой');

                      if ( $actually_vacancies->have_posts() ) {
                          while ( $actually_vacancies->have_posts() ) {

                            $actually_vacancies->the_post();
                            $vacancy_item_id = get_the_ID();
                            include(THEME_DIR . '/template-parts/loop-parts/actually_vacancy_item.php');

                          }
                      } else {
                          echo 'Вакансий не найдено';
                      }
                      wp_reset_postdata();
                  ?>
                  <script>
                    // town_titles = JSON.parse('<?php echo json_encode( $town_titles ); ?>');
                  </script>
                  <!-- <a href="#" class="profession__show-more">Показать <span class="profession__show-more-number">6</span> вакансий +</a> -->
              </div>
            </div>
        </div>
    </div>

    <!--  SVG images  -->
    <svg style="display: none">
      <g id="icon-jira">
        <path
          d="M22.254 11.3999L12.9 2.06992L12 1.16992L4.97396 8.19592L1.75797 11.3999C1.67805 11.4796 1.61465 11.5743 1.57139 11.6786C1.52813 11.7828 1.50586 11.8946 1.50586 12.0074C1.50586 12.1203 1.52813 12.232 1.57139 12.3363C1.61465 12.4405 1.67805 12.5352 1.75797 12.6149L8.18396 19.0529L12 22.8749L19.041 15.8429L19.149 15.7349L22.254 12.6269C22.3357 12.547 22.4006 12.4516 22.445 12.3462C22.4893 12.2409 22.5121 12.1277 22.5121 12.0134C22.5121 11.8991 22.4893 11.786 22.445 11.6806C22.4006 11.5753 22.3357 11.4798 22.254 11.3999ZM12 15.2309L8.78996 12.0209L12 8.81092L15.21 12.0209L12 15.2309Z"
          fill="#2684FF"
        />
        <path
          d="M12.0009 8.8112C10.996 7.79956 10.4321 6.43157 10.4321 5.0057C10.4321 3.57982 10.996 2.21183 12.0009 1.2002L4.96289 8.2112L8.78489 12.0332L12.0009 8.8112Z"
          fill="url(#paint0_linear)"
        />
        <path
          d="M15.225 12L12 15.231C12.5025 15.7326 12.9012 16.3283 13.1732 16.9841C13.4452 17.64 13.5853 18.343 13.5853 19.053C13.5853 19.763 13.4452 20.466 13.1732 21.1219C12.9012 21.7777 12.5025 22.3734 12 22.875L19.05 15.834L15.225 12Z"
          fill="url(#paint1_linear)"
        />
      </g>

      <g id="icon-confluence">
        <path
          d="M2.81089 17.0252C2.60689 17.3582 2.37589 17.7482 2.19289 18.0572C2.11273 18.1975 2.08952 18.3632 2.12804 18.52C2.16656 18.6769 2.26389 18.813 2.39989 18.9002L6.50089 21.4322C6.572 21.4763 6.65116 21.5057 6.73377 21.5189C6.81638 21.532 6.90078 21.5286 6.98205 21.5087C7.06331 21.4889 7.13981 21.4531 7.20709 21.4034C7.27436 21.3537 7.33107 21.2911 7.37389 21.2192C7.53889 20.9432 7.74889 20.5862 7.97389 20.2052C9.59989 17.5352 11.2469 17.8622 14.1899 19.2632L18.2579 21.1952C18.3341 21.2317 18.4168 21.2525 18.5012 21.2564C18.5856 21.2602 18.67 21.2471 18.7492 21.2177C18.8284 21.1883 18.9009 21.1433 18.9623 21.0853C19.0238 21.0273 19.0729 20.9576 19.1069 20.8802L21.0599 16.4702C21.1262 16.3206 21.1321 16.1511 21.0761 15.9973C21.0202 15.8434 20.9069 15.7173 20.7599 15.6452C19.9019 15.2402 18.1949 14.4452 16.6649 13.6952C11.0999 11.0072 6.40489 11.1842 2.81089 17.0252Z"
          fill="grey"
        />
        <path
          d="M21.2004 7.00175C21.4074 6.66875 21.6384 6.27875 21.8184 5.96975C21.9019 5.82714 21.9258 5.65731 21.8848 5.49719C21.8438 5.33707 21.7412 5.19963 21.5994 5.11475L17.5044 2.58275C17.4333 2.53869 17.3541 2.50924 17.2715 2.4961C17.1889 2.48296 17.1045 2.48641 17.0232 2.50624C16.942 2.52606 16.8655 2.56187 16.7982 2.61158C16.7309 2.66129 16.6742 2.7239 16.6314 2.79575C16.4694 3.07175 16.2564 3.42875 16.0314 3.80975C14.3994 6.49175 12.7674 6.16475 9.82138 4.76375L5.75638 2.83175C5.6811 2.79478 5.59919 2.77322 5.51547 2.76833C5.43174 2.76343 5.34788 2.7753 5.2688 2.80325C5.18973 2.83119 5.11703 2.87464 5.05496 2.93105C4.9929 2.98746 4.94272 3.05569 4.90738 3.13175L2.95438 7.55375C2.88711 7.70371 2.8808 7.87395 2.93679 8.02847C2.99277 8.183 3.10667 8.30969 3.25438 8.38175C4.11538 8.78675 5.82238 9.58175 7.34938 10.3318C12.8994 13.0198 17.6094 12.8428 21.2004 7.00175Z"
          fill="grey"
        />
      </g>

      <g id="icon-google-docs">
        <path
          d="M4.275 24H19.9125C20.4096 24 20.8125 23.5971 20.8125 23.1V5.90625L14.9062 0H4.275C3.77794 0 3.375 0.402944 3.375 0.900001V23.1C3.375 23.5971 3.77794 24 4.275 24Z"
          fill="#3086F6"
        />
        <path d="M14.9062 5.90625V0L20.8125 5.90625H14.9062Z" fill="#0C67D6" />
        <rect x="7.125" y="9.1875" width="9.9375" height="1.5" fill="#FDFFFF" />
        <rect x="7.125" y="12.375" width="9.9375" height="1.5" fill="#FDFFFF" />
        <rect x="7.125" y="15.5625" width="7.125" height="1.5" fill="#FDFFFF" />
      </g>

      <g id="icon-sap">
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M0 17.7391H11.9932L23.7303 6H0V17.7391Z"
          fill="grey"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M14.083 8.34794H11.7394L11.7472 13.8601L9.70641 8.34612H7.68285L5.94076 12.9512C5.75554 11.7794 4.54406 11.3751 3.59085 11.0722C2.96137 10.87 2.29328 10.5726 2.30006 10.2439C2.30528 9.9742 2.65746 9.72403 3.35737 9.76133C3.82693 9.78664 4.24172 9.82446 5.06685 10.2231L5.87815 8.80916C5.1258 8.4262 4.08546 8.18438 3.23241 8.18359H3.22719C2.2325 8.18359 1.40424 8.50577 0.890847 9.03664C0.532934 9.40707 0.339891 9.8782 0.332065 10.3992C0.319021 11.116 0.581717 11.6242 1.13372 12.0304C1.60015 12.3721 2.19676 12.5939 2.72241 12.7566C3.37067 12.9575 3.90024 13.1323 3.89372 13.5043C3.8885 13.6399 3.83737 13.7667 3.7398 13.869C3.57806 14.0359 3.33024 14.0985 2.98719 14.1053C2.32537 14.1194 1.83493 14.0153 1.05337 13.5533L0.331543 14.9855C1.11233 15.4295 1.94111 15.6523 2.88285 15.6523L3.09467 15.6507C3.91432 15.6359 4.57954 15.4394 5.10806 15.0142C5.13832 14.9899 5.16545 14.9654 5.19363 14.9406L5.10493 15.3977L7.08232 15.3914L7.43711 14.4831C7.81015 14.6104 8.23432 14.6808 8.68458 14.6808C9.12337 14.6808 9.53606 14.614 9.90206 14.494L10.1494 15.3914L13.6972 15.3948L13.7058 13.324H14.4608C16.2855 13.324 17.3642 12.3953 17.3642 10.8379C17.3637 9.10342 16.315 8.34794 14.083 8.34794ZM8.68458 13.0598C8.41198 13.0598 8.15632 13.0123 7.93641 12.9288L8.67624 10.5927H8.69058L9.41841 12.9353C9.19928 13.0136 8.94963 13.0598 8.68432 13.0598H8.68458ZM14.2202 11.7176H13.7053V9.8349H14.2205C14.9066 9.8349 15.4544 10.0634 15.4544 10.7641C15.4539 11.4893 14.9066 11.7176 14.2205 11.7176"
          fill="white"
        />
      </g>

      <g id="icon-slack">
        <path
          d="M8.7608 0.0595703C7.4412 0.0595703 6.3716 1.13157 6.3716 2.45357C6.37128 2.76764 6.43283 3.0787 6.55273 3.36898C6.67263 3.65926 6.84853 3.92309 7.07039 4.14539C7.29224 4.36769 7.55571 4.54412 7.84576 4.6646C8.1358 4.78508 8.44673 4.84726 8.7608 4.84757H11.1504V2.45357C11.1509 1.81924 10.8995 1.21068 10.4514 0.761726C10.0032 0.312776 9.39513 0.0602065 8.7608 0.0595703ZM8.7608 6.44357H2.3892C1.0696 6.44357 0 7.51557 0 8.83797C0 10.16 1.0696 11.232 2.3892 11.232H8.7612C10.0804 11.232 11.1504 10.16 11.1504 8.83797C11.1504 7.51557 10.0804 6.44357 8.7608 6.44357Z"
          fill="#36C5F0"
        />
        <path
          d="M23.8936 8.83797C23.8936 7.51557 22.8236 6.44357 21.504 6.44357C20.1844 6.44357 19.1148 7.51557 19.1148 8.83797V11.232H21.504C22.1383 11.2313 22.7464 10.9788 23.1945 10.5298C23.6426 10.0809 23.8941 9.4723 23.8936 8.83797ZM17.522 8.83797V2.45357C17.5225 1.81924 17.271 1.21068 16.8229 0.761726C16.3748 0.312776 15.7667 0.0602065 15.1324 0.0595703C13.8128 0.0595703 12.7432 1.13157 12.7432 2.45357V8.83757C12.7432 10.1604 13.8128 11.2324 15.1324 11.2324C15.7667 11.2317 16.3748 10.9792 16.8229 10.5302C17.271 10.0813 17.5225 9.4727 17.522 8.83837"
          fill="#2EB67D"
        />
        <path
          d="M15.1324 24.0005C15.7667 23.9999 16.3748 23.7473 16.8229 23.2984C17.271 22.8494 17.5225 22.2409 17.522 21.6065C17.5225 20.9722 17.271 20.3636 16.8229 19.9147C16.3748 19.4657 15.7667 19.2132 15.1324 19.2125H12.7432V21.6065C12.7432 22.9285 13.8128 24.0005 15.1324 24.0005ZM15.1324 17.6165H21.5044C22.8236 17.6165 23.8936 16.5445 23.8936 15.2221C23.8941 14.5878 23.6426 13.9792 23.1945 13.5303C22.7464 13.0813 22.1383 12.8288 21.504 12.8281H15.1324C13.8128 12.8281 12.7432 13.9001 12.7432 15.2221C12.7428 15.5362 12.8044 15.8473 12.9243 16.1375C13.0442 16.4278 13.2201 16.6916 13.442 16.9139C13.6638 17.1362 13.9273 17.3127 14.2173 17.4332C14.5074 17.5536 14.8183 17.6158 15.1324 17.6161"
          fill="#ECB22E"
        />
        <path
          d="M1.20553e-06 15.2221C-0.000314125 15.5362 0.0612342 15.8473 0.181132 16.1375C0.30103 16.4278 0.476929 16.6916 0.698787 16.9139C0.920645 17.1362 1.18412 17.3127 1.47416 17.4332C1.7642 17.5536 2.07513 17.6158 2.3892 17.6161C3.02353 17.6155 3.63163 17.3629 4.07976 16.914C4.52788 16.465 4.77933 15.8565 4.7788 15.2221V12.8281H2.3892C1.0696 12.8281 1.20553e-06 13.9001 1.20553e-06 15.2221ZM6.3716 15.2221V21.6061C6.3716 22.9285 7.4412 24.0005 8.7608 24.0005C9.39513 23.9999 10.0032 23.7473 10.4514 23.2984C10.8995 22.8494 11.1509 22.2409 11.1504 21.6065V15.2221C11.1507 14.908 11.0892 14.5969 10.9692 14.3066C10.8493 14.0163 10.6734 13.7525 10.4515 13.5302C10.2296 13.3079 9.96606 13.1314 9.67597 13.011C9.38588 12.8905 9.07491 12.8284 8.7608 12.8281C7.4412 12.8281 6.3716 13.9001 6.3716 15.2221Z"
          fill="#E01E5A"
        />
      </g>

      <g id="icon-miro">
        <path
          d="M0.299988 3.95605C0.299988 1.93676 1.93695 0.299805 3.95624 0.299805H20.0437C22.0631 0.299805 23.7 1.93676 23.7 3.95605V20.0436C23.7 22.0629 22.0631 23.6998 20.0437 23.6998H3.95624C1.93695 23.6998 0.299988 22.0629 0.299988 20.0436V3.95605Z"
          fill="#FFD02F"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M16.4835 3.22461H13.9152L16.0555 6.98531L11.347 3.22461H8.77865L11.1329 7.82106L6.21034 3.22461H3.64206L6.21034 9.07461L3.64206 20.7746H6.21034L11.1329 8.23891L8.77865 20.7746H11.347L16.0555 7.40316L13.9152 20.7746H16.4835L21.1921 6.14961L16.4835 3.22461Z"
          fill="#050038"
        />
      </g>

      <g id="icon-gradle">
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M22.428 4.38706C21.7479 3.70663 20.8301 3.317 19.8682 3.30036C18.9063 3.28372 17.9755 3.64138 17.2723 4.29788C17.2375 4.33065 17.2096 4.36996 17.1901 4.41355C17.1707 4.45715 17.16 4.50416 17.1588 4.55189C17.1593 4.64789 17.1971 4.73993 17.2641 4.8086L17.7262 5.28689C17.7865 5.34691 17.8664 5.38322 17.9512 5.38917C18.0361 5.39513 18.1202 5.37033 18.1883 5.31932C18.5548 5.0427 19.0018 4.89369 19.461 4.89507C19.8823 4.89323 20.2946 5.0167 20.6455 5.24978C20.9964 5.48287 21.2701 5.81503 21.4317 6.20406C21.5933 6.59308 21.6356 7.02138 21.5532 7.4345C21.4708 7.84762 21.2674 8.2269 20.9689 8.52413C19.7447 9.74827 18.3502 9.03816 16.4979 8.09491C13.8932 6.7686 10.3834 4.98134 5.1691 7.46216C5.01731 7.53312 4.88186 7.63474 4.77129 7.76064C4.66071 7.88653 4.57742 8.03397 4.52664 8.19365C4.47587 8.35333 4.45872 8.52179 4.47628 8.68843C4.49384 8.85506 4.54572 9.01625 4.62866 9.16185L6.1581 11.8073C6.31771 12.0826 6.57908 12.2841 6.88588 12.3686C7.19269 12.453 7.52038 12.4135 7.79834 12.2586L7.83617 12.2369L7.80645 12.2586L8.4847 11.8776C9.24059 11.4082 9.95479 10.8748 10.6194 10.2833C10.6875 10.2249 10.7743 10.1927 10.864 10.1927C10.9537 10.1927 11.0404 10.2249 11.1085 10.2833C11.1495 10.3154 11.1827 10.3564 11.2057 10.4032C11.2286 10.45 11.2407 10.5014 11.2409 10.5535C11.2419 10.6042 11.232 10.6545 11.212 10.7011C11.192 10.7477 11.1622 10.7895 11.1247 10.8237C10.4247 11.4451 9.67151 12.0039 8.87382 12.4937H8.8522L8.17395 12.872C7.88726 13.0344 7.5631 13.1192 7.23358 13.1179C6.8932 13.1179 6.55874 13.0289 6.26342 12.8596C5.9681 12.6904 5.72218 12.4469 5.55011 12.1532L4.10443 9.65365C1.32657 11.6154 -0.359601 15.3958 0.545636 20.1922C0.561733 20.2724 0.604876 20.3446 0.66784 20.3967C0.730805 20.4489 0.80977 20.4778 0.891517 20.4787H2.53986C2.62553 20.4787 2.70825 20.4473 2.77245 20.3906C2.83665 20.3339 2.8779 20.2556 2.88844 20.1706C2.96189 19.5875 3.24565 19.0512 3.68647 18.6624C4.12728 18.2736 4.69483 18.0591 5.28259 18.0591C5.87035 18.0591 6.4379 18.2736 6.87872 18.6624C7.31953 19.0512 7.60329 19.5875 7.67674 20.1706C7.6879 20.2559 7.7297 20.3341 7.79434 20.3908C7.85899 20.4475 7.94205 20.4787 8.02803 20.4787H9.63313C9.71881 20.4787 9.80152 20.4473 9.86572 20.3906C9.92992 20.3339 9.97117 20.2556 9.98172 20.1706C10.0575 19.5889 10.3424 19.0547 10.7832 18.6676C11.224 18.2806 11.7906 18.0671 12.3772 18.0671C12.9638 18.0671 13.5304 18.2806 13.9712 18.6676C14.412 19.0547 14.6969 19.5889 14.7727 20.1706C14.7833 20.2556 14.8245 20.3339 14.8887 20.3906C14.9529 20.4473 15.0356 20.4787 15.1213 20.4787H16.7075C16.7997 20.4787 16.8883 20.4424 16.954 20.3777C17.0197 20.313 17.0574 20.225 17.0588 20.1328C17.0966 17.8981 17.6992 15.331 19.4178 14.0447C25.3707 9.5915 23.8062 5.77329 22.428 4.38706ZM15.2213 10.5535L16.3562 11.1236V11.1263C16.4547 11.0542 16.533 10.958 16.5837 10.847C16.6343 10.736 16.6557 10.6138 16.6456 10.4921C16.6356 10.3705 16.5945 10.2535 16.5263 10.1522C16.4581 10.051 16.3651 9.96899 16.2561 9.91399C16.1472 9.85899 16.0259 9.83287 15.904 9.83812C15.782 9.84337 15.6635 9.87982 15.5596 9.94398C15.4558 10.0081 15.3702 10.0979 15.3109 10.2046C15.2517 10.3113 15.2208 10.4314 15.2213 10.5535Z"
          fill="#02303A"
        />
      </g>

      <g id="icon-jenkins">
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M20.2068 11.5753C20.2068 16.2114 16.5324 19.9697 11.9998 19.9697C7.46733 19.9697 3.79297 16.2114 3.79297 11.5753C3.79297 6.93908 7.46733 3.18068 11.9998 3.18068C16.5324 3.18068 20.2068 6.93908 20.2068 11.5753Z"
          fill="#D33833"
        />
        <path
          d="M4.12769 13.6553C4.12769 13.6553 3.53357 4.90125 11.5998 4.6511L11.0371 3.71316L6.66012 5.18263L5.40951 6.62076L4.31528 8.71555L3.68994 11.1542L3.87753 12.7799"
          fill="#EF3D3A"
        />
        <path
          d="M6.37844 5.8497C4.93852 7.32301 4.04749 9.3572 4.04749 11.6076C4.04749 13.8575 4.93852 15.892 6.37844 17.365C7.81905 18.838 9.80443 19.747 11.9993 19.747C14.1943 19.747 16.1798 18.838 17.6203 17.365C19.0601 15.892 19.9514 13.8575 19.9514 11.6076C19.9514 9.3572 19.0601 7.32301 17.6203 5.8497C16.1798 4.37695 14.1943 3.468 11.9993 3.46781C9.80443 3.468 7.81905 4.37695 6.37844 5.8497ZM6.01396 17.7213C4.48366 16.1563 3.5376 13.9934 3.5376 11.6076C3.5376 9.22139 4.48366 7.0587 6.01396 5.49357C7.5439 3.92815 9.66173 2.95786 11.9993 2.95814C14.337 2.95786 16.455 3.92815 17.9847 5.49357C19.5151 7.0587 20.4613 9.22157 20.4611 11.6076C20.4613 13.9934 19.5151 16.1563 17.9847 17.7213C16.455 19.2867 14.337 20.2568 11.9993 20.2568C9.66173 20.2568 7.5439 19.2867 6.01396 17.7213Z"
          fill="#231F20"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M15.4544 11.6229L14.2038 11.8105L12.5155 11.9981L11.4212 12.0293L10.3582 11.9981L9.54529 11.7479L8.8262 10.9663L8.26344 9.37185L8.13839 9.02791L7.38804 8.77785L6.95033 8.05874L6.6377 7.02701L6.98165 6.12031L7.79447 5.83893L8.45102 6.15163L8.76373 6.83942L9.1389 6.77686L9.26391 6.6206L9.1389 5.90149L9.10758 4.99479L9.29516 3.74424L9.28784 3.02991L9.85792 2.11852L10.8584 1.3994L12.6093 0.649053L14.5476 0.930433L16.2359 2.14975L17.0176 3.4003L17.5178 4.307L17.6428 6.55804L17.2676 8.49647L16.5798 10.216L15.9233 11.1227"
          fill="#F0D6B7"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M14.3908 17.0314L9.91993 17.219V17.9693L10.2951 20.5955L10.1075 20.8145L6.98112 19.7514L6.76221 19.3762L6.44957 15.8434L5.73059 13.7174L5.57422 13.2172L8.07532 11.4977L8.85699 11.185L9.54476 12.0291L10.1388 12.5606L10.8267 12.7794L11.1392 12.8732L11.5144 14.499L11.7958 14.8429L12.5149 14.5928L12.0146 15.562L14.7347 16.8438L14.3908 17.0314Z"
          fill="#335061"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M6.98157 6.11975L7.79438 5.83837L8.45093 6.15108L8.76364 6.83887L9.13882 6.77631L9.23261 6.40113L9.04502 5.68211L9.23261 3.9625L9.07624 3.02457L9.639 2.36801L10.8583 1.39885L10.5144 0.92988L8.79486 1.77402L8.07576 2.33678L7.66934 3.21216L7.04403 4.0563L6.85645 5.05679L6.98157 6.11975Z"
          fill="#6D6B6D"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M8.26345 3.1806C8.26345 3.1806 8.73242 2.02385 10.6083 1.46109C12.4842 0.898326 10.7021 1.05459 10.7021 1.05459L8.66995 1.83626L7.88828 2.61784L7.54443 3.24316L8.26345 3.1806Z"
          fill="#DCD9D8"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M7.32541 5.9013C7.32541 5.9013 6.66886 3.71272 9.17003 3.40011L9.07624 3.02493L7.35674 3.43143L6.85645 5.05716L6.98157 6.12012L7.32541 5.9013Z"
          fill="#DCD9D8"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M8.32666 8.80839L8.73602 8.41174C8.73602 8.41174 8.92079 8.43322 8.952 8.65204C8.98322 8.87095 9.07701 10.8406 10.4214 11.9037C10.544 12.0007 9.42097 11.7472 9.42097 11.7472L8.42045 10.1841"
          fill="#F7E4CD"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M14.0787 8.21484C14.0787 8.21484 14.1516 7.26715 14.4068 7.34003C14.662 7.41291 14.662 7.66812 14.662 7.66812C14.662 7.66812 14.0422 8.06909 14.0787 8.21484Z"
          fill="#F7E4CD"
        />
        <path
          d="M16.6748 4.74382C16.6748 4.74382 16.1595 4.85262 16.112 5.30658C16.0645 5.76064 16.6748 5.40038 16.7686 5.36914"
          fill="#F7E4CD"
        />
        <path
          d="M12.891 4.77544C12.891 4.77544 12.2031 4.86924 12.2031 5.30688C12.2031 5.74461 12.9848 5.71338 13.2036 5.52579"
          fill="#F7E4CD"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M8.63955 6.80772C8.63955 6.80772 7.45145 6.08861 7.32644 6.77649C7.2014 7.46428 6.91994 7.96457 7.51403 8.68359L7.1076 8.55857L6.73243 7.5894L6.60742 6.65146L7.32644 5.90102L8.13933 5.96358L8.6083 6.33876L8.63955 6.80772Z"
          fill="#F7E4CD"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M9.20121 4.83789C9.20121 4.83789 9.73272 2.08665 12.4215 1.55512C14.6351 1.11757 15.798 1.64891 16.2357 2.14911C16.2357 2.14911 14.2661 -0.19563 12.3902 0.523391C10.5143 1.24251 9.13874 2.55561 9.16995 3.39966C9.22319 4.83733 9.20121 4.83789 9.20121 4.83789Z"
          fill="#F7E4CD"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M16.4555 2.46241C16.4555 2.46241 15.5489 2.43118 15.5176 3.24409C15.5176 3.24409 15.5175 3.36911 15.58 3.49414C15.58 3.49414 16.2993 2.68123 16.7369 3.11897"
          fill="#F7E4CD"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M12.4845 3.57833C12.4845 3.57833 12.3284 2.3306 11.2646 3.056C10.5768 3.52496 10.6394 4.18152 10.7644 4.30654C10.8894 4.43167 10.8554 4.6835 10.9506 4.51064C11.0458 4.33778 11.0144 3.77502 11.3584 3.61876C11.7023 3.4624 12.2661 3.28776 12.4845 3.57833Z"
          fill="#F7E4CD"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M9.54476 12.0286L6.60595 13.3418C6.60595 13.3418 7.82526 18.1878 7.19992 19.6885L6.76221 19.5322L6.73096 17.6876L5.91818 14.186L5.57422 13.2167L8.63808 11.1534L9.54476 12.0286Z"
          fill="#49728B"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M9.84748 14.7092L10.2644 15.2179V17.0938H9.76413C9.76413 17.0938 9.70166 15.7806 9.70166 15.6243C9.70166 15.4679 9.76413 14.9052 9.76413 14.9052"
          fill="#49728B"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M9.85807 17.3748L8.45117 17.4373L8.85767 17.7187L9.85807 17.875"
          fill="#49728B"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M14.6733 17.0621L15.8301 17.0308L16.1115 19.9072L14.9234 20.0635L14.6733 17.0621Z"
          fill="#335061"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M14.9858 17.0625L16.7367 16.9687C16.7367 16.9687 17.4557 15.1554 17.4557 15.0616C17.4557 14.9678 18.081 12.4354 18.081 12.4354L16.6741 10.966L16.3927 10.7159L15.6424 11.4662V14.3738L14.9858 17.0625Z"
          fill="#335061"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M15.7675 16.8441L14.6733 17.0629L14.8296 17.9384C15.236 18.126 15.9239 17.6257 15.9239 17.6257"
          fill="#49728B"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M15.7988 11.3723L17.9873 12.998L18.0499 12.2477L16.3928 10.7158L15.7988 11.3723Z"
          fill="#49728B"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M10.9429 23.2215L10.2956 20.595L9.97365 18.6569L9.92041 17.2184L12.85 17.0624L14.6727 17.0621L14.507 20.3452L14.7883 22.8776L14.7571 23.3466L12.3811 23.5342L10.9429 23.2215Z"
          fill="white"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M14.2666 17.0313C14.2666 17.0313 14.1103 20.2828 14.5793 22.5963C14.5793 22.5963 13.6413 23.1904 12.2656 23.3467L14.8919 23.2529L15.2045 23.0653L14.8293 17.938L14.7355 16.8436"
          fill="#DCD9D8"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M16.1652 19.6572L17.3845 19.3133L19.698 19.1883L20.042 18.1253L19.4167 16.2807L18.6976 16.1869L17.6971 16.4995L16.7373 16.9682L16.2277 16.8747L15.8306 17.0307"
          fill="white"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M16.1421 19.0319C16.1421 19.0319 16.9549 18.6568 17.08 18.6881L16.7362 16.9685L17.1426 16.8122C17.1426 16.8122 17.424 18.4379 17.424 18.6255C17.424 18.6255 19.1747 18.7193 19.3311 18.7193C19.3311 18.7193 19.7062 18.0002 19.6124 17.2498L19.9564 18.2503L19.9876 18.8131L19.4874 19.5634L18.9247 19.6885L17.9867 19.6572L17.6741 19.2508L16.5798 19.4071L16.2359 19.5322"
          fill="#DCD9D8"
        />
        <path
          d="M14.9137 16.8125L14.226 15.0616L13.5068 14.0299C13.5068 14.0299 13.6631 13.5922 13.882 13.5922H14.6011L15.2889 13.8423L15.2264 14.9991L14.9137 16.8125Z"
          fill="white"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M15.0476 16.2185C15.0476 16.2185 14.1721 14.5303 14.1721 14.2802C14.1721 14.2802 14.3284 13.905 14.5473 13.9988C14.7662 14.0926 15.2352 14.3427 15.2352 14.3427V13.7487L14.1721 13.5298L13.4531 13.6236L14.6724 16.4999L14.9225 16.5312"
          fill="#DCD9D8"
        />
        <path
          d="M11.224 12.0915L10.3579 11.9973L9.54492 11.7471V12.0285L9.94212 12.4665L11.1927 13.0293"
          fill="white"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M9.82719 12.1855C9.82719 12.1855 10.7965 12.592 11.1091 12.4982L11.1402 12.873L10.2649 12.6858L9.7334 12.3107L9.82719 12.1855Z"
          fill="#DCD9D8"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M16.1608 13.6992C15.6303 13.6836 15.151 13.6206 14.7314 13.5023C14.7599 13.3302 14.7066 13.1614 14.7494 13.0375C14.8664 12.9533 15.0624 12.9546 15.2392 12.9348C15.0863 12.8597 14.8715 12.8299 14.6951 12.8734C14.691 12.754 14.6374 12.68 14.605 12.5865C14.9032 12.4801 15.6073 11.7822 16.0034 12.0133C16.1921 12.1232 16.2723 12.7511 16.287 13.0564C16.2992 13.3096 16.264 13.5651 16.1608 13.6992Z"
          fill="#D33833"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M16.1608 13.6992C15.6303 13.6836 15.151 13.6206 14.7314 13.5023C14.7599 13.3302 14.7066 13.1614 14.7494 13.0375C14.8664 12.9533 15.0624 12.9546 15.2392 12.9348C15.0863 12.8597 14.8715 12.8299 14.6951 12.8734C14.691 12.754 14.6374 12.68 14.605 12.5865C14.9032 12.4801 15.6073 11.7822 16.0034 12.0133C16.1922 12.1232 16.2723 12.7511 16.287 13.0564C16.2992 13.3096 16.264 13.5651 16.1608 13.6992Z"
          stroke="#D33833"
          stroke-width="2.5"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M13.6244 12.8318C13.623 12.872 13.6213 12.9124 13.6197 12.9529C13.4541 13.0617 13.1867 13.0604 13.0049 13.1518C13.2729 13.1636 13.4838 13.2281 13.6663 13.3191C13.6623 13.4202 13.6584 13.5212 13.6545 13.6223C13.3509 13.8301 13.0735 14.1397 12.7161 14.3346C12.5471 14.4268 11.9539 14.664 11.7741 14.622C11.6723 14.5984 11.6632 14.4722 11.6225 14.3531C11.5359 14.0983 11.3364 13.6926 11.319 13.309C11.2968 12.8245 11.2479 12.0124 11.77 12.1122C12.1913 12.1926 12.6813 12.3867 13.0074 12.5649C13.2067 12.6739 13.322 12.8085 13.6244 12.8318Z"
          fill="#D33833"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M13.6244 12.8318C13.623 12.872 13.6213 12.9124 13.6197 12.9529C13.4541 13.0617 13.1867 13.0604 13.0049 13.1518C13.2729 13.1636 13.4838 13.2281 13.6663 13.3191C13.6623 13.4202 13.6584 13.5212 13.6545 13.6223C13.3509 13.8301 13.0735 14.1397 12.7161 14.3346C12.5471 14.4268 11.9539 14.664 11.7741 14.622C11.6723 14.5984 11.6632 14.4722 11.6225 14.3531C11.5359 14.0983 11.3364 13.6926 11.319 13.309C11.2968 12.8245 11.2479 12.0124 11.77 12.1122C12.1913 12.1926 12.6813 12.3867 13.0074 12.5649C13.2067 12.6739 13.322 12.8085 13.6244 12.8318Z"
          stroke="#D33833"
          stroke-width="2.5"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M13.9251 13.4099C13.8787 13.1459 13.8252 13.0706 13.8459 12.8404C14.5498 12.371 14.682 13.6465 13.9251 13.4099Z"
          fill="#D33833"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M13.9251 13.4099C13.8787 13.1459 13.8252 13.0706 13.8459 12.8404C14.5498 12.371 14.682 13.6465 13.9251 13.4099Z"
          stroke="#D33833"
          stroke-width="2.5"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M14.9455 13.624C14.9455 13.624 14.7266 13.3113 14.883 13.2175C15.0393 13.1237 15.1957 13.2176 15.2895 13.0613C15.3833 12.9049 15.2895 12.8111 15.3207 12.6235C15.352 12.4359 15.5084 12.4046 15.6647 12.3734C15.8209 12.3421 16.2587 12.2796 16.3212 12.4359L16.1336 11.8732L15.7585 11.7482L14.5704 12.4359L14.5078 12.7799V13.4677"
          fill="#EF3D3A"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M11.6629 14.6553C11.6253 14.1674 11.5856 13.6801 11.5413 13.1926C11.4752 12.4648 11.7162 12.5918 12.3471 12.5918C12.4434 12.5918 12.9404 12.7067 12.976 12.7794C13.1465 13.1276 12.6908 13.0503 13.1724 13.3129C13.5789 13.5345 14.2969 13.1783 14.1327 12.6856C14.0408 12.5761 13.6538 12.6515 13.5151 12.5795C13.2708 12.4529 13.0266 12.3263 12.7823 12.1997C12.4716 12.0384 11.7534 11.8034 11.422 12.0287C10.5826 12.5996 11.475 14.0261 11.7745 14.6217"
          fill="#EF3D3A"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M12.4858 3.57844C11.6336 3.37997 11.2102 3.93504 10.9519 4.51074C10.7213 4.45484 10.813 4.1412 10.8713 3.98137C11.0238 3.56193 11.6385 3.00358 12.1407 3.07927C12.3569 3.11181 12.6493 3.30944 12.4858 3.57844Z"
          fill="#231F20"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M16.6378 4.54904C16.6512 4.54961 16.6648 4.55007 16.6782 4.55064C16.8708 4.95067 17.0375 5.37443 17.2804 5.72756C17.1177 6.10658 16.0481 6.44198 16.0646 5.76142C16.2959 5.66031 16.6952 5.74078 16.9002 5.61163C16.7817 5.28626 16.6106 5.00929 16.6378 4.54904Z"
          fill="#231F20"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M12.9218 4.55917C13.1045 4.8941 13.164 5.24602 13.4237 5.49917C13.5407 5.61312 13.7681 5.75203 13.6554 6.06896C13.629 6.14371 13.4365 6.31039 13.3253 6.34312C12.9193 6.46299 11.9732 6.36788 12.2936 5.86168C12.6294 5.87734 13.0807 6.07975 13.3317 5.83598C13.1389 5.52787 12.7953 4.9183 12.9218 4.55917Z"
          fill="#231F20"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M16.484 7.96304C15.8727 8.35575 15.191 8.7828 14.1893 8.68375C13.9752 8.49766 13.8936 8.08357 14.1016 7.81006C14.2098 7.99615 14.1418 8.3384 14.4434 8.3899C15.0118 8.48716 15.6734 8.0422 16.0822 7.88669C16.3357 7.45928 16.0604 7.30208 15.832 7.02698C15.3644 6.46338 14.7372 5.7648 14.76 4.92104C14.949 4.784 14.9653 5.1302 14.9924 5.19323C15.2366 5.76462 15.851 6.49536 16.2994 6.9844C16.4095 7.10483 16.5908 7.22038 16.611 7.30002C16.6692 7.53159 16.4597 7.80903 16.484 7.96304Z"
          fill="#231F20"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M8.42561 7.55024C8.23399 7.44087 8.18838 6.95915 7.96341 6.94546C7.64192 6.92595 7.70054 7.5704 7.70182 7.94727C7.48053 7.74636 7.44161 7.12779 7.60418 6.81011C7.4189 6.71913 7.33617 6.91047 7.2334 6.97791C7.36548 6.0184 8.63701 6.53286 8.42561 7.55024Z"
          fill="#231F20"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M16.8735 8.36302C16.5889 8.90468 16.1863 9.5012 15.3513 9.51855C15.3343 9.34363 15.3213 9.07744 15.3522 8.97211C15.9906 8.91077 16.3847 8.58587 16.8735 8.36302Z"
          fill="#231F20"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M12.874 8.71396C13.4066 8.99403 14.3854 9.02414 15.1093 9.00294C15.1482 9.16154 15.1472 9.35748 15.1487 9.55088C14.2182 9.59731 13.118 9.36705 12.874 8.71396Z"
          fill="#231F20"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M12.772 9.23608C13.1403 10.1608 14.4062 10.0543 15.4736 10.0288C15.4267 10.1489 15.3248 10.2907 15.1982 10.342C14.8561 10.4812 13.9126 10.5868 13.4378 10.3346C13.1366 10.1745 12.9431 9.81272 12.7781 9.60065C12.6984 9.49823 12.3016 9.23664 12.772 9.23608Z"
          fill="#231F20"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M16.441 14.3368C16.0088 15.077 15.5953 15.8373 15.0825 16.4902C15.2975 15.8582 15.3895 14.8002 15.422 13.9937C15.8717 13.7832 16.2568 14.0411 16.441 14.3368Z"
          fill="#81B0C4"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M18.7666 16.9978C18.2828 17.0946 17.9428 17.5649 17.4707 17.5347C17.7301 17.169 18.1848 17.0148 18.7666 16.9978Z"
          fill="#231F20"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M18.9794 17.7542C18.585 17.7959 18.1217 17.8597 17.7217 17.8268C17.911 17.5376 18.6407 17.6374 18.9794 17.7542Z"
          fill="#231F20"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M19.1162 18.4075C18.6729 18.4171 18.122 18.4083 17.7007 18.3729C17.9499 18.1052 18.8287 18.2736 19.1162 18.4075Z"
          fill="#231F20"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M15.6055 20.1942C15.669 20.7509 15.8897 21.3149 15.8621 21.9246C15.617 22.0073 15.4762 22.0795 15.1478 22.0791C15.1247 21.561 15.0554 20.7689 15.0761 20.275C15.2376 20.2857 15.4757 20.1596 15.6055 20.1942Z"
          fill="#DCD9D8"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M14.8919 11.9899C14.6693 12.1352 14.4798 12.3166 14.266 12.4718C13.792 12.4952 13.5333 12.4389 13.1851 12.1667C13.1908 12.1449 13.2258 12.1546 13.2271 12.1278C13.7345 12.354 14.3795 12.0357 14.8919 11.9899Z"
          fill="#F0D6B7"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M12.2271 15.449C12.3665 14.8448 12.9127 14.532 13.4088 14.1993C13.9208 14.8491 14.2322 15.6848 14.5751 16.4912C13.7649 16.247 12.9371 15.8507 12.2271 15.449Z"
          fill="#81B0C4"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M15.0769 20.2752C15.0562 20.7691 15.1255 21.5612 15.1487 22.0793C15.477 22.0798 15.6178 22.0075 15.8629 21.9248C15.8906 21.3152 15.6699 20.7511 15.6063 20.1945C15.4766 20.1598 15.2384 20.2859 15.0769 20.2752ZM9.96384 17.4662C10.1804 19.4568 10.494 21.1301 11.0692 22.8928C12.3459 23.2805 13.8849 23.3142 15.0133 22.9645C14.8061 21.9696 14.8966 20.7584 14.7756 19.6967C14.6843 18.8987 14.7308 18.0958 14.6057 17.2817C13.2384 16.9972 11.3057 17.2152 9.96384 17.4662ZM14.929 17.2942C14.9175 18.1491 14.9673 18.9924 15.0325 19.8484C15.3608 19.7991 15.5836 19.7662 15.8886 19.6993C15.7896 18.8753 15.8017 17.948 15.6 17.2191C15.3668 17.2213 15.1615 17.2163 14.929 17.2942ZM16.5943 17.1564C16.4385 17.1207 16.2571 17.155 16.1083 17.1579C16.1782 17.8548 16.348 18.6238 16.4077 19.3553C16.6419 19.3626 16.7671 19.2521 16.9597 19.215C16.97 18.5729 16.9036 17.6882 16.5943 17.1564ZM19.1158 19.4602C19.604 19.3417 19.911 18.7437 19.7745 18.1297C19.6828 17.717 19.5196 16.9399 19.345 16.6759C19.2159 16.4806 18.866 16.225 18.5866 16.4039C18.132 16.6949 17.3313 16.7794 16.9999 17.1317C17.1661 17.6851 17.2177 18.4452 17.2862 19.1464C17.854 19.1818 18.5527 18.9901 19.025 19.1935C18.6953 19.3003 18.2675 19.3012 17.9826 19.4568C18.2154 19.5692 18.7605 19.5465 19.1158 19.4602ZM14.576 16.4913C14.2331 15.6849 13.9217 14.8492 13.4096 14.1994C12.9136 14.5321 12.3673 14.8449 12.2279 15.4491C12.938 15.8508 13.7658 16.2471 14.576 16.4913ZM15.4212 13.9941C15.3888 14.8006 15.2968 15.8585 15.0818 16.4906C15.5946 15.8377 16.0081 15.0774 16.4403 14.3371C16.2561 14.0414 15.871 13.7836 15.4212 13.9941ZM14.463 13.6536C14.2688 13.6327 14.1039 13.8769 13.8513 13.7713C13.7934 13.8353 13.7408 13.9046 13.6818 13.967C14.2397 14.6394 14.4932 15.5932 14.9241 16.3833C15.1553 15.6244 15.1287 14.7929 15.1796 13.9645C14.8619 13.9847 14.6857 13.6772 14.463 13.6536ZM13.8469 12.8404C13.8262 13.0707 13.8797 13.146 13.9261 13.4099C14.683 13.6466 14.5508 12.3711 13.8469 12.8404ZM13.0075 12.5648C12.6814 12.3866 12.1914 12.1926 11.7702 12.1122C11.248 12.0123 11.2969 12.8244 11.3191 13.309C11.3365 13.6926 11.536 14.0983 11.6226 14.3531C11.6633 14.4721 11.6725 14.5984 11.7742 14.622C11.954 14.6639 12.5472 14.4267 12.7162 14.3345C13.0737 14.1396 13.351 13.8301 13.6546 13.6223C13.6586 13.5211 13.6624 13.4201 13.6664 13.319C13.4839 13.228 13.273 13.1635 13.005 13.1518C13.1868 13.0603 13.4542 13.0617 13.6198 12.9529C13.6214 12.9123 13.6231 12.8719 13.6245 12.8318C13.3221 12.8085 13.2069 12.6738 13.0075 12.5648ZM9.89233 11.999C9.62164 12.2738 10.6515 12.6484 10.9794 12.6686C10.9776 12.4947 11.0786 12.3307 11.0582 12.206C10.6688 12.1376 10.1569 12.1827 9.89233 11.999ZM13.2268 12.128C13.2255 12.1549 13.1905 12.1451 13.1848 12.167C13.5331 12.4391 13.7918 12.4954 14.2658 12.472C14.4795 12.3168 14.6691 12.1354 14.8917 11.9902C14.3793 12.0359 13.7343 12.3542 13.2268 12.128ZM16.2875 13.0561C16.2729 12.7508 16.1927 12.123 16.004 12.013C15.6079 11.7818 14.9038 12.4799 14.6055 12.5863C14.638 12.6797 14.6915 12.7537 14.6956 12.8731C14.8721 12.8297 15.0869 12.8594 15.2397 12.9346C15.0629 12.9544 14.8669 12.953 14.7499 13.0373C14.7071 13.1612 14.7605 13.33 14.7319 13.502C15.1516 13.6204 15.6309 13.6834 16.1614 13.699C16.2645 13.5649 16.2997 13.3094 16.2875 13.0561ZM9.43662 12.2648C9.35162 12.2042 8.77659 11.456 8.69781 11.487C7.65729 11.8974 6.68436 12.6069 5.81495 13.278C6.64388 15.0567 6.9785 17.2359 7.03763 19.3363C7.98721 19.7805 8.82128 20.4207 10.1098 20.4876C9.96073 19.4326 9.82462 18.4913 9.73998 17.4981C9.41621 17.3616 8.95171 17.5043 8.64872 17.4558C8.64615 17.0906 9.11146 17.2959 9.15021 17.0503C9.17942 16.8646 8.89419 16.8505 8.98707 16.5581C9.22394 16.6442 9.34832 16.8344 9.60094 16.9058C9.83176 16.4008 9.59771 15.5073 9.63098 15.0852C9.63728 15.006 9.67055 14.6462 9.84806 14.7093C10.0052 14.7652 9.83909 15.6662 9.85631 16.0657C9.87199 16.4337 9.81186 16.7898 9.96091 17.0209C11.2061 16.8514 12.4713 16.7418 13.8186 16.7049C13.5222 16.5777 13.1701 16.4573 12.7841 16.2398C12.5748 16.1218 11.9151 15.8763 11.8547 15.6775C11.7584 15.3608 12.1075 15.1921 12.1672 14.9206C11.5387 15.2633 11.4161 14.592 11.2674 14.1164C11.1327 13.6856 11.056 13.3638 11.023 13.1153C10.4815 12.8572 9.90265 12.5958 9.43662 12.2648ZM15.7376 11.5776C16.6045 11.1572 16.7608 13.1487 16.421 13.7902C16.4735 13.9816 16.6541 14.0548 16.7279 14.2269C16.2441 15.0935 15.7067 15.9025 15.2131 16.7589C15.5803 16.5303 16.1048 16.718 16.5369 16.5469C16.6948 16.4845 16.8092 16.1229 16.9288 15.8336C17.2577 15.0378 17.6031 14.0345 17.7567 13.275C17.7914 13.102 17.8859 12.7249 17.8647 12.5709C17.8269 12.2952 17.4528 12.0907 17.2625 11.9202C16.9119 11.6052 16.6911 11.3281 16.3254 11.0336C16.1771 11.2525 15.8589 11.3995 15.7376 11.5776ZM7.45395 3.8895C7.04085 4.34402 7.12732 5.19567 7.17733 5.80157C7.92401 5.33185 8.91507 5.83871 8.90573 6.63764C9.26222 6.62817 9.03891 6.19241 8.97443 5.91168C8.76369 4.99476 9.32945 3.99858 9.00008 3.16006C8.36056 3.20856 7.83516 3.46977 7.45395 3.8895ZM10.4097 1.25146C9.47454 1.51652 8.27599 2.19605 7.8917 3.03616C8.18927 2.99292 8.39584 2.84285 8.68939 2.82428C8.80033 2.81706 8.94567 2.87081 9.07317 2.8391C9.32726 2.77607 9.5417 2.20637 9.73338 1.9944C9.92024 1.7874 10.1448 1.69895 10.2985 1.51024C10.3973 1.46259 10.5433 1.46587 10.5489 1.31758C10.5061 1.27181 10.461 1.23692 10.4097 1.25146ZM15.2779 1.50076C14.3072 0.953104 12.6643 0.541162 11.6317 1.0559C10.7986 1.47131 9.67238 2.15863 9.28842 3.0296C9.6471 3.87008 9.18217 4.64022 9.15249 5.49355C9.13673 5.94761 9.36628 6.34398 9.38386 6.83827C9.26112 7.04077 8.88613 7.06572 8.62655 7.05184C8.53917 6.61457 8.3862 6.12309 7.93593 6.07376C7.29879 6.00407 6.83293 6.53138 6.80399 7.08241C6.76973 7.73043 7.30171 8.80446 8.05573 8.7299C8.347 8.7011 8.41856 8.40912 8.73592 8.41212C8.90793 8.75531 8.47059 8.86308 8.42559 9.10854C8.41387 9.17194 8.46186 9.41975 8.48978 9.53596C8.62673 10.1018 8.93204 10.8342 9.23255 11.2649C9.61395 11.8114 10.3633 11.8937 11.1694 11.9473C11.3134 11.6371 11.8438 11.6626 12.1894 11.7438C11.7752 11.5797 11.3902 11.182 11.071 10.83C10.7045 10.4262 10.3332 9.99292 10.3144 9.46505C11.0071 10.4261 11.5794 11.2653 12.839 11.688C13.7921 12.0077 14.9053 11.5415 15.6376 11.0273C15.9415 10.8135 16.1229 10.4744 16.3389 10.1639C17.1471 9.00133 17.5243 7.34194 17.4413 5.73357C17.4072 5.07026 17.4087 4.40921 17.1861 3.96294C16.9535 3.49632 16.1668 3.07884 15.7063 3.50091C15.6209 3.04714 16.0892 2.76651 16.6393 2.9298C16.2471 2.4236 15.8354 1.81535 15.2779 1.50076ZM17.0863 16.4671C17.8448 16.09 19.2621 15.4522 19.7376 16.4685C19.9131 16.8431 20.119 17.4764 20.2099 17.8631C20.3383 18.4087 20.0707 19.5555 19.5099 19.7385C19.0145 19.9002 18.4366 19.8904 17.84 19.7705C17.7697 19.7121 17.6915 19.6102 17.6368 19.5041C17.2108 19.4875 16.8119 19.5269 16.4754 19.702C16.5073 20.0171 16.2942 20.0677 16.0944 20.1325C15.9463 20.7198 16.3907 21.4867 16.2843 22.0221C16.2084 22.4036 15.7391 22.4626 15.3941 22.534C15.3829 22.7459 15.4092 22.9229 15.4328 23.1022C15.3539 23.3929 15.0001 23.5584 14.6649 23.5989C13.562 23.7315 11.8873 23.7911 10.8265 23.4096C10.5304 22.6835 10.2972 21.8003 10.0507 20.9712C9.01601 21.0817 8.1792 20.5247 7.39031 20.1598C7.11717 20.0332 6.73933 19.9635 6.63729 19.7461C6.53836 19.5356 6.57885 19.1321 6.5543 18.7511C6.49183 17.7778 6.43834 16.839 6.18132 15.8424C6.06592 15.3952 5.86477 15.0006 5.72444 14.5697C5.59475 14.1704 5.36814 13.6768 5.30904 13.2786C5.22141 12.6884 5.7772 12.6555 6.1326 12.3998C6.68198 12.0042 7.11322 11.7855 7.70821 11.4285C7.88444 11.3228 8.41589 11.0552 8.47634 10.932C8.5965 10.6876 8.27006 10.3431 8.18279 10.1516C8.04473 9.84876 7.97274 9.59148 7.95296 9.29266C7.45384 9.21378 7.07547 8.91673 6.84693 8.5818C6.46886 8.02748 6.20667 7.00194 6.53378 6.22186C6.55943 6.16042 6.68737 6.03962 6.70624 5.94526C6.74346 5.75946 6.63618 5.5124 6.62951 5.31478C6.59515 4.30087 6.80106 3.42728 7.48362 3.12152C7.76072 2.01766 8.75247 1.65065 9.68685 1.10205C10.0361 0.897015 10.4212 0.765984 10.8188 0.619667C12.2452 0.0947056 14.4338 0.193563 15.6176 1.08892C16.1196 1.46859 16.922 2.27025 17.209 2.85064C17.9671 4.38294 17.9132 6.94379 17.383 8.80774C17.3117 9.05799 17.2084 9.42584 17.064 9.72645C16.9634 9.93636 16.6506 10.3564 16.6886 10.5417C16.7277 10.7333 17.4018 11.2452 17.5463 11.3845C17.8066 11.6356 18.3011 11.9689 18.3411 12.2857C18.3842 12.6229 18.1925 13.0842 18.0955 13.4095C17.7709 14.4954 17.4543 15.4991 17.0863 16.4671Z"
          fill="#231F20"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M12.0251 8.95081C12.0663 8.89603 12.2925 8.81284 12.6091 8.96525C12.6091 8.96525 12.2339 9.02781 12.2651 9.65332L12.1088 9.62199C12.1088 9.62199 11.9472 9.05482 12.0251 8.95081Z"
          fill="#F7E4CD"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M14.7668 14.3271C14.7668 14.422 14.6898 14.499 14.5948 14.499C14.4999 14.499 14.4229 14.422 14.4229 14.3271C14.4229 14.2322 14.4999 14.1551 14.5948 14.1551C14.6898 14.1551 14.7668 14.2322 14.7668 14.3271Z"
          fill="#1D1919"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M14.9382 15.124C14.9382 15.2189 14.8612 15.2959 14.7662 15.2959C14.6712 15.2959 14.5942 15.2189 14.5942 15.124C14.5942 15.0291 14.6712 14.952 14.7662 14.952C14.8612 14.952 14.9382 15.0291 14.9382 15.124Z"
          fill="#1D1919"
        />
      </g>

      <g id="icon-docker">
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M11.0341 5.82169H13.0996C13.1994 5.82169 13.2804 5.74109 13.281 5.64134V3.80046C13.2804 3.70068 13.1994 3.62012 13.0996 3.62012H11.0341C10.9344 3.62012 10.8537 3.70084 10.8537 3.80046V5.64131C10.8537 5.74093 10.9345 5.82169 11.0341 5.82169ZM7.34377 8.44409H5.27824C5.17829 8.44354 5.09743 8.36268 5.09688 8.26273V6.4229C5.09743 6.32311 5.17848 6.24255 5.27824 6.24255H7.34377C7.44336 6.24255 7.52411 6.32328 7.52411 6.4229V8.26273C7.52411 8.36248 7.44352 8.44354 7.34377 8.44409ZM21.5637 9.42883C22.8131 9.42883 23.4056 9.87617 23.469 9.92657L23.6998 10.1089L23.6041 10.389C23.4514 10.7754 23.2162 11.1237 22.9149 11.4097C22.4615 11.8581 21.6393 12.3931 20.3022 12.3931H20.0866C19.5456 13.7614 18.8181 15.301 17.5969 16.6834C16.8664 17.51 16.0073 18.2132 15.0527 18.766C13.8942 19.4221 12.6342 19.8798 11.3247 20.1202C10.3827 20.2955 9.42636 20.3822 8.46821 20.3792C6.34727 20.3792 4.4762 19.9761 3.32454 19.2708C2.2968 18.6431 1.50684 17.6174 0.975861 16.2249C0.511588 14.9568 0.282809 13.6145 0.300788 12.2641C0.302982 11.8616 0.629679 11.5362 1.03229 11.5357H16.4462C16.6346 11.5286 17.5656 11.449 18.146 11.1256C17.6654 10.3659 17.5293 9.4772 17.753 8.53106C17.8715 8.03581 18.0732 7.5643 18.3495 7.13658L18.5702 6.81816L18.9057 7.01164L18.9057 7.01168C18.968 7.04844 20.3375 7.85655 20.5793 9.51345C20.9046 9.45856 21.2338 9.43027 21.5637 9.42883ZM4.52849 11.1305H2.46296C2.36334 11.1305 2.28262 11.0497 2.28262 10.9501V9.11029V9.10928C2.28262 9.00969 2.36334 8.92893 2.46296 8.92893H4.52849H4.52951C4.6291 8.92949 4.7094 9.01067 4.70884 9.11029V10.9502C4.70884 11.0497 4.62812 11.1305 4.52849 11.1305ZM5.27827 11.1305H7.3438C7.44342 11.1305 7.52415 11.0497 7.52415 10.9502V9.11029C7.5247 9.01067 7.4444 8.92949 7.34478 8.92893H7.34377H5.27824C5.17806 8.92893 5.09688 9.01011 5.09688 9.11029V10.9501C5.09747 11.0499 5.17848 11.1305 5.27827 11.1305ZM10.2848 11.1305H8.21924C8.11966 11.1305 8.0389 11.0497 8.03887 10.9501V9.11029V9.10928C8.03887 9.00969 8.11959 8.92893 8.21921 8.92893H10.2847H10.2858C10.3854 8.92949 10.4657 9.01067 10.4651 9.11029V10.9502C10.4651 11.0497 10.3844 11.1305 10.2848 11.1305ZM11.0341 11.1305H13.0996C13.1994 11.1305 13.2804 11.0499 13.281 10.9502V9.11029C13.281 9.01011 13.1998 8.92893 13.0996 8.92893H11.0341C10.9344 8.92893 10.8537 9.00969 10.8537 9.10928V9.11029V10.9501C10.8537 11.0497 10.9345 11.1305 11.0341 11.1305ZM8.21921 8.44409H10.2847C10.3845 8.44354 10.4651 8.36248 10.4651 8.26273V6.4229C10.4651 6.32328 10.3843 6.24255 10.2847 6.24255H8.21921C8.11959 6.24255 8.03887 6.32331 8.03887 6.4229V8.26273C8.03887 8.36248 8.11946 8.44354 8.21921 8.44409ZM13.0996 8.44409H11.0341C10.9343 8.44354 10.8537 8.36248 10.8537 8.26273V6.4229C10.8537 6.32331 10.9344 6.24255 11.0341 6.24255H13.0996C13.1994 6.24255 13.2804 6.32311 13.281 6.4229V8.26273C13.2804 8.36268 13.1995 8.44354 13.0996 8.44409ZM15.9777 11.1305H13.9122C13.8126 11.1305 13.7318 11.0497 13.7318 10.9501V9.11029V9.10928C13.7318 9.00969 13.8126 8.92893 13.9122 8.92893H15.9777C16.0779 8.92893 16.1591 9.01011 16.1591 9.11029V10.9502C16.1585 11.0499 16.0775 11.1305 15.9777 11.1305Z"
          fill="#0091E2"
        />
      </g>

      <g id="icon-sonarqube">
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M15.0381 2.40662C18.1101 4.27425 20.6136 7.06646 22.0817 10.2679L22.7997 9.93745C21.2657 6.59372 18.6568 3.68091 15.4489 1.73047L15.0381 2.40662ZM20.7828 15.9124C19.3589 9.91631 14.4997 4.91157 8.40717 3.16211L8.68052 2.21101C15.1107 4.05774 20.2393 9.34468 21.7443 15.6832L20.7828 15.9124ZM19.9669 22.2697H18.7802C18.7802 12.7113 10.8932 4.93521 1.19971 4.93521V3.74855C11.5485 3.74855 19.9669 12.0552 19.9669 22.2697Z"
          fill="#489CD2"
        />
      </g>

      <g id="icon-spring">
        <path
          d="M21.6462 1.67966C21.3326 2.45166 20.8984 3.19953 20.3918 3.87503C15.9045 -0.781076 8.49818 -0.9017 3.8662 3.58553C-0.765784 8.07276 -0.910533 15.4791 3.5767 20.1111C3.72145 20.28 3.89032 20.4247 4.0592 20.5695L4.49344 20.9555C9.41492 25.1049 16.7971 24.4777 20.9466 19.5562C22.5389 17.6745 23.5039 15.3102 23.6727 12.8495C24.0105 9.93038 23.1179 6.1669 21.6462 1.67966ZM5.74794 20.6901C5.41019 21.1243 4.78294 21.1726 4.34869 20.8348C3.91445 20.4971 3.8662 19.8698 4.20395 19.4356C4.54169 19.0013 5.16894 18.9531 5.60319 19.2908C6.01331 19.6286 6.08569 20.2558 5.74794 20.6901ZM21.5739 17.192C18.703 21.0278 12.527 19.7251 8.59468 19.9181C8.59468 19.9181 7.89505 19.9663 7.19543 20.0628C7.19543 20.0628 7.46081 19.9422 7.79855 19.8216C10.5729 18.8566 11.8757 18.6636 13.5644 17.7951C16.7248 16.1787 19.8851 12.6324 20.5124 8.96538C19.3061 12.4876 15.6391 15.5274 12.3099 16.7577C10.018 17.6021 5.89269 18.4223 5.89269 18.4223L5.72381 18.3258C2.92533 16.9507 2.82883 10.8713 7.9433 8.91713C10.1869 8.04864 12.3099 8.53114 14.7465 7.95214C17.3279 7.34902 20.3194 5.41902 21.5256 2.88591C22.8766 6.96302 24.5171 13.2837 21.5739 17.192Z"
          fill="#6DB33F"
        />
        <path
          d="M21.5748 17.1918C18.704 21.0277 12.528 19.7249 8.59565 19.9179C8.59565 19.9179 7.89603 19.9662 7.1964 20.0627C7.1964 20.0627 7.46178 19.942 7.79953 19.8214C10.5739 18.8564 11.8766 18.6634 13.5654 17.7949C16.7257 16.1786 19.8861 12.6322 20.5133 8.96522C19.3071 12.4874 15.6401 15.5272 12.3109 16.7576C10.019 17.6019 5.89366 18.4222 5.89366 18.4222L5.72479 18.3257C2.9263 16.9506 2.8298 10.8711 7.94428 8.91697C10.1879 8.04847 12.3109 8.53097 14.7475 7.95197C17.3289 7.34885 20.3203 5.41886 21.5266 2.88574C22.8776 6.96285 24.5181 13.2836 21.5748 17.1918Z"
          fill="white"
        />
        <path
          d="M5.74806 20.6902C5.41031 21.1245 4.78307 21.1727 4.34882 20.835C3.91457 20.4972 3.86632 19.87 4.20407 19.4357C4.54182 19.0015 5.16907 18.9532 5.60331 19.291C6.01344 19.6287 6.08581 20.256 5.74806 20.6902Z"
          fill="white"
        />
      </g>

      <g id="icon-gitlab">
        <path
          d="M12.0852 23.1957L16.405 9.84766H7.77148L12.0852 23.1957Z"
          fill="#E24329"
        />
        <path
          d="M1.71967 9.84766L0.404171 13.903C0.285146 14.2712 0.413695 14.6777 0.72787 14.9072L12.0841 23.1956L1.71967 9.84766Z"
          fill="#FCA326"
        />
        <path
          d="M1.71973 9.84735H7.77043L5.16635 1.80848C5.03308 1.39717 4.45228 1.39717 4.3142 1.80848L1.71973 9.84735Z"
          fill="#E24329"
        />
        <path
          d="M22.4556 9.84766L23.7664 13.903C23.8854 14.2712 23.7568 14.6777 23.4427 14.9072L12.085 23.1957L22.4556 9.84766Z"
          fill="#FCA326"
        />
        <path
          d="M22.455 9.84735H16.4043L19.0036 1.80848C19.1368 1.39717 19.7176 1.39717 19.8557 1.80848L22.455 9.84735Z"
          fill="#E24329"
        />
        <path
          d="M12.085 23.1957L16.4049 9.84766H22.4556L12.085 23.1957Z"
          fill="#FC6D26"
        />
        <path
          d="M12.0841 23.1957L1.71973 9.84766H7.77043L12.0841 23.1957Z"
          fill="#FC6D26"
        />
      </g>

      <g id="icon-postgres">
        <path
          d="M14.1236 23.6998C13.5398 23.6998 12.903 23.5474 12.3765 23.0504C11.8678 22.5706 11.6682 21.958 11.5484 21.5917C11.53 21.5345 11.5121 21.4798 11.499 21.4446C11.2594 20.7978 11.1784 19.8735 11.1312 18.685C11.1243 18.509 11.1191 18.3214 11.1138 18.1296C11.1107 18.0114 11.1065 17.8747 11.1017 17.7313C10.2962 18.0844 9.35201 18.1474 8.34421 17.8952C8.06593 17.8259 7.80006 17.7139 7.55604 17.5632C7.39767 17.4663 7.25576 17.3448 7.13569 17.2032C6.33229 17.8726 5.56829 17.7744 5.14794 17.6341C4.39761 17.384 3.72924 16.6883 3.10502 15.5039C2.66522 14.6695 2.24014 13.5829 1.8408 12.2751C1.14616 9.9994 0.704793 7.59865 0.665385 6.81049C0.54138 4.32672 1.2129 2.54809 2.66207 1.52453C3.85903 0.679093 5.49526 0.4211 7.52504 0.752655C8.22982 0.87089 8.92403 1.04519 9.60107 1.27389C10.4418 0.7763 11.4275 0.531443 12.5436 0.549834C13.1093 0.556738 13.6737 0.608392 14.2313 0.704314C15.1671 0.427158 16.139 0.290975 17.1149 0.300248C19.4316 0.327571 21.3516 1.23081 22.6673 2.91275C23.1643 3.54801 23.5899 4.952 22.7939 8.0353C22.3016 9.9416 21.4461 11.9672 20.3942 13.7432C20.7896 13.7259 21.1827 13.6742 21.5691 13.5887C21.819 13.53 22.0772 13.5158 22.332 13.5467C22.7939 13.6155 23.1517 13.9034 23.2878 14.3164C23.6861 15.5213 21.9957 16.414 21.4682 16.6583C20.8009 16.9689 19.7132 17.157 18.8247 17.1165L18.7837 17.1139L18.6261 17.0997C18.6214 17.1402 18.6166 17.1812 18.6119 17.2206C18.6051 17.2799 18.5977 17.3414 18.5903 17.4066C18.5304 19.697 18.201 21.1509 17.5232 22.1161C16.8059 23.1371 15.815 23.4218 14.9422 23.6089C14.6733 23.6679 14.3989 23.6983 14.1236 23.6998ZM12.4259 15.2785C12.9865 15.7267 13.0348 16.5454 13.0774 18.0734C13.0827 18.2567 13.0874 18.4364 13.0942 18.6046C13.1142 19.1038 13.1609 20.2734 13.3417 20.7589C13.368 20.8309 13.3916 20.9029 13.4168 20.9796C13.6202 21.6033 13.7043 21.8613 14.5281 21.6847C15.2548 21.5271 15.6269 21.391 15.9132 20.9838C16.3409 20.3748 16.5805 19.1384 16.6247 17.3094L17.6067 17.333L16.6315 17.2158L16.6583 16.9909C16.7434 16.259 16.8107 15.6805 17.333 15.3069C17.6629 15.0715 18.0339 15.04 18.3555 15.0694C18.1685 14.8848 18.0383 14.6505 17.9803 14.3942L17.8983 13.9912L18.1285 13.6497C19.3459 11.8432 20.3516 9.62213 20.8876 7.55452C21.4882 5.23784 21.2233 4.25526 21.1198 4.11917C18.9361 1.33327 15.1356 2.47243 14.7178 2.60957L14.6443 2.64898L14.2765 2.71676L14.0878 2.67788C13.5686 2.57446 13.0409 2.51975 12.5115 2.51447C11.6282 2.50028 10.9126 2.70783 10.3288 3.15078L9.88113 3.49021L9.36094 3.27636C8.34001 2.86073 5.35759 2.0237 3.79335 3.13186C2.93162 3.7419 2.53964 4.94674 2.62791 6.71381C2.65839 7.32542 3.07349 9.62003 3.75814 11.8269C4.69921 14.8582 5.52941 15.6989 5.76534 15.7693C5.79476 15.7567 5.89932 15.7026 6.06536 15.5029C7.0863 14.2749 8.05732 13.2514 8.0983 13.2083L8.66683 12.6103L9.35411 13.0669C9.58135 13.2204 9.8439 13.3135 10.1171 13.3375L11.7496 11.9441L11.5121 14.3685C11.5062 14.4447 11.5103 14.5213 11.5242 14.5965L11.5957 15.0557L11.2856 15.402L11.2772 15.4115L12.0391 15.763L12.4259 15.2785Z"
          fill="black"
        />
        <path
          d="M21.768 14.5507C19.125 15.0961 18.9432 14.2013 18.9432 14.2013C21.7339 10.0603 22.9003 4.80425 21.8962 3.51744C19.1471 0.00852823 14.3929 1.66945 14.3135 1.71096L14.2878 1.71569C13.7071 1.59935 13.1167 1.53778 12.5244 1.53179C11.3285 1.51235 10.4226 1.84705 9.73274 2.36777C9.73274 2.36777 1.25156 -1.12643 1.64617 6.76205C1.73024 8.43979 4.05165 19.4594 6.82021 16.1312C7.83221 14.9138 8.81269 13.885 8.81269 13.885C9.30522 14.2174 9.89777 14.3687 10.4894 14.3132L10.5367 14.2727C10.5228 14.4305 10.5291 14.5895 10.5556 14.7456C9.84255 15.5427 10.0522 15.6825 8.62615 15.9762C7.18329 16.2731 8.03083 16.8027 8.58412 16.9409C9.25511 17.1091 10.8073 17.3466 11.8561 15.8785L11.814 16.0461C12.0936 16.2699 12.2901 17.5021 12.257 18.6208C12.2239 19.7394 12.2044 20.5045 12.4225 21.1035C12.6405 21.7025 12.8618 23.0476 14.7344 22.6488C16.3008 22.3131 17.1126 21.4435 17.225 19.9922C17.3054 18.9607 17.4878 19.1131 17.4983 18.191L17.6438 17.7543C17.8114 16.3561 17.6701 15.9053 18.6353 16.1149L18.8697 16.1354C19.5801 16.168 20.5096 16.0214 21.055 15.7676C22.2299 15.2222 22.9266 14.3121 21.768 14.5512V14.5507Z"
          fill="#336791"
        />
        <path
          d="M14.2169 23.0912C12.6405 23.0912 12.1403 21.8433 11.9359 21.3326C11.6868 20.7084 11.5991 18.6208 11.6143 16.5863C10.812 17.3098 9.72274 17.5378 8.48375 17.2273C8.37866 17.201 7.46807 16.9562 7.48015 16.3734C7.49119 15.8396 8.25255 15.683 8.53892 15.6236C9.54672 15.4161 9.61188 15.3336 9.92504 14.9364C9.99072 14.8528 10.068 14.7546 10.1636 14.6416C10.1636 14.6342 10.1636 14.6263 10.1636 14.619C9.7061 14.6077 9.25778 14.4883 8.85524 14.2706C8.58201 14.5612 7.84429 15.3578 7.05507 16.3078C6.38513 17.1133 5.75197 17.118 5.33845 16.9798C4.31594 16.6388 3.34176 14.9805 2.44851 12.0506C1.76911 9.82485 1.33878 7.50187 1.29937 6.74523C1.18692 4.50159 1.76596 2.9137 3.02072 2.02622C5.2507 0.449894 8.84578 1.64318 9.68071 1.95424C10.4641 1.41618 11.4147 1.15346 12.5102 1.17133C13.0653 1.17855 13.6178 1.24906 14.157 1.3815C14.5705 1.23858 15.6897 0.944336 16.9896 0.944336H17.0112C19.1686 0.94959 20.9394 1.75772 22.1316 3.28151C22.9355 4.30875 22.4054 6.80933 22.14 7.8371C21.5878 9.97355 20.5637 12.265 19.3215 14.1598C19.5112 14.2985 20.085 14.5276 21.6824 14.196C22.2215 14.0846 22.5457 14.1829 22.646 14.4876C22.841 15.0767 21.7675 15.7545 21.1748 16.0303C20.7544 16.2263 20.116 16.3708 19.4692 16.4176C19.1329 16.4418 18.5675 16.4538 18.1424 16.3193C18.0226 17.4175 17.7689 19.4631 17.6212 20.3195C17.3448 21.9232 16.6297 22.6504 14.984 23.0035C14.7321 23.0596 14.4749 23.089 14.2169 23.0912ZM12.2864 15.5411C12.2191 18.1794 12.3284 20.5481 12.5444 21.0882C12.8828 21.9337 13.3961 22.674 14.8463 22.363C16.2445 22.0629 16.7421 21.5596 16.9754 20.2087C17.1515 19.1872 17.5009 16.2999 17.5482 15.6736C17.4862 14.4377 18.1524 14.1913 18.5229 14.0846C18.4756 14.0163 18.413 13.9385 18.3489 13.8582C18.2927 13.7883 18.2312 13.711 18.1666 13.6254C18.163 13.6212 18.1597 13.6168 18.1566 13.6122C17.9431 13.3314 17.7665 13.0243 17.6312 12.6985C17.597 12.6165 17.4893 12.4226 17.3643 12.1988C16.6812 10.9761 15.2625 8.4319 16.181 7.12144C16.6013 6.51981 17.432 6.27811 18.6505 6.40159C18.4929 5.93394 18.1088 5.0512 17.3333 4.13483C16.6759 3.35822 15.6371 2.46497 14.1349 2.05355C14.0994 2.05062 14.0648 2.04155 14.0324 2.02675C13.5315 1.90032 13.0174 1.8333 12.5008 1.82708C11.2749 1.80659 10.2703 2.18281 9.51572 2.94522C8.31613 4.15374 7.99719 6.06373 7.91312 7.08414C7.96934 7.05314 8.02977 7.02056 8.09492 6.98746C8.39863 6.8335 9.00762 6.5671 9.67125 6.49617C10.782 6.3811 11.5145 6.87659 11.7336 7.89069C12.3195 10.5994 11.7799 11.7979 11.3858 12.6722C11.3127 12.8341 11.2439 12.9875 11.1887 13.1351C11.0638 13.4556 10.9585 13.7834 10.8735 14.1167C11.1562 14.0505 11.391 14.1477 11.5198 14.2013C11.8508 14.3384 12.1266 14.6694 12.2401 15.0651C12.2858 15.2194 12.3015 15.381 12.2864 15.5411ZM8.20579 16.4029C8.34015 16.4891 8.48787 16.5525 8.64296 16.5905C9.51677 16.8096 10.7337 16.8243 11.5686 15.6552C11.6033 15.6053 11.6253 15.5478 11.6327 15.4875C11.6327 15.4529 11.6327 15.4182 11.6354 15.3825C11.6318 15.3355 11.6236 15.289 11.6107 15.2437C11.5534 15.0446 11.4131 14.8644 11.2691 14.8045C11.0915 14.7309 10.9933 14.6905 10.7789 14.9301C10.6349 15.0903 10.5309 15.2222 10.4394 15.3388C10.0396 15.8464 9.85673 16.0182 8.67133 16.2626C8.51127 16.2918 8.35507 16.3392 8.20579 16.4039V16.4029ZM5.91066 1.88593C5.0174 1.88593 4.11259 2.0567 3.39956 2.56165C2.3408 3.31146 1.85476 4.70808 1.95512 6.71265C1.98665 7.34686 2.38808 9.60942 3.07484 11.862C3.86878 14.4629 4.76887 16.1023 5.54442 16.3614C5.66317 16.4013 6.02573 16.5221 6.55012 15.8916C7.29047 15.001 7.98615 14.2422 8.3072 13.8986C8.22612 13.8294 8.1486 13.7561 8.07495 13.679C7.3593 12.9328 7.03142 11.9014 7.17329 10.8453L7.22899 7.79506C7.22426 7.5728 7.18853 4.36655 9.04965 2.48809C9.06279 2.47443 9.07645 2.46129 9.08958 2.44815C8.41597 2.22432 7.17119 1.88593 5.91066 1.88593ZM18.2018 15.6341C18.2817 15.6988 18.6195 15.8044 19.2848 15.7734C19.8864 15.745 20.5201 15.6131 20.8989 15.4376C21.2387 15.2861 21.553 15.0832 21.8311 14.836L21.8163 14.8386C20.4707 15.1166 19.5181 15.0782 18.9837 14.7257C18.9519 14.7048 18.9212 14.6824 18.8917 14.6584C18.8471 14.6742 18.8008 14.6873 18.753 14.7004C18.4504 14.7856 18.1661 14.8659 18.2018 15.6341ZM7.88264 7.89017L7.8301 10.8742L7.82695 10.9136C7.70609 11.7763 7.96987 12.6181 8.54943 13.2255C8.76487 13.4565 9.02501 13.6413 9.31406 13.7686C9.6031 13.896 9.91501 13.9633 10.2308 13.9664H10.2398C10.3316 13.6075 10.4454 13.2546 10.5808 12.9097C10.6433 12.7411 10.7169 12.5782 10.7941 12.4058C11.1709 11.5693 11.6396 10.5284 11.0994 8.03099C10.9943 7.54863 10.7442 7.26804 10.3323 7.17346C9.93818 7.08309 9.39644 7.1598 8.80847 7.3889C8.32559 7.57333 7.99561 7.79086 7.88264 7.89017ZM18.8224 13.4021L18.8602 13.4494C18.887 13.483 18.9127 13.5161 18.939 13.5487C21.5352 9.46334 22.4322 4.72753 21.6188 3.68662C20.5563 2.32888 19.0362 1.62741 17.1 1.60061C16.4901 1.59499 15.8813 1.65168 15.283 1.76981C16.2494 2.20906 17.1068 2.85664 17.7936 3.66613C18.8371 4.88096 19.3489 6.22241 19.3914 6.67114C19.3976 6.72892 19.3942 6.78733 19.3814 6.84401C19.3983 7.31323 19.3373 7.70994 19.2764 8.09404C19.2189 8.42753 19.1823 8.7643 19.1671 9.10237C19.1555 9.44811 19.1954 9.82012 19.2375 10.2142C19.3441 11.1968 19.4618 12.3018 18.8224 13.4021ZM18.061 7.02529C17.4977 7.02529 16.9702 7.13826 16.7185 7.49819C16.0354 8.47236 17.3685 10.861 17.9375 11.8809C18.0836 12.1436 18.1892 12.3323 18.2375 12.45C18.2859 12.5669 18.341 12.6809 18.4025 12.7915C18.7703 11.9624 18.6789 11.1101 18.5906 10.2846C18.546 9.86741 18.504 9.47385 18.5166 9.0824C18.5321 8.71807 18.5711 8.35512 18.6332 7.99578C18.6873 7.68999 18.7202 7.38081 18.7315 7.07048C18.5091 7.0417 18.2852 7.02661 18.061 7.02529Z"
          fill="white"
        />
        <path
          d="M9.68974 7.74477C9.6745 7.84986 9.88573 8.1378 10.1626 8.17616C10.4395 8.21452 10.6734 7.9912 10.6881 7.88401C10.7028 7.77682 10.4921 7.65912 10.2152 7.62129C9.93827 7.58346 9.70445 7.63863 9.68974 7.7453V7.74477Z"
          fill="white"
        />
        <path
          d="M18.066 7.52679C18.0812 7.63187 17.87 7.91982 17.5931 7.95765C17.3162 7.99548 17.0823 7.77269 17.0676 7.66603C17.0529 7.55936 17.2641 7.44061 17.5405 7.40331C17.8169 7.366 18.0512 7.42065 18.066 7.52784V7.52679Z"
          fill="white"
        />
      </g>

      <g id="icon-hp">
        <path
          d="M0.299805 8.63965V15.3609H0.300009H23.6998V8.63965H0.299805ZM22.2372 13.8987H1.76255V10.1022H22.2372V13.8987Z"
          fill="#01A982"
        />
      </g>

      <g id="icon-postman">
        <path
          d="M13.4903 0.395109C11.195 0.100358 8.86394 0.492869 6.79174 1.523C4.71957 2.55314 2.99941 4.17462 1.84881 6.1824C0.698204 8.19021 0.168832 10.4941 0.327637 12.8027C0.486442 15.1114 1.32629 17.3211 2.74098 19.1524C4.15566 20.9837 6.08164 22.3544 8.27536 23.0911C10.469 23.8278 12.8319 23.8974 15.0652 23.2912C17.2985 22.6849 19.3019 21.43 20.8219 19.6852C22.342 17.9403 23.3104 15.7839 23.6049 13.4886C23.9997 10.411 23.1559 7.30267 21.2591 4.84722C19.3623 2.39177 16.5678 0.790313 13.4903 0.395109Z"
          fill="#FF6C37"
        />
        <path
          d="M8.75818 12.7397C8.76271 12.749 8.77039 12.7564 8.77975 12.7606C8.78911 12.7649 8.79971 12.7658 8.80966 12.7631L10.6817 12.3595L9.89425 11.5615L8.77222 12.6835C8.76337 12.6895 8.75708 12.6985 8.75445 12.7089C8.75189 12.7193 8.75321 12.7303 8.75818 12.7397Z"
          fill="white"
        />
        <path
          d="M17.524 4.70118C17.263 4.70144 17.0056 4.76022 16.7704 4.87318C16.5352 4.98613 16.3284 5.1504 16.1651 5.35387C16.0019 5.55734 15.8863 5.79485 15.827 6.04889C15.7676 6.30293 15.766 6.56705 15.8223 6.82179C15.8786 7.07654 15.9913 7.31542 16.152 7.52086C16.3128 7.72629 16.5176 7.89301 16.7514 8.00884C16.9852 8.12467 17.2419 8.18654 17.5028 8.18998C17.7637 8.19341 18.0219 8.13828 18.2587 8.02866L17.0723 6.84228C17.0587 6.82869 17.0479 6.81256 17.0405 6.79479C17.0331 6.77702 17.0293 6.75798 17.0293 6.73874C17.0293 6.7195 17.0331 6.70045 17.0405 6.68268C17.0479 6.66492 17.0587 6.64878 17.0723 6.63519L18.6226 5.08611C18.3112 4.83579 17.9234 4.69991 17.524 4.70118Z"
          fill="white"
        />
        <path
          d="M18.836 5.28809L17.3828 6.73538L18.5224 7.87496C18.6063 7.81602 18.6847 7.7494 18.7564 7.67606C19.0687 7.36162 19.2505 6.94065 19.2653 6.4977C19.28 6.05475 19.1266 5.62262 18.836 5.28809Z"
          fill="white"
        />
        <path
          d="M15.9274 7.95901H15.9016C15.8714 7.95871 15.8412 7.96149 15.8116 7.9672H15.801C15.7684 7.97422 15.7364 7.98358 15.7051 7.99528L15.6805 8.00698C15.657 8.01677 15.6343 8.02847 15.6127 8.04208L15.5869 8.05846C15.5586 8.07798 15.532 8.09992 15.5074 8.12398L11.1982 12.4342L11.7318 12.9677L16.2948 8.96287C16.3206 8.9402 16.344 8.91512 16.365 8.88799L16.3849 8.86225C16.4004 8.83936 16.4145 8.81552 16.427 8.79088C16.434 8.77684 16.4398 8.7628 16.4457 8.74876C16.4536 8.73004 16.4602 8.71088 16.4656 8.69143C16.4656 8.67739 16.4738 8.66335 16.4773 8.64931C16.4831 8.62028 16.487 8.59103 16.489 8.56156V8.52295C16.489 8.50189 16.489 8.48083 16.489 8.45977C16.489 8.43871 16.489 8.43169 16.4831 8.41765C16.4615 8.30723 16.4076 8.20566 16.3283 8.12588C16.2489 8.04617 16.1477 7.99169 16.0374 7.96954H16.0151C15.9862 7.96391 15.9569 7.96039 15.9274 7.95901Z"
          fill="white"
        />
        <path
          d="M10.0959 11.3541L10.9805 12.234L15.3013 7.91315C15.4419 7.77567 15.6251 7.69026 15.8208 7.67096C15.0567 7.08596 14.2237 7.23923 10.0959 11.3541Z"
          fill="white"
        />
        <path
          d="M16.539 9.13086L16.4863 9.18234L11.9233 13.1861L12.6991 13.9606C14.6225 12.1413 16.3296 10.4085 16.539 9.13086Z"
          fill="white"
        />
        <path
          d="M5.15754 18.5112C5.15991 18.5195 5.16478 18.5268 5.17147 18.5323C5.17816 18.5377 5.18637 18.541 5.19498 18.5416L7.18397 18.6785L6.06897 17.5635L5.1669 18.4644C5.16105 18.4705 5.15706 18.4781 5.1554 18.4864C5.15375 18.4947 5.15449 18.5033 5.15754 18.5112Z"
          fill="white"
        />
        <path
          d="M6.2771 17.3563L7.45294 18.5321C7.4669 18.547 7.48558 18.5567 7.50582 18.5595C7.52606 18.5622 7.54665 18.5579 7.56409 18.5473C7.58232 18.5383 7.59685 18.5232 7.60517 18.5046C7.61351 18.486 7.61512 18.4651 7.60972 18.4455L7.41199 17.6008C7.39919 17.546 7.40501 17.4885 7.42853 17.4375C7.45205 17.3865 7.49193 17.3447 7.54186 17.3188C9.60339 16.2857 11.266 15.2222 12.4863 14.1598L11.6673 13.3408L9.91227 13.7187L6.2771 17.3563Z"
          fill="white"
        />
        <path
          d="M11.4152 13.0932L10.9753 12.6533L10.3669 13.2606C10.3625 13.2658 10.3601 13.2725 10.3601 13.2793C10.3601 13.2861 10.3625 13.2927 10.3669 13.298C10.3697 13.3042 10.3747 13.3093 10.3809 13.312C10.3872 13.3148 10.3943 13.3153 10.4008 13.3132L11.4152 13.0932Z"
          fill="white"
        />
        <path
          d="M18.8766 6.23039C18.8706 6.21197 18.8608 6.19506 18.8477 6.18078C18.8347 6.1665 18.8186 6.15518 18.8008 6.14759C18.783 6.14 18.7638 6.1363 18.7444 6.13676C18.725 6.13722 18.706 6.14181 18.6886 6.15023C18.6712 6.15866 18.6557 6.17072 18.6433 6.1856C18.6309 6.20048 18.6219 6.21784 18.6168 6.23652C18.6116 6.2552 18.6105 6.27475 18.6136 6.29387C18.6167 6.31299 18.6238 6.33125 18.6344 6.34738C18.6694 6.41775 18.6833 6.49673 18.6744 6.57478C18.6655 6.65284 18.6341 6.72666 18.5841 6.78731C18.5678 6.80712 18.5573 6.83119 18.5541 6.85672C18.5508 6.88224 18.5549 6.90816 18.5658 6.93146C18.5767 6.95476 18.594 6.97448 18.6157 6.98831C18.6374 7.00215 18.6626 7.00953 18.6883 7.00961C18.7082 7.00939 18.7278 7.0049 18.7457 6.99641C18.7637 6.98793 18.7796 6.97567 18.7924 6.96046C18.8752 6.85978 18.9272 6.73735 18.9422 6.60784C18.9571 6.47834 18.9343 6.34728 18.8766 6.23039Z"
          fill="#FF6C37"
        />
      </g>

      <g id="icon-ibm">
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M13.2527 3.9517C12.132 3.7772 10.9871 3.8387 9.89154 4.13226L9.56543 2.91519C10.8305 2.57622 12.1524 2.5052 13.4466 2.7067C14.7407 2.90819 15.9784 3.37776 17.0806 4.08532C18.1827 4.79288 19.1249 5.72283 19.8468 6.81561C20.5688 7.90839 21.0545 9.1399 21.2729 10.4313C21.4913 11.7226 21.4376 13.0454 21.1152 14.3148C20.7929 15.5842 20.2089 16.7723 19.4007 17.803C18.5926 18.8336 17.5781 19.6841 16.4222 20.3C15.2664 20.9159 13.9946 21.2836 12.6884 21.3795L12.5961 20.1229C13.7273 20.0398 14.8287 19.7214 15.8297 19.188C16.8308 18.6546 17.7093 17.9181 18.4092 17.0255C19.1091 16.1329 19.6148 15.104 19.894 14.0046C20.1732 12.9053 20.2197 11.7598 20.0306 10.6414C19.8414 9.52304 19.4208 8.45651 18.7955 7.51013C18.1703 6.56375 17.3544 5.75839 16.3999 5.14562C15.4454 4.53286 14.3735 4.1262 13.2527 3.9517Z"
          fill="grey"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M5.0181 7.8052C4.46721 8.72204 4.10229 9.73841 3.94419 10.7963C3.78609 11.8541 3.8379 12.9328 4.09667 13.9706C4.35543 15.0085 4.81608 15.9852 5.45231 16.845C6.08854 17.7048 6.8879 18.4309 7.80474 18.9818L7.15579 20.0618C6.09712 19.4257 5.17411 18.5873 4.43945 17.5945C3.7048 16.6017 3.17289 15.4739 2.8741 14.2755C2.5753 13.0771 2.51548 11.8316 2.69803 10.61C2.88059 9.38852 3.30195 8.21492 3.93807 7.15625L5.0181 7.8052Z"
          fill="grey"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M7.34643 10.6129C7.03853 11.6457 7.08295 12.7516 7.47268 13.7564C7.86242 14.7612 8.57532 15.6078 9.49912 16.1629L8.85017 17.2429C7.68669 16.5438 6.78881 15.4775 6.29796 14.212C5.8071 12.9465 5.75116 11.5537 6.13894 10.2529L7.34643 10.6129Z"
          fill="grey"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M12.9599 7.23961C11.8007 7.00587 10.596 7.20314 9.57189 7.79441L8.94189 6.70322C10.2317 5.95854 11.7489 5.71009 13.2089 6.00447C14.6689 6.29885 15.9713 7.11584 16.8718 8.30216C17.7722 9.48848 18.2089 10.9626 18.0998 12.448C17.9907 13.9333 17.3434 15.3278 16.2793 16.3699L15.3977 15.4697C16.2426 14.6423 16.7566 13.535 16.8432 12.3557C16.9298 11.1763 16.5831 10.0059 15.8681 9.06396C15.1532 8.12203 14.1191 7.47335 12.9599 7.23961Z"
          fill="grey"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M7.24307 5.98396C7.24307 6.0971 7.22918 6.20699 7.20302 6.31203L10.5482 9.6571C10.8114 9.49401 11.1005 9.37624 11.4035 9.30906C11.7569 9.23072 12.1223 9.22274 12.4787 9.2856C12.8352 9.34846 13.1758 9.48091 13.4811 9.6754C13.7864 9.86989 14.0504 10.1226 14.258 10.4191C14.4656 10.7156 14.6128 11.0501 14.6911 11.4035C14.7695 11.7569 14.7775 12.1223 14.7146 12.4788C14.6518 12.8352 14.5193 13.1758 14.3248 13.4811C14.1303 13.7864 13.8776 14.0504 13.5811 14.258C13.2939 14.4591 12.9711 14.6035 12.6301 14.6836V19.5773C13.0601 19.8039 13.3532 20.2553 13.3532 20.7752C13.3532 21.5224 12.7474 22.1283 12.0001 22.1283C11.2528 22.1283 10.647 21.5224 10.647 20.7752C10.647 20.2553 10.9401 19.804 11.3701 19.5774V14.6835C11.0686 14.6128 10.7809 14.4916 10.5191 14.3248C10.2138 14.1303 9.94981 13.8776 9.74219 13.5811C9.53457 13.2846 9.38738 12.9501 9.30904 12.5967C9.23069 12.2433 9.22272 11.878 9.28558 11.5215C9.34646 11.1762 9.47262 10.8458 9.65721 10.548L6.36166 7.25258C6.21479 7.30721 6.05587 7.33706 5.88997 7.33706C5.14267 7.33706 4.53687 6.73126 4.53687 5.98396C4.53687 5.23666 5.14267 4.63086 5.88997 4.63086C6.63726 4.63086 7.24307 5.23666 7.24307 5.98396ZM12.2599 10.5265C12.0664 10.4923 11.8681 10.4967 11.6762 10.5392C11.4844 10.5817 11.3028 10.6616 11.1418 10.7743C10.9808 10.8871 10.8436 11.0304 10.738 11.1961C10.6325 11.3618 10.5606 11.5467 10.5264 11.7403C10.4923 11.9338 10.4966 12.1321 10.5392 12.324C10.5817 12.5158 10.6616 12.6974 10.7743 12.8584C10.887 13.0194 11.0303 13.1566 11.1961 13.2622C11.3618 13.3677 11.5467 13.4397 11.7402 13.4738C11.9338 13.5079 12.1321 13.5036 12.324 13.461C12.5158 13.4185 12.6974 13.3386 12.8584 13.2259C13.0194 13.1132 13.1566 12.9699 13.2621 12.8041C13.3677 12.6384 13.4396 12.4535 13.4738 12.26C13.5079 12.0664 13.5035 11.8681 13.461 11.6762C13.4185 11.4844 13.3386 11.3028 13.2259 11.1418C13.1132 10.9809 12.9698 10.8437 12.8041 10.7381C12.6384 10.6325 12.4535 10.5606 12.2599 10.5265Z"
          fill="#061F80"
        />
      </g>

      <g id="icon-ansible">
        <path
          d="M23.7002 11.9999C23.7002 18.4619 18.4622 23.6998 12.0001 23.6998C5.5386 23.6998 0.300049 18.4619 0.300049 11.9999C0.300049 5.53836 5.5386 0.299805 12.0001 0.299805C18.4622 0.299805 23.7002 5.53836 23.7002 11.9999Z"
          fill="#1A1918"
        />
        <path
          d="M12.1973 7.44757L15.2251 14.9204L10.6517 11.3179L12.1973 7.44757ZM17.576 16.6418L12.9188 5.43374C12.7858 5.1105 12.52 4.93945 12.1973 4.93945C11.8741 4.93945 11.5889 5.1105 11.4559 5.43374L6.34424 17.7276H8.09286L10.1164 12.6588L16.1549 17.5373C16.3978 17.7336 16.573 17.8225 16.8008 17.8225C17.257 17.8225 17.6558 17.4805 17.6558 16.9868C17.6558 16.9065 17.6274 16.779 17.576 16.6418Z"
          fill="white"
        />
      </g>

      <g id="icon-swagger">
        <path
          d="M11.9148 23.3481C5.60999 23.3481 0.480469 18.2191 0.480469 11.9141C0.480469 5.60902 5.60999 0.47998 11.9148 0.47998C18.2196 0.47998 23.3491 5.6095 23.3491 11.9143C23.3491 18.2191 18.2196 23.3481 11.9148 23.3481Z"
          fill="#85EA2D"
        />
        <path
          d="M12.0065 1.14456C18.0055 1.14456 22.8684 6.00744 22.8684 12.0065C22.8684 18.0053 18.0055 22.8684 12.0065 22.8684C6.00768 22.8684 1.14456 18.0053 1.14456 12.0065C1.14456 6.00768 6.00768 1.14456 12.0065 1.14456ZM12.0065 0C5.38608 0 0 5.38608 0 12.0065C0 18.6269 5.38608 24.013 12.0065 24.013C18.6269 24.013 24.0132 18.6269 24.0132 12.0065C24.0132 5.38608 18.6269 0 12.0065 0Z"
          fill="#173647"
        />
        <path
          d="M7.66204 8.01452C7.62508 8.4254 7.67572 8.8502 7.64836 9.26564C7.61596 9.68132 7.56508 10.0922 7.48204 10.5031C7.3666 11.0894 7.0018 11.5327 6.49876 11.902C7.47772 12.5392 7.58836 13.5271 7.65292 14.5291C7.68532 15.0693 7.6714 15.6141 7.72684 16.1496C7.76836 16.565 7.92988 16.6713 8.35948 16.685C8.53492 16.6896 8.71468 16.685 8.9182 16.685V17.9685C7.6486 18.1855 6.60052 17.8255 6.3418 16.7498C6.25852 16.3574 6.20308 15.9556 6.18484 15.5493C6.157 15.12 6.20308 14.6906 6.17092 14.2612C6.07852 13.0838 5.92612 12.6868 4.7998 12.6314V11.1679C4.88284 11.1494 4.96132 11.1355 5.04436 11.1264C5.66308 11.094 5.92612 10.9046 6.06004 10.2952C6.12484 9.95372 6.1618 9.6074 6.17548 9.25652C6.2218 8.58716 6.20332 7.90388 6.31852 7.23908C6.48004 6.2834 7.07116 5.82164 8.05468 5.7662C8.33164 5.75228 8.6134 5.7662 8.93188 5.7662V7.07756C8.79796 7.08692 8.68252 7.10516 8.56252 7.10516C7.7638 7.07732 7.72204 7.34972 7.66204 8.01452ZM9.19948 11.0524H9.181C8.71924 11.0294 8.32228 11.3894 8.299 11.8512C8.27596 12.3175 8.63596 12.7147 9.09772 12.7375H9.15316C9.61036 12.7653 10.0025 12.4142 10.0304 11.9572V11.9112C10.0397 11.4448 9.6658 11.0618 9.19948 11.0524ZM12.0944 11.0524C11.6465 11.0385 11.2724 11.3894 11.2587 11.8327C11.2587 11.8605 11.2587 11.8836 11.2635 11.9112C11.2635 12.4144 11.605 12.7377 12.1222 12.7377C12.63 12.7377 12.9488 12.4053 12.9488 11.8836C12.944 11.3803 12.6068 11.0479 12.0944 11.0524ZM15.0586 11.0524C14.5877 11.0431 14.1951 11.4172 14.1814 11.8881C14.1814 12.359 14.5599 12.7375 15.0308 12.7375H15.0401C15.4649 12.8114 15.8943 12.4005 15.9221 11.9066C15.9449 11.4494 15.5295 11.0524 15.0586 11.0524ZM19.1261 11.1216C18.5904 11.0985 18.3226 10.9185 18.1889 10.4104C18.1056 10.0874 18.055 9.7502 18.0365 9.4178C17.9996 8.79908 18.0041 8.1758 17.9626 7.55708C17.8656 6.089 16.8039 5.5766 15.2616 5.83028V7.10468C15.5062 7.10468 15.6956 7.10468 15.8849 7.10924C16.2128 7.1138 16.4621 7.2386 16.4943 7.6034C16.5267 7.9358 16.5267 8.27276 16.5591 8.60996C16.6239 9.27956 16.6606 9.95804 16.776 10.6183C16.8778 11.1631 17.2517 11.5694 17.7178 11.9018C16.9008 12.4512 16.6606 13.236 16.6191 14.118C16.596 14.7228 16.5821 15.3321 16.55 15.9417C16.5221 16.4956 16.3284 16.6756 15.7697 16.6896C15.6128 16.6941 15.4604 16.708 15.2849 16.7174V18.024C15.6128 18.024 15.9128 18.0424 16.2128 18.024C17.1454 17.9685 17.7087 17.5161 17.8935 16.6111C17.972 16.1124 18.018 15.6093 18.032 15.106C18.0641 14.6443 18.0598 14.178 18.1059 13.721C18.175 13.0053 18.5028 12.7099 19.2185 12.6638C19.2879 12.6544 19.3524 12.6408 19.4172 12.6177V11.154C19.297 11.14 19.2137 11.1264 19.1261 11.1216Z"
          fill="#173647"
        />
        <g style="mix-blend-mode: color">
          <rect width="24" height="24" fill="rgba(243, 243, 243, 1)" />
        </g>
      </g>

      <g id="icon-kubernetes">
        <path
          d="M21.653 5.63029C21.5192 5.20215 21.1981 4.85428 20.7967 4.64021L12.6352 0.733404C12.4212 0.626368 12.1803 0.599609 11.9663 0.599609C11.7522 0.599609 11.5114 0.599609 11.2973 0.653127L3.13581 4.58669C2.73443 4.774 2.44008 5.12187 2.33304 5.57677L0.326122 14.3805C0.245845 14.8354 0.352881 15.2903 0.62047 15.6649L6.26661 22.649C6.58771 22.9701 7.04261 23.1841 7.49752 23.2109H16.4885C16.9702 23.2644 17.4251 23.0504 17.7194 22.649L23.3656 15.6649C23.6332 15.2903 23.7402 14.8354 23.6867 14.3805L21.653 5.63029Z"
          fill="#326DE6"
        />
        <path
          d="M20.3955 14.0329C20.3687 14.0329 20.342 14.0329 20.342 14.0062C20.342 13.9794 20.2884 13.9794 20.2349 13.9794C20.1279 13.9526 20.0209 13.9526 19.9138 13.9526C19.8603 13.9526 19.8068 13.9526 19.7533 13.9259H19.7265C19.4322 13.8991 19.111 13.8456 18.8167 13.7653C18.7364 13.7386 18.6561 13.6583 18.6294 13.578C18.6561 13.578 18.6294 13.578 18.6294 13.578L18.4153 13.5245C18.5224 12.7485 18.4688 11.9457 18.3083 11.1697C18.121 10.3937 17.7999 9.64445 17.3717 8.97547L17.5323 8.81492V8.78816C17.5323 8.70788 17.559 8.60085 17.6125 8.54733C17.8534 8.33326 18.0942 8.17271 18.3618 8.01215C18.4153 7.98539 18.4688 7.95863 18.5224 7.93188C18.6294 7.87836 18.7097 7.82484 18.8167 7.77132C18.8435 7.74456 18.8702 7.74456 18.897 7.7178C18.9237 7.69105 18.897 7.69105 18.897 7.66429C19.1378 7.47697 19.1913 7.15587 19.004 6.91504C18.9237 6.808 18.7632 6.72772 18.6294 6.72772C18.4956 6.72772 18.3618 6.78124 18.2548 6.86152L18.228 6.88828C18.2012 6.91504 18.1745 6.9418 18.1477 6.9418C18.0674 7.02207 17.9872 7.10235 17.9337 7.18263C17.9069 7.23614 17.8534 7.2629 17.8266 7.28966C17.6393 7.50373 17.3985 7.7178 17.1576 7.87836C17.1041 7.90512 17.0506 7.93188 16.9971 7.93188C16.9703 7.93188 16.9168 7.93188 16.8901 7.90512H16.8633L16.6492 8.03891C16.4352 7.82484 16.1943 7.61077 15.9803 7.3967C14.9902 6.62069 13.7593 6.13903 12.5016 6.00523L12.4748 5.79116V5.81792C12.3946 5.7644 12.3678 5.68413 12.341 5.60385C12.341 5.3095 12.341 5.01515 12.3946 4.69405V4.66729C12.3946 4.61377 12.4213 4.56025 12.4213 4.50673C12.4481 4.3997 12.4481 4.29266 12.4748 4.18563V4.02507C12.5016 3.75748 12.2875 3.48989 12.0199 3.46313C11.8594 3.43638 11.6988 3.51665 11.565 3.65045C11.458 3.75748 11.4045 3.89128 11.4045 4.02507V4.15887C11.4045 4.2659 11.4312 4.37294 11.458 4.47997C11.4848 4.53349 11.4848 4.58701 11.4848 4.64053V4.66729C11.5383 4.96164 11.5383 5.25598 11.5383 5.57709C11.5115 5.65737 11.4848 5.73764 11.4045 5.79116V5.84468L11.3777 6.05875C11.0834 6.08551 10.789 6.13903 10.4679 6.19255C9.21025 6.46013 8.05961 7.12911 7.17657 8.06567L7.01601 7.95863H6.98925C6.9625 7.95863 6.93574 7.98539 6.88222 7.98539C6.8287 7.98539 6.77518 7.95863 6.72166 7.93188C6.48083 7.74456 6.24 7.53049 6.05269 7.31642C6.02593 7.2629 5.97242 7.23614 5.94566 7.20938C5.86538 7.12911 5.81186 7.04883 5.73158 6.96855C5.70483 6.9418 5.67807 6.9418 5.65131 6.91504C5.62455 6.88828 5.62455 6.88828 5.62455 6.88828C5.51751 6.808 5.38372 6.75448 5.24992 6.75448C5.08937 6.75448 4.95558 6.808 4.8753 6.9418C4.71475 7.18263 4.76826 7.50373 4.98233 7.69105C5.00909 7.69105 5.00909 7.7178 5.00909 7.7178C5.00909 7.7178 5.06261 7.77132 5.08937 7.77132C5.16965 7.82484 5.27668 7.87836 5.38372 7.93188C5.43724 7.95863 5.49075 7.98539 5.54427 8.01215C5.81186 8.17271 6.07945 8.33326 6.29352 8.54733C6.34704 8.60085 6.40056 8.70788 6.3738 8.78816V8.7614L6.53435 8.92196C6.50759 8.97547 6.48083 9.00223 6.45408 9.05575C5.62455 10.3669 5.27668 11.919 5.51751 13.4442L5.30344 13.4977C5.30344 13.5245 5.27668 13.5245 5.27668 13.5245C5.24992 13.6048 5.16965 13.6583 5.08937 13.7118C4.79502 13.7921 4.50067 13.8456 4.17957 13.8724C4.12605 13.8724 4.07253 13.8724 4.01901 13.8991C3.91198 13.8991 3.80494 13.9259 3.69791 13.9259C3.67115 13.9259 3.64439 13.9526 3.59087 13.9526C3.56411 13.9526 3.56411 13.9526 3.53735 13.9794C3.243 14.0329 3.05569 14.3005 3.10921 14.5948C3.16273 14.8357 3.40356 14.9962 3.64439 14.9695C3.69791 14.9695 3.72467 14.9695 3.77818 14.9427C3.80494 14.9427 3.80494 14.9427 3.80494 14.916C3.80494 14.8892 3.88522 14.916 3.91198 14.916C4.01901 14.8892 4.12605 14.8357 4.20633 14.8089C4.25984 14.7822 4.31336 14.7554 4.36688 14.7554H4.39364C4.68799 14.6484 4.95558 14.5681 5.27668 14.5146H5.30344C5.38372 14.5146 5.464 14.5413 5.51751 14.5948C5.54427 14.5948 5.54427 14.6216 5.54427 14.6216L5.7851 14.5948C6.18649 15.8258 6.93574 16.9229 7.97933 17.7256C8.22017 17.913 8.43424 18.0735 8.70183 18.2073L8.56803 18.3946C8.56803 18.4214 8.59479 18.4214 8.59479 18.4214C8.64831 18.5017 8.64831 18.6087 8.62155 18.689C8.51451 18.9566 8.35396 19.2241 8.19341 19.465V19.4917C8.16665 19.5452 8.13989 19.572 8.08637 19.6255C8.03285 19.679 7.97933 19.7861 7.89906 19.8931C7.8723 19.9199 7.8723 19.9466 7.84554 19.9734C7.84554 19.9734 7.84554 20.0002 7.81878 20.0002C7.68499 20.2677 7.79202 20.5888 8.03285 20.7226C8.08637 20.7494 8.16665 20.7762 8.22016 20.7762C8.43424 20.7762 8.62155 20.6424 8.72858 20.4551C8.72858 20.4551 8.72858 20.4283 8.75534 20.4283C8.75534 20.4015 8.7821 20.3748 8.80886 20.348C8.83562 20.241 8.88914 20.1607 8.9159 20.0537L8.96942 19.8931C9.04969 19.5988 9.18349 19.3312 9.31728 19.0636C9.3708 18.9833 9.45108 18.9298 9.53135 18.903C9.55811 18.903 9.55811 18.903 9.55811 18.8763L9.66515 18.6622C10.4144 18.9566 11.1904 19.0903 11.9932 19.0903C12.4748 19.0903 12.9565 19.0368 13.4382 18.903C13.7325 18.8495 14.0269 18.7425 14.2944 18.6622L14.4015 18.8495C14.4282 18.8495 14.4282 18.8495 14.4282 18.8763C14.5085 18.903 14.5888 18.9566 14.6423 19.0368C14.7761 19.3044 14.9099 19.572 14.9902 19.8664V19.8931L15.0437 20.0537C15.0704 20.1607 15.0972 20.2677 15.1507 20.348C15.1775 20.3748 15.1775 20.4015 15.2042 20.4283C15.2042 20.4283 15.2042 20.4551 15.231 20.4551C15.338 20.6424 15.5254 20.7762 15.7394 20.7762C15.8197 20.7762 15.8732 20.7494 15.9535 20.7226C16.0605 20.6691 16.1676 20.5621 16.1943 20.4283C16.2211 20.2945 16.2211 20.1607 16.1676 20.0269C16.1676 20.0002 16.1408 20.0002 16.1408 20.0002C16.1408 19.9734 16.114 19.9466 16.0873 19.9199C16.0338 19.8128 15.9803 19.7326 15.9 19.6523C15.8732 19.5988 15.8465 19.572 15.7929 19.5185V19.465C15.6056 19.2241 15.4718 18.9566 15.3648 18.689C15.338 18.6087 15.338 18.5017 15.3916 18.4214C15.3916 18.3946 15.4183 18.3946 15.4183 18.3946L15.338 18.1805C16.7027 17.351 17.7463 16.0666 18.228 14.5413L18.4421 14.5681C18.4688 14.5681 18.4688 14.5413 18.4688 14.5413C18.5224 14.4878 18.6026 14.4611 18.6829 14.4611H18.7097C19.004 14.5146 19.2984 14.5948 19.566 14.7019H19.5927C19.6462 14.7286 19.6997 14.7554 19.7533 14.7554C19.8603 14.8089 19.9406 14.8624 20.0476 14.8892C20.0744 14.8892 20.1011 14.916 20.1546 14.916C20.1814 14.916 20.1814 14.916 20.2082 14.9427C20.2617 14.9695 20.2884 14.9695 20.342 14.9695C20.5828 14.9695 20.7969 14.8089 20.8771 14.5948C20.8504 14.3005 20.6363 14.0864 20.3955 14.0329ZM12.6621 13.2034L11.9397 13.5513L11.2172 13.2034L11.0299 12.4274L11.5383 11.7852H12.341L12.8495 12.4274L12.6621 13.2034ZM17.0239 11.4641C17.1576 12.026 17.1844 12.5879 17.1309 13.1499L14.5888 12.4274C14.348 12.3739 14.2142 12.133 14.2677 11.8922C14.2944 11.8119 14.3212 11.7584 14.3747 11.7049L16.3816 9.88528C16.676 10.3669 16.8901 10.9021 17.0239 11.4641ZM15.5789 8.8952L13.3846 10.4472C13.1973 10.5543 12.9297 10.5275 12.7959 10.3402C12.7424 10.2867 12.7157 10.2331 12.7157 10.1529L12.5551 7.45022C13.7325 7.58401 14.7761 8.09243 15.5789 8.8952ZM10.7355 7.53049L11.2707 7.42346L11.1369 10.0993C11.1369 10.3402 10.9228 10.5275 10.682 10.5275C10.6017 10.5275 10.5482 10.5007 10.4679 10.474L8.24692 8.8952C8.94266 8.22622 9.79894 7.74456 10.7355 7.53049ZM7.47091 9.88528L9.45108 11.6514C9.63839 11.8119 9.66515 12.0795 9.50459 12.2668C9.45108 12.3471 9.39756 12.3739 9.29052 12.4006L6.69491 13.1499C6.61463 12.026 6.88222 10.8754 7.47091 9.88528ZM7.01601 14.4075L9.66515 13.9526C9.87922 13.9526 10.0933 14.0864 10.12 14.3005C10.1468 14.3808 10.1468 14.4878 10.0933 14.5681L9.07645 17.0299C8.13989 16.4145 7.39064 15.4779 7.01601 14.4075ZM13.0903 17.7256C12.7157 17.8059 12.341 17.8594 11.9397 17.8594C11.3777 17.8594 10.789 17.7524 10.2538 17.5918L11.565 15.2103C11.6988 15.0498 11.9129 14.9962 12.1002 15.1033C12.1805 15.1568 12.234 15.2103 12.3143 15.2906L13.5987 17.6186C13.4382 17.6454 13.2776 17.6721 13.0903 17.7256ZM16.3549 15.3976C15.9535 16.0398 15.3916 16.6018 14.7493 17.0032L13.7057 14.4878C13.6522 14.2737 13.7593 14.0597 13.9466 13.9794C14.0269 13.9526 14.1071 13.9259 14.1874 13.9259L16.8633 14.3808C16.7295 14.7554 16.569 15.1033 16.3549 15.3976Z"
          fill="white"
        />
      </g>

      <g id="icon-clickhouse">
        <path
          d="M0.300049 19.7002H2.90005V22.3002H0.300049V19.7002Z"
          fill="#FF0000"
        />
        <path d="M0.300049 1.5H2.90005V19.7H0.300049V1.5Z" fill="#FFCC00" />
        <path d="M5.50024 1.5H8.10024V22.3H5.50024V1.5Z" fill="#FFCC00" />
        <path d="M13.2999 1.5H10.6999V22.3H13.2999V1.5Z" fill="#FFCC00" />
        <path d="M15.9 1.5H18.5V22.3H15.9V1.5Z" fill="#FFCC00" />
        <path
          d="M23.7002 9.95002H21.1002V13.85H23.7002V9.95002Z"
          fill="#FFCC00"
        />
      </g>

      <g id="icon-terraform">
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M8.80154 4.42193L15.1974 8.11543V15.5024L8.80154 11.8089V4.42193ZM15.8972 8.11543V15.5024L22.2964 11.8089V4.42193L15.8972 8.11543ZM1.70251 0.299805V7.68681L8.09834 11.3803V3.99331L1.70251 0.299805ZM8.80154 20.0063L15.1974 23.6998V16.3128L8.80154 12.6193V20.0063Z"
          fill="#7B42BC"
        />
      </g>

      <g id="icon-figma">
        <path
          d="M11.9004 11.9996C11.9004 11.0979 12.2586 10.2331 12.8963 9.59544C13.5339 8.95782 14.3987 8.59961 15.3004 8.59961C16.2022 8.59961 17.067 8.95782 17.7046 9.59544C18.3422 10.2331 18.7004 11.0979 18.7004 11.9996C18.7004 12.9013 18.3422 13.7661 17.7046 14.4038C17.067 15.0414 16.2022 15.3996 15.3004 15.3996C14.3987 15.3996 13.5339 15.0414 12.8963 14.4038C12.2586 13.7661 11.9004 12.9013 11.9004 11.9996Z"
          fill="#1ABCFE"
        />
        <path
          d="M5.10001 18.8004C5.10001 17.8986 5.45822 17.0338 6.09584 16.3962C6.73346 15.7586 7.59827 15.4004 8.5 15.4004H11.9V18.8004C11.9 19.7021 11.5418 20.5669 10.9042 21.2045C10.2665 21.8422 9.40174 22.2004 8.5 22.2004C7.59827 22.2004 6.73346 21.8422 6.09584 21.2045C5.45822 20.5669 5.10001 19.7021 5.10001 18.8004V18.8004Z"
          fill="#0ACF83"
        />
        <path
          d="M11.9004 1.7998V8.5998H15.3004C16.2022 8.5998 17.067 8.24158 17.7046 7.60396C18.3422 6.96634 18.7004 6.10153 18.7004 5.1998C18.7004 4.29807 18.3422 3.43326 17.7046 2.79564C17.067 2.15802 16.2022 1.7998 15.3004 1.7998L11.9004 1.7998Z"
          fill="#FF7262"
        />
        <path
          d="M5.10001 5.1998C5.10001 6.10153 5.45822 6.96634 6.09584 7.60396C6.73346 8.24158 7.59827 8.5998 8.5 8.5998H11.9V1.7998H8.5C7.59827 1.7998 6.73346 2.15802 6.09584 2.79564C5.45822 3.43326 5.10001 4.29807 5.10001 5.1998V5.1998Z"
          fill="#F24E1E"
        />
        <path
          d="M5.10001 11.9996C5.10001 12.9013 5.45822 13.7661 6.09584 14.4038C6.73346 15.0414 7.59827 15.3996 8.5 15.3996H11.9V8.59961H8.5C7.59827 8.59961 6.73346 8.95782 6.09584 9.59544C5.45822 10.2331 5.10001 11.0979 5.10001 11.9996V11.9996Z"
          fill="#A259FF"
        />
      </g>

      <g id="icon-grafana">
        <path
          d="M22.7092 10.6226C22.6739 10.2298 22.6059 9.77663 22.475 9.2756C22.3441 8.77708 22.1502 8.23073 21.8708 7.66172C21.5862 7.09774 21.2161 6.50858 20.7378 5.93957C20.5514 5.71549 20.3475 5.49645 20.1259 5.27992C20.4558 3.97069 19.7256 2.8377 19.7256 2.8377C18.4667 2.75965 17.6661 3.22795 17.369 3.44448C17.3187 3.42434 17.2708 3.40168 17.2205 3.38154C17.0065 3.29341 16.7849 3.21285 16.5583 3.14235C16.3317 3.07185 16.1001 3.00639 15.8634 2.94848C15.6267 2.89309 15.385 2.84525 15.1408 2.80749C15.098 2.79993 15.0552 2.7949 15.0124 2.78986C14.4635 1.03247 12.8849 0.299805 12.8849 0.299805C11.1275 1.41517 10.7926 2.97618 10.7926 2.97618C10.7926 2.97618 10.7851 3.01143 10.775 3.06933C10.6768 3.09703 10.5811 3.12472 10.483 3.15494C10.347 3.19522 10.2161 3.24558 10.0801 3.29341C9.94667 3.34629 9.81323 3.39664 9.67979 3.45455C9.41543 3.56785 9.15106 3.69625 8.89425 3.83977C8.64499 3.98076 8.40077 4.13434 8.16158 4.30052C8.12634 4.28541 8.10116 4.27282 8.10116 4.27282C5.66649 3.34377 3.50374 4.46165 3.50374 4.46165C3.30736 7.05242 4.47559 8.68392 4.70723 8.9785C4.64932 9.13964 4.59645 9.30077 4.54609 9.46443C4.36481 10.0511 4.23137 10.6528 4.14829 11.2772C4.1357 11.3653 4.12563 11.456 4.11556 11.5466C1.8672 12.6569 1.2 14.9355 1.2 14.9355C3.07824 17.0957 5.26617 17.2292 5.26617 17.2292C5.26869 17.2267 5.2712 17.2267 5.2712 17.2241C5.55067 17.7201 5.87295 18.1935 6.23299 18.6341C6.38405 18.8179 6.54519 18.9966 6.70884 19.1679C6.02401 21.1241 6.80452 22.7556 6.80452 22.7556C8.89425 22.8337 10.2689 21.8417 10.556 21.6126C10.7649 21.6831 10.9739 21.746 11.1879 21.8014C11.83 21.9676 12.4871 22.0633 13.1442 22.0935C13.3079 22.101 13.4715 22.1035 13.6377 22.1035H13.7183L13.7711 22.101L13.8744 22.0985L13.9776 22.0935L13.9801 22.096C14.9646 23.5009 16.6968 23.6998 16.6968 23.6998C17.9279 22.4006 17.9984 21.1141 17.9984 20.8346C17.9984 20.8346 17.9984 20.8245 17.9984 20.817C17.9984 20.7943 17.9984 20.7767 17.9984 20.7767C17.9984 20.7566 17.9959 20.7389 17.9959 20.7163C18.2553 20.535 18.502 20.3411 18.7336 20.1321C19.2271 19.6865 19.6576 19.1779 20.0152 18.6316C20.0479 18.5812 20.0806 18.5283 20.1134 18.4755C21.5082 18.556 22.4901 17.6119 22.4901 17.6119C22.2585 16.1591 21.4301 15.4516 21.2589 15.3157C21.2589 15.3157 21.2514 15.3107 21.2413 15.3031C21.2312 15.2955 21.2262 15.2905 21.2262 15.2905C21.2161 15.2855 21.2061 15.2779 21.196 15.2704C21.2035 15.1822 21.2111 15.0966 21.2161 15.0085C21.2262 14.8524 21.2312 14.6963 21.2312 14.5402V14.4244V14.3665V14.3363C21.2312 14.296 21.2312 14.3111 21.2312 14.296L21.2262 14.1978L21.2187 14.0669C21.2161 14.0216 21.2136 13.9813 21.2086 13.941C21.2061 13.9007 21.201 13.8604 21.196 13.8201L21.1809 13.6993L21.1633 13.5784C21.1406 13.4198 21.1079 13.2612 21.0726 13.1026C20.9266 12.4757 20.6824 11.8815 20.3601 11.3477C20.0378 10.8139 19.635 10.3406 19.1843 9.9428C18.7311 9.54248 18.225 9.22272 17.6938 8.98354C17.1626 8.74435 16.6036 8.59077 16.0472 8.52027C15.7702 8.48502 15.4908 8.46991 15.2163 8.47243L15.1131 8.47495H15.0879C15.0804 8.47495 15.0502 8.47495 15.0527 8.47495L15.0099 8.47747L14.9092 8.48502C14.8714 8.48754 14.8311 8.49006 14.7959 8.49509C14.6549 8.50768 14.5139 8.52782 14.3779 8.55552C13.8265 8.65875 13.3054 8.85765 12.8446 9.13208C12.3864 9.40652 11.9861 9.75145 11.6613 10.1392C11.3365 10.5294 11.0847 10.96 10.911 11.4056C10.7372 11.8513 10.6416 12.312 10.6139 12.7602C10.6063 12.8709 10.6038 12.9842 10.6063 13.0925C10.6063 13.1202 10.6063 13.1479 10.6088 13.1756L10.6114 13.2662C10.6164 13.3191 10.6189 13.3745 10.6239 13.4274C10.6466 13.654 10.6869 13.8705 10.7473 14.082C10.8682 14.4999 11.062 14.8801 11.3037 15.2024C11.5429 15.5247 11.83 15.7915 12.1346 16.0005C12.4392 16.2095 12.764 16.358 13.0863 16.4512C13.4086 16.5469 13.7283 16.5872 14.0305 16.5872C14.0682 16.5872 14.106 16.5872 14.1438 16.5846C14.1639 16.5846 14.1841 16.5821 14.2042 16.5821C14.2243 16.5821 14.2445 16.5796 14.2646 16.5796C14.2973 16.5771 14.3276 16.572 14.3603 16.5695C14.3678 16.5695 14.3779 16.567 14.388 16.567L14.4182 16.562C14.4383 16.5595 14.456 16.5569 14.4761 16.5544C14.5164 16.5494 14.5491 16.5418 14.5869 16.5343C14.6221 16.5267 14.6574 16.5217 14.6926 16.5116C14.7631 16.4965 14.8286 16.4764 14.8941 16.4537C15.025 16.4109 15.1483 16.358 15.2642 16.3001C15.38 16.2397 15.4857 16.1742 15.5839 16.1063C15.6116 16.0861 15.6393 16.066 15.667 16.0433C15.7728 15.9602 15.7904 15.8066 15.7048 15.7034C15.6318 15.6128 15.5034 15.5901 15.4026 15.6455C15.3775 15.6581 15.3523 15.6732 15.3271 15.6858C15.239 15.7286 15.1483 15.7664 15.0502 15.7991C14.952 15.8293 14.8513 15.8545 14.7455 15.8746C14.6926 15.8822 14.6398 15.8897 14.5844 15.8948C14.5567 15.8973 14.529 15.8998 14.5038 15.8998C14.4761 15.8998 14.4484 15.9023 14.4232 15.9023C14.3981 15.9023 14.3704 15.9023 14.3452 15.8998C14.3125 15.8973 14.2797 15.8973 14.247 15.8948C14.247 15.8948 14.2294 15.8948 14.2445 15.8948H14.2344L14.2117 15.8923C14.1966 15.8897 14.1815 15.8897 14.1689 15.8872C14.1387 15.8847 14.111 15.8797 14.0808 15.8771C13.8442 15.8444 13.605 15.7764 13.3759 15.6707C13.1442 15.5675 12.9227 15.4214 12.7238 15.2427C12.5249 15.0639 12.3511 14.8474 12.2152 14.6032C12.0792 14.3589 11.9835 14.0895 11.9382 13.805C11.9156 13.664 11.9055 13.5155 11.9105 13.372C11.913 13.3317 11.913 13.2939 11.9156 13.2536C11.9156 13.2637 11.9156 13.2486 11.9156 13.2461V13.231L11.9181 13.2008C11.9206 13.1806 11.9206 13.163 11.9231 13.1429C11.9307 13.0648 11.9433 12.9868 11.9558 12.9087C12.0641 12.2893 12.3738 11.6851 12.8547 11.2269C12.9755 11.1136 13.1039 11.0053 13.2424 10.9121C13.3809 10.8165 13.5269 10.7334 13.678 10.6629C13.8316 10.5924 13.9902 10.5345 14.1538 10.4917C14.3175 10.4489 14.4862 10.4187 14.6549 10.4036C14.7405 10.396 14.8261 10.3935 14.9117 10.3935C14.9343 10.3935 14.952 10.3935 14.9696 10.3935L15.0401 10.396L15.0829 10.3985C15.1005 10.3985 15.0829 10.3985 15.0904 10.3985H15.1081L15.1786 10.4036C15.3624 10.4187 15.5462 10.4438 15.7274 10.4866C16.09 10.5672 16.4425 10.7006 16.7723 10.8819C17.4294 11.247 17.9909 11.816 18.3333 12.5034C18.507 12.8458 18.6279 13.2134 18.6883 13.5935C18.7034 13.6892 18.7135 13.7849 18.721 13.8806L18.7261 13.9536L18.7286 14.0266C18.7311 14.0518 18.7311 14.0744 18.7311 14.0996C18.7311 14.1248 18.7336 14.15 18.7311 14.1676V14.2305L18.7286 14.301C18.7261 14.3489 18.7236 14.4244 18.721 14.4722C18.7135 14.578 18.7034 14.6812 18.6908 14.787C18.6782 14.8902 18.6606 14.9934 18.643 15.0966C18.6228 15.1999 18.6002 15.3006 18.575 15.4013C18.5247 15.6027 18.4592 15.8041 18.3811 15.998C18.2276 16.3883 18.0211 16.7584 17.7744 17.1008C17.2784 17.7831 16.6011 18.3395 15.8307 18.692C15.4454 18.8657 15.0376 18.9941 14.6221 19.0621C14.4132 19.0974 14.2017 19.1175 13.9902 19.125L13.9499 19.1276H13.9172H13.8492H13.746H13.6931C13.7208 19.1276 13.6881 19.1276 13.6906 19.1276H13.6704C13.5571 19.125 13.4438 19.12 13.3305 19.1099C12.8773 19.0772 12.4317 18.9966 11.9986 18.8708C11.5656 18.7449 11.1451 18.5762 10.7473 18.3647C9.95171 17.9392 9.2417 17.3576 8.68528 16.6551C8.40581 16.3052 8.16158 15.93 7.96016 15.5347C7.75874 15.1394 7.60013 14.724 7.48179 14.301C7.36597 13.8755 7.29296 13.4425 7.26526 13.0044L7.26023 12.9213L7.25771 12.9012V12.8835V12.8483L7.25519 12.7753V12.7576V12.7325V12.6821L7.25268 12.5814V12.5613C7.25268 12.5638 7.25268 12.5638 7.25268 12.5537V12.5134C7.25268 12.4606 7.25519 12.4077 7.25519 12.3523C7.26275 12.1358 7.28037 11.9142 7.31058 11.6926C7.33828 11.4711 7.37605 11.247 7.42136 11.0254C7.46668 10.8039 7.52208 10.5848 7.5825 10.3708C7.70587 9.94028 7.85945 9.52234 8.04325 9.12705C8.40832 8.33647 8.8867 7.63906 9.46326 7.08011C9.60678 6.93912 9.75532 6.80568 9.91142 6.68231C10.065 6.55894 10.2261 6.44312 10.3923 6.33486C10.556 6.2266 10.7272 6.12589 10.9034 6.03525C10.989 5.98741 11.0797 5.94713 11.1678 5.90432C11.2131 5.88418 11.2584 5.86404 11.3037 5.8439C11.3491 5.82376 11.3944 5.80361 11.4397 5.78599C11.621 5.70794 11.8098 5.645 11.9986 5.58457C12.0465 5.56946 12.0943 5.55687 12.1422 5.54177C12.19 5.52666 12.2378 5.51659 12.2857 5.50148C12.3813 5.47379 12.4795 5.45113 12.5752 5.42847C12.623 5.41588 12.6734 5.40581 12.7212 5.39574C12.7691 5.38567 12.8194 5.3756 12.8673 5.36553C12.9176 5.35545 12.9655 5.3479 13.0158 5.33783L13.0888 5.32524L13.1618 5.31517C13.2122 5.30762 13.26 5.30006 13.3104 5.29251C13.3658 5.28244 13.4212 5.27992 13.4766 5.26985C13.5219 5.26481 13.5974 5.25474 13.6427 5.24971C13.678 5.24719 13.7132 5.24216 13.7485 5.23964L13.819 5.23208L13.8542 5.22957L13.8945 5.22705C13.9499 5.22453 14.0053 5.2195 14.0632 5.21698L14.1463 5.21194C14.1463 5.21194 14.1765 5.21194 14.1513 5.21194H14.1689L14.2042 5.20942C14.252 5.20691 14.2999 5.20439 14.3477 5.20187C14.5365 5.19684 14.7254 5.19684 14.9142 5.20187C15.2893 5.21698 15.6569 5.25726 16.0145 5.32524C16.7295 5.45868 17.4017 5.6878 18.011 5.98993C18.6203 6.28702 19.1667 6.65461 19.64 7.05242C19.6702 7.0776 19.6979 7.10278 19.7281 7.12795C19.7558 7.15313 19.7861 7.17831 19.8137 7.20349C19.8717 7.25384 19.927 7.30671 19.9824 7.35707C20.0378 7.40742 20.0907 7.4603 20.1436 7.51317C20.1964 7.56604 20.2493 7.61891 20.2972 7.67179C20.4986 7.8858 20.6849 8.09981 20.8511 8.31633C21.1884 8.74939 21.4578 9.18747 21.6718 9.60039C21.6844 9.62556 21.6995 9.65074 21.7121 9.67844C21.7247 9.70361 21.7373 9.72879 21.7499 9.75649C21.7751 9.80684 21.8003 9.8572 21.8229 9.90755C21.8456 9.95791 21.8708 10.0083 21.8909 10.0561C21.9136 10.1065 21.9337 10.1543 21.9538 10.2021C22.0344 10.396 22.1074 10.5798 22.1653 10.7535C22.2635 11.033 22.3365 11.2873 22.3919 11.5088C22.4146 11.597 22.4977 11.6549 22.5883 11.6473C22.6815 11.6398 22.7545 11.5617 22.757 11.4686C22.7419 11.2168 22.7369 10.9398 22.7092 10.6226Z"
          fill="grey"
        />
      </g>

      <g id="icon-elk">
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M23.7 6.88105V2.12793C23.7 1.11807 22.8817 0.299805 21.8719 0.299805H2.12811C1.11826 0.299805 0.299988 1.11807 0.299988 2.12793V6.88105H23.7Z"
          fill="#F04E98"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M0.299988 14.9252H23.7V9.0752H0.299988V14.9252Z"
          fill="#00BFB3"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M10.9031 17.1191H0.299988V21.8723C0.299988 22.8821 1.11826 23.7004 2.12811 23.7004H10.9031V17.1191Z"
          fill="#0077CC"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M13.0969 17.1191V23.7004H21.8719C22.8817 23.7004 23.7 22.8821 23.7 21.8723V17.1191H13.0969Z"
          fill="#FEC514"
        />
      </g>

      <g id="icon-prometheus">
        <path
          d="M12.0003 0.299805C5.53867 0.299805 0.299988 5.53787 0.299988 11.9997C0.299988 18.4613 5.53867 23.6998 12.0003 23.6998C18.4619 23.6998 23.7004 18.4613 23.7004 11.9997C23.7004 5.53787 18.4617 0.299805 12.0003 0.299805ZM12.0003 22.1975C10.1618 22.1975 8.6713 20.9694 8.6713 19.4549H15.3293C15.3293 20.9692 13.8387 22.1975 12.0003 22.1975ZM17.4987 18.5466H6.50125V16.5525H17.4989V18.5466H17.4987ZM17.4593 15.5261H6.53264C6.4963 15.4842 6.45913 15.4429 6.42403 15.4003C5.29833 14.0335 5.03322 13.3199 4.77574 12.5927C4.77141 12.5687 6.14075 12.8725 7.1118 13.0909C7.1118 13.0909 7.61147 13.2065 8.34198 13.3397C7.64058 12.5175 7.22412 11.4724 7.22412 10.4041C7.22412 8.05872 9.02293 6.00925 8.37398 4.3527C9.00559 4.40411 9.68117 5.6857 9.7268 7.68954C10.3983 6.76164 10.6793 5.0671 10.6793 4.02812C10.6793 2.95239 11.3881 1.7028 12.0971 1.66006C11.4651 2.70173 12.2609 3.59473 12.9683 5.81C13.2336 6.64209 13.1997 8.04241 13.4045 8.93045C13.4725 7.08601 13.7896 4.39482 14.9597 3.46568C14.4435 4.63578 15.0361 6.09989 15.4414 6.80376C16.0953 7.93937 16.4917 8.79976 16.4917 10.427C16.4917 11.518 16.0889 12.5452 15.4094 13.3482C16.182 13.2032 16.7156 13.0725 16.7156 13.0725L19.2246 12.583C19.2249 12.5828 18.8602 14.0822 17.4593 15.5261Z"
          fill="#E6522C"
        />
      </g>
    </svg>
    <!--  //SVG images  -->

</section>
<?php
}
?>
<!--  //Profession  -->