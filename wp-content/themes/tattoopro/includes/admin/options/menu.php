<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$page_option = array( '' => __( 'Disabled', 'tattoopro' ) );
$pages = get_pages();

foreach ( $pages as $page ) {
	$page_option[ absint( $page->ID ) ] = sanitize_text_field( $page->post_title );
}

$wolf_theme_options[] = array(
	'type' => 'open',
	'label' => __( 'Menu', 'tattoopro' )
);

	$wolf_theme_options[] = array(
		'label' => __( 'Menu settings', 'tattoopro' ),
 		'type' => 'section_open',
	);

		$wolf_theme_options[] = array(
			'label' => __( 'Main menu color tone', 'tattoopro' ),
			'id' => 'menu_skin',
			'type' => 'select',
			'options' => array(
				'light' => __( 'light', 'tattoopro' ),
				'dark' => __( 'dark', 'tattoopro' ),
			),
		);

		$wolf_theme_options[] = array(
			'label' => __( 'Menu type', 'tattoopro' ),
			'id' => 'menu_position',
			'type' => 'select',
			'options' => array(
				'default' => __( 'default', 'tattoopro' ),
				//'center' => __( 'centered', 'tattoopro' ),
				'logo-centered' => __( 'logo centered', 'tattoopro' ),
				'left' => __( 'at left', 'tattoopro' ),
				//'modern' => __( 'modern minimalist', 'tattoopro' ),
				'' => __( 'disable main menu', 'tattoopro' ),
			),
		);

		$wolf_theme_options[] = array(
			'label' => __( 'Transparent menu when full screen header', 'tattoopro' ),
			'id' => 'left_menu_transparency',
			'type' => 'checkbox',
			'dependency' => array( 'element' => 'menu_position', 'value' => array( 'left' ) ),
		);

		$wolf_theme_options[] = array(
			'label' => __( 'Menu socials', 'tattoopro' ),
			'id' => 'menu_socials_services',
			'desc' => __( 'Enter the social networks names separated by a comma. e.g "twitter, facebook, instagram". ( see social links tab).', 'tattoopro' ),
			'type' => 'text',
			'dependency' => array( 'element' => 'menu_position', 'value' => array( 'default', 'logo-centered', 'left' ) ),
		);

		$wolf_theme_options[] = array(
			'label' => __( 'Logo overflow', 'tattoopro' ),
			'id' => 'logo_overflow',
			'type' => 'checkbox',
			'dependency' => array( 'element' => 'menu_position', 'value' => array( 'logo-centered' ) ),
		);

		$wolf_theme_options[] = array(
			'label' => __( 'Sticky menu', 'tattoopro' ),
			'id' => 'sticky_menu',
			'type' => 'checkbox',
			'dependency' => array( 'element' => 'menu_position', 'value' => array( 'default', 'center', 'logo-centered' ) ),
		);

		$wolf_theme_options[] = array(
			'label' => __( 'Menu width', 'tattoopro' ),
			'id' => 'menu_width',
			'type' => 'select',
			'options' => array(
				'boxed' => __( 'boxed', 'tattoopro' ),
				'wide' => __( 'wide', 'tattoopro' ),
			),
			'dependency' => array( 'element' => 'menu_position', 'value' => array( 'default', 'center' ) ),
		);

		$wolf_theme_options[] = array(
			'label' => __( 'Sub menu alignment', 'tattoopro' ),
			'id' => 'submenu_align',
			'type' => 'select',
			'options' => array(
				'left-align' => __( 'left', 'tattoopro' ),
				'right-align' => __( 'right', 'tattoopro' ),
			),
			'dependency' => array( 'element' => 'menu_position', 'value' => array( 'default', 'center' ) ),
		);

		$wolf_theme_options[] = array(
			'label' => __( 'Menu style', 'tattoopro' ),
			'id' => 'menu_style',
			'type' => 'select',
			'options' => array(
				'transparent' => __( 'transparent', 'tattoopro' ),
				'semi-transparent' => __( 'semi-transparent', 'tattoopro' ),
				'plain' => __( 'plain', 'tattoopro' ),
			),
			'dependency' => array( 'element' => 'menu_position', 'value' => array( 'default', 'center', 'logo-centered' ) ),
		);

		$wolf_theme_options[] = array(
			'label' => __( 'Menu hover effect', 'tattoopro' ),
			'id' => 'menu_hover_effect',
			'type' => 'select',
			'type' => 'select',
			'options' => array(
				'default' => __( 'none', 'tattoopro' ),
				'text-color' => __( 'text color', 'tattoopro' ),
				'border-top' => __( 'border top', 'tattoopro' ),
				'plain-color' => __( 'plain color', 'tattoopro' ),
			),
			'dependency' => array( 'element' => 'menu_position', 'value' => array( 'default', 'center', 'logo-centered' ) ),
		);

		$wolf_theme_options[] = array(
			'label' => __( 'Sub menu background color', 'tattoopro' ),
			'id' => 'sub_menu_bg_color',
			'type' => 'colorpicker',
		);

		$wolf_theme_options[] = array(
			'label' => __( 'Sub menu color', 'tattoopro' ),
			'id' => 'sub_menu_color',
			'type' => 'colorpicker',
		);

		$wolf_theme_options[] = array(
			'label' => __( 'One page main page', 'tattoopro' ),
			'id' => 'one_page_menu',
			'desc' => sprintf( __( 'Will you use anchors in your menu to create a one-page website? <br><a href="%s">See the doc</a>', 'tattoopro' ), 'http://docs.wolfthemes.com/documentation/themes/' . wolf_get_theme_slug() . '#one-page' ),
			'type' => 'select',
			'options' => $page_option,
		);

		$wolf_theme_options[] = array(
			'label' => __( 'Menu breakpoint in pixels', 'tattoopro' ),
			'desc' => __( 'Below each width would you like to display the mobile menu? 0 will always show the desktop menu and 99999 will always show the mobile menu.', 'tattoopro' ),
			'id' => 'breakpoint',
			'type' => 'int',
			'dependency' => array( 'element' => 'menu_position', 'value' => array( 'default', 'center', 'left', 'logo-centered' ) ),
		);


		if ( class_exists( 'WooCommerce' ) ) {

			$wolf_theme_options[] =array( 'label' => __( 'Display WooCommerce cart menu item', 'tattoopro' ),
				'id' => 'cart_menu_item',
				'type' => 'checkbox',
			);
		}

		$wolf_theme_options[] = array(
			'label' => __( 'Search icon', 'tattoopro' ),
			'id' => 'search_menu_item',
			'type' => 'checkbox',
			'desc' => __( 'Display search icon in the menu', 'tattoopro' ),
		);

	$wolf_theme_options[] = array( 'type' => 'section_close' );


	$wolf_theme_options[] = array(
		'label' => __( 'Secondary', 'tattoopro' ),
 		'type' => 'section_open',
 		'dependency' => array( 'element' => 'menu_position', 'value' => array( 'default', 'center', 'logo-centered' ) ),
	);

		$wolf_theme_options[] = array(
			'label' => __( 'Enable secondary menu', 'tattoopro' ),
			'id' => 'additional_toggle_menu',
			'type' => 'select',
			'options' => array(
				'' => __( 'No', 'tattoopro' ),
				'yes' => __( 'Yes', 'tattoopro' ),
			),
		);

		$wolf_theme_options[] = array(
			'label' => __( 'Text before the secondary menu item', 'tattoopro' ),
			'id' => 'toggle_side_menu_item_text',
			'type' => 'text',
			'desc' => __( 'Optional text to display before the secondary menu icon in the main menu', 'tattoopro' )
		);

		$wolf_theme_options[] = array(
			'label' => __( 'Secondary menu type', 'tattoopro' ),
			'id' => 'additional_toggle_menu_type',
			'type' => 'select',
			'options' => array(
				'side' => __( 'Side Panel', 'tattoopro' ),
				'overlay' => __( 'Overlay', 'tattoopro' ),
			),
		);

		$wolf_theme_options[] = array(
			'label' => __( 'Overlay menu background color', 'tattoopro' ),
			'id' => 'overlay_menu_bg',
			'type' => 'colorpicker',
			'dependency' => array( 'element' => 'additional_toggle_menu_type', 'value' => array( 'overlay' ) ),
		);

		$wolf_theme_options[] = array(
			'label' => __( 'Overlay menu font color', 'tattoopro' ),
			'id' => 'overlay_menu_color',
			'type' => 'colorpicker',
			'dependency' => array( 'element' => 'additional_toggle_menu_type', 'value' => array( 'overlay' ) ),
		);

		$wolf_theme_options[] = array(
			'label' => __( 'Overlay menu background opacity', 'tattoopro' ),
			'id' => 'overlay_menu_bg_opacity',
			'type' => 'int',
			'dependency' => array( 'element' => 'additional_toggle_menu_type', 'value' => array( 'overlay' ) ),
		);

	$wolf_theme_options[] = array( 'type' => 'section_close' );

$wolf_theme_options[] = array( 'type' => 'close' );