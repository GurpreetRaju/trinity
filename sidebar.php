<?php
/**
 * The sidebar containing the sidebar widget area
 *
 * If no active widgets in this sidebar, hide it completely.
 *
 */

if ( is_active_sidebar( 'sidebar' ) ) : ?>
	<div id="sidebar" class="col-md-3" role="complementary">
		<ul>
			<?php dynamic_sidebar( 'sidebar' ); ?>
		</ul><!-- .widget-area -->
	</div><!-- #secondary -->
<?php endif; ?>