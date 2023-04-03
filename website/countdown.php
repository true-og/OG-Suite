<!-- Define file as HTML for browser. -->
<!DOCTYPE html>

<!-- Declare native language. -->
<html lang="en">

  <!-- Declare header for metadata. -->
  <head>

	<!-- Set website character set and dimensions so that it displays correctly. -->
	<meta charset="UTF-8">

	<!-- Declare title that will display in tabs.  -->
	<title>TrueOG SMP</title>

    <!-- Make page recognizable by a wide range of browsers. -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<!-- Link to favicons for thumbnails in browsers. -->
	<!-- Generic: -->
	<link rel="icon" type="image/x-icon" href="assets/favicons/favicon.ico">
	<link rel="icon" href="assets/favicons/favicon-32.png" sizes="32x32">
	<link rel="icon" href="assets/favicons/favicon-57.png" sizes="57x57">
	<link rel="icon" href="assets/favicons/favicon-76.png" sizes="76x76">
	<link rel="icon" href="assets/favicons/favicon-96.png" sizes="96x96">
	<link rel="icon" href="assets/favicons/favicon-128.png" sizes="128x128">
	<link rel="icon" href="assets/favicons/favicon-192.png" sizes="192x192">
	<link rel="icon" href="assets/favicons/favicon-228.png" sizes="228x228">
	<!-- Android: -->
	<link rel="shortcut icon" sizes="196x196" href="assets/favicons/favicon-196.png">
	<!-- iOS: -->
	<link rel="apple-touch-icon" href="assets/favicons/favicon-120.png" sizes="120x120">
	<link rel="apple-touch-icon" href="assets/favicons/favicon-152.png" sizes="152x152">
	<link rel="apple-touch-icon" href="assets/favicons/favicon-180.png" sizes="180x180">
	<!-- Windows 8 IE 10: -->
	<meta name="msapplication-TileColor" content="#FFFFFF">
	<meta name="msapplication-TileImage" content="assets/favicons/favicon-144.png">
	<!-- Windows 8.1 + IE11 and above: -->
	<meta name="msapplication-config" content="assets/favicons/browserconfig.xml"/>
	
    <!-- Responsive design scaling adaptation. -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Import CSS Framework Bluma. -->
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.0/css/bulma.min.css"/>

    <!-- Import custom Stylesheets and keep the rendering engine awake using PHP trick -->
    <link rel="stylesheet" href="stylesheet-unlicense.css?v=<?php echo time(); ?>">
	
	<!-- Load Font Awesome CSS for glyph support. -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Load w3.css Framework. -->
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<!-- End Header. -->
</head>

<!-- Declare Body. -->
<body style="font-family: minecraft; height: 100%; line-height: 1.6">

  <!-- Header with full-height image. (Contains MIT Derived Code - TODO: Add LICENSE) -->
  <div class="background-wrapper w3-container">
    <span style="padding: 16px 32px">
      <!-- Declare animated shooting stars from CSS. -->
      <span class="section">
      <span class="star"></span>
      <span class="star"></span>
      <span class="star"></span>
      <span class="star"></span>
      <span class="star"></span>
      <span class="star"></span>
      <span class="star"></span>
      <span class="star"></span>
      <span class="star"></span>
      <span class="star"></span>
      </span>
	</span>
	<div class="w3-center" style="margin-top: 96px">
	  <br>
      <mark class="main-text"> &nbsp;<span class="bukkit-green"> The Open Source,</span>&nbsp;<br>&nbsp;<span class="bukkit-red"> Community-First,&nbsp;</span><br><span class="bukkit-dark-purple">&nbsp; <span class="bukkit-dark-red"><u>OG</u></span> Minecraft Experience! </span>&nbsp;
		  <br><br>
	  </mark>
	  <h1 style="font-family: minecraft; text-shadow: 3px 3px 1px black" class="bukkit-blue">
	    <?php
        $waiting_day = 1686837600;
        $time_left = $waiting_day - time();

        $days = floor($time_left / (60*60*24));
        $time_left %= (60 * 60 * 24);

        $hours = floor($time_left / (60 * 60));
        $time_left %= (60 * 60);

        $min = floor($time_left / 60);
        $time_left %= 60;

        echo "$days days, $hours hours, and $min minutes until soft launch.";
	    ?>
	  </h1>
      <br>
      <h2><a class="w3-button glow" style="text-decoration: none" href="https://discord.gg/ma9pMYpBU6">&nbsp; <span class="bukkit-blue"><strong>Join Server</strong></span> &nbsp;</a></h2>
	  <br><br>
	</div>
  </div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <div class="w3-xlarge w3-section">
	<a href="https://www.facebook.com/True-OG-108371428331070"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
	<a href="https://twitter.com/TrueOGSMP"><i class="fa fa-twitter w3-hover-opacity"></i></a>
	<a href="https://reddit.com/r/trueog"><i class="fa fa-reddit w3-hover-opacity"></i></a>
  </div>
 
  <p>Powered by <a href="https://www.w3schools.com/w3css/">w3.css</a></p>
  <a href="https://github.com/NotAlexNoyle/true-og/tree/main/website"><p>Source Code</p></a>

  <p><a href="https://shop.trueog.net/">Rank Store</a</p>

  <div class="container">
    <div class="content has-text-centered">
      <p> 
        Forked from <strong>Bulma</strong> by <a href="http://jgthms.com">Jeremy Thomas</a>.
        <br>The source code is licensed <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. <br>
      </p>
    </div>
  </div>
</footer>

</html>
