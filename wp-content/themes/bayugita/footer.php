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
$instagram = bayugita_option( 'social_instagram', '#' );
$facebook  = bayugita_option( 'social_facebook', '#' );
$tripadvisor = bayugita_option( 'social_tripadvisor', 'https://www.tripadvisor.com/Hotel_Review-g2283825-d7010672-Reviews-Villa_Bayu_Gita-Ketewel_Sukawati_Bali.html' );
$terms_url   = bayugita_option( 'terms_url', 'https://luxsomanagement.com/terms-conditions/' );
$privacy_url = bayugita_option( 'privacy_url', 'https://luxsomanagement.com/privacy-policy/' );
$copyright   = bayugita_option( 'copyright_text', 'Copyright © ' . gmdate( 'Y' ) . ' Bayu Gita' );
$location_url = function_exists( 'get_permalink' ) ? get_permalink( get_page_by_path( 'location' ) ) : home_url( '/location/' );
$contact_url  = get_permalink( get_page_by_path( 'contact-us' ) );
$wa_link      = 'https://wa.me/' . preg_replace( '/[^0-9]/', '', $whatsapp );
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
							<a href="<?php echo esc_url( $instagram ); ?>" target="_blank" rel="noopener noreferrer" class="flex size-8 items-center justify-center border border-gray-600 text-white hover:border-gray-400">
								<iconify-icon icon="ri:instagram-fill" class="!text-white"></iconify-icon>
							</a>
							<a href="<?php echo esc_url( $facebook ); ?>" target="_blank" rel="noopener noreferrer" class="flex size-8 items-center justify-center border border-gray-600 text-white hover:border-gray-400">
								<iconify-icon icon="ri:facebook-fill" class="!text-white"></iconify-icon>
							</a>
							<a href="<?php echo esc_url( $tripadvisor ); ?>" target="_blank" rel="noopener noreferrer" class="flex size-8 items-center justify-center border border-gray-600 text-white hover:border-gray-400">
								<iconify-icon icon="simple-icons:tripadvisor" class="!text-white"></iconify-icon>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="w-full">
			<div class="delimiter">
				<div class="flex flex-col items-center gap-4 border-t border-gray-600 pt-6 pb-[36px] text-center md:flex-row md:justify-between">
					<p class="text-gray-300"><?php esc_html_e( 'For press and media enquiries please contact us here', 'bayugita' ); ?></p>
					<div class="flex flex-wrap items-center justify-center gap-6 md:gap-8">
						<a href="<?php echo esc_url( $terms_url ); ?>" target="_blank" rel="noopener noreferrer" class="text-gray-300 hover:text-white"><?php esc_html_e( 'Terms and Conditions', 'bayugita' ); ?></a>
						<a href="<?php echo esc_url( $privacy_url ); ?>" target="_blank" rel="noopener noreferrer" class="text-gray-300 hover:text-white"><?php esc_html_e( 'Privacy Policy', 'bayugita' ); ?></a>
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
