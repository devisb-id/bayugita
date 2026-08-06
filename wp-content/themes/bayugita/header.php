<?php
/**
 * The header — reproduces static-file/partials/header.php with WP menus/settings.
 *
 * @package Bayugita
 */

$logo    = bayugita_option( 'logo' );
$logo_url = is_array( $logo ) ? ( $logo['url'] ?? '' ) : '';
if ( ! $logo_url ) {
	$logo_url = get_template_directory_uri() . '/assets/images/logo.webp';
}
$favicon        = bayugita_option( 'favicon' );
$header_buttons = bayugita_option( 'header_buttons', array() );
$header_buttons = is_array( $header_buttons ) ? $header_buttons : array();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php if ( ! empty( $favicon['url'] ) ) : ?>
		<link rel="icon" href="<?php echo esc_url( $favicon['url'] ); ?>" />
	<?php else : ?>
		<link rel="icon" href="<?php echo esc_url( get_template_directory_uri() . '/assets/images/favicon.webp' ); ?>" type="image/webp" />
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php get_template_part( 'template-parts/global/page-transition' ); ?>

<div class="page-content">

	<!-- Header -->
	<header class="header-scrolled fixed top-0 right-0 left-0 z-50 transition-all duration-300">
		<div class="w-full">
			<div class="delimiter">
				<div class="header-border grid w-full grid-cols-[1fr_auto_1fr] items-center border-b border-white/20 py-4">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="justify-self-start">
						<img src="<?php echo esc_url( $logo_url ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" class="h-7 w-auto xl:h-10" loading="eager" />
					</a>

					<nav class="hidden items-center justify-center gap-5 xl:flex 2xl:gap-7">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'primary',
								'container'      => false,
								'items_wrap'     => '%3$s',
								'walker'         => new Bayugita_Nav_Walker(),
								'fallback_cb'    => false,
							)
						);
						?>
					</nav>

					<div class="hidden flex-wrap items-center justify-center gap-4 xl:flex">
						<?php
						foreach ( $header_buttons as $btn ) {
							$classes = ( 'primary' === ( $btn['style'] ?? 'secondary' ) ) ? 'btn-primary' : 'btn-secondary';
							bayugita_render_button( $btn, $classes, $btn['icon'] ?? '' );
						}
						?>
					</div>

					<button id="mobile-navbar-open" class="col-start-3 flex size-10 cursor-pointer items-center justify-end justify-self-end text-white xl:hidden">
						<iconify-icon icon="ph:list" class="text-2xl !text-white"></iconify-icon>
					</button>
				</div>
			</div>
		</div>
	</header>

	<!-- Mobile Navbar -->
	<div id="mobile-navbar-overlay" class="fixed inset-0 z-[59] hidden bg-black/50"></div>
	<div id="mobile-navbar-content" class="bg-background fixed top-0 right-0 bottom-0 z-[60] hidden w-80 max-w-[85vw] flex-col">
		<div class="flex w-full items-center justify-end px-6 py-4">
			<button id="mobile-navbar-close" class="text-dark flex size-10 cursor-pointer items-center justify-center">
				<iconify-icon icon="ph:x" class="text-2xl"></iconify-icon>
			</button>
		</div>
		<div class="flex flex-1 flex-col px-6 py-4">
			<nav id="mobile-navbar-menu" class="flex flex-col gap-1">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'container'      => false,
						'items_wrap'     => '%3$s',
						'depth'          => 2,
						'walker'         => new Bayugita_Mobile_Nav_Walker(),
						'fallback_cb'    => false,
					)
				);
				?>
			</nav>
			<div id="mobile-navbar-divider" class="divider my-6"></div>
			<div id="mobile-navbar-auth" class="flex flex-col gap-3">
				<?php
				foreach ( $header_buttons as $btn ) {
					$classes = ( 'primary' === ( $btn['style'] ?? 'secondary' ) ) ? 'btn-primary' : 'btn-secondary';
					bayugita_render_button( $btn, $classes . ' w-full', $btn['icon'] ?? '' );
				}
				?>
			</div>
		</div>
	</div>

	<?php get_template_part( 'template-parts/global/whatsapp-float' ); ?>

	<main>
