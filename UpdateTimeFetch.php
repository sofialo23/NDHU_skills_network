<?php
    
	header('Content-Type: application/json');



	    if(isset($_POST["timeString"]))
	{
		include("connectionDB.php");
		session_start();
		$userID = $_SESSION['logged_user'];

		
		$query = 	" update user_data 
					set availableTime = ".$_POST["timeString"]." 
					where user_data.student_id = $userID; ";

		$result = mysqli_query($db_link,$query);

		if($result)
		{	
			
			echo "success updating the time";
		}
		else 
			echo "error at the end, unable to update the time";
		
	}


?>