<?php

  /**
   * Our Mission Block Template
   *
   * @param   array $block The block settings and attributes.
   * @param   string $content The block inner HTML (empty).
   * @param   bool $is_preview True during AJAX preview.
   * @param   (int|string) $post_id The post ID this block is saved to.
   */

  // Create id attribute allowing for custom "anchor" value.
  $id = 'our-mission-' . $block['id'];
  if( !empty($block['anchor']) ) {
      $id = $block['anchor'];
  }

  // Create class attribute allowing for custom "className" and "align" values.
  $className = 'our-mission';
  if( !empty($block['className']) ) {
      $className .= ' ' . $block['className'];
  }
  if( !empty($block['align']) ) {
      $className .= ' align' . $block['align'];
  }

$title = get_field('title');
$sub = get_field('subtitle');
$text = get_field('text_area');

?>
    <!-- our mission mobile -->
    <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> our-mission-mobile">
      <h2><?php echo $title; ?></h2>
      <h3 data-aos="fade-right"><?php echo $sub; ?></h3>
      <p data-aos="fade-up"><?php echo $text; ?></p>
    </div>

    <!-- our mission desktop -->
    <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> our-mission-desktop">
      <div class="col1"></div>
      <div class="col2">
        <img class="ribbon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/ribbon_our_mission.svg" alt="red ribbon our mission">
        <img class="ribbon reverse" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/blank_red_ribbon.svg" alt="blank red ribbon">
      </div>
      <div class="col3">
        <div class="wrap">
          <h3 data-aos="fade-right"><?php echo $sub; ?></h3>
          <p data-aos="fade-up"><?php echo $text; ?></p>
        </div>
      </div>
      <div class="col4"></div>
    </div>

