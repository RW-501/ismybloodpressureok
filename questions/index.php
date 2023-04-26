<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Questions and answers about your blood pressure ">
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


    <title>Q&A - IsMyBloodPressureOK.com</title>
    
  <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="../assets/css/main.css" rel="stylesheet">
    <link href="indexCSS.css" rel="stylesheet">

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

<!-- +++++ Posts Lists +++++ -->
	<!-- +++++ First Post +++++ -->
	<div id="grey ask_question_container">
	    <div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
			
					<div id='ask_question_area'>
						<input type="text" id='ask_question_input' placeholder='Ask a question' name="question"><div id='ask_question_btn' onClick="open_user_info_box();">Post</div>
					</div>
					
				</div>

			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /grey -->



	
	<script>
					function _(x){
	return document.getElementById(x);
}

		function send_question(){
			
		var ask_question_input =  _("ask_question_input").value; 
		var EmailInput = _("user_email_input").value;
		var nameInput = _("user_name_input").value;

			
		//var EmailInput = 'test_email@yahoo.com';
		//var nameInput = 'Test Name';
			
			//alert(NameInput +" 1 "+ EmailInput +" 2 "+ subject +" 3 "+ textareaInput);
			
			if(ask_question_input && EmailInput && nameInput ){
				
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
if(EmailInput.match(mailformat))  
{  
 	
			var URL ="send_question.php";
  
	_("ask_question_btn").innerHTML = 'Sending...';
	var formdata = new FormData();
	formdata.append( "aq", ask_question_input );
	formdata.append( "ei", EmailInput );
	formdata.append( "ni", nameInput );
	var ajax = new XMLHttpRequest();
	ajax.open( "POST", URL );
	ajax.onreadystatechange = function() {
		if(ajax.readyState == 4 && ajax.status == 200) {
			var responses =  ajax.responseText;
				 responses = (responses.trim());
			//alert(responses);
			
			if(responses == "Sent"){
				
			_("ask_question_area").innerHTML = "Thank You, we recieved your question.";	
				
			}else{
				
			_("ask_question_area").innerHTML = responses;	

			}

			_("ask_question_area").style.textAlign = 'center';
			_("ask_question_area").style.fontSize = '20px';
			_("ask_question_area").style.fontWeight = 'bold';
			_("ask_question_area").style.display = 'block';
			
					var container = document.getElementById('user_info_container');
						container.style.visibility = 'hidden';
							 $(document).unbind('scroll'); 

				$("#questions_asked_area").load(location.href+" #questions_asked_area>*","");
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
 
 <div id='questions_asked_area'>
  	  		  	 
<?php
 $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/includes/db_Conx/db_MainConx.php";
   include($path);


	 
	
// Select the member from the  table
$sql = "SELECT * FROM QuestionsTable order by questionDate desc ";
$query = mysqli_query($db_conx, $sql);

// Now make sure that user exists in the table
$numrows = mysqli_num_rows($query);

if ($numrows > 0){


	while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
	$questionID = $row["questionID"];
	$questionText = $row["questionText"];
	$questionUserEmail = $row['questionUserEmail'];
	$questionAskedby = $row["questionAskedby"];
	$questionTopic = $row["questionTopic"];
	$questionUserID = $row["questionUserID"];
	$questionDate = $row["questionDate"];

$questionDate = format_dates($questionDate);


if ($rowNum == 0){
	
	echo"
	<!-- +++++ Posts Lists +++++ -->
	<!-- +++++ First Post +++++ -->
	<div id='grey' onClick=click_question('$questionID');>
	    <div class='container'>
			<div class='row'>
				<div class='col-lg-8 col-lg-offset-2'>
					<div class='questions' ><h3>$questionText</h3></div>
					<p><ba>$questionAskedby </ba><bd> $questionDate </bd></p>
				</div>

			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /grey -->
	";
	
			$rowNum = 1;
}else{
	
	echo"
	<!-- +++++ Second Post +++++ -->
	<div id='white' onClick=click_question('$questionID');>
	    <div class='container'>
			<div class='row'>
				<div class='col-lg-8 col-lg-offset-2'>
					<div class='questions'><h3>$questionText</h3></div>
					<p><ba>$questionAskedby </ba><bd> $questionDate </bd></p>
				</div>

			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /white -->
		";
	
			$rowNum = 0;
}
	
		
}
	
}
	
?>
	

 </div>

	
		</div><!-- /container -->

	<div id='user_info_container'>
		<div id='close_btn' class='btn btn-danger' onClick="close_user_info_box();">X</div>			
				  <div id='group' class='form-group'>
		
		<input type="text" id='user_name_input' class='form-control' placeholder='Name' >

		<input type="text" id='user_email_input' class='form-control' placeholder='Email' >
		<div id='user_info_btn' class='btn btn-success' onClick="send_question();">Post</div>			
		
		</div>
	</div>

	
	<script>
		
		function open_user_info_box(){

							//  alert(string);
		var container = document.getElementById('user_info_container');

		
								container.style.visibility = 'visible';
				
				
				$('body').css({'overflow':'hidden'});
 
		}
		
		
		function close_user_info_box(){

							//  alert(string);
					var container = document.getElementById('user_info_container');
						container.style.visibility = 'hidden';
							 $(document).unbind('scroll'); 

		}
		
				

		
		

		function click_question(string){
			
		
		window.location = "../question/index.php?q="+string;


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
