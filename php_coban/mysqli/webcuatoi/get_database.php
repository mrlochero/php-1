<?php

// kết nối database
include_once "connect.php";

// kết nối tới bảng thanhvien
$sql = " SELECT * FROM thanhvien";

// truy vấn đến bảng thanhvien
$result = mysqli_query( $conn , $sql);

// đếm dữ liệu trong bảng thanhvien
$cont = mysqli_num_rows($result);

if ( $cont > 0 )
{
    // tạo mảng và lặp qua các dữ liệu trong bảng thanhvien
    while($row = mysqli_fetch_array($result) )
    {
        echo  $row['id'] . "-" . $row['taikhoan'] . "-" . $row["matkhau"] . "-" . $row["level"];
        echo "<br>";
    }

}
