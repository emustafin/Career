<!-- Section advantages -->
<?php
$mvideo_retail_advantages = get_sub_field('mvideo_retail_advantages');
$eldorado_retail_advantages = get_sub_field('eldorado_retail_advantages');
?>
<div class="retail__advantages">
  <div class="retail__advantages-side-bar">
    <p class="retail__advantages-side-bar-text">
      Три причины присоединиться к нам
    </p>
  </div>

  <!-- <div class="retail__advantages-content-bar">
    <div class="retail__advantages-content-item">
      <div class="retail__advantages-number">01</div>
      <div class="retail__advantages-description-block">
        <h2 class="retail__advantages-description-title">
          <?php echo get_sub_field('reason_header_1'); ?>
        </h2>
        <p class="retail__advantages-description-text">
            <?php echo get_sub_field('context_reason_1'); ?>
        </p>
      </div>
    </div>

    <div class="retail__advantages-content-item">
      <div class="retail__advantages-number">02</div>
      <div class="retail__advantages-description-block">
        <h2 class="retail__advantages-description-title">
          <?php echo get_sub_field('reason_header_2'); ?>
        </h2>
        <p class="retail__advantages-description-text">
            <?php echo get_sub_field('context_reason_2'); ?>
        </p>
      </div>
    </div>

    <div class="retail__advantages-content-item">
      <div class="retail__advantages-number">03</div>
      <div class="retail__advantages-description-block">
        <h2 class="retail__advantages-description-title">
          <?php echo get_sub_field('reason_header_3'); ?>
        </h2>
        <p class="retail__advantages-description-text">
            <?php echo get_sub_field('context_reason_3'); ?>
        </p>
      </div>
    </div>
  </div> -->

  <div class="retail__advantages-content-bar mvideo">
    <div class="retail__advantages-content-item">
      <div class="retail__advantages-number-mvideo">01</div>
      <div class="retail__advantages-description-block">
        <h2 class="retail__advantages-description-title">
          <?php echo $mvideo_retail_advantages['reason_header_1']; ?>
        </h2>
        <div class="retail__advantages-description-text">
          <?php echo $mvideo_retail_advantages['context_reason_1']; ?>
        </div>
      </div>
    </div>

    <div class="retail__advantages-content-item">
      <div class="retail__advantages-number-mvideo">02</div>
      <div class="retail__advantages-description-block">
        <h2 class="retail__advantages-description-title">
          <?php echo $mvideo_retail_advantages['reason_header_2']; ?>
        </h2>
        <div class="retail__advantages-description-text">
          <?php echo $mvideo_retail_advantages['context_reason_2']; ?>
        </div>
      </div>
    </div>

    <div class="retail__advantages-content-item">
      <div class="retail__advantages-number-mvideo">03</div>
      <div class="retail__advantages-description-block">
        <h2 class="retail__advantages-description-title">
          <?php echo $mvideo_retail_advantages['reason_header_3']; ?>
        </h2>
        <div class="retail__advantages-description-text">
          <?php echo $mvideo_retail_advantages['context_reason_3']; ?>
        </div>
      </div>
    </div>
  </div>

  <div class="retail__advantages-content-bar eldorado hide">
    <div class="retail__advantages-content-item">
      <div class="retail__advantages-number-eldorado">01</div>
      <div class="retail__advantages-description-block">
        <h2 class="retail__advantages-description-title">
          <?php echo $eldorado_retail_advantages['reason_header_2']; ?>
        </h2>
        <div class="retail__advantages-description-text">
          <?php echo $eldorado_retail_advantages['context_reason_1']; ?>
        </div>
      </div>
    </div>

    <div class="retail__advantages-content-item">
      <div class="retail__advantages-number-eldorado">02</div>
      <div class="retail__advantages-description-block">
        <h2 class="retail__advantages-description-title">
          <?php echo $eldorado_retail_advantages['reason_header_2']; ?>
        </h2>
        <div class="retail__advantages-description-text">
          <?php echo $eldorado_retail_advantages['context_reason_2']; ?>
        </div>
      </div>
    </div>

    <div class="retail__advantages-content-item">
      <div class="retail__advantages-number-eldorado">03</div>
      <div class="retail__advantages-description-block">
        <h2 class="retail__advantages-description-title">
          <?php echo $eldorado_retail_advantages['reason_header_2']; ?>
        </h2>
        <div class="retail__advantages-description-text">
          <?php echo $eldorado_retail_advantages['context_reason_3']; ?>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- //Section advantages -->