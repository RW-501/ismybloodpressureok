<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../assets/ico/favicon.png">

    <title>Submit Remedy - IsMyBloodPressureOK.com</title>

     <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="../assets/css/main.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
 <!--   <script src="../assets/js/hover.zoom.js"></script>
    <script src="../assets/js/hover.zoom.conf.js"></script>

     HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
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

	
	
	<!-- +++++ Contact Section +++++ -->
	
	<div  class="container pt">
		<div class="row mt">
			<div class="col-lg-6 col-lg-offset-3 centered">
				<h3>Submit</h3>
				<hr>
				<div id='bp_text'> 
   <?php
			      	$Remedy = preg_replace('#[^a-z]#i', '', $_GET['r']);
	
					  if($Remedy == "High"){
						  echo"<p>High Blood Pressure Remedy</p> ";
					  }else{
						  echo"<p>Low Blood Pressure Remedy</p> ";
					  } ?>
				  				</div>
					  				
</div>
			<div id='contact_form' class="col-lg-8 col-lg-offset-2">
				<form role="form">

				  <div class="form-group">
			      <select class="form-control" id="subject" onChange="opion_changed();">
			     <?php
			      	$Remedy = preg_replace('#[^a-z]#i', '', $_GET['r']);
	
					  if($Remedy == "High"){
						  echo"
    <option value='lBPremedy'>Low Blood Pressure Remedy</option>
    <option value='hBPremedy' selected>High Blood Pressure Remedy</option> ";
						  
					  }else{
						  echo"
    <option value='lBPremedy' selected>Low Blood Pressure Remedy</option>
    <option value='hBPremedy'>High Blood Pressure Remedy</option> ";
						  						  
					  }

					  ?>

			      </select>
				    <br>
				  </div>
			        <div class="form-group">
				    <input type="name" class="form-control" id="remedyTopic" placeholder="Remedy Topic">
				    <br>
				  </div>
			    
				    <div class="form-group">
				    <input type="name" class="form-control" id="videoLink" placeholder="Video Link Optional">
				    <br>
				  </div>
				  
				  <textarea id="textareaInput" class="form-control" rows="6" placeholder="Enter your text here"></textarea>
				    <br>
				  <div id="submit_btn" type="submit" class="btn btn-success" onClick="send_remedy();">SUBMIT</div>
				</form>    			
			</div>
		</div><!-- /row -->
	</div><!-- /container -->
	
	
	
	
	<script>
					function _(x){
	return document.getElementById(x);
}

		function opion_changed(){
			//alert('change');
			var subject = _("subject").value;
			var bp_text = _('bp_text');
			if(subject ==  "hBPremedy"){
				bp_text.innerHTML = "<p>High Blood Pressure Remedy</p>";
			}else{
				bp_text.innerHTML = "<p>Low Blood Pressure Remedy</p>";
				
			}
			
		}
		
		function send_remedy(){
			


		var subject = _("subject").value;
		var videoLink =  _("videoLink").value; 
		var textareaInput = _("textareaInput").value;
		var remedyTopic = _("remedyTopic").value;
			
			
			//alert(NameInput +" 1 "+ EmailInput +" 2 "+ subject +" 3 "+ textareaInput);

			
			if(subject && textareaInput && remedyTopic){
				

 	
			var URL ="send_remedy.php";
  
	_("submit_btn").innerHTML = 'Sending...';
	var formdata = new FormData();
	formdata.append( "vl", videoLink );
	formdata.append( "si", subject );
	formdata.append( "ti", textareaInput );
	formdata.append( "rt", remedyTopic );
	var ajax = new XMLHttpRequest();
	ajax.open( "POST", URL );
	ajax.onreadystatechange = function() {
		if(ajax.readyState == 4 && ajax.status == 200) {
			var responses =  ajax.responseText;
				 responses = (responses.trim());
			//alert(responses);
			
			if(responses == "sent"){
				
				_("contact_form").innerHTML = "Thank You";	
				
			}else{
				
			_("contact_form").innerHTML = responses;	

			}

			_("contact_form").style.textAlign = 'center';
			_("contact_form").style.fontSize = '20px';
			_("contact_form").style.fontWeight = 'bold';
			
				//$("#l_s_p_s_a_insides").load(location.href+" #l_s_p_s_a_insides>*","");
		}
		
	}
	ajax.send( formdata );
			

				
			}else{
				alert('Please Fill Out All Fields');
			}
			
			
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
