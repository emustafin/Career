<div class="retail__position-list-item">
    <div class="retail__position-item-position">
    <p class="retail__position-item-position-title">
        <?php echo get_the_title( $vacancy_item_id ); ?>
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
    <a href="<?php echo get_permalink( $vacancy_item_id ); ?>" class="retail__position-item-button">
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