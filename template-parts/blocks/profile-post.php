<?php

  /**
   * Team Post Block
   *
   * @param   array $block The block settings and attributes.
   * @param   string $content The block inner HTML (empty).
   * @param   bool $is_preview True during AJAX preview.
   * @param   (int|string) $post_id The post ID this block is saved to.
   */

  // Create id attribute allowing for custom "anchor" value.
  $id = 'profile-post-' . $block['id'];
  if( !empty($block['anchor']) ) {
      $id = $block['anchor'];
  }

  // Create class attribute allowing for custom "className" and "align" values.
  $className = 'profile-post';
  if( !empty($block['className']) ) {
      $className .= ' ' . $block['className'];
  }

?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> container">

    <div class="team-wrap">
        <h2 class="team-title">Meet the Team</h2>

    <div class="team">
        <?php
            global $post;

            $args = array(
                'post_type' => 'profiles',
                'orderby' => 'name',
                'order' => 'ASC'
            );

            $query = new WP_Query( $args );
        
        ?>

        <?php if( $query->have_posts() ): while( $query->have_posts() ): $query->the_post(); ?>

        <a href="<?php the_permalink(); ?>">
        <div class="col">
            
            <div class="img-wrap">

                

            <div class="profile-image">
                <div class="profile-wrap">
                <?php the_post_thumbnail( 'post-thumbnail', ['class' => 'profile'] ); ?>
                <p class="title" class="position"><?php the_field('title'); ?></p>
                </div>
            </div>

            <div class="overlay">
                <div class="profile-wrap-overlay">

                <?php 

                $image = get_field('rollover_image', $post->ID );

                if( !empty($image) ): ?>                    
                
                    <img class="profile-o" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt']; ?>">

                <?php endif; ?>


                <?php the_title('<p class="title-o">', '</p>'); ?>
                </div>
            </div>
            </div>
        
        </div>
        </a>

        <?php endwhile; endif; wp_reset_query(); ?>
        </div>

    </div>
</div>