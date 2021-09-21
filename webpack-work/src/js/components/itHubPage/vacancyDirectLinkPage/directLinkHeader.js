export class VacancyDirecLinkHeader {
  constructor(el) {
    this.el = el;

    if (this.el === null || this.el === undefined) return;

    this.formPopup = document.querySelector('.form');
    this.headerFormButton = this.el.querySelector('.it-header__button');
    this.sideBar = document.querySelector('.direct-link__side-bar');

    // Обработчики событий
    this.headerFormButton.addEventListener('click', this.openForm.bind(this));
  }
  openForm(event) {
    event.preventDefault();
    this.formPopup.classList.add('form-active');

    setTimeout(() => {
      document.body.style.overflow = 'hidden';
    }, 200);

    setTimeout(() => {
      this.sideBar.style.background = 'rgba(0, 0, 0, 0.8)';
    }, 300);
  }
}
