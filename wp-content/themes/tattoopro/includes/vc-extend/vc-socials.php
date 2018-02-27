<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $custom_colors, $animations;

$args = array(

	'name' => __( 'Social icons', 'tattoopro' ),
	'base' => 'wolf_theme_socials',
	'icon' => 'wolf-vc-icon wolf-vc-social-icons',
	'category' => 'by WolfThemes',
	'allowed_container_element' => 'vc_row',
	'params' => array(

		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => __( 'Services', 'tattoopro' ) . '*',
			'param_name' => 'services',
			'description' => __( 'Enter the service names separated by a comma. e.g "twitter, facebook, instagram".<br>Leave empty to display them all.<br>* See the social networks available in the theme options.', 'tattoopro' ),
			'value' => '',
		),

		array(
			'type' => 'dropdown',
			'admin_label' => true,
			'class' => '',
			'heading' => __( 'Type', 'tattoopro' ),
			'param_name' => 'type',
			'value' => array(
				__( 'Normal', 'tattoopro' ) => 'normal',
				__( 'Circle', 'tattoopro' ) => 'circle',
				__( 'Square', 'tattoopro' ) => 'square'
			),
		),

		array(
			'type' => 'dropdown',
			'class' => '',
			'heading' => __( 'Size', 'tattoopro' ),
			'param_name' => 'size',
			'value' => array(
				__( 'Medium', 'tattoopro' ) => '2x',
				__( 'Small', 'tattoopro' ) => '1x',
				__( 'Large', 'tattoopro' ) => '3x',
				__( 'Very Large', 'tattoopro' ) => '4x',
			),
			// 'description' => '',
		),

		array(
			'type' => 'dropdown',
			'class' => '',
			'heading' => __( 'Target', 'tattoopro' ),
			'param_name' => 'target',
			'value' => array(
				''   => '',
				'Self' => '_self',
				'Blank' => '_blank',
				'Parent' => '_parent',
			),
			'description' => '',
		),

		array(
			'type' => 'dropdown',
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
			'heading' => __( 'Animation', 'tattoopro' ),
			'description' => '',
			'param_name' => 'animation',
			'value' => $animations,
			'description' => '',
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

vc_map( wolf_inject_vc_params( $custom_colors, $args ) );
