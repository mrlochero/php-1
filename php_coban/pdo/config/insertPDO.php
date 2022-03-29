<?php

// code kết nối bằng pdo
class DB
{
    private $host = 'localhost';
    private $dbname = 'pdo_coban';
    private $username = 'root';
    private $password = '';

    public function connect()
    {
        // câu lệnh sql
        $conn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname . ';charset=utf8';
        // thực thi kết nối database
        $pdo = new PDO($conn, $this->username, $this->password);
        //
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        // trả về kết nối database
        return $pdo;
    }
}

$test = new DB();
$stmt = $test->connect();

// khởi tạo dữ liệu INSERT INTO
//1. cách bình thường
//$loclv9 = ['loclv9'];
////b1: tạo câu lệnh
//$sql_inset = "INSERT INTO tbl_users (user_name)
//                         VALUES (?)";
//// b2 : chuẩn bị
//$pre = $stmt->prepare($sql_inset);
//// b4 : thực thi và gán giá trị
//$pre->execute($loclv9);
//// bổ sung :  đếm số lần vừa thực hiên
//$count = $pre->rowCount();
//echo " bạn vừa thực hiện " .$count ."lần";

// gán values bằng 1 mảng :
$array_values = array('loclv19', 'đường parabol', '098xxxxxx', 'cân all');
$sql = "INSERT INTO tbl_users (user_name,user_address,user_phone,user_note)
        VALUES(?, ?, ?, ?)";
$pre = $stmt->prepare($sql);
$pre->execute($array_values);


// 2.cách kiểm tra rồi mới thực thi

$user_name = 'loclv99';
$user_address = 'đường trần đăng';
$user_phone = '097xxxxxx';
$user_note = 'hôm nay là thứ mấy';
//b1: câu lệnh
$sql = "INSERT INTO tbl_users (user_name,user_address,user_phone,user_note)
        VALUES(:user_name , :user_address , :user_phone , :user_note )";
//b2 : chuẩn bị
$pre = $stmt->prepare($sql);
//b3 : kiểm tra
$pre->bindParam('user_name', $user_name, PDO::PARAM_STR);
$pre->bindParam('user_address', $user_address, PDO::PARAM_STR);
$pre->bindParam('user_phone', $user_phone, PDO::PARAM_STR);
$pre->bindParam('user_note', $user_note, PDO::PARAM_STR);
//B4 : THỰC THI
$pre->execute();

