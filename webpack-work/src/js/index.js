// Экспорт классов
import { Vacancy } from './components/itHubPage/vacancy';
import { Listing } from './components/itHubPage/vacancyListingPage/listing';
import { Advantages } from './components/itHubPage/advantages';
import { CareerUpgrade } from './components/itHubPage/upgrade';
import { VideoPlayer } from './components/itHubPage/videoPlayer';
import './components/animation';
import './components/itHubPage/Tab';
import './components/itHubPage/animationSvgTab';
import { Select } from './components/itHubPage/select';
import { SvgToggleAnimate } from './components/itHubPage/animationSvgTab';
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

// Перенос изображений
require.context('../images', true, /\.(png|jpg|svg|gif)$/);
require.context('../fonts', true, /\.(ttf|woff|woff2)$/);

// Глобальные переменные
const profession = document.querySelector('.profession');

const ourAdvantages = document.querySelector('.why-are-we');
const listingPage = document.querySelector('.listing');
const upgradeSection = document.querySelector('.upgrade');
const videoPlayerBlock = document.querySelector('.find');
const form = document.querySelector('.form');
const directLink = document.querySelector('.direct-link');
const goalBlock = document.querySelector('.goal');
const runningLine = document.querySelector('.find__title');
const header = document.querySelector('.it-header');
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

// const tabContainer = document.querySelector('.tab-content');

new Vacancy(profession);
new Advantages(ourAdvantages);
new CareerUpgrade(upgradeSection);
new VideoPlayer(videoPlayerBlock);
new Form(form);
new RunningLine(runningLine);
const vacancyListingComponent = new Listing(listingPage);
// new VacancyDirectLink(directLink);
new Goals(goalBlock);
const headerComponent = new Header(header);
new VacancyDirecLinkSideBar(vacancyDirectLinkSideBar);
new VacancyDirecLinkMainContent(vacancyDirectLinkMainContent);
new VacancyDirecLinkNewsBlock(vacancyDirectLinkNews);
new CustomSelectInProfessionBlock(professionCustomSelect);

// new Tab(tabContainer, 'direction__direction-item-active', document.getElementById('tab-list__select'));

const selectGreen = document.querySelector('.custom-select');
const selectSecond = document.getElementById('custom-select-first');

new Select(selectGreen);
new Select(selectSecond);

const togls = document.getElementById('svg-toggle-activate');
const triger = document.getElementById('my-sticky-element');
new SvgToggleAnimate(triger, togls);
// new ScrollTo('.create-future__button', '.goal', false);

// Слушатели событий, установленные на Body
document.body.addEventListener('click', (event) => {
  headerComponent.closeSelect();
  vacancyListingComponent.closeHeaderSelect();

  if (
    event.target.classList.contains('it-header__button') ||
    event.target.classList.contains('intern__header-link')
  ) {
    event.preventDefault();
    openApplicationForm();
  }

  if (event.target.classList.contains('create-future__button')) {
    event.preventDefault();
    smothScrollingToBlock(goalBlock);
  }

  if (event.target.classList.contains('goal__button')) {
    event.preventDefault();
    smothScrollingToBlock(profession);
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
export function smothScrollingToBlock(block) {
  const topOffset = block.offsetTop - 16;

  let interval = setInterval(() => {
    document.scrollingElement.scrollTop += 10;

    if (document.scrollingElement.scrollTop >= topOffset) {
      clearInterval(interval);
    }
  }, 1);
}
