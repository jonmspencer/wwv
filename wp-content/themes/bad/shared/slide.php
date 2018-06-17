<div class="slide">
  <div class="wrap">
    <div class="content slide-content">
      <?php echo wpautop(get_post_meta( get_the_ID(), 'home_slide_'. $number . '_content', true )); ?>
    </div>
    <div class="slide-image" data-behavior="img-defer" data-image="<?php echo get_post_meta( get_the_ID(), 'home_slide_'. $number . '_image', true ); ?>">
      <div class="content"></div>
    </div>
  </div>
</div>
