<?php
/**
 * Mobile nav walker — reproduces the static mobile menu markup:
 * plain links for leaf items; parents become a `.mobile-nav-group` accordion
 * with a `.mobile-nav-toggle` button and a collapsible `.mobile-nav-panel`.
 *
 * @package Bayugita
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Bayugita_Mobile_Nav_Walker extends Walker_Nav_Menu {

	public function start_lvl( &$output, $depth = 0, $args = null ) {
		$output .= '<div class="mobile-nav-panel hidden flex-col gap-1 pl-4">';
	}

	public function end_lvl( &$output, $depth = 0, $args = null ) {
		$output .= '</div>';
	}

	public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		$has_children = in_array( 'menu-item-has-children', (array) $item->classes, true );
		$url          = ! empty( $item->url ) ? esc_url( $item->url ) : '#';
		$title        = esc_html( apply_filters( 'the_title', $item->title, $item->ID ) );

		if ( 0 === $depth && $has_children ) {
			$output .= '<div class="mobile-nav-group">';
			$output .= '<button type="button" class="mobile-nav-toggle text-dark-500 hover:text-brand flex w-full cursor-pointer items-center justify-between py-3 text-left text-sm">';
			$output .= $title . ' <iconify-icon icon="ph:caret-down" class="mobile-nav-caret !text-base"></iconify-icon>';
			$output .= '</button>';
			return;
		}

		if ( 0 === $depth ) {
			$output .= '<a href="' . $url . '" class="text-dark hover:text-brand py-3 text-sm">' . $title . '</a>';
			return;
		}

		// Submenu link.
		$output .= '<a href="' . $url . '" class="text-dark-500 hover:text-brand py-2 text-sm">' . $title . '</a>';
	}

	public function end_el( &$output, $item, $depth = 0, $args = null ) {
		if ( 0 === $depth && in_array( 'menu-item-has-children', (array) $item->classes, true ) ) {
			$output .= '</div>';
		}
	}
}
