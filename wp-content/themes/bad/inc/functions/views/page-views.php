<?php

  // Front Page
  function render_front_page() {
    get_header();
    get_template_part("shared/hero");

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
