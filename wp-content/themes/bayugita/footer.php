<?php
/**
 * The footer — reproduces static-file/partials/footer.php with WP settings.
 *
 * @package Bayugita
 */

$brand_name   = bayugita_option( 'footer_brand', get_bloginfo( 'name' ) );
$address       = bayugita_option( 'footer_address', 'Jalan Pantai Pabean, Banjar Pabean Ketewel, Kecamatan Sukawati, Kabupaten Gianyar, Bali, Indonesia 80582' );
$whatsapp      = bayugita_option( 'whatsapp_number', '6281234567890' );
$luxso_logo    = bayugita_option( 'partner_logo' );
$luxso_url     = is_array( $luxso_logo ) ? ( $luxso_logo['url'] ?? '' ) : '';
if ( ! $luxso_url ) {
	$luxso_url = get_template_directory_uri() . '/assets/images/luxso-logo.webp';
}
$pinterest = bayugita_option( 'social_pinterest', '' );
$youtube   = bayugita_option( 'social_youtube', '' );
$tiktok    = bayugita_option( 'social_tiktok', '' );
$instagram = bayugita_option( 'social_instagram', '#' );
$facebook  = bayugita_option( 'social_facebook', '#' );
$tripadvisor = bayugita_option( 'social_tripadvisor', 'https://www.tripadvisor.com/Hotel_Review-g2283825-d7010672-Reviews-Villa_Bayu_Gita-Ketewel_Sukawati_Bali.html' );
$footer_links = bayugita_option( 'footer_links', array() );
$press        = bayugita_option( 'footer_press', array() );
$copyright   = bayugita_option( 'copyright_text', 'Copyright © ' . gmdate( 'Y' ) . ' Bayu Gita' );
$location_url = function_exists( 'get_permalink' ) ? get_permalink( get_page_by_path( 'location' ) ) : home_url( '/location/' );
$contact_url  = bayugita_option( 'enquiry_url' ) ?: get_permalink( get_page_by_path( 'contact-us' ) );
$wa_message   = bayugita_option( 'whatsapp_message', '' );
$wa_link      = 'https://wa.me/' . preg_replace( '/[^0-9]/', '', $whatsapp );
if ( $wa_message ) {
	$wa_link .= '?text=' . rawurlencode( $wa_message );
}
?>
	</main><!-- /main -->

	<!-- Footer -->
	<footer id="contact" class="bg-dark w-full">
		<div class="delimiter pt-[48px] pb-[36px]">
			<div class="flex flex-col gap-10 md:flex-row md:justify-between">
				<div class="max-w-xl">
					<h2 class="!text-xl text-white md:!text-2xl xl:!text-3xl"><?php echo esc_html( $brand_name ); ?></h2>
					<p class="mt-4 leading-relaxed text-gray-300">
						<a href="<?php echo esc_url( $location_url ?: home_url( '/' ) ); ?>" class="text-gray-300 underline-offset-4 hover:text-white hover:underline"><?php esc_html_e( 'Bayu Gita Estate', 'bayugita' ); ?></a>, <?php echo esc_html( $address ); ?>
					</p>
					<div class="mt-6 flex flex-wrap items-center gap-6">
						<a href="<?php echo esc_url( $wa_link ); ?>" target="_blank" rel="noopener noreferrer" class="btn-primary inline-flex items-center gap-2">
							<iconify-icon icon="ri:whatsapp-fill" class="!text-white"></iconify-icon>
							<?php esc_html_e( 'Contact Us on Whatsapp', 'bayugita' ); ?>
						</a>
						<a href="<?php echo esc_url( $contact_url ?: home_url( '/' ) ); ?>" class="inline-flex cursor-pointer items-center gap-2 text-sm text-white hover:text-white/70">
							<iconify-icon icon="ph:envelope-simple" class="!text-white"></iconify-icon>
							<?php esc_html_e( 'Enquire Now', 'bayugita' ); ?>
							<iconify-icon icon="ph:arrow-right" class="!text-white"></iconify-icon>
						</a>
					</div>
				</div>
				<div class="flex flex-col items-start gap-10 md:items-end md:gap-12">
					<div class="flex flex-col items-start md:items-end">
						<img src="<?php echo esc_url( $luxso_url ); ?>" alt="Luxso Villa &amp; Resort Management" class="h-14 w-auto xl:h-16" loading="lazy" />
					</div>
					<div class="flex flex-col items-start md:items-end">
						<p class="mb-4 text-white"><?php esc_html_e( 'Follow Us', 'bayugita' ); ?></p>
						<div class="flex items-center gap-3">
							<?php
							$socials = array(
								'ri:instagram-fill'        => $instagram,
								'ri:facebook-fill'         => $facebook,
								'simple-icons:tripadvisor' => $tripadvisor,
								'ri:pinterest-fill'        => $pinterest,
								'ri:youtube-fill'          => $youtube,
								'ri:tiktok-fill'           => $tiktok,
							);
							foreach ( $socials as $icon => $url ) :
								$url = trim( (string) $url );
								if ( '' === $url || '#' === $url ) {
									continue;
								}
								?>
								<a href="<?php echo esc_url( $url ); ?>" target="_blank" rel="noopener noreferrer" class="flex size-8 items-center justify-center border border-gray-600 text-white hover:border-gray-400">
									<iconify-icon icon="<?php echo esc_attr( $icon ); ?>" class="!text-white"></iconify-icon>
								</a>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="w-full">
			<div class="delimiter">
				<div class="flex flex-col items-center gap-4 border-t border-gray-600 pt-6 pb-[36px] text-center md:flex-row md:justify-between">
					<?php
					$press_text  = $press['text'] ?? __( 'For press and media enquiries please', 'bayugita' );
					$press_label = $press['label'] ?? __( 'contact us here', 'bayugita' );
					$press_type  = $press['type'] ?? 'modal';
					if ( 'external' === $press_type ) {
						$press_href = $press['external_url'] ?? '#';
						$press_att  = ' target="_blank" rel="noopener noreferrer"';
						$press_tag  = 'a';
					} elseif ( 'internal' === $press_type ) {
						$link_val   = $press['internal_url'] ?? '';
						$press_href = is_array( $link_val ) ? get_permalink( $link_val['ID'] ?? 0 ) : $link_val;
						$press_href = $press_href ? $press_href : '#';
						$press_att  = '';
						$press_tag  = 'a';
					} else {
						$press_href = $press['modal_id'] ?? 'modal-enquiry';
						$press_att  = '';
						$press_tag  = 'button';
					}
					?>
					<p class="text-gray-300">
						<?php echo esc_html( $press_text ); ?>
						<?php if ( 'button' === $press_tag ) : ?>
							<button type="button" data-modal-open="<?php echo esc_attr( $press_href ); ?>" class="cursor-pointer"><?php echo esc_html( $press_label ); ?></button>
						<?php else : ?>
							<a href="<?php echo esc_url( $press_href ); ?>"<?php echo $press_att; // phpcs:ignore WordPress.Security.EscapeOutput -- static attr string. ?> class="cursor-pointer"><?php echo esc_html( $press_label ); ?></a>
						<?php endif; ?>
					</p>
					<div class="flex flex-wrap items-center justify-center gap-6 md:gap-8">
						<?php
						if ( is_array( $footer_links ) && ! empty( $footer_links ) ) {
							foreach ( $footer_links as $link ) {
								$fl_label = $link['label'] ?? '';
								$fl_url   = $link['url'] ?? '';
								if ( '' === trim( (string) $fl_label ) || '' === trim( (string) $fl_url ) ) {
									continue;
								}
								$fl_attr = ! empty( $link['new_tab'] ) ? ' target="_blank" rel="noopener noreferrer"' : '';
								printf(
									'<a href="%1$s"%2$s class="text-gray-300 hover:text-white">%3$s</a>',
									esc_url( $fl_url ),
									$fl_attr, // phpcs:ignore WordPress.Security.EscapeOutput -- static attr string.
									esc_html( $fl_label )
								);
							}
						} else {
							?>
							<a href="https://luxsomanagement.com/terms-conditions/" target="_blank" rel="noopener noreferrer" class="text-gray-300 hover:text-white"><?php esc_html_e( 'Terms and Conditions', 'bayugita' ); ?></a>
							<a href="https://luxsomanagement.com/privacy-policy/" target="_blank" rel="noopener noreferrer" class="text-gray-300 hover:text-white"><?php esc_html_e( 'Privacy Policy', 'bayugita' ); ?></a>
							<?php
						}
						?>
						<p class="text-gray-300"><?php echo esc_html( $copyright ); ?></p>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<?php get_template_part( 'template-parts/global/enquiry-modal' ); ?>

</div><!-- .page-content -->

<?php wp_footer(); ?>
</body>
</html>
