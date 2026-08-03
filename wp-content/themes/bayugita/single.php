<?php
/**
 * Single post — Featured Story detail.
 * Mirrors static-file/featured-stories-detail.php.
 *
 * @package Bayugita
 */

get_header();

while ( have_posts() ) :
	the_post();

	$stories_page = get_page_by_path( 'featured-stories' );
	$stories_url  = $stories_page ? get_permalink( $stories_page ) : home_url( '/' );
	?>

	<main class="pt-36 md:pt-40 xl:pt-48">

		<!-- Article Header -->
		<section data-aos="fade-up">
			<div class="delimiter">
				<div class="mx-auto max-w-3xl text-center">
					<p class="text-brand text-sm font-medium tracking-wider uppercase"><?php esc_html_e( 'Featured Story', 'bayugita' ); ?></p>
					<?php the_title( '<h1 class="mt-4 leading-snug">', '</h1>' ); ?>
					<?php if ( has_excerpt() ) : ?>
						<p class="mt-6 leading-relaxed"><?php echo esc_html( get_the_excerpt() ); ?></p>
					<?php endif; ?>
				</div>
			</div>
		</section>

		<!-- Article Hero Image -->
		<?php if ( has_post_thumbnail() ) : ?>
			<section data-aos="fade-up" class="mt-12 xl:mt-16">
				<div class="delimiter">
					<div class="aspect-[16/9] w-full overflow-hidden">
						<?php the_post_thumbnail( 'full', array( 'class' => 'parallax w-full object-cover', 'loading' => 'lazy' ) ); ?>
					</div>
				</div>
			</section>
		<?php endif; ?>

		<!-- Article Body -->
		<section data-aos="fade-up" class="mt-12 xl:mt-16">
			<div class="delimiter">
				<div class="prose-basic mx-auto max-w-3xl leading-relaxed">
					<?php the_content(); ?>
				</div>
			</div>
		</section>

		<!-- More Stories -->
		<?php
		$more_q = new WP_Query(
			array(
				'post_type'           => 'post',
				'posts_per_page'      => 3,
				'post__not_in'        => array( get_the_ID() ),
				'ignore_sticky_posts' => true,
				'no_found_rows'       => true,
			)
		);
		if ( $more_q->have_posts() ) :
			?>
			<section data-aos="fade-up" class="mt-16 md:mt-20 xl:mt-28">
				<div class="delimiter">
					<div class="text-center">
						<h2 class="font-playfair text-3xl xl:text-4xl"><?php esc_html_e( 'More Stories', 'bayugita' ); ?></h2>
					</div>
					<div class="mt-12 grid grid-cols-1 gap-8 md:grid-cols-3 xl:mt-16 xl:gap-10">
						<?php
						while ( $more_q->have_posts() ) :
							$more_q->the_post();
							?>
							<a href="<?php the_permalink(); ?>" class="group flex h-full flex-col">
								<div class="aspect-[4/3] overflow-hidden">
									<?php if ( has_post_thumbnail() ) : ?>
										<?php the_post_thumbnail( 'full', array( 'class' => 'h-full w-full object-cover transition-transform duration-500 group-hover:scale-105', 'loading' => 'lazy' ) ); ?>
									<?php endif; ?>
								</div>
								<div class="mt-6 flex flex-1 flex-col">
									<h3 class="font-playfair text-lg leading-snug font-normal xl:text-xl"><?php the_title(); ?></h3>
									<p class="mt-3 leading-relaxed"><?php echo esc_html( get_the_excerpt() ); ?></p>
									<div class="mt-6 flex flex-1 items-end">
										<span class="text-brand inline-flex items-center gap-1 text-sm font-medium">
											<?php esc_html_e( 'Discover More', 'bayugita' ); ?>
											<iconify-icon icon="ph:arrow-right" class="!text-brand transition-transform group-hover:translate-x-1"></iconify-icon>
										</span>
									</div>
								</div>
							</a>
							<?php
						endwhile;
						wp_reset_postdata();
						?>
					</div>
				</div>
			</section>
		<?php endif; ?>

		<!-- Back to Stories -->
		<section data-aos="fade-up" class="mt-16 mb-16 md:mt-20 md:mb-20 xl:mt-28 xl:mb-28">
			<div class="delimiter">
				<div class="mx-auto max-w-3xl text-center">
					<a href="<?php echo esc_url( $stories_url ); ?>" class="btn-secondary group">
						<iconify-icon icon="ph:arrow-left"></iconify-icon>
						<?php esc_html_e( 'Back to Stories', 'bayugita' ); ?>
					</a>
				</div>
			</div>
		</section>

	</main>

	<?php
endwhile;

get_footer();
