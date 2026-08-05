<?php
/**
 * Enquiry modal — hosts a form plugin shortcode (CF7/WPForms) in the modal shell.
 *
 * Set the shortcode in Site Settings → "Enquiry Form Shortcode".
 *
 * @package Bayugita
 */

$shortcode   = bayugita_option( 'enquiry_form_shortcode', '' );
$modal_title = bayugita_option( 'modal_contact_title', __( 'Get In Touch With Us', 'bayugita' ) );
$modal_desc  = bayugita_option( 'modal_contact_description', __( 'We\'d love to hear from you. Whether you\'re planning a visit or have an enquiry about the villa, our team is on hand to assist.', 'bayugita' ) );
?>
<div id="modal-enquiry" class="modal">
	<div class="modal__content !max-w-3xl" data-lenis-prevent>
		<button type="button" data-modal-close class="hover:border-brand hover:text-brand absolute top-6 right-6 flex size-11 cursor-pointer items-center justify-center border border-gray-300 text-dark transition-all">
			<iconify-icon icon="ph:x" class="text-2xl"></iconify-icon>
		</button>
		<div class="text-center">
			<h2><?php echo esc_html( $modal_title ); ?></h2>
			<p class="mx-auto mt-4 max-w-xl leading-relaxed"><?php echo esc_html( $modal_desc ); ?></p>
		</div>
		<div class="form mt-10">
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
