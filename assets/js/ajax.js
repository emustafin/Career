$ = jQuery;
$(document).ready(function() {

    if(document.querySelector('#clear_all_filters')){
        document.querySelector('#clear_all_filters').addEventListener( 'click', function(e){
    
            e.preventDefault();
    
            document.querySelector('#actually_vacancies').innerHTML = '<div class="loader-bg"><div class="lds-ripple"><div></div><div></div></div></div>';
            var vaccat_slug = document.querySelector('.profession__menu-item.profession__menu-item-active').getAttribute('data-vaccat_slug');
    
    
            var data = {
                action: 'get_profession__menu_items',
                default: 'default',
                vaccat_slug : vaccat_slug
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
                        document.querySelector('.can_work_remotely').checked = false;
                        document.querySelector('.can_without_experience').checked = false;
    
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
                vaccat_info = jQuery.parseJSON( vaccat_info );
        
                $('#profession__description').innerHTML = vaccat_info.profession__description;
                $('#profession__tehnology').innerHTML = vaccat_info.profession__tehnology;
                $('#profession__permalink').href = vaccat_info.profession__permalink;
                $('#profession__permalink_mob').href = vaccat_info.profession__permalink;
                $('#profession__count').innerHTML = vaccat_info.profession__count;
                $('#profession__count_mob').innerHTML = vaccat_info.profession__count;
                $('#profession__img').src = vaccat_info.profession__img;
    
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

    if( typeof idPageLevelSelect !== 'undefined' ){
        idPageTagifyLevelInput.addEventListener('change', (e) => {
    
            e.preventDefault();
            filtering();
        });
    }

    if( typeof idPageCitySelect !== 'undefined' ){
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
        
        var data = {
            action: 'archive_show_more_items',
            query_vars : query_vars,
            paged : paged
        };

        var request = new XMLHttpRequest();
        request.open('POST', ajax.url, true);
        request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8");

        request.onload = function() {
            if (this.status >= 200 && this.status < 400) {
                // Success!
                var resp = JSON.parse(this.response);
                if( true == resp.success ){
                    document.querySelector('#archive_vacancies').innerHTML = document.querySelector('#archive_vacancies').innerHTML + resp.html;
                    // $('#archive_vacancies').append( resp.html );
                    paged++;
                    if( paged == max_num_pages ){
                        // $('.products__show-more').fadeOut();

                        var fadeTarget = document.querySelector('.profession__menu-item');
                        var fadeEffect = setInterval(function () {
                            if (!fadeTarget.style.opacity) {
                                fadeTarget.style.opacity = 1;
                            }
                            if (fadeTarget.style.opacity > 0) {
                                fadeTarget.style.opacity -= 0.1;
                            } else {
                                clearInterval(fadeEffect);
                            }
                        }, 200);
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
        var vaccat_slug = document.querySelector('#listing__specialization-select').value;
        var level_slug = document.querySelector('#listing__level-select').value;
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
            action: 'archive_get_profession__menu_items',
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
                document.querySelector('.loader-bg').remove();
                if( true == resp.success ){
                    document.querySelector('#archive_vacancies').innerHTML = document.querySelector('#archive_vacancies').innerHTML + resp.html;

                    paged = 1;
                    query_vars = resp.query_vars;
                    max_num_pages = resp.max_num_pages;

                    if( resp.max_num_pages == 1 ){
                        $('.products__show-more').fadeOut();
                        var fadeTarget = document.querySelector('.products__show-more');
                        fadeTarget.style.opacity = 0;
                    } else{
                        $('.products__show-more').fadeIn();
                        var fadeTarget = document.querySelector('.products__show-more');
                        fadeTarget.style.opacity = 1;
                    }

                    // TODO
                    var xxx = '';
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
                    if( data.vaccat_slug != undefined ){
                        xxx = xxx+'&vaccat_slug='+vaccat_slug;
                    }
                    if( data.top__profession != undefined ){
                        xxx = xxx+'&s='+top__profession;
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

                    var fadeTarget = document.querySelector('.products__show-more');
                    fadeTarget.style.opacity = 0;
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
    
            e.preventDefault();
            archive_filtering();
        });
    }

    // Инициализация селекта Специализация
    if( typeof specializationListingSelect !== 'undefined' ){
        listingTagifySpecializationgInput.addEventListener('change', (e) => {
    
            e.preventDefault();
            archive_filtering();
        });
    }

    // Инициализация селекта Уровень
    if( typeof listingLevelSelect !== 'undefined' ){
        listingTagifyLevelInput.addEventListener('change', (e) => {
    
            e.preventDefault();
            archive_filtering();
        });
    }

    // Инициализация селекта Город
    if( typeof listingCitySelect !== 'undefined' ){
        listingTagifyCityInput.addEventListener('change', (e) => {
    
            e.preventDefault();
            archive_filtering();
        });
    }

    // чекбокс Без опыта
    if(document.querySelector('.archive_without_experience')){
        document.querySelector('.archive_without_experience').addEventListener('change', event => {
        
            event.preventDefault();
            archive_filtering();
        });
    }

    // чекбокс Удалённо
    if(document.querySelector('.archive_remotely')){
        document.querySelector('.archive_remotely').addEventListener('change', event => {
        
            event.preventDefault();
            archive_filtering();
        });
    }

    // сбросить фильтры
    if(document.querySelector('#archive_clear_all_filters')){
        document.querySelector('#archive_clear_all_filters').addEventListener('click', event => {

            event.preventDefault();

            document.querySelector('#archive_vacancies').innerHTML = '<div class="loader-bg"><div class="lds-ripple"><div></div><div></div></div></div>';
            document.querySelector('.archive_without_experience').checked = false;
            document.querySelector('.archive_remotely').checked = false;

            professionListingSelect.removeAllTags();
            specializationListingSelect.removeAllTags();
            listingLevelSelect.removeAllTags();
            listingCitySelect.removeAllTags();

            document.querySelector('#listing__city-select').value = -1;
            document.querySelector('#listing__level-select').value = -1;
            
            var data = {
                action: 'archive_get_profession__menu_items',
                default: 'default',
            };

            var fadeTarget = document.querySelector('.products__show-more');

            var request = new XMLHttpRequest();
            request.open('POST', ajax.url, true);
            request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8");

            request.onload = function() {
                if (this.status >= 200 && this.status < 400) {
                    // Success!
                    var resp = JSON.parse(this.response);
                    if( true == resp.success ){
                        document.querySelector('#archive_vacancies').innerHTML = resp.html;

                        paged = 1;
                        query_vars = resp.query_vars;
                        max_num_pages = resp.max_num_pages;

                        if( resp.max_num_pages == 1 ){
                            fadeTarget.style.opacity = 0;
                        } else{
                            fadeTarget.style.opacity = 1;
                        }
                        
                        window.history.pushState('', '', window.location.origin + window.location.pathname );
                    } else{
                        document.querySelector('#archive_vacancies').innerHTML = 'К сожалению вакансий не найдено!';
                        fadeTarget.style.opacity = 0;
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
        
            // $.ajax({
            //     type: 'POST',
            //     url: ajax.url,
            //     data: data,
            //     dataType: 'json',
            //     cache: 'false',
            //     success: function (response) {
            //         if( true == response.success ){
            //             $('#archive_vacancies').html( response.html );

            //             paged = 1;
            //             query_vars = response.query_vars;
            //             max_num_pages = response.max_num_pages;

            //             if( response.max_num_pages == 1 ){
            //                 $('.products__show-more').fadeOut();
            //             } else{
            //                 $('.products__show-more').fadeIn();
            //             }
                        
            //             window.history.pushState('', '', window.location.origin + window.location.pathname );
            //         }
            //     },
            //     error: function (request, status, error) {
            //         $('#archive_vacancies').html( 'К сожалению вакансий не найдено!' );
            //         $('.products__show-more').fadeOut();
            //     }
            // });
        })
    }
    
});