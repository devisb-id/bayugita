<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Bayugita
 */

get_header();
?>

<div id="main" class="site-main delimiter pt-36 md:pt-40 xl:pt-48">
	<section class="error-404 not-found">
		<header class="page-header">
			<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'bayugita' ); ?></h1>
		</header>

		<div class="page-content">
			<p><?php esc_html_e( 'It looks like nothing was found at this location. Try a search?', 'bayugita' ); ?></p>
			<?php get_search_form(); ?>
		</div>
	</section>
</div>

<?php
get_footer();
