<?php
/**
 * Layout: image_separator — full-width banner image.
 *
 * @package Bayugita
 */

$image = get_sub_field( 'image' );
if ( empty( $image ) ) {
	return;
}
$ratio = get_sub_field( 'aspect_ratio' ); // 16_7 | 16_9 | 21_9
$ratio_class = array(
	'16_7' => 'aspect-[16/7]',
	'16_9' => 'aspect-[16/9]',
	'21_9' => 'aspect-[21/9]',
);
$ar = $ratio_class[ $ratio ] ?? 'aspect-[16/7]';
?>
<section<?php echo bayugita_section_atts( 'mt-16 md:mt-20 xl:mt-28' ); // phpcs:ignore ?> data-aos="fade-up">
	<div class="<?php echo esc_attr( $ar ); ?> w-full overflow-hidden">
		<?php bayugita_the_image( $image, 'parallax w-full object-cover' ); ?>
	</div>
</section>
