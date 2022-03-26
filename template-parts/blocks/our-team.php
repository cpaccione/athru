<?php

  /**
   * Our Team Block
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
                <?php if($subtitle): ?>
                    <h3 data-aos="fade-right"><?php echo $subtitle; ?></h3>
                <?php endif; ?>

                <?php if($text): ?>
                    <div data-aos="fade-up">
                        <?php echo $text; ?>
                    </div>
                <?php endif; ?>

                <?php if($link): ?>
                    <div class="button-container">
                        <a class="main-button" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
                    </div>
                <?php endif; ?>
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
        <?php if($title): ?>
            <h2><?php echo $title; ?></h2>
        <?php endif; ?>
        <?php if($subtitle): ?>
            <h3><?php echo $subtitle; ?></h3>
        <?php endif; ?>
        <?php if($text): ?>
            <div>
                <?php echo $text; ?>
            </div>
        <?php endif; ?>
        <?php if($link): ?>
            <div class="button-container">
                <a class="main-button" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
            </div>
        <?php endif; ?>
    </div>