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
    this.flyout = document.querySelector('.flyout');
    this.flyOutContentBar = this.flyout.querySelector('.vacancy');
    this.flyoutSideBar = this.flyout.querySelector('.flyout__side-bar');

    this.el.addEventListener('mouseover', this.getVacancyItems.bind(this));

    //--------------------------------------------------------------------------------------------
    // Скрипт копирует ссылку на страницу вакансии и открывает ее.

    // this.vacancyItems.forEach((vacancy) => {
    //   vacancy.addEventListener('click', () => {
    //     const button = vacancy.querySelector('.retail__position-item-button');
    //     const linkAddress = button.href;
    //     document.location.href = linkAddress;
    //   });
    // });

    //-----------------------------------------------------------------------------------------------
    // Скрипт для открытия попапа вакансии при клике на блоке вакансии

    this.vacancyItems.forEach((vacancy) => {
      vacancy.addEventListener('click', this.openFlyout.bind(this));
    });

    //---------------------------------------------------------------------------------------------
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

  openFlyout() {
    this.flyout.classList.add('flyout__active');
    this.flyOutContentBar.scrollTop = 0;

    setTimeout(() => {
      document.body.style.overflow = 'hidden';
    }, 200);

    setTimeout(() => {
      this.flyoutSideBar.style.background = 'rgba(0, 0, 0, 0.8)';
    }, 300);
  }
}
