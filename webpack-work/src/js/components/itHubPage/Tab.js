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
// export class Tab {
//   constructor(el, activeClass) {
//     this.el = el;
//     if ((this.el == null || undefined)) return;
//     this.activeClass = activeClass
//     this.tabList = el.querySelector('.tab-list');
//     this.tabChoice  = el.querySelector('.tab-choice');
//     this.tabItemContent = el.querySelectorAll('.tab-item-content');
//
//     this.init();
//     this.tabList.querySelectorAll('.tab-list-item').forEach(el => {
//       el.onclick = this.handleClick.bind(this);
//     });
//   }
//
//   init() {
//     this.tabList.querySelector('.tab-list-item').classList.add(this.activeClass);
//     this.tabItemContent.forEach((el, i) => {
//       if (i == 0) el.style.display = 'block';
//       else el.style.display = 'none';
//     });
//   }
//
//   handleClick(e) {
//     this.tabList.querySelectorAll('.tab-list-item').forEach(el => {
//       el.classList.remove(this.activeClass);
//     })
//     e.currentTarget.classList.add(this.activeClass);
//
//     this.tabItemContent.forEach(el => {
//       if (el.dataset.tabUid == e.currentTarget.dataset.tabUid) el.style.display = 'block';
//       else el.style.display = 'none';
//     });
//   }
// }




//
// const tabContainer = document.querySelector('.tab-content');
// new Tab(tabContainer, 'direction__direction-item-active', document.getElementById('tab-list__select'));

/*
  el - entri point for weap/container tabs content
  controller - DOM knot whith the carries out control ower el
  activeClass - toggl class for active elTab
 */

export class Tab {
  constructor(el, controller, activeClass) {
    if ((el == null || undefined) || (controller == null || undefined)) return;

    this.el = el;
    this.controller = controller;
    this.activeClass = activeClass ?? 'item-active';

    this.contentList = this.el.querySelectorAll('.tab-item-content');

    this.init();
  }

  init () {
    console.log(this.controller);
    this.contentList.forEach((el, i) => {
      if (i == 0) el.style.display = 'block';
      else el.style.display = 'none';
    });

    this.controller.querySelector('.tab-list-item').classList.add(this.activeClass);
    this.controller.querySelectorAll('.tab-list-item').forEach(el => {
      el.addEventListener('click', this.handleClick.bind(this))
    })
  }

  handleClick(e) {
    this.controller.querySelectorAll('.tab-list-item').forEach(el => {
      el.classList.remove(this.activeClass);
    });
    e.currentTarget.classList.add(this.activeClass);

    this.el.querySelectorAll('.tab-item-content').forEach(el => {
      if (el.dataset.tabUid == e.currentTarget.dataset.tabUid) el.style.display = 'block';
      else el.style.display = 'none';
    });
  }
};

const tabContainer = document.getElementById('tab-content');
let tabController;
window.addEventListener('load', () => {
  let activClass = 'direction__direction-item-active';
  if (window.screen.availWidth <= 768) {
    activClass = 'active-green'
    tabController = document.getElementById('custom-select-first');
  } else {
    document.getElementById('custom-select-first').classList.add('hide');
    tabController = document.getElementById('tabController')
  }
  new Tab(tabContainer, tabController, activClass);

})
