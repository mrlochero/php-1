<?php
header('Content-Type: text/html; charset=tf-8');
// kết nối csdl
$conn = mysqli_connect('localhost', 'root', '', 'data') or die ('lỗi kết nối');

// dùng iset kiểm tra Form
if(isset($_POST['dangky'])){
    $username = $_POST['username'];
    $password= $_POST['password'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($phone)) {
        array_push($errors, "Password is required");
    }
    if (empty($password)) {
        array_push($errors, "Two password do not match");
    }

// Kiểm tra username hoặc email có bị trùng hay không
$sql = "SELECT * From member WHERE username = '$username' OR email = '$email'";

// thực thi câu truy vấn
$result = mysqli_query($conn,$sql);

// Nếu kết quả trả về lớn hơn 1 thì nghĩa là username hoặc email đã tồn tại trong CSDL
if(mysqli_num_rows($result) > 0) {
    echo '<scrpit langue="javascript">alert("Bị trùng tên hoặc chưa nhập tên!"); window.location="register.php";</script>';
    // dừng chương trình
    die('chương trình bị dừng ở đây');
}
// thêm dữ liệu vào csdl
else {
    $sql = "INSERT INTO member (username, password,email, phone) VALUES ('$username', 'password', '$email', '$phone')";
    echo '<script language="javascript">alert("Đăng ký thành công!"); window.location="register.php";</script>';

    if (mysqli_query($conn, $sql)){
        echo "Tên đăng nhập: ".$_POST['username']."<br/>";
        echo "Mật khẩu: " .$_POST['password']."<br/>";
        echo "Email đăng nhập: ".$_POST['email']."<br/>";
        echo "Số điện thoại: ".$_POST['phone']."<br/>";
    }
    else {
        echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="register.php";</script>';
    }
}
}