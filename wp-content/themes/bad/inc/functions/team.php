<?php

  function render_team($count, $category = null) {
    $loop = new WP_Query(
      array(
        'post_type' => 'team',
        'order' => 'ASC',
        'posts_per_page' => $count,
        'team-tag' => $category,
      )
    );

    if ( $loop->have_posts() ) {
      while ( $loop->have_posts() ) : $loop->the_post();
        include(locate_template("team/team-member.php"));
      endwhile;
    }

    unset($loop);
    wp_reset_postdata();
    wp_reset_query();
    rewind_posts();
  }

?>
