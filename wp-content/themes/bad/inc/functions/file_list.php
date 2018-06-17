<?php
  function output_file_list( $file_list_meta_key, $img_size = 'full', $number = '1') {
    // Get the list of files
    $files = get_post_meta( get_the_ID(), $file_list_meta_key, 1 );
    echo '<div class="marquee-slider">';
      echo '<div class="slider-slides" data-behavior="slick-slider">';
        // Loop through them and output an image
        foreach ( (array) $files as $attachment_id => $attachment_url ) {
          $src = wp_get_attachment_image_src( get_post_thumbnail_id($attachment_id), array( 5600,1000 ), false, '' );
          echo '<div class="slide">';
            echo '<div class="slide-image" data-image="' . $attachment_url . '" data-behavior="img-defer" style="background-image: url();"></div>';
          echo '</div>'; // End slide
        }
      echo '</div>'; // End slider-slides
      include(locate_template("shared/menu-marquee-control.php"));
    echo '</div>'; // End marquee-slider
  }
?>
