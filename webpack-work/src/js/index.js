import { Vacancy } from './components/itHubPage/vacancy';
import { Listing } from './components/vacancyListingPage/listing';
import { Advantages } from './components/itHubPage/advantages';
import { CareerUpgrade } from './components/itHubPage/upgrade';
import { VideoPlayer } from './components/itHubPage/videoPlayer';
import './components/animation';
// Перенос изображений
require.context('../images', true, /\.(png|jpg|svg|gif)$/);
require.context('../fonts', true, /\.(ttf|woff|woff2)$/);

const itHubPage = document.querySelector('.it-hub');
const profession = document.querySelector('.profession');
const listingPage = document.querySelector('.listing');
const ourAdvantages = document.querySelector('.why-are-we');
const upgradeSection = document.querySelector('.upgrade');
const videoPlayerBlock = document.querySelector('.find');

if (itHubPage && itHubPage !== null && itHubPage !== undefined) {
  new Vacancy(profession);
  new Advantages(ourAdvantages);
  new CareerUpgrade(upgradeSection);
  new VideoPlayer(videoPlayerBlock);
}

if (listingPage && listingPage !== null && listingPage !== undefined) {
  new Listing(listingPage);
}
