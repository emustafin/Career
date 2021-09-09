/*
* el - DOM узел для инициализации select
*
* activeClass, previewOption - необязательные параметры
*
* activeClass - строковое значение для изменения
* активного класса у самого select дефолтное значене "active-green"
*
* previewOption - строковое значение для options дефолтное
* значение preview-option
*
* */
export class Select {
  constructor(el, activeClass, previewOption) {
    this.el = el;
    if (this.el == null || undefined) return;

    this.activeClass = activeClass ?? 'active-green';
    this.previewOption = previewOption ?? 'preview-option';

    this.changeSelect = el.querySelector('.custom-select__change-select');
    this.list = el.querySelector('.custom-select__select-list');
    this.listItem = el.querySelectorAll('.custom-select__select-list-item');

    this.activeItem = this.listItem[0].dataset.value;

    this.init();
  }

  init() {
    this.changeSelect.onclick = this.handleClick.bind(this);
    this.listItem.forEach(el => {
      el.onclick = this.handleSelect.bind(this);
    });

    this.setActiveItem();
    this.handlePreview();
  }

  handleClick() {
    this.list.classList.toggle(this.activeClass);
    this.changeSelect.classList.toggle(`${this.changeSelect.classList[0]}_active`)
  }

  handleSelect(e) {
    this.changeSelect.innerText = e.currentTarget.innerText;
    this.list.classList.toggle(this.activeClass);
    this.setActiveItem();
    this.handlePreview();
  }

  handlePreview() {
    let prev;
    this.listItem.forEach(el => {if (el.dataset.value == this.activeItem) prev = el})
    this.list.querySelectorAll(`svg`).forEach(el => {
      el.classList.remove(this.previewOption);
    })
    prev.querySelector(`svg`).classList.toggle(this.previewOption);
  }

   setActiveItem() {
    this.listItem.forEach(el => {
      if (el.innerText == this.changeSelect.innerText) this.activeItem = el.dataset.value;
    });
  }

  get getActiveOption() {
    return this.activeItem;
  }
}
