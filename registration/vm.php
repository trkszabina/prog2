<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

    <head> 
        
        <title>Gift</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="list.css">

    </head>

    <div class="topnav">
            <a class="active" href="index.php">Home</a>
            <a href="gift.php">Occasions</a>
            <a href="comments.php">Feedback</a>
            <a href="favourites.php">Favourites</a> 
    </div>

    <h1>Gift recommendations</h1>

    <?php
        echo 
        "<form method = 'post' action = 'vm.php'>
        <div class='dropdown' >
            <button class='dropbtn'>Sort gifts</button>
            <div class='dropdown-content'>
              <button class='d' name='low'>Price low to high</button>
              <button class='d' name='high'>Price high to low</button>
              <button class='d' name='name'>A to Z</button>
            </div>
        </div>
        </form>";
    ?>

        <?php
            $conn = mysqli_connect('localhost', 'root', '', 'gift');
    
            if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
            }

            if(isset($_POST['low']))
            {
                $sql = "SELECT name, price, link FROM valentinesmen order by price";
                $result = mysqli_query($conn, $sql);

                while($row = mysqli_fetch_assoc($result))
                {   
                        echo "<p> name:    $row[name]  </p>";
                        echo "<p> price:   $row[price] </p>";
                        echo "<a class='list' href='".$row['link']."' target=_blank
                                style = 'text-decoration:none; color:red' >click here to order</a> <br><br>";

                        echo "<br>"."<br>"."<br>";
                }
            }

            else

            if(isset($_POST['high']))
            {
                $sql = "SELECT name, price, link FROM valentinesmen order by price desc";
                $result = mysqli_query($conn, $sql);

                while($row = mysqli_fetch_assoc($result))
                {   
                        echo "<p> name:    $row[name]  </p>";
                        echo "<p> price:   $row[price] </p>";
                        echo "<a class='list' href='".$row['link']."' target=_blank
                                style = 'text-decoration:none; color:red' >click here to order</a> <br><br>";

                        echo "<br>"."<br>"."<br>";
                }
            }

            else

            if(isset($_POST['name']))
            {
                $sql = "SELECT name, price, link FROM valentinesmen order by name";
                $result = mysqli_query($conn, $sql);

                while($row = mysqli_fetch_assoc($result))
                {   
                        echo "<p> name:    $row[name]  </p>";
                        echo "<p> price:   $row[price] </p>";
                        echo "<a class='list' href='".$row['link']."' target=_blank
                                style = 'text-decoration:none; color:red' >click here to order</a> <br><br>";

                        echo "<br>"."<br>"."<br>";
                }
            }

            else
            { 
                $sql = "SELECT name, price, link FROM valentinesmen";
                $result = mysqli_query($conn, $sql);
            
                while($row = mysqli_fetch_assoc($result))
                    {   
                            echo "<p> name:    $row[name]  </p>";
                            echo "<p> price:   $row[price] </p>";
                            echo "<a class='list' href='".$row['link']."' target=_blank
                                    style = 'text-decoration:none; color:red' >click here to order</a> <br><br>";

                            echo "<br>"."<br>"."<br>";
                    }

            } 


            mysqli_close($conn);

        ?>

<?php

$t = "";
$o = "valentinesday";


$db = mysqli_connect('localhost', 'root', '', 'comments');


    
    echo '<form method="post" action="vm.php">

    <div class="input-group">
            <p>Please leave a comment or feedback!</p>
            <input type="text" name="comment">
        </div>
        <br>
        <div class="input-group">
            <button type="submit" class="btn" name="add_comment">Send</button>
        </div>';
    
    if (isset($_POST['add_comment'])) {
  

      $t = mysqli_real_escape_string($db, $_POST['comment']); 


  	$query = "INSERT INTO feedback (text, occasion) 
  			  VALUES('$t', '$o')";
  	mysqli_query($db, $query);
      echo '<script>alert("Feedback posted succesfully")</script>';}

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
<?php


    $conn = mysqli_connect('localhost', 'root', '', 'gift');
    echo
    '
    <form method="post">
    <p>Now you can select your favourite item!</p>
        <select name="selected_gift">
            <option disabled>Please choose!</option>
        ';            
            $exists = mysqli_query($conn, "SELECT `name` FROM valentinesmen");

            while($data = mysqli_fetch_array($exists))
            {
                echo "<option value='". $data['name'] ."'>" .$data['name'] ."</option>"; 
            }    
        echo
        '
        </select>

        <div class="input-group">
            <button type="submit" class="btn" name="fav">Add to favorites &#9825</button>
        </div>
    </form>
    ';

    if(isset($_POST['fav']))
    {
        $conn = mysqli_connect('localhost', 'root', '', 'gift');
        $selected_gift = $_POST['selected_gift'];

        $result = mysqli_query($conn,"SELECT * FROM valentinesmen");

        if(mysqli_num_rows($result) > 0)
        {
            mysqli_query($conn, "INSERT INTO `fav_items` SET 
            `id` = NULL,
            `name` = '".$selected_gift."',
            `username` = '".$_SESSION['username']."'
            ");

            echo '<script>alert("Successfully added to favourites")</script>';
        }
    }
    ?>

    </body>
</html>

