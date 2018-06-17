<?php

  // Enqueue Styles and Scripts
  if(!is_admin()) {

    function enqueue_scripts() {
      // Theme Stylesheet
      wp_enqueue_style('theme_style', get_stylesheet_uri(), "", "3.0.9");
      // Theme Scripts
      wp_enqueue_script('theme_scripts', get_stylesheet_directory_uri() . '/assets/scripts/build.min.js', array('jquery'), "", true);
    }

    add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );

    // Remove query strings from static resources
    // function _remove_script_version( $src ){
    //   $parts = explode( '?', $src );
    //   return $parts[0];
    // }
    // add_filter( 'script_loader_src', '_remove_script_version', 15, 1 );
    // add_filter( 'style_loader_src', '_remove_script_version', 15, 1 );

    // Remove jQuery Migrate
    add_filter( 'wp_default_scripts', 'remove_jquery_migrate' );
    function remove_jquery_migrate( &$scripts) {
      if(!is_admin()) {
        $scripts->remove( 'jquery');
        $scripts->add( 'jquery', false, array( 'jquery-core' ), '3.2.1' );
      }
    }

    // Defer Scripts
    add_filter( 'script_loader_tag', 'wsds_defer_scripts', 10, 3 );
    function wsds_defer_scripts( $tag, $handle, $src ) {
      // The handles of the enqueued scripts we want to defer
      $defer_scripts = array(
        'theme_scripts',
        'admin-bar',
        'wp-embed'
      );
      if ( in_array( $handle, $defer_scripts ) ) {
        return '<script src="' . $src . '" defer type="text/javascript"></script>' . "\n";
      }
      return $tag;
    }

  } // End if is not admin
?>
