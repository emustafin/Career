export class mainAwards {
    constructor(className) {
      this.el = document.querySelector(className);
  
      if (this.el === null || this.el === undefined) return;
  
      this.slider;
      this.slidesRow = this.el.querySelector('.main-awards__wrapper-mobile');
      this.currentSlide = this.el.querySelector('.awards__current-slide');
      this.slidesValue = this.el.querySelector('.awards__slide-value');
      this.activeSlideIndex;
  
      this.slider = new Swiper('.main-awards__right-bar-mobile', {
        slidesPerView: 1.23,
        spaceBetween: 16,
      });
  
      this.init();
      this.setCurrentSlideNumber();
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