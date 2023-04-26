
 <?php

 $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/includes/db_Conx/db_MainConx.php";
   include($path);
//questionTopic
//questionUserID

if( isset($_POST['ni'])&& isset($_POST['ei'])&& isset($_POST['aq'])){
	$ni = $_POST['ni'];
	$ei = $_POST['ei'];
	$aq = $_POST['aq'];

	$qt = $_POST['qt'];
	$quID = $_POST['quID'];
	
	 $ni = clean_Input($db_conx,$ni);
	 $ei = clean_Input($db_conx,$ei);
	 $aq = clean_Input($db_conx,$aq);
	
	$qt = clean_Input($db_conx,$qt);
	$quID = clean_Input($db_conx,$quID);
    
	$sql = "INSERT INTO QuestionsTable
        			(questionText, questionAskedby, questionUserEmail,  questionTopic, questionUserID ) VALUES
        			('$aq' ,'$ni' ,'$ei' ,'$qt','$quID'   )";
        			
       $query = mysqli_query($db_conx, $sql);
	
		if($query){
			echo "Sent";
		} else {
			echo "failed. Code: 04 $sql";
	}
     
	
	
}else{
			echo "failed check your URl.";

	
}



?>		