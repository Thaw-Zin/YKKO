$(document).ready(function() {
	
	//////////////////// ********* Location final click and data change ********  //////////////
	$(".mobileCity").not(".mb-city1-data").hide();
	$(".mobileTownship").hide();
	
	$(document).on("click", ".mbcitynav", function(){

		$("#city-stay").text($(this).data("value"));
		$("#township-stay").text("All");
		$(".mobileTownship").hide();
		$(".mobileCity").hide();
		$("."+$(this).attr("id")+"-data").show();
	});

	$(document).on("click", ".mbtspnav", function(){
		$("#township-stay").text($(this).data("value"));
		$(".mobileCity").hide();
		$(".mobileTownship").hide();
		$("."+$(this).attr("id")+"-data").show();
	});

	//////////// * /////////////
	
			$(".up-shape").hide();
			$(".mb-dropdown").click(function(){
			         //$(this).next(".option-content").slideToggle(500);
			        $(this).find(".up-shape, .down-shape").toggle();
			});
			$(".dropdown1 ul li").click(function(){
			            //$(this).next(".option-content").slideToggle(500);
			            $(".dropdown1").find(".up-shape").hide();
			        	$(".dropdown1").find(".down-shape").show();
			});

			$(".up-arrow").hide();
			$("#city-township").click(function(){
			         //$(this).next(".option-content").slideToggle(500);
			        $(this).find(".up-arrow, .down-arrow").toggle();
			});
			$(".city-dropdown li").click(function(){
					//alert("");
			    	$("#city-township").find(".up-arrow").hide();
			        $("#city-township").find(".down-arrow").show();
			});

			 $(document).click(function() {
			    //alert("me");
			    $("#city-township").find(".up-arrow").hide();
			    $("#city-township").find(".down-arrow").show();
			    $(".wrapper-dropdown-3").find(".menu-up-shape").hide();
			    $(".wrapper-dropdown-3").find(".menu-down-shape").show();
			    $(".dropdown1").find(".up-shape").hide();
			    $(".dropdown1").find(".down-shape").show();
			});
			
			/***** menu mb-dropdown ******/
			$(".menu-up-shape").hide();
			$(".wrapper-dropdown-3").click(function(){
			         //$(this).next(".option-content").slideToggle(500);
			        $(this).find(".menu-up-shape, .menu-down-shape").toggle();
			});
		//////////************ location2/ dropdown effects on mobile ***********/////////////

		 $('.collapse').on('shown.bs.collapse', function(){
		 	$(this).parent().find(".glyphicon-plus").removeClass("glyphicon-plus").addClass("glyphicon-minus");
		 	}).on('hidden.bs.collapse', function(){
		 	$(this).parent().find(".glyphicon-minus").removeClass("glyphicon-minus").addClass("glyphicon-plus");
		 	});
		$('.categories').stickThis({
         top:        0,      // top position of sticky element, measured from 'ceiling'
         minscreenwidth: 0,      // element will not be sticky when viewport width smaller than this
         maxscreenwidth: 999999,     // element will not be sticky when viewport width larger than this 
         zindex:     9999,    // z-index value of sticky element
        	debugmode:  false   // when true, errors will be logged to console
         });
                  
		/***************************dropdown effects for menu category ************/
		function DropDown(el) {
        this.dd = el;
        this.placeholder = this.dd.children('span');
        this.opts = this.dd.find('ul.dropdown > li');
        this.val = '';
        this.index = -1;
        this.initEvents();
      }
      DropDown.prototype = {
        initEvents : function() {
          var obj = this;
          obj.dd.on('click', function(event){
            $(this).toggleClass('active');
            return false;
          });

          obj.opts.on('click',function(){
            var opt = $(this);
            obj.val = opt.text();
            obj.index = opt.index();
            obj.placeholder.text(obj.val);
          });
        },
        getValue : function() {
          return this.val;
        },
        getIndex : function() {
          return this.index;
        }
      }
      $(function() {

        var dd = new DropDown( $('#dd') );

        $(document).click(function() {
          // all dropdowns
          $('.wrapper-dropdown-3').removeClass('active');
        });

      });

		 /////////// ***** menu item hover effects *********//////////
		 		$("div.menus-item img")
				  .mouseover(function() {
				   //$( "div.menus-item img").css( "background-color", "red" );
				    $( "div.menus-item img").addClass( "blur-item");
				    //$( "div.menus-item h3").addClass( "text-blur");
				   // $( "h3").css( "opacity", "0.7");
				    $( "div.food-des").css( "opacity", "0.7");
				  })
				  .mouseout(function() {
				    //$( "div.menus-item img").css( "background-color", "blue" ); 
				    $( "div.menus-item img").removeClass("blur-item");
				  	//$( "div.menus-item img").addClass("normal-item" );
				  	//$( "div.menus-item h3").css( "opacity", "1");
				  	$( "div.food-des").css( "opacity", "1");
				  });

		////////*************** to get active state of sub categores by click ************///////////
	$('.main-sub-categories a').click(function(e) {
	    $('.main-sub-categories a').removeClass('active');
        if (!$(this).hasClass('active')) {
           var mid = $(this).data("name");
           $("#"+mid+", #ip-"+mid).addClass("active");
        }
	    e.preventDefault();
	});
//////////////// ************** click and set active state location sub title ********///////////
		$('.location-cities a').click(function(e) {
	        	$('.location-cities a').removeClass('active');
	        //var $parent = $(this).parent();
	        	if (!$(this).hasClass('active')) {
	            $(this).addClass('active');
	        	}
	       	 e.preventDefault();
	    	});
		/////////************* menu item change ***************//////////		
		$("#new, #ykko-special, #kyayoh-sichet, #chinese-cuisine, #thai-cuisine, #grills, #juice-drinks, #deserts").hide();
		//$("#new").show();
		$(document).on('click','table #new-cat', function() {
			$("#allitems").fadeOut(800);
			$("#ykko-special").fadeOut(800);
			$("#kyayoh-sichet").fadeOut(800);
			$("#chinese-cuisine").fadeOut(800);
			$("#thai-cuisine").fadeOut(800);
			$("#grills").fadeOut(800);
			$("#juice-drinks").fadeOut(800);
			$("#deserts").fadeOut(800);
			$("#new").fadeIn(1500);
		});
		$(document).on('click','table #all-cat', function() { 
			$("#ykko-special").fadeOut(800);
			$("#kyayoh-sichet").fadeOut(800);
			$("#chinese-cuisine").fadeOut(800);
			$("#thai-cuisine").fadeOut(800);
			$("#grills").fadeOut(800);
			$("#juice-drinks").fadeOut(800);
			$("#deserts").fadeOut(800);
			$("#new").fadeOut(800);
			$("#allitems").fadeIn(1500); 
		});
		$(document).on('click','table #special-cat', function() { 
			$("#allitems").fadeOut(800);
			$("#kyayoh-sichet").fadeOut(800);
			$("#chinese-cuisine").fadeOut(800);
			$("#thai-cuisine").fadeOut(800);
			$("#grills").fadeOut(800);
			$("#juice-drinks").fadeOut(800);
			$("#deserts").fadeOut(800);
			$("#new").fadeOut(800);
			$("#ykko-special").fadeIn(1500); 
		}); 
		$(document).on('click','table #kyayoh-cat', function() { 
			$("#allitems").fadeOut(800);
			$("#ykko-special").fadeOut(800);
			$("#chinese-cuisine").fadeOut(800);
			$("#thai-cuisine").fadeOut(800);
			$("#grills").fadeOut(800);
			$("#juice-drinks").fadeOut(800);
			$("#deserts").fadeOut(800);
			$("#new").fadeOut(800);
			$("#kyayoh-sichet").fadeIn(1500); 
		});  
		$(document).on('click','table #chinese-cat', function() { 
			$("#allitems").fadeOut(800);
			$("#ykko-special").fadeOut(800);
			$("#kyayoh-sichet").fadeOut(800);
			$("#thai-cuisine").fadeOut(800);
			$("#grills").fadeOut(800);
			$("#juice-drinks").fadeOut(800);
			$("#deserts").fadeOut(800);
			$("#new").fadeOut(800);
			$("#chinese-cuisine").fadeIn(1500); 
		});
		$(document).on('click','table #thai-cat', function() { 
			$("#allitems").fadeOut(800);
			$("#ykko-special").fadeOut(800);
			$("#kyayoh-sichet").fadeOut(800);
			$("#chinese-cuisine").fadeOut(800);
			$("#grills").fadeOut(800);
			$("#juice-drinks").fadeOut(800);
			$("#deserts").fadeOut(800);
			$("#new").fadeOut(800);
			$("#thai-cuisine").fadeIn(1500); 
		});
		$(document).on('click','table #grills-cat', function() { 
			$("#allitems").fadeOut(800);
			$("#ykko-special").fadeOut(800);
			$("#kyayoh-sichet").fadeOut(800);
			$("#chinese-cuisine").fadeOut(800);
			$("#thai-cuisine").fadeOut(800);
			$("#juice-drinks").fadeOut(800);
			$("#deserts").fadeOut(800);
			$("#new").fadeOut(800);
			$("#grills").fadeIn(1500); 
		});
		$(document).on('click','table #juice-drink-cat', function() { 
			$("#allitems").fadeOut(800);
			$("#ykko-special").fadeOut(800);
			$("#kyayoh-sichet").fadeOut(800);
			$("#chinese-cuisine").fadeOut(800);
			$("#thai-cuisine").fadeOut(800);
			$("#grills").fadeOut(800);
			$("#deserts").fadeOut(800);
			$("#new").fadeOut(800);
			$("#juice-drinks").fadeIn(1500);
		});
		$(document).on('click','table #desert-cat', function() { 
			$("#allitems").fadeOut(800);
			$("#ykko-special").fadeOut(800);
			$("#kyayoh-sichet").fadeOut(800);
			$("#chinese-cuisine").fadeOut(800);
			$("#thai-cuisine").fadeOut(800);
			$("#grills").fadeOut(800);
			$("#new").fadeOut(800);
			$("#juice-drinks").fadeOut(800);
			$("#deserts").fadeIn(1500);
		});

		/********** for ip **********/
		$("div.ipad-subcategores #ip-new-cat").click(function(){
			$("#allitems,#ykko-special,#kyayoh-sichet,#chinese-cuisine,#thai-cuisine,#grills,#juice-drinks,#deserts").fadeOut(800);
			$("#new").fadeIn(1500);
		});

		$("div.ipad-subcategores #ip-all-cat").click(function(){
			$("#new,#ykko-special,#kyayoh-sichet,#chinese-cuisine,#thai-cuisine,#grills,#juice-drinks,#deserts").fadeOut(800);
			$("#allitems").fadeIn(1500); 
		});

		$("div.ipad-subcategores #ip-special-cat").click(function(){
			$("#allitems,#new,#kyayoh-sichet,#chinese-cuisine,#thai-cuisine,#grills,#juice-drinks,#deserts").fadeOut(800);
			$("#ykko-special").fadeIn(1500); 
		});

		$("div.ipad-subcategores #ip-kyayoh-cat").click(function(){
			$("#allitems,#new,#ykko-special,#chinese-cuisine,#thai-cuisine,#grills,#juice-drinks,#deserts").fadeOut(800);
			$("#kyayoh-sichet").fadeIn(1500); 
		});
		$("div.ipad-subcategores #ip-chinese-cat").click(function(){
			$("#allitems,#new,#ykko-special,#kyayoh-sichet,#thai-cuisine,#grills,#juice-drinks,#deserts").fadeOut(800);
			$("#chinese-cuisine").fadeIn(1500); 
		});
		$("div.ipad-subcategores #ip-thai-cat").click(function(){
			$("#allitems,#new,#ykko-special,#kyayoh-sichet,#chinese-cuisine,#grills,#juice-drinks,#deserts").fadeOut(800);
			$("#thai-cuisine").fadeIn(1500); 
		});
		$("div.ipad-subcategores #ip-grills-cat").click(function(){
			$("#allitems,#new,#ykko-special,#kyayoh-sichet,#chinese-cuisine,#thai-cuisine,#juice-drinks,#deserts").fadeOut(800);
			$("#grills").fadeIn(1500); 
		});
		$("div.ipad-subcategores #ip-juice-drink-cat").click(function(){
			$("#allitems,#new,#ykko-special,#kyayoh-sichet,#chinese-cuisine,#thai-cuisine,#grills,#deserts").fadeOut(800);
			$("#juice-drinks").fadeIn(1500);
		});
		$("div.ipad-subcategores #ip-desert-cat").click(function(){
			$("#allitems,#new,#ykko-special,#kyayoh-sichet,#chinese-cuisine,#thai-cuisine,#grills,#juice-drinks").fadeOut(800);
			$("#deserts").fadeIn(1500);
		});

		/********** for mobile **********/
		$("#mb-new-cat").click(function(){
			$("#allitems,#ykko-special,#kyayoh-sichet,#chinese-cuisine,#thai-cuisine,#grills,#juice-drinks,#deserts").fadeOut(800);
			$("#new").fadeIn(1500);
		});
		$("#mb-all-cat").click(function(){
			$("#new,#ykko-special,#kyayoh-sichet,#chinese-cuisine,#thai-cuisine,#grills,#juice-drinks,#deserts").fadeOut(800);
			$("#allitems").fadeIn(1500); 
		});
		$("#mb-special-cat").click(function(){
			$("#allitems,#new,#kyayoh-sichet,#chinese-cuisine,#thai-cuisine,#grills,#juice-drinks,#deserts").fadeOut(800);
			$("#ykko-special").fadeIn(1500);
		});
		$("#mb-kyayoh-cat").click(function(){
			$("#allitems,#new,#ykko-special,#chinese-cuisine,#thai-cuisine,#grills,#juice-drinks,#deserts").fadeOut(800);
			$("#kyayoh-sichet").fadeIn(1500); 
		});
		$("#mb-chinese-cat").click(function(){
			$("#allitems,#new,#ykko-special,#kyayoh-sichet,#thai-cuisine,#grills,#juice-drinks,#deserts").fadeOut(800);
			$("#chinese-cuisine").fadeIn(1500); 
		});
		$("#mb-thai-cat").click(function(){
			$("#allitems,#new,#ykko-special,#kyayoh-sichet,#chinese-cuisine,#grills,#juice-drinks,#deserts").fadeOut(800);
			$("#thai-cuisine").fadeIn(1500); 
		});
		$("#mb-grills-cat").click(function(){
			$("#allitems,#new,#ykko-special,#kyayoh-sichet,#chinese-cuisine,#thai-cuisine,#juice-drinks,#deserts").fadeOut(800);
			$("#grills").fadeIn(1500); 
		});
		$("#mb-juice-drink-cat").click(function(){
			$("#allitems,#new,#ykko-special,#kyayoh-sichet,#chinese-cuisine,#thai-cuisine,#grills,#deserts").fadeOut(800);
			$("#juice-drinks").fadeIn(1500);
		});
		$("#mb-desert-cat").click(function(){
			$("#allitems,#new,#ykko-special,#kyayoh-sichet,#chinese-cuisine,#thai-cuisine,#grills,#juice-drinks").fadeOut(800);
			$("#deserts").fadeIn(1500);
		});

		//////////************ location2/ dropdown effects on mobile ***********/////////////

	/*	$('.arrow-left').hide();
		$('.township').carousel({
	  wrap: false
	}).on('slid.bs.carousel', function () {
		curSlide = $('.active');
	  if(curSlide.is( ':first-child' )) {
		 $('.arrow-left').show();
		 return;
	  } else {
		 $('.arrow-left').hide();	  
	  }
	  if (curSlide.is( ':last-child' )) {
		 //$('.next-location').hide();
		 $('.arrow-right').css("display", "none");
		 return;
	  } else {
		 //$('.next-location').show();	  
		 $('.arrow-right').css("display", "none");
	  }
	});	*/
	
});