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

<style>
    .testimonials {
        min-height: 368px;
    }

    .testimonials__source-column {
        display: flex;
        align-items: center;
    }

    .testimonials__source {
        width: 370px;
        margin-inline: auto;
    }
</style>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">

<?php if( have_rows('testimonial_repeater') ): ?>
    <div class="max-w-7xl px-8 mx-auto grid gap-y-24 gap-x-6 md:grid-cols-5">
        <?php while( have_rows('testimonial_repeater') ): the_row();
        
            $first_name = get_sub_field('first_name');
            $last_name = get_sub_field('last_name');
            $job_title = get_sub_field('job_title');
            $company = get_sub_field('company');
            $testimonial = get_sub_field('testimonial');
          
        ?>

            <div class="md:col-span-2 bg-tan text-blue-2 font-display testimonials__source-column">
                <div class="testimonials__source">
                    <h2 class="text-3xl"><?php echo $first_name; ?></h2>
                    <h2 class="text-3xl"><?php echo $last_name; ?></h2>
                    <h3 class="text-2xl"><?php echo $job_title; ?></h3>
                    <p class="text-2xl font-display"><?php echo $company; ?></p>
                </div>
            </div>
            <div class="md:col-span-3 bg-blue-2 text-white py-10 px-8">
                <div class="text-lg py-10 px-8 border border-white">
                    <?php echo $testimonial; ?>
                </div>
            </div>

        <?php endwhile; ?>
    </div>
<?php endif; ?>

</div>