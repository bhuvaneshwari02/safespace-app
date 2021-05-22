<?php

$connect=mysqli_connect("localhost","id16243312_deepika","eDq\RD8@qEovz[Ho","id16243312_wad_project");
$result="";
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
 $email=$_SESSION['user'];
function make_query($connect)
{
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
 $email=$_SESSION['user'];	

 $query = "SELECT * FROM image where email_id='$email' ORDER BY time  ASC";
 $result = mysqli_query($connect, $query);
  
 return $result;
}

function make_slide_indicators($connect)
{
 $output = ''; 
 $count = 0;
 $result = make_query($connect);
 while($row = mysqli_fetch_array($result))
 {
  if($count == 0)
  {
   $output .= '
   <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'" class="active"></li>
   ';
  }
  else
  {
   $output .= '
   <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'"></li>
   ';
  }
  $count = $count + 1;
 }
 return $output;
}

function make_slides($connect)
{
 $output = '';
 $count = 0;
 $result = make_query($connect);
 while($row = mysqli_fetch_array($result))
 {
  if($count == 0)
  {
   $output .= '<div class="item active">';
  }
  else
  {
   $output .= '<div class="item">';
  }
  $output .= '
   <img src="upload/'.$row["imagename"].'" alt="'.$row["title"].'" />
   <div class="carousel-caption">
    <h3>'.$row["title"].'</h3>
	
   </div>
  </div>
  ';
  $count = $count + 1;
 }
 return $output;
}

?>
<!DOCTYPE html>
<html>
 <head>
 <link href="scrolling-nav.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

 
  <style>
  .btn,a, .btn:visited {
    background-color:green ;
    color: white;
    padding: 10px 10px;
    text-align: center;
    text-decoration:none;
    display: inline-block;
	}
	.btn:hover, .btn:active {
    background-color: red;
	}	
	
.icon-red {
        color: light-blue;
      }

.carousel {
  width:640px;
  height:660px;
}
</style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 
<body id="page-top">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top"><span style="font-size:20px">Safe Space</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
		&emps;&emps;&emps;&emps;&emps;&emps;&emps;&emps;&emps;
		<li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#home"><span class="glyphicon glyphicon-user icon-red"></span></a>
          </li>
          
		<li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#home"><span style="font-size:14px"><?php echo $email?></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="home.php"><span style="font-size:14px">Home</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php"><span style="font-size:14px">Logout</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact"><span style="font-size:14px">Contact Us</span></a>
          </li>
		  <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="show_table.php"><span style="font-size:14px">Delete Image</span></a>
          </li>
		  <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="imageupload.php"><span style="font-size:14px">Upload Image</span></a>
          </li>
		  
        </ul>
      </div>
    </div>
  </nav>
<center>
 <br>
 <?php 
 $result=make_query($connect);
 
 
 if(mysqli_num_rows($result)==0)
 {
	 
	 echo "No Photos are uploaded";
 }
 else
 {?>
  <div class="container">
   
   <br />
   <div id="dynamic_slide_show" class="carousel slide;30-px-wide;" data-ride="carousel"  >
    <ol class="carousel-indicators">
    <?php echo make_slide_indicators($connect); ?>
    </ol>

    <div class="carousel-inner">
     <?php echo make_slides($connect); ?>
    </div>
    <a class="left carousel-control" href="#dynamic_slide_show" data-slide="prev">
     <span class="glyphicon glyphicon-chevron-left"></span>
     <span class="sr-only">Previous</span>
    </a>

    <a class="right carousel-control" href="#dynamic_slide_show" data-slide="next">
     <span class="glyphicon glyphicon-chevron-right"></span>
     <span class="sr-only">Next</span>
    </a>

   </div>
  </div>
 <?php
 }
 ?>
 </body>
</html>