<?php 
    $nickName = $_POST["nickName"];
    $email= $_POST["email"];
    $psw = $_POST["psw"];
    $newUser =  Array (
        "nickname" => $nickName,
        "email" => $email,
        "psw" => $psw
    );

    $jsondata = file_get_contents("../users.json");
    
    $arr_data = json_decode($jsondata, true);

    array_push($arr_data, $newUser);

    $jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);
    
    if(file_put_contents("../users.json", $jsondata)) {
         echo 'Data successfully saved';
     }
    else 
         echo "error";
?>