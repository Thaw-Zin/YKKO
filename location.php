<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<title> YKKO Kyay-Oh & BBQ</title>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="keywords" content="YKKO, Must eat in Myanmar, Kyay oh, Noodle Soup, BBQ & Grill, Satay, Myanmar Food, ykko kyay-oh & sichet">
	<meta name="description" content="Find a nearest YKKO for your cravings.">
	<meta name="robots" content="index,follow">
	<meta name="author" content="Pixel Directs">
	<meta name="distribution" content="global">
	<!-- Twitter Card data -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:title" content="YKKO Kyay-Oh & BBQ">
	<meta name="twitter:description" content="Find a nearest YKKO for your cravings.">
	<meta name="twitter:url" content="http://www.ykko.com.mm/location/" />
	<meta name="twitter:creator" content="@pixel direct">
	<!-- Twitter Summary card images must be at least 120x120px -->
	<meta name="twitter:image" content="http://www.example.com/image.jpg">
	<!-- Open Graph data -->
	<meta property="og:title" content="YKKO Kyay-Oh & BBQ" />
	<meta property="og:url" content="http://www.ykko.com.mm/location/" />
	<meta property="og:type" content="restaurant" />
	<meta property="og:description" content="Find a nearest YKKO for your cravings." />
	<meta property="og:image" content="http://example.com/image.jpg" />
	<meta property="og:site_name" content="YKKO" />
	<link rel="canonical" href="http://www.ykko.com.mm/location">
	<link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
	<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/test.js"></script>
	<script type="text/javascript" src="js/myapplication.js"></script>
	<script type="text/javascript" src="js/fixed-scroll.js"></script>
	<script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
	<script type="text/javascript" src="js/back-to-top.js"></script> 
	<!-- /////  css file //// -->
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<script src="https://maps.google.com/maps/api/js?sensor=false"></script>

	<script>
		function initialize() {
			var locations = [
			[
			"Yankin",
			"No.(10), Thit Sar Street, Yangon",
			"16.7850553",
			"96.1713889"
			],
			[
			"Bahan",
			"No.(28), Saya San Road, Yangon",
			"16.8165266",
			"96.1584927"
			],
			[
			"Thingangyun",
			"No.(A1-001), Zawtika Housing, Lay Daung Kan Road, Junction Zawana, Thingangyun Township, Yangon. ",
			"16.8273102",
			"96.1900128"
			],
			[
			"Seik Kan Thar",
			"No.(286), Seik Kan Thar Street, Yangon",
			"16.7778753",
			"96.1633018"
			],
			[
			"Hledan",
			"No.(35), Insein Road(Near Hledan Junction), Yangon",
			"16.8293883",
			"96.1304298"
			],
			[
			"MICT Park",
			"Special Canteen, MICT Park, Universities of Hlaing Compus, Thamine College Street, Hlaing Township, Yangon",
			"16.848417",
			"96.1277625"
			],
			[
			"8-Mile",
			"No.(57), Room(G/A), Ground Floor, (Near 8-Mile Junction), Kyaik Wine Pagoda Road, Da Na Thiri Tower, Yangon",
			"16.8646958",
			"96.1413732"
			],
			[
			"Thaketa",
			"No.(14-E), Room(105), Ground Floor (Capital Hypermarket), Min Nandar Road, Dawpon Township, Yangon.",
			"16.863855",
			"96.184943"
			],
			[
			"Thamine",
			"No.(114), 1st Floor, Corner of Yangon-Insein Main Road & Thamine Railway Station Street, Quarter (2), Yangon",
			"16.8622747",
			"96.1204606"
			],
			[
			"Junction Square",
			"Room(S-201), Between Pyay Road & Kyuntaw  Street, Near Agriculture (Bus Stop), Yangon",
			"16.8173379",
			"96.1314708"
			],
			[
			"Race Course",
			"No.(24/26), Ground Floor, South Race Course Street, (Race Course Condo), Yangon",
			"16.8145449",
			"96.1704866"
			],
			[
			"Wardan",
			"No.(790), Room(112/113), Ground Floor(Da Na Thiha Center), Corner of Bogyoke Aung San Road And Wardan Street, Yangon",
			"16.7799303",
			"96.1395473"
			],
			[
			"Shwe Baho",
			"No.(01-03), Building(B), Ground Floor, Myittar Yeik Mon Housing, Thamain Bayan Road, Yangon",
			"16.8108089",
			"96.1763427"
			],
			[
			"Dagon Center II",
			"No.(01-03), No.(3/4), 5th Floor, Pyay Road (Dagon Centre II), Yangon",
			"16.8044691",
			"96.1375809"
			],
			[
			"Shwe Gone Daing Ocean",
			"Room(113), Ground Floor, Corner of Shwe Gone Daing Road and Banyardala Road, Yangon",
			"16.8086491",
			"96.1695309"
			],
			[
			"People's Park",
			"Room(G-2), People's Park and Square (Myanmar Cultural Valley), U Wisara Road, Yangon",
			"16.7980626",
			"96.1451034"
			],
			[
			"South Dagon",
			"Room(3), City Mart Supermarket (South Dagon Branch), Corner of Hlawgar Road & Myeik Road, South Dagon Township, Yangon.",
			"16.8481916",
			"96.2364338"
			],
			[
			"Star City",
			"Building (A-1), Wing (C), Middle Room, Star City, Thanlyin, Yangon",
			"16.7766434",
			"96.2295053"
			],
			[
			"Insein",
			"No.(24), Lan Thit Road, Nant Thar Gone Quarter, Yangon",
			"16.88951",
			"96.10964"
			],
			[
			"Junction Mawtin",
			"Room(403), Level(4), Maw Tin Tower, Corner of Lann Thit Street and Anawrahtar Road, Yangon",
			"16.7774772",
			"96.1421179"
			],
			[
			"City Mart(Shwe Pin lone)",
			"Room(4/5), City Mart Supermarket, Ground Floor, Bayintnaung Road, (25)Quarter,ShwePinLon Housing, North Dagon Township, Yangon.",
			"16.8593",
			"96.1994"
			],
			[
			"City Mart(Ayarwon)",
			"Shop(06), No.(162/163), (7)Quater, Ayeyarwon Road, Myakwarnyo Housing, Thaketa Township, Yangon.",
			"16.8044",
			"96.20895"
			],
			[
			"City Mart(waizayandar)",
			"Shop (06), No (56,56,58) , (8) Quarter, Waizayantar Road, South Okkalapa Township, Yangon.",
			"16.8598919",
			"96.1606782"
			],
			[
			"HAGL(shopping center)",
			"Room(316), HAGL Shopping Mall, Kaba Aye Road, Bahan Township, Yangon.",
			"16.8243627",
			"96.1556535" 
			],
			[
			"Chan Aye Thar San",
			"No.(70), (30) Street, Between (64x 65), Chan Aye Thar Zan Township, Mandalay.",
			"21.9724778",
			"96.1090061" 
			],
			[
			"73 Ocean",
			"Ocean Super Centre, Shop(66), Building(2), 73th Street, Between Thazin & Ngu War Street,Mingalar Mandalay Prestige Community,Chan Mya Tha Zi Township, Mandalay.",
			"21.939055",
			"96.0925356" 
			],
			[
			"Pinlon Sittaung",
			"Shop (07), City Mart Supermarket, Ground Floor, Corner of Pin lon & Sittaunt Road, North Dagon Township, Yangon.",
			"16.8714808",
			"96.1970324" 
			],
			[
			"City Mart(19th Street)",
			"Room(8), City Mart Supermarket, Ground Floor, 19th Street, Between 65th x 66th Street, AungMyayThaZan Township, Mandalay.",
			"21.9917007",
			"96.1176091" 
			],
			[
			"Tha Pyay Gone",
			"Near Tha Pyay Gone Market, Tha Pyay Gone Hill Top, Nay Pyi Taw.",
			"19.7402329",
			"96.1177538" 
			],
			[
			"Capital Hypermarket",
			"No.(116), Corner of YarzaThingaha Road & Diplomatic Road  (Infront of Hotel Zone), Nay Pyi Taw.",
			"19.7101648",
			"96.111998" 
			],
			[
			"ocean Oattara Thiri",
			"No.(9), Room(101), Ground Floor, Corner of Zay Ya Htar Ni Road & Mandalay Road, Oattarathiri Township, Nay Pyi Taw.",
			"19.8159276",
			"96.1534062" 
			],
			[
			"Junction Center",
			"Yan Aung Myin Quarter, Yarza Thingaha Road(Infront of Hotel Zone), Dadkhina Thiri Township, Nay Pyi Taw.",
			"19.712671",
			"96.1092521" 
			],
			[
			"Pyin Oo Lwin",
			"UG-25, Ruby Mart, Yangon - Mandalay Road, Pyin Oo Lwin.",
			"22.03785",
			"96.49012" 
			],
			[
			"Myeik",
			"No.(4), End of  Thae' Kwin Food Court, Kannar Street, Thaketa Quarter, Myeik.",
			"12.46288",
			"98.59766" 
			],
			[
			"River View",
			"Dawei Jetty, Corner of Strand Road and Dawei Bridge Street, Sit Kae Kone Township, Mawlamyaing.",
			"16.4806378",
			"97.6186802" 
			]
			];
			gmarkers = [];
			if($(window).width() > 768 ){
				var map = new google.maps.Map(document.getElementById('googlemaps'), {
					zoom: 15,
					center: new google.maps.LatLng(16.8257221, 96.1284557), 
					mapTypeId: google.maps.MapTypeId.ROADMAP
				});
			}
			else
			{
				var map = new google.maps.Map(document.getElementById('googlemaps'), {
					zoom: 15,
					center: new google.maps.LatLng(16.8257221, 96.1284557), 
					scrollwheel: false,
					draggable: false,
					mapTypeId: google.maps.MapTypeId.ROADMAP
				});
			}
			var infowindow = new google.maps.InfoWindow();

			var url = 'images/ykko-marker.png';
			if(window.devicePixelRatio > 1.5){
				url = 'images/ykko-marker@2x.png';
			}

			var image = {
				url: url,
				scaledSize: new google.maps.Size(38, 38),
				origin: new google.maps.Point(0,0)
			};

			function createMarker(latlng, html) {
				var marker = new google.maps.Marker({
	        //position: latlng,
	        position: new google.maps.LatLng(locations[i][2], locations[i][3]),
	       	//position:center,
	  		//icon: 'images/ykko-marker.png',
	  		icon:image,
	  		map: map
	  	});

				google.maps.event.addListener(marker, 'click', function() {
					infowindow.setContent(html);
					infowindow.open(map, marker);
					map.setCenter(marker.getPosition());
				});
				return marker;
			}

			for (var i = 0; i < locations.length; i++) {
				gmarkers[locations[i][0]] =
				createMarker(new google.maps.LatLng(locations[i][2], locations[i][3]), locations[i][0] + "<br>" + locations[i][1]);
			}
		}
		google.maps.event.addDomListener(window, 'load', initialize);
	</script>

	<style>
		#googlemaps
		{
			height: 92%; 
			width: 100%; 
			position:absolute;
			z-index:0;
			top:0;
			left:0;
			margin-bottom:40px;
		}
	</style>
</head>
<body>
	<div class="page" style="border:none;">
		<div id="googlemaps"></div> 
		<!--- mobile menu -->
		<?php include('mb_menu.php') ?>
		<!--- mobile menu end -->

		<div class="container-fluid main-menu" style="position:absolute; z-index:999;">
			<!-- ///// Menu //// -->
			<?php include('main_menu.php') ?>
			<input type='hidden' name='hid' value='4' id='hidd'>
			<!-- //// Menu End //// -->
		</div>
		<!-- /////////menu end ////////-->
		<div class="location2-bg">

			<div class="container location2 large-location">
				<div class="row">
					<div class="col-md-3 location-category">
						<div class="city-category">
							<h4> Search by city:</h4>
							<div class="searching">
								<a data-toggle="dropdown" id="city-township"> <span id="city-group">Show all cities</span> <span class="pull-right down-arrow"> </span> <span class="pull-right up-arrow"> </span></a>
								<ul class="dropdown-menu city-dropdown" role="menu" aria-labelledby="dLabel">
									<li><a href="#" id='cityall'> Show All Cities</a></li>
									<li><a href="#" id='city1'> Yangon</a></li>
									<li><a href="#" id='city2'> Mandalay</a></li>
									<li><a href="#" id='city3'> Nay Pyi Taw</a></li>
									<li><a href="#" id='city4'> Pyin Oo Lwin</a></li>
									<li><a href="#" id='city5'> Myeik</a></li>
									<li><a href="#" id='city6'> Mawlamyaing</a></li>
								</ul>
							</div>
						</div>
						<div class="township-category">
							<h4> Filter by township:</h4>
							<div class="searching">
								<a data-toggle="dropdown" id="city-township"><span id="township-group">Show All Township</span> <span class="pull-right down-arrow"> </span> <span class="pull-right up-arrow"> </span></a>
								<ul class="dropdown-menu township-dropdown" role="menu" aria-labelledby="dLabel">
									<li><a href="#" id='townshipall'> Show All Township</a></li>
									<li><a href="#" id='township1'> Yankin</a></li>
									<li><a href="#" id='township2'> Bahan</a></li>
									<li><a href="#" id='township3'> Tamwe</a></li>
									<li><a href="#" id='township4'> Thingangyun</a></li>
									<li><a href="#" id='township5'> Kyauktada</a></li>
									<li><a href="#" id='township6'> Kamayut</a></li>
									<li><a href="#" id='hlaing'> Hlaing</a></li>
									<li><a href="#" id='township7'> Mayangone</a></li>
									<li><a href="#" id='township8'> Lanmadaw</a></li>
									<li><a href="#" id='township9'> Thaketa</a></li>
									<li><a href="#" id='township10'> Sanchaung</a></li>
									<li><a href="#" id='township11'> Insein</a></li>
									<li><a href="#" id='township12'> South Okkalapa</a></li>
									<li><a href="#" id='township13'> Dagon</a></li>
									<li><a href="#" id='township14'> North Dagon</a></li>
									<li><a href="#" id='township15'> South Dagon</a></li>
									<li><a href="#" id='township16'> SitKae Kone</a></li>
									<li><a href="#" id='township17'> ChanAye TharZan</a></li>
									<li><a href="#" id='township18'> Oattarathiri</a></li>
									<li><a href="#" id='township19'> Dadkhina Thiri</a></li>
									<li><a href="#" id='township20'> ChanMya Tha Zi</a></li>
									<li><a href="#" id='township21'> AungMyay Tha Zan</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-9" style="padding-left:0em;">
						<!-- location slider start -->
						<div id="myCarouselall" class="carousel slide location-2-slider cityall-data township" data-interval="false">
							<!-- Carousel items -->
							<div class="carousel-inner location-2-slide-container">
								<div class="item active">
									<div class="row">
										<div class="col-md-4 col-xs-4 address-box">
											<a href="javascript:google.maps.event.trigger(gmarkers['Yankin'],'click');" id="first-city">
												<h2> YANKIN </h2>
												<p> No. 10, Thit Sar Street,<br> Yankin Yownship, Yangon</p>
												<p> <i class="fa fa-phone fa-lg"></i> : 951-572 196</p>
												<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118749</p>
											</a>
										</div>
										<div class="col-md-4 col-xs-4 address-box">
											<a href="javascript:google.maps.event.trigger(gmarkers['Bahan'],'click');">
												<h2> SAYA SAN</h2>
												<p> No. 28, Saya San Road,<br> Bahan Township, Yangon</p>
												<p> <i class="fa fa-phone fa-lg"></i> : 951-860 3783, 951-703 208</p>
												<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118747</p> 
											</a>
										</div>
										<div class="col-md-4 col-xs-4 address-box">
											<a href="javascript:google.maps.event.trigger(gmarkers['Thingangyun'],'click');"> 
												<h2>THINGANGYUN </h2>
												<p> No. A1-001, Lay Daung Kan Road,<br> Junction Zawana, Thangangyun Township,Yangon</p>
												<p> <i class="fa fa-phone fa-lg"></i> : 951-573 505 Ext:216, 959-86-50850</p>
												<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118753</p> 
											</a>
										</div>

									</div><!--/row-fluid-->
								</div><!--/item-->

								<div class="item">
									<div class="row">
										<div class="col-md-4 col-xs-4 address-box">
											<a href="javascript:google.maps.event.trigger(gmarkers['Seik Kan Thar'],'click');">
												<h2> SEIKKAN THAR </h2>
												<p> No. 286, Seik Kan Thar Street,<br>Kyauktada Township, Yangon</p>
												<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118757</p>
											</a>
										</div>
										<div class="col-md-4 col-xs-4 address-box">
											<a href="javascript:google.maps.event.trigger(gmarkers['Hledan'],'click');">
												<h2> HLEDAN</h2>
												<p> No. 35, Insein Road (near Hledan Junction), Kamayut Township, Yangon</p>
												<p> <i class="fa fa-phone fa-lg"></i> : 951-512 543 </p>
												<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118751 </p>
											</a>
										</div>
										<div class="col-md-4 col-xs-4 address-box">
											<a href="javascript:google.maps.event.trigger(gmarkers['MICT Park'],'click');">
												<h2> MICT Park</h2>
												<p> Special Canteen, MICT Park, Universities of Hlaing Compus, Thamine College Street, Hlaing Township, Yangon</p>
												<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118816 </p>
											</a>
										</div>
									</div><!--/row-fluid-->
								</div><!--/item-->

								<div class="item">
									<div class="row">
										<div class="col-md-4 col-xs-4 address-box">
											<a href="javascript:google.maps.event.trigger(gmarkers['8-Mile'],'click');">
												<h2> 8-MILE</h2>
												<p> No. 57, Ground Floor, (near 8-Mile Junction), Kyaik Wine Pagoda Road, Da Na Thiri Tower, Mayangone Township, Yangon</p>
												<p> <i class="fa fa-phone fa-lg"></i> : 951-656 097</p>
												<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118755</p> 
											</a>
										</div>
										<div class="col-md-4 col-xs-4 address-box">
											<a href="javascript:google.maps.event.trigger(gmarkers['Thaketa'],'click');">
												<h2>THAKETA <i style="font-weight:400; font-size:48%; letter-spacing:1px;"> (CAPITAL HYPERMARKET)</i></h2>
												<p>No. 14-E, Room (105), Ground Floor, Min Nandar Road, Dawpon Township, Yangon</p>
												<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118761</p>
											</a>
										</div>
										<div class="col-md-4 col-xs-4 address-box">
											<a href="javascript:google.maps.event.trigger(gmarkers['Thamine'],'click');">
												<h2> THAMINE <i style="font-weight:400; font-size:48%; letter-spacing:1px;"> (CITY MART)</i></h2>
												<p>No. 114, 1st Floor, Corner of Insein & Thamine Railway Station Street, Quarter (2), Mayangone Township, Yangon.</p>
												<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118763</p>
											</a>
										</div>
									</div><!--/row-fluid-->
								</div><!--/item-->

								<div class="item">
									<div class="row">
										<div class="col-md-4 col-xs-4 address-box">
											<a href="javascript:google.maps.event.trigger(gmarkers['Junction Square'],'click');">
												<h2> JUNCTION SQUARE</h2>
												<p>Junction Square, Room (S-201), Between Pyay Road & Kyuntaw  Street, Near Agriculture (Bus Stop), Kamayut Township, Yangon.</p>
												<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118765</p>
											</a>
										</div>
										<div class="col-md-4 col-xs-4 address-box">
											<a href="javascript:google.maps.event.trigger(gmarkers['Race Course'],'click');">
												<h2> RACE COURSE <i style="font-weight:400; font-size:48%; letter-spacing:1px;"> (TAMWE)</i></h2>
												<p> No. 24/26, Ground Floor, South Race Course Street, (Race Course Condo), Tamwe Township, Yangon.</p>
												<p> <i class="fa fa-phone fa-lg"></i> : 951-401 187 Ext: 130</p>
												<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118759</p>
											</a>
										</div>
										<div class="col-md-4 col-xs-4 address-box">
											<a href="javascript:google.maps.event.trigger(gmarkers['Wardan'],'click');">
												<h2>WARDAN</h2>
												<p> No. 790, Room (112/113), Ground Floor (Da Na Thiha Center), Corner of Bogyoke Aung San Road And Wardan Street, Lanmadaw Township, Yangon.</p>
												<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118769</p>
											</a>
										</div>
										
									</div><!--/row-fluid-->
								</div><!--/item-->

								<div class="item">
									<div class="row">
										<div class="col-md-4 col-xs-4 address-box">
											<a href="javascript:google.maps.event.trigger(gmarkers['Shwe Baho'],'click');">
												<h2> SHWE BAHO</h2>
												<p>No. 01-03, Building (B), Ground Floor, Myittar Yeik Mon Housing, Thamain Bayan  Road, Tamwe Township, Yangon.</p>
												<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118771</p>
											</a>
										</div>
										<div class="col-md-4 col-xs-4 address-box">
											<a href="javascript:google.maps.event.trigger(gmarkers['Dagon Center II'],'click');">
												<h2> DAGON CENTER II</h2>
												<p> No. 3/4, 5th Floor, Pyay Road (Dagon Centre II), Sanchaung Township, Yangon.</p>
												<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118767</p>
											</a>
										</div>
										<div class="col-md-4 col-xs-4 address-box">
											<a href="javascript:google.maps.event.trigger(gmarkers['Shwe Gone Daing Ocean'],'click');">
												<h2> SHWE GONE DAING <i style="font-weight:400; font-size:48%; letter-spacing:1px;"> (OCEAN)</i></h2>
												<p> Room (113), Ground Floor, Corner of Shwe Gone Daing Road and Banyardala Road, Bahan Township, Yangon.</p>
												<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118775</p>
											</a>
										</div>
									</div><!--/row-fluid-->
								</div><!--/item-->

								<div class="item">
									<div class="row">
										<div class="col-md-4 col-xs-4 address-box">
											<a href="javascript:google.maps.event.trigger(gmarkers['People's Park'],'click');">
												<h2>PEOPLE'S PARK</h2>
												<p>Room (G-2), People's Park and Square (Myanmar Cultural Valley), U Wisara Road, Dagon Township, Yangon.</p>
												<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118781 </p>
											</a>
										</div>
										<div class="col-md-4 col-xs-4 address-box">
											<a href="javascript:google.maps.event.trigger(gmarkers['South Dagon'],'click');">
												<h2> SOUTH DAGON <i style="font-weight:400; font-size:48%; letter-spacing:1px;"> (CITY MART)</i></h2>
												<p>Room (3), City Mart Supermarket (South Dagon Branch), Corner of Hlawgar Road & Myeik Road, South Dagon Township, Yangon.</p>
												<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118773</p>
											</a>
										</div>
										<div class="col-md-4 col-xs-4 address-box">
											<a href="javascript:google.maps.event.trigger(gmarkers['Star City'],'click');">
												<h2> STAR CITY</h2>
												<p> Building (A-1), Wing (C), Middle Room,<br> Star City, Thanlyin, Yangon.</p>
												<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118759</p>
											</a>
										</div>
									</div><!--/row-fluid-->
								</div><!--/item-->

								<div class="item">
									<div class="row">
										<div class="col-md-4 col-xs-4 address-box">
											<a href="javascript:google.maps.event.trigger(gmarkers['Insein'],'click');">
												<h2> INSEIN</h2>
												<p> No. 24, Lan Thit Road, Nant Thar Gone Quarter, <br> Insein Township, Yangon.</p>
												<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118779</p>
											</a>
										</div>
										<div class="col-md-4 col-xs-4 address-box">
											<a href="javascript:google.maps.event.trigger(gmarkers['Junction Mawtin'],'click');">
												<h2> JUNCTION MAWTIN</h2>
												<p>Room (403), Level (4), Maw Tin Tower, Corner of Lann Thit Street and Anawrahtar Road,<br> Lanmadaw Township, Yangon.</p>
												<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118783</p>
											</a>
										</div>
										<div class="col-md-4 col-xs-4 address-box">
											<a href="javascript:google.maps.event.trigger(gmarkers['City Mart(Shwe Pin lone)'],'click');">
												<h2>SHWE PIN LONE <i style="font-weight:400; font-size:48%; letter-spacing:1px;"> (CITY MART)</i></h2>
												<p>Room (4/5), City Mart Supermarket, Ground Floor, Bayintnaung Road, (25) Quarter, ShwePinLon Housing, North Dagon Township, Yangon.</p>
												<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118785</p>
											</a>
										</div>
									</div><!--/row-fluid-->
								</div><!--/item-->

								<div class="item">
									<div class="row">
										<div class="col-md-4 col-xs-4 address-box">
											<a href="javascript:google.maps.event.trigger(gmarkers['City Mart(Ayarwon)'],'click');">
												<h2> AYARMON <i style="font-weight:400; font-size:48%; letter-spacing:1px;"> (CITY MART)</i></h2>
												<p> Shop (06), No. 162/163, (7) Quater,<br> Ayeyarwon Road, Myakwarnyo Housing,<br> Thaketa Township, Yangon.</p>
												<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118806</p>
											</a>
										</div>
										<div class="col-md-4 col-xs-4 address-box">
											<a href="javascript:google.maps.event.trigger(gmarkers['City Mart(waizayandar)'],'click');">
												<h2> WAIZAYANDAR <i style="font-weight:400; font-size:50%; letter-spacing:1px;"> (CITY MART)</i></h2>
												<p> Shop (06), No. 56,56,58,<br> (8) Quarter, Waizayantar Road, <br> South Okkalapa Township, Yangon.</p>
												<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118812</p>
											</a>
										</div>
										<div class="col-md-4 col-xs-4 address-box">
											<a href="javascript:google.maps.event.trigger(gmarkers['HAGL(shopping center)'],'click');">
												<h2>HOANG ANH GIA LAI <i style="font-weight:400; font-size:50%; letter-spacing:1px;"> (SHOPPING MALL)</i></h2>
												<p>Room (316), HAGL Shopping Mall, <br>Kaba Aye Road, Bahan Township,<br> Yangon.</p>
												<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118818</p>
											</a>
										</div>
									</div><!--/row-fluid-->
								</div><!--/item-->

								<div class="item">
									<div class="row">
										<div class="col-md-4 col-xs-4 address-box">
											<a href="javascript:google.maps.event.trigger(gmarkers['Pinlon Sittaung'],'click');"> 
												<h2> NORTH PIN LONE SIT TAUNG</h2>
												<p> Shop (07), City Mart Supermarket, Ground Floor, Corner of Pin lon & Sittaunt Road, North Dagon Township, Yangon</p>
												<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118820</p>
											</a>
										</div> 
										<div class="col-md-4 col-xs-4 address-box">
											<a href="javascript:google.maps.event.trigger(gmarkers['Chan Aye Thar San'],'click');"> 
												<h2> CHAN AYE THAR SAN </h2>
												<p> No. 70, (30) Street, Between (64x 65), Chan Aye Thar Zan Township, Mandalay. </p>
												<p> <i class="fa fa-phone fa-lg"></i> : 02-61257, 011201214</p>
												<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118795</p>
											</a>
										</div>
										<div class="col-md-4 col-xs-4 address-box">
											<a href="javascript:google.maps.event.trigger(gmarkers['73 Ocean'],'click');">
												<h2> 73 OCEAN <i style="font-weight:400; font-size:48%; letter-spacing:1px;"> (CAPITAL MALL)</i></h2>
												<p> Ocean Super Centre, Shop (66), Building (2), 73th Street, Between Thazin & Ngu War Street, Mingalar Mandalay Prestige Community, Chan Mya Tha Zi Township, Mandalay.</p>
												<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118797</p>
											</a>
										</div>
									</div><!--/row-fluid-->
								</div><!--/item-->

								<div class="item">
									<div class="row">
										<div class="col-md-4 col-xs-4 address-box">
											<a href="javascript:google.maps.event.trigger(gmarkers['City Mart(19th Street)'],'click');">
												<h2> CITY MART <i style="font-weight:400; font-size:48%; letter-spacing:1px;"> (19TH STREET)</i></h2>
												<p> Room (8), City Mart Supermarket, Ground Floor, 19th Street, Between 65th x 66th Street, AungMyayThaZan Township, Mandalay.</p>
												<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118802</p>
											</a>
										</div>
										<div class="col-md-4 col-xs-4 address-box">
											<a href="javascript:google.maps.event.trigger(gmarkers['Tha Pyay Gone'],'click');">
												<h2> THA PYAY GONE</h2>
												<p> Near Tha Pyay Gone Market, Tha Pyay Gone Hill Top, Nay Pyi Taw.</p>
												<p> <i class="fa fa-phone fa-lg"></i> : 067-414 687</p>
												<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118787</p>
											</a>
										</div>
										<div class="col-md-4 col-xs-4 address-box">
											<a href="javascript:google.maps.event.trigger(gmarkers['Capital Hypermarket'],'click');">
												<h2> CAPITAL <i style="font-weight:400; font-size:48%; letter-spacing:1px;"> (CAPITAL HYPERMARKET)</i></h2>
												<p> No. 116, Corner of YarzaThingaha Road & Diplomatic Road  (Infront of Hotel Zone), Nay Pyi Taw.</p>
												<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118791</p>
											</a>
										</div>
									</div><!--/row-fluid-->
								</div><!--/item-->

								<div class="item">
									<div class="row">
										<div class="col-md-4 col-xs-4 address-box">
											<a href="javascript:google.maps.event.trigger(gmarkers['ocean Oattara Thiri'],'click');"> 
												<h2> OCEAN OATTARATHIRI </h2>
												<p> No. 9, Room(101), Ground Floor, Corner of Zay Ya Htar Ni Road & Mandalay Road, Oattarathiri Township, Nay Pyi Taw.</p>
												<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118789</p>
											</a>
										</div>
										<div class="col-md-4 col-xs-4 address-box">
											<a href="javascript:google.maps.event.trigger(gmarkers['Junction Center'],'click');">
												<h2 class=""> JUNCTION CENTER</h2>
												<p>Yan Aung Myin Quarter, Yarza Thingaha Road (infront of Hotel Zone), Dadkhina Thiri Township, Nay Pyi Taw.</p>
												<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118793</p>
											</a>
										</div>
										<div class="col-md-4 col-xs-4 address-box">
											<a href="javascript:google.maps.event.trigger(gmarkers['Pyin Oo Lwin'],'click');">
												<h2> PYIN OO LWIN <i style="font-weight:400; font-size:48%; letter-spacing:1px;"> (RUBY MART)</i></h2>
												<p> UG-25, Ruby Mart, Yangon - Mandalay Road, Pyin Oo Lwin.</p>
												<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118808</p>
											</a>
										</div>
									</div><!--/row-fluid-->
								</div><!--/item-->
								<div class="item">
									<div class="row">
										<div class="col-md-4 col-xs-4 address-box">
											<a href="javascript:google.maps.event.trigger(gmarkers['Myeik'],'click');">
												<h2>MYEIK</h2>
												<p> No. 4, End of Thae' Kwin Food Court, Kannar Street, Thaketa Quarter, Myeik.</p>
												<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118814</p>
											</a>
										</div>
										<div class="col-md-4 col-xs-4 address-box">
											<a href="javascript:google.maps.event.trigger(gmarkers['River View'],'click');"> 
												<h2> MAWLAMYAING <i style="font-weight:400; font-size:48%; letter-spacing:1px;"> (RIVER VIEW )</i></h2>
												<p> Dawei Jetty, Corner of Strand Road and Dawei Bridge Street, Sit Kae Kone Township, Mawlamyaing.</p>
												<p> <i class="fa fa-phone fa-lg"></i> : 9977118804</p>
											</a>
										</div>
									</div><!--/row-fluid-->
								</div><!--/item-->
							</div><!--/carousel-inner-->
							<a class="left carousel-control arrow-left" href="#myCarouselall" data-slide="prev"><img src="images/left-arrow.png" onMouseOver="this.src='images/left-arrow-hover.png'" onMouseOut="this.src='images/left-arrow.png'"></a>
							<a class="right carousel-control arrow-right pull-right" href="#myCarouselall" data-slide="next"><img src="images/right-arrow.png" onMouseOver="this.src='images/right-arrow-hover.png'" onMouseOut="this.src='images/right-arrow.png'"></a>
						</div><!--/myCarousel-->
						<!-- /////************* city1-data ************/// -->
						<div id="myCarousel" class="carousel slide location-2-slider city1-data township" data-interval="false">
							<!-- Carousel items -->
							<div class="carousel-inner location-2-slide-container">
								<div class="item active">
									<div class="row">
										<div class="col-md-4 col-xs-4 address-box">
											<a href="javascript:google.maps.event.trigger(gmarkers['Yankin'],'click');" id="first-city">
												<h2> YANKIN </h2>
												<p> No. 10, Thit Sar Street,<br> Yankin Yownship, Yangon</p>
												<p> <i class="fa fa-phone fa-lg"></i> : 951-572 196</p>
												<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118749</p>
											</a>
										</div>
										<div class="col-md-4 col-xs-4 address-box">
											<a href="javascript:google.maps.event.trigger(gmarkers['Bahan'],'click');">
												<h2> SAYA SAN</h2>
												<p> No. 28, Saya San Road,<br> Bahan Township, Yangon</p>
												<p> <i class="fa fa-phone fa-lg"></i> : 951-860 3783, 951-703 208</p>
												<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118747</p> 
											</a>
										</div>
										<div class="col-md-4 col-xs-4 address-box">
											<a href="javascript:google.maps.event.trigger(gmarkers['Thingangyun'],'click');"> 
												<h2>THINGANGYUN </h2>
												<p> No. A1-001, Lay Daung Kan Road,<br> Junction Zawana, Thangangyun Township,Yangon</p>
												<p> <i class="fa fa-phone fa-lg"></i> : 951-573 505 Ext:216, 959-86-50850</p>
												<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118753</p> 
											</a>
										</div>
									</div><!--/row-fluid-->
								</div><!--/item-->

								<div class="item">
									<div class="row">
										<div class="col-md-4 col-xs-4 address-box">
											<a href="javascript:google.maps.event.trigger(gmarkers['Seik Kan Thar'],'click');">
												<h2> SEIKKAN THAR </h2>
												<p> No. 286, Seik Kan Thar Street,<br>Kyauktada Township, Yangon</p>
												<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118757</p>
											</a>
										</div>
										<div class="col-md-4 col-xs-4 address-box">
											<a href="javascript:google.maps.event.trigger(gmarkers['Hledan'],'click');">
												<h2> HLEDAN</h2>
												<p> No. 35, Insein Road (near Hledan Junction), Kamayut Township, Yangon</p>
												<p> <i class="fa fa-phone fa-lg"></i> : 951-512 543 </p>
												<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118751 </p>
											</a>
										</div>
										<div class="col-md-4 col-xs-4 address-box">
											<a href="javascript:google.maps.event.trigger(gmarkers['MICT Park'],'click');">
												<h2> MICT Park</h2>
												<p> Special Canteen, MICT Park, Universities of Hlaing Compus, Thamine College Street, Hlaing Township, Yangon.</p>
												<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118816 </p>
											</a>
										</div>
									</div><!--/row-fluid-->
								</div><!--/item-->

								<div class="item">
									<div class="row">
										<div class="col-md-4 col-xs-4 address-box">
											<a href="javascript:google.maps.event.trigger(gmarkers['8-Mile'],'click');">
												<h2> 8-MILE</h2>
												<p> No. 57, Ground Floor, (near 8-Mile Junction), Kyaik Wine Pagoda Road, Da Na Thiri Tower, Mayangone Township, Yangon</p>
												<p> <i class="fa fa-phone fa-lg"></i> : 951-656 097</p>
												<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118755</p> 
											</a>
										</div>
										<div class="col-md-4 col-xs-4 address-box">
												<a href="javascript:google.maps.event.trigger(gmarkers['Thaketa'],'click');">
													<h2>THAKETA <i style="font-weight:400; font-size:48%; letter-spacing:1px;"> (CAPITAL HYPERMARKET)</i></h2>
													<p>No. 14-E, Room (105), Ground Floor, Min Nandar Road, Dawpon Township, Yangon</p>
													<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118761</p>
												</a>
										</div>
										<div class="col-md-4 col-xs-4 address-box">
											<a href="javascript:google.maps.event.trigger(gmarkers['Thamine'],'click');">
												<h2> THAMINE <i style="font-weight:400; font-size:48%; letter-spacing:1px;"> (CITY MART)</i></h2>
												<p>No. 114, 1st Floor, Corner of Insein & Thamine Railway Station Street, Quarter (2), Mayangone Township, Yangon.</p>
												<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118763</p>
											</a>
										</div>
									</div><!--/row-fluid-->
								</div><!--/item-->

								<div class="item">
									<div class="row">
										<div class="col-md-4 col-xs-4 address-box">
											<a href="javascript:google.maps.event.trigger(gmarkers['Junction Square'],'click');">
												<h2> JUNCTION SQUARE</h2>
												<p>Junction Square, Room (S-201), Between Pyay Road & Kyuntaw  Street, Near Agriculture (Bus Stop), Kamayut Township, Yangon.</p>
												<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118765</p>
											</a>
										</div>
										<div class="col-md-4 col-xs-4 address-box">
											<a href="javascript:google.maps.event.trigger(gmarkers['Race Course'],'click');">
												<h2> RACE COURSE <i style="font-weight:400; font-size:48%; letter-spacing:1px;"> (TAMWE)</i></h2>
												<p> No. 24/26, Ground Floor, South Race Course Street, (Race Course Condo), Tamwe Township, Yangon.</p>
												<p> <i class="fa fa-phone fa-lg"></i> : 951-401 187 Ext: 130</p>
												<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118759</p>
											</a>
										</div>
										<div class="col-md-4 col-xs-4 address-box">
											<a href="javascript:google.maps.event.trigger(gmarkers['Wardan'],'click');">
												<h2>WARDAN</h2>
												<p> No. 790, Room (112/113), Ground Floor (Da Na Thiha Center), Corner of Bogyoke Aung San Road And Wardan Street, Lanmadaw Township, Yangon.</p>
												<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118769</p>
											</a>
										</div>
									</div><!--/row-fluid-->
								</div><!--/item-->

								<div class="item">
									<div class="row">
										<div class="col-md-4 col-xs-4 address-box">
											<a href="javascript:google.maps.event.trigger(gmarkers['Shwe Baho'],'click');">
												<h2> SHWE BAHO</h2>
												<p>No. 01-03, Building (B), Ground Floor, Myittar Yeik Mon Housing, Thamain Bayan  Road, Tamwe Township, Yangon.</p>
												<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118771</p>
											</a>
										</div>
										<div class="col-md-4 col-xs-4 address-box">
											<a href="javascript:google.maps.event.trigger(gmarkers['Dagon Center II'],'click');">
												<h2> DAGON CENTER II</h2>
												<p> No. 3/4, 5th Floor, Pyay Road (Dagon Centre II), Sanchaung Township, Yangon.</p>
												<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118767</p>
											</a>
										</div>
										<div class="col-md-4 col-xs-4 address-box">
											<a href="javascript:google.maps.event.trigger(gmarkers['Shwe Gone Daing Ocean'],'click');">
												<h2> SHWE GONE DAING <i style="font-weight:400; font-size:48%; letter-spacing:1px;"> (OCEAN)</i></h2>
												<p> Room(113), Ground Floor, Corner of Shwe Gone Daing Road and Banyardala Road, Bahan Township, Yangon.</p>
												<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118775</p>
											</a>
										</div>

									</div><!--/row-fluid-->
								</div><!--/item-->

								<div class="item">
									<div class="row">
										<div class="col-md-4 col-xs-4 address-box">
											<a href="javascript:google.maps.event.trigger(gmarkers['People's Park'],'click');">
												<h2>PEOPLE'S PARK</h2>
												<p>Room(G-2), People's Park and Square (Myanmar Cultural Valley), U Wisara Road, Dagon Township, Yangon.</p>
												<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118781 </p>
											</a>
										</div>
										<div class="col-md-4 col-xs-4 address-box">
											<a href="javascript:google.maps.event.trigger(gmarkers['South Dagon'],'click');">
												<h2> SOUTH DAGON <i style="font-weight:400; font-size:48%; letter-spacing:1px;"> (CITY MART)</i></h2>
												<p>Room (3), City Mart Supermarket (South Dagon Branch), Corner of Hlawgar Road & Myeik Road, South Dagon Township, Yangon.</p>
												<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118773</p>
											</a>
										</div>
										<div class="col-md-4 col-xs-4 address-box">
											<a href="javascript:google.maps.event.trigger(gmarkers['Star City'],'click');">
												<h2> STAR CITY</h2>
												<p> Building (A-1), Wing (C), Middle Room,<br> Star City, Thanlyin, Yangon.</p>
												<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118759</p>
											</a>
										</div>
									</div><!--/row-fluid-->
								</div><!--/item-->

								<div class="item">
									<div class="row">
										<div class="col-md-4 col-xs-4 address-box">
											<a href="javascript:google.maps.event.trigger(gmarkers['Insein'],'click');">
												<h2> INSEIN</h2>
												<p> No. 24, Lan Thit Road, Nant Thar Gone Quarter, <br> Insein Township, Yangon.</p>
												<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118779</p>
											</a>
										</div>
										<div class="col-md-4 col-xs-4 address-box">
											<a href="javascript:google.maps.event.trigger(gmarkers['Junction Mawtin'],'click');">
												<h2> JUNCTION MAWTIN</h2>
												<p>Room (403), Level (4), Maw Tin Tower, Corner of Lann Thit Street and Anawrahtar Road, <br> Lanmadaw Township, Yangon.</p>
												<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118783</p>
											</a>
										</div>
										<div class="col-md-4 col-xs-4 address-box">
											<a href="javascript:google.maps.event.trigger(gmarkers['City Mart(Shwe Pin lone)'],'click');">
												<h2>SHWE PIN LONE <i style="font-weight:400; font-size:48%; letter-spacing:1px;"> (CITY MART)</i></h2>
												<p>Room (4/5), City Mart Supermarket, Ground Floor, Bayintnaung Road, (25)Quarter, ShwePinLon Housing, North Dagon Township, Yangon.</p>
												<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118785</p>
											</a>
										</div>
									</div><!--/row-fluid-->
								</div><!--/item-->

								<div class="item">
									<div class="row">
										
										<div class="col-md-4 col-xs-4 address-box">
											<a href="javascript:google.maps.event.trigger(gmarkers['City Mart(Ayarwon)'],'click');">
												<h2> AYARMON <i style="font-weight:400; font-size:48%; letter-spacing:1px;"> (CITY MART)</i></h2>
												<p> Shop (06), No. 162/163, (7) Quater,<br> Ayeyarwon Road, Myakwarnyo Housing,<br> Thaketa Township, Yangon.</p>
									        	<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118806</p>
									        </a>
									    </div>
									    <div class="col-md-4 col-xs-4 address-box">
									      	<a href="javascript:google.maps.event.trigger(gmarkers['City Mart(waizayandar)'],'click');">
									      		<h2> WAIZAYANDAR <i style="font-weight:400; font-size:50%; letter-spacing:1px;"> (CITY MART)</i></h2>
									      		<p> Shop (06), No. 56,56,58,<br> (8) Quarter, Waizayantar Road, <br>South Okkalapa Township, Yangon.</p>
									        	<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118812</p>
									        </a>
									    </div>
							      		<div class="col-md-4 col-xs-4 address-box">
									      	<a href="javascript:google.maps.event.trigger(gmarkers['HAGL(shopping center)'],'click');">
									      		<h2>HOANG ANH GIA LAI <i style="font-weight:400; font-size:50%; letter-spacing:1px;"> (SHOPPING MALL)</i></h2>
									      		<p>Room (316), HAGL Shopping Mall, <br>Kaba Aye Road, Bahan Township,<br> Yangon.</p>
									        	<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118818</p>
									        </a>
									    </div>
							  		</div><!--/row-fluid-->
								</div><!--/item-->
								<div class="item">
									<div class="row">
									    <div class="col-md-4 col-xs-4 address-box">
											<a href="javascript:google.maps.event.trigger(gmarkers['Pinlon Sittaung'],'click');"> 
												<h2> NORTH PIN LONE SIT TAUNG</h2>
												<p> Shop (07), City Mart Supermarket, Ground Floor, Corner of Pin lon & Sittaunt Road, North Dagon Township, Yangon</p>
												<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118820</p>
											</a>
										</div> 
									</div>
								</div>

						</div><!--/carousel-inner-->

						<a class="left carousel-control arrow-left" href="#myCarousel" data-slide="prev"><img src="images/left-arrow.png" onMouseOver="this.src='images/left-arrow-hover.png'" onMouseOut="this.src='images/left-arrow.png'"></a>
						<a class="right carousel-control arrow-right pull-right" href="#myCarousel" data-slide="next"><img src="images/right-arrow.png" onMouseOver="this.src='images/right-arrow-hover.png'" onMouseOut="this.src='images/right-arrow.png'"></a>

					</div><!--/myCarousel-->
					<!-- /////////********************** city2 data **************////////////// -->
					<div id="myCarousel1" class="carousel slide location-2-slider city2-data township" data-interval="false">
						<!-- Carousel items -->
						<div class="carousel-inner location-2-slide-container">
							<div class="item active">
								<div class="row">
									<div class="col-md-4 col-xs-4 address-box">
										<a href="javascript:google.maps.event.trigger(gmarkers['Chan Aye Thar San'],'click');"> 
											<h2> CHAN AYE THAR SAN </h2>
											<p> No. 70, (30) Street, Between (64x 65), Chan Aye Thar Zan Township, Mandalay. </p>
											<p> <i class="fa fa-phone fa-lg"></i> : 02-61257, 011201214</p>
											<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118795</p>
										</a>
									</div>
									<div class="col-md-4 col-xs-4 address-box">
										<a href="javascript:google.maps.event.trigger(gmarkers['73 Ocean'],'click');">
											<h2> 73 OCEAN <i style="font-weight:400; font-size:48%; letter-spacing:1px;"> (CAPITAL MALL)</i></h2>
											<p> Ocean Super Centre, Shop (66), Building (2), 73th Street, Between Thazin & Ngu War Street, Mingalar Mandalay Prestige Community, Chan Mya Tha Zi Township, Mandalay.</p>
											<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118797</p>
										</a>
									</div>
									<div class="col-md-4 col-xs-4 address-box">
										<a href="javascript:google.maps.event.trigger(gmarkers['City Mart(19th Street)'],'click');">
											<h2> CITY MART <i style="font-weight:400; font-size:48%; letter-spacing:1px;"> (19TH STREET)</i></h2>
											<p> Room (8), City Mart Supermarket, Ground Floor, 19th Street, Between 65th x 66th Street, AungMyayThaZan Township, Mandalay.</p>
											<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118802</p>
										</a>
									</div>
								</div><!--/row-fluid-->
							</div><!--/item-->

						</div><!--/carousel-inner-->		     
					</div><!--/myCarousel-->

					<!--- ************************///////////////// city 3 ////////////////////******************** -->
					<div id="myCarousel2" class="carousel slide location-2-slider city3-data township" data-interval="false">
						<!-- Carousel items -->
						<div class="carousel-inner location-2-slide-container">
							<div class="item active">
								<div class="row">
									<div class="col-md-4 col-xs-4 address-box">
										<a href="javascript:google.maps.event.trigger(gmarkers['Tha Pyay Gone'],'click');">
											<h2> THA PYAY GONE</h2>
											<p> Near Tha Pyay Gone Market, <br>Tha Pyay Gone Hill Top, <br> Nay Pyi Taw.</p>
											<p> <i class="fa fa-phone fa-lg"></i> : 067-414 687</p>
											<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118787</p>
										</a>
									</div>
									<div class="col-md-4 col-xs-4 address-box">
										<a href="javascript:google.maps.event.trigger(gmarkers['Capital Hypermarket'],'click');">
											<h2> CAPITAL <i style="font-weight:400; font-size:48%; letter-spacing:1px;"> (CAPITAL HYPERMARKET)</i></h2>
											<p> No. 116, Corner of YarzaThingaha Road & Diplomatic Road  (infront of Hotel Zone), Nay Pyi Taw.</p>
											<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118791</p>
										</a>
									</div>
									<div class="col-md-4 col-xs-4 address-box">
										<a href="javascript:google.maps.event.trigger(gmarkers['ocean Oattara Thiri'],'click');"> 
											<h2> OCEAN OATTARATHIRI </h2>
											<p> No. 9, Room(101), Ground Floor, Corner of Zay Ya Htar Ni Road & Mandalay Road, Oattarathiri Township, Nay Pyi Taw.</p>
											<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118789</p>
										</a>
									</div>
								</div><!--/row-fluid-->
							</div><!--/item-->

							<div class="item">
								<div class="row">
									<div class="col-md-4 col-xs-4 address-box">
										<a href="javascript:google.maps.event.trigger(gmarkers['Junction Center'],'click');">
											<h2 class=""> JUNCTION CENTER</h2>
											<p>Yan Aung Myin Quarter, Yarza Thingaha Road (infront of Hotel Zone), Dadkhina Thiri Township, Nay Pyi Taw.</p>
											<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118793</p>
										</a>
									</div>
								</div><!--/row-fluid-->
							</div><!--/item-->

						</div><!--/carousel-inner-->

						<a class="left carousel-control arrow-left" href="#myCarousel2" data-slide="prev"><img src="images/left-arrow.png" onMouseOver="this.src='images/left-arrow-hover.png'" onMouseOut="this.src='images/left-arrow.png'"></a>
						<a class="right carousel-control arrow-right pull-right" href="#myCarousel2" data-slide="next"><img src="images/right-arrow.png" onMouseOver="this.src='images/right-arrow-hover.png'" onMouseOut="this.src='images/right-arrow.png'"></a>
					</div><!--/myCarousel-->
					<!-- **********************///////// city4 ////////////// *************** -->
					<div id="myCarousel" class="carousel slide location-2-slider city4-data">
						<!-- Carousel items -->
						<div class="carousel-inner location-2-slide-container">
							<div class="item active">
								<div class="row">
									<div class="col-md-4 col-xs-4 address-box">
										<a href="javascript:google.maps.event.trigger(gmarkers['Pyin Oo Lwin'],'click');">
											<h2> PYIN OO LWIN <i style="font-weight:400; font-size:48%; letter-spacing:1px;"> (RUBY MART)</i></h2>
											<p> UG-25, Ruby Mart, Yangon - Mandalay Road, Pyin Oo Lwin.</p>
											<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118808</p>
										</a>
									</div>
								</div><!--/row-fluid-->
							</div><!--/item-->
						</div><!--/carousel-inner-->

					</div><!--/myCarousel-->

					<!-- **********************///////// city5 ////////////// *************** -->
					<div id="myCarousel" class="carousel slide location-2-slider city5-data">
						<!-- Carousel items -->
						<div class="carousel-inner location-2-slide-container">
							<div class="item active">
								<div class="row">
									<div class="col-md-4 col-xs-4 address-box">
										<a href="javascript:google.maps.event.trigger(gmarkers['Myeik'],'click');">
											<h2>MYEIK</h2>
											<p> No. 4, End of  Thae' Kwin Food Court, Kannar Street, Thaketa Quarter, Myeik.</p>
											<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118814</p>
										</a>
									</div>
								</div><!--/row-fluid-->
							</div><!--/item-->

						</div><!--/carousel-inner-->

					</div><!--/myCarousel-->

					<!-- **********************///////// city6 ////////////// *************** -->
					<div id="myCarousel" class="carousel slide location-2-slider city6-data">
						<!-- Carousel items -->
						<div class="carousel-inner location-2-slide-container">
							<div class="item active">
								<div class="row">
									<div class="col-md-4 col-xs-4 address-box">
										<a href="javascript:google.maps.event.trigger(gmarkers['River View'],'click');"> 
											<h2> MAWLAMYAING <i style="font-weight:400; font-size:48%; letter-spacing:1px;"> (RIVER VIEW )</i></h2>
											<p> Dawei Jetty, Corner of Strand Road and Dawei Bridge Street, Sit Kae Kone Township, Mawlamyaing.</p>
											<p> <i class="fa fa-phone fa-lg"></i> : 9977118804</p>
										</a>
									</div>
								</div><!--/row-fluid-->
							</div><!--/item-->
						</div><!--/carousel-inner-->

					</div><!--/myCarousel-->
					<!-- /////================ township data 1 ================= //// -->
					<div id="myCarousel" class="carousel slide location-2-slider township1-data">
						<!-- Carousel items -->
						<div class="carousel-inner location-2-slide-container">
							<div class="item active">
								<div class="row">
									<div class="col-md-4 col-xs-4 address-box">
										<a href="javascript:google.maps.event.trigger(gmarkers['Yankin'],'click');">
											<h2> YANKIN </h2>
											<p> No. 10, Thit Sar Street,<br> Yankin Yownship, Yangon</p>
											<p> <i class="fa fa-phone fa-lg"></i> : 951-572 196</p>
											<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118749</p>
										</a>
									</div>

								</div><!--/row-fluid-->
							</div><!--/item-->

						</div><!--/carousel-inner-->

					</div><!--/myCarousel-->

					<!-- /////================ township data 2 ================= //// -->
					<div id="myCarousel" class="carousel slide location-2-slider township2-data">
						<!-- Carousel items -->
						<div class="carousel-inner location-2-slide-container">
							<div class="item active">
								<div class="row">
									<div class="col-md-4 col-xs-4 address-box">
										<a href="javascript:google.maps.event.trigger(gmarkers['Bahan'],'click');">
											<h2> SAYA SAN</h2>
											<p> No. 28, Saya San Road,<br> Bahan Township, Yangon</p>
											<p> <i class="fa fa-phone fa-lg"></i> : 951-860 3783, 951-703 208</p>
											<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118747</p>
										</a>
									</div>
									<div class="col-md-4 col-xs-4 address-box">
										<a href="javascript:google.maps.event.trigger(gmarkers['Shwe Gone Daing Ocean'],'click');">
											<h2> SHWE GONE DAING <i style="font-weight:400; font-size:48%; letter-spacing:1px;"> (OCEAN)</i></h2>
											<p> Room (113), Ground Floor, Corner of Shwe Gone Daing Road and Banyardala Road, Bahan Township, Yangon.</p>
											<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118775</p>
										</a>
									</div>
									<div class="col-md-4 col-xs-4 address-box">
										<a href="javascript:google.maps.event.trigger(gmarkers['HAGL(shopping center)'],'click');">
											<h2>HOANG ANH GIA LAI <i style="font-weight:400; font-size:50%; letter-spacing:1px;"> (SHOPPING MALL)</i></h2>
											<p>Room (316), HAGL Shopping Mall,<br> Kaba Aye Road, Bahan Township,<br> Yangon.</p>
								          	<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118818</p>
							          </a>
							      </div>

							  </div><!--/row-fluid-->
							</div><!--/item-->


						</div><!--/carousel-inner-->

					</div><!--/myCarousel-->

					<!-- ///////////// ============ township data 3 ================ ///////// -->
					<div id="myCarousel" class="carousel slide location-2-slider township3-data">
						<!-- Carousel items -->
						<div class="carousel-inner location-2-slide-container">
							<div class="item active">
								<div class="row">
									<div class="col-md-4 col-xs-4 address-box">
										<a href="javascript:google.maps.event.trigger(gmarkers['Race Course'],'click');">
											<h2> RACE COURSE <i style="font-weight:400; font-size:48%; letter-spacing:1px;"> (TAMWE)</i></h2>
											<p> No. 24/26, Ground Floor, South Race Course Street, (Race Course Condo), Tamwe Township, Yangon.</p>
											<p> <i class="fa fa-phone fa-lg"></i> : 951-401 187 Ext: 130</p>
											<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118759</p>
										</a>
									</div>
									<div class="col-md-4 col-xs-4 address-box">
										<a href="javascript:google.maps.event.trigger(gmarkers['Shwe Baho'],'click');">
											<h2> SHWE BAHO</h2>
											<p>No. 01-03, Building (B), Ground Floor, Myittar Yeik Mon Housing, Thamain Bayan  Road, Tamwe Township, Yangon.</p>
											<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118771</p>
										</a>
									</div>
								</div><!--/row-fluid-->
							</div><!--/item-->

						</div><!--/carousel-inner-->
					</div><!--/myCarousel-->
					<!-- ///////////// ============ township data 4 ================ ///////// -->
					<div id="myCarousel" class="carousel slide location-2-slider township4-data">
						<!-- Carousel items -->
						<div class="carousel-inner location-2-slide-container">
							<div class="item active">
								<div class="row">
									<div class="col-md-4 col-xs-4 address-box">
										<a href="javascript:google.maps.event.trigger(gmarkers['Thingangyun'],'click');"> 
											<h2>THINGANGYUN </h2>
											<p> No. A1-001, Lay Daung Kan Road,<br> Junction Zawana, Thangangyun Township,Yangon</p>
											<p> <i class="fa fa-phone fa-lg"></i> : 951-573 505 Ext:216, 959-86-50850</p>
											<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118753</p> 
										</a>
									</div>
								</div><!--/row-fluid-->
							</div><!--/item-->

						</div><!--/carousel-inner-->
					</div><!--/myCarousel-->

					<!-- ///////////// ============ township data 5 ================ ///////// -->
					<div id="myCarousel" class="carousel slide location-2-slider township5-data">
						<!-- Carousel items -->
						<div class="carousel-inner location-2-slide-container">
							<div class="item active">
								<div class="row">
									<div class="col-md-4 col-xs-4 address-box">
										<a href="javascript:google.maps.event.trigger(gmarkers['Seik Kan Thar'],'click');">
											<h2> SEIKKAN THAR </h2>
											<p> No. 286, Seik Kan Thar Street,<br>Kyauktada Township, Yangon</p>
											<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118757</p>
										</a>
									</div>
								</div><!--/row-fluid-->
							</div><!--/item-->

						</div><!--/carousel-inner-->

					</div><!--/myCarousel-->

					<!-- ///////////// ============ township data 6 ================ ///////// -->
					<div id="myCarousel" class="carousel slide location-2-slider township6-data">
						<!-- Carousel items -->
						<div class="carousel-inner location-2-slide-container">
							<div class="item active">
								<div class="row">
									<div class="col-md-4 col-xs-4 address-box">
										<a href="javascript:google.maps.event.trigger(gmarkers['Hledan'],'click');">
											<h2> HLEDAN</h2>
											<p> No. 35, Insein Road (near Hledan Junction), Kamayut Township, Yangon</p>
											<p> <i class="fa fa-phone fa-lg"></i> : 951-512 543 </p>
											<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118751 </p>
										</a>
									</div>
									<div class="col-md-4 col-xs-4 address-box">
										<a href="javascript:google.maps.event.trigger(gmarkers['Junction Square'],'click');">
											<h2> JUNCTION SQUARE</h2>
											<p>Junction Square, Room (S-201), Between Pyay Road & Kyuntaw  Street, Near Agriculture (Bus Stop), Kamayut Township, Yangon.</p>
											<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118765</p>
										</a>
									</div>

								</div><!--/row-fluid-->
							</div><!--/item-->

						</div><!--/carousel-inner-->

					</div><!--/myCarousel-->
					<div id="myCarousel" class="carousel slide location-2-slider hlaing-data">
						<!-- Carousel items -->
						<div class="carousel-inner location-2-slide-container">
							<div class="item active">
								<div class="row">
									<div class="col-md-4 col-xs-4 address-box">
										<a href="javascript:google.maps.event.trigger(gmarkers['MICT Park'],'click');">
											<h2> MICT Park</h2>
											<p> Special Canteen, MICT Park, Universities of Hlaing Compus, Thamine College Street, Hlaing Township, Yangon.</p>
											<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118816 </p>
										</a>
									</div>
								</div><!--/row-fluid-->
							</div><!--/item-->

						</div><!--/carousel-inner-->

					</div><!--/myCarousel-->

					<!-- ///////////// ============ township data 7 ================ ///////// -->
					<div id="myCarousel" class="carousel slide location-2-slider township7-data">
						<!-- Carousel items -->
						<div class="carousel-inner location-2-slide-container">
							<div class="item active">
								<div class="row">
									<div class="col-md-4 col-xs-4 address-box">
										<a href="javascript:google.maps.event.trigger(gmarkers['8-Mile'],'click');">
											<h2> 8-MILE</h2>
											<p> No. 57, Ground Floor, (near 8-Mile Junction), Kyaik Wine Pagoda Road, Da Na Thiri Tower, Mayangone Township, Yangon</p>
											<p> <i class="fa fa-phone fa-lg"></i> : 951-656 097</p>
											<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118755</p> 
										</a>
									</div>
									<div class="col-md-4 col-xs-4 address-box">
										<a href="javascript:google.maps.event.trigger(gmarkers['Thamine'],'click');">
											<h2> THAMINE <i style="font-weight:400; font-size:48%; letter-spacing:1px;"> (CITY MART)</i></h2>
											<p>No. 114, 1st Floor, Corner of Insein & Thamine Railway Station Street, Quarter (2), Mayangone Township, Yangon.</p>
											<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118763</p>
										</a>
									</div>

								</div><!--/row-fluid-->
							</div><!--/item-->
						</div><!--/carousel-inner-->

					</div><!--/myCarousel-->

					<!-- ///////////// ============ township data 8 ================ ///////// -->
					<div id="myCarousel" class="carousel slide location-2-slider township8-data">
						<!-- Carousel items -->
						<div class="carousel-inner location-2-slide-container">
							<div class="item active">
								<div class="row">
									<div class="col-md-4 col-xs-4 address-box">
										<a href="javascript:google.maps.event.trigger(gmarkers['Wardan'],'click');">
											<h2>WARDAN</h2>
											<p> No. 790, Room (112/113), Ground Floor (Da Na Thiha Center), Corner of Bogyoke Aung San Road And Wardan Street, Lanmadaw Township, Yangon.</p>
											<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118769</p>
										</a>
									</div>
									<div class="col-md-4 col-xs-4 address-box">
										<a href="javascript:google.maps.event.trigger(gmarkers['Junction Mawtin'],'click');">
											<h2> JUNCTION MAWTIN</h2>
											<p>Room (403), Level (4), Maw Tin Tower, Corner of Lann Thit Street and Anawrahtar Road,<br> Lanmadaw Township, Yangon.</p>
											<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118783</p>
										</a>
									</div>
								</div><!--/row-fluid-->
							</div><!--/item-->
						</div><!--/carousel-inner-->
					</div><!--/myCarousel-->

					<!-- ///////////// ============ township data 9 ================ ///////// -->
					<div id="myCarousel" class="carousel slide location-2-slider township9-data">
						<!-- Carousel items -->
						<div class="carousel-inner location-2-slide-container">
							<div class="item active">
								<div class="row">
									<div class="col-md-4 col-xs-4 address-box">
										<a href="javascript:google.maps.event.trigger(gmarkers['City Mart(Ayarwon)'],'click');">
											<h2> AYARMON <i style="font-weight:400; font-size:48%; letter-spacing:1px;"> (CITY MART)</i></h2>
											<p> Shop (06), No. 162/163, (7) Quater,<br> Ayeyarwon Road, Myakwarnyo Housing,<br> Thaketa Township, Yangon.</p>
							          		<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118806</p>
							          	</a>
							      	</div>
							      	<div class="col-md-4 col-xs-4 address-box">
							      		<a href="javascript:google.maps.event.trigger(gmarkers['Thaketa'],'click');">
							      			<h2>THAKETA <i style="font-weight:400; font-size:48%; letter-spacing:1px;"> (CAPITAL HYPERMARKET)</i></h2>
							      			<p>No. 14-E, Room (105), Ground Floor, Min Nandar Road, Dawpon Township, Yangon</p>
							      			<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118761</p>
							      		</a>
							      	</div>
							  	</div><!--/row-fluid-->
							</div><!--/item-->


						</div><!--/carousel-inner-->
					</div><!--/myCarousel-->
					<!-- ///////////// ============ township data 10 ================ ///////// -->
					<div id="myCarousel" class="carousel slide location-2-slider township10-data">
						<!-- Carousel items -->
						<div class="carousel-inner location-2-slide-container">
							<div class="item active">
								<div class="row">
									<div class="col-md-4 col-xs-4 address-box">
										<a href="javascript:google.maps.event.trigger(gmarkers['Dagon Center II'],'click');">
											<h2> DAGON CENTER II</h2>
											<p> No. 3/4, 5th Floor, Pyay Road (Dagon Centre II), Sanchaung Township, Yangon.</p>
											<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118767</p>
										</a>
									</div>
								</div><!--/row-fluid-->
							</div><!--/item-->
						</div><!--/carousel-inner-->
					</div><!--/myCarousel-->
					<!-- ///////////// ============ township data 11 ================ ///////// -->
					<div id="myCarousel" class="carousel slide location-2-slider township11-data">
						<!-- Carousel items -->
						<div class="carousel-inner location-2-slide-container">
							<div class="item active">
								<div class="row">
									<div class="col-md-4 col-xs-4 address-box">
										<a href="javascript:google.maps.event.trigger(gmarkers['Insein'],'click');">
											<h2> INSEIN</h2>
											<p> No. 24, Lan Thit Road, Nant Thar Gone Quarter, <br> Insein Township, Yangon.</p>
											<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118779</p>
										</a>
									</div>
								</div><!--/row-fluid-->
							</div><!--/item-->

						</div><!--/carousel-inner-->
					</div><!--/myCarousel-->

					<!-- ///////////// ============ township data 12 ================ ///////// -->
					<div id="myCarousel" class="carousel slide location-2-slider township12-data">
						<!-- Carousel items -->
						<div class="carousel-inner location-2-slide-container">
							<div class="item active">
								<div class="row">
									<div class="col-md-4 col-xs-4 address-box">
										<a href="javascript:google.maps.event.trigger(gmarkers['City Mart(waizayandar)'],'click');">
											<h2> WAIZAYANDAR <i style="font-weight:400; font-size:50%; letter-spacing:1px;"> (CITY MART)</i></h2>
											<p> Shop (06), No. 56,56,58,<br> (8) Quarter, Waizayantar Road, <br>South Okkalapa Township, Yangon.</p>
								          	<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118812</p>
							          	</a>
							      	</div>
							  	</div><!--/row-fluid-->
							</div><!--/item-->

						</div><!--/carousel-inner-->
					</div><!--/myCarousel-->

					<!-- ///////////// ============ township data 13 ================ ///////// -->
					<div id="myCarousel" class="carousel slide location-2-slider township13-data">
						<!-- Carousel items -->
						<div class="carousel-inner location-2-slide-container">
							<div class="item active">
								<div class="row">
									<div class="col-md-4 col-xs-4 address-box">
										<a href="javascript:google.maps.event.trigger(gmarkers['People's Park'],'click');">
											<h2>PEOPLE'S PARK</h2>
											<p>Room (G-2), People's Park and Square (Myanmar Cultural Valley), U Wisara Road, Dagon Township, Yangon.</p>
											<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118781 </p>
										</a>
									</div>
								</div><!--/row-fluid-->
							</div><!--/item-->
						</div><!--/carousel-inner-->
					</div><!--/myCarousel-->
					<!-- ///////////// ============ township data 14 ================ ///////// -->
					<div id="myCarousel" class="carousel slide location-2-slider township14-data">
						<!-- Carousel items -->
						<div class="carousel-inner location-2-slide-container">
							<div class="item active">
								<div class="row">
									<div class="col-md-4 col-xs-4 address-box">
										<a href="javascript:google.maps.event.trigger(gmarkers['City Mart(Shwe Pin lone)'],'click');">
											<h2>SHWE PIN LONE <i style="font-weight:400; font-size:48%; letter-spacing:1px;"> (CITY MART)</i></h2>
											<p>Room (4/5), City Mart Supermarket, Ground Floor, Bayintnaung Road, (25) Quarter, ShwePinLon Housing, North Dagon Township, Yangon.</p>
											<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118785</p>
										</a>
									</div>
									<div class="col-md-4 col-xs-4 address-box">
										<a href="javascript:google.maps.event.trigger(gmarkers['Pinlon Sittaung'],'click');"> 
											<h2>NORTH PIN LONE SIT TAUNG</h2>
											<p> Shop (07), City Mart Supermarket, Ground Floor, Corner of Pin lon & Sittaunt Road, North Dagon Township, Yangon</p>
											<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118820</p>
										</a>
									</div> 
								</div><!--/row-fluid-->
							</div><!--/item-->


						</div><!--/carousel-inner-->
					</div><!--/myCarousel-->
					<!-- ///////////// ============ township data 15 ================ ///////// -->
					<div id="myCarousel" class="carousel slide location-2-slider township15-data">
						<!-- Carousel items -->
						<div class="carousel-inner location-2-slide-container">
							<div class="item active">
								<div class="row">
									<div class="col-md-4 col-xs-4 address-box">
										<a href="javascript:google.maps.event.trigger(gmarkers['South Dagon'],'click');">
											<h2> SOUTH DAGON <i style="font-weight:400; font-size:48%; letter-spacing:1px;"> (CITY MART)</i></h2>
											<p>Room (3), City Mart Supermarket (South Dagon Branch), Corner of Hlawgar Road & Myeik Road, South Dagon Township, Yangon.</p>
											<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118773</p>
										</a>
									</div>
								</div><!--/row-fluid-->
							</div><!--/item-->
						</div><!--/carousel-inner-->
					</div><!--/myCarousel-->

					<!-- ///////////// ============ township data 16 ================ ///////// -->
					<div id="myCarousel" class="carousel slide location-2-slider township16-data">
						<!-- Carousel items -->
						<div class="carousel-inner location-2-slide-container">
							<div class="item active">
								<div class="row">
									<div class="col-md-4 col-xs-4 address-box">
										<a href="javascript:google.maps.event.trigger(gmarkers['River View'],'click');"> 
											<h2> MAWLAMYAING <i style="font-weight:400; font-size:48%; letter-spacing:1px;"> (RIVER VIEW )</i></h2>
											<p> Dawei Jetty, Corner of Strand Road and Dawei Bridge Street, Sit Kae Kone Township, Mawlamyaing.</p>
											<p> <i class="fa fa-phone fa-lg"></i> : 9977118804</p>
										</a>
									</div>

								</div><!--/row-fluid-->
							</div><!--/item-->

						</div><!--/carousel-inner-->
					</div><!--/myCarousel-->
					<!-- ///////////// ============ township data 17 ================ ///////// -->
					<div id="myCarousel" class="carousel slide location-2-slider township17-data">
						<!-- Carousel items -->
						<div class="carousel-inner location-2-slide-container">
							<div class="item active">
								<div class="row">
									<div class="col-md-4 col-xs-4 address-box">
										<a href="javascript:google.maps.event.trigger(gmarkers['Chan Aye Thar San'],'click');">
											<h2> CHAN AYE THAR SAN </h2>
											<p> No. 70, (30) Street, Between (64x 65), Chan Aye Thar Zan Township, Mandalay. </p>
											<p> <i class="fa fa-phone fa-lg"></i> : 02-61257, 011201214</p>
											<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118795</p>
										</a>
									</div>
								</div><!--/row-fluid-->
							</div><!--/item-->
						</div><!--/carousel-inner-->
					</div><!--/myCarousel-->
					<!-- ///////////// ============ township data 18 ================ ///////// -->
					<div id="myCarousel" class="carousel slide location-2-slider township18-data">
						<!-- Carousel items -->
						<div class="carousel-inner location-2-slide-container">
							<div class="item active">
								<div class="row">
									<div class="col-md-4 col-xs-4 address-box">
										<a href="javascript:google.maps.event.trigger(gmarkers['ocean Oattara Thiri'],'click');"> 
											<h2> OCEAN OATTARATHIRI </h2>
											<p> No. 9, Room (101), Ground Floor, Corner of Zay Ya Htar Ni Road & Mandalay Road, Oattarathiri Township, Nay Pyi Taw.</p>
											<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118789</p>
										</a>
									</div>
								</div><!--/row-fluid-->
							</div><!--/item-->
						</div><!--/carousel-inner-->
					</div><!--/myCarousel-->
					<!-- ///////////// ============ township data 19 ================ /////////////////// -->
					<div id="myCarousel" class="carousel slide location-2-slider township19-data">
						<!-- Carousel items -->
						<div class="carousel-inner location-2-slide-container">
							<div class="item active">
								<div class="row">
									<div class="col-md-4 col-xs-4 address-box">
										<a href="javascript:google.maps.event.trigger(gmarkers['Junction Center'],'click');">
											<h2 class=""> JUNCTION CENTER</h2>
											<p>Yan Aung Myin Quarter, Yarza Thingaha Road (infront of Hotel Zone), Dadkhina Thiri Township, Nay Pyi Taw.</p>
											<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118793</p>
										</a>
									</div>

								</div><!--/row-fluid-->
							</div><!--/item-->

						</div><!--/carousel-inner-->
					</div><!--/myCarousel-->
					<!-- ///////////// ============ township data 20 ================ /////////////////// -->
					<div id="myCarousel" class="carousel slide location-2-slider township20-data">
						<!-- Carousel items -->
						<div class="carousel-inner location-2-slide-container">
							<div class="item active">
								<div class="row">
									<div class="col-md-4 col-xs-4 address-box">
										<a href="javascript:google.maps.event.trigger(gmarkers['73 Ocean'],'click');">
											<h2> 73 OCEAN <i style="font-weight:400; font-size:48%; letter-spacing:1px;"> (CAPITAL MALL)</i></h2>
											<p> Ocean Super Centre, Shop (66), Building (2), 73th Street, Between Thazin & Ngu War Street, Mingalar Mandalay Prestige Community, Chan Mya Tha Zi Township, Mandalay.</p>
											<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118797</p>
										</a>
									</div>
								</div><!--/row-fluid-->
							</div><!--/item-->

						</div><!--/carousel-inner-->
					</div><!--/myCarousel-->
					<!-- ///////////// ============ township data 21 ================ /////////////////// -->
					<div id="myCarousel" class="carousel slide location-2-slider township21-data">
						<!-- Carousel items -->
						<div class="carousel-inner location-2-slide-container">
							<div class="item active">
								<div class="row">
									<div class="col-md-4 col-xs-4 address-box">
										<a href="javascript:google.maps.event.trigger(gmarkers['City Mart(19th Street)'],'click');">
											<h2> CITY MART <i style="font-weight:400; font-size:48%; letter-spacing:1px;"> (19TH STREET)</i></h2>
											<p> Room (8), City Mart Supermarket, Ground Floor, 19th Street, Between 65th x 66th Street, AungMyayThaZan Township, Mandalay.</p>
											<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118802</p>
										</a>
									</div>

								</div><!--/row-fluid-->
							</div><!--/item-->

						</div><!--/carousel-inner-->
					</div><!--/myCarousel-->
					<!--//////////////////////********************************* END ****************************/////////////////////// ///////////////////-->
					<!-- Location slider end -->
				</div>
			</div> <!-- end col-md-9 -->
		</div> <!-- end row /// -->

		<!--- for ip device responsive for carousel -->

		<!-- end for ip devide responsive fro carousel -->

		<!--/////////// for mobile dropdown effects for location /////////// -->
		<!-- ********** mb category ************** -->

		<div class="mb-location-category">

			<div class="mb-search" id="mb-search-location2">

				<div class="dropdown1">
					<button class="btn btn-default dropdown-toggle mb-dropdown" type="button" id="menu1" data-toggle="dropdown"> City : <span id="city-stay"> Yangon</span>
						<span class="down-shape pull-right"></span> <span class="up-shape pull-right"></button>
						<ul class="dropdown-menu" role="menu" aria-labelledby="menu1" style="top:13%;">
							<li role="presentation"><a role="menuitem" href="#" id="mb-city1">Yangon</a></li>
							<li role="presentation"><a role="menuitem" href="#" id="mb-city2">Mandalay</a></li>
							<li role="presentation"><a role="menuitem" href="#" id="mb-city3">Nay Pyi Taw</a></li>
							<li role="presentation"><a role="menuitem" href="#" id="mb-city4">Pyin Oo Lwin</a></li>
							<li role="presentation"><a role="menuitem" href="#" id="mb-city5">Myeik</a></li>
							<li role="presentation"><a role="menuitem" href="#" id="mb-city6">Mawlamyaing</a></li>
						</ul>
					</div>

					<div class="dropdown1">
						<button class="btn btn-default dropdown-toggle mb-dropdown" type="button" id="menu1" data-toggle="dropdown"> Township : <span id="township-stay"> All</span>
							<span class="down-shape pull-right"> </span> <span class="up-shape pull-right"></span></button>
							<ul class="dropdown-menu" role="menu" aria-labelledby="menu1" style="top:28%;">
								<li role="presentation"><a role="menuitem" href="#" id="mb-township1">Yankin</a></li>
								<li role="presentation"><a role="menuitem" href="#" id="mb-township2">Bahan</a></li>
								<li role="presentation"><a role="menuitem" href="#" id="mb-township3">Tamwe</a></li>
								<li role="presentation"><a role="menuitem" href="#" id="mb-township4">Thingangyun</a></li>
								<li role="presentation"><a role="menuitem" href="#" id="mb-township5">Kyauktada</a></li>
								<li role="presentation"><a role="menuitem" href="#" id="mb-township6">Kamayut</a></li>
								<li role="presentation"><a role="menuitem" href="#" id="mb-hlaing">Hlaing</a></li>
								<li role="presentation"><a role="menuitem" href="#" id="mb-township7">Mayangone</a></li>
								<li role="presentation"><a role="menuitem" href="#" id="mb-township8">Lanmadaw</a></li>
								<li role="presentation"><a role="menuitem" href="#" id="mb-township9">Thaketa</a></li>
								<li role="presentation"><a role="menuitem" href="#" id="mb-township10">Sanchaung</a></li>
								<li role="presentation"><a role="menuitem" href="#" id="mb-township11">Insein</a></li>
								<li role="presentation"><a role="menuitem" href="#" id="mb-township12">South Okklapa</a></li>
								<li role="presentation"><a role="menuitem" href="#" id="mb-township13">Dagon</a></li>
								<li role="presentation"><a role="menuitem" href="#" id="mb-township14">North Dagon</a></li>
								<li role="presentation"><a role="menuitem" href="#" id="mb-township15">South Dagon</a></li>
								<li role="presentation"><a role="menuitem" href="#" id="mb-township16">SitKae Kone</a></li>
								<li role="presentation"><a role="menuitem" href="#" id="mb-township17">ChanAye TharZan</a></li>
								<li role="presentation"><a role="menuitem" href="#" id="mb-township18">Oattarathiri</a></li>
								<li role="presentation"><a role="menuitem" href="#" id="mb-township19">Dadkhina Thiri</a></li>
								<li role="presentation"><a role="menuitem" href="#" id="mb-township20">ChanMya Tha Zi</a></li>
								<li role="presentation"><a role="menuitem" href="#" id="mb-township21">AungMyay Tha Zan</a></li>
							</ul>
						</div> 

					</div>

				</div>
				<!-- *********** mb category end ********* -->
				<div class="mb-city1-data">
					<div class="panel-group" id="accordion">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" style="display:block; width:100%;">
										YANKIN 
										<span class="glyphicon glyphicon-minus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>
								</h2>
							</div>
							<div id="collapseOne" class="panel-collapse collapse in">
								<div class="panel-body">
									<p> No. 10, Thit Sar Street,<br> Yankin Yownship, Yangon</p>
									<p> <i class="fa fa-phone fa-lg"></i> : 951-572 196</p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118749</p>
									<div class="view-map"><span><a href="https://www.google.com/maps/@16.7850553,96.1713889,17z" target="_blank"> View Map</a> </span>
									</div>
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" style="display:block; width:100%;">
										SAYA SAN
										<span class="glyphicon glyphicon-plus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>
								</h2>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse">
								<div class="panel-body">
									<p> No. 28, Saya San Road,<br>Bahan Township, Yangon</p>
									<p> <i class="fa fa-phone fa-lg"></i> : 951-860 3783, 951-703 208</p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118747</p> 
									<div class="view-map"><span><a href=" https://www.google.com/maps/place/YKKO+-+Sayarsan/@16.816552,96.158457,17z/data=!3m1!4b1!4m2!3m1!1s0x30c1ecac7a7e7495:0x6ef0870b2e1207dd" target="_blank"> View Map</a> </span> </div>
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" style="display:block; width:100%;">
										THINGANGYUN 
										<span class="glyphicon glyphicon-plus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>
								</h2>
							</div>
							<div id="collapseThree" class="panel-collapse collapse">
								<div class="panel-body">
									<p> No. A1-001, Lay Daung Kan Road,<br> Junction Zawana, Thangangyun Township,Yangon</p>
									<p> <i class="fa fa-phone fa-lg"></i> : 951-573 505 Ext:216, 959-86-50850</p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118753</p> 
									<div class="view-map"><span><a href="https://www.google.com/maps/place/Zawana+Bus+Stop,+Lay+Daungkan+Rd,+Yangon,+Myanmar+%28Burma%29/@16.8273102,96.1900128,17z/data=!4m6!1m3!3m2!1s0x30c1932ee5ca0c6d:0xace60364343987b6!2sCity+Mart+Super+Market,+Yangon!3m1!1s0x30c1932ee06867d5:0xf43f5546779b749" target="_blank"> View Map</a> </span> </div>
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" style="display:block; width:100%;">
										SEIKKAN THAR
										<span class="glyphicon glyphicon-plus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>
								</h2>
							</div>
							<div id="collapseFour" class="panel-collapse collapse">
								<div class="panel-body">
									<p> No. 286, Seik Kan Thar Street,<br>Kyauktada Township, Yangon</p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118757</p>
									<div class="view-map"><span><a href="https://www.google.com/maps/place/YKKO/@16.7775192,96.1637463,17z/data=!4m5!1m2!2m1!1sykko,+seik+kan+thar!3m1!1s0x30c1ec88a75860a1:0x3976ee9d3be57609" target="_blank"> View Map</a> </span></div>
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseFive" style="display:block; width:100%;">
										HLEDAN 
										<span class="glyphicon glyphicon-plus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>
								</h2>
							</div>
							<div id="collapseFive" class="panel-collapse collapse">
								<div class="panel-body">
									<p> No.(35), Insein Road(Near Hledan Junction),Kamayut Township, Yangon</p>
									<p> <i class="fa fa-phone fa-lg"></i> : 951-512 543 </p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118751 </p>
									<div class="view-map"><span><a href="https://www.google.com/maps/place/Hledan/@16.829111,96.129947,17z/data=!3m1!4b1!4m2!3m1!1s0x30c194c9b9e1c519:0x465fd21ce279f49" target="_blank"> View Map</a> </span> </div>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseHlaing" style="display:block; width:100%;">
										MICT Park 
										<span class="glyphicon glyphicon-plus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>
								</h2>
							</div>
							<div id="collapseHlaing" class="panel-collapse collapse">
								<div class="panel-body">
									<p> Special Canteen, MICT Park, Universities of Hlaing Compus, Thamine College Street, Hlaing Township, Yangon</p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118816 </p>
									<div class="view-map"><span><a href="https://www.google.com/maps/place/MICT+Canteen/@16.848417,96.1277625,17z/data=!4m5!1m2!3m1!2sMICT+Canteen!3m1!1s0x0000000000000000:0x96702e96be9f629d" target="_blank"> View Map</a> </span> </div>
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseSix" style="display:block; width:100%;">
										8-MILE
										<span class="glyphicon glyphicon-plus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>
								</h2>
							</div>
							<div id="collapseSix" class="panel-collapse collapse">
								<div class="panel-body">
									<p> No. 57, Ground Floor, (near 8-Mile Junction), Kyaik Wine Pagoda Road, Da Na Thiri Tower, Mayangone Township, Yangon</p>
									<p> <i class="fa fa-phone fa-lg"></i> : 951-656 097</p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118755</p> 
									<div class="view-map"><span><a href="https://www.google.com/maps/place/YKKO/@16.86524,96.141341,17z/data=!3m1!4b1!4m2!3m1!1s0x30c1948864e51139:0x4c2936f038a672b7" target="_blank"> View Map</a> </span> </div>
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" style="display:block; width:100%;">
										THAKETA<i style="font-weight:400; font-size:50%; letter-spacing:1px;">(CAPITAL HYPERMARKET)</i>
										<span class="glyphicon glyphicon-plus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>
								</h2>
							</div>
							<div id="collapseSeven" class="panel-collapse collapse">
								<div class="panel-body">
									<p>No. 14-E, Room (105), Ground Floor, Min Nandar Road, Dawpon Township, Yangon</p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118761</p>
									<div class="view-map"><span><a href="https://www.google.com/maps/place/Capital+Hyper+Mart,+Yangon/@16.8660214,96.1840814,17z/data=!4m2!3m1!1s0x30c193a8009593ed:0x754a622f360ad058" target="_blank"> View Map</a> </span> </div>
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseEight" style="display:block; width:100%;">
										THAMINE <i style="font-weight:400; font-size:50%; letter-spacing:1px;">(CITY MART)</i>
										<span class="glyphicon glyphicon-plus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>
								</h2>
							</div>
							<div id="collapseEight" class="panel-collapse collapse">
								<div class="panel-body">
									<p>No. 114, 1st Floor, Corner of Insein & Thamine Railway Station Street, Quarter (2), Mayangone Township, Yangon.</p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118763</p>
									<div class="view-map"><span><a href="https://www.google.com/maps/place/City+Mart/@16.8621572,96.1215881,17z/data=!3m1!4b1!4m2!3m1!1s0x30c194f0b28623cb:0x559266db076387ef" target="_blank"> View Map</a> </span> </div>
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseNine" style="display:block; width:100%;">
										JUNCTION SQUARE 
										<span class="glyphicon glyphicon-plus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>
								</h2>
							</div>
							<div id="collapseNine" class="panel-collapse collapse">
								<div class="panel-body">
									<p>Junction Square, Room (S-201), Between Pyay Road & Kyuntaw  Street, Near Agriculture (Bus Stop), Kamayut Township, Yangon.</p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118765</p>
									<div class="view-map"><span><a href="https://www.google.com/maps/place/Junction+Square+Shopping+Centre/@16.8178848,96.1331043,17z/data=!4m2!3m1!1s0x30c1eb3590712cc1:0xd1674b74cc622b2f" target="_blank"> View Map</a> </span> </div>
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseTen" style="display:block; width:100%;">
										RACE COURSE 
										<span class="glyphicon glyphicon-plus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>
								</h2>
							</div>
							<div id="collapseTen" class="panel-collapse collapse">
								<div class="panel-body">
									<p> No. 24/26 , Ground Floor, South Race Course Street, (Race Course Condo), Tamwe Township, Yangon.</p>
									<p> <i class="fa fa-phone fa-lg"></i> : 951-401 187 Ext: 130</p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118759</p>
									<div class="view-map"><span><a href="https://www.google.com/maps/place/Ykko+(Tamwe)/@16.814853,96.170551,17z/data=!3m1!4b1!4m2!3m1!1s0x30c1ecb43a886a4d:0xac0e513ba5bed857" target="_blank"> View Map</a> </span> </div>
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseTen1" style="display:block; width:100%;">
										WARDAN					          
										<span class="glyphicon glyphicon-plus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>
								</h2>
							</div>
							<div id="collapseTen1" class="panel-collapse collapse">
								<div class="panel-body">
									<p> No. 790, Room (112/113), Ground Floor (Da Na Thiha Center), Corner of Bogyoke Aung San Road And Wardan Street, Lanmadaw Township, Yangon.</p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118769</p>
									<div class="view-map"><span><a href="https://www.google.com/maps/place/YKKO/@16.780146,96.139719,17z/data=!3m1!4b1!4m2!3m1!1s0x30c1eb70d6d91a2d:0x319fca7bcffcc7ad" target="_blank"> View Map</a> </span> </div>
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseTen2" style="display:block; width:100%;">
										SHWE BAHO
										<span class="glyphicon glyphicon-plus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>
								</h2>
							</div>
							<div id="collapseTen2" class="panel-collapse collapse">
								<div class="panel-body">
									<p>No. 01-03, Building (B), Ground Floor, Myittar Yeik Mon Housing, Thamain Bayan  Road, Tamwe Township, Yangon.</p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118771</p>
									<div class="view-map"><span><a href="https://www.google.com/maps/place/Shwe+Baho/@16.8106703,96.1792985,17z/data=!4m2!3m1!1s0x30c1ecc8535487e1:0xfb466456ed1dc1a7" target="_blank"> View Map</a> </span> </div>
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseTen3" style="display:block; width:100%;">
										DAGON CENTER II
										<span class="glyphicon glyphicon-plus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>
								</h2>
							</div>
							<div id="collapseTen3" class="panel-collapse collapse">
								<div class="panel-body">
									<p> No. 3/4, 5th Floor, Pyay Road (Dagon Centre II), Sanchaung Township, Yangon.</p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118767</p>
									<div class="view-map"> <span> <a href="https://www.google.com/maps/place/Dagon+Centre+2+Shopping+Mall/@16.8044846,96.1375688,17z/data=!3m1!4b1!4m2!3m1!1s0x30c1eb44170adf1b:0x4be1f7384cc20c2b" target="_blank"> View Map</a> </span> </div>
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseTen4" style="display:block; width:100%;">
										SHWE GONE DAING <i style="font-weight:400; font-size:50%; letter-spacing:1px;"> (OCEAN)</i>
										<span class="glyphicon glyphicon-plus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>
								</h2>
							</div>
							<div id="collapseTen4" class="panel-collapse collapse">
								<div class="panel-body">
									<p> Room(113), Ground Floor, Corner of Shwe Gone Daing Road and Banyardala Road, Bahan Township, Yangon.</p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118775</p>
									<div class="view-map"><span><a href="https://www.google.com/maps/place/Ocean+Tarmwe/@16.811227,96.170577,17z/data=!4m2!3m1!1s0x30c1ecb6e32dddc5:0x4ada44a13abf5acf" target="_blank"> View Map</a> </span> </div>
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseTen5" style="display:block; width:100%;">
										PEOPLE'S PARK
										<span class="glyphicon glyphicon-plus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>
								</h2>
							</div>
							<div id="collapseTen5" class="panel-collapse collapse">
								<div class="panel-body">
									<p>Room (G-2), People's Park and Square (Myanmar Cultural Valley), U Wisara Road, Dagon Township, Yangon.</p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118781 </p>
									<div class="view-map"><span><a href="https://www.google.com/maps/place/Myanmar+Culture+Valley,+Yangon/@16.7980626,96.1451034,17z/data=!4m2!3m1!1s0x30c1eb5d9b9e080d:0x986cd3a41f79ed05" target="_blank"> View Map</a> </span> </div>
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseTen6" style="display:block; width:100%;">
										SOUTH DAGON <i style="font-weight:400; font-size:50%; letter-spacing:1px;">(CITY MART)</i>
										<span class="glyphicon glyphicon-plus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>
								</h2>
							</div>
							<div id="collapseTen6" class="panel-collapse collapse">
								<div class="panel-body">
									<p>Room (3), City Mart Supermarket (South Dagon Branch), Corner of Hlawgar Road & Myeik Road, South Dagon Township, Yangon.</p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118773</p>
									<div class="view-map"><span><a href="https://www.google.com/maps/place/City+Mart/@16.8481916,96.2364338,17z/data=!4m2!3m1!1s0x30c1929dcc110987:0x52ecc8824d5364db" target="_blank"> View Map</a> </span> </div>
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseTen7" style="display:block; width:100%;">
										STAR CITY
										<span class="glyphicon glyphicon-plus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>
								</h2>
							</div>
							<div id="collapseTen7" class="panel-collapse collapse">
								<div class="panel-body">
									<p> Building (A-1), Wing (C), Middle Room,<br>Star City, Thanlyin, Yangon.</p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118759</p>
									<div class="view-map"><span><a href="https://www.google.com/maps/place/Star+City/@16.776705,96.228647,17z/data=!3m1!4b1!4m2!3m1!1s0x30c1ed7676a5c239:0xc465607be6a4dbf" target="_blank"> View Map</a> </span> </div>
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseTen8" style="display:block; width:100%;">
										INSEIN
										<span class="glyphicon glyphicon-plus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"> </span>
									</a>
								</h2>
							</div>
							<div id="collapseTen8" class="panel-collapse collapse">
								<div class="panel-body">
									<p> No. 24, Lan Thit Road, Nant Thar Gone Quarter,<br> Insein Township, Yangon.</p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118779</p>
									<div class="view-map"><span><a href="https://www.google.com/maps/dir/Lanthit+Rd,+Yangon,+Republic+of+the+Union+of+Myanmar/16.8895069,96.109699/@16.8890114,96.108426,17z/data=!4m8!4m7!1m5!1m1!1s0x30c195b52c07e32f:0x9aaca01b1c8e3626!2m2!1d96.1099975!2d16.8895631!1m0" target="_blank"> View Map</a> </span> </div>
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseTen9" style="display:block; width:100%;">
										JUNCTION MAWTIN
										<span class="glyphicon glyphicon-plus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>
								</h2>
							</div>
							<div id="collapseTen9" class="panel-collapse collapse">
								<div class="panel-body">
									<p>Room (403), Level (4), Maw Tin Tower, Corner of Lann Thit Street and Anawrahtar Road, <br> Lanmadaw Township, Yangon.</p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118783</p>
									<div class="view-map"><span><a href="https://www.google.com/maps/place/Junction+Mawtin,+Anawratha+Rd,+Yangon,+Republic+of+the+Union+of+Myanmar/@16.7778676,96.1408358,17z/data=!4m7!1m4!3m3!1s0x30c1eb776149573f:0x6f89525aa8673978!2sJunction+Mawtin,+Anawratha+Rd,+Yangon,+Republic+of+the+Union+of+Myanmar!3b1!3m1!1s0x30c1eb776149573f:0x6f89525aa8673978" target="_blank"> View Map</a> </span> </div>
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseTen10" style="display:block; width:100%;">
										SHWE PIN LONE <i style="font-weight:400; font-size:50%; letter-spacing:1px;"> (CITY MART)</i>
										<span class="glyphicon glyphicon-plus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>
								</h2>
							</div>
							<div id="collapseTen10" class="panel-collapse collapse">
								<div class="panel-body">
									<p>Room (4/5), City Mart Supermarket, Ground Floor, Bayintnaung Road, (25) Quarter, ShwePinLon Housing, North Dagon Township, Yangon.</p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118785</p>
									<div class="view-map"><span><a href="https://www.google.com/maps/dir/16.8594942,96.1990088/16.8594942,96.1989981/@16.8587138,96.2001568,17z" target="_blank"> View Map</a> </span> </div>
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseTen11" style="display:block; width:100%;">
										AYARMON <i style="font-weight:400; font-size:50%; letter-spacing:1px;"> (CITY MART)</i>
										<span class="glyphicon glyphicon-plus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>
								</h2>
							</div>
							<div id="collapseTen11" class="panel-collapse collapse">
								<div class="panel-body">
									<p> Shop (06), No. 162/163, (7) Quater,<br> Ayeyarwon Road, Myakwarnyo Housing, <br> Thaketa Township, Yangon.</p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118806</p>
									<div class="view-map"><span><a href="https://www.google.com/maps/@16.8044,96.20895,17z" target="_blank"> View Map</a> </span> </div>
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseTen12" style="display:block; width:100%;">
										WAIZAYANDAR <i style="font-weight:400; font-size:50%; letter-spacing:1px;"> (CITY MART)</i>
										<span class="glyphicon glyphicon-plus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>
								</h2>
							</div>
							<div id="collapseTen12" class="panel-collapse collapse">
								<div class="panel-body">
									<p> Shop (06), No (56,56,58),<br> (8) Quarter, Waizayantar Road,<br>South Okkalapa Township, Yangon.</p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118812</p>
									<div class="view-map"><span><a href="https://www.google.com/maps/place/Gandamar+Wholesale+Centre,+Corner+of+Waizayandar+Road+and+Gandamar+Road,+Yangon,+Myanmar+%28Burma%29/@16.8621077,96.1617755,17z/data=!4m6!1m3!3m2!1s0x30c19373e2427f75:0xfc0cd6ab50134092!2sOkkala+Golf+Course,+Yangon!3m1!1s0x30c19379721178bd:0x231b8d4890e428c3" target="_blank"> View Map</a> </span></div>
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseTen13" style="display:block; width:100%;">
										HOANG ANH GIA LAI <i style="font-weight:400; font-size:50%; letter-spacing:1px;">(SHOPPING MALL)</i>
										<span class="glyphicon glyphicon-plus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"> </span>
									</a>
								</h2>
							</div>
							<div id="collapseTen13" class="panel-collapse collapse">
								<div class="panel-body">
									<p>Room (316), HAGL Shopping Mall,<br> Kaba Aye Road, Bahan Township,<br>Yangon.</p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118818</p>
									<div class="view-map"><span><a href="https://www.google.com/maps/place/HAGL+Myanmar+Centre/@16.827423,96.155219,17z/data=!3m1!4b1!4m2!3m1!1s0x30c193567fd584f9:0x596cad93a561dc42" target="_blank"> View Map</a> </span> </div>
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion1" href="#collapsemdyThree" style="display:block; width:100%;">
										NORTH PIN LONE SIT TAUNG
										<span class="glyphicon glyphicon-plus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>
								</h2>
							</div>
							<div id="collapsemdyThree" class="panel-collapse collapse">
								<div class="panel-body">
									<p> Shop (07), City Mart Supermarket, Ground Floor, Corner of Pin lon & Sittaunt Road, North Dagon Township, Yangon.</p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118820</p>
									<div class="view-map"><span><a href="https://www.google.com.mm/maps/@16.8726531,96.1960322,17z?hl=en" target="_blank"> View Map</a> </span> </div>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- city1 end -->

				<div class="mb-city2-data">
					<div class="panel-group" id="accordion1">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion1" href="#collapsemdyOne" style="display:block; width:100%;">
										CHAN AYE THAR SAN
										<span class="glyphicon glyphicon-minus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>
								</h2>
							</div>
							<div id="collapsemdyOne" class="panel-collapse collapse in">
								<div class="panel-body">
									<p> No. 70, (30) Street, Between (64x 65), Chan Aye Thar Zan Township, Mandalay. </p>
									<p> <i class="fa fa-phone fa-lg"></i> : 02-61257, 011201214</p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118795</p>
									<div class="view-map"><span><a href="https://www.google.com/maps/place/YKKO/@21.975582,96.108872,17z/data=!3m1!4b1!4m2!3m1!1s0x30cb6d0735dea11b:0x71e2dad427fd42e5" target="_blank"> View Map</a> </span> </div>
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion1" href="#collapsemdyTwo" style="display:block; width:100%;">
										73 OCEAN <i style="font-weight:400; font-size:50%; letter-spacing:1px;"> (CAPITAL MALL)</i>
										<span class="glyphicon glyphicon-plus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>
								</h2>
							</div>
							<div id="collapsemdyTwo" class="panel-collapse collapse">
								<div class="panel-body">
									<p> Ocean Super Centre, Shop (66), Building (2), 73th Street, Between Thazin & Ngu War Street, Mingalar Mandalay Prestige Community, Chan Mya Tha Zi Township, Mandalay.</p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118797</p>
									<div class="view-map"><span> <a href="https://www.google.com/maps/place/Ocean+Super+Center+(73+Road+Branch)/@21.941742,96.092777,17z/data=!3m1!4b1!4m2!3m1!1s0x30cb6d665eff9e4f:0x861ae22f977dd740" target="_blank"> View Map</a> </span> </div>
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion1" href="#collapsemdyFour">
										CITY MART <i style="font-weight:400; font-size:50%; letter-spacing:1px;"> (19TH STREET)</i>
										<span class="glyphicon glyphicon-plus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>
								</h2>
							</div>
							<div id="collapsemdyFour" class="panel-collapse collapse">
								<div class="panel-body">
									<p> Room (8), City Mart Supermarket, Ground Floor, 19th Street, Between 65th x 66th Street, AungMyayThaZan Township, Mandalay.</p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118802</p>
									<div class="view-map"><span><a href="https://www.google.com/maps/place/AGD+Bank+ATM+@+CityMart+Super+Market/@21.9917007,96.1083364,17z/data=!4m2!3m1!1s0x30cb6cf848232b2f:0x81c407f33a0f0ee2" target="_blank"> View Map</a> </span> </div>
								</div>
							</div>
						</div>

					</div>
				</div>  <!-- mb city 2 -->

				<!-- * -->
				<div class="mb-city3-data">
					<div class="panel-group" id="accordion2">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion2" href="#collapsenayOne">
										THA PYAY GONE
										<span class="glyphicon glyphicon-minus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>

								</h2>
							</div>
							<div id="collapsenayOne" class="panel-collapse collapse in">
								<div class="panel-body">
									<p> Near Tha Pyay Gone Market,<br> Tha Pyay Gone Hill Top, <br> Nay Pyi Taw.</p>
									<p> <i class="fa fa-phone fa-lg"></i> : 067-414 687</p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118787</p>
									<div class="view-map"><span><a href="https://www.google.com/maps/place/YKKO/@19.740233,96.117609,17z/data=!3m1!4b1!4m2!3m1!1s0x30c8bc2e4f6684a7:0x84fd570e79e8ef54" target="_blank"> View Map</a> </span> </div>
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion2" href="#collapsenayTwo">
										CAPITAL <i style="font-weight:400; font-size:50%; letter-spacing:1px;"> (CAPITAL HYPERMARKET)</i>
										<span class="glyphicon glyphicon-plus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>
								</h2>
							</div>
							<div id="collapsenayTwo" class="panel-collapse collapse">
								<div class="panel-body">
									<p> No. 116, Corner of YarzaThingaha Road & Diplomatic Road  (infront of Hotel Zone), Nay Pyi Taw.</p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118791</p>
									<div class="view-map"><span> <a href="https://www.google.com/maps/place/Capital+Hypermarket/@19.709193,96.11195,17z/data=!3m1!4b1!4m2!3m1!1s0x30c8bc5365d0c793:0x822d3c7652c746aa" target="_blank"> View Map</a> </span> </div>
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion2" href="#collapsenayThree">
										OCEAN OATTARATHIRI
										<span class="glyphicon glyphicon-plus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>
								</h2>
							</div>
							<div id="collapsenayThree" class="panel-collapse collapse">
								<div class="panel-body">
									<p> No. 9, Room (101), Ground Floor, Corner of Zay Ya Htar Ni Road & Mandalay Road, Oattarathiri Township, Nay Pyi Taw.</p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118789</p>
									<div class="view-map"><span> <a href="https://www.google.com/maps/place/Ocean/@19.816836,96.153712,17z/data=!3m1!4b1!4m2!3m1!1s0x30c8b8cb212c2c3b:0xda381a5d2843b2f4" target="_blank"> View Map</a> </span> </div>
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion2" href="#collapsenayFour">
										JUNCTION CENTER
										<span class="glyphicon glyphicon-plus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>
								</h2>
							</div>
							<div id="collapsenayFour" class="panel-collapse collapse">
								<div class="panel-body">
									<p>Yan Aung Myin Quarter, Yarza Thingaha Road (infront of Hotel Zone), Dadkhina Thiri Township, Nay Pyi Taw.</p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118793</p>
									<div class="view-map"><span> <a href="https://www.google.com/maps/place/Junction+Centre/@19.7137769,96.1105315,18z/data=!3m1!4b1!4m2!3m1!1s0x30c8bc52b3ad0a73:0x24d0a6bf17d863d4" target="_blank"> View Map</a> </span> </div>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- mb city 3 -->
				<!-- * -->
				<div class="mb-city4-data">
					<div class="panel-group" id="accordion3">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion3" href="#collapsepyinOne">
										PYIN OO LWIN <i style="font-weight:400; font-size:50%; letter-spacing:1px;"> (RUBY MART)</i>
										<span class="glyphicon glyphicon-minus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>

								</h2>
							</div>
							<div id="collapsepyinOne" class="panel-collapse collapse in">
								<div class="panel-body">
									<p> UG-25, Ruby Mart, Yangon - Mandalay Road, Pyin Oo Lwin.</p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118808</p>
									<div class="view-map"><span><a href="https://www.google.com/maps/place/Ruby+Mart/@22.03785,96.49012,17z/data=!4m2!3m1!1s0x0000000000000000:0x9f0fd0bb0ec9e335" target="_blank"> View Map</a> </span> </div>
								</div>
							</div>
						</div>

					</div>
				</div> <!-- mb city 4 -->

				<div class="mb-city5-data">
					<div class="panel-group" id="accordion4">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion4" href="#collapsenayOne">
										MYEIK
										<span class="glyphicon glyphicon-minus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>

								</h2>
							</div>
							<div id="collapsenayOne" class="panel-collapse collapse in">
								<div class="panel-body">
									<p> No.(4), End of  Thae' Kwin Food Court, Kannar Street, Thaketa Quarter, Myeik.</p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118814</p>
									<div class="view-map"><span><a href="https://www.google.com/maps/@12.46288,98.59766,17z" target="_blank"> View Map</a> </span> </div>
								</div>
							</div>
						</div>

					</div>
				</div> <!-- mb city 5 -->

				<div class="mb-city6-data">
					<div class="panel-group" id="accordion5">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion5" href="#collapsemawOne">
										RIVER VIEW <i style="font-weight:400; font-size:50%; letter-spacing:1px;">(MAWLAMYAING)</i>
										<span class="glyphicon glyphicon-minus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>
								</h2>
							</div>
							<div id="collapsemawOne" class="panel-collapse collapse in">
								<div class="panel-body">
									<p> Dawei Jetty, Corner of Strand Road and Dawei Bridge Street, Sit Kae Kone Township, Mawlamyaing.</p>
									<p> <i class="fa fa-phone fa-lg"></i> : 9977118804</p>
									<div class="view-map"><span><a href="https://www.google.com/maps/place/YKKO/@16.480823,97.618707,17z/data=!3m1!4b1!4m2!3m1!1s0x30c2a8af107140b9:0xf91aba2cbe82ce8b" target="_blank"> View Map</a> </span> </div>
								</div>
							</div>
						</div>

					</div>
				</div> <!-- mb city 6 -->
				<!--/********************** Start mb-Township *******************/-->
				<div class="mb-township1-data">
					<div class="panel-group" id="accordion6">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion6" href="#collapsemdyOne">
										YANKIN
										<span class="glyphicon glyphicon-minus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>

								</h2>
							</div>
							<div id="collapsemdyOne" class="panel-collapse collapse in">
								<div class="panel-body">
									<p> No. 10, Thit Sar Street,<br>Yankin Yownship, Yangon</p>
									<p> <i class="fa fa-phone fa-lg"></i> : 951-572 196</p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118749</p>
									<div class="view-map"><span><a href="https://www.google.com/maps/@16.7850553,96.1713889,17z" target="_blank"> View Map</a> </span> </div>
								</div>
							</div>
						</div>

					</div>
				</div> <!-- mb Township1 -->

				<div class="mb-township2-data">
					<div class="panel-group" id="accordion7">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion7" href="#collapsetown2One">
										SAYA SAN
										<span class="glyphicon glyphicon-minus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>
								</h2>
							</div>
							<div id="collapsetown2One" class="panel-collapse collapse in">
								<div class="panel-body">
									<p> No. 28, Saya San Road,<br> Bahan Township, Yangon</p>
									<p> <i class="fa fa-phone fa-lg"></i> : 951-860 3783, 951-703 208</p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118747</p> 
									<div class="view-map"><span> <a href="https://www.google.com/maps/place/YKKO+-+Sayarsan/@16.816552,96.158457,17z/data=!3m1!4b1!4m2!3m1!1s0x30c1ecac7a7e7495:0x6ef0870b2e1207dd" target="_blank"> View Map</a> </span> </div>
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion7" href="#collapsetown2Two">
										SHWE GONE DAING <i style="font-weight:400; font-size:50%; letter-spacing:1px;"> (OCEAN)</i>
										<span class="glyphicon glyphicon-plus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>
								</h2>
							</div>
							<div id="collapsetown2Two" class="panel-collapse collapse">
								<div class="panel-body">
									<p> Room (113), Ground Floor, Corner of Shwe Gone Daing Road and Banyardala Road, Bahan Township, Yangon.</p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118775</p>
									<div class="view-map"><span> <a href="https://www.google.com/maps/place/YKKO/@19.740233,96.117609,17z/data=!3m1!4b1!4m2!3m1!1s0x30c8bc2e4f6684a7:0x84fd570e79e8ef54" target="_blank"> View Map</a> </span> </div>
								</div>
							</div>
						</div> 

						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion7" href="#collapsetown2Three">
										HOANG ANH GIA LAI <i style="font-weight:400; font-size:50%; letter-spacing:1px;">(MYANMAR SHOPPING MALL)</i>
										<span class="glyphicon glyphicon-plus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>
								</h2>
							</div>
							<div id="collapsetown2Three" class="panel-collapse collapse">
								<div class="panel-body">
									<p>Room (316), HAGL Shopping Mall,<br> Kaba Aye Road, Bahan Township,<br> Yangon.</p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118818</p>
									<div class="view-map"><span> <a href="https://www.google.com/maps/place/HAGL+Myanmar+Centre/@16.827423,96.155219,17z/data=!3m1!4b1!4m2!3m1!1s0x30c193567fd584f9:0x596cad93a561dc42" target="_blank"> View Map</a> </span> </div>
								</div>
							</div>
						</div> 

					</div>
				</div> <!-- mb Township2 -->

				<div class="mb-township3-data">
					<div class="panel-group" id="accordion8">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion8" href="#collapsetown2One">
										RACE COURSE <i style="font-weight:400; font-size:50%; letter-spacing:1px;"> (TAMWE)</i>
										<span class="glyphicon glyphicon-minus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>

								</h2>
							</div>
							<div id="collapsetown2One" class="panel-collapse collapse in">
								<div class="panel-body">
									<p> No. 24/26 , Ground Floor, South Race Course Street, (Race Course Condo), Tamwe Township, Yangon.</p>
									<p> <i class="fa fa-phone fa-lg"></i> : 951-401 187 Ext: 130</p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118759</p>
									<div class="view-map"><span> <a href="https://www.google.com/maps/place/Ykko+(Tamwe)/@16.814853,96.170551,17z/data=!3m1!4b1!4m2!3m1!1s0x30c1ecb43a886a4d:0xac0e513ba5bed857" target="_blank"> View Map</a> </span> </div>
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion8" href="#collapsetown2Two">
										SHWE BAHO
										<span class="glyphicon glyphicon-plus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>
								</h2>
							</div>
							<div id="collapsetown2Two" class="panel-collapse collapse">
								<div class="panel-body">
									<p>No. 01-03, Building (B), Ground Floor, Myittar Yeik Mon Housing, Thamain Bayan  Road, Tamwe Township, Yangon.</p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118771</p>
									<div class="view-map"><span> <a href="https://www.google.com/maps/place/Shwe+Baho/@16.8106703,96.1792985,17z/data=!4m2!3m1!1s0x30c1ecc8535487e1:0xfb466456ed1dc1a7" target="_blank"> View Map</a> </span> </div>
								</div>
							</div>
						</div> 

					</div>
				</div> <!-- mb Township3 -->

				<div class="mb-township4-data">
					<div class="panel-group" id="accordion9">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion9" href="#collapsetown4One">
										THINGANGYUN
										<span class="glyphicon glyphicon-minus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>

								</h2>
							</div>
							<div id="collapsetown4One" class="panel-collapse collapse in">
								<div class="panel-body">
									<p> No. A1-001, Zawtika Housing,<br> Lay Daung Kan Road, Junction Zawana,<br> Thangangyun Township,Yangon</p>
									<p> <i class="fa fa-phone fa-lg"></i> : 951-573 505 Ext:216, 959-86-50850</p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118753</p> 
									<div class="view-map"><span> <a href="https://www.google.com/maps/place/Zawana+Bus+Stop,+Lay+Daungkan+Rd,+Yangon,+Myanmar+%28Burma%29/@16.8273102,96.1900128,17z/data=!4m6!1m3!3m2!1s0x30c1932ee5ca0c6d:0xace60364343987b6!2sCity+Mart+Super+Market,+Yangon!3m1!1s0x30c1932ee06867d5:0xf43f5546779b749" target="_blank"> View Map</a> </span> </div>
								</div>
							</div>
						</div>

					</div>
				</div> <!-- mb Township4 -->

				<div class="mb-township5-data">
					<div class="panel-group" id="accordion10">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion10" href="#collapsetown5One">
										SEIK KAN THAR
										<span class="glyphicon glyphicon-minus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>

								</h2>
							</div>
							<div id="collapsetown5One" class="panel-collapse collapse in">
								<div class="panel-body">
									<p> No. 286, Seik Kan Thar Street,<br> Kyauktada Township, Yangon</p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118757</p>
									<div class="view-map"><span> <a href="https://www.google.com/maps/place/YKKO/@16.7775192,96.1637463,17z/data=!4m5!1m2!2m1!1sykko,+seik+kan+thar!3m1!1s0x30c1ec88a75860a1:0x3976ee9d3be57609" target="_blank"> View Map</a> </span> </div>
								</div>
							</div>
						</div>

					</div>
				</div> <!-- mb Township5 -->

				<div class="mb-township6-data">
					<div class="panel-group" id="accordion11">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion11" href="#collapsetown6One">
										HLEDAN
										<span class="glyphicon glyphicon-minus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>

								</h2>
							</div>
							<div id="collapsetown6One" class="panel-collapse collapse in">
								<div class="panel-body">
									<p> No. 35, Insein Road (near Hledan Junction),Kamayut Township, Yangon</p>
									<p> <i class="fa fa-phone fa-lg"></i> : 951-512 543 </p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118751 </p>
									<div class="view-map"><span> <a href=" https://www.google.com/maps/place/Hledan/@16.829111,96.129947,17z/data=!3m1!4b1!4m2!3m1!1s0x30c194c9b9e1c519:0x465fd21ce279f49" target="_blank"> View Map</a> </span> </div>
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion11" href="#collapsetown6Two">
										JUNCTION SQUARE
										<span class="glyphicon glyphicon-plus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>
								</h2>
							</div>
							<div id="collapsetown6Two" class="panel-collapse collapse">
								<div class="panel-body">
									<p>Junction Square, Room (S-201), Between Pyay Road & Kyuntaw  Street, Near Agriculture (Bus Stop), Kamayut Township, Yangon.</p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118765</p>
									<div class="view-map"><span> <a href="https://www.google.com/maps/place/Junction+Square+Shopping+Centre/@16.8178848,96.1331043,17z/data=!4m2!3m1!1s0x30c1eb3590712cc1:0xd1674b74cc622b2f" target="_blank"> View Map</a> </span> </div>
								</div>
							</div>
						</div> 

					</div>
				</div> <!-- mb Township6 -->

				<div class="mb-hlaing-data">
					<div class="panel-group" id="accordion11">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion11" href="#collapseHlaingOne">
										MICT Park
										<span class="glyphicon glyphicon-minus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>

								</h2>
							</div>
							<div id="collapseHlaingOne" class="panel-collapse collapse in">
								<div class="panel-body">
									<p> Special Canteen, MICT Park, Universities of Hlaing Compus, Thamine College Street, Hlaing Township, Yangon</p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118816 </p>
									<div class="view-map"><span> <a href="https://www.google.com/maps/place/MICT+Canteen/@16.848417,96.1277625,17z/data=!4m5!1m2!3m1!2sMICT+Canteen!3m1!1s0x0000000000000000:0x96702e96be9f629d" target="_blank"> View Map</a> </span> </div>
								</div>
							</div>
						</div>

					</div>
				</div> <!-- mb Hlaing -->

				<div class="mb-township7-data">
					<div class="panel-group" id="accordion12">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion12" href="#collapsetown7One">
										8-MILE
										<span class="glyphicon glyphicon-minus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>

								</h2>
							</div>
							<div id="collapsetown7One" class="panel-collapse collapse in">
								<div class="panel-body">
									<p> No. 57, Ground Floor, (Near 8-Mile Junction), Kyaik Wine Pagoda Road, Da Na Thiri Tower, Mayangone Township, Yangon</p>
									<p> <i class="fa fa-phone fa-lg"></i> : 951-656 097</p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118755</p> 
									<div class="view-map"><span><a href="https://www.google.com/maps/place/YKKO/@16.86524,96.141341,17z/data=!3m1!4b1!4m2!3m1!1s0x30c1948864e51139:0x4c2936f038a672b7" target="_blank"> View Map</a> </span> </div>
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion12" href="#collapsetown7Two">
										THAMINE <i style="font-weight:400; font-size:50%; letter-spacing:1px;">(CITY MART)</i>
										<span class="glyphicon glyphicon-plus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>
								</h2>
							</div>
							<div id="collapsetown7Two" class="panel-collapse collapse">
								<div class="panel-body">
									<p>No. 114, 1st Floor, Corner of Insein & Thamine Railway Station Street, Quarter (2), Mayangone Township, Yangon.</p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118763</p>
									<div class="view-map"><span><a href="https://www.google.com/maps/place/City+Mart,+Thamine+Junction,+Insein+Road,+Yangon/@16.8622747,96.1204606,17z/data=!4m5!1m2!2m1!1sCity+Mart+Supermarket,Bayint+Naung+Road,+yangon!3m1!1s0x30c194f0b28623cb:0x559266db076387ef" target="_blank"> View Map</a> </span> </div>
								</div>
							</div>
						</div> 

					</div>
				</div> <!-- mb Township7 -->

				<div class="mb-township8-data">
					<div class="panel-group" id="accordion13">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion13" href="#collapsetown8One">
										WARDAN
										<span class="glyphicon glyphicon-minus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>
								</h2>
							</div>
							<div id="collapsetown8One" class="panel-collapse collapse in">
								<div class="panel-body">
									<p> No. 790, Room (112/113), Ground Floor (Da Na Thiha Center), Corner of Bogyoke Aung San Road And Wardan Street, Lanmadaw Township, Yangon.</p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118769</p>
									<div class="view-map"><span> <a href="https://www.google.com/maps/place/YKKO/@16.780146,96.139719,17z/data=!3m1!4b1!4m2!3m1!1s0x30c1eb70d6d91a2d:0x319fca7bcffcc7ad" target="_blank"> View Map</a> </span> </div>
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion13" href="#collapsetown8Two">
										JUNCTION MAWTIN
										<span class="glyphicon glyphicon-plus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>
								</h2>
							</div>
							<div id="collapsetown8Two" class="panel-collapse collapse">
								<div class="panel-body">
									<p>Room (403), Level (4), Maw Tin Tower, Corner of Lann Thit Street and Anawrahtar Road,<br> Lanmadaw Township, Yangon.</p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118783</p>
									<div class="view-map"><span><a href="https://www.google.com/maps/place/Junction+Mawtin,+Anawratha+Rd,+Yangon,+Republic+of+the+Union+of+Myanmar/@16.7778676,96.1408358,17z/data=!4m7!1m4!3m3!1s0x30c1eb776149573f:0x6f89525aa8673978!2sJunction+Mawtin,+Anawratha+Rd,+Yangon,+Republic+of+the+Union+of+Myanmar!3b1!3m1!1s0x30c1eb776149573f:0x6f89525aa8673978" target="_blank"> View Map</a> </span> </div>
								</div>
							</div>
						</div> 

					</div>
				</div> <!-- mb Township8 -->

				<div class="mb-township9-data">
					<div class="panel-group" id="accordion14">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion14" href="#collapsetown9One">
										AYARMON <i style="font-weight:400; font-size:50%; letter-spacing:1px;"> (CITY MART)</i>
										<span class="glyphicon glyphicon-minus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>

								</h2>
							</div>
							<div id="collapsetown9One" class="panel-collapse collapse in">
								<div class="panel-body">
									<p> Shop (06), No. 162/163, (7) Quater,<br> Ayeyarwon Road, Myakwarnyo Housing,<br> Thaketa Township, Yangon.</p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118806</p>
									<div class="view-map"> <span> <a href="https://www.google.com/maps/@16.8044,96.20895,17z" target="_blank"> View Map</a> </span> </div>
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion14" href="#collapsetown9Two">
										THAKETA<i style="font-weight:400; font-size:50%; letter-spacing:1px;"> (CAPITAL HYPERMARKET)</i>
										<span class="glyphicon glyphicon-plus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>
								</h2>
							</div>
							<div id="collapsetown9Two" class="panel-collapse collapse">
								<div class="panel-body">
									<p>No. 14-E, Room(105), Ground Floor, Min Nandar Road, Dawpon Township, Yangon</p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118761</p>
									<div class="view-map"> <span><a href="https://www.google.com/maps/place/Capital+Hyper+Mart,+Yangon/@16.8660214,96.1840814,17z/data=!4m2!3m1!1s0x30c193a8009593ed:0x754a622f360ad058" target="_blank"> View Map</a> </span> </div>
								</div>
							</div>
						</div> 

					</div>
				</div> <!-- mb Township9 -->

				<div class="mb-township10-data">
					<div class="panel-group" id="accordion15">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion15" href="#collapsetown10One">
										DAGON CENTER II
										<span class="glyphicon glyphicon-minus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>
								</h2>
							</div>
							<div id="collapsetown10One" class="panel-collapse collapse in">
								<div class="panel-body">
									<p> No. 3/4, 5th Floor, Pyay Road (Dagon Centre II), Sanchaung Township, Yangon.</p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118767</p>
									<div class="view-map"> <span><a href="https://www.google.com/maps/place/Dagon+Centre+2+Shopping+Mall/@16.8044846,96.1375688,17z/data=!3m1!4b1!4m2!3m1!1s0x30c1eb44170adf1b:0x4be1f7384cc20c2b" target="_blank"> View Map</a> </span> </div>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- mb Township10 -->

				<div class="mb-township11-data">
					<div class="panel-group" id="accordion16">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion16" href="#collapsetown11One">
										INSEIN
										<span class="glyphicon glyphicon-minus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>

								</h2>
							</div>
							<div id="collapsetown11One" class="panel-collapse collapse in">
								<div class="panel-body">
									<p> No. 24, Lan Thit Road, Nant Thar Gone Quarter,<br> Insein Township, Yangon.</p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118779</p>
									<div class="view-map"><span> <a href="https://www.google.com/maps/dir/Lanthit+Rd,+Yangon,+Republic+of+the+Union+of+Myanmar/16.8895069,96.109699/@16.8890114,96.108426,17z/data=!4m8!4m7!1m5!1m1!1s0x30c195b52c07e32f:0x9aaca01b1c8e3626!2m2!1d96.1099975!2d16.8895631!1m0" target="_blank"> View Map</a> </span> </div>
								</div>
							</div>
						</div>

					</div>
				</div> <!-- mb Township11 -->

				<div class="mb-township12-data">
					<div class="panel-group" id="accordion17">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion17" href="#collapsetown12One">
										WAIZAYANDAR <i style="font-weight:400; font-size:50%; letter-spacing:1px;"> (CITY MART)</i>
										<span class="glyphicon glyphicon-minus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>
								</h2>
							</div>
							<div id="collapsetown12One" class="panel-collapse collapse in">
								<div class="panel-body">
									<p> Shop (06), No. 56,56,58,<br> (8) Quarter, Waizayantar Road,<br> South Okkalapa Township, Yangon.</p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118812</p>
									<div class="view-map"><span><a href="https://www.google.com/maps/place/Gandamar+Wholesale+Centre,+Corner+of+Waizayandar+Road+and+Gandamar+Road,+Yangon,+Myanmar+%28Burma%29/@16.8621077,96.1617755,17z/data=!4m6!1m3!3m2!1s0x30c19373e2427f75:0xfc0cd6ab50134092!2sOkkala+Golf+Course,+Yangon!3m1!1s0x30c19379721178bd:0x231b8d4890e428c3" target="_blank"> View Map</a> </span> </div>
								</div>
							</div>
						</div>

					</div>
				</div> <!-- mb Township12 -->

				<div class="mb-township13-data">
					<div class="panel-group" id="accordion18">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion18" href="#collapsetown13One">
										PEOPLE'S PARK
										<span class="glyphicon glyphicon-minus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>
								</h2>
							</div>
							<div id="collapsetown13One" class="panel-collapse collapse in">
								<div class="panel-body">
									<p>Room (G-2), People's Park and Square (Myanmar Cultural Valley), U Wisara Road, Dagon Township, Yangon.</p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118781 </p>
									<div class="view-map"><span><a href="https://www.google.com/maps/place/Myanmar+Culture+Valley,+Yangon/@16.7980626,96.1451034,17z/data=!4m2!3m1!1s0x30c1eb5d9b9e080d:0x986cd3a41f79ed05" target="_blank"> View Map</a> </span> </div>
								</div>
							</div>
						</div>

					</div>
				</div> <!-- mb Township13 -->

				<div class="mb-township14-data">
					<div class="panel-group" id="accordion19">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion19" href="#collapsetown14One">
										SHWE PIN LONE <i style="font-weight:400; font-size:50%; letter-spacing:1px;"> (CITY MART )</i>
										<span class="glyphicon glyphicon-minus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>
								</h2>
							</div>
							<div id="collapsetown14One" class="panel-collapse collapse in">
								<div class="panel-body">
									<p>Room (4/5), City Mart Supermarket, Ground Floor, Bayintnaung Road, (25) Quarter, ShwePinLon Housing, North Dagon Township, Yangon.</p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118785</p>
									<div class="view-map"><span><a href="https://www.google.com/maps/dir/16.8594942,96.1990088/16.8594942,96.1989981/@16.8587138,96.2001568,17z" target="_blank"> View Map</a> </span> </div>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion25" href="#collapsetown20Two">
										NORTH PIN LONE SIT TAUNG
										<span class="glyphicon glyphicon-plus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>
								</h2>
							</div>
							<div id="collapsetown20Two" class="panel-collapse collapse">
								<div class="panel-body">
									<p> Shop (07), City Mart Supermarket, Ground Floor, Corner of Pin lon & Sittaunt Road, North Dagon Township, Yangon.</p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118820</p>
									<div class="view-map"><span><a href="https://www.google.com.mm/maps/@16.8726531,96.1960322,19z?hl=en" target="_blank"> View Map</a> </span> </div>
								</div>
							</div>
						</div> 

					</div>
				</div> <!-- mb Township14 -->

				<div class="mb-township15-data">
					<div class="panel-group" id="accordion20">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion20" href="#collapsetown15One">
										SOUTH DAGON <i style="font-weight:400; font-size:50%; letter-spacing:1px;">(CITY MART)</i>
										<span class="glyphicon glyphicon-minus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>
								</h2>
							</div>
							<div id="collapsetown15One" class="panel-collapse collapse in">
								<div class="panel-body">
									<p>Room (3), City Mart Supermarket (South Dagon Branch), Corner of Hlawgar Road & Myeik Road, South Dagon Township, Yangon.</p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118773</p>
									<div class="view-map"><span><a href="https://www.google.com/maps/place/City+Mart/@16.8481916,96.2364338,17z/data=!4m2!3m1!1s0x30c1929dcc110987:0x52ecc8824d5364db" target="_blank"> View Map </a> </span> </div>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- mb Township15 -->

				<div class="mb-township16-data">
					<div class="panel-group" id="accordion21">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion21" href="#collapsetown16One">
										MAWLAMYAING <i style="font-weight:400; font-size:50%; letter-spacing:1px;"> (RIVER VIEW)</i>
										<span class="glyphicon glyphicon-minus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>
								</h2>
							</div>
							<div id="collapsetown16One" class="panel-collapse collapse in">
								<div class="panel-body">
									<p> Dawei Jetty, Corner of Strand Road and Dawei Bridge Street, Sit Kae Kone Township, Mawlamyaing.</p>
									<p> <i class="fa fa-phone fa-lg"></i> : 9977118804</p>
									<div class="view-map"><span><a href="https://www.google.com/maps/place/YKKO/@16.480823,97.618707,17z/data=!3m1!4b1!4m2!3m1!1s0x30c2a8af107140b9:0xf91aba2cbe82ce8b" target="_blank"> View Map</a> </span> </div>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- mb Township16 -->

				<div class="mb-township17-data">
					<div class="panel-group" id="accordion22">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion22" href="#collapsetown17One">
										CHAN AYE THAR SAN 
										<span class="glyphicon glyphicon-minus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>
								</h2>
							</div>
							<div id="collapsetown17One" class="panel-collapse collapse in">
								<div class="panel-body">
									<p> No. 70, (30) Street, Between (64x 65), Chan Aye Thar Zan Township, Mandalay. </p>
									<p> <i class="fa fa-phone fa-lg"></i> : 02-61257, 011201214</p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118795</p>
									<div class="view-map"><span><a href="https://www.google.com/maps/place/YKKO/@21.975582,96.108872,17z/data=!3m1!4b1!4m2!3m1!1s0x30cb6d0735dea11b:0x71e2dad427fd42e5" target="_blank"> View Map</a> </span> </div>
								</div>
							</div>
						</div>

					</div>
				</div> <!-- mb Township17 -->

				<div class="mb-township18-data">
					<div class="panel-group" id="accordion23">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion23" href="#collapsetown18One">
										OCEAN OATTARATHIRI
										<span class="glyphicon glyphicon-minus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>
								</h2>
							</div>
							<div id="collapsetown18One" class="panel-collapse collapse in">
								<div class="panel-body">
									<p> No. 9, Room (101), Ground Floor, Corner of Zay Ya Htar Ni Road & Mandalay Road, Oattarathiri Township, Nay Pyi Taw.</p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118789</p>
									<div class="view-map"><span><a href="https://www.google.com/maps/place/Ocean/@19.816836,96.153712,17z/data=!3m1!4b1!4m2!3m1!1s0x30c8b8cb212c2c3b:0xda381a5d2843b2f4" target="_blank"> View Map</a> </span> </div>
								</div>
							</div>
						</div>

					</div>
				</div> <!-- mb Township18 -->

				<div class="mb-township19-data">
					<div class="panel-group" id="accordion24">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion24" href="#collapsetown19One">
										JUNCTION CENTER
										<span class="glyphicon glyphicon-minus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>
								</h2>
							</div>
							<div id="collapsetown19One" class="panel-collapse collapse in">
								<div class="panel-body">
									<p>Yan Aung Myin Quarter, Yarza Thingaha Road (infront of Hotel Zone), Dadkhina Thiri Township, Nay Pyi Taw.</p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118793</p>
									<div class="view-map"><span> <a href="https://www.google.com/maps/place/Junction+Centre/@19.7137769,96.1105315,18z/data=!3m1!4b1!4m2!3m1!1s0x30c8bc52b3ad0a73:0x24d0a6bf17d863d4" target="_blank"> View Map</a> </span> </div>
								</div>
							</div>
						</div>

					</div>
				</div> <!-- mb Township19 -->

				<div class="mb-township20-data">
					<div class="panel-group" id="accordion25">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion25" href="#collapsetown20One">
										73 OCEAN
										<span class="glyphicon glyphicon-minus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>

								</h2>
							</div>
							<div id="collapsetown20One" class="panel-collapse collapse in">
								<div class="panel-body">
									<p> Ocean Super Centre, Shop (66), Building (2), 73th Street, Between Thazin & Ngu War Street, Mingalar Mandalay Prestige Community, Chan Mya Tha Zi Township, Mandalay.</p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118797</p>
									<div class="view-map"><span><a href="https://www.google.com/maps/place/Ocean+Super+Center+(73+Road+Branch)/@21.941742,96.092777,17z/data=!3m1!4b1!4m2!3m1!1s0x30cb6d665eff9e4f:0x861ae22f977dd740" target="_blank"> View Map</a> </span> </div>
								</div>
							</div>
						</div>

					</div>
				</div> <!-- mb Township20 -->

				<div class="mb-township21-data">
					<div class="panel-group" id="accordion">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapsetown21One">
										CITY MART <i style="font-weight:400; font-size:50%; letter-spacing:1px;"> (19TH STREET)</i>
										<span class="glyphicon glyphicon-minus pull-right" style="font-weight:bold; font-size:150%; margin-top:-4px;"></span>
									</a>
								</h2>
							</div>
							<div id="collapsetown21One" class="panel-collapse collapse in">
								<div class="panel-body">
									<p> Room (8), City Mart Supermarket, Ground Floor, 19th Street, Between 65th x 66th Street, AungMyayThaZan Township, Mandalay.</p>
									<p> <i class="fa fa-mobile fa-lg"></i> &nbsp : 9977118802</p>
									<div class="view-map"><span><a href="https://www.google.com/maps/place/AGD+Bank+ATM+@+CityMart+Super+Market/@21.9917007,96.1083364,17z/data=!4m2!3m1!1s0x30cb6cf848232b2f:0x81c407f33a0f0ee2"> View Map</a> </span> </div>
								</div>
							</div>
						</div>

					</div>
				</div><!-- mb Township21 -->
				<!--/////////// end mobile dropdown effects /////////// -->

				<div class="bg-footer" style="background-color:#fff;">
					<div class="container main-footer">
						<div class="row footer" style="margin-top:0.5em;">
							<div class="col-md-6 col-xs-6">
								<p class="copyright"> &copy 2015 YKKO GROUP OF COMPANIES DESIGNED BY PIXEL DIRECTS</p>
							</div>
							<div class="col-md-6 col-xs-6"> 
								<p style="text-align:right;"><a href="https://www.facebook.com/YKKOmyanmar" target="_blank" class="facebook">JOIN US ON FACEBOOK!</a></p>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- location2 bg -->
		</div>
		<script>
			$(document).ready(function(){
				$('.carousel').carousel({
					wrap: false
				}).on('slid.bs.carousel', function () {
					curSlide = $('.active');
					if(curSlide.is( ':first-child' )) {
						$('.left').show();
						return;
					} else {
						$('.left').show();   
					}
					if (curSlide.is( ':last-child' )) {
						$('.right').hide();
						return;
					} else {
						$('.right').show();    
					}
				});
			});
		</script>
		<script type="text/javascript">
			function menu()
			{
				var ans = document.getElementById('hidd').value;
				if(ans==4)
				{
					document.getElementById('location').className='active';
					document.getElementById('mb_location').className='active';
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
		<script type="text/javascript" src="js/retina.min.js"></script>
	</body>
	</html>