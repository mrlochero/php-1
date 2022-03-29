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

// LẤY DỮ LIỆU BẰNG PDO
// CÂU LỆNH TRUY VẤN
$sql = "select * from tbl_users";

// thực thi Lệnh
$stmt_1 = $stmt->query($sql);

// dùng while lặp và in ra các dữ liệu
//while ($row = $stmt_1->fetch()) {
//    echo $row['user_id'] . '<br>';
//    echo $row['user_name'] . '<br>';
//    echo $row['user_address'] . '<br>';
//    echo $row['user_phone'] . '<br>';
//    echo $row['user_note'] . '<br>';
//    echo "<hr>";
//}

// khởi tạo dữ liệu INSERT INTO
//$sql_inset = "INSERT INTO tbl_users (user_name, user_note, user_address, user_phone )
//                         VALUES (?, ?, ?,?)";
//$loclv3 = ['loclv3', 'hôm nay âm u', 'đường lê lợi', '0979xxxxxx'];
//
//$stmt_2 = $stmt->prepare($sql_inset);
//
//$stmt_2->execute($loclv3);

//$sql = 'select * from tbl_users where user_id > ?';
//$stmt_3 = $stmt->prepare($sql);
//$stmt_3->execute([1]);
//
//
//$username = $stmt_3->fetchAll();
//foreach ($username as $name) {
//    echo $name['user_id'] . '<br>';
//}

$user_id = $_GET['id'];

$sql = 'SELECT tbl_users.user_name, tbl_money.money FROM tbl_users LEFT JOIN tbl_money ON tbl_users.user_id = tbl_money.relation_id WHERE money is not null and user_id = ?';
$stmt_4 = $stmt->prepare($sql);
$stmt_4->execute([$user_id]);

$users = $stmt_4->fetchAll();
foreach ($users as $user) {
    echo $user['user_name'] . ' => ' . $user['money'] . ' <br>';
}
