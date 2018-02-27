<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( ! function_exists( 'wolf_remove_plugins_submenus' ) ) {
	/**
	 * As the plugin options will be in the theme options, no need to of these settings
	 *
	 * @access public
	 * @return void
	 */
	function wolf_remove_plugins_submenus() {

		remove_submenu_page( 'edit.php?post_type=release', 'wolf-discography-settings' );
		remove_submenu_page( 'edit.php?post_type=work', 'wolf-work-settings' );
		remove_submenu_page( 'edit.php?post_type=video', 'wolf-videos-settings' );
		remove_submenu_page( 'edit.php?post_type=gallery', 'wolf-albums-settings' );
	}
	add_action( 'admin_menu', 'wolf_remove_plugins_submenus', 999 );
}
