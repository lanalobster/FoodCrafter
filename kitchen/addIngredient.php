<?php 
    header('Content-Type: text/html; charset=utf-8');
    require "../sessionInfo.php";
    
    $ingredientName = $_POST["ingredientName"];
    $chosenIngredients = array();
    if(isset($_SESSION["chosenIngredients"]))
        $chosenIngredients = $_SESSION["chosenIngredients"];
    $chosenIngredients[] = $ingredientName;
    $_SESSION["chosenIngredients"] = $chosenIngredients;
    echo json_encode($chosenIngredients);
?>