// Данные для фильтров
if( typeof levels != 'undefined' ){
  var currentLevels = JSON.parse(levels);

  var idPageTagifyLevelInput = document.querySelector('input[name="tags-select-mode"].profession__level-select');
  var idPageLevelInput = document.querySelector('#level');

  // Инициализация селекта выбора уровня

  var idPageLevelSelect = new Tagify(idPageTagifyLevelInput, {
    enforceWhitelist: true,
    mode: 'select',
    whitelist: Object.values(currentLevels),
    userInput: false,
  });
  idPageTagifyLevelInput.addEventListener('change', () => {
  
    if (idPageTagifyLevelInput.value === '') return;
  
    let currentValue;
  
  
    for (let prop in currentLevels) {
      if (currentLevels[prop] === JSON.parse(idPageTagifyLevelInput.value)[0].value) {
        currentValue = prop
      }
    }
    idPageLevelInput.value = currentValue;
  })
}

if( typeof towns != 'undefined' ){
  var currentCities = JSON.parse(towns);
  var idPageTagifyCityInput = document.querySelector('input[name="tags-select-mode"].profession__city-select');
  var idPageCityInput = document.querySelector('#town')
  // Инициализация селекта выбора города

  var idPageCitySelect = new Tagify(idPageTagifyCityInput, {
    enforceWhitelist: true,
    mode: 'select',
    whitelist: town_titles,
    userInput: false,
    dropdown: {
      maxItems: 1000,
    }
  });

  idPageTagifyCityInput.addEventListener('change', () => {
    if (idPageTagifyCityInput.value === '') return;
  
    let currentValue;
  
    for (let prop in currentCities) {
      if (currentCities[prop] === JSON.parse(idPageTagifyCityInput.value)[0].value) {
        currentValue = prop
      }
    }
    idPageCityInput.value = currentValue;
  })
}