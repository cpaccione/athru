<?php get_header(); ?>

<div class="container">
    <div class="profile pt-12 md:pt-0">

        <div class="p-header">

            <div class="name">
                <p>who we are</p>
                <?php the_title('<h1 data-aos="fade-left">', '</h1>'); ?>
            </div>
            <div class="profile-image">
                <p class="mobile-p">who we are</p>  
                <?php the_post_thumbnail(); ?>
            </div>

        </div>

        <div class="p-content">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <h2><?php the_field('title'); ?></h2>
                <p><?php the_content(); ?></p>


                <?php endwhile; else: ?>

                <p>This is somewhat embarrassing, isn't it?</p>
                <p>It looks like nothing was found at this location.</p>

            <?php endif; ?>

        </div>

    </div>

    <div class="team-wrap">
        <h2 class="team-title">Meet the Team</h2>

    <div class="team">

        <?php
        
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

                $image = get_field('rollover_image');

                if( !empty($image) ): ?>                    
                
                    <img class="profile-o" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt']; ?>">

                <?php endif; ?>


                <?php the_title('<p class="title-o">', '</p>'); ?>
                </div>
            </div>
            </div>
        
        </div>
        </a>

        <?php endwhile; endif; wp_reset_postdata(); ?>

    </div>
        </div>

</div>

<!-- contact -->
<div id="contact" class="contact">
    <div class="col1"></div>
    <div class="col2">
        <img class="ribbon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/contact_ribbon.svg" alt="Contact Us">
        <img class="ribbon reverse" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/blank_red_ribbon.svg" alt="blank red ribbon">
    </div>
    <div class="col3">
        <div class="contact-form">
            <?php

                $contact_title = get_field('profile_single_view_contact_form_title', 'option');
                $contact_shortcode = get_field('profile_single_view_contact_form_shortcode', 'option');

            ?>

            <?php if($contact_title): ?>
                <h3><?php echo $contact_title; ?></h3>
            <?php endif; ?>

            <?php

                if ($contact_shortcode) {
                        echo do_shortcode( $contact_shortcode );
                }

            ?>
        </div>
    </div>
    <div class="col4"></div>
</div>

<?php get_footer(); ?>
