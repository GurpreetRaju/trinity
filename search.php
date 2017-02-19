<?php
/**
 * The template for displaying Search results
 *
 */

get_header(); ?>

<div class="middle-content">
    <div class="container">

	<!-- posts list -->
	<div class="row">
		<h3 class="widget-title"><?php printf( __( 'Search Results for: %s', 'pixel-logic' ), '<span>' . get_search_query() . '</span>' ); ?></h3>
	</div>
	<div class="row">
		
	<?php if(is_active_sidebar('sidebar')):?>
		<div class="col-md-9">
	<?php else:?>
		<div class="col-md-12">
	<?php endif;?>
			
			<?php if ( have_posts() ) : ?>
			<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();
					get_template_part( 'content');
				endwhile;
			?>
			<?php trinity_paging_nav(); ?>

			<?php else : ?>
				<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'trinity' ); ?></p>
				<?php get_search_form(); ?>
			<?php endif; ?>
		</div>
		<?php  get_sidebar() ?>	
			
	</div>
			
	</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>