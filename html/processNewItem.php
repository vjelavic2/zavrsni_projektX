<?php


session_start();
include 'wardrobeTable.php';


if (isset($_POST['submit'])) {

    $username=$_SESSION['username'];
    $color=mysqli_real_escape_string($conn, $_POST['color']);
    $occasion=mysqli_real_escape_string($conn, $_POST['occasion']);
    $season=mysqli_real_escape_string($conn, $_POST['season']);
    $usee=mysqli_real_escape_string($conn, $_POST['usee']);


    $targetDir="clothingItems/";
    $imageName=basename($_FILES['image']['name']);
    $targetPath=$targetDir . $imageName;

    if (file_exists($targetPath)) { echo "Item of clothing already exists in your wardrobe.";} 
    
    else {
        move_uploaded_file($_FILES['image']['tmp_name'], $targetPath);


        $userInfo="SELECT id FROM users WHERE username = '$username'";
        $result=mysqli_query($conn, $userInfo);
        $userR=mysqli_fetch_assoc($result);
        $userId=$userR['id'];



        $query="INSERT INTO wardrobee (user_id, color, occasion, season, usee, image_path) VALUES ('$userId', '$color','$occasion','$season','$usee', '$targetPath')";
        mysqli_query($conn, $query);

        header("Location: welcome.php");
        exit;
    }
}
?> 