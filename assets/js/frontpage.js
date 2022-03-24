// Данные для фильтров
if( typeof levels != 'undefined' ){
  const currentLevels = JSON.parse(levels);
}
if( typeof towns != 'undefined' ){
  const currentCities = JSON.parse(towns);
}

// Страница IT
const idPageTagifyLevelInput = document.querySelector('input[name="tags-select-mode"].profession__level-select');
const idPageTagifyCityInput = document.querySelector('input[name="tags-select-mode"].profession__city-select');
const idPageLevelInput = document.querySelector('#level')
const idPageCityInput = document.querySelector('#town')

// Инициализация селекта выбора уровня
if( typeof currentLevels != 'undefined' ){
  const idPageLevelSelect = new Tagify(idPageTagifyLevelInput, {
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



// Инициализация селекта выбора города
const idPageCitySelect = new Tagify(idPageTagifyCityInput, {
  enforceWhitelist: true,
  mode: 'select',
  whitelist: town_titles,
  userInput: false,
  dropdown: {
    maxItems: 1000,
  }
});

if( idPageTagifyCityInput != null ){
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