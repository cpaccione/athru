<?php

  /**
   * Client logo grid
   *
   * @param   array $block The block settings and attributes.
   * @param   string $content The block inner HTML (empty).
   * @param   bool $is_preview True during AJAX preview.
   * @param   (int|string) $post_id The post ID this block is saved to.
   */

  // Create id attribute allowing for custom "anchor" value.
  $id = 'client-logo-grid-' . $block['id'];
  if( !empty($block['anchor']) ) {
      $id = $block['anchor'];
  }

  // Create class attribute allowing for custom "className" and "align" values.
  $className = 'client-logo-grid';
  if( !empty($block['className']) ) {
      $className .= ' ' . $block['className'];
  }


?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> bg-white">

    <?php if( have_rows('client_logo_grid') ): ?>
        <div class="grid grid-cols-4 gap-x-24 gap-y-12 py-24 max-w-4xl px-4 mx-auto">
            <?php while( have_rows('client_logo_grid') ): the_row();
            
            $logo = get_sub_field('logo');
            
            
            ?>

                <div class="col-span-2 md:col-span-1">
                    <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
                </div>

            <?php endwhile; ?>
        </div>
    <?php endif; ?>

</div>