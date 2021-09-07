window.onload = () => {
  const  svgActivate = document.getElementById("svg-toggle-activate");
  if(svgActivate == null) return;
  svgActivate.addEventListener("mouseover", () => {

    svgActivate.querySelectorAll(".svg-toggle__btn svg:nth-child(2)").forEach((el, i) => {
      setTimeout(()=> {
        el.style.cssText = `
            top: 11px;
            left: 150px;
          `;
      }, 1000 * i)
    });
  });

  let typed = new Typed('#typed', {
    stringsElement: '#typed-strings',
    typeSpeed: 100,
    startDelay: 500,
    backSpeed: 50,
    loop: true
  });

}