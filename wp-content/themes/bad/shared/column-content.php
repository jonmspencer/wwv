<section class="column-content" data-behavior="img-defer" data-image="<?php echo get_post_meta( get_the_ID(), 'home_callout_background_image', true ); ?>">
  <div class="inner-wrap">
    <?php echo wpautop( get_post_meta( get_the_ID(), 'home_callout_content', true )); ?>
  </div>
</section>
