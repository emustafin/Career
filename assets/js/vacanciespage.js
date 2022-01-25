// Страница Листинга вакансий
const listingTagifyLevelInput = document.querySelector('.listing__level-select');
const listingTagifyCityInput = document.querySelector('.listing__city-select');
const listingTagifySpecializationgInput = document.querySelector('.selectMode.listing__specialization-select');
const listingTagifyProfessionInput = document.querySelector('.listing-top__profession-filter');

const listingLevelInput = document.querySelector('#listing__level-select');
const listingCityInput = document.querySelector('#listing__city-select');
const listingspecializationInput = document.querySelector('#listing__specialization-select');
const listingProfessionInput = document.querySelector('#listing-top__profession-filter')



// Данные для фильтров
const currentLevelsDataListing = JSON.parse(level_arr);
const currentCitiesDataListing = JSON.parse(town_arr);
const currentVaccatDataListing = JSON.parse(specialization_arr); // Специализации
const currentVacancyTitlesDataListing = JSON.parse(vacancy_titles); // Профессии - ОБЯЗАТЕЛЬНО ПОСМОТРЕТЬ КАК ВЫГЛЯДИТ! ИНАЧЕ НЕЖЕЛИ ДРУГИЕ, КОТОРЫЕ ВЫШЕ!!!

// console.log(town_arr);

// Инициализация селекта Профессии
const stringVacancyesToArray = currentVacancyTitlesDataListing.split(',');
const currentProfessionList = stringVacancyesToArray.filter((profession) => profession !== '');

const professionListingSelect = new Tagify(listingTagifyProfessionInput, {
  // whitelist: currentProfessionList,
  dropdown: {
  position: "input",
  enabled : 0, // always opens dropdown when input gets focus
  dropdown: {
    maxItems: 5,
    },
  }
})

listingTagifyProfessionInput.addEventListener('change', () => {
  let selectedProfessionList = [];

  if (listingTagifyProfessionInput.value === '') {
    selectedProfessionList = [];
    listingProfessionInput.value = '';
    return
  } 

  const savedInInputProfessions = JSON.parse(listingTagifyProfessionInput.value);

  for (let profession of savedInInputProfessions) {
    selectedProfessionList.push(profession.value)
  }

  listingProfessionInput.value = selectedProfessionList
})

// Инициализация селекта Специализация
const specializationListingSelect = new Tagify(listingTagifySpecializationgInput, {
  enforceWhitelist: true,
  mode: 'select',
  whitelist: Object.values(currentVaccatDataListing),
  userInput: false,
})

listingTagifySpecializationgInput.addEventListener('change', selectValueFromSingleSelect(currentVaccatDataListing, listingTagifySpecializationgInput, listingspecializationInput))


// Инициализация селекта Уровень
const listingLevelSelect = new Tagify(listingTagifyLevelInput, {
  enforceWhitelist: true,
  mode: 'select',
  whitelist: Object.values(currentLevelsDataListing),
  userInput: false,
});

listingTagifyLevelInput.addEventListener('change', selectValueFromSingleSelect(currentLevelsDataListing, listingTagifyLevelInput, listingLevelInput))


// Инициализация селекта Город
const listingCitySelect = new Tagify(listingTagifyCityInput, {
  enforceWhitelist: true,
  mode: 'select',
  whitelist: ['Любой', 'Москва', 'Санкт-Петербург', 'Ростов на Дону'],
  userInput: false,
});

listingTagifyCityInput.addEventListener('change', selectValueFromSingleSelect(currentCitiesDataListing, listingTagifyCityInput, listingCityInput))


// Функция выбора элемента из выпадающего списка
function selectValueFromSingleSelect(data, tagifyInput, targetInput) {
  return function() {
    if (tagifyInput.value === '') return;

    let currentValue;

    for (let prop in data) {
      if (data[prop] === JSON.parse(tagifyInput.value)[0].value) {
        currentValue = prop
      }
    }
    targetInput.value = currentValue;
  }
}