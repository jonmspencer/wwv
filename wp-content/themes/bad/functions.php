<?php // Functions

// Includes
// Standard
require('inc/functions/asset_queue.php');
// Standard
require('inc/functions/standard.php');
// Login
require('inc/functions/login.php');
// Menus
require('inc/functions/menus.php');
// Page
require('inc/functions/page.php');
// Remove Posts
// require('inc/functions/remove_posts.php');
// Remove Comments
require('inc/functions/remove_comments.php');
// File List
require('inc/functions/file_list.php');

// Taxonomies
require('inc/functions/taxonomies/team-tag.php');

// Views
require('inc/functions/views/page-views.php');
require('inc/functions/views/post-views.php');

// Custom Post Types
// require('inc/functions/cpt/team-cpt.php');

// Specifics
// Slider
require('inc/functions/slider.php');
// Team
require('inc/functions/team.php');

// CMB2 INIT
if ( file_exists( dirname( __FILE__ ) . '/inc/vendor/cmb2/init.php' ) ) {
  require_once dirname( __FILE__ ) . '/inc/vendor/cmb2/init.php';
} elseif ( file_exists( dirname( __FILE__ ) . '/inc/vendor/CMB2/init.php' ) ) {
  require_once dirname( __FILE__ ) . '/inc/vendor/CMB2/init.php';
}

// Address
require('inc/vendor/cmb2_address.php');

// Metaboxes
// Post
require('inc/functions/metaboxes/post-meta.php');
