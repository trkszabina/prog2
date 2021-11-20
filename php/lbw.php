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

    <h1>Gift recommendations</h1>

    <div class="dropdown" >
            <button class="dropbtn">Sort gifts</button>
            <div class="dropdown-content">
              <a class="d" href="lbw.php">Price low to high</a>
              <a class="d" href="hbw.php">Price high to low</a>
            </div>
    </div>

    <p></p>

    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "gift";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT name, price, link FROM birthdaywomen order by price";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) 
        {
        // output data of each row
        while($row = mysqli_fetch_assoc($result))
            {
                echo "<p> name:   $row[name]  </p>";
                echo "<p> price:   $row[price]$  </p>";
                echo "<a class='list' href='".$row['link']."' target=_blank
                        style = 'text-decoration:none; color:red' >click here to order</a> <br>";
                echo "<p>&#9825</p>";
                echo "<br>"."<br>"."<br>";
            }

        } 
        else 
        {
        echo "0 results";
        }

        mysqli_close($conn);
    ?>

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

