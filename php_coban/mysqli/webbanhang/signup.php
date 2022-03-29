<?php

// kết nối đến file database
include_once "connect.php";

if(isset($_POST['btn']) )
{
    // tạo các biến để lấy giá trị
    $id = "";
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = 2;

    // tạo câu lệnh và gắn giá trị
    $sql = "INSERT INTO thanhvien (id,username,password,level)
    VALUES('', '$username', '$password','$level')";

    // kết nối database
    mysqli_query($conn, $sql);

    // đưa người dùng trở lại trang login.php
    header('location:login.php');
}

?>

<form action="signup.php" method="post">

    <label> username </label>
    <input type="text" name="username">

    <label> password </label>
    <input type="password" name="password">

    <button type="submit" name="btn"> Sign Up </button>
</form>
