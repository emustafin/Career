

$('.profession__job-title').on( 'click', function(e){
    
    var vacancy_info = $(this).attr('data-info');
    vacancy_info = jQuery.parseJSON( vacancy_info );

    var origin_location = window.location;

    $('.flyout .vacancy__headline-title').attr( 'origin_url', origin_location );
    $('.flyout .vacancy__headline-title').html( vacancy_info.title );
    // $('.flyout .vacancy__video-container img').attr( "src", vacancy_info.img );
    $('.flyout .vacancy__intro-description').html( vacancy_info.content );
    $('.flyout #vacancy_project').html( vacancy_info.vacancy_project );
    $('.flyout #expectations').html( vacancy_info.expectations );
    $('.flyout #what_you_need_to_do').html( vacancy_info.what_you_need_to_do );
    $('.flyout #what_do_we_offer').html( vacancy_info.what_do_we_offer );
    $('.flyout .vacancy__office-map-image').attr( "src", vacancy_info.img_map );
    $('.flyout .vacancy__office-adress-text').html( vacancy_info.map_full_adress );
    $('.flyout .vacancy__meta-info-sum').html( vacancy_info.money_from );
    $('.flyout #vaccat_info_vacancy').html( vacancy_info.vaccat );
    $('.flyout #town_info_vacancy').html( vacancy_info.town );
    $('.flyout #experience_important').html( vacancy_info.experience );

    window.history.pushState( '', '', vacancy_info.url );
})
