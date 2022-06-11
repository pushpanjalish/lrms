<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
</head>
<body>

<div> <h2>Reset Password</h2></div>
        
        <hr>
        <form method="GET" action="reset.php">
            <div class="row">
                <div class="col-md-8">
                    <input type="email" placeholder="Email Please" name="email" value="<?php if(isset($_GET['email'])) { echo $_GET['email'];}?>">
                        </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <input type=text value="<?php $row['options'];?>">
                                </div>
                            <div class="row">
                                <div class="col-md-8">
                                     <input type="text" name="answer" placeholder="Enter your answer" autofocus required>
                                </div>
                        <hr>
                            <button id="modalBtn" type="submit">Submit</button>
                        </div>
            </div>
        </form>
                <?php
                $conn=mysqli_connect('localhost','root','','lrms_db');
                if(isset($_POST['email'])){
                    $email=$_POST['email'];
                }
                $query="select `options` from registration where `email`='$email'";
                $query_run=mysqli_query($conn,$query);
                if(mysqli_num_rows($query_run)>0)
                {
                    foreach($query_run as $row)
                    {
                        ?>
                    <?php
                    }
                }
                else{
                    echo "not found";
                }
                ?>
           
            
    </body>
    </html> 