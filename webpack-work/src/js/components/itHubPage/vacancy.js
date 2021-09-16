export class Vacancy {
  constructor(el) {
    this.el = el;

    if (this.el == null || this.el == undefined) return;

    this.flyout = document.querySelector('.flyout');
    this.flyoutSideBar = this.flyout.querySelector('.flyout__side-bar');
    this.flyOutContentBar = this.flyout.querySelector('.vacancy');
    this.flyOutForm = this.flyout.querySelector('.vacancy__form');

    this.init();
    this.resizeFlyout();
    this.flyOutInit();
  }

  init() {
    this.el.addEventListener('click', vacancyClickHandler.bind(this));
  }

  openFlyout() {
    this.flyout.classList.add('flyout__active');
    document.body.style.overflow = 'hidden';
    this.setHeightFlyoutSideBar();
    this.flyout.scrollTop = 0;

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
    });
  }

  closeFlyout(event) {
    event.preventDefault();
    this.flyoutSideBar.style.background = 'transparent';
    document.body.style.overflow = 'visible';

    setTimeout(() => {
      this.flyout.classList.remove('flyout__active');
    }, 300);
  }

  scrollToForm(block) {
    const topOffset = block.offsetTop - 16;

    let interval = setInterval(() => {
      this.flyout.scrollTop += 10;

      if (this.flyout.scrollTop >= topOffset) {
        clearInterval(interval);
      }
    }, 1);
  }

  setHeightFlyoutSideBar() {
    this.flyoutSideBar.style.height = this.flyOutContentBar.clientHeight + 'px';
    setTimeout(() => {
      this.flyoutSideBar.style.background = 'rgba(0, 0, 0, 0.8)';
    }, 300);
  }

  resizeFlyout() {
    window.addEventListener('resize', () => {
      this.setHeightFlyoutSideBar();
    });
  }
}

function vacancyClickHandler(event) {
  if (event.target.classList.contains('profession__job-title')) {
    event.preventDefault();
    this.openFlyout();
  }
}
