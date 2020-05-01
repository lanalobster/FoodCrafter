<?php 

    $ingredientNames = array("ананас", "броколі", "вершки", "груша", "дріжджі", "лимон", "мука", "картопля");
    $input = $_GET["input"];
    $input = mb_strtolower($input);
    $foundHints = preg_grep("/^$input/", $ingredientNames);
    echo (count($foundHints) > 0 ? implode(", ", $foundHints) : "null");

?>