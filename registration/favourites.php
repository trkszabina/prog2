<!DOCTYPE html>
<?php include('server.php') ?>
<html lang="en">

    <head> 
        
        <title>Gift</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="list.css">

    </head>

    <div class="topnav">
            <a class="active" href="index.php">Home</a> 
            <a href="gift.php">Occasions</a>
            <a href="favourites.php">Favourites</a> 
    </div>

    <h1>Favourites</h1>
    <br><br>

    <h2>Here is a list of your selected items:</h2> <br>

<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "gift";

        
        $conn = mysqli_connect($servername, $username, $password, $dbname);
    
        if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT name FROM fav_items where username='".$_SESSION['username']."'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "<ul><li>" . $row['name']. "</li></ul><br>";
        }
        } else {
        echo "<ul><li>There is no feedback yet</li></ul><br>";
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