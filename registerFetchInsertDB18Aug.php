<?php

	include("connectionDB.php");
		$totalArray = $_POST["totalArray"];//General Array received from the ajax function in register29april.php

		/*
		$totalArray[0] = $_POST["#firstname"];
		$totalArray[1]=$_POST["#studentId"]; //studentid_valuetxt;
	    $totalArray[2]=$_POST["#password"]; //password_valuetxt;
	    $totalArray[3]=$_POST["#studentId"]; //studentid_valuetxt;
	    $totalArray[4]=$_POST["#phoneNum"]; //phoneNum_valuetxt;
	    $totalArray[5] = $_POST["#btMe"]; //aboutme_valuetxt;
	    $totalArray[6] = $_POST["#email"]; //email_valuetxt; 
	    $totalArray[7]=$_POST["select_department"]; //select_department; 
	    $totalArray[8]= $_POST["arrays_subCategories"]; //arrays_subCategories; //Array for the sub-categories of skills selected
	    $totalArray[9]=$_POST["myArray"]; //myArray; //myArray for the Time
	    $totalArray[10] = $_POST["counter_array"]; //counter_array; //Number of data in myArray
	    $totalArray[12] = $_POST["arrays_subCategories_interested"]; //counterArraySubC;
	    $totalArray[13] = $_POST["counterArraySubC_interested"]; //counterArraySubC;
	    */
		$timeArray = $totalArray[9];
		$counterForTime = $totalArray[10];
		$stringForTime = "";//The string that contains the day+(time+duration)*


		for($i = 0; $i<$counterForTime;++$i)
		{
			$dayValue = $timeArray[$i]["DayValue"];
			$stringForTime = $stringForTime.$dayValue;//------------------------------------------------

			$times = $timeArray[$i]["TimePeriod"];//Array of the selects in register29
			$counterTime = $timeArray[$i]["counterTime"];//Number of selects in the array above
			for($j = 0; $j<$counterTime; ++$j)
			{
				$stringForTime = $stringForTime.$times[$j];//------------------------------------------------
				//echo "alert(".$stringForTime.");";
			}
			if($i != ($counterForTime-1))
			{
				$stringForTime = $stringForTime.",";	
			}
			
		}
				
		$Checking_both_inserts = false;
	    //QUERY TO INSERT THE DATA INTO THE USER DATA
		$query_insert = "INSERT INTO `user_data` (`name`, `student_id`, `password`, `email`, `phoneNumber`, `aboutMe`, `status`, `availableTime`, `photo`, `id_department`) values ('".$totalArray[0]."','".$totalArray[1]."','".$totalArray[2]."','".$totalArray[6]."','".$totalArray[4]."','".$totalArray[5]."','1','".$stringForTime."',NULL,'".$totalArray[7]."');";
		/*
		echo " values ('".$totalArray[0]."','".$totalArray[1]."','".$totalArray[2]."','".$totalArray[6]."','".$totalArray[4]."','".$totalArray[5]."','1','".$stringForTime."',NULL,'".$totalArray[7]."');";
*/
		$result_query_insert = mysqli_query($db_link,$query_insert);
		if($result_query_insert)
		{
			
			//echo "Success";
			//echo "User Inserted in the DB";
			session_start();
			$_SESSION["usr"]=$totalArray[1];
			$Checking_both_inserts = true;
		}else
		{
			//echo "Not inserted in Database.";
		}
		//mysqli_close($result_query_insert);
		include("connectionDB.php");
		//-----------------------------------------------------------------------------------------------------------------------------
		//These 3 data are for insert in the 
		if( $Checking_both_inserts == true)
		{
			$arrays_subc = $totalArray[8];//Array of the sub-skills
			$arrays_subc_interested = $totalArray[12];
			$counter_arrays_subc_interested = $totalArray[13];
			$counter_arrays_subc = $totalArray[11];//Number of subskills the user offers 
			$flag2=0;$flag3=0;//Counter from 0 that will reach the counter of the subc_skills-1. Because the counter_arrays_sub only gives us a number and since we starting from 0, has to be -1.
			//-----------------------------------------------------------------------------------------------------------------------------
			$checking2 = false; $checking3 = false;
			while($flag2<=$counter_arrays_subc-1)
			{
				
				$query_user_skill = "INSERT INTO `user_skills` (`id_userskill`,`student_id`, `id_skill`,`flag_interested`) VALUES (NULL,'".$totalArray[1]."','".$arrays_subc[$flag2]."','0');";
				//echo "aler($query_user_skill);";
				$result_query_user_skill = mysqli_query($db_link,$query_user_skill);
				if($result_query_user_skill)
				{
					//echo "Skill inserted related to the USER";
					$checking2=true;//echo "Succesfully Inserted Value, arrays_subc, gracias PUTO";
				}else
				{
					//echo "Failure2";
					//echo "False In -> (SubSkill ID: ) ".$arrays_subc[$flag2].";";
					$checking2 = false;
				}
				$flag2++;
			}
			while( $flag3<=$counter_arrays_subc_interested-1 )
			{
				$query_user_skill2 = "INSERT INTO `user_skills` (`id_userskill`,`student_id`, `id_skill`,`flag_interested`) VALUES (NULL,'".$totalArray[1]."','".$arrays_subc[$flag2]."','1');";
				//echo "aler($query_user_skill);";
				$result_query_user_skill2 = mysqli_query($db_link,$query_user_skill2);
				if($result_query_user_skill2)
				{
					//echo "Skill inserted related to the USER";
					$checking3=true;//echo "Succesfully Inserted Value, arrays_subc, gracias PUTO";
				}else
				{
					//echo "Failure2";
					//echo "False In -> (SubSkill ID: ) ".$arrays_subc[$flag2].";";
					$checking3 = false;
				}
				$flag3++;
			}
			if(($checking2 == true) && ($checking3 == true))
			{

				echo "Success";
			}else
			{
				echo "FailureIn";
			}
		}else
		{
			echo "Failure";
		}
?>