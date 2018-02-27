<?php

if ( ! function_exists( 'wolf_help_menus' ) ) {
	/**
	 * Add help menus
	 *
	 * @access public
	 * @return void
	 */
	function wolf_help_menus() {

		add_submenu_page( 'wolf-theme-options', __( 'Shortcodes list', 'tattoopro' ), __( 'Shortcodes list', 'tattoopro' ), 'manage_options', 'wolf-theme-shortcodes', 'wolf_shortcodes_list' );
		add_submenu_page( 'wolf-theme-options', __( 'Icons list', 'tattoopro' ), __( 'Icons list', 'tattoopro' ), 'manage_options', 'wolf-theme-icons', 'wolf_icons_list' );
	}
	add_action( 'admin_menu', 'wolf_help_menus' );
}

if ( ! function_exists( 'wolf_shortcodes_list' ) ) {
	/**
	 * Shortcode list
	 *
	 * @access public
	 * @return void
	 */
	function wolf_shortcodes_list() {

		include( 'help/help-shortcodes.php' );
	}
}

if ( ! function_exists( 'wolf_icons_list' ) ) {
	/**
	 * Icons lists
	 *
	 * @access public
	 * @return void
	 */
	function wolf_icons_list() {

		include( 'help/help-icons.php' );
	}
}
