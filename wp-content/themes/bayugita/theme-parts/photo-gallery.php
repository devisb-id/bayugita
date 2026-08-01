<?php
/**
 * Layout: photo_gallery — lightbox thumbnail grid (lightGallery + pagination via script.js).
 *
 * @package Bayugita
 */

$heading = get_sub_field( 'heading_text' );
$intro   = get_sub_field( 'intro' );
$images  = get_sub_field( 'gallery_images' );
if ( empty( $images ) ) {
	return;
}
?>
<section<?php echo bayugita_section_atts( 'mb-16 md:mb-20 xl:mb-28 pt-36 md:pt-40 xl:pt-48' ); // phpcs:ignore ?> data-aos="fade-up">
	<div class="delimiter">
		<?php bayugita_the_heading( $heading, get_sub_field( 'heading_tag' ), 'font-playfair text-center' ); ?>
		<?php if ( $intro ) : ?>
			<p class="mx-auto mt-4 max-w-2xl text-center leading-relaxed"><?php echo esc_html( $intro ); ?></p>
		<?php endif; ?>
		<div id="photo-gallery" class="mt-10 grid grid-cols-2 gap-2 md:mt-12 md:grid-cols-4 md:gap-3">
			<?php foreach ( $images as $img ) : ?>
				<a href="<?php echo esc_url( $img['url'] ); ?>" class="group block aspect-[4/3] overflow-hidden">
					<img src="<?php echo esc_url( $img['sizes']['large'] ?? $img['url'] ); ?>" alt="<?php echo esc_attr( $img['alt'] ?? '' ); ?>" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy" />
				</a>
			<?php endforeach; ?>
		</div>
	</div>
</section>
