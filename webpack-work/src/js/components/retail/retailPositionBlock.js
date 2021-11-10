export class RetailPositionBlock {
  constructor(className) {
    this.el = document.querySelector(className);

    if (!this.el) return;

    this.vacancyItems = [];
    this.mvideoFromPositionPage = Array.from(
      this.el.querySelectorAll('.mvideo')
    );
    this.eldoradoFromPositionPage = Array.from(
      this.el.querySelectorAll('.eldorado')
    );
    this.vacancyItems = this.el.querySelectorAll('.retail__position-list-item');

    this.el.addEventListener('mouseover', this.getVacancyItems.bind(this));

    this.vacancyItems.forEach((vacancy) => {
      vacancy.addEventListener('click', () => {
        const button = vacancy.querySelector('.retail__position-item-button');
        const linkAddress = button.href;
        document.location.href = linkAddress;
      });
    });
  }
  getVacancyItems(event) {
    if (event.target.classList.contains('retail__position-list-item')) {
      this.vacancyItems = this.el.querySelectorAll(
        '.retail__position-list-item'
      );
      this.showButtonMoreAboutDirection(this.vacancyItems);
    }
  }

  showButtonMoreAboutDirection(vacancyCollection) {
    vacancyCollection.forEach((item) => {
      item.addEventListener('mousemove', (event) => {
        const button = event.target.querySelector(
          '.retail__position-item-button'
        );
        button.style.top = event.layerY - 15 + 'px';
        button.style.left = event.layerX - 30 + 'px';
      });
    });
  }
}
