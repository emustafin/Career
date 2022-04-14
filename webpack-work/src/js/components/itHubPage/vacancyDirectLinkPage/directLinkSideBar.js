import { smothScrollingToBlock } from '../../../index';
import { vacancyDirectLinkHeader } from '../../../index';
import { headerItPage } from '../../../index';
import { VacancyDirecLinkMainContent } from './vacancyDirectLinkMainContent';
import { vacancyDirectLinkMainContent } from '../../../index';

export class VacancyDirecLinkSideBar {
  constructor(className) {
    this.el = document.querySelector(className);

    if (this.el === null || this.el === undefined) return;

    this.contentBar = new VacancyDirecLinkMainContent(
      vacancyDirectLinkMainContent
    );

    this.form = this.contentBar.form;
    this.sideBarResponseButton = this.el.querySelector(
      '.direct-link__vacancy-link'
    );
    this.contentBarResponseButton = this.contentBar.contentResponseButton;
    this.contentBarFormBlock = this.contentBar.form;
    this.copyLinkButtonMobile = this.contentBar.copyLinkButtonMobile;
    this.header = vacancyDirectLinkHeader || headerItPage;

    // Обработчики событий
    this.sideBarResponseButton.addEventListener(
      'click',
      this.scrollToForm.bind(this)
    );
    window.addEventListener('scroll', this.manageSideBar.bind(this));
    window.addEventListener('resize', this.monitorScreenWidth.bind(this));
  }
  scrollToForm(event) {
    event.preventDefault();
    smothScrollingToBlock(this.form, this.header);
  }

  manageSideBar() {
    if (window.innerWidth > 990) {
      window.pageYOffset >= this.contentBarResponseButton.offsetTop
        ? (this.sideBarResponseButton.style.opacity = '1')
        : (this.sideBarResponseButton.style.opacity = '0');

      // window.pageYOffset >= this.form.offsetTop
      //   ? this.hideSideBar()
      //   : this.showSideBar();
    }
  }

  // hideSideBar() {
  //   this.el.style.opacity = '0';

  //   setTimeout(() => (this.el.style.display = 'none'), 300);
  // }

  // showSideBar() {
  //   this.el.style.display = 'block';

  //   setTimeout(() => (this.el.style.opacity = '1'), 50);
  // }

  monitorScreenWidth() {
    // window.innerWidth > 990 ? this.showSideBar() : this.hideSideBar();
  }
}
