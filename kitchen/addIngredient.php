<?php 
    header('Content-Type: text/html; charset=utf-8');
    require "../sessionInfo.php";
    require "../config.php";
    $ingredientName = $_POST["ingredientName"];


    $servername = "localhost";
    $username = "root";
    $dbname = "RecipeBook";

    $conn = new mysqli($servername, $username, $password);
    $conn->set_charset("utf8");

    $sql = "SELECT * FROM $dbname.ingredient WHERE `name`='". $ingredientName . "'";
    $result = $conn->query($sql);
    if($result->num_rows == 0)  
    {
        $foundRecipeIds[] = 404;
        echo FALSE;
    } else {
        $chosenIngredients = array();
        if(isset($_SESSION["chosenIngredients"]))
            $chosenIngredients = $_SESSION["chosenIngredients"];
        $chosenIngredients[] = $ingredientName;
        $_SESSION["chosenIngredients"] = $chosenIngredients;
        echo TRUE;
    }
?>