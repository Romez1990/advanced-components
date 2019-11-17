<?php
/**
 * Jetpack Compatibility File
 *
 * @link https://jetpack.com/
 *
 * @package Floral
 */

/**
 * Jetpack setup function.
 */
function floral_jetpack_setup() {
	// Social menu.
	add_theme_support( 'jetpack-social-menu' );

	// Responsive videos.
	add_theme_support( 'jetpack-responsive-videos' );

	// Featured content.
	add_theme_support( 'featured-content', array(
		'filter'    => 'floral_get_featured_posts',
		'max_posts' => 10,
	) );

	
	add_theme_support( 'jetpack-content-options', array(
		'blog-display'       => 'content', // the default setting of the theme: 'content', 'excerpt' or array( 'content', 'excerpt' ) for themes mixing both display.
		'author-bio'         => true, // display or not the author bio: true or false.
		'author-bio-default' => false, // the default setting of the author bio, if it's being displayed or not: true or false (only required if false).
		'post-details'       => array(
			'stylesheet'      => 'floral-style', // name of the theme's stylesheet.
			'date'            => '.site-main .posted-on', // a CSS selector matching the elements that display the post date.
			'categories'      => '.cat-links', // a CSS selector matching the elements that display the post categories.
			'tags'            => '.tags-links', // a CSS selector matching the elements that display the post tags.
			'author'          => '.author', // a CSS selector matching the elements that display the post author.
			'comment'         => '.comments-link', // a CSS selector matching the elements that display the comment link.
		),
		'featured-images'    => array(
			'archive'         => true, // enable or not the featured image check for archive pages: true or false.
			'archive-default' => true, // the default setting of the featured image on archive pages, if it's being displayed or not: true or false (only required if false).
			'post'            => true, // enable or not the featured image check for single posts: true or false.
			'post-default'    => false, // the default setting of the featured image on single posts, if it's being displayed or not: true or false (only required if false).
			'page'            => true, // enable or not the featured image check for single pages: true or false.
			'page-default'    => false, // the default setting of the featured image on single pages, if it's being displayed or not: true or false (only required if false).
		),
	) );
}
add_action( 'after_setup_theme', 'floral_jetpack_setup' );
