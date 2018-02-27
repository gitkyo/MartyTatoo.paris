<?php
/**
 * Metaboxes
 *
 * Register metabox for the theme with the wolf_do_metaboxes function
 * This function can be overwritten in a child theme
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( ! function_exists( 'wolf_do_metaboxes' ) ) {
	/**
	 * Set theme metaboxes
	 *
	 * Allow to add specific style options for each page
	 */
	function wolf_do_metaboxes() {

		$common = array(

			array(
				'label'	=> '',
				'id'	=> '_subheading',
				'type'	=> 'text',
			),

			/*array(
				'label'	=> __( 'Feature Post in Home Slider <span style="font-weight:400">(the featured image will be used as slide)</span>', 'tattoopro' ),
				'id'	=> '_featured_post',
				'type'	=> 'checkbox',
			),*/

			array(
				'label'	=> __( 'Page header type', 'tattoopro' ),
				'id'	=> '_page_header_type',
				'type'	=> 'select',
				'options' => array(
					'' => __( 'Default (set in the options)', 'tattoopro' ),
					'big' => __( 'Centered page title big height', 'tattoopro' ),
					'medium' => __( 'Centered page title', 'tattoopro' ),
					'small' => __( 'Breadcrumb + page title', 'tattoopro' ),
					'full' => __( 'Full screen', 'tattoopro' ),
					'none' => __( 'No page title area', 'tattoopro' ),
				),
				'desc' => __( 'Will orverwrite the setting in the theme option "Header" tab for this post/page', 'tattoopro' )
			),

			array(
				'label'	=> __( 'Hide page title', 'tattoopro' ),
				'id'	=> '_header_hide_title',
				'type'	=> 'checkbox',
			),

			array(
				'label'	=> __( 'Hide menu', 'tattoopro' ),
				'id'	=> '_hide_menu',
				'type'	=> 'checkbox',
			),

			array(
				'label'	=> __( 'Force menu absolute position', 'tattoopro' ),
				'id'	=> '_menu_absolute',
				'type'	=> 'checkbox',
				//'desc'	=> __( 'For the default or centered menu only', 'tattoopro' ),
				//'dependency' => array(
				//	'element' => '_header_hide_title_area', 'value' => array( 'yes' ),
				//),
			),

			array(
				'label'	=> __( 'Hide footer on this page', 'tattoopro' ),
				'id'	=> '_hide_footer',
				'type'	=> 'checkbox',
			),

			array(
				'label'	=> __( 'Background type', 'tattoopro' ),
				'id'	=> '_header_bg_type',
				'type'	=> 'select',
				'options' => array(
					'image' => __( 'Image', 'tattoopro' ),
					'video' => __( 'Video', 'tattoopro' ),
				),
			),

			array(
				'label'	=> __( 'Header background', 'tattoopro' ),
				'id'	=> '_header_bg',
				'type'	=> 'background',
				'dependency' => array( 'element' => '_header_bg_type', 'value' => array( 'image' ) ),
			),

			array(
				'label'	=> __( 'Header background effect', 'tattoopro' ),
				'id'	=> '_header_bg_effect',
				'type'	=> 'select',
				'options' => array(
					'parallax' => __( 'Parallax', 'tattoopro' ),
					'zoomin' => __( 'Zoom', 'tattoopro' ),
					'none' => __( 'None', 'tattoopro' ),
				),
				'dependency' => array( 'element' => '_header_bg_type', 'value' => array( 'image' ) ),
			),

			array(
				'label'	=> __( 'Header font color', 'tattoopro' ),
				'id'	=> '_header_font_color',
				'type'	=> 'select',
				'options' => array(
					'' => __( 'Auto', 'tattoopro' ),
					'dark' => __( 'Dark', 'tattoopro' ),
					'light' => __( 'Light', 'tattoopro' ),
				),
			),

			array(
				'label'	=> __( 'Video Background type', 'tattoopro' ),
				'id'	=> '_header_video_bg_type',
				'type'	=> 'select',
				'options' => array(
					'selfhosted' => __( 'Self hosted', 'tattoopro' ),
					'youtube' => 'Youtube',
				),
			),

			array(
				'label'	=> __( 'Youtube URL', 'tattoopro' ),
				'id'	=> '_header_video_bg_youtube_url',
				'type'	=> 'text',
				'dependency' => array( 'element' => '_header_bg_type', 'value' => array( 'video' ) ),
			),

			array(
				'label'	=> __( 'Video background', 'tattoopro' ),
				'id'	=> '_header_video_bg',
				'type'	=> 'video',
				'dependency' => array( 'element' => '_header_bg_type', 'value' => array( 'video' ) ),
			),

			array(
				'label'	=> __( 'Overlay color', 'tattoopro' ),
				'id'	=> '_header_overlay_color',
				'type'	=> 'colorpicker',
			),

			array(
				'label'	=> __( 'Overlay pattern', 'tattoopro' ),
				'id'	=> '_header_overlay_img',
				'type'	=> 'image',
			),

			array(
				'label'	=> __( 'Overlay opacity (in percent)', 'tattoopro' ),
				'id'	=> '_header_overlay_opacity',
				'desc'	=> __( 'Adapt the header overlay opacity if needed', 'tattoopro' ),
				'type'	=> 'int',
			),

			// array(
			// 	'label'	=> __( 'Custom CSS (will be applied on this post only)', 'tattoopro' ),
			// 	'id'	=> '_custom_css',
			// 	'type'	=> 'textarea',
			// ),
		);

		if ( class_exists( 'Wolf_Slider' ) ) {
			$common[] = array(
				'label'	=> __( 'Feature Post in Home Slider <span style="font-weight:400">(the featured image will be used as slide)</span>', 'tattoopro' ),
				'id'	=> '_featured_post',
				'type'	=> 'checkbox',
			);
		}

		$wolf_blog_metabox = array(

			'meta_options' => array(

				'title' => __( 'Post options', 'tattoopro' ),
				'page' => array( 'post' ),

				'metafields' => array(

					array(
						'label'	=> __( 'Layout', 'tattoopro' ),
						'id'	=> '_layout',
						'type'	=> 'select',
						'options' => array(
							'' => __( 'Default (set in the theme options or category options)', 'tattoopro' ),
							'standard' => __( 'Full Width', 'tattoopro' ),
							'sidebar' => __( 'Sidebar', 'tattoopro' ),
							'split' => __( 'Splitted', 'tattoopro' ),
							'vc' => 'Visual Composer',
						),
					),

					array(
						'label'	=> __( 'Media content', 'tattoopro' ),
						'id'	=> '_post_media',
						'type'	=> 'editor',
						'desc' 	=> __( 'Additional medias to add below the featured media area.', 'tattoopro' ),
					),

					array(
						'label'	=> __( 'Hide featured image on single post page', 'tattoopro' ),
						'id'	=> '_hide_featured_image',
						'type'	=> 'checkbox',
					),

					array(
						'label'	=> __( 'Navigation', 'tattoopro' ),
						'id'	=> '_post_nav_type',
						'type'	=> 'select',
						'options' => array(
							'' => __( 'Default (set in the theme options or category options)', 'tattoopro' ),
							'navigation' => __( 'Previous/Next navigation', 'tattoopro' ),
							'related' => __( 'Related posts', 'tattoopro' ),
						),
					),
				),
			)
		);

		foreach ( $common as $param ) {
			$wolf_blog_metabox['meta_options']['metafields'][] = $param;
		}

		//////////////////////////////

		$wolf_work_metabox = array(

			'meta_options' => array(

				'title' => __( 'Post options', 'tattoopro' ),
				'page' => array( 'work' ),

				'metafields' => array(

					array(
						'label'	=> __( 'Single view layout', 'tattoopro' ),
						'id'	=> '_layout',
						'type'	=> 'select',
						'options' => array(
							'standard' => __( 'Full width', 'tattoopro' ),
							'sidebar' => __( 'Sidebar', 'tattoopro' ),
							'vc' => 'Visual Composer',
						),
					),

					array(
						'label'	=> __( 'Hide featured image on single post page (if displayed)', 'tattoopro' ),
						'id'	=> '_hide_featured_image',
						'type'	=> 'checkbox',
					),
				),
			)
		);

		///if ( 'masonry-horizontal' == wolf_get_theme_option( 'work_type' ) ) {
			$wolf_work_metabox['meta_options']['metafields'][] = array(
				'label'	=> __( 'In grid', 'tattoopro' ),
				'id'	=> '_work_item_size',
				'type'	=> 'select',
				'options' => array(
					'1x1' => __( 'Square', 'tattoopro' ),
					'2x1' => __( 'Landscape', 'tattoopro' ),
					'1x2' => __( 'Portrait', 'tattoopro' ),
					'2x2' => __( 'Big square', 'tattoopro' ),
				),
				'desc' => __( 'Used for the mansonry grid only', 'tattoopro' )
			);
		///}

		$wolf_work_metabox['meta_options']['metafields'][] = array(
			'label'	=> __( 'Media content', 'tattoopro' ),
			'id'	=> '_post_media',
			'type'	=> 'editor',
			'desc' 	=> '',
		);

		foreach ( $common as $param ) {
			$wolf_work_metabox['meta_options']['metafields'][] = $param;
		}


		//////////////////////////////

		$wolf_gallery_metabox = array(

			'meta_options' => array(

				'title' => __( 'Gallery options', 'tattoopro' ),
				'page' => array( 'gallery' ),

				'metafields' => array(

					array(
						'label'	=> __( 'Layout', 'tattoopro' ),
						'id'	=> '_layout',
						'type'	=> 'select',
						'options' => array(
							'wide' => __( 'Full with', 'tattoopro' ),
							'boxed' => __( 'Boxed', 'tattoopro' ),
						),
					),
				),
			)
		);

		foreach ( $common as $param ) {
			$wolf_gallery_metabox['meta_options']['metafields'][] = $param;
		}

		//////////////////////////////

		$wolf_video_metabox = array(

			'meta_options' => array(

				'title' => __( 'Video options', 'tattoopro' ),
				'page' => array( 'video' ),

				'metafields' => array(),
			)
		);

		foreach ( $common as $param ) {
			$wolf_video_metabox['meta_options']['metafields'][] = $param;
		}

		$wolf_header_background_metabox = array(

			'meta_options' => array(

				'title' => __( 'Page options', 'tattoopro' ),
				'page' => array( 'page', 'release', 'show', 'product', 'plugin' ),
				'metafields' => $common,
			),
		);

		$wolf_do_header_background_metabox = new Wolf_Theme_Admin_Metabox( $wolf_header_background_metabox );
		$wolf_do_blog_metabox = new Wolf_Theme_Admin_Metabox( $wolf_blog_metabox );
		$wolf_do_work_metabox = new Wolf_Theme_Admin_Metabox( $wolf_work_metabox );
		$wolf_do_gallery_metabox = new Wolf_Theme_Admin_Metabox( $wolf_gallery_metabox );
		$wolf_do_video_metabox = new Wolf_Theme_Admin_Metabox( $wolf_video_metabox );
	} // end function

	wolf_do_metaboxes(); // do metaboxes

	function wolf_move_subheading_field() {
		?>
		<script>
			jQuery( function( $ ) {
				$( 'input#_subheading' ).parents( 'tr' )
				.hide()
				.find( 'input' )
				.attr( 'tabindex', 1 )
				.css( {
					'width' : '100%'
				} )
				.insertAfter( $( '#title' ) );
			} );
		</script>
		<?php
	}
	add_action( 'admin_head', 'wolf_move_subheading_field' );

	function wolf_move_video_url_field() {

		?>
		<script>
			jQuery( function( $ ) {
				$( 'input#_wolf_video_url' ).parents( 'tr' )
				.hide()
				.find( 'input' )
				.attr('tabindex', 1)
				.css( {
					'width' : '100%'
				} )
				.insertAfter( $( '#_subheading' ) );
			} );
		</script>
		<?php
	}
	add_action( 'admin_head', 'wolf_move_video_url_field' );

} // end function check
