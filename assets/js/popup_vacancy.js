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

  document.querySelector('.flyout .vacancy__headline-title').setAttribute('origin_url', '#');
  document.querySelector('.flyout .vacancy__headline-title').innerHTML = '';
  // document.querySelector('.flyout .vacancy__video-container img').setAttribute('src', '#');
  document.querySelector('.flyout .vacancy__video-container .vacancy__video-preview').setAttribute('data-src', '#');
  document.querySelector('.flyout .vacancy__video-container .vacancy__video-preview').setAttribute('src', '#');
  document.querySelector('.flyout .vacancy__intro-description').innerHTML = '';
  document.querySelector('.flyout #flexible_schedule').innerHTML = '';
  // document.querySelector('.flyout #vacancy_project').innerHTML = '';
  document.querySelector('.flyout #expectations').innerHTML = '';
  document.querySelector('.flyout #can_work_remotely').innerHTML = '';
  if( document.querySelector('.flyout .vacancy__office-map-image') ){
    document.querySelector('.flyout .vacancy__office-map-image').setAttribute('src', '#');
  }
  if( document.querySelector('.flyout .vacancy__office-adress-text') ){
    document.querySelector('.flyout .vacancy__office-adress-text').innerHTML = '';
  }
  document.querySelector('.flyout .vacancy__meta-info-sum').innerHTML = '';
  document.querySelector('.flyout .vacancy__meta-info-sum-after').innerHTML = '';
  document.querySelector('.flyout #vaccat_info_vacancy').innerHTML = '';
  document.querySelector('.flyout #town_info_vacancy').innerHTML = '';
  document.querySelector('.flyout #experience_important').innerHTML = '';

  document.querySelector('.vacancy').style.overflow = "hiden";

  var data = {
      action: 'get_vacancy_data',
      post_id : post_id
  };
  
  var request = new XMLHttpRequest();
    request.open('POST', ajax.url, true);
    request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8");

    request.onload = function() {
        if (this.status >= 200 && this.status < 400) {
            // Success!
            var resp = JSON.parse(this.response);
            if( true == resp.success ){
              document.querySelector('.profession__title').setAttribute('originhref', origin_location);

              document.querySelector('.flyout .vacancy__headline-title').setAttribute('origin_url', origin_location);
              document.querySelector('.flyout .vacancy__headline-title').innerHTML = resp.title;
              // document.querySelector('.flyout .vacancy__video-container img').setAttribute('src', resp.img);
              document.querySelector('.flyout .vacancy__video-container .vacancy__video-preview').setAttribute('data-src', resp.data_src_video);
              document.querySelector('.flyout .vacancy__video-container .vacancy__video-preview').setAttribute('src', resp.data_src_video);
              document.querySelector('.flyout .vacancy__intro-description').innerHTML = resp.content;
              document.querySelector('.flyout #flexible_schedule').innerHTML = resp.flexible_schedule;
              // document.querySelector('.flyout #vacancy_project').innerHTML = resp.vacancy_project;
              document.querySelector('.flyout #expectations').innerHTML = resp.expectations;
              document.querySelector('.flyout #can_work_remotely').innerHTML = resp.can_work_remotely;
              if( document.querySelector('.flyout .vacancy__office-map-image') ){
                document.querySelector('.flyout .vacancy__office-map-image').setAttribute('src', resp.img_map);
              }
              if( document.querySelector('.flyout .vacancy__office-adress-text') ){
                document.querySelector('.flyout .vacancy__office-adress-text').innerHTML = resp.map_full_adress;
              }
              document.querySelector('.flyout .vacancy__meta-info-sum').innerHTML = resp.money_from;
              document.querySelector('.flyout .vacancy__meta-info-sum-after').innerHTML = resp.gross;
              document.querySelector('.flyout #vaccat_info_vacancy').innerHTML = resp.vaccat;
              document.querySelector('.flyout #town_info_vacancy').innerHTML = resp.town;
              document.querySelector('.flyout #experience_important').innerHTML = resp.experience;

              document.querySelector('#vacancy_popup .loader-wrapp').style.display = "none";

              document.querySelector('.vacancy').style.overflow = "auto";
            
              window.history.pushState('', '', resp.url);
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

  // document.querySelector.ajax({
  //     type: 'POST',
  //     url: ajax.url,
  //     data: data,
  //     dataType: 'json',
  //     cache: 'false',
  //     success: function (response) {
  //         if( true == response.success ){

  //           document.querySelector('.profession__title').setAttribute('originhref', origin_location);

  //           document.querySelector('.flyout .vacancy__headline-title').setAttribute('origin_url', origin_location);
  //           document.querySelector('.flyout .vacancy__headline-title').innerhtml = response.title;
  //           document.querySelector('.flyout .vacancy__video-container img').setAttribute('src', response.img);
  //           document.querySelector('.flyout .vacancy__video-container .vacancy__video-preview').setAttribute('data-src', response.data_src_video);
  //           document.querySelector('.flyout .vacancy__video-container .vacancy__video-preview').setAttribute('src', response.data_src_video);
  //           document.querySelector('.flyout .vacancy__intro-description').innerhtml = response.content;
  //           document.querySelector('.flyout #flexible_schedule').innerhtml = response.flexible_schedule;
  //           document.querySelector('.flyout #vacancy_project').innerhtml = response.vacancy_project;
  //           document.querySelector('.flyout #expectations').innerhtml = response.expectations;
  //           document.querySelector('.flyout #can_work_remotely').innerhtml = response.can_work_remotely;
  //           document.querySelector('.flyout .vacancy__office-map-image').setAttribute('src', response.img_map);
  //           document.querySelector('.flyout .vacancy__office-adress-text').innerhtml = response.map_full_adress;
  //           document.querySelector('.flyout .vacancy__meta-info-sum').innerhtml = response.money_from;
  //           document.querySelector('.flyout .vacancy__meta-info-sum-after').innerhtml = response.gross;
  //           document.querySelector('.flyout #vaccat_info_vacancy').innerhtml = response.vaccat;
  //           document.querySelector('.flyout #town_info_vacancy').innerhtml = response.town;
  //           document.querySelector('.flyout #experience_important').innerhtml = response.experience;

  //           document.querySelector('#vacancy_popup .loader-wrapp').style.display = "none";

  //           document.querySelector('.vacancy').style.overflow = "auto";
          
  //           window.history.pushState('', '', response.url);

  //         }
  //     },
  // });
}