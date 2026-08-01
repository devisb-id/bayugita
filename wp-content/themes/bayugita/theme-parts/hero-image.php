<?php
/**
 * Layout: hero_image — single parallax full-bleed image hero.
 *
 * @package Bayugita
 */

$image = get_sub_field( 'image' );
if ( empty( $image ) ) {
	return;
}
?>
<section<?php echo bayugita_section_atts( 'relative h-[60vh] w-full overflow-hidden md:h-[70vh] xl:h-[80vh]' ); // phpcs:ignore ?>>
	<?php bayugita_the_image( $image, 'parallax w-full object-cover', 'eager' ); ?>
	<?php
	$overlay = get_sub_field( 'overlay_title' );
	if ( $overlay ) :
		?>
		<div class="absolute inset-0 z-10 flex items-center justify-center">
			<?php bayugita_the_heading( $overlay, get_sub_field( 'heading_tag' ), 'font-playfair text-white text-center' ); ?>
		</div>
	<?php endif; ?>
</section>
