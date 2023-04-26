
 <?php

 $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/includes/db_Conx/db_MainConx.php";
   include($path);


if( isset($_POST['ni'])&& isset($_POST['ei'])&& isset($_POST['si'])&& isset($_POST['ti'])){
	$ni = $_POST['ni'];
	$ei = $_POST['ei'];
	$si = $_POST['si'];
	$ti = $_POST['ti'];
	
	 $ni = clean_Input($db_conx,$ni);
	 $ei = clean_Input($db_conx,$ei);
	 $si = clean_Input($db_conx,$si);
	 $ti = clean_Input($db_conx,$ti);
    
	$sql = "INSERT INTO ContactTable
        			(contactSubject, contactName, contactEmailAddress,  contactText ) VALUES
        			('$si' ,'$ni' ,'$ei' ,'$ti'   )";
        			
       $query = mysqli_query($db_conx, $sql);
	
		if($query){
			echo "sent";
		} else {
			echo "failed. Code: 04 $sql";
	}
     
	
	
}else{
			echo "failed check your URl.";

	
}



?>		