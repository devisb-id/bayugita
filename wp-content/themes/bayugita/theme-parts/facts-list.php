<?php
/**
 * Layout: facts_list — repeater label/value rows (+ optional icon).
 *
 * @package Bayugita
 */

$heading  = get_sub_field( 'heading_text' );
$subtitle = get_sub_field( 'subtitle' );
$rows     = get_sub_field( 'rows' );
if ( empty( $rows ) ) {
	return;
}

// Column count → explicit grid classes. Only classes present in the built
// output.css are used (1 col = default grid-cols-1, no md: variant needed).
$cols_map = array(
	'1' => 'max-w-2xl',
	'2' => 'md:grid-cols-2 max-w-4xl',
	'3' => 'md:grid-cols-3 max-w-6xl',
	'4' => 'md:grid-cols-4 max-w-6xl',
);
$cols       = (string) get_sub_field( 'columns' );
$grid_class = $cols_map[ $cols ] ?? $cols_map['2'];
?>
<section<?php echo bayugita_section_atts( 'mt-16 md:mt-20 xl:mt-28' ); // phpcs:ignore ?> data-aos="fade-up">
	<div class="delimiter">
		<?php if ( $heading ) : ?>
			<div class="text-center">
				<?php bayugita_the_heading( $heading, get_sub_field( 'heading_tag' ), 'font-playfair' ); ?>
				<?php if ( $subtitle ) : ?>
					<p class="mx-auto mt-4 max-w-2xl leading-relaxed"><?php echo esc_html( $subtitle ); ?></p>
				<?php endif; ?>
			</div>
		<?php endif; ?>

		<div class="mx-auto mt-10 grid grid-cols-1 gap-x-10 <?php echo esc_attr( $grid_class ); ?>">
			<?php foreach ( $rows as $row ) : ?>
				<div class="flex items-center justify-between gap-4 border-b border-gray-200 py-5">
					<span class="text-dark inline-flex items-center gap-3">
						<?php if ( ! empty( $row['icon'] ) ) : ?>
							<iconify-icon icon="<?php echo esc_attr( $row['icon'] ); ?>" class="!text-brand"></iconify-icon>
						<?php endif; ?>
						<?php echo esc_html( $row['label'] ?? '' ); ?>
					</span>
					<span class="text-brand font-medium whitespace-nowrap"><?php echo esc_html( $row['value'] ?? '' ); ?></span>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
