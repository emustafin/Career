import { SmothScrollingToTargetBlock } from '../../helpers/smoothScrolling';
export class CreateRetailFutureComponent {
  constructor(className) {
    this.el = document.querySelector(className);

    if (!this.el) return;

    this.scrollButton = this.el.querySelector('.retail__preview-button');
    this.header = document.querySelector('.it-header');
    this.targetBlock = document.querySelector('.brands');
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
