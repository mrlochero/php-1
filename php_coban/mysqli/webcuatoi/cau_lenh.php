<?php

// kết nối database
include_once "connect.php";

$sql = "SELECT * FROM thanhvien ORDER BY RAND() ";
// WHERE :  ở đâu
// AND: và
// OR : hoặc
// LIKE '% kí tự %' : tìm theo ký tự
// ORDER BY : sắp xếp theo thứ tự -> tăng dần: ASC
                                //-> giảm dần: DESC
// LIMIT 0,1: in 1 sp
//RAND() : CÚ PHÁP : ORDER BY RAND() : xáo trộn sp

$result = mysqli_query($conn , $sql);
$count = mysqli_num_rows($result);

if($count > 0)
{
    while($row = mysqli_fetch_array($result) )
    {
        echo $row['id'] . "|" .$row['taikhoan'] . "|" .$row['matkhau'] . "|" .$row['level'];
        echo "<br>";
    }
}
