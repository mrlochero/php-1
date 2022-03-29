<?php

$sever = 'localhost';
$user ='root';
$pass = '';
$database = 'binhluan';

$conn = new mysqli($sever, $user, $pass, $database);

if($conn)
{
    mysqli_query($conn, "SETNAME 'utf8' ");
    echo "kết nối thành công";
}