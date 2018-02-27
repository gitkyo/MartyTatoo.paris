<?php
$title = __( 'Socials', 'tattoopro' );
$params = array(

	array(
		'id' => 'services',
		'label' => __( 'Services', 'tattoopro' ),
		'desc' => __( 'Leave empty to display them all.<br>* See the social networks available in the theme options.', 'tattoopro' ),
		'placeholder' => 'facebook,twitter',
	),

	array(
		'id' => 'type',
		'label' => __( 'Type', 'tattoopro' ),
		'type' => 'select',
		'options' => array(
			'normal' => __( 'Normal', 'tattoopro' ),
			'circle' => __( 'Circle', 'tattoopro' ),
			'square' => __( 'Square', 'tattoopro' ),
		),
	),

	array(
		'id' => 'size',
		'label' => __( 'Size', 'tattoopro' ),
		'type' => 'select',
		'options' => array(
			'1x' => __( 'Small', 'tattoopro' ),
			'2x' => __( 'Medium', 'tattoopro' ),
			'3x' => __( 'Large', 'tattoopro' ),
			'4x' => __( 'Very Large', 'tattoopro' ),
		),
	),
);
echo wolf_generate_tinymce_popup( 'wolf_theme_socials', $params, $title );