<?php
$title = __( 'Mailchimp signup', 'tattoopro' );
$params = array(

	array(
		'id' => 'list',
		'label' => __( 'List', 'tattoopro' ),
		'desc' => __( 'Your mailchimp list ID.', 'tattoopro' ),
		'placeholder' => 'mb0sd78fg8',
	),

	array(
		'id' => 'size',
		'label' => __( 'Size', 'tattoopro' ),
		'type' => 'select',
		'options' => array(
			'normal' => __( 'Normal', 'tattoopro' ),
			'large' => __( 'Large', 'tattoopro' ),
		),
	),

	array(
		'id' => 'submit',
		'label' => __( 'Submit', 'tattoopro' ),
		'placeholder' => 'Submit',
	),
);
echo wolf_generate_tinymce_popup( 'wolf_mailchimp', $params, $title );