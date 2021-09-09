export class SvgToggleAnimate {
  constructor(el, triggerEl) {
    this.el = el;
    this.triggerEl = triggerEl;

    this.endOfAnimate = {
      top: 11,
      left: 150
    }

    this.init();
  }

  init() {
    if ((this.el || this.triggerEl) == null || undefined) return;

    switch (window.innerWidth) {
      case 768:
        this.endOfAnimate = {
          top: 4,
          left: 63
        };
        break;
      case 320:
        this.endOfAnimate = {
          top: 2,
          left: 32
        };
        break;
      default:
        this.endOfAnimate = {
          top: 11,
          left: 150
        };
        break;
    }
    this.animate();
    window.addEventListener('scroll', this.animate.bind(this));
  }

  isScrolledIntoView() {
    let rect = this.triggerEl.getBoundingClientRect();
    let elemTop = rect.top;
    let elemBottom = rect.bottom;
    return (elemTop >= 0) && (elemBottom*2 <= window.innerHeight);
  }

  animate() {
    if (this.isScrolledIntoView()) {
      this.el.querySelectorAll(".svg-toggle__btn svg:nth-child(2)").forEach((el, i) => {
        setTimeout(()=> {
          el.style.cssText = `
            top: ${this.endOfAnimate.top}px;
            left: ${this.endOfAnimate.left}px;
            transition: all 1s;
          `;
        }, 1000 * i);
        return;
      });
    }
  }
}

//720: 4: 63