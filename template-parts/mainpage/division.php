<!-- Section Division -->
<section class="main-division">
    <div class="main-division__top">
        <div class="main-division__top-left-bar">
            <div class="main-division__top-switching-block">
            <p class="main-division__top-switching-text">Выбери направление</p>

            <div class="main-division__top-switcher-container">
                <div
                id="main-division__top-switcher__professional"
                class="
                    main-division__top-switcher main-division__top-switcher-active
                "
                >
                <svg
                    width="14"
                    height="10"
                    viewBox="0 0 14 10"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                    d="M11.5515 4.40044L8.57574 1.4247L9.42426 0.576172L13.8485 5.00044L9.42426 9.4247L8.57574 8.57617L11.5515 5.60044H0V4.40044H11.5515Z"
                    fill="black"
                    />
                </svg>

                я профессионал
                </div>
                <div id="main-division__top-switcher__student" class="main-division__top-switcher">
                <svg
                    width="14"
                    height="10"
                    viewBox="0 0 14 10"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                    d="M11.5515 4.40044L8.57574 1.4247L9.42426 0.576172L13.8485 5.00044L9.42426 9.4247L8.57574 8.57617L11.5515 5.60044H0V4.40044H11.5515Z"
                    fill="black"
                    />
                </svg>

                я студент
                </div>
            </div>
            </div>
        </div>

        <div class="main-division__top-right-bar">

            <?php
            $it_job = get_term_by( 'slug', 'it', 'relationship' )->count;
            if($it_job == 0){
                ?>
                    <!-- <div class="main-division__top-main-item" id="professional" style="opacity: 0.3;"> -->
                    <div class="main-division__top-main-item" id="professional">
                        <div class="main-division__top-item-left">
                            <div class="main-division__top-title-container">
                                <a href="/it/" class="main-division__top-item-title">IT-хаб</a>
                                <div class="main-division__top-title-icon">
                                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <path d="M0 16.12H16V0.12L0 0.12L0 16.12Z" fill="url(#pattern0)"/>
                                        <defs>
                                            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                                <use xlink:href="#image0_4475_25753" transform="scale(0.015625)"/>
                                            </pattern>
                                            <image id="image0_4475_25753" width="64" height="64" xlink:href="data:image/png;base64,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"/>
                                        </defs>
                                    </svg>
                                </div>
                            </div>

                            <p class="main-division__top-services-mobile">
                                Highload-сервисы, аналитика и data science
                            </p>

                            <p class="main-division__top-item-scills">
                                <?php 
                                $i = 0;
                                $choices = get_field_object('field_614339ce552ba')["choices"];
                                foreach ($choices as $choice) {
                                    echo $choice;
                                    if( $i < count($choices)-1 ) echo ', ';
                                    $i++;
                                } ?>
                            </p>

                            <a href="#" class="main-division__more-about-direction-mobile">
                                Больше о направлении
                                <svg
                                    width="14"
                                    height="10"
                                    viewBox="0 0 14 10"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                    d="M11.5515 4.40044L8.57574 1.4247L9.42426 0.576172L13.8485 5.00044L9.42426 9.4247L8.57574 8.57617L11.5515 5.60044H0V4.40044H11.5515Z"
                                    fill="black"
                                    />
                                </svg>
                            </a>
                        </div>

                        <div class="main-division__top-item-right">
                            <div class="main-division__top-services">
                                Highload-сервисы, аналитика и data science
                            </div>

                            <a href="/vacancies/" class="main-division__top-to-vacancies-link" style="display: none;">
                                <span><?php echo get_term_by( 'slug', 'it', 'relationship' )->count; ?></span>
                                открытых вакансий
                                <svg
                                    width="14"
                                    height="10"
                                    viewBox="0 0 14 10"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                    d="M11.5515 4.40044L8.57574 1.4247L9.42426 0.576172L13.8485 5.00044L9.42426 9.4247L8.57574 8.57617L11.5515 5.60044H0V4.40044H11.5515Z"
                                    fill="black"
                                    />
                                </svg>
                            </a>
                        </div>
                    </div>
                <?php
            }else{
                ?>
                    <div class="main-division__top-main-item" id="professional">
                        <div class="main-division__top-item-left">
                            <div class="main-division__top-title-container">
                                <a href="/it/" class="main-division__top-item-title">IT-хаб</a>
                                <div class="main-division__top-title-icon">
                                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <path d="M0 16.12H16V0.12L0 0.12L0 16.12Z" fill="url(#pattern0)"/>
                                        <defs>
                                            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                                <use xlink:href="#image0_4475_25753" transform="scale(0.015625)"/>
                                            </pattern>
                                            <image id="image0_4475_25753" width="64" height="64" xlink:href="data:image/png;base64,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"/>
                                        </defs>
                                    </svg>
                                </div>
                            </div>

                            <p class="main-division__top-services-mobile">
                                Highload-сервисы, аналитика и data science
                            </p>

                            <p class="main-division__top-item-scills">
                                <?php 
                                $i = 0;
                                $choices = get_field_object('field_614339ce552ba')["choices"];
                                foreach ($choices as $choice) {
                                    echo $choice;
                                    if( $i < count($choices)-1 ) echo ', ';
                                    $i++;
                                } ?>
                            </p>

                            <a href="#" class="main-division__more-about-direction-mobile">
                                Больше о направлении
                                <svg
                                    width="14"
                                    height="10"
                                    viewBox="0 0 14 10"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                    d="M11.5515 4.40044L8.57574 1.4247L9.42426 0.576172L13.8485 5.00044L9.42426 9.4247L8.57574 8.57617L11.5515 5.60044H0V4.40044H11.5515Z"
                                    fill="black"
                                    />
                                </svg>
                            </a>
                        </div>

                        <div class="main-division__top-item-right">
                            <div class="main-division__top-services">
                                Highload-сервисы, аналитика и data science
                            </div>

                            <a href="/vacancies/" class="main-division__top-to-vacancies-link">
                                <span><?php echo get_term_by( 'slug', 'it', 'relationship' )->count; ?></span>
                                открытых вакансий
                                <svg
                                    width="14"
                                    height="10"
                                    viewBox="0 0 14 10"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                    d="M11.5515 4.40044L8.57574 1.4247L9.42426 0.576172L13.8485 5.00044L9.42426 9.4247L8.57574 8.57617L11.5515 5.60044H0V4.40044H11.5515Z"
                                    fill="black"
                                    />
                                </svg>
                            </a>
                        </div>
                    </div>
                <?php
            }
            ?>

            
            <div class="main-division__student" id="student"> 

                <?php
                $student_one = get_term_by( 'slug', 'it', 'relationship' )->count;
                if($student_one == 0){
                    ?>
                    <!-- <div class="main-division__item" style="opacity: 0.3;"> -->
                    <div class="main-division__item">
                        <a href="/it/" class="main-division__item-title">
                            Стажировка в IT
                        </a>
                        <div class="main-division__item-info">
                            Получи опыт на highload-проектах
                        </div>

                        <a href="/vacancies/" class="main-division__item-link" style="display: none;">
                            <span><?php echo get_term_by( 'slug', 'it', 'relationship' )->count; ?></span>
                            открытых вакансий
                            <svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.5515 4.40044L8.57574 1.4247L9.42426 0.576172L13.8485 5.00044L9.42426 9.4247L8.57574 8.57617L11.5515 5.60044H0V4.40044H11.5515Z" fill="black"></path>
                            </svg>
                        </a>
                        <a href="/vacancies/" class="main-division__more-about-direction-mobile" style="display: none;">
                            Больше о направлении
                            <svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.5515 4.40044L8.57574 1.4247L9.42426 0.576172L13.8485 5.00044L9.42426 9.4247L8.57574 8.57617L11.5515 5.60044H0V4.40044H11.5515Z" fill="black"></path>
                            </svg>
                        </a>
                    </div>
                    <?php
                }else{
                    ?>
                    <div class="main-division__item">
                        <a href="/it/" class="main-division__item-title">
                            Стажировка в IT
                        </a>
                        <div class="main-division__item-info">
                            Получи опыт на highload-проектах
                        </div>

                        <a href="/vacancies/" class="main-division__item-link">
                            <span><?php echo get_term_by( 'slug', 'it', 'relationship' )->count; ?></span>
                            открытых вакансий
                            <svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.5515 4.40044L8.57574 1.4247L9.42426 0.576172L13.8485 5.00044L9.42426 9.4247L8.57574 8.57617L11.5515 5.60044H0V4.40044H11.5515Z" fill="black"></path>
                            </svg>
                        </a>
                        <a href="/vacancies/" class="main-division__more-about-direction-mobile">
                            Больше о направлении
                            <svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.5515 4.40044L8.57574 1.4247L9.42426 0.576172L13.8485 5.00044L9.42426 9.4247L8.57574 8.57617L11.5515 5.60044H0V4.40044H11.5515Z" fill="black"></path>
                            </svg>
                        </a>
                    </div>
                    <?php
                }
                ?>

                <?php
                $student_two = get_term_by( 'slug', 'roznica', 'relationship' )->count;
                if($student_two == 0){
                    ?>
                    <!-- <div class="main-division__item" style="opacity: 0.3;"> -->
                    <div class="main-division__item">
                        <a href="/retail/" class="main-division__item-title">Розничные магазины</a>

                        <div class="main-division__item-info">
                            Продажи, консультирование клиентов магазинов
                            <svg
                                width="54"
                                height="14"
                                viewBox="0 0 54 14"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                d="M42.677 11.6297C46.6041 9.57092 47.5441 6.97154 46.3379 6.24009C44.5579 5.24992 39.658 7.02238 40.2225 11.89C39.9797 12.0332 39.4925 12.2965 39.4925 12.2965L39.8126 13.2775C39.8126 13.2775 40.4993 12.8694 40.6757 12.7477C41.251 13.2097 41.5495 13.4638 42.4341 13.4869C44.3258 13.53 45.9512 11.4388 45.9512 11.4388L45.4766 10.6997C45.487 10.6935 43.407 12.6877 42.677 11.6297ZM43.1983 8.64542C43.7612 7.65525 44.6691 6.88375 45.122 7.19175C45.5754 7.49971 44.6691 9.06429 42.5562 10.7335C42.4683 10.5842 42.6337 9.64483 43.1983 8.64542ZM7.11058 13.4807C6.7247 13.4759 6.35587 13.3218 6.08204 13.0511C5.1417 12.0702 6.02637 8.75629 6.21354 8.04025C6.21808 8.02488 6.21899 8.00867 6.21616 7.99292C6.21337 7.97713 6.20687 7.96225 6.19729 7.94938C6.18766 7.93654 6.1752 7.92608 6.16083 7.91888C6.14645 7.91167 6.13062 7.90788 6.11454 7.90779C6.09466 7.90783 6.07508 7.91292 6.05774 7.92262C6.04041 7.93233 6.02587 7.94633 6.01554 7.96325C5.61649 8.76708 3.46051 13.4807 1.55814 13.4807H1.44678C-0.399899 13.3036 -0.155531 10.7705 0.418271 9.22904H3.394C3.15118 9.88966 3.07384 10.307 3.07384 10.5287C3.08467 10.6827 3.21768 10.7705 3.33832 10.7058C3.64765 10.5395 4.15649 9.87887 4.59883 9.11971C5.39533 7.72146 6.4347 5.62875 8.22258 0.333008H11.4783C10.5162 3.28346 9.73057 5.94904 9.30524 8.99804C9.29949 9.03479 9.30549 9.07242 9.32241 9.10558C9.33932 9.13875 9.36628 9.16575 9.39949 9.18279C9.4327 9.19983 9.47045 9.20604 9.50737 9.20054C9.54432 9.195 9.57857 9.17804 9.60528 9.15204C10.5333 8.282 13.9359 0.970528 14.1385 0.333008H17.4127C17.4127 0.333008 14.1942 9.19671 14.4602 10.6827C14.4647 10.7375 14.4863 10.7896 14.522 10.8315C14.5577 10.8735 14.6057 10.9032 14.6592 10.9167C14.7128 10.9301 14.7692 10.9265 14.8207 10.9063C14.872 10.8862 14.9158 10.8505 14.9458 10.8044C15.1345 10.5734 15.4005 10.2315 15.5877 10.0221L16.0517 10.4841C15.1237 11.6282 13.608 13.6871 12.1047 13.4453C11.8646 13.3956 11.6442 13.2774 11.4705 13.105C9.9007 11.7514 12.0892 7.21483 12.4774 6.14617C12.5655 5.91517 12.6429 5.69496 12.6986 5.56254C12.7042 5.54642 12.7059 5.52921 12.7036 5.51234C12.7012 5.49542 12.6949 5.47934 12.685 5.46534C12.6752 5.45138 12.6622 5.43992 12.6471 5.43192C12.632 5.42392 12.6152 5.41959 12.598 5.41934C12.5781 5.41917 12.5585 5.42421 12.5412 5.43396C12.5238 5.44367 12.5093 5.45775 12.499 5.47475C12.4217 5.6395 12.2222 6.06917 12.1449 6.21238C11.1798 8.205 8.94641 13.4807 7.11058 13.4807ZM37.8561 2.6013C36.9843 2.58601 36.1373 2.89142 35.4774 3.459L35.5006 4.32905C35.5006 4.32905 36.54 3.28346 37.6241 3.73467C38.331 4.02109 38.8615 4.84646 38.464 6.28938C38.4423 6.37713 38.3975 6.54346 38.3758 6.63121C38.0665 5.97059 36.9158 5.46396 35.3119 6.67433C34.1396 7.55517 33.8411 8.49142 33.6106 9.25212C33.2781 10.364 33.3013 11.562 33.5549 12.2796C33.661 12.5594 33.8253 12.8138 34.0369 13.0261C34.2485 13.2384 34.5027 13.4038 34.783 13.5115C37.437 14.514 39.528 10.4317 40.1684 7.48896C40.5767 5.62875 40.886 2.65517 37.8561 2.6013ZM36.4286 11.542C36.1301 11.7406 35.6213 11.8284 35.5439 10.9137C35.4449 9.60325 36.4069 8.06179 36.6946 7.69838C37.1926 7.09321 37.867 7.06083 37.8561 8.00637C37.8453 9.10892 37.1694 11.0569 36.4286 11.542ZM28.4217 1.84059C26.8518 1.30159 21.3071 3.05246 19.4744 9.16283C19.2532 9.22904 18.1814 9.49392 18.1814 9.49392L17.7174 10.7489L19.3584 10.2423C19.3584 10.2423 19.1805 13.3806 21.9459 13.4761C24.1251 13.3976 25.2634 10.2053 24.5674 8.03562C24.4344 8.10183 22.6867 8.938 22.6867 8.938C22.6867 8.938 23.0517 11.0646 22.2784 11.5558C22.2489 11.5765 22.2155 11.591 22.1801 11.5983C22.1449 11.6057 22.1084 11.6057 22.073 11.5985C22.0377 11.5913 22.0042 11.577 21.9746 11.5564C21.945 11.5358 21.92 11.5094 21.9011 11.4788C21.6799 11.1709 21.536 10.3562 21.7804 9.27679C25.7723 7.20713 28.5036 3.57913 28.6707 2.31796C28.6908 2.22201 28.6771 2.12205 28.6317 2.03505C28.5863 1.94805 28.5121 1.87934 28.4217 1.84059ZM23.4554 7.24717C23.0419 7.56633 22.6022 7.85017 22.1408 8.09567C22.1408 8.09567 22.3496 7.61058 22.5058 7.33496C22.9357 6.62046 24.9928 3.8563 26.7188 3.34967C26.7331 3.34446 26.7486 3.34317 26.7635 3.34605C26.7784 3.34892 26.7923 3.3558 26.8036 3.36596C26.8149 3.37609 26.8232 3.38913 26.8276 3.40363C26.8321 3.41813 26.8324 3.43355 26.8286 3.44825C26.8286 4.05496 24.6401 6.35559 23.4554 7.24717ZM31.6851 11.7622C31.6797 11.7782 31.6793 11.7954 31.684 11.8116C31.6887 11.8277 31.6982 11.8421 31.7113 11.8528C31.7244 11.8635 31.7404 11.87 31.7573 11.8714C31.7741 11.8728 31.791 11.8691 31.8057 11.8607C32.0193 11.7207 32.2258 11.5702 32.4243 11.4095L32.6455 12.081C32.5125 12.2242 31.45 13.0619 30.7896 13.3698C30.0719 13.7009 29.4192 13.2605 29.3187 12.7308C29.2197 12.1148 29.5291 11.311 29.5291 11.311C29.5291 11.311 28.3907 12.6107 27.2292 13.2374C26.9993 13.3817 26.7364 13.4654 26.4652 13.4807C25.681 13.4576 25.4366 12.7108 25.5264 12.3012C25.6254 11.8176 26.6879 8.56842 26.8193 8.04025C26.8209 8.02596 26.819 8.0115 26.8139 7.99808C26.8087 7.98467 26.8004 7.97267 26.7897 7.96304C26.779 7.95342 26.7661 7.94646 26.7522 7.94275C26.7383 7.93904 26.7236 7.93867 26.7095 7.94167C26.3878 8.02946 25.548 8.57921 25.548 8.57921V7.67683C25.548 7.67683 27.9809 6.0245 28.5887 5.84896C29.1532 5.69496 29.6404 6.01371 29.4966 6.65279C29.4301 7.09321 27.8478 10.9137 27.8478 11.3988C27.8461 11.4118 27.8477 11.4251 27.8524 11.4374C27.857 11.4497 27.8646 11.4607 27.8746 11.4694C27.8845 11.4781 27.8965 11.4842 27.9093 11.4872C27.9222 11.4902 27.9356 11.49 27.9484 11.4865C28.4016 11.3541 29.2306 10.6504 29.8616 9.64791C30.4586 8.71162 30.8561 7.53363 31.3541 6.06917H33.4668C33.4653 6.07992 31.8614 10.9584 31.6851 11.7622ZM53.7479 7.18096C53.7929 7.86467 53.1399 11.465 50.4858 12.9079C49.7004 13.3375 49.17 13.5023 48.6933 13.4807C47.5658 13.4468 47.0354 12.5337 46.9133 12.2365C45.6204 9.04271 49.4016 6.07684 49.4016 6.07684H51.5916C51.5916 6.07684 48.2512 8.73167 48.7166 11.0877C49.0816 12.5183 50.4179 11.8253 51.1604 10.2069C51.3041 9.88658 52.1995 7.7615 51.6366 7.72917C51.1387 7.69529 50.475 8.74242 50.475 8.74242L50.0112 8.03717C50.3762 7.57517 51.3937 6.36329 52.5337 5.97829C52.7191 5.92596 53.737 5.7165 53.7479 7.18096ZM17.0384 11.7406C17.2112 11.7406 17.3802 11.7917 17.5239 11.8872C17.6676 11.9829 17.7796 12.1187 17.8457 12.2777C17.9119 12.4367 17.9292 12.6116 17.8955 12.7804C17.8618 12.9492 17.7785 13.1042 17.6563 13.2259C17.5341 13.3476 17.3784 13.4304 17.2089 13.464C17.0394 13.4976 16.8637 13.4803 16.704 13.4145C16.5444 13.3486 16.4079 13.2371 16.3119 13.094C16.2158 12.951 16.1646 12.7827 16.1646 12.6107C16.1637 12.4962 16.1858 12.3827 16.2294 12.2767C16.273 12.1708 16.3374 12.0746 16.4187 11.9936C16.5 11.9127 16.5967 11.8486 16.703 11.8052C16.8094 11.7617 16.9234 11.7398 17.0384 11.7406Z"
                                fill="#E31235"
                                />
                            </svg>
                            и
                            <svg
                                width="112"
                                height="13"
                                viewBox="0 0 112 13"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                d="M92.099 0.174514H88.7211C88.0712 0.148359 87.4359 0.373328 86.946 0.803176C86.456 1.23302 86.1486 1.83509 86.0869 2.48561L84.6135 10.166C84.3493 11.5624 84.7525 12.4841 86.3719 12.4841H89.7706C90.4266 12.5245 91.0721 12.304 91.5676 11.8702C92.0631 11.4365 92.3688 10.8243 92.4187 10.166L93.9408 2.48561C94.1841 1.12409 93.774 0.174514 92.1268 0.174514H92.099ZM91.2441 3.00229L89.9374 9.68421C89.9383 9.73922 89.9285 9.79388 89.9084 9.84506C89.8883 9.89625 89.8583 9.94295 89.8202 9.9825C89.7821 10.022 89.7367 10.0537 89.6864 10.0756C89.6362 10.0975 89.5821 10.1092 89.5274 10.1101H87.5882C87.3172 10.1101 87.2546 10.0054 87.2894 9.69119L88.5821 3.00927C88.6725 2.70904 88.8115 2.56939 89.0617 2.56939H90.9522C91.1954 2.56939 91.3205 2.70904 91.2719 3.00927L91.2441 3.00229ZM81.7916 10.1031L83.7238 0.174514H78.4416C77.7799 0.126172 77.1258 0.3416 76.6211 0.774154C76.1164 1.20671 75.8016 1.82157 75.7448 2.48561L73.6111 10.1031H72.506L72.0194 12.512H82.0974L82.577 10.1031H81.7916ZM80.6379 2.56241L79.1366 10.1031H76.3565L78.2748 3.00229C78.2748 2.88562 78.3209 2.77374 78.403 2.69125C78.4851 2.60875 78.5965 2.56241 78.7126 2.56241H80.6309H80.6379ZM70.9074 12.512L71.2341 0.251318H67.6755L61.7955 12.5539H64.6312L65.6112 10.2777H68.1551L67.9674 12.5539L70.9074 12.512ZM68.7041 3.43518L68.3219 8.24588H66.4731L68.5582 3.43518H68.7041ZM63.3315 2.48561C63.6095 1.12409 63.1925 0.174514 61.5522 0.174514H55.992L53.5802 12.512H56.131L56.826 8.93712H59.8842C61.5175 8.93712 62.1917 7.94565 62.4975 6.58413L63.3315 2.48561ZM60.6695 3.00229L60.044 6.08142C59.9676 6.41656 59.8146 6.52129 59.5436 6.52129H57.2917L58.1049 2.56241H60.3707C60.6417 2.56241 60.739 2.70205 60.7043 3.00229H60.6695ZM53.184 2.48561C53.4481 1.12409 53.0381 0.174514 51.3908 0.174514H48.0477C47.3766 0.123252 46.7119 0.335457 46.1934 0.766487C45.6749 1.19752 45.343 1.81377 45.2676 2.48561L43.808 10.166C43.5647 11.5624 43.9609 12.4841 45.5734 12.4841H48.9513C49.6107 12.5302 50.2616 12.3123 50.7616 11.878C51.2617 11.4437 51.5704 10.8282 51.6202 10.166L53.184 2.48561ZM50.5081 3.00229L49.2501 9.68421C49.2299 9.80499 49.1665 9.91421 49.0718 9.99134C48.9771 10.0685 48.8576 10.1082 48.7358 10.1031H46.8453C46.5951 10.1031 46.5117 9.9984 46.5464 9.68421L47.8601 3.00229C47.8601 2.70205 48.0338 2.56241 48.3327 2.56241H50.1954C50.4247 2.56241 50.5707 2.70205 50.4942 3.00229H50.5081ZM41.3476 10.1031L43.2728 0.174514H38.0045C37.3501 0.139337 36.7078 0.360568 36.2125 0.791634C35.7173 1.2227 35.4079 1.82997 35.3494 2.48561L33.174 10.1031H32.0828L31.5824 12.512H41.6743L42.1469 10.1031H41.3476ZM40.2147 2.56241L38.7273 10.1031H35.9472L37.8655 3.00229C37.8636 2.94519 37.8732 2.8883 37.8937 2.83501C37.9141 2.78171 37.9451 2.73309 37.9846 2.69205C38.0242 2.65101 38.0715 2.61839 38.1239 2.59611C38.1763 2.57384 38.2326 2.56238 38.2894 2.56241H40.2147ZM31.5059 6.46543C31.7631 5.069 31.3391 4.0915 29.7058 4.0915H26.6963L27.4747 0.174514H24.8544L22.4496 12.512H28.0863C28.7465 12.5582 29.3982 12.3405 29.8993 11.9064C30.4005 11.4722 30.7107 10.8567 30.7622 10.1939L31.5059 6.46543ZM28.8231 6.77963L28.2809 9.78894C28.2671 9.92164 28.2047 10.0444 28.1058 10.1335C28.0069 10.2225 27.8786 10.2714 27.7458 10.2707H25.5356L26.314 6.33277H28.5381C28.7953 6.33277 28.8926 6.45845 28.8231 6.77265V6.77963ZM19.9197 12.512L22.3106 0.251318H16.7503C16.0902 0.206719 15.4389 0.423672 14.9362 0.855679C14.4334 1.28769 14.119 1.90037 14.0605 2.56241L11.204 12.5469H13.9841L16.5557 3.0372C16.5548 2.98035 16.565 2.92387 16.5858 2.871C16.6067 2.81812 16.6376 2.76988 16.677 2.72903C16.7164 2.68819 16.7634 2.65553 16.8153 2.63293C16.8672 2.61033 16.9231 2.59823 16.9797 2.59732H19.2663L17.2786 12.512H19.9197ZM11.621 2.48561C11.8781 1.12409 11.482 0.174514 9.86949 0.174514H4.85134L4.37872 2.56241H8.65318C8.91034 2.56241 8.98679 2.70205 8.95204 3.00229L8.40991 5.83704H5.74793L6.158 3.87506L0 6.83549H4.57333L4.17716 8.79049L8.24311 6.84945L7.70098 9.64231C7.68529 9.76649 7.62211 9.87965 7.52481 9.95785C7.42751 10.036 7.30374 10.0731 7.1797 10.0612H2.91219L2.46042 12.4701H7.49247C8.14016 12.5162 8.77964 12.3026 9.27079 11.8759C9.76194 11.4492 10.0647 10.8444 10.1127 10.1939V10.152L11.621 2.48561ZM93.8922 9.67024L93.3431 12.512H95.9286L96.4847 9.67024H93.8922ZM111.803 3.87506H109.92L108.641 10.4732C108.645 10.5039 108.643 10.5352 108.633 10.5647C108.624 10.5942 108.608 10.6211 108.586 10.6434C108.565 10.6657 108.538 10.6827 108.509 10.6931C108.48 10.7035 108.449 10.7071 108.418 10.7036H107.028C106.903 10.7036 106.862 10.6477 106.896 10.4732L108.147 3.87506H106.243L104.915 10.7595C104.714 11.7928 104.985 12.512 106.229 12.512H108.391C108.638 12.531 108.887 12.5007 109.123 12.4228C109.358 12.3449 109.577 12.221 109.765 12.0581C109.953 11.8953 110.107 11.6967 110.218 11.4738C110.329 11.251 110.396 11.0082 110.413 10.7595L111.803 3.87506ZM103.053 3.87506H99.1675L97.5341 12.512H99.2926L99.8 10.0543H100.683L101.065 12.512H103.032L102.511 9.94255C102.847 9.82747 103.143 9.61742 103.364 9.33757C103.585 9.05771 103.72 8.7199 103.755 8.36458L104.318 5.49492C104.512 4.54534 104.22 3.85411 103.074 3.85411L103.053 3.87506ZM102.434 5.83704L101.996 7.93169C101.948 8.16908 101.843 8.2389 101.656 8.2389H100.092L100.655 5.44604H102.212C102.392 5.44604 102.462 5.55077 102.441 5.76024"
                                fill="#76BC21"
                                />
                            </svg>
                        </div>

                        <a href="/listing-map/" class="main-division__item-link" style="display: none;">
                            <span><?php echo get_term_by( 'slug', 'roznica', 'relationship' )->count; ?></span>
                            открытых вакансий
                            <svg
                                width="14"
                                height="10"
                                viewBox="0 0 14 10"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                d="M11.5515 4.40044L8.57574 1.4247L9.42426 0.576172L13.8485 5.00044L9.42426 9.4247L8.57574 8.57617L11.5515 5.60044H0V4.40044H11.5515Z"
                                fill="black"
                                />
                            </svg>
                        </a>
                        <a href="/listing-map/" class="main-division__more-about-direction-mobile" style="display: none;">
                            Больше о направлении
                            <svg
                                width="14"
                                height="10"
                                viewBox="0 0 14 10"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                d="M11.5515 4.40044L8.57574 1.4247L9.42426 0.576172L13.8485 5.00044L9.42426 9.4247L8.57574 8.57617L11.5515 5.60044H0V4.40044H11.5515Z"
                                fill="black"
                                />
                            </svg>
                        </a>
                    </div>
                    <?php
                }else{
                    ?>
                    <div class="main-division__item">
                        <a href="/retail/" class="main-division__item-title">Розничные магазины</a>

                        <div class="main-division__item-info">
                            Продажи, консультирование клиентов магазинов
                            <svg
                                width="54"
                                height="14"
                                viewBox="0 0 54 14"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                d="M42.677 11.6297C46.6041 9.57092 47.5441 6.97154 46.3379 6.24009C44.5579 5.24992 39.658 7.02238 40.2225 11.89C39.9797 12.0332 39.4925 12.2965 39.4925 12.2965L39.8126 13.2775C39.8126 13.2775 40.4993 12.8694 40.6757 12.7477C41.251 13.2097 41.5495 13.4638 42.4341 13.4869C44.3258 13.53 45.9512 11.4388 45.9512 11.4388L45.4766 10.6997C45.487 10.6935 43.407 12.6877 42.677 11.6297ZM43.1983 8.64542C43.7612 7.65525 44.6691 6.88375 45.122 7.19175C45.5754 7.49971 44.6691 9.06429 42.5562 10.7335C42.4683 10.5842 42.6337 9.64483 43.1983 8.64542ZM7.11058 13.4807C6.7247 13.4759 6.35587 13.3218 6.08204 13.0511C5.1417 12.0702 6.02637 8.75629 6.21354 8.04025C6.21808 8.02488 6.21899 8.00867 6.21616 7.99292C6.21337 7.97713 6.20687 7.96225 6.19729 7.94938C6.18766 7.93654 6.1752 7.92608 6.16083 7.91888C6.14645 7.91167 6.13062 7.90788 6.11454 7.90779C6.09466 7.90783 6.07508 7.91292 6.05774 7.92262C6.04041 7.93233 6.02587 7.94633 6.01554 7.96325C5.61649 8.76708 3.46051 13.4807 1.55814 13.4807H1.44678C-0.399899 13.3036 -0.155531 10.7705 0.418271 9.22904H3.394C3.15118 9.88966 3.07384 10.307 3.07384 10.5287C3.08467 10.6827 3.21768 10.7705 3.33832 10.7058C3.64765 10.5395 4.15649 9.87887 4.59883 9.11971C5.39533 7.72146 6.4347 5.62875 8.22258 0.333008H11.4783C10.5162 3.28346 9.73057 5.94904 9.30524 8.99804C9.29949 9.03479 9.30549 9.07242 9.32241 9.10558C9.33932 9.13875 9.36628 9.16575 9.39949 9.18279C9.4327 9.19983 9.47045 9.20604 9.50737 9.20054C9.54432 9.195 9.57857 9.17804 9.60528 9.15204C10.5333 8.282 13.9359 0.970528 14.1385 0.333008H17.4127C17.4127 0.333008 14.1942 9.19671 14.4602 10.6827C14.4647 10.7375 14.4863 10.7896 14.522 10.8315C14.5577 10.8735 14.6057 10.9032 14.6592 10.9167C14.7128 10.9301 14.7692 10.9265 14.8207 10.9063C14.872 10.8862 14.9158 10.8505 14.9458 10.8044C15.1345 10.5734 15.4005 10.2315 15.5877 10.0221L16.0517 10.4841C15.1237 11.6282 13.608 13.6871 12.1047 13.4453C11.8646 13.3956 11.6442 13.2774 11.4705 13.105C9.9007 11.7514 12.0892 7.21483 12.4774 6.14617C12.5655 5.91517 12.6429 5.69496 12.6986 5.56254C12.7042 5.54642 12.7059 5.52921 12.7036 5.51234C12.7012 5.49542 12.6949 5.47934 12.685 5.46534C12.6752 5.45138 12.6622 5.43992 12.6471 5.43192C12.632 5.42392 12.6152 5.41959 12.598 5.41934C12.5781 5.41917 12.5585 5.42421 12.5412 5.43396C12.5238 5.44367 12.5093 5.45775 12.499 5.47475C12.4217 5.6395 12.2222 6.06917 12.1449 6.21238C11.1798 8.205 8.94641 13.4807 7.11058 13.4807ZM37.8561 2.6013C36.9843 2.58601 36.1373 2.89142 35.4774 3.459L35.5006 4.32905C35.5006 4.32905 36.54 3.28346 37.6241 3.73467C38.331 4.02109 38.8615 4.84646 38.464 6.28938C38.4423 6.37713 38.3975 6.54346 38.3758 6.63121C38.0665 5.97059 36.9158 5.46396 35.3119 6.67433C34.1396 7.55517 33.8411 8.49142 33.6106 9.25212C33.2781 10.364 33.3013 11.562 33.5549 12.2796C33.661 12.5594 33.8253 12.8138 34.0369 13.0261C34.2485 13.2384 34.5027 13.4038 34.783 13.5115C37.437 14.514 39.528 10.4317 40.1684 7.48896C40.5767 5.62875 40.886 2.65517 37.8561 2.6013ZM36.4286 11.542C36.1301 11.7406 35.6213 11.8284 35.5439 10.9137C35.4449 9.60325 36.4069 8.06179 36.6946 7.69838C37.1926 7.09321 37.867 7.06083 37.8561 8.00637C37.8453 9.10892 37.1694 11.0569 36.4286 11.542ZM28.4217 1.84059C26.8518 1.30159 21.3071 3.05246 19.4744 9.16283C19.2532 9.22904 18.1814 9.49392 18.1814 9.49392L17.7174 10.7489L19.3584 10.2423C19.3584 10.2423 19.1805 13.3806 21.9459 13.4761C24.1251 13.3976 25.2634 10.2053 24.5674 8.03562C24.4344 8.10183 22.6867 8.938 22.6867 8.938C22.6867 8.938 23.0517 11.0646 22.2784 11.5558C22.2489 11.5765 22.2155 11.591 22.1801 11.5983C22.1449 11.6057 22.1084 11.6057 22.073 11.5985C22.0377 11.5913 22.0042 11.577 21.9746 11.5564C21.945 11.5358 21.92 11.5094 21.9011 11.4788C21.6799 11.1709 21.536 10.3562 21.7804 9.27679C25.7723 7.20713 28.5036 3.57913 28.6707 2.31796C28.6908 2.22201 28.6771 2.12205 28.6317 2.03505C28.5863 1.94805 28.5121 1.87934 28.4217 1.84059ZM23.4554 7.24717C23.0419 7.56633 22.6022 7.85017 22.1408 8.09567C22.1408 8.09567 22.3496 7.61058 22.5058 7.33496C22.9357 6.62046 24.9928 3.8563 26.7188 3.34967C26.7331 3.34446 26.7486 3.34317 26.7635 3.34605C26.7784 3.34892 26.7923 3.3558 26.8036 3.36596C26.8149 3.37609 26.8232 3.38913 26.8276 3.40363C26.8321 3.41813 26.8324 3.43355 26.8286 3.44825C26.8286 4.05496 24.6401 6.35559 23.4554 7.24717ZM31.6851 11.7622C31.6797 11.7782 31.6793 11.7954 31.684 11.8116C31.6887 11.8277 31.6982 11.8421 31.7113 11.8528C31.7244 11.8635 31.7404 11.87 31.7573 11.8714C31.7741 11.8728 31.791 11.8691 31.8057 11.8607C32.0193 11.7207 32.2258 11.5702 32.4243 11.4095L32.6455 12.081C32.5125 12.2242 31.45 13.0619 30.7896 13.3698C30.0719 13.7009 29.4192 13.2605 29.3187 12.7308C29.2197 12.1148 29.5291 11.311 29.5291 11.311C29.5291 11.311 28.3907 12.6107 27.2292 13.2374C26.9993 13.3817 26.7364 13.4654 26.4652 13.4807C25.681 13.4576 25.4366 12.7108 25.5264 12.3012C25.6254 11.8176 26.6879 8.56842 26.8193 8.04025C26.8209 8.02596 26.819 8.0115 26.8139 7.99808C26.8087 7.98467 26.8004 7.97267 26.7897 7.96304C26.779 7.95342 26.7661 7.94646 26.7522 7.94275C26.7383 7.93904 26.7236 7.93867 26.7095 7.94167C26.3878 8.02946 25.548 8.57921 25.548 8.57921V7.67683C25.548 7.67683 27.9809 6.0245 28.5887 5.84896C29.1532 5.69496 29.6404 6.01371 29.4966 6.65279C29.4301 7.09321 27.8478 10.9137 27.8478 11.3988C27.8461 11.4118 27.8477 11.4251 27.8524 11.4374C27.857 11.4497 27.8646 11.4607 27.8746 11.4694C27.8845 11.4781 27.8965 11.4842 27.9093 11.4872C27.9222 11.4902 27.9356 11.49 27.9484 11.4865C28.4016 11.3541 29.2306 10.6504 29.8616 9.64791C30.4586 8.71162 30.8561 7.53363 31.3541 6.06917H33.4668C33.4653 6.07992 31.8614 10.9584 31.6851 11.7622ZM53.7479 7.18096C53.7929 7.86467 53.1399 11.465 50.4858 12.9079C49.7004 13.3375 49.17 13.5023 48.6933 13.4807C47.5658 13.4468 47.0354 12.5337 46.9133 12.2365C45.6204 9.04271 49.4016 6.07684 49.4016 6.07684H51.5916C51.5916 6.07684 48.2512 8.73167 48.7166 11.0877C49.0816 12.5183 50.4179 11.8253 51.1604 10.2069C51.3041 9.88658 52.1995 7.7615 51.6366 7.72917C51.1387 7.69529 50.475 8.74242 50.475 8.74242L50.0112 8.03717C50.3762 7.57517 51.3937 6.36329 52.5337 5.97829C52.7191 5.92596 53.737 5.7165 53.7479 7.18096ZM17.0384 11.7406C17.2112 11.7406 17.3802 11.7917 17.5239 11.8872C17.6676 11.9829 17.7796 12.1187 17.8457 12.2777C17.9119 12.4367 17.9292 12.6116 17.8955 12.7804C17.8618 12.9492 17.7785 13.1042 17.6563 13.2259C17.5341 13.3476 17.3784 13.4304 17.2089 13.464C17.0394 13.4976 16.8637 13.4803 16.704 13.4145C16.5444 13.3486 16.4079 13.2371 16.3119 13.094C16.2158 12.951 16.1646 12.7827 16.1646 12.6107C16.1637 12.4962 16.1858 12.3827 16.2294 12.2767C16.273 12.1708 16.3374 12.0746 16.4187 11.9936C16.5 11.9127 16.5967 11.8486 16.703 11.8052C16.8094 11.7617 16.9234 11.7398 17.0384 11.7406Z"
                                fill="#E31235"
                                />
                            </svg>
                            и
                            <svg
                                width="112"
                                height="13"
                                viewBox="0 0 112 13"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                d="M92.099 0.174514H88.7211C88.0712 0.148359 87.4359 0.373328 86.946 0.803176C86.456 1.23302 86.1486 1.83509 86.0869 2.48561L84.6135 10.166C84.3493 11.5624 84.7525 12.4841 86.3719 12.4841H89.7706C90.4266 12.5245 91.0721 12.304 91.5676 11.8702C92.0631 11.4365 92.3688 10.8243 92.4187 10.166L93.9408 2.48561C94.1841 1.12409 93.774 0.174514 92.1268 0.174514H92.099ZM91.2441 3.00229L89.9374 9.68421C89.9383 9.73922 89.9285 9.79388 89.9084 9.84506C89.8883 9.89625 89.8583 9.94295 89.8202 9.9825C89.7821 10.022 89.7367 10.0537 89.6864 10.0756C89.6362 10.0975 89.5821 10.1092 89.5274 10.1101H87.5882C87.3172 10.1101 87.2546 10.0054 87.2894 9.69119L88.5821 3.00927C88.6725 2.70904 88.8115 2.56939 89.0617 2.56939H90.9522C91.1954 2.56939 91.3205 2.70904 91.2719 3.00927L91.2441 3.00229ZM81.7916 10.1031L83.7238 0.174514H78.4416C77.7799 0.126172 77.1258 0.3416 76.6211 0.774154C76.1164 1.20671 75.8016 1.82157 75.7448 2.48561L73.6111 10.1031H72.506L72.0194 12.512H82.0974L82.577 10.1031H81.7916ZM80.6379 2.56241L79.1366 10.1031H76.3565L78.2748 3.00229C78.2748 2.88562 78.3209 2.77374 78.403 2.69125C78.4851 2.60875 78.5965 2.56241 78.7126 2.56241H80.6309H80.6379ZM70.9074 12.512L71.2341 0.251318H67.6755L61.7955 12.5539H64.6312L65.6112 10.2777H68.1551L67.9674 12.5539L70.9074 12.512ZM68.7041 3.43518L68.3219 8.24588H66.4731L68.5582 3.43518H68.7041ZM63.3315 2.48561C63.6095 1.12409 63.1925 0.174514 61.5522 0.174514H55.992L53.5802 12.512H56.131L56.826 8.93712H59.8842C61.5175 8.93712 62.1917 7.94565 62.4975 6.58413L63.3315 2.48561ZM60.6695 3.00229L60.044 6.08142C59.9676 6.41656 59.8146 6.52129 59.5436 6.52129H57.2917L58.1049 2.56241H60.3707C60.6417 2.56241 60.739 2.70205 60.7043 3.00229H60.6695ZM53.184 2.48561C53.4481 1.12409 53.0381 0.174514 51.3908 0.174514H48.0477C47.3766 0.123252 46.7119 0.335457 46.1934 0.766487C45.6749 1.19752 45.343 1.81377 45.2676 2.48561L43.808 10.166C43.5647 11.5624 43.9609 12.4841 45.5734 12.4841H48.9513C49.6107 12.5302 50.2616 12.3123 50.7616 11.878C51.2617 11.4437 51.5704 10.8282 51.6202 10.166L53.184 2.48561ZM50.5081 3.00229L49.2501 9.68421C49.2299 9.80499 49.1665 9.91421 49.0718 9.99134C48.9771 10.0685 48.8576 10.1082 48.7358 10.1031H46.8453C46.5951 10.1031 46.5117 9.9984 46.5464 9.68421L47.8601 3.00229C47.8601 2.70205 48.0338 2.56241 48.3327 2.56241H50.1954C50.4247 2.56241 50.5707 2.70205 50.4942 3.00229H50.5081ZM41.3476 10.1031L43.2728 0.174514H38.0045C37.3501 0.139337 36.7078 0.360568 36.2125 0.791634C35.7173 1.2227 35.4079 1.82997 35.3494 2.48561L33.174 10.1031H32.0828L31.5824 12.512H41.6743L42.1469 10.1031H41.3476ZM40.2147 2.56241L38.7273 10.1031H35.9472L37.8655 3.00229C37.8636 2.94519 37.8732 2.8883 37.8937 2.83501C37.9141 2.78171 37.9451 2.73309 37.9846 2.69205C38.0242 2.65101 38.0715 2.61839 38.1239 2.59611C38.1763 2.57384 38.2326 2.56238 38.2894 2.56241H40.2147ZM31.5059 6.46543C31.7631 5.069 31.3391 4.0915 29.7058 4.0915H26.6963L27.4747 0.174514H24.8544L22.4496 12.512H28.0863C28.7465 12.5582 29.3982 12.3405 29.8993 11.9064C30.4005 11.4722 30.7107 10.8567 30.7622 10.1939L31.5059 6.46543ZM28.8231 6.77963L28.2809 9.78894C28.2671 9.92164 28.2047 10.0444 28.1058 10.1335C28.0069 10.2225 27.8786 10.2714 27.7458 10.2707H25.5356L26.314 6.33277H28.5381C28.7953 6.33277 28.8926 6.45845 28.8231 6.77265V6.77963ZM19.9197 12.512L22.3106 0.251318H16.7503C16.0902 0.206719 15.4389 0.423672 14.9362 0.855679C14.4334 1.28769 14.119 1.90037 14.0605 2.56241L11.204 12.5469H13.9841L16.5557 3.0372C16.5548 2.98035 16.565 2.92387 16.5858 2.871C16.6067 2.81812 16.6376 2.76988 16.677 2.72903C16.7164 2.68819 16.7634 2.65553 16.8153 2.63293C16.8672 2.61033 16.9231 2.59823 16.9797 2.59732H19.2663L17.2786 12.512H19.9197ZM11.621 2.48561C11.8781 1.12409 11.482 0.174514 9.86949 0.174514H4.85134L4.37872 2.56241H8.65318C8.91034 2.56241 8.98679 2.70205 8.95204 3.00229L8.40991 5.83704H5.74793L6.158 3.87506L0 6.83549H4.57333L4.17716 8.79049L8.24311 6.84945L7.70098 9.64231C7.68529 9.76649 7.62211 9.87965 7.52481 9.95785C7.42751 10.036 7.30374 10.0731 7.1797 10.0612H2.91219L2.46042 12.4701H7.49247C8.14016 12.5162 8.77964 12.3026 9.27079 11.8759C9.76194 11.4492 10.0647 10.8444 10.1127 10.1939V10.152L11.621 2.48561ZM93.8922 9.67024L93.3431 12.512H95.9286L96.4847 9.67024H93.8922ZM111.803 3.87506H109.92L108.641 10.4732C108.645 10.5039 108.643 10.5352 108.633 10.5647C108.624 10.5942 108.608 10.6211 108.586 10.6434C108.565 10.6657 108.538 10.6827 108.509 10.6931C108.48 10.7035 108.449 10.7071 108.418 10.7036H107.028C106.903 10.7036 106.862 10.6477 106.896 10.4732L108.147 3.87506H106.243L104.915 10.7595C104.714 11.7928 104.985 12.512 106.229 12.512H108.391C108.638 12.531 108.887 12.5007 109.123 12.4228C109.358 12.3449 109.577 12.221 109.765 12.0581C109.953 11.8953 110.107 11.6967 110.218 11.4738C110.329 11.251 110.396 11.0082 110.413 10.7595L111.803 3.87506ZM103.053 3.87506H99.1675L97.5341 12.512H99.2926L99.8 10.0543H100.683L101.065 12.512H103.032L102.511 9.94255C102.847 9.82747 103.143 9.61742 103.364 9.33757C103.585 9.05771 103.72 8.7199 103.755 8.36458L104.318 5.49492C104.512 4.54534 104.22 3.85411 103.074 3.85411L103.053 3.87506ZM102.434 5.83704L101.996 7.93169C101.948 8.16908 101.843 8.2389 101.656 8.2389H100.092L100.655 5.44604H102.212C102.392 5.44604 102.462 5.55077 102.441 5.76024"
                                fill="#76BC21"
                                />
                            </svg>
                        </div>

                        <a href="/listing-map/" class="main-division__item-link">
                            <span><?php echo get_term_by( 'slug', 'roznica', 'relationship' )->count; ?></span>
                            открытых вакансий
                            <svg
                                width="14"
                                height="10"
                                viewBox="0 0 14 10"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                d="M11.5515 4.40044L8.57574 1.4247L9.42426 0.576172L13.8485 5.00044L9.42426 9.4247L8.57574 8.57617L11.5515 5.60044H0V4.40044H11.5515Z"
                                fill="black"
                                />
                            </svg>
                        </a>
                        <a href="/listing-map/" class="main-division__more-about-direction-mobile">
                            Больше о направлении
                            <svg
                                width="14"
                                height="10"
                                viewBox="0 0 14 10"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                d="M11.5515 4.40044L8.57574 1.4247L9.42426 0.576172L13.8485 5.00044L9.42426 9.4247L8.57574 8.57617L11.5515 5.60044H0V4.40044H11.5515Z"
                                fill="black"
                                />
                            </svg>
                        </a>
                    </div>
                    <?php
                }
                ?>      
            </div>
        </div>
    </div>

    <div class="main-division__bottom">
    
    <?php
    $retail_job = get_term_by( 'slug', 'roznica', 'relationship' )->count;
    if($retail_job == 0){
        ?>
        <!-- <div class="main-division__item" style="opacity: 0.3;"> -->
        <div class="main-division__item">
            <a href="/retail/" class="main-division__item-title">Розничные магазины</a>

            <div class="main-division__item-info">
            Продажи, консультирование клиентов магазинов
                <svg
                    width="54"
                    height="14"
                    viewBox="0 0 54 14"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                    d="M42.677 11.6297C46.6041 9.57092 47.5441 6.97154 46.3379 6.24009C44.5579 5.24992 39.658 7.02238 40.2225 11.89C39.9797 12.0332 39.4925 12.2965 39.4925 12.2965L39.8126 13.2775C39.8126 13.2775 40.4993 12.8694 40.6757 12.7477C41.251 13.2097 41.5495 13.4638 42.4341 13.4869C44.3258 13.53 45.9512 11.4388 45.9512 11.4388L45.4766 10.6997C45.487 10.6935 43.407 12.6877 42.677 11.6297ZM43.1983 8.64542C43.7612 7.65525 44.6691 6.88375 45.122 7.19175C45.5754 7.49971 44.6691 9.06429 42.5562 10.7335C42.4683 10.5842 42.6337 9.64483 43.1983 8.64542ZM7.11058 13.4807C6.7247 13.4759 6.35587 13.3218 6.08204 13.0511C5.1417 12.0702 6.02637 8.75629 6.21354 8.04025C6.21808 8.02488 6.21899 8.00867 6.21616 7.99292C6.21337 7.97713 6.20687 7.96225 6.19729 7.94938C6.18766 7.93654 6.1752 7.92608 6.16083 7.91888C6.14645 7.91167 6.13062 7.90788 6.11454 7.90779C6.09466 7.90783 6.07508 7.91292 6.05774 7.92262C6.04041 7.93233 6.02587 7.94633 6.01554 7.96325C5.61649 8.76708 3.46051 13.4807 1.55814 13.4807H1.44678C-0.399899 13.3036 -0.155531 10.7705 0.418271 9.22904H3.394C3.15118 9.88966 3.07384 10.307 3.07384 10.5287C3.08467 10.6827 3.21768 10.7705 3.33832 10.7058C3.64765 10.5395 4.15649 9.87887 4.59883 9.11971C5.39533 7.72146 6.4347 5.62875 8.22258 0.333008H11.4783C10.5162 3.28346 9.73057 5.94904 9.30524 8.99804C9.29949 9.03479 9.30549 9.07242 9.32241 9.10558C9.33932 9.13875 9.36628 9.16575 9.39949 9.18279C9.4327 9.19983 9.47045 9.20604 9.50737 9.20054C9.54432 9.195 9.57857 9.17804 9.60528 9.15204C10.5333 8.282 13.9359 0.970528 14.1385 0.333008H17.4127C17.4127 0.333008 14.1942 9.19671 14.4602 10.6827C14.4647 10.7375 14.4863 10.7896 14.522 10.8315C14.5577 10.8735 14.6057 10.9032 14.6592 10.9167C14.7128 10.9301 14.7692 10.9265 14.8207 10.9063C14.872 10.8862 14.9158 10.8505 14.9458 10.8044C15.1345 10.5734 15.4005 10.2315 15.5877 10.0221L16.0517 10.4841C15.1237 11.6282 13.608 13.6871 12.1047 13.4453C11.8646 13.3956 11.6442 13.2774 11.4705 13.105C9.9007 11.7514 12.0892 7.21483 12.4774 6.14617C12.5655 5.91517 12.6429 5.69496 12.6986 5.56254C12.7042 5.54642 12.7059 5.52921 12.7036 5.51234C12.7012 5.49542 12.6949 5.47934 12.685 5.46534C12.6752 5.45138 12.6622 5.43992 12.6471 5.43192C12.632 5.42392 12.6152 5.41959 12.598 5.41934C12.5781 5.41917 12.5585 5.42421 12.5412 5.43396C12.5238 5.44367 12.5093 5.45775 12.499 5.47475C12.4217 5.6395 12.2222 6.06917 12.1449 6.21238C11.1798 8.205 8.94641 13.4807 7.11058 13.4807ZM37.8561 2.6013C36.9843 2.58601 36.1373 2.89142 35.4774 3.459L35.5006 4.32905C35.5006 4.32905 36.54 3.28346 37.6241 3.73467C38.331 4.02109 38.8615 4.84646 38.464 6.28938C38.4423 6.37713 38.3975 6.54346 38.3758 6.63121C38.0665 5.97059 36.9158 5.46396 35.3119 6.67433C34.1396 7.55517 33.8411 8.49142 33.6106 9.25212C33.2781 10.364 33.3013 11.562 33.5549 12.2796C33.661 12.5594 33.8253 12.8138 34.0369 13.0261C34.2485 13.2384 34.5027 13.4038 34.783 13.5115C37.437 14.514 39.528 10.4317 40.1684 7.48896C40.5767 5.62875 40.886 2.65517 37.8561 2.6013ZM36.4286 11.542C36.1301 11.7406 35.6213 11.8284 35.5439 10.9137C35.4449 9.60325 36.4069 8.06179 36.6946 7.69838C37.1926 7.09321 37.867 7.06083 37.8561 8.00637C37.8453 9.10892 37.1694 11.0569 36.4286 11.542ZM28.4217 1.84059C26.8518 1.30159 21.3071 3.05246 19.4744 9.16283C19.2532 9.22904 18.1814 9.49392 18.1814 9.49392L17.7174 10.7489L19.3584 10.2423C19.3584 10.2423 19.1805 13.3806 21.9459 13.4761C24.1251 13.3976 25.2634 10.2053 24.5674 8.03562C24.4344 8.10183 22.6867 8.938 22.6867 8.938C22.6867 8.938 23.0517 11.0646 22.2784 11.5558C22.2489 11.5765 22.2155 11.591 22.1801 11.5983C22.1449 11.6057 22.1084 11.6057 22.073 11.5985C22.0377 11.5913 22.0042 11.577 21.9746 11.5564C21.945 11.5358 21.92 11.5094 21.9011 11.4788C21.6799 11.1709 21.536 10.3562 21.7804 9.27679C25.7723 7.20713 28.5036 3.57913 28.6707 2.31796C28.6908 2.22201 28.6771 2.12205 28.6317 2.03505C28.5863 1.94805 28.5121 1.87934 28.4217 1.84059ZM23.4554 7.24717C23.0419 7.56633 22.6022 7.85017 22.1408 8.09567C22.1408 8.09567 22.3496 7.61058 22.5058 7.33496C22.9357 6.62046 24.9928 3.8563 26.7188 3.34967C26.7331 3.34446 26.7486 3.34317 26.7635 3.34605C26.7784 3.34892 26.7923 3.3558 26.8036 3.36596C26.8149 3.37609 26.8232 3.38913 26.8276 3.40363C26.8321 3.41813 26.8324 3.43355 26.8286 3.44825C26.8286 4.05496 24.6401 6.35559 23.4554 7.24717ZM31.6851 11.7622C31.6797 11.7782 31.6793 11.7954 31.684 11.8116C31.6887 11.8277 31.6982 11.8421 31.7113 11.8528C31.7244 11.8635 31.7404 11.87 31.7573 11.8714C31.7741 11.8728 31.791 11.8691 31.8057 11.8607C32.0193 11.7207 32.2258 11.5702 32.4243 11.4095L32.6455 12.081C32.5125 12.2242 31.45 13.0619 30.7896 13.3698C30.0719 13.7009 29.4192 13.2605 29.3187 12.7308C29.2197 12.1148 29.5291 11.311 29.5291 11.311C29.5291 11.311 28.3907 12.6107 27.2292 13.2374C26.9993 13.3817 26.7364 13.4654 26.4652 13.4807C25.681 13.4576 25.4366 12.7108 25.5264 12.3012C25.6254 11.8176 26.6879 8.56842 26.8193 8.04025C26.8209 8.02596 26.819 8.0115 26.8139 7.99808C26.8087 7.98467 26.8004 7.97267 26.7897 7.96304C26.779 7.95342 26.7661 7.94646 26.7522 7.94275C26.7383 7.93904 26.7236 7.93867 26.7095 7.94167C26.3878 8.02946 25.548 8.57921 25.548 8.57921V7.67683C25.548 7.67683 27.9809 6.0245 28.5887 5.84896C29.1532 5.69496 29.6404 6.01371 29.4966 6.65279C29.4301 7.09321 27.8478 10.9137 27.8478 11.3988C27.8461 11.4118 27.8477 11.4251 27.8524 11.4374C27.857 11.4497 27.8646 11.4607 27.8746 11.4694C27.8845 11.4781 27.8965 11.4842 27.9093 11.4872C27.9222 11.4902 27.9356 11.49 27.9484 11.4865C28.4016 11.3541 29.2306 10.6504 29.8616 9.64791C30.4586 8.71162 30.8561 7.53363 31.3541 6.06917H33.4668C33.4653 6.07992 31.8614 10.9584 31.6851 11.7622ZM53.7479 7.18096C53.7929 7.86467 53.1399 11.465 50.4858 12.9079C49.7004 13.3375 49.17 13.5023 48.6933 13.4807C47.5658 13.4468 47.0354 12.5337 46.9133 12.2365C45.6204 9.04271 49.4016 6.07684 49.4016 6.07684H51.5916C51.5916 6.07684 48.2512 8.73167 48.7166 11.0877C49.0816 12.5183 50.4179 11.8253 51.1604 10.2069C51.3041 9.88658 52.1995 7.7615 51.6366 7.72917C51.1387 7.69529 50.475 8.74242 50.475 8.74242L50.0112 8.03717C50.3762 7.57517 51.3937 6.36329 52.5337 5.97829C52.7191 5.92596 53.737 5.7165 53.7479 7.18096ZM17.0384 11.7406C17.2112 11.7406 17.3802 11.7917 17.5239 11.8872C17.6676 11.9829 17.7796 12.1187 17.8457 12.2777C17.9119 12.4367 17.9292 12.6116 17.8955 12.7804C17.8618 12.9492 17.7785 13.1042 17.6563 13.2259C17.5341 13.3476 17.3784 13.4304 17.2089 13.464C17.0394 13.4976 16.8637 13.4803 16.704 13.4145C16.5444 13.3486 16.4079 13.2371 16.3119 13.094C16.2158 12.951 16.1646 12.7827 16.1646 12.6107C16.1637 12.4962 16.1858 12.3827 16.2294 12.2767C16.273 12.1708 16.3374 12.0746 16.4187 11.9936C16.5 11.9127 16.5967 11.8486 16.703 11.8052C16.8094 11.7617 16.9234 11.7398 17.0384 11.7406Z"
                    fill="#E31235"
                    />
                </svg>
                и
                <svg
                    width="112"
                    height="13"
                    viewBox="0 0 112 13"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                    d="M92.099 0.174514H88.7211C88.0712 0.148359 87.4359 0.373328 86.946 0.803176C86.456 1.23302 86.1486 1.83509 86.0869 2.48561L84.6135 10.166C84.3493 11.5624 84.7525 12.4841 86.3719 12.4841H89.7706C90.4266 12.5245 91.0721 12.304 91.5676 11.8702C92.0631 11.4365 92.3688 10.8243 92.4187 10.166L93.9408 2.48561C94.1841 1.12409 93.774 0.174514 92.1268 0.174514H92.099ZM91.2441 3.00229L89.9374 9.68421C89.9383 9.73922 89.9285 9.79388 89.9084 9.84506C89.8883 9.89625 89.8583 9.94295 89.8202 9.9825C89.7821 10.022 89.7367 10.0537 89.6864 10.0756C89.6362 10.0975 89.5821 10.1092 89.5274 10.1101H87.5882C87.3172 10.1101 87.2546 10.0054 87.2894 9.69119L88.5821 3.00927C88.6725 2.70904 88.8115 2.56939 89.0617 2.56939H90.9522C91.1954 2.56939 91.3205 2.70904 91.2719 3.00927L91.2441 3.00229ZM81.7916 10.1031L83.7238 0.174514H78.4416C77.7799 0.126172 77.1258 0.3416 76.6211 0.774154C76.1164 1.20671 75.8016 1.82157 75.7448 2.48561L73.6111 10.1031H72.506L72.0194 12.512H82.0974L82.577 10.1031H81.7916ZM80.6379 2.56241L79.1366 10.1031H76.3565L78.2748 3.00229C78.2748 2.88562 78.3209 2.77374 78.403 2.69125C78.4851 2.60875 78.5965 2.56241 78.7126 2.56241H80.6309H80.6379ZM70.9074 12.512L71.2341 0.251318H67.6755L61.7955 12.5539H64.6312L65.6112 10.2777H68.1551L67.9674 12.5539L70.9074 12.512ZM68.7041 3.43518L68.3219 8.24588H66.4731L68.5582 3.43518H68.7041ZM63.3315 2.48561C63.6095 1.12409 63.1925 0.174514 61.5522 0.174514H55.992L53.5802 12.512H56.131L56.826 8.93712H59.8842C61.5175 8.93712 62.1917 7.94565 62.4975 6.58413L63.3315 2.48561ZM60.6695 3.00229L60.044 6.08142C59.9676 6.41656 59.8146 6.52129 59.5436 6.52129H57.2917L58.1049 2.56241H60.3707C60.6417 2.56241 60.739 2.70205 60.7043 3.00229H60.6695ZM53.184 2.48561C53.4481 1.12409 53.0381 0.174514 51.3908 0.174514H48.0477C47.3766 0.123252 46.7119 0.335457 46.1934 0.766487C45.6749 1.19752 45.343 1.81377 45.2676 2.48561L43.808 10.166C43.5647 11.5624 43.9609 12.4841 45.5734 12.4841H48.9513C49.6107 12.5302 50.2616 12.3123 50.7616 11.878C51.2617 11.4437 51.5704 10.8282 51.6202 10.166L53.184 2.48561ZM50.5081 3.00229L49.2501 9.68421C49.2299 9.80499 49.1665 9.91421 49.0718 9.99134C48.9771 10.0685 48.8576 10.1082 48.7358 10.1031H46.8453C46.5951 10.1031 46.5117 9.9984 46.5464 9.68421L47.8601 3.00229C47.8601 2.70205 48.0338 2.56241 48.3327 2.56241H50.1954C50.4247 2.56241 50.5707 2.70205 50.4942 3.00229H50.5081ZM41.3476 10.1031L43.2728 0.174514H38.0045C37.3501 0.139337 36.7078 0.360568 36.2125 0.791634C35.7173 1.2227 35.4079 1.82997 35.3494 2.48561L33.174 10.1031H32.0828L31.5824 12.512H41.6743L42.1469 10.1031H41.3476ZM40.2147 2.56241L38.7273 10.1031H35.9472L37.8655 3.00229C37.8636 2.94519 37.8732 2.8883 37.8937 2.83501C37.9141 2.78171 37.9451 2.73309 37.9846 2.69205C38.0242 2.65101 38.0715 2.61839 38.1239 2.59611C38.1763 2.57384 38.2326 2.56238 38.2894 2.56241H40.2147ZM31.5059 6.46543C31.7631 5.069 31.3391 4.0915 29.7058 4.0915H26.6963L27.4747 0.174514H24.8544L22.4496 12.512H28.0863C28.7465 12.5582 29.3982 12.3405 29.8993 11.9064C30.4005 11.4722 30.7107 10.8567 30.7622 10.1939L31.5059 6.46543ZM28.8231 6.77963L28.2809 9.78894C28.2671 9.92164 28.2047 10.0444 28.1058 10.1335C28.0069 10.2225 27.8786 10.2714 27.7458 10.2707H25.5356L26.314 6.33277H28.5381C28.7953 6.33277 28.8926 6.45845 28.8231 6.77265V6.77963ZM19.9197 12.512L22.3106 0.251318H16.7503C16.0902 0.206719 15.4389 0.423672 14.9362 0.855679C14.4334 1.28769 14.119 1.90037 14.0605 2.56241L11.204 12.5469H13.9841L16.5557 3.0372C16.5548 2.98035 16.565 2.92387 16.5858 2.871C16.6067 2.81812 16.6376 2.76988 16.677 2.72903C16.7164 2.68819 16.7634 2.65553 16.8153 2.63293C16.8672 2.61033 16.9231 2.59823 16.9797 2.59732H19.2663L17.2786 12.512H19.9197ZM11.621 2.48561C11.8781 1.12409 11.482 0.174514 9.86949 0.174514H4.85134L4.37872 2.56241H8.65318C8.91034 2.56241 8.98679 2.70205 8.95204 3.00229L8.40991 5.83704H5.74793L6.158 3.87506L0 6.83549H4.57333L4.17716 8.79049L8.24311 6.84945L7.70098 9.64231C7.68529 9.76649 7.62211 9.87965 7.52481 9.95785C7.42751 10.036 7.30374 10.0731 7.1797 10.0612H2.91219L2.46042 12.4701H7.49247C8.14016 12.5162 8.77964 12.3026 9.27079 11.8759C9.76194 11.4492 10.0647 10.8444 10.1127 10.1939V10.152L11.621 2.48561ZM93.8922 9.67024L93.3431 12.512H95.9286L96.4847 9.67024H93.8922ZM111.803 3.87506H109.92L108.641 10.4732C108.645 10.5039 108.643 10.5352 108.633 10.5647C108.624 10.5942 108.608 10.6211 108.586 10.6434C108.565 10.6657 108.538 10.6827 108.509 10.6931C108.48 10.7035 108.449 10.7071 108.418 10.7036H107.028C106.903 10.7036 106.862 10.6477 106.896 10.4732L108.147 3.87506H106.243L104.915 10.7595C104.714 11.7928 104.985 12.512 106.229 12.512H108.391C108.638 12.531 108.887 12.5007 109.123 12.4228C109.358 12.3449 109.577 12.221 109.765 12.0581C109.953 11.8953 110.107 11.6967 110.218 11.4738C110.329 11.251 110.396 11.0082 110.413 10.7595L111.803 3.87506ZM103.053 3.87506H99.1675L97.5341 12.512H99.2926L99.8 10.0543H100.683L101.065 12.512H103.032L102.511 9.94255C102.847 9.82747 103.143 9.61742 103.364 9.33757C103.585 9.05771 103.72 8.7199 103.755 8.36458L104.318 5.49492C104.512 4.54534 104.22 3.85411 103.074 3.85411L103.053 3.87506ZM102.434 5.83704L101.996 7.93169C101.948 8.16908 101.843 8.2389 101.656 8.2389H100.092L100.655 5.44604H102.212C102.392 5.44604 102.462 5.55077 102.441 5.76024"
                    fill="#76BC21"
                    />
                </svg>
            </div>

            <a href="/listing-map/" class="main-division__item-link" style="display:none;">
                <span><?php echo get_term_by( 'slug', 'roznica', 'relationship' )->count; ?></span>
                открытых вакансий
                <svg
                    width="14"
                    height="10"
                    viewBox="0 0 14 10"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                    d="M11.5515 4.40044L8.57574 1.4247L9.42426 0.576172L13.8485 5.00044L9.42426 9.4247L8.57574 8.57617L11.5515 5.60044H0V4.40044H11.5515Z"
                    fill="black"
                    />
                </svg>
            </a>
            <a href="/listing-map/" class="main-division__more-about-direction-mobile" style="display:none;">
                Больше о направлении
                <svg
                    width="14"
                    height="10"
                    viewBox="0 0 14 10"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                    d="M11.5515 4.40044L8.57574 1.4247L9.42426 0.576172L13.8485 5.00044L9.42426 9.4247L8.57574 8.57617L11.5515 5.60044H0V4.40044H11.5515Z"
                    fill="black"
                    />
                </svg>
            </a>
        </div>
        <?php
    }else{
        ?>
        <div class="main-division__item">
            <a href="/retail/" class="main-division__item-title">Розничные магазины</a>

            <div class="main-division__item-info">
            Продажи, консультирование клиентов магазинов
                <svg
                    width="54"
                    height="14"
                    viewBox="0 0 54 14"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                    d="M42.677 11.6297C46.6041 9.57092 47.5441 6.97154 46.3379 6.24009C44.5579 5.24992 39.658 7.02238 40.2225 11.89C39.9797 12.0332 39.4925 12.2965 39.4925 12.2965L39.8126 13.2775C39.8126 13.2775 40.4993 12.8694 40.6757 12.7477C41.251 13.2097 41.5495 13.4638 42.4341 13.4869C44.3258 13.53 45.9512 11.4388 45.9512 11.4388L45.4766 10.6997C45.487 10.6935 43.407 12.6877 42.677 11.6297ZM43.1983 8.64542C43.7612 7.65525 44.6691 6.88375 45.122 7.19175C45.5754 7.49971 44.6691 9.06429 42.5562 10.7335C42.4683 10.5842 42.6337 9.64483 43.1983 8.64542ZM7.11058 13.4807C6.7247 13.4759 6.35587 13.3218 6.08204 13.0511C5.1417 12.0702 6.02637 8.75629 6.21354 8.04025C6.21808 8.02488 6.21899 8.00867 6.21616 7.99292C6.21337 7.97713 6.20687 7.96225 6.19729 7.94938C6.18766 7.93654 6.1752 7.92608 6.16083 7.91888C6.14645 7.91167 6.13062 7.90788 6.11454 7.90779C6.09466 7.90783 6.07508 7.91292 6.05774 7.92262C6.04041 7.93233 6.02587 7.94633 6.01554 7.96325C5.61649 8.76708 3.46051 13.4807 1.55814 13.4807H1.44678C-0.399899 13.3036 -0.155531 10.7705 0.418271 9.22904H3.394C3.15118 9.88966 3.07384 10.307 3.07384 10.5287C3.08467 10.6827 3.21768 10.7705 3.33832 10.7058C3.64765 10.5395 4.15649 9.87887 4.59883 9.11971C5.39533 7.72146 6.4347 5.62875 8.22258 0.333008H11.4783C10.5162 3.28346 9.73057 5.94904 9.30524 8.99804C9.29949 9.03479 9.30549 9.07242 9.32241 9.10558C9.33932 9.13875 9.36628 9.16575 9.39949 9.18279C9.4327 9.19983 9.47045 9.20604 9.50737 9.20054C9.54432 9.195 9.57857 9.17804 9.60528 9.15204C10.5333 8.282 13.9359 0.970528 14.1385 0.333008H17.4127C17.4127 0.333008 14.1942 9.19671 14.4602 10.6827C14.4647 10.7375 14.4863 10.7896 14.522 10.8315C14.5577 10.8735 14.6057 10.9032 14.6592 10.9167C14.7128 10.9301 14.7692 10.9265 14.8207 10.9063C14.872 10.8862 14.9158 10.8505 14.9458 10.8044C15.1345 10.5734 15.4005 10.2315 15.5877 10.0221L16.0517 10.4841C15.1237 11.6282 13.608 13.6871 12.1047 13.4453C11.8646 13.3956 11.6442 13.2774 11.4705 13.105C9.9007 11.7514 12.0892 7.21483 12.4774 6.14617C12.5655 5.91517 12.6429 5.69496 12.6986 5.56254C12.7042 5.54642 12.7059 5.52921 12.7036 5.51234C12.7012 5.49542 12.6949 5.47934 12.685 5.46534C12.6752 5.45138 12.6622 5.43992 12.6471 5.43192C12.632 5.42392 12.6152 5.41959 12.598 5.41934C12.5781 5.41917 12.5585 5.42421 12.5412 5.43396C12.5238 5.44367 12.5093 5.45775 12.499 5.47475C12.4217 5.6395 12.2222 6.06917 12.1449 6.21238C11.1798 8.205 8.94641 13.4807 7.11058 13.4807ZM37.8561 2.6013C36.9843 2.58601 36.1373 2.89142 35.4774 3.459L35.5006 4.32905C35.5006 4.32905 36.54 3.28346 37.6241 3.73467C38.331 4.02109 38.8615 4.84646 38.464 6.28938C38.4423 6.37713 38.3975 6.54346 38.3758 6.63121C38.0665 5.97059 36.9158 5.46396 35.3119 6.67433C34.1396 7.55517 33.8411 8.49142 33.6106 9.25212C33.2781 10.364 33.3013 11.562 33.5549 12.2796C33.661 12.5594 33.8253 12.8138 34.0369 13.0261C34.2485 13.2384 34.5027 13.4038 34.783 13.5115C37.437 14.514 39.528 10.4317 40.1684 7.48896C40.5767 5.62875 40.886 2.65517 37.8561 2.6013ZM36.4286 11.542C36.1301 11.7406 35.6213 11.8284 35.5439 10.9137C35.4449 9.60325 36.4069 8.06179 36.6946 7.69838C37.1926 7.09321 37.867 7.06083 37.8561 8.00637C37.8453 9.10892 37.1694 11.0569 36.4286 11.542ZM28.4217 1.84059C26.8518 1.30159 21.3071 3.05246 19.4744 9.16283C19.2532 9.22904 18.1814 9.49392 18.1814 9.49392L17.7174 10.7489L19.3584 10.2423C19.3584 10.2423 19.1805 13.3806 21.9459 13.4761C24.1251 13.3976 25.2634 10.2053 24.5674 8.03562C24.4344 8.10183 22.6867 8.938 22.6867 8.938C22.6867 8.938 23.0517 11.0646 22.2784 11.5558C22.2489 11.5765 22.2155 11.591 22.1801 11.5983C22.1449 11.6057 22.1084 11.6057 22.073 11.5985C22.0377 11.5913 22.0042 11.577 21.9746 11.5564C21.945 11.5358 21.92 11.5094 21.9011 11.4788C21.6799 11.1709 21.536 10.3562 21.7804 9.27679C25.7723 7.20713 28.5036 3.57913 28.6707 2.31796C28.6908 2.22201 28.6771 2.12205 28.6317 2.03505C28.5863 1.94805 28.5121 1.87934 28.4217 1.84059ZM23.4554 7.24717C23.0419 7.56633 22.6022 7.85017 22.1408 8.09567C22.1408 8.09567 22.3496 7.61058 22.5058 7.33496C22.9357 6.62046 24.9928 3.8563 26.7188 3.34967C26.7331 3.34446 26.7486 3.34317 26.7635 3.34605C26.7784 3.34892 26.7923 3.3558 26.8036 3.36596C26.8149 3.37609 26.8232 3.38913 26.8276 3.40363C26.8321 3.41813 26.8324 3.43355 26.8286 3.44825C26.8286 4.05496 24.6401 6.35559 23.4554 7.24717ZM31.6851 11.7622C31.6797 11.7782 31.6793 11.7954 31.684 11.8116C31.6887 11.8277 31.6982 11.8421 31.7113 11.8528C31.7244 11.8635 31.7404 11.87 31.7573 11.8714C31.7741 11.8728 31.791 11.8691 31.8057 11.8607C32.0193 11.7207 32.2258 11.5702 32.4243 11.4095L32.6455 12.081C32.5125 12.2242 31.45 13.0619 30.7896 13.3698C30.0719 13.7009 29.4192 13.2605 29.3187 12.7308C29.2197 12.1148 29.5291 11.311 29.5291 11.311C29.5291 11.311 28.3907 12.6107 27.2292 13.2374C26.9993 13.3817 26.7364 13.4654 26.4652 13.4807C25.681 13.4576 25.4366 12.7108 25.5264 12.3012C25.6254 11.8176 26.6879 8.56842 26.8193 8.04025C26.8209 8.02596 26.819 8.0115 26.8139 7.99808C26.8087 7.98467 26.8004 7.97267 26.7897 7.96304C26.779 7.95342 26.7661 7.94646 26.7522 7.94275C26.7383 7.93904 26.7236 7.93867 26.7095 7.94167C26.3878 8.02946 25.548 8.57921 25.548 8.57921V7.67683C25.548 7.67683 27.9809 6.0245 28.5887 5.84896C29.1532 5.69496 29.6404 6.01371 29.4966 6.65279C29.4301 7.09321 27.8478 10.9137 27.8478 11.3988C27.8461 11.4118 27.8477 11.4251 27.8524 11.4374C27.857 11.4497 27.8646 11.4607 27.8746 11.4694C27.8845 11.4781 27.8965 11.4842 27.9093 11.4872C27.9222 11.4902 27.9356 11.49 27.9484 11.4865C28.4016 11.3541 29.2306 10.6504 29.8616 9.64791C30.4586 8.71162 30.8561 7.53363 31.3541 6.06917H33.4668C33.4653 6.07992 31.8614 10.9584 31.6851 11.7622ZM53.7479 7.18096C53.7929 7.86467 53.1399 11.465 50.4858 12.9079C49.7004 13.3375 49.17 13.5023 48.6933 13.4807C47.5658 13.4468 47.0354 12.5337 46.9133 12.2365C45.6204 9.04271 49.4016 6.07684 49.4016 6.07684H51.5916C51.5916 6.07684 48.2512 8.73167 48.7166 11.0877C49.0816 12.5183 50.4179 11.8253 51.1604 10.2069C51.3041 9.88658 52.1995 7.7615 51.6366 7.72917C51.1387 7.69529 50.475 8.74242 50.475 8.74242L50.0112 8.03717C50.3762 7.57517 51.3937 6.36329 52.5337 5.97829C52.7191 5.92596 53.737 5.7165 53.7479 7.18096ZM17.0384 11.7406C17.2112 11.7406 17.3802 11.7917 17.5239 11.8872C17.6676 11.9829 17.7796 12.1187 17.8457 12.2777C17.9119 12.4367 17.9292 12.6116 17.8955 12.7804C17.8618 12.9492 17.7785 13.1042 17.6563 13.2259C17.5341 13.3476 17.3784 13.4304 17.2089 13.464C17.0394 13.4976 16.8637 13.4803 16.704 13.4145C16.5444 13.3486 16.4079 13.2371 16.3119 13.094C16.2158 12.951 16.1646 12.7827 16.1646 12.6107C16.1637 12.4962 16.1858 12.3827 16.2294 12.2767C16.273 12.1708 16.3374 12.0746 16.4187 11.9936C16.5 11.9127 16.5967 11.8486 16.703 11.8052C16.8094 11.7617 16.9234 11.7398 17.0384 11.7406Z"
                    fill="#E31235"
                    />
                </svg>
                и
                <svg
                    width="112"
                    height="13"
                    viewBox="0 0 112 13"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                    d="M92.099 0.174514H88.7211C88.0712 0.148359 87.4359 0.373328 86.946 0.803176C86.456 1.23302 86.1486 1.83509 86.0869 2.48561L84.6135 10.166C84.3493 11.5624 84.7525 12.4841 86.3719 12.4841H89.7706C90.4266 12.5245 91.0721 12.304 91.5676 11.8702C92.0631 11.4365 92.3688 10.8243 92.4187 10.166L93.9408 2.48561C94.1841 1.12409 93.774 0.174514 92.1268 0.174514H92.099ZM91.2441 3.00229L89.9374 9.68421C89.9383 9.73922 89.9285 9.79388 89.9084 9.84506C89.8883 9.89625 89.8583 9.94295 89.8202 9.9825C89.7821 10.022 89.7367 10.0537 89.6864 10.0756C89.6362 10.0975 89.5821 10.1092 89.5274 10.1101H87.5882C87.3172 10.1101 87.2546 10.0054 87.2894 9.69119L88.5821 3.00927C88.6725 2.70904 88.8115 2.56939 89.0617 2.56939H90.9522C91.1954 2.56939 91.3205 2.70904 91.2719 3.00927L91.2441 3.00229ZM81.7916 10.1031L83.7238 0.174514H78.4416C77.7799 0.126172 77.1258 0.3416 76.6211 0.774154C76.1164 1.20671 75.8016 1.82157 75.7448 2.48561L73.6111 10.1031H72.506L72.0194 12.512H82.0974L82.577 10.1031H81.7916ZM80.6379 2.56241L79.1366 10.1031H76.3565L78.2748 3.00229C78.2748 2.88562 78.3209 2.77374 78.403 2.69125C78.4851 2.60875 78.5965 2.56241 78.7126 2.56241H80.6309H80.6379ZM70.9074 12.512L71.2341 0.251318H67.6755L61.7955 12.5539H64.6312L65.6112 10.2777H68.1551L67.9674 12.5539L70.9074 12.512ZM68.7041 3.43518L68.3219 8.24588H66.4731L68.5582 3.43518H68.7041ZM63.3315 2.48561C63.6095 1.12409 63.1925 0.174514 61.5522 0.174514H55.992L53.5802 12.512H56.131L56.826 8.93712H59.8842C61.5175 8.93712 62.1917 7.94565 62.4975 6.58413L63.3315 2.48561ZM60.6695 3.00229L60.044 6.08142C59.9676 6.41656 59.8146 6.52129 59.5436 6.52129H57.2917L58.1049 2.56241H60.3707C60.6417 2.56241 60.739 2.70205 60.7043 3.00229H60.6695ZM53.184 2.48561C53.4481 1.12409 53.0381 0.174514 51.3908 0.174514H48.0477C47.3766 0.123252 46.7119 0.335457 46.1934 0.766487C45.6749 1.19752 45.343 1.81377 45.2676 2.48561L43.808 10.166C43.5647 11.5624 43.9609 12.4841 45.5734 12.4841H48.9513C49.6107 12.5302 50.2616 12.3123 50.7616 11.878C51.2617 11.4437 51.5704 10.8282 51.6202 10.166L53.184 2.48561ZM50.5081 3.00229L49.2501 9.68421C49.2299 9.80499 49.1665 9.91421 49.0718 9.99134C48.9771 10.0685 48.8576 10.1082 48.7358 10.1031H46.8453C46.5951 10.1031 46.5117 9.9984 46.5464 9.68421L47.8601 3.00229C47.8601 2.70205 48.0338 2.56241 48.3327 2.56241H50.1954C50.4247 2.56241 50.5707 2.70205 50.4942 3.00229H50.5081ZM41.3476 10.1031L43.2728 0.174514H38.0045C37.3501 0.139337 36.7078 0.360568 36.2125 0.791634C35.7173 1.2227 35.4079 1.82997 35.3494 2.48561L33.174 10.1031H32.0828L31.5824 12.512H41.6743L42.1469 10.1031H41.3476ZM40.2147 2.56241L38.7273 10.1031H35.9472L37.8655 3.00229C37.8636 2.94519 37.8732 2.8883 37.8937 2.83501C37.9141 2.78171 37.9451 2.73309 37.9846 2.69205C38.0242 2.65101 38.0715 2.61839 38.1239 2.59611C38.1763 2.57384 38.2326 2.56238 38.2894 2.56241H40.2147ZM31.5059 6.46543C31.7631 5.069 31.3391 4.0915 29.7058 4.0915H26.6963L27.4747 0.174514H24.8544L22.4496 12.512H28.0863C28.7465 12.5582 29.3982 12.3405 29.8993 11.9064C30.4005 11.4722 30.7107 10.8567 30.7622 10.1939L31.5059 6.46543ZM28.8231 6.77963L28.2809 9.78894C28.2671 9.92164 28.2047 10.0444 28.1058 10.1335C28.0069 10.2225 27.8786 10.2714 27.7458 10.2707H25.5356L26.314 6.33277H28.5381C28.7953 6.33277 28.8926 6.45845 28.8231 6.77265V6.77963ZM19.9197 12.512L22.3106 0.251318H16.7503C16.0902 0.206719 15.4389 0.423672 14.9362 0.855679C14.4334 1.28769 14.119 1.90037 14.0605 2.56241L11.204 12.5469H13.9841L16.5557 3.0372C16.5548 2.98035 16.565 2.92387 16.5858 2.871C16.6067 2.81812 16.6376 2.76988 16.677 2.72903C16.7164 2.68819 16.7634 2.65553 16.8153 2.63293C16.8672 2.61033 16.9231 2.59823 16.9797 2.59732H19.2663L17.2786 12.512H19.9197ZM11.621 2.48561C11.8781 1.12409 11.482 0.174514 9.86949 0.174514H4.85134L4.37872 2.56241H8.65318C8.91034 2.56241 8.98679 2.70205 8.95204 3.00229L8.40991 5.83704H5.74793L6.158 3.87506L0 6.83549H4.57333L4.17716 8.79049L8.24311 6.84945L7.70098 9.64231C7.68529 9.76649 7.62211 9.87965 7.52481 9.95785C7.42751 10.036 7.30374 10.0731 7.1797 10.0612H2.91219L2.46042 12.4701H7.49247C8.14016 12.5162 8.77964 12.3026 9.27079 11.8759C9.76194 11.4492 10.0647 10.8444 10.1127 10.1939V10.152L11.621 2.48561ZM93.8922 9.67024L93.3431 12.512H95.9286L96.4847 9.67024H93.8922ZM111.803 3.87506H109.92L108.641 10.4732C108.645 10.5039 108.643 10.5352 108.633 10.5647C108.624 10.5942 108.608 10.6211 108.586 10.6434C108.565 10.6657 108.538 10.6827 108.509 10.6931C108.48 10.7035 108.449 10.7071 108.418 10.7036H107.028C106.903 10.7036 106.862 10.6477 106.896 10.4732L108.147 3.87506H106.243L104.915 10.7595C104.714 11.7928 104.985 12.512 106.229 12.512H108.391C108.638 12.531 108.887 12.5007 109.123 12.4228C109.358 12.3449 109.577 12.221 109.765 12.0581C109.953 11.8953 110.107 11.6967 110.218 11.4738C110.329 11.251 110.396 11.0082 110.413 10.7595L111.803 3.87506ZM103.053 3.87506H99.1675L97.5341 12.512H99.2926L99.8 10.0543H100.683L101.065 12.512H103.032L102.511 9.94255C102.847 9.82747 103.143 9.61742 103.364 9.33757C103.585 9.05771 103.72 8.7199 103.755 8.36458L104.318 5.49492C104.512 4.54534 104.22 3.85411 103.074 3.85411L103.053 3.87506ZM102.434 5.83704L101.996 7.93169C101.948 8.16908 101.843 8.2389 101.656 8.2389H100.092L100.655 5.44604H102.212C102.392 5.44604 102.462 5.55077 102.441 5.76024"
                    fill="#76BC21"
                    />
                </svg>
            </div>

            <a href="/listing-map/" class="main-division__item-link">
                <span><?php echo get_term_by( 'slug', 'roznica', 'relationship' )->count; ?></span>
                открытых вакансий
                <svg
                    width="14"
                    height="10"
                    viewBox="0 0 14 10"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                    d="M11.5515 4.40044L8.57574 1.4247L9.42426 0.576172L13.8485 5.00044L9.42426 9.4247L8.57574 8.57617L11.5515 5.60044H0V4.40044H11.5515Z"
                    fill="black"
                    />
                </svg>
            </a>
            <a href="/vacancies/" class="main-division__more-about-direction-mobile">
                Больше о направлении
                <svg
                    width="14"
                    height="10"
                    viewBox="0 0 14 10"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                    d="M11.5515 4.40044L8.57574 1.4247L9.42426 0.576172L13.8485 5.00044L9.42426 9.4247L8.57574 8.57617L11.5515 5.60044H0V4.40044H11.5515Z"
                    fill="black"
                    />
                </svg>
            </a>
        </div>
        <?php
    }
    ?>

    
    
    <?php 
    $office_job = get_term_by( 'slug', 'office', 'relationship' )->count;    
    if($office_job == 0){
        ?>
        <!-- <div class="main-division__item" style="opacity: 0.3;"> -->
        <div class="main-division__item">
            <a href="/office/" class="main-division__item-title">Центральный офис</a>

            <div class="main-division__item-info">
            Маркетинг, финансы, менеджмент и HR
            </div>

            <a href="/vacancies/?type=office" class="main-division__item-link" style="display:none;">
                <span><?php echo get_term_by( 'slug', 'office', 'relationship' )->count; ?></span>
                открытых вакансий
                <svg
                    width="14"
                    height="10"
                    viewBox="0 0 14 10"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                    d="M11.5515 4.40044L8.57574 1.4247L9.42426 0.576172L13.8485 5.00044L9.42426 9.4247L8.57574 8.57617L11.5515 5.60044H0V4.40044H11.5515Z"
                    fill="black"
                    />
                </svg>
            </a>
            <a href="/vacancies/?type=office" class="main-division__more-about-direction-mobile" style="display:none">
                Больше о направлении
                <svg
                    width="14"
                    height="10"
                    viewBox="0 0 14 10"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                    d="M11.5515 4.40044L8.57574 1.4247L9.42426 0.576172L13.8485 5.00044L9.42426 9.4247L8.57574 8.57617L11.5515 5.60044H0V4.40044H11.5515Z"
                    fill="black"
                    />
                </svg>
            </a>
        </div>
        <?php
    }else{
        ?>
        <div id="Office_vacancies" class="main-division__item">
            <a href="/office/" class="main-division__item-title">Центральный офис</a>

            <div class="main-division__item-info">
            Маркетинг, финансы, менеджмент и HR
            </div>

            <a href="/vacancies/?type=office" class="main-division__item-link">
                <span><?php echo get_term_by( 'slug', 'office', 'relationship' )->count; ?></span>
                открытых вакансий
                <svg
                    width="14"
                    height="10"
                    viewBox="0 0 14 10"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                    d="M11.5515 4.40044L8.57574 1.4247L9.42426 0.576172L13.8485 5.00044L9.42426 9.4247L8.57574 8.57617L11.5515 5.60044H0V4.40044H11.5515Z"
                    fill="black"
                    />
                </svg>
            </a>
            <a href="/vacancies/?type=office" class="main-division__more-about-direction-mobile">
                Больше о направлении
                <svg
                    width="14"
                    height="10"
                    viewBox="0 0 14 10"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                    d="M11.5515 4.40044L8.57574 1.4247L9.42426 0.576172L13.8485 5.00044L9.42426 9.4247L8.57574 8.57617L11.5515 5.60044H0V4.40044H11.5515Z"
                    fill="black"
                    />
                </svg>
            </a>
        </div>
        <?php
    }
    ?>

    <?php
    $logistic_job = get_term_by( 'slug', 'logistic', 'relationship' )->count;
    if ($logistic_job == 0){
        ?>
        <!-- <div class="main-division__item" style="opacity: 0.3;"> -->
        <div class="main-division__item">
            <a href="/logistic/" class="main-division__item-title">Сервис и логистика</a>

            <div class="main-division__item-info">
            Работа на складе и в сервисном центре
            </div>

            <a href="/vacancies/?type=logistic" class="main-division__item-link" style="display:none;">
                <span><?php echo get_term_by( 'slug', 'logistic', 'relationship' )->count; ?></span>
                открытых вакансий
                <svg
                    width="14"
                    height="10"
                    viewBox="0 0 14 10"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                    d="M11.5515 4.40044L8.57574 1.4247L9.42426 0.576172L13.8485 5.00044L9.42426 9.4247L8.57574 8.57617L11.5515 5.60044H0V4.40044H11.5515Z"
                    fill="black"
                    />
                </svg>
            </a>
            <a href="/vacancies/?type=logistic" class="main-division__more-about-direction-mobile" style="display:none;>
                Больше о направлении
                <svg
                    width="14"
                    height="10"
                    viewBox="0 0 14 10"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                    d="M11.5515 4.40044L8.57574 1.4247L9.42426 0.576172L13.8485 5.00044L9.42426 9.4247L8.57574 8.57617L11.5515 5.60044H0V4.40044H11.5515Z"
                    fill="black"
                    />
                </svg>
            </a>
        </div>
        <?php
    }else{
        ?>
        <div class="main-division__item">
            <a href="/logistic/" class="main-division__item-title">Сервис и логистика</a>

            <div class="main-division__item-info">
            Работа на складе и в сервисном центре
            </div>

            <a href="/vacancies/?type=logistic" class="main-division__item-link">
                <span><?php echo get_term_by( 'slug', 'logistic', 'relationship' )->count; ?></span>
                открытых вакансий
                <svg
                    width="14"
                    height="10"
                    viewBox="0 0 14 10"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                    d="M11.5515 4.40044L8.57574 1.4247L9.42426 0.576172L13.8485 5.00044L9.42426 9.4247L8.57574 8.57617L11.5515 5.60044H0V4.40044H11.5515Z"
                    fill="black"
                    />
                </svg>
            </a>
            <a href="/vacancies/?type=logistic" class="main-division__more-about-direction-mobile">
                Больше о направлении
                <svg
                    width="14"
                    height="10"
                    viewBox="0 0 14 10"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                    d="M11.5515 4.40044L8.57574 1.4247L9.42426 0.576172L13.8485 5.00044L9.42426 9.4247L8.57574 8.57617L11.5515 5.60044H0V4.40044H11.5515Z"
                    fill="black"
                    />
                </svg>
            </a>
        </div>
        <?php
    }
    ?>
    </div>
</section>
<!-- //Section Division -->