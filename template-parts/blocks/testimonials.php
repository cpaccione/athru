<?php

  /**
   * Testimonials Block
   *
   * @param   array $block The block settings and attributes.
   * @param   string $content The block inner HTML (empty).
   * @param   bool $is_preview True during AJAX preview.
   * @param   (int|string) $post_id The post ID this block is saved to.
   */

  // Create id attribute allowing for custom "anchor" value.
  $id = 'testimonials-' . $block['id'];
  if( !empty($block['anchor']) ) {
      $id = $block['anchor'];
  }

  // Create class attribute allowing for custom "className" and "align" values.
  $className = 'testimonials';
  if( !empty($block['className']) ) {
      $className .= ' ' . $block['className'];
  }

?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">

<?php if( have_rows('testimonial_repeater') ): ?>
    <div class="max-w-7xl px-8 mx-auto grid md:grid-cols-5">
        <?php while( have_rows('testimonial_repeater') ): the_row();
        
            $name = get_sub_field('name');
            $job_title = get_sub_field('job_title');
            $company = get_sub_field('company');
            $testimonial = get_sub_field('testimonial');
          
        ?>

            <div class="md:col-span-2 bg-tan text-blue-2">
                <h2><?php echo $name; ?></h2>
                <h3><?php echo $job_title; ?></h3>
                <p><?php echo $company; ?></p>
            </div>
            <div class="md:col-span-3 bg-blue-2 text-white">
                <div class="text-lg">
                    <?php echo $testimonial; ?>
                </div>
            </div>

        <?php endwhile; ?>
    </div>
<?php endif; ?>

</div>