<!DOCTYPE html>
<html lang="en">

    <head> 
        <title>Home</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="gift.css">
    </head>

    <body>

	<div class="topnav">
            <a class="active" href="index.php">Home</a> 
			<a href="about.php">About</a>
            <?php  if (isset($_SESSION['username'])) : ?>
    				<a href="index.php?logout='1'" >Log out</a>
    		<?php endif ?>
            <a href="gift.php">Occasions</a>
            <a href="favourites.php">Favourites</a>
    </div>


        <h1>Choose your occasion</h1>

        <ul>
            <a  href="cw.php"><li>Christmas gift for women</li></a>
            <a  href="cm.php"><li>Christmas gift for men</li></a>
            <a  href="bw.php"><li>Birthday gift for women</li></a>
            <a  href="bm.php"><li>Birthday gift for men</li></a>
            <a  href="vw.php"><li>Valentine's day gift for women</li></a>
            <a  href="vm.php"><li>Valentine's day gift for men</li></a>
            <a  href="mw.php"><li>Mother's day gift</li></a>
            <a  href="fm.php"><li>Father's day gift</li></a>
        </ul>

    </body>
</html>