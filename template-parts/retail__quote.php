<!-- Section quote -->
<?php
$mvideo_retail_quote = get_sub_field('mvideo_retail_quote');
$eldorado_retail_quote = get_sub_field('eldorado_retail_quote');
?>
<div class="retail__quote-container">
  
  <div class="retail__quote mvideo">
    <img
      class="retail__video-placeholder"
      src="<?php echo $mvideo_retail_quote['bg_img']; ?>"
      alt="placeholder"
      title="Видео"
    />

    <div class="retail__quote-wrapper">
      <div class="retail__quote-text">
        <?php echo $mvideo_retail_quote['text']; ?>
      </div>

      <span class="retail__quote-author"><?php echo $mvideo_retail_quote['caption']; ?></span
      ><span>,</span>
      <p class="retail__quote-author-post"><?php echo $mvideo_retail_quote['position']; ?></p>
    </div>
  </div>

  <div class="retail__quote eldorado hide">
    <img
      class="retail__video-placeholder"
      src="<?php echo $eldorado_retail_quote['bg_img']; ?>"
      alt="placeholder"
      title="Видео"
    />

    <div class="retail__quote-wrapper">
      <div class="retail__quote-text">
        <?php echo $eldorado_retail_quote['text']; ?>
      </div>

      <span class="retail__quote-author"><?php echo $eldorado_retail_quote['caption']; ?></span
      ><span>,</span>
      <p class="retail__quote-author-post"><?php echo $eldorado_retail_quote['position']; ?></p>
    </div>
  </div>

</div>
<!-- //Section quote -->