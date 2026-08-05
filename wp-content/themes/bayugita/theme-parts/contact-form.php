<?php
/**
 * Layout: contact_form — form plugin shortcode + address/social row.
 *
 * @package Bayugita
 */

$heading   = get_sub_field( 'heading_text' );
$shortcode = get_sub_field( 'form_shortcode' );
$address   = get_sub_field( 'address_text' );
if ( ! $address ) {
	$address = bayugita_option( 'footer_address', '' );
}

// Social icons — same list as Site Settings / footer.
$socials = array_filter(
	array(
		'ri:instagram-fill'        => bayugita_option( 'social_instagram', '' ),
		'ri:facebook-fill'         => bayugita_option( 'social_facebook', '' ),
		'simple-icons:tripadvisor' => bayugita_option( 'social_tripadvisor', '' ),
		'ri:pinterest-fill'        => bayugita_option( 'social_pinterest', '' ),
		'ri:youtube-fill'          => bayugita_option( 'social_youtube', '' ),
		'ri:tiktok-fill'           => bayugita_option( 'social_tiktok', '' ),
	),
	static function ( $url ) {
		$url = trim( (string) $url );
		return '' !== $url && '#' !== $url;
	}
);
?>
<section<?php echo bayugita_section_atts( 'pt-36 md:pt-40 xl:pt-48' ); // phpcs:ignore ?> data-aos="fade-up">
	<div class="mx-auto w-full max-w-2xl px-6">
		<div class="text-center">
			<?php bayugita_the_heading( $heading, get_sub_field( 'heading_tag' ), 'font-playfair' ); ?>
		</div>
		<div class="form mt-10 md:mt-12">
			<?php
			if ( $shortcode ) {
				echo do_shortcode( $shortcode ); // phpcs:ignore WordPress.Security.EscapeOutput
			} else {
				echo '<p>' . esc_html__( 'Contact form not configured. Add a form shortcode in this section.', 'bayugita' ) . '</p>';
			}
			?>
		</div>
		<?php if ( $address || $socials ) : ?>
			<div class="mt-12 text-center md:mt-16">
				<?php if ( $address ) : ?>
					<p class="leading-relaxed"><?php echo wp_kses_post( $address ); ?></p>
				<?php endif; ?>
				<?php if ( $socials ) : ?>
					<div class="mt-6 flex items-center justify-center gap-3">
						<?php foreach ( $socials as $icon => $url ) : ?>
							<a href="<?php echo esc_url( $url ); ?>" target="_blank" rel="noopener noreferrer" class="flex size-8 items-center justify-center border border-gray-300 hover:border-gray-500">
								<iconify-icon icon="<?php echo esc_attr( $icon ); ?>"></iconify-icon>
							</a>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>
			</div>
		<?php endif; ?>
	</div>
</section>
