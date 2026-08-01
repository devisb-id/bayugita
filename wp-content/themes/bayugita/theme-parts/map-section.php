<?php
/**
 * Layout: map_section — Google Maps embed.
 *
 * @package Bayugita
 */

$heading = get_sub_field( 'heading_text' );
$eyebrow = get_sub_field( 'eyebrow' );
$intro   = get_sub_field( 'intro' );
$embed   = get_sub_field( 'map_embed_code' );
?>
<section<?php echo bayugita_section_atts( 'mt-16 mb-16 md:mt-20 md:mb-20 xl:mt-28 xl:mb-28' ); // phpcs:ignore ?> data-aos="fade-up">
	<?php if ( $heading || $intro ) : ?>
		<div class="delimiter">
			<div class="mx-auto max-w-3xl text-center">
				<?php bayugita_the_heading( $heading, get_sub_field( 'heading_tag' ), 'font-playfair' ); ?>
				<?php if ( $eyebrow ) : ?>
					<p class="text-brand mt-4 tracking-wider uppercase"><?php echo esc_html( $eyebrow ); ?></p>
				<?php endif; ?>
				<?php if ( $intro ) : ?>
					<p class="mt-4 leading-relaxed"><?php echo esc_html( $intro ); ?></p>
				<?php endif; ?>
			</div>
		</div>
	<?php endif; ?>
	<?php if ( $embed ) : ?>
		<div class="mt-12 h-80 w-full xl:h-[28rem]">
			<?php
			// Allow iframe markup from a trusted admin field.
			echo wp_kses(
				$embed,
				array(
					'iframe' => array(
						'src'             => array(),
						'width'           => array(),
						'height'          => array(),
						'style'           => array(),
						'allowfullscreen' => array(),
						'loading'         => array(),
						'referrerpolicy'  => array(),
						'class'           => array(),
					),
				)
			);
			?>
		</div>
	<?php endif; ?>
</section>
