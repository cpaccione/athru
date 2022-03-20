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
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="wrap">
        <h1 data-aos="fade-right" data-aos-duration="1000" data-aos-delay="0"><?php echo $title; ?></h1>

        <?php
        
            if(have_rows('list_repeater') ):

                echo '<ul data-aos="fade-left" data-aos-duration="1000" data-aos-delay="600">';
                
                    while( have_rows('list_repeater') ): the_row();

                    $list_item = get_sub_field('text');

                        echo '<li>' . $list_item . '</li>';

                    endwhile;

                echo '</ul>';
            endif; 
    
        ?>
        
    </div>
</div>

