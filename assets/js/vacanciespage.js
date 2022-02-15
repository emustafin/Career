// Страница Листинга вакансий
const listingTagifyLevelInput = document.querySelector('.listing__level-select');
const listingTagifyCityInput = document.querySelector('.listing__city-select');
var listingTagifySpecializationgInput = document.querySelector('.selectMode.listing__specialization-select');
const listingTagifyProfessionInput = document.querySelector('.listing-top__profession-filter');

const listingLevelInput = document.querySelector('#listing__level-select');
const listingCityInput = document.querySelector('#listing__city-select');
const listingspecializationInput = document.querySelector('#listing__specialization-select');
const listingProfessionInput = document.querySelector('#listing-top__profession-filter')



// Данные для фильтров
const currentLevelsDataListing = JSON.parse(level_arr);
const currentCitiesDataListing = JSON.parse(town_arr);
const currentVaccatDataListing = JSON.parse(vaccat_arr); // Специализации

const currentVacancyTitlesDataListing = JSON.parse(vacancy_get); // Профессии - ОБЯЗАТЕЛЬНО ПОСМОТРЕТЬ КАК ВЫГЛЯДИТ! ИНАЧЕ НЕЖЕЛИ ДРУГИЕ, КОТОРЫЕ ВЫШЕ!!!
const ProfessionList = JSON.parse(vacancy_titles);
console.log(ProfessionList);
const professionListingSelect = new Tagify(listingTagifyProfessionInput, {
  whitelist: ProfessionList,
  dropdown: {
  position: "text",
  maxItems: 5,
  enabled : 0, // always opens dropdown when input gets focus
  }
})

if (currentVacancyTitlesDataListing) {
  professionListingSelect.addTags(currentVacancyTitlesDataListing);
}

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
if( listingTagifySpecializationgInput != null ){
  var specializationListingSelect = new Tagify(listingTagifySpecializationgInput, {
    enforceWhitelist: true,
    mode: 'select',
    whitelist: Object.values(currentVaccatDataListing),
    userInput: false,
  })

  listingTagifySpecializationgInput.addEventListener('change', selectValueFromSingleSelect(currentVaccatDataListing, listingTagifySpecializationgInput, listingspecializationInput))
}

// Инициализация селекта Уровень
if( listingTagifyLevelInput != null ){
  var listingLevelSelect = new Tagify(listingTagifyLevelInput, {
    enforceWhitelist: true,
    mode: 'select',
    whitelist: Object.values(currentLevelsDataListing),
    userInput: false,
  });
  
  listingTagifyLevelInput.addEventListener('change', selectValueFromSingleSelect(currentLevelsDataListing, listingTagifyLevelInput, listingLevelInput))
}

// Инициализация селекта Город
const listingCitySelect = new Tagify(listingTagifyCityInput, {
  enforceWhitelist: true,
  mode: 'select',
  whitelist: town_titles,
  userInput: false,
  dropdown: {
    maxItems: 1000,
  }
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

function myFunction() {
  document.getElementById("Dropdown").classList.toggle("show");
}

window.onclick = function(event) {
if (!event.target.matches('.dropbtn')) {

  var dropdowns = document.getElementsByClassName("dropdown-content");
  var i;
  for (i = 0; i < dropdowns.length; i++) {
    var openDropdown = dropdowns[i];
    if (openDropdown.classList.contains('show')) {
      openDropdown.classList.remove('show');
    }
  }
}
}