<?php

  /*

  Template Name: Contact

  */

?>

<?php get_header(); ?>

<div class="container">
    <!-- hero -->
    <div class="header-contact">
        <div class="wrap">
        <h1 data-aos="fade-left" data-aos-duration="1000" data-aos-delay="600">Contact Us</h2>
        <p>To get started with no obligation, just fill out the form below. Athru will do the rest.</p>
        </div>
    </div>
</div>

<!-- contact -->
<div id="contact" class="contact">
    <div class="col1"></div>
    <div class="col2">
        <img class="ribbon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/contact_ribbon.svg" alt="Contact Us">
        <img class="ribbon reverse" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/blank_red_ribbon.svg" alt="blank red ribbon">
    </div>
    <div class="col3">
        <div class="contact-form">
          <h3>Let's Connect.</h3>
          <?php echo do_shortcode( '[contact-form-7 id="77" title="Contact form 1"]' ); ?>
        </div>
    </div>
    <div class="col4"></div>
</div>

<?php get_footer(); ?>