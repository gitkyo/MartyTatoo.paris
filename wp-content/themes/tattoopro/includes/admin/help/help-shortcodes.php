<?php
$content = __( 'Content', 'tattoopro' );
?>
<div class="wrap">

	<h2><?php _e( 'Shortcodes', 'tattoopro' ); ?></h2>

	<p><em><?php _e( 'Arguments marked with * are mandatory', 'tattoopro' ); ?></em></p>

	<h3><?php _e( 'Notifications', 'tattoopro' ); ?></h3>
	<p><code>[wolf_alert_message type="success|error|info|alert" message="<?php echo esc_attr( $content ); ?>"]</code></p>
	<hr>

	<h3><?php _e( 'Button', 'tattoopro' ); ?></h3>
	<p><code>[wolf_theme_button text="<?php echo esc_attr( $content ); ?>" tagline="<?php echo esc_attr( $content ); ?>" url="#" target="_blank|_parent|_self" size="small|medium|large|very-large"]</code></p>
	<hr>

	<h3><?php _e( 'Clients Carousel', 'tattoopro' ); ?></h3>
	<p><code>[wolf_clients_carousel][wolf_clients_carousel_item image="attachment ID" url="#"][/wolf_clients_carousel]</code></p>
	<hr>

	<h3><?php _e( 'Count Down', 'tattoopro' ); ?></h3>
	<p><?php _e( 'The offset is the UTC time value (e.g: -5 for New York)', 'tattoopro' ); ?></p>
	<p><code>[wolf_countdown date="12/24/2020 12:00:00" offet="-1"]</code></p>
	<hr>

	<h3><?php _e( 'Counter', 'tattoopro' ); ?></h3>
	<p><code>[wolf_counter number="125" text="pizzas"]</code></p>
	<hr>

	<h3><?php _e( 'Dropcap', 'tattoopro' ); ?></h3>
	<p><code>[wolf_dropcap letter="F" font="Arial"]</code></p>
	<hr>

	<h3><?php _e( 'Headline', 'tattoopro' ); ?></h3>
	<p><code>[wolf_fittext max_font_size="48" font_family="Arial" letter_spacing="3" font_weight="700" font_style="normal|italic" text_transform="none|italic" color="#ffffff" text="<?php echo esc_attr( $content ); ?>"]</code></p>
	<hr>

	<h3><?php _e( 'Highlighted Text', 'tattoopro' ); ?></h3>
	<p><code>[wolf_highlight_text color="black|white|yellow|red|green"]<?php echo esc_attr( $content ); ?>[/wolf_highlight_text]</code></p>
	<hr>

	<h3><?php _e( 'Images Gallery', 'tattoopro' ); ?></h3>
	<p><code>[wolf_images_gallery ids="attachments IDs" layout="simple|mosaic" columns="3" link="media|attachment" padding="no|yes" size="classic-thumb|square|portrait"]</code></p>
	<hr>

	<h3><?php _e( 'Images Slider', 'tattoopro' ); ?></h3>
	<p><code>[wolf_images_slider ids="attachments IDs" layout="default|desktop|laptop|tablet" transition="auto|fade|slide" autoplay="true|false" pause_on_hover="true|false" slideshow_speed="4000"]</code></p>
	<hr>

	<h3><?php _e( 'Mailchimp Sign-up', 'tattoopro' ); ?></h3>
	<p><?php _e( 'Your mailchimp ID must be set in the theme settings.', 'tattoopro' ); ?></p>
	<p><code>[wolf_mailchimp list="list ID" size="normal|big" label="Newsletter" submit="<?php _e( 'Submit', 'tattoopro' ); ?>"]</code></p>
	<hr>

	<h3><?php _e( 'Social Icons', 'tattoopro' ); ?></h3>
	<p><?php _e( 'You must set your social profiles URL in the theme settings.', 'tattoopro' ); ?></p>
	<p><code>[wolf_theme_socials services="facebook,twitter" size="1x|2x|2x|4x" type="normal|circle|square" target="_blank|_parent|_self" hover_effect="normal|fill-in" margin="5px 5px 5px 5px"]</code></p>
	<hr>

	<h3><?php _e( 'Space', 'tattoopro' ); ?></h3>
	<p><code>[wolf_spacer height="100px"]</code></p>
	<hr>

	<h3><?php _e( 'Video Carousel', 'tattoopro' ); ?></h3>
	<p><code>[wolf_last_videos_carousel count="4" category="category,category"]</code></p>
	<hr>

	<h3><?php _e( 'Woocommerce Categories', 'tattoopro' ); ?></h3>
	<p><code>[wolf_woocommerce_categories layout="mosaic|portrait|landscape|classic-thumb" columns="3" padding="yes|no" exclude="category1,category2" include="category1,category2"]</code></p>
	<hr>

	<div class="clear"></div>
</div>
