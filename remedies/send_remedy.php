
 <?php

 $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/includes/db_Conx/db_MainConx.php";
   include($path);


if( isset($_POST['si'])&& isset($_POST['ti'])&& isset($_POST['rt'])){
	$vl = $_POST['vl'];
	$si = $_POST['si'];
	$ti = $_POST['ti'];
	$rt = $_POST['rt'];
	
	 $vl = clean_Input($db_conx,$vl);
	 $si = clean_Input($db_conx,$si);
	 $ti = clean_Input($db_conx,$ti);
	 $rt = clean_Input($db_conx,$rt);
    
	
	
		if($si == "lBPremedy"){
	
		$sql = "INSERT INTO LowBPremedies
        			(lowBPremediesPosted, lowBPremediesText, lowBPremediesVideoLink, lowBPremediesTopic ) VALUES
        			('YES' ,'$ti','$vl','$rt'   )";
        			
       $query = mysqli_query($db_conx, $sql);
	
		if($query){
			echo "sent";
		} else {
			echo "failed. Code: 04 $sql";
	}
     
		}else{
	
	$sql = "INSERT INTO HighBPremedies
        			(highBPremediesPosted, highBPremediesText, highBPremediesVideoLink, highBPremediesTopic ) VALUES
        			('YES' ,'$ti','$vl','$rt'   )";
        			
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