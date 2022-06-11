<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LRMS</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Adding Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&display=swap" rel="stylesheet">
    <!-- Adding Fontawesome Icons -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <script src="https://kit.fontawesome.com/74f5bc816c.js" crossorigin="anonymous"></script>
    <!-- Sweet Alert -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script></head>
</head>
<body>
    <div class="container">
        <div class="img-div">
            <img src="images/login.png" alt="login-img">
        </div>
        <!-- Added Fontawesome icon -->

        <div class="icon-div">
            <i class="fas fa-user-lock" id="icon"></i>
        </div>
        
        <div class="form-div">
            <h1>Login</h1>
            <form class="form" action="loginconn.php" method="post">

            <!-- To displaying error msg -->

            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
                <input type="email" name="email" placeholder="Email" required autofocus>
                <input type="password" name="password" placeholder="Password" required autofocus>
                <button id="login-btn">Login</button>
                <a href="register.php" id="create-btn">Create New Account</a>
                <p id="myBtn">Forgotten Password</p>
            </form>
        </div>
    </div>
        <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-flex">
                <div> <h2>Reset Password</h2></div>
                <div><button class="close">&times;</button></div>
            </div>
            <hr>
            <form method="post" action="reset.php">
                <input type="email" placeholder="Email Please" name="email">
                <p>Your security question:</p>
                <select  id="select" onchange="changeFunctn()" autofocus name="options">
                    <option value="Choose one security question" disabled="disabled" selected="selected">Choose one security question</option>
                    <option value="your nick name" id="chck">your nick name</option>
                    <option value="your pet name" id="chck">your pet name</option>
                    <option value="4 digit number" id="chck">4 digit number</option>
                </select>
                <input type="text" name="answer" placeholder="Enter your answer" autofocus required>
                <hr>
                <button id="modalBtn" type="submit">Submit</button>
            </form>
        </div>
    </div>

    <script type="text/javascript" src="js/index.js"></script>
</body>
</html>