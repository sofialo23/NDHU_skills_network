<?php
	if(isset($_POST["studentid_valuetxt"]))
	{	
		
		include("connectionDB.php");
		include("register05May.php");
		//echo "alert('In t  he if with POST totalArray');";
		//GOING TO GET ALL THE DATA IN HERE. 
		$seldb2 = @mysqli_select_db($db_link, "skillsdb");
		if(!$seldb2) die("Cagadota en registerFetchDB.php in the post(totalArray), gracias.");
		$user_test = $_POST["studentid_valuetxt"];
		$query_testing_user = "SELECT * from user_data where student_id='".$user_test."';";
		//echo "alert('In the post insertDB file');";
		//echo "La QUERY: --> ".$query_testing_user;
		$result_query_testing_user = mysqli_query($db_link,$query_testing_user);

		
		if($result_query_testing_user)
		{
				if( (mysqli_num_rows($result_query_testing_user)) > 0 )//while( ($row = mysqli_fetch_array($result_query_testing_user)) )
				{
					echo "true";
					exit();
				}else
				{
					echo "empty";
					exit();
				}
			
			
		}else
		{
			echo "empty";
		}
	}else
	{
		//echo "alert('It DOES NOT GET INTO THE studentid_valuetxt POST function');";
		//echo "It DOES NOT GET INTO THE studentid_valuetxt POST function";
	}

	//INSERT INTO `user_skills` (`id_userskill`, `student_id`, `id_skill`) VALUES (NULL, '1212121212', '7');

?>