<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Basic -->
        <base href="{{env('HOME_URL')}}"></base>
        <meta charset="utf-8">
        <title>::Skoolympics</title>
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
        <!-- Theme-options -->
        
        <!-- End Theme-options -->      

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
                                <a href="#" title="Return Home">                            
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
            
            <!-- Slide -->           
            <section class="camera_wrap camera_white_skin" id="slide">
                <!-- Item Slide - Caption --> 
                <div  data-src="img/slide/slides/1.jpg">
                    <div class="style-caption fadeFromTop">
                        <div class="overlay-bg"></div>
                         <div class="container"> 
                            <div class="row">
                                <div class="col-md-7">
                                    <h1 class="animated fadeInRight">
                                        Welcome to Skoolympics
                                    </h1>   
                                    <p class="animated fadeInRight delay1">Securing your tomorrow now</p> 
                                    <div class="more animated fadeInRight delay2">
                                        <a href="#" class="btn btn-primary" name="subscribe" >More Info</a>
                                    </div>
                                </div>    
                            </div>                     
                        </div>      
                    </div>
                </div>
                <!-- End Item Slide - Caption  -->

                <!-- Item Slide - Caption --> 
                <div  data-src="img/slide/slides/2.jpg">
                    <div class="style-caption fadeFromTop">
                        <div class="overlay-bg"></div>
                         <div class="container"> 
                            <div class="row">
                                <div class="col-md-7">
                                    <h1 class="animated fadeInRight">
                                     Physical Abilities and Education  
                                    </h1>   
                                    <p class="animated fadeInRight delay1">No Limitations... The Future Begins Here</p> 
                                    <div class="more animated fadeInRight delay2">
                                        <a href="#" class="btn btn-primary" name="subscribe" >More Info</a>
                                    </div>
                                </div>    
                            </div>                     
                        </div>      
                    </div>
                </div>
                <!-- End Item Slide - Caption  -->

                <!-- Item Slide - Caption --> 
                <div  data-src="img/slide/slides/3.jpg">
                    <div class="style-caption fadeFromTop">
                        <div class="overlay-bg"></div>
                         <div class="container"> 
                            <div class="row">
                                <div class="col-md-7">
                                    <h1 class="animated fadeInRight">
                                        Train hard, win easy
                                    </h1>   
                                    <p class="animated fadeInRight delay1"> Practice with a purpose, play with a passion</p> 
                                    <div class="more animated fadeInRight delay2">
                                        <a href="#" class="btn btn-primary" name="subscribe" >More Info</a>
                                    </div>
                                </div>    
                            </div>                     
                        </div>      
                    </div>
                </div>
                <!-- End Item Slide - Caption  -->  
            </section>   
            <!-- End Slide --> 

            <!-- Section Area - Content Central -->
            <section class="content-info">

                <div class="semiboxshadow text-center">
                    <img src="img/img-theme/shp.png" class="img-responsive" alt="">
                </div>
                
                <!-- Dark Home -->
                <div class="bg-dark dark-home">
                    <div class="row">
                        <!-- Left Content - Tabs and Carousel -->
                        <div class="col-md-9">
                            <!-- Nav Tabs -->
                            <ul class="nav nav-tabs" id="myTab">
                               <li class="active"><a href="#feature-news" data-toggle="tab">ATHLETES</a></li>
                              <!-- <li><a href="#players-staff" data-toggle="tab">PLAYERS AND STAFF</a></li>-->
                               <li><a href="#club-news" data-toggle="tab">SCHOOLS</a></li>
                            </ul>
                            <!-- End Nav Tabs -->

                            <!-- Content Tabs -->
                            <div class="tab-content">
                                <!-- Tab One - Feature News -->
                                <div class="tab-pane active" id="feature-news">
                                    <!-- blog post-->  
                                    <h3>Athletes</h3>
                                    <!-- Item Players-->  
                                    <ul id="players-carousel" class="players ">
                                        <!-- Item Player -->  
                                        <li class="item-player">
                                            <img src="img/players/1.png" alt="" class="img-responsive">
                                            <div class="info-player">
                                                <h4><a href="#">Nancy</a></h4>
                                                <h5><span>Scrabble</span></h5>
                                                <div class="overlay-player">
                                                    <p><p>Height: 4 FT 1 <br>
                                                       Age: 13 <br>
                                                       Gender : Female
                                                    </p></p>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- End Player post -->

                                        <!-- Item Player -->  
                                        @foreach($athletes as $athlete)
                                        <li class="item-player">
                                            <img src="athletes/{{$athlete->photo}}" alt="" style="height:225px; width:150px;" class="img-responsive">
                                            <div class="info-player">
                                                <h4><a href="#">{{$athlete->name}}</a></h4>
                                                <h5><span><?php
                                                $val = explode(',', $athlete->event);
                                                echo ($val[0]);
                                                ?></span></h5>
                                                <div class="overlay-player">
                                                    <p>Height: 4 FT 1 <br>
                                                       Age: 12 <br>
                                                       Gender : Male
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                        <!-- End Player post -->
                                    </ul>
                                    <!-- End Item Players-->  
                                    <!-- End blog post-->  
                                </div>

                                <!-- Tab One - Feature News -->

                                <!-- Tab Two - Players Staff 
                                <div class="tab-pane" id="players-staff">
                                    
                                </div>
                                Tab Two - Players Staff -->

                                <!-- Tab Theree - Club Teams -->
                                <div class="tab-pane" id="club-news">
                                    <h3>Schools</h3>
                                    <!-- Clubs Carousel-->  
                                    <ul id="clubs-carousel" class="clubs-teams">
                                        <!-- Item carousel club -->  
                                        <li class="row">
                                            <!-- Item clubs --> 
                                            <div class="col-sx-12 col-sm-6 col-md-6">
                                                <div class="item-clubs">
                                                    <div class="img-clubs">
                                                        <img src="img/clubs-team/1.png" alt="" class="img-responsive">
                                                    </div>
                                                    <div class="info-clubs">
                                                        <h4><a href="#">Grace Schools</a></h4>
                                                        <p>Gbagada, Lagos.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Item clubs --> 

                                            <!-- Item clubs --> 
                                            <div class="col-sx-12 col-sm-6 col-md-6">
                                                <div class="item-clubs">
                                                    <div class="img-clubs">
                                                        <img src="img/clubs-team/2.png" alt="" class="img-responsive">
                                                    </div>
                                                    <div class="info-clubs">
                                                        <h4><a href="#">Corona High School</a></h4>
                                                        <p>Lekki Ajah, Lagos</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Item clubs --> 

                                            <!-- Item clubs --> 
                                            <div class="col-sx-12 col-sm-6 col-md-6">
                                                <div class="item-clubs">
                                                    <div class="img-clubs">
                                                        <img src="img/clubs-team/3.png" alt="" class="img-responsive">
                                                    </div>
                                                    <div class="info-clubs">
                                                        <h4><a href="#">Baptist Academy</a></h4>
                                                        <p>Obanikioro, Lagos</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Item clubs --> 

                                            <!-- Item clubs --> 
                                            <div class="col-sx-12 col-sm-6 col-md-6">
                                                <div class="item-clubs">
                                                    <div class="img-clubs">
                                                        <img src="img/clubs-team/4.png" alt="" class="img-responsive">
                                                    </div>
                                                    <div class="info-clubs">
                                                        <h4><a href="#">Igbobi College</a></h4>
                                                        <p>Yaba, Lagos</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Item clubs --> 
                                        </li>
                                        <!-- End Item carousel club -->

                                        <!-- Item carousel club -->  
                                        <li class="row">
                                            <!-- Item clubs --> 
                                            <div class="col-sx-12 col-sm-6 col-md-6">
                                                <div class="item-clubs">
                                                    <div class="img-clubs">
                                                        <img src="img/clubs-team/5.png" alt="" class="img-responsive">
                                                    </div>
                                                    <div class="info-clubs">
                                                        <h4><a href="#">Caleb International School</a></h4>
                                                        <p>Lagos</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Item clubs --> 

                                            <!-- Item clubs --> 
                                            <div class="col-sx-12 col-sm-6 col-md-6">
                                                <div class="item-clubs">
                                                    <div class="img-clubs">
                                                        <img src="img/clubs-team/6.png" alt="" class="img-responsive">
                                                    </div>
                                                    <div class="info-clubs">
                                                        <h4><a href="#">Greenspring International School</a></h4>
                                                        <p>Lagos</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Item clubs --> 

                                            <!-- Item clubs --> 
                                            <div class="col-sx-12 col-sm-6 col-md-6">
                                                <div class="item-clubs">
                                                    <div class="img-clubs">
                                                        <img src="img/clubs-team/1.png" alt="" class="img-responsive">
                                                    </div>
                                                    <div class="info-clubs">
                                                        <h4><a href="#">Team 7</a></h4>
                                                        <p>Lorem ipsum dolor sit amet, coetur adipiscing elit.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Item clubs --> 

                                            <!-- Item clubs --> 
                                            <div class="col-sx-12 col-sm-6 col-md-6">
                                                <div class="item-clubs">
                                                    <div class="img-clubs">
                                                        <img src="img/clubs-team/4.png" alt="" class="img-responsive">
                                                    </div>
                                                    <div class="info-clubs">
                                                        <h4><a href="#">Team 8</a></h4>
                                                        <p>Lorem ipsum dolor sit amet, contur adipiscing elit.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Item clubs --> 
                                        </li>
                                        <!-- End Item carousel club -->
                                    </ul>
                                    <!-- End Clubs Carousel-->  
                                </div>
                                <!-- Tab Theree - Club Teams -->
                            </div>
                            <!-- Content Tabs -->
                        </div> 
                        <!-- Left Content - Tabs and Carousel -->    

                        <!-- Right Content - Content Counter -->
                        <div class="col-md-3">
                            <aside>
                                <div class="title-color text-center">
                                    <h4>Skoolympics Countdown</h4>
                                </div>

                                <div class="content-counter content-counter-home">
                                    <p class="text-center"> 
                                        <i class="fa fa-clock-o"></i> 
                                        Countdown Till Start
                                    </p>
                                    <div id="event-one" class="counter"></div>
                                    <ul class="post-options">
                                        <li><i class="fa fa-calendar"></i>October 27, 2016</li>
                                        <li><i class="fa fa-clock-o"></i>Kick-of, 12:00 PM</li> 
                                    </ul>
                                   <!-- <p>Ei eum affert postulant, ius te mazim zril alterum. Illum dolorem ius ut, eu postulant principes sit.  ert postulant, ius te mazim zril alterum Tibique scriptorem cu pri, te fugit voluptatum mel, nibh exerci denique at qui.</p>-->
                                    <a class="btn btn-primary" href="#">
                                        VIEW EVENT PAGE
                                        <i class="fa fa-trophy"></i>
                                    </a>
                                </div>
                            </aside>            
                            <!-- Content Counter -->
                        </div>
                        <!-- End Right Content - Content Counter -->
                    </div>
                </div>   
                <!-- Dark Home -->

                <!-- Content Central -->
                <div class="container padding-top">
                    <div class="row">
                        
                        <!-- content Column Left -->
                        <div class="col-xs-12 col-md-6 col-lg-7">                     
                            <!-- Recent Post -->
                            <div class="panel-box">
                            
                                <div class="titles">
                                    <h4>Recent News</h4>
                                </div>

                                <!-- Post Item -->
                                <div class="post-item">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="img-hover">
                                               <img src="img/blog/7.png" alt="" class="img-responsive">
                                               <div class="overlay"><a href="single-news.html">+</a></div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h4><a href="single-news.html">Skoolympics Kicks Off</a></h4>
                                            <p class="data-info">October 3, 2015  / <i class="fa fa-comments"></i><a href="#">0</a></p>
                                            <p>News News News News News News News News News News
                                                News News News News News News News News News... <a href="single-news.html">Read More [+]</a></p>                                            
                                        </div>
                                   </div>
                                </div>
                                 <!-- End Post Item -->

                                 <!-- Post Item -->
                                <div class="post-item">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="img-hover">
                                               <img src="img/blog/5.png" alt="" class="img-responsive">
                                               <div class="overlay"><a href="single-news.html">+</a></div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h4><a href="single-news.html">you Can Now Watch Skoolympics On SuperSport</a></h4>
                                            <p class="data-info">November 9, 2015  / <i class="fa fa-comments"></i><a href="#">5</a></p>
                                            <p>News News News News News News News News News News
                                                News News News News News News News News News... <a href="single-news.html">Read More [+]</a></p>                                            
                                        </div>
                                   </div>
                                </div>
                                 <!-- End Post Item -->

                                 <!-- Post Item -->
                                <div class="post-item">
                                    <div class="row">
                                        <div class="col-md-4">
                                          <div class="img-hover">
                                               <img src="img/blog/6.png" alt="" class="img-responsive">
                                               <div class="overlay"><a href="single-news.html">+</a></div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h4><a href="single-news.html">Skoolympics Cycling Prelimenary</a></h4>
                                            <p class="data-info">November  12, 2015  / <i class="fa fa-comments"></i><a href="#">3</a></p>
                                            <p>News News News News News News News News News News
                                                News News News News News News News News News... <a href="single-news.html">Read More [+]</a></p>                                            
                                        </div>
                                   </div>
                                </div>
                                 <!-- End Post Item -->

                                 <!-- Post Item -->
                                <div class="post-item">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="img-hover">
                                               <img src="img/blog/7.png" alt="" class="img-responsive">
                                               <div class="overlay"><a href="single-news.html">+</a></div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h4><a href="single-news.html">Skoolympics School Oreintation Progrommes Schedule</a></h4>
                                            <p class="data-info">Novermer 14, 2016  / <i class="fa fa-comments"></i><a href="#">2</a></p>
                                            <p>News News News News News News News News News News
                                                News News News News News News News News News... <a href="single-news.html">Read More [+]</a></p>                                            
                                        </div>
                                   </div>
                                </div>
                                 <!-- End Post Item -->
                            </div>  
                            <!-- End Recent Post --> 

                            <!-- Experts -->
                            <div class="panel-box">                            
                                <div class="titles">
                                    <h4>Sports Experts</h4>
                                </div>     

                                <div class="row">
                                    <div class="col-xs-6 col-sm-3 col-md-4 col-lg-3">
                                        <div class="box-info">
                                            <img src="img/experts/3.png" alt="" class="img-responsive">
                                            <h5 class="entry-title"><a href="#">Expert 1</a></h5>
                                            <!--<p class="date-box">Abril 15, 2014</p>-->
                                        </div>
                                    </div> 
                                    <div class="col-xs-6 col-sm-3 col-md-4 col-lg-3">
                                        <div class="box-info">
                                            <img src="img/experts/3.png" alt="" class="img-responsive">
                                            <h5 class="entry-title"><a href="#">Expert 2</a></h5>
                                           
                                        </div>
                                    </div> 
                                    <div class="col-xs-6 col-sm-3 col-md-4 col-lg-3">
                                        <div class="box-info">
                                            <img src="img/experts/3.png" alt="" class="img-responsive">
                                            <h5 class="entry-title"><a href="#">Expert 3</a></h5>
                                          
                                        </div>
                                    </div> 
                                    <div class="col-xs-6 col-sm-3 col-md-4 col-lg-3">
                                        <div class="box-info">
                                            <img src="img/experts/3.png" alt="" class="img-responsive">
                                            <h5 class="entry-title"><a href="#">Expert 4</a></h5>
                                          
                                        </div>
                                    </div> 
                                    <div class="col-xs-6 col-sm-3 col-md-4 col-lg-3">
                                        <div class="box-info">
                                            <img src="img/experts/3.png" alt="" class="img-responsive">
                                            <h5 class="entry-title"><a href="#">Expert 5</a></h5>
                                            
                                        </div>
                                    </div> 
                                    <div class="col-xs-6 col-sm-3 col-md-4 col-lg-3">
                                        <div class="box-info">
                                            <img src="img/experts/3.png" alt="" class="img-responsive">
                                            <h5 class="entry-title"><a href="#">Expert 6</a></h5>
                                           
                                        </div>
                                    </div> 
                                    <div class="col-xs-6 col-sm-3 col-md-4 col-lg-3">
                                        <div class="box-info">
                                            <img src="img/experts/3.png" alt="" class="img-responsive">
                                            <h5 class="entry-title"><a href="#">Expert 7</a></h5>
                                            
                                        </div>
                                    </div> 
                                    <div class="col-xs-6 col-sm-3 col-md-4 col-lg-3">
                                        <div class="box-info">
                                            <img src="img/experts/3.png" alt="" class="img-responsive">
                                            <h5 class="entry-title"><a href="#">Expert 8</a></h5>
                                           
                                        </div>
                                    </div> 

                                </div>                          
                            </div>  
                            <!-- End Experts -->  
                        </div>
                         <!-- End content Left -->

                        <!-- content Sidebar Center -->
                        <aside class="col-xs-6 col-sm-6 col-md-3 col-lg-3">                     
                            <!-- Locations -->
                            <div class="panel-box">
                            
                                <div class="titles">
                                    <h4>Locations</h4>
                                </div>
                                <!-- Locations Carousel --> 
                                <ul class="single-carousel">    
                                    <li>
                                        <img src="img/blog/8.png" alt="" class="img-responsive">
                                        <div class="info-single-carousel">
                                            <h4>Unilag Sport Center</h4>
                                            <p>Akoka, Lagos</p>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="img/blog/9.png" alt="" class="img-responsive">
                                        <div class="info-single-carousel">
                                            <h4>Teslim Balogun Stadium</h4>
                                            <p>Surulere, Lagos</p>
                                        </div>
                                    </li> 
                                    <li>
                                        <img src="img/blog/10.png" alt="" class="img-responsive">
                                        <div class="info-single-carousel">
                                            <h4>Yabatech Sport Center</h4>
                                            <p>Yaba, Lagos</p>
                                        </div>
                                    </li>                                    
                                </ul>
                                <!-- Locations Carousel -->                                
                            </div>  
                            <!-- End Locations --> 

                            <!-- Video presentation -->
                            <div class="panel-box">
                                <div class="titles">
                                    <h4>Presentation</h4>
                                </div>
                                <!-- Locations Video --> 
                                <div class="row">
                                    <img src="img/blog/7.png" alt="" class="img-responsive">
                                    <div class="col-md-12">
                                        <h4>Skoolympics 2016</h4>
                                        <p>Securing your tomorrow now</p>
                                    </div>
                                </div>
                                <!-- End Locations Video --> 
                            </div>  
                            <!-- End Video presentation-->

                            <!-- Widget Text-->
                            <div class="panel-box">
                                <div class="titles">
                                    <h4>Widget Text</h4>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, incididunt ut labore et dolore.</p>
                                    </div>
                                </div>
                            </div>  
                            <!-- End Widget Text-->
                        </aside>
                        <!-- End content Sidebar Center -->

                        <!-- content Sidebar Right -->
                        <aside class="col-xs-6 col-sm-6 col-md-3 col-lg-2">                     
                            <!-- Diary -->
                            <div class="panel-box">
                                <div class="titles">
                                    <h4><i class="fa fa-calendar"></i>Diary</h4>
                                </div>
                                <!-- List Diary --> 
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>Follow As Events Unfold</p>
                                        <ul class="list-diary">
                                            <!-- Item List Diary --> 
                                            <li>
                                                <h5>Scrabble <span>06-03-2016 - 11:00</span></h5>
                                                <ul class="club-logo">
                                                    <li>
                                                        <img src="img/clubs-team/1.png" alt="">
                                                        <h6>Grace</h6>
                                                    </li>
                                                    <li>
                                                        <img src="img/clubs-team/2.png" alt="">
                                                        <h6>OakLand</h6>
                                                    </li>
                                                </ul>
                                            </li>
                                            <!-- End Item List Diary --> 

                                            <!-- Item List Diary --> 
                                            <li>
                                                <h5>FUTSAL <span>09-03-2015 - 11:00</span></h5>
                                                <ul class="club-logo">
                                                    <li>
                                                        <img src="img/clubs-team/3.png" alt="">
                                                        <h6>IGSS</h6>
                                                    </li>
                                                    <li>
                                                        <img src="img/clubs-team/4.png" alt="">
                                                        <h6>BAC</h6>
                                                    </li>
                                                </ul>
                                            </li>
                                            <!-- End Item List Diary --> 

                                            <!-- Item List Diary --> 
                                            <li>
                                                <h5>Table Tennis <span>06-05-2014 - 11:00</span></h5>
                                                <ul class="club-logo">
                                                    <li>
                                                        <img src="img/clubs-team/5.png" alt="">
                                                        <h6>AGSS</h6>
                                                    </li>
                                                    <li>
                                                        <img src="img/clubs-team/6.png" alt="">
                                                        <h6>Grange</h6>
                                                    </li>
                                                </ul>
                                            </li>
                                            <!-- End Item List Diary --> 
                                        </ul>
                                    </div>
                                </div>
                                <!-- End List Diary -->                                
                            </div>  
                            <!-- End Diary --> 

                            <!-- Adds Sidebar -->
                            <div class="panel-box">
                                <a href="http://themeforest.net/user/iwthemes/portfolio?ref=iwthemes" target="_blank">
                                    <img src="img/adds/sidebar.png" class="img-responsive" alt="">
                                </a>
                            </div>  
                            <!-- End Adds Sidebar -->
                        </aside>
                        <!-- End content Sidebar Right -->
                        
                    </div>                     
                </div>  
                <!-- End Content Central -->

                <!-- Newsletter -->
               <div class="section-wide">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-center">
                                    <h2>Our <span class="text-resalt"><strong>Partners</strong></span> </h2>
                                    
                                </div>
                                <ul id="sponsors" class="tooltip-hover">
                                    <li data-toggle="tooltip" title data-original-title="Name Sponsor"> <a href="#"><img src="img/sponsors/11.png" alt="Image"></a></li>
                                    <li data-toggle="tooltip" title data-original-title="Name Sponsor"> <a href="#"><img src="img/sponsors/12.png" alt="Image"></a></li>
                                    <li data-toggle="tooltip" title data-original-title="Name Sponsor"> <a href="#"><img src="img/sponsors/13.png" alt="Image"></a></li>
                                    <li data-toggle="tooltip" title data-original-title="Name Sponsor"> <a href="#"><img src="img/sponsors/14.png" alt="Image"></a></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>  
                <!-- End Newsletter -->  
            </section>
            <!-- End Section Area -  Content Central -->
      
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