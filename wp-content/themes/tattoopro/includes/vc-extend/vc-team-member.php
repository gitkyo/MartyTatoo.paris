<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $animations;

$args = array(
	'name' => __( 'Team member', 'tattoopro' ),
	'base' => 'wolf_team_member',
	'icon' => 'wolf-vc-icon wolf-vc-team-member',
	'category' => 'by WolfThemes',
	'allowed_container_element' => 'vc_row',
	'params' => array(

		array(
			'type' => 'single_image',
			'class' => '',
			'heading' => __( 'Photo', 'tattoopro' ),
			'param_name' => 'photo',
			'description' => sprintf( __( 'Minimum %s recommended', 'tattoopro' ), '960x960px' ),
			'value' => '',
		),

		array(
			'type' => 'vc_link',
			'admin_label' => true,
			'class' => '',
			'heading' => __( 'Link', 'tattoopro' ),
			'param_name' => 'link',
			'value' => '',
		),

		array(
			'type' => 'dropdown',
			'admin_label' => true,
			'class' => '',
			'heading' => __( 'Image style', 'tattoopro' ),
			'param_name' => 'image_style',
			'value' => array(
				__( 'default', 'tattoopro' ) => 'default',
				__( 'portrait', 'tattoopro' ) => 'portrait',
				__( 'square', 'tattoopro' ) => '2x2',
				__( 'rounded', 'tattoopro' ) => 'round',
			),
		),

		array(
			'type' => 'dropdown',
			'admin_label' => true,
			'class' => '',
			'heading' => __( 'Text alignment', 'tattoopro' ),
			'param_name' => 'alignment',
			'value' => array(
				__( 'center', 'tattoopro' ) => 'center',
				__( 'left', 'tattoopro' ) => 'left',
				__( 'right', 'tattoopro' ) => 'right',
			),
		),

		array(
			'type' => 'textfield',
			'admin_label' => true,
			'class' => '',
			'heading' => __( 'Name', 'tattoopro' ),
			'param_name' => 'name',
			'description' => '',
			'value' => '',
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
			'heading' => __( 'Role', 'tattoopro' ),
			'param_name' => 'role',
			'description' => '',
			'value' => '',
		),

		array(
			'type' => 'textarea',
			'admin_label' => true,
			'class' => '',
			'heading' => __( 'Description', 'tattoopro' ),
			'param_name' => 'tagline',
			'description' => '',
			//'value' => '',
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
	)
);

global $team_member_socials;

foreach ( $team_member_socials as $social ) {
	$add = array(
		'type' => 'textfield',
		'admin_label' => true,
		'class' => '',
		'heading' => $social,
		'param_name' => $social,
		'description' => '',
		'value' => '',
	);

	array_push( $args['params'], $add);
}

vc_map( $args );