<?php
    // kết nối database;
    $sever = 'localhost';
    $user = 'root';
    $pass = '';
    $database = 'webcuatoi';

    // truy vấn database
    $conn = new mysqLi($sever, $user, $pass, $database);

    if($conn)
    {   mysqLi_query($conn, "SET NAMES 'utf8' ");
        echo " kết nối database thành công";
        echo "<br>";

    else
    {
        echo " kết nối thất bại";
    }
        //Hàm mysqli_query() sẽ thực hiện truy vấn đối với cơ sở dữ liệu.
        //Cú pháp: mysqli_query( $connect, $sql, $mode);
        //$connect là kết nối MySQL.

        //$sql là câu truy vấn:
             // "SET NAMES 'utf8' : kết nối database;
             // " CREATE DATABASE name_database " : tạo data base
             // "CREATE TABLE name_table ()" : tạo table
             // " SELECT * FROM name_table" : get table
             // "INSERT INTO name_table()
                   //VALUES() : thêm dữ liệu vào name_table
             // " DELETE FROM name_table WHERE id = '1' " : xóa dữ liệu ở table có id = 1;
             //" UPDATE name_table SET id='' , taikhoan='' WHERE id=2" : sửa dữ liệu ở table có id = 1

        //$mode là tham số tùy chọn, mang một trong các giá trị sau:
        //MYSQLI_USE_RESULT : sử dụng khi cần lấy một lượng lớn dữ liệu.
        //MYSQLI_STORE_RESULT : giá trị mặc định nếu không truyền.
    }