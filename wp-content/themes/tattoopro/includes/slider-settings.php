<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $slider_settings;

$slider_settings = array(

	array(
		'type' => 'dropdown',
		'class' => '',
		'heading' => __( 'Autoplay', 'tattoopro' ),
		'param_name' => 'autoplay',
		'value' => array(
			__( 'Yes', 'tattoopro' ) => 'true',
			__( 'No', 'tattoopro' ) => 'false',
		),
		'description' => '',
	),

	array(
		'type' => 'dropdown',
		'class' => '',
		'heading' => __( 'Pause on hover (if autoplay)', 'tattoopro' ),
		'param_name' => 'pause_on_hover',
		'value' => array(
			__( 'Yes', 'tattoopro' ) => 'true',
			__( 'No', 'tattoopro' ) => 'false',
		),
		'description' => '',
	),

	array(
		'type' => 'dropdown',
		'class' => '',
		'heading' => __( 'Transition', 'tattoopro' ),
		'param_name' => 'transition',
		'value' => array(
			__( 'Auto (fade by default and slide on touchable devices)', 'tattoopro' ) => 'auto',
			__( 'Slide', 'tattoopro' ) => 'slide',
			__( 'Fade', 'tattoopro' ) => 'fade',
		),
		'description' => '',
	),

	array(
		'type' => 'textfield',
		'class' => '',
		'heading' => __( 'Slideshow Speed in ms', 'tattoopro' ),
		'param_name' => 'slideshow_speed',
		'value' => 6000,
		'description' => '',
	),

	array(
		'type' => 'dropdown',
		'class' => '',
		'heading' => __( 'Show navigation bullets', 'tattoopro' ),
		'param_name' => 'nav_bullets',
		'value' => array(
			__( 'Yes', 'tattoopro' ) => 'true',
			__( 'No', 'tattoopro' ) => 'false',
		),
		'description' => '',
	),

	array(
		'type' => 'dropdown',
		'class' => '',
		'heading' => __( 'Show arrows', 'tattoopro' ),
		'param_name' => 'nav_arrows',
		'value' => array(
			__( 'Yes', 'tattoopro' ) => 'true',
			__( 'No', 'tattoopro' ) => 'false',
		),
		'description' => '',
	),
);