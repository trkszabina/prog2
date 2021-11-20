<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">

    <head> 
        <title>Home</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="home.css">
    </head>

    <body>

	<div class="topnav">
            <a class="active" href="index.php">Home</a> 
			<a href="about.php">About</a>
            <a href="gift.php">Occasions</a>
            <a href="gift.php">Favourites</a> 
            <?php  if (isset($_SESSION['username'])) : ?>
    			<a href="index.php?logout='1'" >Log out</a>
    		<?php endif ?>
    </div>


        <h1>GIFT RECOMMENDATIONS</h1>

        <p>
            Looking for a gift, but you don’t know what to get? <br>
            No need to worry about that anymore.<br>
            Let us help you find the perfect one for the occasion!
        </p>

    </body>
</html>


