<?php 
    require "../sessionInfo.php";
    $servername = "localhost";
    $username = "root";
    $password = "Kindzmarauli13";
    $dbname = "FoodCraft";

    $email = $_SESSION["email"];
    $psw = $_POST["psw"];

    $conn = new mysqli($servername, $username, $password);

    $stmt = $conn->prepare("UPDATE $dbname.user SET `password`=? WHERE email=?");
    $stmt->bind_param("ss", $psw, $email);
   
    if ( $stmt->execute() === TRUE) {
    echo "Пароль успішно змінено! <br>";
    } else {
    echo "Помилка: " . $conn->error;
    }
    $conn->close();
?>