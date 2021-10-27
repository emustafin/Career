import { Vacancy } from '../vacancy';

export class ListingVacansiesContainer {
  constructor(el) {
    this.el = el;

    if (!this.el) return;

    this.vacancyInstance = new Vacancy(this.el);
    this.flyout = this.vacancyInstance.flyout;
    this.vacancyItems = [];

    this.el.addEventListener('click', this.openFlyout.bind(this));
    this.el.addEventListener('mouseover', this.getVacancyItems.bind(this));
  }

  openFlyout(event) {
    if (this.flyout && event.target.classList.contains('position__card-item')) {
      this.vacancyInstance.openFlyout();
    }

    if (this.flyout.classList.contains('flyout__active')) {
      this.vacancyInstance.playFlyoutVideo();
    }
  }

  getVacancyItems(event) {
    if (event.target.classList.contains('position__card-item')) {
      this.vacancyItems = this.el.querySelectorAll('.position__card-item');
      this.showButtonMoreAboutDirection(this.vacancyItems);
    }
  }

  showButtonMoreAboutDirection(vacancyCollection) {
    vacancyCollection.forEach((item) => {
      item.addEventListener('mousemove', (event) => {
        const button = event.target.querySelector('.position__info-link');
        button.style.top = event.layerY - 15 + 'px';
        button.style.left = event.layerX - 30 + 'px';
      });
    });
  }
}
