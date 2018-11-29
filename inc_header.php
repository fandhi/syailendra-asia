<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
   <meta name="keyword" content=""/>
   <meta name="description" content=""/>
   <meta name="google-site-verification" content=""/>
   <meta name="robots" content="all,index,follow"/>
   <meta name="googlebot" content="all,index,follow"/>
   <meta name="allow-search" content="yes"/>
   <meta name="revisit-after" content="3 days" />
   <meta name="copyright" content="&copy; 2013 Web Architect Jakarta, Indonesia"/>
   <meta name="author" content="Web Architect"/>
   <meta name="distribution" content="global"/>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Syailendra</title>
	<link rel="shortcut icon" type="images/x-icon" href="favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>	
	<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css"/>
	<link rel="stylesheet" type="text/css" href="css/flexslider.css"/>	
	<link rel="stylesheet" type="text/css" href="css/accordion.css"/>	
	<link rel="stylesheet" type="text/css" href="css/embed_font.css"/>
  
  <script type="text/javascript">
  var bs_root = "/syailendra-asia/";
  </script>
	<script type="text/javascript" src="js/jquery_1.7.2.js"></script>		
	<script type="text/javascript" src="js/jquery_ui-1.9.0.js"></script>		
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/bootstrap-collapse.js"></script>		
	<script type="text/javascript" src="js/modernizr.js"></script>
  <script type="text/javascript" src="js/jquery.flexslider.js"></script>	
  <script type="text/javascript" src="js/jquery_scrolltopcontrol.js"></script>
  <script type="text/javascript" src="js/jquery_accordion.js"></script>
  <script type="text/javascript" src="js/responsive-images/jquery_matchmedia.js"></script>
  <script type="text/javascript" src="js/responsive-images/jquery_picturefill.js"></script>
  <script type="text/javascript" src="js/jquery_functions.js"></script>
	
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>	  	  		
		<script src="js/html5shiv.js"></script>
    <![endif]-->
	
	<!--[if IE 7]>
		<link rel="stylesheet" type="text/css" href="css/style_ie7.css"/>
	<![endif]-->
	<!--[if IE 8]>
		<link rel="stylesheet" type="text/css" href="css/style_ie8.css"/>
	<![endif]-->
	<!--[if IE 9]>
		<link rel="stylesheet" type="text/css" href="css/style_ie9.css"/>
	<![endif]-->
	
	
</head>

<body>
	
	<header>
		<section class="head_top">
			<div class="container">
			
<!--				<ul id="langTop" class="nav_top_left">
					<li><a class="login" href="#">Login</a></li>
					<li><a href="#">Register</a></li>
					<li class="last">
						<p class="clickLang">English</p>
						<div class="showLang">
							<a href="">English</a>
							<a href="">Indonesia</a>
						</div>
					</li>
				</ul> -->
           <form id="search0" class="search" method="post">
						<input type="text" value="Search" onfocus="if(value=='Search')value='';" onblur="if(value=='')value='Search'"/>
						<input type="submit" value=""/>
					</form>
        <ul class="nav_top_right">
           <li><a href="sitemap.php">Sitemap</a></li>
           <!--<li><a href="news.php">News</a></li>-->
           <li><a href="contact.php">Contact</a></li>
           <li><a class="with_logo" href="http://syailendra-group.com/" target="_blank">Syailendra Group</a></li>
        </ul>   				

      </div>
		</section>

     <section class="head_bottom navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-inner">
           <div class="container">
              <a class="logo" href="index.php"><img src="images/material/logo.png" alt=""/></a>
              <div class="nav-box">
<!--                 <ul id="langMainmenu" class="nav_top_left">
                    <li class="last">
                       <p class="clickLang">English</p>
                       <div class="showLang">
                          <a href="">English</a>
                          <a href="">Indonesia</a>
                       </div>
                    </li>
                 </ul>-->
              <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                 <span class="text-menu">
                    <?php
                    if ($page == 'page0'){
                       echo  'Home';                       
                    } 
                    if ($page == 'page1') {
                       echo 'About Us';
                    }
                    if ($page == 'page2') {
                       echo 'Investment Strategy';
                    }
                    if ($page == 'page3') {
                       echo 'Our Offerings';
                    }
                    if ($page == 'page4') {
                       echo 'Our Team';
                    }
                    if ($page == 'page5') {
                       echo 'Global Advisory Board';
                    }
                    ?>
                 </span>
                 <span class="text-default">Main Menu</span>
                 <span class="icon-bar"></span>
              </button>
              <div class="nav-collapse collapse">
                 <ul class="nav">
                    <li><a <?php if ($page == 'page1') echo ' class="active"' ?> href="about.php">About Us</a></li>
                    <li><a <?php if ($page == 'page2') echo ' class="active"' ?> href="investment.php">Investment Strategy</a></li>
                    <li><a <?php if ($page == 'page3') echo ' class="active"' ?> href="offering.php">Our Offerings</a></li>
                    <li><a <?php if ($page == 'page4') echo ' class="active"' ?> href="team.php">Our Team</a></li>
                    <li><a <?php if ($page == 'page5') echo ' class="active"' ?> href="advisory.php">Global Advisory Board</a></li>
                    <li class="last">
                          <form id="search1" class="" method="post">
                             <input type="text" value="Search" onfocus="if(value=='Search')value='';" onblur="if(value=='')value='Search';"/>
                             <input type="submit" value=""/>
                          </form>
                    </li>
                 </ul>
              </div>
                 </div>
           </div>
        </div>
		</section>
	</header><!-- end header -->
	

