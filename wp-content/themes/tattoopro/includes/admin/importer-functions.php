<?php
/**
 * TattoPro admin import functions functions
 *
 * @link https://wordpress.org/plugins/one-click-demo-import/
 *
 * @package WordPress
 * @subpackage TattoPro
 * @version 1.8.7
 */

/**
 * Disable OCDI PT branding
 *
 * @param bool
 * @return bool
 */
function wolf_disable_ocdi_pt_branding( $bool ) {
	return true;
}
add_filter( 'pt-ocdi/disable_pt_branding', 'wolf_disable_ocdi_pt_branding' );

/**
 * Set menu location after demo import
 *
 * @param array $menu_name
 */
function wolf_set_menu_locations( $menus = array() ) {

	$menu_to_insert = array();

	foreach ( $menus as $location => $name ) {
		$menu = get_term_by( 'name', $name, 'nav_menu' );

		if ( $menu ) {
			$menu_to_insert[ $location ] = $menu->term_id;
		}
	}

	set_theme_mod( 'nav_menu_locations', $menu_to_insert );
}

/**
 * Set permalinks after import
 */
function wolf_set_permalinks_after_import() {

	// Set pretty permalinks if they're not set yet
	if ( ! get_option( 'permalink_structure' ) ) {
		update_option( 'permalink_structure', '/%year%/%monthnum%/%postname%/' );
	}
}
add_action( 'pt-ocdi/after_import', 'wolf_set_permalinks_after_import' );

/**
 * Set pages after import
 *
 * Assign each possible page from plugin (Home and Blog pages, Wolf plugins pages, WooCommerce pages etc...)
 */
function wolf_set_pages_after_import() {

	// Assign front page and posts page (blog page).
	$front_page = get_page_by_title( 'Home' );
	$blog_page  = get_page_by_title( 'Blog' );

	update_option( 'show_on_front', 'page' );
	
	if ( $front_page ) {
		update_option( 'page_on_front', $front_page->ID );
	}
	
	if ( $blog_page ) {
		update_option( 'page_for_posts', $blog_page->ID );
	}

	// Assign plugins pages
	$wolf_pages = array(
		'Portfolio', 'Albums', 'Videos', 'Discography', 'Events', 'Wishlist',
	);

	foreach ( $wolf_pages as $page_title ) {

		$page = get_page_by_title( $page_title );

		if ( $page ) {
			update_option( '_wolf_' . strtolower( $page_title ) . '_page_id', $page->ID );
		}
	}

	// Assign WooCommerce pages
	$woocommerce_pages = array(
		'Shop', 'Cart', 'Checkout', 'My Account'
	);

	foreach ( $woocommerce_pages as $page_title ) {

		$page = get_page_by_title( $page_title );
		
		if ( 'My Account' == $page_title ) {
			
			$page_slug = 'myaccount';
		} else {
			$page_slug = strtolower( $page_title );
		}

		if ( $page ) {
			update_option( '_woocommerce_' . $page_slug . '_page_id', $page->ID );
		}
	}
}
add_action( 'pt-ocdi/after_import', 'wolf_set_pages_after_import' );

/**
 * Demo importer Intro text
 *
 * @param string $default_text
 * @return string
 */
function wolf_plugin_intro_text( $default_text ) {
	
	ob_start();
	?>
	<div class="wolftheme-ocdi-intro-text">

		<h1><?php esc_html_e( 'Install demo content', 'tattoopro' ); ?></h1>

		<p class="about-description">
			<?php esc_html_e( 'Importing demo data is the easiest way to setup your theme. It will allow you to quickly edit everything instead of creating content from scratch.', 'tattoopro' ); ?>
		</p>

		<hr>

		<p><?php esc_html_e( 'When you import the data, the following things might happen', 'tattoopro' ); ?>:</p>

		<ul>
			<li><?php esc_html_e( 'No existing posts, pages, categories, images, custom post types or any other data will be deleted or modified.', 'tattoopro' ); ?></li>
			<li><?php esc_html_e( 'Posts, pages, images, widgets, menus and other theme settings will get imported.', 'tattoopro' ); ?></li>
			<li><?php esc_html_e( 'Images will be downloaded from our server.', 'tattoopro' ); ?></li>
			<li><?php esc_html_e( 'Please click on the "Import" button only once and wait, it can take a few minutes.', 'tattoopro' ); ?></li>
		</ul>

		<div class="wolftheme-ocdi-notice">
			<h4><?php esc_html_e( 'Important', 'tattoopro' ); ?></h4>

			<ul>
				<li>
					<?php
					printf(
						__( 'Before you begin, make sure that your server settings fulfill the <a href="%s">server requirements</a>.', 'tattoopro' ),
						admin_url( 'themes.php?page=wolftheme-theme-about' )
					);
				?>
				</li>
				<li><?php printf( esc_html__( 'Make sure all the required plugins are activated.', 'tattoopro' ), '' ); ?></li>
				<li><?php esc_html_e( 'Deactivate all 3rd party plugins except the one recommended by the theme.', 'tattoopro' ); ?></li>
				<li><?php esc_html_e( 'It is recommended to delete all pages that may have been created by plugins and empty the trash to avoid duplicate content.', 'tattoopro' ); ?></li>
				<li><?php esc_html_e( 'It is always recommended to run the import on a fresh WordPress installation.', 'tattoopro' ); ?></li>
				<li><?php esc_html_e( 'Some of the images may be replaced by placeholder images if they are copyrighted material.', 'tattoopro' ); ?></li>
				<li><?php esc_html_e( 'As custom scripts may be used on the demo website to showcase layout variation options, some layout example pages may show the default customizer settings.', 'tattoopro' ); ?></li>
				<li><?php
					printf(
						__( 'In the case of import failure, we recommend resetting your install before try it again using <a href="%s" target="_blank">WordPress Reset</a> plugin.', 'tattoopro' ),
						'https://wordpress.org/plugins/wordpress-reset/'
					);
				?></li>
			</ul>
		</div><!-- .wolftheme-ocdi-notice -->
		<hr>
	</div><!-- .wolftheme-ocdi-intro-text -->
	<?php
	return ob_get_clean();
}
add_filter( 'pt-ocdi/plugin_intro_text', 'wolf_plugin_intro_text' );

/**
 * Replace hard coded URLs from demo data to local URL
 */
function wolf_replace_menu_item_custom_urls_after_import() {

	// update hard coded links in menu items
	$main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
	$demo_url_reg_ex = '/(http|https)?:\/\/([a-z0-9.]+)\wolfthemes.com/';

	if ( $main_menu ) {
		
		$nav_items = wp_get_nav_menu_items( $main_menu->term_id );

		foreach ( $nav_items as $nav_item ) {
			
			if ( 'custom' == $nav_item->type ) {

				$nav_item_url = $nav_item->url;

				// if hard coded URL
				if ( preg_match( $demo_url_reg_ex, $nav_item_url, $matches ) ) {

					if ( isset( $matches[0] ) ) {
						$wolf_root_url = $matches[0];

						$site_url = home_url( '/' ); // current site url
						$url_array = explode( '/', $nav_item_url );

						if ( isset( $url_array[3] ) ) {
							$demo_slug = $url_array[3];

							$wolf_url = $wolf_root_url . '/' . $demo_slug . '/';
							$new_nav_item_url = str_replace( $wolf_url, $site_url, $nav_item_url );
							$menu_item_db_id = $nav_item->ID;
							update_post_meta( $menu_item_db_id, '_menu_item_url', esc_url_raw( $new_nav_item_url ) );
						}
					}
				}
			}
		}
	}
}
add_action( 'pt-ocdi/after_import', 'wolf_replace_menu_item_custom_urls_after_import' );