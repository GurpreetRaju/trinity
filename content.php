<?php
/**
 * The default template for displaying content
 *
 */
?>

	<div class="blog-post row" id="post-<?php the_ID(); ?>">
		<div class="col-md-12"><!-- first column -->
            <div class="widget-item">
                <h4 class="consult-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				<div class="row">
					<div class="col-md-3">
						<div class="sample-thumb">
							<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
								<a href="<?php the_permalink(); ?>" class="post-thumbnail"><?php the_post_thumbnail(); ?></a>
							<?php else:?>
								<a href="<?php the_permalink(); ?>" class="post-thumbnail"><img src="<?php echo get_stylesheet_directory_uri();?>/images/thumbnail-default.jpg" alt="default thumbnails"/></a>
							<?php endif; ?>
						</div>
					</div>
					<div class="col-md-9">
						<div class="post-date"><span><?php echo get_the_date( 'd M' );?></span><span><?php echo get_the_date( 'Y' );?></span></div>
						<p>
							<?php the_excerpt(); ?>
							<a id="read-more" href="<?php the_permalink(); ?>">Read More <span></span></a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
