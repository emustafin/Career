$('.profession__title').attr('originhref', window.location.href);
var origin_location = window.location.href;

$('.profession__job-item').on('click', function (e) {
  
  $('#vacancy_popup .loader-wrapp').css( 'display','block' );
  post_id = $(this).attr('data-vacancy_id');
  load_popup_vacancy( post_id );
});
$('.position__card-item').on('click', function (e) {
  
  $('#vacancy_popup .loader-wrapp').css( 'display','block' );
  post_id = $(this).attr('data-vacancy_id');
  load_popup_vacancy( post_id );
});

$('.vacancy__header-head-link-main').on('click', function (e) {
  window.history.pushState('', '', origin_location);
});

$('.flyout__side-bar').on('click', function (e) {
  window.history.pushState('', '', origin_location);
});


function load_popup_vacancy( post_id ){
  var data = {
      action: 'get_vacancy_data',
      post_id : post_id
  };

  $.ajax({
      type: 'POST',
      url: ajax.url,
      data: data,
      dataType: 'json',
      cache: 'false',
      success: function (response) {
          if( true == response.success ){

            $('.profession__title').attr('originhref', origin_location);

            $('.flyout .vacancy__headline-title').attr('origin_url', origin_location);
            $('.flyout .vacancy__headline-title').html(response.title);
            $('.flyout .vacancy__video-container img').attr('src', response.img);
            $('.flyout .vacancy__intro-description').html(response.content);
            $('.flyout #vacancy_project').html(response.vacancy_project);
            $('.flyout #expectations').html(response.expectations);
            $('.flyout #can_work_remotely').html(response.can_work_remotely);
            $('.flyout .vacancy__office-map-image').attr('src', response.img_map);
            $('.flyout .vacancy__office-adress-text').html(response.map_full_adress);
            $('.flyout .vacancy__meta-info-sum').html(response.money_from);
            $('.flyout .vacancy__meta-info-sum-after').html(response.gross);
            $('.flyout #vaccat_info_vacancy').html(response.vaccat);
            $('.flyout #town_info_vacancy').html(response.town);
            $('.flyout #experience_important').html(response.experience);

            $('#vacancy_popup .loader-wrapp').css( 'display','none' );
          
            window.history.pushState('', '', response.url);

          }
      },
  });
}