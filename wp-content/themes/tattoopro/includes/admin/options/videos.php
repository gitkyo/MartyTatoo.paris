<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$page_option = array(
	'' => __( '- Select -', 'tattoopro' ),
);
$pages = get_pages();

foreach ( $pages as $page ) {
	$page_option[ absint( $page->ID ) ] = sanitize_text_field( $page->post_title );
}

$wolf_theme_options[] = array( 'type' => 'open' ,  'label' => __( 'Videos', 'tattoopro'  ) );

	$wolf_theme_options[] = array( 'label' => __( 'Videos', 'tattoopro' ),
		'type' => 'section_open',
	);

		$wolf_theme_options[] =array( 'label' => __( 'Video page', 'tattoopro' ),
			'id' => 'video_page_id',
			'type' => 'select',
			'options' => $page_option,
		);

		$wolf_theme_options[] =array( 'label' => __( 'Number of posts to show by default', 'tattoopro' ),
			'desc' => __( 'leave empty to show all', 'tattoopro' ),
			'id' => 'video_posts_per_page',
			'type' => 'int',
		);

		$wolf_theme_options[] =array( 'label' => __( 'Layout', 'tattoopro' ),
			'id' => 'video_type',
			'type' => 'select',
			'options' => array(
				'grid' => __( 'Grid', 'tattoopro' ),
				'youtube' => __( 'Categories', 'tattoopro' ),
				'youtube-all' => __( 'All videos', 'tattoopro' )
			),
		);

		$wolf_theme_options[] =array( 'label' => __( 'Columns', 'tattoopro' ),
			'id' => 'video_cols',
			'type' => 'select',
			'options' => array(
				2, 3, 4, 5, 6
			),
			'dependency' => array( 'element' => 'video_type', 'value' => array( 'classic', 'grid' ) ),
		);

		$wolf_theme_options[] =array( 'label' => __( 'Open video in a lightbox', 'tattoopro' ),
			'id' => 'video_lightbox',
			'type' => 'checkbox',
			'dependency' => array( 'element' => 'video_type', 'value' => array( 'classic', 'grid' ) ),
		);

		$wolf_theme_options[] =array( 'label' => __( 'Width', 'tattoopro' ),
			'id' => 'video_width',
			'type' => 'select',
			'options' => array(
				'boxed' => __( 'Boxed', 'tattoopro' ),
				'wide' => __( 'Wide', 'tattoopro' ),
			),
			'dependency' => array( 'element' => 'video_type', 'value' => array( 'classic', 'grid' ) ),
		);

		$wolf_theme_options[] =array( 'label' => __( 'Space', 'tattoopro' ),
			'id' => 'video_padding',
			'type' => 'select',
			'options' => array(
				'padding' => __( 'Padding', 'tattoopro' ),
				'no-padding' => __( 'No Padding', 'tattoopro' ),
			),
			'dependency' => array( 'element' => 'video_type', 'value' => array( 'classic', 'grid' ) ),
		);

		$wolf_theme_options[] =array( 'label' => __( 'Isotope filter', 'tattoopro' ),
			'id' => 'video_isotope',
			'type' => 'checkbox',
			'dependency' => array( 'element' => 'video_type', 'value' => array( 'classic', 'grid' ) ),
		);

		$wolf_theme_options[] =array( 'label' => __( 'Infinite scroll', 'tattoopro' ),
			'id' => 'video_infinite_scroll',
			'type' => 'checkbox',
			'dependency' => array( 'element' => 'video_type', 'value' => array( 'classic', 'grid' ) ),
		);

		$wolf_theme_options[] =array( 'label' => __( 'Trigger infinite scroll with a button', 'tattoopro' ),
			'desc' => __( 'If checked, the user will have to click the button to load more post', 'tattoopro' ),
			'id' => 'video_infinite_scroll_trigger',
			'type' => 'checkbox',
			'dependency' => array( 'element' => 'video_type', 'value' => array( 'classic', 'grid' ) ),
		);

		$wolf_theme_options[] =array( 'label' => __( 'Display author', 'tattoopro' ),
			'id' => 'video_author',
			'type' => 'checkbox',
		);

		$wolf_theme_options[] =array( 'label' => __( 'Display views', 'tattoopro' ),
			'id' => 'video_views',
			'type' => 'checkbox',
		);

		$wolf_theme_options[] =array( 'label' => __( 'Display likes', 'tattoopro' ),
			'id' => 'video_likes',
			'type' => 'checkbox',
		);

		$wolf_theme_options[] =array( 'label' => __( 'Enable comments', 'tattoopro' ),
			'id' => 'video_comments',
			'type' => 'checkbox',
		);

		$wolf_theme_options[] = array(
			'label' => __( 'Allow share links', 'tattoopro' ),
			'id' => 'video_share',
			'type' => 'checkbox',
		);

		$wolf_theme_options[] = array(
			'label' => __( 'Allow embed', 'tattoopro' ),
			'id' => 'video_embed',
			'type' => 'checkbox',
		);

		$wolf_theme_options[] =array( 'label' => __( 'Enable re-order by drag and drop', 'tattoopro' ),
			'id' => 'video_reorder',
			'type' => 'checkbox',
			'desc' => sprintf(  __( 'set your post order in %s -> re-order', 'tattoopro' ), 'Videos' ),
		);

	$wolf_theme_options[] = array( 'type' => 'section_close' );

$wolf_theme_options[] = array( 'type' => 'close' );
