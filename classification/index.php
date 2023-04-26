<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Check your blood pressure classification ">
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
<link rel="shortcut icon" href="www.ismybloodpressureok.com/assets/ico/favicon.png" />
<link rel="apple-touch-icon" href="www.ismybloodpressureok.com/assets/ico/favicon.png" />


    <title>Classification - IsMyBloodPressureOK.com</title>
    
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

	<!-- +++++ Projects Section +++++ -->
	
	<div class="container pt">
		<div class="row mt">
			<div class="col-lg-6 col-lg-offset-3 centered">
				<h3>Classification</h3>
				<hr>
				<p>These classification of blood pressure adopted by the American Heart Association for adults who are 18 years and older.</p>
			</div>
		</div>



	
	<!-- +++++ Information Section +++++ -->
	
	
		<div class="row mt centered" >	
			<div id='bp_class-1' class="bp_class col-lg-3" onClick="get_classification('Hypotension');">
							<h4>Hypotension Low blood pressure</h4>
				<span class="glyphicon glyphicon-book"></span>
				<p> A systolic blood pressure of less than 90 millimeters of mercury (mm Hg) or diastolic of less than 60 mm Hg is generally considered to be hypotension.</p>
			</div>
			
			<div id='bp_class-2' class="bp_class col-lg-3" onClick="get_classification('Desired');">
							<h4>Desired blood pressure</h4>
				<span class="glyphicon glyphicon-book"></span>
				<p>Normal blood pressure at rest is within the range of 100–140 millimeters mercury (mmHg) systolic and 60–90 mmHg diastolic.</p>
			</div>


			<div id='bp_class-3' class="bp_class col-lg-3" onClick="get_classification('Prehypertension');">
							<h4>Prehypertension High Normal</h4>
				<span class="glyphicon glyphicon-book"></span>
				<p>Prehypertension is blood pressure readings with a systolic pressure from 120 to 139 mm Hg or a diastolic pressure from 80 to 89 mm Hg.</p>
			</div>
			<div id='bp_class-4' class="bp_class col-lg-3" onClick="get_classification('Systolic');">
							<h4>Systolic Hypertension</h4>
				<span class="glyphicon glyphicon-book"></span>
				<p>If the systolic blood pressure is elevated above 140 with a normal below 90 diastolic blood pressure (DBP), it is called "isolated systolic hypertension"</p>
			</div>
		</div><!-- /row -->
		
		<div class="row mt centered">	
			<div id='bp_class-5' class="bp_class col-lg-3" onClick="get_classification('Stage1');">
							<h4>Stage 1 Hypertension</h4>
				<span class="glyphicon glyphicon-book"></span>
				<p>At hypertension stage 1 your systolic value is between 140 – 159 mmHg and your diastolic value is between 90 – 99 mmHg. </p>
			</div>
			
			<div id='bp_class-6' class="bp_class col-lg-3" onClick="get_classification('Stage2');">
							<h4>Stage 2 Hypertension</h4>
				<span class="glyphicon glyphicon-book"></span>
				<p>At hypertension stage 2 your systolic value is between 160 – 179 mmHg and your diastolic value is between 100 – 109 mmHg.</p>
			</div>

			<div id='bp_class-7' class="bp_class col-lg-3" onClick="get_classification('Hypertensive');">
							<h4>Hypertensive Emergency</h4>
				<span class="glyphicon glyphicon-book"></span>
				<p>Hypertensive emergency is when the systolic blood pressure is at least over 180 or diastolic over 120. </p>
			</div>
			


	<script>
		function _(x){
	return document.getElementById(x);
}

		
		function get_classification(string){
			
		window.location = "../classification/info.php?c="+string;

			
		}
		
		
		
		
		
		
	

	</script>
		
			
				
					
						
								
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
