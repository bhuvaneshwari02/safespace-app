<html>
<head>
<style>
.error {color: #FF0000;}
</style>
<link rel="stylesheet" href="decoration.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<?php
    $conn=mysqli_connect("localhost","root","","database123");
    if(!$conn)
    {
        die("Connection Failed".mysqli_connect_error());

    }
    $first_name=$last_name=$email=$password=$error=" ";
    if(isset($_POST['register']))
    {
        $first_name = $_POST['fname'];
        $last_name = $_POST['lname'];
        $email = $_POST['email'];
        $password = $_POST['psw'];
        $password1 = $_POST['psw1'];
        if(empty($first_name)) {
            header("Location:Registration.php?error=fname&fname=".$first_name."&email=".$email."&lname=".$last_name);
        }
        else if(empty($last_name)) {
            header("Location:Registration.php?error=lname&fname=".$first_name."&email=".$email."&lname=".$last_name);
        }
        else if(empty($email)) {
            header("Location:Registration.php?error=email&fname=".$first_name."&email=".$email."&lname=".$last_name);
        } 
        else if (empty($password)) {
            header("Location:Registration.php?error=pswd&fname=".$first_name."&email=".$email."&lname=".$last_name);
        } 
        else if(empty($password1)){
            header("Location:Registration.php?error=pswd1&fname=".$first_name."&email=".$email."&lname=".$last_name);
        }
        else if($password!=$password1) {
            header("Location:Registration.php?error=notSame&fname=".$first_name."&email=".$email."&lname=".$last_name);   
        }
		else if (strlen($password)<7) {
            header("Location:Registration.php?error=pswdl&fname=".$first_name."&email=".$email."&lname=".$last_name);
		}
        else{
            $sql_query = "INSERT INTO registration (first_name,last_name,email,password) VALUES('$first_name','$last_name','$email','$password')";
            if( mysqli_query($conn,$sql_query))
            {
                header("Location:index.php");
            }
			else
			{
				 $error .= '<p class="error">Already a user of Safe Space';
			}
		}
        mysqli_close($conn);
    }
?>
<div class="container px-4 py-5 mx-auto">
    <div class="d-flex flex-lg-row flex-column-reverse">
    <div class="a">
        <div class="card card1 transbox" style="width: 30rem;">
            <div class="row justify-content-center my-auto">
                <div class="col-md-8 col-10 my-5">
                    <div class="row justify-content-center px-3 mb-3"> <img id="logo" src="logo.png"> </div>
                    <h3 class="mb-5 text-center heading">Safe Space</h3>
                    <h6 class="msg-info">Register here to get started!</h6>
                    <?php
                        include "valid.php";
                    ?>
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"  method="Post">
					<?php echo $error;?>
                        <div class="form-group"> <label class="form-control-label text-muted">First Name<span class="error"> * <?php echo $nameErr; ?></span></label> <input type="text" id="fname" name="fname" placeholder="First Name" value="<?php echo $getFirst; ?>" class="form-control"></div><br>
                        <div class="form-group"> <label class="form-control-label text-muted">Last Name<span class="error"> * <?php echo $lnameErr; ?></label> <input type="text" id="lname" name="lname" placeholder="Last Name" value="<?php echo $getLast; ?>" class="form-control"></span></div><br>
                        <div class="form-group"> <label class="form-control-label text-muted">Email<span class="error"> * <?php echo $mail; ?></label> <input type="email" id="email" name="email" placeholder="Email id" value="<?php echo $getMail; ?>" class="form-control"></span></div><br>
                        <div class="form-group"> <label class="form-control-label text-muted">Password<span class="error"> * <?php echo $paswd; ?><?php echo $passl; ?></span> </label> <input type="password" id="psw" name="psw" placeholder="Password" class="form-control"></div><br>
                        <div class="form-group"> <label class="form-control-label text-muted">Retype-Password<span class="error"> * <?php echo $paswd1; ?><?php echo $same; ?></label> <input type="password" id="psw1" name="psw1" placeholder="Retype-Password" class="form-control"></span> </div><br>
                        <div class="row justify-content-center my-3 px-3"> <button class="btn-block btn-color" name="register" >Register</button> </div>
                        
                    </form>
                </div>
            </div>
        </div>
        </div> 
    </div>
</div>
</body>
</html>