<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<title> YKKO Kyay-Oh & BBQ</title>
	<head>
		<script>
			//window.devicePixelRatio = 2;
		</script>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="keywords" content="YKKO, Must eat in Myanmar, Kyay oh, BBQ & Grill, Satay, Myanmar Food, ykko kyay-oh & sichet">
	    <meta name="description" content="View our menu and new items ">
	    <meta name="robots" content="index,follow">
	    <meta name="author" content="Pixel Directs">
	    <meta name="distribution" content="global">
		<!-- Twitter Card data -->
		<meta name="twitter:card" content="summary">
		<meta name="twitter:title" content="YKKO Kyay-Oh & BBQ">
		<meta name="twitter:description" content="View our menu and new items">
		<meta name="twitter:url" content="http://www.ykko.com.mm/menu/" />
		<meta name="twitter:creator" content="@pixel direct">
		<!-- Twitter Summary card images must be at least 120x120px -->
		<meta name="twitter:image" content="http://www.example.com/image.jpg">
		<!-- Open Graph data -->
		<meta property="og:title" content="YKKO Kyay-Oh & BBQ" />
		<meta property="og:url" content="http://www.ykko.com.mm/menu/" />
		<meta property="og:type" content="restaurant" />
		<meta property="og:description" content="View our menu and new items" />
		<meta property="og:image" content="http://example.com/image.jpg" />
		<meta property="og:site_name" content="YKKO" />
		<link rel="canonical" href="http://www.ykko.com.mm/menu">
		<link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
		<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>  
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/myapplication.js"></script>
		<script type="text/javascript" src="js/fixed-scroll.js"></script>
		<script type="text/javascript" src="js/flowup.js"></script>  
		<script type="text/javascript" src="js/back-to-top.js"></script> 
		<!-- /////  css file //// -->
		<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css" type="text/css" />
		<script>
	    $(document).ready(function() {
			var secondpage = $('div.categories').offset().top,
                  $window = $(window);
                  
            var mbcategory = $('div.categories').offset().top,
                  $window = $(window);
                  
            $window.scroll(function() {
                if ( $window.scrollTop() >= secondpage ) {
                		//alert("hi");
                        $("div.categories").css("background-color", "rgba(239, 239, 239, 0.95)");
                  }
                  if ( $window.scrollTop() >= mbcategory ) {
                		//alert("hi");
                        $("div.mb-categories").css("background-color", "rgba(239, 239, 239, 0.95)");
                  }
                  else{
                  	$("div.categories").css("background", "none");
                  	$("div.mb-categories").css("background", "none");
                  } 
            });
			
	    });
	    </script>
		<script>
		$(document).ready(function() {
		    $("body").flowUp(".menus-item", { transalteY: 350, duration: 2 });
 		if($(window).width() < 768 ){
			/*$(window).on("load",function() {

			   function fade() {
			        $('.menus-item').each(function() {
			            //var objectBottom = $(this).offset().top + $(this).outerHeight();
			            var objectBottom = $(this).offset().top + $(this).outerHeight();
			            var windowBottom = $(window).scrollTop() + $(window).innerHeight();
			            //If the object is completely visible in the window, fade it in 
			            if (objectBottom < windowBottom) { //object comes into view (scrolling down)
			                if ($(this).css('opacity')==0) {$(this).fadeTo(900,1);}
			            } else { //object goes out of view (scrolling up)
			                if ($(this).css('opacity')==1) {$(this).fadeTo(600,0);}
			            }
			        });
			    }
			    fade(); //Fade in completely visible elements during page-load
			    $(window).scroll(function() {fade();}); //Fade in elements during scroll
			});*/
			/*******/////// START for mb-category stay at top when scroll /////// ***********/
			var sticky_navigation_offset_top = $('div.mb-categories').offset().top;
				
				// our function that decides weather the navigation bar should have "fixed" css position or not.
				var sticky_navigation = function(){
					var scroll_top = $(window).scrollTop(); // our current vertical position from the top
					
					// if we've scrolled more than the navigation, change its position to fixed to stick to top, otherwise change it back to relative
					if (scroll_top > sticky_navigation_offset_top) { 
						$('div.mb-categories').css({ 'position': 'fixed', 'top':0, 'display':'block', 'width':'100%', 'z-index':999 });
					} else {
						$('div.mb-categories').css({ 'position': 'relative'}); 
					}   
				};
				// run our function on load
				sticky_navigation();
				
				// and run it again every time you scroll
				$(window).scroll(function() {
					 sticky_navigation();
				});
				// NOT required:
				// for this demo disable all links that point to "#"
				$('a[href="#"]').click(function(event){ 
					event.preventDefault(); 
				});
				/******* ///////// END /////////// ******/
			}
		});
		</script>

	<style>
	    .overflow {
	      height: 200px;
	    }
	    /*div.menu ul li a
		{
		color:#1c4e31 !important;
		}*/
	</style>
	</head>
	<body>
		<div class="page">
			<!--- mobile menu -->
				<?php include('mb_menu.php') ?>
			<!--- mobile menu end -->
			<div class="menus-bg">
				<div class="container-fluid main-menu">
					<!-- ///// Menu //// -->
						<?php include('main_menu.php') ?>
						<input type='hidden' name='hid' value='3' id='hidd'>
					<!-- //// Menu End //// -->
				</div>  <!-- end main-menu -->

				<div class="container our-menu-title">
					<div class="row">
						<div class="col-md-7">
							<h2> OUR MENU </h2> <p >Some items are only available in selected locations.</p>
						</div>
						<div class="col-md-5">
							<p class="tip"> Tip: You can filter your search by menu category below.</p>
						</div>
					</div>
				</div>
				<!--  //// mb menus categories ///// -->
				<div class="mb-categories">
					<div id="dd" class="wrapper-dropdown-3">
           			 	<span class="selection">New </span> <a class="pull-right menu-down-shape"> </a><a class="pull-right menu-up-shape"> </a>
			            <ul class="dropdown">
			              <li><a href="#" id="mb-all-cat">All Items</a></li> 
			              <li><a href="#" id="mb-new-cat">New</a></li>
			              <li><a href="#" id="mb-special-cat">YKKO Specials</a></li>
			              <li><a href="#" id="mb-kyayoh-cat">Kyay-Oh & Sichet</a></li>
			              <li><a href="#" id="mb-grills-cat">Grills</a></li>
			              <li><a href="#" id="mb-chinese-cat">Chinese Cuisine</a></li>
			              <li><a href="#" id="mb-thai-cat">Thai Cuisine</a></li>
			              <li><a href="#" id="mb-juice-drink-cat">Fresh Juice</a></li>
			              <li><a href="#" id="mb-desert-cat">Coffee & Dessert</a></li>
			            </ul>
    				</div>
				</div> <!-- //// mb-categories end //// -->
   		
				<div class="categories">
					<div class="container main-sub-categories">
						<div class="row">
							<div class="col-md-12">
								<table width="100%">
									<tr>
										<td><a href="#" id="all-cat" class="active"> All Items</a></td> 
										<td><a href="#" id="new-cat"> &nbspNew&nbsp</a></td>
										<td><a href="#" id="special-cat"> YKKO Specials</a></td>
										<td><a href="#" id="kyayoh-cat"> Kyay-Oh & Sichet</a></td>
										<td><a href="#" id="grills-cat"> &nbspGrills&nbsp</a></td>
										<td><a href="#" id="chinese-cat"> Chinese Cuisine</a></td>
										<td><a href="#" id="thai-cat"> Thai Cuisine</a></td>
										<td><a href="#" id="juice-drink-cat"> Fresh Juice</a></td>
										<td><a href="#" id="desert-cat"> Coffee & Dessert</a></td>
									</tr>
								</table>
								<div class="ipad-subcategores">
										<div><a href="#" id="ip-all-cat" class="active"> All Items</a></div> 
										<div><a href="#" id="ip-new-cat"> New</a></div>
										<div><a href="#" id="ip-special-cat"> YKKO Specials</a></div>
										<div><a href="#" id="ip-kyayoh-cat"> Kyay-Oh & Sichet</a></div>
										<div><a href="#" id="ip-grills-cat"> Grills</a></div>
										<div><a href="#" id="ip-chinese-cat"> Chinese Cuisine</a></div>
										<div><a href="#" id="ip-thai-cat"> Thai Cuisine</a></div>
										<div><a href="#" id="ip-juice-drink-cat" style="width:110% !important;"> Fresh Juice</a></div>
										<div style="margin-left:2%;"><a href="#" id="ip-desert-cat"> Coffee & Dessert</a></div>
										<div class="clear"> </div>
								</div> <!-- ip-subcategories -->
							</div>
						</div>
					</div>
				</div>

			</div>
			<!-- //////////////////  ALL Items//////////////////// -->
			<div class="menu-container container" id="allitems">
				
				<div class="row menus-item-row">
					<div class="col-sm-6 col-md-3 menus-item">
					 	<p class="text-center alert-food"><span> YKKO Specials</span></p>
						<img src="images/menus/KyayOh-Sichet/Pork Rib Kyay-Oh.png" data-at2x="images/menus/KyayOh-Sichet/retina/Pork Rib Kyay-Oh@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Pork Rib Kyay-Oh</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food"><span> New</span></p>
						<img src="images/menus/KyayOh-Sichet/Chicken Kyay-Oh.png" data-at2x="images/menus/KyayOh-Sichet/retina/Chicken Kyay-Oh@2x.png" class="img-responsive ykko">
						<div class="food-des">
							<h3> Chicken Kyay-Oh</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food"><span> New</span></p>
						<img src="images/menus/KyayOh-Sichet/Seafood-Kyay-Oh.png" data-at2x="images/menus/KyayOh-Sichet/retina/Seafood-Kyay-Oh@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Seafood Kyay-Oh</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food"><span> New</span></p>
						<img src="images/menus/KyayOh-Sichet/Prawn-Kyay-Oh.png" data-at2x="images/menus/KyayOh-Sichet/retina/Prawn-Kyay-Oh@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Prawn Kyay-Oh</h3>
						</div>
					</div>
					
				</div>

				<div class="row menus-item-row">
					 <div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food"><span> YKKO Specials</span></p>
						<img src="images/menus/KyayOh-Sichet/Home Made Kyay-Oh.png" data-at2x="images/menus/KyayOh-Sichet/retina/Home Made Kyay-Oh@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Home Made Kyay-Oh</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food"><span> YKKO Specials</span></p>
						<img src="images/menus/KyayOh-Sichet/Fish Ball Kyay-Oh.png" data-at2x="images/menus/KyayOh-Sichet/retina/Fish Ball Kyay-Oh@2x.png" class="img-responsive ykko">
						<div class="food-des">
							<h3> Fish Ball Kyay-Oh</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food" style="visibility:hidden;"><span> New</span></p>
						<img src="images/menus/KyayOh-Sichet/Pork Kyay-Oh.png" data-at2x="images/menus/KyayOh-Sichet/retina/Pork Kyay-Oh@2x.png" class="img-responsive ykko">
						<div class="food-des">
							<h3> Pork Kyay-Oh</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food" style="visibility:hidden;"><span> New</span></p>
						<img src="images/menus/KyayOh-Sichet/Chicken Kyay-Oh Sichet.png" data-at2x="images/menus/KyayOh-Sichet/retina/Chicken Kyay-Oh Sichet@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Chicken Kyay-Oh Sichet</h3>
						</div>
					</div>
				</div> 
				
				<div class="row menus-item-row">
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food" style="visibility:hidden;"><span> New</span></p>
						<img src="images/menus/KyayOh-Sichet/KyayOh-Sichet/Fish Ball Kyay-Oh Sichet.png" data-at2x="images/menus/KyayOh-Sichet/KyayOh-Sichet/retina/Fish Ball Kyay-Oh Sichet@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Fish Ball Kyay-Oh Sichet</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food" style="visibility:hidden;"><span> New</span></p>
						<img src="images/menus/KyayOh-Sichet/KyayOh-Sichet/Pork Kyay-Oh Sichet.png" data-at2x="images/menus/KyayOh-Sichet/KyayOh-Sichet/retina/Pork Kyay-Oh Sichet@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Pork Kyay-Oh Sichet</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food" style="visibility:hidden;"><span> New</span></p>
						<img src="images/menus/KyayOh-Sichet/KyayOh-Sichet/Pork Rib Kyay-Oh Sichet.png" data-at2x="images/menus/KyayOh-Sichet/KyayOh-Sichet/retina/Pork Rib Kyay-Oh Sichet@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Pork Rib Kyay-Oh Sichet</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food"><span> New</span></p>
						<img src="images/menus/KyayOh-Sichet/KyayOh-Sichet/Seafood Kyay-Oh Sichet.png" data-at2x="images/menus/KyayOh-Sichet/KyayOh-Sichet/retina/Seafood Kyay-Oh Sichet@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Seafood Kyay-Oh Sichet</h3>
						</div>
					</div>
				</div> 

				<div class="row menus-item-row">
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food" style="visibility:hidden;"><span> New</span></p>
						<img src="images/menus/KyayOh-Sichet/Sichet/Sichet (Noodle).png" data-at2x="images/menus/KyayOh-Sichet/Sichet/retina/Sichet (Noodle)@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Sichet (Noodle)</h3>
						</div>
					</div>
					
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food" style="visibility:hidden;"><span> New</span></p>
						<img src="images/menus/KyayOh-Sichet/Sichet/Steamed Chicken Sichet.png" data-at2x="images/menus/KyayOh-Sichet/Sichet/retina/Steamed Chicken Sichet@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Steamed Chicken Sichet</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
					 	<p class="text-center alert-food" style="visibility:hidden;"><span> New</span></p>
						<img src="images/menus/KyayOh-Sichet/Sichet/Steamed Pork Rib Sichet.png" data-at2x="images/menus/KyayOh-Sichet/Sichet/retina/Steamed Pork Rib Sichet@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Steamed Pork Rib Sichet</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food" style="visibility:hidden;"><span> New</span></p>
						<img src="images/menus/KyayOh-Sichet/Sichet/Wanton Sichet.png" data-at2x="images/menus/KyayOh-Sichet/Sichet/retina/Wanton Sichet@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Wanton Sichet</h3>
						</div>
					</div>
				</div> 

				<div class="row menus-item-row">
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food"><span> New</span></p>
						<img src="images/menus/Chinese-Cuisine/Rice-Congee.png" data-at2x="images/menus/Chinese-Cuisine/retina/Rice-Congee@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Rice Congee</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food"><span> YKKO Specials</span></p>
						<img src="images/menus/Chinese-Cuisine/3 in 1 Soup.png" data-at2x="images/menus/Chinese-Cuisine/retina/3 in 1 Soup@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> 3 in 1 Soup</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food" style="visibility:hidden;"><span> New</span></p>
						<img src="images/menus/Thai-Cuisine/Chicken Feet Hot & Sour Soup.png" data-at2x="images/menus/Thai-Cuisine/retina/Chicken Feet Hot & Sour Soup@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Chicken Feet Hot & Sour Soup </h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food" style="visibility:hidden;"><span> New</span></p>
						<img src="images/menus/Grill/Grill Chicken Sausage.png" data-at2x="images/menus/Grill/retina/Grill Chicken Sausage@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Grilled Chicken Sausage</h3>
						</div>
					</div>
				</div> 
				<!-- * Thai * -->
				<div class="row menus-item-row">
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Grill/Grill Fish.png" data-at2x="images/menus/Grill/retina/Grill Fish@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Grilled Fish</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Grill/Grill Pork Ball.png" data-at2x="images/menus/Grill/retina/Grill Pork Ball@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Grilled Pork Ball</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Grill/Grill Chicken.png" data-at2x="images/menus/Grill/retina/Grill Chicken@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Grilled Chicken</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Grill/Grill Prawn.png" data-at2x="images/menus/Grill/retina/Grill Prawn@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Grilled Prawn</h3>
						</div>
					</div>
				</div>
				
				<div class="row menus-item-row">
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Grill/Grill fish ball.png" data-at2x="images/menus/Grill/retina/Grill fish ball@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Grilled Fish Ball</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Grill/Grill Pork.png" data-at2x="images/menus/Grill/retina/Grill Pork@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Grilled Chicken Wing</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Grill/Grill Pork Sausage.png" data-at2x="images/menus/Grill/retina/Grill Pork Sausage@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Grilled Pork Sausage</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Grill/Grilled-Mutton.png" data-at2x="images/menus/Grill/retina/Grilled-Mutton@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Grilled Mutton</h3>
						</div>
					</div>
				</div>
				
				<div class="row menus-item-row">
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food"><span> YKKO Specials</span></p>
						<img src="images/menus/Grill/Chicken Sartay.png" data-at2x="images/menus/Grill/retina/Chicken Sartay@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Chicken Sartay</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food" style="visibility:hidden;"><span> New</span></p>
						<img src="images/menus/Grill/Grill Garlic.png" data-at2x="images/menus/Grill/retina/Grill Garlic@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Grilled Garlic</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food" style="visibility:hidden;"><span> New</span></p>
						<img src="images/menus/Grill/Grill Corn.png" data-at2x="images/menus/Grill/retina/Grill Corn@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Grilled Corn</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food" style="visibility:hidden;"><span> New</span></p>
						<img src="images/menus/Grill/Grill Mushroom.png" data-at2x="images/menus/Grill/retina/Grill Mushroom@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Grilled Mushroom</h3>
						</div>
					</div>
					
				</div>
				<div class="row menus-item-row">
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Grill/Grill Potato.png" data-at2x="images/menus/Grill/retina/Grill Potato@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Grilled Potato</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Grill/Lady Finger.png" data-at2x="images/menus/Grill/retina/Lady Finger@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Grilled Lady Finger</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Grill/Fried-Potato.png" data-at2x="images/menus/Grill/retina/Fried-Potato@2x.png" class="img-responsive ykko">
						<div class="food-des">
							<h3> Fried Potato</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Grill/Fried-Wanton.png" data-at2x="images/menus/Grill/retina/Fried-Wanton@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Fried Wanton Stuff with Chicken</h3>
						</div>
					</div>
				</div>
				<div class="row menus-item-row">
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food"><span> YKKO Specials</span></p>
						<img src="images/menus/Grill/Barbecue-pork.png" data-at2x="images/menus/Grill/retina/Barbecue-pork@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Pork Barbecue</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food"><span> YKKO Specials</span></p>
						<img src="images/menus/Grill/Barbecue-mutton.png" data-at2x="images/menus/Grill/retina/Barbecue-mutton@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Mutton Barbecue</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food"><span> YKKO Specials</span></p>
						<img src="images/menus/Grill/Barbecue-chicken.png" data-at2x="images/menus/Grill/retina/Barbecue-chicken@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Chicken Barbecue</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food" style="visibility:hidden;"><span> New</span></p>
						<img src="images/menus/Chinese-Cuisine/Crispy Fish Finger.png" data-at2x="images/menus/Chinese-Cuisine/retina/Crispy Fish Finger@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Crispy Fish Finger</h3>
						</div>
					</div>
				</div>
				<div class="row menus-item-row">
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Chinese-Cuisine/Deep Fried Chicken with Cashew Nut.png" data-at2x="images/menus/Chinese-Cuisine/retina/Deep Fried Chicken with Cashew Nut@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Deep Fried Chicken Ball</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Chinese-Cuisine/Hot & Crispy Carp’s Fin.png" data-at2x="images/menus/Chinese-Cuisine/retina/Hot & Crispy Carp’s Fin@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Hot & Crispy Marigal’s Fin</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Thai-Cuisine/Roasted Pork Neck.png" data-at2x="images/menus/Thai-Cuisine/retina/Roasted Pork Neck@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Roasted Pork Neck </h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Chinese-Cuisine/Chicken-Salad.png" data-at2x="images/menus/Chinese-Cuisine/retina/Chicken-Salad@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Chicken Salad</h3>
						</div>
					</div>
				</div>
				<div class="row menus-item-row">
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Chinese-Cuisine/Prawns-Salad.png" data-at2x="images/menus/Chinese-Cuisine/retina/Prawns-Salad@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Prawns Salad</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Chinese-Cuisine/Sauteed-Fish-Vegetable.png" data-at2x="images/menus/Chinese-Cuisine/retina/Sauteed-Fish-Vegetable@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Sautéed Fish with Vegetable and Dry Paprikae</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Chinese-Cuisine/Honey-Chicken-Wings.png" data-at2x="images/menus/Chinese-Cuisine/retina/Honey-Chicken-Wings@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Honey Chicken Wings</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Chinese-Cuisine/Sauteed-Pork-with-Tofu.png" data-at2x="images/menus/Chinese-Cuisine/retina/Sauteed-Pork-with-Tofu@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Sautéed Pork with Tofu & Capsicum</h3>
						</div>
					</div>
				</div>
				<div class="row menus-item-row">
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Thai-Cuisine/Crispy Chili Eel.png" data-at2x="images/menus/Thai-Cuisine/retina/Crispy Chili Eel@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Crispy Chilli Eel</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Chinese-Cuisine/Century-Egg-Salad.png" data-at2x="images/menus/Chinese-Cuisine/retina/Century-Egg-Salad@2x.png" class="img-responsive ykko">
						<div class="food-des">
							<h3> Century Egg Salad</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Chinese-Cuisine/Sweet-n-Sour-Pork.png" data-at2x="images/menus/Chinese-Cuisine/retina/Sweet-n-Sour-Pork@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Sweet & Sour Pork</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Chinese-Cuisine/Sauteed-Mixed-Vegetable.png" data-at2x="images/menus/Chinese-Cuisine/retina/Sauteed-Mixed-Vegetable@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Sautéed Mixed Vegetable</h3>
						</div>
					</div>
				</div>
				<div class="row menus-item-row">
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Chinese-Cuisine/Stir-Fried Assorted Meats & Vegetables.png" data-at2x="images/menus/Chinese-Cuisine/retina/Stir-Fried Assorted Meats & Vegetables@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Stir-Fried Assorted Meats & Vegetables</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<!-- <p class="text-center alert-food"><span> New</span></p> -->
						<img src="images/menus/Chinese-Cuisine/Sauteed-Mushroom.png" data-at2x="images/menus/Chinese-Cuisine/retina/Sauteed-Mushroom@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Sauteed Mushroom</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Chinese-Cuisine/Steamed Rice with Vegetable.png" data-at2x="images/menus/Chinese-Cuisine/retina/Steamed Rice with Vegetable@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Steamed Rice with Vegetable</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Thai-Cuisine/Hot & Sour Eel.png" data-at2x="images/menus/Thai-Cuisine/retina/Hot & Sour Eel@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Hot & Sour Eel</h3>
						</div>
					</div>
				</div>
				<div class="row menus-item-row">
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food" style="visibility:hidden;"><span> New</span></p>
						<img src="images/menus/Chinese-Cuisine/Sauteed Prawn with Chestnuts.png" data-at2x="images/menus/Chinese-Cuisine/retina/Sauteed Prawn with Chestnuts@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Sautéed Prawn with Chestnuts</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food" style="visibility:hidden;"><span> New</span></p>
						<img src="images/menus/Thai-Cuisine/Hot & Sour Fish.png" data-at2x="images/menus/Thai-Cuisine/retina/Hot & Sour Fish@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Hot & Sour Fish</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food" style="visibility:hidden;"><span> New</span></p>
						<img src="images/menus/Thai-Cuisine/Sauteed Chicken with Basil.png" data-at2x="images/menus/Thai-Cuisine/retina/Sauteed Chicken with Basil@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Sautéed Chicken with Basil</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food"><span> New</span></p>
						<img src="images/menus/Thai-Cuisine/Spicy's-Lady-Finger.png" data-at2x="images/menus/Thai-Cuisine/retina/Spicy's-Lady-Finger@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Spicy Lady’s Finger</h3>
						</div>
					</div>
				</div>
				<div class="row menus-item-row">
					
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Thai-Cuisine/Sauteed-Pork-Chestnuts.png" data-at2x="images/menus/Thai-Cuisine/retina/Sauteed-Pork-Chestnuts@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Sautéed Pork with Chestnuts</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Thai-Cuisine/Malay-Style-Fried-Noodle.png" data-at2x="images/menus/Thai-Cuisine/retina/Malay-Style-Fried-Noodle@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Malay Style Fried Noodle</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Thai-Cuisine/ံHot-Sour-Soft-shell-Crab.png" data-at2x="images/menus/Thai-Cuisine/retina/ံHot-Sour-Soft-shell-Crab@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Hot & Sour Softshell Crab</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Thai-Cuisine/Thai-Vegetable-Soup.png" data-at2x="images/menus/Thai-Cuisine/retina/Thai-Vegetable-Soup@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Thai Style Vegetable Soup</h3> 
						</div>
					</div>
				</div>
				<div class="row menus-item-row">
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Thai-Cuisine/Tom-Yam-Soup.png" data-at2x="images/menus/Thai-Cuisine/retina/Tom-Yam-Soup@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Tom Yam Soup</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<!-- <p class="text-center alert-food"><span> YKKO Specials</span></p> -->
						<img src="images/menus/Desert/Ice-K-Chang.png" data-at2x="images/menus/Desert/retina/Ice-K-Chang@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Ice-K Chang</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<!-- <p class="text-center alert-food"><span> Ykko Specials</span></p> -->
						<img src="images/menus/Desert/The Lovers Ice Cream.png" data-at2x="images/menus/Desert/retina/The Lovers Ice Cream@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> The Lovers Ice Cream</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Desert/Espresso.png" data-at2x="images/menus/Desert/retina/Espresso@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Espresso</h3>
						</div>
					</div>
				</div>
				<div class="row menus-item-row">
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Desert/Cafe-Americano.png" data-at2x="images/menus/Desert/retina/Cafe-Americano@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Café Americano</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Desert/Chocolate Milk Shake.png" data-at2x="images/menus/Desert/retina/Chocolate Milk Shake@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Chocolate Milk Shake</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Desert/Irish Coffee.png" data-at2x="images/menus/Desert/retina/Irish Coffee@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Irish Coffee</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Desert/Iced Vanilla Coffee.png" data-at2x="images/menus/Desert/retina/Iced Vanilla Coffee@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Iced Vanilla Coffee</h3>
						</div>
					</div>
				</div>
				<div class="row menus-item-row">
					<div class="col-sm-6 col-md-3 menus-item">
						<!-- <p class="text-center alert-food"><span> YKKO Specials</span></p> -->
						<img src="images/menus/Desert/Apple-Burter-Cake.png" data-at2x="images/menus/Desert/retina/Apple-Burter-Cake@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Caramel Mousse Cake</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Desert/Flam-Parisian.png" data-at2x="images/menus/Desert/retina/Flam-Parisian@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Flam Parisian</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Desert/Pudding.png" data-at2x="images/menus/Desert/retina/Pudding@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Cream Caramel</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Desert/Sacher Cake.png" data-at2x="images/menus/Desert/retina/Sacher Cake@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Sacher Cake</h3>
						</div>
					</div>
				</div>
				<div class="row menus-item-row">
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Desert/Opera Cake.png" data-at2x="images/menus/Desert/retina/Opera Cake@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Opera Cake</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Desert/Brownie Cake.png" data-at2x="images/menus/Desert/retina/Brownie Cake@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Brownie Cake</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Desert/Chocolate-Cream-Slice Cake.png" data-at2x="images/menus/Desert/retina/Chocolate-Cream-Slice Cake@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Chocolate Cream Slice</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Desert/Cointreau.png" data-at2x="images/menus/Desert/retina/Cointreau@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Chocolate Dream</h3>
						</div>
					</div>
				</div>

				<div class="row menus-item-row">
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Fresh-Fruit-Juice/Apple.png" data-at2x="images/menus/Fresh-Fruit-Juice/retina/Apple@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Apple Juice</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Fresh-Fruit-Juice/Avocado.png" data-at2x="images/menus/Fresh-Fruit-Juice/retina/Avocado@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Avocado Juice</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Fresh-Fruit-Juice/Mixed Berry Smoothies.png" data-at2x="images/menus/Fresh-Fruit-Juice/retina/Mixed Berry Smoothies@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Strawberry Smoothies Juice</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Fresh-Fruit-Juice/Suger cane.png" data-at2x="images/menus/Fresh-Fruit-Juice/retina/Suger cane@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Suger cane Juice</h3>
						</div>
					</div>
				</div>

				<div class="row menus-item-row">
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Fresh-Fruit-Juice/Back Jelly.png" data-at2x="images/menus/Fresh-Fruit-Juice/retina/Back Jelly@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Back Jelly Juice</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Fresh-Fruit-Juice/Sunkist.png" data-at2x="images/menus/Fresh-Fruit-Juice/retina/Sunkist@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Sunkist Juice</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Fresh-Fruit-Juice/Soda-Kiwi.png" data-at2x="images/menus/Fresh-Fruit-Juice/retina/Soda-Kiwi@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Soda Kiwi Juice</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Fresh-Fruit-Juice/Soda Blueberry.png" data-at2x="images/menus/Fresh-Fruit-Juice/retina/Soda Blueberry@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Soda Blueberry Juice</h3>
						</div>
					</div>
				</div> 
				<div class="row menus-item-row">
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Fresh-Fruit-Juice/Fruit Cocktail.png" data-at2x="images/menus/Fresh-Fruit-Juice/retina/Fruit Cocktail@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Fruit Cocktail Juice</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Fresh-Fruit-Juice/Pineapple.png" data-at2x="images/menus/Fresh-Fruit-Juice/retina/Pineapple@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Pineapple Juice</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Fresh-Fruit-Juice/Prune.png" data-at2x="images/menus/Fresh-Fruit-Juice/retina/Prune@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Prune Juice</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Fresh-Fruit-Juice/Lime.png" data-at2x="images/menus/Fresh-Fruit-Juice/retina/Lime@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Lime Juice</h3>
						</div>
					</div>
				</div>
				<div class="row menus-item-row">
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Fresh-Fruit-Juice/Orange.png" data-at2x="images/menus/Fresh-Fruit-Juice/retina/Orange@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Orange Juice</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Fresh-Fruit-Juice/Strawberry Juce.png" data-at2x="images/menus/Fresh-Fruit-Juice/retina/Strawberry Juce@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Strawberry Juice</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Fresh-Fruit-Juice/Sweet lime.png" data-at2x="images/menus/Fresh-Fruit-Juice/retina/Sweet line@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Sweet lime Juice</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Fresh-Fruit-Juice/Tamarind.png" data-at2x="images/menus/Fresh-Fruit-Juice/retina/Tamarind@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Tamarind Juice</h3>
						</div>
					</div>
				</div> 
				<div class="row menus-item-row">
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Fresh-Fruit-Juice/Watermelon.png" data-at2x="images/menus/Fresh-Fruit-Juice/retina/Watermelon@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Watermelon Juice</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Fresh-Fruit-Juice/Papaya.png" data-at2x="images/menus/Fresh-Fruit-Juice/retina/Papaya@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Papaya Juice</h3>
						</div>
					</div>
					
				</div>

			</div> 
    		<!-- //////////////////    NEWS    ///////////////// -->
    		<div class="menu-container container" id="new">
				<div class="row menus-item-row">
					<div class="col-sm-6 col-md-3 menus-item">
						<!-- <p class="text-center alert-food"><span> New</span></p> -->
						<img src="images/menus/KyayOh-Sichet/Prawn-Kyay-Oh.png" data-at2x="images/menus/KyayOh-Sichet/retina/Prawn-Kyay-Oh@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Prawn Kyay-Oh</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<!-- <p class="text-center alert-food"><span> New</span></p> -->
						<img src="images/menus/KyayOh-Sichet/Seafood-Kyay-Oh.png" data-at2x="images/menus/KyayOh-Sichet/retina/Seafood-Kyay-Oh@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Seafood Kyay-Oh</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<!-- <p class="text-center alert-food"><span> New</span></p> -->
						<img src="images/menus/KyayOh-Sichet/KyayOh-Sichet/Seafood Kyay-Oh Sichet.png" data-at2x="images/menus/KyayOh-Sichet/KyayOh-Sichet/retina/Seafood Kyay-Oh Sichet@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Seafood Kyay-Oh Sichet</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<!-- <p class="text-center alert-food"><span> New</span></p> -->
						<img src="images/menus/Chinese-Cuisine/Sauteed-Mushroom.png" data-at2x="images/menus/Chinese-Cuisine/retina/Sauteed-Mushroom@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Sauteed Mushroom</h3>
						</div>
					</div>
				</div>

				<div class="row menus-item-row">
					<div class="col-sm-6 col-md-3 menus-item">
						<!-- <p class="text-center alert-food"><span> New</span></p> -->
						<img src="images/menus/Chinese-Cuisine/Rice-Congee.png" data-at2x="images/menus/Chinese-Cuisine/retina/Rice-Congee@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Rice Congee</h3>
						</div>
					</div>
				</div>
				
			</div> 
    <!-- /////////////    YKKO specials    ///////////// -->
    		<div class="menu-container container" id="ykko-special">
				<div class="row menus-item-row">
					<div class="col-sm-6 col-md-3 menus-item">
						<!-- <p class="text-center alert-food"><span> YKKO Specials</span></p> -->
						<img src="images/menus/Grill/Chicken Sartay.png" data-at2x="images/menus/Grill/retina/Chicken Sartay@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Chicken Sartay</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Grill/Barbecue-pork.png" data-at2x="images/menus/Grill/retina/Barbecue-pork@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Pork Barbecue</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Grill/Barbecue-mutton.png" data-at2x="images/menus/Grill/retina/Barbecue-mutton@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Mutton Barbecue</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Grill/Barbecue-chicken.png" data-at2x="images/menus/Grill/retina/Barbecue-chicken@2x.png" class="img-responsive ykko">
						<div class="food-des">
							<h3> Chicken Barbecue</h3>
						</div>
					</div>
				</div>

				<div class="row menus-item-row">
					<div class="col-sm-6 col-md-3 menus-item">
						<!-- <p class="text-center alert-food"><span> YKKO Specials</span></p> -->
						<img src="images/menus/KyayOh-Sichet/Home Made Kyay-Oh.png" data-at2x="images/menus/KyayOh-Sichet/retina/Home Made Kyay-Oh@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Home Made Kyay-Oh</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<!-- <p class="text-center alert-food"><span> YKKO Specials</span></p> -->
						<img src="images/menus/KyayOh-Sichet/Pork Rib Kyay-Oh.png" data-at2x="images/menus/KyayOh-Sichet/retina/Pork Rib Kyay-Oh@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Pork Rib Kyay-Oh</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<!-- <p class="text-center alert-food"><span> YKKO Specials</span></p> -->
						<img src="images/menus/Chinese-Cuisine/3 in 1 Soup.png" data-at2x="images/menus/Chinese-Cuisine/retina/3 in 1 Soup@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> 3 in 1 Soup</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<!-- <p class="text-center alert-food"><span> YKKOYKKO Specials</span></p> -->
						<img src="images/menus/Desert/Ice-K-Chang.png" data-at2x="images/menus/Desert/retina/Ice-K-Chang@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Ice-K Chang</h3>
						</div>
					</div>
				</div> 
				<div class="row menus-item-row">
					<div class="col-sm-6 col-md-3 menus-item">
						<!-- <p class="text-center alert-food"><span> YKKO Specials</span></p> -->
						<img src="images/menus/Desert/The Lovers Ice Cream.png" data-at2x="images/menus/Desert/retina/The Lovers Ice Cream@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> The Lovers Ice Cream</h3>
						</div>
					</div>
				</div>
				
			</div> 
    <!-- /////////////    Kyay-Oh & Sichet    ///////////// -->
    		<div class="menu-container container" id="kyayoh-sichet">
				<div class="row menus-item-row">
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/KyayOh-Sichet/Chicken Kyay-Oh Sichet.png" data-at2x="images/menus/KyayOh-Sichet/retina/Chicken Kyay-Oh Sichet@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Chicken Kyay-Oh Sichet</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/KyayOh-Sichet/Chicken Kyay-Oh.png" data-at2x="images/menus/KyayOh-Sichet/retina/Chicken Kyay-Oh@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Chicken Kyay-Oh</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/KyayOh-Sichet/Pork Kyay-Oh.png" data-at2x="images/menus/KyayOh-Sichet/retina/Pork Kyay-Oh@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Pork Kyay-Oh</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/KyayOh-Sichet/Fish Ball Kyay-Oh.png" data-at2x="images/menus/KyayOh-Sichet/retina/Fish Ball Kyay-Oh@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Fish Ball Kyay-Oh</h3>
						</div>
					</div>
				</div>

				<div class="row menus-item-row">
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food"><span> YKKO Specials</span></p>
						<img src="images/menus/KyayOh-Sichet/Home Made Kyay-Oh.png" data-at2x="images/menus/KyayOh-Sichet/retina/Home Made Kyay-Oh@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Home Made Kyay-Oh</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food"><span> New</span></p>
						<img src="images/menus/KyayOh-Sichet/Prawn-Kyay-Oh.png" data-at2x="images/menus/KyayOh-Sichet/retina/Prawn-Kyay-Oh@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Prawn Kyay-Oh</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food"><span> New</span></p>
						<img src="images/menus/KyayOh-Sichet/Seafood-Kyay-Oh.png" data-at2x="images/menus/KyayOh-Sichet/retina/Seafood-Kyay-Oh@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Seafood Kyay-Oh</h3>
						</div>
					</div>
					 <div class="col-sm-6 col-md-3 menus-item">
					 	<p class="text-center alert-food"><span> YKKO Specials</span></p>
						<img src="images/menus/KyayOh-Sichet/Pork Rib Kyay-Oh.png" data-at2x="images/menus/KyayOh-Sichet/retina/Pork Rib Kyay-Oh@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Pork Rib Kyay-Oh</h3>
						</div>
					</div>
				</div> 

				<div class="row menus-item-row">
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food" style="visibility:hidden;"><span> New</span></p>
						<img src="images/menus/KyayOh-Sichet/Sichet/Sichet (Noodle).png" data-at2x="images/menus/KyayOh-Sichet/Sichet/retina/Sichet (Noodle)@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Sichet (Noodle)</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food" style="visibility:hidden;"><span> New</span></p>
						<img src="images/menus/KyayOh-Sichet/Sichet/Steamed Chicken Sichet.png" data-at2x="images/menus/KyayOh-Sichet/Sichet/retina/Steamed Chicken Sichet@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Steamed Chicken Sichet</h3>
						</div>
					</div>
					 <div class="col-sm-6 col-md-3 menus-item">
					 	<p class="text-center alert-food" style="visibility:hidden;"><span> New</span></p>
						<img src="images/menus/KyayOh-Sichet/Sichet/Steamed Pork Rib Sichet.png" data-at2x="images/menus/KyayOh-Sichet/Sichet/retina/Steamed Pork Rib Sichet@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Steamed Pork Rib Sichet</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food" style="visibility:hidden;"><span> New</span></p>
						<img src="images/menus/KyayOh-Sichet/Sichet/Wanton Sichet.png" data-at2x="images/menus/KyayOh-Sichet/Sichet/retina/Wanton Sichet@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Wanton Sichet</h3>
						</div>
					</div>
				</div> 

				<div class="row menus-item-row">
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food" style="visibility:hidden;"><span></span></p>
						<img src="images/menus/KyayOh-Sichet/KyayOh-Sichet/Fish Ball Kyay-Oh Sichet.png" data-at2x="images/menus/KyayOh-Sichet/KyayOh-Sichet/retina/Fish Ball Kyay-Oh Sichet@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Fish Ball Kyay-Oh Sichet</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food" style="visibility:hidden;"><span></span></p>
						<img src="images/menus/KyayOh-Sichet/KyayOh-Sichet/Pork Kyay-Oh Sichet.png" data-at2x="images/menus/KyayOh-Sichet/KyayOh-Sichet/retina/Pork Kyay-Oh Sichet@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Pork Kyay-Oh Sichet</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food" style="visibility:hidden;"><span></span></p>
						<img src="images/menus/KyayOh-Sichet/KyayOh-Sichet/Pork Rib Kyay-Oh Sichet.png" data-at2x="images/menus/KyayOh-Sichet/KyayOh-Sichet/retina/Pork Rib Kyay-Oh Sichet@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Pork Rib Kyay-Oh Sichet</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food"><span> New</span></p>
						<img src="images/menus/KyayOh-Sichet/KyayOh-Sichet/Seafood Kyay-Oh Sichet.png" data-at2x="images/menus/KyayOh-Sichet/KyayOh-Sichet/retina/Seafood Kyay-Oh Sichet@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Seafood Kyay-Oh Sichet</h3>
						</div>
					</div>
				</div> 

				<div class="row menus-item-row">
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food" style="visibility:hidden;"><span> New</span></p>
						<img src="images/menus/KyayOh-Sichet/KyayOh-Sichet/Prawn Kyay-Oh Sichet.png" data-at2x="images/menus/KyayOh-Sichet/KyayOh-Sichet/retina/Prawn Kyay-Oh Sichet@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Prawn Kyay-Oh Sichet</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food"><span> YKKO Specials</span></p>
						<img src="images/menus/Chinese-Cuisine/3 in 1 Soup.png" data-at2x="images/menus/Chinese-Cuisine/retina/3 in 1 Soup@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> 3 in 1 Soup</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food" style="visibility:hidden;"><span> YKKO Specials</span></p>
						<img src="images/menus/KyayOh-Sichet/Sichet/Pepper Soup.png" data-at2x="images/menus/KyayOh-Sichet/Sichet/retina/Pepper Soup@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Pepper Soup</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food" style="visibility:hidden;"><span> YKKO Specials</span></p>
						<img src="images/menus/KyayOh-Sichet/Sichet/Wanton Soup.png" data-at2x="images/menus/KyayOh-Sichet/Sichet/retina/Wanton Soup@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Wanton Soup</h3>
						</div>
					</div>
				</div> 

			</div> 
    <!-- /////////////   Chinese Cuisine   //////////////// -->
    		<div class="menu-container container" id="chinese-cuisine">
				<div class="row menus-item-row">
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Chinese-Cuisine/Century-Egg-Salad.png" data-at2x="images/menus/Chinese-Cuisine/retina/Century-Egg-Salad@2x.png" class="img-responsive ykko">
						<div class="food-des">
							<h3> Century Egg Salad</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Chinese-Cuisine/Chicken-Salad.png" data-at2x="images/menus/Chinese-Cuisine/retina/Chicken-Salad@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Chicken Salad</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Chinese-Cuisine/Crispy Fish Finger.png" data-at2x="images/menus/Chinese-Cuisine/retina/Crispy Fish Finger@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Crispy Fish Finger</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Chinese-Cuisine/Hot & Crispy Carp’s Fin.png" data-at2x="images/menus/Chinese-Cuisine/retina/Hot & Crispy Carp’s Fin@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Hot & Crispy Marigal’s Fin</h3>
						</div>
					</div>
				</div>

				<div class="row menus-item-row">
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Chinese-Cuisine/Sauteed-Mixed-Vegetable.png" data-at2x="images/menus/Chinese-Cuisine/retina/Sauteed-Mixed-Vegetable@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Sautéed Mixed Vegetable</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Chinese-Cuisine/Sauteed Prawn with Chestnuts.png" data-at2x="images/menus/Chinese-Cuisine/retina/Sauteed Prawn with Chestnuts@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Sautéed Prawn with Chestnuts</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Chinese-Cuisine/Deep Fried Chicken with Cashew Nut.png" data-at2x="images/menus/Chinese-Cuisine/retina/Deep Fried Chicken with Cashew Nut@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Deep Fried Chicken Ball</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Chinese-Cuisine/Sweet-n-Sour-Pork.png" data-at2x="images/menus/Chinese-Cuisine/retina/Sweet-n-Sour-Pork@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Sweet & Sour Pork</h3>
						</div>
					</div>
				</div>

				<div class="row menus-item-row">
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food" style="visibility:hidden;"><span> New</span></p>
						<img src="images/menus/Chinese-Cuisine/Stir-Fried Assorted Meats & Vegetables.png" data-at2x="images/menus/Chinese-Cuisine/retina/Stir-Fried Assorted Meats & Vegetables@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Stir-Fried Assorted Meats & Vegetables</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food"><span> New</span></p>
						<img src="images/menus/Chinese-Cuisine/Sauteed-Mushroom.png" data-at2x="images/menus/Chinese-Cuisine/retina/Sauteed-Mushroom@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Sauteed Mushroom</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food" style="visibility:hidden;"><span> New</span></p>
						<img src="images/menus/Chinese-Cuisine/Steamed Rice with Vegetable.png" data-at2x="images/menus/Chinese-Cuisine/retina/Steamed Rice with Vegetable@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Steamed Rice with Vegetable</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food"><span> New</span></p>
						<img src="images/menus/Chinese-Cuisine/Rice-Congee.png" data-at2x="images/menus/Chinese-Cuisine/retina/Rice-Congee@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Rice Congee</h3>
						</div>
					</div>
				</div>

				<div class="row menus-item-row">
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Chinese-Cuisine/Prawns-Salad.png" data-at2x="images/menus/Chinese-Cuisine/retina/Prawns-Salad@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Prawns Salad</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Chinese-Cuisine/Sauteed-Fish-Vegetable.png" data-at2x="images/menus/Chinese-Cuisine/retina/Sauteed-Fish-Vegetable@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Sautéed Fish with Vegetable and Dry Paprikae</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Chinese-Cuisine/Honey-Chicken-Wings.png" data-at2x="images/menus/Chinese-Cuisine/retina/Honey-Chicken-Wings@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Honey Chicken Wings</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Chinese-Cuisine/Sauteed-Pork-with-Tofu.png" data-at2x="images/menus/Chinese-Cuisine/retina/Sauteed-Pork-with-Tofu@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Sautéed Pork with Tofu & Capsicum</h3>
						</div>
					</div>
				</div>
				
			</div> 
    <!-- /////////////   Thai Cuisine  //////////////// -->
    		<div class="menu-container container" id="thai-cuisine">
				<div class="row menus-item-row">
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Thai-Cuisine/Malay-Style-Fried-Noodle.png" data-at2x="images/menus/Thai-Cuisine/retina/Malay-Style-Fried-Noodle@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Malay Style Fried Noodle</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Thai-Cuisine/Thai-Vegetable-Soup.png" data-at2x="images/menus/Thai-Cuisine/retina/Thai-Vegetable-Soup@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Thai Style Vegetable Soup</h3> 
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Thai-Cuisine/Tom-Yam-Soup.png" data-at2x="images/menus/Thai-Cuisine/retina/Tom-Yam-Soup@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Tom Yam Soup</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Thai-Cuisine/ံHot-Sour-Soft-shell-Crab.png" data-at2x="images/menus/Thai-Cuisine/retina/ံHot-Sour-Soft-shell-Crab@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Hot & Sour Softshell Crab</h3>
						</div>
					</div>
				</div>

				<div class="row menus-item-row">
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Thai-Cuisine/Roasted Pork Neck.png" data-at2x="images/menus/Thai-Cuisine/retina/Roasted Pork Neck@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Roasted Pork Neck </h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Thai-Cuisine/Sauteed-Pork-Chestnuts.png" data-at2x="images/menus/Thai-Cuisine/retina/Sauteed-Pork-Chestnuts@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Sautéed Pork with Chestnuts</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Thai-Cuisine/Hot & Sour Eel.png" data-at2x="images/menus/Thai-Cuisine/retina/Hot & Sour Eel@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Hot & Sour Eel</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Thai-Cuisine/Sauteed Chicken with Basil.png" data-at2x="images/menus/Thai-Cuisine/retina/Sauteed Chicken with Basil@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Sautéed Chicken with Basil</h3>
						</div>
					</div>
				</div>

				<div class="row menus-item-row">
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food" style="visibility:hidden;"><span> New</span></p>
						<img src="images/menus/Thai-Cuisine/Hot & Sour Fish.png" data-at2x="images/menus/Thai-Cuisine/retina/Hot & Sour Fish@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Hot & Sour Fish</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food" style="visibility:hidden;"><span> New</span></p>
						<img src="images/menus/Thai-Cuisine/Crispy Chili Eel.png" data-at2x="images/menus/Thai-Cuisine/retina/Crispy Chili Eel@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Crispy Chilli Eel</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food"><span> New</span></p>
						<img src="images/menus/Thai-Cuisine/Spicy's-Lady-Finger.png" data-at2x="images/menus/Thai-Cuisine/retina/Spicy's-Lady-Finger@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Spicy Lady’s Finger</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food" style="visibility:hidden;"><span> New</span></p>
						<img src="images/menus/Thai-Cuisine/Chicken Feet Hot & Sour Soup.png" data-at2x="images/menus/Thai-Cuisine/retina/Chicken Feet Hot & Sour Soup@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Chicken Feet Hot & Sour Soup </h3>
						</div>
					</div>
				</div>
				
			</div> 
    <!-- /////////////   Grills  //////////////// -->
    		<div class="menu-container container" id="grills">
				<div class="row menus-item-row">
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Grill/Grill Chicken.png" data-at2x="images/menus/Grill/retina/Grill Chicken@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Grilled Chicken</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Grill/Grill Pork.png" data-at2x="images/menus/Grill/retina/Grill Pork@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Grilled Chicken Wing</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Grill/Grill Fish.png" data-at2x="images/menus/Grill/retina/Grill Fish@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Grilled Fish</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Grill/Grill Mushroom.png" data-at2x="images/menus/Grill/retina/Grill Mushroom@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Grilled Mushroom</h3>
						</div>
					</div>
				</div>

				<div class="row menus-item-row">
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food"><span> YKKO Specials</span></p>
						<img src="images/menus/Grill/Chicken Sartay.png" data-at2x="images/menus/Grill/retina/Chicken Sartay@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Chicken Sartay</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food"><span> YKKO Specials</span></p>
						<img src="images/menus/Grill/Barbecue-pork.png" data-at2x="images/menus/Grill/retina/Barbecue-pork@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Pork Barbecue</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food"><span> YKKO Specials</span></p>
						<img src="images/menus/Grill/Barbecue-mutton.png" data-at2x="images/menus/Grill/retina/Barbecue-mutton@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Mutton Barbecue</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food"><span> YKKO Specials</span></p>
						<img src="images/menus/Grill/Barbecue-chicken.png" data-at2x="images/menus/Grill/retina/Barbecue-chicken@2x.png" class="img-responsive ykko">
						<div class="food-des">
							<h3> Chicken Barbecue</h3>
						</div>
					</div>
				</div>

				<div class="row menus-item-row">
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Grill/Grill Chicken Sausage.png" data-at2x="images/menus/Grill/retina/Grill Chicken Sausage@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Grilled Chicken Sausuage</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Grill/Grill Pork Sausage.png" data-at2x="images/menus/Grill/retina/Grill Pork Sausage@2x.png" class="img-responsive ykko">
						<div class="food-des">
							<h3> Grilled Pork Sausage</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Grill/Mashed-Potato.png" data-at2x="images/menus/Grill/retina/Mashed-Potato@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Mashed Potato</h3>
						</div>
					</div> 
				</div>
				<div class="row menus-item-row">
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Grill/Grilled-Mutton.png" data-at2x="images/menus/Grill/retina/Grilled-Mutton@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Grilled Mutton</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Grill/Grill Pork Ball.png" data-at2x="images/menus/Grill/retina/Grill Pork Ball@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Grilled Pork Ball</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Grill/Grill fish ball.png" data-at2x="images/menus/Grill/retina/Grill fish ball@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Grilled Fish Ball</h3>
						</div>
					</div>
					
				</div>
				<div class="row menus-item-row">
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Grill/Grill Potato.png" data-at2x="images/menus/Grill/retina/Grill Potato@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Grilled Potato</h3>
						</div>
					</div>
					
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Grill/Lady Finger.png" data-at2x="images/menus/Grill/retina/Lady Finger@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Grilled Lady Finger</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Grill/Grill Garlic.png" data-at2x="images/menus/Grill/retina/Grill Garlic@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Grilled Garlic</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Grill/Grill Prawn.png" data-at2x="images/menus/Grill/retina/Grill Prawn@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Grilled Prawn</h3>
						</div>
					</div>
				</div>
				
				<div class="row menus-item-row">
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Grill/Fried-Wanton.png" data-at2x="images/menus/Grill/retina/Fried-Wanton@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Fried Wanton Stuff with Chicken</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Grill/Fried-Potato.png" data-at2x="images/menus/Grill/retina/Fried-Potato@2x.png" class="img-responsive ykko">
						<div class="food-des">
							<h3> Fried Potato</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Grill/Grill Corn.png" data-at2x="images/menus/Grill/retina/Grill Corn@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Grilled Corn</h3>
						</div>
					</div>
					
				</div>

			</div> 
    <!-- /////////////   Fresh Juice & Drinks  //////////////// -->
    		<div class="menu-container container" id="juice-drinks">
				<div class="row menus-item-row">
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Fresh-Fruit-Juice/Apple.png" data-at2x="images/menus/Fresh-Fruit-Juice/retina/Apple@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Apple Juice</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Fresh-Fruit-Juice/Avocado.png" data-at2x="images/menus/Fresh-Fruit-Juice/retina/Avocado@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Avocado Juice</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Fresh-Fruit-Juice/Mixed Berry Smoothies.png" data-at2x="images/menus/Fresh-Fruit-Juice/retina/Mixed Berry Smoothies@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Strawberry Smoothies Juice</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Fresh-Fruit-Juice/Suger cane.png" data-at2x="images/menus/Fresh-Fruit-Juice/retina/Suger cane@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Suger cane Juice</h3>
						</div>
					</div>
				</div>

				<div class="row menus-item-row">
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Fresh-Fruit-Juice/Back Jelly.png" data-at2x="images/menus/Fresh-Fruit-Juice/retina/Back Jelly@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Back Jelly Juice</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Fresh-Fruit-Juice/Sunkist.png" data-at2x="images/menus/Fresh-Fruit-Juice/retina/Sunkist@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Sunkist Juice</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Fresh-Fruit-Juice/Soda-Kiwi.png" data-at2x="images/menus/Fresh-Fruit-Juice/retina/Soda-Kiwi@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Soda Kiwi Juice</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Fresh-Fruit-Juice/Soda Blueberry.png" data-at2x="images/menus/Fresh-Fruit-Juice/retina/Soda Blueberry@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Soda Blueberry Juice</h3>
						</div>
					</div>
				</div> 
				<div class="row menus-item-row">
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Fresh-Fruit-Juice/Fruit Cocktail.png" data-at2x="images/menus/Fresh-Fruit-Juice/retina/Fruit Cocktail@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Fruit Cocktail Juice</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Fresh-Fruit-Juice/Pineapple.png" data-at2x="images/menus/Fresh-Fruit-Juice/retina/Pineapple@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Pineapple Juice</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Fresh-Fruit-Juice/Prune.png" data-at2x="images/menus/Fresh-Fruit-Juice/retina/Prune@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Prune Juice</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Fresh-Fruit-Juice/Lime.png" data-at2x="images/menus/Fresh-Fruit-Juice/retina/Lime@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Lime Juice</h3>
						</div>
					</div>
				</div>
				<div class="row menus-item-row">
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Fresh-Fruit-Juice/Orange.png" data-at2x="images/menus/Fresh-Fruit-Juice/retina/Orange@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Orange Juice</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Fresh-Fruit-Juice/Strawberry Juce.png" data-at2x="images/menus/Fresh-Fruit-Juice/retina/Strawberry Juce@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Strawberry Juice</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Fresh-Fruit-Juice/Sweet lime.png" data-at2x="images/menus/Fresh-Fruit-Juice/retina/Sweet line@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Sweet lime Juice</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Fresh-Fruit-Juice/Tamarind.png" data-at2x="images/menus/Fresh-Fruit-Juice/retina/Tamarind@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Tamarind Juice</h3>
						</div>
					</div>
				</div> 
				<div class="row menus-item-row">
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Fresh-Fruit-Juice/Watermelon.png" data-at2x="images/menus/Fresh-Fruit-Juice/retina/Watermelon@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Watermelon Juice</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Fresh-Fruit-Juice/Papaya.png" data-at2x="images/menus/Fresh-Fruit-Juice/retina/Papaya@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Papaya Juice</h3>
						</div>
					</div>
					
				</div> 
				
			</div> 
    <!-- /////////////   Desert  //////////////// -->
    		<div class="menu-container container" id="deserts">
    			<div class="row menus-item-row">
    				<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Desert/Espresso.png" data-at2x="images/menus/Desert/retina/Espresso@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Espresso</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Desert/Cafe-Americano.png" data-at2x="images/menus/Desert/retina/Cafe-Americano@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Café Americano</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Desert/Chocolate Milk Shake.png" data-at2x="images/menus/Desert/retina/Chocolate Milk Shake@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Chocolate Milk Shake</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Desert/Irish Coffee.png" data-at2x="images/menus/Desert/retina/Irish Coffee@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Irish Coffee</h3>
						</div>
					</div>
				</div>

				<div class="row menus-item-row">
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Desert/Iced Vanilla Coffee.png" data-at2x="images/menus/Desert/retina/Iced Vanilla Coffee@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Iced Vanilla Coffee</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Desert/Iced Mocha.png" data-at2x="images/menus/Desert/retina/Iced Mocha@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Iced Mocha</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Desert/Apple-Burter-Cake.png" data-at2x="images/menus/Desert/retina/Apple-Burter-Cake@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Caramel Mousse Cake</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Desert/Flam-Parisian.png" data-at2x="images/menus/Desert/retina/Flam-Parisian@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Flam Parisian</h3>
						</div>
					</div>
					<!---->
				</div>

				<div class="row menus-item-row">
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Desert/Pudding.png" data-at2x="images/menus/Desert/retina/Pudding@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Cream Caramel</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Desert/Sacher Cake.png" data-at2x="images/menus/Desert/retina/Sacher Cake@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Sacher Cake</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Desert/Opera Cake.png" data-at2x="images/menus/Desert/retina/Opera Cake@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Opera Cake</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<img src="images/menus/Desert/Brownie Cake.png" data-at2x="images/menus/Desert/retina/Brownie Cake@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Brownie Cake</h3>
						</div>
					</div>
				</div>

				<div class="row menus-item-row">
					
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food" style="visibility:hidden;"><span></span></p>
						<img src="images/menus/Desert/Chocolate-Cream-Slice Cake.png" data-at2x="images/menus/Desert/retina/Chocolate-Cream-Slice Cake@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Chocolate Cream Slice</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food" style="visibility:hidden;"><span></span></p>
						<img src="images/menus/Desert/Black-Forrest-Cake.png" data-at2x="images/menus/Desert/retina/Black-Forrest-Cake@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Black Forest Cake</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food" style="visibility:hidden;"><span></span></p>
						<img src="images/menus/Desert/Cointreau.png" data-at2x="images/menus/Desert/retina/Cointreau@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Chocolate Dream</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food"><span> YKKO Specials</span></p>
						<img src="images/menus/Desert/Ice-K-Chang.png" data-at2x="images/menus/Desert/retina/Ice-K-Chang@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Ice-K Chang</h3>
						</div>
					</div>
				</div>

				<div class="row menus-item-row">
					
					
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food"><span> YKKO Specials</span></p>
						<img src="images/menus/Desert/The Lovers Ice Cream.png" data-at2x="images/menus/Desert/retina/The Lovers Ice Cream@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> The Lovers Ice Cream</h3>
						</div>
					</div>
				
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food" style="visibility:hidden;"><span></span></p>
						<img src="images/menus/Desert/Strawberry.png" data-at2x="images/menus/Desert/retina/Strawberry@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Strawberry</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food" style="visibility:hidden;"><span></span></p>
						<img src="images/menus/Desert/Venilla.png" data-at2x="images/menus/Desert/retina/Venilla@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Venilla</h3>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 menus-item">
						<p class="text-center alert-food" style="visibility:hidden;"><span></span></p>
						<img src="images/menus/Desert/Chocolate.png" data-at2x="images/menus/Desert/retina/Chocolate@2x.png" class="img-responsive">
						<div class="food-des">
							<h3> Chocolate</h3>
						</div>
					</div>
				</div>

			</div> 

			<!-- ///////////// foooter ////////// -->
			<div class="container main-footer">
				<div class="row footer">
					<div class="col-md-6 col-xs-6">
						<p> &copy 2015 YKKO GROUP OF COMPANIES DESIGNED BY PIXEL DIRECTS</p>
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
				if(ans==3)
				{
					document.getElementById('menu').className='active';
					document.getElementById('mb_menu').className='active';
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