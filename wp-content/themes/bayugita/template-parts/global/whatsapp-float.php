<?php
/**
 * Floating WhatsApp button.
 *
 * @package Bayugita
 */

$whatsapp = bayugita_option( 'whatsapp_number', '6281234567890' );
$wa_link  = 'https://wa.me/' . preg_replace( '/[^0-9]/', '', $whatsapp );
?>
<a href="<?php echo esc_url( $wa_link ); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e( 'Chat via WhatsApp', 'bayugita' ); ?>" class="bg-brand fixed right-4 bottom-4 z-40 flex size-14 items-center justify-center shadow-md transition-transform hover:scale-110 xl:size-16">
	<iconify-icon icon="ri:whatsapp-fill" class="!text-3xl !text-white xl:!text-4xl"></iconify-icon>
</a>
