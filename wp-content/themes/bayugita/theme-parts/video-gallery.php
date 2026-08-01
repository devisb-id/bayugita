<?php
/**
 * Layout: video_gallery — video cards with play overlay (lightGallery video).
 *
 * @package Bayugita
 */

$heading = get_sub_field( 'heading_text' );
$intro   = get_sub_field( 'intro' );
$videos  = get_sub_field( 'videos' );
if ( empty( $videos ) ) {
	return;
}
?>
<section<?php echo bayugita_section_atts( 'mt-16 md:mt-20 xl:mt-28' ); // phpcs:ignore ?> data-aos="fade-up">
	<div class="delimiter">
		<?php bayugita_the_heading( $heading, get_sub_field( 'heading_tag' ), 'text-center' ); ?>
		<?php if ( $intro ) : ?>
			<p class="mx-auto mt-4 max-w-2xl text-center leading-relaxed"><?php echo esc_html( $intro ); ?></p>
		<?php endif; ?>
		<div id="video-gallery" class="mt-10 grid grid-cols-1 gap-3 md:mt-12 md:grid-cols-2 xl:grid-cols-3">
			<?php
			foreach ( $videos as $video ) :
				$file  = $video['video_file'] ?? '';
				$src   = is_array( $file ) ? ( $file['url'] ?? '' ) : $file;
				$poster = $video['poster'] ?? array();
				$poster_url = is_array( $poster ) ? ( $poster['url'] ?? '' ) : $poster;
				$data  = wp_json_encode(
					array(
						'source'     => array( array( 'src' => $src, 'type' => 'video/webm' ) ),
						'attributes' => array( 'preload' => 'auto', 'controls' => true, 'playsinline' => true ),
					)
				);
				?>
				<a data-lg-size="1280-720" data-video='<?php echo esc_attr( $data ); ?>' data-poster="<?php echo esc_url( $poster_url ); ?>" class="group relative block aspect-video cursor-pointer overflow-hidden">
					<img src="<?php echo esc_url( $poster_url ); ?>" alt="<?php echo esc_attr( $video['title'] ?? '' ); ?>" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy" />
					<div class="absolute inset-0 flex items-center justify-center bg-black/20 transition-colors group-hover:bg-black/30">
						<div class="bg-brand flex size-10 items-center justify-center xl:size-12">
							<iconify-icon icon="ph:play-fill" class="text-lg !text-white xl:text-xl"></iconify-icon>
						</div>
					</div>
				</a>
			<?php endforeach; ?>
		</div>
	</div>
</section>
