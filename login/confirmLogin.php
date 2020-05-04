<?php 
    require "../sessionInfo.php";
    $data = $_GET;
 
    if (isset($data)) {
        $json= file_get_contents('../users.json');
        $arr = json_decode($json);
        $errors = array();
        $isError = true;
        foreach ($arr as $field) {
            if ($data['email'] == $field->email) {
                if ($data['psw'] != $field->psw) {
                    $errors[] = 'Введений неправильний пароль';
                } else {
                    echo '<div style="color: RGB(153, 255, 153); font-size: 18px;">Дякую, '.$field->nickname.'</div><hr>';
                    $_SESSION["nickName"] = $field->nickname;
                    $isError = false;
                    break;
                }
            }
        }
        $errors[] = 'Користувача з таким email не існує';
        if (!empty($errors) && $isError) {
            echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
        }
    }              
?>