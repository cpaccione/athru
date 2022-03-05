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
          <form action="https://getform.io/f/766d78d5-cadb-4559-b6b0-f569f82d3b81" target="blank" method="POST">
            <div class="input-wrap">
              <input class="firstname" type="text" name="firstname" placeholder="First Name*" required>
              <input class="lastname" type="text" name="lastname" placeholder="Last Name*" required>
            </div>
            <div class="company-phone">
              <input class="company" type="text" name="company" placeholder="Company">
              <input class="phone" type="tel" name="phone" placeholder="Phone Number">
            </div>
            <div class="email-wrap">
              <input class="email-input" type="email" name="email" placeholder="Email Address*" required>
            </div>
            <div class="text-wrap">
              <textarea id="textarea" name="message" rows="8" cols="80" placeholder="Message"></textarea>
            </div>
            <button class="form-button" type="submit">submit</button>
          </form>
        </div>
    </div>
    <div class="col4"></div>
</div>

<?php get_footer(); ?>