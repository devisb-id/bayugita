<?php
/**
 * Page template — renders the SCF `page_sections` flexible content.
 *
 * @package Bayugita
 */

get_header();

while ( have_posts() ) :
	the_post();

	if ( function_exists( 'have_rows' ) && have_rows( 'page_sections' ) ) :
		while ( have_rows( 'page_sections' ) ) :
			the_row();
			$layout = get_row_layout();
			get_template_part( 'theme-parts/' . str_replace( '_', '-', $layout ) );
		endwhile;
	else :
		// No sections yet: fall back to the editor content.
		echo '<div class="delimiter py-16"><div class="entry-content mx-auto max-w-3xl">';
		the_content();
		echo '</div></div>';
	endif;

endwhile;

get_footer();
