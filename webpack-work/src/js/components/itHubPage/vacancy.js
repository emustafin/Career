export class Vacancy {
  constructor(el) {
    this.el = el;

    if (this.el == null || this.el == undefined) return;

    this.flyout = document.querySelector('.flyout');
    this.flyoutSideBar = this.flyout.querySelector('.flyout__side-bar');
    this.flyOutContentBar = this.flyout.querySelector('.vacancy');
    this.flyOutForm = this.flyout.querySelector('.vacancy__form');
    this.newsSlider;

    this.init();
    this.resizeFlyout();
    this.flyOutInit();
    this.newsSliderInit();
  }

  init() {
    this.el.addEventListener('click', vacancyClickHandler.bind(this));
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

  flyOutInit() {
    this.flyout.addEventListener('click', (event) => {
      if (
        event.target.classList.contains('vacancy__header-head-link-main') ||
        event.target.classList.contains('flyout__side-bar')
      ) {
        this.closeFlyout(event);
      }

      if (event.target.classList.contains('vacancy__headline-link')) {
        event.preventDefault();
        this.scrollToForm(this.flyOutForm);
      }

      if (event.target.classList.contains('vacancy__news-btn-prev')) {
        this.newsSlider.slidePrev();
      }

      if (event.target.classList.contains('vacancy__news-btn-next')) {
        this.newsSlider.slideNext();
      }
    });
  }

  closeFlyout(event) {
    event.preventDefault();
    this.flyoutSideBar.style.background = 'transparent';

    setTimeout(() => {
      document.body.style.overflow = 'visible';
    }, 200);

    setTimeout(() => {
      this.flyout.classList.remove('flyout__active');
    }, 300);
  }

  scrollToForm(block) {
    const topOffset = block.offsetTop - 16;

    let interval = setInterval(() => {
      this.flyOutContentBar.scrollTop += 10;

      if (this.flyOutContentBar.scrollTop >= topOffset) {
        clearInterval(interval);
      }
    }, 1);
  }

  newsSliderInit() {
    if (this.flyout.clientWidth >= 671) {
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
            slidesPerView: 2.2,
            spaceBetween: 30,
          },
          1440: {
            slidesPerView: 2.7,
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
}

function vacancyClickHandler(event) {
  if (event.target.classList.contains('profession__job-title')) {
    event.preventDefault();
    this.openFlyout();
  }
}
