<?php
	
	include("connectionDB.php");

	$query_verify_user = "SELECT * FROM `user_data` where student_id='".$_POST["student_id"]."';";
	$result_verify_user = mysqli_query($db_link,$query_verify_user);
	
	if($result_verify_user)
	{
		$rowsCounter = mysqli_num_rows($result_verify_user);
		if($rowsCounter == 0)
		{
			echo "SuccessChk";
		}else
		{
			echo "FailedChk";
		}
	}
?>