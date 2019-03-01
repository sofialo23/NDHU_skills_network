


<?php  
	session_start();
	require("connectionDB.php");
	
if (isset($_SESSION['user_name']) && $_SESSION['user_name'] == true) { 					//CHECKS WHETHER USER IS  LOGGED IN
   $user = $_SESSION['user_name'];
  // $touser = $_POST['seeconv'];
	/*if (isset($_POST['delete'])) { 				//DELETES MESSAGE WHEN BUTTON IS CLICKED
	    $id = $_POST['id'];  

	    $query = "UPDATE messages SET sent_deleted = 'yes' WHERE from_user = '$user' AND msg_id = '$id'";
	   

	    mysqli_query($db_link, $query )or die(mysql_error());
	    echo "Message succesfully deleted from your outbox.";
	}


	if (isset($_POST['seeconv'])) { 				//SHOWS FULL CONVERSATION WITH THAT OTHER USER
		$touser = $_POST['seeconv'];
		
	    $query = "SELECT * FROM messages WHERE from_user = '$user' AND sent_deleted = 'no' AND to_user = '$touser' ";
	   

	    mysqli_query($db_link, $query )or die(mysql_error());
	    echo "This are all the messages from WHOO";
	}*/

	$touser = $_SESSION['touser'];
	echo "Your conversation with : $touser";
	echo "<br>";echo "<br>";

	$allmsgs = "SELECT * FROM messages WHERE (from_user = '$user' AND to_user = '$touser') OR (from_user = '$touser' AND to_user = '$user') AND sent_deleted = 'no' ORDER BY time_sent DESC"; // MODIFY HERE
	//echo $allmsgs;
	$sql = mysqli_query($db_link, $allmsgs)or die(mysql_error());

	while($row = mysqli_fetch_array( $sql ))
	{
	 
		echo "<div>";
		echo "Time sent: ";
		echo $row['time_sent'];
		echo "<br>";
		echo "Message: ";
		echo $row['message'];   ?>
		   	<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
			  	<input type="hidden" name="id" maxlength="5" value = "<?php echo $row['msg_id']; ?>">
				<input type="submit" name="delete" value="Delete PM">
				<input type="hidden" name="seeconv" value="See conversation" value="<?php echo $row['to_user']; ?>">
			</form>
	<?php
		}
		echo "</div>";
} 

else {       							//REDIRECTS TO LOGIN PAGE IF USER IS NOT LOGGED IN
    echo "Please log in first to see this page.";
    echo "</br>";
 	?><a href="login-page.php">Go to Login Page</a> <?php
}
?>
	



