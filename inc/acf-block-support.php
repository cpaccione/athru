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
                'background' => '#FFB81C',
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
            'description'       => __('Creates the our mission section'),
            'category'          => 'layout',
            'post_types'        => array('page'),
            'render_template'   => 'template-parts/blocks/our-mission.php',
            'mode'              => 'edit',
            'icon' => array(
                // Specifying a background color to appear with the icon e.g.: in the inserter.
                'background' => '#FFB81C',
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
            'description'       => __('Creates the what we offer section'),
            'category'          => 'layout',
            'post_types'        => array('page'),
            'render_template'   => 'template-parts/blocks/what-we-offer.php',
            'mode'              => 'edit',
            'icon' => array(
                // Specifying a background color to appear with the icon e.g.: in the inserter.
                'background' => '#FFB81C',
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
            'description'       => __('Creates the what we offer section'),
            'category'          => 'layout',
            'post_types'        => array('page'),
            'render_template'   => 'template-parts/blocks/who-we-are.php',
            'mode'              => 'edit',
            'icon' => array(
                // Specifying a background color to appear with the icon e.g.: in the inserter.
                'background' => '#FFB81C',
                // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
                'foreground' => '#ffffff',
                // Specifying a dashicon for the block
                'src' => 'block-default',
                ),
            'keywords'          => array( 'Who we are', 'block' ),
        ));

    }
}