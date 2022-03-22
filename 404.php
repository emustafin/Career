<?php
get_header();
the_post();
?>
<script>
    var rel_type = '404';
    var vacancyid = '';
    var sourceurl = '';
</script>
<section class="page__404">
    <div class="page__404-wrapper">
        <div class="page__404-title-wrapper">
            <h3 class="page__404-title">
                404 
            </h3>
            <p class="page__404-subtitle">
                Страница не найдена
            </p>
        </div>
    
        <div class="page__404-conten__wrapper">
            <p class="page__404-text">
                Ой... Возможно вы ввели неправильный адрес или страница была удалена
            </p>
            <a href="<?php echo get_home_url()?>" class="page__404-link">
                Вернуться на главную

                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.5515 7.39995L9.57574 4.42421L10.4243 3.57568L14.8485 7.99995L10.4243 12.4242L9.57574 11.5757L12.5515 8.59995H1V7.39995H12.5515Z" fill="black"/>
                </svg>
            </a>
        </div>
    </div>
    <div class="bubble__one Basic-White">
        <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.1539 5.50751C11.5422 5.50751 11.0462 6.00344 11.0462 6.6152V7.99982C11.0462 8.61158 11.5422 9.10751 12.1539 9.10751H13.5385C14.1503 9.10751 14.6462 8.61158 14.6462 7.99982V6.6152C14.6462 6.00344 14.1503 5.50751 13.5385 5.50751H12.1539ZM11.877 6.6152C11.877 6.46226 12.001 6.33828 12.1539 6.33828H13.5385C13.6915 6.33828 13.8155 6.46226 13.8155 6.6152V7.99982C13.8155 8.15276 13.6915 8.27674 13.5385 8.27674H12.1539C12.001 8.27674 11.877 8.15276 11.877 7.99982V6.6152Z" fill="#E31235"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.0462 10.7691C11.0462 10.1573 11.5422 9.66136 12.1539 9.66136H13.5385C14.1503 9.66136 14.6462 10.1573 14.6462 10.7691V12.1537C14.6462 12.7654 14.1503 13.2614 13.5385 13.2614H12.1539C11.5422 13.2614 11.0462 12.7654 11.0462 12.1537V10.7691ZM12.1539 10.4921C12.001 10.4921 11.877 10.6161 11.877 10.7691V12.1537C11.877 12.3066 12.001 12.4306 12.1539 12.4306H13.5385C13.6915 12.4306 13.8155 12.3066 13.8155 12.1537V10.7691C13.8155 10.6161 13.6915 10.4921 13.5385 10.4921H12.1539Z" fill="#E31235"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.1539 13.8152C11.5422 13.8152 11.0462 14.3111 11.0462 14.9229V16.3075C11.0462 16.9193 11.5422 17.4152 12.1539 17.4152H13.5385C14.1503 17.4152 14.6462 16.9193 14.6462 16.3075V14.9229C14.6462 14.3111 14.1503 13.8152 13.5385 13.8152H12.1539ZM11.877 14.9229C11.877 14.77 12.001 14.646 12.1539 14.646H13.5385C13.6915 14.646 13.8155 14.77 13.8155 14.9229V16.3075C13.8155 16.4605 13.6915 16.5844 13.5385 16.5844H12.1539C12.001 16.5844 11.877 16.4605 11.877 16.3075V14.9229Z" fill="#E31235"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.0462 19.0767C11.0462 18.465 11.5422 17.9691 12.1539 17.9691H13.5385C14.1503 17.9691 14.6462 18.465 14.6462 19.0767V20.4614C14.6462 21.0731 14.1503 21.5691 13.5385 21.5691H12.1539C11.5422 21.5691 11.0462 21.0731 11.0462 20.4614V19.0767ZM12.1539 18.7998C12.001 18.7998 11.877 18.9238 11.877 19.0767V20.4614C11.877 20.6143 12.001 20.7383 12.1539 20.7383H13.5385C13.6915 20.7383 13.8155 20.6143 13.8155 20.4614V19.0767C13.8155 18.9238 13.6915 18.7998 13.5385 18.7998H12.1539Z" fill="#E31235"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.3078 5.50751C15.696 5.50751 15.2001 6.00344 15.2001 6.6152V7.99982C15.2001 8.61158 15.696 9.10751 16.3078 9.10751H17.6924C18.3042 9.10751 18.8001 8.61158 18.8001 7.99982V6.6152C18.8001 6.00344 18.3042 5.50751 17.6924 5.50751H16.3078ZM16.0309 6.6152C16.0309 6.46226 16.1548 6.33828 16.3078 6.33828H17.6924C17.8453 6.33828 17.9693 6.46226 17.9693 6.6152V7.99982C17.9693 8.15276 17.8453 8.27674 17.6924 8.27674H16.3078C16.1548 8.27674 16.0309 8.15276 16.0309 7.99982V6.6152Z" fill="#E31235"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M15.2001 10.7691C15.2001 10.1573 15.696 9.66136 16.3078 9.66136H17.6924C18.3042 9.66136 18.8001 10.1573 18.8001 10.7691V12.1537C18.8001 12.7654 18.3042 13.2614 17.6924 13.2614H16.3078C15.696 13.2614 15.2001 12.7654 15.2001 12.1537V10.7691ZM16.3078 10.4921C16.1548 10.4921 16.0309 10.6161 16.0309 10.7691V12.1537C16.0309 12.3066 16.1548 12.4306 16.3078 12.4306H17.6924C17.8453 12.4306 17.9693 12.3066 17.9693 12.1537V10.7691C17.9693 10.6161 17.8453 10.4921 17.6924 10.4921H16.3078Z" fill="#E31235"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.3078 13.8152C15.696 13.8152 15.2001 14.3111 15.2001 14.9229V16.3075C15.2001 16.9193 15.696 17.4152 16.3078 17.4152H17.6924C18.3042 17.4152 18.8001 16.9193 18.8001 16.3075V14.9229C18.8001 14.3111 18.3042 13.8152 17.6924 13.8152H16.3078ZM16.0309 14.9229C16.0309 14.77 16.1548 14.646 16.3078 14.646H17.6924C17.8453 14.646 17.9693 14.77 17.9693 14.9229V16.3075C17.9693 16.4605 17.8453 16.5844 17.6924 16.5844H16.3078C16.1548 16.5844 16.0309 16.4605 16.0309 16.3075V14.9229Z" fill="#E31235"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M15.2001 19.0767C15.2001 18.465 15.696 17.9691 16.3078 17.9691H17.6924C18.3042 17.9691 18.8001 18.465 18.8001 19.0767V20.4614C18.8001 21.0731 18.3042 21.5691 17.6924 21.5691H16.3078C15.696 21.5691 15.2001 21.0731 15.2001 20.4614V19.0767ZM16.3078 18.7998C16.1548 18.7998 16.0309 18.9238 16.0309 19.0767V20.4614C16.0309 20.6143 16.1548 20.7383 16.3078 20.7383H17.6924C17.8453 20.7383 17.9693 20.6143 17.9693 20.4614V19.0767C17.9693 18.9238 17.8453 18.7998 17.6924 18.7998H16.3078Z" fill="#E31235"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.4616 5.50751C19.8499 5.50751 19.3539 6.00344 19.3539 6.6152V7.99982C19.3539 8.61158 19.8499 9.10751 20.4616 9.10751H21.8462C22.458 9.10751 22.9539 8.61158 22.9539 7.99982V6.6152C22.9539 6.00344 22.458 5.50751 21.8462 5.50751H20.4616ZM20.1847 6.6152C20.1847 6.46226 20.3087 6.33828 20.4616 6.33828H21.8462C21.9992 6.33828 22.1232 6.46226 22.1232 6.6152V7.99982C22.1232 8.15276 21.9992 8.27674 21.8462 8.27674H20.4616C20.3087 8.27674 20.1847 8.15276 20.1847 7.99982V6.6152Z" fill="#E31235"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M19.3539 10.7691C19.3539 10.1573 19.8499 9.66136 20.4616 9.66136H21.8462C22.458 9.66136 22.9539 10.1573 22.9539 10.7691V12.1537C22.9539 12.7654 22.458 13.2614 21.8462 13.2614H20.4616C19.8499 13.2614 19.3539 12.7654 19.3539 12.1537V10.7691ZM20.4616 10.4921C20.3087 10.4921 20.1847 10.6161 20.1847 10.7691V12.1537C20.1847 12.3066 20.3087 12.4306 20.4616 12.4306H21.8462C21.9992 12.4306 22.1232 12.3066 22.1232 12.1537V10.7691C22.1232 10.6161 21.9992 10.4921 21.8462 10.4921H20.4616Z" fill="#E31235"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.4616 13.8152C19.8499 13.8152 19.3539 14.3111 19.3539 14.9229V16.3075C19.3539 16.9193 19.8499 17.4152 20.4616 17.4152H21.8462C22.458 17.4152 22.9539 16.9193 22.9539 16.3075V14.9229C22.9539 14.3111 22.458 13.8152 21.8462 13.8152H20.4616ZM20.1847 14.9229C20.1847 14.77 20.3087 14.646 20.4616 14.646H21.8462C21.9992 14.646 22.1232 14.77 22.1232 14.9229V16.3075C22.1232 16.4605 21.9992 16.5844 21.8462 16.5844H20.4616C20.3087 16.5844 20.1847 16.4605 20.1847 16.3075V14.9229Z" fill="#E31235"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M19.3539 19.0767C19.3539 18.465 19.8499 17.9691 20.4616 17.9691H21.8462C22.458 17.9691 22.9539 18.465 22.9539 19.0767V20.4614C22.9539 21.0731 22.458 21.5691 21.8462 21.5691H20.4616C19.8499 21.5691 19.3539 21.0731 19.3539 20.4614V19.0767ZM20.4616 18.7998C20.3087 18.7998 20.1847 18.9238 20.1847 19.0767V20.4614C20.1847 20.6143 20.3087 20.7383 20.4616 20.7383H21.8462C21.9992 20.7383 22.1232 20.6143 22.1232 20.4614V19.0767C22.1232 18.9238 21.9992 18.7998 21.8462 18.7998H20.4616Z" fill="#E31235"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.0001 26.9691C16.1971 26.9691 15.5462 27.62 15.5462 28.4229C15.5462 29.2258 16.1971 29.8767 17.0001 29.8767C17.803 29.8767 18.4539 29.2258 18.4539 28.4229C18.4539 27.62 17.803 26.9691 17.0001 26.9691ZM16.377 28.4229C16.377 28.0788 16.656 27.7998 17.0001 27.7998C17.3442 27.7998 17.6232 28.0788 17.6232 28.4229C17.6232 28.767 17.3442 29.046 17.0001 29.046C16.656 29.046 16.377 28.767 16.377 28.4229Z" fill="#E31235"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.4616 2.73828C10.4675 2.73828 9.66162 3.54417 9.66162 4.53828V29.4614C9.66162 30.4555 10.4675 31.2614 11.4616 31.2614H22.5385C23.5327 31.2614 24.3385 30.4555 24.3385 29.4614V4.53828C24.3385 3.54417 23.5327 2.73828 22.5385 2.73828H11.4616ZM10.4924 4.53828C10.4924 4.00299 10.9263 3.56905 11.4616 3.56905H22.5385C23.0738 3.56905 23.5078 4.00299 23.5078 4.53828V29.4614C23.5078 29.9966 23.0738 30.4306 22.5385 30.4306H11.4616C10.9263 30.4306 10.4924 29.9966 10.4924 29.4614V4.53828Z" fill="#E31235"/>
        </svg>
    </div>
    <div class="bubble__two Basic-White">
        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M19.8642 43.0006C18.7904 42.9872 17.764 42.5599 17.002 41.8091C14.3852 39.0888 16.847 29.8987 17.3679 27.913C17.3805 27.8703 17.3831 27.8254 17.3752 27.7817C17.3674 27.7379 17.3493 27.6967 17.3227 27.661C17.2959 27.6254 17.2612 27.5964 17.2212 27.5764C17.1812 27.5564 17.1372 27.5459 17.0924 27.5456C17.0371 27.5457 16.9826 27.5598 16.9344 27.5868C16.8861 27.6137 16.8457 27.6525 16.8169 27.6994C15.7065 29.9286 9.70678 43.0006 4.41289 43.0006H4.103C-1.03593 42.5095 -0.355905 35.4846 1.24086 31.2098H9.5217C8.84598 33.0418 8.63078 34.1991 8.63078 34.814C8.66091 35.2411 9.03104 35.4846 9.36675 35.3052C10.2276 34.8439 11.6436 33.0119 12.8745 30.9065C15.091 27.0289 17.9834 21.2253 22.9586 6.53906L32.0186 6.53906C29.3414 14.7213 27.1551 22.1136 25.9715 30.5691C25.9555 30.6711 25.9722 30.7754 26.0192 30.8674C26.0663 30.9594 26.1413 31.0342 26.2337 31.0815C26.3262 31.1288 26.4312 31.146 26.5339 31.1307C26.6368 31.1153 26.7321 31.0683 26.8064 30.9962C29.3889 28.5834 38.8575 8.30705 39.4214 6.53906L48.5328 6.53906C48.5328 6.53906 39.5763 31.1201 40.3166 35.2411C40.329 35.3932 40.3892 35.5375 40.4886 35.6538C40.588 35.7702 40.7215 35.8527 40.8705 35.8899C41.0196 35.9271 41.1766 35.9172 41.3197 35.8613C41.4627 35.8054 41.5846 35.7065 41.668 35.5785C42.1932 34.9379 42.9334 33.9899 43.4542 33.409L44.7453 34.6903C42.163 37.8632 37.9451 43.5729 33.7617 42.9023C33.0936 42.7646 32.4803 42.4367 31.997 41.9586C27.6285 38.2049 33.7187 25.6239 34.799 22.6603C35.0442 22.0196 35.2594 21.409 35.4144 21.0417C35.4301 20.997 35.4348 20.9493 35.4283 20.9025C35.4217 20.8556 35.4041 20.811 35.3767 20.7722C35.3495 20.7334 35.3133 20.7017 35.2712 20.6795C35.2291 20.6573 35.1823 20.6453 35.1346 20.6446C35.0792 20.6441 35.0246 20.6581 34.9764 20.6851C34.928 20.7121 34.8876 20.7511 34.8591 20.7983C34.6439 21.2552 34.0888 22.4467 33.8736 22.8439C31.1879 28.3699 24.9729 43.0006 19.8642 43.0006ZM47.4913 38.1749C47.9722 38.1749 48.4424 38.3165 48.8423 38.5816C49.2422 38.8467 49.5539 39.2236 49.7379 39.6644C49.922 40.1053 49.9701 40.5904 49.8763 41.0585C49.7825 41.5266 49.5509 41.9564 49.2108 42.2939C48.8707 42.6314 48.4374 42.8611 47.9657 42.9542C47.494 43.0474 47.0051 42.9995 46.5608 42.817C46.1164 42.6343 45.7366 42.3251 45.4694 41.9282C45.2022 41.5314 45.0596 41.065 45.0596 40.5877C45.0572 40.2703 45.1186 39.9556 45.24 39.6617C45.3614 39.368 45.5404 39.1011 45.7667 38.8766C45.993 38.652 46.262 38.4744 46.558 38.354C46.8541 38.2335 47.1714 38.1726 47.4913 38.1749Z" fill="#E31235"/>
        </svg>
    </div>
    <div class="bubble__three Basic-White">
        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11.7983 19.5273H11.776L11.7764 19.1528C11.7769 18.5206 12.2473 17.9976 12.8569 17.9153L13.1789 17.8718L13.4784 17.988C13.9458 18.1694 14.2759 18.6232 14.2764 19.1528L14.2767 19.5273H14.2544L14.1101 19.7774C13.9463 20.0613 13.6744 20.2744 13.3527 20.3611L13.0407 20.4451L12.7265 20.3679C12.3932 20.2859 12.1109 20.0691 11.9426 19.7774L11.7983 19.5273ZM10.1439 29.3887L10.1581 29.3644L10.1613 29.3662L10.1439 29.3887ZM10.1583 10.6906L10.149 10.6746L10.1604 10.6894L10.1583 10.6906ZM20.6098 33.9529L20.5465 33.9074L21.1799 33.4823C21.3229 33.3864 21.4642 33.2873 21.6039 33.1849L21.8704 33.8439C21.4556 33.8988 21.0352 33.9353 20.6098 33.9529ZM20.6153 6.10206C21.0463 6.11998 21.4722 6.15746 21.8922 6.21365L21.6276 6.87514C21.4786 6.76801 21.3276 6.66446 21.1747 6.56462L20.5435 6.15252L20.6153 6.10206ZM26.1257 13.0372L26.3515 12.8026L26.6604 12.7082C26.7755 12.6731 26.8983 12.6539 27.0264 12.6539C27.3175 12.6539 27.5842 12.7529 27.7966 12.9193L28.0586 13.1247L28.0572 13.1261L28.1813 13.4245C28.2424 13.5715 28.2764 13.7331 28.2764 13.9039C28.2764 14.4124 27.9727 14.851 27.5348 15.0463L27.2405 15.1776L26.9153 15.1491C26.6898 15.1294 26.4819 15.0498 26.3065 14.9261L26.0425 14.7396L26.04 14.7411L25.8969 14.4403C25.8198 14.2784 25.7764 14.0969 25.7764 13.9039C25.7764 13.5672 25.9089 13.2624 26.1257 13.0372ZM27.07 24.0297L27.3937 24.0407L27.67 24.2071C28.0344 24.4265 28.2764 24.8247 28.2764 25.2789C28.2764 25.6097 28.1486 25.9095 27.9387 26.1335L27.6853 26.4038L27.6704 26.3897L27.3922 26.4747C27.2771 26.5098 27.1544 26.5289 27.0264 26.5289C26.9881 26.5289 26.9503 26.5272 26.9131 26.5239L26.5914 26.4952L26.3241 26.3132C25.9973 26.0907 25.7827 25.7194 25.7765 25.2979L25.7722 25.0068L25.753 24.9963L25.9327 24.673C26.1468 24.2878 26.5567 24.0289 27.0264 24.0289C27.0409 24.0289 27.0555 24.0292 27.07 24.0297Z" fill="white" stroke="#E31235"/>
        </svg>
    </div>
    <div class="bubble__four Basic-White">
        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M36.5352 7L21.9756 7L20.5768 13.8666L32.9748 13.8666C33.7377 13.8666 33.9285 14.248 33.8649 15.1381L32.2754 23.3399H24.5823L25.7268 17.6177L7.92456 26.1374H21.1491L20.0046 31.8595L31.7032 26.2645L30.1137 34.4027C29.923 35.2292 29.4779 35.6107 28.5878 35.6107H16.3806L15.0454 42.5408H29.6051C34.2464 42.5408 36.4717 39.8069 37.2346 35.865L41.6216 13.6122C42.3209 9.73391 41.2401 7 36.5352 7Z" fill="#76BC21"/>
        </svg>
    </div>
    <div class="bubble__five Basic-White">
        <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M18.8462 17.0015V27.1553H29.0001V17.0015H18.8462ZM19.7693 26.2323V17.9246H28.077V26.2323H19.7693Z" fill="#E31235"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.0001 9.15535C17.0001 7.88085 18.0333 6.84766 19.3078 6.84766C20.5823 6.84766 21.6155 7.88085 21.6155 9.15535C21.6155 10.2718 20.8226 11.2031 19.7693 11.4169V14.2323H24.3847V10.54H26.277C26.4908 9.48662 27.4221 8.69381 28.5385 8.69381C29.813 8.69381 30.8462 9.727 30.8462 11.0015C30.8462 12.276 29.813 13.3092 28.5385 13.3092C27.4221 13.3092 26.4908 12.5164 26.277 11.463H25.3078V14.2323H31.7693V17.0015H34.5847C34.7985 15.9482 35.7298 15.1553 36.8462 15.1553C38.1207 15.1553 39.1539 16.1885 39.1539 17.463C39.1539 18.7375 38.1207 19.7707 36.8462 19.7707C35.7298 19.7707 34.7985 18.9779 34.5847 17.9246H31.7693V22.54H35.4616V24.4323C36.515 24.6461 37.3078 25.5774 37.3078 26.6938C37.3078 27.9683 36.2746 29.0015 35.0001 29.0015C33.7256 29.0015 32.6924 27.9683 32.6924 26.6938C32.6924 25.5774 33.4852 24.6461 34.5385 24.4323V23.463H31.7693V29.9246H29.0001V32.74C30.0534 32.9538 30.8462 33.8851 30.8462 35.0015C30.8462 36.276 29.813 37.3092 28.5385 37.3092C27.264 37.3092 26.2308 36.276 26.2308 35.0015C26.2308 33.8851 27.0237 32.9538 28.077 32.74V29.9246H23.4616V33.6169H21.5693C21.3555 34.6702 20.4242 35.463 19.3078 35.463C18.0333 35.463 17.0001 34.4299 17.0001 33.1553C17.0001 31.8808 18.0333 30.8477 19.3078 30.8477C20.4242 30.8477 21.3555 31.6405 21.5693 32.6938H22.5385V29.9246H16.077V27.1553H13.2616C13.0478 28.2087 12.1165 29.0015 11.0001 29.0015C9.72557 29.0015 8.69238 27.9683 8.69238 26.6938C8.69238 25.4193 9.72557 24.3861 11.0001 24.3861C12.1165 24.3861 13.0478 25.1789 13.2616 26.2323H16.077V21.6169H12.3847V19.7246C11.3313 19.5108 10.5385 18.5795 10.5385 17.463C10.5385 16.1885 11.5717 15.1553 12.8462 15.1553C14.1207 15.1553 15.1539 16.1885 15.1539 17.463C15.1539 18.5795 14.3611 19.5108 13.3078 19.7246V20.6938H16.077V14.2323H18.8462V11.4169C17.7929 11.2031 17.0001 10.2718 17.0001 9.15535ZM19.3078 7.77073C18.5431 7.77073 17.9232 8.39065 17.9232 9.15535C17.9232 9.92005 18.5431 10.54 19.3078 10.54C20.0725 10.54 20.6924 9.92005 20.6924 9.15535C20.6924 8.39065 20.0725 7.77073 19.3078 7.77073ZM17.0001 29.0015V15.1553L30.8462 15.1553V29.0015H17.0001ZM27.1539 11.0015C27.1539 10.2368 27.7738 9.61689 28.5385 9.61689C29.3032 9.61689 29.9232 10.2368 29.9232 11.0015C29.9232 11.7662 29.3032 12.3861 28.5385 12.3861C27.7738 12.3861 27.1539 11.7662 27.1539 11.0015ZM38.2308 17.463C38.2308 16.6983 37.6109 16.0784 36.8462 16.0784C36.0815 16.0784 35.4616 16.6983 35.4616 17.463C35.4616 18.2277 36.0815 18.8477 36.8462 18.8477C37.6109 18.8477 38.2308 18.2277 38.2308 17.463ZM35.0001 25.3092C35.7648 25.3092 36.3847 25.9291 36.3847 26.6938C36.3847 27.4585 35.7648 28.0784 35.0001 28.0784C34.2354 28.0784 33.6155 27.4585 33.6155 26.6938C33.6155 25.9291 34.2354 25.3092 35.0001 25.3092ZM9.61546 26.6938C9.61546 27.4585 10.2354 28.0784 11.0001 28.0784C11.7648 28.0784 12.3847 27.4585 12.3847 26.6938C12.3847 25.9291 11.7648 25.3092 11.0001 25.3092C10.2354 25.3092 9.61546 25.9291 9.61546 26.6938ZM12.8462 18.8477C12.0815 18.8477 11.4616 18.2277 11.4616 17.463C11.4616 16.6983 12.0815 16.0784 12.8462 16.0784C13.6109 16.0784 14.2308 16.6983 14.2308 17.463C14.2308 18.2277 13.6109 18.8477 12.8462 18.8477ZM28.5385 36.3861C29.3032 36.3861 29.9232 35.7662 29.9232 35.0015C29.9232 34.2368 29.3032 33.6169 28.5385 33.6169C27.7738 33.6169 27.1539 34.2368 27.1539 35.0015C27.1539 35.7662 27.7738 36.3861 28.5385 36.3861ZM20.6924 33.1553C20.6924 33.9201 20.0725 34.54 19.3078 34.54C18.5431 34.54 17.9232 33.9201 17.9232 33.1553C17.9232 32.3906 18.5431 31.7707 19.3078 31.7707C20.0725 31.7707 20.6924 32.3906 20.6924 33.1553Z" fill="#E31235"/>
        </svg>
    </div>
    <div class="bubble__six Basic-White">
        <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M21.9983 31.7354L14.5717 24.3088C17.1737 16.798 22.8581 12.3873 28.1035 10.0031C30.757 8.79693 33.2865 8.11536 35.2241 7.81575C36.194 7.66576 37.005 7.61315 37.6024 7.63475C37.902 7.64558 38.1356 7.67468 38.3033 7.7142C38.4462 7.7479 38.5044 7.78078 38.5178 7.78838L38.5184 7.78872L38.5187 7.78932C38.5263 7.80275 38.5592 7.86087 38.5929 8.00382C38.6324 8.17148 38.6615 8.40506 38.6724 8.70467C38.694 9.30211 38.6413 10.1131 38.4914 11.083C38.1917 13.0206 37.5102 15.5501 36.304 18.2036C33.9198 23.449 29.5091 29.1334 21.9983 31.7354ZM39.1718 7.13526C38.9968 6.9602 38.7442 6.86976 38.5151 6.81575C38.2691 6.75776 37.971 6.72439 37.6358 6.71227C36.9635 6.68797 36.0916 6.74755 35.083 6.90351C33.0635 7.21579 30.4529 7.92121 27.7215 9.16273C24.2099 10.7589 20.4794 13.251 17.5552 16.9506C17.4093 16.8635 17.2586 16.7818 17.1032 16.7061C14.1249 15.2534 10.5329 16.4903 9.08022 19.4686C8.96848 19.6977 9.06362 19.974 9.29273 20.0857L14.2711 22.5138C14.0306 23.0855 13.8079 23.6761 13.6045 24.2862C13.5492 24.4521 13.5924 24.6349 13.716 24.7585L21.5486 32.5911C21.6722 32.7147 21.855 32.7579 22.0209 32.7026C22.4862 32.5475 22.9402 32.3811 23.3831 32.2042L25.8696 37.5366C25.9773 37.7676 26.2519 37.8676 26.4829 37.7598C29.4862 36.3594 30.7855 32.7895 29.3851 29.7863C29.2853 29.5723 29.1745 29.3669 29.0535 29.1703L28.2674 29.6543C28.3698 29.8206 28.4638 29.9947 28.5485 30.1764C29.6677 32.5766 28.749 35.4045 26.5024 36.7094L24.2343 31.8454C30.8855 28.8919 34.9004 23.5224 37.1444 18.5856C38.3859 15.8542 39.0913 13.2436 39.4036 11.2241C39.5596 10.2155 39.6191 9.34361 39.5948 8.67133C39.5827 8.33607 39.5493 8.03804 39.4913 7.79202C39.4373 7.56292 39.3469 7.31032 39.1718 7.13526ZM14.6453 21.6694C15.3221 20.2175 16.115 18.8946 16.9928 17.6911C16.8971 17.6366 16.799 17.5847 16.6986 17.5357C14.3183 16.3748 11.4747 17.244 10.1308 19.4675L14.6453 21.6694ZM31.7462 14.8611C30.4845 13.5995 28.4389 13.5995 27.1772 14.8611C25.9155 16.1228 25.9155 18.1685 27.1772 19.4301C28.4389 20.6918 30.4845 20.6918 31.7462 19.4301C33.0078 18.1685 33.0078 16.1228 31.7462 14.8611ZM26.5244 14.2084C28.1466 12.5863 30.7767 12.5863 32.3989 14.2084C34.021 15.8306 34.021 18.4607 32.3989 20.0829C30.7767 21.705 28.1466 21.705 26.5244 20.0829C24.9023 18.4607 24.9023 15.8306 26.5244 14.2084ZM14.3661 30.9822L8.82764 36.5206L9.48035 37.1733L15.0188 31.6349L14.3661 30.9822ZM12.5199 36.5206L18.0584 30.9822L18.7111 31.6349L13.1727 37.1733L12.5199 36.5206ZM14.3661 27.2899L8.82764 32.8283L9.48035 33.481L15.0188 27.9426L14.3661 27.2899Z" fill="#76BC21"/>
        </svg>
    </div>
    <div class="bubble__seven Basic-White">
        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.4038 30.9041H34.9423V10.7118H32.5192V11.5195H34.1346V30.0964H26.0847L32.5192 29.2385V9.03906L19.9999 10.7083L7.48071 9.03906L7.48071 29.2385L13.9152 30.0964H5.86531L5.86531 11.5195H7.48069V10.7118H5.05762L5.05762 30.9041H19.5961V30.9616L19.9999 30.9077L20.4038 30.9616V30.9041ZM20.4038 11.4693V30.0391L31.7115 28.5314V9.96159L20.4038 11.4693ZM19.5961 30.0391V11.4693L8.28841 9.96159V28.5314L19.5961 30.0391Z" fill="#E31235"/>
        </svg>
    </div>
    <div class="bubble__eight Basic-White">
        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M19.8081 20.2248C18.3169 20.2248 17.1081 21.4336 17.1081 22.9248V27.0786C17.1081 28.5698 18.3169 29.7786 19.8081 29.7786H32.2696C32.5216 29.7786 32.7488 29.6268 32.8453 29.394C32.9417 29.1611 32.8884 28.8931 32.7102 28.7149L31.2416 27.2463C30.969 26.9737 30.8158 26.6039 30.8158 26.2183V22.9248C30.8158 21.4336 29.607 20.2248 28.1158 20.2248H19.8081ZM18.3543 22.9248C18.3543 22.1218 19.0052 21.4709 19.8081 21.4709H28.1158C28.9187 21.4709 29.5696 22.1218 29.5696 22.9248V26.2183C29.5696 26.9344 29.8541 27.6212 30.3604 28.1275L30.7654 28.5325H19.8081C19.0052 28.5325 18.3543 27.8815 18.3543 27.0786V22.9248Z" fill="#76BC21"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M18.1466 6.30938C18.1466 4.81821 19.3554 3.60938 20.8466 3.60938H29.1543C30.6454 3.60938 31.8542 4.81821 31.8542 6.30938V11.4741C36.3153 13.7388 39.5057 18.1453 40.0719 23.3401H40.5769C41.4946 23.3401 42.2385 24.084 42.2385 25.0017C42.2385 25.9193 41.4946 26.6632 40.5769 26.6632H40.0719C39.5057 31.858 36.3153 36.2646 31.8542 38.5293V43.6941C31.8542 45.1852 30.6454 46.3941 29.1543 46.3941H20.8466C19.3554 46.3941 18.1466 45.1852 18.1466 43.6941V38.5293C13.2169 36.0267 9.83887 30.9087 9.83887 25.0017C9.83887 19.0947 13.2169 13.9767 18.1466 11.4741V6.30938ZM40.1619 25.0017C40.1619 24.8628 40.1601 24.7243 40.1564 24.5863H40.5769C40.8063 24.5863 40.9923 24.7723 40.9923 25.0017C40.9923 25.2311 40.8063 25.4171 40.5769 25.4171H40.1564C40.1601 25.2791 40.1619 25.1406 40.1619 25.0017ZM19.3927 39.0924V43.6941C19.3927 44.497 20.0436 45.1479 20.8466 45.1479H29.1543C29.9572 45.1479 30.6081 44.497 30.6081 43.6941V39.0924C28.8735 39.7833 26.9813 40.1632 25.0004 40.1632C23.0195 40.1632 21.1273 39.7833 19.3927 39.0924ZM30.6081 6.30938V10.911C28.8735 10.22 26.9813 9.84014 25.0004 9.84014C23.0195 9.84014 21.1273 10.22 19.3927 10.911V6.30938C19.3927 5.50644 20.0436 4.85553 20.8466 4.85553H29.1543C29.9572 4.85553 30.6081 5.50644 30.6081 6.30938ZM11.085 25.0017C11.085 17.3164 17.3152 11.0863 25.0004 11.0863C32.6857 11.0863 38.9158 17.3164 38.9158 25.0017C38.9158 32.6869 32.6857 38.9171 25.0004 38.9171C17.3152 38.9171 11.085 32.6869 11.085 25.0017Z" fill="#76BC21"/>
        </svg>
    </div>
    <div class="bubble__nine Basic-White">
        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.4038 30.9041H34.9423V10.7118H32.5192V11.5195H34.1346V30.0964H26.0847L32.5192 29.2385V9.03906L19.9999 10.7083L7.48071 9.03906L7.48071 29.2385L13.9152 30.0964H5.86531L5.86531 11.5195H7.48069V10.7118H5.05762L5.05762 30.9041H19.5961V30.9616L19.9999 30.9077L20.4038 30.9616V30.9041ZM20.4038 11.4693V30.0391L31.7115 28.5314V9.96159L20.4038 11.4693ZM19.5961 30.0391V11.4693L8.28841 9.96159V28.5314L19.5961 30.0391Z" fill="#76BC21"/>
        </svg>
    </div>
    <div class="bubble__ten Basic-White">
        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M19.8081 20.2248C18.3169 20.2248 17.1081 21.4336 17.1081 22.9248V27.0786C17.1081 28.5698 18.3169 29.7786 19.8081 29.7786H32.2696C32.5216 29.7786 32.7488 29.6268 32.8453 29.394C32.9417 29.1611 32.8884 28.8931 32.7102 28.7149L31.2416 27.2463C30.969 26.9737 30.8158 26.6039 30.8158 26.2183V22.9248C30.8158 21.4336 29.607 20.2248 28.1158 20.2248H19.8081ZM18.3543 22.9248C18.3543 22.1218 19.0052 21.4709 19.8081 21.4709H28.1158C28.9187 21.4709 29.5696 22.1218 29.5696 22.9248V26.2183C29.5696 26.9344 29.8541 27.6212 30.3604 28.1275L30.7654 28.5325H19.8081C19.0052 28.5325 18.3543 27.8815 18.3543 27.0786V22.9248Z" fill="#E31235"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M18.1466 6.30938C18.1466 4.81821 19.3554 3.60938 20.8466 3.60938H29.1543C30.6454 3.60938 31.8542 4.81821 31.8542 6.30938V11.4741C36.3153 13.7388 39.5057 18.1453 40.0719 23.3401H40.5769C41.4946 23.3401 42.2385 24.084 42.2385 25.0017C42.2385 25.9193 41.4946 26.6632 40.5769 26.6632H40.0719C39.5057 31.858 36.3153 36.2646 31.8542 38.5293V43.6941C31.8542 45.1852 30.6454 46.3941 29.1543 46.3941H20.8466C19.3554 46.3941 18.1466 45.1852 18.1466 43.6941V38.5293C13.2169 36.0267 9.83887 30.9087 9.83887 25.0017C9.83887 19.0947 13.2169 13.9767 18.1466 11.4741V6.30938ZM40.1619 25.0017C40.1619 24.8628 40.1601 24.7243 40.1564 24.5863H40.5769C40.8063 24.5863 40.9923 24.7723 40.9923 25.0017C40.9923 25.2311 40.8063 25.4171 40.5769 25.4171H40.1564C40.1601 25.2791 40.1619 25.1406 40.1619 25.0017ZM19.3927 39.0924V43.6941C19.3927 44.497 20.0436 45.1479 20.8466 45.1479H29.1543C29.9572 45.1479 30.6081 44.497 30.6081 43.6941V39.0924C28.8735 39.7833 26.9813 40.1632 25.0004 40.1632C23.0195 40.1632 21.1273 39.7833 19.3927 39.0924ZM30.6081 6.30938V10.911C28.8735 10.22 26.9813 9.84014 25.0004 9.84014C23.0195 9.84014 21.1273 10.22 19.3927 10.911V6.30938C19.3927 5.50644 20.0436 4.85553 20.8466 4.85553H29.1543C29.9572 4.85553 30.6081 5.50644 30.6081 6.30938ZM11.085 25.0017C11.085 17.3164 17.3152 11.0863 25.0004 11.0863C32.6857 11.0863 38.9158 17.3164 38.9158 25.0017C38.9158 32.6869 32.6857 38.9171 25.0004 38.9171C17.3152 38.9171 11.085 32.6869 11.085 25.0017Z" fill="#E31235"/>
        </svg>
    </div>
    <div class="bubble__eleven Basic-White">
        <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M10.1554 16.7735L10.0222 16.5427L10.0225 16.2739C10.0229 15.7682 10.3992 15.3497 10.8868 15.2839L11.1445 15.2491L11.3841 15.3421C11.7582 15.4872 12.0221 15.8503 12.0225 16.2739L12.0227 16.5427L11.8895 16.7735C11.7584 17.0008 11.5408 17.1712 11.2836 17.2405L11.0339 17.3078L10.7825 17.246C10.5161 17.1805 10.2902 17.007 10.1554 16.7735ZM22.4467 12.5926L22.2315 12.4406L22.1188 12.2039C22.0572 12.0745 22.0225 11.9294 22.0225 11.7748C22.0225 11.5053 22.1284 11.2617 22.3019 11.0814L22.4826 10.8937L22.7297 10.8182C22.8217 10.7901 22.9198 10.7748 23.0225 10.7748C23.2555 10.7748 23.4687 10.8539 23.6386 10.9871L23.8459 11.1496L23.9464 11.3913C23.9953 11.5087 24.0225 11.638 24.0225 11.7748C24.0225 12.1814 23.7797 12.5324 23.4292 12.6888L23.1938 12.7937L22.9335 12.7709C22.7532 12.7551 22.5869 12.6916 22.4467 12.5926ZM18.5572 28.8002C18.2595 28.8386 17.9584 28.866 17.6542 28.8819L18.051 28.6156C18.1644 28.5396 18.2765 28.4611 18.3875 28.3804L18.5572 28.8002ZM23.0574 20.5254L23.3164 20.5342L23.5373 20.6672C23.8291 20.843 24.0225 21.1616 24.0225 21.5248C24.0225 21.7895 23.9203 22.0292 23.7523 22.2084L23.5692 22.4039L23.3152 22.4814C23.2232 22.5095 23.1251 22.5248 23.0225 22.5248C22.9918 22.5248 22.9615 22.5234 22.9317 22.5208L22.6744 22.4978L22.4607 22.3523C22.199 22.1741 22.0276 21.877 22.0226 21.54L22.0186 21.272L22.1475 21.0401C22.3189 20.7317 22.6469 20.5248 23.0225 20.5248C23.0341 20.5248 23.0458 20.525 23.0574 20.5254ZM18.5766 5.24922L18.4077 5.67142C18.2885 5.58632 18.1679 5.50387 18.0458 5.42416L17.6483 5.16465C17.9611 5.18089 18.2707 5.20923 18.5766 5.24922Z" fill="white" stroke="#E31235"/>
        </svg>
    </div>
    <div class="bubble__twelve Basic-White">
        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M15.9619 16.2864C14.8021 16.2864 13.8619 17.2266 13.8619 18.3864V21.6171C13.8619 22.7769 14.8021 23.7171 15.9619 23.7171H25.6542C25.8502 23.7171 26.0269 23.5991 26.1019 23.418C26.1769 23.2369 26.1354 23.0284 25.9968 22.8898L24.8546 21.7476C24.6425 21.5355 24.5234 21.2479 24.5234 20.948V18.3864C24.5234 17.2266 23.5832 16.2864 22.4234 16.2864H15.9619ZM14.8311 18.3864C14.8311 17.7619 15.3373 17.2556 15.9619 17.2556H22.4234C23.0479 17.2556 23.5542 17.7619 23.5542 18.3864V20.948C23.5542 21.505 23.7754 22.0391 24.1692 22.4329L24.4842 22.7479H15.9619C15.3373 22.7479 14.8311 22.2416 14.8311 21.6171V18.3864Z" fill="#76BC21"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.6695 5.46328C14.6695 4.30348 15.6097 3.36328 16.7695 3.36328H23.2311C24.3909 3.36328 25.3311 4.30348 25.3311 5.46328V9.48028C28.8008 11.2417 31.2822 14.669 31.7226 18.7094H32.1154C32.8291 18.7094 33.4077 19.288 33.4077 20.0017C33.4077 20.7155 32.8291 21.2941 32.1154 21.2941H31.7226C31.2822 25.3345 28.8008 28.7618 25.3311 30.5232V34.5403C25.3311 35.7001 24.3909 36.6403 23.2311 36.6403H16.7695C15.6097 36.6403 14.6695 35.7001 14.6695 34.5403V30.5232C10.8354 28.5767 8.20801 24.5961 8.20801 20.0017C8.20801 15.4074 10.8354 11.4268 14.6695 9.48028V5.46328ZM31.7926 20.0017C31.7926 19.8937 31.7912 19.786 31.7883 19.6787H32.1154C32.2938 19.6787 32.4385 19.8233 32.4385 20.0017C32.4385 20.1802 32.2938 20.3248 32.1154 20.3248H31.7883C31.7912 20.2175 31.7926 20.1098 31.7926 20.0017ZM15.6388 30.9612V34.5403C15.6388 35.1648 16.145 35.671 16.7695 35.671H23.2311C23.8556 35.671 24.3619 35.1648 24.3619 34.5403V30.9612C23.0127 31.4986 21.541 31.7941 20.0003 31.7941C18.4596 31.7941 16.9879 31.4986 15.6388 30.9612ZM24.3619 5.46328V9.04229C23.0127 8.50491 21.541 8.20944 20.0003 8.20944C18.4596 8.20944 16.9879 8.50491 15.6388 9.04229V5.46328C15.6388 4.83878 16.145 4.33251 16.7695 4.33251H23.2311C23.8556 4.33251 24.3619 4.83877 24.3619 5.46328ZM9.17724 20.0017C9.17724 14.0243 14.0229 9.17867 20.0003 9.17867C25.9777 9.17867 30.8234 14.0243 30.8234 20.0017C30.8234 25.9792 25.9777 30.8248 20.0003 30.8248C14.0229 30.8248 9.17724 25.9792 9.17724 20.0017Z" fill="#76BC21"/>
        </svg>
    </div>
</section>
<?php
get_footer();