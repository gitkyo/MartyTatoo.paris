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

//Google analitycs
add_action('wp_head','my_analytics', 20);

function my_analytics() {
?>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-69336560-2', 'auto');
ga('send', 'pageview');

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