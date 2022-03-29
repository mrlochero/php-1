<?php

include_once "connect.php";

session_start();

if(!isset($_SESSION['mySession']) )
{
    header('location: login.php');
}
else
{
    echo "đăng nhập thành công";
}
?>

<h1> ĐÂY LÀ TRANG CHỦ</h1>

<div><a href="loguot.php"> Đăng Xuất </a></div>

<form method="post">
    <label"> TÌM SẢN PHẨM</label>
    <input type="text" name="timkiem">
    <button name="btn"> Tìm Kiếm </button>
</form>

<?php

//bấm button name="btn"
if(isset($_POST['btn']) )
{
    // lấy nội dung input cho biến $timkiem
    $timkiem = $_POST['timkiem'];

    // câu lệnh tìm kiếm mysqli
    $sql = "SELECT * FROM sanpham WHERE name LIKE '%$timkiem%' ";

    // thực thi câu lệnh mysqli
    $result = mysqli_query($conn, $sql);

    // dùng vòng lặp gắn $row thành 1 mảng
    while ($row = mysqli_fetch_array($result) )
    {
        // in giá trị $row['name']
        echo $row['name'];
    }
}


?>