<html>
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VVirtual closet</title>
    <link rel="stylesheet" href="../style/wardrobe.css" type="text/css">
</head>

<body>

    <div class="menu-bar">
        <ul> 
            <li class="active"><a href="#">WARDROBE</a></li>
            <li><a href="../html/dressMee.php">DRESS ME</a></li>
            <li><a href="../html/newItem.php">ADD NEW ITEM</a>
            <li><a href="../html/home.html">SIGN OUT</a></li> 
        </ul>
    </div>


    <div class="theirName">
        <?php
        session_start();

        if  (isset($_SESSION['username']))  {
                $username=$_SESSION['username'];
                echo  "<h1> Welcome, $username !</h1>";
        } 
        ?>    
    </div> 


    <div class="items">

        <?php

        include 'wardrobeTable.php';


        if (isset($_SESSION['username'])) {

                $username=$_SESSION['username'];
                $query="SELECT color, occasion, season, usee, image_path FROM wardrobee WHERE user_id=(SELECT id FROM users WHERE username = '$username')";
                $item=mysqli_query($conn, $query);


                while ($row = mysqli_fetch_assoc($item)) {
                        echo "<div class='itemOfClothing'>";
                            echo   "<img src='" . $row['image_path'] . "' alt='An item of clothing'  width='200' height='200'>";
                            


                        echo "</div>";
                }
        }
        ?>
    </div>

</body>
</html>
