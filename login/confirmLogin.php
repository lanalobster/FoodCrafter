<?php 
    require "../sessionInfo.php";
    $servername = "localhost";
    $username = "root";
    $password = "Kindzmarauli13";
    $dbname = "FoodCraft";

    $email= $_GET["email"];
    $psw = $_GET["psw"];

    $conn = new mysqli($servername, $username, $password);
 
    $sql = "SELECT * FROM $dbname.user WHERE email='" . $email . "'"; 
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    if ($result->num_rows < 1) {
        echo '<div style="color: red;">'. "Невірний e-mail!" .'</div><hr>';
    }elseif ($row["password"] != $psw) {
        echo '<div style="color: red;">'. "Невірний пароль!" .'</div><hr>';
    } else {
        $_SESSION["nickName"] = $row["nickname"];
        $_SESSION["email"] = $email;
        $conn->close();
    }         
?>