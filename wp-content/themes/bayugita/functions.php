<?php
/**
 * Bayu Gita theme functions.
 *
 * @package Bayugita
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! defined( 'BAYUGITA_VERSION' ) ) {
	define( 'BAYUGITA_VERSION', '1.0.0' );
}

/**
 * Theme setup.
 */
function bayugita_setup() {
	load_theme_textdomain( 'bayugita', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'custom-logo' );
	add_theme_support( 'responsive-embeds' );

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'bayugita' ),
			'footer'  => __( 'Footer Menu', 'bayugita' ),
		)
	);
}
add_action( 'after_setup_theme', 'bayugita_setup' );

/**
 * Serve full-size images everywhere: strip core's responsive srcset/sizes so the
 * browser always loads the full file rather than a smaller generated variant.
 */
add_filter( 'wp_calculate_image_srcset_meta', '__return_empty_array' );
add_filter( 'wp_img_tag_add_srcset_and_sizes_attr', '__return_false' );

/**
 * Enqueue scripts and styles (mirrors static-file asset set).
 */
function bayugita_assets() {
	$dir = get_template_directory();
	$uri = get_template_directory_uri();

	$ver = static function ( $rel ) use ( $dir ) {
		$path = $dir . $rel;
		return file_exists( $path ) ? filemtime( $path ) : BAYUGITA_VERSION;
	};

	// Vendor CSS.
	wp_enqueue_style( 'swiper', $uri . '/assets/swiper/swiper-bundle.min.css', array(), $ver( '/assets/swiper/swiper-bundle.min.css' ) );
	wp_enqueue_style( 'aos', $uri . '/assets/aos/aos.css', array(), $ver( '/assets/aos/aos.css' ) );
	wp_enqueue_style( 'lightgallery', 'https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/css/lightgallery-bundle.min.css', array(), '2.7.2' );

	// Theme header stylesheet + Tailwind build.
	wp_enqueue_style( 'bayugita-style', get_stylesheet_uri(), array(), BAYUGITA_VERSION );
	wp_enqueue_style( 'bayugita-main', $uri . '/assets/styles/output.css', array( 'swiper', 'aos' ), $ver( '/assets/styles/output.css' ) );

	// Vendor JS (footer, deferred via strategy).
	$defer = array( 'strategy' => 'defer', 'in_footer' => true );
	wp_enqueue_script( 'aos', $uri . '/assets/aos/aos.js', array(), $ver( '/assets/aos/aos.js' ), $defer );
	wp_enqueue_script( 'swiper', $uri . '/assets/swiper/swiper-bundle.min.js', array(), $ver( '/assets/swiper/swiper-bundle.min.js' ), $defer );
	wp_enqueue_script( 'iconify', $uri . '/assets/iconify-design/iconify.min.js', array(), $ver( '/assets/iconify-design/iconify.min.js' ), $defer );
	wp_enqueue_script( 'lenis', 'https://unpkg.com/lenis@1.1.5/dist/lenis.min.js', array(), '1.1.5', $defer );
	wp_enqueue_script( 'gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js', array(), '3.12.5', $defer );
	wp_enqueue_script( 'bayugita-script', $uri . '/assets/scripts/script.js', array( 'swiper', 'aos', 'gsap', 'lenis' ), $ver( '/assets/scripts/script.js' ), $defer );

	// lightGallery (photo/video lightbox) + section interactions (rates/reviews/pagination).
	wp_enqueue_script( 'lightgallery', 'https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/lightgallery.min.js', array(), '2.7.2', $defer );
	wp_enqueue_script( 'lg-zoom', 'https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/plugins/zoom/lg-zoom.min.js', array( 'lightgallery' ), '2.7.2', $defer );
	wp_enqueue_script( 'lg-video', 'https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/plugins/video/lg-video.min.js', array( 'lightgallery' ), '2.7.2', $defer );
	wp_enqueue_script( 'bayugita-interactions', $uri . '/assets/scripts/theme-interactions.js', array( 'lightgallery' ), $ver( '/assets/scripts/theme-interactions.js' ), $defer );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bayugita_assets' );

/**
 * Register widget areas.
 */
function bayugita_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Sidebar', 'bayugita' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here.', 'bayugita' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'bayugita_widgets_init' );

/**
 * Register the Special Offer custom post type.
 */
function bayugita_register_cpt() {
	register_post_type(
		'special-offer',
		array(
			'labels'       => array(
				'name'          => __( 'Special Offers', 'bayugita' ),
				'singular_name' => __( 'Special Offer', 'bayugita' ),
				'add_new_item'  => __( 'Add New Offer', 'bayugita' ),
				'edit_item'     => __( 'Edit Offer', 'bayugita' ),
			),
			'public'       => true,
			'has_archive'  => true,
			'menu_icon'    => 'dashicons-tag',
			'rewrite'      => array( 'slug' => 'special-offers' ),
			'supports'     => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
			'show_in_rest' => true,
		)
	);
}
add_action( 'init', 'bayugita_register_cpt' );

/**
 * Register the Global Site Settings options page (Secure Custom Fields / ACF).
 */
function bayugita_options_page() {
	if ( function_exists( 'acf_add_options_page' ) ) {
		acf_add_options_page(
			array(
				'page_title' => __( 'Site Settings', 'bayugita' ),
				'menu_title' => __( 'Site Settings', 'bayugita' ),
				'menu_slug'  => 'site-settings',
				'capability' => 'manage_options',
				'redirect'   => false,
				'icon_url'   => 'dashicons-admin-settings',
			)
		);
	}
}
add_action( 'acf/init', 'bayugita_options_page' );

require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/class-bayugita-nav-walker.php';
require get_template_directory() . '/inc/class-bayugita-mobile-nav-walker.php';
