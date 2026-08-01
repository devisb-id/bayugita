<?php
/**
 * Layout: cta_banner — heading + text + button(s) using the button group.
 *
 * @package Bayugita
 */

$heading = get_sub_field( 'heading_text' );
$text    = get_sub_field( 'text' );
$buttons = get_sub_field( 'buttons' );
$divider = get_sub_field( 'show_divider' );
?>
<section<?php echo bayugita_section_atts( 'mt-16 mb-16 md:mt-20 md:mb-20 xl:mt-28 xl:mb-28' ); // phpcs:ignore ?> data-aos="fade-up">
	<?php if ( $divider ) : ?>
		<div class="delimiter mb-16 md:mb-20"><div class="divider"></div></div>
	<?php endif; ?>
	<div class="mx-auto w-full max-w-3xl px-6 text-center">
		<?php bayugita_the_heading( $heading, get_sub_field( 'heading_tag' ), 'font-playfair' ); ?>
		<?php if ( $text ) : ?>
			<p class="mx-auto mt-4 max-w-xl leading-relaxed"><?php echo esc_html( $text ); ?></p>
		<?php endif; ?>
		<?php if ( $buttons ) : ?>
			<div class="mt-8 flex flex-wrap items-center justify-center gap-4">
				<?php
				foreach ( $buttons as $i => $b ) {
					$data  = $b['button'] ?? $b;
					$style = ( 0 === $i ) ? 'btn-primary' : 'btn-secondary';
					$icon  = ( 0 === $i ) ? 'ph:arrow-right' : '';
					bayugita_render_button( $data, $style, $icon );
				}
				?>
			</div>
		<?php endif; ?>
	</div>
</section>
