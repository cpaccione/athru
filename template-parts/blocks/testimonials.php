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
    <div class="max-w-7xl px-8 mx-auto grid md:gap-y-24 gap-x-6 md:grid-cols-2 lg:grid-cols-5 my-36">
        <?php while( have_rows('testimonial_repeater') ): the_row();
        
            $first_name = get_sub_field('first_name');
            $last_name = get_sub_field('last_name');
            $job_title = get_sub_field('job_title');
            $company = get_sub_field('company');
            $testimonial = get_sub_field('testimonial');
          
        ?>

            <div class="lg:col-span-2 bg-tan text-blue-2 font-display relative md:min-h-[386px]">
                <div class="mx-auto md:w-96 md:flex">
                    <div class="hidden md:block">
                        <svg class="-mt-8" xmlns="http://www.w3.org/2000/svg" width="80" height="262.434" viewBox="0 0 80 262.434">
                            <path id="Path_47" data-name="Path 47" d="M0,29.566,80,50.38V292H0Z" transform="translate(0 -29.566)" fill="#d11d2b"/>
                        </svg>
                        <svg class="absolute -bottom-12 -z-10 hidden sm:block" xmlns="http://www.w3.org/2000/svg" width="80" height="320.434" viewBox="0 0 80 320.434">
                            <path id="Path_48" data-name="Path 48" d="M0,29.566,80,54.98V350H0Z" transform="translate(80 350) rotate(180)" fill="#d11d2b"/>
	                    </svg>
                    </div>
                    <div class="md:flex flex-col justify-end md:pl-4 px-8 md:px-0 py-8 md:py-0">
                    <h2 class="text-3xl"><?php echo $first_name; ?></h2>
                    <h2 class="text-3xl"><?php echo $last_name; ?></h2>
                    <h3 class="text-2xl"><?php echo $job_title; ?></h3>
                    <p class="text-2xl font-display"><?php echo $company; ?></p>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-3 bg-blue-2 text-white py-10 px-8 mb-12 md:mb-0">
                <div class="text-lg py-10 px-8 border border-white relative md:min-h-[386px] flex items-center">
                    <div class="absolute -top-3.5 bg-blue-2 w-24">
                        <img class="mx-auto" src="<?php echo get_template_directory_uri(); ?>/images/quote-icon.svg" alt="Quote icon">
                    </div>
                    <div>
                        <?php echo $testimonial; ?>
                    </div>
                </div>
            </div>

        <?php endwhile; ?>
    </div>
<?php endif; ?>

</div>