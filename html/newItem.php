<!DOCTYPE html>
<html>


    <head>
            <meta charset="UTF-8"> 
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>VVirtual closet</title>
            <link rel="stylesheet" href="../style/newItem.css" type="text/css">
    </head>


    <body>

        <div class="menu-bar">
                <ul> 
                    <li><a href="../html/welcome.php">WARDROBE</a></li>
                    <li><a href="../html/dressMee.php">DRESS ME</a></li>
                    <li  class="active"><a href="#">ADD NEW ITEM</a>
                    <li><a href="../html/home.html">SIGN OUT</a></li> 
                </ul>
        </div>

        <div class="rectangle">
            <div class="uploadItem">

                <p>Select photo of clothing item to upload.</p>

                
                <form method="post" action="processNewItem.php" enctype="multipart/form-data">
                    <input type="file" name="image" accept="image/*" required><br>

                    <label for="color">Pick a color. </label>
                        <select name="color" required>
                            <option value="black">Black</option>
                            <option value="white">White</option>
                            <option value="red">Red</option>
                            <option value="blue">Blue</option>
                            <option value="green">Green</option>
                            <option value="cream">Cream</option>
                            <option value="yellow">Yellow</option>
                            <option value="purple">Purple</option>
                            <option value="orange">Orange</option>
                            <option value="multicolored">Multicolored</option>
                        </select>
                        <br>

                        <label for="occasion">Pick the occasion.</label>
                        <select name="occasion" required>
                            <option value="formal">Formal</option>
                            <option value="semiFormal">Semi-formal</option>
                            <option value="casual">Casual</option>
                            <option value="athletic">Athletic</option>
                            <option value="cocktail">Cocktail</option>
                            <option value="beachwear">Beachwear</option>
                            
                        </select>
                        <br>





                        <label for="season">Pick a season. </label>
                        <select name="season" required>
                            <option value="summer">Summer</option>
                            <option value="spring">Spring</option>
                            <option value="autum">Autum</option>
                            <option value="winter">Winter</option>
                        </select>
                        <br>


                        <label for="usee">Pick a usage. </label>
                        <select name="usee" required>
                            <option value="shirt">Shirt/Blouse/Top</option>
                            <option value="jacket">Jacket</option>
                            <option value="pants">Pants/Shorts/Skirt/Bottoms</option>
                        </select>
                        <br>

                    <button type="submit" name="submit">Upload The Clothing Item</button>

                </form>
            </div>
        </div>

        
    </body>
</html>
