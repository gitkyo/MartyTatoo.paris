<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( class_exists( 'Wolf_Facebook_Page_Box' ) ) {
	// Facebook Box Shortcode
	vc_map(
		array(
			'name' => 'Facebook Page Box',
			'base' => 'wolf_facebook_page_box',
			'category' => 'by WolfThemes',
			'icon' => 'wolf-vc-icon wolf-vc-facebook',
			'allowed_container_element' => 'vc_row',
			'params' => array(

				array(
					'type' => 'textfield',
					'admin_label' => true,
					'class' => '',
					'heading' => __( 'Page URL', 'tattoopro' ),
					'param_name' => 'page_url',
					'description' => '',
					'value' => 'https://www.facebook.com/facebook',
				),

				array(
					'type' => 'textfield',
					'admin_label' => true,
					'class' => '',
					'heading' => __( 'Height', 'tattoopro' ),
					'param_name' => 'height',
					'description' => '',
					'value' => 400,
				),

				array(
					'type' => 'dropdown',
					'heading' => __( 'Hide cover', 'tattoopro' ),
					'param_name' => 'hide_cover',
					'description' => '',
					'value' => array(
						__( 'No', 'tattoopro' ) => 'false',
						__( 'Yes', 'tattoopro' ) => 'yes',
					),
				),

				array(
					'type' => 'dropdown',
					'heading' => __( 'Show posts', 'tattoopro' ),
					'param_name' => 'show_posts',
					'description' => '',
					'value' => array(
						__( 'Yes', 'tattoopro' ) => 'yes',
						__( 'No', 'tattoopro' ) => 'false',
					),
				),

				array(
					'type' => 'dropdown',
					'heading' => __( 'Show faces', 'tattoopro' ),
					'param_name' => 'show_faces',
					'description' => '',
					'value' => array(
						__( 'Yes', 'tattoopro' ) => 'yes',
						__( 'No', 'tattoopro' ) => 'false',
					),
				),
			)
		)
	);
}

if ( class_exists( 'Wolf_Twitter' ) ) {
	// Twitter Shortcode
	vc_map(
		array(
			'name' => __( 'Last tweets', 'tattoopro' ),
			'base' => 'wolf_tweet',
			'category' => 'by WolfThemes',
			'icon' => 'wolf-vc-icon wolf-vc-twitter',
			'allowed_container_element' => 'vc_row',
			'params' => array(

				array(
					'type' => 'textfield',
					'admin_label' => true,
					'class' => '',
					'heading' => __( 'Username', 'tattoopro' ),
					'param_name' => 'username',
					'description' => '',
					'value' => '',
				),

				array(
					'type' => 'dropdown',
					'admin_label' => true,
					'class' => '',
					'heading' => __( 'Type', 'tattoopro' ),
					'param_name' => 'type',
					'description' => '',
					'value' => array(
						__( 'single', 'tattoopro' ) => 'single',
						__( 'list', 'tattoopro' ) => 'list',
					),
				),

				array(
					'type' => 'textfield',
					'admin_label' => true,
					'class' => '',
					'heading' => __( 'Count', 'tattoopro' ),
					'param_name' => 'count',
					'description' => '',
					'value' => '',
					'dependency' => array( 'element' => 'type', 'value' => array( 'list' ) ),
				),
			)
		)
	);
}

if ( class_exists( 'Wolf_Dribbble' ) ) {
	// Dribbble Shortcode
	vc_map(
		array(
			'name' => __( 'Last Dribbbles', 'tattoopro' ),
			'base' => 'wolf_dribbble',
			'category' => 'by WolfThemes',
			'icon' => 'wolf-vc-icon wolf-vc-dribbble',
			'allowed_container_element' => 'vc_row',
			'params' => array(

				array(
					'type' => 'textfield',
					'admin_label' => true,
					'class' => '',
					'heading' => __( 'Player ID', 'tattoopro' ),
					'param_name' => 'player_id',
					'description' => '',
					'value' => '',
				),

				array(
					'type' => 'textfield',
					'admin_label' => true,
					'class' => '',
					'heading' => __( 'Count', 'tattoopro' ),
					'param_name' => 'count',
					'description' => '',
					'value' => '',
				),
			)
		)
	);
}

if ( class_exists( 'Wolf_Instagram' ) ) {
	// Instagram Shortcode
	vc_map(
		array(
			'name' => __( 'Last Grams', 'tattoopro' ),
			'base' => 'wolfgram_gallery',
			'category' => 'by WolfThemes',
			'icon' => 'wolf-vc-icon wolf-vc-instagram',
			'allowed_container_element' => 'vc_row',
			'params' => array(
				array(
					'type' => 'textfield',
					'admin_label' => true,
					'class' => '',
					'heading' => __( 'Count', 'tattoopro' ),
					'param_name' => 'count',
					'description' => '',
					'value' => '',
				),
			)
		)
	);
}

if ( class_exists( 'Wolf_Portfolio' ) ) {
	// Portfolio Shortcode
	vc_map(
		array(
			'name' => __( 'Last works', 'tattoopro' ),
			'base' => 'wolf_last_posts_work',
			'category' => 'by WolfThemes',
			'icon' => 'wolf-vc-icon wolf-vc-works',
			'allowed_container_element' => 'vc_row',
			'params' => array(

				array(
					'type' => 'dropdown',
					'admin_label' => true,
					'class' => '',
					'heading' => __( 'Columns', 'tattoopro' ),
					'param_name' => 'layout',
					'description' => '',
					'value' => array(
						__( 'classic', 'tattoopro' ) => 'classic',
						__( 'grid', 'tattoopro' ) => 'grid',
						__( 'square grid', 'tattoopro' ) => 'grid-square',
						//__( 'masonry', 'tattoopro' ) => 'masonry',
						__( 'modern', 'tattoopro' ) => 'modern',
					),
				),

				array(
					'type' => 'textfield',
					'admin_label' => true,
					'class' => '',
					'heading' => __( 'Count', 'tattoopro' ),
					'param_name' => 'count',
					'description' => '',
					'value' => 3,
				),

				array(
					'type' => 'dropdown',
					'admin_label' => true,
					'class' => '',
					'heading' => __( 'Columns', 'tattoopro' ),
					'param_name' => 'col',
					'description' => '',
					'value' => array( 3,2,4 ),
					'dependency' => array(
						'element' => 'layout', 'value' => array( 'classic', 'grid', 'grid-square', 'masonry' )
					),
				),

				array(
					'type' => 'dropdown',
					'admin_label' => true,
					'class' => '',
					'heading' => __( 'Display in carousel', 'tattoopro' ),
					'param_name' => 'carousel',
					'description' => '',
					'value' => array(
						__( 'No', 'tattoopro' ) => '',
						__( 'Yes', 'tattoopro' ) => 'yes',
					),
					'dependency' => array( 'element' => 'layout', 'value' => array( 'grid', 'grid-square' ) ),
				),

				array(
					'type' => 'dropdown',
					'admin_label' => true,
					'class' => '',
					'heading' => __( 'Padding', 'tattoopro' ),
					'param_name' => 'padding',
					'value' => array(
						__( 'yes', 'tattoopro' ) => 'yes',
						__( 'no', 'tattoopro' ) => 'no',
					),
					'dependency' => array( 'element' => 'layout', 'value' => array( 'classic', 'grid', 'grid-square', 'masonry' ) ),
				),

				array(
					'type' => 'textfield',
					'admin_label' => true,
					'class' => '',
					'heading' => __( 'Category', 'tattoopro' ),
					'param_name' => 'category',
					'description' => __( 'Include only one or several categories. Paste category slug(s) separated by a comma', 'tattoopro' ),
					'value' => '',
				),

				array(
					'type' => 'dropdown',
					'admin_label' => true,
					'class' => '',
					'heading' => __( 'Animation', 'tattoopro' ),
					'description' => '',
					'param_name' => 'animation',
					'value' => $animations,
					'description' => '',
				),
			)
		)
	);
}

if ( class_exists( 'Wolf_Videos' ) ) {
	// Video Shortcode
	vc_map(
		array(
			'name' => __( 'Last videos', 'tattoopro' ),
			'base' => 'wolf_last_posts_video',
			'category' => 'by WolfThemes',
			'icon' => 'wolf-vc-icon wolf-vc-videos',
			'allowed_container_element' => 'vc_row',
			'params' => array(

				array(
					'type' => 'textfield',
					'admin_label' => true,
					'class' => '',
					'heading' => __( 'Count', 'tattoopro' ),
					'param_name' => 'count',
					'description' => '',
					'value' => 4,
				),

				array(
					'type' => 'dropdown',
					'admin_label' => true,
					'class' => '',
					'heading' => __( 'Columns', 'tattoopro' ),
					'param_name' => 'col',
					'description' => '',
					'value' => array( 4,3,2 ),
				),

				array(
					'type' => 'textfield',
					'admin_label' => true,
					'class' => '',
					'heading' => __( 'Category', 'tattoopro' ),
					'param_name' => 'category',
					'description' => __( 'Include only one or several categories. Paste category slug(s) separated by a comma', 'tattoopro' ),
					'value' => '',
				),

				array(
					'type' => 'dropdown',
					'admin_label' => true,
					'heading' => __( 'Padding', 'tattoopro' ),
					'param_name' => 'padding',
					'value' => array(
						__( 'yes', 'tattoopro' ) => 'yes',
						__( 'no', 'tattoopro' ) => 'no',
					),
					'dependency' => array( 'element' => 'layout', 'value' => array( 'classic', 'grid', 'grid-square', 'masonry' ) ),
				),

				array(
					'type' => 'dropdown',
					'admin_label' => true,
					'class' => '',
					'heading' => __( 'Animation', 'tattoopro' ),
					'description' => '',
					'param_name' => 'animation',
					'value' => $animations,
					'description' => '',
				),
			)
		)
	);

	vc_map(
		array(
			'name' => __( 'Videos carousel', 'tattoopro' ),
			'base' => 'wolf_last_videos_carousel',
			'category' => 'by WolfThemes',
			'icon' => 'wolf-vc-icon wolf-vc-videos',
			'allowed_container_element' => 'vc_row',
			'params' => array(

				array(
					'type' => 'textfield',
					'admin_label' => true,
					'class' => '',
					'heading' => __( 'Count', 'tattoopro' ),
					'param_name' => 'count',
					'description' => '',
					'value' => 4,
				),

				array(
					'type' => 'textfield',
					'admin_label' => true,
					'class' => '',
					'heading' => __( 'Category', 'tattoopro' ),
					'param_name' => 'category',
					'description' => __( 'Include only one or several categories. Paste category slug(s) separated by a comma', 'tattoopro' ),
					'value' => '',
				),

				array(
					'type' => 'textfield',
					'admin_label' => true,
					'class' => '',
					'heading' => __( 'Inline style', 'tattoopro' ),
					'param_name' => 'inline_style',
					'description' => __( 'Additional inline CSS style', 'tattoopro' ),
					'value' => '',
				),

				array(
					'type' => 'textfield',
					'admin_label' => true,
					'class' => '',
					'heading' => __( 'Extra class', 'tattoopro' ),
					'param_name' => 'class',
					'description' => __( 'Optional additional CSS class to add to the element', 'tattoopro' ),
					'value' => '',
				),
			)
		)
	);
}

if ( class_exists( 'Wolf_Albums' ) ) {
	// Albums Shortcode
	vc_map(
		array(
			'name' => __( 'Last galleries', 'tattoopro' ),
			'base' => 'wolf_last_albums',
			'category' => 'by WolfThemes',
			'icon' => 'wolf-vc-icon wolf-vc-albums',
			'allowed_container_element' => 'vc_row',
			'params' => array(

				array(
					'type' => 'textfield',
					'admin_label' => true,
					'class' => '',
					'heading' => __( 'Count', 'tattoopro' ),
					'param_name' => 'count',
					'description' => '',
					'value' => 4,
				),

				array(
					'type' => 'dropdown',
					'admin_label' => true,
					'class' => '',
					'heading' => __( 'Columns', 'tattoopro' ),
					'param_name' => 'col',
					'description' => '',
					'value' => array( 4,3,2 ),
				),

				array(
					'type' => 'textfield',
					'admin_label' => true,
					'class' => '',
					'heading' => __( 'Category', 'tattoopro' ),
					'param_name' => 'category',
					'description' => __( 'Include only one or several categories. Paste category slug(s) separated by a comma', 'tattoopro' ),
					'value' => '',
				),

				array(
					'type' => 'dropdown',
					'admin_label' => true,
					'class' => '',
					'heading' => __( 'Animation', 'tattoopro' ),
					'description' => '',
					'param_name' => 'animation',
					'value' => $animations,
					'description' => '',
				),

			)
		)
	);

	// Last Photos Shortcode
	vc_map(
		array(
			'name' => __( 'Last photos widget', 'tattoopro' ),
			'base' => 'wolf_last_photos_widget',
			'category' => 'by WolfThemes',
			'icon' => 'wolf-vc-icon wolf-vc-albums',
			'allowed_container_element' => 'vc_row',
			'params' => array(

				array(
					'type' => 'textfield',
					'admin_label' => true,
					'class' => '',
					'heading' => __( 'Count', 'tattoopro' ),
					'param_name' => 'count',
					'description' => '',
					'value' => 4,
				),
			)
		)
	);
}

if ( class_exists( 'Wolf_jPlayer' ) ) {

	global $wpdb;
	$wolf_jplayer_playlists_table = esc_sql( $wpdb->prefix . 'wolf_jplayer_playlists' );

	$playlists = $wpdb->get_results( "SELECT * FROM $wolf_jplayer_playlists_table" );

	$args = array();

	if ( $playlists ) {

		$args = array(
			'name' => 'jPlayer',
			'base' => 'wolf_jplayer_playlist',
			'category' => 'by WolfThemes',
			'icon' => 'wolf-vc-icon wolf-vc-jplayer',
			'allowed_container_element' => 'vc_row',
			'params' => array(

				array(
					'type' => 'dropdown',
					'admin_label' => true,
					'class' => '',
					'heading' => __( 'Playlist', 'tattoopro' ),
					'param_name' => 'id',
					'description' => '',
					'value' => array(),
				),
			)
		);

		foreach ( $playlists as $p ) {
			$args['params'][0]['value'][ $p->name ] = $p->id;
		}

	} else {
		$args = array(
			'name' => 'jPlayer',
			'base' => 'wolf_jplayer_playlist',
			'category' => 'by WolfThemes',
			'icon' => 'wolf-vc-icon wolf-vc-jplayer',
			'allowed_container_element' => 'vc_row',
			'params' => array(

				array(
					'type' => 'dropdown',
					'admin_label' => true,
					'class' => '',
					'heading' => __( 'Playlist', 'tattoopro' ),
					'param_name' => 'id',
					'description' => '',
					'value' => array( __( 'No playlist created yet', 'tattoopro' ) => 0 ),
				),
			)
		);
	}

	// jPlayer Shortcode
	vc_map( $args );
}

if ( class_exists( 'Wolf_Music_Network' ) ) {
	vc_map(
		array(
			'name' => 'Music network',
			'base' => 'wolf_music_network',
			'category' => 'by WolfThemes',
			'icon' => 'wolf-vc-icon wolf-vc-music-network',
			'allowed_container_element' => 'vc_row',
			'params' => array(

				array(
					'type' => 'textfield',
					'admin_label' => true,
					'class' => '',
					'heading' => __( 'Height', 'tattoopro' ),
					'param_name' => 'height',
					'description' => '',
					'value' => 32,
				),

				array(
					'type' => 'dropdown',
					'admin_label' => true,
					'class' => '',
					'heading' => __( 'Alignment', 'tattoopro' ),
					'param_name' => 'align',
					'description' => '',
					'value' => array(
						__( 'Centered', 'tattoopro' ) => 'center',
						__( 'Left', 'tattoopro' ) => 'left',
						__( 'Right', 'tattoopro' ) => 'right',
					),
				),

				array(
					'type' => 'textfield',
					'admin_label' => true,
					'class' => '',
					'heading' => __( 'Services', 'tattoopro' ),
					'param_name' => 'services',
					'value' => '',
					'description' => 'separated by a comma (empty for all)'
				),

			)
		)
	);
}

if ( class_exists( 'Wolf_Tour_Dates' ) ) {
	vc_map(
		array(
			'name' => __( 'Tour Dates', 'tattoopro' ),
			'base' => 'wolf_tour_dates',
			'category' => 'by WolfThemes',
			'icon' => 'wolf-vc-icon wolf-vc-tour-dates',
			'allowed_container_element' => 'vc_row',
			'params' => array(

				array(
					'type' => 'textfield',
					'admin_label' => true,
					'class' => '',
					'heading' => __( 'Count', 'tattoopro' ),
					'param_name' => 'count',
					'description' => '',
					'value' => 10,
				),

				array(
					'type' => 'dropdown',
					'admin_label' => true,
					'class' => '',
					'heading' => __( 'Link to single show page', 'tattoopro' ),
					'param_name' => 'link',
					'description' => '',
					'value' => array(
						__( 'No', 'tattoopro' ) => 'false',
						__( 'Yes', 'tattoopro' ) => 'true',
					),
				),

				array(
					'type' => 'dropdown',
					'admin_label' => true,
					'class' => '',
					'heading' => __( 'Display Past Shows', 'tattoopro' ),
					'param_name' => 'past',
					'description' => '',
					'value' => array(
						__( 'No', 'tattoopro' ) => 'false',
						__( 'Yes', 'tattoopro' ) => 'true',
					),
				),

				array(
					'type' => 'textfield',
					'admin_label' => true,
					'class' => '',
					'heading' => __( 'Artist slug', 'tattoopro' ),
					'param_name' => 'artist',
					'description' => '',
					'value' => '',
				),
			)
		)
	);

	vc_map(
		array(
			'name' => __( 'Upcoming Shows Widget', 'tattoopro' ),
			'base' => 'wolf_upcoming_shows_widget',
			'category' => 'by WolfThemes',
			'icon' => 'wolf-vc-icon wolf-vc-tour-dates',
			'allowed_container_element' => 'vc_row',
			'params' => array(

				array(
					'type' => 'textfield',
					'admin_label' => true,
					'class' => '',
					'heading' => __( 'Count', 'tattoopro' ),
					'param_name' => 'count',
					'description' => '',
					'value' => 10,
				),

				array(
					'type' => 'textfield',
					'admin_label' => true,
					'class' => '',
					'heading' => __( 'Artist slug', 'tattoopro' ),
					'param_name' => 'artist',
					'description' => '',
					'value' => '',
				),
			)
		)
	);
}

if ( class_exists( 'Wolf_Discography' ) ) {
	// Discography Shortcode
	vc_map(
		array(
			'name' => __( 'Last releases', 'tattoopro' ),
			'base' => 'wolf_last_posts_release',
			'category' => 'by WolfThemes',
			'icon' => 'wolf-vc-icon wolf-vc-releases',
			'allowed_container_element' => 'vc_row',
			'params' => array(

				/*array(
					'type' => 'dropdown',
					'admin_label' => true,
					'class' => '',
					'heading' => __( 'Layout', 'tattoopro' ),
					'param_name' => 'layout',
					'description' => '',
					'value' => array(
						__( 'grid', 'tattoopro' ) => 'grid',
						__( 'classic', 'tattoopro' ) => 'classic',
					),
				),*/

				array(
					'type' => 'textfield',
					'admin_label' => true,
					'class' => '',
					'heading' => __( 'Count', 'tattoopro' ),
					'param_name' => 'count',
					'description' => '',
					'value' => 3,
				),

				array(
					'type' => 'dropdown',
					'admin_label' => true,
					'class' => '',
					'heading' => __( 'Columns', 'tattoopro' ),
					'param_name' => 'col',
					'description' => '',
					'value' => array( 3,2,4 ),
				),

				/*array(
					'type' => 'dropdown',
					'admin_label' => true,
					'class' => '',
					'heading' => __( 'Display in carousel', 'tattoopro' ),
					'param_name' => 'carousel',
					'description' => '',
					'value' => array(
						__( 'No', 'tattoopro' ) => '',
						__( 'Yes', 'tattoopro' ) => 'yes',
					),
				),*/

				array(
					'type' => 'dropdown',
					'admin_label' => true,
					'class' => '',
					'heading' => __( 'Padding', 'tattoopro' ),
					'param_name' => 'padding',
					'value' => array(
						__( 'yes', 'tattoopro' ) => 'yes',
						__( 'no', 'tattoopro' ) => 'no',
					),
					'dependency' => array( 'element' => 'layout', 'value' => array( 'classic', 'grid', 'grid-square', 'masonry' ) ),
				),

				array(
					'type' => 'textfield',
					'admin_label' => true,
					'class' => '',
					'heading' => __( 'Label', 'tattoopro' ),
					'param_name' => 'label',
					'description' => __( 'Include only one or several categories. Paste category slug(s) separated by a comma', 'tattoopro' ),
					'value' => '',
				),

				array(
					'type' => 'textfield',
					'admin_label' => true,
					'class' => '',
					'heading' => __( 'Band', 'tattoopro' ),
					'param_name' => 'band',
					'description' => __( 'Include only one or several categories. Paste category slug(s) separated by a comma', 'tattoopro' ),
					'value' => '',
				),

			)
		)
	);
}
