<div class="wrap video-layout">
  <?php include(locate_template("shared/video/player.php")); ?>
  <div class="video-layout-content">
    <div class="video-layout-overview">
      <h1><?php the_title(); ?></h1>
      <div class="meta">
        <span class="meta-group">
          <span class="meta-title">
            Posted:
          </span>
          <span class="entry-date meta-value">
            <?php echo get_the_date(); ?>
          </span>
        </span>
        <span class="meta-group">
          <span class="meta-title">
            Filed Under:
          </span>
          <span class="entry-categories meta-value">
            <?php render_taxonomy_list(); ?>
          </span>
        </span>
      </div>
    </div><!-- End video-layout-content-->
    <div class="video-layout-detail">
      <div class="video-layout-content content">
        <?php the_content(); ?>
      </div>
      <div class="video-layout-related">

      </div><!-- End video-layout-related -->
    </div><!-- End video-layout-detail -->
  </div><!-- End video-layout-content -->
</div><!-- End video-layout -->
