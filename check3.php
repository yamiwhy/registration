<?php
    // echo"check3";

    $name = filter_var(trim($_POST['name']),
    FILTER_SANITIZE_STRING);
    $longname = filter_var(trim($_POST['longname']),
    FILTER_SANITIZE_STRING);
    $log = filter_var(trim($_POST['log']),
    FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);
    

    // if(mb_strlen($name) < 2 || mb_strlen($name) > 20) {
    //     echo"Недопустимая длина имени";
    //     exit();
    // }   else if(mb_strlen($longname) < 1 || mb_strlen($longname) > 50) {
    //     echo"Недопустимая длина фамилии";
    //     exit();
    // }   else if(mb_strlen($log) < 2 || mb_strlen($log) > 50) {
    //     echo"Недопустимая длина логина (от 2 до 50 символов)";
    //     exit();
    // }   else if(mb_strlen($pass) < 2 || mb_strlen($pass) > 6) {
    //     echo"Недопустимая длина пароля (от 2 до 6 символов)";
    //     exit();    
    // } 
    

    // $pass = mb5($pass);
    
    $mysql = new mysqli('localhost','root','root','random3');
    $mysql->query("INSERT INTO `client` (`name`, `longname`, `log`, `pass`)
    VALUES ('$name', '$longname', '$log', '$pass')");

    $mysql->close();

    header('Location: /');
    

?>