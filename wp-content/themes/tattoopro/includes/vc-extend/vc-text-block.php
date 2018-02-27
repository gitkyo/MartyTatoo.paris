<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $animations;

// Text Block
vc_add_param( 'vc_column_text', array(
	'type' => 'dropdown',
	'class' => '',
	'show_settings_on_create' => true,
	'heading' => __( 'Animation', 'tattoopro' ),
	'param_name' => 'animation',
	'value' => $animations
) );

vc_add_param( 'vc_column_text', array(
	'type' => 'textfield',
	'admin_label' => true,
	'class' => '',
	'heading' => __( 'Animation delay (in ms)', 'tattoopro' ),
	'param_name' => 'animation_delay',
	'value' => '',
	'description' => '',
) );

vc_add_param( 'vc_column_text', array(
	'type' => 'textfield',
	'admin_label' => true,
	'class' => '',
	'heading' => __( 'Inline style', 'tattoopro' ),
	'param_name' => 'inline_style',
	'value' => '',
	'description' => sprintf( __( 'e.g: %s', 'tattoopro' ), 'margin-bottom:150px;' ),
) );
