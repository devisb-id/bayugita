<?php
/**
 * The template for displaying search results.
 *
 * @package Bayugita
 */

get_header();
?>

<div id="main" class="site-main delimiter pt-36 md:pt-40 xl:pt-48">
	<?php if ( have_posts() ) : ?>
		<header class="page-header">
			<h1 class="page-title">
				<?php
				/* translators: %s: search query. */
				printf( esc_html__( 'Search Results for: %s', 'bayugita' ), '<span>' . get_search_query() . '</span>' );
				?>
			</h1>
		</header>

		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', 'search' );
		endwhile;

		the_posts_navigation();

	else :
		get_template_part( 'template-parts/content', 'none' );
	endif;
	?>
</div>

<?php
get_sidebar();
get_footer();
