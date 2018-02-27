<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$wolf_theme_options[] = array(
	'type' => 'open',
	'label' => __( 'Javascript code', 'tattoopro'  )
);


	$wolf_theme_options[] = array(
		'label' => __( 'Javascript code', 'tattoopro' ),
		'type' => 'section_open'
	);
		$wolf_theme_options[] = array( 'label' => __( 'Javascript code', 'tattoopro' ),
                               'desc' => __( 'You can paste any Javascript code here. It will be output in the footer.', 'tattoopro' ),
                               'id' => 'js_code',
                               'type' => 'javascript',
		);

	$wolf_theme_options[] = array( 'type' => 'section_close' );

$wolf_theme_options[] = array( 'type' => 'close' );
