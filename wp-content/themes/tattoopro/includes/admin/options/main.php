<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$page_option = array( '' => __( '- Disabled -', 'tattoopro' ) );
$pages = get_pages();

foreach ( $pages as $page ) {
	$page_option[ absint( $page->ID ) ] = sanitize_text_field( $page->post_title );
}

$wolf_theme_options[] = array(
	'type' => 'open',
	'label' => __( 'General', 'tattoopro' ),
);

	$wolf_theme_options[] = array(
		'label' => __( 'Main settings', 'tattoopro' ),
 		'type' => 'section_open',
	);

		$wolf_theme_options[] = array(
			'label' => __( 'Maintenance page', 'tattoopro' ),
			'id' =>'maintenance_page_id',
			'desc' => __( 'If selected, your visitors will be redirected to this page from any page of your website.', 'tattoopro' ),
			'type' => 'select',
			'options' => $page_option,
		);


		// $wolf_theme_options[] = array(
		// 	'label' => __( 'Responsive', 'tattoopro' ),
		// 	'id' =>'responsive',
		// 	'type' => 'checkbox',
		// );

		$wolf_theme_options[] = array(
			'label' => __( 'Lightbox', 'tattoopro' ),
			'id' => 'lightbox',
			'type' => 'select',
			'options' => array(
				'swipebox' => 'swipebox',
				'fancybox' => 'fancybox',
				'none'     => __( 'None', 'tattoopro' ),
			),
		);

		$wolf_theme_options[] = array(
			'label' => __( 'Logo  dark', 'tattoopro' ),
			'desc' => sprintf( __( '%s height recommended', 'tattoopro' ), '200px' ),
			'id' =>'logo_dark',
			'type' => 'image',
		);

		$wolf_theme_options[] = array(
			'label' => __( 'Logo light', 'tattoopro' ),
			'desc' => sprintf( __( '%s height recommended', 'tattoopro' ), '200px' ),
			'id' =>'logo_light',
			'type' => 'image',
		);

		// $wolf_theme_options[] = array(
		// 	'label' => __( 'Logo sticky ( visible for the sticky menu when the menu is centered )', 'tattoopro' ),
		// 	'id' =>'logo_sticky',
		// 	'type' => 'image',
		// );

		$wolf_theme_options[] = array(
			'label' => __( 'Loading logo', 'tattoopro' ),
			'id' => 'loading_logo',
			'type' => 'image',
		);

	$wolf_theme_options[] = array( 'type' => 'section_close' );

	$wolf_theme_options[] = array(
		'label' => __( '3rd party', 'tattoopro' ),
 		'type' => 'section_open',
	);

		$wolf_theme_options[] = array(
			'label' => __( 'Mailchimp API key', 'tattoopro' ),
			'id' =>'mailchimp_api_key',
			'type' => 'text',
			'desc' => __( 'Where to find it?', 'tattoopro' ),
			'help' => 'mailchimp',
		);

	$wolf_theme_options[] = array( 'type' => 'section_close' );

	$wolf_theme_options[] = array(
		'label' => __( 'Favicons', 'tattoopro' ),
 		'type' => 'section_open',
 		'desc' => __( 'You may need to empty your browser cache to see the changes after uploading your favicon', 'tattoopro' )
	);

		$wolf_theme_options[] = array(
			'label' => __( 'Favicon (.ico file)', 'tattoopro' ),
			'id' =>'favicon',
			'type' => 'file',
		);

		$wolf_theme_options[] = array(
			'label' => __( 'Favicon (png 57x57px)', 'tattoopro' ),
			'id' =>'favicon_57',
			'type' => 'image',
		);

		$wolf_theme_options[] = array(
			'label' => __( 'Favicon (png 72x72px)', 'tattoopro' ),
			'id' =>'favicon_72',
			'type' => 'image',
		);

		$wolf_theme_options[] = array(
			'label' => __( 'Favicon (png 114x114px)', 'tattoopro' ),
			'id' =>'favicon_114',
			'type' => 'image',
		);

	$wolf_theme_options[] = array( 'type' => 'section_close' );

$wolf_theme_options[] = array( 'type' => 'close' );
