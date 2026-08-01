<?php
/**
 * Primary nav walker — reproduces the static header markup:
 * top-level links are white/tracking-wider; items with children become a
 * `group/nav` hover dropdown with a caret and a white submenu panel.
 *
 * @package Bayugita
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Bayugita_Nav_Walker extends Walker_Nav_Menu {

	/**
	 * Start submenu panel (dropdown).
	 */
	public function start_lvl( &$output, $depth = 0, $args = null ) {
		$output .= '<div class="invisible absolute top-full left-1/2 z-50 min-w-56 -translate-x-1/2 translate-y-2 bg-white opacity-0 shadow-md transition-all duration-200 group-hover/nav:visible group-hover/nav:translate-y-0 group-hover/nav:opacity-100">';
	}

	public function end_lvl( &$output, $depth = 0, $args = null ) {
		$output .= '</div>';
	}

	/**
	 * Start element.
	 */
	public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		$has_children = in_array( 'menu-item-has-children', (array) $item->classes, true );
		$is_active    = in_array( 'current-menu-item', (array) $item->classes, true )
			|| in_array( 'current-menu-parent', (array) $item->classes, true );
		$url          = ! empty( $item->url ) ? esc_url( $item->url ) : '#';
		$title        = esc_html( apply_filters( 'the_title', $item->title, $item->ID ) );

		if ( 0 === $depth && $has_children ) {
			$state    = $is_active ? 'active' : 'hover:text-white/70';
			$output  .= '<div class="group/nav relative py-4">';
			$output  .= '<button class="xl:!text-sm flex cursor-pointer items-center gap-1 text-sm tracking-wider text-white ' . esc_attr( $state ) . '">';
			$output  .= $title . ' <iconify-icon icon="ph:caret-down" class="!text-xs !text-white/80"></iconify-icon>';
			$output  .= '</button>';
			return;
		}

		if ( 0 === $depth ) {
			$state   = $is_active ? 'active' : 'hover:text-white/70';
			$output .= '<a href="' . $url . '" class="xl:!text-sm text-sm tracking-wider text-white ' . esc_attr( $state ) . '">' . $title . '</a>';
			return;
		}

		// Submenu link.
		$output .= '<a href="' . $url . '" class="text-dark hover:bg-brand-50 block px-5 py-3 text-sm">' . $title . '</a>';
	}

	/**
	 * End element — close the group wrapper only for parents.
	 */
	public function end_el( &$output, $item, $depth = 0, $args = null ) {
		if ( 0 === $depth && in_array( 'menu-item-has-children', (array) $item->classes, true ) ) {
			$output .= '</div>';
		}
	}
}
