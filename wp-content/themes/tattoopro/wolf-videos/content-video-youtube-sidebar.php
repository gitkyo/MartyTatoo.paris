<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$post_id = get_the_ID();

$views = wolf_format_number( absint( get_post_meta( $post_id, '_wolf_views', true ) ) );
$likes =wolf_format_number( absint( get_post_meta( $post_id, '_wolf_likes', true ) ) );
$thumb_size = wolf_get_image_size( 'classic-thumb' );
?>
<article <?php post_class( 'clearfix' ); ?>   id="post-<?php echo the_ID(); ?>" data-post-id="<?php echo the_ID(); ?>">
	<span class="video-thumbnail">
		<a class="entry-link" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail( $thumb_size ); ?></a>
	</span>
	<span class="video-title">
		<a class="entry-link" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
	</span>
	<?php if ( wolf_get_theme_option( 'video_author' ) ) : ?>
		<span class="video-author-name">
			<a class="author-link" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
				<?php printf( __( 'from %s', 'tattoopro' ), wolf_the_author( false ) ); ?>
			</a>
		</span>
	<?php endif; ?>
	<?php if ( wolf_get_theme_option( 'video_views' ) ) : ?>
		<span class="item-views-count"><?php printf( _n( '1 view', '%s views', $views, 'tattoopro' ), $views ); ?></span>
	<?php endif; ?>
</article>

