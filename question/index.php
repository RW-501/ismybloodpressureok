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


	
	<!-- +++++ Post +++++ -->
	<div id="white">
	    <div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
				
				
				
						  	 
<?php
 $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/includes/db_Conx/db_MainConx.php";
   include($path);

	$questionID = preg_replace('#[^0-9]#i', '', $_GET['q']);
	
// Select the member from the  table
$sql = "SELECT * FROM QuestionsTable where questionID = $questionID ";
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

	echo"
						<p><ba>$questionAskedby </ba> <bd> $questionDate </bd></p>
						
					<div class='questions' ><h1>$questionText</h1></div>
					
					
	";
		
}
}
	
					
		echo"
		<div id='comment_area' class='row mt'>	
		";
					
	
// Select the member from the  table
$sql = "SELECT * FROM CommentTable where commentQuestionID = $questionID order by commentDate asc";
$query = mysqli_query($db_conx, $sql);

// Now make sure that user exists in the table
$numrows = mysqli_num_rows($query);

if ($numrows > 0){

	while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
	$commentID = $row["commentID"];
	$commentDate = $row["commentDate"];
	$commentText = $row['commentText'];
	$commentUserID = $row["commentUserID"];
	$commentUserEmail = $row["commentUserEmail"];
	$commentUserName = $row["commentUserName"];
		
$commentDate = format_dates($commentDate);

	echo"
						<p><ba>$commentUserName</ba> -<bd>$commentDate </bd><br>		
					$commentText
					<div id='rb_$commentID' class='comment' onClick=reply_comment('$commentID');><h4>Reply</h4></div>
					<div id='ra_$commentID'></div>
					</p>
	
					
	";

							
// Select the member from the  table
$sql2 = "SELECT * FROM ReplyTable where replyCommentID = $commentID order by replyDate desc";
$query2 = mysqli_query($db_conx, $sql2);

// Now make sure that user exists in the table
$numrows2 = mysqli_num_rows($query2);


if ($numrows2 > 0){

	while ($row2 = mysqli_fetch_array($query2, MYSQLI_ASSOC)) {
	$replyID = $row2["replyID"];
	$replyDate = $row2["replyDate"];
	$replyText = $row2['replyText'];
	$replyUserID = $row2["replyUserID"];
	$replyUserName = $row2["replyUserName"];
	$replyUserEmail = $row2["replyUserEmail"];
$replyDate = format_dates($replyDate);

	echo"
	<div class='replys'> <p><ba>$replyUserName</ba> -<bd> $replyDate </bd><br>		
					$replyText</p></div>	
	";
		
}
}					
		
		echo'<hr>';
	
		}
	
	
	
}					
					
					
		echo"
		
		</div><!-- /row -->
				
		";					
					
					
					
						
					

					
				
	
					
					
					
					
					
echo"
					<div class='row mt'>	
			<div id='contact_form' class='col-lg-8 col-lg-offset-2'>
				<form role='form'>
				  <div class='form-group'>
				    <input type='name' class='form-control' id='NameInput' placeholder='Your Name'>
				    <br>
				  </div>
				  <div class='form-group'>
				    <input type='email' class='form-control' id='EmailInput' placeholder='Enter email'>
				    <br>
				  </div>
				  <textarea id='textareaInput' class='form-control' rows='6' placeholder='Enter your text here'></textarea>
				    <br>
				  <div id='post_btn' type='button' class='btn btn-success' onClick=send_comment('$questionID');>POST</div>
				</form>    			
			</div>
		</div><!-- /row -->
				
				";
						?>
				
	<script>
					function _(x){
	return document.getElementById(x);
}

		function send_comment(string){
			//alert(string);
			
		var textareaInput =  _("textareaInput").value; 
		var EmailInput = _("EmailInput").value;
		var nameInput = _("NameInput").value;

			
		//var EmailInput = 'My_test_email@yahoo.com';
		//var nameInput = 'My Test Name';
			
			//alert(NameInput +" 1 "+ EmailInput +" 2 "+ subject +" 3 "+ textareaInput);
			
			if(textareaInput && EmailInput && nameInput && string ){
				
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
if(EmailInput.match(mailformat))  
{  
 	
			var URL ="post_comment.php";
  
	_("post_btn").innerHTML = 'Sending...';
	var formdata = new FormData();
	formdata.append( "qID", string );
	formdata.append( "ti", textareaInput );
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
				
			//_("ask_question_area").innerHTML = "Thank You, we recieved your question.";	
				
			}else{
				
			//_("ask_question_area").innerHTML = responses;	

			}

	 _("textareaInput").value = "";
				$("#comment_area").load(location.href+" #comment_area>*","");
		}
		
	}
	ajax.send( formdata );
			
}else{

	alert("You have entered an invalid email address!");  
			}
				
			}else{
				alert('Please Fill Out All Fields');
			}
				_("post_btn").innerHTML = 'POST';

		}
		
		
		
		function reply_comment(string){
			

var old_element = _("ra_"+string);
			var reply_btn = _("rb_"+string);
			
						//alert(reply_btn.id);

						//alert(reply_btn.innerHTML);

			if(reply_btn.innerHTML == "<h4>Reply</h4>"){
				reply_btn.innerHTML = '<h4>Cancel</h4>';
			var new_element = document.createElement('div');
new_element.id = _("r_"+string);
new_element.className = 'ac_image_group';

	var image_group_innerHTML ="<div class='row mt'>"	
			+"<div id='contact_form' class='col-lg-8 col-lg-offset-2'>"
				+"<form role='form'>"
				  +"<div class='form-group'>"
				    +"<input type='name' class='form-control' id='replay_Name_Input' placeholder='Your Name'>"
				   +" <br>"
				  +"</div>"
				  +"<div class='form-group'>"
				   +" <input type='email' class='form-control' id='replay_Email_Input' placeholder='Enter email'>"
				    +"<br>"
				 +" </div>"
				 +" <textarea id='replay_textarea_Input' class='form-control' rows='6' placeholder='Enter your text here'></textarea>"
				   +" <br>"
				 +" <div id='reply_btn' type='button' class='btn btn-success' onClick=send_reply("+string+");>Reply</div>"
				+"</form>"    			
			+"</div>"
		+"</div><!-- /row -->";
	  
new_element.innerHTML =image_group_innerHTML;
   var style = "display: block;  margin: auto; box-sizing: border-box; padding-left: 10%; padding-right:  10%; ";

new_element.setAttribute("style", style);

				  //  old_element.appendChild( new_element );

			old_element.insertBefore(new_element, null);

			//	old_element.parentNode.replaceChild(new_element, old_element);

			}else{
				
				
				var new_element = _("r_"+string);

	_(new_element).remove();
								reply_btn.innerHTML = '<h4>Reply</h4>';

			}
			
		}
		
		
		function send_reply(string){
						//alert(string);
			
		var textareaInput =  _("replay_textarea_Input").value; 
		//var EmailInput = _("replay_Email_Input").value;
		//var nameInput = _("replay_Name_Input").value;

			
		var EmailInput = 'My_test_email@yahoo.com';
		var nameInput = 'My Test Name';
			
			//alert(NameInput +" 1 "+ EmailInput +" 2 "+ subject +" 3 "+ textareaInput);
			
			if(textareaInput && EmailInput && nameInput && string ){
				
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
if(EmailInput.match(mailformat))  
{  
 	
			var URL ="reply_comment.php";
  
	_("reply_btn").innerHTML = 'Sending...';
	var formdata = new FormData();
	formdata.append( "cID", string );
	formdata.append( "ti", textareaInput );
	formdata.append( "ei", EmailInput );
	formdata.append( "ni", nameInput );
	var ajax = new XMLHttpRequest();
	ajax.open( "POST", URL );
	ajax.onreadystatechange = function() {
		if(ajax.readyState == 4 && ajax.status == 200) {
			var responses =  ajax.responseText;
				 responses = (responses.trim());
		//	alert(responses);
			
			if(responses == "Sent"){
				
			//_("ask_question_area").innerHTML = "Thank You, we recieved your question.";	
				
			}else{
				
			//_("ask_question_area").innerHTML = responses;	

			}
			//	_("reply_btn").innerHTML = 'POST';
				var new_element = _("r_"+string);

	_(new_element).remove();
	_("rb_"+string).innerHTML = '<h4>Reply</h4>';
			
				$("#white").load(location.href+" #white>*","");

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
 
				
									<br>
					<p><bt>TAGS: <a href="https://www.ismybloodpressureok.com/classification/">Classification</a> - <a href="https://www.ismybloodpressureok.com/classification/info.php?c=Hypotension">Low blood pressure</a>
 - <a href="https://www.ismybloodpressureok.com/classification/info.php?c=Systolic">Isolated Systolic Hypertension</a></bt>
									</p>
					
					<hr>
					<p><a href="../questions"># Back</a></p>
				</div>

			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /white -->
	
				
	
	

	
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
