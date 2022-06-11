<?php
  session_start();
  $conn=mysqli_connect("localhost","root","","lrms_db");
  $uemail=$_SESSION['emailid'];
  $upass=$_POST['password'];
  $select=mysqli_query($conn,"UPDATE `registration` SET `pswd`='$upass' WHERE `email`='$uemail'");
  if($select)
  {
?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'></link>
  </head>
  <body onload="callSwalFnctn()">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
    <script>
      // To displaying alert box
      function callSwalFnctn()
      {
        swal("Password updated!", " ", "success", {
          button: "Aww yiss!",
          }).then(function(){
          window.location="index.php";
        });

      }
    </script>
  </body>
  </html>
  <?php
  }
  
  ?>