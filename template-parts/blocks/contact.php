<?php

  /**
   * Contact Block
   *
   * @param   array $block The block settings and attributes.
   * @param   string $content The block inner HTML (empty).
   * @param   bool $is_preview True during AJAX preview.
   * @param   (int|string) $post_id The post ID this block is saved to.
   */

    // Create id attribute allowing for custom "anchor" value.
    $id = 'contact-' . $block['id'];
    if( !empty($block['anchor']) ) {
        $id = $block['anchor'];
    }

    // Create class attribute allowing for custom "className" and "align" values.
    $className = 'contact';
    if( !empty($block['className']) ) {
        $className .= ' ' . $block['className'];
    }
    if( !empty($block['align']) ) {
        $className .= ' align' . $block['align'];
    }

    $contact_title = get_field('contact_title');
    $shortcode = get_field('shortcode');
?>


<!-- contact -->
<div id="contact" class="<?php echo esc_attr($className); ?>">
    <div class="col1"></div>
    <div class="col2">
        <img class="ribbon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/contact_ribbon.svg" alt="Contact Us">
        <img class="ribbon reverse" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/blank_red_ribbon.svg" alt="blank red ribbon">
    </div>
    <div class="col3">
        <div class="contact-form">
            <?php
            
                if($contact_title):
                
                    echo '<h3>';
                        echo $contact_title;
                    echo '</h3>';

                endif; 

                if (get_field('shortcode') ) {
                    echo do_shortcode( get_field('shortcode') );
                }
            
            ?>
        </div>
    </div>
    <div class="col4"></div>
</div>