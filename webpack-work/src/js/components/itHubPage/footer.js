export class Footer {
  constructor(className) {
    this.el = document.querySelector(className);
    this.emailAdress = this.el.querySelector('.footer__contact-mail');
    this.copyButton = this.el.querySelector('.footer__contact-button');

    this.copyButton.addEventListener('click', this.copyEmailAdress.bind(this));
  }

  async copyEmailAdress() {
    const email = this.emailAdress.innerText;
    await navigator.clipboard.writeText(email);
  }
}
