export class ItHubPageCustomSelectInProfessionBlock {
  constructor(className) {
    this.el = document.querySelector(className);

    if (this.el === null || this.el === undefined) return;

    this.levelInput = this.el.querySelector(
      'input[name="tags-select-mode"].profession__level-select'
    );
    this.cityInput = this.el.querySelector(
      'input[name="tags-select-mode"].profession__city-select'
    );

    // Инициализация селекта выбора уровня
    // new Tagify(this.levelInput, {
    //   enforceWhitelist: true,
    //   mode: 'select',
    //   whitelist: ['Junior', 'Middle', 'Senior'],
    //   userInput: false,
    // });

    // Инициализация селекта выбора города
    // new Tagify(this.cityInput, {
    //   enforceWhitelist: true,
    //   mode: 'select',
    //   whitelist: ['Москва', 'Cанкт-Петербург', 'Ростов-на-Дону'],
    //   userInput: false,
    // });
  }
}
