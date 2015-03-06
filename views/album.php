<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Pictureful - Event photo sharing made easy</title>

	<!-- metas -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta property="og:title" content="Pictureful - Your Real Time Photo Sharing App for Events!">
	<meta property="og:site_name" content="pictureful">
	<meta property="og:url" content="pictureful.com">

	<!-- fav icon -->
	<link rel="shortcut icon" href="/images/favicon.ico">

	<!-- css -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../public/css/app.css">
    <link href="../public/css/bootstrap.min.css" rel="stylesheet">
    <link href="../public/css/font-awesome.min.css" rel="stylesheet">
    <link href="../public/css/animate.min.css" rel="stylesheet">
    <link href="../public/css/owl.carousel.css" rel="stylesheet">
    <link href="../public/css/owl.transitions.css" rel="stylesheet">
    <link href="../public/css/prettyPhoto.css" rel="stylesheet">
    <link href="../public/css/main.css" rel="stylesheet">
    <link href="../public/css/responsive.css" rel="stylesheet">

     <link href="../public/css/custom.css" rel="stylesheet">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="../public/js/ajax.js"></script>

	<!-- script -->
	<script src="../public/js/socket.io.min.js"></script>
	<script src="../public/js/jquery.1.9.min.js"></script>
	<script src="../public/js/handlebarsjs.1.0.min.js"></script>


	<!--[if lt IE 9]>
	<script src="/js/html5shiv.js"></script>
	<![endif]-->

</head>
<body>
<?php include_once("analyticstracking.php") ?>

	<!--[if lt IE 9]>
      <p class="browsehappy Hfwb" style="color: black; font-size: 22px;">You are using an <strong style="color: #999;">outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience on Lollagram.</p>
  <![endif]-->

	<!--[if lt IE 9]>
      <div class="Hdn">
  <![endif]-->

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
                    <a class="navbar-brand" href="index.php"><img src="../public/images/logo.png" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll active"><a href="../index.php">Home</a></li>                
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->

	<!--********************************
	ABOUT
	*********************************-->
	<div class="aboutWrap active">
		<div id="about">
			<span class="btClose Hdb Hfr" id="js-closeAbout">
				<a href="#close" title="close about" class="Hir">close</a>
			</span>
			<h1 class="tit">Do you like this?</h1>
			<p class="desc">Yes you do.</p>
		</div>
	</div>

	<!--********************************
	TOP
	*********************************-->
	<div class="topFill"></div>

	<!--********************************
	ASIDE
	*********************************-->
	<aside id="aside">

		<!-- mobile nav button -->
		<a href="#mobile-navigation" class="mobNav" id="js-mobNav">
			<span class="iconBar"></span>
			<span class="iconBar"></span>
			<span class="iconBar"></span>
		</a>
		<!-- mobile nav button / end -->

		<nav class="nav">
			<ul>
				<li>
					<a href="#" title="about" class="extra" id="js-btAbout"> click me </a>
				</li>
			</ul>
		</nav>
	</aside>

	<!--********************************
	IMAGE WRAPPER - content
	*********************************-->
	<div id="imgContent" class="Hcf"></div>

	<!--********************************
	TEMPLATES
	*********************************-->
	<script id="firstShow-tpl" type="text/x-handlebars-template">
	{{#each firstShow}}
		<a href="{{link}}" title="{{caption.text}}" target="_blank">
			<img src="{{images.standard_resolution.url}}" alt="{{caption.text}}" />
		</a>
	{{/each}}
	</script>

	<script id="mostRecent-tpl" type="text/x-handlebars-template">
		<a href="{{data.0.link}}" title="{{data.0.caption.text}}" target="_blank" class="Hvh">
			<img src="{{data.0.images.standard_resolution.url}}" alt="{{data.0.caption.text}}" />
		</a>
	</script>

	<!-- CALL MAIN APP SCRIPT -->
	<script src="../public/js/app.js"></script>

	<script src="../public/js/jquery.js"></script>
    <script src="../public/js/bootstrap.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="../public/js/owl.carousel.min.js"></script>
    <script src="../public/js/mousescroll.js"></script>
    <script src="../public/js/smoothscroll.js"></script>
    <script src="../public/js/jquery.prettyPhoto.js"></script>
    <script src="../public/js/jquery.isotope.min.js"></script>
    <script src="../public/js/jquery.inview.min.js"></script>
    <script src="../public/js/wow.min.js"></script>
    <script src="../public/js/main.js"></script>

	<!--[if lt IE 9]>
    </div>
  <![endif]-->


</body>
</html>
