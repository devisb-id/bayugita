<?php
/**
 * Front page — same flexible-content loader as page.php.
 *
 * @package Bayugita
 */

get_header();

while ( have_posts() ) :
	the_post();

	if ( function_exists( 'have_rows' ) && have_rows( 'page_sections' ) ) :
		while ( have_rows( 'page_sections' ) ) :
			the_row();
			get_template_part( 'theme-parts/' . str_replace( '_', '-', get_row_layout() ) );
		endwhile;
	else :
		the_content();
	endif;

endwhile;

get_footer();
