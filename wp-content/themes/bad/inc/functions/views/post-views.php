<?php

  // Single Post
  function render_single_post() {
    get_header();
    if(have_posts()) {
      while (have_posts()) : the_post();
        $youtube_video_id = get_post_meta( get_the_ID(), 'post_youtube_video_id', true );
        include(locate_template("shared/video/video-layout.php"));
        unset($youtube_video_id);
      endwhile;
    }


    get_footer();
  }

?>
