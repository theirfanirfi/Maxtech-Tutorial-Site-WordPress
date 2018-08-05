<?php //wp_head(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>MAXTECH LIBS</title>

    <!-- Css Files -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/flaticon.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/slick-slider.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/fancybox.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/color.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/responsive.css" rel="stylesheet">
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	
    <!--// Main Wrapper \\-->
    <div class="education-main-wrapper">

        <!--// Header \\-->
        <header id="education-header" class="education-header-one">
            
            <!--// TopStrip \\-->
            <div class="education-top-strip education-bgcolor">
                <div class="container">
                    <div class="row">
                        <aside class="col-md-6">
                            <ul class="education-userinfo">
                                <li><i class="fa fa-clock-o"></i> 08:00 am - 06:00 pm</li>
                                <li><i class="fa fa-phone"></i> +123 456 789</li>
                            </ul>
                        </aside>
                        <aside class="col-md-6">
                            <ul class="education-user-section">
                                <li>
                                    <div class="education-language">
                                        <ul>
                                            <li> <a href="#"><i class="fa fa-globe"></i> English</a>
                                                <ul class="education-language-menu">
                                                    <li><a href="#">English</a></li>
                                                    <li><a href="#">Arabic</a></li>
                                                    <li><a href="#">Farsi</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li> <a href="#" data-toggle="modal" data-target="#loginModal"><i class="fa fa-user"></i> Login</a></li>
                                <li> <a href="#" data-toggle="modal" data-target="#signupModal"><i class="fa fa-sign-in"></i> Sign Up</a></li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
            <!--// TopStrip \\-->

           <div class="education-main-header">
                <div class="container">
                    <div class="row">
                        <aside class="col-md-5">
                            <nav class="navbar navbar-default">
                                <div class="navbar-header">
                                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="true">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                  </button>
                                </div>
                             
                             
<?php wp_nav_menu(array('menu' => 'MyMenu',
    
                        'container' => 'div',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id' => 'navbar-collapse-1',
                        'menu_class' => 'nav navbar-nav'
                       
                       )); ?>
                               
                             
                                  
                                    
                                
                            </nav>
                        </aside>
                        <aside class="col-md-2"><a href="index.html" class="education-logo"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt=""></a></aside>
                        
                         <aside class="col-md-5">
                            <nav class="navbar navbar-default">
                                <div class="navbar-header">
                                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="true">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                  </button>
                                </div>
                             
                             
<?php wp_nav_menu(array('menu' => 'MySecondMenu',
    
                        'container' => 'div',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id' => 'navbar-collapse-1',
                        'menu_class' => 'nav navbar-nav'
                       
                       )); ?>
                               
                             
                                  
                                    
                                
                            </nav>
                        </aside>
           
                    </div>
                </div>
            </div>
            <!--// MainHeader \\-->


        </header>
        <!--// Header \\-->
