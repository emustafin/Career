import { ItHubVacancyBlock } from '../itHubVacancyBlock';

export class ListingVacansiesPagePopup {
  constructor(className) {
    this.el = document.querySelector(className);

    if (!this.el) return;

    this.vacancyInstance = new ItHubVacancyBlock(this.el);
    this.flyout = this.vacancyInstance.flyout;

    this.vacancyItems = [];

    this.el.addEventListener('click', this.openFlyout.bind(this));
    this.el.addEventListener('mouseover', this.getVacancyItems.bind(this));
  }

  load_popup_vacancy( post_id ){

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
        post_id : post_id,
        modificator : modificator
    };
    
    var request = new XMLHttpRequest();
      request.open('POST', ajax.url, true);
      request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8");
  
      request.onload = function() {
          if (this.status >= 200 && this.status < 400) {
              // Success!
              var resp = JSON.parse(this.response);
              if( true == resp.success ){
                // document.querySelector('.profession__title').setAttribute('originhref', origin_location);
  
                document.querySelector('.flyout .vacancy__headline-title').setAttribute('origin_url', origin_location);
                document.querySelector('.flyout .vacancy__headline-title').innerHTML = resp.title;
                document.querySelector('.flyout .vacancy__video-container .vacancy__video-preview').setAttribute('data-src', resp.data_src_video);
                document.querySelector('.flyout .vacancy__video-container .vacancy__video-preview').setAttribute('src', resp.data_src_video);
                document.querySelector('.flyout .vacancy__intro-description').innerHTML = resp.content;
                document.querySelector('.flyout #flexible_schedule').innerHTML = resp.flexible_schedule;
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
                document.querySelector('.flyout #vaccat_info_vacancy').innerHTML = resp.specialization;
                document.querySelector('.flyout #town_info_vacancy').innerHTML = resp.city;
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
  }

  openFlyout(event) {
    if (this.flyout && event.target.classList.contains('position__card-item')) {
      document.querySelector('#vacancy_popup .loader-wrapp').style.display = "block";
      var post_id = event.target.getAttribute('data-vacancy_id')
      this.load_popup_vacancy( post_id );
      this.vacancyInstance.openFlyout();
    }

    if (this.flyout.classList.contains('flyout__active')) {
      this.vacancyInstance.playFlyoutVideo();
    }
  }

  getVacancyItems(event) {
    if (event.target.classList.contains('position__card-item')) {
      this.vacancyItems = this.el.querySelectorAll('.position__card-item');
      this.showButtonMoreAboutDirection(this.vacancyItems);
    }
  }

  showButtonMoreAboutDirection(vacancyCollection) {
    vacancyCollection.forEach((item) => {
      item.addEventListener('mousemove', (event) => {
        const button = event.target.querySelector('.position__info-link');
        button.style.top = event.layerY - 15 + 'px';
        button.style.left = event.layerX - 30 + 'px';
      });
    });
  }
}
