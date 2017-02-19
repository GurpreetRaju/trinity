<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * 
 * @package Trinity
 * @since Trinity 1.0
 */

get_header(); ?>

        <div class="middle-content">
            <div class="container">
				<div class="row">
				
					<?php if(is_active_sidebar('sidebar')):?>
						<div class="col-md-9">
					<?php else:?>
						<div class="col-md-12">
					<?php endif;?>
                
					<?php if ( have_posts() ) : ?>

						<?php if ( is_home() && ! is_front_page() ) : ?>
							<h3 class="widget-title"><?php single_post_title(); ?></h3>
						<?php endif; ?>

							<?php
							// Start the loop.
								while ( have_posts() ) : the_post();
	
									get_template_part( 'content', get_post_format() );

							// End the loop.
								endwhile;

							// Previous/next page navigation.
							trinity_paging_nav();

							// If no content, include the "No posts found" template.
					else :
						get_template_part( 'content', 'none' );

					endif;
					?>
				   
					</div>
					<?php get_sidebar();?>
				</div>
			</div> <!-- /.container -->
        </div> <!-- /.middle-content -->


<?php get_footer(); ?>
