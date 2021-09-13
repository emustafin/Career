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
