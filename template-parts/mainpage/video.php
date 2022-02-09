<!-- Section Video -->
<div class="main-video">
  <div class="main-video-wrapper">
    <video class="video" preload muted loop autoplay>
      <source class="main__video-src" src="<?php echo get_template_directory_uri()?>/webpack-work/src/future.mp4">
    </video>
    <div class="button-wrapper">
      <button onclick="play()" class="main-video-play">
        <svg class="main__video-control-played" width="114" height="126" viewBox="0 0 114 126" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M0.5 0.450684L113.089 63L0.5 125.549V0.450684ZM3.5 5.54923V120.451L106.911 63L3.5 5.54923Z" fill="white"></path>
        </svg>
      </button>
      <button onclick="pause()" class="main-video-pause">
        <svg class="main__video-control-paused" width="68" height="120" viewBox="0 0 68 120" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0.5 0V120H3.5V0H0.5Z" fill="white"></path>
          <path d="M64.5 0V120H67.5V0H64.5Z" fill="white"></path>
        </svg>
      </button>
    </div>
  </div>
  <button onclick="soundoff()" class="main-video__button-off">Выключить звук</button>
  <button onclick="soundon()" class="main-video__button-on">Включить звук</button>
</div>
<!-- //Section Video -->