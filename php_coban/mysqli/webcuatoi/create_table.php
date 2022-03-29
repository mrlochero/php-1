<?php

// kết nối database
include_once "connect.php";


// tạo bảng
$sql = "CREATE TABLE thanhvien (

        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
        taikhoan VARCHAR(30) NOT NULL,
        matkhau VARCHAR(30) NOT NULL,
        level INT(6)
)";

// thực thi truy vấn
if( $conn->query($sql) == TRUE )
{
    echo " tạo bảng thành công";
}
else
{
    echo " tạo bảng không thành công";
}