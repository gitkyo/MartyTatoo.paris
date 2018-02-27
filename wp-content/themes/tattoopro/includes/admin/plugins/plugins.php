<?php
/**
 * Recommended plugins
 */

//delete_user_meta( get_current_user_id(), 'tgmpa_dismissed_notice' );

require( WOLF_FRAMEWORK_DIR . '/classes/class-tgm-plugin-activation.php' );

add_action( 'tgmpa_register', 'wolf_theme_register_required_plugins' );
function wolf_theme_register_required_plugins() {

	/**
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

		array(
			'name'    => 'WPBakery Page Builder',
			'slug'   => 'js_composer', // The plugin slug (typically the folder name)
			'source'   => WOLF_THEME_URI . '/includes/admin/plugins/js_composer.zip', // The plugin source
			'required' => true, // If false, the plugin is only 'recommended' instead of required
			'version' => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
			'force_activation' => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
			'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
			'external_url' => WOLF_THEME_URI . '/includes/admin/plugins/js_composer.zip', // If set, overrides default API URL and points to an external URL
		),

		array(
			'name'    => 'Slider Revolution',
			'slug'   => 'revslider',
			'source'   => WOLF_THEME_URI . '/includes/admin/plugins/revslider.zip',
			'required' => false,
			'version' => '',
			'force_activation' => false,
			'force_deactivation' => false,
			'external_url' => WOLF_THEME_URI . '/includes/admin/plugins/revslider.zip',
		),

		array(
			'name'    => 'Wolf Albums',
			'slug'   => 'wolf-albums',
			'source'   => 'http://plugins.wolfthemes.com/wolf-albums/wolf-albums.zip',
			'required' => false,
			'version' => '',
			'force_activation' => false,
			'force_deactivation' => false,
			'external_url' => 'http://plugins.wolfthemes.com/wolf-albums/wolf-albums.zip',
		),

		array(
			'name'    => 'Wolf Twitter',
			'slug'   => 'wolf-twitter',
			'source'   => 'http://plugins.wolfthemes.com/wolf-twitter/wolf-twitter.zip',
			'required' => false,
			'version' => '',
			'force_activation' => false,
			'force_deactivation' => false,
			'external_url' => 'http://plugins.wolfthemes.com/wolf-twitter/wolf-twitter.zip',
		),

		array(
			'name' 		=> esc_html__( 'One Click Demo Import', 'tattoopro' ),
			'slug' 		=> 'one-click-demo-import',
		),

		array(
			'name' 		=> 'Contact Form 7',
			'slug' 		=> 'contact-form-7',
			'required' 	=> false,
		),

		array(
			'name'    => esc_html__( 'Envato Market Items Updater', 'tattoopro' ),
			'slug'   => 'envato-market',
			'source'   => 'https://envato.github.io/wp-envato-market/dist/envato-market.zip',
			'external_url' => 'https://envato.github.io/wp-envato-market/dist/envato-market.zip',
		),
	);

	// Change this to your theme text domain, used for internationalising strings
	$theme_text_domain = 'wolf';

	/**
	 * Array of configuration settings. Amend each line as needed.
	 * If you want the default strings to be available under your own theme domain,
	 * leave the strings uncommented.
	 * Some of the strings are added into a sprintf, so see the comments at the
	 * end of each line for what each argument will be.
	 */
	$config = array(
		'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
		/*
		'strings'      => array(
			'page_title'                      => __( 'Install Required Plugins', 'theme-slug' ),
			'menu_title'                      => __( 'Install Plugins', 'theme-slug' ),
			// <snip>...</snip>
			'nag_type'                        => 'updated', // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
		)
		*/
	);

	tgmpa( $plugins, $config );
}