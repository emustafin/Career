var townFormRetail = document.querySelector('input[name=text-town_r]');
// TODO Сделать белый лист городов только относящиеся к розинце 
if(townFormRetail != null){
    new Tagify(townFormRetail, {
      whitelist: town_titles,
      dropdown: {
      position: "text",
      maxItems: 5,
      enabled : 0,
      }
    })
}