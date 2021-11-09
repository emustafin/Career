export class ListingVacancyPage {
  constructor(className) {
    this.el = document.querySelector(className);

    if (this.el == null || this.el == undefined) return;

    this.headerSelect = this.el.querySelector('.it-header__directions');
    this.headerDropdowList = this.el.querySelector(
      '.it-header__directions-dropdown-list'
    );
    this.headerDropdownItems = this.el.querySelectorAll(
      '.it-header__directions-dropdown-item'
    );
    this.headerDirectionsValue = this.el.querySelector(
      '.it-header__directions-value'
    );

    this.dropdown = this.el.querySelector('.listing-top__dropdown-list');
    this.vacancyCounter = this.el.querySelector('.listing-top__counter');
    this.dropdownContainer = this.el.querySelector(
      '.listing-top__dropdown-container'
    );
    this.dropdownItem = this.el.querySelectorAll(
      '.listing-top__dropdown-list-item-value'
    );

    this.currentDirection = this.el.querySelector('.listing-top__where');
    this.vacancyValue = '';

    // this.listingNewsSlider = new Swiper('.listingNewsSlider', {
    //   slidesPerView: 2.5,
    //   spaceBetween: 16,
    //   loop: true,
    //   breakpoints: {
    //     767: {
    //       slidesPerView: 2.7,
    //       spaceBetween: 30,
    //     },

    //     1024: {
    //       slidesPerView: 3.5,
    //       spaceBetween: 30,
    //     },
    //     1440: {
    //       slidesPerView: 3.7,
    //       spaceBetween: 40,
    //     },
    //     1600: {
    //       slidesPerView: 4,
    //       spaceBetween: 40,
    //     },
    //   },
    //   navigation: {
    //     nextEl: '.listing__news-btn-next',
    //     prevEl: '.listing__news-btn-prev',
    //   },
    // });

    // Слушатели событий
    this.headerSelect.addEventListener(
      'click',
      this.openOrCloseHeaderSelect.bind(this)
    );
    this.headerDropdownItems.forEach((item) =>
      item.addEventListener('click', this.closeHeaderSelect.bind(this))
    );
    this.headerDirectionsValue.textContent = `(${this.headerDropdownItems.length})`;

    this.init();
    this.selectDirection();
  }

  init() {
    this.el.addEventListener('click', listingClickHandler.bind(this));
  }

  openHeaderSelect() {
    if (this.headerSelect.dataset.name === 'closed') {
      this.headerDropdowList.classList.add(
        'it-header__directions-dropdown-list-active'
      );

      setTimeout(() => {
        this.headerSelect.dataset.name = 'opened';
      }, 50);
    }
  }

  closeHeaderSelect() {
    if (this.headerSelect === null || this.headerSelect === undefined) return;

    if (this.headerSelect.dataset.name === 'opened') {
      this.headerDropdowList.classList.remove(
        'it-header__directions-dropdown-list-active'
      );

      setTimeout(() => {
        this.headerSelect.dataset.name = 'closed';
      }, 50);
    }
  }

  openOrCloseHeaderSelect() {
    this.openHeaderSelect();
    this.closeHeaderSelect();
  }

  openDropdown() {
    this.dropdown.classList.remove('hide');
    this.dropdownContainer.classList.add(
      'listing-top__dropdown-container-active'
    );
  }

  closeDropdown() {
    this.dropdown.classList.add('hide');
    this.dropdownContainer.classList.remove(
      'listing-top__dropdown-container-active'
    );
  }

  selectDirection() {
    this.dropdownItem.forEach((item) => {
      item.addEventListener('click', (event) => {
        if (event.target === item) {
          this.vacancyValue = item.nextElementSibling.textContent;
          this.vacancyCounter.textContent = this.vacancyValue;
          this.currentDirection.firstElementChild.innerText = item.innerText;
          this.closeDropdown();
        }
      });
    });
  }
}

function listingClickHandler(event) {
  if (event.target.classList.contains('listing-top__where')) {
    this.openDropdown();
  }
}
