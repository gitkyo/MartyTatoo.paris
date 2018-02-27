<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $animations;

$args = array(

	'name' => __( 'Linked image', 'tattoopro' ),
	'base' => 'wolf_linked_image',
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
			'heading' => __( 'Text alignment', 'tattoopro' ),
			'param_name' => 'text_alignment',
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
			'type' => 'textfield',
			'admin_label' => true,
			'class' => '',
			'heading' => __( 'Text', 'tattoopro' ),
			'param_name' => 'text',
			'value' => '',
			'description' => '',
		),

		array(
			'type' => 'textfield',
			'admin_label' => true,
			'class' => '',
			'heading' => __( 'Tagline', 'tattoopro' ),
			'param_name' => 'secondary_text',
			'value' => '',
			'description' => '',
		),

		array(
			'type' => 'dropdown',
			'class' => '',
			'heading' => __( 'Tag', 'tattoopro' ),
			'param_name' => 'text_tag',
			'value' => array(
				'span' => 'span',
				'h5' => 'h5',
				'h4' => 'h4',
				'h3' => 'h3',
				'h2' => 'h2',
				'h1' => 'h1',
			),
			// 'description' => '',
		),

		array(
			'type' => 'colorpicker',
			'admin_label' => true,
			'class' => '',
			'heading' => __( 'Text color', 'tattoopro' ),
			'param_name' => 'text_color',
			'value' => '',
			'description' => '',
		),

		array(
			'type' => 'colorpicker',
			'admin_label' => true,
			'class' => '',
			'heading' => __( 'Overlay color', 'tattoopro' ),
			'param_name' => 'overlay_color',
			'value' => '',
			'description' => '',
		),

		array(
			'type' => 'textfield',
			'admin_label' => true,
			'class' => '',
			'heading' => __( 'Overlay opacity in percent', 'tattoopro' ),
			'param_name' => 'overlay_opacity',
			'value' => '',
			'description' => '',
		),

		array(
			'type' => 'vc_link',
			'admin_label' => true,
			'class' => '',
			'heading' => __( 'Link', 'tattoopro' ),
			'param_name' => 'link',
			'value' => '',
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
