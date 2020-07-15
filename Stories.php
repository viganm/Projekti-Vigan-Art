<?php
    $host="localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbname="mysql";
   

	

	// Database connection
	$conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);
   
    
if ($_POST){
   $username = $_POST['username'];
    $content = $_POST['commentContent'];
    $handle = fopen("Stories.php","a");
    fwrite($handle,"<b>" . $Username . "</b>:<br>" . comment . "<br>");
    fclose($handle);
}
?>


<!DOCTYPE html>
<html>

<head>
    <title> Projekti </title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="stylesheet4.css">

    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">



</head>

<body>
    <script src="script.js"></script>

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
        <form action="" method="POST">
           <h3><b><?php echo htmlspecialchars($_SESSION["username"]); ?></b><h3>:</h3>
            Comments: <textarea rows="10" cols="30" name="commentContent"></textarea><br>
            <input type = "submit" value = "Post"><br>
        </form>
    </div>


</body>

</html><b></b>:<br>comment<br><b></b>:<br>comment<br><b></b>:<br>comment<br><b></b>:<br>comment<br><b></b>:<br>comment<br><b></b>:<br>comment<br><b></b>:<br>comment<br><b></b>:<br>comment<br><b></b>:<br>comment<br><b></b>:<br>comment<br><b></b>:<br>comment<br><b></b>:<br>comment<br><b></b>:<br>comment<br><b></b>:<br>comment<br><b></b>:<br>comment<br><b></b>:<br>comment<br><b></b>:<br>comment<br><b></b>:<br>comment<br><b></b>:<br>comment<br><b></b>:<br>comment<br><b></b>:<br>comment<br><b></b>:<br>comment<br><b></b>:<br>comment<br><b></b>:<br>comment<br><b></b>:<br>comment<br><b></b>:<br>comment<br><b></b>:<br>comment<br><b></b>:<br>comment<br><b></b>:<br>comment<br><b></b>:<br>comment<br><b></b>:<br>comment<br><b></b>:<br>comment<br><b></b>:<br>comment<br><b></b>:<br>comment<br>