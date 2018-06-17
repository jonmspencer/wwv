<?php

  function featured_deferred_background_image() {
    $featured_image_src_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
    if($featured_image_src_url[0] != "") {
      echo "data-image='". $featured_image_src_url[0] ."'";
    }
  }

  function featured_background_image() {
    $featured_image_src_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
    if($featured_image_src_url[0] != "") {
      echo "src='background-image: url(". $featured_image_src_url[0] .");'";
    }
  }

  function render_callout($number) {
    $args = array(
      'post_type' => 'callout',
      'offset' => $number - 1,
      'posts_per_page' => 1
    );
    $callout = new WP_Query( $args );
    while( $callout->have_posts() ) {
      $callout->the_post();
      include(locate_template("shared/callout.php"));
    }
    wp_reset_postdata();
  }

  function render_title($heading) {
    if ( !$heading ) {
      $heading = get_the_title();
    }

    if ( is_home() || is_archive() || is_singular('post') ) {
      echo "<h1>". $heading ."</h1>";
    } else {
      echo "<h3>". $heading ."</h3>";
    }
    unset($heading);
  }

  function return_excerpt_with_limit($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if ( count($excerpt) >= $limit ) {
      array_pop($excerpt);
      $excerpt = implode(" ", $excerpt).'...';
    } else {
      $excerpt = implode(" ", $excerpt);
    }
    $excerpt = preg_replace('`[[^]]*]`', '', $excerpt);
    return $excerpt;
  }

  function render_excerpt() {
    if ( in_the_loop() ) {
      if ( has_excerpt() ) {
        the_excerpt();
      }
    } else {
      $object = get_queried_object();
      if ( get_the_excerpt( $object ) ) {
        echo '<p>'. get_the_excerpt( $object ) .'</p>';
      }
    }
  }

  // Renders only page content. Use inside the loop.
  function render_page_content($optional_classes) {
    $page_content = get_the_content();
    if($page_content != "") {
      ob_start();
      the_content();
      $content = ob_get_clean();
      include(locate_template("shared/content.php"));
      unset($page_content, $content);
    }
  }

  function render_additional_content($additional_content, $optional_classes = "") {
    if($additional_content != "") {
      ob_start();
      echo $additional_content;
      $content = ob_get_clean();
      include(locate_template("shared/content.php"));
      unset($page_content, $content, $additional_content);
    }
  }

  // Renders a list of child pages. Use outside of the loop.
  function render_child_page_list($post) {
    $parent = new WP_Query( array('post_type' => 'page', 'post_parent' => $post->ID ) );
    if ( $parent->have_posts() ) :
      ob_start();
      while ( $parent->have_posts() ) : $parent->the_post();
        get_template_part("shared/post-link");
      endwhile;
      $content = ob_get_clean();
      include(locate_template("shared/content.php"));
      unset($parent, $content);
    endif;
    wp_reset_query();
  }

  // Siblings
  function siblings($link) {
    global $post;
    $siblings = get_pages('child_of='.$post->post_parent.'&parent='.$post->post_parent.'&sort_column=menu_order');
    $last_sibling_index = count($siblings) - 1;
    foreach ($siblings as $key=>$sibling) {
      if ($post->ID == $sibling->ID) {
        $current_index = $key;
      }
    }

    if ($post->ID == $siblings[$last_sibling_index]->ID) {
      echo get_permalink($siblings[0]->ID);
    } else {
      $closest = array('before' => get_permalink($siblings[$current_index-1]->ID),'after' => get_permalink($siblings[$current_index+1]->ID));
      if ($link == 'before' || $link == 'after') { echo $closest[$link]; }
    }
  }

  // Encode Email
  function encode_email( $email ) {
    $output = '';
    for ($i = 0; $i < strlen($email); $i++) {
      $output .= '&#'.ord($email[$i]).';';
    }
    return $output;
  }

?>
