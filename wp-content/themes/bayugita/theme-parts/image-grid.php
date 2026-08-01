<?php
/**
 * Layout: image_grid — grid of images (2-col / asymmetric / framed+download).
 *
 * @package Bayugita
 */

$heading = get_sub_field( 'heading_text' );
$style   = get_sub_field( 'display_style' ); // two_col | asymmetric | framed
$images  = get_sub_field( 'images' );
if ( empty( $images ) ) {
	return;
}
?>
<section<?php echo bayugita_section_atts( 'mt-16 md:mt-20 xl:mt-28' ); // phpcs:ignore ?> data-aos="fade-up">
	<div class="delimiter">
		<?php if ( $heading ) : ?>
			<div class="text-center">
				<?php bayugita_the_heading( $heading, get_sub_field( 'heading_tag' ), 'font-playfair' ); ?>
			</div>
		<?php endif; ?>

		<?php if ( 'framed' === $style ) : ?>
			<div class="mt-10 grid grid-cols-1 gap-10 md:grid-cols-<?php echo count( $images ) > 1 ? '2' : '1'; ?> md:gap-12">
				<?php foreach ( $images as $item ) : ?>
					<div class="text-center">
						<?php if ( ! empty( $item['title'] ) ) : ?>
							<h3 class="!text-xl"><?php echo esc_html( $item['title'] ); ?></h3>
						<?php endif; ?>
						<?php if ( ! empty( $item['eyebrow'] ) ) : ?>
							<p class="text-brand mt-1 tracking-wider uppercase"><?php echo esc_html( $item['eyebrow'] ); ?></p>
						<?php endif; ?>
						<div class="mt-6 border border-gray-200 bg-white p-4">
							<?php bayugita_the_image( $item['image'], 'w-full' ); ?>
						</div>
						<?php if ( ! empty( $item['download_file'] ) ) : ?>
							<?php
							$dl  = $item['download_file'];
							$url = is_array( $dl ) ? ( $dl['url'] ?? '' ) : $dl;
							?>
							<a href="<?php echo esc_url( $url ); ?>" download class="btn-secondary group mt-6 inline-flex items-center gap-2">
								<iconify-icon icon="ph:download-simple"></iconify-icon>
								<?php esc_html_e( 'Download in High Resolution', 'bayugita' ); ?>
							</a>
						<?php endif; ?>
					</div>
				<?php endforeach; ?>
			</div>

		<?php elseif ( 'asymmetric' === $style ) : ?>
			<div class="mt-10 grid auto-rows-[16rem] grid-cols-1 gap-3 md:mt-12 md:auto-rows-[20rem] md:grid-cols-3 xl:auto-rows-[24rem]">
				<?php foreach ( $images as $i => $item ) : ?>
					<div class="overflow-hidden <?php echo ( 0 === $i % 3 ) ? 'md:col-span-2' : ''; ?>">
						<?php bayugita_the_image( $item['image'] ?? $item, 'parallax w-full object-cover' ); ?>
					</div>
				<?php endforeach; ?>
			</div>

		<?php else : ?>
			<div class="mt-10 grid grid-cols-1 gap-2 md:grid-cols-2 md:gap-3">
				<?php foreach ( $images as $item ) : ?>
					<div class="aspect-[4/3] overflow-hidden md:aspect-[16/11]">
						<?php bayugita_the_image( $item['image'] ?? $item, 'parallax w-full object-cover' ); ?>
					</div>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	</div>
</section>
