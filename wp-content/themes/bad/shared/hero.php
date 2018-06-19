<section class="hero">
  <div class="wrap">
    <div class="hero-content">
      <h1>
        The inspiration behind the spoofs.
      </h1>
      <p>
        This carefully curated collection of videos demonstrates the collective, genuine foolishness and nauseating lack of taste of so many would be advertisers, entertainers, salesmen and what-have-you. They are entirely unedited by our purveyors, and brought to you in their true, original, mediocre at best form.
      </p>
      <a>
        <span class="bold-link">Ready for a purely bizarre, genuine experience?</span>
      </a>
      <br>
      <?php get_template_part("shared/modules/scroll-down-button"); ?>
    </div>

    <?php
      $featured_video_loop = new WP_Query(
        array(
          'post_type' => 'post',
          'posts_per_page' => 1,
          'category_name' => 'featured',
          // 'paged' => $paged
        )
      );
      if( $featured_video_loop->have_posts() ) {
        while ( $featured_video_loop->have_posts() ) : $featured_video_loop->the_post();
        if(get_post_meta( get_the_ID(), 'post_youtube_video_id', true )) {
          $youtube_video_id = get_post_meta( get_the_ID(), 'post_youtube_video_id', true );
          include(locate_template("shared/video/hero-video.php"));
          unset($youtube_video_id);
        }
        endwhile;
      }
    ?>
  </div>
</section>
