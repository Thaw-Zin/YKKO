<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<title> YKKO Kyay-Oh & BBQ</title>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="Authentic Kyah-oh with our unique and original grill">
    <meta name="robots" content="index,follow">
    <meta name="author" content="Pixel Directs">
    <meta name="distribution" content="global">
	<!-- Twitter Card data -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="YKKO Kyay-Oh & BBQ">
    <meta name="twitter:description" content="Authentic Kyah-oh with our unique and original grill">
    <meta name="twitter:url" content="http://www.ykko.com.mm" />
    <meta name="twitter:creator" content="@pixel direct">
    <!-- Twitter Summary card images must be at least 120x120px -->
    <meta name="twitter:image" content="http://www.example.com/image.jpg">
    <!-- Open Graph data -->
    <meta property="og:title" content="YKKO Kyay-Oh & BBQ" />
    <meta property="og:url" content="http://www.ykko.com.mm/" />
    <meta property="og:type" content="restaurant" />
    <meta property="og:description" content="Authentic Kyah-oh with our unique and original grill" />
    <meta property="og:image" content="http://example.com/image.jpg" />
    <meta property="og:site_name" content="YKKO" />
    <!-- Meta tag end -->
    <link rel="canonical" href="http://www.ykko.com.mm">
	<link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" href="css/style.css" type="text/css" />
    <!-- Custom CSS -->
    <link href="css/full-slider.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>  
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<!--<script type="text/javascript" src="js/myapplication.js"></script>
	<script type="text/javascript" src="js/test.js"></script>-->
    <!-- Script to Activate the Carousel -->
</head>
<body style="overflow-y:hidden;">
    	<!-- Navigation -->
    		<?php include('mb_menu.php') ?>
		<!--- mobile menu end -->
	    <!-- Full Page Image Background Carousel Header -->
	    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="5000">
			<div class="container-fluid main-menu" style="position:absolute; z-index:999;">
				<!-- ///// Menu //// -->
					<?php include('main_menu.php') ?>
					<input type='hidden' name='hid' value='1' id='hidd'>
				<!-- //// Menu End //// -->
			</div>
			<div class="container" >
				<div class="row">
					<div class="col-md-8 tlb-submenu">
						<div class="sub-menu">
							<ul>
								<li><a href="location"> Our Locations</a></li>
								<li><a href="menu"> Our Menu</a></li>
								<li><a href="services"> Our Services</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4"> </div>
				</div>
			</div> 
			<div class="container main-footer">
				<div class="row footer home-footer">
					<div class="col-md-6 col-xs-6">
						<p> &copy 2015 YKKO GROUP OF COMPANIES DESIGNED BY <a href="http://pixeldirects.com" target="new" title="Pixel Directs - Cretive Agency" id="toPixie">PIXEL DIRECTS</a></p>
					</div>
					<div class="col-md-6 col-xs-6"> 
						<p style="text-align:right;"> <a href="https://www.facebook.com/YKKOmyanmar" target="_blank" class="facebook">JOIN US ON FACEBOOK! </a> </p>
					</div>
				</div>
			</div>
	        <!-- Indicators -->
	        <ol class="carousel-indicators">
	            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	            <li data-target="#myCarousel" data-slide-to="1"></li>
	            <li data-target="#myCarousel" data-slide-to="2"></li>
	            <li data-target="#myCarousel" data-slide-to="3"></li>
	        </ol>
	        <!-- Wrapper for Slides -->
	        <div class="carousel-inner">
	            <div class="item active">
	                <!-- Set the first background image using inline CSS below. -->
	                <div class="fill" style="background-image:url('images/home/service.jpg');"></div>
	                <div class="carousel-caption">
	                    <h1> SERVICE FRIENDLY</h1>
	                    <h2 style="margin-top:0;"> Skillful staff. Warm smile</h2>
	                </div>
	            </div>
	            <div class="item">
	                <!-- Set the second background image using inline CSS below. -->
	                <div class="fill" style="background-image:url('images/home/family.jpg');"></div>
	                <div class="carousel-caption">
	                    <h1> FAMILY FRIENDLY</h1>
	                    <h2 style="margin-top:0;"> Open space seating and private rooms</h2>
	                </div>
	            </div>
	            <div class="item">
	                <!-- Set the third background image using inline CSS below. -->
	                <div class="fill" style="background-image:url('images/home/social.jpg');"></div>
	                <div class="carousel-caption">
	                    <h1> A PLACE TO RELAX AND ENJOY</h1>
	                    <h2 style="margin-top:0;"> Just you and a cup of coffee or with great group of companies </h2>
	                </div>
	            </div>
	            <div class="item">
	                <!-- Set the third background image using inline CSS below. -->
	                <div class="fill" style="background-image:url('images/home/kyayoo.jpg');"></div>
	                <div class="carousel-caption">
	                    <h1> AUTHENTIC KYAY-OH</h1>
	                    <h2 style="margin-top:0;"> With our unique & original recipe</h2>
	                </div>
	            </div>
	        </div>
	        <!-- Controls -->
	        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
	            <span class="icon-prev"></span>
	        </a>
	        <a class="right carousel-control" href="#myCarousel" data-slide="next">
	            <span class="icon-next"></span>
	        </a>
	    </div>
	    <script type="text/javascript">
			function menu()
			{
				var ans = document.getElementById('hidd').value;
				if(ans==1)
				{
					document.getElementById('home').className='active';
					document.getElementById('mb_home').className='active';
				}
			}
			menu();
		</script>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-72017849-1', 'auto');
		  ga('send', 'pageview');

		</script>
		<script type="application/ld+json">
			{ "@context" : "http://schema.org",
			  "@type" : "Restaurant",
			  "name" : "YKKO",
			  "url" : "http://www.ykko.com.mm",
			  "contactPoint" : [
			    { "@type" : "ContactPoint",
			      "telephone" : "+95 951-573 505",
			      "contactType" : "reservations"
			    } ],
			  "sameAs" : [ "https://www.facebook.com/YKKOmyanmar"]
			}
		</script>
	   	<script type="text/javascript" src="js/retina.min.js"></script>
</body>

</html>
