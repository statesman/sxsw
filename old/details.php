<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >
<?php session_start(); ?>
<?php
function CurrentPageURL() 
{
$pageURL = $_SERVER['HTTPS'] == 'on' ? 'https://' : 'http://';
$pageURL .= $_SERVER['SERVER_PORT'] != '80' ? $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"] : $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
return $pageURL;
}
?>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Cache-Control" content="max-age=3600, must-revalidate" />
<meta name="apple-mobile-web-app-title" content="SXSW Side Parties">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<link rel="apple-touch-icon" href="appicon.png">
<link rel="icon" type="image/png" href="http://media.cmgdigital.com/shared/media/web/site/www_austin360_com/images/favicon.ico">

<meta name="apple-mobile-web-app-capable" content="yes">
<link rel="apple-touch-icon" href="appicon.png">
<meta name="apple-mobile-web-app-title" content="SXSW Side Parties">
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<meta name="description" content="Welcome to Austin360's 2014 SXSW Side Parties database. Here, you'll find hundreds of unofficial showcases, side parties and day shows that don't require a SXSW badge during SXSW Interactive, Film and Music.">

<meta property="og:image" content="appicon.png"/>
<meta property="og:url" content="<?php echo CurrentPageURL(); ?>"/>

<title>2014 SXSW Side Parties details | Austin360</title>


<!-- Foundation -->
<link rel="stylesheet" href="../foundation/css/normalize.css">
<link rel="stylesheet" href="../foundation/css/foundation.css">
<script src="../foundation/js/vendor/custom.modernizr.js"></script>

<?php include "../common/metrics-head.js";?>

<!-- project additions -->
<link rel="stylesheet" href="../common/austin360_foundation.css">
<link rel="stylesheet" href="../common/caspio.css">
<link rel="stylesheet" href="project.css">
<link href='http://fonts.googleapis.com/css?family=Alfa+Slab+One' rel='stylesheet' type='text/css'>
<?php include "advertising.js";?>



</head>
<body>

<div class="fixed" style="background-color: #900;">
	<nav class="top-bar" data-topbar>
		<ul class="title-area">
			<li class="name"><h1><a href="http://www.austin360.com/" target="_blank"><img src="../../common/360logo.png" /></a></h1></li>
            <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
		</ul>

		<section class="top-bar-section">
			<!-- Right Nav Section -->
      <ul class="right">
          <!-- <li class="active"><a href="./">EDIT</a></li> -->
          <li><a href="./">QUICK SEARCH</a></li>
          <li><a href="search.php">ADVANCED SEARCH</a></li>
      </ul>
  		</section>
	</nav>
</div>

<div id="back">


<div class="row">
	<div class="large-12 columns">
	<h4 id="pagetitle">SXSW Side Parties details</h4>
	</div>
</div>

<div class="row">
    <div class="small-12 medium-8 large-8 columns">

		<!-- Begin Caspio Deploy Code (for inserting in body) -->
		<?php require_once('../common/dpload.txt');dpload('http://bridge.caspio.net/','e76c000050d64f8430914520a644','i');?>
		<!-- End Caspio Deploy Code --><br>
	</div>
	<div class="medium-4 large-4 columns">
         <script type="text/javascript">
            if (Poster_Image_URL != "") {
			document.write("<img class=\"detailmug\" src=\"http:\/\/media.cmgdigital.com\/shared\/lt\/lt_cache\/thumbnail\/600" + Poster_Image_URL + "\"  width=\"300\" height=\"300\" alt=\"" + Event_Name + "\" \/>");
            }
		</script>

<!--
		<div class="panel">
		<h3>About SXSW Side Parties</h3>
		<p>A little bit about this and possibly how to submit a party?</p>
		</div>
-->
	</div>
</div>
</div> <!-- end back -->
<hr>

<!-- Share code -->
<?php include "../common/share.php";?>

<!-- Ad code -->
<?php include "advertising.php";?>

<!-- footer code -->   
<?php include "../common/footer.php";?>

<script src="../foundation/js/vendor/jquery.js"></script>
<script src="../foundation/js/foundation.min.js"></script>
<script>
  $(document).foundation();
</script>

<!-- Metrics code -->
<?php include "metrics-sxsw.js"; ?>
<?php include "../common/metrics.js"; ?>
</body>
</html>