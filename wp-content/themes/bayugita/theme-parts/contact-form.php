<?php
/**
 * Layout: contact_form — form plugin shortcode + address/social row.
 *
 * @package Bayugita
 */

$heading   = get_sub_field( 'heading_text' );
$shortcode = get_sub_field( 'form_shortcode' );
$address   = get_sub_field( 'address_text' );
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
		<?php if ( $address || have_rows( 'social_links' ) ) : ?>
			<div class="mt-12 text-center md:mt-16">
				<?php if ( $address ) : ?>
					<p class="leading-relaxed"><?php echo esc_html( $address ); ?></p>
				<?php endif; ?>
				<?php if ( have_rows( 'social_links' ) ) : ?>
					<div class="mt-6 flex items-center justify-center gap-3">
						<?php while ( have_rows( 'social_links' ) ) : the_row(); ?>
							<a href="<?php echo esc_url( get_sub_field( 'url' ) ); ?>" target="_blank" rel="noopener noreferrer" class="flex size-8 items-center justify-center border border-gray-300 hover:border-gray-500">
								<iconify-icon icon="<?php echo esc_attr( get_sub_field( 'icon' ) ); ?>"></iconify-icon>
							</a>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
			</div>
		<?php endif; ?>
	</div>
</section>
