<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Contact us if you have any question concerning the website ">
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


    <title>Contact Us - IsMyBloodPressureOK.com</title>

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

	
	
	<!-- +++++ Contact Section +++++ -->
	
	<div  class="container pt">
		<div class="row mt">
			<div class="col-lg-6 col-lg-offset-3 centered">
				<h3>CONTACT US</h3>
				<hr>
				<p>For any suggestions, inquiries, or to report content, contact us below.</p>
				 <strong>DISCLAIMER</strong>
				 <p>The Content is not intended to be a substitute for professional medical advice, diagnosis, or treatment. Always seek the advice of your physician or other qualified health provider with any questions you may have regarding a medical condition. </p>
IsMyBloodPressureOk.com
			</div>
		</div>
		<div class="row mt">	
			<div id='contact_form' class="col-lg-8 col-lg-offset-2">
				<form role="form">
				  <div class="form-group">
				    <input type="name" class="form-control" id="NameInput" placeholder="Your Name">
				    <br>
				  </div>
				  <div class="form-group">
				    <input type="email" class="form-control" id="EmailInput" placeholder="Enter email">
				    <br>
				  </div>
				  <div class="form-group">
			      <select class="form-control" id="subject">
    <option value="Suggestions">Suggestions</option>
    <option value="Inquiries">Inquiries</option>
    <option value="Report Content">Report Content</option>
    <option value="Other">Other</option>
  </select>
				    <br>
				  </div>
				  <textarea id="textareaInput" class="form-control" rows="6" placeholder="Enter your text here"></textarea>
				    <br>
				  <button id="submit_btn" type="submit" class="btn btn-success" onClick="send_info();">SUBMIT</button>
				</form>    			
			</div>
		</div><!-- /row -->
	</div><!-- /container -->
	
	
	
	
	<script>
					function _(x){
	return document.getElementById(x);
}

		function send_info(){
			


		var NameInput =  _("NameInput").value; 
		var EmailInput = _("EmailInput").value;
		var subject = _("subject").value;
		var textareaInput = _("textareaInput").value;
			
			
			//alert(NameInput +" 1 "+ EmailInput +" 2 "+ subject +" 3 "+ textareaInput);

			
			if(NameInput && EmailInput && subject && textareaInput){
				
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
if(EmailInput.match(mailformat))  
{  
 	
			var URL ="send_info.php";
  
	_("submit_btn").innerHTML = 'Sending...';
	var formdata = new FormData();
	formdata.append( "ni", NameInput );
	formdata.append( "ei", EmailInput );
	formdata.append( "si", subject );
	formdata.append( "ti", textareaInput );
	var ajax = new XMLHttpRequest();
	ajax.open( "POST", URL );
	ajax.onreadystatechange = function() {
		if(ajax.readyState == 4 && ajax.status == 200) {
			var responses =  ajax.responseText;
				// responses = (responses.trim());
			alert(responses);
			
			if(responses == "sent"){
				
				_("contact_form").innerHTML = "Thank You "+NameInput+", we will contact you soon.";	
				
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

	alert("You have entered an invalid email address!");  
			}
				
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
