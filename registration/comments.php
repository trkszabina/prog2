<!DOCTYPE html>
<html lang="en">

    <head> 
        
        <title>Comments</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="list.css">

    </head>

    <div class="topnav">
            <a class="active" href="index.php">Home</a> 
            <a href="gift.php">Occasions</a> 
            <a href="favourites.php">Favourites</a>
    </div>

    <h1>Feedbacks</h1>
    <br>
    <p>Feedback on christmas gifts: </p>
    <?php
            $conn = mysqli_connect('localhost', 'root', '', 'comments');
            if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT text FROM feedback where occasion='christmas'";
            $result = mysqli_query($conn, $sql);


            if (mysqli_num_rows($result) > 0) 
            {
            while($row = mysqli_fetch_assoc($result))
                {   
                        echo "<p> &#8226   $row[text]  </p>";
                }

            } 
            else 
            {
            echo "<ul><li>There is no feedback yet</li></ul>";
            }

            mysqli_close($conn);
        ?>
        <br><br>

    <p>Feedback on birthday gifts: </p>

    <?php
            $conn = mysqli_connect('localhost', 'root', '', 'comments');
            if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT text FROM feedback where occasion='birthday'";
            $result = mysqli_query($conn, $sql);


            if (mysqli_num_rows($result) > 0) 
            {
            while($row = mysqli_fetch_assoc($result))
                {   
                        echo "<p> &#8226   $row[text]  </p>";
                }

            } 
            else 
            {
            echo "<ul><li>There is no feedback yet</li></ul>";
            }

            mysqli_close($conn);
        ?>
    <br><br>

    <p>Feedback on valentine's day gifts: </p>

    <?php
            $conn = mysqli_connect('localhost', 'root', '', 'comments');
            if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT text FROM feedback where occasion='valentinesday'";
            $result = mysqli_query($conn, $sql);


            if (mysqli_num_rows($result) > 0) 
            {
            while($row = mysqli_fetch_assoc($result))
                {   
                        echo "<p> &#8226   $row[text]  </p>";
                }

            } 
            else 
            {
            echo "<ul><li>There is no feedback yet</li></ul>";
            }

            mysqli_close($conn);
        ?>
        <br><br>

    <p>Feedback on mother's day gifts: </p>

    <?php
            $conn = mysqli_connect('localhost', 'root', '', 'comments');
            if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT text FROM feedback where occasion='mothersday'";
            $result = mysqli_query($conn, $sql);


            if (mysqli_num_rows($result) > 0) 
            {
            while($row = mysqli_fetch_assoc($result))
                {   
                        echo "<p> &#8226   $row[text]  </p>";
                }

            } 
            else 
            {
            echo "<ul><li>There is no feedback yet</li></ul>";
            }

            mysqli_close($conn);
        ?>
    <br><br>
    <p>Feedback on father's day gifts: </p>


    <?php
            $conn = mysqli_connect('localhost', 'root', '', 'comments');
            if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT text FROM feedback where occasion='fathersday'";
            $result = mysqli_query($conn, $sql);


            if (mysqli_num_rows($result) > 0) 
            {
            while($row = mysqli_fetch_assoc($result))
                {   
                        echo "<p> &#8226   $row[text]  </p>";
                }

            } 
            else 
            {
            echo "<ul><li>There is no feedback yet</li></ul>";
            }

            mysqli_close($conn);
        ?>
        <br><br>



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
