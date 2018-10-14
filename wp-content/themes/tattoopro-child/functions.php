<?php

/*

You can overwrite any functions here.

Make sure that the function you want to overwrite is wrapped by a condition in the parent theme like this :



if ( ! functions_exists( 'the_function_name' ) ) {

	function the_function_name(){}

}



----------

Example :



if ( ! functions_exists( 'my_custom_function' ) ) {



	function my_custom_function() {

		//your fancy code here

	}



}

*/



//-------------------------------------------------------------------------



/**

 * You can overwrite the parent theme constants here

 */



// Display the theme update notice

define( 'WOLF_UPDATE_NOTICE', true );



// Display the link to the support forum

define( 'WOLF_SUPPORT_PAGE', true );





if ( ! function_exists( 'wolf_set_lang' ) ) {

	/**

	 * Set your language here

	 *

	 * Uncomment the line below the function to make the wolf_set_lang function active

	 * The .pot file can be found in the languages/ folder of the parent theme

	 * http://help.wolfthemes.com/2013/11/translate-your-wordpress-theme/

	 *

	 * @param string $locale

	 * @return string

	 */

	function wolf_set_lang( $locale ) {

		return 'fr_FR'; // this is your Locale Code see http://wpcentral.io/internationalization/

	}

	//add_filter( 'locale', 'wolf_set_lang' );

}

// Deregister Contact Form 7 styles
add_action( 'wp_print_styles', 'aa_deregister_styles', 100 );
function aa_deregister_styles() {
    if ( ! is_page( 'contact' ) ) {
        wp_deregister_style( 'contact-form-7' );
    }
}

// Deregister Contact Form 7 JavaScript files on all pages without a form
add_action( 'wp_print_scripts', 'aa_deregister_javascript', 100 );
function aa_deregister_javascript() {
    if ( ! is_page( 'contact' ) ) {
        wp_deregister_script( 'contact-form-7' );
    }
}

//Cookiebot
add_action('wp_head', function(){
  ?>
  <script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="8c156243-97a9-447f-a462-39a5baed3a58" type="text/javascript" async></script>
  <?php
});

//Google analitycs
add_action('wp_head','my_analytics', 20);

function my_analytics() {
?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script type="text/plain" data-cookieconsent="statistics" async src="https://www.googletagmanager.com/gtag/js?id=UA-121923901-1"></script>
<script type="text/plain" data-cookieconsent="statistics">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-121923901-1');
</script>
<?php
}

// Masquer le message des erreurs de connexion
add_filter('login_errors', '__return_null');
// Maj auto
add_filter( 'auto_update_plugin', '__return_true' );
add_filter( 'auto_update_theme', '__return_true' );
add_filter( 'auto_update_translation', '__return_false' );

// Add custom script
wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/script.js', array ( 'jquery' ), 1.1, true);


// Have fun!