<?php
	header('Content-Type: application/json');
	if(isset($_POST["vall"]))
	{
		include("connectionDB.php");
		$query ="SELECT * FROM `skills` WHERE id_category=".$_POST["vall"].";";
		$seldb = @mysqli_select_db($db_link, "skillsdb");
		if(!$seldb) die("Error cagado");
		$result = mysqli_query($db_link,$query);
		if($result)
		{
			$data = array();
			while( ($row = mysqli_fetch_array($result)) )
			{
				$arrayrow["idskill"] = $row["id_skill"];
				$arrayrow["nameskill"] = $row["name_skill"];
				$arrayrow["idcategory"] = $row["id_category"];
				array_push($data,$arrayrow);
			}
			echo json_encode($data);
		}else
		{
			echo "<script>Error DFFFFwith result</script>";
		}
		
	}
	if(isset($_POST["col"]))
	{
		//VARIABLE FOR THE COLLEGE DB CONSULTA.
		include("connectionDB.php");
		$query_col = " SELECT * FROM  `department` WHERE id_college=".$_POST["col"].";";
		$seldb_col = @mysqli_select_db($db_link,"skillsdb");
		if(!$seldb_col) die("Cagada en choosing the DB");
		$result_col = mysqli_query($db_link,$query_col);
		if($result_col)
		{
			$data_col = array();
			while( ($row_col = mysqli_fetch_array($result_col)) )
			{
				$array_col["iddepartment"] = $row_col["id_department"];
				$array_col["namedepartment"] = $row_col["name_department"];
				$array_col["idcollege"] = $row_col["id_college"];
				array_push($data_col, $array_col);
			}
			echo json_encode($data_col);
		}
	}
?>