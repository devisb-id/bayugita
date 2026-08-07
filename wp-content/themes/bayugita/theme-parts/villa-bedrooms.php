<?php
/**
 * Layout: villa_bedrooms — reproduces static villa-detail "The Bedrooms":
 * centered heading, 2-image grid, centered intro, then full-width single-open
 * accordion list (Master, Guest 1–4).
 *
 * @package Bayugita
 */

$heading = get_sub_field( 'heading_text' );
$images  = get_sub_field( 'images' );
$intro   = get_sub_field( 'intro' );
$items   = get_sub_field( 'items' );

$has_bg  = '' !== bayugita_bg_class( (string) get_sub_field( 'section_background' ) );
$spacing = $has_bg
	? 'mt-16 md:mt-20 py-16 md:py-20 xl:mt-28 xl:py-28'
	: 'mt-16 md:mt-20 xl:mt-28';
?>
<section<?php echo bayugita_section_atts( $spacing ); // phpcs:ignore ?> data-aos="fade-up">
	<div class="delimiter">
		<?php if ( $heading ) : ?>
			<div class="text-center">
				<?php bayugita_the_heading( $heading, get_sub_field( 'heading_tag' ), 'font-playfair' ); ?>
			</div>
		<?php endif; ?>

		<?php if ( $images ) : ?>
			<div class="mt-10 grid grid-cols-1 gap-6 md:mt-12 md:grid-cols-2">
				<?php foreach ( $images as $item ) : ?>
					<div class="aspect-[4/3] overflow-hidden">
						<?php bayugita_the_image( $item['image'] ?? $item, 'parallax w-full object-cover' ); ?>
					</div>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>

		<?php if ( $intro ) : ?>
			<div class="mx-auto mt-10 max-w-4xl text-center leading-relaxed md:mt-12"><?php echo wp_kses_post( $intro ); ?></div>
		<?php endif; ?>

		<?php if ( $items ) : ?>
			<div class="mx-auto mt-10 max-w-4xl md:mt-12" data-accordion-single>
				<?php foreach ( $items as $item ) : ?>
					<div class="accordion-item mb-4 border-b border-gray-200 pb-4">
						<div class="accordion-trigger flex cursor-pointer items-center justify-between gap-4">
							<h3 class="!text-lg"><?php echo esc_html( $item['title'] ?? '' ); ?></h3>
							<span class="btn-primary !p-2"><iconify-icon icon="ph:caret-down"></iconify-icon></span>
						</div>
						<div class="accordion-slide"><div class="pt-4 leading-relaxed"><?php echo wp_kses_post( $item['content'] ?? '' ); ?></div></div>
					</div>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	</div>
</section>
