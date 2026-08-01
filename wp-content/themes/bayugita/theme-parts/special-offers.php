<?php
/**
 * Layout: special_offers — cards from the special-offer CPT.
 *
 * @package Bayugita
 */

$heading = get_sub_field( 'heading_text' );
$intro   = get_sub_field( 'intro' );
$offers  = get_sub_field( 'selected_offers' ); // post object (special-offer) multiple

if ( empty( $offers ) ) {
	$q      = new WP_Query( array( 'post_type' => 'special-offer', 'posts_per_page' => 4, 'ignore_sticky_posts' => true ) );
	$offers = $q->posts;
}
if ( empty( $offers ) ) {
	return;
}
?>
<section<?php echo bayugita_section_atts( 'mb-16 md:mb-20 xl:mb-28 pt-16 md:pt-20 xl:pt-28' ); // phpcs:ignore ?> data-aos="fade-up">
	<div class="delimiter">
		<div class="text-center">
			<?php bayugita_the_heading( $heading, get_sub_field( 'heading_tag' ), 'font-playfair' ); ?>
			<?php if ( $intro ) : ?>
				<p class="mx-auto mt-4 max-w-2xl leading-relaxed"><?php echo esc_html( $intro ); ?></p>
			<?php endif; ?>
		</div>

		<div class="mx-auto mt-12 grid max-w-5xl grid-cols-1 gap-10 md:grid-cols-2">
			<?php foreach ( $offers as $post ) : setup_postdata( $post ); ?>
				<a href="<?php the_permalink(); ?>" class="group flex h-full flex-col">
					<div class="aspect-[4/3] overflow-hidden">
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'large', array( 'class' => 'h-full w-full object-cover transition-transform duration-500 group-hover:scale-105', 'loading' => 'lazy' ) ); ?>
						<?php endif; ?>
					</div>
					<div class="mt-6 flex flex-1 flex-col text-center">
						<h3 class="font-playfair !text-xl"><?php the_title(); ?></h3>
						<p class="mx-auto mt-3 max-w-md leading-relaxed"><?php echo esc_html( get_the_excerpt() ); ?></p>
						<span class="text-brand mt-4 inline-flex items-center justify-center gap-1"><?php esc_html_e( 'View Offer', 'bayugita' ); ?> <iconify-icon icon="ph:arrow-right"></iconify-icon></span>
					</div>
				</a>
			<?php endforeach; wp_reset_postdata(); ?>
		</div>
	</div>
</section>
