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

/**
 * Hide WP Admin Bar by default at bottom & toggle via floating icon (bottom-left)
 */
function vnt_toggle_admin_bar_bottom()
{
    if (!is_admin_bar_showing()) {
        return;
    }
    ?>
    <!-- Tombol Trigger di Pojok Kiri Bawah -->
    <button id="vnt-adminbar-trigger" title="Toggle WP Admin Bar" aria-label="Toggle WP Admin Bar">
        <span class="dashicons dashicons-wordpress"></span>
        <span class="vnt-arrow">▲</span>
    </button>

    <style>
        /* 1. Hilangkan ruang kosong atas bawaan WP */
        html, html.wp-toolbar {
            padding-top: 0 !important;
        }

        /* 2. Sembunyikan Admin Bar di bawah layar secara default */
        #wpadminbar {
            top: auto !important;
            bottom: 0 !important;
            position: fixed !important;
            transform: translateY(100%) !important; /* Tersembunyi ke bawah */
            transition: transform 0.3s ease-in-out !important;
            z-index: 99998 !important;
        }

        /* 3. Kelas untuk memunculkan Admin Bar */
        #wpadminbar.vnt-show {
            transform: translateY(0) !important;
        }

        /* Submenu dropdown terbuka ke atas */
        #wpadminbar .ab-sub-wrapper {
            top: auto !important;
            bottom: 100% !important;
        }

        /* 4. Styling Tombol Icon di Kiri Bawah */
        #vnt-adminbar-trigger {
            position: fixed;
            bottom: 0;
            left: 15px;
            z-index: 99999;
            background: #1d2327;
            color: #fff;
            border: 1px solid #3c434a;
            border-bottom: none;
            border-radius: 6px 6px 0 0;
            padding: 6px 12px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 6px;
            font-size: 13px;
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.2);
            transition: bottom 0.3s ease-in-out, background 0.2s;
        }

        #vnt-adminbar-trigger:hover {
            background: #2271b1; /* Warna biru WordPress saat di-hover */
            color: #fff;
        }

        /* Naikkan tombol saat Admin Bar muncul */
        #vnt-adminbar-trigger.vnt-active {
            bottom: 32px;
        }

        @media screen and (max-width: 782px) {
            #vnt-adminbar-trigger.vnt-active {
                bottom: 46px;
            }
        }

        /* Animasi rotasi panah */
        #vnt-adminbar-trigger .vnt-arrow {
            display: inline-block;
            font-size: 9px;
            transition: transform 0.3s ease;
        }

        #vnt-adminbar-trigger.vnt-active .vnt-arrow {
            transform: rotate(180deg);
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var btn = document.getElementById('vnt-adminbar-trigger');
            var bar = document.getElementById('wpadminbar');

            if (btn && bar) {
                btn.addEventListener('click', function() {
                    bar.classList.toggle('vnt-show');
                    btn.classList.toggle('vnt-active');
                });
            }
        });
    </script>
    <?php
}
add_action('wp_footer', 'vnt_toggle_admin_bar_bottom', 99);

require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/class-bayugita-nav-walker.php';
require get_template_directory() . '/inc/class-bayugita-mobile-nav-walker.php';
