<?php

include 'includes/db_connx.php';
include 'includes/errors.php';

if(isset($_POST["submit"])) {


$target_dir = "images/"; //target directory for images

$target_file = $target_dir . basename($_FILES["uploaded"]["name"]); //full pathname of image

//if the image is successfully moved to its new location
    if (move_uploaded_file($_FILES["uploaded"]["tmp_name"], $target_file)) {

        //$imagePathName = $target_dir. basename( $_FILES["uploaded"]["name"]);
        echo $target_file; //you can use $imagePathName var to store path name in the database
       
          
    } 
//if the image is not successfully moved to its new location
	else {
        echo "There was an error uploading your file.";
    }


}


?>

