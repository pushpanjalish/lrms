<?php
   session_start();
   $host = "localhost";
   $user = "root";
   $password = "";
   $database = "lrms_db";
   // Establish server connection and select database
   $dbh = mysqli_connect($host, $user, $password, $database);
   
   if (mysqli_connect_errno()) {
      die('Unable to connect to database ' . mysqli_connect_error());
   } 
   else {
      // run query to fetch records
      // $result = mysqli_query($dbh, "SELECT  email_address FROM users ");
      /* fetch associative array */
      $email = $_POST['email'];
     

      $query = "SELECT `email`,`options`,`answer` FROM `registration` WHERE `email` = '$email'";
      $result = mysqli_query($dbh, $query); //$link is the connection
      if (mysqli_num_rows($result) > 0) {
      // die('email already exists');
      $_SESSION['emailid']=$email;
      header("Location: newpswrd.php");
      } 
      else {
      // $query = mysqli_query($dbh, "insert into users(email_address)   values('$email')");
      // echo 'data inserted succesfully';
      }
   }
?>
 