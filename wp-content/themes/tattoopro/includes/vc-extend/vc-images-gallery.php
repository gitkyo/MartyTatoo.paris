<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$args = array(
	'name' => __( 'Image gallery', 'tattoopro' ),
	'base' => 'wolf_images_gallery',
	'category' => 'by WolfThemes',
	'icon' => 'wolf-vc-icon wolf-vc-images-gallery',
	'allowed_container_element' => 'vc_row',
	'params' => array(

		array(
			'type' => 'attach_images',
			'admin_label' => true,
			'class' => '',
			'heading' => __( 'Images', 'tattoopro' ),
			'param_name' => 'ids',
			'description' => '',
		),

		array(
			'type' => 'dropdown',
			'class' => '',
			'heading' => __( 'Layout', 'tattoopro' ),
			'param_name' => 'layout',
			'value' => array(
				__( 'Mosaic', 'tattoopro' ) => 'mosaic',
				//__( 'Mosaic carousel', 'tattoopro' ) => 'carousel_mosaic',
				__( 'Simple carousel', 'tattoopro' ) => 'carousel_simple',
				__( 'Simple', 'tattoopro' ) => 'simple',
			),
			'description' => __( 'For the mosaic gallery set a minimum of 12 image and a multiple of 6 is recommended.<br>Uploaded images must be 960x960px minimum.', 'tattoopro' ),
		),

		array(
			'type' => 'dropdown',
			'class' => '',
			'heading' => __( 'Columns', 'tattoopro' ),
			'param_name' => 'columns',
			'value' => array(
				1,2,3,4,5,6
			),
			'description' => '',
			'dependency' => array( 'element' => 'layout', 'value' => array( 'simple' ) ),
		),

		array(
			'type' => 'dropdown',
			'class' => '',
			'heading' => __( 'Image size', 'tattoopro' ),
			'param_name' => 'size',
			'value' => array(
				__( 'Standard', 'tattoopro' ) => 'classic-thumb',
				__( 'Square', 'tattoopro' ) => '2x2',
				__( 'Portrait', 'tattoopro' ) => 'portrait',
			),
			'description' => '',
			'dependency' => array( 'element' => 'layout', 'value' => array( 'simple', 'carousel_simple' ) ),
		),

		array(
			'type' => 'dropdown',
			'class' => '',
			'heading' => __( 'Link', 'tattoopro' ),
			'param_name' => 'link',
			'value' => array(
				__( 'Open in a lightbox', 'tattoopro' ) => 'file',
				__( 'Full Size image', 'tattoopro' ) => 'raw-file',
				__( 'Attachment page', 'tattoopro' ) => 'attachment',
				__( 'Not linked', 'tattoopro' ) => 'none',
			),
			'description' => '',
		),

		array(
			'type' => 'dropdown',
			'class' => '',
			'heading' => __( 'Hover effect', 'tattoopro' ),
			'param_name' => 'hover_effect',
			'value' => array(
				__( 'Default', 'tattoopro' ) => 'default',
				__( 'Black and white to colored', 'tattoopro' ) => 'greyscale',
				__( 'Colored to black and white', 'tattoopro' ) => 'to-greyscale',
				__( 'Zoom + Black and white to colored', 'tattoopro' ) => 'scale-greyscale',
				__( 'Zoom + Colored to black and white', 'tattoopro' ) => 'scale-to-greyscale',
				__( 'None', 'tattoopro' ) => 'none',
			),
			'description' => __( 'Note that not all browser support the black and white effect', 'tattoopro' ),
			'dependency' => array( 'columns' => 'link', 'value' => array( 'full_size', 'attachment' ) ),
		),

		array(
			'type' => 'dropdown',
			'class' => '',
			'heading' => __( 'Padding', 'tattoopro' ),
			'param_name' => 'padding',
			'value' => array(
				__( 'No', 'tattoopro' ) => 'no',
				__( 'Yes', 'tattoopro' ) => 'yes',
			),
			'description' => '',
			'dependency' => array( 'element' => 'layout', 'value' => array( 'simple', 'carousel_simple' ) ),
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
vc_map( $args );