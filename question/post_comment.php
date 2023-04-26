
 <?php

 $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/includes/db_Conx/db_MainConx.php";
   include($path);
//questionTopic
//questionUserID

if( isset($_POST['ni'])&& isset($_POST['ei'])&& isset($_POST['ti'])){
	$ni = $_POST['ni'];
	$ei = $_POST['ei'];
	$ti = $_POST['ti'];
	$qID = $_POST['qID'];

	
	$cuID = $_POST['cuID'];
	
	 $ni = clean_Input($db_conx,$ni);
	 $ei = clean_Input($db_conx,$ei);
	 $ti = clean_Input($db_conx,$ti);
	$qID = clean_Input($db_conx,$qID);

	
	$cuID = clean_Input($db_conx,$cuID);
    
	$sql = "INSERT INTO CommentTable
        			(commentText, commentUserName, commentUserEmail,  commentUserID, commentQuestionID ) VALUES
        			('$ti' ,'$ni' ,'$ei' ,'000','$qID'   )";
        			
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