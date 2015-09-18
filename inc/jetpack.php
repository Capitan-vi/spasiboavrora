<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package SpasiboAvrora
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function spasiboavrora_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'spasiboavrora_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function spasiboavrora_jetpack_setup
add_action( 'after_setup_theme', 'spasiboavrora_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function spasiboavrora_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function spasiboavrora_infinite_scroll_render
