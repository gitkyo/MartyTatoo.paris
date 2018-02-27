<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// Video
vc_map(
	array(
		'name' => __( 'Video', 'tattoopro' ),
		'base' => 'wolf_video',
		'icon' => 'wolf-vc-icon wolf-vc-videos',
		'category' => 'by WolfThemes',
		'allowed_container_element' => 'vc_row',
		'params' => array(

			array(
				'type' => 'textfield',
				'admin_label' => true,
				'class' => '',
				'heading' => __( 'Video URL', 'tattoopro' ),
				'param_name' => 'url',
				'value' => '',
				'description' => sprintf( __( 'Link to the video. More about supported formats at <a href="%s" target="_blank">WordPress codex page.</a>', 'tattoopro' ), 'http://codex.wordpress.org/Embeds#Okay.2C_So_What_Sites_Can_I_Embed_From.3F' ),
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