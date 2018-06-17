<?php

  function my_login_logo_url() {
    return home_url();
  }
  add_filter( 'login_headerurl', 'my_login_logo_url' );

  function my_login_logo_url_title() {
    return get_bloginfo('name') . " " . get_bloginfo('description');
  }
  add_filter( 'login_headertitle', 'my_login_logo_url_title' );
  
?>
