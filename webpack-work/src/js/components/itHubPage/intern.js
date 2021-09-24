import { swichersAnimation } from '../../index';
import { headerItPage } from '../../index';

export class Intern {
  constructor(el) {
    this.el = el;

    if (this.el === null || this.el === undefined) return;

    this.swichers = this.el.querySelectorAll('.intern__inside-circle');
    window.addEventListener(
      'scroll',
      swichersAnimation(headerItPage, this.el, this.swichers)
    );
  }
}
