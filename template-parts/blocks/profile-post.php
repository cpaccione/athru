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

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
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
        <div class="col-span-1">
            
            <!-- <div class="img-wrap">
                <div class="profile-image"> -->
                    <!-- <div class="profile-wrap"> -->
                    <?php the_post_thumbnail( 'post-thumbnail', ['class' => 'profile'] ); ?>
                    <p class="text-lg pt-4 text-white sm:text-blue"><?php the_title(); ?></p>
                    <p class="text-lg font-bold text-white sm:text-blue-2 mb-4"><?php the_field('title', get_the_id() ); ?></p>
                    <!-- </div> -->
                <!-- </div>
            </div>
         -->
        </div>
        </a>

        <?php endwhile; endif; wp_reset_query(); ?>
        </div>

    </div>
</div>