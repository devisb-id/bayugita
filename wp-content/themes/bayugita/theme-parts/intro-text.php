<?php
/**
 * Layout: intro_text — heading + WYSIWYG body (centered or plain column).
 *
 * @package Bayugita
 */

$style   = get_sub_field( 'layout_style' ); // centered | column
$eyebrow = get_sub_field( 'eyebrow' );
$heading = get_sub_field( 'heading_text' );
$body    = get_sub_field( 'body' );
$is_center = ( 'column' !== $style );
$wrap      = $is_center ? 'max-w-4xl text-center' : 'max-w-4xl';
?>
<section<?php echo bayugita_section_atts( 'mt-16 md:mt-20 xl:mt-28' ); // phpcs:ignore ?> data-aos="fade-up">
	<div class="mx-auto w-full max-w-5xl px-6">
		<div class="mx-auto <?php echo esc_attr( $wrap ); ?>">
			<?php if ( $eyebrow ) : ?>
				<p class="text-brand mb-4 tracking-wider uppercase"><?php echo esc_html( $eyebrow ); ?></p>
			<?php endif; ?>
			<?php bayugita_the_heading( $heading, get_sub_field( 'heading_tag' ), 'font-playfair' ); ?>
			<?php if ( $body ) : ?>
				<div class="prose-basic mt-6 leading-relaxed"><?php echo wp_kses_post( $body ); ?></div>
			<?php endif; ?>
		</div>

		<?php if ( have_rows( 'accordions' ) ) : ?>
			<div class="mx-auto mt-16 max-w-4xl md:mt-20" data-accordion-single>
				<?php while ( have_rows( 'accordions' ) ) : the_row(); ?>
					<div class="accordion-item border-b border-gray-200 pb-4 [&:not(:first-child)]:mt-6">
						<div class="accordion-trigger flex cursor-pointer items-center justify-between gap-4">
							<h3><?php echo esc_html( get_sub_field( 'title' ) ); ?></h3>
							<span class="btn-primary !p-2"><iconify-icon icon="ph:caret-down"></iconify-icon></span>
						</div>
						<div class="accordion-slide"><div class="pt-4 leading-relaxed"><?php echo wp_kses_post( get_sub_field( 'content' ) ); ?></div></div>
					</div>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>
	</div>
</section>
