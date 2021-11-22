// Импорт классов страницы IT
import { ItHubVacancyBlock } from './components/itHubPage/itHubVacancyBlock';
import { ItHubPageAdvantagesBlock } from './components/itHubPage/itHubPageAdvantagesBlock';
import { ItHubPageCareerUpgradeBlock } from './components/itHubPage/itHubCareerUpgrade';
import { ItHubVideoPlayerBlock } from './components/itHubPage/itHubVideoPlayerBlock';
import { ItHubRunningLineBlock } from './components/itHubPage/itHubRunningLine';
import { ItHubGoalsBlock } from './components/itHubPage/itHubGoalsBlock';
import { ItHubPageCustomSelectInProfessionBlock } from './components/itHubPage/itHubPagecustomSelectInVacancy';
import { ItHubInternshipBlock } from './components/itHubPage/itHubInternship';
import { ItHubDirectionBlock } from './components/itHubPage/itHubDirectionBlock';
import { ItHubVacanciesContainerInProfessionBlock } from './components/itHubPage/itHubVacancyContainerInProfessionBlock';

import { Form } from './components/itHubPage/form';

import { ListingVacancyPage } from './components/itHubPage/vacancyListingPage/listingVacancyPage';
import { ListingVacancyFiltersBlock } from './components/itHubPage/vacancyListingPage/listingVacancyFiltersBlock';
import { ListingVacansiesPagePopup } from './components/itHubPage/vacancyListingPage/listingVacansiesPopup';
import { ListingVacancyMapBlock } from './components/itHubPage/vacancyListingPage/listingPageMapBlock';
import { ListingMapPageFilters } from './components/itHubPage/vacancyListingPage/listingFilters';

import { Header } from './components/itHubPage/header';

import { Footer } from './components/itHubPage/footer';

//-----------------------------------------------------------
// Вакансия по прямой ссылке. Разобраться с экспортами внутри компонентов cайд-бар и основной контент!!!!!!!!
import { VacancyDirecLinkSideBar } from './components/itHubPage/vacancyDirectLinkPage/directLinkSideBar';
import { VacancyDirecLinkMainContent } from './components/itHubPage/vacancyDirectLinkPage/vacancyDirectLinkMainContent';
import { VacancyDirecLinkNewsBlock } from './components/itHubPage/vacancyDirectLinkPage/vacancyDirectLinkNews';
//----------------------------------------------------------

//--------------------------------------------------
// Печатная машинка в блоке IT-создавай будущее (Вынести в отдельный компонент)
import './components/animation';
//-----------------------------------------------

// Импорт классов страницы Розницы
import { CreateRetailFutureComponent } from './components/retail/createRetailFuture';
import { RetailMissionBlock } from './components/retail/retailMissionBlock';
import { RetailBrandsBlock } from './components/retail/retailBrandsBlock';
import { RetailPositionBlock } from './components/retail/retailPositionBlock';
import { RetailQuoteBlock } from './components/retail/retailQuote';
import { RetailInternshipBlock } from './components/retail/retailInternship';
import { RetailAdvantagesBlock } from './components/retail/retailAdvantages';
import { RetailUpgradeBlock } from './components/retail/retailUpgrade';
import { RetailFooter } from './components/retail/retailFooter';

// Перенос изображений и шрифтов в Dist
require.context('../images', true, /\.(png|jpg|svg|gif)$/);
require.context('../fonts', true, /\.(ttf|woff|woff2)$/);

// Глобальные переменные
//------------------------------------------------------------------------
// Разобраться с экспортами!!!!!!!!!!!!!!!! Передать в компонент через функцию компонента (Функцию надо будет создать!!!)
export const headerItPage = document.querySelector('.it-header');
export const vacancyDirectLinkMainContent = document.querySelector(
  '.direct-link__content'
);
export const profession = document.querySelector('.profession');
export const vacancyDirectLinkHeader = document.querySelector(
  '.direct-link__header'
);

// -------------------------------------------------------------------------
// Закомментированные переменные можно удалить:

// const listingPage = document.querySelector('.listing');
// const ourAdvantages = document.querySelector('.why-are-we');
// const upgradeSection = document.querySelector('.upgrade');
// const videoPlayerBlock = document.querySelector('.find');
// const form = document.querySelector('.form');
// const runningLine = document.querySelector('.find__title');
// const goalBlock = document.querySelector('.goal');
// const vacancyDirectLinkSideBar = document.querySelector(
//   '.direct-link__side-bar'
// );
// const vacancyDirectLinkNews = document.querySelector(
//   '.vacancy__news-block-desktop'
// );
// const professionCustomSelect = document.querySelector(
//   '.profession__filter-wrapper'
// );
// const listingPageFilters = document.querySelector(
//   '.listing-top__filters-wrapper'
// );
// const intern = document.querySelector('.intern');
// const direction = document.querySelector('.direction');
// const footerPage = document.querySelector('.footer');
// const directLink = document.querySelector('.direct-link');
// const listingVacansiesContainer = document.querySelector(
//   '.position__card-wrapper'
// );
// const itPageVacancyContainer = document.querySelector(
//   '.profession__job-wrapper'
// );
//---------------------------------------------------------------------------

// Страница 404
const page404 = document.querySelector('.page-404');

//--------------------------------------------------
// Проведен рефакторинг
const vacancyListingComponent = new ListingVacancyPage('.listing');
new ListingVacancyFiltersBlock('.listing-top__filters-wrapper');
new ListingVacansiesPagePopup('.position__card-wrapper');
new ListingVacancyMapBlock(
  '.listing-metro__content-map',
  '.listing-metro__content-list',
  '.listing-top__filter-list-wrapper'
);
new ListingMapPageFilters('.listing-top__filters-wrapper-map');

new ItHubPageAdvantagesBlock('.why-are-we');
new ItHubPageCareerUpgradeBlock('.upgrade');
new ItHubVideoPlayerBlock('.find');
new ItHubRunningLineBlock('.find__title');
const itHubPageGoalBlock = new ItHubGoalsBlock('.goal');
new ItHubPageCustomSelectInProfessionBlock('.profession__filter-wrapper');
new ItHubInternshipBlock('.intern');
const itPageDirection = new ItHubDirectionBlock('.direction');
new ItHubVacanciesContainerInProfessionBlock('.profession__job-wrapper');

new Form('.form');

const headerComponent = new Header('.it-header');

new Footer('.footer');

new VacancyDirecLinkSideBar('.direct-link__side-bar');
new VacancyDirecLinkNewsBlock('.vacancy__news-block-desktop');

//--------------------------------------------------------
// Не получилось изменить входной параметр (выдает ошибку - некорректный селектор)
new VacancyDirecLinkMainContent(vacancyDirectLinkMainContent);
const itHubPageVacancy = new ItHubVacancyBlock(profession);
//-----------------------------------------------------------

// Инициализация классов страницы Розницы
const retailCreateFuture = new CreateRetailFutureComponent('.retail__preview');
const retailMissionBlock = new RetailMissionBlock('.retail__mission');
const retailBrandsBlock = new RetailBrandsBlock('.brands');
const retailPositionBlock = new RetailPositionBlock('.retail__position');
const retailQuote = new RetailQuoteBlock('.retail__quote-container');
const retailInternshipBlock = new RetailInternshipBlock('.retail__internship');
const retailAdvantagesBlock = new RetailAdvantagesBlock('.retail__advantages');
const retailUpgradeBlock = new RetailUpgradeBlock('.upgrade');
const retailFooter = new RetailFooter('.retail__footer');

retailCreateFuture.registerParameters(headerItPage, retailMissionBlock);
retailMissionBlock.registerParameters(retailBrandsBlock, headerItPage);
retailBrandsBlock.getAllBrandsTabs([
  { name: 'mvideo', elements: retailBrandsBlock.mvideoFromBrandsPage },
  { name: 'eldorado', elements: retailBrandsBlock.eldoradoFromBrandsPage },
  { name: 'mvideo', elements: retailPositionBlock.mvideoFromPositionPage },
  { name: 'eldorado', elements: retailPositionBlock.eldoradoFromPositionPage },
  { name: 'mvideo', elements: retailQuote.mvideoFromQuoteBlock },
  { name: 'eldorado', elements: retailQuote.eldoradoFromQuoteBlock },
  {
    name: 'mvideo',
    elements: retailInternshipBlock.mvideoFromInternshipPage,
  },
  {
    name: 'eldorado',
    elements: retailInternshipBlock.eldoradoFromInternshipPage,
  },
  {
    name: 'mvideo',
    elements: retailAdvantagesBlock.mvideoFromRetailAdvantages,
  },
  {
    name: 'eldorado',
    elements: retailAdvantagesBlock.eldoradoFromRetailAdvantages,
  },
  {
    name: 'mvideo',
    elements: retailUpgradeBlock.mvideoFromRetailUpgrade,
  },
  {
    name: 'eldorado',
    elements: retailUpgradeBlock.eldoradoFromRetailUpgrade,
  },
  { name: 'mvideo', elements: retailFooter.mvideoFromFooter },
  { name: 'eldorado', elements: retailFooter.eldoradoFromFooter },
]);

//-------------------------------------------------------------------------
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
    smothScrollingToBlock(itHubPageGoalBlock.el, headerItPage);
  }

  if (event.target.classList.contains('goal__button')) {
    event.preventDefault();
    smothScrollingToBlock(itHubPageVacancy.el, headerItPage);
  }
});

//---------------------------------------------------------------------------------
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

//-----------------------------------------------------------------------------------
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

//-----------------------------------------------------------------------------------
// Анимация переключателей (внутренние шарики) на странице IT
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

//----------------------------------------------------------------------------------
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
      target.parentNode.classList.remove('loading');
      target.removeAttribute('data-src');
    }
  });
};

window.addEventListener('scroll', checkImages);
window.addEventListener('DOMContentLoaded', checkImages);

const flyoutVacancy = document.querySelector('.vacancy');

if (flyoutVacancy) {
  flyoutVacancy.addEventListener('scroll', checkImages);
}
//----------------------------------------------------------------------------------
