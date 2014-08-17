<?php
/**
 * The sidebar containing the main widget area
 *
 * If no active widgets are in the sidebar, hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<div id="secondary" class="widget-area" role="complementary">
			<?php if ( get_header_image() ) : ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
			<?php endif; ?>
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
			<?php $posts = get_posts('category=featured-magazine&numberposts=1'); foreach($posts as $post) { ?>
				<h2><?php the_title(); ?></h2><br />
				<a href="http://cabinetmakerfdm.com/" target="_blank"><?php the_post_thumbnail( 'medium' ); ?></a>
			<?php } ?>
		</div><!-- #secondary -->
	<?php endif; ?>