var input = document.querySelector('input[name=tags-theme]'),
    tagify = new Tagify(input, {
        userInput: false,
        enforceWhitelist: true,
        mode : "select",
        whitelist: ["IT", "Продажи", "Новости"],
        blacklist: ['foo', 'bar'],
    })

// bind events
tagify.on('add', onAddTag)
tagify.DOM.input.addEventListener('focus', onSelectFocus)

function onAddTag(e){
    console.log(e.detail)
}

function onSelectFocus(e){
    console.log(e)
}


var input = document.querySelector('input[name=tags-date]'),
    tagify = new Tagify(input, {
        userInput: false,
        enforceWhitelist: true,
        mode : "select",
        whitelist: ["За неделю", "За месяц", "За год"],
        blacklist: ['foo', 'bar'],
    })

// bind events
tagify.on('add', onAddTag)
tagify.DOM.input.addEventListener('focus', onSelectFocus)

function onAddTag(e){
    console.log(e.detail)
}

function onSelectFocus(e){
    console.log(e)
}

const mediaQuery1024 = window.matchMedia('(min-width: 1024px)')
if (mediaQuery1024.matches) {
    $(function() {
        var $window = $(window);
        var $sidebar = $('.left__column');
        var $sidebarTop = $sidebar.position().top;
        var $sidebarHeight = $sidebar.height();
        console.log($sidebarHeight);
        var $footer = $('.footer');
        var $footerTop = $footer.position().top;
        console.log($sidebarHeight);
        $window.scroll(function(event) {
            $sidebar.addClass("fixed");
            var $scrollTop = $window.scrollTop();
            var $topPosition = Math.max(0, $sidebarTop - $scrollTop);
            
            if ($scrollTop + $sidebarHeight > $footerTop) {
            var $topPosition = Math.min($topPosition, $footerTop - $scrollTop - $sidebarHeight);
            }
    
            $sidebar.css("top", $topPosition);
        });
    });
    }

const swiperMiniCard = new Swiper('.mini__news-card', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 2,
});

const mediaQuery1023 = window.matchMedia('(max-width: 1023px)')
if (mediaQuery1023.matches) {
    document.querySelector('.event__swiper').classList.add('swiper');
    document.querySelector('.event__card-wrapper').classList.add('swiper-wrapper');
    var mas = document.getElementsByClassName('event__card');
    mas.forEach(element => element.classList.add('swipe-slide'));
    const swiperEvent = new Swiper('.event__card', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        slidesPerView: 2,
    });
}

const mediaQuery767 = window.matchMedia('(max-width: 767px)')
if (mediaQuery767.matches) {
    
}