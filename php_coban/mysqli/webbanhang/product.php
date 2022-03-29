<!DOCTYPE html>
<html lang="en">
<head>
    <title> web bán điện thoại </title>
</head>

<body>

    <thead>
        <tr>
            <th>ID</th>
            <th>----Tên----</th>
            <th>----Hình ảnh----</th>
            <th>----Giá----</th>
            <th>----Bảo hành----</th>
        </tr>
    </thead>

    <tbody>

        <?php
            include_once "connect.php";

            $sql = "SELECT * FROM sanpham";
            $result = mysqli_query($conn , $sql);

            while($row =  mysqli_fetch_array($result) )
            {
        ?>
        <tr>
            </br>
            <td> <?php echo $row[0] ?> </td>
            <td> <?php echo $row[1] ?> </td>
            <td> <img width="30" height="40"
                      src="img/<?php echo $row[2]; ?>"> </td>
            <td> <?php echo $row[3] ?> </td>
            <td> <?php echo $row[4]?> </td>
            <span> <a href="delete_product.php?this_id=<?php echo$row[0]; ?> "> Xóa </a> </span>
            <span> <a href="edit_product.php?this_id=<?php echo $row[0]; ?> "> Sửa </a> </span>
        </tr>
        <?php } ?>
    </tbody>
</body>

<hr>
<div>
    <a href="add_product.php"> THÊM SẢN PHẨM </a>
</div>

</html>









