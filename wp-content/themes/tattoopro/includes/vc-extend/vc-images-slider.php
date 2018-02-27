<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $animations, $slider_settings;

$args = array(
	'name' => __( 'Image slider', 'tattoopro' ),
	'base' => 'wolf_images_slider',
	'category' => 'by WolfThemes',
	'icon' => 'wolf-vc-icon wolf-vc-images-slider',
	'allowed_container_element' => 'vc_row',
	'params' => array(

		array(
			'type' => 'attach_images',
			'admin_label' => true,
			'class' => '',
			'heading' => __( 'Images', 'tattoopro' ),
			'param_name' => 'ids',
			'description' => '',
		),

		array(
			'type' => 'dropdown',
			'class' => '',
			'heading' => __( 'Layout', 'tattoopro' ),
			'param_name' => 'layout',
			'value' => array(
				__( 'None', 'tattoopro' ) => 'default',
				__( 'Desktop Screen', 'tattoopro' ) => 'desktop',
				__( 'Laptop Screen', 'tattoopro' ) => 'laptop',
				__( 'Tablet Screen', 'tattoopro' ) => 'tablet',
				__( 'Mobile Screen', 'tattoopro' ) => 'mobile',
			),
			'description' => '',
		),

		array(
			'type' => 'dropdown',
			'class' => '',
			'heading' => __( 'Animation', 'tattoopro' ),
			'description' => __( 'How the slider will appear on your page', 'tattoopro' ),
			'param_name' => 'animation',
			'value' => $animations,
		),

		array(
			'type' => 'textfield',
			'admin_label' => true,
			'class' => '',
			'heading' => __( 'Animation delay (in ms)', 'tattoopro' ),
			'param_name' => 'animation_delay',
			'value' => '',
			'description' => '',
		),

		array(
			'type' => 'textfield',
			'admin_label' => true,
			'class' => '',
			'heading' => __( 'Inline style', 'tattoopro' ),
			'param_name' => 'inline_style',
			'description' => __( 'Additional inline CSS style', 'tattoopro' ),
			'value' => '',
		),

		array(
			'type' => 'textfield',
			'admin_label' => true,
			'class' => '',
			'heading' => __( 'Extra class', 'tattoopro' ),
			'param_name' => 'class',
			'description' => __( 'Optional additional CSS class to add to the element', 'tattoopro' ),
			'value' => '',
		),
	)
);
vc_map( wolf_inject_vc_params( $slider_settings, $args ) );
