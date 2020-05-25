<?php
    require "../config.php";
    $servername = "localhost";
    $username = "root";
    $dbname = "RecipeBook";
    $recipeId = $_GET["id"];

    $conn = new mysqli($servername, $username, $password);

    $sql = "SELECT * FROM $dbname.recipe WHERE id='". $recipeId . "'";
    $result = $conn->query($sql);
    if($result->num_rows == 0)  
    {
        echo "No such ingredient!";
    }
    $recipe = $result->fetch_assoc();

    $innerHTML = "<a class='thumbnail' onclick='showRecipe(" . $recipeId . ")'><img class='img-responsive' src='../images/" . $recipe["image"] . "'>";
    $innerHTML .= " <div class='caption'><p>" . $recipe["name"] . "</p></div></a>";
    echo $innerHTML;
    $conn->close();

?>