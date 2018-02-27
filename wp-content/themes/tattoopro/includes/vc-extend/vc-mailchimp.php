<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $animations;

// mailchimp
vc_map(
	array(
		'name' => __( 'Mailchimp sign up', 'tattoopro' ),
		'base' => 'wolf_mailchimp',
		'category' => 'by WolfThemes',
		'icon' => 'wolf-vc-icon wolf-vc-mailchimp',
		'allowed_container_element' => 'vc_row',
		'params' => array(

			array(
				'type' => 'textfield',
				'admin_label' => true,
				'class' => '',
				'heading' => __( 'List ID', 'tattoopro' ),
				'param_name' => 'list',
				'description' => __( 'Can be found in your mailchimp account -> Lists -> Your List Name -> Settings -> List Name & default', 'tattoopro' ),
				'value' => '',
			),

			array(
				'type' => 'dropdown',
				'admin_label' => true,
				'class' => '',
				'heading' => __( 'Size', 'tattoopro' ),
				'param_name' => 'size',
				'value' => array(
					__( 'Normal', 'tattoopro' ) => 'normal',
					__( 'Large', 'tattoopro' ) => 'large',
				),
				'description' => '',
			),

			// array(
			// 	'type' => 'textfield',
			// 	'admin_label' => true,
			// 	'class' => '',
			// 	'heading' => __( 'Title', 'tattoopro' ),
			// 	'param_name' => 'label',
			// 	'value' => '',
			// ),

			array(
				'type' => 'textfield',
				'admin_label' => true,
				'class' => '',
				'heading' => __( 'Submit text (default is "Subscribe")', 'tattoopro' ),
				'param_name' => 'submit',
				'value' => '',
			),

			array(
				'type' => 'dropdown',
				'admin_label' => true,
				'class' => '',
				'heading' => __( 'Button style', 'tattoopro' ),
				'param_name' => 'button_style',
				'value' => array(
					__( 'theme color', 'tattoopro' )  => 'accent-color',
					__( 'theme color black/white on hover', 'tattoopro' )  => 'accent-color-bnw',
					__( 'black/white', 'tattoopro' )  => 'border-button',
					__( 'black/white theme color on hover', 'tattoopro' )  => 'border-button-accent-hover',
				),
				'description' => '',
			),

			array(
				'type' => 'dropdown',
				'admin_label' => true,
				'class' => '',
				'heading' => __( 'Alignment', 'tattoopro' ),
				'param_name' => 'alignment',
				'value' => array(
					__( 'center', 'tattoopro' )  => 'center',
					__( 'left', 'tattoopro' )  => 'left',
					__( 'right', 'tattoopro' )  => 'right',
				),
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
		),
	)
);