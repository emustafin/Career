<?php
$footer_classes = '';
if( is_page('retail') )
  $footer_classes = 'retail__footer';
?>
    <!--  Footer  -->
    <footer class="footer <?php echo $footer_classes; ?>">
      <div class="container">

        <?php if( is_page('retail') ){ ?>
          <div class="retail__footer-title-container">
            <h2 class="retail__footer-title">Стань частью</h2>
            <a href="#" class="retail__footer-link">
              заполнить анкету
              <svg
                class="retail__footer-link-arrow"
                width="15"
                height="10"
                viewBox="0 0 15 10"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M12.0329 4.13559L8.95511 1.26552L9.7735 0.387895L14.3495 4.65506L10.0823 9.23103L9.20469 8.41263L12.0748 5.33486L0.530325 5.738L0.488445 4.53873L12.0329 4.13559Z"
                  fill="black"
                />
              </svg>
            </a>
            <h2 class="retail__footer-title-shop-mvideo mvideo">
              команды М.Видео
            </h2>
            <h2 class="retail__footer-title-shop-eldorado eldorado hide">
              команды Эльдорадо
            </h2>
          </div>
        <?php } else { ?>
          <div class="footer__title-container">
            <h2 class="footer__title">Хочешь стать частью команды?</h2>
            <form method="GET" action="/vacancies/" class="footer__search-block">
              <input
                name="s"
                class="footer__search-field"
                type="text"
                placeholder="найти вакансию"
                value=""
              />
              <button class="footer__search-button">
                <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M10.0001 0C5.02951 0 1.00008 4.02944 1.00008 9C1.00008 11.2255 1.80786 13.2624 3.14623 14.8334L0.292969 17.6866L1.70718 19.1008L4.60424 16.2038C6.10771 17.3317 7.97585 18 10.0001 18C14.9706 18 19.0001 13.9706 19.0001 9C19.0001 4.02944 14.9706 0 10.0001 0ZM3.00008 9C3.00008 5.13401 6.13408 2 10.0001 2C13.8661 2 17.0001 5.13401 17.0001 9C17.0001 12.866 13.8661 16 10.0001 16C6.13408 16 3.00008 12.866 3.00008 9Z" fill="black"/>
                </svg>
              </button>
            </form>
          </div>
        <?php } ?>

        <div class="footer__wrapper">
          <div class="footer__item">
            <div class="footer__item-wrapper">
              <a href="/" class="footer__logo-link">
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
                  <a href="mailto:job@mvideoeldorado.ru" class="footer__contact-button">написать</a>
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
                  <a href="https://www.facebook.com/mvideoeldorado/" class="footer__item-social-link" target="blank">
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
                  <a href="https://habr.com/ru/company/mvideo/blog/" class="footer__item-social-link" target="blank">
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
                  <a href="https://inplacers.ru/mvideo" class="footer__item-social-link" target="blank">
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
                  <a href="https://vk.com/myjobby" class="footer__item-social-link" target="blank">
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
                  <a href="https://www.youtube.com/user/wwwmvideoru" class="footer__item-social-link" target="blank">
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
                  <a href="https://www.instagram.com/myjobby/" class="footer__item-social-link" target="blank">
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
                  <a href="https://vk.com/eldorado_job" class="footer__item-social-link" target="blank">
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
                  <a href="https://www.youtube.com/channel/UCF9nmUgfNLpHAM4FPB1I3uA" class="footer__item-social-link" target="blank">
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
                  <a href="https://www.instagram.com/eldorado_job/" class="footer__item-social-link" target="blank">
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

            <a href="/privacy-policy/" class="footer__info-text">Политика конфиденциальности</a>
          </div>

          <div class="footer__item">
            <p class="footer__item-title">Направления</p>
            <?php
            $menu_name = 'primary';
            $locations = get_nav_menu_locations();
            $menu_items = wp_get_nav_menu_items( $locations[ $menu_name ] );
            if( $menu_items ):
              foreach ($menu_items as $item) :?>

              <a target="blank" href="<?php echo $item->url;?>" class="footem__item-directions-link"><?php echo $item->title;?></a>

            <?php endforeach; endif; ?>
            
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

        <a href="/" class="footer__logo-link-mobile">
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

        <div class="footer__info-block-mobile">
          <div class="footer__info-block-item-mobile">
            <p class="footer__info-text-mobile">
              © 2021 Группа «М.Видео-Эльдорадо»
            </p>
          </div>

          <div class="footer__info-block-item-mobile">
            <a href="/privacy-policy/" class="footer__info-text-mobile">Политика конфиденциальности</a>
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

    <?php if( !is_single() ): ?>
    <!-- Flyout section -->
      <?php include(THEME_DIR . '/template-parts/flyout.php'); ?>
      <!-- //Flyout section -->
      <?php endif; ?>
      
    <!-- Form section -->
      <?php include(THEME_DIR . '/template-parts/form-section.php'); ?>
    <!-- //Form section -->

    <?php wp_footer(); ?>

    </body>
</html>
