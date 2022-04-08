<?php
/**
 * athrupartners functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package athrupartners
 */

if ( ! function_exists( 'athrupartners_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function athrupartners_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on athrupartners, use a find and replace
		 * to change 'athrupartners' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'athrupartners', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'athrupartners' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'athrupartners_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'athrupartners_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function athrupartners_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'athrupartners_content_width', 640 );
}
add_action( 'after_setup_theme', 'athrupartners_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function athrupartners_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'athrupartners' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'athrupartners' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'athrupartners_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function athrupartners_scripts() {
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css', '4.1.2', 'all' );
	wp_enqueue_style ('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css', '1.0.1', 'all' );
	//wp_enqueue_style( 'athrupartners-style', get_stylesheet_uri(), [], '0.0.1', 'all');
	wp_enqueue_style ('tailwind', get_template_directory_uri() . '/css/tailwind.css', array(), '0.1.3', 'all' );
	wp_enqueue_style ('main-style', get_template_directory_uri() . '/css/main.css', array(), '3.1.3', 'all' );
	
	//wp_enqueue_style( 'athrupartners-style', get_stylesheet_uri() );

	wp_enqueue_script( 'athrupartners-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), '20151215', true );

	wp_enqueue_script( 'athrupartners-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'aos-js', 'https://unpkg.com/aos@2.3.1/dist/aos.js', '1.0', true );
	wp_enqueue_script( 'font-awesome', 'https://use.fontawesome.com/releases/v5.8.2/js/all.js', true);
	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'athrupartners_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * ACF Block Support
 */
require get_template_directory() . '/inc/acf-block-support.php';

/**
 * ACF Block Support
 */
require get_template_directory() . '/inc/acf-options.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Custom Post Type - Profiles
 */
function custom_post_profiles() {

	$labels = array(
    'name'               => 'Profiles',
    'singular_name'      => 'Profile',
    'add_new'            => 'Add Profile',
    'add_new_item'       => 'Add Profile',
    'edit_item'          => 'Edit Profile',
    'new_item'           => 'New Profile',
    'all_items'          => 'All profiles',
    'view_item'          => 'View profile',
    'search_items'       => 'Search profiles',
    'not_found'          => 'No items found',
    'not_found_in_trash' => 'No items found in trash',
    'parent_item_colon'  => 'Parent Profile'
  );

	$args = array(
	'labels'        => $labels,
    'public'        => true,
    'has_archive'   => true,
    'publicly_queryable' => true,
	'menu_icon' => 'dashicons-businessman',
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'supports'      => array( 'title', 'editor', 'thumbnail' ),
    //'taxonomies' => array('category', 'post_tag'),
    'menu_position' => 5,
    'exclude_from_search' => false,
		'show_in_rest' => true
    );
	register_post_type( 'profiles', $args);
}
add_action( 'init', 'custom_post_profiles' );

// Custom Taxonomies for Profiles
add_action( 'init', 'create_title_taxonomies', 0);

function create_title_taxonomies() {
	$labels = array(
		'name' => _x( 'Titles', 'taxonomy general name', 'textdomain' ),
		'singular_name' => _x( 'Title', 'taxonomy singular name', 'textdomain' ),
		'search_items' => __('Search Titles', 'textdomain' ),
		'all_items' => __('All Titles', 'textdomain'),
		'parent_item' => __('Parent Title', 'textdomain'),
		'parent_item_colon' => __('Parent Title:', 'textdomain'),
		'edit_item' => __('Edit Title', 'textdomain'),
		'update_item' => __('Update Title', 'textdomain'),
		'add_new_item' => __('Add New Title', 'textdomain'),
		'new_item_name' => __('New Title Name', 'textdomain'),
		'menu_name' => __('Title', 'textdomain'),
	);

	$args = array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'title'),
	);

	register_taxonomy( 'title', array('profiles'), $args );
}