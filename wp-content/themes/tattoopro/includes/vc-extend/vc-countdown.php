<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// Count Down
vc_map(
	array(
		'name' => __( 'Count down', 'tattoopro' ),
		'base' => 'wolf_countdown',
		'category' => 'by WolfThemes',
		'icon' => 'wolf-vc-icon wolf-vc-count-down',
		'allowed_container_element' => 'vc_row',
		'params' => array(

			array(
				'type' => 'textfield',
				'admin_label' => true,
				'class' => '',
				'heading' => __( 'Date', 'tattoopro' ),
				'param_name' => 'date',
				'description' => __( 'formatted like 12/24/2020 12:00:00', 'tattoopro' ),
				'value' => '',
			),

			array(
				'type' => 'textfield',
				'admin_label' => true,
				'class' => '',
				'heading' => __( 'UTC Timezone offset', 'tattoopro' ),
				'param_name' => 'offset',
				'description' => __( 'e.g : -5 for NY', 'tattoopro' ),
				'value' => '',
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

			// array(
			// 	'type' => 'textfield',
			// 	'admin_label' => true,
			// 	'class' => '',
			// 	'heading' => __( 'Message when it\'s over', 'tattoopro' ),
			// 	'param_name' => 'message',
			// 	'value' => __( 'Done!', 'tattoopro' ),
			// ),
		)
	)
);