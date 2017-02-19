<?php 
/*
* The template for displaying 404 pages (Not Found)
* @package Trinity
* @since Trinity 1.0
*/
?>

<?php get_header();?>

	<div class="middle-content">
        <div class="container">
			<div class="row">
		
			<?php if(is_active_sidebar('sidebar')):?>
				<div class="col-md-9">
			<?php else:?>
				<div class="col-md-12">
			<?php endif;?>
					<h3 class="widget-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentyfifteen' ); ?></h3>
					
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentyfifteen' ); ?></p>
					<?php get_search_form(); ?>

				</div>
				<?php get_sidebar('sidebar');?>
			</div>
		</div>
	</div>

<?php get_footer();?>