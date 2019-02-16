<?php

  $hostname = "localhost";
  $username = "root";
  $password = "";
  $db = "skillsdb";

  /*$db_link = mysqli_connect($hostname, $username, $password, $db)  ORIGINAL CONNECTION 
  or die("Unable to connect to DB");
 //$seldb = @mysqli_select_db($db_link, "skillsdb");

*/
  $db_link = mysqli_connect($hostname, $username, $password, $db);
  if(mysqli_connect_error()){
  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  


?>