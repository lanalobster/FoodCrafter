<?php 

    $servername = "localhost";
    $username = "root";
    $password = "Kindzmarauli13";
    $dbname = "RecipeBook";
    $input = $_GET["input"];

    $conn = new mysqli($servername, $username, $password);
    $foundHints = array();

    $sql = "SELECT * FROM $dbname.ingredient WHERE `name` LIKE '". $input . "%'";
    $result = $conn->query($sql);
    while($ingredientRow = $result->fetch_assoc()) {
        $foundHints[] = $ingredientRow["name"];
    }
    echo (count($foundHints) > 0 ? implode(", ", $foundHints) : "null");

    $conn->close();

?>