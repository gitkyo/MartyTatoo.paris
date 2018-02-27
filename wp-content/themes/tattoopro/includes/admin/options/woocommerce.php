<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$wolf_theme_options[] = array( 'type' => 'open' ,  'label' => __( 'Woocommerce', 'tattoopro'  ) );

	$wolf_theme_options[] = array(
		'label' => __( 'Woocommerce', 'tattoopro' ),
		'type' => 'section_open',
	);

		$wolf_theme_options[] =array(
			'label' => __( 'Woocommerce layout', 'tattoopro' ),
			'id' => 'woocommerce_layout',
			'type' => 'select',
			'options' => array(
				'sidebar' => __( 'Sidebar', 'tattoopro' ),
				'full' => __( 'Full width', 'tattoopro' ),
			),
		);

		$wolf_theme_options[] =array(
			'label' => __( 'Products per page', 'tattoopro' ),
			'id' => 'products_per_page',
			'type' => 'int',
		);

	$wolf_theme_options[] = array( 'type' => 'section_close' );


$wolf_theme_options[] = array( 'type' => 'close' );