<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<title> YKKO Kyay-Oh & BBQ</title>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="keywords" content="YKKO, Must eat in Myanmar, Kyay oh, Noodle Soup, BBQ & Grill, Satay, Myanmar Food, ykko kyay-oh & sichet">
	    <meta name="description" content="No.(24/26), 7th Floor,Race Course Condominium,South Race Course Street, Tamwe Township., Yangon, Myanmar, 11211">
	    <meta name="robots" content="index,follow">
	    <meta name="author" content="Pixel Directs">
	    <meta name="distribution" content="global">
		<!-- Twitter Card data -->
	    <meta name="twitter:card" content="summary">
	    <meta name="twitter:title" content="YKKO Kyay-Oh & BBQ">
	    <meta name="twitter:description" content="No.(24/26), 7th Floor,Race Course Condominium,South Race Course Street, Tamwe Township., Yangon, Myanmar, 11211">
	    <meta name="twitter:url" content="http://www.ykko.com.mm/contact/" />
	    <meta name="twitter:creator" content="@pixel direct">
	    <!-- Twitter Summary card images must be at least 120x120px -->
	    <meta name="twitter:image" content="http://www.example.com/image.jpg">
	    <!-- Open Graph data -->
	    <meta property="og:title" content="YKKO Kyay-Oh & BBQ" />
	    <meta property="og:url" content="http://www.ykko.com.mm/contact/" />
	    <meta property="og:type" content="restaurant" />
	    <meta property="og:description" content="No.(24/26), 7th Floor,Race Course Condominium,South Race Course Street, Tamwe Township., Yangon, Myanmar, 11211" />
	    <meta property="og:image" content="http://example.com/image.jpg" />
	    <meta property="og:site_name" content="YKKO" />
	    <link rel="canonical" href="http://www.ykko.com.mm/contact">
		<link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
	    <!-- Meta tag end -->
		<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>  
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/myapplication.js"></script>
		<script type="text/javascript" src="js/fixed-scroll.js"></script>
		<script type="text/javascript" src="js/flowup.js"></script>
		<script type="text/javascript" src="js/jquery-ui.min.js"></script>
		<script type="text/javascript" src="js/back-to-top.js"></script> 
		<!-- /////  css file //// -->
		<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css?v=s1" type="text/css" />
		<link rel="stylesheet" type="text/css" href="css/jquery-ui.css"> 
		<script src="https://maps.google.com/maps/api/js?sensor=false"></script>
		
		<script>
		var myCenter=new google.maps.LatLng(16.8148083,96.1707624);
		function initialize()
		{
			if($(window).width() > 768 )
			{
		 	var mapProp = {
		   		center:myCenter,
		   		zoom:16,
		   		mapTypeId:google.maps.MapTypeId.ROADMAP
		   		};
		   	}
		   	else
		   	{
		   		var mapProp = {
		   		center:myCenter,
		   		zoom:16,
		   		scrollwheel: false,
    			draggable: false,
		   		mapTypeId:google.maps.MapTypeId.ROADMAP
		   		};
		   	}
		var map=new google.maps.Map(document.getElementById("ContactMap"),mapProp);

		var url = 'images/ykko-marker.png?v=1';
		if(window.devicePixelRatio > 1.5){
        url = 'images/ykko-marker@2x.png?v=1';
    	}

    var image = {
        url: url,
        scaledSize: new google.maps.Size(38, 38),
        origin: new google.maps.Point(0,0)
    };

		var marker=new google.maps.Marker({
		  position:myCenter,
		  //icon: 'images/ykko-marker.png'
		 icon: image
		  });
		marker.setMap(map);
		}
		google.maps.event.addDomListener(window, 'load', initialize);
		</script>  
	</head>
	<body>
		<div class="page">
			<!--- ///mobile menu/// -->
				<?php include('mb_menu.php') ?>
			<!--- mobile menu end -->
			<div class="contactus-bg">
				<div class="container-fluid main-menu">
					<!-- ///// Menu //// -->
						<?php include('main_menu.php') ?>
						<input type='hidden' name='hid' value='6' id='hidd'>
					<!-- //// Menu End //// -->
				</div>
				<div class="container contact">
					<div class="row" style="margin-right:0px;">
						<div class="col-md-6 contact-office">
							<h1> MAIN OFFICE</h1>
							<p> No.(24/26), 6th Floor, South Race Course Street,<br>Race Course Condominium, Tamwe Township,<br>Yangon, Myanmar</p>
							<p> Office Hour : <br> 9:00 am - 5:30 pm</p>
							<p> Office Phone :<br>+951 401192, +951 401179 </p>
							<p> Hotline :<br/>+959 440 133 330</p>
							<p> Fax : <br/>+951 401263</p>
							<p> Email :<br><a href="mailto:marketing@ykko.com.mm?Subject=Hello YKKO"> marketing
								@ykko.com.mm</a></p>
						</div>
						<div class="col-md-6" style="padding-right:0px;">
							<div id="ContactMap"></div>
						</div>
					</div>
				</div>
			</div>			
    		<div class="mb-contactmap"><a href="https://www.google.com/maps/place/Device+Services+Company+Limited/@16.815004,96.17054,17z/data=!3m1!4b1!4m2!3m1!1s0x30c1ecb43a1a4095:0xf7411c8d1df2928c">View Map</a></div>
			<div class="container main-footer">
				<div class="row footer">
					<div class="col-md-6 col-xs-6">
						<p> &copy 2015 YKKO GROUP OF COMPANIES DESIGNED BY <a href="http://pixeldirects.com" target="new" title="Pixel Directs - Cretive Agency" id="toPixie">PIXEL DIRECTS</a></p>
					</div>
					<div class="col-md-6 col-xs-6"> 
						<p style="text-align:right;"><a href="https://www.facebook.com/YKKOmyanmar" target="_blank" class="facebook">JOIN US ON FACEBOOK!</a></p>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript">
			function menu()
			{
				var ans = document.getElementById('hidd').value;
				if(ans==6)
				{
					document.getElementById('contact').className='active';
					document.getElementById('mb_contact').className='active';
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
			  "url" : "http://www.ykko.com.mm/contact",
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