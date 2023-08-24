<?php
session_start();
include 'wardrobeTable.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $selectedColor = $_POST['color'];
    $selectedOccasion = $_POST['occasion'];
    $selectedSeason = $_POST['season'];



    echo "Selected Color: $selectedColor<br>";
    echo "Selected Occasion: $selectedOccasion<br>";
    echo "Selected Season: $selectedSeason<br>";


    
    $query = "SELECT image_path, usee FROM wardrobee WHERE color = '$selectedColor' AND occasion = '$selectedOccasion' AND season = '$selectedSeason'";

    $result = mysqli_query($conn, $query);

    $shirts = array();
    $jackets = array();
    $pants = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $clothingType = $row['usee'];
        if ($clothingType === 'shirt') {
            $shirts[] = $row['image_path'];
        } elseif ($clothingType === 'jacket') {
            $jackets[] = $row['image_path'];
        } elseif ($clothingType === 'pants') {
            $pants[] = $row['image_path'];
        }
    }

    if (count($shirts) > 0 && count($jackets) > 0 && count($pants) > 0) {
        $selectedShirt = array_rand($shirts, 1);
        $selectedJacket = array_rand($jackets, 1);
        $selectedPants = array_rand($pants, 1);

        $_SESSION['selectedShirt'] = $shirts[$selectedShirt];
        $_SESSION['selectedJacket'] = $jackets[$selectedJacket];
        $_SESSION['selectedPants'] = $pants[$selectedPants];

        mysqli_close($conn);

        header("Location: yourcombination.php");
        exit();
    } else {
        echo "No outfit images available for the selected criteria.";
    }
}
?>