<?php
  // Post Metaboxes
  function add_custom_post_meta() {
    $prefix = 'post_';
    $cmb_post = new_cmb2_box( array(
      'id'            => $prefix . 'metabox',
      'title'         => __( 'Post Meta', 'cmb2' ),
      'object_types'  => array( 'post' ), // Post type
    ) );

    $cmb_post->add_field( array(
      'name' => __( 'YouTube Video ID', 'cmb2' ),
				'desc' => __( 'YouTube Video ID: "b921YazkuCg"', 'cmb2' ),
				'id'   => $prefix . 'youtube_video_id',
				'type' => 'text_medium',
        'attributes'  => array(
       		'placeholder' => 'YouTube Video ID',
       		// 'rows'        => 3,
       		'required'    => 'required',
       	),
    ) );

  }
  add_action( 'cmb2_admin_init', 'add_custom_post_meta' );
?>
