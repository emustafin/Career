export class ItHubRunningLineBlock {
  constructor(className) {
    this.el = document.querySelector(className);

    if (this.el == null || this.el == undefined) return;

    this.runningLine = this.el.querySelector('.find__title-link');
    this.runningLineItemWidth;
    this.offset = 0;

    this.moveRunningLine();
    this.monitoringChatchingLinkWidth();
  }

  moveRunningLine() {
    document.addEventListener('DOMContentLoaded', () => {
      this.runningLineItemWidth = this.runningLine.lastElementChild.clientWidth;

      this.manageSpeedLine(1, 1);
    });
  }

  moveFirstElementToEnd(line) {
    line.lastElementChild.prepend();
  }

  manageSpeedLine(offset, speed) {
    setInterval(() => {
      this.offset += offset;
      this.runningLine.style.transform = `translateX(${this.offset}px)`;

      if (this.offset >= this.runningLineItemWidth) {
        this.moveFirstElementToEnd(this.runningLine);
        this.offset = 0;
      }
    }, speed);
  }

  monitoringChatchingLinkWidth() {
    window.addEventListener('resize', () => {
      if (window.innerWidth > 1600) {
        this.runningLineItemWidth = 1418;
      } else if (window.innerWidth > 1280 && window.innerWidth < 1600) {
        this.runningLineItemWidth = 1143;
      } else if (window.innerWidth > 760 && window.innerWidth < 1280) {
        this.runningLineItemWidth = 778;
      } else {
        this.runningLineItemWidth = 326;
      }
    });
  }
}
