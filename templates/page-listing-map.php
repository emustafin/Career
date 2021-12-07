<?php 
/*
Template Name: Listing Map
*/
?>
<?php get_header(); ?>
  <body>
  <script src="https://api-maps.yandex.ru/2.1/?apikey=ваш API-ключ&lang=ru_RU"></script>
    <!-- Header -->
    <header class="it-header">
      <div class="container">
        <div class="it-header__wrapper">
          <div class="it-header__item">
            <div class="it-header__directions" data-name="closed">
              <p class="it-header__directions-title">Направления</p>
              <span class="it-header__directions-value"></span>
              <div class="it-header__directions-arrow">
                <svg
                  class="it-header__arrow-bottom"
                  width="10"
                  height="10"
                  viewBox="0 0 10 10"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M5.58237 7.56905V0.925293H4.38237V7.53389L1.42421 4.57574L0.575684 5.42426L4.22213 9.07071C4.65171 9.50029 5.34819 9.50029 5.77776 9.07071L9.42421 5.42426L8.57568 4.57574L5.58237 7.56905Z"
                    fill="black"
                  />
                </svg>
              </div>

              <!-- Дропдаун "НАПРАВЛЕНИЯ" -->
              <div class="it-header__directions-dropdown-wrapper">
                <div class="it-header__directions-dropdown-list">
                  <a
                    href="https://emlifewp.mvideoeldorado.ru/"
                    class="it-header__directions-dropdown-item"
                    target="blank"
                    >IT-департамент
                  </a>
                  <a
                    href="https://job.mvideoeldorado.ru/shops"
                    class="it-header__directions-dropdown-item"
                    target="blank"
                  >
                    Розничные магазины
                  </a>
                  <a
                    href="https://job.mvideoeldorado.ru/office"
                    class="it-header__directions-dropdown-item"
                    target="blank"
                  >
                    Центральный офиc
                  </a>
                  <a
                    href="https://jobinme.mvideoeldorado.ru/logistics"
                    class="it-header__directions-dropdown-item"
                    target="blank"
                  >
                    Сервис и логистика
                  </a>
                  <a
                    href="https://job.mvideoeldorado.ru/students"
                    class="it-header__directions-dropdown-item"
                    target="blank"
                  >
                    Студентам
                  </a>
                </div>
              </div>
              <!-- //Дропдаун "НАПРАВЛЕНИЯ" -->
            </div>
          </div>

          <div class="it-header__item">
            <a href="#" class="it-header__logo">
              <svg
                width="140"
                height="24"
                viewBox="0 0 140 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <g clip-path="url(#clip0_3867:27828)">
                  <path d="M0 21.2667H69.75V24H0V21.2667Z" fill="#E31235" />
                  <path
                    d="M69.75 21.2667H139.5V24H69.75V21.2667Z"
                    fill="#76BC21"
                  />
                  <path
                    d="M45.9377 8.4H49.5063C49.409 7.93333 49.1819 7.6 48.8574 7.33333C48.533 7.06667 48.1437 6.93333 47.722 6.93333C47.3002 6.93333 46.9109 7.06667 46.5865 7.33333C46.2945 7.63333 46.0674 7.96667 45.9377 8.4ZM50.4795 11.4333L51.1284 12.7667C50.6742 13.2 49.636 13.6667 48.0788 13.6667C47.1056 13.6667 45.8728 13.3 45.1266 12.6C44.3805 11.9 43.9912 10.8667 43.9912 9.53333C43.9912 8.26667 44.3156 7.23333 44.9969 6.46667C45.6781 5.7 46.5541 5.33333 47.6895 5.33333C48.9872 5.33333 49.9605 5.8 50.6093 6.76667C51.0959 7.5 51.323 8.43333 51.323 9.63333V9.93333H45.8404C45.8404 10.6 46.0674 11.1 46.4892 11.4667C46.9109 11.8333 47.722 12.0333 48.241 12.0333C49.1494 12 49.8631 11.8 50.4795 11.4333ZM11.0627 0L6.78035 9.66667L2.56291 0L0 13.4H1.91407L3.1793 5.86667L6.68302 13.9667L10.2192 5.86667L11.452 13.4H13.3336L11.0627 0ZM14.9881 13.1333C14.761 12.9 14.6637 12.6333 14.6637 12.3C14.6637 11.9667 14.761 11.7 14.9881 11.4667C15.2152 11.2333 15.4748 11.1333 15.7992 11.1333C16.1236 11.1333 16.3831 11.2333 16.6102 11.4667C16.8373 11.7 16.9347 11.9667 16.9347 12.3C16.9347 12.6333 16.8373 12.9 16.6102 13.1333C16.3831 13.3667 16.1236 13.4667 15.7992 13.4667C15.4748 13.4667 15.2152 13.3667 14.9881 13.1333ZM20.3735 7.86667V11.6333H21.4765C22.3524 11.6333 23.0013 11.4333 23.3581 11.0667C23.715 10.7 23.8772 10.2333 23.8772 9.73333C23.8772 9.2 23.715 8.76667 23.3581 8.4C23.0013 8.03333 22.3849 7.86667 21.509 7.86667H20.3735ZM20.3735 2.7V6.26667H20.925C22.2551 6.26667 22.904 5.66667 22.904 4.43333C22.904 3.26667 22.2551 2.7 20.9899 2.7H20.3735ZM18.5243 0.933333H20.3735C20.8601 0.933333 21.217 0.933333 21.4116 0.966667C21.6387 0.966667 21.9307 1.03333 22.32 1.13333C22.7093 1.2 23.0662 1.36667 23.3581 1.6C24.2665 2.26667 24.7207 3.2 24.7207 4.4C24.7207 5.36667 24.3638 6.1 23.6501 6.66667C24.3638 6.9 24.8829 7.3 25.2398 7.86667C25.5966 8.43333 25.7588 9.03333 25.7588 9.7C25.7588 10.9 25.3371 11.8333 24.526 12.5333C24.2016 12.8 23.8123 13 23.3581 13.1333C22.904 13.2667 22.5471 13.3333 22.32 13.3667C22.0605 13.4 21.736 13.4 21.2819 13.4H18.4919V0.933333H18.5243ZM27.0565 5.53333H28.8408V10L34.0964 4.8V13.4H32.3445V8.83333L27.0565 14V5.53333ZM40.6497 11.7667V7.16667H38.3463V9.33333C38.3463 10.4667 38.0543 11.2667 37.4379 11.7667H40.6497ZM36.6593 5.53333H42.434V11.7667H43.5694V15.6667H41.9473V13.4333H36.562V15.6667H34.9399V11.7667C35.5887 11.7 36.0429 11.3667 36.3673 10.7333C36.562 10.3 36.6917 9.6 36.6917 8.63333V5.53333H36.6593ZM79.0933 5.53333V13.4H77.309V7.16667H75.0056V10.3333C75.0056 11.3 74.7785 12.0667 74.2919 12.6C73.8052 13.1667 73.124 13.4333 72.2156 13.4333C72.1183 13.4333 71.956 13.4333 71.7614 13.4V11.7667C71.8912 11.8 72.0209 11.8 72.0858 11.8C72.4751 11.8 72.7995 11.6667 73.0266 11.4C73.1888 11.2 73.2862 10.8667 73.2862 10.3667V5.53333H79.0933ZM82.5645 11.8333H83.3756C83.7973 11.8333 84.1217 11.7667 84.284 11.6667C84.5435 11.5 84.6733 11.2333 84.6733 10.8667C84.6733 10.5333 84.5435 10.2667 84.284 10.0667C84.0893 9.93333 83.7973 9.9 83.3756 9.9H82.5645V11.8333ZM80.7802 5.53333H82.5645V8.33333H83.6027C83.9271 8.33333 84.1866 8.33333 84.3813 8.36667C84.5759 8.4 84.8355 8.46667 85.1599 8.56667C85.4843 8.7 85.7438 8.86667 85.9385 9.13333C86.3278 9.56667 86.5224 10.1333 86.5224 10.8333C86.5224 11.6667 86.2953 12.3 85.8412 12.7333C85.6465 12.9333 85.387 13.1 85.095 13.2C84.803 13.3 84.5759 13.3667 84.3813 13.3667C84.1866 13.3667 83.9271 13.4 83.5702 13.4H80.7802V5.53333ZM92.6864 11.7667V7.16667H90.383V9.33333C90.383 10.4667 90.091 11.2667 89.4746 11.7667H92.6864ZM88.6636 5.53333H94.4383V11.7667H95.5737V15.6667H93.9516V13.4333H88.5663V15.6667H86.9442V11.7667C87.593 11.7 88.0472 11.3667 88.3716 10.7333C88.5663 10.3 88.696 9.6 88.696 8.63333V5.53333H88.6636ZM109.037 6.96667C108.453 6.96667 107.934 7.2 107.512 7.63333C107.091 8.1 106.863 8.7 106.863 9.5C106.863 10.2 107.058 10.8 107.447 11.3C107.837 11.7667 108.356 12.0333 109.037 12.0333C109.686 12.0333 110.205 11.8 110.594 11.3C110.984 10.8 111.178 10.2 111.178 9.46667C111.178 8.66667 110.951 8.06667 110.529 7.63333C110.14 7.16667 109.621 6.96667 109.037 6.96667ZM106.993 5.53333V6.4C107.577 5.7 108.356 5.33333 109.329 5.33333C110.367 5.33333 111.243 5.7 111.957 6.46667C112.671 7.23333 113.027 8.23333 113.027 9.46667C113.027 10.7 112.638 11.7 111.892 12.5C111.146 13.3 110.27 13.6667 109.329 13.6667C109.134 13.6667 108.907 13.6333 108.713 13.6C108.518 13.5667 108.226 13.4333 107.869 13.2667C107.512 13.0667 107.22 12.8333 106.993 12.5333V17.2H105.209V5.53333H106.993ZM117.894 6.96667C117.245 6.96667 116.726 7.2 116.337 7.7C115.947 8.2 115.753 8.8 115.753 9.53333C115.753 10.2333 115.947 10.8333 116.337 11.3C116.726 11.8 117.245 12.0333 117.894 12.0333C118.543 12.0333 119.094 11.8 119.451 11.3333C119.84 10.8667 120.035 10.2667 120.035 9.5C120.035 8.7 119.84 8.06667 119.418 7.63333C119.029 7.16667 118.51 6.96667 117.894 6.96667ZM119.938 5.53333H121.722V13.4H119.938V12.5667C119.354 13.2667 118.575 13.6333 117.602 13.6333C116.466 13.6333 115.59 13.2333 114.909 12.4C114.228 11.5667 113.903 10.6 113.903 9.46667C113.903 8.33333 114.228 7.36667 114.909 6.53333C115.59 5.7 116.499 5.3 117.634 5.3C118.64 5.3 119.386 5.66667 119.938 6.43333V5.53333ZM128.243 11.7667V7.16667H125.939V9.33333C125.939 10.4667 125.647 11.2667 125.031 11.7667H128.243ZM124.252 5.53333H130.027V11.7667H131.162V15.6667H129.54V13.4333H124.155V15.6667H122.533V11.7667C123.182 11.7 123.636 11.3667 123.96 10.7333C124.155 10.3 124.285 9.6 124.285 8.63333V5.53333H124.252ZM62.0937 3.83333L61.0556 2.66667C62.1586 1.3 64.17 0.666667 65.6299 0.666667C67.3493 0.666667 68.7767 1.2 69.8798 2.3C71.0801 3.5 71.6965 5.1 71.6965 7.13333C71.6965 9.06667 71.0801 10.6667 69.8798 11.9C68.7443 13.0667 67.3169 13.6333 65.565 13.6333C64.2673 13.6333 62.0937 12.9 61.0556 11.6L62.0937 10.4333C63.0994 11.3667 64.2349 11.8333 65.4352 11.8333C66.8302 11.8333 67.9333 11.4 68.7119 10.5C69.3607 9.76667 69.7176 8.86667 69.7824 7.83333H63.7483V6.06667H69.75C69.6202 5.1 69.2309 4.26667 68.647 3.6C67.9008 2.8 66.8951 2.4 65.5974 2.4C64.2673 2.46667 63.1319 2.93333 62.0937 3.83333ZM56.3191 7.1C55.0214 7.1 53.9833 8.16667 53.9833 9.5C53.9833 10.8 55.0214 11.9 56.3191 11.9C57.6167 11.9 58.6549 10.8333 58.6549 9.5C58.6549 8.16667 57.6167 7.1 56.3191 7.1ZM56.3191 13.6667C54.0806 13.6667 52.2638 11.8 52.2638 9.5C52.2638 7.2 54.0806 5.33333 56.3191 5.33333C58.5576 5.33333 60.3743 7.2 60.3743 9.5C60.3743 11.8 58.5576 13.6667 56.3191 13.6667ZM135.445 7.1C134.147 7.1 133.109 8.16667 133.109 9.5C133.109 10.8 134.147 11.9 135.445 11.9C136.742 11.9 137.781 10.8333 137.781 9.5C137.748 8.16667 136.71 7.1 135.445 7.1ZM135.445 13.6667C133.206 13.6667 131.39 11.8 131.39 9.5C131.39 7.2 133.206 5.33333 135.445 5.33333C137.683 5.33333 139.5 7.2 139.5 9.5C139.5 11.8 137.683 13.6667 135.445 13.6667ZM100.116 7.1C98.8179 7.1 97.7798 8.16667 97.7798 9.5C97.7798 10.8 98.8179 11.9 100.116 11.9C101.413 11.9 102.451 10.8333 102.451 9.5C102.451 8.16667 101.413 7.1 100.116 7.1ZM100.116 13.6667C97.8771 13.6667 96.0603 11.8 96.0603 9.5C96.0603 7.2 97.8771 5.33333 100.116 5.33333C102.354 5.33333 104.171 7.2 104.171 9.5C104.203 11.8 102.354 13.6667 100.116 13.6667Z"
                    fill="black"
                  />
                </g>
                <defs>
                  <clipPath id="clip0_3867:27828">
                    <rect width="139.5" height="24" fill="white" />
                  </clipPath>
                </defs>
              </svg>
            </a>
          </div>

          <div class="it-header__item">
            <div class="it-header__contact-us">
              <p class="it-header__contact-text">Свяжитесь с нами</p>
              <a href="tel:+78002002311" class="it-header__phone"
                >8-800-200-23-11</a
              >
            </div>
          </div>

          <div class="it-header__item-mobile">
            <a href="tel:+78002002311" class="it-header__phone-mobile">
              8-800-200-23-11

              <svg
                class="it-header__phone-mobile-icon"
                width="13"
                height="13"
                viewBox="0 0 13 13"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M3.96922 0.585176C3.73823 0.350297 3.36106 0.345586 3.12428 0.574622L1.69904 1.95322L1.68232 1.967C1.65377 1.99091 1.61735 2.02327 1.57573 2.06442C1.49264 2.14657 1.38763 2.26493 1.28296 2.42235C1.07145 2.74047 0.866649 3.21079 0.842278 3.84248C0.79364 5.10319 1.46316 6.84722 3.80749 9.19155C6.15183 11.5359 7.89593 12.2056 9.15667 12.1573C9.78838 12.133 10.2588 11.9284 10.5769 11.717C10.7344 11.6124 10.8528 11.5074 10.935 11.4244C10.9761 11.3828 11.0085 11.3464 11.0324 11.3178L11.0431 11.3049L12.4394 9.90186C12.5521 9.78864 12.615 9.63515 12.6141 9.47542C12.6133 9.31568 12.5488 9.16288 12.4349 9.05086L10.4218 7.07077C10.187 6.83976 9.80976 6.84131 9.57681 7.07426L8.20204 8.44903C8.19105 8.44876 8.17577 8.44766 8.15533 8.44485C8.04077 8.4291 7.86022 8.36797 7.61752 8.23582C7.13847 7.97496 6.55941 7.51629 6.02136 6.97824C5.48331 6.44019 5.02464 5.86113 4.76378 5.38208C4.63163 5.13939 4.5705 4.95883 4.55475 4.84427C4.55194 4.82383 4.55084 4.80855 4.55057 4.79756L5.92534 3.42279C6.15827 3.18986 6.15985 2.81269 5.92887 2.57782L3.96922 0.585176ZM2.44732 2.89089L2.4464 2.89156L2.45501 2.88514L2.4518 2.88758L2.44902 2.88965L2.44732 2.89089ZM2.45501 2.88514L2.45276 2.88702C2.44764 2.8913 2.43587 2.9015 2.41941 2.91776C2.38636 2.95044 2.3357 3.00636 2.28224 3.08676C2.1775 3.24429 2.05624 3.50379 2.04139 3.88875C2.01158 4.66134 2.41096 6.09796 4.65602 8.34302C6.90108 10.5881 8.33788 10.9878 9.11069 10.9581C9.49575 10.9434 9.75532 10.8222 9.91288 10.7175L10.1683 10.4828L11.1631 9.48315L10.0046 8.34356L9.01782 9.33031C8.71242 9.63571 8.31426 9.67798 7.99191 9.63367C7.67377 9.58994 7.34724 9.45502 7.04365 9.28971C6.43014 8.95563 5.75979 8.41372 5.17284 7.82677C4.58589 7.23982 4.04397 6.56946 3.7099 5.95595C3.54458 5.65236 3.40966 5.32583 3.36593 5.00769C3.32162 4.68534 3.36389 4.28718 3.66929 3.98178L4.65607 2.995L3.53087 1.85085L2.5111 2.83725C2.49323 2.85454 2.47489 2.87021 2.45501 2.88514Z"
                  fill="black"
                ></path>
              </svg>
            </a>
          </div>

          <a href="#" class="it-header__button">Заполнить анкету</a>
        </div>
      </div>
    </header>
    <!-- Header -->

    <!-- Section Listing-filter-Top -->
    <section class="listing-top">
      <div class="page-container">
        <h2 class="listing-top__title">
          Вакансии
          <span class="listing-top__counter">162</span>
        </h2>
        <div class="listing-top__dropdown">
          <div class="listing-top__dropdown-container">
            <span class="listing-top__in">в</span>
            <span class="listing-top__where">
              Розничных магазинах

              <svg
                class="listing-top__dropdown-arrow"
                width="38"
                height="36"
                viewBox="0 0 38 36"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M16.3663 28.1186V0.160156H21.4663V27.9706L34.0469 15.5064L37.6363 19.1294L22.1319 34.4903C20.3098 36.2956 17.3734 36.2956 15.5513 34.4903L0.046875 19.1294L3.63632 15.5064L16.3663 28.1186Z"
                  fill="black"
                />
              </svg>
            </span>
          </div>

          <div class="listing-top__dropdown-list hide">
            <p class="listing-top__dropdown-list-item">
              <span class="listing-top__dropdown-list-item-value">
                Розничных магазинах
              </span>

              <span class="listing-top__counter-list-item">1184</span>
            </p>
            <p class="listing-top__dropdown-list-item">
              <span class="listing-top__dropdown-list-item-value">
                Сервисе и логистике
              </span>

              <span class="listing-top__counter-list-item">52</span>
            </p>
            <p class="listing-top__dropdown-list-item">
              <span class="listing-top__dropdown-list-item-value">
                Центральном офисе
              </span>

              <span class="listing-top__counter-list-item">34</span>
            </p>
            <p class="listing-top__dropdown-list-item">
              <span class="listing-top__dropdown-list-item-value">
                IT-хабе
              </span>

              <span class="listing-top__counter-list-item">162</span>
            </p>
          </div>
        </div>

        <div
          class="listing-top__filters-wrapper listing-top__filters-wrapper-map"
        >
          <div class="listing-top__filter-item">
            <input type="hidden" id="listing-top__profession-filter" />
            <input
              name="tags-outside"
              class="tagify--outside listing-top__profession-filter"
              placeholder="Выбери профессию"
            />

            <svg
              class="listing-top__filter-item-search-icon"
              width="10"
              height="10"
              viewBox="0 0 10 10"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M4.50039 0.399994C2.23602 0.399994 0.400391 2.23563 0.400391 4.49999C0.400391 6.76436 2.23602 8.59999 4.50039 8.59999C5.41615 8.59999 6.26178 8.29977 6.94424 7.79237L8.57613 9.42426L9.42465 8.57573L7.79276 6.94384C8.30016 6.26139 8.60039 5.41575 8.60039 4.49999C8.60039 2.23563 6.76476 0.399994 4.50039 0.399994ZM1.60039 4.49999C1.60039 2.89837 2.89876 1.59999 4.50039 1.59999C6.10202 1.59999 7.40039 2.89837 7.40039 4.49999C7.40039 6.10162 6.10202 7.39999 4.50039 7.39999C2.89876 7.39999 1.60039 6.10162 1.60039 4.49999Z"
                fill="black"
              />
            </svg>
          </div>

          <div
            class="listing-top__filter-item listing-top__specialization-on-map"
          >
            <p class="profession__filter-item-title">Специализация</p>
            <div class="profession__filter-item-select">
              <input type="hidden" id="listing__specialization-select" />
              <input
                class="selectMode listing__specialization-select"
                name="tags-select-mode"
                placeholder="Выбери специализацию"
              />
              <div class="listing__filter-item-select-arrow">
                <svg
                  class="listing__filter-item-select-arrow-image"
                  width="10"
                  height="10"
                  viewBox="0 0 10 10"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M5.58286 7.56905V0.925293H4.38286V7.53389L1.4247 4.57574L0.576172 5.42426L4.22262 9.07071C4.65219 9.50029 5.34868 9.50029 5.77825 9.07071L9.4247 5.42426L8.57617 4.57574L5.58286 7.56905Z"
                    fill="black"
                  />
                </svg>
              </div>
            </div>
            <div class="listing__filter-item-border-bottom">
              <label
                class="
                  profession__filter-checbox-listing
                  profession__filter-checbox-map
                "
              >
                <input class="profession__filter-input" type="checkbox" />
                Без опыта
                <span class="profession__filter-checbox-value">
                  <svg
                    class="listing-metro__select-shop-checkbox-image"
                    width="10"
                    height="8"
                    viewBox="0 0 10 8"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M3.50044 6.15191L9.07617 0.576172L9.9247 1.4247L3.50044 7.84896L0.0761719 4.4247L0.9247 3.57617L3.50044 6.15191Z"
                      fill="black"
                    ></path>
                  </svg>
                </span>
              </label>
            </div>
          </div>

          <div class="listing-top__filter-item listing-top__filter-sity">
            <p class="profession__filter-item-title">Город</p>
            <div class="profession__filter-item-select">
              <input type="hidden" id="listing__level-select" />
              <input
                class="selectMode listing__level-select"
                name="tags-select-mode"
                placeholder="Выбери город"
              />

              <div class="listing__filter-item-select-arrow">
                <svg
                  class="listing__filter-item-select-arrow-image"
                  width="10"
                  height="10"
                  viewBox="0 0 10 10"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M5.58286 7.56905V0.925293H4.38286V7.53389L1.4247 4.57574L0.576172 5.42426L4.22262 9.07071C4.65219 9.50029 5.34868 9.50029 5.77825 9.07071L9.4247 5.42426L8.57617 4.57574L5.58286 7.56905Z"
                    fill="black"
                  />
                </svg>
              </div>
            </div>
            <div class="listing__filter-item-border-bottom"></div>
          </div>

          <div class="listing-top__filter-item">
            <p class="profession__filter-item-title">Станция метро</p>
            <div class="profession__filter-item-select">
              <input type="hidden" id="listing__city-select" />
              <input
                class="selectMode listing__city-select"
                name="tags-select-mode"
                placeholder="Выбери станцию метро"
              />

              <div class="listing__filter-item-select-arrow">
                <svg
                  class="listing__filter-item-select-arrow-image"
                  width="10"
                  height="10"
                  viewBox="0 0 10 10"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M5.58286 7.56905V0.925293H4.38286V7.53389L1.4247 4.57574L0.576172 5.42426L4.22262 9.07071C4.65219 9.50029 5.34868 9.50029 5.77825 9.07071L9.4247 5.42426L8.57617 4.57574L5.58286 7.56905Z"
                    fill="black"
                  />
                </svg>
              </div>
            </div>

            <div class="listing__filter-item-border-bottom"></div>
          </div>
          <button
            class="
              listing-top__filter-item-button-reset
              listing-top__filter-item-button-reset-map
            "
          >
            Сбросить фильтры
          </button>

          <div
            class="listing-top__filter-item listing-top__filter-list-wrapper"
          >
            <div class="listing-top__filter-list-item" data-name="list">
              <svg
                class="listing-top__filter-list-item-arrow"
                width="14"
                height="10"
                viewBox="0 0 14 10"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M11.5515 4.40044L8.57574 1.4247L9.42426 0.576172L13.8485 5.00044L9.42426 9.4247L8.57574 8.57617L11.5515 5.60044H0V4.40044H11.5515Z"
                  fill="black"
                />
              </svg>

              <span class="listing-top__filter-list-item-text"> списком </span>
            </div>

            <div
              class="
                listing-top__filter-list-item
                listing-top__filter-list-item-active
              "
              data-name="map"
            >
              <svg
                class="listing-top__filter-list-item-arrow"
                width="14"
                height="10"
                viewBox="0 0 14 10"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M11.5515 4.40044L8.57574 1.4247L9.42426 0.576172L13.8485 5.00044L9.42426 9.4247L8.57574 8.57617L11.5515 5.60044H0V4.40044H11.5515Z"
                  fill="black"
                />
              </svg>

              <span class="listing-top__filter-list-item-text"> на карте </span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- //Section Listing-filter-Top -->

    <!-- Content block -->
    <div class="listing-metro__content listing-metro__content-map">
      <!-- Left bar -->
      <div class="listing-metro__left-bar">
        <div class="isting-metro__shops-list-container">
          <div class="listing-metro__shops-list-title">
            Выберите удобное место работы на карте или из списка
          </div>

          <div class="listing-metro__shops-list mvideo">
            <div class="listing-metro__shop">
              <div class="listing-metro__shop-title">ТРК «Европолис»</div>

              <div class="listing-metro__shop-address">
                Очень длинный адрес в две строки ул. Мира, д. 211, корп. 1, этаж
                2
              </div>
            </div>

            <div class="listing-metro__shop">
              <div class="listing-metro__shop-title">ТРК «Европолис»</div>

              <div class="listing-metro__shop-address">
                Очень длинный адрес в две строки ул. Мира, д. 211, корп. 1, этаж
                2
              </div>
            </div>

            <div class="listing-metro__shop">
              <div class="listing-metro__shop-title">ТРК «Европолис»</div>

              <div class="listing-metro__shop-address">
                Очень длинный адрес в две строки ул. Мира, д. 211, корп. 1, этаж
                2
              </div>
            </div>

            <div class="listing-metro__shop">
              <div class="listing-metro__shop-title">ТРК «Европолис»</div>

              <div class="listing-metro__shop-address">
                Очень длинный адрес в две строки ул. Мира, д. 211, корп. 1, этаж
                2
              </div>
            </div>

            <div class="listing-metro__shop">
              <div class="listing-metro__shop-title">ТРК «Европолис»</div>

              <div class="listing-metro__shop-address">
                Очень длинный адрес в две строки ул. Мира, д. 211, корп. 1, этаж
                2
              </div>
            </div>

            <div class="listing-metro__shop">
              <div class="listing-metro__shop-title">ТРК «Европолис»</div>

              <div class="listing-metro__shop-address">
                Очень длинный адрес в две строки ул. Мира, д. 211, корп. 1, этаж
                2
              </div>
            </div>
          </div>

          <div class="listing-metro__shops-list eldorado hide">
            <div class="listing-metro__shop">
              <div class="listing-metro__shop-title">ТРК «Европолис»</div>

              <div class="listing-metro__shop-address">
                Очень длинный адрес в две строки ул. Мира, д. 211, корп. 1, этаж
                2
              </div>
            </div>

            <div class="listing-metro__shop">
              <div class="listing-metro__shop-title">ТРК «Европолис»</div>

              <div class="listing-metro__shop-address">
                Очень длинный адрес в две строки ул. Мира, д. 211, корп. 1, этаж
                2
              </div>
            </div>

            <div class="listing-metro__shop">
              <div class="listing-metro__shop-title">ТРК «Европолис»</div>

              <div class="listing-metro__shop-address">
                Очень длинный адрес в две строки ул. Мира, д. 211, корп. 1, этаж
                2
              </div>
            </div>

            <div class="listing-metro__shop">
              <div class="listing-metro__shop-title">ТРК «Европолис»</div>

              <div class="listing-metro__shop-address">
                Очень длинный адрес в две строки ул. Мира, д. 211, корп. 1, этаж
                2
              </div>
            </div>

            <div class="listing-metro__shop">
              <div class="listing-metro__shop-title">ТРК «Европолис»</div>

              <div class="listing-metro__shop-address">
                Очень длинный адрес в две строки ул. Мира, д. 211, корп. 1, этаж
                2
              </div>
            </div>

            <div class="listing-metro__shop">
              <div class="listing-metro__shop-title">ТРК «Европолис»</div>

              <div class="listing-metro__shop-address">
                Очень длинный адрес в две строки ул. Мира, д. 211, корп. 1, этаж
                2
              </div>
            </div>
          </div>
        </div>

        <div class="isting-metro__single-shop-container hide">
          <div class="listing-metro__location-wrapper">
            <a href="#" class="listing-metro__link-to-shops">
              <svg
                width="14"
                height="10"
                viewBox="0 0 14 10"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M4.57661 0.576172L0.152344 5.00044L4.57661 9.4247L5.42514 8.57617L2.4494 5.60044H14.0009V4.40044H2.4494L5.42514 1.4247L4.57661 0.576172Z"
                  fill="black"
                />
              </svg>

              Назад к списку магазинов
            </a>
            <span class="listing-metro__location-place"> ТРК «Европолис» </span>
            <span class="listing-metro__location-adress">
              г. Москва, пр. Мира, д. 211, корп. 1, этаж 2
            </span>
            <button class="listing-metro__route-button">
              Построить маршрут

              <svg
                class="listing-metro__route-arrow"
                width="14"
                height="10"
                viewBox="0 0 14 10"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M11.5515 4.40044L8.57574 1.4247L9.42426 0.576172L13.8485 5.00044L9.42426 9.4247L8.57574 8.57617L11.5515 5.60044H0V4.40044H11.5515Z"
                  fill="black"
                />
              </svg>
            </button>

            <div
              class="
                listing-metro__location-metro-container
                listing-metro__location-on-map
              "
            >
              <div class="listing-metro__location-metro-item sokol-line">
                <span class="listing-metro__location-metro-station">
                  Красносельская
                </span>
                <span class="listing-metro__location-metro-time">7 мин</span>
              </div>
              <div class="listing-metro__location-metro-item arbat-line">
                <span class="listing-metro__location-metro-station">
                  Бауманская
                </span>
                <span class="listing-metro__location-metro-time">7 мин</span>
              </div>
              <div class="listing-metro__location-metro-item sokol-line">
                <span class="listing-metro__location-metro-station">
                  Комсомольская
                </span>
                <span class="listing-metro__location-metro-time">7 мин</span>
              </div>
              <div class="listing-metro__location-metro-item mcd-line">
                <span class="listing-metro__location-metro-station">
                  Каланчёвская
                </span>
                <span class="listing-metro__location-metro-time">7 мин</span>
              </div>
            </div>
          </div>

          <div class="listing-metro__profession-container mvideo">
            <div class="listing-metro__profession-title">
              Вакансии магазина

              <span class="listing-metro__profession-title-shop">
                «М.Видео»
              </span>
            </div>

            <div class="listing-metro__profession-item">
              <div class="listing-metro__profession-item-left-bar">
                <p class="listing-metro__profession-name">Продавец</p>
                <div class="listing-metro__profession-bread-crumbs">
                  <a href="#" class="listing-metro__profession-crumb">
                    Розничные магазины

                    <svg
                      class="listing-metro__profession-crumb-arrow"
                      width="12"
                      height="8"
                      viewBox="0 0 12 8"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M9.4136 3.54984L7.1818 1.31804L7.8182 0.681641L11.1364 3.99984L7.8182 7.31804L7.1818 6.68164L9.4136 4.44984H0.75V3.54984H9.4136Z"
                        fill="rgba(0, 0, 0, 0.5)"
                      />
                    </svg>
                  </a>

                  <a href="#" class="listing-metro__profession-crumb">
                    Продажи

                    <svg
                      class="listing-metro__profession-crumb-arrow"
                      width="12"
                      height="8"
                      viewBox="0 0 12 8"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M9.4136 3.54984L7.1818 1.31804L7.8182 0.681641L11.1364 3.99984L7.8182 7.31804L7.1818 6.68164L9.4136 4.44984H0.75V3.54984H9.4136Z"
                        fill="rgba(0, 0, 0, 0.5)"
                      />
                    </svg>
                  </a>
                </div>
              </div>

              <div class="listing-metro__profession-item-right-bar">
                <p class="listing-metro__profession-conditions">
                  от
                  <span class="listing-metro__profession-price">80 000</span>
                  ₽
                </p>
                <div class="listing-metro__profession-expiriens">
                  Можно без опыта
                </div>
              </div>

              <a href="#" class="listing-metro__profession-item-link">
                выбрать магазин

                <svg
                  width="14"
                  height="10"
                  viewBox="0 0 14 10"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M11.5515 4.40044L8.57574 1.4247L9.42426 0.576172L13.8485 5.00044L9.42426 9.4247L8.57574 8.57617L11.5515 5.60044H0L0 4.40044H11.5515Z"
                    fill="black"
                  />
                </svg>
              </a>
            </div>

            <div class="listing-metro__profession-item">
              <div class="listing-metro__profession-item-left-bar">
                <p class="listing-metro__profession-name">
                  Менеджер торгового зала
                </p>
                <div class="listing-metro__profession-bread-crumbs">
                  <a href="#" class="listing-metro__profession-crumb">
                    Розничные магазины

                    <svg
                      class="listing-metro__profession-crumb-arrow"
                      width="12"
                      height="8"
                      viewBox="0 0 12 8"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M9.4136 3.54984L7.1818 1.31804L7.8182 0.681641L11.1364 3.99984L7.8182 7.31804L7.1818 6.68164L9.4136 4.44984H0.75V3.54984H9.4136Z"
                        fill="rgba(0, 0, 0, 0.5)"
                      />
                    </svg>
                  </a>

                  <a href="#" class="listing-metro__profession-crumb">
                    Продажи

                    <svg
                      class="listing-metro__profession-crumb-arrow"
                      width="12"
                      height="8"
                      viewBox="0 0 12 8"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M9.4136 3.54984L7.1818 1.31804L7.8182 0.681641L11.1364 3.99984L7.8182 7.31804L7.1818 6.68164L9.4136 4.44984H0.75V3.54984H9.4136Z"
                        fill="rgba(0, 0, 0, 0.5)"
                      />
                    </svg>
                  </a>
                </div>
              </div>

              <div class="listing-metro__profession-item-right-bar">
                <p class="listing-metro__profession-conditions">
                  от
                  <span class="listing-metro__profession-price">80 000</span>
                  ₽
                </p>
                <div class="listing-metro__profession-expiriens">
                  Можно без опыта
                </div>
              </div>

              <a href="#" class="listing-metro__profession-item-link">
                выбрать магазин

                <svg
                  width="14"
                  height="10"
                  viewBox="0 0 14 10"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M11.5515 4.40044L8.57574 1.4247L9.42426 0.576172L13.8485 5.00044L9.42426 9.4247L8.57574 8.57617L11.5515 5.60044H0L0 4.40044H11.5515Z"
                    fill="black"
                  />
                </svg>
              </a>
            </div>

            <div class="listing-metro__profession-item">
              <div class="listing-metro__profession-item-left-bar">
                <p class="listing-metro__profession-name">Кладовщик</p>
                <div class="listing-metro__profession-bread-crumbs">
                  <a href="#" class="listing-metro__profession-crumb">
                    Розничные магазины

                    <svg
                      class="listing-metro__profession-crumb-arrow"
                      width="12"
                      height="8"
                      viewBox="0 0 12 8"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M9.4136 3.54984L7.1818 1.31804L7.8182 0.681641L11.1364 3.99984L7.8182 7.31804L7.1818 6.68164L9.4136 4.44984H0.75V3.54984H9.4136Z"
                        fill="rgba(0, 0, 0, 0.5)"
                      />
                    </svg>
                  </a>

                  <a href="#" class="listing-metro__profession-crumb">
                    Продажи

                    <svg
                      class="listing-metro__profession-crumb-arrow"
                      width="12"
                      height="8"
                      viewBox="0 0 12 8"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M9.4136 3.54984L7.1818 1.31804L7.8182 0.681641L11.1364 3.99984L7.8182 7.31804L7.1818 6.68164L9.4136 4.44984H0.75V3.54984H9.4136Z"
                        fill="rgba(0, 0, 0, 0.5)"
                      />
                    </svg>
                  </a>
                </div>
              </div>

              <div class="listing-metro__profession-item-right-bar">
                <p class="listing-metro__profession-conditions">
                  от
                  <span class="listing-metro__profession-price">80 000</span>
                  ₽
                </p>
                <div class="listing-metro__profession-expiriens">
                  Можно без опыта
                </div>
              </div>

              <a href="#" class="listing-metro__profession-item-link">
                выбрать магазин

                <svg
                  width="14"
                  height="10"
                  viewBox="0 0 14 10"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M11.5515 4.40044L8.57574 1.4247L9.42426 0.576172L13.8485 5.00044L9.42426 9.4247L8.57574 8.57617L11.5515 5.60044H0L0 4.40044H11.5515Z"
                    fill="black"
                  />
                </svg>
              </a>
            </div>

            <div class="listing-metro__profession-item">
              <div class="listing-metro__profession-item-left-bar">
                <p class="listing-metro__profession-name">Старший кассир</p>
                <div class="listing-metro__profession-bread-crumbs">
                  <a href="#" class="listing-metro__profession-crumb">
                    Розничные магазины

                    <svg
                      class="listing-metro__profession-crumb-arrow"
                      width="12"
                      height="8"
                      viewBox="0 0 12 8"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M9.4136 3.54984L7.1818 1.31804L7.8182 0.681641L11.1364 3.99984L7.8182 7.31804L7.1818 6.68164L9.4136 4.44984H0.75V3.54984H9.4136Z"
                        fill="rgba(0, 0, 0, 0.5)"
                      />
                    </svg>
                  </a>

                  <a href="#" class="listing-metro__profession-crumb">
                    Продажи

                    <svg
                      class="listing-metro__profession-crumb-arrow"
                      width="12"
                      height="8"
                      viewBox="0 0 12 8"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M9.4136 3.54984L7.1818 1.31804L7.8182 0.681641L11.1364 3.99984L7.8182 7.31804L7.1818 6.68164L9.4136 4.44984H0.75V3.54984H9.4136Z"
                        fill="rgba(0, 0, 0, 0.5)"
                      />
                    </svg>
                  </a>
                </div>
              </div>

              <div class="listing-metro__profession-item-right-bar">
                <p class="listing-metro__profession-conditions">
                  от
                  <span class="listing-metro__profession-price">80 000</span>
                  ₽
                </p>
                <div class="listing-metro__profession-expiriens">
                  Можно без опыта
                </div>
              </div>

              <a href="#" class="listing-metro__profession-item-link">
                выбрать магазин

                <svg
                  width="14"
                  height="10"
                  viewBox="0 0 14 10"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M11.5515 4.40044L8.57574 1.4247L9.42426 0.576172L13.8485 5.00044L9.42426 9.4247L8.57574 8.57617L11.5515 5.60044H0L0 4.40044H11.5515Z"
                    fill="black"
                  />
                </svg>
              </a>
            </div>

            <div class="listing-metro__profession-item">
              <div class="listing-metro__profession-item-left-bar">
                <p class="listing-metro__profession-name">Кассир</p>
                <div class="listing-metro__profession-bread-crumbs">
                  <a href="#" class="listing-metro__profession-crumb">
                    Розничные магазины

                    <svg
                      class="listing-metro__profession-crumb-arrow"
                      width="12"
                      height="8"
                      viewBox="0 0 12 8"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M9.4136 3.54984L7.1818 1.31804L7.8182 0.681641L11.1364 3.99984L7.8182 7.31804L7.1818 6.68164L9.4136 4.44984H0.75V3.54984H9.4136Z"
                        fill="rgba(0, 0, 0, 0.5)"
                      />
                    </svg>
                  </a>

                  <a href="#" class="listing-metro__profession-crumb">
                    Продажи

                    <svg
                      class="listing-metro__profession-crumb-arrow"
                      width="12"
                      height="8"
                      viewBox="0 0 12 8"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M9.4136 3.54984L7.1818 1.31804L7.8182 0.681641L11.1364 3.99984L7.8182 7.31804L7.1818 6.68164L9.4136 4.44984H0.75V3.54984H9.4136Z"
                        fill="rgba(0, 0, 0, 0.5)"
                      />
                    </svg>
                  </a>
                </div>
              </div>

              <div class="listing-metro__profession-item-right-bar">
                <p class="listing-metro__profession-conditions">
                  от
                  <span class="listing-metro__profession-price">80 000</span>
                  ₽
                </p>
                <div class="listing-metro__profession-expiriens">
                  Можно без опыта
                </div>
              </div>

              <a href="#" class="listing-metro__profession-item-link">
                выбрать магазин

                <svg
                  width="14"
                  height="10"
                  viewBox="0 0 14 10"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M11.5515 4.40044L8.57574 1.4247L9.42426 0.576172L13.8485 5.00044L9.42426 9.4247L8.57574 8.57617L11.5515 5.60044H0L0 4.40044H11.5515Z"
                    fill="black"
                  />
                </svg>
              </a>
            </div>
          </div>

          <div class="listing-metro__profession-container eldorado hide">
            <div class="listing-metro__profession-title">
              Вакансии магазина

              <span class="listing-metro__profession-title-shop">
                «Эльдорадо»
              </span>
            </div>

            <div class="listing-metro__profession-item">
              <div class="listing-metro__profession-item-left-bar">
                <p class="listing-metro__profession-name">Продавец</p>
                <div class="listing-metro__profession-bread-crumbs">
                  <a href="#" class="listing-metro__profession-crumb">
                    Розничные магазины

                    <svg
                      class="listing-metro__profession-crumb-arrow"
                      width="12"
                      height="8"
                      viewBox="0 0 12 8"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M9.4136 3.54984L7.1818 1.31804L7.8182 0.681641L11.1364 3.99984L7.8182 7.31804L7.1818 6.68164L9.4136 4.44984H0.75V3.54984H9.4136Z"
                        fill="rgba(0, 0, 0, 0.5)"
                      />
                    </svg>
                  </a>

                  <a href="#" class="listing-metro__profession-crumb">
                    Продажи

                    <svg
                      class="listing-metro__profession-crumb-arrow"
                      width="12"
                      height="8"
                      viewBox="0 0 12 8"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M9.4136 3.54984L7.1818 1.31804L7.8182 0.681641L11.1364 3.99984L7.8182 7.31804L7.1818 6.68164L9.4136 4.44984H0.75V3.54984H9.4136Z"
                        fill="rgba(0, 0, 0, 0.5)"
                      />
                    </svg>
                  </a>
                </div>
              </div>

              <div class="listing-metro__profession-item-right-bar">
                <p class="listing-metro__profession-conditions">
                  от
                  <span class="listing-metro__profession-price">80 000</span>
                  ₽
                </p>
                <div class="listing-metro__profession-expiriens">
                  Можно без опыта
                </div>
              </div>

              <a href="#" class="listing-metro__profession-item-link">
                выбрать магазин

                <svg
                  width="14"
                  height="10"
                  viewBox="0 0 14 10"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M11.5515 4.40044L8.57574 1.4247L9.42426 0.576172L13.8485 5.00044L9.42426 9.4247L8.57574 8.57617L11.5515 5.60044H0L0 4.40044H11.5515Z"
                    fill="black"
                  />
                </svg>
              </a>
            </div>

            <div class="listing-metro__profession-item">
              <div class="listing-metro__profession-item-left-bar">
                <p class="listing-metro__profession-name">
                  Менеджер торгового зала
                </p>
                <div class="listing-metro__profession-bread-crumbs">
                  <a href="#" class="listing-metro__profession-crumb">
                    Розничные магазины

                    <svg
                      class="listing-metro__profession-crumb-arrow"
                      width="12"
                      height="8"
                      viewBox="0 0 12 8"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M9.4136 3.54984L7.1818 1.31804L7.8182 0.681641L11.1364 3.99984L7.8182 7.31804L7.1818 6.68164L9.4136 4.44984H0.75V3.54984H9.4136Z"
                        fill="rgba(0, 0, 0, 0.5)"
                      />
                    </svg>
                  </a>

                  <a href="#" class="listing-metro__profession-crumb">
                    Продажи

                    <svg
                      class="listing-metro__profession-crumb-arrow"
                      width="12"
                      height="8"
                      viewBox="0 0 12 8"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M9.4136 3.54984L7.1818 1.31804L7.8182 0.681641L11.1364 3.99984L7.8182 7.31804L7.1818 6.68164L9.4136 4.44984H0.75V3.54984H9.4136Z"
                        fill="rgba(0, 0, 0, 0.5)"
                      />
                    </svg>
                  </a>
                </div>
              </div>

              <div class="listing-metro__profession-item-right-bar">
                <p class="listing-metro__profession-conditions">
                  от
                  <span class="listing-metro__profession-price">80 000</span>
                  ₽
                </p>
                <div class="listing-metro__profession-expiriens">
                  Можно без опыта
                </div>
              </div>

              <a href="#" class="listing-metro__profession-item-link">
                выбрать магазин

                <svg
                  width="14"
                  height="10"
                  viewBox="0 0 14 10"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M11.5515 4.40044L8.57574 1.4247L9.42426 0.576172L13.8485 5.00044L9.42426 9.4247L8.57574 8.57617L11.5515 5.60044H0L0 4.40044H11.5515Z"
                    fill="black"
                  />
                </svg>
              </a>
            </div>

            <div class="listing-metro__profession-item">
              <div class="listing-metro__profession-item-left-bar">
                <p class="listing-metro__profession-name">Кладовщик</p>
                <div class="listing-metro__profession-bread-crumbs">
                  <a href="#" class="listing-metro__profession-crumb">
                    Розничные магазины

                    <svg
                      class="listing-metro__profession-crumb-arrow"
                      width="12"
                      height="8"
                      viewBox="0 0 12 8"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M9.4136 3.54984L7.1818 1.31804L7.8182 0.681641L11.1364 3.99984L7.8182 7.31804L7.1818 6.68164L9.4136 4.44984H0.75V3.54984H9.4136Z"
                        fill="rgba(0, 0, 0, 0.5)"
                      />
                    </svg>
                  </a>

                  <a href="#" class="listing-metro__profession-crumb">
                    Продажи

                    <svg
                      class="listing-metro__profession-crumb-arrow"
                      width="12"
                      height="8"
                      viewBox="0 0 12 8"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M9.4136 3.54984L7.1818 1.31804L7.8182 0.681641L11.1364 3.99984L7.8182 7.31804L7.1818 6.68164L9.4136 4.44984H0.75V3.54984H9.4136Z"
                        fill="rgba(0, 0, 0, 0.5)"
                      />
                    </svg>
                  </a>
                </div>
              </div>

              <div class="listing-metro__profession-item-right-bar">
                <p class="listing-metro__profession-conditions">
                  от
                  <span class="listing-metro__profession-price">80 000</span>
                  ₽
                </p>
                <div class="listing-metro__profession-expiriens">
                  Можно без опыта
                </div>
              </div>

              <a href="#" class="listing-metro__profession-item-link">
                выбрать магазин

                <svg
                  width="14"
                  height="10"
                  viewBox="0 0 14 10"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M11.5515 4.40044L8.57574 1.4247L9.42426 0.576172L13.8485 5.00044L9.42426 9.4247L8.57574 8.57617L11.5515 5.60044H0L0 4.40044H11.5515Z"
                    fill="black"
                  />
                </svg>
              </a>
            </div>

            <div class="listing-metro__profession-item">
              <div class="listing-metro__profession-item-left-bar">
                <p class="listing-metro__profession-name">Старший кассир</p>
                <div class="listing-metro__profession-bread-crumbs">
                  <a href="#" class="listing-metro__profession-crumb">
                    Розничные магазины

                    <svg
                      class="listing-metro__profession-crumb-arrow"
                      width="12"
                      height="8"
                      viewBox="0 0 12 8"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M9.4136 3.54984L7.1818 1.31804L7.8182 0.681641L11.1364 3.99984L7.8182 7.31804L7.1818 6.68164L9.4136 4.44984H0.75V3.54984H9.4136Z"
                        fill="rgba(0, 0, 0, 0.5)"
                      />
                    </svg>
                  </a>

                  <a href="#" class="listing-metro__profession-crumb">
                    Продажи

                    <svg
                      class="listing-metro__profession-crumb-arrow"
                      width="12"
                      height="8"
                      viewBox="0 0 12 8"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M9.4136 3.54984L7.1818 1.31804L7.8182 0.681641L11.1364 3.99984L7.8182 7.31804L7.1818 6.68164L9.4136 4.44984H0.75V3.54984H9.4136Z"
                        fill="rgba(0, 0, 0, 0.5)"
                      />
                    </svg>
                  </a>
                </div>
              </div>

              <div class="listing-metro__profession-item-right-bar">
                <p class="listing-metro__profession-conditions">
                  от
                  <span class="listing-metro__profession-price">80 000</span>
                  ₽
                </p>
                <div class="listing-metro__profession-expiriens">
                  Можно без опыта
                </div>
              </div>

              <a href="#" class="listing-metro__profession-item-link">
                выбрать магазин

                <svg
                  width="14"
                  height="10"
                  viewBox="0 0 14 10"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M11.5515 4.40044L8.57574 1.4247L9.42426 0.576172L13.8485 5.00044L9.42426 9.4247L8.57574 8.57617L11.5515 5.60044H0L0 4.40044H11.5515Z"
                    fill="black"
                  />
                </svg>
              </a>
            </div>

            <div class="listing-metro__profession-item">
              <div class="listing-metro__profession-item-left-bar">
                <p class="listing-metro__profession-name">Кассир</p>
                <div class="listing-metro__profession-bread-crumbs">
                  <a href="#" class="listing-metro__profession-crumb">
                    Розничные магазины

                    <svg
                      class="listing-metro__profession-crumb-arrow"
                      width="12"
                      height="8"
                      viewBox="0 0 12 8"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M9.4136 3.54984L7.1818 1.31804L7.8182 0.681641L11.1364 3.99984L7.8182 7.31804L7.1818 6.68164L9.4136 4.44984H0.75V3.54984H9.4136Z"
                        fill="rgba(0, 0, 0, 0.5)"
                      />
                    </svg>
                  </a>

                  <a href="#" class="listing-metro__profession-crumb">
                    Продажи

                    <svg
                      class="listing-metro__profession-crumb-arrow"
                      width="12"
                      height="8"
                      viewBox="0 0 12 8"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M9.4136 3.54984L7.1818 1.31804L7.8182 0.681641L11.1364 3.99984L7.8182 7.31804L7.1818 6.68164L9.4136 4.44984H0.75V3.54984H9.4136Z"
                        fill="rgba(0, 0, 0, 0.5)"
                      />
                    </svg>
                  </a>
                </div>
              </div>

              <div class="listing-metro__profession-item-right-bar">
                <p class="listing-metro__profession-conditions">
                  от
                  <span class="listing-metro__profession-price">80 000</span>
                  ₽
                </p>
                <div class="listing-metro__profession-expiriens">
                  Можно без опыта
                </div>
              </div>

              <a href="#" class="listing-metro__profession-item-link">
                выбрать магазин

                <svg
                  width="14"
                  height="10"
                  viewBox="0 0 14 10"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M11.5515 4.40044L8.57574 1.4247L9.42426 0.576172L13.8485 5.00044L9.42426 9.4247L8.57574 8.57617L11.5515 5.60044H0L0 4.40044H11.5515Z"
                    fill="black"
                  />
                </svg>
              </a>
            </div>
          </div>
        </div>

        <!-- <div class="listing-metro__subscribe-block">
          <h2 class="listing-metro__subscribe-title">
            Подпишись на новые вакансии
          </h2>
          <p class="listing-metro__subscribe-text">
            Каждую пятницу тебе будет приходить письмо с учётом фильтров:
            специализация «Розничная продажа», ключевые слова: «продавец»,
            «кассир».
          </p>
          <div class="position-subscribe__mail-container">
            <input
              class="position-subscribe__input"
              type="text"
              value="Электронная почта"
            />
            <a href="#" class="position-subscribe__button">
              <svg
                width="12"
                height="8"
                viewBox="0 0 12 8"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M9.4136 3.55001L7.1818 1.3182L7.8182 0.681808L11.1364 4.00001L7.8182 7.3182L7.1818 6.68181L9.4136 4.45001H0.75V3.55001H9.4136Z"
                  fill="black"
                />
              </svg>
            </a>
          </div>
        </div> -->
      </div>

      <!-- //Left bar -->

      <!-- Right bar -->
      <div class="listing-metro__right-bar">
        <div class="listing-metro__shops-list-title-mobile">
          Выберите удобное место работы на карте или из списка
        </div>

        <a
          href="#"
          class="
            listing-metro__link-to-shops listing-metro__link-to-shops-mobile
          "
        >
          <svg
            width="14"
            height="10"
            viewBox="0 0 14 10"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M4.57661 0.576172L0.152344 5.00044L4.57661 9.4247L5.42514 8.57617L2.4494 5.60044H14.0009V4.40044H2.4494L5.42514 1.4247L4.57661 0.576172Z"
              fill="black"
            />
          </svg>

          Назад к списку магазинов
        </a>

        <div class="listing-metro__map-wrapper">
          <div id="yandex-map" class="listing-metro__map-place">
            <!-- Сюда вставить карту -->
          </div>
          <button class="listing-metro__map-button-plus">
            <svg
              width="10"
              height="10"
              viewBox="0 0 10 10"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M4.40039 5.60002V9.5H5.60039V5.60002H9.5V4.40002H5.60039V0.5H4.40039V4.40002H0.5V5.60002H4.40039Z"
                fill="black"
              />
            </svg>
          </button>

          <button class="listing-metro__map-button-minus">
            <svg
              width="10"
              height="2"
              viewBox="0 0 10 2"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M9.5 1.60039H0.5V0.400391H9.5V1.60039Z"
                fill="black"
              />
            </svg>
          </button>

          <div class="listing-metro__select-shop-container">
            <label class="listing-metro__select-shop-item" data-name="mvideo">
              <input
                class="listing-metro__shop-input mvideo-input"
                type="checkbox"
                checked
              />
              <span class="listing-metro__select-shop-checkbox">
                <svg
                  class="listing-metro__select-shop-checkbox-image"
                  width="10"
                  height="8"
                  viewBox="0 0 10 8"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M3.50044 6.15191L9.07617 0.576172L9.9247 1.4247L3.50044 7.84896L0.0761719 4.4247L0.9247 3.57617L3.50044 6.15191Z"
                    fill="black"
                  />
                </svg>
              </span>
              Магазины М.Видео
            </label>

            <label class="listing-metro__select-shop-item" data-name="eldorado">
              <input
                class="listing-metro__shop-input eldorado-input"
                type="checkbox"
              />
              <span class="listing-metro__select-shop-checkbox">
                <svg
                  class="listing-metro__select-shop-checkbox-image"
                  width="10"
                  height="8"
                  viewBox="0 0 10 8"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M3.50044 6.15191L9.07617 0.576172L9.9247 1.4247L3.50044 7.84896L0.0761719 4.4247L0.9247 3.57617L3.50044 6.15191Z"
                    fill="black"
                  />
                </svg>
              </span>
              Магазины Эльдорадо
            </label>
          </div>

          <!-- <div class="listing-metro__look-another-store-container">
            <h2 class="listing-metro__look-another-store-title">
              Не нашли нужную вакансию в
              <span class="listing-metro__look-another-shop"> М.Видео</span>?
            </h2>
            <p class="listing-metro__look-another-text">
              Посмотрите также вакансии в
              <span class="listing-metro__look-another-shop"> Эльдорадо</span>!
            </p>
            <button class="listing-metro__show-another-shop">посмотреть</button>
            <button class="listing-metro__not-show-another-shop">
              спасибо, не надо
            </button>
          </div> -->

          <!-- <div class="listing-metro__shops-nearby-container">
            <div class="listing-metro__nearest-store-container">
              <div class="listing-metro__nearest-store-item">
                <svg
                  width="24"
                  height="18"
                  viewBox="0 0 24 18"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M9.5272 17.6669C9.01018 17.6604 8.516 17.4547 8.1491 17.0932C6.88918 15.7834 8.07451 11.3586 8.32529 10.4025C8.33138 10.3819 8.3326 10.3603 8.32881 10.3393C8.32507 10.3182 8.31636 10.2983 8.30352 10.2811C8.29062 10.264 8.27393 10.25 8.25467 10.2404C8.23541 10.2308 8.21419 10.2257 8.19265 10.2256C8.16601 10.2257 8.13978 10.2324 8.11655 10.2454C8.09333 10.2584 8.07384 10.2771 8.06 10.2997C7.52534 11.373 4.63661 17.6669 2.0877 17.6669H1.93849C-0.53581 17.4304 -0.20839 14.048 0.560426 11.9898H4.54749C4.22215 12.8719 4.11853 13.4291 4.11853 13.7252C4.13304 13.9308 4.31125 14.048 4.47289 13.9617C4.88735 13.7396 5.56913 12.8575 6.1618 11.8438C7.229 9.9768 8.62162 7.1825 11.0171 0.111328H15.3793C14.0903 4.05094 13.0376 7.61017 12.4678 11.6814C12.4601 11.7304 12.4681 11.7807 12.4908 11.825C12.5134 11.8692 12.5495 11.9053 12.594 11.9281C12.6385 11.9508 12.6891 11.9591 12.7386 11.9518C12.7881 11.9444 12.834 11.9217 12.8698 11.887C14.1132 10.7253 18.6722 0.962581 18.9436 0.111328H23.3306C23.3306 0.111328 19.0182 11.9466 19.3747 13.9308C19.3807 14.004 19.4096 14.0735 19.4575 14.1296C19.5053 14.1856 19.5696 14.2253 19.6414 14.2432C19.7132 14.2611 19.7888 14.2563 19.8577 14.2294C19.9265 14.2025 19.9852 14.1549 20.0254 14.0933C20.2782 13.7848 20.6346 13.3284 20.8854 13.0487L21.507 13.6656C20.2637 15.1933 18.2328 17.9424 16.2186 17.6196C15.8969 17.5533 15.6016 17.3954 15.3689 17.1652C13.2656 15.3578 16.1979 9.30033 16.718 7.87338C16.8361 7.56494 16.9397 7.27091 17.0144 7.0941C17.0219 7.07257 17.0242 7.04959 17.0211 7.02706C17.0179 7.00447 17.0094 6.98299 16.9962 6.9643C16.9831 6.94566 16.9657 6.93036 16.9454 6.91968C16.9251 6.909 16.9026 6.90321 16.8796 6.90288C16.853 6.90265 16.8267 6.90939 16.8034 6.92241C16.7802 6.93537 16.7607 6.95417 16.747 6.97687C16.6434 7.19686 16.3761 7.77057 16.2725 7.96179C14.9794 10.6225 11.987 17.6669 9.5272 17.6669ZM22.8291 15.3434C23.0607 15.3434 23.2871 15.4116 23.4796 15.5392C23.6722 15.6669 23.8223 15.8483 23.9109 16.0606C23.9995 16.2729 24.0227 16.5064 23.9775 16.7318C23.9323 16.9572 23.8208 17.1641 23.6571 17.3266C23.4933 17.4891 23.2847 17.5997 23.0576 17.6446C22.8305 17.6894 22.595 17.6664 22.3811 17.5785C22.1672 17.4905 21.9843 17.3416 21.8557 17.1506C21.727 16.9595 21.6583 16.7349 21.6583 16.5051C21.6572 16.3523 21.6867 16.2008 21.7452 16.0593C21.8036 15.9178 21.8898 15.7893 21.9988 15.6812C22.1077 15.5731 22.2373 15.4876 22.3798 15.4296C22.5224 15.3716 22.6751 15.3423 22.8291 15.3434Z"
                    fill="#E31235"
                  />
                </svg>
              </div>

              <div class="listing-metro__nearest-store-item">
                <p class="isting-metro__nearest-store-text">
                  ул. Нижняя Красносельская, д. 40/12, корп. 20
                </p>
              </div>

              <div class="listing-metro__nearest-store-item">
                <svg
                  width="10"
                  height="10"
                  viewBox="0 0 10 10"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M7.55191 1.60039H3.00044V0.400391H9.00044C9.33181 0.400391 9.60044 0.66902 9.60044 1.00039V7.00039H8.40044V2.44892L1.4247 9.42465L0.576172 8.57613L7.55191 1.60039Z"
                    fill="black"
                  />
                </svg>
              </div>
            </div>

            <div class="listing-metro__another-store-item">
              <svg
                class="listing-metro__another-store-item-image"
                width="18"
                height="18"
                viewBox="0 0 18 18"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M14.5548 0.333984H7.5446L6.87113 3.64011H12.8405C13.2079 3.64011 13.2997 3.82378 13.2691 4.25235L12.5038 8.20133H8.79971L9.35073 5.44623L0.779297 9.54827H7.14664L6.59562 12.3034L12.2283 9.60949L11.463 13.5279C11.3711 13.9258 11.1568 14.1095 10.7283 14.1095H4.85073L4.20787 17.4462H11.2181C13.4528 17.4462 14.5242 16.1299 14.8915 14.2319L17.0038 3.51766C17.3405 1.65031 16.8201 0.333984 14.5548 0.333984Z"
                  fill="#76BC21"
                />
              </svg>

              <p class="listing-metro__another-store-text">ТЦ Атриум</p>
            </div>

            <div class="listing-metro__another-store-item">
              <svg
                class="listing-metro__another-store-item-image"
                width="18"
                height="18"
                viewBox="0 0 18 18"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M14.5548 0.333984H7.5446L6.87113 3.64011H12.8405C13.2079 3.64011 13.2997 3.82378 13.2691 4.25235L12.5038 8.20133H8.79971L9.35073 5.44623L0.779297 9.54827H7.14664L6.59562 12.3034L12.2283 9.60949L11.463 13.5279C11.3711 13.9258 11.1568 14.1095 10.7283 14.1095H4.85073L4.20787 17.4462H11.2181C13.4528 17.4462 14.5242 16.1299 14.8915 14.2319L17.0038 3.51766C17.3405 1.65031 16.8201 0.333984 14.5548 0.333984Z"
                  fill="#76BC21"
                />
              </svg>

              <p class="listing-metro__another-store-text">ТЦ Вегас</p>
            </div>

            <div class="listing-metro__another-store-item">
              <svg
                class="listing-metro__another-store-item-image"
                width="18"
                height="18"
                viewBox="0 0 18 18"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M14.5548 0.333984H7.5446L6.87113 3.64011H12.8405C13.2079 3.64011 13.2997 3.82378 13.2691 4.25235L12.5038 8.20133H8.79971L9.35073 5.44623L0.779297 9.54827H7.14664L6.59562 12.3034L12.2283 9.60949L11.463 13.5279C11.3711 13.9258 11.1568 14.1095 10.7283 14.1095H4.85073L4.20787 17.4462H11.2181C13.4528 17.4462 14.5242 16.1299 14.8915 14.2319L17.0038 3.51766C17.3405 1.65031 16.8201 0.333984 14.5548 0.333984Z"
                  fill="#76BC21"
                />
              </svg>

              <p class="listing-metro__another-store-text">ТЦ Космос</p>
            </div>
          </div> -->
        </div>
      </div>
      <!-- //Right bar -->
    </div>

    <div
      class="
        listing-metro__content listing-metro__content-list
        hide
        transparent
      "
    >
      <div class="listing-metro__content-list-container">
        <div class="position__card-item">
          <a href="#" class="position__info-link"
            >посмотреть вакансию
            <svg
              class="position__link-arrow-black"
              width="12"
              height="8"
              viewBox="0 0 12 8"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M9.4136 3.55001L7.1818 1.3182L7.8182 0.681808L11.1364 4.00001L7.8182 7.3182L7.1818 6.68181L9.4136 4.45001H0.75V3.55001H9.4136Z"
                fill="rgba(0, 0, 0, 1)"
              />
            </svg>
          </a>

          <div class="position__job-title-container">
            <a href="#" class="position__job-title">
              Менеджер торгового зала
            </a>
            <div class="position__bread-crumbs-container-mobile">
              <a href="#" class="position__link">
                Розничные магазины
                <svg
                  class="position__link-arrow"
                  width="12"
                  height="8"
                  viewBox="0 0 12 8"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M9.4136 3.55001L7.1818 1.3182L7.8182 0.681808L11.1364 4.00001L7.8182 7.3182L7.1818 6.68181L9.4136 4.45001H0.75V3.55001H9.4136Z"
                    fill="rgba(0, 0, 0, 0.5)"
                  />
                </svg>
              </a>
              <a href="#" class="position__link">
                Продажи
                <svg
                  class="position__link-arrow"
                  width="12"
                  height="8"
                  viewBox="0 0 12 8"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M9.4136 3.55001L7.1818 1.3182L7.8182 0.681808L11.1364 4.00001L7.8182 7.3182L7.1818 6.68181L9.4136 4.45001H0.75V3.55001H9.4136Z"
                    fill="rgba(0, 0, 0, 0.5)"
                  />
                </svg>
              </a>
            </div>
            <!-- <a href="#" class="position__show-more">
              Показать
              <span class="position__show-more-number">6</span>
              вакансий +
            </a> -->
          </div>

          <div class="position__bread-crumbs-block">
            <div class="position__bread-crumbs-container">
              <a href="#" class="position__link">
                Розничные магазины
                <svg
                  class="position__link-arrow"
                  width="12"
                  height="8"
                  viewBox="0 0 12 8"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M9.4136 3.55001L7.1818 1.3182L7.8182 0.681808L11.1364 4.00001L7.8182 7.3182L7.1818 6.68181L9.4136 4.45001H0.75V3.55001H9.4136Z"
                    fill="rgba(0, 0, 0, 0.5)"
                  />
                </svg>
              </a>
              <a href="#" class="position__link">
                Продажи
                <svg
                  class="position__link-arrow"
                  width="12"
                  height="8"
                  viewBox="0 0 12 8"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M9.4136 3.55001L7.1818 1.3182L7.8182 0.681808L11.1364 4.00001L7.8182 7.3182L7.1818 6.68181L9.4136 4.45001H0.75V3.55001H9.4136Z"
                    fill="rgba(0, 0, 0, 0.5)"
                  />
                </svg>
              </a>
            </div>
          </div>

          <div class="position__payment-container">
            <p class="position__payment">
              от
              <span class="position__payment-value">80 000</span>
              <span class="position__currency">&#8381;</span>
            </p>

            <p class="position__job-expiriens">Можно без опыта</p>
          </div>

          <div class="position__location-container">
            <p class="position__location-city">Москва</p>
            <p
              class="
                position__location-city-metro
                position__location-city-metro-sokoln
              "
            >
              Красносельская
            </p>
            <p
              class="
                position__location-city-metro
                position__location-city-metro-arbat
              "
            >
              Бауманская
            </p>
            <p class="position__location">Можно удаленно</p>
            <!-- <a href="#" class="position__location-map">
              На карте
              <svg
                class="position__link-arrow-map"
                width="12"
                height="8"
                viewBox="0 0 12 8"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M9.4136 3.55001L7.1818 1.3182L7.8182 0.681808L11.1364 4.00001L7.8182 7.3182L7.1818 6.68181L9.4136 4.45001H0.75V3.55001H9.4136Z"
                  fill="rgba(0, 0, 0, 1)"
                />
              </svg>
            </a> -->
          </div>
        </div>

        <div class="position__card-item">
          <a href="#" class="position__info-link"
            >посмотреть вакансию
            <svg
              class="position__link-arrow-black"
              width="12"
              height="8"
              viewBox="0 0 12 8"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M9.4136 3.55001L7.1818 1.3182L7.8182 0.681808L11.1364 4.00001L7.8182 7.3182L7.1818 6.68181L9.4136 4.45001H0.75V3.55001H9.4136Z"
                fill="rgba(0, 0, 0, 1)"
              />
            </svg>
          </a>

          <div class="position__job-title-container">
            <a href="#" class="position__job-title"> Продавец </a>
            <div class="position__bread-crumbs-container-mobile">
              <a href="#" class="position__link">
                Розничные магазины
                <svg
                  class="position__link-arrow"
                  width="12"
                  height="8"
                  viewBox="0 0 12 8"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M9.4136 3.55001L7.1818 1.3182L7.8182 0.681808L11.1364 4.00001L7.8182 7.3182L7.1818 6.68181L9.4136 4.45001H0.75V3.55001H9.4136Z"
                    fill="rgba(0, 0, 0, 0.5)"
                  />
                </svg>
              </a>
              <a href="#" class="position__link">
                Продажи
                <svg
                  class="position__link-arrow"
                  width="12"
                  height="8"
                  viewBox="0 0 12 8"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M9.4136 3.55001L7.1818 1.3182L7.8182 0.681808L11.1364 4.00001L7.8182 7.3182L7.1818 6.68181L9.4136 4.45001H0.75V3.55001H9.4136Z"
                    fill="rgba(0, 0, 0, 0.5)"
                  />
                </svg>
              </a>
            </div>
            <!-- <a href="#" class="position__show-more">
              Показать
              <span class="position__show-more-number">6</span>
              вакансий +
            </a> -->
          </div>

          <div class="position__bread-crumbs-block">
            <div class="position__bread-crumbs-container">
              <a href="#" class="position__link">
                Розничные магазины
                <svg
                  class="position__link-arrow"
                  width="12"
                  height="8"
                  viewBox="0 0 12 8"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M9.4136 3.55001L7.1818 1.3182L7.8182 0.681808L11.1364 4.00001L7.8182 7.3182L7.1818 6.68181L9.4136 4.45001H0.75V3.55001H9.4136Z"
                    fill="rgba(0, 0, 0, 0.5)"
                  />
                </svg>
              </a>
              <a href="#" class="position__link">
                Продажи
                <svg
                  class="position__link-arrow"
                  width="12"
                  height="8"
                  viewBox="0 0 12 8"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M9.4136 3.55001L7.1818 1.3182L7.8182 0.681808L11.1364 4.00001L7.8182 7.3182L7.1818 6.68181L9.4136 4.45001H0.75V3.55001H9.4136Z"
                    fill="rgba(0, 0, 0, 0.5)"
                  />
                </svg>
              </a>
            </div>
          </div>

          <div class="position__payment-container">
            <p class="position__payment">
              от
              <span class="position__payment-value">80 000</span>
              <span class="position__currency">&#8381;</span>
            </p>

            <p class="position__job-expiriens">Можно без опыта</p>
          </div>

          <div class="position__location-container">
            <p class="position__location-city">Москва</p>
            <p
              class="
                position__location-city-metro
                position__location-city-metro-sokoln
              "
            >
              Красносельская
            </p>
            <p
              class="
                position__location-city-metro
                position__location-city-metro-arbat
              "
            >
              Бауманская
            </p>
            <p class="position__location">Можно удаленно</p>
            <!-- <a href="#" class="position__location-map">
              На карте
              <svg
                class="position__link-arrow-map"
                width="12"
                height="8"
                viewBox="0 0 12 8"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M9.4136 3.55001L7.1818 1.3182L7.8182 0.681808L11.1364 4.00001L7.8182 7.3182L7.1818 6.68181L9.4136 4.45001H0.75V3.55001H9.4136Z"
                  fill="rgba(0, 0, 0, 1)"
                />
              </svg>
            </a> -->
          </div>
        </div>

        <div class="position__card-item">
          <a href="#" class="position__info-link"
            >посмотреть вакансию
            <svg
              class="position__link-arrow-black"
              width="12"
              height="8"
              viewBox="0 0 12 8"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M9.4136 3.55001L7.1818 1.3182L7.8182 0.681808L11.1364 4.00001L7.8182 7.3182L7.1818 6.68181L9.4136 4.45001H0.75V3.55001H9.4136Z"
                fill="rgba(0, 0, 0, 1)"
              />
            </svg>
          </a>

          <div class="position__job-title-container">
            <a href="#" class="position__job-title"> Кассир </a>
            <div class="position__bread-crumbs-container-mobile">
              <a href="#" class="position__link">
                Розничные магазины
                <svg
                  class="position__link-arrow"
                  width="12"
                  height="8"
                  viewBox="0 0 12 8"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M9.4136 3.55001L7.1818 1.3182L7.8182 0.681808L11.1364 4.00001L7.8182 7.3182L7.1818 6.68181L9.4136 4.45001H0.75V3.55001H9.4136Z"
                    fill="rgba(0, 0, 0, 0.5)"
                  />
                </svg>
              </a>
              <a href="#" class="position__link">
                Продажи
                <svg
                  class="position__link-arrow"
                  width="12"
                  height="8"
                  viewBox="0 0 12 8"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M9.4136 3.55001L7.1818 1.3182L7.8182 0.681808L11.1364 4.00001L7.8182 7.3182L7.1818 6.68181L9.4136 4.45001H0.75V3.55001H9.4136Z"
                    fill="rgba(0, 0, 0, 0.5)"
                  />
                </svg>
              </a>
            </div>
            <!-- <a href="#" class="position__show-more">
              Показать
              <span class="position__show-more-number">6</span>
              вакансий +
            </a> -->
          </div>

          <div class="position__bread-crumbs-block">
            <div class="position__bread-crumbs-container">
              <a href="#" class="position__link">
                Розничные магазины
                <svg
                  class="position__link-arrow"
                  width="12"
                  height="8"
                  viewBox="0 0 12 8"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M9.4136 3.55001L7.1818 1.3182L7.8182 0.681808L11.1364 4.00001L7.8182 7.3182L7.1818 6.68181L9.4136 4.45001H0.75V3.55001H9.4136Z"
                    fill="rgba(0, 0, 0, 0.5)"
                  />
                </svg>
              </a>
              <a href="#" class="position__link">
                Продажи
                <svg
                  class="position__link-arrow"
                  width="12"
                  height="8"
                  viewBox="0 0 12 8"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M9.4136 3.55001L7.1818 1.3182L7.8182 0.681808L11.1364 4.00001L7.8182 7.3182L7.1818 6.68181L9.4136 4.45001H0.75V3.55001H9.4136Z"
                    fill="rgba(0, 0, 0, 0.5)"
                  />
                </svg>
              </a>
            </div>
          </div>

          <div class="position__payment-container">
            <p class="position__payment">
              от
              <span class="position__payment-value">80 000</span>
              <span class="position__currency">&#8381;</span>
            </p>

            <p class="position__job-expiriens">Можно без опыта</p>
          </div>

          <div class="position__location-container">
            <p class="position__location-city">Москва</p>
            <p
              class="
                position__location-city-metro
                position__location-city-metro-sokoln
              "
            >
              Красносельская
            </p>
            <p
              class="
                position__location-city-metro
                position__location-city-metro-arbat
              "
            >
              Бауманская
            </p>
            <p class="position__location">Можно удаленно</p>
            <!-- <a href="#" class="position__location-map">
              На карте
              <svg
                class="position__link-arrow-map"
                width="12"
                height="8"
                viewBox="0 0 12 8"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M9.4136 3.55001L7.1818 1.3182L7.8182 0.681808L11.1364 4.00001L7.8182 7.3182L7.1818 6.68181L9.4136 4.45001H0.75V3.55001H9.4136Z"
                  fill="rgba(0, 0, 0, 1)"
                />
              </svg>
            </a> -->
          </div>
        </div>

        <div class="position__card-item">
          <a href="#" class="position__info-link"
            >посмотреть вакансию
            <svg
              class="position__link-arrow-black"
              width="12"
              height="8"
              viewBox="0 0 12 8"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M9.4136 3.55001L7.1818 1.3182L7.8182 0.681808L11.1364 4.00001L7.8182 7.3182L7.1818 6.68181L9.4136 4.45001H0.75V3.55001H9.4136Z"
                fill="rgba(0, 0, 0, 1)"
              />
            </svg>
          </a>

          <div class="position__job-title-container">
            <a href="#" class="position__job-title"> Кладовщик </a>
            <div class="position__bread-crumbs-container-mobile">
              <a href="#" class="position__link">
                Розничные магазины
                <svg
                  class="position__link-arrow"
                  width="12"
                  height="8"
                  viewBox="0 0 12 8"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M9.4136 3.55001L7.1818 1.3182L7.8182 0.681808L11.1364 4.00001L7.8182 7.3182L7.1818 6.68181L9.4136 4.45001H0.75V3.55001H9.4136Z"
                    fill="rgba(0, 0, 0, 0.5)"
                  />
                </svg>
              </a>
              <a href="#" class="position__link">
                Продажи
                <svg
                  class="position__link-arrow"
                  width="12"
                  height="8"
                  viewBox="0 0 12 8"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M9.4136 3.55001L7.1818 1.3182L7.8182 0.681808L11.1364 4.00001L7.8182 7.3182L7.1818 6.68181L9.4136 4.45001H0.75V3.55001H9.4136Z"
                    fill="rgba(0, 0, 0, 0.5)"
                  />
                </svg>
              </a>
            </div>
            <!-- <a href="#" class="position__show-more">
              Показать
              <span class="position__show-more-number">6</span>
              вакансий +
            </a> -->
          </div>

          <div class="position__bread-crumbs-block">
            <div class="position__bread-crumbs-container">
              <a href="#" class="position__link">
                Розничные магазины
                <svg
                  class="position__link-arrow"
                  width="12"
                  height="8"
                  viewBox="0 0 12 8"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M9.4136 3.55001L7.1818 1.3182L7.8182 0.681808L11.1364 4.00001L7.8182 7.3182L7.1818 6.68181L9.4136 4.45001H0.75V3.55001H9.4136Z"
                    fill="rgba(0, 0, 0, 0.5)"
                  />
                </svg>
              </a>
              <a href="#" class="position__link">
                Продажи
                <svg
                  class="position__link-arrow"
                  width="12"
                  height="8"
                  viewBox="0 0 12 8"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M9.4136 3.55001L7.1818 1.3182L7.8182 0.681808L11.1364 4.00001L7.8182 7.3182L7.1818 6.68181L9.4136 4.45001H0.75V3.55001H9.4136Z"
                    fill="rgba(0, 0, 0, 0.5)"
                  />
                </svg>
              </a>
            </div>
          </div>

          <div class="position__payment-container">
            <p class="position__payment">
              от
              <span class="position__payment-value">80 000</span>
              <span class="position__currency">&#8381;</span>
            </p>

            <p class="position__job-expiriens">Можно без опыта</p>
          </div>

          <div class="position__location-container">
            <p class="position__location-city">Москва</p>
            <p
              class="
                position__location-city-metro
                position__location-city-metro-sokoln
              "
            >
              Красносельская
            </p>
            <p
              class="
                position__location-city-metro
                position__location-city-metro-arbat
              "
            >
              Бауманская
            </p>
            <p class="position__location">Можно удаленно</p>
            <!-- <a href="#" class="position__location-map">
              На карте
              <svg
                class="position__link-arrow-map"
                width="12"
                height="8"
                viewBox="0 0 12 8"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M9.4136 3.55001L7.1818 1.3182L7.8182 0.681808L11.1364 4.00001L7.8182 7.3182L7.1818 6.68181L9.4136 4.45001H0.75V3.55001H9.4136Z"
                  fill="rgba(0, 0, 0, 1)"
                />
              </svg>
            </a> -->
          </div>
        </div>

        <div class="position__card-item">
          <a href="#" class="position__info-link"
            >посмотреть вакансию
            <svg
              class="position__link-arrow-black"
              width="12"
              height="8"
              viewBox="0 0 12 8"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M9.4136 3.55001L7.1818 1.3182L7.8182 0.681808L11.1364 4.00001L7.8182 7.3182L7.1818 6.68181L9.4136 4.45001H0.75V3.55001H9.4136Z"
                fill="rgba(0, 0, 0, 1)"
              />
            </svg>
          </a>

          <div class="position__job-title-container">
            <a href="#" class="position__job-title"> Старший кассир </a>
            <div class="position__bread-crumbs-container-mobile">
              <a href="#" class="position__link">
                Розничные магазины
                <svg
                  class="position__link-arrow"
                  width="12"
                  height="8"
                  viewBox="0 0 12 8"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M9.4136 3.55001L7.1818 1.3182L7.8182 0.681808L11.1364 4.00001L7.8182 7.3182L7.1818 6.68181L9.4136 4.45001H0.75V3.55001H9.4136Z"
                    fill="rgba(0, 0, 0, 0.5)"
                  />
                </svg>
              </a>
              <a href="#" class="position__link">
                Продажи
                <svg
                  class="position__link-arrow"
                  width="12"
                  height="8"
                  viewBox="0 0 12 8"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M9.4136 3.55001L7.1818 1.3182L7.8182 0.681808L11.1364 4.00001L7.8182 7.3182L7.1818 6.68181L9.4136 4.45001H0.75V3.55001H9.4136Z"
                    fill="rgba(0, 0, 0, 0.5)"
                  />
                </svg>
              </a>
            </div>
            <!-- <a href="#" class="position__show-more">
              Показать
              <span class="position__show-more-number">6</span>
              вакансий +
            </a> -->
          </div>

          <div class="position__bread-crumbs-block">
            <div class="position__bread-crumbs-container">
              <a href="#" class="position__link">
                Розничные магазины
                <svg
                  class="position__link-arrow"
                  width="12"
                  height="8"
                  viewBox="0 0 12 8"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M9.4136 3.55001L7.1818 1.3182L7.8182 0.681808L11.1364 4.00001L7.8182 7.3182L7.1818 6.68181L9.4136 4.45001H0.75V3.55001H9.4136Z"
                    fill="rgba(0, 0, 0, 0.5)"
                  />
                </svg>
              </a>
              <a href="#" class="position__link">
                Продажи
                <svg
                  class="position__link-arrow"
                  width="12"
                  height="8"
                  viewBox="0 0 12 8"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M9.4136 3.55001L7.1818 1.3182L7.8182 0.681808L11.1364 4.00001L7.8182 7.3182L7.1818 6.68181L9.4136 4.45001H0.75V3.55001H9.4136Z"
                    fill="rgba(0, 0, 0, 0.5)"
                  />
                </svg>
              </a>
            </div>
          </div>

          <div class="position__payment-container">
            <p class="position__payment">
              от
              <span class="position__payment-value">80 000</span>
              <span class="position__currency">&#8381;</span>
            </p>

            <p class="position__job-expiriens">Можно без опыта</p>
          </div>

          <div class="position__location-container">
            <p class="position__location-city">Москва</p>
            <p
              class="
                position__location-city-metro
                position__location-city-metro-sokoln
              "
            >
              Красносельская
            </p>
            <p
              class="
                position__location-city-metro
                position__location-city-metro-arbat
              "
            >
              Бауманская
            </p>
            <p class="position__location">Можно удаленно</p>
            <!-- <a href="#" class="position__location-map">
              На карте
              <svg
                class="position__link-arrow-map"
                width="12"
                height="8"
                viewBox="0 0 12 8"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M9.4136 3.55001L7.1818 1.3182L7.8182 0.681808L11.1364 4.00001L7.8182 7.3182L7.1818 6.68181L9.4136 4.45001H0.75V3.55001H9.4136Z"
                  fill="rgba(0, 0, 0, 1)"
                />
              </svg>
            </a> -->
          </div>
        </div>

        <div class="position__card-item">
          <a href="#" class="position__info-link"
            >посмотреть вакансию
            <svg
              class="position__link-arrow-black"
              width="12"
              height="8"
              viewBox="0 0 12 8"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M9.4136 3.55001L7.1818 1.3182L7.8182 0.681808L11.1364 4.00001L7.8182 7.3182L7.1818 6.68181L9.4136 4.45001H0.75V3.55001H9.4136Z"
                fill="rgba(0, 0, 0, 1)"
              />
            </svg>
          </a>

          <div class="position__job-title-container">
            <a href="#" class="position__job-title">
              Менеджер торгового зала
            </a>
            <div class="position__bread-crumbs-container-mobile">
              <a href="#" class="position__link">
                Розничные магазины
                <svg
                  class="position__link-arrow"
                  width="12"
                  height="8"
                  viewBox="0 0 12 8"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M9.4136 3.55001L7.1818 1.3182L7.8182 0.681808L11.1364 4.00001L7.8182 7.3182L7.1818 6.68181L9.4136 4.45001H0.75V3.55001H9.4136Z"
                    fill="rgba(0, 0, 0, 0.5)"
                  />
                </svg>
              </a>
              <a href="#" class="position__link">
                Продажи
                <svg
                  class="position__link-arrow"
                  width="12"
                  height="8"
                  viewBox="0 0 12 8"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M9.4136 3.55001L7.1818 1.3182L7.8182 0.681808L11.1364 4.00001L7.8182 7.3182L7.1818 6.68181L9.4136 4.45001H0.75V3.55001H9.4136Z"
                    fill="rgba(0, 0, 0, 0.5)"
                  />
                </svg>
              </a>
            </div>
            <!-- <a href="#" class="position__show-more">
              Показать
              <span class="position__show-more-number">6</span>
              вакансий +
            </a> -->
          </div>

          <div class="position__bread-crumbs-block">
            <div class="position__bread-crumbs-container">
              <a href="#" class="position__link">
                Розничные магазины
                <svg
                  class="position__link-arrow"
                  width="12"
                  height="8"
                  viewBox="0 0 12 8"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M9.4136 3.55001L7.1818 1.3182L7.8182 0.681808L11.1364 4.00001L7.8182 7.3182L7.1818 6.68181L9.4136 4.45001H0.75V3.55001H9.4136Z"
                    fill="rgba(0, 0, 0, 0.5)"
                  />
                </svg>
              </a>
              <a href="#" class="position__link">
                Продажи
                <svg
                  class="position__link-arrow"
                  width="12"
                  height="8"
                  viewBox="0 0 12 8"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M9.4136 3.55001L7.1818 1.3182L7.8182 0.681808L11.1364 4.00001L7.8182 7.3182L7.1818 6.68181L9.4136 4.45001H0.75V3.55001H9.4136Z"
                    fill="rgba(0, 0, 0, 0.5)"
                  />
                </svg>
              </a>
            </div>
          </div>

          <div class="position__payment-container">
            <p class="position__payment">
              от
              <span class="position__payment-value">80 000</span>
              <span class="position__currency">&#8381;</span>
            </p>

            <p class="position__job-expiriens">Можно без опыта</p>
          </div>

          <div class="position__location-container">
            <p class="position__location-city">Москва</p>
            <p
              class="
                position__location-city-metro
                position__location-city-metro-sokoln
              "
            >
              Красносельская
            </p>
            <p
              class="
                position__location-city-metro
                position__location-city-metro-arbat
              "
            >
              Бауманская
            </p>
            <p class="position__location">Можно удаленно</p>
            <!-- <a href="#" class="position__location-map">
              На карте
              <svg
                class="position__link-arrow-map"
                width="12"
                height="8"
                viewBox="0 0 12 8"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M9.4136 3.55001L7.1818 1.3182L7.8182 0.681808L11.1364 4.00001L7.8182 7.3182L7.1818 6.68181L9.4136 4.45001H0.75V3.55001H9.4136Z"
                  fill="rgba(0, 0, 0, 1)"
                />
              </svg>
            </a> -->
          </div>
        </div>

        <div class="position__card-item">
          <a href="#" class="position__info-link"
            >посмотреть вакансию
            <svg
              class="position__link-arrow-black"
              width="12"
              height="8"
              viewBox="0 0 12 8"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M9.4136 3.55001L7.1818 1.3182L7.8182 0.681808L11.1364 4.00001L7.8182 7.3182L7.1818 6.68181L9.4136 4.45001H0.75V3.55001H9.4136Z"
                fill="rgba(0, 0, 0, 1)"
              />
            </svg>
          </a>

          <div class="position__job-title-container">
            <a href="#" class="position__job-title">
              Менеджер торгового зала
            </a>
            <div class="position__bread-crumbs-container-mobile">
              <a href="#" class="position__link">
                Розничные магазины
                <svg
                  class="position__link-arrow"
                  width="12"
                  height="8"
                  viewBox="0 0 12 8"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M9.4136 3.55001L7.1818 1.3182L7.8182 0.681808L11.1364 4.00001L7.8182 7.3182L7.1818 6.68181L9.4136 4.45001H0.75V3.55001H9.4136Z"
                    fill="rgba(0, 0, 0, 0.5)"
                  />
                </svg>
              </a>
              <a href="#" class="position__link">
                Продажи
                <svg
                  class="position__link-arrow"
                  width="12"
                  height="8"
                  viewBox="0 0 12 8"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M9.4136 3.55001L7.1818 1.3182L7.8182 0.681808L11.1364 4.00001L7.8182 7.3182L7.1818 6.68181L9.4136 4.45001H0.75V3.55001H9.4136Z"
                    fill="rgba(0, 0, 0, 0.5)"
                  />
                </svg>
              </a>
            </div>
            <!-- <a href="#" class="position__show-more">
              Показать
              <span class="position__show-more-number">6</span>
              вакансий +
            </a> -->
          </div>

          <div class="position__bread-crumbs-block">
            <div class="position__bread-crumbs-container">
              <a href="#" class="position__link">
                Розничные магазины
                <svg
                  class="position__link-arrow"
                  width="12"
                  height="8"
                  viewBox="0 0 12 8"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M9.4136 3.55001L7.1818 1.3182L7.8182 0.681808L11.1364 4.00001L7.8182 7.3182L7.1818 6.68181L9.4136 4.45001H0.75V3.55001H9.4136Z"
                    fill="rgba(0, 0, 0, 0.5)"
                  />
                </svg>
              </a>
              <a href="#" class="position__link">
                Продажи
                <svg
                  class="position__link-arrow"
                  width="12"
                  height="8"
                  viewBox="0 0 12 8"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M9.4136 3.55001L7.1818 1.3182L7.8182 0.681808L11.1364 4.00001L7.8182 7.3182L7.1818 6.68181L9.4136 4.45001H0.75V3.55001H9.4136Z"
                    fill="rgba(0, 0, 0, 0.5)"
                  />
                </svg>
              </a>
            </div>
          </div>

          <div class="position__payment-container">
            <p class="position__payment">
              от
              <span class="position__payment-value">80 000</span>
              <span class="position__currency">&#8381;</span>
            </p>

            <p class="position__job-expiriens">Можно без опыта</p>
          </div>

          <div class="position__location-container">
            <p class="position__location-city">Москва</p>
            <p
              class="
                position__location-city-metro
                position__location-city-metro-sokoln
              "
            >
              Красносельская
            </p>
            <p
              class="
                position__location-city-metro
                position__location-city-metro-arbat
              "
            >
              Бауманская
            </p>
            <p class="position__location">Можно удаленно</p>
            <!-- <a href="#" class="position__location-map">
              На карте
              <svg
                class="position__link-arrow-map"
                width="12"
                height="8"
                viewBox="0 0 12 8"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M9.4136 3.55001L7.1818 1.3182L7.8182 0.681808L11.1364 4.00001L7.8182 7.3182L7.1818 6.68181L9.4136 4.45001H0.75V3.55001H9.4136Z"
                  fill="rgba(0, 0, 0, 1)"
                />
              </svg>
            </a> -->
          </div>
        </div>
      </div>
    </div>

    <!-- //Content block -->

    <!-- Mobile block profession -->
    <div
      class="
        listing-metro__profession-container
        listing-metro__profession-container-mobile
      "
    >
      <div class="listing-metro__profession-title">
        Вакансии магазина

        <span class="listing-metro__profession-title-shop"> «М.Видео» </span>
      </div>

      <div class="listing-metro__profession-item">
        <div class="listing-metro__profession-item-left-bar">
          <p class="listing-metro__profession-name">Продавец</p>
          <div class="listing-metro__profession-bread-crumbs">
            <a href="#" class="listing-metro__profession-crumb">
              Розничные магазины

              <svg
                class="listing-metro__profession-crumb-arrow"
                width="12"
                height="8"
                viewBox="0 0 12 8"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M9.4136 3.54984L7.1818 1.31804L7.8182 0.681641L11.1364 3.99984L7.8182 7.31804L7.1818 6.68164L9.4136 4.44984H0.75V3.54984H9.4136Z"
                  fill="rgba(0, 0, 0, 0.5)"
                />
              </svg>
            </a>

            <a href="#" class="listing-metro__profession-crumb">
              Продажи

              <svg
                class="listing-metro__profession-crumb-arrow"
                width="12"
                height="8"
                viewBox="0 0 12 8"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M9.4136 3.54984L7.1818 1.31804L7.8182 0.681641L11.1364 3.99984L7.8182 7.31804L7.1818 6.68164L9.4136 4.44984H0.75V3.54984H9.4136Z"
                  fill="rgba(0, 0, 0, 0.5)"
                />
              </svg>
            </a>
          </div>
        </div>

        <div class="listing-metro__profession-item-right-bar">
          <p class="listing-metro__profession-conditions">
            от
            <span class="listing-metro__profession-price">80 000</span>
            ₽
          </p>
          <div class="listing-metro__profession-expiriens">Можно без опыта</div>
        </div>
      </div>

      <div class="listing-metro__profession-item">
        <div class="listing-metro__profession-item-left-bar">
          <p class="listing-metro__profession-name">Менеджер торгового зала</p>
          <div class="listing-metro__profession-bread-crumbs">
            <a href="#" class="listing-metro__profession-crumb">
              Розничные магазины

              <svg
                class="listing-metro__profession-crumb-arrow"
                width="12"
                height="8"
                viewBox="0 0 12 8"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M9.4136 3.54984L7.1818 1.31804L7.8182 0.681641L11.1364 3.99984L7.8182 7.31804L7.1818 6.68164L9.4136 4.44984H0.75V3.54984H9.4136Z"
                  fill="rgba(0, 0, 0, 0.5)"
                />
              </svg>
            </a>

            <a href="#" class="listing-metro__profession-crumb">
              Продажи

              <svg
                class="listing-metro__profession-crumb-arrow"
                width="12"
                height="8"
                viewBox="0 0 12 8"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M9.4136 3.54984L7.1818 1.31804L7.8182 0.681641L11.1364 3.99984L7.8182 7.31804L7.1818 6.68164L9.4136 4.44984H0.75V3.54984H9.4136Z"
                  fill="rgba(0, 0, 0, 0.5)"
                />
              </svg>
            </a>
          </div>
        </div>

        <div class="listing-metro__profession-item-right-bar">
          <p class="listing-metro__profession-conditions">
            от
            <span class="listing-metro__profession-price">80 000</span>
            ₽
          </p>
          <div class="listing-metro__profession-expiriens">Можно без опыта</div>
        </div>
      </div>
      <div class="listing-metro__profession-item">
        <div class="listing-metro__profession-item-left-bar">
          <p class="listing-metro__profession-name">Кладовщик</p>
          <div class="listing-metro__profession-bread-crumbs">
            <a href="#" class="listing-metro__profession-crumb">
              Розничные магазины

              <svg
                class="listing-metro__profession-crumb-arrow"
                width="12"
                height="8"
                viewBox="0 0 12 8"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M9.4136 3.54984L7.1818 1.31804L7.8182 0.681641L11.1364 3.99984L7.8182 7.31804L7.1818 6.68164L9.4136 4.44984H0.75V3.54984H9.4136Z"
                  fill="rgba(0, 0, 0, 0.5)"
                />
              </svg>
            </a>

            <a href="#" class="listing-metro__profession-crumb">
              Продажи

              <svg
                class="listing-metro__profession-crumb-arrow"
                width="12"
                height="8"
                viewBox="0 0 12 8"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M9.4136 3.54984L7.1818 1.31804L7.8182 0.681641L11.1364 3.99984L7.8182 7.31804L7.1818 6.68164L9.4136 4.44984H0.75V3.54984H9.4136Z"
                  fill="rgba(0, 0, 0, 0.5)"
                />
              </svg>
            </a>
          </div>
        </div>

        <div class="listing-metro__profession-item-right-bar">
          <p class="listing-metro__profession-conditions">
            от
            <span class="listing-metro__profession-price">80 000</span>
            ₽
          </p>
          <div class="listing-metro__profession-expiriens">Можно без опыта</div>
        </div>
      </div>
      <div class="listing-metro__profession-item">
        <div class="listing-metro__profession-item-left-bar">
          <p class="listing-metro__profession-name">Старший кассир</p>
          <div class="listing-metro__profession-bread-crumbs">
            <a href="#" class="listing-metro__profession-crumb">
              Розничные магазины

              <svg
                class="listing-metro__profession-crumb-arrow"
                width="12"
                height="8"
                viewBox="0 0 12 8"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M9.4136 3.54984L7.1818 1.31804L7.8182 0.681641L11.1364 3.99984L7.8182 7.31804L7.1818 6.68164L9.4136 4.44984H0.75V3.54984H9.4136Z"
                  fill="rgba(0, 0, 0, 0.5)"
                />
              </svg>
            </a>

            <a href="#" class="listing-metro__profession-crumb">
              Продажи

              <svg
                class="listing-metro__profession-crumb-arrow"
                width="12"
                height="8"
                viewBox="0 0 12 8"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M9.4136 3.54984L7.1818 1.31804L7.8182 0.681641L11.1364 3.99984L7.8182 7.31804L7.1818 6.68164L9.4136 4.44984H0.75V3.54984H9.4136Z"
                  fill="rgba(0, 0, 0, 0.5)"
                />
              </svg>
            </a>
          </div>
        </div>

        <div class="listing-metro__profession-item-right-bar">
          <p class="listing-metro__profession-conditions">
            от
            <span class="listing-metro__profession-price">80 000</span>
            ₽
          </p>
          <div class="listing-metro__profession-expiriens">Можно без опыта</div>
        </div>
      </div>
      <div class="listing-metro__profession-item">
        <div class="listing-metro__profession-item-left-bar">
          <p class="listing-metro__profession-name">Кассир</p>
          <div class="listing-metro__profession-bread-crumbs">
            <a href="#" class="listing-metro__profession-crumb">
              Розничные магазины

              <svg
                class="listing-metro__profession-crumb-arrow"
                width="12"
                height="8"
                viewBox="0 0 12 8"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M9.4136 3.54984L7.1818 1.31804L7.8182 0.681641L11.1364 3.99984L7.8182 7.31804L7.1818 6.68164L9.4136 4.44984H0.75V3.54984H9.4136Z"
                  fill="rgba(0, 0, 0, 0.5)"
                />
              </svg>
            </a>

            <a href="#" class="listing-metro__profession-crumb">
              Продажи

              <svg
                class="listing-metro__profession-crumb-arrow"
                width="12"
                height="8"
                viewBox="0 0 12 8"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M9.4136 3.54984L7.1818 1.31804L7.8182 0.681641L11.1364 3.99984L7.8182 7.31804L7.1818 6.68164L9.4136 4.44984H0.75V3.54984H9.4136Z"
                  fill="rgba(0, 0, 0, 0.5)"
                />
              </svg>
            </a>
          </div>
        </div>

        <div class="listing-metro__profession-item-right-bar">
          <p class="listing-metro__profession-conditions">
            от
            <span class="listing-metro__profession-price">80 000</span>
            ₽
          </p>
          <div class="listing-metro__profession-expiriens">Можно без опыта</div>
        </div>
      </div>
    </div>
    <!-- //Mobile block profession -->

    <!-- Subscribe block -->
    <div class="listing-metro__subscribe-block">
      <h2 class="listing-metro__subscribe-title">
        Подпишись на новые вакансии
      </h2>
      <p class="listing-metro__subscribe-text">
        Каждую пятницу тебе будет приходить письмо с учётом фильтров:
        специализация «Розничная продажа», ключевые слова: «продавец», «кассир».
      </p>
      <div class="position-subscribe__mail-container">
        <input
          class="position-subscribe__input"
          type="text"
          value="Электронная почта"
        />
        <a href="#" class="position-subscribe__button">
          <svg
            width="12"
            height="8"
            viewBox="0 0 12 8"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M9.4136 3.55001L7.1818 1.3182L7.8182 0.681808L11.1364 4.00001L7.8182 7.3182L7.1818 6.68181L9.4136 4.45001H0.75V3.55001H9.4136Z"
              fill="black"
            />
          </svg>
        </a>
      </div>
    </div>

    <!-- //Subscribe block -->

    <!-- Vacancy News-block -->
    <div class="vacancy__news-block-desktop">
      <div class="vacancy__news">
        <div class="vacancy__news-title">
          <div class="vacancy__news-tabs">
            <a href="#" class="vacancy__news-link vacancy__news-link-active"
              >Новости</a
            >
            <a href="#" class="vacancy__news-link">События</a>
          </div>
          <div class="vacancy__news-arrows">
            <button class="vacancy__news-btn-prev listing-metro__news-btn-prev">
              <svg
                width="14"
                height="10"
                viewBox="0 0 14 10"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M4.57661 0.576172L0.152344 5.00044L4.57661 9.4247L5.42514 8.57617L2.4494 5.60044H14.0009V4.40044H2.4494L5.42514 1.4247L4.57661 0.576172Z"
                  fill="black"
                />
              </svg>
            </button>
            <button class="vacancy__news-btn-next listing-metro__news-btn-next">
              <svg
                width="14"
                height="10"
                viewBox="0 0 14 10"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M11.5515 4.40044L8.57574 1.4247L9.42426 0.576172L13.8485 5.00044L9.42426 9.4247L8.57574 8.57617L11.5515 5.60044H0V4.40044H11.5515Z"
                  fill="black"
                />
              </svg>
            </button>
          </div>
          <a href="#" class="vacancy__news-link-mobile"> Все новости </a>
        </div>

        <div class="vacancy__news-row">
          <div class="vacancy__news-item">
            <div class="vacancy__news-item-image-block">
              <img
                class="vacancy__news-image"
                src="<?php echo THEME_URL; ?>/assets/images/flyout/flyout-news/news1.png"
                alt="News"
              />
            </div>

            <a href="#" class="vacancy__news-title-info">
              Группа «М.Видео-Эльдорадо» запустила программу стажировок
              для программистов
            </a>
            <p class="vacancy__news-date-container">
              <span class="vacancy__news-date">16</span>
              <span class="vacancy__news-month">июля</span>
              <span class="vacancy__news-year">2021</span>
            </p>
          </div>

          <div class="vacancy__news-item">
            <div class="vacancy__news-item-image-block">
              <img
                class="vacancy__news-image"
                src="<?php echo THEME_URL; ?>/assets/images/flyout/flyout-news/news2.png"
                alt="News"
              />
            </div>

            <a href="#" class="vacancy__news-title-info">
              Группа «М.Видео-Эльдорадо» запустила программу стажировок
              для программистов
            </a>
            <p class="vacancy__news-date-container">
              <span class="vacancy__news-date">16</span>
              <span class="vacancy__news-month">июля</span>
              <span class="vacancy__news-year">2021</span>
            </p>
          </div>

          <div class="vacancy__news-item">
            <div class="vacancy__news-item-image-block">
              <img
                class="vacancy__news-image"
                src="<?php echo THEME_URL; ?>/assets/images/flyout/flyout-news/news1.png"
                alt="News"
              />
            </div>

            <a href="#" class="vacancy__news-title-info">
              Группа «М.Видео-Эльдорадо» запустила программу стажировок
              для программистов
            </a>
            <p class="vacancy__news-date-container">
              <span class="vacancy__news-date">16</span>
              <span class="vacancy__news-month">июля</span>
              <span class="vacancy__news-year">2021</span>
            </p>
          </div>

          <div class="vacancy__news-item">
            <div class="vacancy__news-item-image-block">
              <img
                class="vacancy__news-image"
                src="<?php echo THEME_URL; ?>/assets/images/flyout/flyout-news/news2.png"
                alt="News"
              />
            </div>

            <a href="#" class="vacancy__news-title-info">
              Группа «М.Видео-Эльдорадо» запустила программу стажировок
              для программистов
            </a>
            <p class="vacancy__news-date-container">
              <span class="vacancy__news-date">16</span>
              <span class="vacancy__news-month">июля</span>
              <span class="vacancy__news-year">2021</span>
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- //Vacancy News-block -->

    <!-- Vacancy New-block-mobile -->
    <div class="vacancy__news-block-mobile">
      <div class="vacancy__news">
        <div class="vacancy__news-title">
          <div class="vacancy__news-tabs">
            <a href="#" class="vacancy__news-link vacancy__news-link-active"
              >Новости</a
            >
            <a href="#" class="vacancy__news-link">События</a>
          </div>
          <div class="vacancy__news-arrows">
            <button class="vacancy__news-btn-prev"></button>
            <button class="vacancy__news-btn-next"></button>
          </div>
          <a href="#" class="vacancy__news-link-mobile"> Все новости </a>
        </div>

        <div class="vacancy__news-row">
          <div class="vacancy__news-item">
            <div class="vacancy__news-item-image-block">
              <img
                class="vacancy__news-image"
                src="<?php echo THEME_URL; ?>/assets/images/flyout/flyout-news/news1.png"
                alt="News"
              />
            </div>

            <a href="#" class="vacancy__news-title-info">
              Группа «М.Видео-Эльдорадо» запустила программу стажировок
              для программистов
            </a>
            <p class="vacancy__news-date-container">
              <span class="vacancy__news-date">16</span>
              <span class="vacancy__news-month">июля</span>
              <span class="vacancy__news-year">2021</span>
            </p>
          </div>

          <div class="vacancy__news-item">
            <div class="vacancy__news-item-image-block">
              <img
                class="vacancy__news-image"
                src="<?php echo THEME_URL; ?>/assets/images/flyout/flyout-news/news2.png"
                alt="News"
              />
            </div>

            <a href="#" class="vacancy__news-title-info">
              Группа «М.Видео-Эльдорадо» запустила программу стажировок
              для программистов
            </a>
            <p class="vacancy__news-date-container">
              <span class="vacancy__news-date">16</span>
              <span class="vacancy__news-month">июля</span>
              <span class="vacancy__news-year">2021</span>
            </p>
          </div>

          <div class="vacancy__news-item">
            <div class="vacancy__news-item-image-block">
              <img
                class="vacancy__news-image"
                src="<?php echo THEME_URL; ?>/assets/images/flyout/flyout-news/news1.png"
                alt="News"
              />
            </div>

            <a href="#" class="vacancy__news-title-info">
              Группа «М.Видео-Эльдорадо» запустила программу стажировок
              для программистов
            </a>
            <p class="vacancy__news-date-container">
              <span class="vacancy__news-date">16</span>
              <span class="vacancy__news-month">июля</span>
              <span class="vacancy__news-year">2021</span>
            </p>
          </div>

          <div class="vacancy__news-item">
            <div class="vacancy__news-item-image-block">
              <img
                class="vacancy__news-image"
                src="<?php echo THEME_URL; ?>/assets/images/flyout/flyout-news/news2.png"
                alt="News"
              />
            </div>

            <a href="#" class="vacancy__news-title-info">
              Группа «М.Видео-Эльдорадо» запустила программу стажировок
              для программистов
            </a>
            <p class="vacancy__news-date-container">
              <span class="vacancy__news-date">16</span>
              <span class="vacancy__news-month">июля</span>
              <span class="vacancy__news-year">2021</span>
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- //Vacancy New-block-mobile -->

    <!-- Footer -->
    <footer class="footer">
      <div class="container">
        <div class="footer__title-container">
          <h2 class="footer__title">Хочешь стать частью команды?</h2>
          <div class="footer__search-block">
            <input
              class="footer__search-field"
              type="text"
              placeholder="найти вакансию"
            />
            <button class="footer__search-button">
              <svg
                width="19"
                height="20"
                viewBox="0 0 19 20"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M10.0001 0C5.02951 0 1.00008 4.02944 1.00008 9C1.00008 11.2255 1.80786 13.2624 3.14623 14.8334L0.292969 17.6866L1.70718 19.1008L4.60424 16.2038C6.10771 17.3317 7.97585 18 10.0001 18C14.9706 18 19.0001 13.9706 19.0001 9C19.0001 4.02944 14.9706 0 10.0001 0ZM3.00008 9C3.00008 5.13401 6.13408 2 10.0001 2C13.8661 2 17.0001 5.13401 17.0001 9C17.0001 12.866 13.8661 16 10.0001 16C6.13408 16 3.00008 12.866 3.00008 9Z"
                  fill="black"
                />
              </svg>
            </button>
          </div>
        </div>

        <div class="footer__wrapper">
          <div class="footer__item">
            <div class="footer__item-wrapper">
              <a href="#" class="footer__logo-link">
                <svg
                  width="224"
                  height="26"
                  viewBox="0 0 224 26"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <g clip-path="url(#clip0)">
                    <path
                      d="M0 23.2666H69.75V25.9999H0V23.2666Z"
                      fill="#E31235"
                    />
                    <path
                      d="M69.75 23.2666H139.5V25.9999H69.75V23.2666Z"
                      fill="#76BC21"
                    />
                    <path
                      d="M45.9377 10.4H49.5063C49.409 9.93333 49.1819 9.6 48.8574 9.33333C48.533 9.06667 48.1437 8.93333 47.722 8.93333C47.3002 8.93333 46.9109 9.06667 46.5865 9.33333C46.2945 9.63333 46.0674 9.96667 45.9377 10.4ZM50.4795 13.4333L51.1284 14.7667C50.6742 15.2 49.636 15.6667 48.0788 15.6667C47.1056 15.6667 45.8728 15.3 45.1266 14.6C44.3805 13.9 43.9912 12.8667 43.9912 11.5333C43.9912 10.2667 44.3156 9.23333 44.9969 8.46667C45.6781 7.7 46.5541 7.33333 47.6895 7.33333C48.9872 7.33333 49.9605 7.8 50.6093 8.76667C51.0959 9.5 51.323 10.4333 51.323 11.6333V11.9333H45.8404C45.8404 12.6 46.0674 13.1 46.4892 13.4667C46.9109 13.8333 47.722 14.0333 48.241 14.0333C49.1494 14 49.8631 13.8 50.4795 13.4333ZM11.0627 2L6.78035 11.6667L2.56291 2L0 15.4H1.91407L3.1793 7.86667L6.68302 15.9667L10.2192 7.86667L11.452 15.4H13.3336L11.0627 2ZM14.9881 15.1333C14.761 14.9 14.6637 14.6333 14.6637 14.3C14.6637 13.9667 14.761 13.7 14.9881 13.4667C15.2152 13.2333 15.4748 13.1333 15.7992 13.1333C16.1236 13.1333 16.3831 13.2333 16.6102 13.4667C16.8373 13.7 16.9347 13.9667 16.9347 14.3C16.9347 14.6333 16.8373 14.9 16.6102 15.1333C16.3831 15.3667 16.1236 15.4667 15.7992 15.4667C15.4748 15.4667 15.2152 15.3667 14.9881 15.1333ZM20.3735 9.86667V13.6333H21.4765C22.3524 13.6333 23.0013 13.4333 23.3581 13.0667C23.715 12.7 23.8772 12.2333 23.8772 11.7333C23.8772 11.2 23.715 10.7667 23.3581 10.4C23.0013 10.0333 22.3849 9.86667 21.509 9.86667H20.3735ZM20.3735 4.7V8.26667H20.925C22.2551 8.26667 22.904 7.66667 22.904 6.43333C22.904 5.26667 22.2551 4.7 20.9899 4.7H20.3735ZM18.5243 2.93333H20.3735C20.8601 2.93333 21.217 2.93333 21.4116 2.96667C21.6387 2.96667 21.9307 3.03333 22.32 3.13333C22.7093 3.2 23.0662 3.36667 23.3581 3.6C24.2665 4.26667 24.7207 5.2 24.7207 6.4C24.7207 7.36667 24.3638 8.1 23.6501 8.66667C24.3638 8.9 24.8829 9.3 25.2398 9.86667C25.5966 10.4333 25.7588 11.0333 25.7588 11.7C25.7588 12.9 25.3371 13.8333 24.526 14.5333C24.2016 14.8 23.8123 15 23.3581 15.1333C22.904 15.2667 22.5471 15.3333 22.32 15.3667C22.0605 15.4 21.736 15.4 21.2819 15.4H18.4919V2.93333H18.5243ZM27.0565 7.53333H28.8408V12L34.0964 6.8V15.4H32.3445V10.8333L27.0565 16V7.53333ZM40.6497 13.7667V9.16667H38.3463V11.3333C38.3463 12.4667 38.0543 13.2667 37.4379 13.7667H40.6497ZM36.6593 7.53333H42.434V13.7667H43.5694V17.6667H41.9473V15.4333H36.562V17.6667H34.9399V13.7667C35.5887 13.7 36.0429 13.3667 36.3673 12.7333C36.562 12.3 36.6917 11.6 36.6917 10.6333V7.53333H36.6593ZM79.0933 7.53333V15.4H77.309V9.16667H75.0056V12.3333C75.0056 13.3 74.7785 14.0667 74.2919 14.6C73.8052 15.1667 73.124 15.4333 72.2156 15.4333C72.1183 15.4333 71.956 15.4333 71.7614 15.4V13.7667C71.8912 13.8 72.0209 13.8 72.0858 13.8C72.4751 13.8 72.7995 13.6667 73.0266 13.4C73.1888 13.2 73.2862 12.8667 73.2862 12.3667V7.53333H79.0933ZM82.5645 13.8333H83.3756C83.7973 13.8333 84.1217 13.7667 84.284 13.6667C84.5435 13.5 84.6733 13.2333 84.6733 12.8667C84.6733 12.5333 84.5435 12.2667 84.284 12.0667C84.0893 11.9333 83.7973 11.9 83.3756 11.9H82.5645V13.8333ZM80.7802 7.53333H82.5645V10.3333H83.6027C83.9271 10.3333 84.1866 10.3333 84.3813 10.3667C84.5759 10.4 84.8355 10.4667 85.1599 10.5667C85.4843 10.7 85.7438 10.8667 85.9385 11.1333C86.3278 11.5667 86.5224 12.1333 86.5224 12.8333C86.5224 13.6667 86.2953 14.3 85.8412 14.7333C85.6465 14.9333 85.387 15.1 85.095 15.2C84.803 15.3 84.5759 15.3667 84.3813 15.3667C84.1866 15.3667 83.9271 15.4 83.5702 15.4H80.7802V7.53333ZM92.6864 13.7667V9.16667H90.383V11.3333C90.383 12.4667 90.091 13.2667 89.4746 13.7667H92.6864ZM88.6636 7.53333H94.4383V13.7667H95.5737V17.6667H93.9516V15.4333H88.5663V17.6667H86.9442V13.7667C87.593 13.7 88.0472 13.3667 88.3716 12.7333C88.5663 12.3 88.696 11.6 88.696 10.6333V7.53333H88.6636ZM109.037 8.96667C108.453 8.96667 107.934 9.2 107.512 9.63333C107.091 10.1 106.863 10.7 106.863 11.5C106.863 12.2 107.058 12.8 107.447 13.3C107.837 13.7667 108.356 14.0333 109.037 14.0333C109.686 14.0333 110.205 13.8 110.594 13.3C110.984 12.8 111.178 12.2 111.178 11.4667C111.178 10.6667 110.951 10.0667 110.529 9.63333C110.14 9.16667 109.621 8.96667 109.037 8.96667ZM106.993 7.53333V8.4C107.577 7.7 108.356 7.33333 109.329 7.33333C110.367 7.33333 111.243 7.7 111.957 8.46667C112.671 9.23333 113.027 10.2333 113.027 11.4667C113.027 12.7 112.638 13.7 111.892 14.5C111.146 15.3 110.27 15.6667 109.329 15.6667C109.134 15.6667 108.907 15.6333 108.713 15.6C108.518 15.5667 108.226 15.4333 107.869 15.2667C107.512 15.0667 107.22 14.8333 106.993 14.5333V19.2H105.209V7.53333H106.993ZM117.894 8.96667C117.245 8.96667 116.726 9.2 116.337 9.7C115.947 10.2 115.753 10.8 115.753 11.5333C115.753 12.2333 115.947 12.8333 116.337 13.3C116.726 13.8 117.245 14.0333 117.894 14.0333C118.543 14.0333 119.094 13.8 119.451 13.3333C119.84 12.8667 120.035 12.2667 120.035 11.5C120.035 10.7 119.84 10.0667 119.418 9.63333C119.029 9.16667 118.51 8.96667 117.894 8.96667ZM119.938 7.53333H121.722V15.4H119.938V14.5667C119.354 15.2667 118.575 15.6333 117.602 15.6333C116.466 15.6333 115.59 15.2333 114.909 14.4C114.228 13.5667 113.903 12.6 113.903 11.4667C113.903 10.3333 114.228 9.36667 114.909 8.53333C115.59 7.7 116.499 7.3 117.634 7.3C118.64 7.3 119.386 7.66667 119.938 8.43333V7.53333ZM128.243 13.7667V9.16667H125.939V11.3333C125.939 12.4667 125.647 13.2667 125.031 13.7667H128.243ZM124.252 7.53333H130.027V13.7667H131.162V17.6667H129.54V15.4333H124.155V17.6667H122.533V13.7667C123.182 13.7 123.636 13.3667 123.96 12.7333C124.155 12.3 124.285 11.6 124.285 10.6333V7.53333H124.252ZM62.0937 5.83333L61.0556 4.66667C62.1586 3.3 64.17 2.66667 65.6299 2.66667C67.3493 2.66667 68.7767 3.2 69.8798 4.3C71.0801 5.5 71.6965 7.1 71.6965 9.13333C71.6965 11.0667 71.0801 12.6667 69.8798 13.9C68.7443 15.0667 67.3169 15.6333 65.565 15.6333C64.2673 15.6333 62.0937 14.9 61.0556 13.6L62.0937 12.4333C63.0994 13.3667 64.2349 13.8333 65.4352 13.8333C66.8302 13.8333 67.9333 13.4 68.7119 12.5C69.3607 11.7667 69.7176 10.8667 69.7824 9.83333H63.7483V8.06667H69.75C69.6202 7.1 69.2309 6.26667 68.647 5.6C67.9008 4.8 66.8951 4.4 65.5974 4.4C64.2673 4.46667 63.1319 4.93333 62.0937 5.83333ZM56.3191 9.1C55.0214 9.1 53.9833 10.1667 53.9833 11.5C53.9833 12.8 55.0214 13.9 56.3191 13.9C57.6167 13.9 58.6549 12.8333 58.6549 11.5C58.6549 10.1667 57.6167 9.1 56.3191 9.1ZM56.3191 15.6667C54.0806 15.6667 52.2638 13.8 52.2638 11.5C52.2638 9.2 54.0806 7.33333 56.3191 7.33333C58.5576 7.33333 60.3743 9.2 60.3743 11.5C60.3743 13.8 58.5576 15.6667 56.3191 15.6667ZM135.445 9.1C134.147 9.1 133.109 10.1667 133.109 11.5C133.109 12.8 134.147 13.9 135.445 13.9C136.742 13.9 137.781 12.8333 137.781 11.5C137.748 10.1667 136.71 9.1 135.445 9.1ZM135.445 15.6667C133.206 15.6667 131.39 13.8 131.39 11.5C131.39 9.2 133.206 7.33333 135.445 7.33333C137.683 7.33333 139.5 9.2 139.5 11.5C139.5 13.8 137.683 15.6667 135.445 15.6667ZM100.116 9.1C98.8179 9.1 97.7798 10.1667 97.7798 11.5C97.7798 12.8 98.8179 13.9 100.116 13.9C101.413 13.9 102.451 12.8333 102.451 11.5C102.451 10.1667 101.413 9.1 100.116 9.1ZM100.116 15.6667C97.8771 15.6667 96.0603 13.8 96.0603 11.5C96.0603 9.2 97.8771 7.33333 100.116 7.33333C102.354 7.33333 104.171 9.2 104.171 11.5C104.203 13.8 102.354 15.6667 100.116 15.6667Z"
                      fill="white"
                    />
                  </g>
                </svg>
              </a>

              <div class="footer__item-contact-wrapper">
                <p class="footer__item-title">Служба подбора персонала</p>
                <div class="footer__contacts-block">
                  <p class="footer__contact-mail">job@mvideoeldorado.ru</p>
                  <button class="footer__contact-button">скопировать</button>
                  <a href="#" class="footer__contact-button">написать</a>
                </div>

                <div class="footer__contacts-block">
                  <a href="tel:+78002002311 " class="footer__contact-phone"
                    >8-800-200-23-11
                  </a>
                  <p class="footer__contacts-time">пн–пт, 10–19 по Москве</p>
                </div>
              </div>
            </div>

            <p class="footer__info-text">© 2021 Группа «М.Видео-Эльдорадо»</p>
          </div>

          <div class="footer__item">
            <p class="footer__item-title">Наши соцсети</p>

            <div class="footer__item-social-block">
              <p class="footer__item-social-title">Группа</p>

              <div class="footer__item-social-row">
                <div class="footer__item-social-item">
                  <a href="#" class="footer__item-social-link">
                    Facebook
                    <svg
                      width="10"
                      height="10"
                      viewBox="0 0 10 10"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M7.55191 1.5999H3.00044V0.399902H9.00044C9.33181 0.399902 9.60044 0.668531 9.60044 0.999902V6.9999H8.40044V2.44843L1.4247 9.42417L0.576172 8.57564L7.55191 1.5999Z"
                        fill="white"
                      />
                    </svg>
                  </a>
                  <a href="#" class="footer__item-social-link">
                    Хабр
                    <svg
                      width="10"
                      height="10"
                      viewBox="0 0 10 10"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M7.55191 1.5999H3.00044V0.399902H9.00044C9.33181 0.399902 9.60044 0.668531 9.60044 0.999902V6.9999H8.40044V2.44843L1.4247 9.42417L0.576172 8.57564L7.55191 1.5999Z"
                        fill="white"
                      />
                    </svg>
                  </a>
                  <a href="#" class="footer__item-social-link">
                    Inplace
                    <svg
                      width="10"
                      height="10"
                      viewBox="0 0 10 10"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M7.55191 1.5999H3.00044V0.399902H9.00044C9.33181 0.399902 9.60044 0.668531 9.60044 0.999902V6.9999H8.40044V2.44843L1.4247 9.42417L0.576172 8.57564L7.55191 1.5999Z"
                        fill="white"
                      />
                    </svg>
                  </a>
                </div>
              </div>
            </div>

            <div class="footer__item-social-block">
              <p class="footer__item-social-title">М.Видео</p>

              <div class="footer__item-social-row">
                <div class="footer__item-social-item">
                  <a href="#" class="footer__item-social-link">
                    ВК
                    <svg
                      width="10"
                      height="10"
                      viewBox="0 0 10 10"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M7.55191 1.5999H3.00044V0.399902H9.00044C9.33181 0.399902 9.60044 0.668531 9.60044 0.999902V6.9999H8.40044V2.44843L1.4247 9.42417L0.576172 8.57564L7.55191 1.5999Z"
                        fill="white"
                      />
                    </svg>
                  </a>
                  <a href="#" class="footer__item-social-link">
                    YouTube
                    <svg
                      width="10"
                      height="10"
                      viewBox="0 0 10 10"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M7.55191 1.5999H3.00044V0.399902H9.00044C9.33181 0.399902 9.60044 0.668531 9.60044 0.999902V6.9999H8.40044V2.44843L1.4247 9.42417L0.576172 8.57564L7.55191 1.5999Z"
                        fill="white"
                      />
                    </svg>
                  </a>
                  <a href="#" class="footer__item-social-link">
                    Instagram
                    <svg
                      width="10"
                      height="10"
                      viewBox="0 0 10 10"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M7.55191 1.5999H3.00044V0.399902H9.00044C9.33181 0.399902 9.60044 0.668531 9.60044 0.999902V6.9999H8.40044V2.44843L1.4247 9.42417L0.576172 8.57564L7.55191 1.5999Z"
                        fill="white"
                      />
                    </svg>
                  </a>
                </div>
              </div>
            </div>

            <div class="footer__item-social-block">
              <p class="footer__item-social-title">Эльдорадо</p>

              <div class="footer__item-social-row">
                <div class="footer__item-social-item">
                  <a href="#" class="footer__item-social-link">
                    ВК
                    <svg
                      width="10"
                      height="10"
                      viewBox="0 0 10 10"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M7.55191 1.5999H3.00044V0.399902H9.00044C9.33181 0.399902 9.60044 0.668531 9.60044 0.999902V6.9999H8.40044V2.44843L1.4247 9.42417L0.576172 8.57564L7.55191 1.5999Z"
                        fill="white"
                      />
                    </svg>
                  </a>
                  <a href="#" class="footer__item-social-link">
                    YouTube
                    <svg
                      width="10"
                      height="10"
                      viewBox="0 0 10 10"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M7.55191 1.5999H3.00044V0.399902H9.00044C9.33181 0.399902 9.60044 0.668531 9.60044 0.999902V6.9999H8.40044V2.44843L1.4247 9.42417L0.576172 8.57564L7.55191 1.5999Z"
                        fill="white"
                      />
                    </svg>
                  </a>
                  <a href="#" class="footer__item-social-link">
                    Instagram
                    <svg
                      width="10"
                      height="10"
                      viewBox="0 0 10 10"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M7.55191 1.5999H3.00044V0.399902H9.00044C9.33181 0.399902 9.60044 0.668531 9.60044 0.999902V6.9999H8.40044V2.44843L1.4247 9.42417L0.576172 8.57564L7.55191 1.5999Z"
                        fill="white"
                      />
                    </svg>
                  </a>
                </div>
              </div>
            </div>

            <a href="#" class="footer__info-text"
              >Политика конфиденциальности</a
            >
          </div>

          <div class="footer__item">
            <p class="footer__item-title">Направления</p>
            <a href="#" class="footem__item-directions-link">IT-департамент</a>
            <a href="#" class="footem__item-directions-link"
              >Розничные магазины</a
            >
            <a href="#" class="footem__item-directions-link"
              >Центральный офиc</a
            >
            <a href="#" class="footem__item-directions-link"
              >Сервис и логистика</a
            >
            <a href="#" class="footem__item-directions-link">Студентам</a>

            <div class="footer__info-text">
              Made by
              <a
                class="footer__info-link"
                href="https://annti.design"
                target="blank"
              >
                Annti
              </a>
              +
              <a
                class="footer__info-link"
                href="https://amberlabs.ru"
                target="blank"
              >
                AmberLabs
              </a>
            </div>
          </div>
        </div>

        <a href="#" class="footer__logo-link-mobile">
          <svg
            width="224"
            height="26"
            viewBox="0 0 224 26"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <g clip-path="url(#clip0)">
              <path d="M0 23.2666H69.75V25.9999H0V23.2666Z" fill="#E31235" />
              <path
                d="M69.75 23.2666H139.5V25.9999H69.75V23.2666Z"
                fill="#76BC21"
              />
              <path
                d="M45.9377 10.4H49.5063C49.409 9.93333 49.1819 9.6 48.8574 9.33333C48.533 9.06667 48.1437 8.93333 47.722 8.93333C47.3002 8.93333 46.9109 9.06667 46.5865 9.33333C46.2945 9.63333 46.0674 9.96667 45.9377 10.4ZM50.4795 13.4333L51.1284 14.7667C50.6742 15.2 49.636 15.6667 48.0788 15.6667C47.1056 15.6667 45.8728 15.3 45.1266 14.6C44.3805 13.9 43.9912 12.8667 43.9912 11.5333C43.9912 10.2667 44.3156 9.23333 44.9969 8.46667C45.6781 7.7 46.5541 7.33333 47.6895 7.33333C48.9872 7.33333 49.9605 7.8 50.6093 8.76667C51.0959 9.5 51.323 10.4333 51.323 11.6333V11.9333H45.8404C45.8404 12.6 46.0674 13.1 46.4892 13.4667C46.9109 13.8333 47.722 14.0333 48.241 14.0333C49.1494 14 49.8631 13.8 50.4795 13.4333ZM11.0627 2L6.78035 11.6667L2.56291 2L0 15.4H1.91407L3.1793 7.86667L6.68302 15.9667L10.2192 7.86667L11.452 15.4H13.3336L11.0627 2ZM14.9881 15.1333C14.761 14.9 14.6637 14.6333 14.6637 14.3C14.6637 13.9667 14.761 13.7 14.9881 13.4667C15.2152 13.2333 15.4748 13.1333 15.7992 13.1333C16.1236 13.1333 16.3831 13.2333 16.6102 13.4667C16.8373 13.7 16.9347 13.9667 16.9347 14.3C16.9347 14.6333 16.8373 14.9 16.6102 15.1333C16.3831 15.3667 16.1236 15.4667 15.7992 15.4667C15.4748 15.4667 15.2152 15.3667 14.9881 15.1333ZM20.3735 9.86667V13.6333H21.4765C22.3524 13.6333 23.0013 13.4333 23.3581 13.0667C23.715 12.7 23.8772 12.2333 23.8772 11.7333C23.8772 11.2 23.715 10.7667 23.3581 10.4C23.0013 10.0333 22.3849 9.86667 21.509 9.86667H20.3735ZM20.3735 4.7V8.26667H20.925C22.2551 8.26667 22.904 7.66667 22.904 6.43333C22.904 5.26667 22.2551 4.7 20.9899 4.7H20.3735ZM18.5243 2.93333H20.3735C20.8601 2.93333 21.217 2.93333 21.4116 2.96667C21.6387 2.96667 21.9307 3.03333 22.32 3.13333C22.7093 3.2 23.0662 3.36667 23.3581 3.6C24.2665 4.26667 24.7207 5.2 24.7207 6.4C24.7207 7.36667 24.3638 8.1 23.6501 8.66667C24.3638 8.9 24.8829 9.3 25.2398 9.86667C25.5966 10.4333 25.7588 11.0333 25.7588 11.7C25.7588 12.9 25.3371 13.8333 24.526 14.5333C24.2016 14.8 23.8123 15 23.3581 15.1333C22.904 15.2667 22.5471 15.3333 22.32 15.3667C22.0605 15.4 21.736 15.4 21.2819 15.4H18.4919V2.93333H18.5243ZM27.0565 7.53333H28.8408V12L34.0964 6.8V15.4H32.3445V10.8333L27.0565 16V7.53333ZM40.6497 13.7667V9.16667H38.3463V11.3333C38.3463 12.4667 38.0543 13.2667 37.4379 13.7667H40.6497ZM36.6593 7.53333H42.434V13.7667H43.5694V17.6667H41.9473V15.4333H36.562V17.6667H34.9399V13.7667C35.5887 13.7 36.0429 13.3667 36.3673 12.7333C36.562 12.3 36.6917 11.6 36.6917 10.6333V7.53333H36.6593ZM79.0933 7.53333V15.4H77.309V9.16667H75.0056V12.3333C75.0056 13.3 74.7785 14.0667 74.2919 14.6C73.8052 15.1667 73.124 15.4333 72.2156 15.4333C72.1183 15.4333 71.956 15.4333 71.7614 15.4V13.7667C71.8912 13.8 72.0209 13.8 72.0858 13.8C72.4751 13.8 72.7995 13.6667 73.0266 13.4C73.1888 13.2 73.2862 12.8667 73.2862 12.3667V7.53333H79.0933ZM82.5645 13.8333H83.3756C83.7973 13.8333 84.1217 13.7667 84.284 13.6667C84.5435 13.5 84.6733 13.2333 84.6733 12.8667C84.6733 12.5333 84.5435 12.2667 84.284 12.0667C84.0893 11.9333 83.7973 11.9 83.3756 11.9H82.5645V13.8333ZM80.7802 7.53333H82.5645V10.3333H83.6027C83.9271 10.3333 84.1866 10.3333 84.3813 10.3667C84.5759 10.4 84.8355 10.4667 85.1599 10.5667C85.4843 10.7 85.7438 10.8667 85.9385 11.1333C86.3278 11.5667 86.5224 12.1333 86.5224 12.8333C86.5224 13.6667 86.2953 14.3 85.8412 14.7333C85.6465 14.9333 85.387 15.1 85.095 15.2C84.803 15.3 84.5759 15.3667 84.3813 15.3667C84.1866 15.3667 83.9271 15.4 83.5702 15.4H80.7802V7.53333ZM92.6864 13.7667V9.16667H90.383V11.3333C90.383 12.4667 90.091 13.2667 89.4746 13.7667H92.6864ZM88.6636 7.53333H94.4383V13.7667H95.5737V17.6667H93.9516V15.4333H88.5663V17.6667H86.9442V13.7667C87.593 13.7 88.0472 13.3667 88.3716 12.7333C88.5663 12.3 88.696 11.6 88.696 10.6333V7.53333H88.6636ZM109.037 8.96667C108.453 8.96667 107.934 9.2 107.512 9.63333C107.091 10.1 106.863 10.7 106.863 11.5C106.863 12.2 107.058 12.8 107.447 13.3C107.837 13.7667 108.356 14.0333 109.037 14.0333C109.686 14.0333 110.205 13.8 110.594 13.3C110.984 12.8 111.178 12.2 111.178 11.4667C111.178 10.6667 110.951 10.0667 110.529 9.63333C110.14 9.16667 109.621 8.96667 109.037 8.96667ZM106.993 7.53333V8.4C107.577 7.7 108.356 7.33333 109.329 7.33333C110.367 7.33333 111.243 7.7 111.957 8.46667C112.671 9.23333 113.027 10.2333 113.027 11.4667C113.027 12.7 112.638 13.7 111.892 14.5C111.146 15.3 110.27 15.6667 109.329 15.6667C109.134 15.6667 108.907 15.6333 108.713 15.6C108.518 15.5667 108.226 15.4333 107.869 15.2667C107.512 15.0667 107.22 14.8333 106.993 14.5333V19.2H105.209V7.53333H106.993ZM117.894 8.96667C117.245 8.96667 116.726 9.2 116.337 9.7C115.947 10.2 115.753 10.8 115.753 11.5333C115.753 12.2333 115.947 12.8333 116.337 13.3C116.726 13.8 117.245 14.0333 117.894 14.0333C118.543 14.0333 119.094 13.8 119.451 13.3333C119.84 12.8667 120.035 12.2667 120.035 11.5C120.035 10.7 119.84 10.0667 119.418 9.63333C119.029 9.16667 118.51 8.96667 117.894 8.96667ZM119.938 7.53333H121.722V15.4H119.938V14.5667C119.354 15.2667 118.575 15.6333 117.602 15.6333C116.466 15.6333 115.59 15.2333 114.909 14.4C114.228 13.5667 113.903 12.6 113.903 11.4667C113.903 10.3333 114.228 9.36667 114.909 8.53333C115.59 7.7 116.499 7.3 117.634 7.3C118.64 7.3 119.386 7.66667 119.938 8.43333V7.53333ZM128.243 13.7667V9.16667H125.939V11.3333C125.939 12.4667 125.647 13.2667 125.031 13.7667H128.243ZM124.252 7.53333H130.027V13.7667H131.162V17.6667H129.54V15.4333H124.155V17.6667H122.533V13.7667C123.182 13.7 123.636 13.3667 123.96 12.7333C124.155 12.3 124.285 11.6 124.285 10.6333V7.53333H124.252ZM62.0937 5.83333L61.0556 4.66667C62.1586 3.3 64.17 2.66667 65.6299 2.66667C67.3493 2.66667 68.7767 3.2 69.8798 4.3C71.0801 5.5 71.6965 7.1 71.6965 9.13333C71.6965 11.0667 71.0801 12.6667 69.8798 13.9C68.7443 15.0667 67.3169 15.6333 65.565 15.6333C64.2673 15.6333 62.0937 14.9 61.0556 13.6L62.0937 12.4333C63.0994 13.3667 64.2349 13.8333 65.4352 13.8333C66.8302 13.8333 67.9333 13.4 68.7119 12.5C69.3607 11.7667 69.7176 10.8667 69.7824 9.83333H63.7483V8.06667H69.75C69.6202 7.1 69.2309 6.26667 68.647 5.6C67.9008 4.8 66.8951 4.4 65.5974 4.4C64.2673 4.46667 63.1319 4.93333 62.0937 5.83333ZM56.3191 9.1C55.0214 9.1 53.9833 10.1667 53.9833 11.5C53.9833 12.8 55.0214 13.9 56.3191 13.9C57.6167 13.9 58.6549 12.8333 58.6549 11.5C58.6549 10.1667 57.6167 9.1 56.3191 9.1ZM56.3191 15.6667C54.0806 15.6667 52.2638 13.8 52.2638 11.5C52.2638 9.2 54.0806 7.33333 56.3191 7.33333C58.5576 7.33333 60.3743 9.2 60.3743 11.5C60.3743 13.8 58.5576 15.6667 56.3191 15.6667ZM135.445 9.1C134.147 9.1 133.109 10.1667 133.109 11.5C133.109 12.8 134.147 13.9 135.445 13.9C136.742 13.9 137.781 12.8333 137.781 11.5C137.748 10.1667 136.71 9.1 135.445 9.1ZM135.445 15.6667C133.206 15.6667 131.39 13.8 131.39 11.5C131.39 9.2 133.206 7.33333 135.445 7.33333C137.683 7.33333 139.5 9.2 139.5 11.5C139.5 13.8 137.683 15.6667 135.445 15.6667ZM100.116 9.1C98.8179 9.1 97.7798 10.1667 97.7798 11.5C97.7798 12.8 98.8179 13.9 100.116 13.9C101.413 13.9 102.451 12.8333 102.451 11.5C102.451 10.1667 101.413 9.1 100.116 9.1ZM100.116 15.6667C97.8771 15.6667 96.0603 13.8 96.0603 11.5C96.0603 9.2 97.8771 7.33333 100.116 7.33333C102.354 7.33333 104.171 9.2 104.171 11.5C104.203 13.8 102.354 15.6667 100.116 15.6667Z"
                fill="white"
              />
            </g>
          </svg>
        </a>

        <div class="footer__info-block-mobile">
          <div class="footer__info-block-item-mobile">
            <p class="footer__info-text-mobile">
              © 2021 Группа «М.Видео-Эльдорадо»
            </p>
          </div>

          <div class="footer__info-block-item-mobile">
            <a href="#" class="footer__info-text-mobile"
              >Политика конфиденциальности</a
            >
          </div>

          <div class="footer__info-block-item-mobile">
            <div class="footer__info-text-mobile">
              Made by
              <a
                class="footer__info-link"
                href="https://annti.design"
                target="blank"
              >
                Annti
              </a>
              +
              <a
                class="footer__info-link"
                href="https://amberlabs.ru"
                target="blank"
              >
                AmberLabs
              </a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--  //Footer  -->

    <?php wp_footer(); ?>

    </body>
</html>
