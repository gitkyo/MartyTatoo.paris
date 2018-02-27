<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// Row
vc_add_param( 'vc_row', array(
	'type' => 'dropdown',
	'class' => '',
	'show_settings_on_create' => true,
	'heading' => __( 'Content type', 'tattoopro' ),
	'param_name' => 'content_type',
	'value' => array(
		sprintf( __( 'Standard width (%s centered)', 'tattoopro' ), '1140px' ) => 'standard',
		sprintf( __( 'Small width (%s centered)', 'tattoopro' ), '750px' ) => 'small',
		sprintf( __( 'Large width (%s centered)', 'tattoopro' ), '98%' ) => 'large',
		sprintf( __( 'Full width (%s)', 'tattoopro' ), '100%' ) => 'full',
	)
) );

vc_add_param( 'vc_row', array(
	'type' => 'textfield',
	'class' => '',
	'heading' => __( 'Anchor', 'tattoopro' ),
	'param_name' => 'anchor',
	'description' => __( 'example "about"', 'tattoopro' ),
	'value' => '',
) );

// vc_add_param( 'vc_row', array(
// 	'type' => 'checkbox',
// 	'class' => '',
// 	'show_settings_on_create' => true,
// 	'heading' => '',
// 	'param_name' => 'no_padding',
// 	'value' => array( __( 'No Padding', 'tattoopro' ) => true ),
// ) );

vc_add_param( 'vc_row', array(
	'type' => 'textfield',
	'class' => '',
	'heading' => __( 'Padding top', 'tattoopro' ),
	'param_name' => 'padding_top',
	'description' => '',
	'value' => '',
) );

vc_add_param( 'vc_row', array(
	'type' => 'textfield',
	'class' => '',
	'heading' => __( 'Padding bottom', 'tattoopro' ),
	'param_name' => 'padding_bottom',
	'description' => '',
	'value' => '',
) );


vc_add_param( 'vc_row', array(
	'type' => 'dropdown',
	'class' => '',
	'show_settings_on_create' => true,
	'heading' => __( 'Skin', 'tattoopro' ),
	'param_name' => 'font_type',
	'value' => array(
		__( 'Light', 'tattoopro' ) => 'dark',
		__( 'Dark', 'tattoopro' ) => 'light',
	),
) );

vc_add_param( 'vc_row', array(
	'type' => 'checkbox',
	'class' => '',
	'show_settings_on_create' => true,
	'heading' => '',
	'param_name' => 'full_screen',
	'value' => array( __( 'Full screen', 'tattoopro' ) => true ),
) );

vc_add_param( 'vc_row', array(
	'type' => 'dropdown',
	'class' => '',
	'show_settings_on_create' => true,
	'heading' => __( 'Background type', 'tattoopro' ),
	'param_name' => 'background_type',
	'value' => array(
		__( 'Image', 'tattoopro' ) => 'image',
		__( 'Video', 'tattoopro' ) => 'video',
	),
) );

vc_add_param( 'vc_row', array(
	'type' => 'colorpicker',
	'class' => '',
	'show_settings_on_create' => true,
	'heading' => __( 'Background color', 'tattoopro' ),
	'param_name' => 'background_color',
	'value' => '',
) );

vc_add_param( 'vc_row', array(
	'type' => 'single_image',
	'class' => '',
	'show_settings_on_create' => true,
	'heading' => __( 'Background image', 'tattoopro' ),
	'param_name' => 'background_image',
	'value' => '',
	'dependency' => array( 'element' => 'background_type', 'value' => array( 'image' ) ),
) );

vc_add_param( 'vc_row', array(
	'type' => 'dropdown',
	'class' => '',
	'show_settings_on_create' => true,
	'heading' => __( 'Background position', 'tattoopro' ),
	'param_name' => 'background_position',
	'value' => array(
		__( 'center center', 'tattoopro' ) => 'center center',
		__( 'center top', 'tattoopro' )  => 'center top',
		__( 'left top', 'tattoopro' ) => 'left top',
		__( 'right top', 'tattoopro' )  => 'right top',
		__( 'center bottom', 'tattoopro' )  => 'center bottom',
		__( 'left bottom', 'tattoopro' )  => 'left bottom',
		__( 'right bottom', 'tattoopro' ) => 'right bottom',
		__( 'left center', 'tattoopro' ) => 'left center',
		__( 'right center', 'tattoopro' ) => 'right center',
	),
	'dependency' => array( 'element' => 'background_type', 'value' => array( 'image' ) ),
) );

vc_add_param( 'vc_row', array(
	'type' => 'dropdown',
	'class' => '',
	'show_settings_on_create' => true,
	'heading' => __( 'Background repeat', 'tattoopro' ),
	'param_name' => 'background_repeat',
	'value' => array(
		__( 'no repeat', 'tattoopro' ) => 'no-repeat',
		__( 'repeat', 'tattoopro' ) => 'repeat',
		__( 'repeat-x', 'tattoopro' ) => 'repeat-x',
		__( 'repeat-y', 'tattoopro' ) => 'repeat-y',
	),
	'dependency' => array( 'element' => 'background_type', 'value' => array( 'image' ) ),
) );

// vc_add_param( 'vc_row', array(
// 	'type' => 'dropdown',
// 	'class' => '',
// 	'show_settings_on_create' => true,
// 	'heading' => __( 'Background Attachment', 'tattoopro' ),
// 	'param_name' => 'background_attachment',
// 	'value' => array(
// 		__( 'scroll', 'tattoopro' ) => 'scroll',
// 		__( 'fixed', 'tattoopro' ) => 'fixed',
// 	),
// 	'dependency' => array( 'element' => 'background_type', 'value' => array( 'image' ) ),
// ) );

vc_add_param( 'vc_row', array(
	'type' => 'dropdown',
	'class' => '',
	'show_settings_on_create' => true,
	'heading' => __( 'Background size', 'tattoopro' ),
	'param_name' => 'background_size',
	'value' => array(
		__( 'cover', 'tattoopro' ) => 'cover',
		__( 'default', 'tattoopro' ) => 'default',
		__( 'resize', 'tattoopro' ) => 'resize',
	),
	'dependency' => array( 'element' => 'background_type', 'value' => array( 'image' ) ),
) );

vc_add_param( 'vc_row', array(
	'type' => 'checkbox',
	'class' => '',
	'show_settings_on_create' => true,
	'heading' => '',
	'param_name' => 'parallax',
	'dependency' => array( 'element' => 'background_type', 'value' => array( 'image' ) ),
	'value' => array( 'Parallax' => true ),
) );

vc_add_param( 'vc_row', array(
	'type' => 'dropdown',
	'class' => '',
	'show_settings_on_create' => true,
	'heading' => __( 'Video Background type', 'tattoopro' ),
	'param_name' => 'video_bg_type',
	'value' => array(
		'Youtube' => 'youtube',
		__( 'Self hosted', 'tattoopro' ) => 'selfhosted',
	),
	'dependency' => array( 'element' => 'background_type', 'value' => array( 'video' ) ),
) );

vc_add_param( 'vc_row', array(
	'type' => 'textfield',
	'class' => '',
	'heading' => __( 'Youtube URL', 'tattoopro' ),
	'param_name' => 'video_bg_youtube_url',
	'description' => '',
	'value' => '',
	'dependency' => array(
		'element' => 'background_type',
		'value' => array( 'video' )
	),
) );

vc_add_param( 'vc_row', array(
	'type' => 'single_file',
	'class' => '',
	'heading' => __( 'Video background mp4', 'tattoopro' ),
	'param_name' => 'video_bg_mp4',
	'description' => '',
	'value' => '',
	'dependency' => array(
		'element' => 'background_type',
		'value' => array( 'video' )
	),
) );

vc_add_param( 'vc_row', array(
	'type' => 'single_file',
	'class' => '',
	'heading' => __( 'Video background webm', 'tattoopro' ),
	'param_name' => 'video_bg_webm',
	'description' => '',
	'value' => '',
	'dependency' => array( 'element' => 'background_type', 'value' => array( 'video' ) ),
) );

vc_add_param( 'vc_row', array(
	'type' => 'single_file',
	'class' => '',
	'heading' => __( 'Video background ogv/ogg', 'tattoopro' ),
	'param_name' => 'video_bg_ogv',
	'description' => '',
	'value' => '',
	'dependency' => array( 'element' => 'background_type', 'value' => array( 'video' ) ),
) );

vc_add_param( 'vc_row', array(
	'type' => 'single_image',
	'class' => '',
	'heading' => __( 'Video Image Fallback', 'tattoopro' ),
	'param_name' => 'video_bg_img',
	'description' => '',
	'value' => '',
	'dependency' => array(
		'element' => 'background_type',
		'value' => array( 'video' )
	),
) );

vc_add_param( 'vc_row', array(
	'type' => 'dropdown',
	'class' => '',
	'show_settings_on_create' => true,
	'heading' => __( 'Add overlay', 'tattoopro' ),
	'param_name' => 'overlay',
	'value' => array(
		__( 'No', 'tattoopro' ) => '',
		__( 'Yes', 'tattoopro' ) => 'yes',
	),
) );

vc_add_param( 'vc_row', array(
	'type' => 'colorpicker',
	'class' => '',
	'show_settings_on_create' => true,
	'heading' => __( 'Overlay color', 'tattoopro' ),
	'param_name' => 'overlay_color',
	'value' => '#000000',
	'dependency' => array( 'element' => 'overlay', 'value' => array( 'yes' ) ),
) );

vc_add_param( 'vc_row', array(
	'type' => 'single_image',
	'class' => '',
	'show_settings_on_create' => true,
	'heading' => __( 'Overlay pattern', 'tattoopro' ),
	'param_name' => 'overlay_image',
	'value' => '',
	'dependency' => array( 'element' => 'overlay', 'value' => array( 'yes' ) ),
) );

vc_add_param( 'vc_row', array(
	'type' => 'textfield',
	'class' => '',
	'heading' => __( 'Overlay opacity in percent', 'tattoopro' ),
	'param_name' => 'overlay_opacity',
	'description' => '',
	'value' => 40,
	'dependency' => array( 'element' => 'overlay', 'value' => array( 'yes' ) ),
) );

vc_add_param( 'vc_row', array(
	'type' => 'dropdown',
	'class' => '',
	'show_settings_on_create' => true,
	'heading' => __( 'Visibility for devices', 'tattoopro' ),
	'param_name' => 'hide_class',
	'value' => array(
		__( 'Always visible', 'tattoopro' ) => '',
		__( 'Hide on tablet and mobile', 'tattoopro' ) => 'hide-tablet',
		__( 'Hide on mobile', 'tattoopro' ) => 'hide-mobile',
		__( 'Show on tablet and mobile only', 'tattoopro' ) => 'show-tablet',
		__( 'Show on mobile only', 'tattoopro' ) => 'show-mobile',
	),
) );

// vc_add_param( 'vc_row', array(
// 	'type' => 'textfield',
// 	'class' => '',
// 	'heading' => __( 'Inline style', 'tattoopro' ),
// 	'param_name' => 'inline_style',
// 	'description' => '',
// 	'value' => '',
// ) );
