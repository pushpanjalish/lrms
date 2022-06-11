<?php
$conn= mysqli_connect('localhost','root','','lrms_db');
if(!$conn){
	echo "Connection Failed";
}

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$file=$_POST['file'];
$password=$_POST['password'];
$option=$_POST['options'];
$answer=$_POST['answer'];
$select = mysqli_query($conn, "SELECT * FROM `registration` WHERE `email` = '".$email."'");
if(mysqli_num_rows($select)) {
     header("Location: ../register.php?error=This email address is already used!");
    //header("Location:../register.php");
}
else{
    // Insert Data

$sql="INSERT INTO `registration`(`fname`, `lname`, `email`, `img`, `pswd`, `options`, `answer`) VALUES ('$fname','$lname','$email','$file','$password','$option','$answer')";
$ins=mysqli_query($conn,$sql);
// if($ins){
//     // echo "Details recorded";
//     header("Location:../index.php");
// }

if($ins)
{

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LRMS</title>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'></link>
</head>
<body onload="callSwalFnctn()">
  <!-- <button onclick="callSwalFnctn()" >Click me</button> -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
  <script>
   
      function callSwalFnctn()
      {
          swal("Data sucessfully added!", " ", "success", {
            button: "Aww yiss!",
            }).then(function(){
            window.location="../index.php";
            });

      }

  </script>
</body>
</html>
<?php
}
}
?>
