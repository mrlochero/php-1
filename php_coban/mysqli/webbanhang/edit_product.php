<?php

include_once "connect.php";

$this_id = $_REQUEST['this_id'];

$sql = " SELECT * FROM sanpham WHERE id = '$this_id' ";

$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

if(isset($_POST['btn']) )
{
    $name = $_POST['name'];
    $price = $_POST['price'];
    $warranty = $_POST['warranty'];

    // chỉ lấy tên hình ảnh
    $image = $_FILES['image']['name'];

    // lấy nguồn hình ảnh ['tmp_name] :
    $img_tmp_name = $_FILES['image']['tmp_name'];

    // câu lệnh UPDATE SET sửa thành phần trong mục sanpham WHERE ở id = $this_id
    $sql2 = "UPDATE sanpham SET name='$name', image='$image',
    price='$price', warranty='$warranty' WHERE id='$this_id' ";

    // kết nối database và sử dụng câu lệnh $sql2
    mysqli_query($conn, $sql2);

    // lấy nguồn hình ảnh thêm vào file img/ và đặt tên hình ảnh bằng $image
    move_uploaded_file($img_tmp_name, 'img/'.$image);

    // quay về trang product.php
    header('location: product.php');
}

?>
<div><a href="product.php"> TRANG SẢN PHẨM </a></div>
<hr>
<h1>
    Sản Phẩm: <?php echo $row['name'] ?>
</h1>
<form method="post" enctype="multipart/form-data">
    <p> name </p>
    <input type="text" name="name" value="<?php echo $row['name']; ?>">

    <p> Image </p>
    <span><img height="60" width="50" src="img/<?php echo $row['image'] ?>" alt="ảnh sản phẩm"></span>
    <input type="file" name="image" value="<?php echo $row['image']; ?>">

    <p> price </p>
    <input type="text" name="price" value="<?php echo $row['price']; ?>">

    <p> warranty </p>
    <input type="text" name="warranty" value="<?php echo $row['warranty']; ?>">

    <button type="submit" name="btn" value="Gửi"> </button>
</form>
