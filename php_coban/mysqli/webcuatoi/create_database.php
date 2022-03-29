<?php

// kết nối database
include_once "connect.php";

//   tạo database
$sql = " CREATE DATABASE cosodulieu ";

// thực thi truy vấn
if( mysqli_query($conn , $sql ) )
{
    echo "tạo database thành công";
}
else {
    echo "tạo databasse thất bại ";
}