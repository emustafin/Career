$ = jQuery;
$(document).ready(function() {

    $('#clear_all_filters').on( 'click', function(e){

        e.preventDefault();
        
        var data = {
            action: 'get_profession__menu_items',
            default: 'default'
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
                    $('.profession__menu-item').removeClass('profession__menu-item-active');
                    $('h2.profession__title').text('');

                    // TODO
                    var xxx = '';
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

        filtering();

    });

    $('.can_work_remotely').on( 'change', function(e){

        e.preventDefault();
        filtering();
    });

    $('.can_without_experience').on( 'change', function(e){

        e.preventDefault();
        filtering();
    });

    $('#level').on( 'change', function(e){

        e.preventDefault();
        filtering();
    });

    $('#town').on( 'change', function(e){

        e.preventDefault();
        filtering();
    });

    function filtering(){

        var town_slug = $('#town').val();
        var level_slug = $('#level').val();
        var vaccat_slug = $('.profession__menu-item.profession__menu-item-active').attr('data-vaccat_slug');
        var can_without_experience = $('.can_without_experience').prop("checked");
        var can_work_remotely = $('.can_work_remotely').prop("checked");
        
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
                }
            },
        });
    }
});