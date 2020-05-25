<?php
    require "../sessionInfo.php";
    require "../config.php";
    header('Content-Type: text/html; charset=utf-8');
    $servername = "localhost";
    $username = "root";
    $dbname = "RecipeBook";

    $conn = new mysqli($servername, $username, $password);
    $conn->set_charset("utf8");
    $chosenIngredients = $_SESSION["chosenIngredients"];
    $foundRecipeIds = array();
    for($i = 0; $i < count($chosenIngredients); $i++){

        $ingredientName = $chosenIngredients[$i];
        $sql = "SELECT id FROM $dbname.ingredient WHERE `name`='". $ingredientName . "'";
        $result = $conn->query($sql);
        if($result->num_rows == 0)  
        {
            $foundRecipeIds[] = 404;
        }
        $ingredientRow = $result->fetch_assoc();
        $ingredientID = $ingredientRow["id"];

        $sql = "SELECT recipe_id FROM $dbname.recipeIngredient WHERE ingredient_id='". $ingredientID . "'";
        $result = $conn->query($sql);
        if($result->num_rows == 0)  
        {
            $foundRecipeIds[] = 403;
        }
        
        while($recipeRow = $result->fetch_assoc()) {
            $foundRecipeIds[] = $recipeRow["recipe_id"];
        }
    }
    $foundRecipeIds = array_unique($foundRecipeIds);
    $foundRecipeIds = array_values($foundRecipeIds);
    echo json_encode($foundRecipeIds);
    $conn->close();
?>