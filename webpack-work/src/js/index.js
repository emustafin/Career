import { Vacancy } from './components/itHubPage/vacancy';
import { Listing } from './components/vacancyListingPage/listing';
import { Advantages } from './components/itHubPage/advantages';
import { CareerUpgrade } from './components/itHubPage/upgrade';
import { VideoPlayer } from './components/itHubPage/videoPlayer';
import { Tab } from './components/itHubPage/Tab';
import './components/animation';
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
const tabContainer = document.querySelector('.tab-content');
const form = document.querySelector('.form');

if (itHubPage && itHubPage !== null && itHubPage !== undefined) {
  new Vacancy(profession);
  new Advantages(ourAdvantages);
  new CareerUpgrade(upgradeSection);
  new VideoPlayer(videoPlayerBlock);
  new Form(form);
}

new Tab(tabContainer, 'direction__direction-item-active');

const selectGreen = document.querySelector('.custom-select');
const selectSecond = document.getElementById('custom-select-second');

new Select(selectGreen);
new Select(selectSecond);

const togls = document.getElementById('svg-toggle-activate');
const triger = document.getElementById('my-sticky-element');
new SvgToggleAnimate(triger, togls);

new ScrollTo('.create-future__button', '.goal', false);

if (listingPage && listingPage !== null && listingPage !== undefined) {
  new Listing(listingPage);
}

document.body.addEventListener('click', (event) => {
  if (
    event.target.classList.contains('it-header__button') ||
    event.target.classList.contains('intern__header-link')
  ) {
    event.preventDefault();
    openApplicationForm();
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
