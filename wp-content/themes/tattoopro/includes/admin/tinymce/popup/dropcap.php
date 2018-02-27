<?php
$font_list = array();
global $wolf_fonts;

foreach ( $wolf_fonts as $key => $value ) {
	$font_list[$key] = $key;
}

$title = __( 'Dropcap', 'tattoopro' );
$params = array(

	array(
		'id' => 'text',
		'label' => __( 'Letter', 'tattoopro' ),
	),

	array(
		'id' => 'font',
		'label' => __( 'Font Family', 'tattoopro' ),
		'type' => 'select',
		'options' => $font_list,
	),
);
echo wolf_generate_tinymce_popup( 'wolf_dropcap', $params, $title );