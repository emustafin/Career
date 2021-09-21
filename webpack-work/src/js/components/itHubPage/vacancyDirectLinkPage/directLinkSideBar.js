import { smothScrollingToBlock } from '../../../index';

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

    // Обработчики событий
    this.sideBarResponseButton.addEventListener(
      'click',
      this.scrollToForm.bind(this)
    );
    this.copyLinkButton.addEventListener('click', this.copyLink.bind(this));
  }
  scrollToForm(event) {
    event.preventDefault();
    smothScrollingToBlock(this.form);
  }

  async copyLink(event) {
    event.preventDefault();
    const link = document.URL;

    console.log(navigator);

    await navigator.clipboard.writeText(link);
  }
}
