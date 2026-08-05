<?php
/**
 * Enquiry modal — hosts a form plugin shortcode (CF7/WPForms) in the modal shell.
 *
 * Set the shortcode in Site Settings → "Enquiry Form Shortcode".
 *
 * @package Bayugita
 */

$shortcode = bayugita_option( 'enquiry_form_shortcode', '' );
?>
<div id="modal-enquiry" class="modal">
	<div class="modal__content !max-w-3xl" data-lenis-prevent>
		<button type="button" data-modal-close class="flex size-9 items-center justify-center border border-gray-200 hover:bg-gray-50">
			<iconify-icon icon="ph:x"></iconify-icon>
		</button>
		<div class="text-center">
			<h2 class="font-playfair !text-2xl md:!text-3xl"><?php esc_html_e( 'Get In Touch With Us', 'bayugita' ); ?></h2>
			<p class="mx-auto mt-4 max-w-xl leading-relaxed"><?php esc_html_e( 'We\'d love to hear from you. Whether you\'re planning a visit or have an enquiry about the villa, our team is on hand to assist.', 'bayugita' ); ?></p>
		</div>
		<div class="form mt-8">
			<?php
			if ( $shortcode ) {
				echo do_shortcode( $shortcode ); // phpcs:ignore WordPress.Security.EscapeOutput
			} else {
				echo '<p>' . esc_html__( 'Enquiry form not configured. Add a form shortcode in Site Settings.', 'bayugita' ) . '</p>';
			}
			?>
		</div>
	</div>
</div>
