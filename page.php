<?php
/**
 * The template for displaying page content
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

					<div class="widget-item single">
						<h3 class="widget-title"><?php the_title();?></h3>
					
						<?php while ( have_posts() ) : the_post(); ?>
							<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
								<div class="sample-thumb">
									<a href="<?php the_permalink(); ?>" class="post-thumbnail"><?php the_post_thumbnail(); ?></a>
								</div>
							<?php endif; ?>

							<?php the_content(); ?>				
						
						<?php endwhile; ?>
			
					</div>
				</div>
				<?php  get_sidebar(); ?>
			</div>
				
		</div>
		
	</div><!-- #content	-->
	
<?php get_footer() ?>