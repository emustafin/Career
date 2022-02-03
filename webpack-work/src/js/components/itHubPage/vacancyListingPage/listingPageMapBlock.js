export class ListingVacancyMapBlock {
  constructor(mapBlockClassName, listBlockClassName, viewSwitcher) {
    this.mapBlock = document.querySelector(mapBlockClassName);
    this.listBlock = document.querySelector(listBlockClassName);
    this.mapToListSwitcherContainer = document.querySelector(viewSwitcher);

    if (!this.mapBlock && !this.listBlock && !this.mapToListSwitcherContainer)
      return;

    this.shopsListContainer = this.mapBlock.querySelector(
      '.isting-metro__shops-list-container'
    );
    this.vacanciesInShopContainer = this.mapBlock.querySelector(
      '.isting-metro__single-shop-container'
    );
    this.shopListMVideo = this.mapBlock.querySelectorAll(
      '.listing-metro__shops-list.mvideo > .listing-metro__shop'
    );

    this.shopListEldorado = this.mapBlock.querySelectorAll(
      '.listing-metro__shops-list.eldorado > .listing-metro__shop'
    );

    if (!this.mapBlock && !this.listBlock && !this.mapToListSwitcher) return;

    this.switchingButtons = this.mapToListSwitcherContainer.querySelectorAll(
      '.listing-top__filter-list-item'
    );
    this.mvideoInput = document.querySelector('.mvideo-input');
    this.eldoradoInput = document.querySelector('.eldorado-input');

    this.mvideoBrand = this.mapBlock.querySelectorAll('.mvideo');
    this.eldoradoBrand = this.mapBlock.querySelectorAll('.eldorado');
    this.buttonBackToShopsList = this.mapBlock.querySelector(
      '.listing-metro__link-to-shops'
    );
    this.buttonBackToShopsListMobile = this.mapBlock.querySelector(
      '.listing-metro__link-to-shops-mobile'
    );

    this.switchingButtons.forEach((button) => {
      button.addEventListener('click', () => {
        this.clearActiveClass(
          this.switchingButtons,
          'listing-top__filter-list-item-active'
        );
        button.classList.add('listing-top__filter-list-item-active');

        button.dataset.name === 'list'
          ? this.showVacanciesList()
          : this.showVacanciesOnMap();
      });
    });

    this.mvideoInput.addEventListener( 'click', (event) => {

      if ( this.mvideoInput.checked == false && this.eldoradoInput.checked == false ) {

        event.preventDefault();
        return false;
      }

      this.eldoradoInput.checked == false;
      
      this.driverCheckbox()

    });

    this.eldoradoInput.addEventListener( 'click', (event) => {

      if ( this.eldoradoInput.checked == false && this.mvideoInput.checked == false ) {

        event.preventDefault();
        return false;
      }

      this.mvideoInput.checked == false;

      this.driverCheckbox()

    });

    this.shopListMVideo.forEach((shop) => {
      shop.addEventListener('click', () => {

        document.querySelector('.listing-metro__location-place').innerHTML = shop.querySelector('.listing-metro__shop-title').innerHTML;
        document.querySelector('.listing-metro__location-adress').innerHTML = shop.querySelector('.listing-metro__shop-address').innerHTML;

        this.get_vacancy_list( 'mvideo', shop.getAttribute('data-shop_slug') );

        let latitude = shop.getAttribute('data-latitude');
        let longitude = shop.getAttribute('data-longitude');
        mapV.geoObjects.removeAll();
        mapV.setCenter([ latitude, longitude ]);
        yandexMapInit( 
          [
            [
              [ latitude, longitude ],
              '/wp-content/themes/career_theme/assets/images/listing/map/mvideo-icon.png'
            ],
          ] 
        );

        this.shopsListContainer.classList.add('hide');
        this.vacanciesInShopContainer.classList.remove('hide');
      });
    });

    this.shopListEldorado.forEach((shop) => {
      shop.addEventListener('click', () => {

        document.querySelector('.listing-metro__location-place').innerHTML = shop.querySelector('.listing-metro__shop-title').innerHTML;
        document.querySelector('.listing-metro__location-adress').innerHTML = shop.querySelector('.listing-metro__shop-address').innerHTML;

        this.get_vacancy_list( 'eldorado', shop.getAttribute('data-shop_slug') );

        let latitude = shop.getAttribute('data-latitude');
        let longitude = shop.getAttribute('data-longitude');
        mapV.geoObjects.removeAll();
        mapV.setCenter([ latitude, longitude ])
        yandexMapInit( 
          [
            [
              [ latitude, longitude ],
              '/wp-content/themes/career_theme/assets/images/listing/map/eldorado-icon.png'
            ],
          ] 
        );

        this.shopsListContainer.classList.add('hide');
        this.vacanciesInShopContainer.classList.remove('hide');
      });
    });

    this.buttonBackToShopsList.addEventListener('click', (event) => {
      event.preventDefault();

      mapV.geoObjects.removeAll();
      mapV.setCenter( defaultCenter )
      yandexMapInit( defaultIcons );
      mapV.setBounds( mapV.geoObjects.getBounds(), {checkZoomRange:true, zoomMargin:20} );

      this.shopsListContainer.classList.remove('hide');
      this.vacanciesInShopContainer.classList.add('hide');

      this.driverCheckbox()
    });

    this.buttonBackToShopsListMobile.addEventListener('click', (event) => {
      event.preventDefault();
      
      mapV.geoObjects.removeAll();
      mapV.setCenter( defaultCenter )
      yandexMapInit( defaultIcons );
      mapV.setBounds( mapV.geoObjects.getBounds(), {checkZoomRange:true, zoomMargin:20} );
      
      this.shopsListContainer.classList.remove('hide');
      this.vacanciesInShopContainer.classList.add('hide');

      this.driverCheckbox()
    });

  }

  get_vacancy_list( kind_shops, shop ){

    var containerV = '.listing-metro__profession-container.' + kind_shops + ' .listing-vacancy_items';
    document.querySelector( `${containerV}` ).innerHTML = '<div class="loader-bg"><div class="lds-ripple"><div></div><div></div></div></div>';

    var data = {
        action:     'get_retail_list_vacancy',
        kind_shops: kind_shops,
        shop:       shop,
    };

    var request = new XMLHttpRequest();
    request.open('POST', ajax.url, true);
    request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8");

    request.onload = function() {
        if (this.status >= 200 && this.status < 400) {
            // Success!
            var resp = JSON.parse(this.response);
            if( true == resp.success ){
              document.querySelector( `${containerV}` ).innerHTML = resp.html;
            }
        }
    };

    var str = "";
    for (var key in data) {
        if (str != "") {
            str += "&";
        }
        str += key + "=" + encodeURIComponent(data[key]);
    }

    request.send( str );
  }

  clearActiveClass(array, className) {
    array.forEach((item) => item.classList.remove(className));
  }

  showVacanciesList() {
    this.mapBlock.classList.add('transparent');

    setTimeout(() => {
      this.listBlock.classList.remove('hide');
      this.mapBlock.classList.add('hide');
    }, 300);

    setTimeout(() => this.listBlock.classList.remove('transparent'), 50);
  }

  showVacanciesOnMap() {
    this.listBlock.classList.add('transparent');

    setTimeout(() => {
      this.listBlock.classList.add('hide');
      this.mapBlock.classList.remove('hide');
    }, 300);

    setTimeout(() => this.mapBlock.classList.remove('transparent'), 50);
  }

  changeMapPoints( Center, Icons ) {

    mapV.geoObjects.removeAll();
    mapV.setCenter( Center )
    yandexMapInit( Icons );
    mapV.setBounds( mapV.geoObjects.getBounds(), {checkZoomRange:true, zoomMargin:20} );
  }

  driverCheckbox(){

    if ( this.eldoradoInput.checked == true && this.mvideoInput.checked == false ) {
      this.mvideoBrand.forEach((shop) => shop.classList.add('hide'));
      this.eldoradoBrand.forEach((shop) => shop.classList.remove('hide'));
      this.changeMapPoints( eldoradoCenter, eldoradoIcons )
    }
    if ( this.eldoradoInput.checked == false && this.mvideoInput.checked == true ) {
      this.mvideoBrand.forEach((shop) => shop.classList.remove('hide'));
      this.eldoradoBrand.forEach((shop) => shop.classList.add('hide'));
      this.changeMapPoints( mvideoCenter, mvideoIcons )
    }
    if ( this.eldoradoInput.checked == true && this.mvideoInput.checked == true ) {
      this.mvideoBrand.forEach((shop) => shop.classList.remove('hide'));
      this.eldoradoBrand.forEach((shop) => shop.classList.remove('hide'));
      this.changeMapPoints( defaultCenter, defaultIcons )
    }
  }

  yandexMapInit() {
    this.map = new ymaps.Map('yandex-map', {
      center: [55.773674, 37.67109],
      zoom: 17,
    });

    //---------------------------------------------------------------
    // М.Видео. Одна иконка
    // const markMVideo = new ymaps.Placemark(
    //   [55.773674, 37.67109],
    //   {},
    //   {
    //     iconLayout: 'default#image',
    //     iconImageHref: '../../images/listing/map/mvideo-icon.png',
    //     iconImageSize: [42, 66],
    //   }
    // );

    // map.geoObjects.add(markMVideo);

    //--------------------------------------------------------------
    // М.Видео. Несколько меток.
    // const mvideoMark1 = new ymaps.Placemark([55.77395, 37.67262]);
    // const mvideoMark2 = new ymaps.Placemark([55.773221, 37.673137]);
    // const mvideoMark3 = new ymaps.Placemark([55.772568, 37.672053]);
    // const mvideoMark4 = new ymaps.Placemark([55.772241, 37.670142]);

    // let mvideoCollection = new ymaps.GeoObjectCollection(
    //   {},
    //   {
    //     iconLayout: 'default#image',
    //     iconImageHref: '../../images/listing/map/mvideo-icon.png',
    //     iconImageSize: [42, 66],
    //   }
    // );

    // mvideoCollection
    //   .add(mvideoMark1)
    //   .add(mvideoMark2)
    //   .add(mvideoMark3)
    //   .add(mvideoMark4);

    // map.geoObjects.add(mvideoCollection);

    //------------------------------------------------------------------------
    // Эльдорадо. Несколько иконок. Вывод в цикле
    // const eldoradoMarks = [
    //   [55.774824, 37.671345],
    //   [55.774951, 37.669619],
    //   [55.774289, 37.669145],
    //   [55.774291, 37.667745],
    // ];

    // let eldoradoShops = new ymaps.GeoObjectCollection(
    //   {},
    //   {
    //     iconLayout: 'default#image',
    //     iconImageHref: '../../images/listing/map/eldorado-icon.png',
    //     iconImageSize: [42, 66],
    //   }
    // );

    // for (let i = 0; i < eldoradoMarks.length; i++) {
    //   eldoradoShops.add(new ymaps.Placemark(eldoradoMarks[i]));
    // }
    // map.geoObjects.add(eldoradoShops);

    //---------------------------------------------------------------------------------
    // М.Видео
    // const mvideoMarks = [
    //   [55.77395, 37.67262],
    //   [55.773221, 37.673137],
    //   [55.772568, 37.672053],
    //   [55.772241, 37.670142],
    //   [55.773674, 37.67109],
    // ];

    // let mvidoeShops = new ymaps.GeoObjectCollection(
    //   {},
    //   {
    //     iconLayout: 'default#image',
    //     iconImageHref: '../../images/listing/map/mvideo-icon.png',
    //     iconImageSize: [42, 66],
    //   }
    // );

    // for (let i = 0; i < mvideoMarks.length; i++) {
    //   mvidoeShops.add(new ymaps.Placemark(mvideoMarks[i]));
    // }
    // map.geoObjects.add(mvidoeShops);

    //--------------------------------------------------------------
    // Эльдорадо. Несколько меток. Вариант 2
    // const eldoradoMark1 = new ymaps.Placemark([55.774824, 37.671345]);
    // const eldoradoMark2 = new ymaps.Placemark([55.774951, 37.669619]);
    // const eldoradoMark3 = new ymaps.Placemark([55.774289, 37.669145]);
    // const eldoradoMark4 = new ymaps.Placemark([55.774291, 37.667745]);

    // let eldoradoCollection = new ymaps.GeoObjectCollection(
    //   {},
    //   {
    //     iconLayout: 'default#image',
    //     iconImageHref: '../../images/listing/map/eldorado-icon.png',
    //     iconImageSize: [42, 66],
    //   }
    // );

    // eldoradoCollection
    //   .add(eldoradoMark1)
    //   .add(eldoradoMark2)
    //   .add(eldoradoMark3)
    //   .add(eldoradoMark4);

    // map.geoObjects.add(eldoradoCollection);

    //--------------------------------------------------------------
    // Эльдорадо. Одна иконка
    // const markEldorado = new ymaps.Placemark(
    //   [55.774824, 37.671345],

    //   {},
    //   {
    //     iconLayout: 'default#image',
    //     iconImageHref: '../../images/listing/map/eldorado-icon.png',
    //     iconImageSize: [42, 66],
    //   }
    // );

    // map.geoObjects.add(markEldorado);

    //-----------------------------------
    // const icons = [
    //   [[55.774824, 37.671345], '/wp-content/themes/career_theme/webpack-work/src/images/listing/map/mvideo-icon.png' ],
    //   [[55.774951, 37.669619], '/wp-content/themes/career_theme/webpack-work/src/images/listing/map/eldorado-icon.png' ],
    //   [[55.774289, 37.669145], '/wp-content/themes/career_theme/webpack-work/src/images/listing/map/mvideo-icon.png' ],
    // ];
    let itemPlace;

    for (let i = 0; i < icons.length; i++) {
      itemPlace = new ymaps.Placemark(
        icons[i][0],
        {},
        {
          iconLayout: 'default#image',
          iconImageHref: icons[i][1],
          iconImageSize: [42, 66],
        }
      );
      this.map.geoObjects.add(itemPlace);
    }

    this.map.controls.remove('geolocationControl'); // удаляем геолокацию
    this.map.controls.remove('searchControl'); // удаляем поиск
    this.map.controls.remove('trafficControl'); // удаляем контроль трафика
    this.map.controls.remove('typeSelector'); // удаляем тип
    this.map.controls.remove('fullscreenControl'); // удаляем кнопку перехода в полноэкранный режим
    this.map.controls.remove('zoomControl'); // удаляем контрол зуммирования
    this.map.controls.remove('rulerControl'); // удаляем контрол правил
  }
}
