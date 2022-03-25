<?php

  /**
   * Who We Are Block Template
   *
   * @param   array $block The block settings and attributes.
   * @param   string $content The block inner HTML (empty).
   * @param   bool $is_preview True during AJAX preview.
   * @param   (int|string) $post_id The post ID this block is saved to.
   */

  // Create id attribute allowing for custom "anchor" value.
  $id = 'who-we-are-' . $block['id'];
  if( !empty($block['anchor']) ) {
      $id = $block['anchor'];
  }

  // Create class attribute allowing for custom "className" and "align" values.
  $className = 'who-we-are';
  if( !empty($block['className']) ) {
      $className .= ' ' . $block['className'];
  }
  if( !empty($block['align']) ) {
      $className .= ' align' . $block['align'];
  }

  $title = get_field('title');
  $subtitle = get_field('subtitle');
  $text_mobile = get_field('text_mobile');
  $text_desktop = get_field('text_desktop');

?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <!-- who we are mobile -->
    <div class="who-we-are">
        <?php if($title): ?>
            <h2><?php echo $title; ?></h2>
        <?php endif; ?>

        <?php if($subtitle): ?>
            <h2><?php echo $subtitle; ?>
        <?php endif; ?>

        <?php if($text_mobile): ?>

            <div>
                <?php echo $text_mobile; ?>
            </div>

        <?php endif; ?>
    <p>Athru Strategic Advisory capabilities and services is enhanced through our Cooperation Agreement with leading, Investment Bank, <a style="color: #434E6E; text-decoration: underline;" href="https://resultsig.com/" target="_blank">Results International</a> which serves the Global Marketing, Technology and Healthcare sectors through offices in New York, London, Tokyo and Singapore.</p>
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
        <h3 data-aos="fade-left">Strategic Advice Supported By Investment Bank Expertise And Connectivity.</h3>
        <p data-aos="fade-up">Athru Strategic Advisory capabilities and services are enhanced through our working partnerships with several leading investment banks.</p>
      </div>
    </div>
    <div class="col4"></div>
  </div>
</div>