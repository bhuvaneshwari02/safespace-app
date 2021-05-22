<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
<link href="style.css" rel="stylesheet">
<link href="scrolling-nav.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

<style>

.icon-red {
        color: light-blue;
      }
</style>

</head>
<body >
<body id="page-top">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top"><span style="font-size:20px">Safe Space</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
		
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
            <a class="nav-link js-scroll-trigger" href="list_file.php"><span style="font-size:14px">Back</span></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


<div class="frame">
	<div class="center">
		<div class="title">
			<h1>Drop file to upload</h1>
		</div>
<form action="fileupload.php" method="post" enctype="multipart/form-data" >
		<div class="dropzone">
			<img src="http://100dayscss.com/codepen/upload.svg" class="upload-icon" />
			<input type="file" class="upload-input" name="myfile"/>
		</div>
<br>
		<button type="submit" class="btn" name="save">Upload file</button>

	</div>
	</form>
</div>
</body>
</html>