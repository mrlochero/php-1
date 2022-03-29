<?php
    // kết nối database;
    $sever = 'localhost';
    $user = 'root';
    $pass = '';
    $database = 'webcuatoi';

    // truy vấn database
    $conn = new mysqLi($sever, $user, $pass, $database);

    if($conn) {
        mysqLi_query($conn, "SET NAMES 'utf8' ");
        echo " kết nối database thành công";
        echo "<br>";
    }
    else
        {
            echo " kết nối thất bại";
        }