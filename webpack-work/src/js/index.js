import { Vacancy } from './components/itHubPage/vacancy';
import { Listing } from './components/vacancyListingPage/listing';
import { Advantages } from './components/itHubPage/advantages';
import { CareerUpgrade } from './components/itHubPage/upgrade';
import { VideoPlayer } from './components/itHubPage/videoPlayer';
import './components/animation';
import './components/itHubPage/Tab';
import './components/itHubPage/animationSvgTab';
import { Select } from './components/itHubPage/select';
import { SvgToggleAnimate } from './components/itHubPage/animationSvgTab';
import { ScrollTo } from './components/itHubPage/scroll';
import { Form } from './components/itHubPage/form';

// Перенос изображений
require.context('../images', true, /\.(png|jpg|svg|gif)$/);
require.context('../fonts', true, /\.(ttf|woff|woff2)$/);

const itHubPage = document.querySelector('.it-hub');
const profession = document.querySelector('.profession');
const listingPage = document.querySelector('.listing');
const ourAdvantages = document.querySelector('.why-are-we');
const upgradeSection = document.querySelector('.upgrade');
const videoPlayerBlock = document.querySelector('.find');
const form = document.querySelector('.form');
const directLink = document.querySelector('.direct-link');
const goalBlock = document.querySelector('.goal');

// const tabContainer = document.querySelector('.tab-content');

if (itHubPage && itHubPage !== null && itHubPage !== undefined) {
  new Vacancy(profession);
  new Advantages(ourAdvantages);
  new CareerUpgrade(upgradeSection);
  new VideoPlayer(videoPlayerBlock);
  new Form(form);
}

// new Tab(tabContainer, 'direction__direction-item-active', document.getElementById('tab-list__select'));

const selectGreen = document.querySelector('.custom-select');
const selectSecond = document.getElementById('custom-select-first');

new Select(selectGreen);
new Select(selectSecond);

const togls = document.getElementById('svg-toggle-activate');
const triger = document.getElementById('my-sticky-element');
new SvgToggleAnimate(triger, togls);
// new ScrollTo('.create-future__button', '.goal', false);

if (listingPage && listingPage !== null && listingPage !== undefined) {
  new Listing(listingPage);
}

if (directLink && directLink !== null && directLink !== undefined) {
  new Form(form);
}

document.body.addEventListener('click', (event) => {
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
    form.firstElementChild.style.background = 'rgba(0, 0, 0, 0.8)';
  }, 300);
}

// Скролл до блока
function smothScrollingToBlock(block) {
  const topOffset = block.offsetTop;

  let interval = setInterval(() => {
    document.scrollingElement.scrollTop += 10;

    if (document.scrollingElement.scrollTop >= topOffset) {
      clearInterval(interval);
    }
  }, 1);
}
