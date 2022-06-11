
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LRMS</title>
    <link rel="stylesheet" href="css/register.css">
    <!-- Adding Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&display=swap" rel="stylesheet">
    <!-- Adding Fontawesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Sweet Alert -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script></head>
<body>
    <div class="container">
        <div class="img-div">
            <img  class="a" src="images/register.png" alt="login-img">
        </div>
        <div class="form-div">
            <h1>Register</h1>
            <form class="form" method="POST" action="connection-db/connection.php" onsubmit="return validation()">
             
             <p id="msg"></p>
             <!-- To displaying error msg -->
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <!-- Form Fields -->
            <input type="text"  name="fname" id="fname" placeholder="First Name" required autofocus onkeyup="fname_valid()">
            <input type="text" name="lname" id="lname" placeholder="Last Name" required autofocus onkeyup="lname_valid()">
            <input type="email" name="email" id="email" placeholder="Email" required autofocus>
            <input type="file" name="file" id="file" placeholder="No File chosen" required autofocus>
            <input type="password" name="password" id="password" placeholder="Password" required autofocus onkeyup="pass_valid()">
            <input type="password" name="cnfrmpassword" id="cnfrmpassword" placeholder="Confirm Password" required autofocus>
            <select  onchange="changeFunctn()" autofocus name="options">
                <option value="Choose one security question" disabled="disabled" selected="selected">Choose one security question</option>
                <option value="your nick name" id="chck">your nick name</option>
                <option value="your pet name" id="chck">your pet name</option>
                <option value="4 digit number" id="chck">4 digit number</option>
            </select>
                <input type="text" name="answer" id="yes" placeholder="Your Answer"  autofocus required>
                <button id="login-btn" type="submit" >Submit</button>
                <a id="button" href=index.php>Already have an account?</a>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/register.js"></script>
</body>
</html>