<?php
// kết nối tới file database
include_once "connect.php";

// lấy giá trị id gán cho $this_id
$this_id = $_GET['this_id'];
echo $this_id;

// câu lệnh xóa bảng sản phẩm ở id ='$this_id';
$sql = " DELETE FROM sanpham WHERE id='$this_id' ";

// kết nối databasse ở biến $conn và thực thi câu lệnh ở $sql
mysqli_query($conn , $sql );

// quay lại trang chính
header( 'location: product.php');

?>