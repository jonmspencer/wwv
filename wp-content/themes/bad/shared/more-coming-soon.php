<section class="more-coming-soon">
  <div class="mini-wrap center">
    <?php
      get_template_part("shared/modules/logo");
      echo wpautop(get_post_meta( get_the_ID(), 'home_contact_callout_content', true ));
      gravity_form(2, true, true, false, '', true, 12);
    ?>
    <p class="contact-details">
      Email : <a href="mailto:<?php echo(encode_email('info@covectr.com')); ?>"><?php echo(encode_email('info@covectr.com')); ?></a> • Phone : <a href="tel:567-343-1405">(567) 343-1405</a>
    </p>
  </div>
</section>
