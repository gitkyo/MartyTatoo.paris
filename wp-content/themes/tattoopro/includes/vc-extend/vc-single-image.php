<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $animations;

$args = array(

	'name' => __( 'Single image', 'tattoopro' ),
	'base' => 'wolf_single_image',
	'category' => 'by WolfThemes',
	'icon' => 'wolf-vc-icon wolf-vc-single-image',
	'allowed_container_element' => 'vc_row',
	'params' => array(

		array(
			'type' => 'single_image',
			'admin_label' => true,
			'class' => '',
			'heading' => __( 'Image', 'tattoopro' ),
			'param_name' => 'image',
			'value' => '',
			'description' => '',
		),

		array(
			'type' => 'dropdown',
			'admin_label' => true,
			'class' => '',
			'heading' => __( 'Image alignment', 'tattoopro' ),
			'param_name' => 'alignment',
			'value' => array(
				__( 'center', 'tattoopro' ) => 'center',
				__( 'left', 'tattoopro' ) => 'left',
				__( 'right', 'tattoopro' ) => 'right',
			),
		),

		array(
			'type' => 'dropdown',
			'admin_label' => true,
			'class' => '',
			'heading' => __( 'Image style', 'tattoopro' ),
			'param_name' => 'image_style',
			'value' => array(
				__( 'default', 'tattoopro' ) => 'default',
				__( 'rounded', 'tattoopro' ) => 'round',
				__( 'shadow', 'tattoopro' ) => 'shadow',
			),
		),

		array(
			'type' => 'checkbox',
			'class' => '',
			'show_settings_on_create' => true,
			'heading' => '',
			'param_name' => 'full_size',
			'value' => array( __( 'Link to full size image', 'tattoopro' ) => true ),
		),

		array(
			'type' => 'textfield',
			'admin_label' => true,
			'class' => '',
			'heading' => __( 'Image link', 'tattoopro' ),
			'param_name' => 'link',
			'value' => 'http://',
		),

		array(
			'type' => 'dropdown',
			'admin_label' => true,
			'class' => '',
			'heading' => __( 'Link target', 'tattoopro' ),
			'param_name' => 'target',
			'value' => array(
				'_self' => '_self',
				'_blank' => '_blank',
			),
		),

		array(
			'type' => 'dropdown',
			'class' => '',
			'heading' => __( 'Hover effect', 'tattoopro' ),
			'param_name' => 'hover_effect',
			'value' => array(
				__( 'None', 'tattoopro' ) => 'none',
				__( 'Default', 'tattoopro' ) => 'default',
				__( 'Black and white to colored', 'tattoopro' ) => 'greyscale',
				__( 'Colored to Black and white', 'tattoopro' ) => 'to-greyscale',
				__( 'Scale + Black and white to colored', 'tattoopro' ) => 'scale-greyscale',
				__( 'Scale + Colored to Black and white', 'tattoopro' ) => 'scale-to-greyscale',
			),
			'description' => __( 'Note that not all browser support the black and white effect', 'tattoopro' ),
		),

		array(
			'type' => 'dropdown',
			'admin_label' => true,
			'class' => '',
			'heading' => __( 'Image size', 'tattoopro' ),
			'param_name' => 'image_size',
			'value' => array(
				__( 'Large', 'tattoopro' ) => 'large',
				__( 'Medium', 'tattoopro' ) => 'medium',
				__( 'Thumbnail', 'tattoopro' ) => 'thumbnail',
				__( 'Square', 'tattoopro' ) => '2x2',
				__( 'Portrait', 'tattoopro' ) => 'portrait',
				__( 'Extra Large', 'tattoopro' ) => 'extra-large',
			),
			'description' => __( 'You can set the "large", "medium" and "thumbnail" sizes in the WP media settings ', 'tattoopro' ),
		),

		array(
			'type' => 'dropdown',
			'admin_label' => true,
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

vc_map( $args );
