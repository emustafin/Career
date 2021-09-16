export class Form {
  constructor(el) {
    this.el = el;

    if (this.el == null || this.el == undefined) return;

    this.dropdownItems = this.el.querySelectorAll('form__dropdown-list-item');
    this.sideBar = this.el.querySelector('.form__side-bar');
    this.dropdowns = Array.from(this.el.querySelectorAll('.form__dropdown'));
    this.dropdownLists = Array.from(
      this.el.querySelectorAll('.form__dropdown-list')
    );
    this.sideBar = this.el.querySelector('.form__side-bar');
    this.mainContentBar = this.el.querySelector('.form__content');

    this.init();
    this.setHeightFormSideBar();
    this.resizeFormPage();
    this.setHeightFormPage();
  }

  init() {
    this.el.addEventListener('click', formClickHandler.bind(this));
  }

  closeForm() {
    this.sideBar.style.background = 'transparent';
    document.body.style.overflow = 'visible';

    setTimeout(() => {
      this.el.classList.remove('form-active');
    }, 300);
  }

  openDropdown(event) {
    this.closeDropdown();
    event.target.lastElementChild.classList.remove('hide');
  }

  closeDropdown() {
    this.dropdowns.forEach((dropdown) => {
      dropdown.lastElementChild.classList.add('hide');
    });
  }

  selectDropdownItem(event) {
    const currentDropdownItem = event.target;
    const selectedValue = currentDropdownItem.firstElementChild.innerText;
    const textField = currentDropdownItem.closest('.form__dropdown-list')
      .previousElementSibling.previousElementSibling;
    const checkIcon = currentDropdownItem.lastElementChild;
    const input = currentDropdownItem.closest(
      '.form__dropdown-list'
    ).previousElementSibling;

    textField.textContent = selectedValue;
    input.value = selectedValue;
    console.log(input);

    checkIcon.classList.add('form__dropdown-item-checked-active');

    setTimeout(() => {
      checkIcon.classList.remove('form__dropdown-item-checked-active');
      currentDropdownItem.closest('.form__dropdown-list').classList.add('hide');
    }, 50);
  }

  setHeightFormSideBar() {
    setTimeout(() => {
      this.sideBar.style.height = this.mainContentBar.clientHeight + 'px';
    }, 100);
  }

  setHeightFormPage() {
    if (this.mainContentBar.clientHeight > 1000) {
      this.mainContentBar.style.height = 'max-content';
    }
  }

  resizeFormPage() {
    window.addEventListener('resize', () => {
      this.setHeightFormSideBar();
    });
  }
}

function formClickHandler(event) {
  if (
    event.target.classList.contains('form__link-back') ||
    event.target.classList.contains('form__side-bar')
  ) {
    event.preventDefault();
    this.closeForm();
  }
  if (event.target.classList.contains('form__dropdown')) {
    this.openDropdown(event);
  }
  if (event.target.classList.contains('form__dropdown-list-item')) {
    this.selectDropdownItem(event);
  }
  if (
    event.target.closest('.form__content') &&
    !event.target.classList.contains('form__dropdown')
  ) {
    this.closeDropdown();
  }
}
