<?php

include_once 'connect.php';

$sql = "SELECT * FROM sanpham" ;

$result = mysqli_query($conn, $sql);
echo "<hr>";

while( $row = mysqli_fetch_array($result) )
{ ?> <?php echo "<br>"; ?>

<label> <?php echo $row['prd_name']; ?> </label>
<a href="binhluan.php?this_id=<?php echo $row['prd_id']; ?>"> xem bình luận </a>



<?php
}
?>


