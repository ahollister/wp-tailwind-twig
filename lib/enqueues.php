<?php
/**
 * Enqueue theme styles and scripts
 */
add_action( 'wp_enqueue_scripts', function() {

	// CSS
	wp_enqueue_style(
		'wp-tailwind-twig-styles',
		get_template_directory_uri() . '/dist/styles/style.min.css',
		array(),
		'1617030771'
	);

	// JS
	wp_enqueue_script(
		'wp-tailwind-twig-scripts',
		get_template_directory_uri() . '/dist/scripts/scripts.min.js#asyncload',
		array( 'jquery' ),
		'1617030771',
		true
	);

} );