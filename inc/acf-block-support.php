<?php 

add_action('acf/init', 'my_acf_blocks_init');
function my_acf_blocks_init() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // Home Hero Block
        acf_register_block_type(array(
            'name'              => 'home_hero',
            'title'             => __('Home Hero'),
            'description'       => __('Creates the home hero.'),
            'category'          => 'layout',
            'post_types'        => array('page'),
            'render_template'   => 'template-parts/blocks/home-hero.php',
            'mode'              => 'edit',
            'icon' => array(
                // Specifying a background color to appear with the icon e.g.: in the inserter.
                'background' => '#272D40',
                // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
                'foreground' => '#ffffff',
                // Specifying a dashicon for the block
                'src' => 'block-default',
              ),
            'keywords'          => array( 'hero', 'home' ),
        ));

        // Our Mission
        acf_register_block_type(array(
            'name'              => 'our_mission',
            'title'             => __('Our Mission'),
            'description'       => __('Creates the our mission block'),
            'category'          => 'layout',
            'post_types'        => array('page'),
            'render_template'   => 'template-parts/blocks/our-mission.php',
            'mode'              => 'edit',
            'icon' => array(
                // Specifying a background color to appear with the icon e.g.: in the inserter.
                'background' => '#272D40',
                // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
                'foreground' => '#ffffff',
                // Specifying a dashicon for the block
                'src' => 'block-default',
                ),
            'keywords'          => array( 'hero', 'home' ),
        ));


        // What We Offer
        acf_register_block_type(array(
            'name'              => 'what_we_offer',
            'title'             => __('What We Offer'),
            'description'       => __('Creates the what we offer block'),
            'category'          => 'layout',
            'post_types'        => array('page'),
            'render_template'   => 'template-parts/blocks/what-we-offer.php',
            'mode'              => 'edit',
            'icon' => array(
                // Specifying a background color to appear with the icon e.g.: in the inserter.
                'background' => '#272D40',
                // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
                'foreground' => '#ffffff',
                // Specifying a dashicon for the block
                'src' => 'block-default',
                ),
            'keywords'          => array( 'hero', 'home' ),
        ));

        // Who We Are
        acf_register_block_type(array(
            'name'              => 'who_we_are',
            'title'             => __('Who We Are'),
            'description'       => __('Creates the who we are block'),
            'category'          => 'layout',
            'post_types'        => array('page'),
            'render_template'   => 'template-parts/blocks/who-we-are.php',
            'mode'              => 'edit',
            'icon' => array(
                // Specifying a background color to appear with the icon e.g.: in the inserter.
                'background' => '#272D40',
                // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
                'foreground' => '#ffffff',
                // Specifying a dashicon for the block
                'src' => 'block-default',
                ),
            'keywords'          => array( 'Who we are', 'block' ),
        ));

        // Our Team Block
        acf_register_block_type(array(
            'name'              => 'our_team',
            'title'             => __('Our Team'),
            'description'       => __('Creates the our team block'),
            'category'          => 'layout',
            'post_types'        => array('page'),
            'render_template'   => 'template-parts/blocks/our-team.php',
            'mode'              => 'edit',
            'icon' => array(
                // Specifying a background color to appear with the icon e.g.: in the inserter.
                'background' => '#272D40',
                // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
                'foreground' => '#ffffff',
                // Specifying a dashicon for the block
                'src' => 'block-default',
                ),
            'keywords'          => array( 'Who we are', 'block' ),
        ));

        // Credentials Block
        acf_register_block_type(array(
            'name'              => 'credentials',
            'title'             => __('Credentials'),
            'description'       => __('Creates the credentials block'),
            'category'          => 'layout',
            'post_types'        => array('page'),
            'render_template'   => 'template-parts/blocks/credentials.php',
            'mode'              => 'edit',
            'icon' => array(
                // Specifying a background color to appear with the icon e.g.: in the inserter.
                'background' => '#272D40',
                // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
                'foreground' => '#ffffff',
                // Specifying a dashicon for the block
                'src' => 'block-default',
                ),
            'keywords'          => array( 'Credentials', 'block' ),
        ));

        // Contact Block
        acf_register_block_type(array(
            'name'              => 'contact',
            'title'             => __('Contact'),
            'description'       => __('Creates the contact block'),
            'category'          => 'layout',
            'post_types'        => array('page'),
            'render_template'   => 'template-parts/blocks/contact.php',
            'mode'              => 'edit',
            'icon' => array(
                // Specifying a background color to appear with the icon e.g.: in the inserter.
                'background' => '#272D40',
                // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
                'foreground' => '#ffffff',
                // Specifying a dashicon for the block
                'src' => 'block-default',
                ),
            'keywords'          => array( 'contact', 'block' ),
        ));

        // Page Title Block
        acf_register_block_type(array(
            'name'              => 'page_title',
            'title'             => __('Page Title'),
            'description'       => __('Creates the page title block with an optional background image.'),
            'category'          => 'layout',
            'post_types'        => array('page'),
            'render_template'   => 'template-parts/blocks/page-title.php',
            'mode'              => 'edit',
            'icon' => array(
                // Specifying a background color to appear with the icon e.g.: in the inserter.
                'background' => '#272D40',
                // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
                'foreground' => '#ffffff',
                // Specifying a dashicon for the block
                'src' => 'block-default',
                ),
            'keywords'          => array( 'page', 'title' ),
        ));

        // Service Section Block
        acf_register_block_type(array(
            'name'              => 'service_section',
            'title'             => __('Service Section'),
            'description'       => __('Creates the Service section block.'),
            'category'          => 'layout',
            'post_types'        => array('page'),
            'render_template'   => 'template-parts/blocks/service-section.php',
            'mode'              => 'edit',
            'icon' => array(
                // Specifying a background color to appear with the icon e.g.: in the inserter.
                'background' => '#272D40',
                // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
                'foreground' => '#ffffff',
                // Specifying a dashicon for the block
                'src' => 'block-default',
                ),
            'keywords'          => array( 'service', 'section' ),
        ));

        // Page Title with background image
        acf_register_block_type(array(
            'name'              => 'page_title_with_subtitle',
            'title'             => __('Page title with subtitle'),
            'description'       => __('Creates the page title with a subtitle and an optional background image.'),
            'category'          => 'layout',
            'post_types'        => array('page'),
            'render_template'   => 'template-parts/blocks/page-title-sub.php',
            'mode'              => 'edit',
            'icon' => array(
                // Specifying a background color to appear with the icon e.g.: in the inserter.
                'background' => '#272D40',
                // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
                'foreground' => '#ffffff',
                // Specifying a dashicon for the block
                'src' => 'block-default',
                ),
            'keywords'          => array( 'page', 'title', 'background' ),
        ));

        // Client Grid 
        acf_register_block_type(array(
            'name'              => 'client_logo_grid',
            'title'             => __('Client logo grid'),
            'description'       => __('This block creates a client logo grid that is four across on desktop and two across on mobile.'),
            'category'          => 'layout',
            'post_types'        => array('page'),
            'render_template'   => 'template-parts/blocks/client-logo-grid.php',
            'mode'              => 'edit',
            'icon' => array(
                // Specifying a background color to appear with the icon e.g.: in the inserter.
                'background' => '#272D40',
                // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
                'foreground' => '#ffffff',
                // Specifying a dashicon for the block
                'src' => 'block-default',
                ),
            'keywords'          => array( 'clients', 'grid', 'logos' ),
        ));

    }
}