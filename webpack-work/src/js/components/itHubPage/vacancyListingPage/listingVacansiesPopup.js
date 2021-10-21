import { Vacancy } from '../vacancy';

export class ListingVacansiesContainer {
  constructor(el) {
    this.el = el;

    if (!this.el) return;

    this.vacancyInstance = new Vacancy(this.el);
    this.flyout = this.vacancyInstance.flyout;

    this.el.addEventListener('click', this.openFlyout.bind(this));
  }

  openFlyout(event) {
    if (this.flyout && event.target.classList.contains('position__card-item')) {
      this.vacancyInstance.openFlyout();
    }

    if (this.flyout.classList.contains('flyout__active')) {
      this.vacancyInstance.playFlyoutVideo();
    }
  }
}
