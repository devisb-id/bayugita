<?php
/**
 * Layout: button_row — standalone row of buttons between sections.
 *
 * @package Bayugita
 */

$buttons = get_sub_field( 'buttons' );
if ( empty( $buttons ) ) {
	return;
}

$align_map = array(
	'left'   => 'justify-start',
	'center' => 'justify-center',
	'right'  => 'justify-end',
);
$align       = (string) get_sub_field( 'alignment' );
$align_class = $align_map[ $align ] ?? 'justify-center';

$style_map = array(
	'primary'   => 'btn-primary',
	'secondary' => 'btn-secondary',
	'outline'   => 'btn-outline',
);
?>
<section<?php echo bayugita_section_atts( 'mt-16 md:mt-20 xl:mt-28' ); // phpcs:ignore ?> data-aos="fade-up">
	<div class="delimiter">
		<div class="flex flex-wrap items-center gap-4 <?php echo esc_attr( $align_class ); ?>">
			<?php
			foreach ( $buttons as $b ) {
				$btn   = $b['button'] ?? $b;
				$class = $style_map[ $btn['button_style'] ?? 'primary' ] ?? 'btn-primary';
				bayugita_render_button( $btn, $class, 'ph:arrow-right' );
			}
			?>
		</div>
	</div>
</section>
