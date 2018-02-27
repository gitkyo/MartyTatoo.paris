<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Demo files
 *
 * @see http://proteusthemes.github.io/one-click-demo-import/
 */
function wolf_import_files() {

	$theme_slug = WOLF_THEME_SLUG;
	$domain_name = WOLF_UPDATE_URL;
	$root_url = $domain_name . '/' . $theme_slug . '/demos';

	return array(
		array(
			'import_file_name'           => esc_html__( 'Tattoopro Demo', 'tattoopro' ),
			'import_file_url'            => $root_url . '/main/content.xml',
			'import_widget_file_url'     => $root_url . '/main/widgets.wie',
			'import_customizer_file_url' => $root_url . '/main/customizer.dat',
			'import_preview_image_url'   => $root_url . '/main/preview.jpg',
		),
	);
}
add_filter( 'pt-ocdi/import_files', 'wolf_import_files' );

/**
 * Set menus after import
 */
function wolf_after_import_setup() {

	// Assign menus to their locations.
	wolf_set_menu_locations(
		array(
			'primary' => 'Main Menu',
			'primary-left' => 'Main Menu Left',
			'primary-right' => 'Main Menu Right',
		)
	);
}
add_action( 'pt-ocdi/after_import', 'wolf_after_import_setup' );