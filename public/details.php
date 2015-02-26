<!doctype html>
<html>
<head>
<?php session_start(); ?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
<?php
  $meta = array(
    "title" => "2015 SXSW Side Parties | Austin360",
    "description" => "Welcome to Austin360's 2015 SXSW Side Parties database. Here, you'll find hundreds of unofficial showcases, side parties and day shows that don't require a SXSW badge during SXSW Interactive, Film and Music.",
    "thumbnail" => "http://projects.statesman.com/sxsw/assets/share.jpg",
    "url" => "http://projects.statesman.com/sxsw/",
    "twitter" => "austin360"
  );
?>

  <title>Interactive: <?php print $meta['title']; ?> | Austin American-Statesman</title>
  <link rel="shortcut icon" href="http://media.cmgdigital.com/shared/theme-assets/242014/www.austin360.com_8bc327bbc45a4eafb5625408192c5ff6.ico" />

  <link rel="canonical" href="<?php print $meta['url']; ?>" />

  <meta name="description" content="<?php print $meta['description']; ?>">

  <meta property="og:title" content="<?php print $meta['title']; ?>"/>
  <meta property="og:description" content="<?php print $meta['description']; ?>"/>
  <meta property="og:image" content="<?php print $meta['thumbnail']; ?>"/>
  <meta property="og:url" content="<?php print $meta['url']; ?>"/>

  <meta name="twitter:card" content="summary" />
  <meta name="twitter:site" content="@<?php print $meta['twitter']; ?>" />
  <meta name="twitter:title" content="<?php print $meta['title']; ?>" />
  <meta name="twitter:description" content="<?php print $meta['description']; ?>" />
  <meta name="twitter:image" content="<?php print $meta['thumbnail']; ?>" />
  <meta name="twitter:url" content="<?php print $meta['url']; ?>" />

  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-title" content="SXSW Side Parties">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <link rel="apple-touch-icon" href="assets/appicon.png">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="dist/style.css">

  <link href='http://fonts.googleapis.com/css?family=Lusitana:400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:400,300,300italic,400italic,700italic,700,800,800italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Alfa+Slab+One' rel='stylesheet' type='text/css'>


  <?php /* CMG advertising and analytics */ ?>
  <?php include "includes/advertising.inc"; ?>
  <?php include "includes/metrics-head.inc"; ?>


</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

        <a class="navbar-brand" href="http://www.austin360.com/" target="_blank">
          <img width="122" height="50" src="assets/logo_austin360_color.png">
        </a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="./">Quick Search <span class="sr-only">(current)</span></a></li>
        <li><a href="search.php">Advanced Search</a></li>
        <li class="visible-xs small-social"><a target="_blank" href="https://www.facebook.com/sharer.php?u=<?php echo urlencode($meta['url']); ?>"><i class="fa fa-facebook-square"></i></a><a target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo urlencode($meta['url']); ?>&via=<?php print urlencode($meta['twitter']); ?>&text=<?php print urlencode($meta['title']); ?>"><i class="fa fa-twitter"></i></a><a target="_blank" href="https://plus.google.com/share?url=<?php echo urlencode($meta['url']); ?>"><i class="fa fa-google-plus"></i></a></li>
      </ul>
        <ul class="nav navbar-nav navbar-right social hidden-xs">
          <li><a target="_blank" href="https://www.facebook.com/sharer.php?u=<?php echo urlencode($meta['url']); ?>"><i class="fa fa-facebook-square"></i></a></li>
          <li><a target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo urlencode($meta['url']); ?>&via=<?php print urlencode($meta['twitter']); ?>&text=<?php print urlencode($meta['title']); ?>"><i class="fa fa-twitter"></i></a></li>
          <li><a target="_blank" href="https://plus.google.com/share?url=<?php echo urlencode($meta['url']); ?>"><i class="fa fa-google-plus"></i></a></li>
        </ul>
    </div>
  </div>
</nav>
<div id="back">

  <div class="container">
    <div class="row">
      <div class="col-lg-12 header">
      <h3 id="pagetitle">SXSW side parties details</h3>
      </div>
    </div>
    <div class="row">
      <div id="details" class="col-xs-12 col-sm-6 col-md-8">
        <div>
    <!-- 2015 deploy pointing to 2014 data -->

    <!-- Begin Caspio Deploy Code (for inserting in body) -->
    <?php require_once('dist/dpload.txt');dpload('http://bridge.caspio.net/','e76c0000bdcfcaa3ea914f72925c','i');?>
    <!-- End Caspio Deploy Code -->
        </div>
    </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <!-- poster pulled in through script -->
        <div id="poster"></div>
        <?php include "includes/promo.inc"; ?>
      </div>
    </div>



  </div>

    <!-- bottom matter -->
    <?php include "includes/banner-ad.inc";?>
    <?php include "includes/legal.inc";?>
    <?php include "includes/project-metrics.inc"; ?>
    <?php include "includes/metrics.inc"; ?>

    <script src="dist/scripts.js"></script>


<script type="text/javascript">
//BUILD POSTER PULLING VARS FROM CASPIO
  var output; 
  if (Poster_Image_URL != "") { 
   output = "<img id=\"poster\" class=\"img-responsive\" src=\"http:\/\/media.cmgdigital.com\/shared\/lt\/lt_cache\/thumbnail\/600" + Poster_Image_URL + "\"  width=\"300\" alt=\"" + Event_Name + "\" \/><br><br>"; 
 } 
 $('#poster').html(output);
</script> 


</div>
  <?php if($_SERVER['SERVER_NAME'] === 'localhost'): ?>
    <script src="//localhost:35729/livereload.js"></script>
  <?php endif; ?>

</body>
</html>
