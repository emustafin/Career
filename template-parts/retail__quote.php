<!-- Section quote -->
<div class="retail__quote">
  <img
    class="retail__video-placeholder"
    src="<?php echo get_sub_field('bg_img'); ?>"
    alt="placeholder"
    title="Видео"
  />

  <div class="retail__quote-wrapper">
    <p class="retail__quote-text">
        <?php echo get_sub_field('text'); ?>
    </p>

    <span class="retail__quote-author"><?php echo get_sub_field('caption'); ?></span
    ><span>,</span>
    <p class="retail__quote-author-post"><?php echo get_sub_field('position'); ?></p>
  </div>
</div>
<!-- //Section quote -->