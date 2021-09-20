import { smothScrollingToBlock } from '../../index';

export class VacancyDirectLink {
  constructor(el) {
    this.el = el;

    if (this.el === null || this.el === undefined) return;

    this.form = this.el.querySelector('.vacancy__form');
    this.formPopup = this.el.querySelector('.form');
    this.sideBar = this.el.querySelector('.form__side-bar');
    this.headerFormButton = this.el.querySelector('.it-header__button');
    this.contentResponseButton = this.el.querySelector(
      '.direct-link__headline-link'
    );
    this.sideBarResponseButton = this.el.querySelector(
      '.direct-link__vacancy-link'
    );
    this.copyLinkButton = this.el.querySelector(
      '.direct-link__header-head-copy'
    );

    this.newsSlider = new Swiper('.newsSlider', {
      slidesPerView: 2.5,
      spaceBetween: 16,
      loop: true,
      breakpoints: {
        767: {
          slidesPerView: 2.7,
          spaceBetween: 30,
        },

        1024: {
          slidesPerView: 3.5,
          spaceBetween: 30,
        },
        1440: {
          slidesPerView: 3.7,
          spaceBetween: 40,
        },
        1600: {
          slidesPerView: 4,
          spaceBetween: 40,
        },
      },
    });

    // Обработчики событий
    this.headerFormButton.addEventListener('click', this.openForm.bind(this));
    this.contentResponseButton.addEventListener(
      'click',
      this.scrollToForm.bind(this)
    );
    this.sideBarResponseButton.addEventListener(
      'click',
      this.scrollToForm.bind(this)
    );
    this.copyLinkButton.addEventListener('click', this.copyLink.bind(this));
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

  scrollToForm(event) {
    event.preventDefault();
    smothScrollingToBlock(this.form);
  }

  async copyLink(event) {
    event.preventDefault();
    const link = document.URL;
    await navigator.clipboard.writeText(link);
  }
}
