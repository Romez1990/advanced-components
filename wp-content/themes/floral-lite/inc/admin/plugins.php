<?php
/**
 * Add required and recommended plugins.
 *
 * @package floral
 */

add_action( 'tgmpa_register', 'floral_register_required_plugins' );

/**
 * Register required plugins
 *
 * @since  1.0
 */
function floral_register_required_plugins() {
	$plugins = floral_required_plugins();

	$config = array(
		'id'          => 'floral-lite',
		'has_notices' => false,
	);

	tgmpa( $plugins, $config );
}

/**
 * List of required plugins
 */
function floral_required_plugins() {
	return array(
		array(
			'name' => esc_html__( 'Jetpack', 'floral-lite' ),
			'slug' => 'jetpack',
		),
		array(
            'name' => esc_html__( 'Slim SEO', 'floral-lite' ),
			'slug' => 'slim-seo',
		),
	);
}
