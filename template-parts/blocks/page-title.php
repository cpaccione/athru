<?php

  /**
   * Page Title with background image Block
   *
   * @param   array $block The block settings and attributes.
   * @param   string $content The block inner HTML (empty).
   * @param   bool $is_preview True during AJAX preview.
   * @param   (int|string) $post_id The post ID this block is saved to.
   */

  // Create id attribute allowing for custom "anchor" value.
  $id = 'page-title-' . $block['id'];
  if( !empty($block['anchor']) ) {
      $id = $block['anchor'];
  }

  // Create class attribute allowing for custom "className" and "align" values.
  $className = 'page-title';
  if( !empty($block['className']) ) {
      $className .= ' ' . $block['className'];
  }

  $title = get_field('title');
  $bg = get_field('background_image');

?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> bg-center bg-no-repeat bg-cover" style="background-image: url('<?php echo $bg['url']; ?>);">
    <div class="max-w-5xl px-4 mx-auto flex items-end h-96">
        <!-- hero -->
        <div class="text-white font-display mb-12">
            <?php if($title): ?>
                <h1 class="border-l-4 border-white pl-3 text-5xl lg:text-7xl mb-6" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="600"><?php echo $title; ?></h2>
            <?php endif; ?>
        </div>
    </div>
</div>