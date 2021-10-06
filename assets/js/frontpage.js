// Данные для фильтров
const currentLevels = JSON.parse(levels);
const currentCities = JSON.parse(towns);

// Страница IT
const idPageTagifyLevelInput = document.querySelector('input[name="tags-select-mode"].profession__level-select');
const idPageTagifyCityInput = document.querySelector('input[name="tags-select-mode"].profession__city-select');
const idPageLevelInput = document.querySelector('#level')
const idPageCityInput = document.querySelector('#town')

// Инициализация селекта выбора уровня
const idPageLevelSelect = new Tagify(idPageTagifyLevelInput, {
  enforceWhitelist: true,
  mode: 'select',
  whitelist: Object.values(currentLevels),
  userInput: false,
});

idPageLevelSelect.on('change', () => {

  if (idPageTagifyLevelInput.value === '') return;

  let currentValue;


  for (let prop in currentLevels) {
    if (currentLevels[prop] === JSON.parse(idPageTagifyLevelInput.value)[0].value) {
      currentValue = prop
    }
  }
  idPageLevelInput.value = currentValue;
})


// Инициализация селекта выбора города
const idPageCitySelect= new Tagify(idPageTagifyCityInput, {
  enforceWhitelist: true,
  mode: 'select',
  whitelist: ['Любой','Москва'],
  userInput: false,
});

idPageCitySelect.on('change', () => {

  if (idPageTagifyCityInput.value === '') return;


  let currentValue;

  for (let prop in currentCities) {
    if (currentCities[prop] === JSON.parse(idPageTagifyCityInput.value)[0].value) {
      currentValue = prop
    }
  }
  idPageCityInput.value = currentValue;
})