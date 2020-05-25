<?php 
    require "sessionInfo.php";
    unset($_SESSION["nickName"]);
    unset($_SESSION["email"]);
    header('Location: /index.php');
?>