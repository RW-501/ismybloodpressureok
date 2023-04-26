<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Share your remedy for helping your blood pressure ">
    <meta name="author" content="">

<meta name='Distribution' content='Global' />

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

<link rel='icon' href='https://www.ismybloodpressureok.com/assets/ico/favicon.png' type='image/png' sizes='16x16'>
<link rel="shortcut icon" href="https://www.ismybloodpressureok.com/assets/ico/favicon.png" />
<link rel="apple-touch-icon" href="https://www.ismybloodpressureok.com/assets/ico/favicon.png" />


    <title>Remedies - IsMyBloodPressureOK.com</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="../assets/css/main.css" rel="stylesheet">

        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="../assets/js/hover.zoom.js"></script>
    <script src="../assets/js/hover.zoom.conf.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
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

	
	
	
	<!-- +++++ Information Section +++++ -->
	
	<div class="container pt">	
			<div class="row mt">
			<div class="col-lg-6">
				<h3>Low Blood Pressure Remedies</h3>
				<hr>
				
					  		  	 
<?php
 $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/includes/db_Conx/db_MainConx.php";
   include($path);


	
// Select the member from the  table
$sql = "SELECT * FROM LowBPremedies order by lowBPremediesDate desc ";
$query = mysqli_query($db_conx, $sql);

// Now make sure that user exists in the table
$numrows = mysqli_num_rows($query);

if ($numrows > 0){

	while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
	$lowBPremediesID = $row["lowBPremediesID"];
	$lowBPremediesText = $row["lowBPremediesText"];
	$lowBPremediesHelpful = $row['lowBPremediesHelpful'];
	$lowBPremediesNotHelpful = $row["lowBPremediesNotHelpful"];
	$lowBPremediesPosted = $row["lowBPremediesPosted"];
	$lowBPremediesTopic = $row["lowBPremediesTopic"];

					echo"	<div id='grey'>
<div class='remedies' onClick=viewLBPRemedy('$lowBPremediesID');><h4>$lowBPremediesTopic</h4></div>
</div>";

}
	
}
	
?>
				<hr>
				<div onClick=submitLBPRemedy();><ba>Submit Low Blood Pressure Remedy</ba></div>

			</div><!-- /colg-lg-6 -->
			
		<div class="col-lg-6">
				<h3>High Blood Pressure Remedies</h3>
				<hr>

<?php
				
// Select the member from the  table
$sql = "SELECT * FROM HighBPremedies order by highBPremediesDate desc ";
$query = mysqli_query($db_conx, $sql);

// Now make sure that user exists in the table
$numrows = mysqli_num_rows($query);

if ($numrows > 0){

	while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
	$highBPremediesID = $row["highBPremediesID"];
	$highBPremediesText = $row["highBPremediesText"];
	$highBPremediesHelpful = $row['highBPremediesHelpful'];
	$highBPremediesNotHelpful = $row["highBPremediesNotHelpful"];
	$highBPremediesPosted = $row["highBPremediesPosted"];
	$highBPremediesTopic = $row["highBPremediesTopic"];
		
					echo"	<div id='grey'>
<div class='remedies' onClick=viewHBPRemedy('$highBPremediesID');><h4>$highBPremediesTopic</h4></div>
</div>";


}
	
}
	
?>
				<hr>
				<div onClick=submitHBPRemedy();><ba>Submit High Blood Pressure Remedy</ba></div>
			
			
			</div><!-- /colg-lg-6 -->
		</div><!-- /row -->
	
		</div><!-- /container -->

	
	
	
	
	
	
	
	
	
		
	<script>

		function viewHBPRemedy(string){
			
		window.location = "../remedies/view.php?bp=H&r="+string;

		}
		
		function viewLBPRemedy(string){
			
		window.location = "../remedies/view.php?bp=L&r="+string;

		}		
		
		
		function submitHBPRemedy(){
			
		window.location = "../remedies/submit.php?r=High";

		}
		
		function submitLBPRemedy(){
			
		window.location = "../remedies/submit.php?r=Low";

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
