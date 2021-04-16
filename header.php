<!DOCTYPE>
<html>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <link href="<?php bloginfo('template_url');?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php bloginfo('template_url');?>/assets/css/fonts.min.css" rel="stylesheet" type="text/css" />
        
        <?php wp_head();?>
    </head>

    <body <?php body_class();?> >
        <header>
            <?php
            /*wp_nav_menu(
                array(
                    'theme_location'=>'top-menu',
                    'menu_class'=>'navigation',
                )
            );*/
            ?>  
            <div class="nav-header"><!-- Start navbar -->
                <nav id="navbar" class="navbar navbar-inverse">
                    <div class="navbar-header">                        
                        <div class="home-icon-nav">
                            <a href="#"><img src="<?php bloginfo('template_url');?>/assets/images/home-icon.png">
                            Home</a>
                        </div>
                        <button type="button" id="navtoggle1" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>                            
                    </div>
                    <div class="main-header">
                        <div class="home-icon">
                            <a href="#"><img src="<?php bloginfo('template_url');?>/assets/images/home-icon.png">
                            Home</a>
                        </div>
                        <div class="buy-now">
                            <a href="#"><img src="<?php bloginfo('template_url');?>/assets/images/buynow.png"></a>
                        </div>
                        <div class="forum-icon">
                            <a href="#"><img src="<?php bloginfo('template_url');?>/assets/images/forum-icon.png">
                            Forums</a>
                        </div>
                        <!--<div id="main-menu" class="collapse navbar-collapse">                       
                            <ul class="nav navbar-nav" id="navbar-nav">
                                <li class="listbtn"><span class="txt">Existing user?</span><a href="#">SIGN IN</a></li>
                                <li class="listbtn"><span class="txt">New here?</span><a href="#">SIGN UP</a></li>
                            </ul>
                        </div>-->
                    </div>                    
                </nav>
            </div><!-- End navbar -->              

        </header>