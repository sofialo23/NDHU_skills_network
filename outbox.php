




<?php  
	session_start();
	require("connectionDB.php");
	$user = $_SESSION['user_name'];

	if (isset($_POST['delete'])) {
	    $id = $_POST['id'];  
	    $query = "UPDATE messages SET sent_deleted = 'yes' WHERE from_user = '$user' AND id = '$id'";

	    mysqli_query($db_link, $query )or die(mysql_error());
	    echo "Message succesfully deleted from your outbox.";
	}

	$alloutmsg = "SELECT * FROM messages WHERE from_user = '$user' AND sent_deleted = 'no'";
	echo $alloutmsg;
	
	$sql = mysqli_query($db_link, $alloutmsg)or die(mysql_error());

	while($row = mysqli_fetch_array( $sql ))
	{
	/* I have set each element into it's OWN echo statement for easy readind.
	 however it is possible to create it in one echo statement like the following:
	 echo "Message ID#: ".$row['id'];
	*/
	  echo "<table border=1>";
	  echo "<tr><td>";
	  echo "Message ID#: ";
	  echo $row['id'];
	  echo "</td></tr>";
	  echo "<tr><td>";
	  echo "To: ";
	  echo $row['to_user'];
	  echo "</td></tr>";
	  echo "<tr><td>";
	  echo "From: ";
	  echo $row['from_user'];
	  echo "</td></tr>";
	  echo "<tr><td>";
	  echo "Message: ";
	  echo $row['message'];
	  echo "</td></tr>";
	  echo "</br>";
	}
?>


<?php

  echo "</table>";
  echo "</br>";
?>

<html>
	<head>

	</head>

	<body>

	<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
		<table border="1">
			<tr><td colspan=2></td></tr>
			<tr><td></td><td>
			<input type="hidden" name="id" maxlength="5" value = "<?php echo $row['id']; ?>">
			</td></tr>
			<tr><td colspan="2" align="right">
			<input type="submit" name="delete" value="Delete PM # <?php echo $row['id']; ?> from outbox">
			</td></tr>
		</table>
	</form>
	</body>
</html>