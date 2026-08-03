<?php
/**
 * Layout: featured_stories — cards from selected WP posts (or latest).
 *
 * @package Bayugita
 */

$heading = get_sub_field( 'heading_text' );
$button  = get_sub_field( 'button' );
$posts   = get_sub_field( 'stories' ); // post object multiple
$cols    = get_sub_field( 'columns' ); // 3 | 4

if ( empty( $posts ) ) {
	$q     = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => ( '4' === $cols ? 4 : 3 ), 'ignore_sticky_posts' => true ) );
	$posts = $q->posts;
}
if ( empty( $posts ) ) {
	return;
}
$grid = ( '4' === $cols ) ? 'sm:grid-cols-2 xl:grid-cols-4' : 'md:grid-cols-3';
?>
<section<?php echo bayugita_section_atts( 'mt-16 md:mt-20 xl:mt-28' ); // phpcs:ignore ?> data-aos="fade-up">
	<div class="delimiter">
		<div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
			<?php bayugita_the_heading( $heading, get_sub_field( 'heading_tag' ), 'font-playfair' ); ?>
			<?php if ( $button ) : ?>
				<div><?php bayugita_render_button( $button['button'] ?? $button, 'btn-primary', 'ph:arrow-right' ); ?></div>
			<?php endif; ?>
		</div>

		<div class="mt-12 grid grid-cols-1 gap-8 <?php echo esc_attr( $grid ); ?> md:mt-16 xl:gap-10">
			<?php
			foreach ( $posts as $post ) :
				setup_postdata( $post );
				?>
				<a href="<?php the_permalink(); ?>" class="group flex h-full flex-col">
					<div class="aspect-[4/3] overflow-hidden">
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'full', array( 'class' => 'h-full w-full object-cover transition-transform duration-500 group-hover:scale-105', 'loading' => 'lazy' ) ); ?>
						<?php endif; ?>
					</div>
					<h3 class="font-playfair mt-6 !text-xl"><?php the_title(); ?></h3>
					<p class="mt-2 leading-relaxed"><?php echo esc_html( get_the_excerpt() ); ?></p>
					<span class="text-brand mt-4 inline-flex items-center gap-1"><?php esc_html_e( 'Discover More', 'bayugita' ); ?> <iconify-icon icon="ph:arrow-right"></iconify-icon></span>
				</a>
			<?php endforeach; wp_reset_postdata(); ?>
		</div>
	</div>
</section>
