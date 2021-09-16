import { smothScrollingToBlock } from '../../index';

export class VacancyDirectLink {
  constructor(el) {
    this.el = el;

    if (this.el == null || this.el == undefined) return;

    this.form = this.el.querySelector('.vacancy__form');

    this.init();
  }

  init() {
    this.el.addEventListener('click', vacancyClickHandler.bind(this));
  }
}

function vacancyClickHandler(event) {
  if (event.target.classList.contains('direct-link__headline-link')) {
    smothScrollingToBlock(this.form);
  }
}
