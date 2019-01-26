
<?php
function create_time_range($start, $end, $interval = '30 mins', $format = '24') {
    $startTime = strtotime($start); 
    $endTime   = strtotime($end);
    $returnTimeFormat = ($format == '12')?'g:i A':'G:i';

    $current   = time(); 
    $addTime   = strtotime('+'.$interval, $current); 
    $diff      = $addTime - $current;

    $times = array(); 
    while ($startTime < $endTime) { 
        $times[] = date($returnTimeFormat, $startTime); 
        $startTime += $diff; 
    } 
    $times[] = date($returnTimeFormat, $startTime); 
        foreach ($times as $value) {
        }
    return $times; 
}

$times = create_time_range('06:00', '23:00', '30 mins');
$range = create_time_range('01:00', '6:00', '30 mins');
?>


<!DOCTYPE html>
<html>
<body>
    <form id="register_form" class="register_form" enctype="multipart/form-data" method="POST" name="register_form" action="test2.php">
 
        <div name="mondiv" id="mondiv">    <!---MONDAY DIV -->
            <h3>Monday</h3>
            <input type="radio" name="mon_chbox" id="mon_allday" value="mon_allday" /> All day <br>
            <input type="radio" name="mon_chbox" id="mon_chbox" value="mon_chbox" /> Select my available time <br>
            <select name = "monStarDrop1" id = "mon_select1" disabled="true"> 
                <option value="0">Select Time</option>
                <?php foreach($times as $key=>$val){ ?>
                <option value="<?php echo $val; ?>"><?php echo $val; ?></option>
                <?php } ?>
            </select> 
            <select name = "monEndDrop1" id = "mon_select2" disabled="true"> 
                <option value="0">Select Duration</option>
                <?php foreach($range as $key=>$val){ ?>
                <option value="<?php echo $val; ?>"><?php echo $val; ?></option>
                <?php } ?>
            </select> <br>
            <select name = "monStarDrop2" id = "mon_select3" disabled="true">
                <option value="0">Select Time</option>
                <?php foreach($times as $key=>$val){ ?>
                <option value="<?php echo $val; ?>"><?php echo $val; ?></option>
                <?php } ?>
            </select> 
            <select name = "monEndDrop2" id = "mon_select4" disabled="true"> 
                <option value="0">Select Duration</option>
                <?php foreach($range as $key=>$val){ ?>
                <option value="<?php echo $val; ?>"><?php echo $val; ?></option>
                <?php } ?>
            </select> 
        </div>    <br>     
        <div name="tuediv" id="tuediv">    <!---TUESDAY DIV -->
            Tuesday <br>
            <input type="checkbox" name="tue_chbox" id="tue_chbox" value="tue_chbox" /> Select my available time <br>
            <select name = "tueStarDrop1" id = "tue_select1" disabled="true"> 
                <option value="0">Select Time</option>
                <?php foreach($times as $key=>$val){ ?>
                <option value="<?php echo $val; ?>"><?php echo $val; ?></option>
                <?php } ?>
            </select> 
            <select name = "tueEndDrop1" id = "tue_select2" disabled="true"> 
                <option value="0">Select Duration</option>
                <?php foreach($range as $key=>$val){ ?>
                <option value="<?php echo $val; ?>"><?php echo $val; ?></option>
                <?php } ?>
            </select> <br>
            <select name = "tueStarDrop2" id = "tue_select3" disabled="true">
                <option value="0">Select Time</option>
                <?php foreach($times as $key=>$val){ ?>
                <option value="<?php echo $val; ?>"><?php echo $val; ?></option>
                <?php } ?>
            </select> 
            <select name = "tueEndDrop2" id = "tue_select4" disabled="true"> 
                <option value="0">Select Duration</option>
                <?php foreach($range as $key=>$val){ ?>
                <option value="<?php echo $val; ?>"><?php echo $val; ?></option>
                <?php } ?>
            </select> 
        </div> <br>
        <div name="weddiv" id="weddiv">
            <input type="checkbox" name="wed_chbox" id="wed_chbox" /> Wednesday 
            <select name = "wedStarDrop1" id = "wedStarDrop1" disabled="true"> </select> 
            <select name = "wedEndDrop1" id = "wedEndDrop1" disabled="true"> </select> 
            <select name = "wedStarDrop2" id = "wedStarDrop2" disabled="true"> </select> 
            <select name = "wedEndDrop2" id = "wedEndDrop2" disabled="true"> </select> 
        </div>
        <div name="thudiv" id="thudiv">
            <input type="checkbox" name="thu_chbox" id="thu_chbox" /> Thusday
            <select name = "thuStarDrop1" id = "thuStarDrop1" disabled="true"> </select>
            <select name = "thuEndDrop1" id = "thuEndDrop1" disabled="true"> </select> 
            <select name = "thuStarDrop2" id = "thuStarDrop2" disabled="true"> </select> 
            <select name = "thuEndDrop2" id = "thuEndDrop2" disabled="true"> </select> 
        </div>
        <div name="fridiv" id="fridiv">
            <input type="checkbox" name="fri_chbox" id="fri_chbox" /> Friday 
            <select name = "friStarDrop1" id = "friStarDrop1" disabled="true"> </select> 
            <select name = "friEndDrop1" id = "friEndDrop1" disabled="true"> </select> 
            <select name = "friStarDrop2" id = "friStarDrop2" disabled="true"> </select> 
            <select name = "friEndDrop2" id = "friEndDrop2" disabled="true"> </select> 
        </div>
        <div name="satdiv" id="satdiv">
            <input type="checkbox" name="sat_chbox" id="sat_chbox"  /> Saturday
            <select name = "satStarDrop1" id = "satStarDrop1" disabled="true"> </select>
            <select name = "satEndDrop1" id = "satEndDrop1" disabled="true"> </select> 
            <select name = "satStarDrop2" id = "satStarDrop2" disabled="true"> </select> 
            <select name = "satEndDrop2" id = "satEndDrop2" disabled="true"> </select> 
        </div>
        <div name="sundiv" id="sundiv">
            <input type="checkbox" name="sun_chbox" id="sun_chbox"  /> Sunday 
            <select name = "sunStarDrop1" id = "sunStarDrop1" disabled="true"> </select> 
            <select name = "sunEndDrop1" id = "sunEndDrop1" disabled="true"> </select> 
            <select name = "sunStarDrop2" id = "sunStarDrop2" disabled="true"> </select> 
            <select name = "sunEndDrop2" id = "sunEndDrop2" disabled="true"> </select> 
        </div> 
        <input type="submit" name="submit" id="submit" value="Register">
    </form>
</body>
</html>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript"></script>
<script>

$(document).ready(function(e) {   // the conditions below ACTIVATE/DEACTIVATE the dropdown menus to insert the time depending on the day

    $('input[name="mon_chbox"]').change(function(){    //MONDAY
        (($(this).is(":checked"))&& ($(this).val()) == 'mon_chbox') ? enableDrops('#mon_select', 1) : disableallDrops('#mon_select');
    });
    $('input[name="tue_chbox"]').change(function(){    //TUESDAY
        ($(this).is(":checked"))? enableDrops('#tue_select', 1) : disableDrops('#tue_select');
    });
    $('input[name="wed_chbox"]').change(function(){    //WEDNESDAY
        ($(this).is(":checked"))? enableDrops('weddiv') : disableDrops('weddiv');
    });
    $('input[name="thu_chbox"]').change(function(){    //THURSDAY
        ($(this).is(":checked"))? enableDrops('thudiv') : disableDrops('thudiv');
    });
    $('input[name="fri_chbox"]').change(function(){    //FRIDAY
        ($(this).is(":checked"))? enableDrops('fridiv') : disableDrops('fridiv');
    });
    $('input[name="sat_chbox"]').change(function(){    //SATURDAY
        ($(this).is(":checked"))? enableDrops('satdiv') : disableDrops('satdiv');
    });
    $('input[name="sun_chbox"]').change(function(){    //SUNDAY
        ($(this).is(":checked"))? enableDrops('sundiv') : disableDrops('sundiv');
    });

});


                //function to enable dropdowns after checkbox is clicked or a dropdown changes
    function enableDrops(divname, num) {/*  
        $('#'+ divname +' select').each(function (index, value){
                    $(this).attr('disabled', false);
                });   */     
        var currentVar = divname + num;
        $(currentVar).attr('disabled', false);

        $(currentVar).click(function(){

         switch(currentVar){    //switch that identifies which dropdown is modified and activates/deactivates the others
                    case (divname+1): console.log(currentVar);
                        if($(currentVar).val()==0){
                            disableDrops(divname,2);
                            disableDrops(divname,3);
                            disableDrops(divname,4);    
                        }
                        else{
                            enableDrops(divname,2);
                        } break;

                    case (divname+2): console.log(currentVar);
                        if($(currentVar).val()==0){
                            disableDrops(divname,3);
                            disableDrops(divname,4);    
                        }
                        else{
                            enableDrops(divname,3);
                        } break;
                          
                    case divname+3: console.log(currentVar);
                        if($(currentVar).val()==0){
                            disableDrops(divname,4);    
                        }
                        else{
                            enableDrops(divname,4);                 
                        } break;
                }
        });
    }

                    
     function disableDrops(divname, num) { //function that disables all the dropdown menus for the time after the checkbox for that day has been unchecked 
       /* $('#'+ divname +' select').each(function (index, value){
                    $(this).attr('disabled', true);
                });   */      
         $(divname + num).attr('disabled', true); 
    }

    function disableallDrops(divname) { //function that disables all drops since the day checkbox is checked
        $(divname+1).attr("disabled",true);
        $(divname+2).attr("disabled",true);
        $(divname+3).attr("disabled",true);
        $(divname+4).attr("disabled",true);
    }


    $("#register_form").submit(function(event){
        event.preventDefault();
        
    if( $("input[name='mon_chbox']:checked").length > 0  )
            {
                var timeString="";
              $('#mondiv select').each(function (index, value){
                
               var hour = (this.value);
               timeString+=hour;
               timeString+="-";
                console.log(hour);

            });  
                
        console.log(timeString);
        }
 console.log("again");
 console.log(timeString);
            $.ajax({
            url:'updateTimeFetch.php',
            dataType: "json",
            method: 'POST',
            data: {timeString : timeString},
            success: function(data) {

          
            }

        });





    });



 

</script>




