<?php    
	session_start();
	require("connectionDB.php");

	 if (isset($_POST['sendmg']))
	{
	// if the form has been submitted, this inserts it into the Database 
	  $to_user = $_POST['to_user'];
	  $from_user = $_SESSION['user_name'];
	  $message = $_POST['message'];
	  $subject = $_POST['subject'];
	  $my_date = date("Y-m-d H:i:s");

	  	$query = "INSERT INTO messages (to_user, from_user, subject, message, time_sent ) VALUES ('$to_user', '$from_user', '$subject','$message', '$my_date')";


	  mysqli_query($db_link, $query)or die(mysqli_error($db_link));
	  echo "PM succesfully sent!"; 

	 
	}
	else
	{
	    // if the form has not been submitted, this will show the form
	}

?>

<html>
	<head>

	</head>

	<body>
 		<h1 > 
		  <?php 
			$loggeduser = $_SESSION['user_name'];
		  	echo $loggeduser;
		   ?> 's Outbox
		</h1>
		<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
			<table border="1">
				<tr><td colspan=2><h3>Send PM:</h3></td></tr>
				</td></tr>
				<tr><td>To User: </td><td>
				<input type="text" name="to_user" maxlength="32" value = "" required="true">
				</td></tr>
				<tr><td>Subject: </td><td>
				<textarea name="subject" cols=50 rows=1 wrap="SOFT"  required="true"></textarea>
				</td></tr>
				<tr><td>Message: </td><td>
				<textarea name="message" cols=50 rows=10 wrap=SOFT required="true"></textarea>
				</td></tr>
				<tr><td colspan="2" align="right">
				<input type="submit" name="sendmg" value="Send Message">
				</td></tr>
			</table>
		</form>
	</body>
</html>