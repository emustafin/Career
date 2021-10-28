// Экспорт классов
import { Vacancy } from './components/itHubPage/vacancy';
import { Listing } from './components/itHubPage/vacancyListingPage/listing';
import { Advantages } from './components/itHubPage/advantages';
import { CareerUpgrade } from './components/itHubPage/upgrade';
import { VideoPlayer } from './components/itHubPage/videoPlayer';
import './components/animation';
// import './components/itHubPage/Tab';
// import './components/itHubPage/animationSvgTab';
// import { Select } from './components/itHubPage/select';
// import { SvgToggleAnimate } from './components/itHubPage/animationSvgTab';
// import { ScrollTo } from './components/itHubPage/scroll';
import { Form } from './components/itHubPage/form';
import { RunningLine } from './components/itHubPage/runningLine';
// import { VacancyDirectLink } from './components/itHubPage/vacancyDirectLink';
import { Goals } from './components/itHubPage/goals';
import { Header } from './components/itHubPage/header';
import { VacancyDirecLinkSideBar } from './components/itHubPage/vacancyDirectLinkPage/directLinkSideBar';
import { VacancyDirecLinkMainContent } from './components/itHubPage/vacancyDirectLinkPage/vacancyDirectLinkMainContent';
import { VacancyDirecLinkNewsBlock } from './components/itHubPage/vacancyDirectLinkPage/vacancyDirectLinkNews';
import { CustomSelectInProfessionBlock } from './components/itHubPage/customSelect';
import { ListingFilters } from './components/itHubPage/vacancyListingPage/listingFilters';
import { Intern } from './components/itHubPage/intern';
import { Direction } from './components/itHubPage/direction';
import { FooterPage } from './components/itHubPage/footer';
import { ListingVacansiesContainer } from './components/itHubPage/vacancyListingPage/listingVacansiesPopup';
import { ItVacanciesContainer } from './components/itHubPage/vacancyContainer';

// Импорт классов страницы Розницы
import { CreateRetailFutureComponent } from './components/retail/createRetailFuture';
import { RetailMission } from './components/retail/retailMissionBlock';
import { RetailBrands } from './components/retail/retailBrandsBlock';
import { RetailPosition } from './components/retail/retailPositionBlock';
import { RetailQuote } from './components/retail/retailQuote';
import { RetailInternship } from './components/retail/retailInternship';
import { RetailAdvantages } from './components/retail/retailAdvantages';
import { RetailFooter } from './components/retail/retailFooter';

// Перенос изображений
require.context('../images', true, /\.(png|jpg|svg|gif)$/);
require.context('../fonts', true, /\.(ttf|woff|woff2)$/);

// Глобальные переменные
export const profession = document.querySelector('.profession');
const ourAdvantages = document.querySelector('.why-are-we');
const listingPage = document.querySelector('.listing');
const upgradeSection = document.querySelector('.upgrade');
const videoPlayerBlock = document.querySelector('.find');
const form = document.querySelector('.form');
const directLink = document.querySelector('.direct-link');
const goalBlock = document.querySelector('.goal');
const runningLine = document.querySelector('.find__title');
const vacancyDirectLinkSideBar = document.querySelector(
  '.direct-link__side-bar'
);
const vacancyDirectLinkMainContent = document.querySelector(
  '.direct-link__content'
);
const vacancyDirectLinkNews = document.querySelector(
  '.vacancy__news-block-desktop'
);
const professionCustomSelect = document.querySelector(
  '.profession__filter-wrapper'
);
export const headerItPage = document.querySelector('.it-header');
export const vacancyDirectLinkHeader = document.querySelector(
  '.direct-link__header'
);
const listingPageFilters = document.querySelector(
  '.listing-top__filters-wrapper'
);
const intern = document.querySelector('.intern');
const direction = document.querySelector('.direction');
const footerPage = document.querySelector('.footer');
const flyoutVacancy = document.querySelector('.vacancy');
const listingVacansiesContainer = document.querySelector(
  '.position__card-wrapper'
);
const itPageVacancyContainer = document.querySelector(
  '.profession__job-wrapper'
);

// Страница 404
const page404 = document.querySelector('.page-404');

// Страница Розницы
const createFutureBlock = document.querySelector('.retail__preview');
export const retailMissionBlock = document.querySelector('.retail__mission');
export const retailBrands = document.querySelector('.brands');
export const retailPosition = document.querySelector('.retail__position');
export const retailQuote = document.querySelector('.retail__quote-container');
export const retailIntern = document.querySelector('.retail__internship');
export const retailAdvantages = document.querySelector('.retail__advantages');
export const retailFooter = document.querySelector('.retail__footer');

new Vacancy(profession);
new Advantages(ourAdvantages);
new CareerUpgrade(upgradeSection);
new VideoPlayer(videoPlayerBlock);
new Form(form);
new RunningLine(runningLine);
const vacancyListingComponent = new Listing(listingPage);
// new VacancyDirectLink(directLink);
new Goals(goalBlock);
const headerComponent = new Header(headerItPage);
new VacancyDirecLinkSideBar(vacancyDirectLinkSideBar);
new VacancyDirecLinkMainContent(vacancyDirectLinkMainContent);
new VacancyDirecLinkNewsBlock(vacancyDirectLinkNews);
new CustomSelectInProfessionBlock(professionCustomSelect);
new ListingFilters(listingPageFilters);
new Intern(intern);
const itPageDirection = new Direction(direction);
new FooterPage(footerPage);
new ListingVacansiesContainer(listingVacansiesContainer);
new ItVacanciesContainer(itPageVacancyContainer);

// Инициализация классов страницы Розницы
new CreateRetailFutureComponent(createFutureBlock);
new RetailMission(retailMissionBlock);
new RetailBrands(retailBrands);
new RetailPosition(retailPosition);
new RetailQuote(retailQuote);
new RetailInternship(retailIntern);
new RetailAdvantages(retailAdvantages);
new RetailFooter(retailFooter);

// Слушатели событий, установленные на Body
document.body.addEventListener('click', (event) => {
  headerComponent.closeSelect();
  vacancyListingComponent.closeHeaderSelect();
  itPageDirection.closeMobileSelect();

  if (
    event.target.classList.contains('it-header__button') ||
    event.target.classList.contains('intern__header-link')
  ) {
    event.preventDefault();
    openApplicationForm();
  }

  if (event.target.classList.contains('create-future__button')) {
    event.preventDefault();
    smothScrollingToBlock(goalBlock, headerItPage);
  }

  if (event.target.classList.contains('goal__button')) {
    event.preventDefault();
    smothScrollingToBlock(profession, headerItPage);
  }
});

// Открыть анкету выбора вакансии
function openApplicationForm() {
  const form = document.querySelector('.form');

  form.classList.add('form-active');

  setTimeout(() => {
    document.body.style.overflow = 'hidden';
  }, 200);

  setTimeout(() => {
    form.firstElementChild.style.background = 'rgba(0, 0, 0, 0.8)';
  }, 300);
}

// Скролл до блока
export function smothScrollingToBlock(block, header) {
  const offset = 16;
  let headerHeight = header.clientHeight + offset;

  if (window.innerWidth <= 479) {
    headerHeight = offset;
  }
  const topOffset = block.offsetTop - headerHeight;

  let interval = setInterval(() => {
    document.scrollingElement.scrollTop += 10;

    if (document.scrollingElement.scrollTop >= topOffset) {
      clearInterval(interval);
    }
  }, 1);
}

// Анимация переключателей (внутренние шарики)
export function swichersAnimation(header, block, swichers) {
  return function () {
    const offset = 40;
    let headerHeight = header.clientHeight;
    const swichersCollection = swichers;

    if (window.innerWidth <= 479) {
      headerHeight = 0;
    }

    const topOffset = block.offsetTop - headerHeight;

    if (
      window.scrollY >= topOffset - offset &&
      window.scrollY <= topOffset + offset
    ) {
      setTimeout(() => {
        swichersCollection[0].classList.toggle('intern__inside-circle-active');
      }, 0);
      setTimeout(() => {
        swichersCollection[1].classList.toggle('intern__inside-circle-active');
      }, 1000);
      setTimeout(() => {
        swichersCollection[2].classList.toggle('intern__inside-circle-active');
      }, 2000);
      setTimeout(() => {
        swichersCollection[3].classList.toggle('intern__inside-circle-active');
      }, 3000);
    }
  };
}

// Отложенная загрузка изображений
const lazyImages = document.querySelectorAll('[data-src]');

function isIntersecting(target) {
  const docViewTop = window.pageYOffset;
  const docViewBottom = docViewTop + window.innerHeight;
  const elemTop = docViewTop + target.getBoundingClientRect().top;
  const elemBottom = elemTop + target.height;

  return (
    (elemTop <= docViewBottom && elemTop >= docViewTop) ||
    (elemBottom <= docViewBottom && elemBottom >= docViewTop)
  );
}

const checkImages = function () {
  lazyImages.forEach((target) => {
    if (
      isIntersecting(target) &&
      target.parentNode.classList.contains('loading')
    ) {
      target.src = target.getAttribute('data-src');
      // target.onload = () => {
      //   target.parentNode.classList.remove('loading');
      //   target.removeAttribute('data-src');
      // };
      target.parentNode.classList.remove('loading');
      target.removeAttribute('data-src');
    }
  });
};

// window.onload = checkImages;
// window.onscroll = checkImages;
window.addEventListener('scroll', checkImages);
window.addEventListener('DOMContentLoaded', checkImages);

if (flyoutVacancy) {
  flyoutVacancy.addEventListener('scroll', checkImages);
}
