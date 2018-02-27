<?php
$font_list = array( '' => __( 'Default heading font', 'tattoopro' ) );
global $wolf_fonts;

foreach ( $wolf_fonts as $key => $value ) {
	$font_list[$key] = $key;
}

$title = __( 'Headline', 'tattoopro' );
$params = array(

	array(
		'id' => 'text',
		'label' => __( 'Text', 'tattoopro' ),
		'placeholder' => __( 'My Cool Headline', 'tattoopro' ),
	),

	array(
		'id' => 'max_font_size',
		'label' => __( 'Font Size', 'tattoopro' ),
		'placeholder' => '48px',
	),

	array(
		'id' => 'letter_spacing',
		'label' => __( 'Letter Spacing', 'tattoopro' ),
		'placeholder' => '3px',
	),

	array(
		'id' => 'font_family',
		'label' => __( 'Font Family', 'tattoopro' ),
		'type' => 'select',
		'options' => $font_list,
	),

	array(
		'id' => 'text_transform',
		'label' => __( 'Font Transform', 'tattoopro' ),
		'type' => 'select',
		'options' => array(
			'uppercase' => __( 'uppercase', 'tattoopro' ),
			'none' => __( 'none', 'tattoopro' ),
		),
	),
);
echo wolf_generate_tinymce_popup( 'wolf_fittext', $params, $title );
