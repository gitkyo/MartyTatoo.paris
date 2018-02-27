<?php
$title = __( 'Height', 'tattoopro' );
$params = array(

	array(
		'id' => 'height',
		'label' => __( 'Height', 'tattoopro' ),
		'value' => '100px',
	),
);
echo wolf_generate_tinymce_popup( 'wolf_spacer', $params, $title );