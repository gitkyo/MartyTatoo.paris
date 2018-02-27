<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$wolf_theme_options[] = array(
	'type' => 'open',
	'label' => __( 'Misc', 'tattoopro'  )
);

	$wolf_theme_options[] = array(
		'label' => __( 'Misc', 'tattoopro' ),
		'type' => 'section_open',
	);

		$wolf_theme_options[] = array(
			'label' => __( 'Page transition', 'tattoopro' ),
			'id' => 'page_transition',
			'type' => 'select',
			'desc' => __( 'Enable page fade transition animation.', 'tattoopro' ),
			'options' => array(
				'yes' => __( 'Yes', 'tattoopro' ),
				'' => __( 'No', 'tattoopro' ),
			),
		);

		$wolf_theme_options[] = array(
			'label' => __( 'Loading overlay color', 'tattoopro' ),
			'id' => 'loading_overlay_color',
			'type' => 'colorpicker',
			'dependency' => array( 'element' => 'page_transition', 'value' => array( 'yes' ) ),
		);

		$wolf_theme_options[] = array(
			'label' => __( 'Loader', 'tattoopro' ),
			'id' => 'loader',
			'desc' => __( 'Spinner animation.', 'tattoopro' ),
			'type' => 'select',
			'options' => array(
				'yes' => __( 'Yes', 'tattoopro' ),
				'' => __( 'No', 'tattoopro' ),
			),
		);

		$wolf_theme_options[] = array(
			'label' => __( 'Loader', 'tattoopro' ),
			'id' => 'loader_type',
			'desc' => __( 'Choose', 'tattoopro' ),
			'help' => 'loaders',
			'type' => 'select',
			'options' => array(
				'loader1' => __( 'Square (1)', 'tattoopro' ),
				'loader2' => __( 'Double Pulse (2)', 'tattoopro' ),
				'loader3' => __( 'Stripes (3)', 'tattoopro' ),
				'loader4' => __( 'Rotating Squares (4)', 'tattoopro' ),
				'loader5' => __( 'Pulse (5)', 'tattoopro' ),
				'loader6' => __( '2 Rotating Circles (6)', 'tattoopro' ),
				'loader7' => __( 'Wave (7)', 'tattoopro' ),
				'loader8' => __( 'Classic Loader (8)', 'tattoopro' ),
			),
			'dependency' => array( 'element' => 'loader', 'value' => array( 'yes' ) ),
		);

		$wolf_theme_options[] = array(
			'label' => __( 'Spinner color', 'tattoopro' ),
			'id' => 'spinner_color',
			'type' => 'colorpicker',
			'dependency' => array( 'element' => 'loader', 'value' => array( 'yes' ) ),
		);

		$wolf_theme_options[] = array(
			'label' => __( 'Disable back to top arrow', 'tattoopro' ),
			'id' => 'no_back_to_top_animation',
			'type' => 'checkbox',
		);

		$wolf_theme_options[] = array(

			'label' => __( 'Admin login logo', 'tattoopro' ),
			'id' => 'login_logo',
			'desc' => '80px x 80 px',
			'type' => 'image',

		);

		$wolf_theme_options[] = array(

			'label' => __( '404 background', 'tattoopro' ),
			'id' => '404_bg',
			'type' => 'image',

		);

		$wolf_theme_options[] = array(
			'label' => __( 'Custom default avatar (80px X 80px)', 'tattoopro' ),
			'id' => 'custom_avatar',
			'desc' => sprintf( __( 'Once uploaded and saved, select your new avatar in the <a href="%s">discussion settings</a>', 'tattoopro' ), esc_url( admin_url( 'options-discussion.php' ) ) ),
			'type' => 'image',
			'help' => 'custom-avatar'

		);

		$wolf_theme_options[] = array(
			'label' => __( 'Enable parallax on mobile devices (not recommended)', 'tattoopro' ),
			'id' => 'enable_parallax_on_mobile',
			'desc' => '',
			'type' => 'checkbox',
		);

		$wolf_theme_options[] = array(
			'label' => __( 'Enable animation on mobile devices (not recommended)', 'tattoopro' ),
			'id' => 'enable_animation_on_mobile',
			'desc' => '',
			'type' => 'checkbox',
		);

		$wolf_theme_options[] = array(
			'label' => __( 'Use minified CSS files', 'tattoopro' ),
			'id' => 'css_min',
			'type' => 'checkbox',
			'desc' => sprintf( __( 'Disable this option if you want to edit the %s files.', 'tattoopro' ), 'CSS' ),
		);

		$wolf_theme_options[] = array(
			'label' => __( 'Use minified JS files', 'tattoopro' ),
			'id' => 'js_min',
			'type' => 'checkbox',
			'desc' => sprintf( __( 'Disable this option if you want to edit the %s files.', 'tattoopro' ), 'JS' ),
		);

		// $wolf_theme_options[] = array(
		// 	'label' => __( 'Enlable RTL support', 'tattoopro' ),
		// 	'id' => 'rtl',
		// 	'type' => 'checkbox',
		// );

	$wolf_theme_options[] = array( 'type' => 'section_close' );

$wolf_theme_options[] = array( 'type' => 'close' );
