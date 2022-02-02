if (document.querySelector('input[name=tags-theme]')) {
    var input = document.querySelector('input[name=tags-theme]'),
    tagify = new Tagify(input, {
        userInput: false,
        enforceWhitelist: true,
        mode : "select",
        whitelist: ["IT", "Продажи", "Новости"],
        blacklist: ['foo', 'bar'],
    })
}

if (document.querySelector('input[name=tags-date]')) {
    var input = document.querySelector('input[name=tags-date]'),
    tagify = new Tagify(input, {
        userInput: false,
        enforceWhitelist: true,
        mode : "select",
        whitelist: ["За неделю", "За месяц", "За год"],
        blacklist: ['foo', 'bar'],
    })
}

const mediaQuery1023 = window.matchMedia('(max-width: 1023px)')
if (mediaQuery1023.matches) {
    const swiperEvent = new Swiper('.event__swiper', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        roundLengths: true,
        setWrapperSize: true,
        slidesPerView: 1.665,
        spaceBetween: 16,
        breakpoints: {
            768: {
                slidesPerView: 2.25,
                spaceBetween: 24,

            },
        }
    });
}

const mediaQuery768 = window.matchMedia('(min-width: 768px)')
if (mediaQuery768.matches) {
    const swiperMiniCard = new Swiper('.mini__news-card', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        roundLengths: true,
        setWrapperSize: true,
        slidesPerView: 2,
        spaceBetween: 8,
    });
}
