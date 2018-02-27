<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// message box
vc_map(
	array(
		'name' => __( 'Message box', 'tattoopro' ),
		'base' => 'wolf_alert_message',
		'category' => 'by WolfThemes',
		'icon' => 'wolf-vc-icon wolf-vc-message-box',
		'allowed_container_element' => 'vc_row',
		'params' => array(

			array(
				'type' => 'dropdown',
				'class' => '',
				'heading' => __( 'Type', 'tattoopro' ),
				'param_name' => 'type',
				'value' => array(
					__( 'Info', 'tattoopro' ) => 'info',
					__( 'Alert', 'tattoopro' ) => 'alert',
					__( 'Success', 'tattoopro' ) => 'success',
					__( 'Error', 'tattoopro' ) => 'error',
				),
				'description' => '',
			),

			array(
				'type' => 'textarea',
				'admin_label' => true,
				'class' => '',
				'heading' => __( 'Message', 'tattoopro' ),
				'param_name' => 'message',
				'description' => '',
				'value' => '',
			),

			array(
				'type' => 'dropdown',
				'class' => '',
				'heading' => __( 'Display icon', 'tattoopro' ),
				'param_name' => 'display_icon',
				'value' => array(
					__( 'Yes', 'tattoopro' ) => 'yes',
					__( 'No', 'tattoopro' ) => 'no',
				),
				'description' => '',
			),

			array(
				'type' => 'dropdown',
				'class' => '',
				'heading' => __( 'Allow the visitor to dismiss the message', 'tattoopro' ),
				'param_name' => 'close',
				'value' => array(
					__( 'No', 'tattoopro' ) => '',
					__( 'Yes', 'tattoopro' ) => 'yes',
				),
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