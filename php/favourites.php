<!DOCTYPE html>
<html lang="en">

    <head> 
        
        <title>Gift</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="list.css">

    </head>

    <div class="topnav">
            <a class="active" href="index.php">Home</a> 
			<a href="about.php">About</a>
            <a href="gift.php">Occasions</a>
            <a href="favourites.php">Favourites</a> 
            <?php  if (isset($_SESSION['username'])) : ?>
    			<a href="index.php?logout='1'" >Log out</a>
    		<?php endif ?>
    </div>

    <h1>Favourites</h1>


    <script>
            mybutton = document.getElementById("myBtn");

            window.onscroll = function() {scrollFunction()};

            function scrollFunction()
            {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) 
                {
                    mybutton.style.display = "block";
                } 
                
                else 
                {
                    mybutton.style.display = "none";
                }
            }

                function topFunction() 
            {
                document.documentElement.scrollTop = 0; 
            }
        </script>

        <button onclick="topFunction()" id="myBtn" title="Go to top">&#x25B2</button>

    </body>
</html>        