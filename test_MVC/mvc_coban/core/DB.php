<?php
// code kết nối bằng pdo
class DB
{
    public  $conn;
    protected $host = 'localhost';
    protected $username = 'root';
    protected $password = '';
    protected $dbname = 'test_mvc';

      function connect()
    {
        // câu lệnh sql
        $this->conn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname . ';charset=utf8';
        // thực thi kết nối database
        $pdo = new PDO($this->conn, $this->username, $this->password);
        //
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        // trả về kết nối database
        return $pdo;
    }
}

?>