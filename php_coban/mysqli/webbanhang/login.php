<?php

include_once "connect.php";

session_start();

if(isset($_SESSION['mySession']) )
{
    header('location: index.php');
}

if(isset($_POST['dangnhap']) )
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM thanhvien WHERE username='$username' AND password ='$password' ";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 1)
    {   $_SESSION['mySession'] = $username;
        header('location:index.php');
    }
    else
    {
        echo "tài khoản hoặc mật khẩu sai";
    }
}
?>

<form method="post" action="login.php">
    <label> User Name </label>
    <input type="text" name="username">

    <label for="">PassWord</label>
    <input type="password" name="password">

    <button type="submit" name="dangnhap"> Đăng nhập </button>
    <a href="signup.php" name="dangky"> Đăng ký </a>

</form>
