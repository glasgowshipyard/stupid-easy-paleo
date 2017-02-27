<?php

/**
 * Stupid Easy Paleo functions and definitions
 *
 * @package Stupid Easy Paleo
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 1400; /* pixels */
}

if ( ! function_exists( 'stupid_easy_paleo_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function stupid_easy_paleo_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Stupid Easy Paleo, use a find and replace
	 * to change 'stupid-easy-paleo' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'stupid-easy-paleo', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	// This sets the dimensions for the thumbnails displayed on the homepage
    add_image_size('excerpt-thumbnail',150,150,true);
	
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'stupid-easy-paleo' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'stupid_easy_paleo_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // stupid_easy_paleo_setup
add_action( 'after_setup_theme', 'stupid_easy_paleo_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function stupid_easy_paleo_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'stupid-easy-paleo' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
        'name' => __( 'Hero', 'stupid_easy_paleo' ),
        'id' => 'hero',
        //'before_widget' => '<div>',
		//'after_widget' => '</div>',
        'description' => __( 'Hero image with large captioning overlay.', 'stupid_easy_paleo' ),
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ) );
  	 	register_sidebar( array(
  	 	'name' => __( 'Left', 'stupid_easy_paleo' ),
  	 	'id' => 'left',
  	 	//'before_widget' => '<div>',
  	 	//'after_widget' => '</div>',
  	 	'description' => __( 'Left column footer widget', 'stupid-easy-paleo' ),
  	 	'before_title' => '<h2 class="foot">',
  	 	'after_title' => '</h2>',
	) );
		register_sidebar( array(
  	 	'name' => __( 'Right', 'stupid_easy_paleo' ),
  	 	'id' => 'right',
  	 	//'before_widget' => '<div>',
  	 	//'after_widget' => '</div>',
  	 	'description' => __( 'Right column footer widget', 'stupid-easy-paleo' ),
  	 	'before_title' => '<h2 class="foot">',
  	 	'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'stupid_easy_paleo_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function stupid_easy_paleo_scripts() {
	wp_enqueue_style( 'stupid-easy-paleo-style', get_stylesheet_uri() );

	wp_enqueue_script( 'stupid-easy-paleo-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'stupid-easy-paleo-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	
	wp_enqueue_script( 'stupid-easy-paleo-smoothscroll', get_template_directory_uri() . '/js/stephscripts.js', array(jquery), '20160101', true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'stupid_easy_paleo_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load Icomoon fonts.
 */
function register_my_fonts() {
 
wp_register_style('icomoon', get_stylesheet_directory_uri().'/icomoon.css' );

wp_enqueue_style( 'icomoon');

}

add_action('wp_enqueue_scripts', 'register_my_fonts');

function theme_typekit() {
    wp_enqueue_script( 'theme_typekit', '//use.typekit.net/ste8tjc.js');
}
add_action( 'wp_enqueue_scripts', 'theme_typekit' );

function theme_typekit_inline() {
  if ( wp_script_is( 'theme_typekit', 'done' ) ) { ?>
  	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<?php }
}
add_action( 'wp_head', 'theme_typekit_inline' );

wp_enqueue_style('stupid-easy-paleo-fontawesome','https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css', true);

/**
 * Optimize WooCommerce Scripts
 * Remove WooCommerce Generator tag, styles, and scripts from non WooCommerce pages.
 */
add_action( 'wp_enqueue_scripts', 'child_manage_woocommerce_styles', 99 );
 
function child_manage_woocommerce_styles() {
	//remove generator meta tag
	remove_action( 'wp_head', array( $GLOBALS['woocommerce'], 'generator' ) );
 
	//first check that woo exists to prevent fatal errors
	if ( function_exists( 'is_woocommerce' ) ) {
		//dequeue scripts and styles
		if ( ! is_woocommerce() && ! is_cart() && ! is_checkout() ) {
			wp_dequeue_style( 'woocommerce_frontend_styles' );
			wp_dequeue_style( 'woocommerce_fancybox_styles' );
			wp_dequeue_style( 'woocommerce_chosen_styles' );
			wp_dequeue_style( 'woocommerce_prettyPhoto_css' );
			wp_dequeue_script( 'wc_price_slider' );
			wp_dequeue_script( 'wc-single-product' );
			wp_dequeue_script( 'wc-add-to-cart' );
			wp_dequeue_script( 'wc-cart-fragments' );
			wp_dequeue_script( 'wc-checkout' );
			wp_dequeue_script( 'wc-add-to-cart-variation' );
			wp_dequeue_script( 'wc-single-product' );
			wp_dequeue_script( 'wc-cart' );
			wp_dequeue_script( 'wc-chosen' );
			wp_dequeue_script( 'woocommerce' );
			wp_dequeue_script( 'prettyPhoto' );
			wp_dequeue_script( 'prettyPhoto-init' );
			wp_dequeue_script( 'jquery-blockui' );
			wp_dequeue_script( 'jquery-placeholder' );
			wp_dequeue_script( 'fancybox' );
			wp_dequeue_script( 'jqueryui' );
		}
	}
 
}

function pu_remove_script_version( $src ){
    return remove_query_arg( 'ver', $src );
}

add_filter( 'script_loader_src', 'pu_remove_script_version' );
add_filter( 'style_loader_src', 'pu_remove_script_version' );

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

function change_excerpt_length($length) {
    return 50;
}
add_filter('excerpt_length', 'change_excerpt_length');

// Replaces the excerpt "more" text by a link
function new_excerpt_more($more) {
       global $post;
	return '<a class="moretag" href="'. get_permalink($post->ID) . '"> read more...</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

/**
 * Remove Sensei Wrappers
 */
global $woothemes_sensei;
remove_action( 'sensei_before_main_content', array( $woothemes_sensei->frontend, 'sensei_output_content_wrapper' ), 10 );
remove_action( 'sensei_after_main_content', array( $woothemes_sensei->frontend, 'sensei_output_content_wrapper_end' ), 10 );

add_action('sensei_before_main_content', 'my_theme_wrapper_start', 10);
add_action('sensei_after_main_content', 'my_theme_wrapper_end', 10);
/**
 * Begin Sensei Page
 */
function my_theme_wrapper_start() {
	echo '<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">';
}
/**
 * End Sensei Page
 */
function my_theme_wrapper_end() {
  echo '</main><!-- #main -->
	</div><!-- #primary -->';
	get_sidebar();
}

/**
 * Declare Theme Support for Sensei.
 */
add_action( 'after_setup_theme', 'declare_sensei_support' );
function declare_sensei_support() {
    add_theme_support( 'sensei' );
}

/**
 * Disable the fucking shit out of Sensei's CSS.
 */
 
add_filter( 'sensei_disable_styles', '__return_true' );

/**
 * TRY????? To remove drop emails in Sensei.
 */

function sensei_cust_remove_content_drip_emails() { 
remove_all_actions( 'woo_scd_daily_cron_hook' );
}
add_action( 'init', 'sensei_cust_remove_content_drip_emails' );