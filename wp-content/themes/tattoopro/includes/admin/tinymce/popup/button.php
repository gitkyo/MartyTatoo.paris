<?php
$button_color_array = array(
	'accent-color'  => __( 'theme color', 'tattoopro' ),
	'accent-color-bnw'  => __( 'theme color black/white on hover', 'tattoopro' ),
	'border-button'  => __( 'black/white', 'tattoopro' ),
	'border-button-accent-hover'  => __( 'black/white theme color on hover', 'tattoopro' ),
);

$button_type_array =  array(
	'square' => __( 'Square', 'tattoopro' ),
	'round' => __( 'Round', 'tattoopro' ),
);

$button_size_array =  array(
	'medium' => __( 'Medium', 'tattoopro' ),
	'small' => __( 'Small', 'tattoopro' ),
	'large' => __( 'Large', 'tattoopro' ),
);

global $icons;

$title = __( 'Mailchimp signup', 'tattoopro' );
$params = array(

	array(
		'id' => 'text',
		'label' => __( 'Text', 'tattoopro' ),
		'value' => __( 'Button', 'tattoopro' ),
	),

	array(
		'id' => 'url',
		'label' => __( 'Link', 'tattoopro' ),
		'placeholder' => __( 'http://', 'tattoopro' ),
	),

	array(
		'id' => 'tagline',
		'label' => __( 'Tagline', 'tattoopro' ),
	),

	array(
		'id' => 'color',
		'label' => __( 'Color', 'tattoopro' ),
		'type' => 'select',
		'options' => $button_color_array,
	),

	array(
		'id' => 'size',
		'label' => __( 'Size', 'tattoopro' ),
		'type' => 'select',
		'options' => $button_size_array,
	),

	array(
		'id' => 'type',
		'label' => __( 'Type', 'tattoopro' ),
		'type' => 'select',
		'options' => $button_type_array,
	),

	array(
		'id' => 'target',
		'label' => __( 'Open link in a new tab', 'tattoopro' ),
		'type' => 'checkbox',
		'value' => '_blank',
	),

	array(
		'id' => 'scroll_to_anchor',
		'label' => __( 'Scroll to anchor', 'tattoopro' ),
		'type' => 'checkbox',
		'value' => true,
	),

	array(
		'id' => 'add_button_icon',
		'label' => __( 'Add Icon', 'tattoopro' ),
		'type' => 'checkbox',
		'value' => 'yes',
	),

	array(
		'id' => 'icon',
		'label' => __( 'Icon', 'tattoopro' ),
		'type' => 'select',
		'options' => $icons,
	),

	array(
		'id' => 'icon_position',
		'label' => __( 'Icon position', 'tattoopro' ),
		'type' => 'select',
		'options' => array(
			'after' => __( 'after', 'tattoopro' ),
			'before' => __( 'before', 'tattoopro' ),
		),
	),
);
echo wolf_generate_tinymce_popup( 'wolf_button', $params, $title );