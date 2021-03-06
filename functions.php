<?php
/**
 * Zabszolut functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Zabszolut
 */

if ( ! function_exists( 'zabszolut_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function zabszolut_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Zabszolut, use a find and replace
		 * to change 'zabszolut' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'zabszolut', get_template_directory() . '/languages' );

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

		add_image_size( 'event-thumb', 225, 200, TRUE);
		add_image_size( 'product-thumb', 432, 660, FALSE);
		add_image_size( 'recipe-thumb', 404, 400, TRUE);
		add_image_size( 'big-recipe', 500, 500, TRUE);

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'zabszolut' ),
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
		add_theme_support( 'custom-background', apply_filters( 'zabszolut_custom_background_args', array(
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
add_action( 'after_setup_theme', 'zabszolut_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function zabszolut_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'zabszolut_content_width', 640 );
}
add_action( 'after_setup_theme', 'zabszolut_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function zabszolut_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'zabszolut' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'zabszolut' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'zabszolut_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function zabszolut_scripts() {

	wp_enqueue_style( 'zabszolut-style', get_stylesheet_uri() );

	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/animate.css' );

	wp_enqueue_script( 'zabszolut-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'zabszolut-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'zabszolut-slick', get_template_directory_uri() . '/js/slick.min.js', array(), '', true );

	wp_enqueue_script( 'wow', get_template_directory_uri() . '/js/wow.min.js', array(), '', true );

	wp_enqueue_script( 'zabszolut-main-js', get_template_directory_uri() . '/js/main.js', array(), '', true );

}
add_action( 'wp_enqueue_scripts', 'zabszolut_scripts' );

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
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// Nav walker
require_once('navwalker.php');
register_nav_menus( array(
	 'primary' => __( 'Primary Menu', 'menuname' ),
	 'secondary' => __( 'Footer Menu', 'menuname' ),
	 'bottom' => __( 'Bottom Footer Menu', 'menuname' )
) );

// Remove auto p
remove_filter( 'the_excerpt', 'wpautop' );

// Post excerpt length, more link
function get_excerpt(){
	$excerpt = get_the_content();
	$excerpt = preg_replace(" ([.*?])",'',$excerpt);
	$excerpt = strip_shortcodes($excerpt);
	$excerpt = strip_tags($excerpt);
	$excerpt = substr($excerpt, 0, 120);
	$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
	$excerpt = $excerpt.'...<a class="simple-link" href="'. get_permalink($post->ID) . '">Részletek</a>';
	return $excerpt;
}

// Add footer menu
function wpb_custom_new_menu() {
	register_nav_menus(
	  array(
		 'footer-menu' => __( 'Footer Menu' ),
		 'footer-menu-2' => __( 'Footer Menu 2' )
	  )
	);
 }
 add_action( 'init', 'wpb_custom_new_menu' );


 // Footer widget
 register_sidebar( array(
	'name' => 'Footer Sidebar',
	'id' => 'footer-sidebar',
	'description' => 'Appears in the footer area',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>'
) );
