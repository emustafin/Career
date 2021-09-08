/*
 # tab-content - внешняя обёртка для всех табов

 # tab-list - список табов необходимо указать
 данный класс в разметке на контейнер который
 содержит переключатели

 # tab-item-content - контейнер необходимый для
 содержания табов
 direction__direction-item-active

 # tab-choice - отображение выбранного таба

 # data-tab-uid - data атрибут по которому осуществляется переключение
*/
export class Tab {
  constructor(el, activeClass) {
    this.el = el;
    if (this.el == null || undefined) return;
    this.activeClass = activeClass
    this.tabList = el.querySelector('.tab-list');
    this.tabChoice  = el.querySelector('.tab-choice');
    this.tabItemContent = el.querySelectorAll('.tab-item-content');

    this.init();
    this.tabList.querySelectorAll('.tab-list-item').forEach(el => {
      el.onclick = this.handleClick.bind(this);
    });
  }

  init() {
    this.tabList.querySelector('.tab-list-item').classList.add(this.activeClass);
    this.tabItemContent.forEach((el, i) => {
      // if (el.dataset.tabUid == 1) el.style.display = 'block';
      // else el.style.display = 'none';
      if (i == 0) el.style.display = 'block';
      else el.style.display = 'none';
    });
  }

  handleClick(e) {
    this.tabList.querySelectorAll('.tab-list-item').forEach(el => {
      el.classList.remove(this.activeClass);
    })
    e.currentTarget.classList.add(this.activeClass);

    this.tabItemContent.forEach(el => {
      if (el.dataset.tabUid == e.currentTarget.dataset.tabUid) el.style.display = 'block';
      else el.style.display = 'none';
    });
  }
}
