$('.profession__title').attr('originhref',window.location.href);
$('.profession__job-title').on( 'click', function(e){
    
    var vacancy_info = $(this).attr('data-info');
    vacancy_info = jQuery.parseJSON( vacancy_info );
    console.log(vacancy_info.url);
    
    var origin_location = window.location.href;
    
    $('.flyout .vacancy__headline-title').attr( 'origin_url', origin_location );
    $('.flyout .vacancy__headline-title').html( vacancy_info.title );
    $('.flyout .vacancy__video-container img').attr( "src", vacancy_info.img );
    $('.flyout .vacancy__intro-description').html( vacancy_info.content );
    $('.flyout #vacancy_project').html( vacancy_info.vacancy_project );
    $('.flyout #expectations').html( vacancy_info.expectations );
    $('.flyout .vacancy__office-map-image').attr( "src", vacancy_info.img_map );
    $('.flyout .vacancy__office-adress-text').html( vacancy_info.map_full_adress );
    $('.flyout .vacancy__meta-info-sum').html( vacancy_info.money_from );
    $('.flyout .vacancy__meta-info-sum-after').html( vacancy_info.gross );
    $('.flyout #vaccat_info_vacancy').html( vacancy_info.vaccat );
    $('.flyout #town_info_vacancy').html( vacancy_info.town );
    $('.flyout #experience_important').html( vacancy_info.experience );
    
    window.history.pushState( '', '', vacancy_info.url );
})

$('.vacancy__header-head-link-main').on( 'click', function(e){
    var origin_location = $('.profession__title').attr('originhref');
    window.history.pushState( '', '', origin_location );
})

$('.flyout__side-bar').on( 'click', function(e){
    var origin_location = $('.profession__title').attr('originhref');
    window.history.pushState( '', '', origin_location );
})