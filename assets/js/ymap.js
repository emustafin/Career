if( document.querySelector('#yandex-map') != null ){
  var yandexMaps = ymaps.ready( ymapInit );
  var mapV;
}

function ymapInit(){

    mapV = new ymaps.Map('yandex-map', 
        {
        center: defaultCenter,
        zoom: 1,
        behaviors: ['default', 'scrollZoom']
        }, 
        {
            minZoom: 1,
            maxZoom: 20,
            maxAnimationZoomDifference: 1
        }
    );

    yandexMapInit( defaultIcons );

    mapV.setBounds( mapV.geoObjects.getBounds(), {checkZoomRange:true, zoomMargin:40} );
};

function yandexMapInit( icons ) {

  let itemPlace;

  for (let i = 0; i < icons.length; i++) {
    itemPlace = new ymaps.Placemark(
      icons[i][0],
      {},
      {
        iconLayout: 'default#image',
        iconImageHref: icons[i][1],
        iconImageSize: [42, 66],
        iconWithContent: icons[i][2],
      }
    );

    itemPlace.events.add('click', function(e) {
      var iconWithContent = e.get('target')['options'].get('iconWithContent')
      $(`.listing-metro__shop[data-shop_id=${iconWithContent}]`).click();
    });

    mapV.geoObjects.add(itemPlace);
  }

  mapV.controls.remove('geolocationControl'); // удаляем геолокацию
  mapV.controls.remove('searchControl'); // удаляем поиск
  mapV.controls.remove('trafficControl'); // удаляем контроль трафика
  mapV.controls.remove('typeSelector'); // удаляем тип
  mapV.controls.remove('fullscreenControl'); // удаляем кнопку перехода в полноэкранный режим
  // mapV.controls.remove('zoomControl'); // удаляем контрол зуммирования
  mapV.controls.remove('rulerControl'); // удаляем контрол правил

  mapV.setZoom(17, {duration: 0});
  
}