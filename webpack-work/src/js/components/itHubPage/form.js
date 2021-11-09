export class Form {
  constructor(className) {
    this.el = document.querySelector(className);

    if (this.el == null || this.el == undefined) return;

    this.dropdownItems = this.el.querySelectorAll('form__dropdown-list-item');
    this.sideBar = this.el.querySelector('.form__side-bar');
    this.dropdowns = Array.from(this.el.querySelectorAll('.form__dropdown'));
    this.dropdownLists = Array.from(
      this.el.querySelectorAll('.form__dropdown-list')
    );
    this.sideBar = this.el.querySelector('.form__side-bar');
    this.mainContentBar = this.el.querySelector('.form__content');
    this.input1 = this.el.querySelector('.form__value1');
    this.input2 = this.el.querySelector('.form__value2');
    this.formCitySelect = this.el.querySelector(
      'input[name=tags-select-mode].form__city-select'
    );
    this.formDirectionSelect = this.el.querySelector(
      'input[name=tags-select-mode].form__direction-select'
    );
    this.formSpezialisationSelect = this.el.querySelector(
      'input[name=tags-select-mode].form__spezialisation-select'
    );

    // Инициализация селекта Тагифай в анкете. Поле "Город"
    // this.citySelect = new Tagify(this.formCitySelect, {
    //   enforceWhitelist: true,
    //   mode: 'select',
    //   whitelist: ['Москва', 'Санкт-Петербург', 'Ростов-на-Дону'],
    //   userInput: false,
    // });

    // Инициализация селекта Тагифай в анкете. Поле "Направление"
    // this.directionSelect = new Tagify(this.formDirectionSelect, {
    //   enforceWhitelist: true,
    //   mode: 'select',
    //   whitelist: [
    //     'IT-департамент',
    //     'Розничные магазины',
    //     'Центральный офиc',
    //     'Сервис и логистика',
    //     'Студентам',
    //   ],
    //   userInput: false,
    // });

    // Инициализация селекта Тагифай в анкете. Поле "Специализация"
    // this.spezialisationSelect = new Tagify(this.formSpezialisationSelect, {
    //   enforceWhitelist: true,
    //   mode: 'select',
    //   whitelist: [
    //     'Java',
    //     'Product manager',
    //     'Project manager',
    //     'QA',
    //     'Аналитика',
    //   ],
    //   userInput: false,
    // });

    this.init();
  }

  init() {
    this.el.addEventListener('click', formClickHandler.bind(this));
  }

  closeForm() {
    this.sideBar.style.background = 'transparent';

    setTimeout(() => {
      document.body.style.overflow = 'visible';
    }, 270);

    setTimeout(() => {
      this.el.classList.remove('form-active');
    }, 300);
  }

  // openDropdown(event) {
  //   this.closeDropdown();
  //   event.target.lastElementChild.classList.remove('hide');
  // }

  // closeDropdown() {
  //   this.dropdowns.forEach((dropdown) => {
  //     dropdown.lastElementChild.classList.add('hide');
  //   });
  // }

  // selectDropdownItem(event) {
  //   const currentDropdownItem = event.target;
  //   const selectedValue = currentDropdownItem.firstElementChild.innerText;
  //   const textField = currentDropdownItem.closest('.form__dropdown-list')
  //     .previousElementSibling.previousElementSibling;
  //   const checkIcon = currentDropdownItem.lastElementChild;

  //   textField.textContent = selectedValue;

  //   if (
  //     currentDropdownItem.closest('.form__form-name').firstElementChild
  //       .textContent === 'Направление'
  //   ) {
  //     this.input1.value = selectedValue;
  //   }

  //   if (
  //     currentDropdownItem.closest('.form__form-name').firstElementChild
  //       .textContent === 'Специализация'
  //   ) {
  //     this.input2.value = selectedValue;
  //   }

  //   checkIcon.classList.add('form__dropdown-item-checked-active');

  //   setTimeout(() => {
  //     checkIcon.classList.remove('form__dropdown-item-checked-active');
  //     currentDropdownItem.closest('.form__dropdown-list').classList.add('hide');
  //   }, 50);
  // }
}

function formClickHandler(event) {
  if (
    event.target.classList.contains('form__link-back') ||
    event.target.classList.contains('form__side-bar')
  ) {
    event.preventDefault();
    this.closeForm();
  }
  // if (event.target.classList.contains('form__dropdown')) {
  //   this.openDropdown(event);
  // }
  // if (event.target.classList.contains('form__dropdown-list-item')) {
  //   this.selectDropdownItem(event);
  // }
  // if (
  //   event.target.closest('.form__content') &&
  //   !event.target.classList.contains('form__dropdown')
  // ) {
  //   this.closeDropdown();
  // }
}
