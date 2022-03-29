<?php

// kết nối database
include_once "connect.php";

// sửa dữ liệu MySQL
$id = 3;
$taikhoan = 'user';
$matkhau = '123456777';
$level = 2;

$sql = " UPDATE thanhvien SET id='$id' , taikhoan='$taikhoan' ,
                      matkhau='$matkhau' , level='$level' WHERE id=2
                      ";

mysqli_query( $conn , $sql);

