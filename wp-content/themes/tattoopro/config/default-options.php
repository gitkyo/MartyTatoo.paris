<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

function wolf_theme_default_options_init() {

	$theme_options = get_option( 'wolf_theme_options_' . wolf_get_theme_slug() );
	$hero = '<img class="aligncenter size-full" src="' . wolf_get_theme_uri( '/images/presets/emblem.png' ) . '" alt="tattoo" />
		<p style="text-align: center;">WELCOME ON OUR WEBSITE!</p>';

	$default_options = wolf_get_options_from_text_file();
	$default_options['home_header_content'] = $hero; // overwrite hero content

	if ( ! $theme_options ) {

		add_option( 'wolf_theme_options_' . wolf_get_theme_slug(), $default_options );
	}

	// default WP settings
	update_option( 'image_default_link_type', 'file' );

	// woo thumbnails
	$catalog = array(
		'width' 	=> '400',	// px
		'height'	=> '509',	// px
		'crop'	=> 1 		// true
	);

	$single = array(
		'width' 	=> '725',	// px
		'height'	=> '570',	// px
		'crop'	=> 1 		// true
	);

	$thumbnail = array(
		'width' 	=> '90',		// px
		'height'	=> '114',	// px
		'crop'	=> 0 		// false
	);

	// Image sizes
	update_option( 'shop_catalog_image_size', $catalog ); 		// Product category thumbs
	update_option( 'shop_single_image_size', $single ); 		// Single product image
	update_option( 'shop_thumbnail_image_size', $thumbnail );
	update_option( 'woocommerce_enable_lightbox', 'no' );
}