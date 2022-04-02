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
  $id = 'page-title-sub-' . $block['id'];
  if( !empty($block['anchor']) ) {
      $id = $block['anchor'];
  }

  // Create class attribute allowing for custom "className" and "align" values.
  $className = 'page-title-sub';
  if( !empty($block['className']) ) {
      $className .= ' ' . $block['className'];
  }

  $title = get_field('title');
  $subtitle = get_field('subtitle');
  $bg = get_field('background-image');

?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> bg-center bg-no-repeat bg-cover" style="background-image: url('<?php echo $bg['url']; ?>);">
    <div class="max-w-5xl px-4 mx-auto flex items-end h-[500px]">
        <!-- hero -->
        <div class="text-white font-display mb-12">
            <?php if($title): ?>
                <h1 class="border-l-4 border-white pl-3 text-5xl lg:text-7xl mb-6" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="600"><?php echo $title; ?></h2>
            <?php endif; ?>

            <?php if($subtitle): ?>
                <p class="text-xl max-w-3xl mb-8"><?php echo $subtitle; ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>
