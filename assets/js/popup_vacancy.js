if(document.querySelector('.profession__title')){
  document.querySelector('.profession__title').getAttribute('originhref', window.location.href);
  var origin_location = window.location.href;
}

if(document.querySelector('.profession__job-item')){
  document.querySelector('.profession__job-item').addEventListener('click', function (e) {
    document.querySelector('#vacancy_popup .loader-wrapp').style.display = "block";
    post_id = this.getAttribute('data-vacancy_id');
    load_popup_vacancy( post_id );
  });
}

if(document.querySelector('.position__card-item')){
  document.querySelector('.position__card-item').addEventListener('click', function (e) {
    document.querySelector('#vacancy_popup .loader-wrapp').style.display = "block";
    post_id = this.getAttribute('data-vacancy_id');
    load_popup_vacancy( post_id );
});
}

if(document.querySelector('.retail__position-list-item')){
  document.querySelector('.retail__position-list-item').addEventListener('click', function (e) {
  document.querySelector('#vacancy_popup .loader-wrapp').style.display = "block";
  post_id = this.getAttribute('data-vacancy_id');
  load_popup_vacancy( post_id );
});
}

if(document.querySelector('.vacancy__header-head-link-main')){
document.querySelector('.vacancy__header-head-link-main').addEventListener('click', function (e) {
  window.history.pushState('', '', origin_location);
});
}

if(document.querySelector('.flyout__side-bar')){
document.querySelector('.flyout__side-bar').addEventListener('click', function (e) {
  window.history.pushState('', '', origin_location);
});
}

function load_popup_vacancy( post_id ){

  document.querySelector('.flyout .vacancy__headline-title').getAttribute('origin_url', '#');
  document.querySelector('.flyout .vacancy__headline-title').innerhtml = '';
  document.querySelector('.flyout .vacancy__video-container img').getAttribute('src', '#');
  document.querySelector('.flyout .vacancy__video-container .vacancy__video-preview').getAttribute('data-src', '#');
  document.querySelector('.flyout .vacancy__video-container .vacancy__video-preview').getAttribute('src', '#');
  document.querySelector('.flyout .vacancy__intro-description').innerhtml = '';
  document.querySelector('.flyout #flexible_schedule').innerhtml = '';
  document.querySelector('.flyout #vacancy_project').innerhtml = '';
  document.querySelector('.flyout #expectations').innerhtml = '';
  document.querySelector('.flyout #can_work_remotely').innerhtml = '';
  document.querySelector('.flyout .vacancy__office-map-image').getAttribute('src', '#');
  document.querySelector('.flyout .vacancy__office-adress-text').innerhtml = '';
  document.querySelector('.flyout .vacancy__meta-info-sum').innerhtml = '';
  document.querySelector('.flyout .vacancy__meta-info-sum-after').innerhtml = '';
  document.querySelector('.flyout #vaccat_info_vacancy').innerhtml = '';
  document.querySelector('.flyout #town_info_vacancy').innerhtml = '';
  document.querySelector('.flyout #experience_important').innerhtml = '';

  document.querySelector('.vacancy').style.overflow = "hiden";

  var data = {
      action: 'get_vacancy_data',
      post_id : post_id
  };

  document.querySelector.ajax({
      type: 'POST',
      url: ajax.url,
      data: data,
      dataType: 'json',
      cache: 'false',
      success: function (response) {
          if( true == response.success ){

            document.querySelector('.profession__title').getAttribute('originhref', origin_location);

            document.querySelector('.flyout .vacancy__headline-title').getAttribute('origin_url', origin_location);
            document.querySelector('.flyout .vacancy__headline-title').innerhtml = response.title;
            document.querySelector('.flyout .vacancy__video-container img').getAttribute('src', response.img);
            document.querySelector('.flyout .vacancy__video-container .vacancy__video-preview').getAttribute('data-src', response.data_src_video);
            document.querySelector('.flyout .vacancy__video-container .vacancy__video-preview').getAttribute('src', response.data_src_video);
            document.querySelector('.flyout .vacancy__intro-description').innerhtml = response.content;
            document.querySelector('.flyout #flexible_schedule').innerhtml = response.flexible_schedule;
            document.querySelector('.flyout #vacancy_project').innerhtml = response.vacancy_project;
            document.querySelector('.flyout #expectations').innerhtml = response.expectations;
            document.querySelector('.flyout #can_work_remotely').innerhtml = response.can_work_remotely;
            document.querySelector('.flyout .vacancy__office-map-image').getAttribute('src', response.img_map);
            document.querySelector('.flyout .vacancy__office-adress-text').innerhtml = response.map_full_adress;
            document.querySelector('.flyout .vacancy__meta-info-sum').innerhtml = response.money_from;
            document.querySelector('.flyout .vacancy__meta-info-sum-after').innerhtml = response.gross;
            document.querySelector('.flyout #vaccat_info_vacancy').innerhtml = response.vaccat;
            document.querySelector('.flyout #town_info_vacancy').innerhtml = response.town;
            document.querySelector('.flyout #experience_important').innerhtml = response.experience;

            document.querySelector('#vacancy_popup .loader-wrapp').style.display = "none";

            document.querySelector('.vacancy').style.overflow = "auto";
          
            window.history.pushState('', '', response.url);

          }
      },
  });
}