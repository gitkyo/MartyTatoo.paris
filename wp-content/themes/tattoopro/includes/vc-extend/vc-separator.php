<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// Separator
vc_add_param( 'vc_separator', array(
	'type' => 'textfield',
	'class' => '',
	'heading' => __( 'Width', 'tattoopro' ),
	'param_name' => 'width',
	'description' => '',
	'value' => '100%',
) );

vc_add_param( 'vc_separator', array(
	'type' => 'dropdown',
	'class' => '',
	'show_settings_on_create' => true,
	'heading' => __( 'Aligment', 'tattoopro' ),
	'param_name' => 'alignment',
	'value' => array(
		__( 'Center', 'tattoopro' ) => 'center',
		__( 'Left', 'tattoopro' ) => 'left',
		__( 'Right', 'tattoopro' ) => 'right',
	)
) );

vc_add_param( 'vc_separator', array(
	'type' => 'textfield',
	'class' => '',
	'heading' => __( 'Margin top', 'tattoopro' ),
	'param_name' => 'margin_top',
	'description' => '',
	'value' => '',
) );

vc_add_param( 'vc_separator', array(
	'type' => 'textfield',
	'class' => '',
	'heading' => __( 'Margin bottom', 'tattoopro' ),
	'param_name' => 'margin_bottom',
	'description' => '',
	'value' => '',
) );

vc_add_param( 'vc_separator', array(
	'type' => 'colorpicker',
	'class' => '',
	'heading' => __( 'Color', 'tattoopro' ),
	'param_name' => 'color',
	'description' => '',
	'value' => '',
) );