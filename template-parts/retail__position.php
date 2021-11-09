<!-- Section positions -->
<?php
$mvideo_retail_position = get_sub_field('mvideo_retail_position');
$eldorado_retail_position = get_sub_field('eldorado_retail_position');
?>
<section class="retail__position">

  <div class="retail__position-title-wrapper mvideo">
    <h2 class="retail__position-title"><?php echo $mvideo_retail_position['title_1']; ?></h2>
    <h2 class="retail__position-title-brand-mvideo"><?php echo $mvideo_retail_position['title_2']; ?></h2>
  </div>

  <div class="retail__position-title-wrapper eldorado hide">
    <h2 class="retail__position-title"><?php echo $eldorado_retail_position['title_1']; ?></h2>
    <h2 class="retail__position-title-brand-eldorado"><?php echo $eldorado_retail_position['title_2']; ?></h2>
  </div>


  <!-- <div class="retail__position-content">
    <div class="retail__position-side-bar">
      <p class="retail__position-side-bar-title">Начать карьеру просто</p>

      <div class="retail__position-side-bar-item">
        <h3 class="retail__position-side-bar-item-title">01</h3>
        <p class="retail__position-side-bar-text">
            <?php echo get_sub_field('description_item_1'); ?>
        </p>
      </div>

      <div class="retail__position-side-bar-item">
        <h3 class="retail__position-side-bar-item-title">02</h3>
        <p class="retail__position-side-bar-text">
            <?php echo get_sub_field('description_item_2'); ?>
        </p>
      </div>

      <div class="retail__position-side-bar-item">
        <h3 class="retail__position-side-bar-item-title">03</h3>
        <p class="retail__position-side-bar-text">
            <?php echo get_sub_field('description_item_3'); ?>
        </p>
      </div>
    </div>

    <div class="retail__position-content-bar">
      <div class="retail__position-headline">
        <p class="retail__position-headline-text">Наши вакансии</p>
        <a href="#" class="retail__position-headline-link">
          Все вакансии

          <svg
            class="retail__position-headline-link-arrow"
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
      </div>

      <div class="retail__position-list">
        <div class="retail__position-list-item">
          <div class="retail__position-item-position">
            <p class="retail__position-item-position-title">
              Старший кассир
            </p>
          </div>

          <div class="retail__position-item-description">
            <p class="retail__position-description-text">
              Главный человек в компании! Правая рука покупателя, может
              подобрать идеальный гаджет одной левой.
            </p>

            <a href="#" class="retail__position-description-link">
              <span class="retail__position-value">343</span>
              вакансии
              <svg
                class="retail__position-headline-link-arrow"
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
          </div>
        </div>

        <div class="retail__position-list-item">
          <div class="retail__position-item-position">
            <p class="retail__position-item-position-title">
              Старший продавец
            </p>
          </div>

          <div class="retail__position-item-description">
            <p class="retail__position-description-text">
              Главный человек в компании! Правая рука покупателя, может
              подобрать идеальный гаджет одной левой.
            </p>

            <a href="#" class="retail__position-description-link">
              <span class="retail__position-value">343</span>
              вакансии
              <svg
                class="retail__position-headline-link-arrow"
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
          </div>
        </div>

        <div class="retail__position-list-item">
          <div class="retail__position-item-position">
            <p class="retail__position-item-position-title">
              Продавец-консультант
            </p>
          </div>

          <div class="retail__position-item-description">
            <p class="retail__position-description-text">
              Главный человек в компании! Правая рука покупателя, может
              подобрать идеальный гаджет одной левой.
            </p>

            <a href="#" class="retail__position-description-link">
              <span class="retail__position-value">343</span>
              вакансии
              <svg
                class="retail__position-headline-link-arrow"
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
          </div>
        </div>

        <div class="retail__position-list-item">
          <div class="retail__position-item-position">
            <p class="retail__position-item-position-title">
              Менеджер торговой секции
            </p>
          </div>

          <div class="retail__position-item-description">
            <p class="retail__position-description-text">
              Главный человек в компании! Правая рука покупателя, может
              подобрать идеальный гаджет одной левой.
            </p>

            <a href="#" class="retail__position-description-link">
              <span class="retail__position-value">343</span>
              вакансии
              <svg
                class="retail__position-headline-link-arrow"
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
          </div>
        </div>

        <div class="retail__position-list-item">
          <div class="retail__position-item-position">
            <p class="retail__position-item-position-title">
              Специалист по клиентскому сервису
            </p>
          </div>

          <div class="retail__position-item-description">
            <p class="retail__position-description-text">
              Главный человек в компании! Правая рука покупателя, может
              подобрать идеальный гаджет одной левой.
            </p>

            <a href="#" class="retail__position-description-link">
              <span class="retail__position-value">343</span>
              вакансии
              <svg
                class="retail__position-headline-link-arrow"
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
          </div>
        </div>
      </div>
    </div>
  </div> -->

  <div class="retail__position-content mvideo">
    <div class="retail__position-side-bar">
      <p class="retail__position-side-bar-title">Начать карьеру просто</p>

      <div class="retail__position-side-bar-item">
        <h3 class="retail__position-side-bar-item-title-mvideo">01</h3>
        <div class="retail__position-side-bar-text">
          <?php echo $mvideo_retail_position['description_item_1']; ?>
        </div>
      </div>

      <div class="retail__position-side-bar-item">
        <h3 class="retail__position-side-bar-item-title-mvideo">02</h3>
        <div class="retail__position-side-bar-text">
          <?php echo $mvideo_retail_position['description_item_2']; ?>
        </div>
      </div>

      <div class="retail__position-side-bar-item">
        <h3 class="retail__position-side-bar-item-title-mvideo">03</h3>
        <div class="retail__position-side-bar-text">
          <?php echo $mvideo_retail_position['description_item_3']; ?>
        </div>
      </div>
    </div>

    <div class="retail__position-content-bar">
      <div class="retail__position-headline">
        <p class="retail__position-headline-text">Наши вакансии</p>
        <a href="#" class="retail__position-headline-link">
          Все вакансии

          <svg
            class="retail__position-headline-link-arrow"
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
      </div>

      <div class="retail__position-list">
        <div class="retail__position-list-item">
          <div class="retail__position-item-position">
            <p class="retail__position-item-position-title">
              Старший кассир
            </p>
          </div>

          <div class="retail__position-item-description">
            <p class="retail__position-description-text">
              Главный человек в компании! Правая рука покупателя, может
              подобрать идеальный гаджет одной левой.
            </p>

            <a href="#" class="retail__position-description-link">
              <span class="retail__position-value">343</span>
              вакансии
              <svg
                class="retail__position-headline-link-arrow"
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
          </div>
          <a href="#" class="retail__position-item-button">
            больше о направлении

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
        </div>

        <div class="retail__position-list-item">
          <div class="retail__position-item-position">
            <p class="retail__position-item-position-title">
              Старший продавец
            </p>
          </div>

          <div class="retail__position-item-description">
            <p class="retail__position-description-text">
              Главный человек в компании! Правая рука покупателя, может
              подобрать идеальный гаджет одной левой.
            </p>

            <a href="#" class="retail__position-description-link">
              <span class="retail__position-value">343</span>
              вакансии
              <svg
                class="retail__position-headline-link-arrow"
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
          </div>

          <a href="#" class="retail__position-item-button">
            больше о направлении

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
        </div>

        <div class="retail__position-list-item">
          <div class="retail__position-item-position">
            <p class="retail__position-item-position-title">
              Продавец-консультант
            </p>
          </div>

          <div class="retail__position-item-description">
            <p class="retail__position-description-text">
              Главный человек в компании! Правая рука покупателя, может
              подобрать идеальный гаджет одной левой.
            </p>

            <a href="#" class="retail__position-description-link">
              <span class="retail__position-value">343</span>
              вакансии
              <svg
                class="retail__position-headline-link-arrow"
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
          </div>
          <a href="#" class="retail__position-item-button">
            больше о направлении

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
        </div>

        <div class="retail__position-list-item">
          <div class="retail__position-item-position">
            <p class="retail__position-item-position-title">
              Менеджер торговой секции
            </p>
          </div>

          <div class="retail__position-item-description">
            <p class="retail__position-description-text">
              Главный человек в компании! Правая рука покупателя, может
              подобрать идеальный гаджет одной левой.
            </p>

            <a href="#" class="retail__position-description-link">
              <span class="retail__position-value">343</span>
              вакансии
              <svg
                class="retail__position-headline-link-arrow"
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
          </div>
          <a href="#" class="retail__position-item-button">
            больше о направлении

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
        </div>

        <div class="retail__position-list-item">
          <div class="retail__position-item-position">
            <p class="retail__position-item-position-title">
              Специалист по клиентскому сервису
            </p>
          </div>

          <div class="retail__position-item-description">
            <p class="retail__position-description-text">
              Главный человек в компании! Правая рука покупателя, может
              подобрать идеальный гаджет одной левой.
            </p>

            <a href="#" class="retail__position-description-link">
              <span class="retail__position-value">343</span>
              вакансии
              <svg
                class="retail__position-headline-link-arrow"
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
          </div>
          <a href="#" class="retail__position-item-button">
            больше о направлении

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
        </div>
      </div>
    </div>
  </div>

  <div class="retail__position-content eldorado hide">
    <div class="retail__position-side-bar">
      <p class="retail__position-side-bar-title">Начать карьеру просто</p>

      <div class="retail__position-side-bar-item">
        <h3 class="retail__position-side-bar-item-title-eldorado">01</h3>
        <div class="retail__position-side-bar-text">
          <?php echo $eldorado_retail_position['description_item_1']; ?>
        </div>
      </div>

      <div class="retail__position-side-bar-item">
        <h3 class="retail__position-side-bar-item-title-eldorado">02</h3>
        <div class="retail__position-side-bar-text">
          <?php echo $eldorado_retail_position['description_item_2']; ?>
        </div>
      </div>

      <div class="retail__position-side-bar-item">
        <h3 class="retail__position-side-bar-item-title-eldorado">03</h3>
        <div class="retail__position-side-bar-text">
          <?php echo $eldorado_retail_position['description_item_3']; ?>
        </div>
      </div>
    </div>

    <div class="retail__position-content-bar">
      <div class="retail__position-headline">
        <p class="retail__position-headline-text">Наши вакансии</p>
        <a href="#" class="retail__position-headline-link">
          Все вакансии

          <svg
            class="retail__position-headline-link-arrow"
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
      </div>

      <div class="retail__position-list">
        <div class="retail__position-list-item">
          <div class="retail__position-item-position">
            <p class="retail__position-item-position-title">
              Старший кассир
            </p>
          </div>

          <div class="retail__position-item-description">
            <p class="retail__position-description-text">
              Главный человек в компании! Правая рука покупателя, может
              подобрать идеальный гаджет одной левой.
            </p>

            <a href="#" class="retail__position-description-link">
              <span class="retail__position-value">343</span>
              вакансии
              <svg
                class="retail__position-headline-link-arrow"
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
          </div>
          <a href="#" class="retail__position-item-button">
            больше о направлении

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
        </div>

        <div class="retail__position-list-item">
          <div class="retail__position-item-position">
            <p class="retail__position-item-position-title">
              Старший продавец
            </p>
          </div>

          <div class="retail__position-item-description">
            <p class="retail__position-description-text">
              Главный человек в компании! Правая рука покупателя, может
              подобрать идеальный гаджет одной левой.
            </p>

            <a href="#" class="retail__position-description-link">
              <span class="retail__position-value">343</span>
              вакансии
              <svg
                class="retail__position-headline-link-arrow"
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
          </div>
          <a href="#" class="retail__position-item-button">
            больше о направлении

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
        </div>

        <div class="retail__position-list-item">
          <div class="retail__position-item-position">
            <p class="retail__position-item-position-title">
              Продавец-консультант
            </p>
          </div>

          <div class="retail__position-item-description">
            <p class="retail__position-description-text">
              Главный человек в компании! Правая рука покупателя, может
              подобрать идеальный гаджет одной левой.
            </p>

            <a href="#" class="retail__position-description-link">
              <span class="retail__position-value">343</span>
              вакансии
              <svg
                class="retail__position-headline-link-arrow"
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
          </div>
          <a href="#" class="retail__position-item-button">
            больше о направлении

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
        </div>

        <div class="retail__position-list-item">
          <div class="retail__position-item-position">
            <p class="retail__position-item-position-title">
              Менеджер торговой секции
            </p>
          </div>

          <div class="retail__position-item-description">
            <p class="retail__position-description-text">
              Главный человек в компании! Правая рука покупателя, может
              подобрать идеальный гаджет одной левой.
            </p>

            <a href="#" class="retail__position-description-link">
              <span class="retail__position-value">343</span>
              вакансии
              <svg
                class="retail__position-headline-link-arrow"
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
          </div>
          <a href="#" class="retail__position-item-button">
            больше о направлении

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
        </div>

        <div class="retail__position-list-item">
          <div class="retail__position-item-position">
            <p class="retail__position-item-position-title">
              Специалист по клиентскому сервису
            </p>
          </div>

          <div class="retail__position-item-description">
            <p class="retail__position-description-text">
              Главный человек в компании! Правая рука покупателя, может
              подобрать идеальный гаджет одной левой.
            </p>

            <a href="#" class="retail__position-description-link">
              <span class="retail__position-value">343</span>
              вакансии
              <svg
                class="retail__position-headline-link-arrow"
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
          </div>
          <a href="#" class="retail__position-item-button">
            больше о направлении

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
        </div>
      </div>
    </div>
  </div>

</section>
<!-- //Section positions -->