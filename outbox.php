




<?php  
	session_start();
	require("connectionDB.php");
	$user = $_SESSION['user_name'];

	if (isset($_POST['delete'])) {
	    $id = $_POST['id'];  

	    $query = "UPDATE messages SET sent_deleted = 'yes' WHERE from_user = '$user' AND msg_id = '$id'";
	   

	    mysqli_query($db_link, $query )or die(mysql_error());
	    echo "Message succesfully deleted from your outbox.";
	}

	$alloutmsg = "SELECT * FROM messages WHERE from_user = '$user' AND sent_deleted = 'no'";
	
	$sql = mysqli_query($db_link, $alloutmsg)or die(mysql_error());

	while($row = mysqli_fetch_array( $sql ))
	{
	/* I have set each element into it's OWN echo statement for easy readind.
	 however it is possible to create it in one echo statement like the following:
	 echo "Message ID#: ".$row['id'];
	*/ 
		echo "<div>";
		echo "To: ";
		echo $row['to_user'];
		echo "<br>";
		echo "From: ";
		echo $row['from_user'];
		echo "<br>";
		echo "Time sent: ";
		echo $row['time_sent'];
		echo "<br>";
		echo "Message: ";
		echo $row['message'];   ?>
		   	<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
			  	<input type="hidden" name="id" maxlength="5" value = "<?php echo $row['msg_id']; ?>">
				<input type="submit" name="delete" value="Delete PM">
			</form>
	<?php
		}
		echo "</div>";
	?>







<!-- using table instead of div 
	echo "<table border=1>";
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
		  echo "<tr><td>";
		  echo "Time sent: ";
		  echo $row['time_sent'];
		  echo "</td></tr>";
		  echo "<tr><td>";
		  ?>
		   <form action="<?php     /*echo $_SERVER['PHP_SELF']?>" method="post">
		  	<input type="hidden" name="id" maxlength="5" value = "<?php echo $row['msg_id']; ?>">
				<input type="submit" name="delete" value="Delete PM">
		</form>
		<?php
		  echo "</td></tr>";
		  ?>
	
	<?php
		}
		  echo "</table>";
		  echo "</br>";
	?>

!-->
*/
