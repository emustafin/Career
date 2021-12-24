export class MobileSliderAdvantages {
  constructor(className) {
    this.el = document.querySelector(className);

    if (this.el === null || this.el === undefined) return;

    this.slider;
    this.slidesRow = this.el.querySelector('.logistic-advantages__content-wrapper');
    this.currentSlide = this.el.querySelector('.goal__current-slide');
    this.slidesValue = this.el.querySelector('.goal__slide-value');
    this.activeSlideIndex;

    if( window.innerWidth < 479 ){
      this.slider = new Swiper('.logistic-advantages__right-bar', {
        slidesPerView: 1.23,
      });
  
      this.init();
      this.setCurrentSlideNumber();
    }
  }

  init() {
    this.el.addEventListener('click', goalClickHendler.bind(this));
  }

  setCurrentSlideNumber() {
    this.slidesRow.addEventListener('transitionend', () => {
      this.activeSlideIndex = this.slider.activeIndex;
      this.currentSlide.textContent = this.activeSlideIndex + 1;
    });
  }
}

function goalClickHendler(event) {
  if (
    event.target.classList.contains('why-are-we__slide-arrow') &&
    event.target.dataset.name === 'prev'
  ) {
    this.slider.slidePrev();
  }

  if (
    event.target.classList.contains('why-are-we__slide-arrow') &&
    event.target.dataset.name === 'next'
  ) {
    this.slider.slideNext();
  }
}
