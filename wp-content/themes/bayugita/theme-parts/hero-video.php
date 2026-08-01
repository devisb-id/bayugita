<?php
/**
 * Layout: hero_video — video hero (upload or YouTube).
 *
 * @package Bayugita
 */

$type = get_sub_field( 'video_type' );
?>
<section<?php echo bayugita_section_atts( 'relative w-full overflow-hidden' ); // phpcs:ignore ?>>
	<?php if ( 'youtube' === $type && get_sub_field( 'youtube_url' ) ) : ?>
		<div class="aspect-video w-full">
			<?php
			$embed = wp_oembed_get( get_sub_field( 'youtube_url' ) );
			echo $embed ? $embed : ''; // phpcs:ignore WordPress.Security.EscapeOutput
			?>
		</div>
	<?php else : ?>
		<?php
		$file = get_sub_field( 'video_file' );
		$url  = is_array( $file ) ? ( $file['url'] ?? '' ) : $file;
		if ( $url ) :
			?>
			<video class="h-[70vh] w-full object-cover xl:h-[80vh]" autoplay muted loop playsinline>
				<source src="<?php echo esc_url( $url ); ?>" type="video/webm" />
			</video>
		<?php endif; ?>
	<?php endif; ?>
	<?php
	$overlay = get_sub_field( 'overlay_title' );
	if ( $overlay ) :
		?>
		<div class="absolute inset-0 z-10 flex items-center justify-center">
			<?php bayugita_the_heading( $overlay, get_sub_field( 'heading_tag' ), 'font-playfair text-white text-center' ); ?>
		</div>
	<?php endif; ?>
</section>
