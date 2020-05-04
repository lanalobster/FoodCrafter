<?php 
    $log = $_POST["logData"];
    $logs = fopen("logs.txt", "a");
    fputs($logs, $log . "\n");
    fclose($logs);
?>