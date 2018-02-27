<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


$wolf_theme_options[] = array(
	'type' => 'open',
	'label' => __( 'Header', 'tattoopro' ),
);

	$wolf_theme_options[] = array(
		'label' => __( 'Page header', 'tattoopro' ),
 		'type' => 'section_open',
	);

		$wolf_theme_options[] = array(
			'label' => __( 'Page header type', 'tattoopro' ),
			'id' =>'page_header_type',
			'type' => 'select',
			'options' => array(
				'big' => __( 'Centered page title big height', 'tattoopro' ),
				'medium' => __( 'Centered page title', 'tattoopro' ),
				'small' => __( 'Breadcrumb + page title', 'tattoopro' ),
				'full' => __( 'Full screen', 'tattoopro' ),
				'none' => __( 'No page title area', 'tattoopro' ),
			),
			'desc' => __( 'It can be overwritten in category options and single post options', 'tattoopro' ),
		);

		$wolf_theme_options[] = array(
			'label' => __( 'Page title font size', 'tattoopro' ),
			'id' =>'page_title_font_size',
			'type' => 'text',
		);

	$wolf_theme_options[] = array( 'type' => 'section_close' );

	$wolf_theme_options[] = array(
		'label' => __( 'Top bar', 'tattoopro' ),
 		'type' => 'section_open',
	);

		$wolf_theme_options[] = array(
			'label' => __( 'Display top bar', 'tattoopro' ),
			'id' =>'top_bar',
			'type' => 'select',
			'desc' => __( 'It won\'t be visible below the mobile menu breaking point (see the menu tab)', 'tattoopro' ),
			'options' => array(
				'' => __( 'No', 'tattoopro' ),
				'yes' => __( 'Yes', 'tattoopro' ),
			),
		);

		$wolf_theme_options[] = array(
			'label' => __( 'Top Bar socials', 'tattoopro' ),
			'id' => 'top_bar_socials_services',
			'desc' => __( 'Enter the social networks names separated by a comma. e.g "twitter, facebook, instagram". ( see social links tab).', 'tattoopro' ),
			'type' => 'text',
			'dependency' => array( 'element' => 'top_bar', 'value' => array( 'yes' ) ),
		);

		if ( function_exists( 'icl_get_languages' ) ) {
			$wolf_theme_options[] = array(
				'label' => __( 'Flags in top bar', 'tattoopro' ),
				'id' =>'top_bar_flags',
				'type' => 'select',
				'options' => array(
					'' => __( 'No', 'tattoopro' ),
					'list' => __( 'Flag list', 'tattoopro' ),
					'dropdown' => __( 'Flag dropdown', 'tattoopro' ),
				),
				'dependency' => array( 'element' => 'top_bar', 'value' => array( 'yes' ) ),
			);
		}

		$wolf_theme_options[] = array(
			'label' => __( 'Top bar contact infos', 'tattoopro' ),
			'id' =>'top_bar_content',
			'type' => 'text',
			'size' => 'long',
			'dependency' => array( 'element' => 'top_bar', 'value' => array( 'yes' ) ),
		);

	$wolf_theme_options[] = array( 'type' => 'section_close' );

$wolf_theme_options[] = array( 'type' => 'close' );
