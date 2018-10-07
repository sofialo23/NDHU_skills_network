<?php
    session_start();
	include("connectionDB.php");
    $valid_extensions = array('jpeg','jpg','png','gif','bmp','pdf','doc','ppt');
    $path = 'uploads/';
    //echo "ID---".$_GET['stid']." '";
    $stid = $_GET["stid"];
    if(!empty($_FILES["image_file"]))
    {
        $img = $_FILES["image_file"]["name"];
        $tmp = $_FILES["image_file"]["tmp_name"];

        $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));

        $final_image = rand(1000,1000000).$img;

        if(in_array($ext,$valid_extensions))
        {
            $path = $path.strtolower($final_image);
            if(move_uploaded_file($tmp, $path))
            {
                //echo "valid";
                //echo $_SESSION["usr"];
                $insert = "UPDATE user_data SET photo='".$path."' WHERE student_id='".$stid."'";
                //echo "--El Insert".$insert."-------";
                $result_insertPic = mysqli_query($db_link,$insert);
                if($result_insertPic)
                {
                    echo "valid";
                }else
                {
                    echo " no insert";
                }
                //echo $result_insertPic?'ok':'err';
            }else
            {
                echo "not moved";
            }
        }else
        {
            echo 'invalid';
        }
    }else
    {
        echo "empty";
    }

    /*
    if(!empty($_FILES['file']['name']))
	{
		$uploadedFile = '';
        if(!empty($_FILES["file"]["type"]))
        {
            $fileName = time().'_'.$_FILES['file']['name'];
            $valid_extensions = array("jpeg", "jpg", "png");
            $temporary = explode(".", $_FILES["file"]["name"]);
            $file_extension = end($temporary);
            if((($_FILES["hard_file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")) && in_array($file_extension, $valid_extensions)){
                $sourcePath = $_FILES['file']['tmp_name'];
                $targetPath = "uploads/".$fileName;
                if(move_uploaded_file($sourcePath,$targetPath)){
                    $uploadedFile = $fileName;
                }else
                {
                    echo "3RD IF";
                }
            }else
            {
                echo "2nd IF";
            }
        }else
        {
            echo "First IF";
        }
        $insertPic = "UPDATE table 'user_data' SET 'photo'='".$uploadedFile."' WHERE 'student_id'=".$_SESSION["usr"]."';";
        $result_insertPic = mysqli_query($db_link,$insertPic);
        echo $result_insertPic?'ok':'err';
	}else
    {
        echo "GENERAL IF";
    }
    */
?>