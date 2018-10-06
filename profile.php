<?php 
	  include('connectionDB.php');
		session_start();
		
		$userID = $_SESSION['logged_user'];
	

		$queryAll = "select user_data.name , user_data.email, user_data.phoneNumber, user_data.aboutMe, user_data.status, user_data.photo, user_data.availableTime, department.name_department from user_data, department where user_data.student_id = '$userID' and user_data.id_department = department.id_department";


		$result = mysqli_query($db_link, $queryAll); 
;

		while ($allinfo = mysqli_fetch_array($result)) { 
			$name = $allinfo['name'];
			$email = $allinfo['email'];
			$phoneNumber = $allinfo['phoneNumber'];
			$aboutMe = $allinfo['aboutMe'];
			$status = $allinfo['status'];
			$photo = $allinfo['photo'];
			$availableTime = $allinfo['availableTime'];
			$depName = $allinfo['name_department'];
		}


?>


<!DOCTYPE html>
<html>
	<head>
		<title>My Profile</title>
		<meta charset="utf-8">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="jquery-3.3.1.js"></script>

	</head>

	<body>
		 
  <h1> My profile  </h1> 

	   <!--------------------------------------- START FORM TO UPDATE EACH ELEMENT OF THE PROFILE ---------------------------   -->
	   <form name="editProfile">
	   		<table border="1" align="center" id="showinfoTable">
				<col style="width:25%">
		        <col style="width:25%">
		        <col style="width:25%">
		

				<tr>
	   				<th><h2>My name</h2></th>
	   				<th id="name_th"><h2> <?php echo $name;?> </h2></th>
	   				<th rowspan="6"><h2>Photo</h2></th>
	   				
	   			</tr>
	   			<tr>
	   				<th><h2>My email</h2></th>
	   				<th id="email_th"><h2> <?php echo $email;?> </h2></th>
	   				
	   				
	   			</tr>

	   			<tr>
	   				<th><h2>My phone number</h2></th>
	   				<th><h2><?php echo $phoneNumber;?> </h2></th>
					
	   			</tr>

	   			<tr>
	   				<th><h2>About me</h2></th>
	   				<th><h2>  <?php echo $aboutMe;?> </h2></th>
	   				
	   			</tr>
			   	
			   	<tr>
			   		<th><h2>Status</h2></th>
	   				<th><h2> <?php echo $status;?></h2></th>
	   	
	   			</tr>
	   			<tr>
	   				<th><h2>My available time</h2></th>
	   				<th><h2> <?php echo $availableTime;?></h2> </th>
	   				
	   			</tr>
	   			<tr>
	   				<th><h2>My department</h2></th>
	   				<th><h2> <?php echo $depName;?></h2> </th>
	   				
	   				<th><input type="submit" name="up_picture" value="Update Picture"/></th>
	   			</tr>
		   	</table>

		   		<br><br>
		   	
		   
	   </form>
	   <!--------------------------------------- END OF FORM TO UPDATE EACH ELEMENT OF THE PROFILE ---------------------------   -->


		<button type="button" id="update_button" class="btn btn-info btn-lg edit_data" data-toggle="modal" data-target="#myModal" data-role ="update">Update my info</button>
				<!-- Modal -->
		<div id="myModal" class="modal fade" role="dialog" >
		  <div class="modal-dialog">

		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Modal Header</h4>
		      </div>
		      		<!--------------------------------------- START OF THE FIELDS TO BE UPDATED ---------------------------   -->
		      <div class="modal-body">
		      	<form class="form-horizontal" id="myForm" name="myForm" action="#" data-toggle="validator">
		      		<div class="form-group">
		      		<label>Name</label>
		      		<input type="text" id="name_text" name="name_text" class="form-control" required>
		      	</div>
		      	<div class="form-group">
		      		<label>Email</label>
		      		<input type="text" id="email_text" name="email_text" class="form-control" required>
		      	</div>
		      	<div class="form-group">
		      		<label>Phone Number</label>
		      		<input type="text" id="number_text" class="form-control" required>
		      	</div>
		      	<div class="form-group">
		      		<label>About Me</label>
		      		<input type="text" id="about_text" class="form-control" required>
		      	</div>
		      	<div class="form-group">
		      		<label>Status</label>
		      		<input type="text" id="status_text" class="form-control" required>
		      	</div>

				<div class="form-group" >
				  <label>College</label>
				   <select id="slctCollege" name="slctCollege" required >
	              		<option value="0">----- Select one -----</option>
	              		<?php
		                    include("connectionDB.php");
		                    $seldb = @mysqli_select_db($db_link, "skillsdb");
		                    if(!$seldb) die("Error loading the DB!");
		                    $sql_getCollege = "Select * from college;";
		                    $result_getCollege = mysqli_query($db_link, $sql_getCollege);
		                    if($result_getCollege)
		                    {
		                      while($row_gtCol = mysqli_fetch_assoc($result_getCollege))
		                      {
		                        echo "<option name='optCol' value='".$row_gtCol["id_college"]."' id='".$row_gtCol["id_college"]."' >".$row_gtCol["name"]."</option>";
		                      }
		                    }else
		                    {
		                      do_alert("Error Loading the Colleges from the DB");
		                    }
	              		?>
           			 </select>
           		</div>

				<div class="form-group"  >
				  <label>Department</label>
           			 	<select id="slctDepartment" name="slctDepartment" required >
                		<option value = 0>--- Select one ---</option>
             			 </select>
				</div>

		      <div class="modal-footer">

		      	<!--<a href="#" id="save" class="btn btn-primary pull-right">Update</a> -->
		      	<button id="updateInfo" type="submit" class="saveInfo btn btn-primary " data-id="">Update</button>
		        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
		      </div>
		  	</form>
		    </div>

		  </div>
		</div>

	</body>

</html>


<script>   						//TO SHOW THE DATA IN BOOTSTRAP

$(document).ready(function() {
/*
	$("#myForm").submit(function(e){
                		e.preventDefault();
                		if ($('#slctDepartment').val() == 0) { alert("Department is required");}
                    return false;
                });*/


	$(document).on('click', '.edit_data', function(){
		var studentid = <?php echo $userID ?> ;

		$.ajax({
	       	url:'updateFetch.php',
	        dataType: "json",
	        method: 'POST',
	        data: {studentid : studentid},
	        success: function(data) {

			$.each(data,function(index,element){
				$('#name_text').val(element.name);   
                $('#email_text').val(element.email);   
			   $('#number_text').val(element.phoneNumber);  
			   $('#about_text').val(element.aboutMe);  
			   $('#status_text').val(element.status);  
			   $('#department_text').val(element.department);  
		

			   $('#slctCollege').val(element.idcollege);
			   $('#slctCollege').change();
			   $('#slctCollege').change();
			  $('#myModal').modal('show');
			  
                });
	        }
    	});
	});

								//TO SUBMIT THE FORM AFTER FIELDS HAVE BEEN UPDATED 
			

	$('#updateInfo').on('click', function(e){
		
		var name =  $("#name_text").val() ;
		var email =  $("#email_text").val() ;
		var phoneNumber = $('#number_text').val();
		var aboutMe = $('#about_text').val();
		var status = $('#status_text').val();
		var department = $('#slctDepartment').val();



if(name && email && phoneNumber && aboutMe && status) {
	if ($('#slctDepartment').val() == 0) { alert("Department is required inside update info ");}

		var insert =  "name=" + "'"+ name+"'" + ", email=" + "'"+ email+"'" + ", phoneNumber=" + "'"+ phoneNumber +"'" + ", aboutMe=" + "'" + aboutMe + "'" + ", status=" + "'" +status+"'" + ", id_department=" + "'" + department +"'";	

		$.ajax({
			       	url:'updateFetch.php',
			        dataType: "text",
			        method: 'POST',
			        data: {insert : insert},
			        success: function(data) {
		                if(data == "success"){
            			alert("Data has been updated");
		             
			        }
			        else
			        	alert("Error updating data, please try again later")
			    }
		    	});


}
	});

});
</script>

<script>
	  $(document).ready(function(){
	 	var choosedpt = "";
	 var flag=1;
	 	$('#slctCollege').change(function(){

		var col = $("#slctCollege").val();
	
			
						 //CALL TO GET THE COLLEGE DEPARTMENT 
				if(flag==1){

 					var collid = col;
       				$.ajax({
				       	url:'updateFetch.php',
				        dataType: "text",
				        method: 'POST',
				        data: {collid : collid},
				        success: function(data) {
				     
			                if(data){
			        
			                 		choosedpt = data;
	            			
				        }
				        else
				        	alert("There was a problem");
				    	}
		    		});

       					flag =2;
            	 //END OF THE  CALL 	

				}

			 $.ajax({

			            type:'POST',
			            url:'registerFetchDB.php',
			            dataType: "json",
			            data:{col:col},
			            success:function(datacol){

			              var toAppend_col = '';
			              $('#slctDepartment').empty();
			              
			              toAppend_col += '<option value = "0">--- Select a Department ---</option>';
			              $('#slctDepartment').append(toAppend_col);
			              $.each(datacol,function(index_col, element_col){
			                 	
				              	if(element_col.iddepartment!=choosedpt){
				              			

				              			 $('#slctDepartment').append("<option value='"+element_col.iddepartment+"'  id='"+element_col.iddepartment+"' >" + element_col.namedepartment + "</option>");
				              	}

			              	else{
			              	

			                	$('#slctDepartment').append("<option selected value='"+element_col.iddepartment+"'  id='"+element_col.iddepartment+"' >" + element_col.namedepartment + "</option>");
			              	}


			              });
			            }
			          });

		

        });
});



</script>

 <script>
            $(function(){
                $("#myForm").submit(function(e){
                //	e.preventDefault();
                    return false;
                })
            })
 </script> 

