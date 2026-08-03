<?php
/**
 * Single Special Offer.
 *
 * @package Bayugita
 */

get_header();

while ( have_posts() ) :
	the_post();
	?>
	<article <?php post_class( 'pt-36 md:pt-40 xl:pt-48' ); ?>>
		<div class="delimiter">
			<div class="mx-auto max-w-3xl text-center">
				<?php the_title( '<h1 class="font-playfair">', '</h1>' ); ?>
			</div>
			<?php if ( has_post_thumbnail() ) : ?>
				<div class="mx-auto mt-10 aspect-[16/9] max-w-5xl overflow-hidden">
					<?php the_post_thumbnail( 'full', array( 'class' => 'h-full w-full object-cover' ) ); ?>
				</div>
			<?php endif; ?>
			<div class="prose-basic mx-auto mt-10 max-w-3xl leading-relaxed">
				<?php the_content(); ?>
			</div>
		</div>
	</article>
	<?php
endwhile;

get_footer();
