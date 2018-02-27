<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $icons_inverted_array, $animations;

// Icon with Text
$args = array(
	'name' => 'Icon with text',
	'base' => 'wolf_icon_with_text',
	'icon' => 'wolf-vc-icon wolf-vc-icon-text',
	'category' => 'by WolfThemes',
	'allowed_container_element' => 'vc_row',
	'params' => array(

		array(
			'type' => 'searchable',
			'admin_label' => true,
			'class' => '',
			'heading' => __( 'Icon', 'tattoopro' ),
			'param_name' => 'icon',
			'value' => $icons_inverted_array,
			'description' => '',
		),

		array(
			'type' => 'textfield',
			'admin_label' => true,
			'class' => '',
			'heading' => __( 'Title', 'tattoopro' ),
			'param_name' => 'title',
			'value' => ''
		),

		array(
			'type' => 'dropdown',
			'admin_label' => true,
			'class' => '',
			'heading' => __( 'Title tag', 'tattoopro' ),
			'param_name' => 'title_tag',
			'value' => array(
				'h3' => 'h3',
				'h1' => 'h1',
				'h2' => 'h2',
				'h4' => 'h4',
				'h5' => 'h5',
				'h6' => 'h6',
			),
		),

		array(
			'type' => 'textarea',
			'admin_label' => true,
			'class' => '',
			'heading' => __( 'Text', 'tattoopro' ),
			'param_name' => 'text',
			'value' => ''
		),

		array(
			'type' => 'dropdown',
			'admin_label' => true,
			'class' => '',
			'heading' => __( 'Position', 'tattoopro' ),
			'param_name' => 'icon_position',
			'value' => array(
				__( 'Top', 'tattoopro' ) => 'top',
				__( 'Left', 'tattoopro' ) => 'left',
				__( 'Left from Title', 'tattoopro' ) => 'left_from_title',
				__( 'Right', 'tattoopro' ) => 'right',
				__( 'Right from Title', 'tattoopro' ) => 'right_from_title'
			),
			'description' => '',
		),

		array(
			'type' => 'dropdown',
			'admin_label' => true,
			'class' => '',
			'heading' => __( 'Type', 'tattoopro' ),
			'param_name' => 'icon_type',
			'value' => array(
				__( 'Normal', 'tattoopro' ) => 'normal',
				__( 'Circle', 'tattoopro' ) => 'circle',
				__( 'Square', 'tattoopro' ) => 'square',
				__( 'Ban', 'tattoopro' ) => 'ban',
			),
			'description' => ''
		),

		array(
			'type' => 'dropdown',
			'admin_label' => true,
			'class' => '',
			'heading' => __( 'Size', 'tattoopro' ),
			'param_name' => 'icon_size',
			'value' => array(
			//	__( 'Tiny', 'tattoopro' ) => 'fa-lg',
				__( 'Small', 'tattoopro' ) => 'fa-2x',
				__( 'Medium', 'tattoopro' ) => 'fa-3x',
				__( 'Large', 'tattoopro' ) => 'fa-4x',
				__( 'Very Large', 'tattoopro' ) => 'fa-5x'
			),
			'description' => ''
		),

		array(
			'type' => 'dropdown',
			'admin_label' => true,
			'class' => '',
			'heading' => __( 'Hover transition', 'tattoopro' ),
			'param_name' => 'hover_effect',
			'value' => array(
				__( 'Normal', 'tattoopro' ) => 'none',
				__( 'Fill in', 'tattoopro' ) => 'fill-in',
			),
			'description' => __( 'Custom hover effects won\'t apply to icon with custom colors settings', 'tattoopro' ),
		),

		array(
			'type' => 'dropdown',
			'admin_label' => true,
			'class' => '',
			'heading' => __( 'Icon animation', 'tattoopro' ),
			'param_name' => 'icon_animation',
			'value' => array(
				__( 'No', 'tattoopro' ) => '',
				__( 'Yes', 'tattoopro' ) => 'yes'
			),
			'description' => ''
		),

		array(
			'type' => 'textfield',
			'admin_label' => true,
			'class' => '',
			'heading' => __( 'Icon animation delay (ms)', 'tattoopro' ),
			'param_name' => 'icon_animation_delay',
			'value' => '',
			'description' => '',
			'dependency' => array( 'element' => 'icon_animation', 'value' => array( 'yes' ) ),
		),


		// array(
		// 	'type' => 'colorpicker',
		// 	'admin_label' => true,
		// 	'class' => '',
		// 	'heading' => __( 'Text Color', 'tattoopro' ),
		// 	'param_name' => 'text_color',
		// 	'description' => ''
		// ),

		array(
			'type' => 'textfield',
			'admin_label' => true,
			'class' => '',
			'heading' => __( 'Link', 'tattoopro' ),
			'param_name' => 'icon_link',
			'value' => '',
		),

		array(
			'type' => 'dropdown',
			'admin_label' => true,
			'class' => '',
			'heading' => __( 'Target', 'tattoopro' ),
			'param_name' => 'icon_link_target',
			'value' => array(
				''   => '',
				'Self' => '_self',
				'Blank' => '_blank',
				'Parent' => '_parent',
			),
			'description' => '',
		),

		array(
			'type' => 'checkbox',
			'class' => '',
			'show_settings_on_create' => true,
			'heading' => '',
			'param_name' => 'icon_link_title',
			'value' => array( __( 'Link title as well', 'tattoopro' ) => true ),
		),

		array(
			'type' => 'dropdown',
			'admin_label' => true,
			'class' => '',
			'heading' => __( 'Container animation', 'tattoopro' ),
			'description' => '',
			'param_name' => 'animation',
			'value' => $animations,
			'description' => '',
		),

		array(
			'type' => 'textfield',
			'admin_label' => true,
			'class' => '',
			'heading' => __( 'Container animation delay (in ms)', 'tattoopro' ),
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
vc_map( wolf_inject_vc_params( $custom_colors, $args ) );