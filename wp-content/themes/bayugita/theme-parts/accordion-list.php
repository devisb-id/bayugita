<?php
/**
 * Layout: accordion_list — repeater accordion, 1 or 2 columns.
 *
 * @package Bayugita
 */

$heading = get_sub_field( 'heading_text' );
$intro   = get_sub_field( 'intro' );
$items   = get_sub_field( 'items' );
$cols    = get_sub_field( 'columns' ); // 1 | 2
if ( empty( $items ) ) {
	return;
}
$grid = ( '2' === $cols ) ? 'md:grid-cols-2' : '';
?>
<section<?php echo bayugita_section_atts( 'mt-16 md:mt-20 xl:mt-28 py-16 md:py-20 xl:py-28' ); // phpcs:ignore ?> data-aos="fade-up">
	<div class="delimiter">
		<?php if ( $heading || $intro ) : ?>
			<div class="text-center">
				<?php bayugita_the_heading( $heading, get_sub_field( 'heading_tag' ), 'font-playfair' ); ?>
				<?php if ( $intro ) : ?>
					<div class="mx-auto mt-4 max-w-2xl leading-relaxed"><?php echo wp_kses_post( $intro ); ?></div>
				<?php endif; ?>
			</div>
		<?php endif; ?>

		<div class="mx-auto mt-10 grid max-w-6xl grid-cols-1 gap-x-12 <?php echo esc_attr( $grid ); ?>" data-accordion-single>
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
	</div>
</section>
