<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../assets/ico/favicon.png">

    <title>Questions Reply - IsMyBloodPressureOK.com</title>
    
  <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="../assets/css/main.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="../assets/js/hover.zoom.js"></script>
    <script src="../assets/js/hover.zoom.conf.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <link href="indexCSS.css" rel="stylesheet">

      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Static navbar -->
	<?php
	
	$path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/includes/header.php";
   include($path); 

?>


	
	<!-- +++++ Post +++++ -->
	<div id="white">
	    <div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
				
				
				
						  	 
<?php
			 $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/includes/db_Conx/db_MainConx.php";
   include($path);
				
	$Remedy = preg_replace('#[^0-9]#i', '', $_GET['r']);
	$BloodPressure = preg_replace('#[^a-z]#i', '', $_GET['bp']);
	

	if($BloodPressure == "L"){
	echo"Low Blood Pressure Remedy";
// Select the member from the  table
$sql = "SELECT * FROM LowBPremedies where lowBPremediesID = $Remedy ";
$query = mysqli_query($db_conx, $sql);

// Now make sure that user exists in the table
$numrows = mysqli_num_rows($query);

if ($numrows > 0){

	while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
	$lowBPremediesID = $row["lowBPremediesID"];
	$lowBPremediesText = $row["lowBPremediesText"];
	$lowBPremediesDate = $row['lowBPremediesDate'];
	$lowBPremediesHelpful = $row["lowBPremediesHelpful"];
	$lowBPremediesNotHelpful = $row["lowBPremediesNotHelpful"];
	$lowBPremediesPosted = $row["lowBPremediesPosted"];
	$lowBPremediesVideoLink = $row["lowBPremediesVideoLink"];
	$lowBPremediesTopic = $row["lowBPremediesTopic"];
		$lowBPremediesDate = format_dates($lowBPremediesDate);

}
}		

		if (strpos($lowBPremediesVideoLink, '-') !== false) {
		$lowBPremediesVideoLink = strstr($lowBPremediesVideoLink, '-');
}else{
	$lowBPremediesVideoLink = strstr($lowBPremediesVideoLink, '=');
}
			$lowBPremediesVideoLink = preg_replace('/[^A-Za-z0-9\-]/', '', $lowBPremediesVideoLink); // Removes special chars.

		
		echo"
				<div class='row mt'>
			<div class='col-lg-6 col-lg-offset-3 centered'>
				<h3>$lowBPremediesTopic</h3>
				<hr>
				<p>$lowBPremediesText</p>
			</div>
		</div>
		
		<center>
			<p>
  <iframe src='https://www.youtube.com/embed/$lowBPremediesVideoLink'
   width='560' height='315' frameborder='0' allowfullscreen></iframe>
	   </p>
	</center>
			<hr>
			<bd>$lowBPremediesDate</bd>		
			<br>
			
			<div class='col-lg-6 col-lg-offset-3 centered'>
			<strong>Was This Helpful?</strong>

				<div class='row mt'>
			<div id='post_btn_yes' type='button' class='btn btn-success' onClick=helpful_Yes('$lowBPremediesID');>Yes</div>&nbsp; 
			<strong> $lowBPremediesHelpful</strong>&nbsp; &nbsp; &nbsp; &nbsp; 
			<div id='post_btn_no' type='button' class='btn btn-danger' onClick=helpful_No('$lowBPremediesID');>No</div>&nbsp; 
			<strong> $lowBPremediesNotHelpful</strong>
				</div>
				</div>
				<div class='row mt'>
				</div>






			<br>
			<br>
			<br>

		";
		
		
		
		
	}else{
	echo"High Blood Pressure Remedy";
// Select the member from the  table
$sql = "SELECT * FROM HighBPremedies where highBPremediesID = $Remedy ";
$query = mysqli_query($db_conx, $sql);

// Now make sure that user exists in the table
$numrows = mysqli_num_rows($query);

if ($numrows > 0){

	while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
	$highBPremediesID = $row["highBPremediesID"];
	$highBPremediesText = $row["highBPremediesText"];
	$highBPremediesDate = $row['highBPremediesDate'];
	$highBPremediesHelpful = $row["highBPremediesHelpful"];
	$highBPremediesNotHelpful = $row["highBPremediesNotHelpful"];
	$highBPremediesPosted = $row["highBPremediesPosted"];
	$highBPremediesVideoLink = $row["highBPremediesVideoLink"];
	$highBPremediesTopic = $row["highBPremediesTopic"];
		$highBPremediesDate = format_dates($highBPremediesDate);

}
}	
		
if (strpos($highBPremediesVideoLink, '-') !== false) {
		$highBPremediesVideoLink = strstr($highBPremediesVideoLink, '-');
}else{
	$highBPremediesVideoLink = strstr($highBPremediesVideoLink, '=');
}
		$highBPremediesVideoLink = preg_replace('/[^A-Za-z0-9\-]/', '', $highBPremediesVideoLink); // Removes special chars.
		echo"
				<div class='row mt'>
			<div class='col-lg-6 col-lg-offset-3 centered'>
				<h3>$highBPremediesTopic</h3>
				<hr>
				<p>$highBPremediesText</p>
			</div>
		</div>
		
		<center>
  <iframe src='https://www.youtube.com/embed/$highBPremediesVideoLink'
   width='560' height='315' frameborder='0' allowfullscreen></iframe>
	</center>
			<hr>
			<bd>$highBPremediesDate</bd>		
			<br>
			
			<div class='col-lg-6 col-lg-offset-3 centered'>
			<div id='helful_q'><strong>Was This Helpful?</strong></div>

				<div class='row mt'>
			<div id='post_btn_yes' type='button' class='btn btn-success' onClick=helpful_Yes('$highBPremediesID');> Yes</div>&nbsp; 
			<strong> $highBPremediesHelpful</strong>&nbsp; &nbsp; &nbsp; &nbsp; 
			<div id='post_btn_no' type='button' class='btn btn-danger' onClick=helpful_No('$highBPremediesID');>No</div>&nbsp; 
			<strong> $highBPremediesNotHelpful</strong>
				</div>
				</div>
				<div class='row mt'>
				</div>






			<br>
			<br>
			<br>

		";
		
		
	}				

	?>

					         
				  
				
				
					
					<br>
					<p><bt>TAGS: <a href="https://www.ismybloodpressureok.com/classification/">Classification</a> - <a href="https://www.ismybloodpressureok.com/classification/info.php?c=Hypotension">Low blood pressure</a>
 - <a href="https://www.ismybloodpressureok.com/classification/info.php?c=Systolic">Isolated Systolic Hypertension</a></bt>
									</p>
					
					<hr>
					<p><a href="../remedies"># Back</a></p>
				</div>

			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /white -->
	
	
	
	
	<script>
					function _(x){
	return document.getElementById(x);
}		
		function $_GET(param) {
	var vars = {};
	window.location.href.replace( location.hash, '' ).replace( 
		/[?&]+([^=&]+)=?([^&]*)?/gi, // regexp
		function( m, key, value ) { // callback
			vars[key] = value !== undefined ? value : '';
		}
	);

	if ( param ) {
		return vars[param] ? vars[param] : null;	
	}
	return vars;
}
		
		
		var bp_type = $_GET('bp');
		//alert(bp_type);

			
		function helpful_Yes(string){

			var URL ="send_helpful_yes.php";
  
	_("post_btn_yes").innerHTML = 'ok';
	var formdata = new FormData();
	formdata.append( "bp", bp_type );
	formdata.append( "ID", string );
	var ajax = new XMLHttpRequest();
	ajax.open( "POST", URL );
	ajax.onreadystatechange = function() {
		if(ajax.readyState == 4 && ajax.status == 200) {
			var responses =  ajax.responseText;
				// responses = (responses.trim());
			//alert(responses);
			
			if(responses == "sent"){
				
$("#white").load(location.href+" #white>*","");
				
	_("post_btn_yes").disabled = true;
	_("post_btn_no").disabled = true;			
				
			}else{
				

			}

		}
		
	}
	ajax.send( formdata );
	
			
			
		}
				
		
				
				
				
				
				
				
				

		function helpful_No(string){

			var URL ="send_helpful_no.php";
  
	_("post_btn_no").innerHTML = 'ok';
	var formdata = new FormData();
	formdata.append( "bp", bp_type );
	formdata.append( "ID", string );
	var ajax = new XMLHttpRequest();
	ajax.open( "POST", URL );
	ajax.onreadystatechange = function() {
		if(ajax.readyState == 4 && ajax.status == 200) {
			var responses =  ajax.responseText;
				// responses = (responses.trim());
			//alert(responses);
			
			if(responses == "sent"){
				
$("#white").load(location.href+" #white>*","");

				
	_("post_btn_yes").disabled = true;
	_("post_btn_no").disabled = true;			
				
			}else{
				

			}

		}
		
	}
	ajax.send( formdata );
	
			
			
		}
			
	  </script>
	
	
	
	
	
	
	
	
	

	
	<!-- +++++ Footer Section +++++ -->
	
	<?php
	
	$path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/includes/footer.php";
   include($path); 

?>
	
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
        <script src="../assets/js/bootstrap.min.js"></script>
  </body>
</html>
