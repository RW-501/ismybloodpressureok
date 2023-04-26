
 <?php

 $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/includes/db_Conx/db_MainConx.php";
   include($path);


if( isset($_POST['bp'])&& isset($_POST['ID'])){
	$bp = $_POST['bp'];
	$ID = $_POST['ID'];

	
	 $bp = clean_Input($db_conx,$bp);
	 $ID = clean_Input($db_conx,$ID);

        			echo "$bp  $ID";

	
	
		if($bp == "L"){
	
			$sql = "UPDATE LowBPremedies SET lowBPremediesNotHelpful = lowBPremediesNotHelpful + 1 WHERE lowBPremediesID='$ID' LIMIT 1";

        			
       $query = mysqli_query($db_conx, $sql);
	
		if($query){
			echo "sent";
		} else {
			echo "failed. Code: 04 $sql";
	}
     
		}else{
	
			$sql = "UPDATE HighBPremedies SET highBPremediesNotHelpful = highBPremediesNotHelpful + 1 WHERE highBPremediesID='$ID' LIMIT 1";

        			
       $query = mysqli_query($db_conx, $sql);
	
		if($query){
			echo "sent";
		} else {
			echo "failed. Code: 04 $sql";
	}			
			
			
			
		}


     
	
	
}else{
			echo "failed check your URl.";

	
}



?>	