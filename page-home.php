<?php

  /*

  Template Name: Home Page

  */

?>

<?php get_header(); ?>

    <!-- home wrap used for wrapping home template for full screen background image -->
    <div class="home-wrap">

    <!-- hero -->
    <div class="hero">
        <div class="wrap">
        <h1 data-aos="fade-right" data-aos-duration="1000" data-aos-delay="0">Athru Partners</h1>
        <h2 data-aos="fade-left" data-aos-duration="1000" data-aos-delay="600">Growth Advisors.<br>Performance Improvement.<br>M &amp; A Consultants.<br>Exit Planning.</h2>
        <!-- <p>Advising growth through marketing agency advisory services</p> -->
        </div>
    </div>

    <!-- our mission mobile -->
    <div class="our-mission-mobile">
      <h2>Our Mission</h2>
      <h3 data-aos="fade-right">&#147;If you always do what you have always done, you'll probably get what you already got&#148; <span style="white-space: nowrap;">&#8212; Albert Einstein</span></h3>
      <p data-aos="fade-up">Athru helps Founder/Owners of marketing services and tech businesses to accelerate Growth.</p>
    </div>

    <!-- our mission desktop -->
    <div class="our-mission-desktop">
      <div class="col1"></div>
      <div class="col2">
        <img class="ribbon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/ribbon_our_mission.svg" alt="red ribbon our mission">
        <img class="ribbon reverse" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/blank_red_ribbon.svg" alt="blank red ribbon">
      </div>
      <div class="col3">
        <div class="wrap">
          <h3 data-aos="fade-right">&#147;If you always do what you have always done, you'll probably get what you already got&#148; &#8212; Albert Einstein</h3>
          <p data-aos="fade-up">Athru helps Founder/Owners of marketing services and tech businesses to accelerate Growth.</p>
        </div>
      </div>
      <div class="col4"></div>
    </div>

  <div class="what-we-offer-mobile">
    <h2>what we offer</h2>
    <h3>what can Athru do for you?</h3>
    <p>We are a leading advisor to independent marketing services and tech business companies, who want to maximize their value and capitalize on greater returns with special focus on companies considering either an acquisition or sale transaction.</p>
    <div class="mission-attributes">
      <div class="mission-list">
        <div class="mission-wrap">
          <div data-aos="fade-right" class="icon">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon_one.svg">
          </div>
          <div data-aos="fade-right" class="copy">
            <span>optimize performance</span>
          </div>
          <div data-aos="fade-right" class="icon">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon_two.svg">
          </div>
          <div data-aos="fade-right" class="copy">
            <span>accelerate growth</span>
          </div>
          <div data-aos="fade-right" class="icon">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon_three.svg">
          </div>
          <div data-aos="fade-right" class="copy">
            <span>maximize value</span>
          </div>
        </div>
      </div>
    </div>
    <div class="button-container">
      <a class="main-button" href="<?php the_field('what_we_offer_button'); ?>">view offerings</a>
    </div>
  </div>

  <div class="what-we-offer-desktop">
    <div class="col1"></div>
    <div class="col2">
      <div class="wrap">
        <h3 data-aos="fade-right">what can athru do for you?</h3>
        <p data-aos="fade-up">We are a leading advisor to independent marketing services and tech business companies, who want to maximize their value and capitalize on greater returns with special focus on companies considering either an acquisition or sale transaction.</p>
        <div class="mission-attributes-desktop">
          <div class="mission-list">
            <div class="mission-wrap">
              <div data-aos="fade-right" class="icon">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon_one.svg">
              </div>
              <div data-aos="fade-right" class="copy">
                <span>optimize performance</span>
              </div>
              <div data-aos="fade-right" class="icon">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon_two.svg">
              </div>
              <div data-aos="fade-right" class="copy">
                <span>accelerate growth</span>
              </div>
              <div data-aos="fade-right" class="icon">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon_three.svg">
              </div>
              <div data-aos="fade-right" class="copy">
                <span>maximize value</span>
              </div>
            </div>
          </div>
          <div class="offerings">
            <div class="button-container">
              <a class="main-button" href="<?php the_field('what_we_offer_button'); ?>">view offerings</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col3">
    <img class="ribbon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/ribbon_what_we_offer.svg" alt="red ribbon what we offer">
    <img class="ribbon reverse" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/blank_red_ribbon.svg" alt="blank red ribbon">
    </div>
    <div class="col4"></div>
  </div>


  <!-- who we are mobile -->
  <div class="who-we-are">
    <h2>who we are</h2>
    <h3>Strategic Advice Supported By Investment Bank Expertise And Connectivity.</h3>
    <p>Athru Strategic Advisory capabilities and services is enhanced through our Cooperation Agreement with leading, Investment Bank, <a style="color: #434E6E; text-decoration: underline;" href="https://resultsig.com/" target="_blank">Results International</a> which serves the Global Marketing, Technology and Healthcare sectors through offices in New York, London, Tokyo and Singapore.</p>
  </div>

  <!-- who we are desktop -->
  <div class="who-we-are-desktop">
    <div class="col1"></div>
    <div class="col2">
      <img class="ribbon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/ribbon_who_we_are.svg" alt="red ribbon who we are">
      <img class="ribbon reverse" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/blank_red_ribbon.svg" alt="blank red ribbon">
    </div>
    <div class="col3">
      <div class="wrap">
        <h3 data-aos="fade-left">Strategic Advice Supported By Investment Bank Expertise And Connectivity.</h3>
        <p data-aos="fade-up">Athru Strategic Advisory capabilities and services are enhanced through our working partnerships with several leading investment banks.</p>
      </div>
    </div>
    <div class="col4"></div>
  </div>

  <div class="meet-the-team-desktop">
    <div class="col1"></div>
    <div class="col2">
      <div class="wrap">
        <h3 data-aos="fade-right">Experienced advisors For Your Transaction Preparedness and Business Growth Needs</h3>
        <p data-aos="fade-up">Our Partners bring relentless focus and exceptional experience to helping our clients anticipate the risks, obstacles and opportunities that can come from strategic growth or divestiture decisions.</p>
        <div class="button-container">
      <a class="main-button" href="<?php the_field('who_we_are_button'); ?>">meet the team</a>
    </div>
      </div>
    </div>
    <div class="col3">
    <img class="ribbon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/our-team-ribbon.svg" alt="red ribbon what we offer">
    <img class="ribbon reverse" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/blank_red_ribbon.svg" alt="blank red ribbon">
    </div>
    <div class="col4"></div>
  </div>

    <!-- meet the mobile -->
    <div class="meet-the-team">
    <h2>our team</h2>
    <h3>Experienced Advisors For Your Transaction Preparedness and Business Growth Needs</h3>
    <p>Our Partners bring relentless focus and exceptional experience to helping our clients anticipate the risks, obstacles and opportunities that can come from strategic growth or divestiture decisions.</p>
    <div class="button-container">
      <a class="main-button" href="<?php the_field('who_we_are_button'); ?>">meet the team</a>
    </div>
  </div>


<!-- credentials desktop -->
<div class="credentials-desktop">

  <div class="col1"></div>

  <div class="col2">
    <div class="wrap">

      <h3>Athru Partners by the numbers.</h3>

      <!-- info grid -->
      <div class="info-grid">
        <div style="border-top: none; border-left: none; border-bottom: none; border-right: none;" class="col col1">
          <h2 data-aos="flip-up">126</h2>
          <p>Tech and Marketing services firms worked with</p>
        </div>
        <div style="border-top: none; border-bottom: none; border-right: none;" class="col">
          <h2 data-aos="flip-up">3</h2>
          <p>Key categories of focus, Marketing Services, MarTech, and Healthcare</p>
        </div>
        <div style="border-top: none; border-bottom: none; border-right: none;" class="col col3">
          <h2 data-aos="flip-up">350</h2>
          <p>Buyers we work with- PE firms, majority investors, holding companies, family offices, and strategic buyers</p>
        </div>
        <div style="border-left: none; border-bottom: none; border-right: none;" class="col">
          <h2 data-aos="flip-up">140</h2>
          <p>Combined years of experience across our partners.</p>
        </div>
        <div style="border-bottom: none; border-right: none;" class="col">
          <h2 data-aos="flip-up">500</h2>
          <p>Proprietary &amp; secondary research databases we use to cover our key focus categories.</p>
        </div>
        <div style="border-bottom: none; border-right: none;" class="col">
          <p style="visibility: hidden;">Access to both proprietary and extensive secondary research databases covering the marketing services, technology and healthcare sectors.</p>
        </div>
      </div>

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
  <h2>credentials</h2>
  <ul class="credential-list">
    <li><span>126</span> &nbsp;Tech and Marketing services firms worked with</li>
    <li><span>3</span> &nbsp;Key categories of focus, Marketing Services, MarTech, and Healthcare</li>
    <li><span>350</span> &nbsp;Buyers we work with- PE firms, majority investors, holding companies, family offices, and strategic buyers</li>
    <li><span>140</span> &nbsp;Combined years of experience across our partners.</li>
    <li><span>500</span> &nbsp;Proprietary &amp; secondary research databases we use to cover our key focus categories.</li>
  </ul>
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
          <?php echo do_shortcode( '[contact-form-7 id="77" title="Contact form 1"]' ); ?>
        </div>
      </div>
      <div class="col4"></div>

</div>


</div> <!-- home wrap close -->

<?php get_footer(); ?>
