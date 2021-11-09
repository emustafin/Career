export class ItHubVacanciesContainerInProfessionBlock {
  constructor(className) {
    this.el = document.querySelector(className);

    if (!this.el) return;

    this.vacancyItems = [];
    this.el.addEventListener('mouseover', this.getVacancyItems.bind(this));
  }
  getVacancyItems(event) {
    if (event.target.classList.contains('profession__job-item')) {
      this.vacancyItems = this.el.querySelectorAll('.profession__job-item');
      this.showButtonMoreAboutDirection(this.vacancyItems);
    }
  }

  showButtonMoreAboutDirection(vacancyCollection) {
    vacancyCollection.forEach((item) => {
      item.addEventListener('mousemove', (event) => {
        const button = event.target.querySelector('.profession__more-info');
        button.style.top = event.layerY - 15 + 'px';
        button.style.left = event.layerX - 30 + 'px';
      });
    });
  }
}
