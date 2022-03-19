<?php 

add_action('acf/init', 'my_acf_blocks_init');
function my_acf_blocks_init() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // Register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'home_hero',
            'title'             => __('Home Hero'),
            'description'       => __('This block creates the home hero.'),
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
    }
}