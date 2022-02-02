<?php 
/*
Template Name: News & events
*/
    get_header();
?>
<section class="content__news">

    <div class="content__top">
        <h3 class="title__page-news">
            <?the_title();?>
        </h3>
        <div class="filter__block">
            <div class="filter__news first__filter">
                <p class="title__filter">
                    Тема
                </p>
                <div class="container__filter">
                    <input name='tags-theme' class="first__filter-news" type="text" placeholder="Любая">
                    <svg class="listing__filter-item-select-arrow-image" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.58286 7.56905V0.925293H4.38286V7.53389L1.4247 4.57574L0.576172 5.42426L4.22262 9.07071C4.65219 9.50029 5.34868 9.50029 5.77825 9.07071L9.4247 5.42426L8.57617 4.57574L5.58286 7.56905Z" fill="black"></path>
                    </svg>
                </div>
            </div>
            <div class="filter__news second__filter">
                <p class="title__filter">
                    Год
                </p>
                <div class="container__filter">
                    <input name="tags-date" class="first__filter-news" type="text" placeholder="За все время">
                    <svg class="listing__filter-item-select-arrow-image" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.58286 7.56905V0.925293H4.38286V7.53389L1.4247 4.57574L0.576172 5.42426L4.22262 9.07071C4.65219 9.50029 5.34868 9.50029 5.77825 9.07071L9.4247 5.42426L8.57617 4.57574L5.58286 7.56905Z" fill="black"></path>
                    </svg>
                </div>
            </div> 
        </div>
        <div class="drop__filter">
            <p class="drop__btn">
                Сбросить фильтры
            </p>
        </div>  
    </div>
</section>
<section class="news__events">
    <div class="left__column">
        <div class="left__column-container">
            <div class="left__column-wrapper">
                <p class="title__left-column">
                    Ближайшие события
                </p>
                <div class="event__swiper swiper">
                    <div class="event__card-wrapper swiper-wrapper">
                        <p class="title__event-month">
                            Сентябрь
                        </p>
                        <div class="event__card swiper-slide">
                            <div class="event__date">
                                <p class="event__date-day">12</p>
                                <p class="event__date-month">/09</p>
                            </div>
                            <div class="event__content">
                                <p class="event__name">
                                    Митап по Data Science
                                </p>
                                <p class="event__status">
                                    Онлайн
                                </p>
                                <a href="#" class="event__link">
                                    <p>Зарегистрироваться</p>
                                    <svg width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.0534 4.22214L8.97561 1.35207L9.79401 0.474443L14.37 4.74161L10.1028 9.31758L9.2252 8.49918L12.0953 5.42141L0.550833 5.82455L0.508953 4.62528L12.0534 4.22214Z" fill="black"></path>
                                    </svg>                    
                                </a>
                            </div>
                        </div>
                        <div class="event__card swiper-slide">
                            <div class="event__date">
                                <p class="event__date-day">13</p>
                                <p class="event__date-month">/09</p>
                            </div>
                            <div class="event__content">
                                <p class="event__name">
                                    Митап по Data Science
                                </p>
                                <p class="event__status">
                                    Онлайн
                                </p>
                                <a href="#" class="event__link">
                                    <p>Зарегистрироваться</p>
                                    <svg width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.0534 4.22214L8.97561 1.35207L9.79401 0.474443L14.37 4.74161L10.1028 9.31758L9.2252 8.49918L12.0953 5.42141L0.550833 5.82455L0.508953 4.62528L12.0534 4.22214Z" fill="black"></path>
                                    </svg>                    
                                </a>
                            </div>
                        </div>
                        <p class="title__event-month">
                            Октябрь
                        </p>
                        <div class="event__card swiper-slide">
                            <div class="event__date">
                                <p class="event__date-day">07</p>
                                <p class="event__date-month">/10</p>
                            </div>
                            <div class="event__content">
                                <p class="event__name">
                                    Митап по Data Science
                                </p>
                                <p class="event__status">
                                    Онлайн
                                </p>
                                <a href="#" class="event__link">
                                    <p>Зарегистрироваться</p>
                                    <svg width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.0534 4.22214L8.97561 1.35207L9.79401 0.474443L14.37 4.74161L10.1028 9.31758L9.2252 8.49918L12.0953 5.42141L0.550833 5.82455L0.508953 4.62528L12.0534 4.22214Z" fill="black"></path>
                                    </svg>                    
                                </a>
                            </div>
                        </div>
                        <div class="event__card swiper-slide">
                            <div class="event__date">
                                <p class="event__date-day">29</p>
                                <p class="event__date-month">/10</p>
                            </div>
                            <div class="event__content">
                                <p class="event__name">
                                    Митап по Data Science
                                </p>
                                <p class="event__status">
                                    Онлайн
                                </p>
                                <a href="#" class="event__link">
                                    <p>Зарегистрироваться</p>
                                    <svg width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.0534 4.22214L8.97561 1.35207L9.79401 0.474443L14.37 4.74161L10.1028 9.31758L9.2252 8.49918L12.0953 5.42141L0.550833 5.82455L0.508953 4.62528L12.0534 4.22214Z" fill="black"></path>
                                    </svg>                    
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="all__events">
                    <a href="#" class="all__event-link">
                        Все события
                        <svg width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.0534 4.22214L8.97561 1.35207L9.79401 0.474443L14.37 4.74161L10.1028 9.31758L9.2252 8.49918L12.0953 5.42141L0.550833 5.82455L0.508953 4.62528L12.0534 4.22214Z" fill="black"></path>
                        </svg> 
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="right__column">
        <div class="news__card">
            <img src="<?php echo get_template_directory_uri()?>/webpack-work/src/images/news/news__pic.png" alt="news-pic" class="news__card-img">
            <p class="title__card">
                Группа «М.Видео-Эльдорадо» запустила программу стажировок для программистов
            </p>
            <p class="date__card">
                16 июля 2021
            </p>
        </div>
        <!-- TODO удалить класс "news__card-hide" -->
        <div class="news__card news__card-hide">
            <img src="<?php echo get_template_directory_uri()?>/webpack-work/src/images/news/news__pic.png" alt="news-pic" class="news__card-img">
            <p class="title__card">
                Группа «М.Видео-Эльдорадо» запустила программу стажировок для программистов
            </p>
            <p class="date__card">
                16 июля 2021
            </p>
        </div>
        <!-- TODO удалить класс "news__card-hide" -->
        <div class="news__card news__card-hide">
            <img src="<?php echo get_template_directory_uri()?>/webpack-work/src/images/news/news__pic.png" alt="news-pic" class="news__card-img">
            <p class="title__card">
                Группа «М.Видео-Эльдорадо» запустила программу стажировок для программистов
            </p>
            <p class="date__card">
                16 июля 2021
            </p>
        </div>
        <div id="swiper__news-card" class="mini__news-card swiper">
            <div class="swiper-wrapper">
                <div class="news__card swiper-slide">
                    <img src="<?php echo get_template_directory_uri()?>/webpack-work/src/images/news/news__pic_1.png" alt="news-pic" class="news__card-img">
                    <p class="mini__title-card">
                        Группа «М.Видео-Эльдорадо» запустила программу стажировок для программистов
                    </p>
                    <p class="date__card">
                        16 июля 2021
                    </p>
                </div>
                <div class="news__card swiper-slide">
                    <img src="<?php echo get_template_directory_uri()?>/webpack-work/src/images/news/news__pic_2.png" alt="news-pic" class="news__card-img">
                    <p class="mini__title-card">
                        Группа «М.Видео-Эльдорадо» запустила программу стажировок для программистов
                    </p>
                    <p class="date__card">
                        16 июля 2021
                    </p>
                </div>
                <div class="news__card swiper-slide">
                    <img src="<?php echo get_template_directory_uri()?>/webpack-work/src/images/news/news__pic_1.png" alt="news-pic" class="news__card-img">
                    <p class="mini__title-card">
                        Группа «М.Видео-Эльдорадо» запустила программу стажировок для программистов
                    </p>
                    <p class="date__card">
                        16 июля 2021
                    </p>
                </div>
                <div class="news__card swiper-slide">
                    <img src="<?php echo get_template_directory_uri()?>/webpack-work/src/images/news/news__pic_2.png" alt="news-pic" class="news__card-img">
                    <p class="mini__title-card">
                        Группа «М.Видео-Эльдорадо» запустила программу стажировок для программистов
                    </p>
                    <p class="date__card">
                        16 июля 2021
                    </p>
                </div>
            </div>
        </div>
        <div class="products__show-more" style="display:flex;">
            <div href="#" class="position__show-more-button">
                показать ещё
                <svg class="position__show-more-button-link" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.40039 5.60002V9.5H5.60039V5.60002H9.5V4.40002H5.60039V0.5H4.40039V4.40002H0.5L0.5 5.60002H4.40039Z" fill="black"></path>
                </svg>
            </div>
        </div>
    </div>
</section>
<?php
    get_footer();
?>