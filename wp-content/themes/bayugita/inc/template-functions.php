<?php
/**
 * Shared template helpers.
 *
 * @package Bayugita
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Whitelist a heading tag chosen in SCF; fall back to h2.
 *
 * @param string $tag Raw tag value.
 * @return string Safe tag name.
 */
function bayugita_heading_tag( $tag ) {
	$allowed = array( 'h1', 'h2', 'h3', 'h4', 'h5', 'h6' );
	$tag     = is_string( $tag ) ? strtolower( trim( $tag ) ) : '';
	return in_array( $tag, $allowed, true ) ? $tag : 'h2';
}

/**
 * Render a heading built from a heading_text + heading_tag pair.
 *
 * @param array  $row     Row/section data (uses get_sub_field when null).
 * @param string $classes CSS classes for the tag.
 */
function bayugita_the_heading( $text, $tag, $classes = '' ) {
	$text = trim( (string) $text );
	if ( '' === $text ) {
		return;
	}
	$tag   = bayugita_heading_tag( $tag );
	$class = $classes ? ' class="' . esc_attr( $classes ) . '"' : '';
	printf( '<%1$s%2$s>%3$s</%1$s>', $tag, $class, esc_html( $text ) ); // phpcs:ignore WordPress.Security.EscapeOutput
}

/**
 * Map a background palette value to its CSS class.
 *
 * @param string $value Palette key stored by SCF.
 * @return string CSS class (may be empty for default).
 */
function bayugita_bg_class( $value ) {
	$map = array(
		'default' => '',
		'white'   => 'bg-white',
		'cream'   => 'bg-brand-25',
		'brand'   => 'bg-brand-50',
		'gray'    => 'bg-gray-100',
		'dark'    => 'bg-dark text-white',
	);
	return isset( $map[ $value ] ) ? $map[ $value ] : '';
}

/**
 * Build the opening tag attributes shared by every section (bg + anchor id).
 *
 * @param string $extra_class Additional wrapper classes.
 * @return string Attribute string.
 */
function bayugita_section_atts( $extra_class = '' ) {
	$bg      = bayugita_bg_class( (string) get_sub_field( 'section_background' ) );
	$id      = trim( (string) get_sub_field( 'section_id' ) );
	$classes = trim( $extra_class . ' ' . $bg );

	$atts = '';
	if ( $id ) {
		$atts .= ' id="' . esc_attr( sanitize_title( $id ) ) . '"';
	}
	if ( $classes ) {
		$atts .= ' class="' . esc_attr( $classes ) . '"';
	}
	return $atts;
}

/**
 * Resolve the destination URL of a button group (3 conditions), no markup.
 *
 * @param array $button Button group data.
 * @return string URL or empty string.
 */
function bayugita_button_url( $button ) {
	if ( empty( $button ) ) {
		return '';
	}
	$type = isset( $button['button_type'] ) ? $button['button_type'] : 'internal';
	switch ( $type ) {
		case 'external':
			return isset( $button['button_external_url'] ) ? $button['button_external_url'] : '';
		case 'download':
			$file = isset( $button['button_download_file'] ) ? $button['button_download_file'] : '';
			return is_array( $file ) ? ( $file['url'] ?? '' ) : (string) $file;
		case 'internal':
		default:
			$link = isset( $button['button_internal_link'] ) ? $button['button_internal_link'] : '';
			if ( is_array( $link ) ) {
				return get_permalink( $link['ID'] ?? 0 );
			}
			return (string) $link;
	}
}

/**
 * Render a button from the reusable button group (3 conditions).
 *
 * Expected keys: button_label, button_type (internal|external|download),
 * button_internal_link, button_external_url, button_download_file.
 *
 * @param array  $button  Button group data.
 * @param string $classes CSS classes (default btn-primary).
 * @param string $icon    Optional iconify icon name appended inside.
 */
function bayugita_render_button( $button, $classes = 'btn-primary', $icon = '' ) {
	if ( empty( $button ) || empty( $button['button_label'] ) ) {
		return;
	}

	$label = esc_html( $button['button_label'] );
	$type  = isset( $button['button_type'] ) ? $button['button_type'] : 'internal';
	$class = esc_attr( trim( $classes . ' group' ) );
	$inner = $label;

	if ( $icon ) {
		$inner .= ' <iconify-icon icon="' . esc_attr( $icon ) . '" class="group-hover:animate-bounce-right"></iconify-icon>';
	}

	switch ( $type ) {
		case 'external':
			$url = isset( $button['button_external_url'] ) ? esc_url( $button['button_external_url'] ) : '';
			if ( ! $url ) {
				return;
			}
			printf(
				'<a href="%1$s" target="_blank" rel="noopener noreferrer" class="%2$s">%3$s</a>',
				$url, $class, $inner // phpcs:ignore WordPress.Security.EscapeOutput
			);
			break;

		case 'download':
			$file = isset( $button['button_download_file'] ) ? $button['button_download_file'] : '';
			$url  = is_array( $file ) ? ( $file['url'] ?? '' ) : $file;
			$url  = esc_url( $url );
			if ( ! $url ) {
				return;
			}
			printf(
				'<a href="%1$s" download class="%2$s">%3$s</a>',
				$url, $class, $inner // phpcs:ignore WordPress.Security.EscapeOutput
			);
			break;

		case 'internal':
		default:
			$link = isset( $button['button_internal_link'] ) ? $button['button_internal_link'] : '';
			$url  = is_array( $link ) ? get_permalink( $link['ID'] ?? 0 ) : $link;
			$url  = $url ? esc_url( $url ) : '#';
			printf(
				'<a href="%1$s" class="%2$s">%3$s</a>',
				$url, $class, $inner // phpcs:ignore WordPress.Security.EscapeOutput
			);
			break;
	}
}

/**
 * Render a responsive <img> from an SCF image array (return format: array).
 *
 * @param array  $image   SCF image array.
 * @param string $classes CSS classes.
 * @param string $loading eager|lazy.
 */
function bayugita_the_image( $image, $classes = '', $loading = 'lazy' ) {
	if ( empty( $image ) || empty( $image['url'] ) ) {
		return;
	}
	$src    = esc_url( $image['url'] );
	$alt    = esc_attr( $image['alt'] ?? '' );
	$class  = $classes ? ' class="' . esc_attr( $classes ) . '"' : '';
	$srcset = '';
	if ( ! empty( $image['ID'] ) ) {
		$set = wp_get_attachment_image_srcset( $image['ID'] );
		if ( $set ) {
			$srcset = ' srcset="' . esc_attr( $set ) . '" sizes="(max-width: 768px) 100vw, 50vw"';
		}
	}
	printf(
		'<img src="%1$s" alt="%2$s"%3$s loading="%4$s"%5$s />',
		$src, $alt, $class, esc_attr( $loading ), $srcset // phpcs:ignore WordPress.Security.EscapeOutput
	);
}

/**
 * Convenience: read a Global Site Settings option field.
 *
 * @param string $name    Field name.
 * @param mixed  $default Fallback.
 * @return mixed
 */
function bayugita_option( $name, $default = '' ) {
	if ( function_exists( 'get_field' ) ) {
		$value = get_field( $name, 'option' );
		if ( ! empty( $value ) ) {
			return $value;
		}
	}
	return $default;
}
