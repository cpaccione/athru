<?php

  /**
   * Credentials Block Template
   *
   * @param   array $block The block settings and attributes.
   * @param   string $content The block inner HTML (empty).
   * @param   bool $is_preview True during AJAX preview.
   * @param   (int|string) $post_id The post ID this block is saved to.
   */

  $title = get_field('title');
  $mobile_title = get_field('mobile_title');

?>


<!-- credentials desktop -->
<div class="credentials-desktop">

  <div class="col1"></div>

  <div class="col2">
    <div class="wrap">

        <?php if($title): ?>
            <h3 class="text=blue-2"><?php echo $title; ?></h3>
        <?php endif; ?>



        <?php if( have_rows('credentials_repeater') ): ?>
            <div class="grid grid-cols-3 pt-8 pb-24 gap-x-8">
                <?php while( have_rows('credentials_repeater') ): the_row();
                
                    $number = get_sub_field('number');
                    $text = get_sub_field('text_area');
                
                ?>
                    <div>
                        <h2 class="text-blue-2 text-5xl" data-aos="flip-up"><?php echo $number; ?></h2>
                        <p class="text-blue-3 text-lg"><?php echo $text; ?></p>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>

    </div>
  </div>

  <div class="col3">
    <img class="ribbon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/credentials_ribbon.svg" alt="">
    <img class="ribbon reverse" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/blank_red_ribbon.svg" alt="blank red ribbon">
  </div>

  <div class="col4"></div>

</div>

<!-- credentials mobile -->
<div class="credentials-mobile">
    <?php if($mobile_title): ?>
        <h2><?php echo $mobile_title; ?></h2>
    <?php endif; ?>

    <?php if( have_rows('credentials_repeater') ): ?>
        <ul class="credential-list">
            <?php while( have_rows('credentials_repeater') ): the_row();
            
            $number = get_sub_field('number');
            $text = get_sub_field('text_area');
            
            ?>
                <li><span><?php echo $number; ?></span> &nbsp;<?php echo $text; ?></li>
            <?php endwhile; ?>
        </ul>
    <?php endif; ?>
</div>