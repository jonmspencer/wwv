<?php

  // Front Page
  function render_front_page() {
    get_header();
    get_template_part("shared/hero");

    // $category = "genuine-foolishness";
    include(locate_template("shared/video/video-slider.php"));
    // unset($category);

    // Footer
    get_footer();
  }

  // Standard Page
  function render_page() {
    get_header();
    // if( have_posts() ) {
    //   while (have_posts()) : the_post();
    //     render_page_content();
    //   endwhile;
    // }
    get_footer();
  }

?>
