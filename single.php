<?php
/**
 * The template for displaying Single Post
 *
 */
?>
<?php get_header() ?>


	<div class="middle-content">
        <div class="container">
			<div class="row">
		
			<?php if(is_active_sidebar('sidebar')):?>
				<div class="col-md-9">
			<?php else:?>
				<div class="col-md-12">
			<?php endif;?>
			
				<?php if ( have_posts() ) : ?>
					<div class="widget-item single">
						<h3 class="widget-title"><span><?php the_title();?></span><div class="post-date"><span><?php echo get_the_date( 'd M' );?></span><span> <?php echo get_the_date( 'Y' );?></span></div></h3>
						
					
						<?php while ( have_posts() ) : the_post(); ?>
							<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
								<div class="sample-thumb">
									<?php the_post_thumbnail(); ?>
								</div>
							<?php endif; ?>

							<?php the_content(); ?>
						
						<?php endwhile; ?>
			
					</div>
				<?php else : ?>
					<p><?php _e( 'Apologies, but no results were found. Perhaps searching will help find a related post.', 'trinity' ); ?></p>
					<?php get_search_form(); ?>
				<?php endif; ?>
					
				</div>
				<?php  get_sidebar(); ?>
			</div>
				
		</div>
		
	</div><!-- #content	-->
	
<?php get_footer() ?>