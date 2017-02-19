<?php $themefolder=get_stylesheet_directory_uri(); ?> 
 <div class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="footer-logo">
                            <a href="<?php bloginfo('url');?>">
                                <img src="<?php echo $themefolder;?>/images/logo.png" alt="">
                            </a>
                        </div>
                    </div> <!-- /.col-md-4 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="copyright">
                            <span><?php echo get_theme_mod('copyright'); ?></span>
                        </div>
                    </div> <!-- /.col-md-4 -->
                    <div class="col-md-4 col-sm-4">
                        <ul class="social-icons">
                            <li><a href="<?php echo get_theme_mod('social_fb'); ?>" class="fa fa-facebook"></a></li>
                            <li><a href="<?php echo get_theme_mod('social_tw'); ?>" class="fa fa-twitter"></a></li>
                            <li><a href="<?php echo get_theme_mod('social_gp'); ?>" class="fa fa-google-plus"></a></li>
                            <li><a href="<?php echo get_theme_mod('rss_url'); ?>" class="fa fa-rss"></a></li>
                        </ul>
                    </div> <!-- /.col-md-4 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.site-footer -->

        <script src="<?php echo $themefolder;?>/js/vendor/jquery-1.11.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
        <script src="<?php echo $themefolder;?>/js/bootstrap.js"></script>
        <script src="<?php echo $themefolder;?>/js/plugins.js"></script>
        <script src="<?php echo $themefolder;?>/js/main.js"></script>
          
    </body>
</html>