<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Protégé is a free, open-source ontology editor and framework for building intelligent systems">
    <meta name="author" content="Stanford Center for Biomedical Informatics Research">
    <meta name="keywords" content="protege,protégé,owl,ontology,ontologies,ontology editor,knowledge base,intelligent system,description logics,reasoning,stanford,swrl,sparql,frames">
    <link rel="shortcut icon" href="favicon.ico">

    <title>prot&eacute;g&eacute;</title>

    <link href="assets/css/lib/bootstrap.css" rel="stylesheet">
    <link href="assets/css/lib/colorbox.css" rel="stylesheet">
    <link href="assets/css/main.css?v2" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="assets/js/vendor/html5shiv.js"></script>
      <script src="assets/js/vendor/respond.min.js"></script>
    <![endif]-->

    <?php 
      $url = $_SERVER['REQUEST_URI'];
      $end = end((explode('/', $url)));
      $bodyClass = preg_replace("/\\.[^.\\s]{3,4}$/", "", $end);
    ?>

    <script>
	    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-2792183-1', 'auto');
		ga('send', 'pageview');
    </script>

  </head>
  
  <body class="<?php echo $bodyClass; ?>">
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=347752398646315";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
  
	  <!-- map/short course banner containers -->
	  <div class="map-course-container">
	    <div class="newest-course text-center">
	      <div class="container">
	        <div class="row">
	          <div class="col-12">
		          <p class="no-margin para-a">	            	
	            	<!-- short course -->
	            	<strong class="upcase bold-a" style="font-size: 16px;">Join us for the next Protégé Short Course: </strong> 
	            	<a href="http://protege.stanford.edu/shortcourse/201603/index.html" class="top-sc-link" style="font-size: 16px;" target="_blank">
	            	<u><strong>MARCH 21 - 23 @ STANFORD, CA</strong></u></a>
	            </p>
	          </div>
	        </div>
	      </div>
	    </div>
	    <div class="map-container">
	      <div id="map-canvas" class="first-map"></div>
	      <span class="pictogram close-map"></span>
	    </div>
	  </div> 

  <header class="navbar-wrapper">

    <div class="navbar navbar-static-top">
      <div class="container">

        <div class="navbar-header">	
          <a class="navbar-brand" href="/"><span>protégé</span></a>
        </div><!-- /end .navbar-header -->

        <ul class="nav navbar-nav navbar-right">
          <li class="<?php echo ($bodyClass == 'products' ? 'active' : '');?>"><a href="products.php">Products</a></li>
          <li class="<?php echo ($bodyClass == 'support' ? 'active' : '');?>"><a href="support.php">Support</a></li>
          <li class="<?php echo ($bodyClass == 'community' ? 'active' : '');?>"><a href="community.php">Community</a></li>
          <li class="<?php echo ($bodyClass == 'about' ? 'active' : '');?>"><a href="about.php">About</a></li>
        </ul>

      </div><!-- /end .container -->
    </div><!-- /end .navbar.navbar-static-top -->

  </header><!-- /end .navbar-wrapper -->
