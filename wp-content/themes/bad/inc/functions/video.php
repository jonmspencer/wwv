<?php

  function render_video_collection($category = null, $count = 14) {
    $loop = new WP_Query(
      array(
        'order' => 'DESC',
        'posts_per_page' => $count,
        'category_name' => $category,
      )
    );

    if ( $loop->have_posts() ) {
      while ( $loop->have_posts() ) : $loop->the_post();
        $youtube_video_id = get_post_meta( get_the_ID(), 'post_youtube_video_id', true );
        include(locate_template("shared/video/video-slide.php"));
      endwhile;
    }

    unset($loop);
    wp_reset_postdata();
    wp_reset_query();
    rewind_posts();
  }

?>
