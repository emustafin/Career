var townFormRetail = document.querySelector('input[name=text-town_r]');
if (typeof vacancy_towns != 'undefined') {
  var curretnVacancyTowns = JSON.parse(vacancy_towns);
  
  // TODO Сделать белый лист городов только относящиеся к розинце 
  if(townFormRetail != null){
      new Tagify(townFormRetail, {
        whitelist: curretnVacancyTowns,
        dropdown: {
        position: "text",
        maxItems: 5,
        enabled : 0,
        }
      })
  }
}