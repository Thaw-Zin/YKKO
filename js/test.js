$(document).ready(function() {
          $(".township-dropdown").niceScroll({cursorcolor:"#1c4e31"});
        /**************** data show by click ****************/
        $('div.city1-data,div.city2-data,div.city3-data,div.city4-data,div.city5-data,div.city6-data').hide();
        $('div.township1-data,div.township2-data,div.township3-data,div.township4-data,div.township5-data,div.township6-data,div.hlaing-data,div.township7-data,div.township8-data,div.township9-data,div.township10-data,div.township11-data,div.township12-data,div.township13-data,div.township14-data,div.township15-data,div.township16-data,div.township17-data,div.township18-data,div.township19-data,div.township20-data,div.township21-data').hide();
      $(document).on('click','#cityall', function() { 
         $('#city-group').text('Show All Cities');
         $('#township-group').text('Show all township');
         $('div.city1-data,div.city2-data, div.city3-data, div.city4-data, div.city5-data, div.city6-data').hide();
         $('div.township1-data,div.township2-data,div.township3-data,div.township4-data,div.township5-data,div.township6-data,div.hlaing-data,div.township7-data,div.township8-data,div.township9-data,div.township10-data,div.township11-data,div.township12-data,div.township13-data,div.township14-data,div.township15-data,div.township16-data,div.township17-data,div.township18-data,div.township19-data,div.township20-data,div.township21-data').hide();
         $('div.cityall-data').show();
      });
      $(document).on('click','#city2', function() { 
         $('#city-group').text('Mandalay');
         $('#township-group').text('Show all township');
         $('div.cityall-data,div.city1-data, div.city3-data, div.city4-data, div.city5-data, div.city6-data').hide();
         $('div.township1-data,div.township2-data,div.township3-data,div.township4-data,div.township5-data,div.township6-data,div.hlaing-data,div.township7-data,div.township8-data,div.township9-data,div.township10-data,div.township11-data,div.township12-data,div.township13-data,div.township14-data,div.township15-data,div.township16-data,div.township17-data,div.township18-data,div.township19-data,div.township20-data,div.township21-data').hide();
         $('div.city2-data').show();
      });
      $(document).on('click','#city1', function() { 
        $('#city-group').text('Yangon');
        $('#township-group').text('Show all township');
         $('div.cityall-data,div.city2-data, div.city3-data, div.city4-data, div.city5-data, div.city6-data').hide();
         $('div.township1-data,div.township2-data,div.township3-data,div.township4-data,div.township5-data,div.township6-data,div.hlaing-data,div.township7-data,div.township8-data,div.township9-data,div.township10-data,div.township11-data,div.township12-data,div.township13-data,div.township14-data,div.township15-data,div.township16-data,div.township17-data,div.township18-data,div.township19-data,div.township20-data,div.township21-data').hide();
         $('div.city1-data').show();
      });
      $(document).on('click','#city3', function() { 
        $('#city-group').text('Nay Pyi Taw');
        $('#township-group').text('Show all township');
         $('div.cityall-data,div.city1-data, div.city2-data, div.city4-data, div.city5-data, div.city6-data').hide();
         $('div.township1-data,div.township2-data,div.township3-data,div.township4-data,div.township5-data,div.township6-data,div.hlaing-data,div.township7-data,div.township8-data,div.township9-data,div.township10-data,div.township11-data,div.township12-data,div.township13-data,div.township14-data,div.township15-data,div.township16-data,div.township17-data,div.township18-data,div.township19-data,div.township20-data,div.township21-data').hide();
         $('div.city3-data').show();
      });
      $(document).on('click','#city4', function() { 
        $('#city-group').text('Pyin Oo Lwin');
        $('#township-group').text('Show all township');
         $('div.cityall-data,div.city1-data, div.city2-data, div.city3-data, div.city5-data, div.city6-data').hide();
         $('div.township1-data,div.township2-data,div.township3-data,div.township4-data,div.township5-data,div.township6-data,div.hlaing-data,div.township7-data,div.township8-data,div.township9-data,div.township10-data,div.township11-data,div.township12-data,div.township13-data,div.township14-data,div.township15-data,div.township16-data,div.township17-data,div.township18-data,div.township19-data,div.township20-data,div.township21-data').hide();
         $('div.city4-data').show();
      });
      $(document).on('click','#city5', function() { 
        $('#city-group').text('Myeik');
        $('#township-group').text('Show all township');
         $('div.cityall-data,div.city1-data, div.city2-data, div.city3-data, div.city4-data, div.city6-data').hide();
         $('div.township1-data,div.township2-data,div.township3-data,div.township4-data,div.township5-data,div.township6-data,div.hlaing-data,div.township7-data,div.township8-data,div.township9-data,div.township10-data,div.township11-data,div.township12-data,div.township13-data,div.township14-data,div.township15-data,div.township16-data,div.township17-data,div.township18-data,div.township19-data,div.township20-data,div.township21-data').hide();
         $('div.city5-data').show();
      });
      $(document).on('click','#city6', function() { 
        $('#city-group').text('Mawlamyaing');
        $('#township-group').text('Show All Township');
         $('div.cityall-data,div.city1-data, div.city2-data, div.city3-data, div.city4-data, div.city5-data').hide();
         $('div.township1-data,div.township2-data,div.township3-data,div.township4-data,div.township5-data,div.township6-data,div.hlaing-data,div.township7-data,div.township8-data,div.township9-data,div.township10-data,div.township11-data,div.township12-data,div.township13-data,div.township14-data,div.township15-data,div.township16-data,div.township17-data,div.township18-data,div.township19-data,div.township20-data,div.township21-data').hide();
         $('div.city6-data').show();
      });

      $(document).on('click','#townshipall', function() {
        $('#city-group').text('Show All Cities');
        $('#township-group').text('Show All Township');
         $('div.city1-data,div.city2-data,div.city3-data,div.city4-data,div.city5-data,div.city6-data').hide();
        $('div.township1-data,div.township2-data,div.township3-data,div.township4-data,div.township5-data,div.township6-data,div.hlaing-data,div.township7-data,div.township8-data,div.township9-data,div.township10-data, div.township11-data,div.township12-data,div.township13-data,div.township14-data,div.township15-data,div.township16-data,div.township17-data,div.township18-data,div.township19-data,div.township20-data,div.township21-data,div.township22-data').hide();
         $('div.cityall-data').show();
        });
      $(document).on('click','#township1', function() {
        $('#city-group').text('Show All cities');
        $('#township-group').text('Yankin');
         $('div.cityall-data,div.city1-data,div.city2-data,div.city3-data,div.city4-data,div.city5-data,div.city6-data').hide();
        $('div.township2-data,div.township3-data,div.township4-data,div.township5-data,div.township6-data,div.hlaing-data,div.township7-data,div.township8-data,div.township9-data,div.township10-data, div.township11-data,div.township12-data,div.township13-data,div.township14-data,div.township15-data,div.township16-data,div.township17-data,div.township18-data,div.township19-data,div.township20-data,div.township21-data,div.township22-data').hide();
         $('div.township1-data').show();
        });

      $(document).on('click','#township2', function() { 
         $('#city-group').text('Show All Cities');
         $('#township-group').text('Bahan');
         $('div.cityall-data,div.city1-data,div.city2-data,div.city3-data,div.city4-data,div.city5-data,div.city6-data').hide();
         $('div.township1-data,div.township3-data,div.township4-data,div.township5-data,div.township6-data,div.hlaing-data,div.township7-data,div.township8-data,div.township9-data,div.township10-data,div.township11-data,div.township12-data,div.township13-data,div.township14-data,div.township15-data,div.township16-data,div.township17-data,div.township18-data,div.township19-data,div.township20-data,div.township21-data,div.township22-data').hide();
         $('div.township2-data').show();
      });

      $(document).on('click','#township3', function() { 
         $('#city-group').text('Show All Cities');
         $('#township-group').text('Tamwe');
         $('div.cityall-data,div.city1-data,div.city2-data,div.city3-data,div.city4-data,div.city5-data,div.city6-data').hide();
         $('div.township1-data,div.township2-data,div.township4-data,div.township5-data,div.township6-data,div.hlaing-data,div.township7-data,div.township8-data,div.township9-data,div.township10-data,div.township11-data,div.township12-data,div.township13-data,div.township14-data,div.township15-data,div.township16-data,div.township17-data,div.township18-data,div.township19-data,div.township20-data,div.township21-data,div.township22-data').hide();
         $('div.township3-data').show();
      });
      $(document).on('click','#township4', function() { 
         $('#city-group').text('Show All Cities');
         $('#township-group').text('Thingangyun');
         $('div.cityall-data,div.city1-data,div.city2-data,div.city3-data,div.city4-data,div.city5-data,div.city6-data').hide();
         $('div.township1-data,div.township2-data,div.township3-data,div.township5-data,div.township6-data,div.hlaing-data,div.township7-data,div.township8-data,div.township9-data,div.township10-data,div.township11-data,div.township12-data,div.township13-data,div.township14-data,div.township15-data,div.township16-data,div.township17-data,div.township18-data,div.township19-data,div.township20-data,div.township21-data,div.township22-data').hide();
         $('div.township4-data').show();
      });
      $(document).on('click','#township5', function() { 
         $('#city-group').text('Show All Cities');
         $('#township-group').text('Kyauktada');
         $('div.cityall-data,div.city1-data,div.city2-data,div.city3-data,div.city4-data,div.city5-data,div.city6-data').hide();
         $('div.township1-data,div.township2-data,div.township3-data,div.township4-data,div.township6-data,div.hlaing-data,div.township7-data,div.township8-data,div.township9-data,div.township10-data,div.township11-data,div.township12-data,div.township13-data,div.township14-data,div.township15-data,div.township16-data,div.township17-data,div.township18-data,div.township19-data,div.township20-data,div.township21-data,div.township22-data').hide();
         $('div.township5-data').show();
      });
      $(document).on('click','#township6', function() { 
         $('#city-group').text('Show All Cities');
         $('#township-group').text('Kamayut');
         $('div.cityall-data,div.city1-data,div.city2-data,div.city3-data,div.city4-data,div.city5-data,div.city6-data').hide();
         $('div.township1-data,div.township2-data,div.township3-data,div.township4-data,div.township5-data,div.hlaing-data,div.township7-data,div.township8-data,div.township9-data,div.township10-data,div.township11-data,div.township12-data,div.township13-data,div.township14-data,div.township15-data,div.township16-data,div.township17-data,div.township18-data,div.township19-data,div.township20-data,div.township21-data,div.township22-data').hide();
         $('div.township6-data').show();
      });
      $(document).on('click','#hlaing', function() { 
         $('#city-group').text('Show All Cities');
         $('#township-group').text('Hlaing');
         $('div.cityall-data,div.city1-data,div.city2-data,div.city3-data,div.city4-data,div.city5-data,div.city6-data').hide();
         $('div.township1-data,div.township2-data,div.township3-data,div.township4-data,div.township5-data,div.township6-data,div.township7-data,div.township8-data,div.township9-data,div.township10-data,div.township11-data,div.township12-data,div.township13-data,div.township14-data,div.township15-data,div.township16-data,div.township17-data,div.township18-data,div.township19-data,div.township20-data,div.township21-data,div.township22-data').hide();
         $('div.hlaing-data').show();
      });
      $(document).on('click','#township7', function() { 
         $('#city-group').text('Show All Cities');
         $('#township-group').text('Mayangone');
         $('div.cityall-data,div.city1-data,div.city2-data,div.city3-data,div.city4-data,div.city5-data,div.city6-data').hide();
         $('div.township1-data,div.township2-data,div.township3-data,div.township4-data,div.township5-data,div.township6-data,div.hlaing-data,div.township8-data,div.township9-data,div.township10-data,div.township11-data,div.township12-data,div.township13-data,div.township14-data,div.township15-data,div.township16-data,div.township17-data,div.township18-data,div.township19-data,div.township20-data,div.township21-data,div.township22-data').hide();
         $('div.township7-data').show();
      });
      $(document).on('click','#township8', function() { 
         $('#city-group').text('Show All Cities');
         $('#township-group').text('Lanmadaw');
         $('div.cityall-data,div.city1-data,div.city2-data,div.city3-data,div.city4-data,div.city5-data,div.city6-data').hide();
         $('div.township1-data,div.township2-data,div.township3-data,div.township4-data,div.township5-data,div.township6-data,div.hlaing-data,div.township7-data,div.township9-data,div.township10-data,div.township11-data,div.township12-data,div.township13-data,div.township14-data,div.township15-data,div.township16-data,div.township17-data,div.township18-data,div.township19-data,div.township20-data,div.township21-data,div.township22-data').hide();
         $('div.township8-data').show();
      });
      $(document).on('click','#township9', function() { 
         $('#city-group').text('Show All Cities');
         $('#township-group').text('Thaketa');
         $('div.cityall-data,div.city1-data,div.city2-data,div.city3-data,div.city4-data,div.city5-data,div.city6-data').hide();
         $('div.township1-data,div.township2-data,div.township3-data,div.township4-data,div.township5-data,div.township6-data,div.hlaing-data,div.township7-data,div.township8-data,div.township10-data,div.township11-data,div.township12-data,div.township13-data,div.township14-data,div.township15-data,div.township16-data,div.township17-data,div.township18-data,div.township19-data,div.township20-data,div.township21-data,div.township22-data').hide();
         $('div.township9-data').show();
      });
      $(document).on('click','#township10', function() {  
         $('#city-group').text('Show All Cities');
         $('#township-group').text('Sanchaung');
         $('div.cityall-data,div.city1-data,div.city2-data,div.city3-data,div.city4-data,div.city5-data,div.city6-data').hide();
         $('div.township1-data,div.township2-data,div.township3-data,div.township4-data,div.township5-data,div.township6-data,div.hlaing-data,div.township7-data,div.township8-data,div.township9-data,div.township11-data,div.township12-data,div.township13-data,div.township14-data,div.township15-data,div.township16-data,div.township17-data,div.township18-data,div.township19-data,div.township20-data,div.township21-data,div.township22-data').hide();
         $('div.township10-data').show();
      });
      $(document).on('click','#township11', function() {  
         $('#city-group').text('Show All Cities');
         $('#township-group').text('Insein');
         $('div.cityall-data,div.city1-data,div.city2-data,div.city3-data,div.city4-data,div.city5-data,div.city6-data').hide();
         $('div.township1-data,div.township2-data,div.township3-data,div.township4-data,div.township5-data,div.township6-data,div.hlaing-data,div.township7-data,div.township8-data,div.township9-data,div.township10-data,div.township12-data,div.township13-data,div.township14-data,div.township15-data,div.township16-data,div.township17-data,div.township18-data,div.township19-data,div.township20-data,div.township21-data,div.township22-data').hide();
         $('div.township11-data').show();
      });
      $(document).on('click','#township12', function() {  
         $('#city-group').text('Show All Cities');
         $('#township-group').text('South Okkalapa');
         $('div.cityall-data,div.city1-data,div.city2-data,div.city3-data,div.city4-data,div.city5-data,div.city6-data').hide();
         $('div.township1-data,div.township2-data,div.township3-data,div.township4-data,div.township5-data,div.township6-data,div.hlaing-data,div.township7-data,div.township8-data,div.township9-data,div.township10-data,div.township11-data,div.township13-data,div.township14-data,div.township15-data,div.township16-data,div.township17-data,div.township18-data,div.township19-data,div.township20-data,div.township21-data,div.township22-data').hide();
         $('div.township12-data').show();
      });
      $(document).on('click','#township13', function() {  
         $('#city-group').text('Show All Cities');
         $('#township-group').text('Dagon');
         $('div.cityall-data,div.city1-data,div.city2-data,div.city3-data,div.city4-data,div.city5-data,div.city6-data').hide();
         $('div.township1-data,div.township2-data,div.township3-data,div.township4-data,div.township5-data,div.township6-data,div.hlaing-data,div.township7-data,div.township8-data,div.township9-data,div.township10-data,div.township11-data,div.township12-data,div.township14-data,div.township15-data,div.township16-data,div.township17-data,div.township18-data,div.township19-data,div.township20-data,div.township21-data,div.township22-data').hide();
         $('div.township13-data').show();
      });
      $(document).on('click','#township14', function() {  
         $('#city-group').text('Show All Cities');
         $('#township-group').text('North Dagon');
         $('div.cityall-data,div.city1-data,div.city2-data,div.city3-data,div.city4-data,div.city5-data,div.city6-data').hide();
         $('div.township1-data,div.township2-data,div.township3-data,div.township4-data,div.township5-data,div.township6-data,div.hlaing-data,div.township7-data,div.township8-data,div.township9-data,div.township10-data,div.township11-data,div.township12-data,div.township13-data,div.township15-data,div.township16-data,div.township17-data,div.township18-data,div.township19-data,div.township20-data,div.township21-data,div.township22-data').hide();
         $('div.township14-data').show();
      });
      $(document).on('click','#township15', function() {  
         $('#city-group').text('Show All Cities');
         $('#township-group').text('South Dagon');
         $('div.cityall-data,div.city1-data,div.city2-data,div.city3-data,div.city4-data,div.city5-data,div.city6-data').hide();
         $('div.township1-data,div.township2-data,div.township3-data,div.township4-data,div.township5-data,div.township6-data,div.hlaing-data,div.township7-data,div.township8-data,div.township9-data,div.township10-data,div.township11-data,div.township12-data,div.township13-data,div.township14-data,div.township16-data,div.township17-data,div.township18-data,div.township19-data,div.township20-data,div.township21-data,div.township22-data').hide();
         $('div.township15-data').show();
      });
      $(document).on('click','#township16', function() {  
         $('#city-group').text('Show All Cities');
         $('#township-group').text('Sitkae Kone');
         $('div.cityall-data,div.city1-data,div.city2-data,div.city3-data,div.city4-data,div.city5-data,div.city6-data').hide();
         $('div.township1-data,div.township2-data,div.township3-data,div.township4-data,div.township5-data,div.township6-data,div.hlaing-data,div.township7-data,div.township8-data,div.township9-data,div.township10-data,div.township11-data,div.township12-data,div.township13-data,div.township14-data,div.township15-data,div.township17-data,div.township18-data,div.township19-data,div.township20-data,div.township21-data,div.township22-data').hide();
         $('div.township16-data').show();
      });
      $(document).on('click','#township17', function() {  
         $('#city-group').text('Show All Cities');
         $('#township-group').text('ChanAye TharZan');
         $('div.cityall-data,div.city1-data,div.city2-data,div.city3-data,div.city4-data,div.city5-data,div.city6-data').hide();
         $('div.township1-data,div.township2-data,div.township3-data,div.township4-data,div.township5-data,div.township6-data,div.hlaing-data,div.township7-data,div.township8-data,div.township9-data,div.township10-data,div.township11-data,div.township12-data,div.township13-data,div.township14-data,div.township15-data,div.township16-data,div.township18-data,div.township19-data,div.township20-data,div.township21-data,div.township22-data').hide();
         $('div.township17-data').show();
      });
      $(document).on('click','#township18', function() {  
         $('#city-group').text('Show All Cities');
         $('#township-group').text('Oattarathiri');
         $('div.cityall-data,div.city1-data,div.city2-data,div.city3-data,div.city4-data,div.city5-data,div.city6-data').hide();
         $('div.township1-data,div.township2-data,div.township3-data,div.township4-data,div.township5-data,div.township6-data,div.hlaing-data,div.township7-data,div.township8-data,div.township9-data,div.township10-data,div.township11-data,div.township12-data,div.township13-data,div.township14-data,div.township15-data,div.township16-data,div.township17-data,div.township19-data,div.township20-data,div.township21-data,div.township22-data').hide();
         $('div.township18-data').show();
      });
      $(document).on('click','#township19', function() {  
         $('#city-group').text('Show All Cities');
         $('#township-group').text('Dadkhina Thiri');
         $('div.cityall-data,div.city1-data,div.city2-data,div.city3-data,div.city4-data,div.city5-data,div.city6-data').hide();
         $('div.township1-data,div.township2-data,div.township3-data,div.township4-data,div.township5-data,div.township6-data,div.hlaing-data,div.township7-data,div.township8-data,div.township9-data,div.township10-data,div.township11-data,div.township12-data,div.township13-data,div.township14-data,div.township15-data,div.township16-data,div.township17-data,div.township18-data,div.township20-data,div.township21-data,div.township22-data').hide();
         $('div.township19-data').show();
      });
      $(document).on('click','#township20', function() {  
         $('#city-group').text('Show All Cities');
         $('#township-group').text('ChanMya Tha Zi');
         $('div.cityall-data,div.city1-data,div.city2-data,div.city3-data,div.city4-data,div.city5-data,div.city6-data').hide();
         $('div.township1-data,div.township2-data,div.township3-data,div.township4-data,div.township5-data,div.township6-data,div.hlaing-data,div.township7-data,div.township8-data,div.township9-data,div.township10-data,div.township11-data,div.township12-data,div.township13-data,div.township14-data,div.township15-data,div.township16-data,div.township17-data,div.township18-data,div.township19-data,div.township21-data,div.township22-data').hide();
           $('div.township20-data').show();
      });
       $(document).on('click','#township21', function() {  
          $('#city-group').text('Show All Cities');
         $('#township-group').text('AungMyay Tha Zan');
         $('div.cityall-data,div.city1-data,div.city2-data,div.city3-data,div.city4-data,div.city5-data,div.city6-data').hide();
          $('div.township1-data,div.township2-data,div.township3-data,div.township4-data,div.township5-data,div.township6-data,div.hlaing-data,div.township7-data,div.township8-data,div.township9-data,div.township10-data,div.township11-data,div.township12-data,div.township13-data,div.township14-data,div.township15-data,div.township16-data,div.township17-data,div.township18-data,div.township19-data,div.township20-data,div.township22-data').hide();
          $('div.township21-data').show();
       });
	    
});