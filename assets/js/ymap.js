var yandexMaps = ymaps.ready( yandexMapInit );

function yandexMapInit(  ) {
  
  var map = new ymaps.Map('yandex-map', {
    center: [55.773674, 37.67109],
    zoom: 17,
  });

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
    map.geoObjects.add(itemPlace);
  }

  map.controls.remove('geolocationControl'); // удаляем геолокацию
  map.controls.remove('searchControl'); // удаляем поиск
  map.controls.remove('trafficControl'); // удаляем контроль трафика
  map.controls.remove('typeSelector'); // удаляем тип
  map.controls.remove('fullscreenControl'); // удаляем кнопку перехода в полноэкранный режим
  map.controls.remove('zoomControl'); // удаляем контрол зуммирования
  map.controls.remove('rulerControl'); // удаляем контрол правил
  
}