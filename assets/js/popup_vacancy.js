if(document.querySelector('.profession__title')){
  document.querySelector('.profession__title').getAttribute('originhref', window.location.href);
  var origin_location = window.location.href;
}

if(document.querySelector('.vacancy__header-head-link-main')){
  document.querySelector('.vacancy__header-head-link-main').addEventListener('click', function (e) {
    window.history.pushState('', '', origin_location);
  });
}

if(document.querySelector('.flyout__side-bar')){
  document.querySelector('.flyout__side-bar').addEventListener('click', function (e) {
    window.history.pushState('', '', origin_location);
  });
}