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
	</div>
</section>
