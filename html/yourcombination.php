<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Combination</title>
    <link rel="stylesheet" href="../style/yourcombination.css" type="text/css">

</head>
<body>
    <div class="container">
    <h1>It's A Match !</h1>

    <?php
    session_start();

    if (isset($_SESSION['selectedShirt']) && isset($_SESSION['selectedJacket']) && isset($_SESSION['selectedPants'])) {
        echo "<div class='fullOutfit'>";
        echo "<div class='s'><img src='{$_SESSION['selectedShirt']}' alt='shirt'  width='200' height='200'></div>";
        echo "<div class='j'><img src='{$_SESSION['selectedJacket']}' alt='jacket'  width='200' height='200'></div>";
        echo "</div>";
        echo "<div class='p'><img src='{$_SESSION['selectedPants']}' alt='pants'  width='200' height='200'></div>";
    } else {
        echo "No outfit images available.";
    }
    ?>
    </div>
</body>
</html>