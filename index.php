<!DOCTYPE html>
<html ng-app="myApp" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Pictureful - Event photo sharing made easy</title>

	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <link href="css/custom.css" rel="stylesheet">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/ajax.js"></script>

    <!-- angular and firebase js -->
    <script src= "http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
    <script src="https://cdn.firebase.com/js/client/2.0.4/firebase.js"></script>
    <script src="https://cdn.firebase.com/libs/angularfire/0.8.0/angularfire.min.js"></script>

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body ng-controller="userController" id="home" class="homepage">

    <?php include_once("analyticstracking.php") ?>

    <header id="header">
        <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll active"><a href="#home">Home</a></li>
                        <li class="scroll"><a href="#services">Services</a></li>
                        <li class="scroll"><a href="#portfolio">Explore</a></li>
                        <li class="scroll"><a href="#work-process">Process</a></li>
                        <li class="scroll"><a href="#pricing">Pricing</a></li>
                        <!-- <li class="scroll"><a href="#get-in-touch">Contact</a></li> -->                 
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->

    <section id="main-slider">
        <div class="owl-carousel">
            <div class="item" style="background-image: url(images/slider/bg2.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2>Capture precious moments of your <span>event</span></h2>
                                    <p>Now you can encourage interaction of the guests attending your event through sharing their personal selfies and photos at the event!</p>
                                    <a class="btn btn-primary btn-lg" href="hashtag.php">Try it Free!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
             <div class="item" style="background-image: url(images/slider/bg1.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2>Let your guests generate <span>buzz</span> for your events!</h2>
                                    <p>Save your pockets on photographers, let your guests do what they do best! Follow these few simple steps and you will be up and running with pictureful in no time!</p>
                                    <a class="btn btn-primary btn-lg" href="hashtag.php">Try it Free!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.owl-carousel-->
    </section><!--/#main-slider-->
<!--
    <section id="cta" class="wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <h2>Premium quality free onepage template</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                    </p>
                </div>
                <div class="col-sm-3 text-right">
                    <a class="btn btn-primary btn-lg" href="#">Download Now!</a>
                </div>
            </div>
        </div>
    </section><! /#cta-->
<!--
    <section id="features">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Awesome Features</h2>
                <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>
            <div class="row">
                <div class="col-sm-6 wow fadeInLeft">
                    <img class="img-responsive" src="images/main-feature.png" alt="">
                </div>
                <div class="col-sm-6">
                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-line-chart"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">UX design</h4>
                            <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-cubes"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">UI design</h4>
                            <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-pie-chart"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">SEO Services</h4>
                            <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-pie-chart"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">SEO Services</h4>
                            <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="cta2">
        <div class="container">
            <div class="text-center">
                <h2 class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms"><span>MULTI</span> IS A CREATIVE HTML TEMPLATE</h2>
                <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">Mauris pretium auctor quam. Vestibulum et nunc id nisi fringilla <br />iaculis. Mauris pretium auctor quam.</p>
                <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms"><a class="btn btn-primary btn-lg" href="#">Free Download</a></p>
                <img class="img-responsive wow fadeIn" src="images/cta2/cta2-img.png" alt="" data-wow-duration="300ms" data-wow-delay="300ms">
            </div>
        </div>
    </section>
-->
    <section id="services">
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Presenting Pictureful</h2>
                <p class="text-center wow fadeInDown">Here are some of the awesome features of pictureful. You will never have to worry about capturing the best of your event!</p>
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-magic"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Live photo collection</h4>
                                <p>Based on a particular #hashtag on Instagram and Twitter, these photos will be automagically stored in your album.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-slideshare"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Live slideshow</h4>
                                <p>Display your slidshow of event photos live on a big screen as the pictures comes!</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-filter"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Filter</h4>
                                <p>Easily delete photos yourself or use our intelligent filter to get all crappy photos out of your album.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                
                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-thumbs-o-up"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Photo ranking</h4>
                                <p>Have guests like your event photos and the popular ones get to be on the top!</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-download"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Download all photos</h4>
                                <p>With a click of a button, you will get all your precious event photos to Dropbox or your drive.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="500ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-gift"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Photo booth</h4>
                                <p>We provide event printing services to let your guests have their pictures printed. Now they can bring back something cool!</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                </div>
            </div><!--/.row-->    
        </div><!--/.container-->
    </section><!--/#services-->

    <section id="portfolio">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Explore Albums</h2>
                <p class="text-center wow fadeInDown">Now you can see what other pictureful users have in their event treasury (provided they show it to you!). </p>
            </div>

            <div class="text-center">
                <ul class="portfolio-filter">
                    <!-- <li><a class="active" href="#" data-filter="*">All Works</a></li> -->
                    <li><a class="active" href="#" data-filter=".popular">Popular</a></li>
                    <li><a href="#" data-filter=".recent">Recent</a></li>
                    <li><a href="#" data-filter=".nearby">Near You</a></li>
                </ul><!--/#portfolio-filter-->
            </div>

            <div class="portfolio-items">
                <div class="portfolio-item recent">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/global_security_asia_2015.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Global Security Asia 2015</h3>
                            #globalsecurityasia2015
                            <a class="preview" href="images/portfolio/full.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item popular recent">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/motorshow2015.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Singapore Motor Show 2015</h3>
                            #sgmotorshow2015
                            <a class="preview" href="images/portfolio/full.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item popular">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/silosobeachparty2014.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Siloso Beach Party 2014</h3>
                            #silosobeachparty2014
                            <a class="preview" href="images/portfolio/full.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item popular">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/comex2014.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Comex 2014</h3>
                            #comex2014
                            <a class="preview" href="images/portfolio/full.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item popular nearby">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/alizafar_musicconcert.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Ali Zafar Music Concert</h3>
                            #alizafarconcert2014
                            <a class="preview" href="images/portfolio/full.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item nearby">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/nationalday2014.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Singapore National Day 2014</h3>
                            #sgbday2014
                            <a class="preview" href="images/portfolio/full.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item popular">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/singaporeyouthawards2014.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Singapore Youth Awards 2014</h3>
                            #sya2014
                            <a class="preview" href="images/portfolio/full.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item recent">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/USS-Halloween-Horror-Night-2014.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>USS Halloween Horror Night 2014</h3>
                            #usshalloween2014
                            <a class="preview" href="images/portfolio/full.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
            </div>
        </div><!--/.container-->
    </section><!--/#portfolio-->
<!--
    <section id="about">
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">About Us</h2>
                <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class="row">
                <div class="col-sm-6 wow fadeInLeft">
                    <h3 class="column-title">Video Intro</h3>
                    <!-- 16:9 aspect ratio ->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe src="//player.vimeo.com/video/58093852?title=0&amp;byline=0&amp;portrait=0&amp;color=e79b39" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>

                <div class="col-sm-6 wow fadeInRight">
                    <h3 class="column-title">Multi Capability</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="nostyle">
                                <li><i class="fa fa-check-square"></i> Ipsum is simply dummy</li>
                                <li><i class="fa fa-check-square"></i> When an unknown</li>
                            </ul>
                        </div>

                        <div class="col-sm-6">
                            <ul class="nostyle">
                                <li><i class="fa fa-check-square"></i> The printing and typesetting</li>
                                <li><i class="fa fa-check-square"></i> Lorem Ipsum has been</li>
                            </ul>
                        </div>
                    </div>

                    <a class="btn btn-primary" href="#">Learn More</a>

                </div>
            </div>
        </div>
    </section><!--/#about-->

     <section id="work-process">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Pictureful Process</h2>
                <p class="text-center wow fadeInDown">Easy steps to get you up and running with Pictureful!</p>
            </div>

            <div class="row text-center">
                <div class="col-md-2 col-md-4 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                        <div class="icon-circle">
                            <span>1</span>
                            <i class="fa fa-star fa-2x"></i>
                        </div>
                        <h3>REGISTER ACCOUNT</h3>
                    </div>
                </div>
                <div class="col-md-2 col-md-4 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                        <div class="icon-circle">
                            <span>2</span>
                            <i class="fa fa-tag fa-2x"></i>
                        </div>
                        <h3>CHOOSE HASHTAG</h3>
                    </div>
                </div>
                <div class="col-md-2 col-md-4 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="200ms">
                        <div class="icon-circle">
                            <span>3</span>
                            <i class="fa fa-clock-o fa-2x"></i>
                        </div>
                        <h3>SPECIFY TIMEFRAME</h3>
                    </div>
                </div>
                <div class="col-md-2 col-md-4 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="icon-circle">
                            <span>4</span>
                            <i class="fa fa-bullhorn fa-2x"></i>
                        </div>
                        <h3>TELL ATTENDEES</h3>
                    </div>
                </div>
                <div class="col-md-2 col-md-4 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="400ms">
                        <div class="icon-circle">
                            <span>5</span>
                            <i class="fa fa-beer fa-2x"></i>
                        </div>
                        <h3>EXECUTE EVENT</h3>
                    </div>
                </div>
                <div class="col-md-2 col-md-4 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="500ms">
                        <div class="icon-circle">
                            <span>6</span>
                            <i class="fa fa-play-circle fa-2x"></i>
                        </div>
                        <h3>LIVE SLIDESHOW</h3>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#work-process-->
<!--
    <section id="meet-team">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Meet The Team</h2>
                <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                        <div class="team-img">
                            <img class="img-responsive" src="images/team/01.jpg" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Bin Burhan</h3>
                            <span>Co-Founder</span>
                        </div>
                        <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                        <div class="team-img">
                            <img class="img-responsive" src="images/team/02.jpg" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Jane Man</h3>
                            <span>Project Manager</span>
                        </div>
                        <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="200ms">
                        <div class="team-img">
                            <img class="img-responsive" src="images/team/03.jpg" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Pahlwan</h3>
                            <span>Designer</span>
                        </div>
                        <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="team-img">
                            <img class="img-responsive" src="images/team/04.jpg" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Nasir uddin</h3>
                            <span>UI/UX</span>
                        </div>
                        <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="divider"></div>

            <div class="row">
                <div class="col-sm-4">
                    <h3 class="column-title">Our Skills</h3>
                    <strong>GRAPHIC DESIGN</strong>
                    <div class="progress">
                        <div class="progress-bar progress-bar-primary" role="progressbar" data-width="85">85%</div>
                    </div>
                    <strong>WEB DESIGN</strong>
                    <div class="progress">
                        <div class="progress-bar progress-bar-primary" role="progressbar" data-width="70">70%</div>
                    </div>
                    <strong>WORDPRESS DEVELOPMENT</strong>
                    <div class="progress">
                        <div class="progress-bar progress-bar-primary" role="progressbar" data-width="90">90%</div>
                    </div>
                    <strong>JOOMLA DEVELOPMENT</strong>
                    <div class="progress">
                        <div class="progress-bar progress-bar-primary" role="progressbar" data-width="65">65%</div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <h3 class="column-title">Our History</h3>
                    <div role="tabpanel">
                        <ul class="nav main-tab nav-justified" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#tab1" role="tab" data-toggle="tab" aria-controls="tab1" aria-expanded="true">2010</a>
                            </li>
                            <li role="presentation">
                                <a href="#tab2" role="tab" data-toggle="tab" aria-controls="tab2" aria-expanded="false">2011</a>
                            </li>
                            <li role="presentation">
                                <a href="#tab3" role="tab" data-toggle="tab" aria-controls="tab3" aria-expanded="false">2013</a>
                            </li>
                            <li role="presentation">
                                <a href="#tab4" role="tab" data-toggle="tab" aria-controls="tab4" aria-expanded="false">2014</a>
                            </li>
                        </ul>
                        <div id="tab-content" class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active in" id="tab1" aria-labelledby="tab1">
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters readable English.</p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab2" aria-labelledby="tab2">
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters readable English.</p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab3" aria-labelledby="tab3">
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters readable English.</p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab4" aria-labelledby="tab3">
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters readable English.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <h3 class="column-title">Faqs</h3>
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Enim eiusmod high life accusamus
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Nihil anim keffiyeh helvetica
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Vegan excepteur butcher vice lomo
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section><! /#meet-team-->
<!--
    <section id="animated-number">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Fun Facts</h2>
                <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class="row text-center">
                <div class="col-sm-3 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                        <div class="animated-number" data-digit="2305" data-duration="1000"></div>
                        <strong>CUPS OF COFFEE CONSUMED</strong>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                        <div class="animated-number" data-digit="1231" data-duration="1000"></div>
                        <strong>CLIENT WORKED WITH</strong>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="200ms">
                        <div class="animated-number" data-digit="3025" data-duration="1000"></div>
                        <strong>PROJECT COMPLETED</strong>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="animated-number" data-digit="1199" data-duration="1000"></div>
                        <strong>QUESTIONS ANSWERED</strong>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#animated-number-->

    <section id="pricing">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Pricing</h2>
                <p class="text-center wow fadeInDown">Try it for free! Upgrade when you need, cancel as you want.</p>
            </div>

            <div class="row">
                <div class="col-sm-8 col-md-4">
                    <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="0ms">
                        <ul class="pricing">
                            <li class="plan-header">
                                <div class="price-duration">
                                    <span class="price">
                                        $0
                                    </span>
                                    <span class="duration">
                                        forever
                                    </span>
                                </div>

                                <div class="plan-name">
                                    Free
                                </div>
                            </li>
                            <li>Up to <strong>10</strong> contributors</li>
                            <li><strong>1</strong> album</li>
                            <li><strong>Unlimited</strong> storage</li>
                            <li><strong>6</strong> hours of live period</li>
                            <li>Filters</li>
                            <li>Live slideshow</li>
                            <li>Download album</li>
                            <li class="plan-purchase"><a class="btn btn-primary" href="hashtag.php">Try it Free!</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-8 col-md-4">
                    <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="200ms">
                        <ul class="pricing featured">
                            <li class="plan-header">
                                <div class="price-duration">
                                    <span class="price">
                                        $29
                                    </span>
                                    <span class="duration">
                                        per event
                                    </span>
                                </div>

                                <div class="plan-name">
                                    Casual
                                </div>
                            </li>
                            <li>Up to <strong>20</strong> contributors</li>
                            <li><strong>1</strong> album</li>
                            <li><strong>Unlimited</strong> storage</li>
                            <li><strong>2</strong> days of live period</li>
                            <li>Filters</li>
                            <li>Live slideshow</li>
                            <li>Download album</li>
                            <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                <input type="hidden" name="cmd" value="_s-xclick">
                                <input type="hidden" name="hosted_button_id" value="HQLXNGJTPDLPJ">
                                <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </form>
                            <!--<li class="plan-purchase"><a class="btn btn-primary" href="#">Order Now</a></li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-sm-8 col-md-4">
                    <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="400ms">
                        <ul class="pricing">
                            <li class="plan-header">
                                <div class="price-duration">
                                    <span class="price">
                                        $159
                                    </span>
                                    <span class="duration">
                                        per month
                                    </span>
                                </div>

                                <div class="plan-name">
                                    Business
                                </div>
                            </li>
                            <li>Up to <strong>100</strong> contributors</li>
                            <li><strong>Unlimited</strong> albums</li>
                            <li><strong>Unlimited</strong> storage</li>
                            <li><strong>2</strong> days of live period</li>
                            <li>Filters</li>
                            <li>Live slideshow</li>
                            <li>Download album</li>
                            <li>Photo ranking</li>
                            <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                <input type="hidden" name="cmd" value="_s-xclick">
                                <input type="hidden" name="hosted_button_id" value="YCZHFAESZXP2W">
                                <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </form>
                            <!--<li class="plan-purchase"><a class="btn btn-default" href="#">Order Now</a></li>-->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#pricing-->
<!--
    <section id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">

                    <div id="carousel-testimonial" class="carousel slide text-center" data-ride="carousel">
                        <!- Wrapper for slides ->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <p><img class="img-circle img-thumbnail" src="images/testimonial/01.jpg" alt=""></p>
                                <h4>Louise S. Morgan</h4>
                                <small>Treatment, storage, and disposal (TSD) worker</small>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua. Ut enim ad minim veniam</p>
                            </div>
                            <div class="item">
                                <p><img class="img-circle img-thumbnail" src="images/testimonial/01.jpg" alt=""></p>
                                <h4>Louise S. Morgan</h4>
                                <small>Treatment, storage, and disposal (TSD) worker</small>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua. Ut enim ad minim veniam</p>
                            </div>
                        </div>

                        <!- Controls ->
                        <div class="btns">
                            <a class="btn btn-primary btn-sm" href="#carousel-testimonial" role="button" data-slide="prev">
                                <span class="fa fa-angle-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="btn btn-primary btn-sm" href="#carousel-testimonial" role="button" data-slide="next">
                                <span class="fa fa-angle-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!/#testimonial-->
<!--
    <section id="blog">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Latest Blogs</h2>
                <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="blog-post blog-large wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="0ms">
                        <article>
                            <header class="entry-header">
                                <div class="entry-thumbnail">
                                    <img class="img-responsive" src="images/blog/01.jpg" alt="">
                                    <span class="post-format post-format-video"><i class="fa fa-film"></i></span>
                                </div>
                                <div class="entry-date">25 November 2014</div>
                                <h2 class="entry-title"><a href="#">While now the fated Pequod had been so long afloat this</a></h2>
                            </header>

                            <div class="entry-content">
                                <P>With a blow from the top-maul Ahab knocked off the steel head of the lance, and then handing to the mate the long iron rod remaining, bade him hold it upright, without its touching off the steel head of the lance, and then handing to the mate the long iron rod remaining. without its touching off the steel without its touching off the steel</P>
                                <a class="btn btn-primary" href="#">Read More</a>
                            </div>

                            <footer class="entry-meta">
                                <span class="entry-author"><i class="fa fa-pencil"></i> <a href="#">Victor</a></span>
                                <span class="entry-category"><i class="fa fa-folder-o"></i> <a href="#">Tutorial</a></span>
                                <span class="entry-comments"><i class="fa fa-comments-o"></i> <a href="#">15</a></span>
                            </footer>
                        </article>
                    </div>
                </div><!--/.col-sm-6
                <div class="col-sm-6">
                    <div class="blog-post blog-media wow fadeInRight" data-wow-duration="300ms" data-wow-delay="100ms">
                        <article class="media clearfix">
                            <div class="entry-thumbnail pull-left">
                                <img class="img-responsive" src="images/blog/02.jpg" alt="">
                                <span class="post-format post-format-gallery"><i class="fa fa-image"></i></span>
                            </div>
                            <div class="media-body">
                                <header class="entry-header">
                                    <div class="entry-date">01 December 2014</div>
                                    <h2 class="entry-title"><a href="#">BeReviews was a awesome envent in dhaka</a></h2>
                                </header>

                                <div class="entry-content">
                                    <P>With a blow from the top-maul Ahab knocked off the steel head of the lance, and then handing to the steel</P>
                                    <a class="btn btn-primary" href="#">Read More</a>
                                </div>

                                <footer class="entry-meta">
                                    <span class="entry-author"><i class="fa fa-pencil"></i> <a href="#">Campbell</a></span>
                                    <span class="entry-category"><i class="fa fa-folder-o"></i> <a href="#">Tutorial</a></span>
                                    <span class="entry-comments"><i class="fa fa-comments-o"></i> <a href="#">15</a></span>
                                </footer>
                            </div>
                        </article>
                    </div>
                    <div class="blog-post blog-media wow fadeInRight" data-wow-duration="300ms" data-wow-delay="200ms">
                        <article class="media clearfix">
                            <div class="entry-thumbnail pull-left">
                                <img class="img-responsive" src="images/blog/03.jpg" alt="">
                                <span class="post-format post-format-audio"><i class="fa fa-music"></i></span>
                            </div>
                            <div class="media-body">
                                <header class="entry-header">
                                    <div class="entry-date">03 November 2014</div>
                                    <h2 class="entry-title"><a href="#">Play list of old bangle  music and gajal</a></h2>
                                </header>

                                <div class="entry-content">
                                    <P>With a blow from the top-maul Ahab knocked off the steel head of the lance, and then handing to the steel</P>
                                    <a class="btn btn-primary" href="#">Read More</a>
                                </div>

                                <footer class="entry-meta">
                                    <span class="entry-author"><i class="fa fa-pencil"></i> <a href="#">Ruth</a></span>
                                    <span class="entry-category"><i class="fa fa-folder-o"></i> <a href="#">Tutorial</a></span>
                                    <span class="entry-comments"><i class="fa fa-comments-o"></i> <a href="#">15</a></span>
                                </footer>
                            </div>
                        </article>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="get-in-touch">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Get in Touch</h2>
                <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>
        </div>
    </section><!--/#get-in-touch-->

<!--
    <section id="contact">
        <div id="google-map" style="height:650px" data-latitude="52.365629" data-longitude="4.871331"></div>
        <div class="container-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-8">
                        <div class="contact-form">
                            <h3>Contact Info</h3>

                            <address>
                              <strong>Twitter, Inc.</strong><br>
                              795 Folsom Ave, Suite 600<br>
                              San Francisco, CA 94107<br>
                              <abbr title="Phone">P:</abbr> (123) 456-7890
                            </address>

                            <form id="main-contact-form" name="contact-form" method="post" action="#">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                                </div>
                                <div class="form-group">
                                    <textarea name="message" class="form-control" rows="8" placeholder="Message" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#bottom-->

        <!-- feedback -->
    <section id="feedback">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Give me a Feedback</h2>
                <p class="text-center wow fadeInDown">Tell me what I should continue doing, start doing and stop doing...</p>
            </div>
        <div class="row">
            <div class="text-center">
                <button class="btn btn-success" ng-click="editFeedback('new')">
                    <span class="glyphicon"></span>Click here to leave feedback.
                  </button>
              </div>

                <div ng-show="edit">
                <h3></h3>
                <div class="row">
                    <div class="col-md-4">
                    </div>
                <div class="col-md-4">
                    <form class="form-horizontal">
                      <div class="form-group">
                        <label class="col-sm-4 control-label">Full Name:</label>
                        <div class="col-sm-8">
                        <input type="text" ng-model="newuser.fName" ng-disabled="!edit" placeholder="Your Full Name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-4 control-label">SMU Email:</label>
                        <div class="col-sm-8">
                        <input type="text" ng-model="newuser.email" ng-disabled="!edit" placeholder="johnappleseed@mitb.smu.edu.sg">
                        </div>
                      </div> 
                      <div class="form-group">
                        <label class="col-sm-4 control-label">School:</label>
                        <div class="col-sm-8">
                        <input type="text" ng-model="newuser.school" ng-disabled="!edit" placeholder="(MBA, MM, Bus, SS, Econ)">
                        </div>
                      </div> 
                      <div class="form-group">
                        <label class="col-sm-4 control-label">What should we start doing?</label>
                        <div class="col-sm-8">
                        <textarea name="start" rows="2" col="50" ng-model="newuser.start" ng-disabled="!edit" placeholder="You should start .."></textarea>
                        </div>
                      </div> 
                        <div class="form-group">
                        <label class="col-sm-4 control-label">What should we stop doing?</label>
                        <div class="col-sm-8">
                        <textarea name="stop" rows="2" col="50" ng-model="newuser.stop" ng-disabled="!edit" placeholder="You should stop .."></textarea>
                        </div>
                      </div> 
                        <div class="form-group">
                        <label class="col-sm-4 control-label">What should we continue doing?</label>
                        <div class="col-sm-8">
                        <textarea name="continue" rows="2" col="50" ng-model="newuser.continue" ng-disabled="!edit" placeholder="You should continue .."></textarea>
                        </div>
                      </div> 
                        <div class="form-group">
                        <label class="col-sm-4 control-label">What other recommendations do you have?</label>
                        <div class="col-sm-8">
                        <textarea name="other" rows="2" col="50" ng-model="newuser.other" ng-disabled="!edit" placeholder="You should also .."></textarea>
                        </div>
                      </div> 
                    </form>
                </div>
                <div class="col-md-4">
                    </div>
                </div><!-- row closing --> 

                <div class="text-center">
                    <button class="btn btn-success"  ng-click="save()">
                    <span class="glyphicon glyphicon-save"></span>  Save Feedback
                    </button>

                    <hr>
                    Check out Group 9's application <a href="http://is429-sebastien.herokuapp.com/">here</a><br/>
                    Check out Group 11's application <a href="https://airguitar.herokuapp.com/feedback.html">here</a><br/>
                    <input type="checkbox" ng-model="hide_table" ng-init="hide_table=false"> Show submitted feedback ({{ users.length }}).
                </div>
                
                <table ng-show="hide_table" class="table table-striped">
                  <thead>
                    <tr>
                    <!--
                      <th>Full Name</th>
                      <th class="hidden-xs hidden-sm">Email</th>
                      -->
                      <th>#</th>
                      <th>School</th>
                      <th>Start</th>
                      <th>Stop</th>
                      <th>Continue</th>
                      <th class="hidden-xs">Other</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr ng-repeat="user in users">
                    <!--
                      <td>{{ user.fName }}</td>
                      <td class="hidden-xs hidden-sm">{{ user.email }}</td>
                      !-->
                      <td>{{ $index + 1 }}</td>
                      <td>{{ user.school }}</td>
                      <td>{{ user.start }}</td>
                      <td>{{ user.stop }}</td>
                      <td>{{ user.continue }}</td>
                      <td class="hidden-xs">{{ user.other }}</td>
                    </tr>
                  </tbody>
                </table>
                </hr>
                </div>
        </div>
    </section>

<!-- onboarding video -->
    <section id="services">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Watch our Onboarding Video!</h2>
                <p class="text-center wow fadeInDown">Why we want you!</p>
            </div>
            <div class="row">
                    <div class="embed-responsive embed-responsive-4by3">
                      <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/yxHV1eVdNyI" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>  
    </section>

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2015 Pictureful.
                </div>
                <div class="col-sm-6">
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <!--
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        -->
                        <li><a href="https://github.com/kaixuan2013/Pictureful"><i class="fa fa-github"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/mousescroll.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>

    <!-- script to record feedback to firebase -->
<script>
  var myApp = angular.module("myApp", ["firebase"]);
  myApp.controller('userController', ['$scope', '$firebase',
    function($scope, $firebase) {
    $scope.newuser = {};
    $scope.fName = '';
    $scope.school = '';
    $scope.email = '';
    $scope.start = '';
    $scope.stop = '';
    $scope.continue = '';
    $scope.others = '';

    
    // Here is where you update your Firebase URL. 
    var theFirebaseURL = "https://pictureful.firebaseio.com";
    
    var ref = new Firebase(theFirebaseURL);
    $scope.users = $firebase(ref.child("feedback")).$asArray(); 

    $scope.edit = false;
    $scope.error = false;
    $scope.incomplete = false;  
        
    $scope.editFeedback = function(id) {
        $scope.currentId = id;
        if (id == 'new') {
            $scope.edit = true;
            $scope.incomplete = true;
            $scope.newuser = {};
            console.log("new feedback.");
        } else {
            $scope.edit = true;
            $scope.newuser = $firebase(ref.child("feedback").child(id)).$asObject();
            console.log("existing feedback.");
        }
    };
    
    $scope.save = function(){
      //Add new if no index is passed in.
      
      if($scope.currentId=='new'){
        $scope.users.$add($scope.newuser);
      }
      else{
        $scope.newuser.$save();
      }
      $scope.edit = false;
    };
    
    $scope.deleteFeedback = function(index){
      $scope.users.$remove(index);
      console.log("removing "+index);
    }
    
    }]);


    </script>

</body>
</html>
