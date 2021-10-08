export class CareerUpgrade {
  constructor(el) {
    this.el = el;

    if (this.el == null || this.el == undefined) return;

    this.slidesPrev = Array.from(
      this.el.querySelectorAll('.upgrade__slider-prev-image')
    );
    this.slidesMain = Array.from(
      this.el.querySelectorAll('.upgrade__middle-image-item')
    );
    this.slidesNext = Array.from(
      this.el.querySelectorAll('.upgrade__slider-next-item')
    );
    this.prevSliderRow = this.el.querySelector(
      '.upgrade__slider-prev-image-row'
    );
    this.mainSliderRow = this.el.querySelector('.upgrade__middle-image-row');
    this.nextSliderRow = this.el.querySelector('.upgrade__slider-next-row');

    this.currentSlideNumber = 1;
    this.currentSlideRowPosition = 0;

    this.prevSlider = new Swiper('.swiperUpgrage', {
      // loop: true,
    });

    this.mainSlider = new Swiper('.mainSlider', {
      // loop: true,
    });

    this.nextSlider = new Swiper('.nextSlider', {
      // loop: true,
    });

    this.mainSlider.on('slideChange', () => {
      this.nextSlider.slideToLoop(this.mainSlider.realIndex);
      this.prevSlider.slideToLoop(this.mainSlider.realIndex);
    });

    this.prevSlider.on('slideChange', () => {
      this.nextSlider.slideToLoop(this.prevSlider.realIndex);
      this.mainSlider.slideToLoop(this.prevSlider.realIndex);
    });

    this.nextSlider.on('slideChange', () => {
      this.prevSlider.slideToLoop(this.nextSlider.realIndex);
      this.mainSlider.slideToLoop(this.nextSlider.realIndex);
    });

    this.init();
  }

  init() {
    this.el.addEventListener('click', sliderClickHandler.bind(this));
  }
}

function sliderClickHandler(event) {
  if (event.target.classList.contains('upgrade__arrow-prev')) {
    this.mainSlider.slidePrev();
  }

  if (event.target.classList.contains('upgrade__slider-next-arrow')) {
    this.mainSlider.slideNext();
  }
}
