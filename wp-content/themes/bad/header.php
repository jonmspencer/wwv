<!DOCTYPE html>
<html data-behavior="defer-image" data-image="<?php echo get_template_directory_uri(); ?>/assets/images/noise.gif">
  <head itemscope itemtype="http://schema.org/WebSite" >
    <?php get_template_part("shared/head_meta"); ?>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(get_post_type($post)); ?>>
    <?php
      get_template_part('shared/svg-sprite');
      get_template_part('shared/header');
    ?>
