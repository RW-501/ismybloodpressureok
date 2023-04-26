<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
<link rel='icon' href='https://www.ismybloodpressureok.com/assets/ico/favicon.png' type='image/png' sizes='16x16'>
<link rel="shortcut icon" href="https://www.ismybloodpressureok.com/assets/ico/favicon.png" />
<link rel="apple-touch-icon" href="https://www.ismybloodpressureok.com/assets/ico/favicon.png" />
	  

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Welcome to IsMyBloodPressureOK.com. Your Free to use blood pressure checker ">
    <meta name="author" content="">

<meta name='Distribution' content='Global' />
<meta name='keywords' content='Blood pressure Classification, Blood Pressure Hypertension, Blood Pressure Remedies, Blood Pressure Prehypertension' />

<meta name='Rating' content='General' />

<meta name='Robots' content='INDEX,FOLLOW' />
<meta name='robots' CONTENT='all'>
<meta name='Revisit-after' content='1 Day' />
<meta name='copyright' content='ismybloodpressureok.com'>  
<meta name='googlebot' content='noarchive'>
<meta name='googlebot' content='INDEX,FOLLOW'>
<meta name='language' content='English'> 
<meta name='reply-to' content='www.ismybloodpressureok.com/contact/'>
<meta name='robots' content='noydir'>
<meta name='generator' content='Macromedia Dreamweaver'>


    <title>Is My Blood Pressure Ok?</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="index/indexCSS.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/hover.zoom.js"></script>
    <script src="assets/js/hover.zoom.conf.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    
    
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-2001518155292747",
    enable_page_level_ads: true
  });
</script>
 
 
 
 
  </head>

  <body>

    <!-- Static navbar -->
	
	<?php
	
	$path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/includes/header.php";
   include($path); 

?>

	<!-- +++++ Welcome Section +++++ -->
	<div id="ww">
	    <div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 centered">
									<h1>Is My Blood Pressure Ok?</h1>

				<div id='check_bp_container'>
					<div id='check_bp_container_top'>
						<div class='check_bp_text_input_areas'>
							<div class='check_bp_text_areas'>
							Systole "top number":
						</div>
						<input id='check_bp_systole_input_areas' class='bp_inputs' type="text" name="Systole" placeholder="top number">
						</div>
						
						<div class='check_bp_text_input_areas'>
							<div class='check_bp_text_areas'>
							Diastole "bottom number":
						</div>
						<input id='check_bp_diastole_input_areas' class='bp_inputs' type="text" name="Diastole" placeholder="bottom number">
						</div>						
					</div>
					
					
					
					<div id='check_bp_container_bottom'>
						<div id='check_bp_bt' onClick="check_values();">Check It</div>
					</div>
					
				</div>
				<br>
				<div id='bp_results'></div>
				
				<div id='bp_results_text'></div>
				
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

	<script>
					function _(x){
	return document.getElementById(x);
}

		
		
		function check_values(){
			
		var systole_input =  _("check_bp_systole_input_areas").value; 
		var diastole_input =  _("check_bp_diastole_input_areas").value; 

		if(systole_input && diastole_input ){

			var BP_type, BP_message, readmore_link, BP_results;
			
 
			var systole_input = Number(systole_input);
			 var diastole_input = Number(diastole_input);
			 var s = Number(systole_input);
			 var d = Number(diastole_input);
			
			
			if(systole_input >= '90' && systole_input <= '120' ||
			   diastole_input >= '60' && diastole_input <= '80' ){
				BP_type = 'Desired "Blood Pressure"';
				readmore_link = "<a href='../classification/info.php?c=Desired'>Read more about "+BP_type+"...</a>";
			}
			if(systole_input >= '120' && systole_input <= '139' ||
			   diastole_input >= '80' && diastole_input <= '89' ){
				BP_type = 'Prehypertension "High Normal"';
				readmore_link = "<a href='../classification/info.php?c=Prehypertension'>Read more about "+BP_type+"...</a>";
			}
			
			// High BP
			if(systole_input >= '140' && diastole_input >= '90' ){
				BP_type = 'Isolated Systolic Hypertension';
				readmore_link = "<a href='../classification/info.php?c=Systolic'>Read more about "+BP_type+"...</a>";
			}
			
			if(systole_input >= '140' && systole_input <= '159' ||
			   diastole_input >= '90' && diastole_input <= '99' ){
				BP_type = 'Stage 1 Hypertension';
				readmore_link = "<a href='../classification/info.php?c=Stage1'>Read more about "+BP_type+"...</a>";
			}
			if(systole_input >= '160' && systole_input <= '179' ||
			   diastole_input >= '100' && diastole_input <= '119' ){
				BP_type = 'Stage 2 Hypertension';
				readmore_link = "<a href='../classification/info.php?c=Stage2'>Read more about "+BP_type+"...</a>";
			}
			
			var result_link, result_type; 

			if(systole_input < '90' || diastole_input < '60' ){
				BP_results = 'Low';
				result_type= 'Low blood pressure';
				result_link = "<a href='../classification/info.php?c=Hypotension'>Check out more info here "+result_type+"...</a>";
			}		
			if(systole_input >= '90' && systole_input <= '120' ||
			   diastole_input >= '60' && diastole_input <= '120' ){
				BP_results = 'OK';
				result_link = "<a href='../remedies'>Check out remdies and drop some advise to others </a>";
			}				
			if(systole_input > '180' || diastole_input > '120' ){
				BP_results = 'High';
				result_type= 'High blood pressure';
				result_link = "<a href='../classification/info.php?c=Hypertensive'>Check out more info here about "+result_type+"...</a>";
			}
						
			
			
			
			
			var ms1, ms2, ms3;
			ms1 = '<h1>Your Blood Pressure is <strong>'+BP_results + "</strong></h1><br>";
			ms2 = 'With a Systole '+ s+' and a Diastole of '+ d ;
			if(BP_results == "Low"){
				ms3 = ' your blood pressure is '+BP_results + '<br>'+ result_link;
			} 
			if(BP_results == "High"){
				ms3 = ' your blood pressure is '+BP_results + '<br>'+ result_link;
			} 
			if(BP_results == "OK"){
				ms3 = 'your blood pressure is '+BP_results +"!!!" + '<br>'+ result_link;
			} 
			
			BP_message = ms1 + ms2 + ' <br><h4>'+ ms3 + '<h4> <hr><br>'+ BP_type;
			
			var chart = new CanvasJS.Chart("bp_results", {
	animationEnabled: true,
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	title:{
		text: BP_type
	},
	axisY: {
		title: "Classification as diagram"
	},
	data: [{        
		type: "column",  
		showInLegend: false, 
		legendMarkerColor: "grey",
		legendText: " s " + systole_input + " D " + diastole_input,
		dataPoints: [      
			{ y: s,  label: "Systole value" },
			{ y: d,  label: "Diastole value" }
		]
	}]
});
chart.render();
			
			_('check_bp_container').style.display="none";
			
			_('bp_results').style.display="block";
			_('bp_results').style.height= "50%";
			_('bp_results').style.width= "100%";

			_('bp_results').style.paddingBottom= "55%";
			
			_('bp_results_text').innerHTML= BP_message;				
							
							
				}
			

		}
		

	</script>
				
				
				
				</div><!-- /col-lg-8 -->
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /ww -->
	
	
	<?php
	  /*
	<!-- +++++ Projects Section +++++ -->
	
	<div class="container pt">
		<div class="row mt centered">	
			<div class="col-lg-4">
				<a class="zoom green" href="work01.html"><img class="img-responsive" src="assets/img/portfolio/port01.jpg" alt="" /></a>
				<p>APE</p>
			</div>

		</div><!-- /row -->
		<div class="row mt centered">	
			<div class="col-lg-4">
				<a class="zoom green" href="work01.html"><img class="img-responsive" src="assets/img/portfolio/port04.jpg" alt="" /></a>
				<p>YODA</p>
			</div>

		</div><!-- /row -->
	</div><!-- /container -->
	
	*/
	  ?>

	
	

	<!-- +++++ Footer Section +++++ -->
	
	<?php
	
	$path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/includes/footer.php";
   include($path); 

?>
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
