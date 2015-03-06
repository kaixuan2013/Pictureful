<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Pictureful - Event photo sharing made easy</title>

	<!-- core CSS -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/css/font-awesome.min.css" rel="stylesheet">
    <link href="public/css/animate.min.css" rel="stylesheet">
    <link href="public/css/owl.carousel.css" rel="stylesheet">
    <link href="public/css/owl.transitions.css" rel="stylesheet">
    <link href="public/css/prettyPhoto.css" rel="stylesheet">
    <link href="public/css/main.css" rel="stylesheet">
    <link href="public/css/responsive.css" rel="stylesheet">

    <link href="public/css/custom.css" rel="stylesheet">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="public/js/ajax.js"></script>

    <!-- angular and firebase js -->
    <script src= "http://ajax.googleapis.com/ajax/libs/angular/js/1.2.26/angular.min.js"></script>
    <script src="https://cdn.firebase.com/js/client/2.0.4/firebase.js"></script>
    <script src="https://cdn.firebase.com/libs/angularfire/0.8.0/angularfire.min.js"></script>

    <!--[if lt IE 9]>
    <script src="public/js/html5shiv.js"></script>
    <script src="public/js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="public/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="public/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="public/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="public/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="public/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body id="home" class="homepage">
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
                    <a class="navbar-brand" href="index.php"><img src="public/images/logo.png" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll active"><a href="index.php">Home</a></li>                
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->

    <section id="portfolio">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDsown">Type in your Hashtag</h2>
                <p class="text-center wow fadeInDown">(for testing purposes, we have specified the hashtag #picturefultest <-- click the button and post something using this hashtag to see it aggregate live!)</p>
            </div>
	        <div class="row">
		        <div class="col-xs-3 col-sm-4 col-md-4 col-lg-4">
	            </div>
	            <div class="text-center">
		            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
			            <form class="form-horizontal" action="views/album.php" method="POST">
		                      <div class="form-group">
		                        <input type="text" class="form-control input-lg" placeholder="#hashtag">
		                      </div>
		                	 <button type="submit" class="btn btn-default">Start your Event!</button>
		               	</form>
			        </div>
			     </div>
		        <div class="col-xs-3 col-sm-4 col-md-4 col-lg-4">
	            </div>
	        </div>
        </div>
    </section>

    <script src="public/js/jquery.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/owl.carousel.min.js"></script>
    <script src="public/js/mousescroll.js"></script>
    <script src="public/js/smoothscroll.js"></script>
    <script src="public/js/jquery.prettyPhoto.js"></script>
    <script src="public/js/jquery.isotope.min.js"></script>
    <script src="public/js/jquery.inview.min.js"></script>
    <script src="public/js/wow.min.js"></script>
    <script src="public/js/main.js"></script>

</body>
</html>
