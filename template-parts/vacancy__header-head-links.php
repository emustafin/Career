<div class="vacancy__header-head-links">
    <a href="#" class="vacancy__header-head-link-main"> 
        <?php echo $link_main; ?>
        <svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M4.57661 0.575745L0.152344 5.00001L4.57661 9.42427L5.42514 8.57574L2.4494 5.60001H14.0009V4.40001H2.4494L5.42514 1.42427L4.57661 0.575745Z" fill="black" />
        </svg>
    </a>
    <?php if( '' != $link_vacancy ){ ?>
    <a href="#" class="vacancy__header-head-link-vacancy">
        <?php echo $link_vacancy; ?>
        <svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg" >
            <path d="M4.57661 0.575745L0.152344 5.00001L4.57661 9.42427L5.42514 8.57574L2.4494 5.60001H14.0009V4.40001H2.4494L5.42514 1.42427L4.57661 0.575745Z" fill="black"/>
        </svg>
    </a>
    <?php } ?>
</div>