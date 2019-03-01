
<?php
	require("connectionDB.php");

		// Get search term
	$searchTerm = $_GET['term'];

	// Get matched data from skills table
	

	// Generate skills data array
	
	$query = "SELECT * FROM user_data WHERE name LIKE '%".$searchTerm."%' ORDER BY name ASC";
	$sql = mysqli_query($db_link, $query )or die(mysqli_error($db_link));
		$namesuggestion = array();
	while($row = mysqli_fetch_array( $sql ))
	{
	 $data['student_id'] = $row['student_id'];
	        $data['name'] = $row['name'];
	        array_push($namesuggestion, $data);
		}

	// Return results as json encoded array
	echo json_encode($namesuggestion);

?>


