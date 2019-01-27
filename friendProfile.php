
<h1 align = " right" >Welcome to  
	  <?php 
	  include('connectionDB.php');
		session_start();
   
		$friendid = $_SESSION['friend']; // the student id of the other person's profile
		
	  echo $friendid;

	   ?>