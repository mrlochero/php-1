<?php

// kết nối database


// Thêm dữ liệu MySQL
$id = "";
$taikhoan = 'USER1';
$matkhau = '123456';
$level = 2;

$sql = " INSERT INTO thanhvien ( id , taikhoan , matkhau , level) 
VALUES('$id' , '$taikhoan' , '$matkhau' , '$level' )";
//
mysqli_query($conn , $sql);

//INSERT INTO trong SQL được dùng để thêm một hàng dữ liệu mới vào bảng trong cơ sở dữ liệu.
//INSERT INTO TEN_BANG (cot1, cot2, cot3,...cotN) -> cot là tên cột
//VALUES (gia_tri1, gia_tri2, gia_tri3,...gia_triN); --> gia_tri là giá trị của cột tương ứng;