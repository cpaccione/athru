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
  $text_desktop = get_field('text_area');

?>

  <!-- who we are mobile -->
  <div class="who-we-are">
    <?php if($title): ?>
      <h2><?php echo $title; ?></h2>
    <?php endif; ?>

    <?php if($subtitle): ?>
      <h3><?php echo $subtitle; ?></h3>
    <?php endif; ?>

    <?php if($text_desktop): ?>
      <div>
        <?php echo $text_desktop; ?>
      </div>
    <?php endif; ?>
  </div>

  <!-- who we are desktop -->
  <div class="who-we-are-desktop">
    <div class="col1"></div>
    <div class="col2">
      <img class="ribbon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/ribbon_who_we_are.svg" alt="red ribbon who we are">
      <img class="ribbon reverse" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/blank_red_ribbon.svg" alt="blank red ribbon">
    </div>
    <div class="col3">
      <div class="wrap">
        <?php if($subtitle): ?>
            <h3 data-aos="fade-left"><?php echo $subtitle; ?></h3>
        <?php endif; ?>
        <div class="fade-up">
            <?php if($text_desktop): ?>
                <div>
                    <?php echo $text_desktop; ?>
                </div>
            <?php endif; ?>
        </div>
      </div>
    </div>
    <div class="col4"></div>
  </div>