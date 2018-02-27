<?php
/**
 * Customizer CSS
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Inline CSS with the customizer options
 */
function wolf_customizer_css() {

	$css = wolf_get_customizer_bg_options( 'body_bg', 'body' );
	$css .= wolf_get_customizer_bg_options( 'site_footer_bg', '.site-footer' );

	if ( 'boxed-layout' == wolf_get_theme_option( 'layout' ) && ( wolf_get_theme_option( 'body_bg_color' ) || wolf_get_theme_option( 'body_bg_img' ) ) )
		$css .= '#page{background:none;}';

	if ( WOLF_DEBUG ) {
		return $css;
	} else {
		return wolf_compact_css( $css );
	}
} // end function

if ( ! function_exists( 'wolf_output_customizer_options' ) ) {
	/**
	 * Output the custom CSS
	 */
	function wolf_output_customizer_options() {
		echo '<style>';
		echo '/* Customizer */' . "\n";
	    	echo wolf_customizer_css();
	    	echo '</style>';
	}
	add_action( 'wp_head', 'wolf_output_customizer_options' );
}

function wolf_get_customizer_bg_options( $id, $selector ) {

	$css = '';

	$img = '';
	$color = wolf_get_theme_option( $id . '_color' );
	$repeat = wolf_get_theme_option( $id . '_repeat' );
	$position = wolf_get_theme_option( $id . '_position' );
	$attachment = wolf_get_theme_option( $id . '_attachment' );
	$size = wolf_get_theme_option( $id . '_size' );
	$none = wolf_get_theme_option( $id . '_none' );
	$parallax = wolf_get_theme_option( $id . '_parallax' );
	$opacity = intval(wolf_get_theme_option( $id . '_opacity', 100 )) / 100;
	$color_rgba = 'rgba(' . wolf_hex_to_rgb( $color ) . ', ' . $opacity .')';


	/* Backgrounds
	---------------------------------*/
	if ( '' == $none ) {

		if ( wolf_get_theme_option( $id . '_img' ) ) {

			$img_url = wolf_get_url_from_attachment_id( wolf_get_theme_option( $id . '_img' ), 'extra-large' );
			$img = 'url("'. $img_url .'")';
		}

		if ( $color || $img ) {

			if ( ! $img ) {
				$css .= "$selector {background-color:$color;background-color:$color_rgba;}";
			}

			if ( $img )  {

				if ( $parallax ) {

					$css .= "$selector {background : $color $img $repeat fixed}";
					$css .= "$selector {background-position : 50% 0}";

				} else {
					$css .= "$selector {background : $color $img $position $repeat $attachment}";
				}

				if ( 'cover' == $size ) {

					$css .= "$selector {
						-webkit-background-size: 100%;
						-o-background-size: 100%;
						-moz-background-size: 100%;
						background-size: 100%;
						-webkit-background-size: cover;
						-o-background-size: cover;
						background-size: cover;
					}";
				}

				if ( 'resize' == $size ) {

					$css .= "$selector {
						-webkit-background-size: 100%;
						-o-background-size: 100%;
						-moz-background-size: 100%;
						background-size: 100%;
					}";
				}
			}
		}
	} else {
		$css .= "$selector {background:none;}";
	}

	return $css;
}
