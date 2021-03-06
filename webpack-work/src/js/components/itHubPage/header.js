export class Header {
  constructor(className) {
    this.el = document.querySelector(className);

    if (this.el === null || this.el === undefined) return;

    this.headerSelect = this.el.querySelector('.it-header__directions');
    this.directionsArrow = this.el.querySelector(
      '.it-header__directions-arrow'
    );
    this.dropdowList = this.el.querySelector(
      '.it-header__directions-dropdown-list'
    );
    this.dropdownItems = this.el.querySelectorAll(
      '.it-header__directions-dropdown-item'
    );
    this.directionsValue = this.el.querySelector(
      '.it-header__directions-value'
    );
    this.phoneTitle = this.el.querySelector('.it-header__contact-text');
    this.phoneBlock = this.el.querySelector('.it-header__contact-us');
    this.headerWrapper = this.el.querySelector('.it-header__wrapper');
    // this.headerButton = this.el.querySelector('.it-header__button');
    this.windowTopOffset = 50;

    if (null !== this.headerSelect) {
      // Слушатели событий
      this.headerSelect.addEventListener(
        'click',
        this.openOrCloseSelect.bind(this)
      );
      this.dropdownItems.forEach((item) =>
        item.addEventListener('click', this.closeSelect.bind(this))
      );
      this.directionsValue.textContent = `(${this.dropdownItems.length})`;
    }

    window.addEventListener('scroll', this.hidePhoneTitle.bind(this));
  }

  openSelect() {
    if (this.headerSelect.dataset.name === 'closed') {
      this.dropdowList.classList.add(
        'it-header__directions-dropdown-list-active'
      );
      this.headerSelect.classList.add('it-header__directions-active');
      this.directionsArrow.classList.add('it-header__directions-arrow-active');

      setTimeout(() => {
        this.headerSelect.dataset.name = 'opened';
      }, 50);
    }
  }

  closeSelect() {
    if (this.headerSelect === null || this.headerSelect === undefined) return;

    if (this.headerSelect.dataset.name === 'opened') {
      this.dropdowList.classList.remove(
        'it-header__directions-dropdown-list-active'
      );
      this.headerSelect.classList.remove('it-header__directions-active');
      this.directionsArrow.classList.remove(
        'it-header__directions-arrow-active'
      );
      setTimeout(() => {
        this.headerSelect.dataset.name = 'closed';
      }, 50);
    }
  }

  openOrCloseSelect() {
    this.openSelect();
    this.closeSelect();
  }

  hidePhoneTitle() {
    if (window.scrollY > this.windowTopOffset && window.screen.width > 767) {
      this.phoneBlock.classList.add('it-header__contact-us-to-top');
      this.phoneTitle.classList.add('transparent');
      this.headerWrapper.classList.add('header__scroll-padding');
      // this.headerButton.style.top = '16px';
    } else {
      this.phoneBlock.classList.remove('it-header__contact-us-to-top');
      this.phoneTitle.classList.remove('transparent');
      this.headerWrapper.classList.remove('header__scroll-padding');
      // this.headerButton.style.top = '22px';
    }

    // if (window.scrollY > this.windowTopOffset && window.innerWidth <= 1100) {
    //   // this.headerButton.style.top = '8px';
    // } else {
    //   // this.headerButton.style.top = '16px';
    // }
  }
}
