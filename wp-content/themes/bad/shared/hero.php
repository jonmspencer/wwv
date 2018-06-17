<section class="hero center">
  <div class="mini-wrap">
    <span class="surheading">
      <?php
        if(isset($surheading)) {
          echo $surheading;
        }
      ?>
    </span>
    <h1>
      <?php
        if(isset($heading)) {
          echo $heading;
        } else {
          the_title();
        }
      ?>
    </h1>
    <?php
      if(isset($hero_content)) {
        echo $hero_content;
      }
    ?>
  </div>
</section>
