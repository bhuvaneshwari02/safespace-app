<?php
$conn=mysqli_connect("localhost","root","","database123");
if(!$conn)
{
    die("Connection Failed".mysqli_connect_error());

}

$error = '';
if(isset($_POST['login']))
{
	session_start();
$_SESSION['user']=$_POST['email'];
$email = $_POST['email'];
$password = $_POST['psw'];
$sql_query ="Select email from registration where email='$email' and password='$password' ";
$result =mysqli_query($conn,$sql_query);
$count=mysqli_num_rows($result);		
      if($count == 1) {
         
         header("Location:home.php");
      }else {
         $error .= '<p class="error">Your Login Name or Password is invalid';
      }
   }
?>
<html>
<head>


<link rel="stylesheet" href="decoration.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body style="background-image: url('homebg.jpg');">
<div class="container px-4 py-5 mx-auto">
    
        <div class="d-flex flex-lg-row flex-column-reverse">
		<div class="a">
            <div class="card card1 transbox">
                <div class="row justify-content-center my-auto">
                    <div class="col-md-8 col-10 my-5">
                        <div class="row justify-content-center px-3 mb-3"> <img id="logo" src="logo.png"> </div>
                        <h3 class="mb-5 text-center heading">Safe Space</h3>
                        <h6 class="msg-info">Please login to your account</h6>
						
						<strong><?php echo $error; ?></strong> 


						<form action="index.php" method="POST">
                        <div class="form-group"> <label class="form-control-label text-muted">Username</label> <input type="text" id="email" name="email" placeholder="Email id" class="form-control"> </div><br>
                        <div class="form-group"> <label class="form-control-label text-muted">Password</label> <input type="password" id="psw" name="psw" placeholder="Password" class="form-control"> </div>
                        <div class="row justify-content-center my-3 px-3"> <button class="btn-block btn-color" name="login" >Login to Safe Space</button> </div>
                        <div class="row justify-content-center my-2"> <a href="#"><small class="text-muted">Forgot Password?</small></a> </div>
                    </form>
					</div>
                </div>
                <div class="bottom text-center mb-5">
                    <p href="#" class="sm-text mx-auto mb-3">Don't have an account?&nbsp;<button class="btn btn-white ml-2"><a href="Registration.php">Create new</a></button></p>
                </div>
            </div>
           </div>  
        </div>
    
</div>
</body>
</html>