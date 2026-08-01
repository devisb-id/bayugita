<?php
/**
 * Page transition preloader.
 *
 * @package Bayugita
 */

$logo    = bayugita_option( 'logo' );
$logo_url = is_array( $logo ) ? ( $logo['url'] ?? '' ) : '';
if ( ! $logo_url ) {
	$logo_url = get_template_directory_uri() . '/assets/images/logo.webp';
}
?>
<div class="page-transition">
	<div class="page-transition__overlay"></div>
	<div class="page-transition__content">
		<img src="<?php echo esc_url( $logo_url ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" class="page-transition__logo" loading="lazy" />
		<div class="page-transition__dots">
			<span class="page-transition__dot"></span>
			<span class="page-transition__dot"></span>
			<span class="page-transition__dot"></span>
		</div>
	</div>
</div>
