<?php
/**
 * Blog settings
 *
 * The layout options for the blog
 *
 * @package TattoPro
 * @since TattoPro 1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$wolf_theme_options[] =  array(
	'type' => 'open',
	'label' =>__( 'Blog', 'tattoopro' )
);

	$wolf_theme_options[] =  array(
		'label' => __( 'Blog', 'tattoopro' ),
		'type' => 'section_open',
	);

	$wolf_theme_options[] =  array(
		'label' => __( 'Date format', 'tattoopro' ),
		'id' => 'date_format',
		'type' => 'select',
		'options' => array(
			'standard' => __( 'Standard', 'tattoopro' ),
			'human_diff' => __( 'Differential ( e.g: 10 days ago )', 'tattoopro' ),
		),
	);

	$wolf_theme_options[] =  array(
		'label' => __( 'Layout', 'tattoopro' ),
		'id' => 'blog_type',
		'type' => 'select',
		'options' => array(
			'large' => __( 'Large', 'tattoopro' ),
			'sided' => __( 'Medium Image', 'tattoopro' ),
			'sidebar' => __( 'Sidebar', 'tattoopro' ),
			'masonry' => __( 'Masonry', 'tattoopro' ),
			'grid' => __( 'Grid', 'tattoopro' ),
		),
		'desc' => sprintf( __( 'It can be overwritten in category options. For the grid layout, your images must be %s minimum', 'tattoopro' ), '960x960px' ),
	);

	$wolf_theme_options[] =  array(
		'label' => __( 'Default single post layout', 'tattoopro' ),
		'id' => 'single_blog_post_layout',
		'type' => 'select',
		'options' => array(
			'standard' => __( 'Full Width', 'tattoopro' ),
			'sidebar' => __( 'Sidebar', 'tattoopro' ),
			'split' => __( 'Splitted', 'tattoopro' ),
			'vc' => 'Visual Composer',
		),
		'desc' => __( 'It can be overwritten in category options and single post options', 'tattoopro' ),
	);

	$wolf_theme_options[] =  array(
		'label' => __( 'Default single post navigation type', 'tattoopro' ),
		'id' => 'post_nav_type',
		'type' => 'select',
		'options' => array(
			'navigation' => __( 'Previous/Next navigation', 'tattoopro' ),
			'related' => __( 'Related posts', 'tattoopro' ),
		),
		'desc' => __( 'It can be overwritten in category options and single post options', 'tattoopro' ),
	);

	$wolf_theme_options[] =  array(
		'label' => __( 'Excerpt', 'tattoopro' ),
		'desc' => sprintf( __( 'Use the <a href="%s" target="_blank">more tag</a> to split your post if you choose the manual exerpt', 'tattoopro' ), 'http://en.support.wordpress.com/splitting-content/more-tag/' ),
		'id' => 'excerpt_type',
		'type' => 'select',
		'options' => array(
			'auto' => __( 'Auto', 'tattoopro' ),
			'manual' => __( 'Manual', 'tattoopro' ),
		),
		'dependency' => array( 'element' => 'blog_type', 'value' => array( 'large', 'sidebar' ) ),
	);

	$wolf_theme_options[] =  array(
		'label' => __( 'Width', 'tattoopro' ),
		'id' => 'blog_width',
		'type' => 'select',
		'options' => array(
			'boxed' => __( 'Boxed', 'tattoopro' ),
			'wide' => __( 'Wide', 'tattoopro' ),
		),
		'dependency' => array( 'element' => 'blog_type', 'value' => array( 'masonry' ) ),
	);

	$wolf_theme_options[] =  array(
		'label' => __( 'Infinite scroll', 'tattoopro' ),
		'id' => 'blog_infinite_scroll',
		'type' => 'checkbox',
	);

	$wolf_theme_options[] =  array( 'label' => __( 'Trigger infinite scroll with a button', 'tattoopro' ),
		'desc' => __( 'If checked, the user will have to click the button to load more post', 'tattoopro' ),
		'id' => 'blog_infinite_scroll_trigger',
		'type' => 'checkbox',
	);

	// $wolf_theme_options[] =  array( 'label' => __( 'Display related posts', 'tattoopro' ),
	// 	'id' => 'display_related_posts',
	// 	'type' => 'checkbox',
	// );

	$wolf_theme_options[] =  array( 'label' => __( 'Display views', 'tattoopro' ),
		'id' => 'post_views',
		'type' => 'checkbox',
	);

	$wolf_theme_options[] =  array( 'label' => __( 'Display likes', 'tattoopro' ),
		'id' => 'post_likes',
		'type' => 'checkbox',
	);

	$wolf_theme_options[] = array(
		'label' => __( 'Share links', 'tattoopro' ),
		'desc' => __( 'Display "share" links below each single post ?', 'tattoopro' ),
		'id' => 'post_share',
		'type' => 'checkbox',
	);

	$wolf_theme_options[] =  array(
		'label' => __( 'Show author bio', 'tattoopro' ),
		'desc' => __( 'Show the author bio below each single blog post.', 'tattoopro' ),
		'id' => 'show_author_box',
		'type' => 'checkbox',
	);

	$wolf_theme_options[] =  array( 'type' => 'section_close' );

$wolf_theme_options[] =  array( 'type' => 'close' );
