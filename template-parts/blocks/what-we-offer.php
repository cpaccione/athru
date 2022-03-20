<?php

  /**
   * Full Screen Hero Block Template.
   *
   * @param   array $block The block settings and attributes.
   * @param   string $content The block inner HTML (empty).
   * @param   bool $is_preview True during AJAX preview.
   * @param   (int|string) $post_id The post ID this block is saved to.
   */

  // Create id attribute allowing for custom "anchor" value.
  $id = 'what-we-offer-' . $block['id'];
  if( !empty($block['anchor']) ) {
      $id = $block['anchor'];
  }

  // Create class attribute allowing for custom "className" and "align" values.
  $className = 'what-we-offer';
  if( !empty($block['className']) ) {
      $className .= ' ' . $block['className'];
  }
  if( !empty($block['align']) ) {
      $className .= ' align' . $block['align'];
  }

?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> what-we-offer-mobile">
    <h2>what we offer</h2>
    <h3>what can Athru do for you?</h3>
    <p>We are a leading advisor to independent marketing services and tech business companies, who want to maximize their value and capitalize on greater returns with special focus on companies considering either an acquisition or sale transaction.</p>
    <div class="mission-attributes">
      <div class="mission-list">
        <div class="mission-wrap">
          <div data-aos="fade-right" class="icon">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon_one.svg">
          </div>
          <div data-aos="fade-right" class="copy">
            <span>optimize performance</span>
          </div>
          <div data-aos="fade-right" class="icon">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon_two.svg">
          </div>
          <div data-aos="fade-right" class="copy">
            <span>accelerate growth</span>
          </div>
          <div data-aos="fade-right" class="icon">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon_three.svg">
          </div>
          <div data-aos="fade-right" class="copy">
            <span>maximize value</span>
          </div>
        </div>
      </div>
    </div>
    <div class="button-container">
      <a class="main-button" href="<?php the_field('what_we_offer_button'); ?>">view offerings</a>
    </div>
  </div>

  <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> what-we-offer-desktop">
    <div class="col1"></div>
    <div class="col2">
      <div class="wrap">
        <h3 data-aos="fade-right">what can athru do for you?</h3>
        <p data-aos="fade-up">We are a leading advisor to independent marketing services and tech business companies, who want to maximize their value and capitalize on greater returns with special focus on companies considering either an acquisition or sale transaction.</p>
        <div class="mission-attributes-desktop">
          <div class="mission-list">
            <div class="mission-wrap">
              <div data-aos="fade-right" class="icon">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon_one.svg">
              </div>
              <div data-aos="fade-right" class="copy">
                <span>optimize performance</span>
              </div>
              <div data-aos="fade-right" class="icon">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon_two.svg">
              </div>
              <div data-aos="fade-right" class="copy">
                <span>accelerate growth</span>
              </div>
              <div data-aos="fade-right" class="icon">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon_three.svg">
              </div>
              <div data-aos="fade-right" class="copy">
                <span>maximize value</span>
              </div>
            </div>
          </div>
          <div class="offerings">
            <div class="button-container">
              <a class="main-button" href="<?php the_field('what_we_offer_button'); ?>">view offerings</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col3">
    <img class="ribbon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/ribbon_what_we_offer.svg" alt="red ribbon what we offer">
    <img class="ribbon reverse" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/blank_red_ribbon.svg" alt="blank red ribbon">
    </div>
    <div class="col4"></div>
  </div>