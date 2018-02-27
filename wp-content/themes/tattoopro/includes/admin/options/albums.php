<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$page_option = array(
	'' => __( '- Select -', 'tattoopro' ),
);
$pages = get_pages();

foreach ( $pages as $page ) {
	$page_option[ absint( $page->ID ) ] = sanitize_text_field( $page->post_title );
}

$wolf_theme_options[] = array( 'type' => 'open' ,  'label' => __( 'Photo Albums', 'tattoopro'  ) );

	$wolf_theme_options[] = array( 'label' => __( 'Albums', 'tattoopro' ),
		'type' => 'section_open',
	);

	$wolf_theme_options[] = array( 'label' => __( 'Galleries page', 'tattoopro' ),
		'id' => 'gallery_page_id',
		'type' => 'select',
		'options' => $page_option,
	);

	$wolf_theme_options[] =array( 'label' => __( 'Number of posts to show by default', 'tattoopro' ),
		'desc' => __( 'leave empty to show all', 'tattoopro' ),
		'id' => 'gallery_posts_per_page',
		'type' => 'int',
	);

	$wolf_theme_options[] =array( 'label' => __( 'Layout', 'tattoopro' ),
		'id' => 'gallery_type',
		'type' => 'select',
		'options' => array(
			'grid' => __( 'Grid', 'tattoopro' ),
			'vertical' => __( 'Vertical carousel', 'tattoopro' ),
			'modern' => __( 'Horizontal', 'tattoopro' ),
		),
	);

	$wolf_theme_options[] =array( 'label' => __( 'Columns', 'tattoopro' ),
		'id' => 'gallery_cols',
		'type' => 'select',
		'options' => array(
			2, 3, 4, 5, 6
		),
		'dependency' => array( 'element' => 'gallery_type', 'value' => array( 'grid' ) ),
	);

	$wolf_theme_options[] =array( 'label' => __( 'Width', 'tattoopro' ),
		'id' => 'gallery_width',
		'type' => 'select',
		'options' => array(
			'boxed' => __( 'Boxed', 'tattoopro' ),
			'wide' => __( 'Wide', 'tattoopro' ),
		),
		'dependency' => array( 'element' => 'gallery_type', 'value' => array( 'grid' ) ),
	);

	$wolf_theme_options[] =array( 'label' => __( 'Space', 'tattoopro' ),
		'id' => 'gallery_padding',
		'type' => 'select',
		'options' => array(
			'padding' => __( 'Padding', 'tattoopro' ),
			'no-padding' => __( 'No padding', 'tattoopro' ),
		),
		'dependency' => array( 'element' => 'gallery_type', 'value' => array( 'grid' ) ),
	);

	$wolf_theme_options[] =array( 'label' => __( 'Isotope filter', 'tattoopro' ),
		'id' => 'gallery_isotope',
		'type' => 'checkbox',
		'dependency' => array( 'element' => 'gallery_type', 'value' => array( 'grid' ) ),
	);

	$wolf_theme_options[] =array( 'label' => __( 'Infinite scroll', 'tattoopro' ),
		'id' => 'gallery_infinite_scroll',
		'type' => 'checkbox',
		'dependency' => array( 'element' => 'gallery_type', 'value' => array( 'grid' ) ),
	);

	$wolf_theme_options[] =array( 'label' => __( 'Trigger infinite scroll with a button', 'tattoopro' ),
		'desc' => __( 'If checked, the user will have to click the button to load more post', 'tattoopro' ),
		'id' => 'gallery_infinite_scroll_trigger',
		'type' => 'checkbox',
		'dependency' => array( 'element' => 'gallery_type', 'value' => array( 'grid' ) ),
	);

	$wolf_theme_options[] =array( 'label' => __( 'Enable re-order by drag and drop', 'tattoopro' ),
		'id' => 'gallery_reorder',
		'type' => 'checkbox',
		'desc' => sprintf(  __( 'set your post order in %s -> re-order', 'tattoopro' ), 'Galleries' ),
	);

	// $wolf_theme_options[] =array( 'label' => __( 'Display views', 'tattoopro' ),
	// 	'id' => 'gallery_views',
	// 	'type' => 'checkbox',
	// );

	// $wolf_theme_options[] =array( 'label' => __( 'Display likes', 'tattoopro' ),
	// 	'id' => 'gallery_likes',
	// 	'type' => 'checkbox',
	// );

	$wolf_theme_options[] =array( 'label' => __( 'Enable comments', 'tattoopro' ),
		'id' => 'gallery_comments',
		'type' => 'checkbox',
	);

	$wolf_theme_options[] = array(
		'label' => __( 'Share links', 'tattoopro' ),
		'desc' => __( 'Display "share" links below each single post ?', 'tattoopro' ),
		'id' => 'gallery_share',
		'type' => 'checkbox',
	);

	$wolf_theme_options[] = array( 'type' => 'section_close' );


$wolf_theme_options[] = array( 'type' => 'close' );
