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
  $id = 'page-title-' . $block['id'];
  if( !empty($block['anchor']) ) {
      $id = $block['anchor'];
  }

  // Create class attribute allowing for custom "className" and "align" values.
  $className = 'page-title';
  if( !empty($block['className']) ) {
      $className .= ' ' . $block['className'];
  }

?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="max-w-5xl px-4 mx-auto">
        <div class="flex items-center h-80 max-w-lg">
            <div class="wrap text-white">
                <h1 class="text-5xl md:text-7xl border-l-2 border-white pl-3 mb-6" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="600"><?php the_field('title'); ?></h1>
                <p class="text-xl"><?php the_field('subtitle'); ?></p>
            </div>
        </div>
    </div>
</div>
