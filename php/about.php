<!DOCTYPE html>
<html lang="en">

    <head> 
        
        <title>About us</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="about.css">

    </head>

    <body>

        <div class="topnav">
            <a class="active" href="index.php">Home</a>
            <?php  if (isset($_SESSION['username'])) : ?>
    				<a href="index.php?logout='1'" >Log out</a>
    		<?php endif ?>
            <a href="about.php">About</a>
            <a href="gift.php">Occasions</a>
            <a href="gift.php">Favourites</a>
          </div>

        <h1>ABOUT US</h1>

        <p>text here...</p>

    </body>
</html>