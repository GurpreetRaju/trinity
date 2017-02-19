<?php
/*  Default Header Menu Register  */
register_nav_menu( 'primary','Default Header Menu');
add_theme_support( 'post-thumbnails' ); 
add_theme_support( 'html5', array( 'search-form' ) );

/* Pagination */
function trinity_paging_nav() {
	global $wp_query;

	// Don't print empty markup if there's only one page.
	if ( $wp_query->max_num_pages < 2 )
		return;
	?>
	<nav class="pagination col-md-12" role="navigation">
		<?php
		echo paginate_links( array(
						'base'         => @add_query_arg('paged','%#%'),
						'format'       => '%#%',
						'total'        => $wp_query->max_num_pages,
						'current'      => max( 1, get_query_var('paged') ),
						'show_all'     => False,
						'end_size'     => 1,
						'mid_size'     => 2,
						'prev_next'    => True,
						'prev_text'    => __('« Previous'),
						'next_text'    => __('Next »'),
						'type'         => 'plain',
						'add_args'     => False,
						'add_fragment' => '',
						'before_page_number' => '<span class="button">',
						'after_page_number' => '</span>'
						)
					);
		?>
	</nav><!-- .navigation -->
	<?php
}
function trinity_widgets_init(){
register_sidebar(array(
	'name'          => __( 'Sidebar', 'trinity' ),
	'id'            => 'sidebar',
	'description'   => 'Sidebar Widgets Area',
        'class'         => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' )); 
}
add_action( 'widgets_init', 'trinity_widgets_init' );


/* Adding theme options */
function trinity_customizer($wp_customize){
	$wp_customize->add_section('trinity_header',array(
		'title' => __('Header','trinity'),
		'description' => 'Customize Header of theme'
	));
	$wp_customize->add_setting('header_logo',array(
		'default' => get_template_directory_uri().'/images/logo.png'
	));
	$wp_customize->add_setting('header_banner',array(
		'default' => get_template_directory_uri().'/images/banner.jpg'
	));
	
	$wp_customize->add_control(new WP_Customize_Image_control($wp_customize,'header_logo',array(
		'label' => __('Change Logo Image','trinity'),
		'section' => 'trinity_header',
		'settings' => 'header_logo'
	)));
	$wp_customize->add_control(new WP_Customize_Image_control($wp_customize,'header_banner',array(
		'label' => __('Change Header Background Image','trinity'),
		'section' => 'trinity_header',
		'settings' => 'header_banner'
	)));
	
	/*   Footer Section    */
	$wp_customize->add_section('trinity_footer',array(
		'title' => __('Footer','trinity'),
		'description' => 'Customize Footer of theme'
	));
	
	$wp_customize->add_setting('copyright',array(
		'default' => 'Copyright 2015 Website'
	));
	$wp_customize->add_setting('social_fb',array(
		'default' => 'http://www.facebook.com'
	));
	$wp_customize->add_setting('social_gp',array(
		'default' => 'http://plus.google.com'
	));
	$wp_customize->add_setting('social_tw',array(
		'default' => 'http://www.twitter.com'
	));
	$wp_customize->add_setting('social_rss',array(
		'default' => get_bloginfo('rss_url')
	));
	$wp_customize->add_control('copyright',array(
		'label' => __('Change Copyright Text','trinity'),
		'section' => 'trinity_footer',
		'settings' => 'copyright'
	));
	$wp_customize->add_control('social_fb',array(
		'label' => __('Change Facebook link','trinity'),
		'section' => 'trinity_footer',
		'settings' => 'social_fb'
	));
	$wp_customize->add_control('social_gp',array(
		'label' => __('Change Google Plus link','trinity'),
		'section' => 'trinity_footer',
		'settings' => 'social_gp'
	));
	$wp_customize->add_control('social_tw',array(
		'label' => __('Change Twitter link','trinity'),
		'section' => 'trinity_footer',
		'settings' => 'social_tw'
	));
	$wp_customize->add_control('social_rss',array(
		'label' => __('Change RSS feed link','trinity'),
		'section' => 'trinity_footer',
		'settings' => 'social_rss'
	));
}

add_action('customize_register','trinity_customizer');

?>
