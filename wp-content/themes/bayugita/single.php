<?php
/**
 * The template for displaying all single posts.
 *
 * @package Bayugita
 */

get_header();
?>

<div id="main" class="site-main delimiter pt-36 md:pt-40 xl:pt-48">
	<?php
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/content', 'single' );

		the_post_navigation(
			array(
				'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'bayugita' ) . '</span> <span class="nav-title">%title</span>',
				'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'bayugita' ) . '</span> <span class="nav-title">%title</span>',
			)
		);

		if ( comments_open() || get_comments_number() ) {
			comments_template();
		}
	endwhile;
	?>
</div>

<?php
get_sidebar();
get_footer();
