document.addEventListener("DOMContentLoaded", function(event) { 

    var filter_buzy = 0;

    if(document.querySelector('#clear_all_filters')){
        document.querySelector('#clear_all_filters').addEventListener( 'click', function(e){
    
            e.preventDefault();
    
            document.querySelector('#actually_vacancies').innerHTML = '<div class="loader-bg"><div class="lds-ripple"><div></div><div></div></div></div>';
            var vaccat_slug = document.querySelector('.profession__menu-item.profession__menu-item-active').getAttribute('data-vaccat_slug');
    
    
            var data = {
                action: 'get_profession__menu_items',
                default: 'default',
                vaccat_slug : vaccat_slug,
                rel_type : rel_type
            };
    
            var request = new XMLHttpRequest();
            request.open('POST', ajax.url, true);
            request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8");
    
            request.onload = function() {
                if (this.status >= 200 && this.status < 400) {
                    // Success!
                    var resp = JSON.parse(this.response);
                    if( true == resp.success ){
                        document.querySelector('#actually_vacancies').innerHTML = resp.html;

                        document.querySelectorAll('.can_work_remotely').forEach(item => {
                            item.checked = false;
                        });

                        document.querySelectorAll('.can_without_experience').forEach(item => {
                            item.checked = false;
                        });
    
                        document.querySelector('#town').value = -1;
                        document.querySelector('#level').value = -1;
    
                        idPageLevelSelect.removeAllTags();
                        idPageCitySelect.removeAllTags();
    
                        var xxx = '';
                        if( data.vaccat_slug != undefined ){
                            xxx = '?vaccat_slug='+vaccat_slug;
                        }
    
                        window.history.pushState('', '', window.location.origin + window.location.pathname + xxx );
                    }
                }
            };
    
            var str = "";
            for (var key in data) {
                if (str != "") {
                    str += "&";
                }
                str += key + "=" + encodeURIComponent(data[key]);
            }
    
            request.send( str );
    
        })
    }

    if(document.querySelector('.profession__menu-item')){
        document.querySelectorAll('.profession__menu-item').forEach(item => {
            item.addEventListener('click', event => {
    
                event.preventDefault();
                var current_item = item;
                document.querySelectorAll('.profession__menu-item').forEach(item => {
                    item.classList.remove("profession__menu-item-active");
                });
                current_item.classList.add("profession__menu-item-active");
        
                filtering();
        
                document.querySelector('h2.profession__title').innerHTML = current_item.innerHTML;
                var vaccat_info = current_item.getAttribute('data-vaccat_info');
                vaccat_info = JSON.parse( vaccat_info );
        
                document.querySelector('#profession__description').innerHTML = vaccat_info.profession__description;
                document.querySelector('#profession__tehnology').innerHTML = vaccat_info.profession__tehnology;
                // document.querySelector('#profession__permalink').href = vaccat_info.profession__permalink;
                // document.querySelector('#profession__permalink_mob').href = vaccat_info.profession__permalink;
                // document.querySelector('#profession__count').innerHTML = vaccat_info.profession__count;
                // document.querySelector('#profession__count_mob').innerHTML = vaccat_info.profession__count;
                document.querySelector('#profession__img').src = vaccat_info.profession__img;
    
            })
        })
    }

    if(document.querySelector('.can_work_remotely')){
        document.querySelectorAll('.can_work_remotely').forEach(item => {
            item.addEventListener('change', event => {
    
                event.preventDefault();
                filtering();
            });
        });
    }

    if(document.querySelector('.can_without_experience')){
        document.querySelectorAll('.can_without_experience').forEach(item => {
            item.addEventListener('change', event => {
    
                event.preventDefault();
                filtering();
            });
        });
    }

    if( typeof idPageLevelSelect != 'undefined' ){
        idPageTagifyLevelInput.addEventListener('change', (e) => {
    
            e.preventDefault();
            filtering();
        });
    }

    if( typeof idPageCitySelect != 'undefined' ){
        idPageTagifyCityInput.addEventListener('change', (e) => {
    
            e.preventDefault();
            filtering();
        });
    }

    function filtering(){

        document.querySelector('#actually_vacancies').innerHTML = '<div class="loader-bg"><div class="lds-ripple"><div></div><div></div></div></div>';

        var town_slug = document.querySelector('#town').value;
        var level_slug = document.querySelector('#level').value;
        var vaccat_slug = document.querySelector('.profession__menu-item.profession__menu-item-active').getAttribute('data-vaccat_slug');;
        
        var can_without_experience = false;
        document.querySelectorAll('.can_without_experience').forEach(item => {
            if( item.checked ){
                can_without_experience = true;
            }
        });
        
        var can_work_remotely = false;
        document.querySelectorAll('.can_work_remotely').forEach(item => {
            if( item.checked ){
                can_work_remotely = true;
            }
        });
        
        var data = {
            action: 'get_profession__menu_items',
            town_slug : town_slug,
            level_slug : level_slug,
            vaccat_slug: vaccat_slug,
            can_without_experience : can_without_experience,
            can_work_remotely : can_work_remotely,
            rel_type : rel_type
        };

        var request = new XMLHttpRequest();
        request.open('POST', ajax.url, true);
        request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8");

        request.onload = function() {
            if (this.status >= 200 && this.status < 400) {
                // Success!
                var resp = JSON.parse(this.response);
                if( true == resp.success ){
                    document.querySelector('#actually_vacancies').innerHTML = resp.html;

                    // TODO
                    var xxx = '';
                    if( data.can_without_experience != false ){
                        xxx = xxx+'&can_without_experience=true';
                    }
                    if( data.can_work_remotely != false ){
                        xxx = xxx+'&can_work_remotely=true';
                    }
                    if( data.level_slug != '-1' ){
                        xxx = xxx+'&level_slug='+level_slug;
                    }
                    if( data.town_slug != '-1' ){
                        xxx = xxx+'&town_slug='+town_slug;
                    }
                    if( data.vaccat_slug != undefined ){
                        xxx = xxx+'&vaccat_slug='+vaccat_slug;
                    }

                    if( xxx != '' ){
                        xxx = '?'+xxx;
                    }

                    document.querySelector('.profession__title').setAttribute( 'originhref', 'xxxxx' );
                    document.querySelector('.profession__title').setAttribute( 'originhref', window.location.origin + window.location.pathname + xxx );
                    document.querySelector('.vacancy__headline-title').setAttribute( 'origin_url', window.location.origin + window.location.pathname + xxx );
                    window.history.pushState('', '', window.location.origin + window.location.pathname + xxx );
                } else{
                    document.querySelector('#actually_vacancies').innerHTML = 'К сожалению вакансий не найдено!';
                }
            }
        };

        //TODO
        var str = "";
        for (var key in data) {
            if (str != "") {
                str += "&";
            }
            str += key + "=" + encodeURIComponent(data[key]);
        }

        request.send( str );
    }

    if(document.querySelector('.position__show-more-button')){
        document.querySelector('.position__show-more-button').addEventListener( 'click', function(e){
    
            e.preventDefault();
            archive_show_more();
        });
    }

    function archive_show_more(){

        // document.querySelector('#actually_vacancies').innerHTML = '<div class="loader-bg"><div class="lds-ripple"><div></div><div></div></div></div>';
        
        if( typeof newDefaultIcons != 'undefined' ){
            var ndi = JSON.stringify(newDefaultIcons);
        }
        if( typeof mvideoIcons != 'undefined' ){
            var nmvi = JSON.stringify(mvideoIcons);
        }
        if( typeof eldoradoIcons != 'undefined' ){
            var neli = JSON.stringify(eldoradoIcons);
        }

        var data = {
            action: 'archive_show_more_items',
            query_vars : query_vars,
            paged : paged
        };

        if( ndi ){
            data['newDefaultIcons'] = ndi;
        }

        if( typeof shop_terms_id != 'undefined' ){
            data['shop_terms_id'] = shop_terms_id;
        }

        if( nmvi ){
            data['nmvi'] = nmvi;
        }

        if( neli ){
            data['neli'] = neli;
        }

        paged++;

        var request = new XMLHttpRequest();
        request.open('POST', ajax.url, true);
        request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8");

        request.onload = function() {
            if (this.status >= 200 && this.status < 400) {
                // Success!
                var resp = JSON.parse(this.response);
                if( true == resp.success ){

                    if( '' != resp.html ){
                        document.querySelector('#archive_vacancies').innerHTML = document.querySelector('#archive_vacancies').innerHTML + resp.html;
                    }
                    
                    if( resp.paged == max_num_pages ){
                        document.querySelector('.products__show-more').style.display = 'none';
                    }

                    if( document.querySelector('.listing-metro__shops-list.mvideo') ){
                        if( null != resp.shop_mvideo_html ){
                            document.querySelector('.listing-metro__shops-list.mvideo').innerHTML = document.querySelector('.listing-metro__shops-list.mvideo').innerHTML + resp.shop_mvideo_html;
                        }
                    }
                    
                    if( document.querySelector('.listing-metro__shops-list.eldorado') ){
                        if( null != resp.shop_eldorado_html ){
                            document.querySelector('.listing-metro__shops-list.eldorado').innerHTML = document.querySelector('.listing-metro__shops-list.eldorado').innerHTML + resp.shop_eldorado_html;
                        }
                    }

                    if( document.querySelector('.listing-metro__shop') ){

                        document.querySelectorAll('.listing-metro__shop').forEach((shop) => {
                            shop.addEventListener('click', () => {
                    
                                document.querySelector('.listing-metro__location-place').innerHTML = shop.querySelector('.listing-metro__shop-title').innerHTML;
                                document.querySelector('.listing-metro__location-adress').innerHTML = shop.querySelector('.listing-metro__shop-address').innerHTML;

                                var parentEl = shop.parentElement;
                                var imgLink = '/wp-content/themes/career_theme/assets/images/listing/map/mvideo-icon.png';
                                var type_shop = 'mvideo';

                                if( parentEl.classList.contains('eldorado') ) {
                                    imgLink = '/wp-content/themes/career_theme/assets/images/listing/map/eldorado-icon.png';
                                    type_shop = 'eldorado';
                                }

                                get_vacancy_list( type_shop, shop.getAttribute('data-shop_slug') );
                        
                                let latitude = shop.getAttribute('data-latitude');
                                let longitude = shop.getAttribute('data-longitude');
                                mapV.geoObjects.removeAll();
                                mapV.setCenter([ latitude, longitude ]);
                                yandexMapInit( 
                                    [
                                    [
                                        [ latitude, longitude ],
                                        imgLink
                                    ],
                                    ] 
                                );
                        
                                document.querySelector('.isting-metro__shops-list-container' ).classList.add('hide');
                                document.querySelector('.isting-metro__single-shop-container' ).classList.remove('hide');

                                document.querySelector('.listing-metro__select-shop-container').classList.add('hide');
                            });
                        });
                    }

                    if( typeof shop_terms_id != 'undefined' ){
                        shop_terms_id = JSON.stringify(resp.globalShopTerms);
                    }

                    if( typeof mapV != 'undefined' ){
                        mvideoIcons = resp.mvideoIcons;
                        eldoradoIcons = resp.eldoradoIcons;
                        newDefaultIcons = resp.newDefaultIcons;
                        mapV.geoObjects.removeAll();
                        yandexMapInit( newDefaultIcons );
                        mapV.setBounds( mapV.geoObjects.getBounds(), {checkZoomRange:true, zoomMargin:20} );
                    }
                }
            }
        };

        var str = "";
        for (var key in data) {
            if (str != "") {
                str += "&";
            }
            str += key + "=" + encodeURIComponent(data[key]);
        }

        request.send( str );
    }

    // архивный фильтр
    function archive_filtering(){

        document.querySelector('#archive_vacancies').innerHTML = '<div class="loader-bg"><div class="lds-ripple"><div></div><div></div></div></div>';
        
        var top__profession = document.querySelector('#listing-top__profession-filter').value;
        if( document.querySelector('#listing__specialization-select') ){
            var vaccat_slug = document.querySelector('#listing__specialization-select').value;
        } else{
            var vaccat_slug = -1;
        }
        if( document.querySelector('#listing__level-select') ){
            var level_slug = document.querySelector('#listing__level-select').value;
        } else{
            var level_slug = -1;
        }
        var city_slug = document.querySelector('#listing__city-select').value;

        var archive_without_experience = false;
        document.querySelectorAll('.archive_without_experience').forEach(item => {
            if( item.checked ){
                archive_without_experience = true;
            }
        });

        if( document.querySelector('.products__show-more') ){
            var fadeTarget = document.querySelector('.products__show-more');
        }

        var archive_remotely = false;
        document.querySelectorAll('.archive_remotely').forEach(item => {
            if( item.checked ){
                archive_remotely = true;
            }
        });
        
        var data = {
            action: 'archive_get_profession__menu_items',
            top__profession : top__profession,
            vaccat_slug : vaccat_slug,
            level_slug: level_slug,
            city_slug : city_slug,
            archive_without_experience : archive_without_experience,
            archive_remotely : archive_remotely,
        };

        if( rt ){
            data['rt'] = rt;
        }

        var request = new XMLHttpRequest();
        request.open('POST', ajax.url, true);
        request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8");

        request.onload = function() {
            if (this.status >= 200 && this.status < 400) {
                // Success!
                var resp = JSON.parse(this.response);
                if(document.querySelector('.loader-bg')){
                    document.querySelector('.loader-bg').remove();
                }
                if( true == resp.success ){
                    document.querySelector('#archive_vacancies').innerHTML = document.querySelector('#archive_vacancies').innerHTML + resp.html;

                    if( document.querySelector('.listing-metro__shops-list.mvideo') ){
                        document.querySelector('.listing-metro__shops-list.mvideo').innerHTML = resp.html_mvideo_shops;
                    }

                    if( document.querySelector('.listing-metro__shops-list.eldorado') ){
                        document.querySelector('.listing-metro__shops-list.eldorado').innerHTML = resp.html_eldorado_shops;
                    }

                    if( document.querySelector('.listing-metro__shop') ){

                        document.querySelectorAll('.listing-metro__shop').forEach((shop) => {
                            shop.addEventListener('click', () => {
                    
                                document.querySelector('.listing-metro__location-place').innerHTML = shop.querySelector('.listing-metro__shop-title').innerHTML;
                                document.querySelector('.listing-metro__location-adress').innerHTML = shop.querySelector('.listing-metro__shop-address').innerHTML;

                                var parentEl = shop.parentElement;
                                var imgLink = '/wp-content/themes/career_theme/assets/images/listing/map/mvideo-icon.png';
                                var type_shop = 'mvideo';

                                if( parentEl.classList.contains('eldorado') ) {
                                    imgLink = '/wp-content/themes/career_theme/assets/images/listing/map/eldorado-icon.png';
                                    type_shop = 'eldorado';
                                }

                                get_vacancy_list( type_shop, shop.getAttribute('data-shop_slug') );
                        
                                let latitude = shop.getAttribute('data-latitude');
                                let longitude = shop.getAttribute('data-longitude');
                                mapV.geoObjects.removeAll();
                                mapV.setCenter([ latitude, longitude ]);
                                yandexMapInit( 
                                    [
                                    [
                                        [ latitude, longitude ],
                                        imgLink
                                    ],
                                    ] 
                                );
                        
                                document.querySelector('.isting-metro__shops-list-container' ).classList.add('hide');
                                document.querySelector('.isting-metro__single-shop-container' ).classList.remove('hide');

                                document.querySelector('.listing-metro__select-shop-container').classList.add('hide');
                            });
                        });
                    }

                    if( typeof mapV != 'undefined' ){

                        mapV.geoObjects.removeAll();
                        mapV.setCenter( resp.centermap )
                        yandexMapInit( resp.iconsmap );
                        mapV.setBounds( mapV.geoObjects.getBounds(), {checkZoomRange:true, zoomMargin:20} );
    
                        newDefaultCenter = resp.centermap;
                        newDefaultIcons = resp.iconsmap;
                    }


                    paged = 1;
                    query_vars = JSON.stringify(resp.query_vars);
                    max_num_pages = resp.max_num_pages;

                    if( fadeTarget ){
                        if( resp.max_num_pages > 1 ){
                            fadeTarget.style.display = 'flex';
                        } else{
                            fadeTarget.style.display = 'none';
                        }
                    }

                    // TODO
                    var xxx = '';
                    if( rt ){
                        xxx = '&type='+rt;
                    }
                    if( data.archive_without_experience != false ){
                        xxx = xxx+'&archive_without_experience=true';
                    }
                    if( data.archive_remotely != false ){
                        xxx = xxx+'&archive_remotely=true';
                    }
                    if( data.level_slug != '-1' ){
                        xxx = xxx+'&level_slug='+level_slug;
                    }
                    if( data.city_slug != '-1' ){
                        xxx = xxx+'&city_slug='+city_slug;
                    }
                    if( data.vaccat_slug != undefined && '-1' != data.vaccat_slug ){
                        xxx = xxx+'&vaccat_slug='+vaccat_slug;
                    }
                    if( data.top__profession != undefined ){
                        xxx = xxx+'&search='+top__profession;
                    }
                    // if( data.top__profession != '' ){
                    //     var prof = top__profession.split(",");
                    //     for (let index = 0; index < prof.length; index++) {
                    //         xxx = xxx+'&s[]='+prof[index];
                    //     }
                    // }

                    if( xxx != '' ){
                        xxx = '?'+xxx;
                    }

                    window.history.pushState('', '', window.location.origin + window.location.pathname + xxx );
                } else{
                    document.querySelector('#archive_vacancies').innerHTML = 'К сожалению вакансий не найдено!';

                    if( fadeTarget ){
                        fadeTarget.style.display = 'none';
                    }
                }
            }
        };

        var str = "";
        for (var key in data) {
            if (str != "") {
                str += "&";
            }
            str += key + "=" + encodeURIComponent(data[key]);
        }

        request.send( str );
    }

    function get_vacancy_list( kind_shops, shop ){

        document.querySelector( '.listing-metro__profession-container .listing-vacancy_items' ).innerHTML = '';

        var containerV = '.listing-metro__profession-container .listing-vacancy_items';
        document.querySelector( `${containerV}` ).innerHTML = '<div class="loader-bg"><div class="lds-ripple"><div></div><div></div></div></div>';
    
        var top__profession = document.querySelector('#listing-top__profession-filter').value;
        if( document.querySelector('#listing__specialization-select') ){
            var vaccat_slug = document.querySelector('#listing__specialization-select').value;
        } else{
            var vaccat_slug = -1;
        }
        if( document.querySelector('#listing__level-select') ){
            var level_slug = document.querySelector('#listing__level-select').value;
        } else{
            var level_slug = -1;
        }
        var city_slug = document.querySelector('#listing__city-select').value;

        var archive_without_experience = false;
        document.querySelectorAll('.archive_without_experience').forEach(item => {
            if( item.checked ){
                archive_without_experience = true;
            }
        });

        var archive_remotely = false;
        document.querySelectorAll('.archive_remotely').forEach(item => {
            if( item.checked ){
                archive_remotely = true;
            }
        });
        
        var data = {
            action:     'get_retail_list_vacancy',
            kind_shops: kind_shops,
            shop:       shop,
            shop:       shop,
            top__profession : top__profession,
            vaccat_slug : vaccat_slug,
            level_slug: level_slug,
            city_slug : city_slug,
            archive_without_experience : archive_without_experience,
            archive_remotely : archive_remotely,
        };
    
        var request = new XMLHttpRequest();
        request.open('POST', ajax.url, true);
        request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8");
    
        request.onload = function() {
            if (this.status >= 200 && this.status < 400) {
                // Success!
                var resp = JSON.parse(this.response);
                if( true == resp.success ){
                  document.querySelector( `${containerV}` ).innerHTML = resp.html;
                }
            }
        };
    
        var str = "";
        for (var key in data) {
            if (str != "") {
                str += "&";
            }
            str += key + "=" + encodeURIComponent(data[key]);
        }
    
        request.send( str );
    }

    // Инициализация селекта Профессии
    if( typeof professionListingSelect !== 'undefined' ){
        listingTagifyProfessionInput.addEventListener('change', (e) => {
    
            if( filter_buzy == 0 ){
                e.preventDefault();
                archive_filtering();
            }
        });
    }

    // Инициализация селекта Специализация
    if( 'archive' == rel_type && '' == vacancyid ){ 
        if( typeof specializationListingSelect !== 'undefined' ){
            listingTagifySpecializationgInput.addEventListener('change', (e) => {
        
                if( filter_buzy == 0 ){
                    e.preventDefault();
                    archive_filtering();
                }
            });
        }
    }

    // Инициализация селекта Уровень
    if( 'archive' == rel_type && '' == vacancyid ){ 
        if( listingTagifyLevelInput != null ){
            listingTagifyLevelInput.addEventListener('change', (e) => {
        
                if( filter_buzy == 0 ){
                    e.preventDefault();
                    archive_filtering();
                }
            });
        }
    }

    // Инициализация селекта Город
    if( typeof listingCitySelect !== 'undefined' ){
        listingTagifyCityInput.addEventListener('change', (e) => {
    
            if( filter_buzy == 0 ){
                e.preventDefault();
                archive_filtering();
            }
        });
    }

    // чекбокс Без опыта
    if(document.querySelector('.archive_without_experience')){
        document.querySelector('.archive_without_experience').addEventListener('change', event => {
        
            if( filter_buzy == 0 ){
                event.preventDefault();
                archive_filtering();
            }
        });
    }

    // чекбокс Удалённо
    if(document.querySelector('.archive_remotely')){
        document.querySelector('.archive_remotely').addEventListener('change', event => {
        
            if( filter_buzy == 0 ){
                event.preventDefault();
                archive_filtering();
            }
        });
    }

    // сбросить фильтры
    if(document.querySelector('#archive_clear_all_filters')){
        document.querySelector('#archive_clear_all_filters').addEventListener('click', event => {

            event.preventDefault();

            filter_buzy = 1;

            document.querySelector('#archive_vacancies').innerHTML = '<div class="loader-bg"><div class="lds-ripple"><div></div><div></div></div></div>';
            if(document.querySelector('.archive_without_experience')){
                document.querySelector('.archive_without_experience').checked = false;
            }
            if( document.querySelector('.archive_remotely') ){
                document.querySelector('.archive_remotely').checked = false;
            }

            professionListingSelect.removeAllTags();
            if( typeof specializationListingSelect !== 'undefined' ){
                specializationListingSelect.removeAllTags();
            }
            if( typeof listingLevelSelect != 'undefined' ){
                listingLevelSelect.removeAllTags();
            }
            listingCitySelect.removeAllTags();

            document.querySelector('#listing__city-select').value = -1;
            if( document.querySelector('#listing__level-select') ){
                document.querySelector('#listing__level-select').value = -1;
            }
            
            var data = {
                action: 'archive_get_profession__menu_items',
                default: 'default',
            };

            if( rt ){
                data['rt'] = rt;
            }

            var fadeTarget = document.querySelector('.products__show-more');

            var request = new XMLHttpRequest();
            request.open('POST', ajax.url, true);
            request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8");

            request.onload = function() {

                filter_buzy = 0;
                if (this.status >= 200 && this.status < 400) {
                    // Success!
                    var resp = JSON.parse(this.response);
                    if( true == resp.success ){
                        document.querySelector('#archive_vacancies').innerHTML = resp.html;

                        if( document.querySelector('.listing-metro__shops-list.mvideo') ){
                            document.querySelector('.listing-metro__shops-list.mvideo').innerHTML = resp.html_mvideo_shops;
                        }
    
                        if( document.querySelector('.listing-metro__shops-list.eldorado') ){
                            document.querySelector('.listing-metro__shops-list.eldorado').innerHTML = resp.html_eldorado_shops;
                        }
    
                        if( document.querySelector('.listing-metro__shop') ){
    
                            document.querySelectorAll('.listing-metro__shop').forEach((shop) => {
                                shop.addEventListener('click', () => {
                        
                                    document.querySelector('.listing-metro__location-place').innerHTML = shop.querySelector('.listing-metro__shop-title').innerHTML;
                                    document.querySelector('.listing-metro__location-adress').innerHTML = shop.querySelector('.listing-metro__shop-address').innerHTML;
                            
                                    var parentEl = shop.parentElement;
                                    var imgLink = '/wp-content/themes/career_theme/assets/images/listing/map/mvideo-icon.png';
                                    var type_shop = 'mvideo';

                                    if( parentEl.classList.contains('eldorado') ) {
                                        imgLink = '/wp-content/themes/career_theme/assets/images/listing/map/eldorado-icon.png';
                                        type_shop = 'eldorado';
                                    }

                                    get_vacancy_list( type_shop, shop.getAttribute('data-shop_slug') );
                            
                                    let latitude = shop.getAttribute('data-latitude');
                                    let longitude = shop.getAttribute('data-longitude');
                                    mapV.geoObjects.removeAll();
                                    mapV.setCenter([ latitude, longitude ]);
                                    yandexMapInit( 
                                        [
                                        [
                                            [ latitude, longitude ],
                                            imgLink
                                        ],
                                        ] 
                                    );
                            
                                    document.querySelector('.isting-metro__shops-list-container' ).classList.add('hide');
                                    document.querySelector('.isting-metro__single-shop-container' ).classList.remove('hide');

                                    document.querySelector('.listing-metro__select-shop-container').classList.add('hide');
                                });
                            });
                        }

                        if( typeof mapV != 'undefined' ){
                            mapV.geoObjects.removeAll();
                            mapV.setCenter( defaultCenter )
                            yandexMapInit( defaultIcons );
                            mapV.setBounds( mapV.geoObjects.getBounds(), {checkZoomRange:true, zoomMargin:20} );

                            newDefaultCenter = defaultCenter;
                            newDefaultIcons = defaultIcons;
                        }

                        paged = 1;
                        query_vars = JSON.stringify(resp.query_vars);
                        max_num_pages = resp.max_num_pages;

                        if( fadeTarget ){
                            if( resp.max_num_pages > 1 ){
                                fadeTarget.style.display = 'flex';
                            } else{
                                fadeTarget.style.display = 'none';
                            }
                        }
                        
                    } else{
                        document.querySelector('#archive_vacancies').innerHTML = 'К сожалению вакансий не найдено!';
                        if( fadeTarget ){
                            fadeTarget.style.display = 'none';
                        }
                    }
                    var xxx = '';
                    if( rt ){
                        xxx = '?type='+rt;
                    }
                    window.history.pushState('', '', window.location.origin + window.location.pathname + xxx );
                }
            };

            var str = "";
            for (var key in data) {
                if (str != "") {
                    str += "&";
                }
                str += key + "=" + encodeURIComponent(data[key]);
            }

            request.send( str );

        })
    }
    
});