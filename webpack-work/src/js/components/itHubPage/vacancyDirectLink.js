import { smothScrollingToBlock } from '../../index';

export class VacancyDirectLink {
  constructor(el) {
    this.el = el;

    if (this.el == null || this.el == undefined) return;

    this.form = this.el.querySelector('.vacancy__form');
    this.newsSlider;

    console.log(this.newsSlider);

    this.init();
    this.newsSliderInit();
  }

  init() {
    this.el.addEventListener('click', vacancyClickHandler.bind(this));
  }

  newsSliderInit() {
    if (this.el.clientWidth >= 671) {
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
    }
  }

  resizeFlyout() {
    window.addEventListener('resize', () => {
      if (this.flyout.clientWidth >= 671) {
        this.newsSliderInit();
      }
    });
  }

  copyLink() {
    const link = document.URL;

    return link;
  }
}

function vacancyClickHandler(event) {
  if (
    event.target.classList.contains('direct-link__headline-link') ||
    event.target.classList.contains('direct-link__vacancy-link')
  ) {
    smothScrollingToBlock(this.form);
  }

  if (event.target.classList.contains('vacancy__news-btn-prev')) {
    this.newsSlider.slidePrev();
  }

  if (event.target.classList.contains('vacancy__news-btn-next')) {
    this.newsSlider.slideNext();
  }

  if (event.target.classList.contains('direct-link__header-head-copy')) {
    this.copyLink();
  }
}
