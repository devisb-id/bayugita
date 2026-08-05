<?php
/**
 * Layout: icon_grid — repeater icon tile + title + text.
 *
 * @package Bayugita
 */

$heading = get_sub_field( 'heading_text' );
$items   = get_sub_field( 'items' );
$cols    = get_sub_field( 'grid_layout' ); // 2_columns | 3_columns
if ( empty( $items ) ) {
	return;
}
$grid = ( '3_columns' === $cols ) ? 'md:grid-cols-2 xl:grid-cols-3' : 'md:grid-cols-2';
?>
<section<?php echo bayugita_section_atts( 'mt-16 md:mt-20 xl:mt-28' ); // phpcs:ignore ?> data-aos="fade-up">
	<div class="delimiter">
		<?php if ( $heading ) : ?>
			<div class="text-center">
				<?php bayugita_the_heading( $heading, get_sub_field( 'heading_tag' ), 'font-playfair' ); ?>
			</div>
		<?php endif; ?>

		<div class="mt-10 grid grid-cols-1 gap-8 <?php echo esc_attr( $grid ); ?> md:mt-12 md:gap-x-12 md:gap-y-10">
			<?php foreach ( $items as $item ) : ?>
				<div class="flex items-start gap-5">
					<?php if ( ! empty( $item['icon'] ) ) : ?>
						<div class="bg-brand-50 flex size-14 shrink-0 items-center justify-center">
							<iconify-icon icon="<?php echo esc_attr( $item['icon'] ); ?>" class="!text-brand !text-2xl"></iconify-icon>
						</div>
					<?php endif; ?>
					<div>
						<h3 class="!text-base"><?php echo esc_html( $item['title'] ?? '' ); ?></h3>
						<div class="mt-2 leading-relaxed"><?php echo wp_kses_post( $item['text'] ?? '' ); ?></div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
