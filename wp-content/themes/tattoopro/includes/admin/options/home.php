<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$home_header_type  = array(
	'standard' => __( 'Standard', 'tattoopro' ),
	'video' => __( 'Video background', 'tattoopro' ),
	'none' => __( 'No header', 'tattoopro' ),
);

$rev_sliders_option = array();

if ( class_exists( 'RevSlider' ) ) {
	$home_header_type['revslider'] = 'RevSlider';
	$rev_sliders_option = all_rev_sliders_in_array();
}

$wolf_sliders_option = array();

if ( class_exists( 'Wolf_Slider' ) ) {
	$home_header_type['wolf-slider'] = 'Home Slider';
	$home_header_type['featured-slider'] = __( 'Featured post slider', 'tattoopro' );

	if ( post_type_exists( 'slide' ) ) {
		$wolf_sliders_option = array();
		$wolf_sliders_args = array(
			'taxonomy'     => 'slide_category',
			'orderby'      => 'slug',
			'show_count'   => 0,
			'pad_counts'   => 0,
			'hierarchical' => 0,
			'title_li'     => '',
		);

		$wolf_sliders = get_categories( $wolf_sliders_args );

		if ( array() != $wolf_sliders ) {
			foreach ( $wolf_sliders as $slider ) {
				//var_dump($slider);
				$wolf_sliders_option[$slider->slug] = $slider->name;
			}
		} else {
			$wolf_sliders_option = array( '' => __( 'No slider yet', 'tattoopro' ) );
		}
	}
}

$wolf_theme_options[] = array(
	'type' => 'open',
	'label' => __( 'Home', 'tattoopro' ),
);

	$wolf_theme_options[] = array(
		'label' => __( 'Home header settings', 'tattoopro' ),
 		'type' => 'section_open',
 		'desc' => __( 'What to display if you use the "Home" template', 'tattoopro' ),
	);

		$wolf_theme_options[] = array(
			'label' => __( 'Home header type', 'tattoopro' ),
			'desc' => __( 'What do you want to display in your home page header?', 'tattoopro' ),
			'id' => 'home_header_type',
			'type' => 'select',
			'options' => $home_header_type,
		);

		$wolf_theme_options[] = array(
			'label' => 'Wolf Slider',
			'id' =>'header_wolf_slider',
			'type' => 'select',
			'options' => $wolf_sliders_option,
			'dependency' => array( 'element' => 'home_header_type', 'value' => array( 'wolf-slider' ) ),
		);

		$wolf_theme_options[] = array(
			'label' => 'RevSlider',
			'id' =>'header_revslider',
			'type' => 'select',
			'options' => $rev_sliders_option,
			'dependency' => array( 'element' => 'home_header_type', 'value' => array( 'revslider' ) ),
		);

		$wolf_theme_options[] = array(
			'label' => __( 'Fade header content while scrolling', 'tattoopro' ),
			'id' =>'hero_fade_while_scroll',
			'type' => 'checkbox',
			'dependency' => array( 'element' => 'home_header_type', 'value' => array( 'standard', 'video' ) ),
		);

		$wolf_theme_options[] = array(
			'label' => __( 'Header effect', 'tattoopro' ),
			'id' => 'hero_effect',
			'type' => 'select',
			'options' => array(
				'parallax' => __( 'parallax', 'tattoopro' ),
				'zoom' => __( 'zoom', 'tattoopro' ),
				'' => __( 'none', 'tattoopro' ),
			),
			'dependency' => array( 'element' => 'home_header_type', 'value' => array( 'standard' ) ),
			'desc' => __( 'The zoom effect only applies to the "standard" header type (image background). Note the the background position option is disabled with the zoom effect.', 'tattoopro' ),
		);

		$wolf_theme_options[] = array(
			'label' => __( 'Header font color', 'tattoopro' ),
			'id' =>'header_bg_font_color',
			'type' => 'select',
			'options' => array(
				'light' => __( 'light', 'tattoopro' ),
				'dark' => __( 'dark', 'tattoopro' ),
			),
		);

		// $wolf_theme_options[] = array(
		// 	'label' => __( 'Header Parallax', 'tattoopro' ),
		// 	'id' =>'hero_parallax',
		// 	'type' => 'checkbox',
		// 	'dependency' => array( 'element' => 'home_header_type', 'value' => array( 'standard', 'video', 'wolf-slider', 'featured-slider' ) ),
		// );

		// $wolf_theme_options[] = array(
		// 	'label' => __( 'Header Zoom Effect', 'tattoopro' ),
		// 	'id' =>'hero_zoom',
		// 	'type' => 'checkbox',
		// 	'dependency' => array( 'element' => 'home_header_type', 'value' => array( 'standard' ) ),
		// );

		$wolf_theme_options[] = array(
			'label' => __( 'Content editor', 'tattoopro' ),
			'desc' => __( 'Any content to display in the home page header: text, HTML, shortcodes...', 'tattoopro' ),
			'id' => 'home_header_content',
			'type' => 'editor',
			'dependency' => array( 'element' => 'home_header_type', 'value' => array( 'standard', 'video' ) ),
		);

	$wolf_theme_options[] = array( 'type' => 'section_close' );

	$wolf_theme_options[] = array(
		'label' => __( 'Home header window', 'tattoopro' ),
 		'type' => 'section_open',
 		'dependency' => array( 'element' => 'home_header_type', 'value' => array( 'wolf-slider', 'standard', 'video', 'featured-slider' ) ),
	);

		$wolf_theme_options[] = array(
			'label' => __( 'Full window', 'tattoopro' ),
			'id' =>'full_screen_header',
			'type' => 'select',
			'options' => array(
				'yes' => __( 'Yes', 'tattoopro' ),
				''   => __( 'No', 'tattoopro' ),
			),

		);

		$wolf_theme_options[] = array(
			'label' => __( 'Header height', 'tattoopro' ),
			'id' =>'home_header_height',
			'desc' => __( 'The header height in percent', 'tattoopro' ),
			'type' => 'int',
			'dependency' => array( 'element' => 'full_screen_header', 'value' => array( '' ) ),
		);

		$wolf_theme_options[] = array(
			'label' => __( 'Scroll down arrow', 'tattoopro' ),
			'id' =>'scroll_down_arrow',
			'type' => 'checkbox',
			'desc' => __( 'Will not be display on sliders', 'tattoopro' ),
			'dependency' => array( 'element' => 'full_screen_header', 'value' => array( 'yes' ) ),
		);

	$wolf_theme_options[] = array( 'type' => 'section_close' );

	if ( class_exists( 'Wolf_Slider' ) ) {
		$wolf_theme_options[] = array(
			'label' => __( 'Featured post slider', 'tattoopro' ),
	 		'type' => 'section_open',
	 		'dependency' => array( 'element' => 'home_header_type', 'value' => array( 'featured-slider' ) ),
		);

			// $wolf_theme_options[] = array(
			// 	'label' => __( 'Effect', 'tattoopro' ),
			// 	'id' => 'slider_effect',
			// 	'type' => 'select',
			// 	'options' => array(
			// 		'auto' => __( 'auto (fade on desktop and slide on touchable devices)', 'tattoopro' ),
			// 		'slide' => 'slide',
			// 		'fade' => 'fade',
			// 	),
			// );

			$wolf_theme_options[] = array(
				'label' => __( 'Speed', 'tattoopro' ),
				'id' => 'slider_speed',
				'type' => 'text',
			);

			$wolf_theme_options[] = array(
				'label' => __( 'Autoplay', 'tattoopro' ),
				'id' => 'slider_autoplay',
				'type' => 'checkbox',
			);

			$wolf_theme_options[] = array(
				'label' => __( 'Pause on hover', 'tattoopro' ),
				'id' => 'slider_pause',
				'type' => 'checkbox',
			);

		$wolf_theme_options[] = array( 'type' => 'section_close' );
	} // end if featured post slider

	$wolf_theme_options[] = array(
		'label' => __( 'Video background', 'tattoopro' ),
		'id' => 'video_header_bg',
		'type' => 'video',
		'dependency' => array( 'element' => 'home_header_type', 'value' => array( 'video' ) ),
 	);

 	$wolf_theme_options[] = array(
		'label' => __( 'Home header background', 'tattoopro' ),
		'desc' => __( 'A different header background can be set on each page', 'tattoopro' ),
		'id' =>'header_bg',
		'type' => 'background',
		'font_color' => false,
		'dependency' => array( 'element' => 'home_header_type', 'value' => array( 'standard' ) ),
	);

	$wolf_theme_options[] = array(
		'label' => __( 'Overlay', 'tattoopro' ),
 		'type' => 'section_open',
 		'id' => 'header_overlay',
 		'dependency' => array( 'element' => 'home_header_type', 'value' => array( 'standard', 'video', 'featured-slider' ) ),
	);

		$wolf_theme_options[] = array(
			'label' => __( 'Overlay color', 'tattoopro' ),
			'id' =>'header_overlay_color',
			'type' => 'colorpicker',
		);

		$wolf_theme_options[] = array(
			'label' => __( 'Overlay pattern', 'tattoopro' ),
			'id' =>'header_overlay_img',
			'type' => 'image',
		);

		$wolf_theme_options[] = array(
			'label' => __( 'Overlay opacity in percent', 'tattoopro' ),
			// 'desc' => __( 'A different header background can be set on each page', 'tattoopro' ),
			'id' =>'header_overlay_opacity',
			'type' => 'int',
		);

	$wolf_theme_options[] = array( 'type' => 'section_close' );


$wolf_theme_options[] = array( 'type' => 'close' );
