<?php

$sever = 'localhost';
$user ='root';
$pass = '';
$database = 'webbanhang';

$conn = new mysqli($sever, $user, $pass, $database);

if($conn)
{
    mysqli_query($conn, "SETNAME 'utf8' ");
}