export class CustomSelectInProfessionBlock {
  constructor(el) {
    this.el = el;

    if (this.el === null || this.el === undefined) return;

    this.levelInput = this.el.querySelector(
      'input[name=tags-disabled-user-input]'
    );
    this.cityInput = this.el.querySelector(
      'input[name="input-custom-dropdown"]'
    );

    // Инициализация селекта выбора уровня
    // new Tagify(this.levelInput, {
    //   whitelist: ['Junior', 'Middle', 'Senior'],
    //   userInput: false,
    //   maxTags: 1,
    // });

    // Инициализация селекта выбора города
    // new Tagify(this.cityInput, {
    //   whitelist: ['Москва', 'Cанкт-Петербург', 'Ростов-на-Дону'],
    //   maxTags: 1,
    //   dropdown: {
    //     maxItems: 10, // <- Максимальное число элементов в Dropdown
    //     classname: 'tags-look', // <- custom classname for this dropdown, so it could be targeted
    //     enabled: 0, // <- show suggestions on focus
    //     closeOnSelect: true, // <- do not hide the suggestions dropdown once an item has been selected
    //   },
    // });
  }
}
