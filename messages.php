
<?php  
	session_start();
	require("connectionDB.php");
	
if (isset($_SESSION['user_name']) && $_SESSION['user_name'] == true) { 			//CHECKS WHETHER USER IS  LOGGED IN
   ?><a href="sendpm.php">Compose a new message</a></br></br> <?php
   $user = $_SESSION['user_name'];
	if (isset($_POST['delete'])) { 				//DELETES MESSAGE WHEN BUTTON IS CLICKED
	    $id = $_POST['id'];  

	    $query = "UPDATE messages SET sent_deleted = 'yes' WHERE from_user = '$user' AND msg_id = '$id'";
	   
	    mysqli_query($db_link, $query )or die(mysqli_error($db_link));
	    echo "Message succesfully deleted from your outbox.";
	}


	if (isset($_POST['seeconv'])) { 				//SHOWS FULL CONVERSATION WITH THAT OTHER USER
		$_SESSION['touser'] = $_POST['toconv'];
		header("Location: conversation.php");
exit;
	    $query = "SELECT * FROM messages WHERE from_user = '$user' OR to_user = '$user' AND sent_deleted = 'no' AND to_user = '$touser' ";

	    mysqli_query($db_link, $query )or die(mysqli_error($db_link));
	    echo "This are all the messages from WHOO";
	}


	/*$alloutmsg = "SELECT * FROM messages WHERE from_user = '$user' OR to_user = '$user' AND sent_deleted = 'no' GROUP BY to_user, from_user ORDER BY time_sent DESC";*/

$alloutmsg = "SELECT DISTINCT to_user, from_user FROM messages WHERE from_user = '$user' OR to_user = '$user' AND sent_deleted = 'no'  ORDER BY time_sent DESC";

	echo $alloutmsg;
	$sql = mysqli_query($db_link, $alloutmsg)or die(mysqli_error($db_link));

	while($row = mysqli_fetch_array( $sql ))
	{
	 
		echo "<div>";
		echo "To: ";
		echo $row['to_user'];
		echo "<br>";
		echo "From: ";
		echo $row['from_user'];
		echo "<br>";
		/*echo "Time sent: ";
		echo $row['time_sent'];
		echo "<br>";
		echo "Message: ";
		echo $row['message'];  */ ?>
		   	<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
			  	<input type="hidden" name="id" maxlength="5" value = "<?php echo $row['msg_id']; ?>">
			  	<input type="hidden" name="toconv" maxlength="5" value="<?php echo $row['to_user']; ?>">
				<input type="submit" name="delete" value="Delete PM">
				<input type="submit" name="seeconv" value="See conversation" >
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