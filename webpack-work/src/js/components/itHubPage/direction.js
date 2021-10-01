export class Direction {
  constructor(el) {
    this.el = el;

    if (this.el === null || this.el === undefined) return;

    this.tabSwichers = this.el.querySelectorAll('.direction__direction-item');
    this.activeSwicher = this.el.querySelector(
      '.direction__direction-item-active'
    );
    this.tabs = Array.from(this.el.querySelectorAll('.tab-item-content'));
    this.currentTabId = this.activeSwicher.dataset.tabUid;

    this.tabs.forEach((tab) => tab.classList.add('tab-item-content-hidden'));

    this.tabSwichers.forEach((item) => {
      item.addEventListener('click', () => {
        this.tabSwichers.forEach((item) =>
          item.classList.remove('direction__direction-item-active')
        );

        item.classList.add('direction__direction-item-active');
        this.currentTabId = item.dataset.tabUid;
        this.tabs.forEach((tab) => {
          tab.classList.add('tab-item-content-hidden');
        });
        this.showActiveTab();
      });
    });

    this.hideTabs();
    this.showActiveTab();
  }

  showActiveTab() {
    const activeTab = this.tabs.find(
      (tab) => tab.dataset.tabUid === this.currentTabId
    );

    setTimeout(() => {
      this.hideTabs();
      activeTab.style.display = 'block';
    }, 300);

    setTimeout(() => {
      activeTab.classList.remove('tab-item-content-hidden');
    }, 350);
  }

  hideTabs() {
    this.tabs.forEach((tab) => (tab.style.display = 'none'));
  }
}
