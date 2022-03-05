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
          <form action="https://getform.io/f/766d78d5-cadb-4559-b6b0-f569f82d3b81" target="blank" method="POST">
            <div class="input-wrap">
              <input class="firstname" type="text" name="firstname" placeholder="First Name*" required>
              <input class="lastname" type="text" name="lastname" placeholder="Last Name*" required>
            </div>
            <div class="company-phone">
              <input class="company" type="text" name="company" placeholder="Company">
              <input class="phone" type="tel" name="phone" placeholder="Phone Number">
            </div>
            <div class="email-wrap">
              <input class="email-input" type="email" name="email" placeholder="Email Address*" required>
            </div>
            <div class="text-wrap">
              <textarea id="textarea" name="message" rows="8" cols="80" placeholder="Message"></textarea>
            </div>
            <button class="form-button" type="submit">submit</button>
          </form>
        </div>
    </div>
    <div class="col4"></div>
</div>


<?php get_footer(); ?>