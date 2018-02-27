<?php
/**
 * Sidebars
 *
 * Register default sidebar for the theme with the wolf_sidebars_init function
 * This function can be overwritten in a child theme
 *
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( ! function_exists( 'wolf_sidebars_init' ) ) {
	/**
	 * Register footer widget area and main sidebar
	 *
	 * Add a shop sidebar if WooCommerce is installed
	 *
	 */
	function wolf_sidebars_init() {

		// Blog Sidebar
		register_sidebar(
			array(
				'name'          		=> __( 'Blog Sidebar', 'tattoopro' ),
				'id'            		=> 'sidebar-main',
				'description'   		=> __( 'Appears in blog pages if it contains widgets', 'tattoopro' ),
				'before_widget' 	=> '<aside id="%1$s" class="widget %2$s"><div class="widget-content">',
				'after_widget'  	=> '</div></aside>',
				'before_title' 	 	=> '<h3 class="widget-title">',
				'after_title'  	 	=> '</h3>',
			)
		);

		// Page Sidebar
		register_sidebar(
			array(
				'name'          		=> __( 'Page Sidebar', 'tattoopro' ),
				'id'            		=> 'sidebar-page',
				'description'   		=> __( 'Appears in pages if it contains wigets', 'tattoopro' ),
				'before_widget' 	=> '<aside id="%1$s" class="wrap widget %2$s"><div class="widget-content">',
				'after_widget'  	=> '</div></aside>',
				'before_title'  		=> '<h3 class="widget-title">',
				'after_title'   		=> '</h3>',
			)
		);

		// Menu Sidebar
		register_sidebar(
			array(
				'name'          		=> __( 'Secondary Menu Sidebar', 'tattoopro' ),
				'id'            		=> 'sidebar-menu',
				'description'   		=> __( 'Appears in the secondary menu', 'tattoopro' ),
				'before_widget' 	=> '<aside id="%1$s" class="widget %2$s"><div class="widget-content">',
				'after_widget' 	 	=> '</div></aside>',
				'before_title' 	 	=> '<h3 class="widget-title">',
				'after_title'   		=> '</h3>',
			)
		);

		// Footer Sidebar
		register_sidebar(
			array(
				'name'          		=> __( 'Footer Widget Area', 'tattoopro' ),
				'id'            		=> 'sidebar-footer',
				'description'   		=> __( 'Appears in the footer section of the site (supports 4 widgets)', 'tattoopro' ),
				'before_widget' 	=> '<aside id="%1$s" class="widget %2$s"><div class="widget-content">',
				'after_widget'  	=> '</div></aside>',
				'before_title'  		=> '<h3 class="widget-title">',
				'after_title'   		=> '</h3>',
			)
		);

		// Woocommerce Siderbar
		if ( class_exists( 'Woocommerce' ) ) {
			register_sidebar(
				array(
					'name'          		=> __( 'Shop Sidebar', 'tattoopro' ),
					'id'            		=> 'woocommerce',
					'description'   		=> __( 'Appears in Woocommerce pages', 'tattoopro' ),
					'before_widget' 	=> '<aside id="%1$s" class="widget %2$s"><div class="widget-content">',
					'after_widget'  	=> '</div></aside>',
					'before_title'  		=> '<h3 class="widget-title">',
					'after_title'   		=> '</h3>',
				)
			);
		}

		// Discography Siderbar
		if ( class_exists( 'Wolf_Discography' ) ) {
			register_sidebar(
				array(
					'name'          		=> __( 'Discography Sidebar', 'tattoopro' ),
					'id'            		=> 'sidebar-discography',
					'description'   		=> __( 'Appears on the discography pages if the layout with sidebar is set', 'tattoopro' ),
					'before_widget' 	=> '<aside id="%1$s" class="widget %2$s"><div class="widget-content">',
					'after_widget'  	=> '</div></aside>',
					'before_title'  		=> '<h3 class="widget-title">',
					'after_title'   		=> '</h3>',
				)
			);
		}
	}
	add_action( 'widgets_init', 'wolf_sidebars_init' );
} // end function check
