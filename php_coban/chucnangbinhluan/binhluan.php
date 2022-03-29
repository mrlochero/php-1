<?php

include_once "connect.php";

$sql = "SELECT name, noidung FORM binhluan
INNER JOIN sanpham ON binhluan.prd_id=sanpham.prd_id
AND
INNER JOIN thanhvien ON binhluan.user=thanhvien.user
WHERE prd_name LIKE'%$prd_name%'
ORDER BY id DESC 
LIMIT 0,5";

echo " đây là trang bình luận";


?>


