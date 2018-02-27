<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$font_list = array( __( 'Default heading font', 'tattoopro' ) => '' );
global $animations, $wolf_fonts;

foreach ( $wolf_fonts as $key => $value ) {
	$font_list[$key] = $key;
}

// Fittext
vc_map(
	array(
		'name' => __( 'Headline', 'tattoopro' ),
		'base' => 'wolf_fittext',
		'category' => 'by WolfThemes',
		'icon' => 'wolf-vc-icon wolf-vc-fittext',
		'allowed_container_element' => 'vc_row',
		'params' => array(

			array(
				'type' => 'textfield',
				'admin_label' => true,
				'class' => '',
				'heading' => __( 'Maximum font size', 'tattoopro' ),
				'param_name' => 'max_font_size',
				'value' => 72,
			),

			array(
				'type' => 'textfield',
				'admin_label' => true,
				'class' => '',
				'heading' => __( 'Text', 'tattoopro' ),
				'param_name' => 'text',
				'value' => __( 'My Headline', 'tattoopro' ),
			),

			array(
				'type' => 'dropdown',
				'class' => '',
				'heading' => __( 'Tag', 'tattoopro' ),
				'param_name' => 'title_tag',
				'value' => array(
					//'span' => 'span',
					'h5' => 'h5',
					'h4' => 'h4',
					'h3' => 'h3',
					'h2' => 'h2',
					'h1' => 'h1',
				),
				// 'description' => '',
			),

			array(
				'type' => 'colorpicker',
				'admin_label' => true,
				'class' => '',
				'heading' => __( 'Text color', 'tattoopro' ),
				'param_name' => 'color',
				'value' => '',
			),


			array(
				'type' => 'textfield',
				'admin_label' => true,
				'class' => '',
				'heading' => __( 'Font weight', 'tattoopro' ),
				'param_name' => 'font_weight',
				'value' => 700,
			),

			array(
				'type' => 'dropdown',
				'class' => '',
				'heading' => __( 'Text transform', 'tattoopro' ),
				'param_name' => 'text_transform',
				'value' => array(
					__( 'uppercase', 'tattoopro' ) => 'uppercase',
					__( 'none', 'tattoopro' ) => 'none',

				),
			),

			array(
				'type' => 'textfield',
				'admin_label' => true,
				'class' => '',
				'heading' => __( 'Letter spacing', 'tattoopro' ),
				'param_name' => 'letter_spacing',
				'value' => 0,
			),

			array(
				'type' => 'dropdown',
				'admin_label' => true,
				'class' => '',
				'heading' => __( 'Font', 'tattoopro' ),
				'param_name' => 'font_family',
				'value' => $font_list,
				// 'description' => '',
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
	)
);