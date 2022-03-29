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




//// xóa dữ liệu
//$id = 3;
//// b1 : câu lệnh
//$sql_delete = "DELETE FROM tbl_users WHERE user_id = :id";
////b2 : chuẩn bị
////// b3 : kiểm tra dữ liệu
//$pre = $stmt->prepare($sql_delete);
//$pre->bindParam(':id',$id, PDO::PARAM_STR);
////// B4 THỰC THI
//$pre->execute();


//// SỬA DỮ LIỆU
//$id = 2;
//$user_name = "loclv10000";
////B1: CÂU LỆNH
//$sql = "UPDATE tbl_users SET user_name = :user_name WHERE user_id = 2";
////b2: chuẩn bị
//$pre = $stmt->prepare($sql);
////b3 : kiểm tra dữ liệu
//$pre->bindParam(':user_name', $user_name , PDO::PARAM_STR);
////B4 : thực thi
//$pre->execute();
//// bổ sung :  số lần vừa thực hiên
//$count = $pre->rowCount();
//echo " bạn vừa thực hiện " .$count ."lần";


// đếm số dòng
//b1: câu lệnh
$sql = "SELECT COUNT(*) FROM tbl_users";
//b2 : chuẩn bị
$pre = $stmt->prepare($sql);
//b3 : thực thi
$pre->execute();
//b4:
$count = $pre->fetchColumn();
echo " tổng số dòng trong bảng là: ".$count;
