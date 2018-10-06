<?php

  $hostname = "localhost";
  $username = "root";
  $password = "Alfredo59";
  $db = "skillsdb";

  $db_link = mysqli_connect($hostname, $username, $password, $db)
  or die("Unable to connect to MySQL");
 //$seldb = @mysqli_select_db($db_link, "skillsdb");


?>