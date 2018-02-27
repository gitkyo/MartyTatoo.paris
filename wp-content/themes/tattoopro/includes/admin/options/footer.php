<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$wolf_theme_options[] = array(
	'type' => 'open',
	'label' => __( 'Footer', 'tattoopro' ),
);

$wolf_theme_options[] = array(
	'label' => __( 'Footer', 'tattoopro' ),
	'type' => 'section_open',
	//'desc' => __( 'An additional content area just above the footer that will be displayed on every page', 'tattoopro' ),
);

	$wolf_theme_options[] = array(
		'label' => __( 'Display bottom social icons', 'tattoopro' ),
		'id' => 'bottom_socials',
		'type' => 'select',
		'options' => array(
			'yes' => __( 'Yes', 'tattoopro' ),
			'' => __( 'No', 'tattoopro' ),
		),
	);

	$wolf_theme_options[] = array(
		'label' => __( 'Services', 'tattoopro' ),
		'id' => 'bottom_socials_services',
		'desc' => __( 'Enter the service names separated by a comma. e.g "twitter, facebook, instagram". Leave empty to display them all (Social links tab).', 'tattoopro' ),
		'type' => 'text',
		'dependency' => array( 'element' => 'bottom_socials', 'value' => array( 'yes' ) ),
	);

	$wolf_theme_options[] = array(
		'label' => __( 'Copyright text', 'tattoopro' ),
		'id' => 'copyright_textbox',
		'desc' => __( 'Will appear at the very bottom of the page', 'tattoopro' ),
		'type' => 'text',
	);

	// $wolf_theme_options[] = array(
	// 	'label' => __( 'Uncover Effect', 'tattoopro' ),
	// 	'id' => 'footer_uncover',
	// 	'type' => 'checkbox',
	// );

	// $wolf_theme_options[] = array(
	// 	'label' => __( 'Content Editor', 'tattoopro' ),
	// 	'desc' => __( 'Any content to display above the footer: text, HTML, shortcodes...', 'tattoopro' ),
	// 	'id' => 'footer_holder_content',
	// 	'type' => 'editor'
	// );


$wolf_theme_options[] = array( 'type' => 'section_close' );

// $wolf_theme_options[] = array( 
// 	'label' => __( 'Footer Holder Background', 'tattoopro' ),
// 	'desc' => __( 'A different header background can be set on each page', 'tattoopro' ),
// 	'id' =>'footer_holder_bg',
// 	'type' => 'background',
// 	'font_color' => true,
// 	'parallax' => true,
// );

// $wolf_theme_options[] = array(
// 	'label' => __( 'Overlay', 'tattoopro' ),
// 		'type' => 'section_open',
// );

// $wolf_theme_options[] = array(
// 	'label' => __( 'Overlay Color', 'tattoopro' ),
// 	'id' =>'footer_holder_overlay_color',
// 	'type' => 'colorpicker',
// );

// $wolf_theme_options[] = array(
// 	'label' => __( 'Overlay Pattern', 'tattoopro' ),
// 	'id' =>'footer_holder_overlay_img',
// 	'type' => 'image',
// );

// $wolf_theme_options[] = array(
// 	'label' => __( 'Overlay Opacity in percent', 'tattoopro' ),
// 	'desc' => __( 'A different footer_holder background can be set on each page', 'tattoopro' ),
// 	'id' =>'footer_holder_overlay_opacity',
// 	'type' => 'int',
// );

// $wolf_theme_options[] = array( 'type' => 'section_close' );


$wolf_theme_options[] = array( 'type' => 'close' );