export class Footer {
  constructor(className) {
    this.el = document.querySelector(className);
    this.emailAdress = this.el.querySelector('.footer__contact-mail');
    this.copyButton = this.el.querySelector('.footer__contact-button');
    this.vacancyCopyLink = document.querySelector('#copy_link');
    this.vacancyCopyLinkMobile = document.querySelector('.direct-link__header-head-copy-mobile');

    this.copyButton.addEventListener('click', this.copyEmailAdress.bind(this));
    if( undefined != this.vacancyCopyLink ){
      this.vacancyCopyLink.addEventListener('click', this.copyLink.bind(this));
    }
    if( this.vacancyCopyLinkMobile ){
      this.vacancyCopyLinkMobile.addEventListener('click', this.copyLink.bind(this));
    }
  }

  async copyEmailAdress() {
    const email = this.emailAdress.innerText;
    await navigator.clipboard.writeText(email);
  }
  
  async copyLink(event) {
    event.preventDefault();
    const link = document.URL;

    var dummy = document.createElement("textarea");
    document.body.appendChild(dummy);
    dummy.value = link;
    dummy.select();
    document.execCommand("copy");
    document.body.removeChild(dummy);
  }
}
