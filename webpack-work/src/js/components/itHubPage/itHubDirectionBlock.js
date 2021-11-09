export class ItHubDirectionBlock {
  constructor(className) {
    this.el = document.querySelector(className);

    if (this.el === null || this.el === undefined) return;

    this.tabSwichers = Array.from(
      this.el.querySelectorAll('.direction__direction-item')
    );
    this.activeSwicher = this.el.querySelector(
      '.direction__direction-item-active'
    );
    this.tabs = Array.from(this.el.querySelectorAll('.tab-item-content'));
    this.mobileSelectWrapper = this.el.querySelector(
      '.direction__select-container-mobile'
    );
    this.mobileSelectList = this.el.querySelector(
      '.direction__select-list-wrapper'
    );
    this.mobileSelectTextField = this.el.querySelector(
      '.direction__select-field'
    );
    this.selectListItems = Array.from(
      this.el.querySelectorAll('.direction__select-item ')
    );
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
        this.setActiveClassMenuItem(
          this.selectListItems,
          'direction__active-list-item'
        );
      });
    });

    this.selectListItems.forEach((item) => {
      item.addEventListener('click', (event) => {
        this.currentTabId = event.target.dataset.tabUid;
        this.setActiveClassMenuItem(
          this.tabSwichers,
          'direction__direction-item-active'
        );
        this.closeMobileSelect.bind(this);

        this.tabs.forEach((tab) => {
          tab.classList.add('tab-item-content-hidden');
        });
        this.showActiveTab();
      });
    });

    this.mobileSelectWrapper.addEventListener(
      'click',
      this.openOrCloseSelect.bind(this)
    );

    this.hideTabs();
    this.showActiveTab();
    this.setActiveClassMenuItem(
      this.selectListItems,
      'direction__active-list-item'
    );
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

  openOrCloseSelect() {
    this.mobileSelectList.classList.remove('hide');

    if (this.mobileSelectWrapper.dataset.name === 'open') {
      setTimeout(() => {
        this.mobileSelectList.classList.add('hide');
        this.mobileSelectWrapper.dataset.name = 'closed';
      }, 60);
    }

    setTimeout(() => {
      this.mobileSelectWrapper.dataset.name = 'open';
    }, 50);
  }

  closeMobileSelect() {
    if (
      this.mobileSelectWrapper === null ||
      this.mobileSelectWrapper === undefined
    )
      return;

    if (this.mobileSelectWrapper.dataset.name === 'open') {
      this.mobileSelectList.classList.add('hide');
      this.mobileSelectWrapper.dataset.name = 'closed';
    }
  }

  setActiveClassMenuItem(itemsList, className) {
    itemsList.forEach((item) => item.classList.remove(className));

    const activeMenuItem = itemsList.find(
      (item) => item.dataset.tabUid === this.currentTabId
    );

    activeMenuItem.classList.add(className);
    this.mobileSelectTextField.textContent = activeMenuItem.dataset.value;

    if (activeMenuItem.classList.contains('direction__direction-item')) {
      this.mobileSelectTextField.textContent =
        activeMenuItem.firstElementChild.textContent;
    }
  }
}
