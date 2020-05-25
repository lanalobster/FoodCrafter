<?php 
    require "../config.php";
    $servername = "localhost";
    $username = "root";
    $dbname = "FoodCraft";

    $nickName = $_POST["nickName"];
    $email= $_POST["email"];
    $psw = $_POST["psw"];

$conn = new mysqli($servername, $username, $password);

if ($conn == false){
    echo "Error: " . $conn->connect_error;
}
else {
    echo "Successfully connected <br>";
}

$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully <br>";
} else {
  echo "Error creating database: <br>" . $conn->error. "<br>";
}

$sql = "CREATE TABLE IF NOT EXISTS $dbname.user (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nickname VARCHAR(30) NOT NULL UNIQUE,
    email VARCHAR(30) NOT NULL UNIQUE,
    password VARCHAR(30) NOT NULL)";
if ($conn->query($sql) === TRUE) {
    echo "Table created successfully <br>";
    } else {
    echo "Error creating table: <br>" . $conn->error . "<br>";
    }

$stmt = $conn->prepare("INSERT INTO $dbname.user (nickname, email, `password`) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $nickName, $email, $psw);
$stmt->execute(); 

$conn->close();
?>