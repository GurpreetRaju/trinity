<?php
/**
 * The template for displaying the header
 *
 * @package Trinity
 * @since Trinity 1.0
 */

 ?>
 <?php $themefolder=get_stylesheet_directory_uri(); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <title><?php bloginfo( 'name' ); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700,600,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo $themefolder;?>/style.css">

        <script src="<?php echo $themefolder;?>/js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
    </head>
    <body>

        <div class="site-header">
            <div class="container">
                <div class="main-header">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-10">
                            <div class="logo">
                                <a href="<?php bloginfo('url');?>">
                                    <img src="<?php echo get_theme_mod('header_logo'); ?>" alt="travel html5 template" title="travel html5 template">
                                </a>
                            </div> <!-- /.logo -->
                        </div> <!-- /.col-md-4 -->
                        <div class="col-md-8 col-sm-6 col-xs-2">
                            <div class="main-menu">
                               
                                <?php wp_nav_menu(array('theme_location' => 'primary','menu_class' => 'visible-lg visible-md' )); ?>
                               
								<a href="#" class="toggle-menu visible-sm visible-xs">
                                    <i class="fa fa-bars"></i>
                                </a>
                            </div> <!-- /.main-menu -->
                        </div> <!-- /.col-md-8 -->
                    </div> <!-- /.row -->
                </div> <!-- /.main-header -->
                <div class="row">
                    <div class="col-md-12 visible-sm visible-xs">
                        <div class="menu-responsive">
                             <?php wp_nav_menu(array('theme_location' => 'primary' )); ?>
                        </div> <!-- /.menu-responsive -->
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.site-header -->
		
		<div class="page-top" id="top-img" style="Background-image: url(<?php echo get_theme_mod('header_banner'); ?>)">
        </div> <!-- /.page-header -->