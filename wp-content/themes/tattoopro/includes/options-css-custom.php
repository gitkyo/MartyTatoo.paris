<?php
/**
 * Print custom CSS set up in the theme options
 *
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Inline CSS with the theme options
 */
function wolf_theme_options_css_custom() {

	$css = '';

	$menu_font_name = wolf_get_theme_option( 'menu_font_name' );
	$menu_selectors = '.nav-menu li a, #navbar-container-right';

	if ( 'TattooShop' == $menu_font_name ) {
		$css .= "$menu_selectors{ font-size:18px}";
	}

	if ( 'CuteTattoo' == $menu_font_name ) {
		$css .= "$menu_selectors{ font-size:15px}";
	}

	if ( WOLF_DEBUG ) {
		return $css;
	} else {
		return wolf_compact_css( $css );
	}
}

if ( ! function_exists( 'wolf_output_theme_options_css_custom' ) ) {
	/**
	 * Output the custom CSS
	 */
	function wolf_output_theme_options_css_custom() {
		echo '<style type="text/css">';
		echo '/* Custom Theme Options */' . "\n";
	    	echo wolf_theme_options_css_custom();
	    	echo '</style>';
	}
	add_action( 'wp_head', 'wolf_output_theme_options_css_custom' );
}