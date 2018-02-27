<?php
$title = __( 'Columns', 'tattoopro' );
$params = array(

	array(
		'id' => 'col',
		'label' => __( 'Size', 'tattoopro' ),
		'type' => 'select',
		'options' => array(
			'col-6' => __( 'col-6 (one half)', 'tattoopro' ),
			'col-4' => __( 'col-4 (one third)', 'tattoopro' ),
			'col-3' => __( 'col-3 (one fourth)', 'tattoopro' ),
			'col-11' => 'col-11',
			'col-10' => 'col-10',
			'col-9' => 'col-9',
			'col-8' => 'col-8',
			'col-7' => 'col-7',
			'col-5' => 'col-5',
			'col-2' => 'col-2',
			'col-1' => 'col-1',
		),
		'desc' => __( 'A row consists of a series of columns (col-X) that add up to 12.<br>Check the "First" checkbox below if your column is the first of the row<br>and check the "Last" checkbox if your column is the last of the row.', 'tattoopro' ),
	),

	array(
		'id' => 'first',
		'label' => __( 'First', 'tattoopro' ),
		'type' => 'checkbox',
	),

	array(
		'id' => 'last',
		'label' => __( 'Last', 'tattoopro' ),
		'type' => 'checkbox',
	),
);
echo wolf_generate_tinymce_popup( 'wolf_column', $params, $title, true );
