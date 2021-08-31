const profession = document.querySelector('.profession');
const flyout = document.querySelector('.flyout');
const flyoutSideBar = flyout.querySelector('.flyout__side-bar');
const flyOutContentBar = flyout.querySelector('.vacancy');

profession.addEventListener('click', vacancyClickHandler.bind(profession));
closeFlyout();
resizeFlyout();

function vacancyClickHandler(event) {
    if (event.target.classList.contains('profession__job-title')) {
      event.preventDefault();
      openFlyout();
    }
}

function openFlyout() {
    flyout.classList.add('flyout__active');
    document.body.style.overflow = 'hidden';
    window.scrollTo(0, 0);
    setHeightFlyoutSideBar();

    setTimeout(() => {
        flyoutSideBar.style.background = 'rgba(0, 0, 0, 0.8)';
    }, 300);
};

function closeFlyout() {
    flyout.addEventListener('click', (event) => {
        if (
        event.target.classList.contains('vacancy__header-head-link-main') ||
        event.target.classList.contains('flyout__side-bar')
        ) {
        event.preventDefault();
        flyoutSideBar.style.background = 'transparent';
        document.body.style.overflow = 'visible';

        setTimeout(() => {
            flyout.classList.remove('flyout__active');
        }, 300);
        }
    });
};

function setHeightFlyoutSideBar() {
    flyoutSideBar.style.height = flyOutContentBar.clientHeight + 'px';
    setTimeout(() => {
        flyoutSideBar.style.background = 'rgba(0, 0, 0, 0.8)';
    }, 300);
};

function resizeFlyout() {
    window.addEventListener('resize', () => {
        setHeightFlyoutSideBar();
    });
};


$('.profession__job-title').on( 'click', function(e){
    
    var vacancy_info = $(this).attr('data-info');
    vacancy_info = jQuery.parseJSON( vacancy_info );

    $('.flyout .vacancy__headline-title').html( vacancy_info.title );
    // $('.flyout .vacancy__video-container img').attr( "src", vacancy_info.img );
    $('.flyout .vacancy__intro-description').html( vacancy_info.content );
    $('.flyout #expectations').html( vacancy_info.expectations );
    $('.flyout #what_you_need_to_do').html( vacancy_info.what_you_need_to_do );
    $('.flyout #what_do_we_offer').html( vacancy_info.what_do_we_offer );
    $('.flyout .vacancy__office-map-image').attr( "src", vacancy_info.img_map );
    $('.flyout .vacancy__office-adress-text').html( vacancy_info.map_full_adress );
    $('.flyout .vacancy__meta-info-sum').html( vacancy_info.money_from );
    $('.flyout #vaccat_info_vacancy').html( vacancy_info.vaccat );
    $('.flyout #town_info_vacancy').html( vacancy_info.town );
    $('.flyout #experience_important').html( vacancy_info.experience );
})