export class RetailUpgradeBlock {
    constructor(className) {
      this.el = document.querySelector(className);
  
      if (!this.el) return;
  
      this.mvideoFromRetailUpgrade = Array.from(
        this.el.querySelectorAll('.mvideo')
      );
      this.eldoradoFromRetailUpgrade = Array.from(
        this.el.querySelectorAll('.eldorado')
      );
    }
  }
  