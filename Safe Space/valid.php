<?php
    $getFirst=$getLast=$getMail="";
    $nameErr=$lnameErr=$mail=$same=$paswd=$paswd1=$passl="";
    if(isset($_GET['fname'])){
        $getFirst=$_GET['fname'];
    }
    else{
        $getFirst="";
    }
    if(isset($_GET['lname'])){
        $getLast=$_GET['lname'];
    }
    else{
        $getLast="";
    }
    if(isset($_GET['email'])){
        $getMail=$_GET['email']; 
    }
    else{
        $getMail="";
    }
    if(isset($_GET['error'])){
        $err=$_GET['error'];
        if($err=="fname"){
            $nameErr="First Name is Required";
        }
        if($err=="lname"){
            $lnameErr="Last Name is Required";
        }
        if($err=="email"){
            $mail="Email is Required";
        }
         if($err=="notSame"){
            $same="Both Passwords are not Same";
        }
         if($err=="pswd"){
            $paswd="Password is Required";
        }
         if($err=="pswd1"){
            $paswd1="Password is Required";
        }
		if($err=="pswdl"){
			$passl="Password is not strong";
		}
        
    }
?>