export class RetailPositionBlock {
  constructor(className) {
    this.el = document.querySelector(className);

    if (!this.el) return;

    this.vacancyItems = [];
    this.mvideoFromPositionPage = Array.from(
      this.el.querySelectorAll('.mvideo')
    );
    this.eldoradoFromPositionPage = Array.from(
      this.el.querySelectorAll('.eldorado')
    );
    this.vacancyItems = this.el.querySelectorAll('.retail__position-list-item');
    this.flyout = document.querySelector('.flyout');

    if (this.flyout) {
      this.flyOutContentBar = this.flyout.querySelector('.vacancy');
      this.flyoutSideBar = this.flyout.querySelector('.flyout__side-bar');
      this.flyoutButtonToMainPage = this.flyout.querySelector(
        '.vacancy__header-head-link-main'
      );
      this.flyOutForm = this.flyout.querySelector('.vacancy__form');

      this.progressBar = this.flyout.querySelector('.vacancy__progress-bar');
      this.progressRadius = this.progressBar.r.baseVal.value;
      this.progressBarLength = 2 * Math.PI * this.progressRadius;

      this.progressBar.style.strokeDasharray = `${this.progressBarLength} ${this.progressBarLength}`;
      this.progressBar.style.strokeDashoffset = this.progressBarLength;
      this.video = this.flyout.querySelector('.vacancy__video-preview');
      this.videoContainer = this.flyout.querySelector(
        '.vacancy__video-container'
      );
      this.soundButtonContainer = this.flyout.querySelector(
        '.vacancy__video-sound'
      );
      this.btnMuted = this.flyout.querySelector('.vacancy__video-sound-muted');
      this.btnLoud = this.flyout.querySelector('.vacancy__video-sound-loud');
      this.vacancyCopyLink = this.flyout.querySelector(
        '.vacancy__header-head-copy'
      );
      this.responseButton = this.flyout.querySelector(
        '.vacancy__headline-link'
      );

      this.el.addEventListener('mouseover', this.getVacancyItems.bind(this));

      //--------------------------------------------------------------------------------------------
      // Скрипт копирует ссылку на страницу вакансии и открывает ее.

      // this.vacancyItems.forEach((vacancy) => {
      //   vacancy.addEventListener('click', () => {
      //     const button = vacancy.querySelector('.retail__position-item-button');
      //     const linkAddress = button.href;
      //     document.location.href = linkAddress;
      //   });
      // });

      //-----------------------------------------------------------------------------------------------
      // Скрипт для открытия попапа вакансии при клике на блоке вакансии

      this.vacancyItems.forEach((vacancy) => {
        vacancy.addEventListener('click', this.openFlyout.bind(this) );
      });

      //---------------------------------------------------------------------------------------------
      // Скрипт для закрытия попапа вакансии

      this.flyoutSideBar.addEventListener('click', this.closeFlyout.bind(this));
      this.flyoutButtonToMainPage.addEventListener(
        'click',
        this.closeFlyout.bind(this)
      );

      //------------------------------------------------------------------------------------------------
      // Копировать ссылку
      this.vacancyCopyLink.addEventListener('click', this.copyLink.bind(this));

      //---------------------------------------------------------------------------------------------------
      // Скролл к форме
      this.responseButton.addEventListener(
        'click',
        this.scrollToForm.bind(this)
      );
    }
  }
  getVacancyItems(event) {
    if (event.target.classList.contains('retail__position-list-item')) {
      this.vacancyItems = this.el.querySelectorAll(
        '.retail__position-list-item'
      );
      this.showButtonMoreAboutDirection(this.vacancyItems);
    }
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

  showButtonMoreAboutDirection(vacancyCollection) {
    vacancyCollection.forEach((item) => {
      item.addEventListener('mousemove', (event) => {
        const button = event.target.querySelector(
          '.retail__position-item-button'
        );
        button.style.top = event.layerY - 15 + 'px';
        button.style.left = event.layerX - 30 + 'px';
      });
    });
  }

  openFlyout( event ) {

    document.querySelector('#vacancy_popup .loader-wrapp').style.display = "block";
    var post_id = event.target.getAttribute('data-vacancy_id')
    this.load_popup_vacancy( post_id );
    
    this.flyout.classList.add('flyout__active');
    this.flyOutContentBar.scrollTop = 0;

    this.playFlyoutVideo();

    setTimeout(() => {
      document.body.style.overflow = 'hidden';
    }, 200);

    setTimeout(() => {
      this.flyoutSideBar.style.background = 'rgba(0, 0, 0, 0.8)';
    }, 300);
  }

  closeFlyout(event) {
    event.preventDefault();
    this.flyoutSideBar.style.background = 'transparent';
    this.stopFlyoutVideo();

    setTimeout(() => {
      document.body.style.overflow = 'visible';
    }, 200);

    setTimeout(() => {
      this.flyout.classList.remove('flyout__active');
    }, 300);
  }

  setVideoProgress() {
    if (this.video.autoplay === true) {
      setInterval(() => {
        const progress = (this.video.currentTime / this.video.duration) * 100;
        let offset =
          this.progressBarLength - (progress / 100) * this.progressBarLength;
        this.progressBar.style.strokeDashoffset = offset;

        if (this.video.currentTime === this.video.duration) {
          this.video.currentTime = 0;
        }
      }, 50);
    }
  }

  playFlyoutVideo() {
    this.videoContainer.classList.remove('loading');
    // this.videoContainer.dataset.name = 'loud';

    this.video.src =
      '/wp-content/themes/career_theme/assets/images/flyout/flyout-intro/video/retail-video-preview.mp4';

    this.video.setAttribute('autoplay', true);
    this.setVideoProgress();
  }

  stopFlyoutVideo() {
    this.video.pause();

    setTimeout(() => {
      this.video.removeAttribute('autoplay');
      this.videoContainer.classList.add('loading');
      this.videoContainer.dataset.name = 'muted';
      this.video.src =
        '/wp-content/themes/career_theme/assets/images/Lazy-loading/1x1.png';

      this.btnMuted.classList.remove('hide');
      this.btnLoud.classList.add('hide');
      this.video.muted = true;
    }, 300);
  }

  async copyLink(event) {
    event.preventDefault();
    const link = document.URL;

    await navigator.clipboard.writeText(link);
  }

  scrollToForm() {
    const topOffset = this.flyOutForm.offsetTop - 16;

    let interval = setInterval(() => {
      this.flyOutContentBar.scrollTop += 10;

      if (this.flyOutContentBar.scrollTop >= topOffset) {
        clearInterval(interval);
      }
    }, 1);
  }
}
