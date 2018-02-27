<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $animations;

$args = array(

	'name' => __( 'Services table', 'tattoopro' ),
	'base' => 'wolf_services_table',
	'icon' => 'wolf-vc-icon wolf-vc-services-table',
	'category' => 'by WolfThemes',
	'allowed_container_element' => 'vc_row',
	'params' => array(

		array(
			'type' => 'colorpicker',
			'admin_label' => true,
			'class' => '',
			'heading' => __( 'Background color', 'tattoopro' ),
			'param_name' => 'bg_color',
			'description' => '',
		),

		array(
			'type' => 'colorpicker',
			'admin_label' => true,
			'class' => '',
			'heading' => __( 'Font color', 'tattoopro' ),
			'param_name' => 'font_color',
			'description' => '',
		),

		array(
			'type' => 'textfield',
			'admin_label' => true,
			'class' => '',
			'heading' => __( 'Title', 'tattoopro' ),
			'param_name' => 'title',
			'description' => '',
			'value' => '',
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
			'type' => 'colorpicker',
			'admin_label' => true,
			'class' => '',
			'heading' => __( 'Title color', 'tattoopro' ),
			'param_name' => 'title_color',
			'description' => '',
		),

		array(
			'type' => 'dropdown',
			'admin_label' => true,
			'class' => '',
			'heading' => __( 'Add icon', 'tattoopro' ),
			'param_name' => 'add_icon',
			'value' => array(
				__( 'No', 'tattoopro' ) => 'no',
				__( 'Yes', 'tattoopro' ) => 'yes'
			),
			'description' => __( 'Select Yes if you want to add an icon in your button', 'tattoopro' ),
		),

		array(
			'type' => 'searchable',
			'admin_label' => true,
			'class' => '',
			'heading' => __( 'Icon', 'tattoopro' ),
			'param_name' => 'icon',
			'value' => $icons_inverted_array,
			'description' => '',
			'dependency' => array( 'element' => 'add_icon', 'value' => array( 'yes' ) ),
		),

		array(
			'type' => 'colorpicker',
			'admin_label' => true,
			'class' => '',
			'heading' => __( 'Icon color', 'tattoopro' ),
			'param_name' => 'icon_color',
			'description' => '',
			'dependency' => array( 'element' => 'add_icon', 'value' => array( 'yes' ) ),
		),


		array(
			'type' => 'textarea_html',
			'admin_label' => true,
			'class' => '',
			'heading' => __( 'Services', 'tattoopro' ),
			'param_name' => 'content',
			'value' => '<li>content content content</li><li>content content content</li><li>content content content</li>',
			'description' => '',
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

vc_map( $args );
