<?php
/**
 * The template for displaying Archive pages
 *
 */

get_header(); ?>

<div class="middle-content">
    <div class="container">

	<!-- posts list -->
	<div class="row">
		<h3 class="widget-title"><?php 
					if ( is_day() ) :
						printf( __( 'Daily Archives: %s', 'twentytwelve' ), '<span>' . get_the_date() . '</span>' );
					elseif ( is_month() ) :
						printf( __( 'Monthly Archives: %s', 'twentytwelve' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'twentytwelve' ) ) . '</span>' );
					elseif ( is_year() ) :
						printf( __( 'Yearly Archives: %s', 'twentytwelve' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'twentytwelve' ) ) . '</span>' );
					else :
						_e( 'Archives', 'twentytwelve' );
					endif;
				?></h3>
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
				<p><?php _e( 'Apologies, but no results were found. Perhaps searching will help find a related post.', 'pixel-logic' ); ?></p>
				<?php get_search_form(); ?>
			<?php endif; ?>
		</div>
		<?php  get_sidebar() ?>	
			
	</div>
			
	</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>