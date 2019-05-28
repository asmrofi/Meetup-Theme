<?php
/* 
TGM plugins required
*/
require_once get_template_directory().'/inc/tgm.php';

/* 
CMB2 plugins required
*/
require_once get_template_directory().'/inc/cmb2-b.php';

/* 
Custom Event  required
*/
require_once get_template_directory().'/inc/custom-event.php';

/* 
Custom Speakers  required
*/
require_once get_template_directory().'/inc/custom-speakers.php';


/**
 * Meetup functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Meetup
 */

if ( ! function_exists( 'meetup_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function meetup_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Meetup, use a find and replace
		 * to change 'meetup' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'meetup', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Side Menu', 'meetup' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
        
        /*
        add span class in a tag 
        */
        add_filter('nav_menu_item_args', function ($args, $item, $depth) {
    if ($args->theme_location == 'menu-1') {
        $title             = apply_filters('the_title', $item->title, $item->ID);
        $args->link_before = '<span class="menu-title">';
        $args->link_after  = '</span><span calss="dot">o</span>';
         
    }
    return $args;
}, 10, 3);
                
        
        
        function add_menuclass($ulclass) {
   return preg_replace('/<a /', '<a class="page-scroll"', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');
        
        
        
       
        
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'meetup_custom_background_args', array(
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
add_action( 'after_setup_theme', 'meetup_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function meetup_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'meetup_content_width', 640 );
}
add_action( 'after_setup_theme', 'meetup_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function meetup_widgets_init() {
    register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'meetup' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'meetup' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Widget One', 'meetup' ),
		'id'            => 'widget-1',
		'description'   => esc_html__( 'Add widgets here.', 'meetup' ),
		'before_widget' => '<div class="col-md-6 contact-form">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="content-ct">',
		'after_title'   => '</h3>',
	) );
    register_sidebar( array(
		'name'          => esc_html__( 'Widget Two', 'meetup' ),
		'id'            => 'widget-2',
		'description'   => esc_html__( 'Add widgets here.', 'meetup' ),
		'before_widget' => '<div class="col-md-4 col-md-offset-1 content-ct">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
     register_sidebar( array(
		'name'          => esc_html__( 'Footer', 'meetup' ),
		'id'            => 'footer',
		'description'   => esc_html__( 'Add widgets here.', 'meetup' ),
		'before_widget' => '<ul class="footer-menu">',
		'after_widget'  => '</ul>',
		'before_title'  => '<li>',
		'after_title'   => '</li>',
	) );
}
add_action( 'widgets_init', 'meetup_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function meetup_scripts() {
	wp_enqueue_style( 'meetup-style', get_stylesheet_uri() );

     wp_enqueue_style( 'meetup-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.2', 'all');
    
     wp_enqueue_style( 'meetup-bootstrap', get_template_directory_uri() . '/css/bootstrap-theme.min.css', array(), '1.2', 'all');
   
     wp_enqueue_style( 'meetup-styl', get_template_directory_uri() . '/css/style.css', array(), '1.2', 'all');
    
     wp_enqueue_style( 'meetup-themify', get_template_directory_uri() . '/css/themify-icons.css', array(), '1.2', 'all');
    
     wp_enqueue_style( 'meetup-dosis', get_template_directory_uri() . '/css/dosis-font.css', array(), '1.2', 'all');
    
    
	
    
	wp_enqueue_script( 'meetup-jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), '20151215', true );
	wp_enqueue_script( 'meetup-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '20151215', true );
	wp_enqueue_script( 'meetup-jquery-easing', get_template_directory_uri() . '/js/jquery.easing.min.js', array(), '20151215', true );
	wp_enqueue_script( 'meetup-scrolling-nav', get_template_directory_uri() . '/js/scrolling-nav.js', array(), '20151215', true );
	wp_enqueue_script( 'meetup-validator', get_template_directory_uri() . '/js/validator.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'meetup_scripts' );


/**
Redux-Framework require
**/


   /**
 * Modify list item classes of wp_nav_menu
 * - https://codex.wordpress.org/Plugin_API/Filter_Reference/nav_menu_css_class
 * - https://developer.wordpress.org/reference/hooks/nav_menu_css_class/
 *
 * @param Array $classes || List of list-item classes
 * @param WP_Nav_Item Object $item || The Nav Menu Object, NOT the WP_Post object
 *
 * @return Array $classes
 */
function my_special_nav_class( $classes, $item ) {

    $menu_to_test_against = 'menu-1';

    // Ensure we only apply this filter on the menu of our choice
    if( ! has_term( $menu_to_test_against, 'nav_menu', $item ) ) {
        return $classes;
    }

    $classes[] = 'side-menu';
    $classes[] = 'hidden active';
    $classes[] = 'page-scroll';
    $classes[] = 'menu-title';
    $classes[] = 'dot';

    return $classes;
}
add_filter( 'nav_menu_css_class', 'my_special_nav_class', 10, 2 );




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
