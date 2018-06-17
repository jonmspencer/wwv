<?php // MENUS
add_theme_support( 'menus' );

// Function for registering wp_nav_menu()
add_action( 'init', 'register_navmenus' );
function register_navmenus() {
  register_nav_menus(array(
    // Menus, separated by comma.
    'Primary Navigation'	=> __('Primary Navigation'),
    // 'Social Navigation'	=> __('Social Navigation'),
    // 'Career'	=> __('Career'),
    // 'Culture'	=> __('Culture'),
    // 'Transition Details'	=> __('Transition Details')
  ));
}

?>
