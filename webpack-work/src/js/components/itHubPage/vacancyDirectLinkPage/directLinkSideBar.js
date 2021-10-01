import { smothScrollingToBlock } from '../../../index';
import { vacancyDirectLinkHeader } from '../../../index';
import { headerItPage } from '../../../index';

export class VacancyDirecLinkSideBar {
  constructor(el) {
    this.el = el;

    if (this.el === null || this.el === undefined) return;

    this.form = document.querySelector('.vacancy__form');
    this.sideBarResponseButton = this.el.querySelector(
      '.direct-link__vacancy-link'
    );
    this.copyLinkButton = this.el.querySelector(
      '.direct-link__header-head-copy'
    );
    this.header = vacancyDirectLinkHeader || headerItPage;

    // Обработчики событий
    this.sideBarResponseButton.addEventListener(
      'click',
      this.scrollToForm.bind(this)
    );
    this.copyLinkButton.addEventListener('click', this.copyLink.bind(this));
  }
  scrollToForm(event) {
    event.preventDefault();
    smothScrollingToBlock(this.form, this.header);
  }

  async copyLink(event) {
    event.preventDefault();
    const link = document.URL;

    await navigator.clipboard.writeText(link);
  }
}
