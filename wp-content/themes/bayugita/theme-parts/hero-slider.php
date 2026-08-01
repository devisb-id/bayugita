<?php
/**
 * Layout: hero_slider — Swiper full-bleed hero (arrows + dots).
 *
 * @package Bayugita
 */

$slides = get_sub_field( 'slides' );
if ( empty( $slides ) ) {
	return;
}
?>
<section<?php echo bayugita_section_atts( 'relative w-full overflow-hidden' ); // phpcs:ignore ?>>
	<div class="slider-hero absolute inset-0">
		<div class="swiper h-full">
			<div class="swiper-wrapper">
				<?php foreach ( $slides as $slide ) : ?>
					<div class="swiper-slide">
						<div class="relative h-full w-full">
							<?php bayugita_the_image( $slide['image'] ?? $slide, 'h-full w-full object-cover', 'eager' ); ?>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
		<button class="btn-hero-prev absolute top-1/2 left-6 z-20 flex -translate-y-1/2 cursor-pointer items-center justify-center text-white transition-opacity hover:opacity-70 xl:left-12">
			<iconify-icon icon="ph:arrow-left" class="!text-2xl !text-white"></iconify-icon>
		</button>
		<button class="btn-hero-next absolute top-1/2 right-6 z-20 flex -translate-y-1/2 cursor-pointer items-center justify-center text-white transition-opacity hover:opacity-70 xl:right-12">
			<iconify-icon icon="ph:arrow-right" class="!text-2xl !text-white"></iconify-icon>
		</button>
		<div class="btn-hero-indicator absolute right-0 !bottom-8 left-0 z-20 mx-auto flex w-full max-w-24 gap-2 xl:max-w-28"></div>
	</div>
	<div class="pointer-events-none relative z-10 py-52 md:py-72 xl:py-96">
		<?php
		$overlay = get_sub_field( 'overlay_title' );
		if ( $overlay ) :
			?>
			<div class="delimiter text-center">
				<?php bayugita_the_heading( $overlay, get_sub_field( 'heading_tag' ), 'font-playfair text-white' ); ?>
			</div>
		<?php endif; ?>
	</div>
</section>
