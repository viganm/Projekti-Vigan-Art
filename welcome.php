<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="stylesheetWelcome.css">

    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

    
    <title>Welcome</title>
    
        
    </style>
</head>
<body>

    <div class="header">
        <h1 style="font-size: 40px;">Kosovo Natural Beauties</h1>
    </div>

     <div class="navbar">


        <a href="Home.php" style="text-decoration: none;" class="navbartext"> HOME </a>
        <a href="About.php" style="text-decoration: none;" class="navbartext"> ABOUT </a>
        <a href="Contact.php" style="text-decoration: none;" class="navbartext"> CONTACT </a>
        <a href="Stories.php" style="text-decoration: none;" class="navbartext"> STORIES </a>
        <a href="Login.php" id="loginbutton" style="text-decoration: none;" class="navbartext"> ACCOUNT </a>
    

    </div>

    <div class="content">
        <div class="page-header">
            <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
        </div>
        <p>
            <a href="PasswordResetFeature.php" class="butonatwelcome">Reset Your Password</a><br><br>
            <a href="logout.php" class="butonatwelcome">Sign Out of Your Account</a>
        </p>
    </div>

</body>
</html>