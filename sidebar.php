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

			<?php $my_query = new WP_Query( 'category_name=featured-magazine&posts_per_page=1' );
			while ( $my_query->have_posts() ) : $my_query->the_post();
			$do_not_duplicate = $post->ID; ?>
				<h2><?php the_title(); ?></h2><br />
				<a href="http://cabinetmakerfdm.com/" target="_blank"><?php the_post_thumbnail( 'medium' ); ?></a>
			<?php endwhile; ?>

		</div><!-- #secondary -->
	<?php endif; ?>

	<?php /*

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php  $posts = get_posts('category=featured-magazine&numberposts=1'); 
				foreach($posts as $post) { ?>
					<h2><?php the_title(); ?></h2><br />
					<a href="http://cabinetmakerfdm.com/" target="_blank"><?php the_post_thumbnail( 'medium' ); ?></a>
				<?php }?>

			<?php endwhile; else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
			*/