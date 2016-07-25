/*
 *
 * Code created by previous developer.
 * Maintain and modify by Sai Pone Tha Aung(saiponethaaung@gmail.com/09401526924)
 *
 */

$(document).ready(function() {
      $(".township-dropdown").niceScroll({cursorcolor:"#1c4e31"});
      /**************** data show by click ****************/
      $('.dCity').hide();
      $('.dtownship').hide();
      /* City Filter */
      $(document).on("click", ".dcitynav", function(){

        /* Show all township in dropdown box is default */
        $('#township-group').text('Show all township');
        /* Hide all township in list */
        $('.dtownship').hide();
        $('div.cityall-data').hide();
        $('.dCity').hide();
        /* Get ID */
        var dcID = $(this).attr("id");
        var cname = $(this).data("value");
        if(dcID=="cityall"){
          $('#city-group').text('Show All Cities');
          $('div.cityall-data').show();
        }else{
          $('#city-group').text(cname);
          $("."+dcID+"-data").show();
        }

      });
      /* Township Filter */
      $(document).on("click", ".dtspnav", function(){
        /* Show all city in dropdown box is default */
        $('#city-group').text('Show All Cities');
        /* Hide all city in list */
        $(".dCity").hide();
        $(".dtownship").hide();
        $('div.cityall-data').hide();
        var dcID = $(this).attr("id");
        var cname = $(this).data("value");
        if(dcID=="townshipall"){
          $('#city-group').text('Show All Cities');
          $('div.cityall-data').show();
        }else{
          $('#township-group').text(cname);
          $("."+dcID+"-data").show();
        }
      });
	    
});