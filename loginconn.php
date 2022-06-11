<?php

session_start();

$conn= mysqli_connect('localhost','root','','lrms_db');

    $email = $_POST['email'];
    $password = $_POST['password'];
    echo $email;
    echo $password;
    $_SESSION['email']=$email;

    $sql="SELECT `fname`, `lname`, `email`, `img` FROM `registration` WHERE `email`='$email' and `pswd`='$password'";

    $result=mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)==1){

        header("location:home.php"); 
    }
    else{
        header("Location: index.php?error=Incorect User name or password");
    }
?>