<?php



function checkInput($values,$type = "email"){
    switch ($type) {
        case 'email':
            $pattern = "/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+\.[A-Za-z]{2,6}$/";
                 break;
        case "password":
            $pattern = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
                 break;
        case "username":
            $pattern = "/^[a-z_][a-z0-9_\.\s]{4,31}$/";
            break;
    }
    $flag = preg_match($pattern,$values);
        return $flag;
}