# Career

## Введение
Карьерный сайт М-Видео-Эльдорадо реализован, как витрина для публикации информации о требуемых вакансий и сбора откликов от соискателей.
Технологически сайт базируется на CMS Wordpress. Вся функциональность реализована штатными средствами CMS и расширяется при помощи специально разработанной темы и плагинов.

## Интеграции
Сайт интегрирован с системой Skillaz через API и получает новости с Habr через RSS c помощью плагина Feed Importer. Интеграция со Skillaz двусторонняя, т.е. сайт получает информацию по вакансиям для публикации и отправляет данные соискателей в систему.

## Локальный запуск проекта:
1. создать с помощью Duplicator архив с инсталлером и скачать

<img src="./Docs/Img/Step 016.png" style="width:50%;"><img src="./Docs/Img/Step 017.png" style="width:50%;">
<img src="./Docs/Img/Step 018.png" style="width:50%;"><img src="./Docs/Img/Step 019.png" style="width:50%;">

2. развернуть сервер с настройками не ниже указанных, создать БД под проект
    * PHP 7.4 or higher
    * MySQL 5.7 or higher, or MariaDB 10.2 or higher
    * Nginx or Apache

3. в папку локального сайта переместить инсталлер и архив(без распаковки)

4. зайти по ссылке на сайт локального проекта /installer.php
<img src="./Docs/Img/Step 022.png" style="width:50%;">

5. пройти по всем пункта и заполнить в необходимых местах
<img src="./Docs/Img/Step 023.png" style="width:50%;">

### Необходимые плагины
* Advanced Cron Manager
* Advanced Custom Fields PRO
* All in One SEO
* Autoptimize
* BBQ Брандмауэр
* Classic Editor
* Contact Form 7
* Contact Form 7 - Маска телефонного номера
* Contact Form 7 Serial Numbers
* Cyr-To-Lat
* Duplicator
* Flamingo
* Import XML feed
* Last-Modified and If-Modified-Since Headers
* Post SMTP
* Robin image optimizer
* Webcraftic Clearfy – WordPress optimization plugin
* WP Login Door
* WPide
* Форма загрузки файлов для плагина Contact Form 7

## Обновление темы:
<details>
    <p>- скопировать нужные папки в отдельную папку, желательно с таким же названием - </p>
        <img src="./Docs/Img/Step 001.png" style="width:50%;">
        <p>-></p>
        <img src="./Docs/Img/Step 002.png" style="width:50%;">
    <p>- создать из этой папки ZIP-файл</p>
        <img src="./Docs/Img/Step 003.png" style="width:50%;">
    <p>- зайти в админку сайта на вкладку Внешний вид->Темы</p>
        <img src="./Docs/Img/Step 004.png" style="width:50%;">
        <p>и нажать "добавить"</p>
        <img src="./Docs/Img/Step 005.png" style="width:50%;">
    <p>- затем нажать "загрузить тему"->выбрать файл->Установить - </p>
        <img src="./Docs/Img/Step 006.png" style="width:50%;">
    <p>- согласиться на замену текущей версии темы новой -</p>
        <img src="./Docs/Img/Step 007.png" style="width:50%;">
    <p>- если были изменены группы полей, то нужно зайти во вкладку "группы полей" на подстраницу "синхронизация доступна"</p>
        <img src="./Docs/Img/Step 008.png" style="width:50%;">
    <p>     если она доступна</p>
    <p>- выбрать необходимые поля, выбрать действие о синхронизации и применить -</p>
        <img src="./Docs/Img/Step 009.png" style="width:50%;">
</details>

## Обновление вакансий(Skillaz):</h2>
<details>
    <p>- в админке зайти во вкладку Skillaz control -</p>
        <img src="./Docs/Img/Step 010.png" style="width:50%;">
    <p>- установить ссылку и сохранить изменения - </p>
        <img src="./Docs/Img/Step 011.png" style="width:50%;">
    <p>- выбрать автоматическое обновление и запустить</p>
        <img src="./Docs/Img/Step 012.png" style="width:50%;">
    <p>- после того как пройдут все страницы запустить зачистку после обновления</p>
        <img src="./Docs/Img/Step 013.png" style="width:50%;">
    <p>- в вакансиях выбрать необходимые для публикации(проверить при необходимости) и опубликовать</p>
        <img src="./Docs/Img/Step 014.png" style="width:50%;">

        <img src="./Docs/Img/Step 015.png" style="width:50%;">

### Установка ID вакансии для холодной формы
- находится в Skillaz control, после установки - сохранить изменения</p>
<img src="./Docs/Img/Step 025.png" style="width:50%;">

### Автоматическое обновление
- зайти и добавить новую задачу установив все необходимые параметры: название хука на обновление - "skillaz_vacancies_find"</p>
<img src="./Docs/Img/Step 024.png" style="width:50%;">
</details>
