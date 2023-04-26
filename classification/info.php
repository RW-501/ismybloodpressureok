<!DOCTYPE html>
<?php
	$c = preg_replace('#[^a-z0-9]#i', '', $_GET['c']);


?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../assets/ico/favicon.png">

    <title><?php echo $c; ?> - IsMyBloodPressureOK.com</title>

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

	  	  		  	 
<?php
 $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/includes/db_Conx/db_MainConx.php";
   include($path);


	
// Select the member from the  table
$sql = "SELECT * FROM ClassificationTable Where classificationCode = '$c' ";
$query = mysqli_query($db_conx, $sql);

// Now make sure that user exists in the table
$numrows = mysqli_num_rows($query);

	  
if ($numrows > 0){

	while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
	$classificationName = $row["classificationName"];
	$classificationStortDescription = $row["classificationStortDescription"];
	$classificationDescription = $row["classificationDescription"];

	$classificationTreatment = $row["classificationTreatment"];
	$classificationCauses = $row["classificationCauses"];
	$classificationAbout = $row["classificationAbout"];
	$classificationSigns = $row["classificationSigns"];


}
	
}
	
?>
	
	
		<!-- +++++ Projects Section +++++ -->
	
	<div class="container pt">
		<div class="row mt">
			<div class="col-lg-6 col-lg-offset-3 centered">
				<h3><?php echo $classificationName; ?></h3>
				<hr>
				<p><?php echo $classificationStortDescription; ?></p>
			</div>
		</div>

	
			<div class="row mt">
			<div class="col-lg-6">
				<h4>About <?php echo $classificationName; ?></h4>
				<p><?php echo $classificationAbout; ?></p>
			</div><!-- /colg-lg-6 -->
			
			<div class="col-lg-6">
				<h4><?php echo $classificationName; ?> Causes</h4>
				<p><?php echo $classificationCauses; ?></p>
			</div><!-- /col-lg-6 -->
		</div><!-- /row -->
		
		
					<div class="row mt">
			<div class="col-lg-6">
				<h4><?php echo $classificationName; ?> Signs</h4>
				<p><?php echo $classificationSigns; ?></p>
			</div><!-- /colg-lg-6 -->
			
			<div class="col-lg-6">
				<h4><?php echo $classificationName; ?> Treatments</h4>
				<p><?php echo $classificationTreatment; ?></p>
			</div><!-- /col-lg-6 -->
		</div><!-- /row -->
		
		
		
		
	</div><!-- /container -->
	
	
	
	
	
	
	
	
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
