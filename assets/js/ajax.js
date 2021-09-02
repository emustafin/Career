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
        var vaccat_slug = current_item.attr('data-vaccat_id');
        
        var data = {
            action: 'get_profession__menu_items',
            vaccat_slug: vaccat_slug,
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
                    current_item.addClass('profession__menu-item-active');
                    $('h2.profession__title').html( current_item.html() );

                    // TODO
                    var xxx = '?';
                    window.history.pushState('', '', window.location.origin + window.location.pathname + xxx + '&vaccat='+vaccat_slug );
                }
            },
        });
    });

    $('.can_work_remotely').on( 'change', function(e){

        e.preventDefault();

        var current_item = $(this);
        var input_val = current_item.prop("checked");
        console.log(input_val);
        var data = {
            action: 'get_profession__menu_items',
            can_work_remotely: 'can_work_remotely',
            input_val: input_val,
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
                    var xxx = '?';
                    window.history.pushState('', '', window.location.origin + window.location.pathname + xxx + '&can_work_remotely='+input_val );
                }
            },
        });
    });

    $('.can_without_experience').on( 'change', function(e){

        e.preventDefault();

        var current_item = $(this);
        var can_input_val = current_item.prop("checked");
        
        var data = {
            action: 'get_profession__menu_items',
            can_without_experience: 'can_without_experience',
            can_input_val: can_input_val,
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
                    var xxx = '?';
                    window.history.pushState('', '', window.location.origin + window.location.pathname + xxx + '&can_without_experience='+can_input_val );
                }
            },
        });
    });

    $('#level').on( 'change', function(e){

        e.preventDefault();

        var current_item = $(this);
        var level_slug = current_item.val();
        console.log(
            level_slug
        );
        var data = {
            action: 'get_profession__menu_items',
            level_slug: level_slug,
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
                    var xxx = '?';
                    window.history.pushState('', '', window.location.origin + window.location.pathname + xxx + '&level_slug='+level_slug );
                }
            },
        });
    });

    $('#town').on( 'change', function(e){

        e.preventDefault();

        var current_item = $(this);
        var town_slug = current_item.val();
        console.log(
            town_slug
        );
        var data = {
            action: 'get_profession__menu_items',
            town_slug: town_slug,
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
                    var xxx = '?';
                    window.history.pushState('', '', window.location.origin + window.location.pathname + xxx + '&town_slug='+town_slug );
                }
            },
        });
    });
});