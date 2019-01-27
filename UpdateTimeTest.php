
<head>
  <meta charset="UTF-8">
  <title>NDHU Skill Exchange System</title>
  

  <script src="jquery-3.3.1.js"></script>
  <script src="jquery-3.3.1.min.js"></script>
  
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
      
      
          
        
      <!-- *******************************************************  --> 
      
        <!--------------------------------------- SKILL CATEGORY SECTION ---------------------------   -->
        <!--------------------------------------- SKILL CATEGORY SECTION ---------------------------   -->
        <p>
            <?php 
              include("connectionDB.php");
              $counter = 1;
             
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
    
      <input type="submit" id="sumit" name="sumit" value="Register" />
    </form> 
   
  </form>
</div>
</body>
<script>
 

    //****************************************************************************************************
    //****************************************************************************************************
    //****************************************************************************************************
    //****************************************************************************************************
    //                                       SUBMIT FORM FUNCTION
     

    $("#register_form").on('submit',function(e)
      {
               
                var flag_var = false;

                //-------------------------------------------------------------------------------------------------------------------
                //--------------------------------------Checkbox selected For the schedule-------------------------------------------
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
                }

                    else
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

                    }
                    else if(flag_var == false)
                    {
                      var funcChekingVar = false;
                   //   checkingUserVerf(studentid_valuetxt);
          
                     
                      var totalArray = [];
                      var checkingUser = false;
                      
                      totalArray[0]=myArray; //myArray for the Time
                      totalArray[1] = counter_array; //Number of data in myArray
                
                     
                      //**********************************************************************************************
                      //**********************************************************************************************
                      //THIS AJAX FUNCTION WILL HAPPEN ONLY IF THE FUNCTION RETURNS FALSE (MEANS NO USER FOUND WITH THAT ID)
                      function finalCall()
                      {
                          
                            $.ajax({
                              method:'POST',
                              url:'updateTimeFetch.php',
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
                          
                      }

                    }

               
      });//Submit Form closing mark
    //SET THE GENERAL VALUES FROM EACH ITEM SO CAN BE TAKEN WHEN THE FORM IS SUBMITTED.

</script>