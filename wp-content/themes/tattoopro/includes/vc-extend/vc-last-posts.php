<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$params = array(

	array(
		'type' => 'textfield',
		'class' => '',
		'heading' => __( 'Count', 'tattoopro' ),
		'param_name' => 'count',
		'description' => '',
		'value' => '',
	),

	array(
		'type' => 'textfield',
		'admin_label' => true,
		'class' => '',
		'heading' => __( 'Category', 'tattoopro' ),
		'param_name' => 'category',
		'description' => __( 'Include only one or several categories. Paste category slug(s) separated by a comma', 'tattoopro' ),
		'value' => '',
	),

	array(
		'type' => 'textfield',
		'admin_label' => true,
		'class' => '',
		'heading' => __( 'Tag', 'tattoopro' ),
		'param_name' => 'tag',
		'description' => __( 'Include only one or several tags. Paste category slug(s) separated by a comma', 'tattoopro' ),
		'value' => '',
	),

	array(
		'type' => 'checkbox',
		'admin_label' => true,
		'class' => '',
		//'heading' => __( 'Hide Cover', 'tattoopro' ),
		'param_name' => 'hide_category',
		'description' => '',
		'value' => array( __( 'Hide category', 'tattoopro' ) => true ),
	),

	array(
		'type' => 'checkbox',
		'admin_label' => true,
		'class' => '',
		//'heading' => __( 'Hide Cover', 'tattoopro' ),
		'param_name' => 'hide_tag',
		'description' => '',
		'value' => array( __( 'Hide tag', 'tattoopro' ) => true ),
	),

	array(
		'type' => 'checkbox',
		'admin_label' => true,
		'class' => '',
		//'heading' => __( 'Hide Cover', 'tattoopro' ),
		'param_name' => 'hide_date',
		'description' => '',
		'value' => array( __( 'Hide date', 'tattoopro' ) => true ),
	),

	array(
		'type' => 'checkbox',
		'admin_label' => true,
		'class' => '',
		//'heading' => __( 'Hide Cover', 'tattoopro' ),
		'param_name' => 'hide_author',
		'description' => '',
		'value' => array( __( 'Hide author', 'tattoopro' ) => true ),
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
);

// Post Grid
$args = array(
	'name' => __( 'Post grid', 'tattoopro' ),
	'base' => 'wolf_last_posts_grid',
	'category' => 'by WolfThemes',
	'icon' => 'wolf-vc-icon wolf-vc-posts-grid',
	'allowed_container_element' => 'vc_row',
	'params' => $params
);
vc_map( $args );

// Post Slider
$args = array(
	'name' => __( 'Post slider', 'tattoopro' ),
	'base' => 'wolf_last_posts_slider',
	'category' => 'by WolfThemes',
	'icon' => 'wolf-vc-icon wolf-vc-posts-slider',
	'allowed_container_element' => 'vc_row',
	'params' => $params
);

global $slider_settings;
vc_map( wolf_inject_vc_params( $slider_settings, $args ) );

// Post Masonry
$args = array(
	'name' => __( 'Post masonry', 'tattoopro' ),
	'base' => 'wolf_last_posts_masonry',
	'category' => 'by WolfThemes',
	'icon' => 'wolf-vc-icon wolf-vc-posts-masonry',
	'allowed_container_element' => 'vc_row',
	'params' => $params
);
vc_map( $args );

// Post Columns
$args = array(
	'name' => __( 'Post columns', 'tattoopro' ),
	'base' => 'wolf_last_posts_columns',
	'category' => 'by WolfThemes',
	'icon' => 'wolf-vc-icon wolf-vc-posts-columns',
	'allowed_container_element' => 'vc_row',
	'params' => $params
);
vc_map( $args );

// Post Carousel
$args = array(
	'name' => __( 'Post carousel', 'tattoopro' ),
	'base' => 'wolf_last_posts_carousel',
	'category' => 'by WolfThemes',
	'icon' => 'wolf-vc-icon wolf-vc-posts-carousel',
	'allowed_container_element' => 'vc_row',
	'params' => $params
);
vc_map( $args );


// Post Preview
$params[] = array(
	'type' => 'dropdown',
	'admin_label' => true,
	'class' => '',
	'heading' => __( 'Animation', 'tattoopro' ),
	'description' => '',
	'param_name' => 'animation',
	'value' => $animations,
	'description' => '',
);
$args = array(
	'name' => __( 'Post preview', 'tattoopro' ),
	'base' => 'wolf_last_posts_preview',
	'category' => 'by WolfThemes',
	'icon' => 'wolf-vc-icon wolf-vc-posts-preview',
	'allowed_container_element' => 'vc_row',
	'params' => $params
);
vc_map( $args );
