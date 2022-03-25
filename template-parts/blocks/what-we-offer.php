<?php

  /**
   * What We Offer Block Template
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

  $title = get_field('title');
  $sub = get_field('subtitle');
  $text = get_field('text_area');
  $link = get_field('cta_link');

?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> what-we-offer-mobile">
    <?php if ($title): ?>
      <h2><?php echo $title; ?></h2>
    <?php endif; ?>
    <?php if ($sub): ?>
      <h3><?php echo $sub; ?></h3>
    <?php endif; ?>
    <?php if ($text): ?>
      <p><?php echo $text; ?></p>
    <?php endif; ?>

    <?php if( have_rows('mission_list_repeater') ): ?>
    <div class="mission-attributes">
      <div class="mission-list">
        <div class="mission-wrap">
          <?php while( have_rows('mission_list_repeater') ): the_row();
          
          $icon = get_sub_field('icon');
          $icon_text = get_sub_field('icon_text');
          
          ?>

            <div data-aos="fade-right" class="icon">
                <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
            </div>
            <div data-aos="fade-right" class="copy">
                <span><?php echo $icon_text; ?></span>
            </div>

          <?php endwhile; ?>
        </div>
      </div>
    </div>
    <?php endif; ?>

    <div class="button-container">
      <?php if($link): ?>
        <a class="main-button" target="<?php echo $link['target']; ?>" href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
      <?php endif; ?>
    </div>
  </div>

  <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> what-we-offer-desktop">
    <div class="col1"></div>
    <div class="col2">
      <div class="wrap">
        <?php if ($sub): ?>
          <h3 data-aos="fade-right"><?php echo $sub; ?></h3>
        <?php endif; ?>
        <?php if ($text): ?>
          <p data-aos="fade-up"><?php echo $text; ?></p>
        <?php endif; ?>
        <div class="mission-attributes-desktop">
          <div class="mission-list">
            <div class="mission-wrap">
              
            <?php while( have_rows('mission_list_repeater') ): the_row();
          
          $icon = get_sub_field('icon');
          $icon_text = get_sub_field('icon_text');
          
          ?>

            <div data-aos="fade-right" class="icon">
                <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
            </div>
            <div data-aos="fade-right" class="copy">
                <span><?php echo $icon_text; ?></span>
            </div>

          <?php endwhile; ?>
          
            </div>
          </div>
          <div class="offerings">
            <div class="button-container">
                <?php if($link): ?>
                  <a class="main-button" target="<?php echo $link['target']; ?>" href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
                <?php endif; ?>
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