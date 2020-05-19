<?php 
    require "sessionInfo.php";
    unset($_SESSION["nickName"]);
    unset($_SESSION["email"]);
    header('Location: /FoodCrafter/index.php');
?>