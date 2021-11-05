import { smothScrollingToBlock } from '../../../index';
import { vacancyDirectLinkHeader } from '../../../index';
import { headerItPage } from '../../../index';

export class VacancyDirecLinkMainContent {
  constructor(el) {
    this.el = el;

    if (this.el === null || this.el === undefined) return;

    this.form = this.el.querySelector('.vacancy__form');
    this.contentResponseButton = this.el.querySelector(
      '.direct-link__headline-link'
    );
    this.copyLinkButtonMobile = this.el.querySelector(
      '.direct-link__header-head-copy-mobile'
    );
    this.header = vacancyDirectLinkHeader || headerItPage;

    this.progressBar = this.el.querySelector('.vacancy__progress-bar');
    this.progressRadius = this.progressBar.r.baseVal.value;
    this.progressBarLength = 2 * Math.PI * this.progressRadius;

    this.progressBar.style.strokeDasharray = `${this.progressBarLength} ${this.progressBarLength}`;
    this.progressBar.style.strokeDashoffset = this.progressBarLength;
    this.video = this.el.querySelector('.vacancy__video-preview');
    this.videoContainer = this.el.querySelector('.vacancy__video-container');
    this.btnMuted = this.el.querySelector('.vacancy__video-sound-muted');
    this.btnLoud = this.el.querySelector('.vacancy__video-sound-loud');

    // Обработчики событий
    this.contentResponseButton.addEventListener(
      'click',
      this.scrollToForm.bind(this)
    );
    this.videoContainer.addEventListener('click', this.turnOnSound.bind(this));

    this.setVideoProgress();
  }
  scrollToForm(event) {
    event.preventDefault();
    smothScrollingToBlock(this.form, this.header);
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

  turnOnSound(event) {
    if (
      (event.target.classList.contains('vacancy__video-preview') &&
        this.videoContainer.dataset.name === 'muted') ||
      (event.target.classList.contains('vacancy__video-sound') &&
        this.videoContainer.dataset.name === 'muted')
    ) {
      setTimeout(() => {
        this.video.muted = false;
        this.btnMuted.classList.add('hide');
        this.btnLoud.classList.remove('hide');
        this.videoContainer.dataset.name = 'loud';
      }, 50);
    } else if (
      (event.target.classList.contains('vacancy__video-preview') &&
        this.videoContainer.dataset.name === 'loud') ||
      (event.target.classList.contains('vacancy__video-sound') &&
        this.videoContainer.dataset.name === 'loud')
    ) {
      setTimeout(() => {
        this.video.muted = true;
        this.btnMuted.classList.remove('hide');
        this.btnLoud.classList.add('hide');
        this.videoContainer.dataset.name = 'muted';
      }, 50);
    }
  }
}
