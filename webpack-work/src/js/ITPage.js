const windowSize767 = window.matchMedia('(max-width: 767px)')
if(windowSize767.matches){
    const create_funute_text = document.querySelector('.create-future__text');

    const observer = new ResizeObserver(entires => {
        const obselement = entires[0]
        if(obselement.contentRect.height == 80)
            document.querySelector('.create-future__button').style.bottom = '-136px'
        else if(obselement.contentRect.height == 64)
            document.querySelector('.create-future__button').style.bottom = '-120px'
        else if(obselement.contentRect.height == 48)
            document.querySelector('.create-future__button').style.bottom = '-100px'
        else
            document.querySelector('.create-future__button').style.bottom = '-90px'
    });

    observer.observe(create_funute_text);
}

const windowSize1023 = window.matchMedia('(max-width: 1023px)')
if(windowSize1023.matches){
    const text_typing = document.querySelector('.text-typing');

    const observer = new ResizeObserver(entires => {
        const obselement = entires[0]
        if(obselement.contentRect.height == 80)
            document.querySelector('.create-future__text-mobile').style.marginTop = '104px'
        else 
            document.querySelector('.create-future__text-mobile').style.marginTop = '184px'
    });

    observer.observe(text_typing);
}