<?php
  $full_title = get_bloginfo('name') . " - " . get_bloginfo('description');
  $image = get_template_directory_uri() . "/assets/images/hero-1.jpg";
?>

<title itemprop='name'><?php echo $full_title; ?> | <?php echo the_title(); ?></title>
<meta charset="UTF-8" />
<!-- <meta name="apple-itunes-app" content="app-id=1171411865"> -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="index, follow">
<meta name="language" content="English">
<!-- <link rel="apple-touch-icon" href="<%= image_path('apple-icon.png') %>">
<link rel="icon" type="image/png" sizes="32x32" href="<%= image_path('favicon-32x32.png') %>"> -->
<meta name="description" content="<?php echo get_bloginfo('description'); ?>">
<meta name="keywords" content="">
<meta name="image" content="<?php echo $image; ?>">
<link itemprop="url" href="<?php echo home_url(); ?>" />

<!-- Twitter -->
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="<?php echo get_bloginfo('name'); ?>">
<meta name="twitter:description" content="<?php echo get_bloginfo('description'); ?>">
<meta name="twitter:image:src" content="<?php echo $image; ?>">

<!-- Open Graph general (Facebook, Pinterest & Google+) -->
<meta name="og:title" content="<?php echo get_bloginfo('name'); ?>">
<meta name="og:description" content="<?php echo get_bloginfo('description'); ?>">
<meta name="og:image" content="<?php echo $image; ?>">
<meta property="og:image:secure_url" content="<?php echo $image; ?>">
<meta name="og:url" content="<?php echo home_url(); ?>">
<meta name="og:site_name" content="<?php echo $full_title; ?>">
<meta name="og:locale" content="en_US">
<meta name="og:type" content="website">

<!-- Schema.org for Google -->
<meta itemprop="name" content="<?php echo get_bloginfo('name'); ?>">
<meta itemprop="description" content="<?php echo get_bloginfo('description'); ?>">
<link itemprop="image" href="<?php echo $image; ?>" />
<link itemprop="url" href="<?php echo home_url(); ?>" />

<!-- Ad Sense -->
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-2512797804447154",
    enable_page_level_ads: true
  });
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120963521-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-120963521-1');
</script>
