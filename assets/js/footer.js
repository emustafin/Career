var origin_location = window.location.href;

// document.querySelector('#popup_form .wpcf7-submit').addEventListener("click", function(e) {
//   document.querySelector("#popup_form .vacancy__form-label_checkbox").style.color = "#000000";
//   document.querySelector("#popup_form  .vacancy__form-label_checkbox a").style.color = "#000000";
//   document.querySelector("#popup_form  .vacancy__form-label_checkbox a").style.borderBottom = "#000000 1px solid";
// }, false);

document.querySelector('#vacancy_form .wpcf7-submit').addEventListener("click", function(e) {
  document.querySelector("#vacancy_form .vacancy__form-label_checkbox").style.color = "#000000";
  document.querySelector("#vacancy_form  .vacancy__form-label_checkbox a").style.color = "#000000";
  document.querySelector("#vacancy_form  .vacancy__form-label_checkbox a").style.borderBottom = "#000000 1px solid";
}, false);

// Отправка анкеты на сервер
// if(document.querySelector('#popup_form .wpcf7')){
//   const form = document.querySelector('#popup_form .wpcf7');

//   form.addEventListener(
//     'wpcf7submit',
//     function (event) {

//       const submitBtn = document.querySelector(
//         '.wpcf7-form-control.wpcf7-submit.form__response'
//       );
//       const answerTitle = document.querySelector('.form__response-block');

//       const result = event.detail;

//       if (result.status === 'validation_failed'){

//         var array = result.apiResponse.invalid_fields;
//         for (let index = 0; index < array.length; index++) {
//           var element = array[index];
//           if( -1 != element.error_id.indexOf('checkbox') ){
//             var label_checkbox = document.querySelector('.form__content-right-bar .vacancy__form-label_checkbox');
//             var label_checkbox_a = document.querySelector('.form__content-right-bar .vacancy__form-label_checkbox a');
//             label_checkbox.style.color = '#e31235';
//             label_checkbox_a.style.color = '#e31235';
//             label_checkbox_a.style.borderBottom = "#e31235 1px solid";
//           }
//         }
//         return;
//       } 

//       if ( result.apiResponse.api_send_status == 'data_sent' ) {
//         answerTitle.innerHTML = 'Спасибо за отклик! Скоро ответим!';
//         answerTitle.style.display = 'block';
//         submitBtn.style.display = 'none';
//       } else{
//         if( result.apiResponse.api_send_status == 'data_false' ){
//           answerTitle.style.display = 'block';
//           answerTitle.innerHTML = 'Что-то пошло не так. Попробуйте позже.';
//         }
//       }

//       setTimeout(setup_vars_for_forms, 1000);
//     },
//     false
//   );
// }

if(document.querySelector('#vacancy_form .wpcf7')){
  const form2 = document.querySelector('#vacancy_form .wpcf7');
  
  form2.addEventListener(
    'wpcf7submit',
    function (event) {
  
      const result = event.detail;
  
      if (result.status === 'validation_failed'){
  
        var array = result.apiResponse.invalid_fields;
        for (let index = 0; index < array.length; index++) {
          let element = array[index];
          if( -1 != element.error_id.indexOf('checkbox') ){
            let label_checkbox = document.querySelector('#vacancy_form .vacancy__form-label_checkbox');
            let label_checkbox_a = document.querySelector('#vacancy_form .vacancy__form-label_checkbox a');
            label_checkbox.style.color = '#e31235';
            label_checkbox_a.style.color = '#e31235';
            label_checkbox_a.style.borderBottom = "#e31235 1px solid";
          }
        }
        return;
      }
  
      if ( result.apiResponse.api_send_status === 'data_sent' ) {
        document.querySelector('input.wpcf7-form-control.wpcf7-submit.vacancy__response').style.display = 'none';
        document.querySelector('#vacancy_form .form__form-message').innerHTML = 'Спасибо за отклик! Скоро ответим!';
        document.querySelector('#vacancy_form .form__form-message').style.display = 'block';
      } else{
        if( result.apiResponse.api_send_status === 'data_false' ){
          document.querySelector('input.wpcf7-form-control.wpcf7-submit.vacancy__response').style.display = 'none';
          document.querySelector('#vacancy_form .form__form-message').innerHTML = 'Что-то пошло не так. Попробуйте позже.';
          document.querySelector('#vacancy_form .form__form-message').style.display = 'block';
        }
      }
  
      setTimeout(setup_vars_for_forms, 1000);
    },
    false
  );
}

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

// Инициализация селекта Тагифай в анкете. Поле "Город"
const formCityTagifyInput = document.querySelector(
  'input[name=tags-select-mode].form__city-select'
);
const formCityInput = document.querySelector('#form__town');
const formCityInput_r = document.querySelector('#form__town_r');

// const formCitySelect = new Tagify(formCityInput, {
//   enforceWhitelist: true,
//   mode: 'select',
//   whitelist: ['Любой', 'Москва', 'Санкт-Петербург', 'Ростов на Дону'],
//   userInput: false,
// });

// formCitySelect.on(
//   'change',
//   selectValueFromSingleSelect(cities, formCityInput, formCityInput)
// );

if( null != formCityInput_r ){

  const formCitySelect_r = new Tagify(formCityInput_r, {
    enforceWhitelist: true,
    mode: 'select',
    whitelist: town_titles,
    userInput: false,
    dropdown: {
      maxItems: 1000,
    }
  });
  
  formCitySelect_r.on(
    'change',
    selectValueFromSingleSelect(cities, formCityInput_r, formCityInput_r)
  );
}

// Инициализация селекта Тагифай в анкете. Поле "Направление"
const directionFormInput = document.querySelector('.holdf_directions');

const directionSelect = new Tagify(directionFormInput, {
  enforceWhitelist: true,
  mode: 'select',
  whitelist: array_directions,
  userInput: false,
});

directionSelect.on(
  'change',
  function (e) {
    selectValueFromSingleSelect(
      array_directions,
      directionFormInput,
      directionFormInput
    )

    if( 'Розничные магазины' == JSON.parse(e.detail.value)[0].value ){
      document.querySelector('.form__holdf_town').style.display = "block";
      document.querySelector('.form__holdf_age').style.display = "block";
      document.querySelector('.form__holdf_citizenship').style.display = "block";
    } else{
      document.querySelector('.form__holdf_town').style.display = "none";
      document.querySelector('.form__holdf_age').style.display = "none";
      document.querySelector('.form__holdf_citizenship').style.display = "none";
    }

  }
);

// Инициализация селекта Тагифай в анкете. Поле "Гражданство"
const citizenshipFormInput = document.querySelector('.holdf_citizenship');

const citizenshipSelect = new Tagify(citizenshipFormInput, {
  enforceWhitelist: true,
  mode: 'select',
  whitelist: array_citizenship,
  userInput: false,
});

citizenshipSelect.on(
  'change',
  selectValueFromSingleSelect(
    array_citizenship,
    citizenshipFormInput,
    citizenshipFormInput
  )
);

function setup_vars_for_forms() {

  document.querySelectorAll('.rel_type').forEach(
    element => element.setAttribute('value',rel_type),
  );

  document.querySelector('#popup_form .rel_type').setAttribute( 'value', 'hold' );

  document.querySelectorAll('.vacancyid').forEach(
    element => element.setAttribute('value',vacancyid),
  );

  document.querySelectorAll('.sourceurl').forEach(
    element => element.setAttribute('value',sourceurl),
  );

};

setup_vars_for_forms();


// костыль для страницы розница, 
// потому что при инициализации слайдера который скрыт 
// высота всех элементов устанавливается 0
window.addEventListener('load', function(){
  if(document.querySelector('.upgrade__content-wrapper.eldorado')){
    document.querySelector('.upgrade__content-wrapper.eldorado').classList.add('hide');
  }
})