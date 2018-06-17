<?php

  add_action('admin_menu','remove_default_post_type');

  function remove_default_post_type() {
  	remove_menu_page('edit.php');
  }

  function hide_add_new() {
    global $submenu;
    // For Removing New Posts from Admin Menu
    unset($submenu['post-new.php?post_type=post'][10]);
    // For Removing New Pages
    // unset($submenu['post-new.php?post_type=page'][10]);
    // For Removing CPTs
    // unset($submenu['post-new.php?post_type=custom_post_type'][10]);
  }
  add_action('admin_menu', 'hide_add_new');

  function remove_admin_bar_links() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('new-post');
    // $wp_admin_bar->remove_menu('new-page');
    // $wp_admin_bar->remove_menu('new-cpt');
  }
  add_action( 'wp_before_admin_bar_render', 'remove_admin_bar_links' );

  function disable_new_post() {
    if ( get_current_screen()->post_type == 'post' )
    wp_die( "No need for posts with this theme ;)" );
  }
  add_action( 'load-post-new.php', 'disable_new_post' );

?>
