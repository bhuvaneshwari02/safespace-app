<?php
// connect to the database
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
 $email=$_SESSION['user'];
?>
<html>
<title>Notes Taker </title>
<head>
<style>

.icon-red {
        color: light-blue;
      }


</style>

<meta charset="UTF-8">
<meta http-equiv="X-UA-compatible" content="IE-edge">
<meta name="viewport" content="width=device-width">
<link href="scrolling-nav.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">


  <script src="index.css"></script>
</style>
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
		&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
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
            <a class="nav-link js-scroll-trigger" href="notestable1.php"><span style="font-size:14px">Back</span></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<div style="background-color:rgba(100,200,255,0.5);" align="center"><h2></h2></div>
<link href="style.css" rel="stylesheet">
<br><br>


<div class="frame">
	<div class="center">
		<div class="title">
			<h1>Save your notes</h1>
		</div>
<form action="noteslogic.php" method="post" enctype="multipart/form-data" >
	<div class="form-group">
     <center><label for="Title">Title</label>
<br><input type="text" class="form-control" required="required" name="title" class="resizedTextbox" class="animated bounce infinite"><br>
	
    <textarea class="form-control" id="content" name="content" rows="3"></textarea>
  </div>

 
		<center><button type="submit" class="btn" name="save" value="save">Save</button>
</center>
	
	</form>
</div>
</div>
</body>
</html>