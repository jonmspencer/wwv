<?php

  function render_slide($number) {
    if( get_post_meta( get_the_ID(), 'home_slide_'. $number . '_content', true ) ) {
      include(locate_template("shared/slide.php"));
    }
  }

?>
