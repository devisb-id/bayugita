<?php
/**
 * Layout: feature_columns — heading + optional wide image + 2/3 text columns.
 *
 * @package Bayugita
 */

$heading = get_sub_field( 'heading_text' );
$image   = get_sub_field( 'wide_image' );
$cols    = get_sub_field( 'columns' );
$count   = get_sub_field( 'column_layout' ); // 2_columns | 3_columns
$grid    = ( '3_columns' === $count ) ? 'md:grid-cols-3' : 'md:grid-cols-2';
?>
<section<?php echo bayugita_section_atts( 'mt-16 md:mt-20 py-16 md:py-20 xl:mt-28 xl:py-28' ); // phpcs:ignore ?> data-aos="fade-up">
	<div class="delimiter">
		<?php if ( $heading ) : ?>
			<div class="text-center">
				<?php bayugita_the_heading( $heading, get_sub_field( 'heading_tag' ), 'font-playfair' ); ?>
			</div>
		<?php endif; ?>

		<?php if ( ! empty( $image ) ) : ?>
			<div class="mt-10 aspect-[16/7] w-full overflow-hidden">
				<?php bayugita_the_image( $image, 'parallax w-full object-cover' ); ?>
			</div>
		<?php endif; ?>

		<?php if ( $cols ) : ?>
			<div class="mt-10 grid grid-cols-1 gap-8 <?php echo esc_attr( $grid ); ?> md:gap-12">
				<?php foreach ( $cols as $col ) : ?>
					<div>
						<?php if ( ! empty( $col['title'] ) ) : ?>
							<h3 class="!text-lg"><?php echo esc_html( $col['title'] ); ?></h3>
						<?php endif; ?>
						<div class="prose-basic mt-3 leading-relaxed"><?php echo wp_kses_post( $col['text'] ?? '' ); ?></div>
					</div>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	</div>
</section>
