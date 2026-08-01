<?php
/**
 * Layout: guest_reviews — repeater of quotes (grid + optional villa filter tabs).
 *
 * @package Bayugita
 */

$heading = get_sub_field( 'heading_text' );
$intro   = get_sub_field( 'intro' );
$reviews = get_sub_field( 'reviews' );
$filters = get_sub_field( 'show_filters' );
if ( empty( $reviews ) ) {
	return;
}
?>
<section<?php echo bayugita_section_atts( 'mb-16 md:mb-20 xl:mb-28 pt-16 md:pt-20 xl:pt-28' ); // phpcs:ignore ?> data-aos="fade-up">
	<div class="delimiter">
		<div class="text-center">
			<?php bayugita_the_heading( $heading, get_sub_field( 'heading_tag' ), 'font-playfair' ); ?>
			<?php if ( $intro ) : ?>
				<p class="mx-auto mt-4 max-w-2xl leading-relaxed"><?php echo esc_html( $intro ); ?></p>
			<?php endif; ?>
		</div>

		<?php if ( $filters ) : ?>
			<div class="mx-auto mt-10 flex max-w-3xl flex-col gap-2 sm:flex-row md:mt-12" role="tablist">
				<button class="review-tab active flex-1 border border-gray-200 px-6 py-3" data-tab="all"><?php esc_html_e( 'All Reviews', 'bayugita' ); ?></button>
				<button class="review-tab flex-1 border border-gray-200 px-6 py-3" data-tab="beach"><?php esc_html_e( 'Bayu Gita Beachfront', 'bayugita' ); ?></button>
				<button class="review-tab flex-1 border border-gray-200 px-6 py-3" data-tab="residence"><?php esc_html_e( 'Bayu Gita Residence', 'bayugita' ); ?></button>
			</div>
		<?php endif; ?>

		<div id="reviews-grid" class="mt-10 grid grid-cols-1 gap-8 md:mt-12 md:grid-cols-2 md:gap-10 xl:grid-cols-3">
			<?php foreach ( $reviews as $r ) : ?>
				<figure class="review-card flex flex-col border border-gray-200 bg-white p-8" data-villa="<?php echo esc_attr( $r['villa'] ?? 'all' ); ?>">
					<iconify-icon icon="ph:quotes-fill" class="!text-brand-200 !text-3xl"></iconify-icon>
					<blockquote class="mt-4 flex-1 leading-relaxed"><?php echo esc_html( $r['quote'] ?? '' ); ?></blockquote>
					<figcaption class="text-brand mt-6 text-sm font-medium tracking-wider uppercase"><?php echo esc_html( $r['dates'] ?? '' ); ?></figcaption>
				</figure>
			<?php endforeach; ?>
		</div>
	</div>
</section>
