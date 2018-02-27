<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$wolf_theme_options[] = array(
	'type' => 'open',
	'label' => __( 'Styles', 'tattoopro' ),
);

	$wolf_theme_options['styles_head'] = array(
		'label' => __( 'Default Styles', 'tattoopro' ),
 		'type' => 'section_open',
 		'desc' => __( 'Here you can set the styles for your website.', 'tattoopro' )
	);

	$wolf_theme_options[] = array(
		'label' => __( 'Accent color', 'tattoopro' ),
		'id' =>'accent_color',
		'type' => 'colorpicker',
	);

	$wolf_theme_options[] = array(
		'label' => __( 'Layout', 'tattoopro' ),
		'id' => 'layout',
		'type' => 'select',
		'options' => array(
			'wide' => __( 'Wide', 'tattoopro' ),
			'boxed' => __( 'Boxed', 'tattoopro' ),
		),
	);

	$wolf_theme_options[] = array( 'type' => 'section_close' );

	$wolf_theme_options[] = array(
		'label' => __( 'Body background', 'tattoopro' ),
		'desc' => __( 'Visible only in boxed layout mode', 'tattoopro' ),
		'id' => 'body_bg',
		'type' => 'background',
		'font_color' => false,
		'bg_attachment' => true,
	);

	// $wolf_theme_options[] = array(
	// 	'label' => __( 'Page background', 'tattoopro' ),
	// 	'id' => 'page_bg',
	// 	'type' => 'background',
	// );

$wolf_theme_options[] = array( 'type' => 'close' );