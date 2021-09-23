import { smothScrollingToBlock } from '../../../index';
import { vacancyDirectLinkHeader } from '../../../index';

export class VacancyDirecLinkMainContent {
  constructor(el) {
    this.el = el;

    if (this.el === null || this.el === undefined) return;

    this.form = this.el.querySelector('.vacancy__form');
    this.contentResponseButton = this.el.querySelector(
      '.direct-link__headline-link'
    );

    // Обработчики событий
    this.contentResponseButton.addEventListener(
      'click',
      this.scrollToForm.bind(this)
    );
  }
  scrollToForm(event) {
    event.preventDefault();
    smothScrollingToBlock(this.form, vacancyDirectLinkHeader);
  }
}
