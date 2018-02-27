<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $animations, $slider_settings;

// Testimonial Container
$args = array(
	'name' => __( 'Testimonials', 'tattoopro' ),
	'base' => 'wolf_testimonials',
	'as_parent' => array('only' => 'wolf_testimonial'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
	'content_element' => true,
	'category' => 'by WolfThemes',
	'icon' => 'wolf-vc-icon wolf-vc-testimonials',
	'show_settings_on_create' => true,
	'params' => array(

		array(
			'type' => 'dropdown',
			'class' => '',
			'heading' => __( 'Animation', 'tattoopro' ),
			'description' => __( 'How the slider will appear on your page', 'tattoopro' ),
			'param_name' => 'animation',
			'value' => $animations,
		),

		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => __( 'Animation delay (in ms)', 'tattoopro' ),
			'param_name' => 'animation_delay',
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
	),
	'js_view' => 'VcColumnView',

);
vc_map( wolf_inject_vc_params( $slider_settings, $args ) );

// Testimonials
vc_map(
	array(
		'name' => __( 'Testimonial', 'tattoopro' ),
		'base' => 'wolf_testimonial',
		'icon' => 'wolf-vc-icon wolf-vc-testimonial',
		'category' => 'by WolfThemes',
		'allowed_container_element' => 'vc_row',
		'as_child' => array('only' => 'wolf_testimonials'), // Use only|except attributes to limit parent (separate multiple values with comma)
		'params' => array(
			array(
				'type' => 'textarea',
				'admin_label' => true,
				'class' => '',
				'heading' => __( 'Content', 'tattoopro' ),
				'param_name' => 'content',
				'value' => '',
				'description' => '',
			),
			array(
				'type' => 'textfield',
				'admin_label' => true,
				'class' => '',
				'heading' => __( 'Signature', 'tattoopro' ),
				'param_name' => 'name',
				'value' => '',
				'description' => ''
			),

			array(
				'type' => 'single_image',
				'admin_label' => true,
				'class' => '',
				'heading' => __( 'Avatar', 'tattoopro' ),
				'param_name' => 'avatar',
				'value' => '',
				'description' => '',
			),

			array(
				'type' => 'textfield',
				'admin_label' => true,
				'class' => '',
				'heading' => __( 'Link', 'tattoopro' ),
				'param_name' => 'link',
				'value' => '',
				'description' => ''
			),
		),
	)
);

//Your 'container' content element should extend WPBakeryShortCodesContainer class to inherit all required functionality
if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
	class WPBakeryShortCode_Wolf_Testimonials extends WPBakeryShortCodesContainer {}
}
if ( class_exists( 'WPBakeryShortCode' ) ) {
	class WPBakeryShortCode_Wolf_Testimonial extends WPBakeryShortCode {}
}