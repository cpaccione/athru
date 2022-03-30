<?php

  /**
   * Page Title Block
   *
   * @param   array $block The block settings and attributes.
   * @param   string $content The block inner HTML (empty).
   * @param   bool $is_preview True during AJAX preview.
   * @param   (int|string) $post_id The post ID this block is saved to.
   */

  // Create id attribute allowing for custom "anchor" value.
  $id = 'page-title-bg-' . $block['id'];
  if( !empty($block['anchor']) ) {
      $id = $block['anchor'];
  }

  // Create class attribute allowing for custom "className" and "align" values.
  $className = 'page-title-bg';
  if( !empty($block['className']) ) {
      $className .= ' ' . $block['className'];
  }

  $title = get_field('title');
  $subtitle = get_field('subtitle');

?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="max-w-6xl px-9">
        <!-- hero -->
        <div class="header-contact">
            <div class="wrap">
                <?php if($title): ?>
                    <h1 data-aos="fade-left" data-aos-duration="1000" data-aos-delay="600"><?php echo $title; ?></h2>
                <?php endif; ?>

                <?php if($subtitle): ?>
                    <p><?php echo $subtitle; ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>