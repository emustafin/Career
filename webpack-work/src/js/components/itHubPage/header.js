export class Header {
  constructor(className) {
    this.el = document.querySelector(className);

    if (this.el === null || this.el === undefined) return;

    this.headerSelect = this.el.querySelector('.it-header__directions');
    this.directionsArrow = this.el.querySelector('.it-header__directions-arrow');
    this.dropdowList = this.el.querySelector(
      '.it-header__directions-dropdown-list'
    );
    this.dropdownItems = this.el.querySelectorAll(
      '.it-header__directions-dropdown-item'
    );
    this.directionsValue = this.el.querySelector(
      '.it-header__directions-value'
    );

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

  openSelect() {
    if (this.headerSelect.dataset.name === 'closed') {
      this.dropdowList.classList.add(
        'it-header__directions-dropdown-list-active'
      );
      this.headerSelect.classList.add('it-header__directions-active')
      this.directionsArrow.classList.add('it-header__directions-arrow-active')

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
      this.headerSelect.classList.remove('it-header__directions-active')
      this.directionsArrow.classList.remove('it-header__directions-arrow-active')
      setTimeout(() => {
        this.headerSelect.dataset.name = 'closed';
      }, 50);
    }
  }

  openOrCloseSelect() {
    this.openSelect();
    this.closeSelect();
  }
}
