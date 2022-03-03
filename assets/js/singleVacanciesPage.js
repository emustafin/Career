var townFormRetail = document.querySelector('input[name=text-town_r]');
var curretnVacancyTowns = JSON.parse(vacancy_towns);
console.log(curretnVacancyTowns);
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