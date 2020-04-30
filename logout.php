<?php 
    require "./sessionInfo.php";
    unset($_SESSION["nickName"]);
    header('Location: /');
?>