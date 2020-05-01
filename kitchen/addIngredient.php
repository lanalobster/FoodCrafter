<?php

    $ingredientName = $_POST["ingredientName"];
    $chosenIngredientsFile = fopen("chosenIngredients.txt", "a");
    fputs($chosenIngredientsFile, $ingredientName . " ");
    fclose($chosenIngredientsFile);

?>