<?php

    $ingredientName = $_POST["ingredientName"];
    $chosenIngredientsFile = fopen("chosenIngredients.txt", "r");
    $chosenIngredients = fread($chosenIngredientsFile, filesize("chosenIngredients.txt"));
    $updatedIngredients = str_replace($ingredientName, "", $chosenIngredients);
    fclose($chosenIngredientsFile);

    $chosenIngredientsFile = fopen("chosenIngredients.txt", "w");
    fputs($chosenIngredientsFile, $updatedIngredients);
    fclose($chosenIngredientsFile);
 
?>