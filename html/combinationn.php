<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VVirtual closet</title>
    <link rel="stylesheet" href="../style/combination.css" type="text/css">

</head>
<body>
    <div class="menu-bar">
        <ul> 
                <li><a href="../html/welcome.php">WARDROBE</a></li>
                <li class="active"><a href="#">DRESS ME</a></li>
                <li><a href="../html/newItem.php">ADD NEW ITEM</a>
                <li><a href="../html/home.html">SIGN OUT</a></li> 
            </ul>
    </div>

    <form id="combinationForm" method="post" action="processCombination.php">
        <p>Choose your desired clothing color.</p>
            <label>
                <input type="radio" name="color" value="black"> Black
            </label>
            <label>
                <input type="radio" name="color" value="white"> White
            </label>
            <label>
                <input type="radio" name="color" value="cream"> Cream
            </label>
            <label>
                <input type="radio" name="color" value="red"> Red
            </label>
            <label>
                <input type="radio" name="color" value="blue"> Blue
            </label>
            <label>
                <input type="radio" name="color" value="yellow"> Yellow
            </label>
            <label>
                <input type="radio" name="color" value="purple"> Purple
            </label>
            <label>
                <input type="radio" name="color" value="orange"> Orange
            </label>
            <label>
                <input type="radio" name="color" value="green"> Green
            </label>
            <label>
                <input type="radio" name="color" value="multicolored"> Multicolored
            </label>


            <p>Choose an occasion for your outfit combination.</p>
            <label>
                <input type="radio" name="occasion" value="formal"> Formal
            </label>
            <label>
                <input type="radio" name="occasion" value="semiFormal"> Semi-formal
            </label>
            <label>
                <input type="radio" name="occasion" value="casual"> Casual
            </label>
            <label>
                <input type="radio" name="occasion" value="athletic"> Athletic
            </label>
            <label>
                <input type="radio" name="occasion" value="cocktail"> Cocktail
            </label>
            <label>
                <input type="radio" name="occasion" value="beachwear"> Beachwear
            </label>
        

            <p>Choose a season.</p>
            <label>
                <input type="radio" name="season" value="summer"> Summer
            </label>
            <label>
                <input type="radio" name="season" value="spring"> Spring
            </label>
            <label>
                <input type="radio" name="season" value="autum"> Autumn
            </label>
            <label>
                <input type="radio" name="season" value="winter"> Winter
            </label>
            

        <button type="button" id="generateCombination">Create an outfit!</button>
    </form>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const form = document.getElementById("combinationForm");
            const generateButton = document.getElementById("generateCombination");

            generateButton.addEventListener("click", function() {
                const selectedColor = form.querySelector("input[name='color']:checked").value;
                const selectedOccasion = form.querySelector("input[name='occasion']:checked").value;
                const selectedSeason = form.querySelector("input[name='season']:checked").value;

                const xhr = new XMLHttpRequest();
                xhr.open("POST", "processCombination.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        window.location.href = "yourcombination.php"; 
                    }
                };
                xhr.send(`color=${selectedColor}&occasion=${selectedOccasion}&season=${selectedSeason}`);
            });
        });
    </script>
</body>
</html>