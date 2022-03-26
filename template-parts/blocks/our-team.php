<?php

  /**
   * Who We Are Block Template
   *
   * @param   array $block The block settings and attributes.
   * @param   string $content The block inner HTML (empty).
   * @param   bool $is_preview True during AJAX preview.
   * @param   (int|string) $post_id The post ID this block is saved to.
   */

  $title = get_field('title');
  $subtitle = get_field('subtitle');
  $text = get_field('text_area');
  $link = get_field('link');

?>

<div class="meet-the-team-desktop">
    <div class="col1"></div>
    <div class="col2">
        <div class="wrap">
            <?php if($title): ?>

                <h3 data-aos="fade-right"><?php echo $title; ?></h3>

            <?php endif; ?>
            <h3 data-aos="fade-right">Experienced advisors For Your Transaction Preparedness and Business Growth Needs</h3>
            <p data-aos="fade-up">Our Partners bring relentless focus and exceptional experience to helping our clients anticipate the risks, obstacles and opportunities that can come from strategic growth or divestiture decisions.</p>
            <div class="button-container">
                <a class="main-button" href="<?php the_field('who_we_are_button'); ?>">meet the team</a>
            </div>
        </div>
    </div>
    <div class="col3">
        <img class="ribbon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/our-team-ribbon.svg" alt="red ribbon what we offer">
        <img class="ribbon reverse" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/blank_red_ribbon.svg" alt="blank red ribbon">
    </div>
    <div class="col4"></div>
  </div>

    <!-- meet the mobile -->
    <div class="meet-the-team">
        <h2>our team</h2>
        <h3>Experienced Advisors For Your Transaction Preparedness and Business Growth Needs</h3>
        <p>Our Partners bring relentless focus and exceptional experience to helping our clients anticipate the risks, obstacles and opportunities that can come from strategic growth or divestiture decisions.</p>
    <div class="button-container">
        <a class="main-button" href="<?php the_field('who_we_are_button'); ?>">meet the team</a>
    </div>
</div>