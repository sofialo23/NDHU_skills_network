


<!----main page------------>


<!DOCTYPE html>
<html>

<head>
	<title>Skills Exchange Main </title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="jquery-3.3.1.js"></script>
</head>

<body>
	
	<!----start-banner--------- -->
	
	<div class="info"> 
      <h1 align = " right" >Welcome, 
	  <?php 
	  include('connectionDB.php');
		session_start();
   
		$id = $_SESSION['logged_user']; // the student id of the user
		$loggeduser = $_SESSION['user_name'];
		
		/*
	
	   $ses_sql = mysqli_query($db_link,"select `name` from `user_data` where `student_id` = '$id' ");
	   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
	   $login_session = $row['name'];  
*/
	  
	  echo $loggeduser;
	   ?> </h1>	
	   <a  href="logout.php" style="float: right;">Log Out</a> <br>

    </div>

		<h1 style="text-align:center;">Skills Exchange Network</h1> <br>
	<div id="sidebar" class="nav-collpase">
	 
	  <a href="profile.php">My profile</a> <br>	
	  <a href="outbox.php">My messages</a> <br>
	  <a href="#">My friends</a> <br>
	  <a href="#">Link 4</a> <br>
	</div>

	
	
	<!----start--introduction---------->
		
	
	<h3 style="text-align:center;"> Partners you might be interested in </h3>

	<br><br>
	
	<p>		
	<?php   				//SHOWS RECOMMENDATIONS OF USERS WHO TEACH THE SKILL YOU ARE INTERESTED IN 
	
	  include('connectionDB.php');
		
   
		$id = $_SESSION['logged_user']; // gets the student id of the user
		
		$userskill = mysqli_query($db_link,"select `id_skill` from `user_skills` where `student_id` = '$id' and `skill_status` = 'interested' "); // gets the id of the skill of the logged user
		for ($i=1; $i <=3 ; $i++) { 
			$friend = "friend" . $i;

	  
		$fila = mysqli_fetch_array($userskill, MYSQLI_ASSOC);
//echo "your skill id is : ";
			$idskill = $fila['id_skill'];
			//echo $idskill; echo "<br />\n";	
			// gets the id of the user who offers that skill
			//echo "the id of the user who offers that skill is : ";
			$requestid = mysqli_query($db_link, "select `student_id` from `user_skills` where `id_skill` = '$idskill' and `skill_status` = 'offers' ");
			$value2 = mysqli_fetch_array($requestid, MYSQLI_ASSOC);
			$idwhooffers= $value2['student_id'];
			//echo $idwhooffers; echo "<br />\n";
			//gets the name of the user who offers that skill
			echo "Username : ";
			$requestname = mysqli_query($db_link, "select distinct `name` from `user_data` where `student_id` = '$idwhooffers' ");
			$value3 = mysqli_fetch_array($requestname, MYSQLI_ASSOC);
			$namewhooffers= $value3['name'];
			$_SESSION['friend']= $namewhooffers;
			
			?>
	   <a href="friendProfile.php"><?php 
			echo $namewhooffers; 
			
			?>
		</a>
		<?php 
			//echo "<br />\n";
			echo "<br> <br>";
		}
			  ?>
	   
	
		<br>
	  
	</p>
	
	<br> <br>

	<h3 style="text-align:center;"> Search for partners who can teach you a new skill: </h3>
	
	 <!--------------------------------------- SKILL CATEGORY SECTION ---------------------------   -->
        <p><label> Please Choose the category of your skill </label></p>
        <p>
            <?php 
              include("connectionDB.php");
              $counter = 1;
         
                $seldb = @mysqli_select_db($db_link, "skillsdb");
                if(!$seldb) die("資料庫選擇失敗！Error cagado");
                $sql_getCategory = "SELECT * FROM `category_skill` ;";
                $result_getCategory = mysqli_query($db_link, $sql_getCategory);
                echo "<select name='slct_category1' id='slct_category1' >";
                if($result_getCategory)
                {
                  while($row_result = mysqli_fetch_assoc($result_getCategory))
                  {
                    echo "<option value='".$row_result["id_category"]."' name='skill_category".$counter."' id='slct_category1'>".$row_result["name_category"]."</option>";
                  }
                }
                echo "</select></p>";
                echo "<p><label> Please Choose the Sub-Category </label></p>";
                echo "<p>";
                echo "<select name='sub_category1' id='sub_category1'>";
                echo "<p>";
                echo "<option>-- Select a sub category --</option>";
                echo "</select></p>";
             	
                echo "<p>  </p>";

            ?>
			

<input type="submit" id="submitb"/>





<h3 style="text-align:center;"> Results from the search </h3>


<!------end--introduction--------- 

<table id="userstable">
	<tr>
		<td>Name</td>
		<td><span id="sugg_name"></span></td>
	</tr>
	<tr>
		<td>Student id</td>
		<td><span id="sugg_id"></span></td>
	</tr>

</table>

	<br><br>
	
	
-->

		


	

	
	
	<p id="thisp">		
	<?php   				//SHOWS RECOMMENDATIONS OF USERS WHO TEACH THE SKILL YOU ARE INTERESTED IN 
	
/*

	  include('connectionDB.php');
		
   
		$id = $_SESSION['logged_user']; // gets the student id of the user
		
		$userskill = mysqli_query($db_link,"select `id_skill` from `user_skills` where `student_id` = '$id' and `skill_status` = 'interested' "); // gets the id of the skill of the logged user
		
		while ($fila = mysqli_fetch_array($userskill, MYSQLI_ASSOC)) {
			echo "your skill id is : ";
			$idskill = $fila['id_skill'];
			echo $idskill; echo "<br />\n";
			
			// gets the id of the user who offers that skill
			echo "the id of the user who offers that skill is : ";
			$requestid = mysqli_query($db_link, "select `student_id` from `user_skills` where `id_skill` = '$idskill' and `skill_status` = 'offers' ");
			$value2 = mysqli_fetch_array($requestid, MYSQLI_ASSOC);
			$idwhooffers= $value2['student_id'];
			echo $idwhooffers; echo "<br />\n";
			
			
			//gets the name of the user who offers that skill
			echo "the name of the user who offers that skill is : ";
			$requestname = mysqli_query($db_link, "select `name` from `user_data` where `student_id` = '$idwhooffers' ");
			$value3 = mysqli_fetch_array($requestname, MYSQLI_ASSOC);
			$namewhooffers= $value3['name'];
			echo $namewhooffers; echo "<br />\n";
			echo "<br />\n";
   
		}
		*/
	   ?>
	</p>
	


	<!----start---foot------- -->
		<br> <br>	
	<br> <br>	


	<!------end--foot--------- -->



</body>
</html>


<script>

	$(document).ready(function(){
      //CHANGE THE SKILLS WHEN THE CATEGORY CHANGE  DROPDOWN--->>>>>
        function loadingMax($firstSelect,$secondSelect)
        {
            var vall = $($firstSelect).val();
            $.ajax({
              type:'POST',
              url:'registerFetchDB.php',
              dataType: "json",
              data:{vall:vall},
              success:function(data){

                var toAppend = '';
                $($secondSelect+" option").remove();
                toAppend += '<option>-- Select an Option --</option>';
                $($secondSelect).append(toAppend);
                $.each(data,function(index,element){
                    $($secondSelect).append("<option value='"+element.idskill+"'  id='"+element.idskill+"' >" + element.nameskill + "</option>");
                });
              }  
            });
        }
        $('#slct_category1').change(function(){
           loadingMax("#slct_category1","#sub_category1");
        });
  });

</script>


<script>   // TO SHOW THE SEARCH RESULTS
$(document).ready(function() {
    $("#submitb").click(function(){
    	var selectedValue = $('#sub_category1').find(":selected").val();

    	$.ajax({

	       	url:'registerFetchDB.php',
	        dataType: "json",
	        method: 'POST',
	        data: {selectedValue : selectedValue},
	        success: function(data) {

	        	var res = "<p>"
			$.each(data,function(index,element){
                    res += "Username: " + element.name + "\n ";



                });

			res += "</p>";
			$("#thisp").html(res);	             
	        }


    	});

  
    }); 
});
</script>



	

<!----start------------>

<!------end------------->

