<!-- Section internship -->
<?php
$mvideo_retail_internship = get_sub_field('mvideo_retail_internship');
$eldorado_retail_internship = get_sub_field('eldorado_retail_internship');
?>
<section class="retail__internship">
  <div class="retail__internship-content-block">
    <h2 class="retail__internship-title"><?php echo get_sub_field('title'); ?></h2>
    <div class="retail__internship-button-container">
      <a href="#" class="retail__internship-button">
        заполнить анкету

        <svg
          class="retail__internship-button-arrow"
          width="15"
          height="10"
          viewBox="0 0 15 10"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M12.0329 4.63559L8.95511 1.76552L9.7735 0.887895L14.3495 5.15506L10.0823 9.73103L9.20469 8.91263L12.0748 5.83486L0.530325 6.238L0.488445 5.03873L12.0329 4.63559Z"
            fill="black"
          />
        </svg>
      </a>
    </div>
    <!-- <div class="retail__internship-text-wrapper">
      <p class="retail__internship-text">
        <?php echo get_sub_field('description'); ?>
      </p>
    </div> -->

    <div class="retail__internship-text-wrapper mvideo">
      <div class="retail__internship-text">
        <?php echo $mvideo_retail_internship['description']; ?>
      </div>
    </div>

    <div class="retail__internship-text-wrapper eldorado hide">
      <div class="retail__internship-text">
        <?php echo $eldorado_retail_internship['description']; ?>
      </div>
    </div>

  </div>

  <div class="retail__internship-image-block">
    <div class="retail__internship-image-block-outside">
      <svg
        class="retail__internship-image-block-outside-circle"
        width="344"
        height="344"
        viewBox="0 0 344 344"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
        >
        <circle cx="172" cy="172" r="171.5" stroke="#E31235" />
      </svg>

      <div class="retail__internship-image-block-outside-icon-block">
        <svg
          width="40"
          height="40"
          viewBox="0 0 40 40"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
          >
          <path
            d="M2.63894 9.956C2.63894 9.956 5.42876 6.49434 9.96346 3.76522"
            stroke="#E31235"
            stroke-linecap="round"
          />
          <path
            d="M12.7641 2.30243C17.6149 0.149929 23.8267 -0.646457 30.5347 3.38413C38.8336 8.3706 39.7598 16.6867 39.0512 22.6238"
            stroke="#E31235"
            stroke-linecap="round"
          />
          <path
            d="M37.2418 29.52C37.4898 29.1072 38.0593 27.6706 38.5273 25.6309"
            stroke="#E31235"
            stroke-linecap="round"
          />
          <path
            d="M25.8637 38.4922C29.862 31.8379 29.8302 35.1958 32.9475 30.0077C34.1722 27.9695 35.1339 24.873 35.2896 21.5273"
            stroke="#76BC21"
            stroke-linecap="round"
          />
          <path
            d="M26.1213 6.12857C26.8155 6.42939 27.5188 6.79062 28.2299 7.21791C32.3571 9.69778 34.3609 13.4697 35.0376 17.3478"
            stroke="#76BC21"
            stroke-linecap="round"
          />
          <path
            d="M3.4922 15.6875C3.4922 15.6875 12.3232 2.02847 24.2278 5.44774"
            stroke="#76BC21"
            stroke-linecap="round"
          />
          <path
            d="M10.5578 14.0999C14.6886 10.1484 20.1311 7.2648 25.8368 10.6931C30.2298 13.3328 31.4218 17.3937 30.939 21.3622"
            stroke="#E31235"
            stroke-linecap="round"
          />
          <path
            d="M29.8892 25.4081C29.4949 26.4101 29.0177 27.3672 28.4873 28.2499C26.3509 31.8054 24.6536 31.412 23.0507 33.5795"
            stroke="#E31235"
            stroke-linecap="round"
          />
          <path
            d="M20.7178 39.3931C21.1546 37.6794 21.5859 36.3984 22.0186 35.416"
            stroke="#E31235"
            stroke-linecap="round"
          />
          <path
            d="M3.0806 24.036C3.0806 24.036 5.46272 19.5079 9.22793 15.4493"
            stroke="#E31235"
            stroke-linecap="round"
          />
          <path
            d="M11.3566 19.7992C14.6891 15.2504 18.9916 11.7994 23.5319 14.5275C26.021 16.0231 26.8172 17.9968 26.8368 19.8903"
            stroke="#76BC21"
            stroke-linecap="round"
          />
          <path
            d="M4.81453 32.1385C4.81453 32.1385 6.40206 27.8805 8.98975 23.4414"
            stroke="#76BC21"
            stroke-linecap="round"
          />
          <path
            d="M8.26436 35.5939C8.26436 35.5939 9.64481 29.2086 13.9128 24.4049"
            stroke="#E31235"
            stroke-linecap="round"
          />
          <path
            d="M17.2514 27.0237C16.7264 27.6891 16.2506 28.3812 15.8203 29.0804"
            stroke="#E31235"
            stroke-linecap="round"
          />
          <path
            d="M12.189 38.2583C12.189 38.2583 12.8415 34.8104 14.7329 31.0371"
            stroke="#E31235"
            stroke-linecap="round"
          />
          <path
            d="M25.8374 24.0475C25.5486 24.6791 25.2533 25.2012 25.0366 25.5619C23.8453 27.5446 20.4069 28.8631 17.9993 34.2279"
            stroke="#76BC21"
            stroke-linecap="round"
          />
          <path
            d="M16.4311 39.119C16.6631 38.0568 16.9305 37.0942 17.2246 36.2188"
            stroke="#76BC21"
            stroke-linecap="round"
          />
        </svg>
      </div>

      <div class="retail__internship-image-block-inside">
        <svg
          class="retail__internship-image-block-inside-circle"
          width="232"
          height="232"
          viewBox="0 0 232 232"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
          >
          <circle cx="116" cy="116" r="115.5" stroke="#76BC21" />
        </svg>
        <div class="retail__internship-image-block-inside-icon-block">
          <svg
            class="retail__internship-image-block-inside-icon"
            width="32"
            height="24"
            viewBox="0 0 32 24"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
            >
            <path
              fill-rule="evenodd"
              clip-rule="evenodd"
              d="M16.4168 23.2506H31.4169V2.41728H28.9169V3.25061H30.5835V22.4173H22.2781L28.9168 21.5321V0.691406L16.0002 2.41363L3.08352 0.691406V21.5321L9.72225 22.4173H1.41683V3.25061H3.0835V2.41728H0.583496V23.2506H15.5835V23.3099L16.0002 23.2543L16.4168 23.3099V23.2506ZM16.4168 3.19878V22.3581L28.0835 20.8025V1.64323L16.4168 3.19878ZM15.5835 22.3581V3.19878L3.91685 1.64323V20.8025L15.5835 22.3581Z"
              fill="#76BC21"
            />
          </svg>
        </div>

        <div class="retail__internship-shop-icon-eldorado eldorado hide">
          <svg
            width="34"
            height="35"
            viewBox="0 0 34 35"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
            >
            <path
              d="M28.1082 0.666016H14.0877L12.7408 7.27826H24.6796C25.4143 7.27826 25.5979 7.64561 25.5367 8.50275L24.0061 16.4007H16.5979L17.7 10.8905L0.557129 19.0946H13.2918L12.1898 24.6048L23.4551 19.217L21.9245 27.0538C21.7408 27.8497 21.3122 28.217 20.4551 28.217H8.69999L7.41427 34.8905H21.4347C25.9041 34.8905 28.0469 32.2579 28.7816 28.4619L33.0061 7.03336C33.6796 3.29867 32.6388 0.666016 28.1082 0.666016Z"
              fill="#76BC21"
            />
          </svg>
        </div>

        <div class="retail__internship-shop-icon-mvideo mvideo">
          <svg
            class="retail__internship-shop-icon"
            width="48"
            height="36"
            viewBox="0 0 48 36"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
            >
            <path
              d="M19.0544 35.3337C18.0204 35.3208 17.032 34.9093 16.2982 34.1864C13.7784 31.5669 16.149 22.7171 16.6506 20.8049C16.6628 20.7639 16.6652 20.7206 16.6576 20.6785C16.6501 20.6364 16.6327 20.5966 16.607 20.5623C16.5812 20.528 16.5479 20.5001 16.5093 20.4808C16.4708 20.4616 16.4284 20.4514 16.3853 20.4512C16.332 20.4513 16.2796 20.4649 16.2331 20.4908C16.1867 20.5167 16.1477 20.5541 16.12 20.5993C15.0507 22.746 9.27321 35.3337 4.17539 35.3337H3.87698C-1.07162 34.8608 -0.41678 28.0961 1.12085 23.9796H9.09499C8.44429 25.7438 8.23706 26.8582 8.23706 27.4504C8.26608 27.8616 8.62251 28.0961 8.94578 27.9234C9.7747 27.4792 11.1383 25.715 12.3236 23.6876C14.458 19.9536 17.2432 14.365 22.0343 0.222656H30.7587C28.1807 8.10188 26.0753 15.2203 24.9355 23.3627C24.9201 23.4609 24.9362 23.5613 24.9815 23.6499C25.0268 23.7385 25.0991 23.8106 25.1881 23.8561C25.2771 23.9016 25.3782 23.9182 25.4771 23.9035C25.5762 23.8887 25.668 23.8434 25.7395 23.774C28.2263 21.4505 37.3443 1.92516 37.8873 0.222656H46.6613C46.6613 0.222656 38.0365 23.8933 38.7494 27.8616C38.7613 28.0081 38.8193 28.1471 38.915 28.2591C39.0107 28.3712 39.1393 28.4506 39.2828 28.4864C39.4263 28.5223 39.5775 28.5127 39.7153 28.4588C39.853 28.4051 39.9703 28.3099 40.0507 28.1866C40.5564 27.5697 41.2692 26.6568 41.7708 26.0974L43.014 27.3312C40.5274 30.3866 36.4657 35.8849 32.4372 35.2392C31.7938 35.1065 31.2033 34.7907 30.7379 34.3304C26.5312 30.7156 32.3958 18.6007 33.436 15.7468C33.6722 15.1299 33.8794 14.5418 34.0287 14.1882C34.0438 14.1451 34.0484 14.0992 34.0421 14.0541C34.0357 14.0089 34.0188 13.966 33.9924 13.9286C33.9662 13.8913 33.9313 13.8607 33.8908 13.8394C33.8503 13.818 33.8052 13.8064 33.7593 13.8058C33.7059 13.8053 33.6533 13.8188 33.6069 13.8448C33.5603 13.8707 33.5215 13.9083 33.494 13.9537C33.2868 14.3937 32.7522 15.5411 32.5449 15.9236C29.9588 21.2449 23.9739 35.3337 19.0544 35.3337ZM45.6583 30.6868C46.1214 30.6868 46.5742 30.8231 46.9593 31.0784C47.3444 31.3338 47.6445 31.6966 47.8217 32.1211C47.999 32.5457 48.0453 33.0128 47.955 33.4636C47.8647 33.9144 47.6416 34.3283 47.3141 34.6532C46.9866 34.9782 46.5694 35.1994 46.1152 35.2891C45.6609 35.3788 45.1901 35.3327 44.7622 35.1569C44.3344 34.981 43.9686 34.6832 43.7113 34.3011C43.454 33.919 43.3166 33.4698 43.3166 33.0103C43.3144 32.7046 43.3735 32.4015 43.4904 32.1186C43.6073 31.8357 43.7797 31.5787 43.9976 31.3625C44.2155 31.1463 44.4745 30.9752 44.7596 30.8593C45.0447 30.7432 45.3502 30.6846 45.6583 30.6868Z"
              fill="#E31235"
            />
          </svg>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- //Section internship -->