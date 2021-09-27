$ = jQuery;
$(document).ready(function() {

    $('#clear_all_filters').on( 'click', function(e){

        e.preventDefault();

        $('#actually_vacancies').html( '<div class="loader-bg"><div class="lds-ripple"><div></div><div></div></div></div>' );
        var vaccat_slug = $('.profession__menu-item.profession__menu-item-active').attr('data-vaccat_slug');
        
        var data = {
            action: 'get_profession__menu_items',
            default: 'default',
            vaccat_slug : vaccat_slug
        };
    
        $.ajax({
            type: 'POST',
            url: ajax.url,
            data: data,
            dataType: 'json',
            cache: 'false',
            success: function (response) {
                if( true == response.success ){
                    $('#actually_vacancies').html( response.html );
                    $('.can_work_remotely').prop('checked', false);
                    $('.can_without_experience').prop('checked', false);

                    $('#town').val(-1);
                    $('#level').val(-1);

                    idPageLevelSelect.removeAllTags();
                    idPageCitySelect.removeAllTags();

                    var xxx = '';
                    if( data.vaccat_slug != undefined ){
                        xxx = '?vaccat_slug='+vaccat_slug;
                    }

                    window.history.pushState('', '', window.location.origin + window.location.pathname + xxx );
                }
            },
        });
    })

    $('.profession__menu-item').on( 'click', function(e){

        e.preventDefault();
        var current_item = $(this);
        $('.profession__menu-item').removeClass('profession__menu-item-active');
        current_item.addClass('profession__menu-item-active');

        filtering();

        $('h2.profession__title').html( current_item.html() );
        var vaccat_info = current_item.attr('data-vaccat_info');
        vaccat_info = jQuery.parseJSON( vaccat_info );

        $('#profession__description').html( vaccat_info.profession__description );
        $('#profession__tehnology').html( vaccat_info.profession__tehnology );
        $('#profession__permalink').attr( 'href', vaccat_info.profession__permalink );
        $('#profession__permalink_mob').attr( 'href', vaccat_info.profession__permalink );
        $('#profession__count').html( vaccat_info.profession__count );
        $('#profession__count_mob').html( vaccat_info.profession__count );
        $('#profession__img').attr( 'src', vaccat_info.profession__img );


    });

    $('.can_work_remotely').on( 'change', function(e){

        e.preventDefault();
        filtering();
    });

    $('.can_without_experience').on( 'change', function(e){

        e.preventDefault();
        filtering();
    });

    if( typeof idPageLevelSelect !== 'undefined' ){
        idPageLevelSelect.on( 'change', function(e){
    
            e.preventDefault();
            filtering();
        });
    }

    if( typeof idPageCitySelect !== 'undefined' ){
        idPageCitySelect.on( 'change', function(e){

            e.preventDefault();
            filtering();
        });
    }

    function filtering(){

        $('#actually_vacancies').html( '<div class="loader-bg"><div class="lds-ripple"><div></div><div></div></div></div>' );

        var town_slug = $('#town').val();
        var level_slug = $('#level').val();
        var vaccat_slug = $('.profession__menu-item.profession__menu-item-active').attr('data-vaccat_slug');
        var can_without_experience = $('.can_without_experience').is(':checked');
        var can_work_remotely = $('.can_work_remotely').is(':checked');
        
        var data = {
            action: 'get_profession__menu_items',
            town_slug : town_slug,
            level_slug : level_slug,
            vaccat_slug: vaccat_slug,
            can_without_experience : can_without_experience,
            can_work_remotely : can_work_remotely,
        };
    
        $.ajax({
            type: 'POST',
            url: ajax.url,
            data: data,
            dataType: 'json',
            cache: 'false',
            success: function (response) {
                if( true == response.success ){
                    $('#actually_vacancies').html( response.html );

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

                    $('.profession__title').attr( 'originhref', window.location.origin + window.location.pathname + xxx );
                    $('.vacancy__headline-title').attr( 'origin_url', window.location.origin + window.location.pathname + xxx );
                    window.history.pushState('', '', window.location.origin + window.location.pathname + xxx );
                } else{
                    $('#actually_vacancies').html( 'К сожалению вакансий не найдено!' );
                }
            },
        });
    }

    var formdata = $('#forminfo').attr('data-formdata');
    formdata = vaccat_info = jQuery.parseJSON( formdata );
    $('#info_product_directions').html( formdata.info_product_directions );
    $('#info_vaccat').html( formdata.info_vaccat );

    $('.position__show-more-button').on( 'click', function(e){

        e.preventDefault();
        archive_show_more();
    });

    function archive_show_more(){

        // $('#archive_vacancies').html( '<div class="loader-bg"><div class="lds-ripple"><div></div><div></div></div></div>' );
        
        var data = {
            action: 'archive_show_more_items',
            query_vars : query_vars,
            paged : paged
        };
    
        $.ajax({
            type: 'POST',
            url: ajax.url,
            data: data,
            dataType: 'json',
            cache: 'false',
            success: function (response) {
                if( true == response.success ){
                    $('#archive_vacancies').append( response.html );
                    paged++;
                    if( paged == max_num_pages ){
                        $('.products__show-more').fadeOut();
                    }
                }
            },
        });
    }





    // архивный фильтр
    function archive_filtering(){

        $('#archive_vacancies').html( '<div class="loader-bg"><div class="lds-ripple"><div></div><div></div></div></div>' );

        var top__profession = $('#listing-top__profession-filter').val();
        var vaccat_slug = $('#listing__specialization-select').val();
        var level_slug = $('#listing__level-select').val();
        var city_slug = $('#listing__city-select').val();
        var archive_without_experience = $('.archive_without_experience').is(':checked');
        var archive_remotely = $('.archive_remotely').is(':checked');
        
        var data = {
            action: 'archive_get_profession__menu_items',
            top__profession : top__profession,
            vaccat_slug : vaccat_slug,
            level_slug: level_slug,
            city_slug : city_slug,
            archive_without_experience : archive_without_experience,
            archive_remotely : archive_remotely,
        };
    
        $.ajax({
            type: 'POST',
            url: ajax.url,
            data: data,
            dataType: 'json',
            cache: 'false',
            success: function (response) {
                if( true == response.success ){
                    $('#archive_vacancies').html( response.html );

                    paged = 1;
                    query_vars = response.query_vars;
                    max_num_pages = response.max_num_pages;

                    if( response.max_num_pages == 1 ){
                        $('.products__show-more').fadeOut();
                    } else{
                        $('.products__show-more').fadeIn();
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
                    $('#archive_vacancies').html( 'К сожалению вакансий не найдено!' );
                    $('.products__show-more').fadeOut();
                }
            },
        });
    }

    // Инициализация селекта Профессии
    if( typeof professionListingSelect !== 'undefined' ){
        professionListingSelect.on( 'change', function(e){
    
            e.preventDefault();
            archive_filtering();
        });
    }

    // Инициализация селекта Специализация
    if( typeof specializationListingSelect !== 'undefined' ){
        specializationListingSelect.on( 'change', function(e){
    
            e.preventDefault();
            archive_filtering();
        });
    }

    // Инициализация селекта Уровень
    if( typeof listingLevelSelect !== 'undefined' ){
        listingLevelSelect.on( 'change', function(e){
    
            e.preventDefault();
            archive_filtering();
        });
    }

    // Инициализация селекта Город
    if( typeof listingCitySelect !== 'undefined' ){
        listingCitySelect.on( 'change', function(e){
    
            e.preventDefault();
            archive_filtering();
        });
    }

    // чекбокс Без опыта
    $('.archive_without_experience').on( 'change', function(e){

        e.preventDefault();
        archive_filtering();
    });

    // чекбокс Удалённо
    $('.archive_remotely').on( 'change', function(e){

        e.preventDefault();
        archive_filtering();
    });

    // сбросить фильтры
    $('#archive_clear_all_filters').on( 'click', function(e){

        e.preventDefault();

        $('#archive_vacancies').html( '<div class="loader-bg"><div class="lds-ripple"><div></div><div></div></div></div>' );
        $('.archive_without_experience').prop('checked', false);
        $('.archive_remotely').prop('checked', false);

        professionListingSelect.removeAllTags();
        specializationListingSelect.removeAllTags();
        listingLevelSelect.removeAllTags();
        listingCitySelect.removeAllTags();

        $('#town').val(-1);
        $('#level').val(-1);
        
        var data = {
            action: 'archive_get_profession__menu_items',
            default: 'default',
        };
    
        $.ajax({
            type: 'POST',
            url: ajax.url,
            data: data,
            dataType: 'json',
            cache: 'false',
            success: function (response) {
                if( true == response.success ){
                    $('#archive_vacancies').html( response.html );

                    paged = 1;
                    query_vars = response.query_vars;
                    max_num_pages = response.max_num_pages;

                    if( response.max_num_pages == 1 ){
                        $('.products__show-more').fadeOut();
                    } else{
                        $('.products__show-more').fadeIn();
                    }
                    
                    window.history.pushState('', '', window.location.origin + window.location.pathname );
                }
            },
            error: function (request, status, error) {
                $('#archive_vacancies').html( 'К сожалению вакансий не найдено!' );
                $('.products__show-more').fadeOut();
            }
        });
    })
    
});