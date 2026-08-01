<?php
/**
 * Template part for displaying posts in a loop.
 *
 * @package Bayugita
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) {
			the_title( '<h1 class="entry-title">', '</h1>' );
		} else {
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		}
		?>
	</header>

	<?php if ( has_post_thumbnail() && ! is_singular() ) : ?>
		<a class="post-thumbnail" href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium_large' ); ?></a>
	<?php endif; ?>

	<div class="entry-content">
		<?php
		if ( is_singular() ) {
			the_content();
			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bayugita' ),
					'after'  => '</div>',
				)
			);
		} else {
			the_excerpt();
		}
		?>
	</div>

	<footer class="entry-footer">
		<a href="<?php the_permalink(); ?>" class="read-more"><?php esc_html_e( 'Read more', 'bayugita' ); ?></a>
	</footer>
</article>
