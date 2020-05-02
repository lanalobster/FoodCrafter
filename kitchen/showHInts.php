<?php 

    $ingredientNames = array("ананас", "броколі", "вершки", "груша", "дріжджі", "лимон", "мука", "картопля");
    $input = mb_strtolower($_GET["input"]);
    $foundHints = preg_grep("/^$input/", $ingredientNames);
    echo (count($foundHints) > 0 ? implode(", ", $foundHints) : "null");
?>