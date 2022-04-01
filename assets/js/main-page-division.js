var professional = document.querySelector('#main-division__top-switcher__professional');
var student = document.querySelector('#main-division__top-switcher__student');

professional.addEventListener("click", (event) =>{
   if (!event.target.classList.contains("main-division__top-switcher-active")) {
    document.querySelector('#main-division__top-switcher__student').classList.remove("main-division__top-switcher-active")
    event.target.classList.add("main-division__top-switcher-active")
    document.querySelector('#professional').style.display = "flex"
    document.querySelector('.main-division__bottom').style.display = "flex"
    document.querySelector('#student').style.display = "none"
   }
});

student.addEventListener("click", (event) =>{
    if (!event.target.classList.contains("main-division__top-switcher-active")) {
     document.querySelector('#main-division__top-switcher__professional').classList.remove("main-division__top-switcher-active")
     event.target.classList.add("main-division__top-switcher-active")
     document.querySelector('#professional').style.display = "none"
     document.querySelector('.main-division__bottom').style.display = "none"
     document.querySelector('#student').style.display = "flex"
    }
 });