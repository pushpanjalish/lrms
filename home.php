<?php

session_start();
// Fetching datas from DB
$conn=mysqli_connect("localhost","root","","lrms_db");
$email=$_SESSION['email'];
$sql="select `fname`,`lname`,`email`,`img` from `registration` where email='$email'";
$result=$conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/home.css">
    <!-- Adding Fontawesome Icons -->
    <script src="https://kit.fontawesome.com/74f5bc816c.js" crossorigin="anonymous"></script>
    <!-- Adding Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&display=swap" rel="stylesheet">
   <title>Welcome</title>
</head>
<body>
    <?php
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
    ?> 
    <div class="flex-box">
        <h2>Welcome...</h2>
        <a href="index.php" id="create-btn"><i class="fas fa-sign-out logout"></i></a>
    </div>
   <div>
        <table>
            <div class="flex-container">
                <div>
                    <img src="<?php echo 'images/'.$row['img'];?>">
                </div>
                <!-- To displaying user details -->
                <div class="details">
                    <div><?php echo $row['fname'];?>
                    <?php echo $row['lname'];?></div>
                    <div><?php echo $row['email'];?></div>
                </div>
            </div>
            <?php
                }
            }
            else{
                echo "Invalid User";
            }
            ?>
        </table>
    </div>
</body>
</html>