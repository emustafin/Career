/*
 * el - вызывает событие (DOM узел) | срока для поисмка DOM узела
 * scrollTo- скролит до данного эллемента (DOM узел) | срока для поисмка DOM узела
 * parmScroll - bool значение
 *   false - прокрутка до нижней границы
 *   true - прокрутка верхней границы (дефолтное значение)
 * */

// export class ScrollTo {
//   constructor(el, scrollTo, parmScroll = true) {
//     this.el = el;
//     this.scrollTo = scrollTo;
//     this.paraScroll = parmScroll;

//     this.init();
//     this.el.onclick = this.handleClick.bind(this);
//   }

//   init() {
//     if (typeof(this.el) == "string")
//       this.el = document.querySelector(`${this.el}`);

//     if (typeof(this.scrollTo) == "string")
//       this.scrollTo = document.querySelector(`${this.scrollTo}`);

//     if ((this.el == null || undefined) || (this.scrollTo == null || undefined))
//       return console.error("Присутсвуют не все входные классы у эллемента");
//   }

//   handleClick () {
//     const yOffset = -10;
//     const y = this.scrollTo.getBoundingClientRect().top + window.pageYOffset + yOffset;
//     window.scrollTo({top: y, behavior: 'smooth'})

//   }
// }
