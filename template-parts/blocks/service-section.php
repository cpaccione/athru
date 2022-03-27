<?php

  /**
   * Service Section Block
   *
   * @param   array $block The block settings and attributes.
   * @param   string $content The block inner HTML (empty).
   * @param   bool $is_preview True during AJAX preview.
   * @param   (int|string) $post_id The post ID this block is saved to.
   */

  // Create id attribute allowing for custom "anchor" value.
  $id = 'service-section-' . $block['id'];
  if( !empty($block['anchor']) ) {
      $id = $block['anchor'];
  }

  // Create class attribute allowing for custom "className" and "align" values.
  $className = 'service-section';
  if( !empty($block['className']) ) {
      $className .= ' ' . $block['className'];
  }

?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="container">
        <div class="services">
            <?php if( have_rows('service_section') ): ?>

                <?php while( have_rows('service_section') ): the_row();
                
                    $s_header = get_sub_field('service_header_title');
                    $s_icon = get_sub_field('service_header_icon');
                    $s_desc = get_sub_field('service_description');
                
                ?>

                    <div class="s-header">
                        <div class="copy">
                            <?php if($s_header): ?>
                                <h2><?php echo $s_header; ?></h2>
                            <?php endif; ?>

                            <?php if($s_desc): ?>
                                <p><?php echo $s_desc; ?></p>
                            <?php endif; ?>
                        </div>
                        <div class="icon">
                            <?php if($s_icon): ?>
                                <img src="<?php echo $s_icon['url']; ?>" alt="<?php echo $s_icon['alt']; ?>">
                            <?php endif; ?>
                        </div>
                    </div>

                    <?php if( have_rows('service_repeater') ): ?>

                        <?php while( have_rows('service_repeater') ): the_row();
                        
                            $service_title = get_sub_field('service_title');
                            $service_icon = get_sub_field('service_icon');
                            $service_description = get_sub_field('service_description');

                        ?>

                            <div class="body-bg">
                                <div class="body">
                                    <div class="icon">
                                        <?php if($service_icon): ?>
                                            <img src="<?php echo $service_icon['url']; ?>" alt="<?php echo $service_icon['alt']; ?>">
                                        <?php endif; ?>
                                    </div>
                                    <div class="main">
                                        <?php if($service_title): ?>
                                            <h3><?php echo $service_title; ?></h3>
                                        <?php endif; ?>
                                        <?php if($service_description): ?>
                                            <p><?php echo $service_description; ?></p>
                                        <?php endif; ?>
                                    </div>
                                
                                </div>
                            </div>

                        <?php endwhile; ?>

                    <?php endif; ?>


                <?php endwhile; ?>

            <?php endif; ?>
        </div>
    </div>
</div>
