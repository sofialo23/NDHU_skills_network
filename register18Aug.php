
<head>
  <meta charset="UTF-8">
  <title>NDHU Skill Exchange System</title>
  

  <script src="../jquery-3.3.1.js"></script>
  <script src="../jquery-3.3.1.min.js"></script>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="css/style.css"> 

  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script  type="text/javascript" href="index.js"></script>

</head>
<body>
  <div class="container">
    <div class="info">
      <h1>Student Skill Exchange System</h1><span>Made with <i class="fa fa-heart"></i> by <a href="http://www.ndhu.edu.tw/bin/home.php?Lang=zh-tw">NDHU Students</a></span>
    </div>
  </div>
<div class="form">
  <div class="thumbnail"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/hat.svg"/></div>
    <form class="register_form" enctype="multipart/form-data" method="POST" id="register_form" name="register_form"  >
      <p style="color:red">*</p><input type="text" id="firstname" name="firstname" placeholder="Full Name" required="required"/>
      <p style="display:none" id="lblfirstname" ><label style="color:red" >Minimum 3 Characters</label></p>      
      <p style="color:red">*</p><input type="text" id="studentId" name="studentId" placeholder="Student ID" maxlength="12" required="required"/>
      <p style="display:none" id="available" ><label style="color:green" >Available </label></p>
      <p style="display:none" id="notAvailable"><label style="color:red"> Not Available</label></p>
      <p style="display:none" id="lblStudentId" ><label style="color:red" >Minimum 3 Characters</label></p>
      <p style="color:red">*</p><input type="password" id="password" name="password" placeholder="password" required="required"/>  
      <p style="display:none" id="lblpassword"><label style="color:red"  >Minimum 8 Characters</label></p>
      <p style="color:red">*</p><input type="text" id="phoneNum" name="phoneNum" placeholder="Phone Number Ex:(0999999999)" maxlength="15" required="required"/>
      <p style="display:none" id="lblPhoneNum"><label style="color:red"  ></label></p>    
        <p style="color:red">*</p><p><label> Choose your College:   </label></p>
          <p>
            <select id="slctCollege" name="slctCollege">
              <option value="0">----- Select one -----</option>
              <?php
                    include("connectionDB.php");
                    $seldb = @mysqli_select_db($db_link, "skillsdb");
                    if(!$seldb) die("資料庫選擇失敗！The DB went to shit!");
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
          </p>
          <p style="color:red">*</p>
          <p><label> Choose your Department:   </label></p>
          <p>
              <select id="slctDepartment" name="slctDepartment">
                <option>--- Select one ---</option>
              </select>
          </p>  
      <!-- *******************************************************  --> 
      <p style="color:red">*</p>
      <input type="text" id="email" name="email" placeholder="email address (example@gmail.com)" required="required"/>
      <p style="display:none" id="lblemail" name="lblemail"><label style="color:red"  >Minimum 7 Characters</label></p>
        <!--------------------------------------- SKILL CATEGORY SECTION ---------------------------   -->
        <!--------------------------------------- SKILL CATEGORY SECTION ---------------------------   -->
        <p>
            <?php 
              include("connectionDB.php");
              $counter = 1;
              while($counter<=3)
              {
                echo "<p><label> Please Choose the category of your skill".$counter." </label></p>";
                if($counter==1)
                {
                  echo "<p style='color:red'>*</p>";
                }
                $seldb = @mysqli_select_db($db_link, "skillsdb");
                if(!$seldb) die("資料庫選擇失敗！Error cagado");
                $sql_getCategory = "SELECT * FROM `category_skill` ;";
                $result_getCategory = mysqli_query($db_link, $sql_getCategory);
                if($counter == 1)
                {
                    echo "<select name='slct_category".$counter."' id='slct_category".$counter."' >";
                }else
                {
                  echo "<select name='slct_category".$counter."' id='slct_category".$counter."' disabled>";
                }
                echo "<option name='slc_category".$counter."' id='slct_category".$counter."' value='0' selected='selected' >Select a Category</option>";
                if($result_getCategory)
                {
                  while($row_result = mysqli_fetch_assoc($result_getCategory))
                  {
                    echo "<option value='".$row_result["id_category"]."' name='skill_category".$counter."' id='".$row_result["id_category"]."'>".$row_result["name_category"]."</option>";
                  }
                }
                echo "</select></p>";
                echo "<p><label> Please Choose the Sub-Category".$counter." </label></p>";
                echo "<p>";
                if($counter==1)
                {
                  echo "<p style='color:red'>*</p>";
                  echo "<select name='sub_category".$counter."' id='sub_category".$counter."'>";
                }else
                {
                    echo "<select name='sub_category".$counter."' id='sub_category".$counter."' disabled>";  
                }
                
                echo "<p>";
                echo "<option>-- Select a sub category --</option>";
                echo "</select></p>";
                /*
                echo "<p>  <label> Specify your skill (In case there you didn't find the sub-category ):  </label> </p>"; 
                echo "<p>  <input type='text' name='spcSkill".$counter."' id='spcSkill".$counter."'  required='required' /></p>";
                */
                $counter +=1;
              }
            ?>
      <!--------------------------------------- SKILL CATEGORY SECTION ---------------------------   -->
      <!--------------------------------------- SKILL CATEGORY SECTION ---------------------------   -->
      <table border="1" align="center" width="300" id="days_table" name="days_table">
      <tr> 
        <td> <input type="checkbox" name="chck_days" value="Sun" />Sunday<br /> </td>
        <td> <input type="checkbox" name="chck_days" value="Mon" />Monday<br /> </td>
      </tr>
      <tr>
        <td>
          <table id="sunday_table" name="sunday_table">
            <tr>
              <td>
                <select id="Sun_select1" >
                	<option value='0' name='drpMenuTime' id="drpMenuTime" >--</option>
                   	<option value='6:00' name='drpMenuTime' id='drpMenuTime'>6:00</option>
                   	<option value='7:00' name='drpMenuTime' id='drpMenuTime'>7:00</option>
                   	<option value='8:00' name='drpMenuTime' id='drpMenuTime'>8:00</option>
                   	<option value='9:00' name='drpMenuTime' id='drpMenuTime'>9:00</option>
                   	<option value='10:00' name='drpMenuTime' id='drpMenuTime'>10:00</option>
                   	<option value='11:00' name='drpMenuTime' id='drpMenuTime'>11:00</option>
                   	<option value='12:00' name='drpMenuTime' id='drpMenuTime'>12:00</option>
                   	<option value='13:00' name='drpMenuTime' id='drpMenuTime'>13:00</option>
                   	<option value='14:00' name='drpMenuTime' id='drpMenuTime'>14:00</option>
                   	<option value='15:00' name='drpMenuTime' id='drpMenuTime'>15:00</option>
                   	<option value='16:00' name='drpMenuTime' id='drpMenuTime'>16:00</option>
                   	<option value='17:00' name='drpMenuTime' id='drpMenuTime'>17:00</option>
                   	<option value='18:00' name='drpMenuTime' id='drpMenuTime'>18:00</option>
                   	<option value='19:00' name='drpMenuTime' id='drpMenuTime'>19:00</option>
                   	<option value='20:00' name='drpMenuTime' id='drpMenuTime'>20:00</option>
                   	<option value='21:00' name='drpMenuTime' id='drpMenuTime'>21:00</option>
                   	<option value='22:00' name='drpMenuTime' id='drpMenuTime'>22:00</option>
                   	<option value='23:00' name='drpMenuTime' id='drpMenuTime'>23:00</option>
                </select> 
                <select id="Sun_select2" >
                	<option value='0' name='drpMenuDrtn' id="drpMenuTime" >--</option>
                    <option value='1:00' name='drpMenuDrtn' id='drpMenuDrtn'>1:00 hr</option>
                    <option value='1:30' name='drpMenuDrtn' id='drpMenuDrtn'>1:30 hr</option>
                    <option value='2:00' name='drpMencuDrtn.' id='drpMenuDrtn'>2:00 hr</option>
                    <option value='2:30' name='drpMenuDrtn' id='drpMenuDrtn'>2:30 hr</option>
                    <option value='3:00' name='drpMenuDrtn' id='drpMenuDrtn'>3:00 hr</option>
                    <option value='3:30' name='drpMenuDrtn' id='drpMenuDrtn'>3:30 hr</option>
                    <option value='4:00' name='drpMenuDrtn' id='drpMenuDrtn'>4:00 hr</option>
                    <option value='4:30' name='drpMenuDrtn' id='drpMenuDrtn'>4:30 hr</option>
                    <option value='5:00' name='drpMenuDrtn' id='drpMenuDrtn'>5:00 hr</option>
                    <option value='5:30' name='drpMenuDrtn' id='drpMenuDrtn'>5:30 hr</option>
                    <option value='6:00' name='drpMenuDrtn' id='drpMenuDrtn'>6:00 hr</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>
                  <select id="Sun_select3"  >
                     <option value='0' name='drpMenuTwoTime' id="drpMenuTime" >--</option>
                     <option value='6:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>6:00</option>
                     <option value='7:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>7:00</option>
                     <option value='8:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>8:00</option>
                     <option value='9:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>9:00</option>
                     <option value='10:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>10:00</option>
                     <option value='11:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>11:00</option>
                     <option value='12:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>12:00</option>
                     <option value='13:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>13:00</option>
                     <option value='14:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>14:00</option>
                     <option value='15:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>15:00</option>
                     <option value='16:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>16:00</option>
                     <option value='17:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>17:00</option>
                     <option value='18:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>18:00</option>
                     <option value='19:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>19:00</option>
                     <option value='20:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>20:00</option>
                     <option value='21:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>21:00</option>
                     <option value='22:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>22:00</option>
                     <option value='23:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>23:00</option>
                  </select>
                  <select id="Sun_select4" >
                     <option value='0' name='drpMenuTwoDrtn' id="drpMenuTwoDrtn" >--</option><!-- <option value='0' name'drpMenuTwoDrtn' id="drpMenuTwoDrtn" >----</option>-->
                      <option value='1:00' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>1:00 hr</option><option value='1:30' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>1:30 hr</option><option value='2:00' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>2:00 hr</option><option value='2:30' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>2:30 hr</option><option value='3:00' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>3:00 hr</option><option value='3:30' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>3:30 hr</option><option value='4:00' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>4:00 hr</option><option value='4:30' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>4:30 hr</option><option value='5:00' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>5:00 hr</option><option value='5:30' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>5:30 hr</option><option value='6:00' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>6:00 hr</option>
                  </select>
              </td>
            </tr>
          </table>
        </td>
        <td>
          <table id="monday_table" name="monday_table">
            <tr>
              <td>
                <select id="Mon_select1" name="mondaY_select1" >
                   <option value='0' name='drpMenuTime' id="drpMenuTime" >--</option>
                   <option value='6:00' name='drpMenuTime' id='drpMenuTime'>6:00</option><option value='7:00' name='drpMenuTime' id='drpMenuTime'>7:00</option><option value='8:00' name='drpMenuTime' id='drpMenuTime'>8:00</option><option value='9:00' name='drpMenuTime' id='drpMenuTime'>9:00</option><option value='10:00' name='drpMenuTime' id='drpMenuTime'>10:00</option><option value='11:00' name='drpMenuTime' id='drpMenuTime'>11:00</option><option value='12:00' name='drpMenuTime' id='drpMenuTime'>12:00</option><option value='13:00' name='drpMenuTime' id='drpMenuTime'>13:00</option><option value='14:00' name='drpMenuTime' id='drpMenuTime'>14:00</option><option value='15:00' name='drpMenuTime' id='drpMenuTime'>15:00</option><option value='16:00' name='drpMenuTime' id='drpMenuTime'>16:00</option><option value='17:00' name='drpMenuTime' id='drpMenuTime'>17:00</option><option value='18:00' name='drpMenuTime' id='drpMenuTime'>18:00</option><option value='19:00' name='drpMenuTime' id='drpMenuTime'>19:00</option>
                   <option value='20:00' name='drpMenuTime' id='drpMenuTime'>20:00</option><option value='21:00' name='drpMenuTime' id='drpMenuTime'>21:00</option><option value='22:00' name='drpMenuTime' id='drpMenuTime'>22:00</option><option value='23:00' name='drpMenuTime' id='drpMenuTime'>23:00</option>
                </select> 
                <select id="Mon_select2" name="monday_select2"  >
                    <option value='0' name='drpMenuDrtn' id="drpMenuTime" >--</option>
                     <option value='1:00' name='drpMenuDrtn' id='drpMenuDrtn'>1:00 hr</option><option value='1:30' name='drpMenuDrtn' id='drpMenuDrtn'>1:30 hr</option><option value='2:00' name='drpMencuDrtn.' id='drpMenuDrtn'>2:00 hr</option><option value='2:30' name='drpMenuDrtn' id='drpMenuDrtn'>2:30 hr</option><option value='3:00' name='drpMenuDrtn' id='drpMenuDrtn'>3:00 hr</option><option value='3:30' name='drpMenuDrtn' id='drpMenuDrtn'>3:30 hr</option><option value='4:00' name='drpMenuDrtn' id='drpMenuDrtn'>4:00 hr</option><option value='4:30' name='drpMenuDrtn' id='drpMenuDrtn'>4:30 hr</option><option value='5:00' name='drpMenuDrtn' id='drpMenuDrtn'>5:00 hr</option><option value='5:30' name='drpMenuDrtn' id='drpMenuDrtn'>5:30 hr</option>
                     <option value='6:00' name='drpMenuDrtn' id='drpMenuDrtn'>6:00 hr</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>
                  <select id="Mon_select3" name="monday_select3" >
                   <option value='0' name='drpMenuTwoTime' id="drpMenuTime" >--</option>
                     <option value='6:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>6:00</option><option value='7:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>7:00</option><option value='8:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>8:00</option><option value='9:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>9:00</option><option value='10:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>10:00</option><option value='11:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>11:00</option><option value='12:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>12:00</option><option value='13:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>13:00</option>
                     <option value='14:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>14:00</option><option value='15:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>15:00</option><option value='16:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>16:00</option><option value='17:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>17:00</option><option value='18:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>18:00</option><option value='19:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>19:00</option><option value='20:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>20:00</option><option value='21:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>21:00</option>
                     <option value='22:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>22:00</option><option value='23:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>23:00</option>
                  </select>
                  <select id="Mon_select4" name="monday_select4" >
                     <option value='0' name='drpMenuTwoDrtn' id="drpMenuTwoDrtn" >--</option>
                      <option value='1:00' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>1:00 hr</option><option value='1:30' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>1:30 hr</option><option value='2:00' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>2:00 hr</option><option value='2:30' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>2:30 hr</option><option value='3:00' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>3:00 hr</option><option value='3:30' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>3:30 hr</option><option value='4:00' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>4:00 hr</option><option value='4:30' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>4:30 hr</option><option value='5:00' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>5:00 hr</option><option value='5:30' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>5:30 hr</option><option value='6:00' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>6:00 hr</option>
                  </select>
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td> <input type="checkbox" name="chck_days" value="Tue"  />Tuesday<br /> </td>
        <td> <input type="checkbox" name="chck_days" value="Wed" />Wednesday<br /> </td>
      </tr>
      <tr>
        <td>
          <table id="tuesday_table" name="tuesday_table">
            <tr>
              <td>
                <select id="Tue_select1" name="tuesday_select1" >
                   <option value='0' name='drpMenuTime' id="drpMenuTime" >--</option>
                   <option value='6:00' name='drpMenuTime' id='drpMenuTime'>6:00</option><option value='7:00' name='drpMenuTime' id='drpMenuTime'>7:00</option><option value='8:00' name='drpMenuTime' id='drpMenuTime'>8:00</option><option value='9:00' name='drpMenuTime' id='drpMenuTime'>9:00</option><option value='10:00' name='drpMenuTime' id='drpMenuTime'>10:00</option><option value='11:00' name='drpMenuTime' id='drpMenuTime'>11:00</option><option value='12:00' name='drpMenuTime' id='drpMenuTime'>12:00</option><option value='13:00' name='drpMenuTime' id='drpMenuTime'>13:00</option><option value='14:00' name='drpMenuTime' id='drpMenuTime'>14:00</option><option value='15:00' name='drpMenuTime' id='drpMenuTime'>15:00</option><option value='16:00' name='drpMenuTime' id='drpMenuTime'>16:00</option><option value='17:00' name='drpMenuTime' id='drpMenuTime'>17:00</option><option value='18:00' name='drpMenuTime' id='drpMenuTime'>18:00</option><option value='19:00' name='drpMenuTime' id='drpMenuTime'>19:00</option>
                   <option value='20:00' name='drpMenuTime' id='drpMenuTime'>20:00</option><option value='21:00' name='drpMenuTime' id='drpMenuTime'>21:00</option><option value='22:00' name='drpMenuTime' id='drpMenuTime'>22:00</option><option value='23:00' name='drpMenuTime' id='drpMenuTime'>23:00</option>
                </select> 
                <select id="Tue_select2" name="tuesday_select2" >
                     <option value='0' name='drpMenuDrtn' id="drpMenuTime" >--</option>
                     <option value='1:00' name='drpMenuDrtn' id='drpMenuDrtn'>1:00 hr</option><option value='1:30' name='drpMenuDrtn' id='drpMenuDrtn'>1:30 hr</option><option value='2:00' name='drpMencuDrtn.' id='drpMenuDrtn'>2:00 hr</option><option value='2:30' name='drpMenuDrtn' id='drpMenuDrtn'>2:30 hr</option><option value='3:00' name='drpMenuDrtn' id='drpMenuDrtn'>3:00 hr</option><option value='3:30' name='drpMenuDrtn' id='drpMenuDrtn'>3:30 hr</option><option value='4:00' name='drpMenuDrtn' id='drpMenuDrtn'>4:00 hr</option><option value='4:30' name='drpMenuDrtn' id='drpMenuDrtn'>4:30 hr</option><option value='5:00' name='drpMenuDrtn' id='drpMenuDrtn'>5:00 hr</option><option value='5:30' name='drpMenuDrtn' id='drpMenuDrtn'>5:30 hr</option>
                     <option value='6:00' name='drpMenuDrtn' id='drpMenuDrtn'>6:00 hr</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>
                  <select id="Tue_select3" name="tuesday_select3" >
                    <option value='0' name='drpMenuTwoTime' id="drpMenuTime" >--</option>
                     <option value='6:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>6:00</option><option value='7:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>7:00</option><option value='8:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>8:00</option><option value='9:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>9:00</option><option value='10:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>10:00</option><option value='11:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>11:00</option><option value='12:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>12:00</option><option value='13:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>13:00</option>
                     <option value='14:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>14:00</option><option value='15:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>15:00</option><option value='16:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>16:00</option><option value='17:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>17:00</option><option value='18:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>18:00</option><option value='19:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>19:00</option><option value='20:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>20:00</option><option value='21:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>21:00</option>
                     <option value='22:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>22:00</option><option value='23:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>23:00</option>
                  </select>
                  <select id="Tue_select4" name="tuesday_select4" >
                     <option value='0' name='drpMenuTwoDrtn' id="drpMenuTwoDrtn" >--</option>
                      <option value='1:00' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>1:00 hr</option><option value='1:30' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>1:30 hr</option><option value='2:00' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>2:00 hr</option><option value='2:30' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>2:30 hr</option><option value='3:00' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>3:00 hr</option><option value='3:30' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>3:30 hr</option><option value='4:00' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>4:00 hr</option><option value='4:30' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>4:30 hr</option><option value='5:00' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>5:00 hr</option><option value='5:30' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>5:30 hr</option><option value='6:00' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>6:00 hr</option>
                  </select>
              </td>
            </tr>
          </table>
        </td>
        <td>
          <table id="wednesday_table" name="wednesday_table">
            <tr>
              <td>
                <select id="Wed_table1" name="wednesday_table1" >
                   <option value='0' name='drpMenuTime' id="drpMenuTime" >--</option>
                   <option value='6:00' name='drpMenuTime' id='drpMenuTime'>6:00</option><option value='7:00' name='drpMenuTime' id='drpMenuTime'>7:00</option><option value='8:00' name='drpMenuTime' id='drpMenuTime'>8:00</option><option value='9:00' name='drpMenuTime' id='drpMenuTime'>9:00</option><option value='10:00' name='drpMenuTime' id='drpMenuTime'>10:00</option><option value='11:00' name='drpMenuTime' id='drpMenuTime'>11:00</option><option value='12:00' name='drpMenuTime' id='drpMenuTime'>12:00</option><option value='13:00' name='drpMenuTime' id='drpMenuTime'>13:00</option><option value='14:00' name='drpMenuTime' id='drpMenuTime'>14:00</option><option value='15:00' name='drpMenuTime' id='drpMenuTime'>15:00</option><option value='16:00' name='drpMenuTime' id='drpMenuTime'>16:00</option><option value='17:00' name='drpMenuTime' id='drpMenuTime'>17:00</option><option value='18:00' name='drpMenuTime' id='drpMenuTime'>18:00</option><option value='19:00' name='drpMenuTime' id='drpMenuTime'>19:00</option>
                   <option value='20:00' name='drpMenuTime' id='drpMenuTime'>20:00</option><option value='21:00' name='drpMenuTime' id='drpMenuTime'>21:00</option><option value='22:00' name='drpMenuTime' id='drpMenuTime'>22:00</option><option value='23:00' name='drpMenuTime' id='drpMenuTime'>23:00</option>
                </select> 

                <select id="Wed_table2" name="wednesday_table2" >
                   <option value='0' name='drpMenuDrtn' id="drpMenuTime" >--</option>
                     <option value='1:00' name='drpMenuDrtn' id='drpMenuDrtn'>1:00 hr</option><option value='1:30' name='drpMenuDrtn' id='drpMenuDrtn'>1:30 hr</option><option value='2:00' name='drpMencuDrtn.' id='drpMenuDrtn'>2:00 hr</option><option value='2:30' name='drpMenuDrtn' id='drpMenuDrtn'>2:30 hr</option><option value='3:00' name='drpMenuDrtn' id='drpMenuDrtn'>3:00 hr</option><option value='3:30' name='drpMenuDrtn' id='drpMenuDrtn'>3:30 hr</option><option value='4:00' name='drpMenuDrtn' id='drpMenuDrtn'>4:00 hr</option><option value='4:30' name='drpMenuDrtn' id='drpMenuDrtn'>4:30 hr</option><option value='5:00' name='drpMenuDrtn' id='drpMenuDrtn'>5:00 hr</option><option value='5:30' name='drpMenuDrtn' id='drpMenuDrtn'>5:30 hr</option>
                     <option value='6:00' name='drpMenuDrtn' id='drpMenuDrtn'>6:00 hr</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>
                  <select id="Wed_table3" name="wednesday_table3">
                      <option value='0' name='drpMenuTwoTime' id="drpMenuTime" >--</option>
                     <option value='6:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>6:00</option><option value='7:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>7:00</option><option value='8:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>8:00</option><option value='9:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>9:00</option><option value='10:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>10:00</option><option value='11:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>11:00</option><option value='12:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>12:00</option><option value='13:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>13:00</option>
                     <option value='14:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>14:00</option><option value='15:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>15:00</option><option value='16:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>16:00</option><option value='17:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>17:00</option><option value='18:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>18:00</option><option value='19:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>19:00</option><option value='20:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>20:00</option><option value='21:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>21:00</option>
                     <option value='22:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>22:00</option><option value='23:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>23:00</option>
                  </select>
                  <select id="Wed_table4" name="wednesday_table4">
                      <option value='0' name='drpMenuTwoDrtn' id="drpMenuTwoDrtn" >--</option>
                      <option value='1:00' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>1:00 hr</option><option value='1:30' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>1:30 hr</option><option value='2:00' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>2:00 hr</option><option value='2:30' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>2:30 hr</option><option value='3:00' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>3:00 hr</option><option value='3:30' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>3:30 hr</option><option value='4:00' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>4:00 hr</option><option value='4:30' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>4:30 hr</option><option value='5:00' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>5:00 hr</option><option value='5:30' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>5:30 hr</option><option value='6:00' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>6:00 hr</option>
                  </select>
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td> <input type="checkbox" name="chck_days" value="Thu"  />Thursday<br /> </td>
        <td> <input type="checkbox" name="chck_days" value="Fri" />Friday<br /> </td>
      </tr>
      <tr>
        <td>
          <table id="thursday_table" name="thursday_table">
            <tr>
              <td>
                <select id="Thu_select1" name="thursday_select1" >
                   <option value='0' name='drpMenuTime' id="drpMenuTime" >--</option>
                   <option value='6:00' name='drpMenuTime' id='drpMenuTime'>6:00</option><option value='7:00' name='drpMenuTime' id='drpMenuTime'>7:00</option><option value='8:00' name='drpMenuTime' id='drpMenuTime'>8:00</option><option value='9:00' name='drpMenuTime' id='drpMenuTime'>9:00</option><option value='10:00' name='drpMenuTime' id='drpMenuTime'>10:00</option><option value='11:00' name='drpMenuTime' id='drpMenuTime'>11:00</option><option value='12:00' name='drpMenuTime' id='drpMenuTime'>12:00</option><option value='13:00' name='drpMenuTime' id='drpMenuTime'>13:00</option><option value='14:00' name='drpMenuTime' id='drpMenuTime'>14:00</option><option value='15:00' name='drpMenuTime' id='drpMenuTime'>15:00</option><option value='16:00' name='drpMenuTime' id='drpMenuTime'>16:00</option><option value='17:00' name='drpMenuTime' id='drpMenuTime'>17:00</option><option value='18:00' name='drpMenuTime' id='drpMenuTime'>18:00</option><option value='19:00' name='drpMenuTime' id='drpMenuTime'>19:00</option>
                   <option value='20:00' name='drpMenuTime' id='drpMenuTime'>20:00</option><option value='21:00' name='drpMenuTime' id='drpMenuTime'>21:00</option><option value='22:00' name='drpMenuTime' id='drpMenuTime'>22:00</option><option value='23:00' name='drpMenuTime' id='drpMenuTime'>23:00</option>
                </select> 

                <select id="Thu_select2" name="thursday_select2" >
                      <option value='0' name='drpMenuDrtn' id="drpMenuTime" >--</option>
                     <option value='1:00' name='drpMenuDrtn' id='drpMenuDrtn'>1:00 hr</option><option value='1:30' name='drpMenuDrtn' id='drpMenuDrtn'>1:30 hr</option><option value='2:00' name='drpMencuDrtn.' id='drpMenuDrtn'>2:00 hr</option><option value='2:30' name='drpMenuDrtn' id='drpMenuDrtn'>2:30 hr</option><option value='3:00' name='drpMenuDrtn' id='drpMenuDrtn'>3:00 hr</option><option value='3:30' name='drpMenuDrtn' id='drpMenuDrtn'>3:30 hr</option><option value='4:00' name='drpMenuDrtn' id='drpMenuDrtn'>4:00 hr</option><option value='4:30' name='drpMenuDrtn' id='drpMenuDrtn'>4:30 hr</option><option value='5:00' name='drpMenuDrtn' id='drpMenuDrtn'>5:00 hr</option><option value='5:30' name='drpMenuDrtn' id='drpMenuDrtn'>5:30 hr</option>
                     <option value='6:00' name='drpMenuDrtn' id='drpMenuDrtn'>6:00 hr</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>
                  <select id="Thu_select3" name="thursday_select3">
                     <option value='0' name='drpMenuTwoTime' id="drpMenuTime" >--</option>
                     <option value='6:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>6:00</option><option value='7:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>7:00</option><option value='8:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>8:00</option><option value='9:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>9:00</option><option value='10:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>10:00</option><option value='11:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>11:00</option><option value='12:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>12:00</option><option value='13:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>13:00</option>
                     <option value='14:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>14:00</option><option value='15:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>15:00</option><option value='16:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>16:00</option><option value='17:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>17:00</option><option value='18:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>18:00</option><option value='19:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>19:00</option><option value='20:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>20:00</option><option value='21:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>21:00</option>
                     <option value='22:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>22:00</option><option value='23:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>23:00</option>
                  </select>
                  <select id="Thu_select4" name="thursday_select4" >
                      <option value='0' name='drpMenuTwoDrtn' id="drpMenuTwoDrtn" >--</option>
                      <option value='1:00' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>1:00 hr</option><option value='1:30' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>1:30 hr</option><option value='2:00' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>2:00 hr</option><option value='2:30' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>2:30 hr</option><option value='3:00' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>3:00 hr</option><option value='3:30' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>3:30 hr</option><option value='4:00' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>4:00 hr</option><option value='4:30' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>4:30 hr</option><option value='5:00' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>5:00 hr</option><option value='5:30' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>5:30 hr</option><option value='6:00' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>6:00 hr</option>
                  </select>
              </td>
            </tr>
          </table>
        </td>
        <td>
          <table id="friday_table" name="friday_table">
            <tr>
              <td>
                <select id="Fri_select1" name="friday_select1" >
                   <option value='0' name='drpMenuTime' id="drpMenuTime" >--</option>
                   <option value='6:00' name='drpMenuTime' id='drpMenuTime'>6:00</option><option value='7:00' name='drpMenuTime' id='drpMenuTime'>7:00</option><option value='8:00' name='drpMenuTime' id='drpMenuTime'>8:00</option><option value='9:00' name='drpMenuTime' id='drpMenuTime'>9:00</option><option value='10:00' name='drpMenuTime' id='drpMenuTime'>10:00</option><option value='11:00' name='drpMenuTime' id='drpMenuTime'>11:00</option><option value='12:00' name='drpMenuTime' id='drpMenuTime'>12:00</option><option value='13:00' name='drpMenuTime' id='drpMenuTime'>13:00</option><option value='14:00' name='drpMenuTime' id='drpMenuTime'>14:00</option><option value='15:00' name='drpMenuTime' id='drpMenuTime'>15:00</option><option value='16:00' name='drpMenuTime' id='drpMenuTime'>16:00</option><option value='17:00' name='drpMenuTime' id='drpMenuTime'>17:00</option><option value='18:00' name='drpMenuTime' id='drpMenuTime'>18:00</option><option value='19:00' name='drpMenuTime' id='drpMenuTime'>19:00</option>
                   <option value='20:00' name='drpMenuTime' id='drpMenuTime'>20:00</option><option value='21:00' name='drpMenuTime' id='drpMenuTime'>21:00</option><option value='22:00' name='drpMenuTime' id='drpMenuTime'>22:00</option><option value='23:00' name='drpMenuTime' id='drpMenuTime'>23:00</option>
                </select> 

                <select  id="Fri_select2" name="friday_select2" >
                      <option value='0' name='drpMenuDrtn' id="drpMenuTime" >--</option>
                     <option value='1:00' name='drpMenuDrtn' id='drpMenuDrtn'>1:00 hr</option><option value='1:30' name='drpMenuDrtn' id='drpMenuDrtn'>1:30 hr</option><option value='2:00' name='drpMencuDrtn.' id='drpMenuDrtn'>2:00 hr</option><option value='2:30' name='drpMenuDrtn' id='drpMenuDrtn'>2:30 hr</option><option value='3:00' name='drpMenuDrtn' id='drpMenuDrtn'>3:00 hr</option><option value='3:30' name='drpMenuDrtn' id='drpMenuDrtn'>3:30 hr</option><option value='4:00' name='drpMenuDrtn' id='drpMenuDrtn'>4:00 hr</option><option value='4:30' name='drpMenuDrtn' id='drpMenuDrtn'>4:30 hr</option><option value='5:00' name='drpMenuDrtn' id='drpMenuDrtn'>5:00 hr</option><option value='5:30' name='drpMenuDrtn' id='drpMenuDrtn'>5:30 hr</option>
                     <option value='6:00' name='drpMenuDrtn' id='drpMenuDrtn'>6:00 hr</option>
                </select>
              </td>
            </tr>
            <tr>
              <td> 
                  <select  id="Fri_select3" name="friday_select3">
                     <option value='0' name='drpMenuTwoTime' id="drpMenuTime" >--</option> 
                     <option value='6:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>6:00</option><option value='7:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>7:00</option><option value='8:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>8:00</option><option value='9:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>9:00</option><option value='10:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>10:00</option><option value='11:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>11:00</option><option value='12:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>12:00</option><option value='13:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>13:00</option>
                     <option value='14:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>14:00</option><option value='15:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>15:00</option><option value='16:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>16:00</option><option value='17:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>17:00</option><option value='18:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>18:00</option><option value='19:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>19:00</option><option value='20:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>20:00</option><option value='21:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>21:00</option>
                     <option value='22:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>22:00</option><option value='23:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>23:00</option>
                  </select>
                  <select id="Fri_select4" name="friday_select4">
                      <option value='0' name='drpMenuTwoDrtn' id="drpMenuTwoDrtn" >--</option>
                      <option value='1:00' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>1:00 hr</option><option value='1:30' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>1:30 hr</option><option value='2:00' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>2:00 hr</option><option value='2:30' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>2:30 hr</option><option value='3:00' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>3:00 hr</option><option value='3:30' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>3:30 hr</option><option value='4:00' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>4:00 hr</option><option value='4:30' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>4:30 hr</option><option value='5:00' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>5:00 hr</option><option value='5:30' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>5:30 hr</option><option value='6:00' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>6:00 hr</option>
                  </select>
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
          <td> <input type="checkbox" name="chck_days" value="Sat"  />Saturday<br /> </td>
      </tr>
      <tr>
        <td>
          <table id="saturday_table" name="saturday_table">
            <tr>
              <td>
                <select id="Sat_select1" name="saturday_select1" >
                   <option value='0' name='drpMenuTime' id="drpMenuTime" >--</option>
                   <option value='6:00' name='drpMenuTime' id='drpMenuTime'>6:00</option><option value='7:00' name='drpMenuTime' id='drpMenuTime'>7:00</option><option value='8:00' name='drpMenuTime' id='drpMenuTime'>8:00</option><option value='9:00' name='drpMenuTime' id='drpMenuTime'>9:00</option><option value='10:00' name='drpMenuTime' id='drpMenuTime'>10:00</option><option value='11:00' name='drpMenuTime' id='drpMenuTime'>11:00</option><option value='12:00' name='drpMenuTime' id='drpMenuTime'>12:00</option><option value='13:00' name='drpMenuTime' id='drpMenuTime'>13:00</option><option value='14:00' name='drpMenuTime' id='drpMenuTime'>14:00</option><option value='15:00' name='drpMenuTime' id='drpMenuTime'>15:00</option><option value='16:00' name='drpMenuTime' id='drpMenuTime'>16:00</option><option value='17:00' name='drpMenuTime' id='drpMenuTime'>17:00</option><option value='18:00' name='drpMenuTime' id='drpMenuTime'>18:00</option><option value='19:00' name='drpMenuTime' id='drpMenuTime'>19:00</option>
                   <option value='20:00' name='drpMenuTime' id='drpMenuTime'>20:00</option><option value='21:00' name='drpMenuTime' id='drpMenuTime'>21:00</option><option value='22:00' name='drpMenuTime' id='drpMenuTime'>22:00</option><option value='23:00' name='drpMenuTime' id='drpMenuTime'>23:00</option>
                </select> 

                <select id="Sat_select2" name="saturday_select2" >
                     <option value='0' name='drpMenuDrtn' id="drpMenuTime" >--</option>
                     <option value='1:00' name='drpMenuDrtn' id='drpMenuDrtn'>1:00 hr</option><option value='1:30' name='drpMenuDrtn' id='drpMenuDrtn'>1:30 hr</option><option value='2:00' name='drpMencuDrtn.' id='drpMenuDrtn'>2:00 hr</option><option value='2:30' name='drpMenuDrtn' id='drpMenuDrtn'>2:30 hr</option><option value='3:00' name='drpMenuDrtn' id='drpMenuDrtn'>3:00 hr</option><option value='3:30' name='drpMenuDrtn' id='drpMenuDrtn'>3:30 hr</option><option value='4:00' name='drpMenuDrtn' id='drpMenuDrtn'>4:00 hr</option><option value='4:30' name='drpMenuDrtn' id='drpMenuDrtn'>4:30 hr</option><option value='5:00' name='drpMenuDrtn' id='drpMenuDrtn'>5:00 hr</option><option value='5:30' name='drpMenuDrtn' id='drpMenuDrtn'>5:30 hr</option>
                     <option value='6:00' name='drpMenuDrtn' id='drpMenuDrtn'>6:00 hr</option>
                </select>

              </td>
            </tr>
            <tr>
              <td>

                  <select id="Sat_select3" name="saturday_select3">
                    <option value='0' name='drpMenuTwoTime' id="drpMenuTime" >--</option>
                     <option value='6:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>6:00</option><option value='7:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>7:00</option><option value='8:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>8:00</option><option value='9:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>9:00</option><option value='10:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>10:00</option><option value='11:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>11:00</option><option value='12:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>12:00</option><option value='13:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>13:00</option>
                     <option value='14:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>14:00</option><option value='15:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>15:00</option><option value='16:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>16:00</option><option value='17:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>17:00</option><option value='18:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>18:00</option><option value='19:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>19:00</option><option value='20:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>20:00</option><option value='21:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>21:00</option>
                     <option value='22:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>22:00</option><option value='23:00' name='drpMenuTwoTime' id='drpMenuTwoTime'>23:00</option>
                  </select>
                  <select id="Sat_select4" name="saturday_select4" >
                      <option value='0' name='drpMenuTwoDrtn' id="drpMenuTwoDrtn" >--</option>
                      <option value='1:00' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>1:00 hr</option><option value='1:30' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>1:30 hr</option><option value='2:00' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>2:00 hr</option><option value='2:30' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>2:30 hr</option><option value='3:00' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>3:00 hr</option><option value='3:30' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>3:30 hr</option><option value='4:00' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>4:00 hr</option><option value='4:30' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>4:30 hr</option><option value='5:00' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>5:00 hr</option><option value='5:30' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>5:30 hr</option><option value='6:00' name='drpMenuTwoDrtn' id='drpMenuTwoDrtn'>6:00 hr</option>
                  </select>
              </td>
            </tr>
          </table>
        </td>
      </tr> 
 
    </table>
    <input type="text" id="btMe" name="btMe" placeholder="About Me" required /> 
    <p style="display:none" id="lblaboutme" name="lblaboutme" ><label style="color:red" >Minimum 25 characters </label></p>  
      <input type="submit" id="sumit" name="sumit" value="Register" />
    </form> 
    <p class="message">Already registered? <a href="index.php">Sign In</a></p>
  </form>
</div>
</body>
<script>
  //Going to make the validations here with JQUERY.
     //CHANGE THE SKILLS WHEN THE CATEGORY CHANGE  DROPDOWN--->>>>>1
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
    //CHANGE THE SKILLS WHEN THE CATEGORY CHANGE  DROPDOWN--->>>>>2
    $('#slct_category2').change(function(){
      loadingMax("#slct_category2","#sub_category2");
    });
    //CHANGE THE SKILLS WHEN THE CATEGORY CHANGE  DROPDOWN--->>>>>3
    $('#slct_category3').change(function(){
      loadingMax("#slct_category3","#sub_category3");
    }); 

    $("#sub_category1").change(function(){
      if(  $("#sub_category1").val() != "0" )
      {
          $("#slct_category2").prop("disabled",false);
          $("#sub_category2").prop("disabled",false);
      }
    });
    $("#sub_category2").change(function(){
      if(  $("#sub_category2").val() != "0" )
      {
          $("#slct_category3").prop("disabled",false);
          $("#sub_category3").prop("disabled",false);
      }
    });

    //Just put a function for each 2 first selected time interval dropdown
    //so the other 2 time interval dropdown can be disabled=false.
    //have to be asked on each function for the event changed() of each
    //dropdown to disabled=false the other two. can not be asked only once.


    //TO LOAD THE DEPARTMENTS WHEN THE COLLEGE CHANGES
    $('#slctCollege').change(function(){
      var col = $("#slctCollege").val();
      $.ajax({
        type:'POST',
        url:'registerFetchDB.php',
        dataType: "json",
        data:{col:col},
        success:function(datacol){
          var toAppend_col = '';
          $('#slctDepartment').empty();
          toAppend_col += '<option>--- Select a Department ---</option>';
          $('#slctDepartment').append(toAppend_col);
          $.each(datacol,function(index_col, element_col){
            $('#slctDepartment').append("<option value='"+element_col.iddepartment+"'  id='"+element_col.iddepartment+"' >" + element_col.namedepartment + "</option>");
          });
        }
      });
    });
  /*
    $('#my_image_file').change( function(){
        var tmppath = URL.createObjectURL(event.target.files[0]);
        $("my_image_file").attr("src",URL.createObjectURL(event.target.files[0]));
    }); 
    */
    //TAKING THE RED LABELS SINCE THE TEXT HAS NO ERROR.
    $("#firstname").on('input', function(e){
      if( $("#firstname").val().length > 2 )
      {
          $("#lblfirstname").css("display","none");
      }
    });
    $("#lastname").on('input', function(e){
      if( $("#lastname").val().length > 2 )
      {
          $("#lbllastname").css("display","none");
      }
    });
    $("#password").on('input', function(e){
      if( $("#password").val().length > 8 )
      {
          $("#lblpassword").css("display","none");
      }
    });
    $("#studentid").on('input', function(e){
      if( $("#studentid").val().length > 8 )
      {
          $("#lblstudentid").css("display","none");
      }
    });
    $("#btMe").on('input', function(e){
      if( $("#btMe").val().length >=25  )
      {
          $("#lblaboutme").css("display","none");
      }
    });
    $("#phoneNum").on('input', function(e){
      if( $("#phoneNum").val().length >=25  )
      {
          $("#lblPhoneNum").css("display","none");
      }
    });
    //****************************************************************************************************
    //****************************************************************************************************
    //****************************************************************************************************
    //****************************************************************************************************
    //                                       SUBMIT FORM FUNCTION
    //****************************************************************************************************
    //****************************************************************************************************
    //****************************************************************************************************
    //****************************************************************************************************
     

    $("#register_form").on('submit',function(e)
    {
        var firstname_valuetxt; var phoneNum_valuetxt;
        var password_valuetxt; var studentid_valuetxt;
        var aboutme_valuetxt; var email_valuetxt; 
        var flag_var = false;
        var select_department;
        var slct_category1; var slct_category2;   var slct_category3; 
        var sub_category1;  var sub_category2;    var sub_category3;
        var arrays_subCategories=[];
        var counterArraySubC = 0;
        //var image_name = $("#image_file").val();
        /*if(image_name == '')
        {
          flag_var = true;
        }else
        {
          //var extension = $("#image_file").val().split('.').pop().toLowerCase();
          if(jQuery.inArray(extension,['gif','png','jpg','jpeg']) == -1 )
          {
            flag_var = true;
            alert('Invalid Image File');
            //Invalid Image File
          }
        }*/
        //CHECKING THE COLLEGE SLCT
        if(  $("#slctCollege").val() ==  "0"  )
        {
            //alert("Please Choose a College");
            flag_var = true;
        }else if( $("#slctCollege").val() !=  "0" )
        {
            var select_college = $("#slctCollege").val();
            if( $("#slctDepartment").val() == "0" )
            {
                //alert("Please choose a department");
                flag_var = true;
            }else 
            { 
              //
              select_department = $("#slctDepartment").val();
            }
        }else
        {
            alert("Please Choose a Department.");
        }
        //-------------------------------------------------------------------------------------------------------------------
        //-------------------------------------------------------------------------------------------------------------------
        //--------------------------------------Skills that the user offer to teach------------------------------------------
        //-------------------------------------------------------------------------------------------------------------------
        //-------------------------------------------------------------------------------------------------------------------
        //VALIDATION OF SKILLS:
        if(  ($("#slct_category1").val() != "0") )
        {
        //PREGUNTAR CATEGORIA POR CATEGORIA. 
          if( ($("#sub_category1").val()) != "0")
          {
            sub_category1 = $("#sub_category1").val();
            //ASKING FOR SKILL 2
            arrays_subCategories[counterArraySubC++] = sub_category1;
            //++counterArraySubC;
             if(  ($("#slct_category2").val() != "0") )
            {
                if( ($("#sub_category2").val()) != "0")
                {
                    sub_category2 = $("#sub_category2").val();
                    arrays_subCategories[counterArraySubC++] = sub_category2;
                    //++counterArraySubC;
                    //CHECK FOR SKILL 3
                    if(  ($("#slct_category3").val() != "0")  )
                    {
                        if( ($("#sub_category3").val()) != "0")
                        {
                            sub_category3 = $("#sub_category3").val();
                            arrays_subCategories[counterArraySubC++] = sub_category3;
                            //++counterArraySubC;
                        }else
                        {
                          //alert("Have to choose a sub-category for skill3!");
                          flag_var = true;
                        }
                    }
                }else
                {
                    //alert("Have to chose one sub-category for skill2!");
                    flag_var = true;
                }
            }

          }else
          {
            //alert("Have to choose one sub-category for skill1!");
            flag_var = true;
          }
        }else
        {
          //alert("You have to choose one skill at least");
          flag_var = true;
        }
        //-------------------------------------------------------------------------------------------------------------------
        //-------------------------------------------------------------------------------------------------------------------
        //-------------------------------------------------------------------------------------------------------------------
        //-------------------------------------------------------------------------------------------------------------------

        //<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
        //<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
        //<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
        //                                  VALIDATING INPUT TEXT
        if( $("#firstname").val().length <=2 )
        {
          flag_var = true;
          $("#lblfirstname").css("display","block");
        }else
        {
          firstname_valuetxt =  $("#firstname").val();
        }
        if( $("#studentId").val().length <=2 )
        {
          flag_var = true;
          $("#lblStudentId").css("display","block");
        }else
        {
          studentid_valuetxt =  $("#studentId").val()
        }
        if( $("#password").val().length <=2 )
        {
          flag_var = true;
          $("#lblpassword").css("display","block");
        }else
        {
          password_valuetxt =  $("#password").val();
        }
        if( $("#phoneNum").val().length <=2 )
        {
          flag_var = true;
          $("#lblPhoneNum").css("display","block");
        }else
        {
            phoneNum_valuetxt = $("#phoneNum").val();
        }
        if( $("#btMe").val().length <=2 )
        {
          flag_var = true;
          $("#lblaboutme").css("display","block");
        }else
        {
          aboutme_valuetxt = $("#btMe").val();
        }
        if( $("#email").val().length <= 5 )
        {
            flag_var = true;
            $("#lblemail").css("display","block");

        }else
        {
            email_valuetxt = $("#email").val();
        }
        //-------------------------------------------------------------------------------------------------------------------
        //-------------------------------------------------------------------------------------------------------------------
        //--------------------------------------Checkbox selected For the schedule-------------------------------------------
        //-------------------------------------------------------------------------------------------------------------------
        //-------------------------------------------------------------------------------------------------------------------
        var counter_array = 0;
        var myArray=[];//This is the array of the days and the period of available Time for each.




        if( $("input[name='chck_days']:checked").length > 0  )
        {
          $("input[name='chck_days']:checked").each(function(){

            //I HAVE TO CALL THE PHP THAT INSERTS THE DATA INTO THE db IN HERE. SINCE I DO NOT KNOW HOW MANY CHECKBOX ARE SELECTED,
            //I CAN NOT DECLARE THE VARIABLES OUT OF HERE. 

            //VARS FOR EACH DAY AND ITS TIMES:
            var day_value = (this.value);
            var selec1_value; var selec2_value; var selec3_value; var selec4_value;
            var arrayForTimePeriod1= [];//Only two positions 
            var array_Counter = 0;
            //alert(day_value);
            var i;
            //alert(day_value);
            for(i=1; i<=4;++i){
              var drpDwn_name = "#"+day_value+"_select"+i;
              //alert(drpDwn_name);
              //the odd values of 'i' will be for the start time and the even ones for the duration of the odd value before.
              if(  $(drpDwn_name).val() != "0"  )
              {
                arrayForTimePeriod1[array_Counter++] = $(drpDwn_name).val();
                //alert( $(drpDwn_name).val() );
              }
              //loadingTheAvailableTime(drpDwn_name,arrayForTimePeriod1);
            }
            loadingTheAvailableTime(day_value,arrayForTimePeriod1,array_Counter);
          });
        }else
        {
          flag_var = true;
          //alert("Have to choose at least a day and one period of time");
        }           
        //counter and then the different column example: "dayValue", TimeStart_Array
        function loadingTheAvailableTime( dayValue, arrayAvailable, arrayCounter1)
        {
            myArray[counter_array] = {
                "DayValue":dayValue,
                "TimePeriod": arrayAvailable,
                "counterTime": arrayCounter1
            };
            ++counter_array;
        }

        if( flag_var == true)
        {//user_data_ibfk_2
          e.preventDefault();//In case anything doesn't look right, e.preventDefault() will stop the submit.
          alert("Please Fill up the basic information!");

        }else if(flag_var == false)
        {
          var funcChekingVar = false;
          checkingUserVerf(studentid_valuetxt);
          //alert();
          //SEND THE INFO TO THE REGISTERFETCHDB.PHP
          //myArray for the Time
          //arrays_subCategories array variable for the skills the user offers.
          //var firstname_valuetxt; var phoneNum_valuetxt;
          //var password_valuetxt; var studentid_valuetxt;
          //var aboutme_valuetxt; var email_valuetxt; 
          //select_department for the department of the user.
          var totalArray = [];
          var checkingUser = false;
          totalArray[0] = firstname_valuetxt; 
          totalArray[1]=studentid_valuetxt;
          totalArray[2]=password_valuetxt;
          totalArray[3]=studentid_valuetxt;
          totalArray[4]=phoneNum_valuetxt;
          totalArray[5] = aboutme_valuetxt;
          totalArray[6] = email_valuetxt; 
          totalArray[7]=select_department; 
          totalArray[8]= arrays_subCategories; //Array for the sub-categories of skills selected
          totalArray[9]=myArray; //myArray for the Time
          totalArray[10] = counter_array; //Number of data in myArray
          totalArray[11] = counterArraySubC;//Number of data in the arrays_subCategories array
          //We will check that the user it is not created in the DB.
          //In the ALERT BELOW I HAVE TO CHECK THE TIME SELECTED BY PRINTING ON AN ALERT.
          
          function checkingUserVerf(student_id)
          {
              
              e.preventDefault();
              $.ajax({
                method:'POST',
                url:'checkingUser.php',
                data: {student_id : student_id},
                success:function(data){
                  if(data=="SuccessChk")
                  {
                    funcChekingVar = true;
                    alert("Succeed ");
                    finalCall();
                  }else if(data=="FailedChk")
                  {
                    alert("User already signed up!");
                  }
                }
              });
          }
          //**********************************************************************************************
          //**********************************************************************************************
          //THIS AJAX FUNCTION WILL HAPPEN ONLY IF THE FUNCTION RETURNS FALSE (MEANS NO USER FOUND WITH THAT ID)
          function finalCall()
          {

              if( funcChekingVar == true )
              {
                $.ajax({
                  method:'POST',
                  url:'registerFetchInsertDB18Aug.php',
                  data: {totalArray : totalArray},
                  success:function(data){
                    if(data=="Success")
                    {
                      alert("Both Succeed ");
                      //$("#register_form")[0].reset();
                      window.location.href = "picture18Aug.php?stid="+totalArray[1]+"&";
                    }else if(data=="Failure")
                    {
                      alert("Both Failed!");
                    }else if(data=="FailureIn")
                    {
                      alert("Error Inserting Skills");
                    }
                  }
                });
              }else//This else means that there is an user with the ID used.
              {
                funcChekingVar == false;
                  alert("Please verify the student ID ")
                  
              }


          }


          
        }
        //-------------------------------------------------------------------------------------------------------------------
        //-------------------------------------------------------------------------------------------------------------------
        //--------------------------------------Checkbox selected For the schedule-------------------------------------------
        //-------------------------------------------------------------------------------------------------------------------
        //-------------------------------------------------------------------------------------------------------------------
    });//Submit Form closing mark
    //SET THE GENERAL VALUES FROM EACH ITEM SO CAN BE TAKEN WHEN THE FORM IS SUBMITTED.

</script>