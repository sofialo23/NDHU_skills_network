<?php
    
	header('Content-Type: application/json');

    if(isset($_POST["studentid"]))
	{
		
		include("connectionDB.php");
		$query = " select user_data.name, user_data.email , user_data.phoneNumber, user_data.aboutMe , user_data.status , department.name_department, user_data.id_department, department.id_college
					from user_data , department
					where department.id_department = user_data.id_department and user_data.student_id =  ".$_POST["studentid"]."; ";

		$result = mysqli_query($db_link,$query);

		if($result)
		{
			
			$jsonvar = array();
			while($row_col = mysqli_fetch_array($result))
			{
				$array_col["name"] = $row_col["name"];
				$array_col["email"] = $row_col["email"];
				$array_col["phoneNumber"] = $row_col["phoneNumber"];
				$array_col["aboutMe"] = $row_col["aboutMe"];
				$array_col["status"] = $row_col["status"];
				$array_col["department"] = $row_col["name_department"];
				$array_col["iddepartment"] = $row_col["id_department"];
				$array_col["idcollege"] = $row_col["id_college"];


				array_push($jsonvar, $array_col);
			}

				$jsonstring = json_encode($jsonvar);
				echo $jsonstring;
		}
		
	}

	    if(isset($_POST["insert"]))
	{
		include("connectionDB.php");
		session_start();
		$userID = $_SESSION['logged_user'];

		
		$query = 	" update user_data 
					set ".$_POST["insert"]." 
					where user_data.student_id = $userID; ";

		$result = mysqli_query($db_link,$query);

		if($result)
		{	
			
			echo "success";
		}
		else 
			echo "error at the end";
		
	}

	if(isset($_POST["collid"]))
	{
		include("connectionDB.php");
		session_start();
		$userID = $_SESSION['logged_user'];
		/*
		$query = "select id_college from department where id_college = ".$_POST["collid"].";";

				$result = mysqli_query($db_link,$query);
					
				if($result)
				{	
					$final = mysqli_fetch_array($result);
					$row['id_department']= $final['id_department'];
					echo $final['id_department'];
				}
				else 
					echo "error";*/



		$query = "select id_department from user_data where student_id = '$userID'";

				$result = mysqli_query($db_link,$query);
					
				if($result)
				{	
					$final = mysqli_fetch_array($result);
					$row['id_department']= $final['id_department'];
					echo $final['id_department'];
				}
				else 
					echo "error";


		
	}



?>