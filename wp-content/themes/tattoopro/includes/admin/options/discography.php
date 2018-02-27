<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$page_option = array(
	'' => __( '- Select -', 'tattoopro' ),
);
$pages = get_pages();

foreach ( $pages as $page ) {
	$page_option[ absint( $page->ID ) ] = sanitize_text_field( $page->post_title );
}

$wolf_theme_options[] =  array(
	'type' => 'open',
	'label' =>__( 'Discography', 'tattoopro' )
);

	$wolf_theme_options[] =  array(
		'label' => __( 'Discography', 'tattoopro' ),
		'type' => 'section_open',
	);

	$wolf_theme_options[] =array( 'label' => __( 'Discography page', 'tattoopro' ),
			'id' => 'release_page_id',
			'type' => 'select',
			'options' => $page_option,
		);

	$wolf_theme_options[] =array( 'label' => __( 'Number of posts to show by default', 'tattoopro' ),
		'desc' => __( 'leave empty to show all', 'tattoopro' ),
		'id' => 'release_posts_per_page',
		'type' => 'int',
	);

	$wolf_theme_options[] =array( 'label' => __( 'Layout', 'tattoopro' ),
		'id' => 'release_type',
		'type' => 'select',
		'options' => array(
			'full' => __( 'Full width', 'tattoopro' ),
			'sidebar' => __( 'Sidebar', 'tattoopro' ),
			'grid' => __( 'Grid', 'tattoopro' ),
		),
	);

	$wolf_theme_options[] =array( 'label' => __( 'Columns', 'tattoopro' ),
		'id' => 'release_cols',
		'type' => 'select',
		'options' => array(
			2, 3, 4, 5, 6
		),
		'dependency' => array( 'element' => 'release_type', 'value' => array( 'grid' ) ),
	);

	$wolf_theme_options[] =array( 'label' => __( 'Width', 'tattoopro' ),
		'id' => 'release_width',
		'type' => 'select',
		'options' => array(
			'boxed' => __( 'Boxed', 'tattoopro' ),
			'wide' => __( 'Wide', 'tattoopro' ),
		),
		'dependency' => array( 'element' => 'release_type', 'value' => array( 'grid' ) ),
	);

	$wolf_theme_options[] =array( 'label' => __( 'Space', 'tattoopro' ),
		'id' => 'release_padding',
		'type' => 'select',
		'options' => array(
			'padding' => __( 'Padding', 'tattoopro' ),
			'no-padding' => __( 'No padding', 'tattoopro' ),
		),
		'dependency' => array( 'element' => 'release_type', 'value' => array( 'grid' ) ),
	);

	$wolf_theme_options[] =  array( 'type' => 'section_close' );

$wolf_theme_options[] =  array( 'type' => 'close' );
