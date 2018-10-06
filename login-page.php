<!--  login page -->
 <?php
     
      include('connectionDB.php');
     // session_start();
	  
	   if($_SERVER["REQUEST_METHOD"] == "POST") {
		   if (isset($_POST['login_button'])){
		
			   
			   
			   $studentid = mysqli_real_escape_string($db_link, $_POST['student_id']);
			   $password = mysqli_real_escape_string($db_link, $_POST['password']);
			 
				
			  //$password = md5($password);

			   
			   $sql = "SELECT * FROM user_data WHERE student_id='$studentid' and password='$password'";
				$result = mysqli_query($db_link,$sql);
				
				$data = array();
				$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
				//$data['name']=$row['name'];
				
					$active = $row['active'];
			  
			  
					
				
			  if(mysqli_num_rows($result)==1){
			  	session_start();
					  
					  $_SESSION['message'] = "You have successfully logged in";
					  $_SESSION['logged_user'] = $studentid;
					  $_SESSION['user_name'] = $row['name'];
					  $_SESSION['correo'] = $row['email'];
		
					  
						header ("location: user-mainpage.php");
							/*if($studentid=='admin')
							header("location: data.php");
							else 
							header("location: user.php"); in case we want different interfaces for some users */ 
						
	
			  
		   }
		   
		   else{
					$_SESSION['message'] = "Failed to log in, student id or password incorrect";
					header("location: failed.php");
			   }
		   }	   
	  }	
  ?>
  
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>NDHU Skill Exchange System</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
  
  <link rel="stylesheet" href="css/style.css"> 	


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="jquery-3.3.1.js"></script>

  
  <script  type="text/javascript" href="index.js"></script>
  <script type="text/javascript">
   
  </script>
 
</head>
<body>
	<div class="container">
		<div class="info">
				  <h1>Student Skill Exchange System</h1><span>Made with <i class="fa fa-heart"></i> by <a href="http://www.ndhu.edu.tw/bin/home.php?Lang=zh-tw">NDHU Students</a></span>
		</div>
	</div>
	<div class="form">
		<div class="thumbnail"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/hat.svg"/></div>
		<form class="login-form" action="" method="post" >
			<label id="lblFile" >Log in</label> 
			<br><br>
			<input type="text" id="student_id" name="student_id" placeholder="Student ID" required="required" />
			<input type="password" id="password" name="password" placeholder="password" required="required"/>  
			<button type = "submit" name="login_button">Log In</button>
			<p class="message">Don't have an account yet? <a href="register11April.php">Register</a></p>
		</form>
	</div>
</body>

</html>