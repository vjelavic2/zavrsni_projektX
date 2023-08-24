
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
                <li><a href="../html/dressMe.html">DRESS ME</a></li>
                <li><a href="../html/newItem.html">ADD NEW ITEM</a>
                <li><a href="../html/home.html">SIGN OUT</a></li> 
            </ul>
        </div>

        <div id="hello-name">
        <?php
        session_start();
        if (isset($_SESSION['username'])) {
            $username = $_SESSION['username'];
            echo "<h1>Welcome, $username</h1>";
        } else {
            echo "<h1>Welcome</h1>"; 
        }
        ?>    
        </div> 

        
    </body>
</html>