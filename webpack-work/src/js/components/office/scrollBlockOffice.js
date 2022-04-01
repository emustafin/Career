import { SmothScrollingToTargetBlock } from '../../helpers/smoothScrolling';
export class scrollBlockOffice {
  constructor(className) {
    this.el = document.querySelector(className);

    if (!this.el) return;

    this.scrollButton = this.el.querySelector('.office__button');
    this.header = document.querySelector('.it-header');
    this.targetBlock = document.querySelector('.logistic__why-we-are');
    this.smothScroll = new SmothScrollingToTargetBlock(
      this.targetBlock,
      this.header
    );

    this.scrollButton.addEventListener(
      'click',
      this.smothScroll.scrollToTargetBlock.bind(this)
    );
  }
}
