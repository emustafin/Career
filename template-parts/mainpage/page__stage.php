<!--  Section-Stage  -->
<section class="main-page__stage">
    <div class="main-page__left-bar">
    <div class="main-page__title-block">
        <h2 class="main-page__title-slogan"><?php echo get_sub_field('slogan_black'); ?></h2>
        <h2 class="main-page__title-slogan-red"><?php echo get_sub_field('slogan_red'); ?></h2>

        <div class="main-page__stage-search-block">
        <div class="main-page__stage-input-block">
            <form action="/listing-map/" method="get">
                <input name="search" type="text" class="main-page__stage-input" placeholder="найти вакансию"/>
                <button class="main-page__stage-input-search-button">
                    <svg width="19" height="20" viewBox="0 0 19 20" fill="none"xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10.0001 0C5.02951 0 1.00008 4.02944 1.00008 9C1.00008 11.2255 1.80786 13.2624 3.14623 14.8334L0.292969 17.6866L1.70718 19.1008L4.60424 16.2038C6.10771 17.3317 7.97585 18 10.0001 18C14.9706 18 19.0001 13.9706 19.0001 9C19.0001 4.02944 14.9706 0 10.0001 0ZM3.00008 9C3.00008 5.13401 6.13408 2 10.0001 2C13.8661 2 17.0001 5.13401 17.0001 9C17.0001 12.866 13.8661 16 10.0001 16C6.13408 16 3.00008 12.866 3.00008 9Z"fill="black" />
                    </svg>
                </button>
            </form>
        </div>

        <!-- <div class="main-page__stage-links-block">
            <a href="#" class="main-page__stage-link-development">
                разработка

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
            </a>
            <a href="#" class="main-page__stage-link-sales">
                продажи

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
            </a>
        </div> -->
        </div>
    </div>
    <p class="main-page__stage-text">с командой</p>
    <div class="main-page__stage-logo">
        <svg
        width="192"
        height="32"
        viewBox="0 0 192 32"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
        >
        <g clip-path="url(#clip0_2406_85290)">
            <path d="M0 28.3555H95.5556V31.9999H0V28.3555Z" fill="#E31235" />
            <path
            d="M95.5557 28.3555H191.111V31.9999H95.5557V28.3555Z"
            fill="#76BC21"
            />
            <path
            d="M62.9333 11.2H67.8222C67.6889 10.5778 67.3778 10.1333 66.9333 9.77778C66.4889 9.42222 65.9556 9.24444 65.3778 9.24444C64.8 9.24444 64.2667 9.42222 63.8222 9.77778C63.4222 10.1778 63.1111 10.6222 62.9333 11.2ZM69.1556 15.2444L70.0444 17.0222C69.4222 17.6 68 18.2222 65.8667 18.2222C64.5333 18.2222 62.8445 17.7333 61.8222 16.8C60.8 15.8667 60.2667 14.4889 60.2667 12.7111C60.2667 11.0222 60.7111 9.64444 61.6444 8.62222C62.5778 7.6 63.7778 7.11111 65.3333 7.11111C67.1111 7.11111 68.4445 7.73333 69.3333 9.02222C70 10 70.3111 11.2444 70.3111 12.8444V13.2444H62.8C62.8 14.1333 63.1111 14.8 63.6889 15.2889C64.2667 15.7778 65.3778 16.0444 66.0889 16.0444C67.3333 16 68.3111 15.7333 69.1556 15.2444ZM15.1556 0L9.28889 12.8889L3.51111 0L0 17.8667H2.62222L4.35556 7.82222L9.15556 18.6222L14 7.82222L15.6889 17.8667H18.2667L15.1556 0ZM20.5333 17.5111C20.2222 17.2 20.0889 16.8444 20.0889 16.4C20.0889 15.9556 20.2222 15.6 20.5333 15.2889C20.8444 14.9778 21.2 14.8444 21.6444 14.8444C22.0889 14.8444 22.4444 14.9778 22.7556 15.2889C23.0667 15.6 23.2 15.9556 23.2 16.4C23.2 16.8444 23.0667 17.2 22.7556 17.5111C22.4444 17.8222 22.0889 17.9556 21.6444 17.9556C21.2 17.9556 20.8444 17.8222 20.5333 17.5111ZM27.9111 10.4889V15.5111H29.4222C30.6222 15.5111 31.5111 15.2444 32 14.7556C32.4889 14.2667 32.7111 13.6444 32.7111 12.9778C32.7111 12.2667 32.4889 11.6889 32 11.2C31.5111 10.7111 30.6667 10.4889 29.4667 10.4889H27.9111ZM27.9111 3.6V8.35556H28.6667C30.4889 8.35556 31.3778 7.55556 31.3778 5.91111C31.3778 4.35556 30.4889 3.6 28.7556 3.6H27.9111ZM25.3778 1.24444H27.9111C28.5778 1.24444 29.0667 1.24444 29.3333 1.28889C29.6444 1.28889 30.0444 1.37778 30.5778 1.51111C31.1111 1.6 31.6 1.82222 32 2.13333C33.2444 3.02222 33.8667 4.26667 33.8667 5.86667C33.8667 7.15556 33.3778 8.13333 32.4 8.88889C33.3778 9.2 34.0889 9.73333 34.5778 10.4889C35.0667 11.2444 35.2889 12.0444 35.2889 12.9333C35.2889 14.5333 34.7111 15.7778 33.6 16.7111C33.1556 17.0667 32.6222 17.3333 32 17.5111C31.3778 17.6889 30.8889 17.7778 30.5778 17.8222C30.2222 17.8667 29.7778 17.8667 29.1556 17.8667H25.3333V1.24444H25.3778ZM37.0667 7.37778H39.5111V13.3333L46.7111 6.4V17.8667H44.3111V11.7778L37.0667 18.6667V7.37778ZM55.6889 15.6889V9.55556H52.5333V12.4444C52.5333 13.9556 52.1333 15.0222 51.2889 15.6889H55.6889ZM50.2222 7.37778H58.1333V15.6889H59.6889V20.8889H57.4667V17.9111H50.0889V20.8889H47.8667V15.6889C48.7556 15.6 49.3778 15.1556 49.8222 14.3111C50.0889 13.7333 50.2667 12.8 50.2667 11.5111V7.37778H50.2222ZM108.356 7.37778V17.8667H105.911V9.55556H102.756V13.7778C102.756 15.0667 102.444 16.0889 101.778 16.8C101.111 17.5556 100.178 17.9111 98.9333 17.9111C98.8 17.9111 98.5778 17.9111 98.3111 17.8667V15.6889C98.4889 15.7333 98.6667 15.7333 98.7556 15.7333C99.2889 15.7333 99.7333 15.5556 100.044 15.2C100.267 14.9333 100.4 14.4889 100.4 13.8222V7.37778H108.356ZM113.111 15.7778H114.222C114.8 15.7778 115.244 15.6889 115.467 15.5556C115.822 15.3333 116 14.9778 116 14.4889C116 14.0444 115.822 13.6889 115.467 13.4222C115.2 13.2444 114.8 13.2 114.222 13.2H113.111V15.7778ZM110.667 7.37778H113.111V11.1111H114.533C114.978 11.1111 115.333 11.1111 115.6 11.1556C115.867 11.2 116.222 11.2889 116.667 11.4222C117.111 11.6 117.467 11.8222 117.733 12.1778C118.267 12.7556 118.533 13.5111 118.533 14.4444C118.533 15.5556 118.222 16.4 117.6 16.9778C117.333 17.2444 116.978 17.4667 116.578 17.6C116.178 17.7333 115.867 17.8222 115.6 17.8222C115.333 17.8222 114.978 17.8667 114.489 17.8667H110.667V7.37778ZM126.978 15.6889V9.55556H123.822V12.4444C123.822 13.9556 123.422 15.0222 122.578 15.6889H126.978ZM121.467 7.37778H129.378V15.6889H130.933V20.8889H128.711V17.9111H121.333V20.8889H119.111V15.6889C120 15.6 120.622 15.1556 121.067 14.3111C121.333 13.7333 121.511 12.8 121.511 11.5111V7.37778H121.467ZM149.378 9.28889C148.578 9.28889 147.867 9.6 147.289 10.1778C146.711 10.8 146.4 11.6 146.4 12.6667C146.4 13.6 146.667 14.4 147.2 15.0667C147.733 15.6889 148.444 16.0444 149.378 16.0444C150.267 16.0444 150.978 15.7333 151.511 15.0667C152.044 14.4 152.311 13.6 152.311 12.6222C152.311 11.5556 152 10.7556 151.422 10.1778C150.889 9.55556 150.178 9.28889 149.378 9.28889ZM146.578 7.37778V8.53333C147.378 7.6 148.444 7.11111 149.778 7.11111C151.2 7.11111 152.4 7.6 153.378 8.62222C154.356 9.64444 154.844 10.9778 154.844 12.6222C154.844 14.2667 154.311 15.6 153.289 16.6667C152.267 17.7333 151.067 18.2222 149.778 18.2222C149.511 18.2222 149.2 18.1778 148.933 18.1333C148.667 18.0889 148.267 17.9111 147.778 17.6889C147.289 17.4222 146.889 17.1111 146.578 16.7111V22.9333H144.133V7.37778H146.578ZM161.511 9.28889C160.622 9.28889 159.911 9.6 159.378 10.2667C158.844 10.9333 158.578 11.7333 158.578 12.7111C158.578 13.6444 158.844 14.4444 159.378 15.0667C159.911 15.7333 160.622 16.0444 161.511 16.0444C162.4 16.0444 163.156 15.7333 163.644 15.1111C164.178 14.4889 164.444 13.6889 164.444 12.6667C164.444 11.6 164.178 10.7556 163.6 10.1778C163.067 9.55556 162.356 9.28889 161.511 9.28889ZM164.311 7.37778H166.756V17.8667H164.311V16.7556C163.511 17.6889 162.444 18.1778 161.111 18.1778C159.556 18.1778 158.356 17.6444 157.422 16.5333C156.489 15.4222 156.044 14.1333 156.044 12.6222C156.044 11.1111 156.489 9.82222 157.422 8.71111C158.356 7.6 159.6 7.06667 161.156 7.06667C162.533 7.06667 163.556 7.55556 164.311 8.57778V7.37778ZM175.689 15.6889V9.55556H172.533V12.4444C172.533 13.9556 172.133 15.0222 171.289 15.6889H175.689ZM170.222 7.37778H178.133V15.6889H179.689V20.8889H177.467V17.9111H170.089V20.8889H167.867V15.6889C168.756 15.6 169.378 15.1556 169.822 14.3111C170.089 13.7333 170.267 12.8 170.267 11.5111V7.37778H170.222ZM85.0667 5.11111L83.6444 3.55556C85.1556 1.73333 87.9111 0.888889 89.9111 0.888889C92.2667 0.888889 94.2222 1.6 95.7333 3.06667C97.3778 4.66667 98.2222 6.8 98.2222 9.51111C98.2222 12.0889 97.3778 14.2222 95.7333 15.8667C94.1778 17.4222 92.2222 18.1778 89.8222 18.1778C88.0445 18.1778 85.0667 17.2 83.6444 15.4667L85.0667 13.9111C86.4445 15.1556 88 15.7778 89.6444 15.7778C91.5556 15.7778 93.0667 15.2 94.1333 14C95.0222 13.0222 95.5111 11.8222 95.6 10.4444H87.3333V8.08889H95.5556C95.3778 6.8 94.8445 5.68889 94.0445 4.8C93.0222 3.73333 91.6444 3.2 89.8667 3.2C88.0444 3.28889 86.4889 3.91111 85.0667 5.11111ZM77.1556 9.46667C75.3778 9.46667 73.9556 10.8889 73.9556 12.6667C73.9556 14.4 75.3778 15.8667 77.1556 15.8667C78.9333 15.8667 80.3556 14.4444 80.3556 12.6667C80.3556 10.8889 78.9333 9.46667 77.1556 9.46667ZM77.1556 18.2222C74.0889 18.2222 71.6 15.7333 71.6 12.6667C71.6 9.6 74.0889 7.11111 77.1556 7.11111C80.2222 7.11111 82.7111 9.6 82.7111 12.6667C82.7111 15.7333 80.2222 18.2222 77.1556 18.2222ZM185.556 9.46667C183.778 9.46667 182.356 10.8889 182.356 12.6667C182.356 14.4 183.778 15.8667 185.556 15.8667C187.333 15.8667 188.756 14.4444 188.756 12.6667C188.711 10.8889 187.289 9.46667 185.556 9.46667ZM185.556 18.2222C182.489 18.2222 180 15.7333 180 12.6667C180 9.6 182.489 7.11111 185.556 7.11111C188.622 7.11111 191.111 9.6 191.111 12.6667C191.111 15.7333 188.622 18.2222 185.556 18.2222ZM137.156 9.46667C135.378 9.46667 133.956 10.8889 133.956 12.6667C133.956 14.4 135.378 15.8667 137.156 15.8667C138.933 15.8667 140.356 14.4444 140.356 12.6667C140.356 10.8889 138.933 9.46667 137.156 9.46667ZM137.156 18.2222C134.089 18.2222 131.6 15.7333 131.6 12.6667C131.6 9.6 134.089 7.11111 137.156 7.11111C140.222 7.11111 142.711 9.6 142.711 12.6667C142.756 15.7333 140.222 18.2222 137.156 18.2222Z"
            fill="black"
            />
        </g>
        </svg>
    </div>
    </div>

    <div class="main-stage__switcher-block">
    <div class="main-stage__switcher-container">
        <div class="main-stage__switcher-image-container">
        <img
            src="<?php echo get_sub_field('page_stage_img'); ?>"
            alt="image"
            title="image"
            class="main-stage__switcher-image"
        />
        </div>
    </div>
    </div>
</section>
<!--  //Section-Stage  -->