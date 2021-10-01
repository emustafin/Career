export class VacancyDirecLinkNewsBlock {
  constructor(el) {
    this.el = el;

    if (this.el === null || this.el === undefined) return;

    this.newsSliderDirectLink = new Swiper('.newsSliderDirectLink', {
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
      navigation: {
        nextEl: '.vacancy__news-btn-next',
        prevEl: '.vacancy__news-btn-prev',
      },
    });
  }
}
