<?php
/**
 *  Customizer options
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $wolf_customizer_options;
$wolf_customizer_options = array(

	'main' => array(

		'id' => 'main',
		'title' => __( 'Main Styles', 'tattoopro' ),
		'desc' => __( 'The main layout options for your page', 'tattoopro' ),
		'options' => array(

			'layout' => array(
				'id' => 'layout',
				'label' => __( 'Layout', 'tattoopro' ),
				'type' => 'select',
				'default' => 'wide-layout',
				'choices' => array(
					'wide-layout' => __( 'wide', 'tattoopro' ),
					'boxed-layout' => __( 'boxed', 'tattoopro' ),
				),
				'transport' => 'postMessage',
			),
		),
	),

	'page' => array(
		'id' => 'body_bg',
		'title' => __( 'Body', 'tattoopro' ),
		'desc' => __( 'Visible only with the boxed layout', 'tattoopro' ),

		'options' => array(

			'body_bg' => array(
				'id' => 'body_bg',
				'desc' => __( 'Visible only with the boxed layout', 'tattoopro' ),
				'label' => __( 'Body', 'tattoopro' ),
				'type' => 'background',
				'font_color' => false,
			),
		),
	),

	'site_footer_bg' => array(
		'id' => 'site_footer_bg',
		'label' => __( 'Footer', 'tattoopro' ),
		'background' => true,
		'font_color' => false,
	),
);

if ( class_exists( 'Wolf_Theme_Customizer' ) && is_user_logged_in() ) {
	//$wolf_do_customizer_options = new Wolf_Theme_Customizer( $wolf_customizer_options );
}