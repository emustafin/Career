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
});