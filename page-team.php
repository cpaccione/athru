<?php

  /*

  Template Name: Team

  */

?>

<?php get_header(); ?>


<div class="container">
    <!-- hero -->
    <div class="header-team">
        <div class="wrap">
            <h1 data-aos="fade-left" data-aos-duration="1000" data-aos-delay="600">Our Team</h1>
            <p>Our Partners bring relentless focus and exceptional experience to helping our clients anticipate the risks, obstacles and opportunities that can come from strategic growth or divestiture decisions.</p>
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

<!--     <div class="credentials-team">
        <h2>credentials</h2>
        <ul class="credential-list">
            <li>100% Referenceable</li>
            <li>Expertise working with 40+ agencies and over 60 businesses.</li>
            <li>Experience across marketing services, technology and healthcare sectors.</li>
            <li>Access to a broad and deep network of private equity firms, holding companies, majority investors and specialty boutique buyers.</li>
            <li>100-Years of combined experience across our partners.</li>
            <li>Working Agreement with Leading Investment Bank, Results International with offices in the US, Europe and Asia.</li>
            <li>Access to both proprietary and extensive secondary research databases covering the marketing services, technology and healthcare sectors.</li>
        </ul>
    </div> -->
    
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
            <h3>To Get Started With No Obligation, Just Fill Out The Form Below. Athru Will Do The Rest.</h3>
            <?php echo do_shortcode('[contact-form-7 id="81" title="Main Contact Form"]'); ?>
        </div>
    </div>
    <div class="col4"></div>
</div>


<?php get_footer(); ?>