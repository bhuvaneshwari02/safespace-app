
<?php 
include 'dbconfig.php';
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
 $email=$_SESSION['user'];
$result="FALSE";
$name = $_GET['name'];

	$sql = "DELETE FROM notes WHERE title='$name' and email_id='$email'";

$result=mysqli_query($con,$sql);
if($result==TRUE){ ?> <script>
	alert("Data deleted!!!");
			window.location = "notestable.php";
			 </script><?php
}
?>