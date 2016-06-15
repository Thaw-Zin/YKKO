$(document).ready(function() {
	
	//////////////////// ********* Location final click and data change ********  //////////////
	$("div.mb-city2-data, div.mb-city3-data, div.mb-city4-data, div.mb-city5-data, div.mb-city6-data").hide();
	$("div.mb-township1-data, div.mb-township2-data, div.mb-township3-data, div.mb-township4-data, div.mb-township5-data,div.mb-township6-data,div.mb-hlaing-data, div.mb-township7-data, div.mb-township8-data, div.mb-township9-data, div.mb-township10-data, div.mb-township11-data, div.mb-township12-data, div.mb-township13-data, div.mb-township14-data, div.mb-township15-data, div.mb-township16-data, div.mb-township17-data, div.mb-township18-data, div.mb-township19-data, div.mb-township20-data,div.mb-township21-data").hide();
	
	$("#mb-city1").click(function(){ 
		$("#city-stay").text("Yangon");
		$("#township-stay").text("All");
		$("div.mb-city2-data, div.mb-city3-data, div.mb-city4-data, div.mb-city5-data, div.mb-city6-data").hide();
		$("div.mb-township1-data, div.mb-township2-data, div.mb-township3-data, div.mb-township4-data, div.mb-township5-data,div.mb-township6-data,div.mb-hlaing-data,div.mb-township7-data, div.mb-township8-data, div.mb-township9-data, div.mb-township10-data, div.mb-township11-data, div.mb-township12-data, div.mb-township13-data, div.mb-township14-data, div.mb-township15-data, div.mb-township16-data, div.mb-township17-data, div.mb-township18-data, div.mb-township19-data, div.mb-township20-data,div.mb-township21-data").hide();
		
		$("div.mb-city1-data").show();
	});
	$("#mb-city2").click(function(){ 
		$("#city-stay").text("Mandalay");
		$("#township-stay").text("All");
		$("div.mb-township1-data, div.mb-township2-data, div.mb-township3-data, div.mb-township4-data, div.mb-township5-data,div.mb-township6-data,div.mb-hlaing-data,div.mb-township7-data, div.mb-township8-data, div.mb-township9-data, div.mb-township10-data, div.mb-township11-data, div.mb-township12-data, div.mb-township13-data, div.mb-township14-data, div.mb-township15-data, div.mb-township16-data, div.mb-township17-data, div.mb-township18-data, div.mb-township19-data, div.mb-township20-data,div.mb-township21-data").hide();
		
		$("div.mb-city1-data, div.mb-city3-data, div.mb-city4-data, div.mb-city5-data, div.mb-city6-data").hide();
		$("div.mb-city2-data").show();
	});
	$("#mb-city3").click(function(){ 
		$("#city-stay").text("Nay Pyi Taw");
		$("#township-stay").text("All");
		$("div.mb-township1-data, div.mb-township2-data, div.mb-township3-data, div.mb-township4-data, div.mb-township5-data,div.mb-township6-data,div.mb-hlaing-data,div.mb-township7-data, div.mb-township8-data, div.mb-township9-data, div.mb-township10-data, div.mb-township11-data, div.mb-township12-data, div.mb-township13-data, div.mb-township14-data, div.mb-township15-data, div.mb-township16-data, div.mb-township17-data, div.mb-township18-data, div.mb-township19-data, div.mb-township20-data,div.mb-township21-data").hide();
	
		$("div.mb-city1-data, div.mb-city2-data, div.mb-city4-data, div.mb-city5-data, div.mb-city6-data").hide();
		$("div.mb-city3-data").show();
	});
	$("#mb-city4").click(function(){ 
		$("#city-stay").text("Monywa");
		$("#township-stay").text("All");
		$("div.mb-township1-data, div.mb-township2-data, div.mb-township3-data, div.mb-township4-data, div.mb-township5-data,div.mb-township6-data,div.mb-hlaing-data,div.mb-township7-data, div.mb-township8-data, div.mb-township9-data, div.mb-township10-data, div.mb-township11-data, div.mb-township12-data, div.mb-township13-data, div.mb-township14-data, div.mb-township15-data, div.mb-township16-data, div.mb-township17-data, div.mb-township18-data, div.mb-township19-data, div.mb-township20-data,div.mb-township21-data").hide();
	
		$("div.mb-city1-data, div.mb-city2-data, div.mb-city3-data, div.mb-city5-data, div.mb-city6-data").hide();
		$("div.mb-city4-data").show();
	});
	$("#mb-city5").click(function(){ 
		$("#city-stay").text("Bago");
		$("#township-stay").text("All");
		$("div.mb-township1-data, div.mb-township2-data, div.mb-township3-data, div.mb-township4-data, div.mb-township5-data,div.mb-township6-data,div.mb-hlaing-data,div.mb-township7-data, div.mb-township8-data, div.mb-township9-data, div.mb-township10-data, div.mb-township11-data, div.mb-township12-data, div.mb-township13-data, div.mb-township14-data, div.mb-township15-data, div.mb-township16-data, div.mb-township17-data, div.mb-township18-data, div.mb-township19-data, div.mb-township20-data,div.mb-township21-data").hide();
	
		$("div.mb-city1-data, div.mb-city2-data, div.mb-city3-data, div.mb-city4-data, div.mb-city6-data").hide();
		$("div.mb-city5-data").show();
	});
	$("#mb-city6").click(function(){ 
		$("#city-stay").text("Mawlamyaing");
		$("#township-stay").text("All");
		$("div.mb-township1-data, div.mb-township2-data, div.mb-township3-data, div.mb-township4-data, div.mb-township5-data,div.mb-township6-data,div.mb-hlaing-data,div.mb-township7-data, div.mb-township8-data, div.mb-township9-data, div.mb-township10-data, div.mb-township11-data, div.mb-township12-data, div.mb-township13-data, div.mb-township14-data, div.mb-township15-data, div.mb-township16-data, div.mb-township17-data, div.mb-township18-data, div.mb-township19-data, div.mb-township20-data,div.mb-township21-data").hide();
	
		$("div.mb-city1-data, div.mb-city2-data, div.mb-city3-data, div.mb-city4-data, div.mb-city5-data").hide();
		$("div.mb-city6-data").show();
	});
	//////////// * /////////////
	$("#mb-township1").click(function(){ 
		$("#township-stay").text("Yankin");
		$("div.mb-city1-data,div.mb-city2-data, div.mb-city3-data, div.mb-city4-data, div.mb-city5-data, div.mb-city6-data").hide();
		$("div.mb-township2-data, div.mb-township3-data, div.mb-township4-data, div.mb-township5-data,div.mb-township6-data,div.mb-hlaing-data,div.mb-township7-data, div.mb-township8-data, div.mb-township9-data, div.mb-township10-data, div.mb-township11-data, div.mb-township12-data, div.mb-township13-data, div.mb-township14-data, div.mb-township15-data, div.mb-township16-data, div.mb-township17-data, div.mb-township18-data, div.mb-township19-data, div.mb-township20-data,div.mb-township21-data").hide();
		$("div.mb-township1-data").show();
	});
	$("#mb-township2").click(function(){ 
		$("#township-stay").text("Bahan");
		$("div.mb-city1-data,div.mb-city2-data, div.mb-city3-data, div.mb-city4-data, div.mb-city5-data, div.mb-city6-data").hide();
		$("div.mb-township1-data, div.mb-township3-data, div.mb-township4-data, div.mb-township5-data,div.mb-township6-data,div.mb-hlaing-data, div.mb-township7-data, div.mb-township8-data, div.mb-township9-data, div.mb-township10-data, div.mb-township11-data, div.mb-township12-data, div.mb-township13-data, div.mb-township14-data, div.mb-township15-data, div.mb-township16-data, div.mb-township17-data, div.mb-township18-data, div.mb-township19-data, div.mb-township20-data,div.mb-township21-data").hide();
		$("div.mb-township2-data").show();
	});
	$("#mb-township3").click(function(){ 
		$("#township-stay").text("Tamwe");
		$("div.mb-city1-data,div.mb-city2-data, div.mb-city3-data, div.mb-city4-data, div.mb-city5-data, div.mb-city6-data").hide();
		$("div.mb-township1-data, div.mb-township2-data, div.mb-township4-data, div.mb-township5-data,div.mb-township6-data,div.mb-hlaing-data, div.mb-township7-data, div.mb-township8-data, div.mb-township9-data, div.mb-township10-data, div.mb-township11-data, div.mb-township12-data, div.mb-township13-data, div.mb-township14-data, div.mb-township15-data, div.mb-township16-data, div.mb-township17-data, div.mb-township18-data, div.mb-township19-data, div.mb-township20-data,div.mb-township21-data").hide();
		$("div.mb-township3-data").show();
	});
	$("#mb-township4").click(function(){ 
		$("#township-stay").text("Thingangyun");
		$("div.mb-city1-data,div.mb-city2-data, div.mb-city3-data, div.mb-city4-data, div.mb-city5-data, div.mb-city6-data").hide();
		$("div.mb-township1-data, div.mb-township2-data, div.mb-township3-data, div.mb-township5-data,div.mb-township6-data,div.mb-hlaing-data, div.mb-township7-data, div.mb-township8-data, div.mb-township9-data, div.mb-township10-data, div.mb-township11-data, div.mb-township12-data, div.mb-township13-data, div.mb-township14-data, div.mb-township15-data, div.mb-township16-data, div.mb-township17-data, div.mb-township18-data, div.mb-township19-data, div.mb-township20-data,div.mb-township21-data").hide();
		$("div.mb-township4-data").show();
	});
	$("#mb-township5").click(function(){ 
		$("#township-stay").text("Kyauktada");
		$("div.mb-city1-data,div.mb-city2-data, div.mb-city3-data, div.mb-city4-data, div.mb-city5-data, div.mb-city6-data").hide();
		$("div.mb-township1-data, div.mb-township2-data, div.mb-township3-data, div.mb-township4-data,div.mb-township6-data,div.mb-hlaing-data, div.mb-township7-data, div.mb-township8-data, div.mb-township9-data, div.mb-township10-data, div.mb-township11-data, div.mb-township12-data, div.mb-township13-data, div.mb-township14-data, div.mb-township15-data, div.mb-township16-data, div.mb-township17-data, div.mb-township18-data, div.mb-township19-data, div.mb-township20-data,div.mb-township21-data").hide();
		$("div.mb-township5-data").show();
	});
	$("#mb-township6").click(function(){ 
		$("#township-stay").text("Kamayut");
		$("div.mb-city1-data,div.mb-city2-data, div.mb-city3-data, div.mb-city4-data, div.mb-city5-data, div.mb-city6-data").hide();
		$("div.mb-township1-data, div.mb-township2-data, div.mb-township3-data, div.mb-township4-data,div.mb-township5-data,div.mb-hlaing-data, div.mb-township7-data, div.mb-township8-data, div.mb-township9-data, div.mb-township10-data, div.mb-township11-data, div.mb-township12-data, div.mb-township13-data, div.mb-township14-data, div.mb-township15-data, div.mb-township16-data, div.mb-township17-data, div.mb-township18-data, div.mb-township19-data, div.mb-township20-data,div.mb-township21-data").hide();
		$("div.mb-township6-data").show();
	});
	$("#mb-hlaing").click(function(){ 
		$("#township-stay").text("Hlaing");
		$("div.mb-city1-data,div.mb-city2-data, div.mb-city3-data, div.mb-city4-data, div.mb-city5-data, div.mb-city6-data").hide();
		$("div.mb-township1-data, div.mb-township2-data, div.mb-township3-data, div.mb-township4-data,div.mb-township5-data,div.mb-township6-data,div.mb-township7-data, div.mb-township8-data, div.mb-township9-data, div.mb-township10-data, div.mb-township11-data, div.mb-township12-data, div.mb-township13-data, div.mb-township14-data, div.mb-township15-data, div.mb-township16-data, div.mb-township17-data, div.mb-township18-data, div.mb-township19-data, div.mb-township20-data,div.mb-township21-data").hide();
		$("div.mb-hlaing-data").show();
	});
	$("#mb-township7").click(function(){ 
		$("#township-stay").text("Mayangone");
		$("div.mb-city1-data,div.mb-city2-data, div.mb-city3-data, div.mb-city4-data, div.mb-city5-data, div.mb-city6-data").hide();
		$("div.mb-township1-data, div.mb-township2-data, div.mb-township3-data, div.mb-township4-data,div.mb-township5-data, div.mb-township6-data,div.mb-hlaing-data,div.mb-township8-data, div.mb-township9-data, div.mb-township10-data, div.mb-township11-data, div.mb-township12-data, div.mb-township13-data, div.mb-township14-data, div.mb-township15-data, div.mb-township16-data, div.mb-township17-data, div.mb-township18-data, div.mb-township19-data, div.mb-township20-data,div.mb-township21-data").hide();
		$("div.mb-township7-data").show();
	});
	$("#mb-township8").click(function(){ 
		$("#township-stay").text("Lanmadaw");
		$("div.mb-city1-data,div.mb-city2-data, div.mb-city3-data, div.mb-city4-data, div.mb-city5-data, div.mb-city6-data").hide();
		$("div.mb-township1-data, div.mb-township2-data, div.mb-township3-data, div.mb-township4-data,div.mb-township5-data, div.mb-township6-data,div.mb-hlaing-data,div.mb-township7-data, div.mb-township9-data, div.mb-township10-data, div.mb-township11-data, div.mb-township12-data, div.mb-township13-data, div.mb-township14-data, div.mb-township15-data, div.mb-township16-data, div.mb-township17-data, div.mb-township18-data, div.mb-township19-data, div.mb-township20-data,div.mb-township21-data").hide();
		$("div.mb-township8-data").show();
	});
	$("#mb-township9").click(function(){ 
		$("#township-stay").text("Thaketa");
		$("div.mb-city1-data,div.mb-city2-data, div.mb-city3-data, div.mb-city4-data, div.mb-city5-data, div.mb-city6-data").hide();
		$("div.mb-township1-data, div.mb-township2-data, div.mb-township3-data, div.mb-township4-data,div.mb-township5-data, div.mb-township6-data,div.mb-hlaing-data,div.mb-township7-data, div.mb-township8-data, div.mb-township10-data, div.mb-township11-data, div.mb-township12-data, div.mb-township13-data, div.mb-township14-data, div.mb-township15-data, div.mb-township16-data, div.mb-township17-data, div.mb-township18-data, div.mb-township19-data, div.mb-township20-data,div.mb-township21-data").hide();
		$("div.mb-township9-data").show();
	});
	$("#mb-township10").click(function(){ 
		$("#township-stay").text("Sanchaung");
		$("div.mb-city1-data,div.mb-city2-data, div.mb-city3-data, div.mb-city4-data, div.mb-city5-data, div.mb-city6-data").hide();
		$("div.mb-township1-data, div.mb-township2-data, div.mb-township3-data, div.mb-township4-data,div.mb-township5-data, div.mb-township6-data,div.mb-hlaing-data,div.mb-township7-data, div.mb-township8-data, div.mb-township9-data, div.mb-township11-data, div.mb-township12-data, div.mb-township13-data, div.mb-township14-data, div.mb-township15-data, div.mb-township16-data, div.mb-township17-data, div.mb-township18-data, div.mb-township19-data, div.mb-township20-data,div.mb-township21-data").hide();
		$("div.mb-township10-data").show();
	});
	$("#mb-township11").click(function(){ 
		$("#township-stay").text("Insein");
		$("div.mb-city1-data,div.mb-city2-data, div.mb-city3-data, div.mb-city4-data, div.mb-city5-data, div.mb-city6-data").hide();
		$("div.mb-township1-data, div.mb-township2-data, div.mb-township3-data, div.mb-township4-data,div.mb-township5-data, div.mb-township6-data,div.mb-hlaing-data,div.mb-township7-data, div.mb-township8-data, div.mb-township9-data, div.mb-township10-data, div.mb-township12-data, div.mb-township13-data, div.mb-township14-data, div.mb-township15-data, div.mb-township16-data, div.mb-township17-data, div.mb-township18-data, div.mb-township19-data, div.mb-township20-data,div.mb-township21-data").hide();
		$("div.mb-township11-data").show();
	});
	$("#mb-township12").click(function(){ 
		$("#township-stay").text("South Okklapa");
		$("div.mb-city1-data,div.mb-city2-data, div.mb-city3-data, div.mb-city4-data, div.mb-city5-data, div.mb-city6-data").hide();
		$("div.mb-township1-data, div.mb-township2-data, div.mb-township3-data, div.mb-township4-data,div.mb-township5-data, div.mb-township6-data,div.mb-hlaing-data,div.mb-township7-data, div.mb-township8-data, div.mb-township9-data, div.mb-township10-data, div.mb-township11-data, div.mb-township13-data, div.mb-township14-data, div.mb-township15-data, div.mb-township16-data, div.mb-township17-data, div.mb-township18-data, div.mb-township19-data, div.mb-township20-data,div.mb-township21-data").hide();
		$("div.mb-township12-data").show();
	});
	$("#mb-township13").click(function(){ 
		$("#township-stay").text("Dagon");
		$("div.mb-city1-data,div.mb-city2-data, div.mb-city3-data, div.mb-city4-data, div.mb-city5-data, div.mb-city6-data").hide();
		$("div.mb-township1-data, div.mb-township2-data, div.mb-township3-data, div.mb-township4-data,div.mb-township5-data, div.mb-township6-data,div.mb-hlaing-data,div.mb-township7-data, div.mb-township8-data, div.mb-township9-data, div.mb-township10-data, div.mb-township11-data, div.mb-township12-data, div.mb-township14-data, div.mb-township15-data, div.mb-township16-data, div.mb-township17-data, div.mb-township18-data, div.mb-township19-data, div.mb-township20-data,div.mb-township21-data").hide();
		$("div.mb-township13-data").show();
	});
	$("#mb-township14").click(function(){ 
		$("#township-stay").text("North Dagon");
		$("div.mb-city1-data,div.mb-city2-data, div.mb-city3-data, div.mb-city4-data, div.mb-city5-data, div.mb-city6-data").hide();
		$("div.mb-township1-data, div.mb-township2-data, div.mb-township3-data, div.mb-township4-data,div.mb-township5-data, div.mb-township6-data,div.mb-hlaing-data,div.mb-township7-data, div.mb-township8-data, div.mb-township9-data, div.mb-township10-data, div.mb-township11-data, div.mb-township12-data, div.mb-township13-data, div.mb-township15-data, div.mb-township16-data, div.mb-township17-data, div.mb-township18-data, div.mb-township19-data, div.mb-township20-data").hide();
		$("div.mb-township14-data").show();
	});
	$("#mb-township15").click(function(){ 
		$("#township-stay").text("South Dagon");
		$("div.mb-city1-data,div.mb-city2-data, div.mb-city3-data, div.mb-city4-data, div.mb-city5-data, div.mb-city6-data").hide();
		$("div.mb-township1-data, div.mb-township2-data, div.mb-township3-data, div.mb-township4-data,div.mb-township5-data, div.mb-township6-data,div.mb-hlaing-data,div.mb-township7-data, div.mb-township8-data, div.mb-township9-data, div.mb-township10-data, div.mb-township11-data, div.mb-township12-data, div.mb-township13-data, div.mb-township14-data, div.mb-township16-data, div.mb-township17-data, div.mb-township18-data, div.mb-township19-data, div.mb-township20-data,div.mb-township21-data").hide();
		$("div.mb-township15-data").show();
	});
	$("#mb-township16").click(function(){ 
		$("#township-stay").text("SitKae Kone");
		$("div.mb-city1-data,div.mb-city2-data, div.mb-city3-data, div.mb-city4-data, div.mb-city5-data, div.mb-city6-data").hide();
		$("div.mb-township1-data, div.mb-township2-data, div.mb-township3-data, div.mb-township4-data,div.mb-township5-data, div.mb-township6-data,div.mb-hlaing-data,div.mb-township7-data, div.mb-township8-data, div.mb-township9-data, div.mb-township10-data, div.mb-township11-data, div.mb-township12-data, div.mb-township13-data, div.mb-township14-data, div.mb-township15-data, div.mb-township17-data, div.mb-township18-data, div.mb-township19-data, div.mb-township20-data,div.mb-township21-data").hide();
		$("div.mb-township16-data").show();
	});
	$("#mb-township17").click(function(){ 
		$("#township-stay").text("ChanAye TharZan");
		$("div.mb-city1-data,div.mb-city2-data, div.mb-city3-data, div.mb-city4-data, div.mb-city5-data, div.mb-city6-data").hide();
		$("div.mb-township1-data, div.mb-township2-data, div.mb-township3-data, div.mb-township4-data,div.mb-township5-data, div.mb-township6-data,div.mb-hlaing-data,div.mb-township7-data, div.mb-township8-data, div.mb-township9-data, div.mb-township10-data, div.mb-township11-data, div.mb-township12-data, div.mb-township13-data, div.mb-township14-data, div.mb-township15-data, div.mb-township16-data, div.mb-township18-data, div.mb-township19-data, div.mb-township20-data,div.mb-township21-data").hide();
		$("div.mb-township17-data").show();
	});
	$("#mb-township18").click(function(){ 
		$("#township-stay").text("Oattarathiri");
		$("div.mb-city1-data,div.mb-city2-data, div.mb-city3-data, div.mb-city4-data, div.mb-city5-data, div.mb-city6-data").hide();
		$("div.mb-township1-data, div.mb-township2-data, div.mb-township3-data, div.mb-township4-data,div.mb-township5-data, div.mb-township6-data,div.mb-hlaing-data,div.mb-township7-data, div.mb-township8-data, div.mb-township9-data, div.mb-township10-data, div.mb-township11-data, div.mb-township12-data, div.mb-township13-data, div.mb-township14-data, div.mb-township15-data, div.mb-township16-data, div.mb-township17-data, div.mb-township19-data, div.mb-township20-data,div.mb-township21-data").hide();
		$("div.mb-township18-data").show();
	});
	$("#mb-township19").click(function(){ 
		$("#township-stay").text("Dadkhina Thiri");
		$("div.mb-city1-data,div.mb-city2-data, div.mb-city3-data, div.mb-city4-data, div.mb-city5-data, div.mb-city6-data").hide();
		$("div.mb-township1-data, div.mb-township2-data, div.mb-township3-data, div.mb-township4-data,div.mb-township5-data, div.mb-township6-data,div.mb-hlaing-data,div.mb-township7-data, div.mb-township8-data, div.mb-township9-data, div.mb-township10-data, div.mb-township11-data, div.mb-township12-data, div.mb-township13-data, div.mb-township14-data, div.mb-township15-data, div.mb-township16-data, div.mb-township17-data, div.mb-township18-data, div.mb-township20-data,div.mb-township21-data").hide();
		$("div.mb-township19-data").show();
	});
	$("#mb-township20").click(function(){ 
		$("#township-stay").text("ChanMya Tha Zi");
		$("div.mb-city1-data,div.mb-city2-data, div.mb-city3-data, div.mb-city4-data, div.mb-city5-data, div.mb-city6-data").hide();
		$("div.mb-township1-data, div.mb-township2-data, div.mb-township3-data, div.mb-township4-data,div.mb-township5-data, div.mb-township6-data,div.mb-hlaing-data,div.mb-township7-data, div.mb-township8-data, div.mb-township9-data, div.mb-township10-data, div.mb-township11-data, div.mb-township12-data, div.mb-township13-data, div.mb-township14-data, div.mb-township15-data, div.mb-township16-data, div.mb-township17-data, div.mb-township18-data, div.mb-township19-data,div.mb-township21-data").hide();
		$("div.mb-township20-data").show();
	});
	$("#mb-township21").click(function(){ 
		$("#township-stay").text("AungMyay Tha Zan");
		$("div.mb-city1-data,div.mb-city2-data, div.mb-city3-data, div.mb-city4-data, div.mb-city5-data, div.mb-city6-data").hide();
		$("div.mb-township1-data, div.mb-township2-data, div.mb-township3-data, div.mb-township4-data,div.mb-township5-data, div.mb-township6-data,div.mb-hlaing-data,div.mb-township7-data, div.mb-township8-data, div.mb-township9-data, div.mb-township10-data, div.mb-township11-data, div.mb-township12-data, div.mb-township13-data, div.mb-township14-data, div.mb-township15-data, div.mb-township16-data, div.mb-township17-data, div.mb-township18-data, div.mb-township19-data,div.mb-township20-data").hide();
		$("div.mb-township21-data").show();
	});
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

        /*if($(window).width() < 768 ){
			// grab the initial top offset of the navigation 
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
			}*/
                  
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
	        //var $parent = $(this).parent();
	        	if (!$(this).hasClass('active')) {
	            $(this).addClass('active');
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