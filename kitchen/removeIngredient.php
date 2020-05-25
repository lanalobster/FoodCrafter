<?php 

    require "../sessionInfo.php";
    header('Content-Type: text/html; charset=utf-8');
    
    $ingredientName = $_POST["ingredientName"];
    $chosenIngredients = array();
    if(isset($_SESSION["chosenIngredients"]))
        $chosenIngredients = $_SESSION["chosenIngredients"];
    if (($key = array_search($ingredientName, $chosenIngredients)) !== false) {
        \array_splice($chosenIngredients, $key, 1);;
    }
    $_SESSION["chosenIngredients"] = $chosenIngredients;
    echo json_encode($chosenIngredients);
?>