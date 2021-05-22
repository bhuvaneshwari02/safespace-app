<?php 
require 'dbconfig.php';

// connect to the database
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
 $email=$_SESSION['user'];

if($con == FALSE)
{
echo "connection is not done";
}


if(isset($_POST['notification'])){
	$title = $_POST['ntitle'];
	$uploadtime = date("Y-m-d H:i:s");
	$cname = $_FILES['myfile']['name'];
}
if(!empty($cname))	{	
$savename='';
$filename = $_FILES['myfile']['name'];
				$tname = $_FILES['myfile']['tmp_name'];
				$tname = $_FILES['myfile']['tmp_name'];
				$size	= $_FILES['myfile']['size'];
				$name = $_SESSION['user'].date("his");
				$fext = pathinfo($cname, PATHINFO_EXTENSION);
				$fire = pathinfo($name,PATHINFO_FILENAME);
				$savename = $fire.".".$fext;
				$finalfile = "upload/$filename";
														}
		if(!empty($cname)){
	 if($size < 50000000){
				
				if(move_uploaded_file($tname,$finalfile)){
$sql = "INSERT INTO image(email_id,title, imagename, time) VALUES ('$email','$title','$filename','$uploadtime')";
 if (mysqli_query($con, $sql)) {
                header("Location:list_image.php");
            }
         else {?>
            <script>alert("Failed to upload file.");
			</script>
<?php
			header("Location:imageupload.php");								}
				}
			}
	 }
	 											
 ?>