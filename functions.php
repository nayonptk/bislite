<?php
/**
 * bislite functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bislite
 */

if ( ! function_exists( 'bislite_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function bislite_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on bislite, use a find and replace
		 * to change 'bislite' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'bislite', get_template_directory() . '/languages' );

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
			'main-menu' => esc_html__( 'main-menu', 'bislite' ),
		) );	
			register_nav_menus( array(
			'explore-menu' => esc_html__( 'explore-menu', 'bislite' ),
		) );	
			register_nav_menus( array(
			'browser-menu' => esc_html__( 'browser-menu', 'bislite' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */


		register_post_type('service-post',array(
			$Bislites =  array(
				'name'	=> 'service-post',
				'singular_name'	=> 'fornt page service',
				'add_new'	=> 'add page service',
				'add_new_item'	=> 'add new service',
				'view_item'	=> 'view service',
			),
			'public' => true,
			'labels'	=>	$Bislites,
			'menu_icon' => 'dashicons-welcome-learn-more',
			'supports'           => array( 'title','editor', 'custom-fields','thumbnail','comments')
		));










		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'bislite_custom_background_args', array(
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
add_action( 'after_setup_theme', 'bislite_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bislite_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'bislite_content_width', 640 );
}
add_action( 'after_setup_theme', 'bislite_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bislite_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'bislite' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'bislite' ),
	) );

		register_sidebar( array(
		'name'          => esc_html__( 'footer-browser', 'bislite' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here.', 'bislite' ),
	) );
}






add_action( 'widgets_init', 'bislite_widgets_init' );

/**
 * Enqueue scripts and styles.
 */


function bislite_scripts() {
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/inc/bootstrap.min.css' );
	wp_enqueue_style( 'bislite-fontawesome','https://use.fontawesome.com/releases/v5.6.3/css/all.css');
	wp_enqueue_style( 'bislite-googlefont','<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,700i,900" rel="stylesheet">');
	wp_enqueue_style( 'carousel-css', get_template_directory_uri() . '/inc/owl.carousel.min.css' );
	wp_enqueue_style( 'bislite-custom-stylesheet', get_template_directory_uri() . '/inc/custom.css' );
	wp_enqueue_style( 'bislite-style', get_stylesheet_uri() );

	wp_enqueue_script( 'bislite-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'),1.0, true );
	wp_enqueue_script('carousel-js', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'),1.0, true );
	wp_enqueue_script( 'bislite-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script( 'bislite-js', get_template_directory_uri() . '/js/bislite.js', array('jquery'),1.0, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}


add_action( 'wp_enqueue_scripts', 'bislite_scripts' );

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



require get_template_directory() . '/redux/ReduxCore/framework.php';

require get_template_directory() . '/redux/sample/sample-config.php';










/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

