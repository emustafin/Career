const swiper = new Swiper('.habr__news-wrapper', {
    direction: 'horizontal',
    breakpoints: {
        // when window width is >= 320px
        320: {
          slidesPerView: 1.21,
          spaceBetween: 16
        },
        // when window width is >= 768px
        768: {
          slidesPerView: 2,
          spaceBetween: 8
        },
        // when window width is >= 1024px
        1024: {
            slidesPerView: 3,
            spaceBetween: 14
        },
          // when window width is >= 1440px
        1440: {
            slidesPerView: 3,
            spaceBetween: 16
        },
        // when window width is >= 1920px
        1920: {
            slidesPerView: 3,
            spaceBetween: 24,
        }
      }
});