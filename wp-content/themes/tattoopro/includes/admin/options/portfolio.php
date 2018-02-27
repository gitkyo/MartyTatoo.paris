<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$page_option = array(
	'' => __( '- Select -', 'tattoopro' ),
);
$pages = get_pages();

foreach ( $pages as $page ) {
	$page_option[ absint( $page->ID ) ] = sanitize_text_field( $page->post_title );
}

$wolf_theme_options[] = array( 'type' => 'open' ,  'label' => __( 'Portfolio', 'tattoopro'  ) );

	$wolf_theme_options[] = array( 'label' => __( 'Portfolio', 'tattoopro' ),
		'type' => 'section_open',
	);

		$wolf_theme_options[] =array( 'label' => __( 'Portfolio page', 'tattoopro' ),
			'id' => 'work_page_id',
			'type' => 'select',
			'options' => $page_option,
		);

	$wolf_theme_options[] =array( 'label' => __( 'Number of posts to show by default', 'tattoopro' ),
		'desc' => __( 'leave empty to show all', 'tattoopro' ),
		'id' => 'work_posts_per_page',
		'type' => 'int',
	);

	$wolf_theme_options[] =array( 'label' => __( 'Layout', 'tattoopro' ),
		'id' => 'work_type',
		'type' => 'select',
		'options' => array(
			'classic' => __( 'Classic', 'tattoopro' ),
			'grid' => __( 'Grid', 'tattoopro' ),
			'grid-square' => __( 'Square grid', 'tattoopro' ),
			'masonry' => __( 'Masonry', 'tattoopro' ),
			'masonry-horizontal' => __( 'Modern masonry', 'tattoopro' ),
			'vertical' => __( 'Vertical carousel', 'tattoopro' ),
			'modern' => __( 'Horizontal', 'tattoopro' ),
		),
	);

	$wolf_theme_options[] =array( 'label' => __( 'Columns', 'tattoopro' ),
		'id' => 'work_cols',
		'type' => 'select',
		'options' => array(
			2, 3, 4, 5, 6
		),
		'dependency' => array( 'element' => 'work_type', 'value' => array( 'classic', 'grid' ) ),
	);

	$wolf_theme_options[] =array( 'label' => __( 'Width', 'tattoopro' ),
		'id' => 'work_width',
		'type' => 'select',
		'options' => array(
			'boxed' => __( 'Boxed', 'tattoopro' ),
			'wide' => __( 'Wide', 'tattoopro' ),
		),
		'dependency' => array( 'element' => 'work_type', 'value' => array( 'classic', 'grid', 'masonry' ) ),
	);

	$wolf_theme_options[] =array( 'label' => __( 'Space', 'tattoopro' ),
		'id' => 'work_padding',
		'type' => 'select',
		'options' => array(
			'padding' => __( 'Padding', 'tattoopro' ),
			'no-padding' => __( 'No padding', 'tattoopro' ),
		),
		'dependency' => array( 'element' => 'work_type', 'value' => array( 'classic', 'grid', 'masonry' ) ),
	);

	$wolf_theme_options[] =array( 'label' => __( 'Isotope filter', 'tattoopro' ),
		'id' => 'work_isotope',
		'type' => 'checkbox',
		'dependency' => array( 'element' => 'work_type', 'value' => array( 'classic', 'grid', 'masonry' ) ),
	);

	$wolf_theme_options[] =array( 'label' => __( 'Infinite scroll', 'tattoopro' ),
		'id' => 'work_infinite_scroll',
		'type' => 'checkbox',
		'dependency' => array( 'element' => 'work_type', 'value' => array( 'classic', 'grid', 'masonry' ) ),
	);

	$wolf_theme_options[] =array( 'label' => __( 'Trigger infinite scroll with a button', 'tattoopro' ),
		'desc' => __( 'If checked, the user will have to click the button to load more post', 'tattoopro' ),
		'id' => 'work_infinite_scroll_trigger',
		'type' => 'checkbox',
		'dependency' => array( 'element' => 'work_type', 'value' => array( 'classic', 'grid', 'masonry' ) ),
	);

	$wolf_theme_options[] =array( 'label' => __( 'Display date', 'tattoopro' ),
		'id' => 'work_date',
		'type' => 'checkbox',
	);

	$wolf_theme_options[] =array( 'label' => __( 'Display views', 'tattoopro' ),
		'id' => 'work_views',
		'type' => 'checkbox',
	);

	$wolf_theme_options[] =array( 'label' => __( 'Display likes', 'tattoopro' ),
		'id' => 'work_likes',
		'type' => 'checkbox',
	);

	$wolf_theme_options[] =array( 'label' => __( 'Enable comments', 'tattoopro' ),
		'id' => 'work_comments',
		'type' => 'checkbox',
	);

	$wolf_theme_options[] = array(
		'label' => __( 'Share links', 'tattoopro' ),
		'desc' => __( 'Display "share" links below each single post ?', 'tattoopro' ),
		'id' => 'work_share',
		'type' => 'checkbox',
	);

	$wolf_theme_options[] =array( 'label' => __( 'Enable re-order by drag and drop', 'tattoopro' ),
		'id' => 'work_reorder',
		'type' => 'checkbox',
		'desc' => sprintf(  __( 'set your post order in %s -> re-order', 'tattoopro' ), 'portfolio' ),
	);

	$wolf_theme_options[] = array( 'type' => 'section_close' );

$wolf_theme_options[] = array( 'type' => 'close' );
