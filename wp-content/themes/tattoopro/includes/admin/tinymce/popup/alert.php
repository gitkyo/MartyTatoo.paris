<?php
$title = __( 'Alert Message', 'tattoopro' );
$params = array(

	array(
		'id' => 'message',
		'label' => __( 'Message', 'tattoopro' ),
		'placeholder' => __( 'Your notification message', 'tattoopro' )
	),

	array(
		'id' => 'type',
		'label' => __( 'Type', 'tattoopro' ),
		'type' => 'select',
		'options' => array(
			'success' => __( 'success', 'tattoopro' ),
			'info' => __( 'info', 'tattoopro' ),
			'tip' => __( 'tip', 'tattoopro' ),
			'error' => __( 'error', 'tattoopro' ),
		),
	)
);
echo wolf_generate_tinymce_popup( 'wolf_alert_message', $params, $title );