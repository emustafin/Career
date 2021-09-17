export class Goals {
  constructor(el) {
    this.el = el;
    this.slider;
    this.slidesRow = this.el.querySelector('.goal__wrapper-mobile');
    this.currentSlide = this.el.querySelector('.goal__current-slide');
    this.slidesValue = this.el.querySelector('.goal__slide-value');

    console.log(this.slidesRow);

    if (this.el === null || this.el === undefined) return;

    this.init();
    this.sliderInit();
    this.goalBlockResizing();
    this.setCurrentSlideNumber();
  }

  init() {
    this.el.addEventListener('click', goalClickHendler.bind(this));
  }

  sliderInit() {
    if (window.innerWidth <= 720) {
      this.slider = new Swiper('.goal-slider', {
        slidesPerView: 1.23,
      });

      this.slidesValue.textContent = this.slider.slides.length;
    }
  }

  goalBlockResizing() {
    window.addEventListener('resize', () => {
      this.sliderInit();
    });
  }

  setCurrentSlideNumber() {
    this.slidesRow.addEventListener('transitionend', () => {
      this.currentSlide.textContent = this.slider.activeIndex + 1;
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
