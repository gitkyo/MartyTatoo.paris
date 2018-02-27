<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

vc_map( array(
	'name' =>  __( 'Block', 'tattoopro' ),
	'base' => 'wolf_elements_holder',
	'as_parent' => array('only' => 'wolf_elements_holder_item'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
	'content_element' => true,
	'category' => 'by WolfThemes',
	'icon' => 'wolf-vc-icon wolf-vc-holder',
	'show_settings_on_create' => true,
	'js_view' => 'VcColumnView',
	'params' => array(
		array(
			'type' => 'dropdown',
			//'admin_label' => true,
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
	),
) );

vc_map(
	array(
		'name' =>  __( 'Block Element', 'tattoopro' ),
		'base' => 'wolf_elements_holder_item',
		'as_parent' => array('except' => 'vc_row, vc_tabs, vc_accordion, cover_boxes, work_list, work_slider, wolf_carousel'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
		'as_child' => array('only' => 'wolf_elements_holder'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
		'content_element' => true,
		'category' => 'by WolfThemes',
		'icon' => 'wolf-vc-icon wolf-vc-holder-element',
		'show_settings_on_create' => true,
		'js_view' => 'VcColumnView',
		'params' => array(
			array(
				'type' => 'colorpicker',
				'admin_label' => true,
				'class' => '',
				'heading' => __( 'Background color', 'tattoopro' ),
				'param_name' => 'background_color',
				'value' => '',
				'description' => '',
			),

			array(
				'type' => 'single_image',
				'admin_label' => true,
				'class' => '',
				'heading' => __( 'Background pattern', 'tattoopro' ),
				'param_name' => 'background_image',
				'value' => '',
				'description' => '',
			),

			array(
				'type' => 'dropdown',
				'admin_label' => true,
				'class' => '',
				'heading' => __( 'Font color', 'tattoopro' ),
				'param_name' => 'font_color',
				'value' => array(
					__( 'Dark', 'tattoopro' ) => 'dark',
					__( 'Light', 'tattoopro' ) => 'light',
				),
				'description' => '',
			),

			array(
				'type' => 'dropdown',
				//'admin_label' => true,
				'class' => '',
				'heading' => __( 'Type', 'tattoopro' ),
				'param_name' => 'type',
				'value' => array(
					__( 'Text', 'tattoopro' ) => 'text',
					__( 'Media', 'tattoopro' ) => 'media',
				),
				'description' => __( 'Media content will take the full width and height', 'tattoopro' ),
			),

			array(
				'type' => 'textfield',
				//'admin_label' => true,
				'class' => '',
				'heading' => __( 'Padding', 'tattoopro' ),
				'param_name' => 'padding',
				'value' => '',
				'description' => __( 'You can insert padding in format: "0px 0px 0px 0px" (top right bottom left)', 'tattoopro' ),
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

//Your "container" content element should extend WPBakeryShortCodesContainer class to inherit all required functionality
if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
	class WPBakeryShortCode_Wolf_Elements_Holder  extends WPBakeryShortCodesContainer {}
	class WPBakeryShortCode_Wolf_Elements_Holder_Item  extends WPBakeryShortCodesContainer {}
}