<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( ! function_exists( 'wolf_do_category_metaboxes' ) ) {
	/**
	 * Set theme metaboxes
	 *
	 * Allow to add specific style options for each page
	 */
	function wolf_do_category_metaboxes() {
		$category_metaboxes = array(
			array(
				'label' => __( 'Page header type', 'tattoopro' ),
				'id' =>'page_header_type',
				'type' => 'select',
				'options' => array(
					'' => __( 'Default (set in the options)', 'tattoopro' ),
					'big' => __( 'Centered page title big height', 'tattoopro' ),
					'medium' => __( 'Centered page title', 'tattoopro' ),
					'small' => __( 'Breadcrumb + page title', 'tattoopro' ),
					'full' => __( 'Full screen', 'tattoopro' ),
					'none' => __( 'No page title area', 'tattoopro' ),
				),
			),

			array(
				'label' => __( 'Category page layout', 'tattoopro' ),
				'id' => 'blog_layout',
				'type' => 'select',
				'options' => array(
					'' => __( 'Default (set in the options)', 'tattoopro' ),
					'large' => __( 'Large', 'tattoopro' ),
					'sided' => __( 'Medium Image', 'tattoopro' ),
					'sidebar' => __( 'Sidebar', 'tattoopro' ),
					'masonry' => __( 'Masonry', 'tattoopro' ),
					'grid' => __( 'Grid', 'tattoopro' ),
				),
			),

			array(
				'label' => __( 'Single post layout', 'tattoopro' ),
				'id' => 'single_blog_post_layout',
				'type' => 'select',
				'options' => array(
					'' => __( 'Default (set in the options)', 'tattoopro' ),
					'standard' => __( 'Full Width', 'tattoopro' ),
					'sidebar' => __( 'Sidebar', 'tattoopro' ),
					'split' => __( 'Splitted', 'tattoopro' ),
					'vc' => 'Visual Composer',
				),
				'desc' => __( 'It can be overwritten in category options and single post options', 'tattoopro' ),
			),

			array(
				'label'	=> __( 'Navigation', 'tattoopro' ),
				'id'	=> 'post_nav_type',
				'type'	=> 'select',
				'options' => array(
					'' => __( 'Default (set in the options)', 'tattoopro' ),
					'navigation' => __( 'Previous/Next navigation', 'tattoopro' ),
					'related' => __( 'Related posts', 'tattoopro' ),
				),
			),

			array(
				'label'	=> __( 'Background type', 'tattoopro' ),
				'id'	=> 'header_bg_type',
				'type'	=> 'select',
				'options' => array(
					'image' => __( 'Image', 'tattoopro' ),
					'video' => __( 'Video', 'tattoopro' ),
				),
			),

			array(
				'label'	=> __( 'Header background', 'tattoopro' ),
				'id'	=> 'header_bg',
				'type'	=> 'background',
				'dependency' => array( 'element' => 'header_bg_type', 'value' => array( 'image' ) ),
			),

			array(
				'label'	=> __( 'Header background effect', 'tattoopro' ),
				'id'	=> 'header_bg_effect',
				'type'	=> 'select',
				'options' => array(
					'parallax' => __( 'Parallax', 'tattoopro' ),
					'zoomin' => __( 'Zoom', 'tattoopro' ),
					'none' => __( 'None', 'tattoopro' ),
				),
				'dependency' => array( 'element' => 'header_bg_type', 'value' => array( 'image' ) ),
			),

			array(
				'label'	=> __( 'Video Background type', 'tattoopro' ),
				'id'	=> 'header_video_bg_type',
				'type'	=> 'select',
				'options' => array(
					'selfhosted' => __( 'Self hosted', 'tattoopro' ),
					'youtube' => 'Youtube',
				),
			),

			array(
				'label'	=> __( 'Youtube URL', 'tattoopro' ),
				'id'	=> 'header_video_bg_youtube_url',
				'type'	=> 'text',
			),

			array(
				'label'	=> __( 'Video background', 'tattoopro' ),
				'id'	=> 'header_video_bg',
				'type'	=> 'video',
				'dependency' => array( 'element' => 'header_bg_type', 'value' => array( 'video' ) ),
			),

			array(
				'label'	=> __( 'Overlay color', 'tattoopro' ),
				'id'	=> 'header_overlay_color',
				'type'	=> 'colorpicker',
			),

			array(
				'label'	=> __( 'Overlay pattern', 'tattoopro' ),
				'id'	=> 'header_overlay_img',
				'type'	=> 'image',
			),

			array(
				'label'	=> __( 'Overlay opacity (in percent)', 'tattoopro' ),
				'id'	=> 'header_overlay_opacity',
				'desc'	=> __( 'Adapt the header overlay opacity if needed', 'tattoopro' ),
				'type'	=> 'int',
			),
		);
		$wolf_do_category_metaboxes = new Wolf_Theme_Admin_Category_Meta( $category_metaboxes );
	}
	wolf_do_category_metaboxes();
}
