<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $animations;

// Pricing Tables
vc_map(
	array(
		'name' => __( 'Pricing tables', 'tattoopro' ),
		'base' => 'wolf_pricing_tables',
		'as_parent' => array('only' => 'wolf_pricing_table'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
		'content_element' => true,
		'category' => 'by WolfThemes',
		'icon' => 'wolf-vc-icon wolf-vc-pricing-tables',
		'show_settings_on_create' => true,
		'params' => array(
			array(
				'type' => 'dropdown',
				'admin_label' => true,
				'class' => '',
				'heading' => __( 'Columns', 'tattoopro' ),
				'param_name' => 'columns',
				'value' => array(
					'2' => '2',
					'3' => '3',
					'4' => '4',
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
		'js_view' => 'VcColumnView'
	)
);

// Pricing table shortcode
vc_map(
	array(
		'name' => __( 'Pricing table', 'tattoopro' ),
		'base' => 'wolf_pricing_table',
		'icon' => 'wolf-vc-icon wolf-vc-pricing-table',
		'category' => 'by WolfThemes',
		'allowed_container_element' => 'vc_row',
		'as_child' => array('only' => 'wolf_pricing_tables'), // Use only|except attributes to limit parent (separate multiple values with comma)
		'params' => array(
			array(
				'type' => 'textfield',
				'admin_label' => true,
				'class' => '',
				'heading' => __( 'Title', 'tattoopro' ),
				'param_name' => 'title',
				'value' => __( 'Basic Plan', 'tattoopro' ),
				'description' => ''
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
				'type' => 'textfield',
				'admin_label' => true,
				'class' => '',
				'heading' => __( 'Tagline', 'tattoopro' ),
				'param_name' => 'tagline',
				'value' => '',
				'description' => ''
			),
			array(
				'type' => 'textfield',
				'admin_label' => true,
				'class' => '',
				'heading' => __( 'Price', 'tattoopro' ),
				'param_name' => 'price',
				'description' => ''
			),
			array(
				'type' => 'textfield',
				'admin_label' => true,
				'class' => '',
				'heading' => __( 'Currency', 'tattoopro' ),
				'param_name' => 'currency',
				'description' => ''
			),

			array(
				'type' => 'dropdown',
				'admin_label' => true,
				'class' => '',
				'heading' => __( 'Display currency', 'tattoopro' ),
				'param_name' => 'display_currency',
				'value' => array(
					__( 'before', 'tattoopro' ) => 'before',
					__( 'after', 'tattoopro' ) => 'after'
				),
			),
			array(
				'type' => 'dropdown',
				'admin_label' => true,
				'class' => '',
				'heading' => __( 'Offer', 'tattoopro' ),
				'param_name' => 'offer',
				'value' => array(
					__( 'no', 'tattoopro' ) => 'no',
					__( 'yes', 'tattoopro' ) => 'yes',
				),
			),
			array(
				'type' => 'textfield',
				'admin_label' => true,
				'class' => '',
				'heading' => __( 'Offer price', 'tattoopro' ),
				'param_name' => 'offer_price',
				'description' => '',
				'dependency' => array('element' => 'offer', 'value' => 'yes')
			),
			array(
				'type' => 'textfield',
				'admin_label' => true,
				'class' => '',
				'heading' => __( 'Price period (e.g "monthly" or "per month")', 'tattoopro' ),
				'param_name' => 'price_period',
				'description' => ''
			),
			array(
				'type' => 'dropdown',
				'admin_label' => true,
				'class' => '',
				'heading' => __( 'Show button', 'tattoopro' ),
				'param_name' => 'show_button',
				'value' => array(
					__( 'yes', 'tattoopro' ) => 'yes',
					__( 'no', 'tattoopro' ) => 'no'
				),
			),
			array(
				'type' => 'textfield',
				'admin_label' => true,
				'class' => '',
				'heading' => __( 'Button text', 'tattoopro' ),
				'param_name' => 'button_text',
				'description' => '',
				'dependency' => array('element' => 'show_button', 'value' => 'yes')
			),
			array(
				'type' => 'textfield',
				'admin_label' => true,
				'class' => '',
				'heading' => __( 'Button link', 'tattoopro' ),
				'param_name' => 'link',
				'dependency' => array('element' => 'show_button', 'value' => 'yes')
			),
			array(
				'type' => 'dropdown',
				'admin_label' => true,
				'class' => '',
				'heading' => __( 'Button target', 'tattoopro' ),
				'param_name' => 'target',
				'value' => array(
					'' => '',
					'Self' => '_self',
					'Blank' => '_blank',
					'Parent' => '_parent'
				),
				'dependency' => array('element' => 'show_button', 'value' => 'yes')
			),
			// array(
			// 	'type' => 'dropdown',
			// 	'admin_label' => true,
			// 	'class' => '',
			// 	'heading' => __( 'Button text', 'tattoopro' ),
			// 	'param_name' => 'button_size',
			// 	'value' => array(
			// 		'' => '',
			// 		'Small' => 'small',
			// 		'Medium' => 'medium',
			// 		'Large' => 'large',
			// 	),
			// 	'dependency' => array('element' => 'show_button', 'value' => 'yes')
			// ),
			array(
				'type' => 'dropdown',
				'admin_label' => true,
				'class' => '',
				'heading' => __( 'Featured', 'tattoopro' ),
				'param_name' => 'active',
				'value' => array(
					__( 'no', 'tattoopro' ) => 'no',
					__( 'yes', 'tattoopro' ) => 'yes',
				),
				'description' => '',
			),
			array(
				'type' => 'textfield',
				'admin_label' => true,
				'class' => '',
				'heading' => __( 'Featured text', 'tattoopro' ),
				'param_name' => 'active_text',
				'dependency' => array('element' => 'active', 'value' => 'yes'),
			),
			array(
				'type' => 'textarea_html',
				'admin_label' => true,
				'class' => '',
				'heading' => __( 'Content', 'tattoopro' ),
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
		),
	)
);

//Your 'container' content element should extend WPBakeryShortCodesContainer class to inherit all required functionality
if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
	class WPBakeryShortCode_Wolf_Pricing_Tables extends WPBakeryShortCodesContainer {}
}
if ( class_exists( 'WPBakeryShortCode' ) ) {
	class WPBakeryShortCode_Wolf_Pricing_Table extends WPBakeryShortCode {}
}
