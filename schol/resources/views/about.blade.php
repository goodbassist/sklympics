<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Basic -->
        <meta charset="utf-8">
        <title>SportsCup - Responsive, Bootstrap 3, HTML5 Soccer And Sports Template</title>
        <meta name="keywords" content="HTML5 Template" />
        <meta name="description" content="World Cup - Responsive HTML5 Template soccer and sports">
        <meta name="author" content="iwthemes.com">  

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Theme CSS -->
        <link href="css/style.css" rel="stylesheet" media="screen">
        <!-- Responsive CSS -->
        <link href="css/theme-responsive.css" rel="stylesheet" media="screen">
        <!-- Skins Theme -->
        <link href="#" rel="stylesheet" media="screen" class="skin">

        <!-- Favicons -->
        <link rel="shortcut icon" href="img/icons/favicon.ico">
        <link rel="apple-touch-icon" href="img/icons/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="img/icons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="img/icons/apple-touch-icon-114x114.png">  

        <!-- Head Libs -->
        <script src="js/modernizr.js"></script>

        <!--[if IE]>
            <link rel="stylesheet" href="css/ie/ie.css">
        <![endif]-->

        <!--[if lte IE 8]>
            <script src="js/responsive/html5shiv.js"></script>
            <script src="js/responsive/respond.js"></script>
        <![endif]-->

        <!-- Skins Changer-->
        <script type="text/javascript" src="jsapi.js"></script>
    </head>

    <body>
    
        <!-- layout-->
        <div id="layout">
            <!-- Header-->
            <header>
                <!-- End headerbox-->
                <div class="headerbox">
                    <div class="container">
                        <div class="row">
                            <!-- Logo-->
                            <div class="col-md-3 logo">
                                <a href="index-2.html" title="Return Home">                            
                                    <img src="img/logo.png" alt="Logo" class="logo_img">
                                </a>
                            </div>
                            <!-- End Logo-->

                            <!-- Adds Header-->
                            <div class="col-md-9 adds">
                                <a href="http://themeforest.net/user/iwthemes/portfolio?ref=iwthemes" target="_blank">
                                    <img src="img/adds/banner.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                            <!-- End Adds Header-->
                        </div>
                    </div>
                </div>
                <!-- End headerbox-->  

                <!-- mainmenu-->
                <nav class="mainmenu">
                    <div class="container">
                        <!-- Menu-->
                        @include('nav')
                        <!-- End Menu-->
                    </div>
                </nav>
                <!-- End mainmenu-->
            </header>
            <!-- End Header-->
            
            <!-- Section Title -->           
            <section class="section-title img-about">
                <div class="overlay-bg"></div>
                <div class="container">
                    <h1>About Us</h1>
                </div>
            </section>
            <!-- End Section Title --> 

            <!-- Section Area - Content Central -->
            <section class="content-info">

                <div class="crumbs">
                    <div class="container">
                        <ul>
                            <li><a href="index-2.html">Home</a></li>
                            <li>/</li>
                            <li>About Us</li>                                       
                        </ul>
                    </div>        
                </div>

                <div class="semiboxshadow text-center">
                    <img src="img/img-theme/shp.png" class="img-responsive" alt="">
                </div>

                <!-- Content Central -->
                <div class="container padding-top">
                    <div class="row">
                        
                        <!-- About Template-->
                        <div class="col-md-12">
                            <!-- Info -->
                            <div class="panel-box">
                                <div class="titles">
                                    <h4><i class="fa fa-rocket"></i>About Template</h4>
                                </div>
                                <!-- Info ABout --> 
                                <div class="row">
                                    <div class="col-md-4">
                                        <!-- Mini SLide --> 
                                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                          <ol class="carousel-indicators">
                                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                                          </ol>
                                          <div class="carousel-inner">
                                            <div class="item active">
                                              <img src="img/blog/1.jpg">
                                            </div>
                                            <div class="item">
                                              <img src="img/blog/2.jpg">
                                            </div>
                                            <div class="item">
                                              <img src="img/blog/3.jpg">
                                            </div>
                                          </div>
                                          <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left"></span>
                                          </a>
                                          <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right"></span>
                                          </a>
                                        </div>
                                        <!-- End Mini SLide --> 
                                    </div>
                                    <div class="col-md-8">
                                        <h4>Pellentesque habitantu vulputate</h4>
                                        <p>Pellentesque habitantu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>

                                        <p> Donec Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. </p>
                                    </div>
                                </div>
                                <!-- End Info ABout --> 
                            </div>  
                            <!-- End Info-->
                        </div>
                        <!-- End About Template-->
                        
                        <div class="col-md-6">
                            <!-- Info -->
                            <div class="panel-box">
                                <div class="titles">
                                    <h4><i class="fa fa-cogs"></i>Skins</h4>
                                </div>
                                <!-- Skins --> 
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="pro_bar">
                                            <h5 class="nocaps">Futbol Soccer</h5>
                                            <div id="progress_bar" class="ui-progress-bar ui-container">
                                                <div class="ui-progress">
                                                    <span class="ui-label"><b class="value">90%</b></span>
                                                </div>
                                            </div><!-- end section -->
                                            
                                            <br>
                                            
                                            <h5 class="nocaps">Bmx Sport</h5>
                                            <div id="progress_bar2" class="ui-progress-bar ui-container">
                                                <div class="ui-progress two">
                                                    <span class="ui-label"><b class="value">72%</b></span>
                                                </div>
                                            </div><!-- end section -->
                                            
                                            <br>
                                            
                                            <h5 class="nocaps">Motocross</h5>
                                            <div id="progress_bar3" class="ui-progress-bar ui-container">
                                                <div class="ui-progress three">
                                                    <span class="ui-label"><b class="value">80%</b></span>
                                                </div>
                                            </div><!-- end section -->
                                            
                                            <br>
                                            
                                            <h5 class="nocaps">Golfd</h5>
                                            <div id="progress_bar4" class="ui-progress-bar ui-container">
                                                <div class="ui-progress four">
                                                    <span class="ui-label"><b class="value">94%</b></span>
                                                </div>
                                            </div><!-- end section -->
                                        </div>
                                    </div>
                                </div>
                                <!-- End Skins --> 
                            </div>  
                            <!-- End Info-->
                        </div>

                        <!-- Accordion -->
                        <div class="col-md-6">
                            <!-- Info -->
                            <div class="panel-box">
                                <div class="titles">
                                    <h4><i class="fa fa-coffee"></i>Who we are</h4>
                                </div>
                                <!-- Skins --> 
                                <div class="row">
                                    <div class="accrodation">
                                        <!-- section 1 -->
                                        <span class="acc-trigger"><a href="#">Mision</a></span>
                                        <div class="acc-container" style="display: none;">
                                            <div class="content">
                                                Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                                            </div>
                                        </div>
                                      
                                        <!-- section 2 -->
                                        <span class="acc-trigger"><a href="#">Vision</a></span>
                                        <div class="acc-container" style="display: none;">
                                            <div class="content">
                                                Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                                            </div>
                                        </div>
                                   
                                        <!-- section 3 -->
                                        <span class="acc-trigger"><a href="#">What we offer?</a></span>
                                        <div class="acc-container" style="display: none;">
                                            <div class="content">
                                                Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                                            </div>
                                        </div>
                                        
                                        <!-- section 4 -->
                                        <span class="acc-trigger active"><a href="#">Our services</a></span>
                                        <div class="acc-container" style="display: block;">
                                            <div class="content">
                                                Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Skins --> 
                            </div>  
                            <!-- End Info-->
                        </div>
                        <!-- End Accordion -->

                        
                    </div>                     
                </div>  
                <!-- End Content Central -->
            </section>
            <!-- End Section Area - Content Central -->
      
            <!-- footer-->
            @include('foot')
            <!-- footer Down-->

        </div>
        <!-- End layout-->

        <!-- ======================= JQuery libs =========================== -->
        <!-- jQuery local--> 
        <script src="js/jquery.js"></script>                
        <!--Nav-->
        <script type="text/javascript" src="js/nav/tinynav.js"></script> 
        <script type="text/javascript" src="js/nav/hoverIntent.js"></script>   
        <script type="text/javascript" src="js/nav/superfish.js"></script> 
        <script src="js/nav/jquery.sticky.js" type="text/javascript"></script>    
        <!--Totop-->
        <script type="text/javascript" src="js/totop/jquery.ui.totop.js" ></script>  
         <!--Accorodion-->
        <script type="text/javascript" src="js/accordion/accordion.js" ></script>  
        <!--Slide-->
        <script type="text/javascript" src="js/slide/camera.js" ></script>      
        <script type='text/javascript' src='js/slide/jquery.easing.1.3.min.js'></script>   
        <!-- Maps -->
        <script src="js/maps/gmap3.js"></script>            
        <!--Ligbox--> 
        <script type="text/javascript" src="js/fancybox/jquery.fancybox.js"></script> 
        <!-- carousel.js-->
        <script src="js/carousel/carousel.js"></script>
        <!-- Filter -->
        <script src="js/filters/jquery.isotope.js" type="text/javascript"></script>
        <!-- Twitter Feed-->
        <script src="js/twitter/jquery.tweet.js"></script> 
        <!-- flickr Feed-->
        <script src="js/flickr/jflickrfeed.min.js"></script> 
        <!-- Counter -->
        <script src="js/counter/jquery.countdown.js"></script>      
        <!--Theme Options-->
        <script type="text/javascript" src="js/theme-options/theme-options.js"></script>
        <script type="text/javascript" src="js/theme-options/jquery.cookies.js"></script> 
        <!-- Bootstrap.js-->
        <script type="text/javascript" src="js/bootstrap/bootstrap.js"></script> 
        <!--MAIN FUNCTIONS-->
        <script type="text/javascript" src="js/main.js"></script>
        <!-- ======================= End JQuery libs =========================== -->
 
    </body>
</html>