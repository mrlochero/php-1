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

// LẤY DỮ LIỆU BẰNG PDO :

//cách 1: thực thi ngay
// CÂU LỆNH TRUY VẤN
$sql = "select * from tbl_users";

// thực thi Lệnh
$pre = $stmt->query($sql);

// lấy dữ liệu cơ bản
foreach ($pre as $row) {
    echo $row['user_name']."<br>";
}

// lấy theo OBJ
$pre3 = $stmt->prepare($sql);
$pre3->execute();
while ($row = $pre3->fetch(PDO::FETCH_OBJ))
{
    echo $row->user_note;
}



// cách 2 : kiểm tra rồi mới thực thi
//b1 : khởi tạo  CÂU LỆNH TRUY VẤN
$sql2 = "select * from tbl_users WHERE user_name = :user_name";
//b2: chuẩn bị
$pre2 = $stmt->prepare($sql2);
//b3: kiểm tra
$pre2->bindParam('user_name',$user_name,PDO::PARAM_STR);
//b4: thực thi
$pre2->execute();

