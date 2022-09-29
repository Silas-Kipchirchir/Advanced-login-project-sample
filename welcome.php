<?php
session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <style>
       body{
        background-image: url(images/mm.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
 <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <script src="javascript.js"></script>
    <i><h1 class="my-5">Hi <?php echo htmlspecialchars($_SESSION["username"]); ?>, Welcome to our site.</h1></i>
    <br><br>
   <center>
    <h3 style="color:white;><i>Click "Home" to proceed:</i></h3>
    <a href="Home.html" class="btn-btn-warning" style="color:blue;"><h3>Home</h3></a>
        <i> reset your password:</i><br> <a href="reset-password.php" class="btn btn-warning">RESET</a>
        <br><br>
        <p style="color:black"><i>sign out of your account:<br></i>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out</a>
    </p>

</center>
</body>
</html>