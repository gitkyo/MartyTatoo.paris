<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $icons_inverted_array, $animations;

$button_color_array = array(
	__( 'theme color', 'tattoopro' )  => 'accent-color',
	__( 'theme color black/white on hover', 'tattoopro' )  => 'accent-color-bnw',
	__( 'black/white', 'tattoopro' )  => 'border-button',
	__( 'black/white theme color on hover', 'tattoopro' )  => 'border-button-accent-hover',
);

$button_type_array =  array(
	__( 'Square', 'tattoopro' ) => 'square',
	__( 'Round', 'tattoopro' ) => 'round',
);

$button_params = array(
	array(
		'type' => 'textfield',
		'admin_label' => true,
		'class' => '',
		'heading' => __( 'Button text', 'tattoopro' ),
		'param_name' => 'text',
		'description' => '',
		'value' => __( 'My Button', 'tattoopro' ),
	),

	array(
		'type' => 'textfield',
		'admin_label' => true,
		'class' => '',
		'heading' => __( 'Button tagline', 'tattoopro' ),
		'param_name' => 'tagline',
		'description' => __( 'optional', 'tattoopro' ),
		'value' => '',
	),

	array(
		'type' => 'textfield',
		'admin_label' => true,
		'class' => '',
		'heading' => 'URL',
		'param_name' => 'url',
		'description' => 'http://website.com',
		//'value' => 'http://',
	),

	array(
		'type' => 'dropdown',
		'class' => '',
		'heading' => __( 'Custom', 'tattoopro' ),
		'param_name' => 'custom_style',
		'value' => array(
			__( 'No', 'tattoopro' ) => 'no',
			__( 'Yes', 'tattoopro' ) => 'yes',
		),
		'description' => '',
	),

	array(
		'type' => 'dropdown',
		'admin_label' => true,
		'class' => '',
		'heading' => __( 'Color', 'tattoopro' ),
		'param_name' => 'color',
		'value' => $button_color_array,
		'description' => '',
		'dependency' => array( 'element' => 'custom_style', 'value' => array( 'no' ) ),
	),

	// Custom

	array(
		'type' => 'colorpicker',
		'admin_label' => true,
		'class' => '',
		'show_settings_on_create' => true,
		'heading' => __( 'Button background color', 'tattoopro' ),
		'param_name' => 'button_bg_color',
		'value' => '',
		'dependency' => array( 'element' => 'custom_style', 'value' => array( 'yes' ) ),
	),

	array(
		'type' => 'colorpicker',
		'admin_label' => true,
		'class' => '',
		'show_settings_on_create' => true,
		'heading' => __( 'Button font color', 'tattoopro' ),
		'param_name' => 'button_font_color',
		'value' => '',
		'dependency' => array( 'element' => 'custom_style', 'value' => array( 'yes' ) ),
	),

	array(
		'type' => 'colorpicker',
		'admin_label' => true,
		'class' => '',
		'show_settings_on_create' => true,
		'heading' => __( 'Button border color', 'tattoopro' ),
		'param_name' => 'button_border_color',
		'value' => '',
		'dependency' => array( 'element' => 'custom_style', 'value' => array( 'yes' ) ),
	),

	array(
		'type' => 'colorpicker',
		'admin_label' => true,
		'class' => '',
		'show_settings_on_create' => true,
		'heading' => __( 'Button background color on hover', 'tattoopro' ),
		'param_name' => 'button_bg_color_hover',
		'value' => '',
		'dependency' => array( 'element' => 'custom_style', 'value' => array( 'yes' ) ),
	),

	array(
		'type' => 'colorpicker',
		'admin_label' => true,
		'class' => '',
		'show_settings_on_create' => true,
		'heading' => __( 'Button font color on hover', 'tattoopro' ),
		'param_name' => 'button_font_color_hover',
		'value' => '',
		'dependency' => array( 'element' => 'custom_style', 'value' => array( 'yes' ) ),
	),

	array(
		'type' => 'colorpicker',
		'admin_label' => true,
		'class' => '',
		'show_settings_on_create' => true,
		'heading' => __( 'Button border color on hover', 'tattoopro' ),
		'param_name' => 'button_border_color_hover',
		'value' => '',
		'dependency' => array( 'element' => 'custom_style', 'value' => array( 'yes' ) ),
	),

	// end custom

	array(
		'type' => 'dropdown',
		'admin_label' => true,
		'class' => '',
		'heading' => __( 'Type', 'tattoopro' ),
		'param_name' => 'type',
		'value' => $button_type_array,
		'description' => '',
	),

	array(
		'type' => 'dropdown',
		'class' => '',
		'heading' => __( 'Add icon', 'tattoopro' ),
		'param_name' => 'add_button_icon',
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
		'dependency' => array( 'element' => 'add_button_icon', 'value' => array( 'yes' ) ),
	),

	array(
		'type' => 'dropdown',
		'class' => '',
		'heading' => __( 'Icon position', 'tattoopro' ),
		'param_name' => 'icon_position',
		'value' => array(
			__( 'After', 'tattoopro' ) => 'after',
			__( 'Before', 'tattoopro' ) => 'before'
		),
		'description' => '',
		'dependency' => array( 'element' => 'add_button_icon', 'value' => array( 'yes' ) ),
	),

	array(
		'type' => 'dropdown',
		'admin_label' => true,
		'class' => '',
		'heading' => __( 'Target', 'tattoopro' ),
		'param_name' => 'target',
		'value' => array(
			'Self' => '_self',
			'Blank' => '_blank',
			'Parent' => '_parent',
		),
		'description' => '',
	),
);

// Button Shortcode
$button_args = array(
	'name' => __( 'Button', 'tattoopro' ),
	'base' => 'wolf_button',
	'category' => 'by WolfThemes',
	'icon' => 'wolf-vc-icon wolf-vc-button',
	'allowed_container_element' => 'vc_column',
	'params' => array(

		array(
			'type' => 'dropdown',
			'admin_label' => true,
			'class' => '',
			'heading' => __( 'Size', 'tattoopro' ),
			'param_name' => 'size',
			'value' => array(
				__( 'Medium', 'tattoopro' ) => 'medium',
				__( 'Small', 'tattoopro' ) => 'small',
				__( 'Large', 'tattoopro' ) => 'large',
				__( 'Very Large', 'tattoopro' ) => 'very-large',
			),
			// 'description' => '',
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
vc_map( wolf_inject_vc_params( $button_params, $button_args ) );

vc_map( array(
	'name' =>  __( 'Buttons Container', 'tattoopro' ),
	'base' => 'wolf_buttons_container',
	'as_parent' => array('only' => 'wolf_button'),
	'content_element' => true,
	'category' => 'by WolfThemes',
	'icon' => 'wolf-vc-icon wolf-vc-button',
	'show_settings_on_create' => true,
	'js_view' => 'VcColumnView',
	'params' => array(
		array(
			'type' => 'dropdown',
			'admin_label' => true,
			'class' => '',
			'heading' => __( 'Alignment', 'tattoopro' ),
			'param_name' => 'alignment',
			'value' => array(
				__( 'Left', 'tattoopro' ) => 'left',
				__( 'Center', 'tattoopro' ) => 'center',
				__( 'Right', 'tattoopro' ) => 'right',
			),
			'description' => '',
		),

		array(
			'type' => 'textfield',
			'admin_label' => true,
			'class' => '',
			'heading' => __( 'Margin top', 'tattoopro' ),
			'param_name' => 'margin_top',
			'description' => '',
			'value' => '',
		),

		array(
			'type' => 'textfield',
			'admin_label' => true,
			'class' => '',
			'heading' => __( 'Margin bottom', 'tattoopro' ),
			'param_name' => 'margin_bottom',
			'description' => '',
			'value' => '',
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
) );

if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
	class WPBakeryShortCode_Wolf_Buttons_Container extends WPBakeryShortCodesContainer {}
}

// Call To Action
$call_to_action_args = array(
	'name' => __( 'Call to action', 'tattoopro' ),
	'base' => 'wolf_call_to_action',
	'category' => 'by WolfThemes',
	'icon' => 'wolf-vc-icon wolf-vc-action',
	'allowed_container_element' => 'vc_row',
	'params' => array(

		array(
			'type' => 'textfield',
			'admin_label' => true,
			'class' => '',
			'heading' => __( 'Text', 'tattoopro' ),
			'param_name' => 'main_text',
			'description' => '',
			'value' => __( 'This is your call to action text', 'tattoopro' ),
		),

		array(
			'type' => 'textfield',
			'admin_label' => true,
			'class' => '',
			'heading' => __( 'Tagline', 'tattoopro' ),
			'param_name' => 'main_tagline',
			'description' => '',
			'value' => '',
		),

		array(
			'type' => 'dropdown',
			'class' => '',
			'heading' => __( 'Size', 'tattoopro' ),
			'param_name' => 'size',
			'value' => array(
				__( 'Medium', 'tattoopro' ) => 'medium',
				__( 'Small', 'tattoopro' ) => 'small',
				__( 'Large', 'tattoopro' ) => 'large',
			),
			// 'description' => '',
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
vc_map( wolf_inject_vc_params( $button_params, $call_to_action_args ) );