// Отправка анкеты на сервер
const form = document.querySelector('#popup_form .wpcf7');

form.addEventListener(
  'wpcf7submit',
  function (event) {
    const submitBtn = document.querySelector(
      '.wpcf7-form-control.wpcf7-submit.form__response'
    );
    const answerTitle = document.querySelector('.form__response-block');

    const result = event.detail;

    if (result.status === 'validation_failed') return;

    if (result.status === 'mail_sent') submitBtn.style.display = 'none';
    answerTitle.style.display = 'block';

    setTimeout(setup_vars_for_forms, 1000);
  },
  false
);

const form2 = document.querySelector('.vacancy__form-inner-block .wpcf7');

form2.addEventListener(
  'wpcf7submit',
  function (event) {
    setTimeout(setup_vars_for_forms, 1000);
  },
  false
);

// Функция выбора элемента из выпадающего списка
function selectValueFromSingleSelect(data, tagifyInput, targetInput) {
  return function () {
    if (tagifyInput.value === '') return;

    let currentValue;

    for (let prop in data) {
      if (data[prop] === JSON.parse(tagifyInput.value)[0].value) {
        currentValue = JSON.parse(tagifyInput.value)[0].value;
      }
    }
    targetInput.value = currentValue;
  };
}

// Данные для фильтров
const dataDirection = JSON.parse(info_product_directions);
const dataSpecialization = JSON.parse(info_vaccat);

// Инициализация селекта Тагифай в анкете. Поле "Город"
const formCityTagifyInput = document.querySelector(
  'input[name=tags-select-mode].form__city-select'
);
const formCityInput = document.querySelector('#form__town');
const formCityInput_r = document.querySelector('#form__town_r');

const formCitySelect = new Tagify(formCityInput, {
  enforceWhitelist: true,
  mode: 'select',
  whitelist: ['Любой', 'Москва'],
  userInput: false,
});

formCitySelect.on(
  'change',
  selectValueFromSingleSelect(cities, formCityInput, formCityInput)
);

if( null != formCityInput_r ){

  const formCitySelect_r = new Tagify(formCityInput_r, {
    enforceWhitelist: true,
    mode: 'select',
    whitelist: ['Любой', 'Москва'],
    userInput: false,
  });
  
  formCitySelect_r.on(
    'change',
    selectValueFromSingleSelect(cities, formCityInput_r, formCityInput_r)
  );
}

// Инициализация селекта Тагифай в анкете. Поле "Направление"
const directionFormTagifyInput = document.querySelector(
  'input[name=tags-select-mode].form__direction-select'
);
const directionFormInput = document.querySelector('.form__value1');

const directionSelect = new Tagify(directionFormInput, {
  enforceWhitelist: true,
  mode: 'select',
  whitelist: dataDirection,
  userInput: false,
});

directionSelect.on(
  'change',
  selectValueFromSingleSelect(
    dataDirection,
    directionFormInput,
    directionFormInput
  )
);

// Инициализация селекта Тагифай в анкете. Поле "Специализация"
const specializationFormTagifyInput = document.querySelector(
  'input[name=tags-select-mode].form__spezialisation-select'
);
const specializationFormInput = document.querySelector('.form__value2');

const spezialisationSelect = new Tagify(specializationFormInput, {
  enforceWhitelist: true,
  mode: 'select',
  whitelist: dataSpecialization,
  userInput: false,
});

spezialisationSelect.on(
  'change',
  selectValueFromSingleSelect(
    dataSpecialization,
    specializationFormInput,
    specializationFormInput
  )
);

function setup_vars_for_forms() {
  $('.rel_type').each(function (index) {
    $(this).val(rel_type);
  });

  $('.vacancyid').each(function (index) {
    $(this).val(vacancyid);
  });

  $('.sourceurl').each(function (index) {
    $(this).val(sourceurl);
  });
}
setup_vars_for_forms();
