<?php 
    require "../sessionInfo.php";
    require "../config.php";
    $servername = "localhost";
    $username = "root";
    $dbname = "FoodCraft";

    $email = $_SESSION["email"];

    $conn = new mysqli($servername, $username, $password);


    $stmt = $conn->prepare("DELETE FROM $dbname.user WHERE email=?");
    $stmt->bind_param("s", $email);
   
    if ( $stmt->execute() === TRUE) {
      echo "Record deleted successfully <br>";
    } else {
      echo "Error deleting record: " . $conn->error;
    }
    $conn->close();  
    require "../logout.php";
?>