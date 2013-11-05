<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.ico">

    <title>Stanford</title>

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
  
  <div class="map-course-container">
    <div class="newest-course text-center">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <p class="no-margin para-a"><strong class="upcase bold-a"><a class="open-map" href="#">New Protégé Short Course:</strong> March 26-28 @ Stanford University - Stanford, CA.</a></p>
          </div><!-- /end .col-12 -->
          <a href="#" class="pictogram pull-right open-map-icon"></a>
        </div><!-- /end .row -->
      </div><!-- /end .container -->
    </div><!-- /end .newest-course -->

    <div class="map-container">
      <div id="map-canvas" class="first-map"></div>
      <span class="pictogram close-map"></span>
    </div><!-- /end .map-container -->
  </div><!-- /end .map-course-container -->

  <header class="navbar-wrapper">

    <div class="navbar navbar-static-top">
      <div class="container">

        <div class="navbar-header">	
          <a class="navbar-brand" href="/protege"><span>protégé</span></a>
        </div><!-- /end .navbar-header -->

        <ul class="nav navbar-nav navbar-right">
          <li class="<?php echo ($bodyClass == 'products' ? 'active' : '');?>"><a href="products.php">Products</a></li>
          <li class="<?php echo ($bodyClass == 'support' ? 'active' : '');?>"><a href="support.php">Support</a></li>
          <li class="<?php echo ($bodyClass == 'community' ? 'active' : '');?>"><a href="community.php">Community</a></li>
        </ul>

      </div><!-- /end .container -->
    </div><!-- /end .navbar.navbar-static-top -->

  </header><! -- /end .navbar-wrapper -->
