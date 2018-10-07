<?php
  session_start();

?>
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
      <label id="lblFile" >Choose a picture to upload</label>
      <input id="image_file" name="image_file" type="file" accept="image/*" >
      <input type="hidden" name="action" id="action" value="insert" />
     <input type="hidden" name="image_id" id="image_id" />
      <input type="submit" id="sumit" class="submitBtn" name="sumit" value="Register" />
    </form> 
    <p class="message">Already registered? <a href="">Sign In</a></p>
  </form>
</div>
</body>
<script>
  $(document).ready(function(e){
   
    //var stid = $(location).attr('stid');

    function getURLParameter(sParam)
    {
      var sPageURL = window.location.search.substring(1);
      var sURLVariables = sPageURL.split('&');
      for(var i = 0; i<sURLVariables.length;i++)
      {
        var sParameterName = sURLVariables[i].split('=');
        if(sParameterName[0] == sParam)
        {
          return sParameterName[1];
        }
      }
    }
    var stid = getURLParameter('stid');
    $('#register_form').on('submit',function(e){
      $('#action').val('insert');
      var image_name = $('#image_file').val();
      if(image_name == '')
      {
          alert("Please Select Image");
          return false;
      }else
      {
          var extension = $('#image_file').val().split('.').pop().toLowerCase();
          if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
          {
            alert("Invalid Image File");
            $('#image').val('');
            return false;
          }else
          {
            $.ajax({
              url:"insertImageDB18Aug.php?stid="+stid,
              method:"POST",
              data:new FormData(this),
              contentType:false,
              processData:false,
              cache: false,
              success:function(data)
              {
                if(data=="valid")
                {
                  alert("Succeed");
                  window.location.href = "login-page.php";
                }else
                {
                    alert("not succeed");
                }
                
              }
            });
          }
      }
          /*
          $.ajax({
            type: 'POST',
            url: 'insertImageDB26July.php',
            data : new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            beforeSed: function()
            {
              $('.submitBtn').attr("disabled","disabled");
              $('#register_form').css("opacity",".5");
            },
            success: function(msg)
            {
              $('.submitBtn').removeAttr("disabled");
              $('#register_form').css("opacity","");
              if(msg == 'ok'){
                window.location.href = "dashboardFirstPage27July.php";
              }else if(msg == 'err')
              {
                 alert("Error INSERTING the value in DB");
              }
            }
          });
        */
    });

    $("#file").change(function()
    {
      var file = this.files[0];
      var imagefile = file.type;
      var match = ["image/jpeg","image/png","image/jpg"];
      if(!( (imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2]) ))
      {
        alert('Please select a valid image file (JPEG/JPG/PNG).');
        $("#file").val('');
        return false;
      }
    });
  });
</script>
