<header>
  <div class="wrap">
    <?php
      get_template_part("shared/modules/logo");
      get_template_part('shared/modules/menu-button');
      wp_nav_menu( array(
        'menu' => 'Primary Navigation',
        'theme_location' => 'Primary Navigation',
        'container' => false
      ) );
    ?>
  </div>
</header>
