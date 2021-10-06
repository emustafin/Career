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
    this.header = vacancyDirectLinkHeader || headerItPage;

    this.progressBar = this.el.querySelector('.vacancy__progress-bar');
    this.progressRadius = this.progressBar.r.baseVal.value;
    this.progressBarLength = 2 * Math.PI * this.progressRadius;

    this.progressBar.style.strokeDasharray = `${this.progressBarLength} ${this.progressBarLength}`;
    this.progressBar.style.strokeDashoffset = this.progressBarLength;
    this.video = this.el.querySelector('.vacancy__video-preview');

    // Обработчики событий
    this.contentResponseButton.addEventListener(
      'click',
      this.scrollToForm.bind(this)
    );

    // this.setProgress();
  }
  scrollToForm(event) {
    event.preventDefault();
    smothScrollingToBlock(this.form, this.header);
  }

  setProgress() {
    console.log(this.video);
    this.video.play();
  }
}
