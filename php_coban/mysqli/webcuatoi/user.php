<?php

include_once "connect.php";

$sql = "SELECT * FROM thanhvien";
$result = mysqli_query( $conn , $sql );

while($row = mysqli_fetch_array($result))
{ ?>


   <?php echo $row[0] . "_"; ?>
   <?php echo $row[1] . "_"; ?>
   <?php echo $row[2] . "_"; ?>
   <?php echo $row[3] ?>
    <span> <a href="edit.php?this_id= <?php echo $row[0]; ?>">Sửa</a> </span>
    <span> <a href="edit2.php?this_id_del= <?php echo $row[0]; ?>">Xóa</a> </span>
    <br>



<?php }?>
