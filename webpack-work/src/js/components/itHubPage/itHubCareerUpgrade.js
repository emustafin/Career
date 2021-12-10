export class ItHubPageCareerUpgradeBlock {
  constructor(className) {
    this.el = document.querySelector(className);

    if (this.el == null || this.el == undefined) return;

    let sliders = document.getElementsByClassName('slider');

    this.init(sliders);
  }

  init(sliders) {

    var slidersList = [];
    
    for (let i = 0; i < sliders.length; i++){ //получаем все элементы слайдера из родильского компонента slider-nav__dev 

      function Slider(slider){
          this.id = slider.id;
          this.item = slider;
          this.transitionActive = true;
          this.itemList = [];
          this.conteinerGet = (id) => {
              let conteiner;
                  for (let j = 0; j < id.childElementCount; j++){
                      for (let h = 0; h < id.children[j].classList.length; h++){
                          if (id.children[j].classList[h] == 'slider__list'){
                              conteiner = id.children[j];
                          }
                      }
                  }
              return conteiner;
          }
          this.conteiner = this.conteinerGet(this.item);
          this.itemCount = this.conteiner.childElementCount;
          this.lastElementId = this.itemCount - 1;
          this.firstItem = this.conteiner.children[0];
          this.lastItem = this.conteiner.children[this.lastElementId];
          this.firstItemClone = this.firstItem.cloneNode(true);
          this.lastItemClone = this.lastItem.cloneNode(true);
          this.cheakItemCount = () => {
              return this.itemCount > 1;
          }
          this.addItemList = () => {
              this.conteiner.prepend(this.lastItemClone);
              this.conteiner.append(this.firstItemClone);
              this.itemCount = this.conteiner.childElementCount;
              this.firstItem = this.conteiner.children[1];
          }

          (this.cheakItemCount()) ? this.addItemList() : null;	

          for (let j = 0 ; j < this.itemCount; j++) {
                  this.itemList.push({
                      id: j,
                      item :  this.conteiner.children[j],
                      position: 0,
                      active: j == 1
                  });
          }

          this.disabled = () => {
              let sliderButtons = this.item.getElementsByClassName('slider__btn'); //кнопки
              let sliderButtonsCount = sliderButtons.length; //количество кнопок 
              if (sliderButtons != undefined){
                  for (let j = 0; j < sliderButtonsCount; j++ ){
                      let sliderButtonActive = sliderButtons[j];
                      sliderButtonActive.style.opacity = 0.5;
                      sliderButtonActive.style.cursor = 'not-allowed';
                  }
              }
          }

          this.resizeItem = () => {
              if ( this.itemList.find(active => active.active == true) != undefined){
                  let sliderItemResizeId = this.itemList.find(active => active.active == true).id;
                  let sliderResizeActiveItem = this.itemList.find(active => active.active == true).item;
                  for (let j = 0; j < this.itemList.length; j++){
                      let sliderItemActive = 	this.itemList[j];
                      sliderItemActive.position = sliderResizeActiveItem.offsetWidth * sliderItemResizeId;
                      sliderItemActive.item.style.transform = 'translateX(' + sliderItemActive.position*-1 + 'px)';
                      sliderItemActive.item.style.transition = 'none';
                      this.conteiner.style.height = sliderResizeActiveItem.offsetHeight + 'px';
                  }
              } 
          }

          this.addListenerResize = () => {
              window.addEventListener('resize', function(){
                  for (let i = 0; i < slidersList.length; i++ ){
                      slidersList[i].resizeItem();
                  }
              });
          }

          this.startInitialization = () => {
              this.addListenerResize();
              this.addListenerTouch();
              this.addButton();
              window.addEventListener('load', () =>{
                  this.resizeItem();
              })
              
          }

          this.addButton = () => {
              let sliderButtons = this.item.getElementsByClassName('slider__btn'); //кнопки
              let sliderButtonsCount = sliderButtons.length; //количество кнопок 
              if (sliderButtons != undefined){
                  for (let j = 0; j < sliderButtonsCount; j++ ){
                      let sliderButtonActive = sliderButtons[j];
                      let sliderButtonSide = sliderButtonActive.getAttribute('data-slider-side');
                      sliderButtonActive.addEventListener('click', (e) => {
                          let sliderButtonActive = e.target;
                          cheakTargetIsButton();
                          function cheakTargetIsButton() {
                              if (sliderButtonActive.classList.contains('slider__btn')){
                                  return;
                              }else{
                                  sliderButtonActive = sliderButtonActive.parentElement
                                  cheakTargetIsButton();
                              }
                          }
                          let slidersId = sliderButtonActive.getAttribute('data-slider-id').split(' ');
                          let slidersIdCount = slidersId.length;
                          for (let h = 0; h < slidersIdCount; h++){
                              (sliderButtonSide == 'left') ? this.startMoveLeft(slidersId[h]): this.startMoveRight(slidersId[h]);
                          }
                      });
                  }
              }
          }

          this.addListenerTouch = () => {
              let touchStart;
              let touchStop;
              this.item.addEventListener('touchstart', (e) => {
                  touchStart = e.touches[0].screenX;
              });
          
              this.item.addEventListener('touchmove', (e) => {
                  touchStop = e.touches[0].screenX;
              });
          
              this.item.addEventListener('touchend', (e) => {
                  let startMove = (side) => {
                      let slidersId = this.item.getAttribute('data-slider-id');
                      if (slidersId != undefined){
                          slidersId = slidersId.split(' ');
                          let slidersIdCount = slidersId.length;
                          for (let h = 0; h < slidersIdCount; h++){
                              (side == 'right') ?  this.startMoveRight(slidersId[h]) : this.startMoveLeft(slidersId[h]);
                          }
                      } 
                  }	
                  if (touchStart < touchStop && (touchStart - touchStop) < -50){
                      startMove('right');
                  } else if (touchStart > touchStop && (touchStart - touchStop) > 50){
                      startMove('left');
                  }	
              });
          
          }
          this.startMoveLeft = (item) =>{
              let lastSliderActiveItem;
              let slider = slidersList.find(id => id.id == item);
              let sliderListConteiner =  slidersList.find(id => id.id == item).conteiner; // Контейнер элементов слайдера
              let sliderListContCount =  sliderListConteiner.childElementCount; // колличество элементов слайдера
              let sliderItemList = slidersList.find(id => id.id == item).itemList;  // Элементы слайдера
                  for (let i = 0; i < sliderListContCount; i++){
                      let sliderItem = sliderItemList[i];
                      if (sliderItem.active == true){
                          if (i == sliderListContCount-2){
                              sliderItem.active = false;
                              for (let j = 0; j < sliderListContCount; j++){
                                  let sliderItem = sliderItemList[j];
                                  let sliderMaxPosition;
                                  sliderItem.position = sliderItem.position + sliderItemList[0].item.offsetWidth;
                                  if (slider.transitionActive){
                                      sliderMaxPosition = sliderItem.position;
                                  }
                                  sliderItem.item.style.transform = 'translateX(' + sliderItem.position*-1 + 'px)';
                                  sliderItem.item.style.transition = '';
                                  if (j == sliderListContCount-1){
                                      let listenerTransition = () =>{
                                          if (slider.transitionActive != false){ 
                                              let listenerInterval = setInterval(() =>{
                                                  slider.transitionActive = false;
                                                  let sliderTransition = getComputedStyle(sliderItem.item).transform.split(',');
                                                  let sliderTransitionLeft = JSON.parse(sliderTransition[4]) * -1;
                                                  if (sliderTransitionLeft >= sliderMaxPosition){
                                                      for (let h = 0; h < sliderListContCount; h++){
                                                          let sliderItem = sliderItemList[h]; 
                                                          sliderItem.position = sliderItemList[0].item.offsetWidth;
                                                          sliderItem.item.style.transform = 'translateX(' + sliderItem.position*-1 + 'px)';
                                                          sliderItem.item.style.transition = 'none';
                                                          sliderItem.item.removeEventListener('transitionstart', listenerTransition);
                                                          slider.transitionActive = true; 
                                                          window.clearInterval(listenerInterval)
                                                      }
                                                  }
                                              },1);
                                          }
                                      }
                                      sliderItem.item.addEventListener('transitionstart', listenerTransition);
                                  } 
                                  if (j == 1){
                                      let sliderItem = sliderItemList[j];
                                      let sliderActiveHeight = sliderItem.item.offsetHeight + 'px';
                                      sliderItem.active = true;
                                      sliderListConteiner.style.height = sliderActiveHeight;
                                  }
                              }
                              break;
                          } else {
                              if (slider.transitionActive){
                                  sliderItem.active = false;
                                  sliderItem.position = sliderItem.position + sliderItemList[0].item.offsetWidth ;
                                  sliderItem.item.style.transform = 'translateX(' + sliderItem.position*-1 + 'px)'
                                  sliderItem.item.style.transition = '';
                                  lastSliderActiveItem = i;
                              }
                          }
                      } else if (lastSliderActiveItem + 1 == i){
                          if (slider.transitionActive){
                              let sliderActiveHeight = sliderItem.item.offsetHeight + 'px';
                              sliderItem.active = true;
                              sliderItem.position = sliderItem.position + sliderItemList[0].item.offsetWidth;
                              sliderItem.item.style.transform = 'translateX(' + sliderItem.position*-1 + 'px)';
                              sliderItem.item.style.transition = '';
                              sliderListConteiner.style.height = sliderActiveHeight;
                          }
                      } else {
                          if (slider.transitionActive){
                              sliderItem.position = sliderItem.position + sliderItemList[0].item.offsetWidth;
                              sliderItem.item.style.transform = 'translateX(' + sliderItem.position*-1 + 'px)';
                              sliderItem.item.style.transition = '';
                          }
                      }
                  }
          }
          this.startMoveRight = (item) => {
              let lastSliderActiveItem;
              let slider = slidersList.find(id => id.id == item);
              let sliderListConteiner =  slidersList.find(id => id.id == item).conteiner; // Контейнер элементов слайдера
              let sliderListContCount =  sliderListConteiner.childElementCount; // колличество элементов слайдера
              let sliderItemList = slidersList.find(id => id.id == item).itemList;  // Элементы слайдера 
                  for ( let i= 0 ; i < sliderListContCount; i++){
                      let sliderItem = sliderItemList[i]; // Текущий элемент слайдера
                      if (sliderItem.active == true){
                          if (i == 1){
                              sliderItem.active = false;
                              for ( let j = 0 ; j < sliderListContCount; j++){
                                  let sliderItem = sliderItemList[j];
                                  let sliderMaxPosition;
                                  sliderItem.position = 0;
                                  if (slider.transitionActive){
                                      sliderMaxPosition = sliderItem.position;
                                  }
                                  sliderItem.item.style.transform = 'translateX(' + sliderItem.position*-1 + 'px)';
                                  sliderItem.item.style.transition = '';
                                  if (j == sliderListContCount-2){
                                      let sliderActiveHeight = sliderItem.item.offsetHeight + 'px';
                                      sliderItem.active = true;
                                      sliderListConteiner.style.height = sliderActiveHeight;
                                      let listenerTransition = () =>{
                                          if (slider.transitionActive != false){ 
                                              let listenerInterval = setInterval(() =>{
                                                  slider.transitionActive = false;
                                                  let sliderTransition = getComputedStyle(sliderItem.item).transform.split(',');
                                                  let sliderTransitionLeft = JSON.parse(sliderTransition[4]) * -1;
                                                  if (sliderTransitionLeft == sliderMaxPosition){
                                                      for (let h = 0; h < sliderListContCount; h++){
                                                          let sliderItem = sliderItemList[h];
                                                          sliderItem.position = sliderItemList[0].item.offsetWidth*(sliderListContCount-2);
                                                          sliderItem.item.style.transform = 'translateX(' + sliderItem.position*-1 + 'px)';
                                                          sliderItem.item.style.transition = 'none';
                                                          sliderItem.item.removeEventListener('transitionstart', listenerTransition);
                                                          slider.transitionActive = true; 
                                                          window.clearInterval(listenerInterval)
                                                      }
                                                  }
                                              },1);
                                          }
                                      }
                                      sliderItem.item.addEventListener('transitionstart', listenerTransition);
                                  }
                              }
                              break;
                          } else {
                              if (slider.transitionActive){
                                  sliderItem.active = false;
                                  lastSliderActiveItem = i;

                                  
                                  for (let j = 0 ; j < sliderListContCount; j++){
                                      let sliderItem = sliderItemList[j];
                                      if (lastSliderActiveItem - 1 == j){
                                          let sliderActiveHeight = sliderItem.item.offsetHeight + 'px';
                                          sliderItem.active = true;
                                          sliderListConteiner.style.height = sliderActiveHeight;
                                          sliderItem.position = sliderItem.position - sliderItemList[0].item.offsetWidth;
                                          sliderItem.item.style.transform = 'translateX(' + sliderItem.position*-1 + 'px)';
                                          sliderItem.item.style.transition = '';
                  
                                      }else{
                                          sliderItem.position = sliderItem.position - sliderItemList[0].item.offsetWidth;
                                          sliderItem.item.style.transform = 'translateX(' + sliderItem.position*-1 + 'px)';
                                          sliderItem.item.style.transition = '';
                                      }
                                  }
                                  break;
                              }
                          }
                      }
                  }
          }
          (this.cheakItemCount()) ? this.startInitialization() : this.disabled();
      }
      slidersList.push(new Slider(sliders[i]));
    }
  }
}