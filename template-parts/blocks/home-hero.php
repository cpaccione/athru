<?php

  /**
   * Full Screen Hero Block Template.
   *
   * @param   array $block The block settings and attributes.
   * @param   string $content The block inner HTML (empty).
   * @param   bool $is_preview True during AJAX preview.
   * @param   (int|string) $post_id The post ID this block is saved to.
   */

  // Create id attribute allowing for custom "anchor" value.
  $id = 'hero-' . $block['id'];
  if( !empty($block['anchor']) ) {
      $id = $block['anchor'];
  }

  // Create class attribute allowing for custom "className" and "align" values.
  $className = 'hero';
  if( !empty($block['className']) ) {
      $className .= ' ' . $block['className'];
  }
  if( !empty($block['align']) ) {
      $className .= ' align' . $block['align'];
  }

$title = get_field('title');

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> max-w-6xl mx-auto px-4 py-8 h-96 md:h-[788px] flex items-center">
    <div class="wrap">
        <h1 class="text-2xl sm:text-4xl text-a-tan font-micro font-bold tracking-widest mb-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="0"><?php echo $title; ?></h1>

        <?php
        
            if(have_rows('list_repeater') ):

                echo '<ul class="font-display text-white text-3xl sm:text-5xl md:text-6xl border-l-2 border-white pl-3.5 leading-none mb-4" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="600">';
                
                    while( have_rows('list_repeater') ): the_row();

                    $list_item = get_sub_field('text');

                        echo '<li>' . $list_item . '</li>';

                    endwhile;

                echo '</ul>';
            endif; 
    
        ?>
        
    </div>
</div>

