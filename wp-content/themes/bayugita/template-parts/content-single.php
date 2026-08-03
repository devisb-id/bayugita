<?php
/**
 * Template part for displaying a single post.
 *
 * @package Bayugita
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<div class="entry-meta">
			<?php
			printf(
				/* translators: %s: post date. */
				esc_html__( 'Posted on %s', 'bayugita' ),
				'<time datetime="' . esc_attr( get_the_date( DATE_W3C ) ) . '">' . esc_html( get_the_date() ) . '</time>'
			);
			?>
		</div>
	</header>

	<?php if ( has_post_thumbnail() ) : ?>
		<div class="post-thumbnail"><?php the_post_thumbnail( 'full' ); ?></div>
	<?php endif; ?>

	<div class="entry-content">
		<?php
		the_content();
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bayugita' ),
				'after'  => '</div>',
			)
		);
		?>
	</div>

	<footer class="entry-footer">
		<?php the_tags( '<span class="tags-links">', ', ', '</span>' ); ?>
	</footer>
</article>
