<?php 
include 'dbconfig.php';
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
 $email=$_SESSION['user'];
 if(isset($_POST['save'])){
	$title = $_POST['title'];
	$contents=$_POST['content'];
	$uploadtime = date("Y-m-d H:i:s");
	

 $sql = "INSERT INTO notes(email_id,title,content,time) VALUES ('$email','$title','$contents','$uploadtime')";
 if (mysqli_query($con, $sql)) {
                header("Location:list_image.php");
            }
         else {
			 ?>
            <script>
				alert("Failed to Upload Notes");
			</script>
<?php
			header("Location:imageupload.php");								}
				}
			
	 											
 ?>