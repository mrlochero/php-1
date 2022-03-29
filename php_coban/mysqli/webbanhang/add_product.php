<?php

include_once "connect.php";

if(isset($_POST['btn']) )
{
    $name = $_POST['name'];

    // chỉ lấy tên hình ảnh gửi lên database
    $image = $_FILES['hinhanh']['name'];

    // lấy đường dẫn của ảnh
    $image_tmp_name = $_FILES['hinhanh']['tmp_name'];

    $price = $_POST['price'];

    $warranty = $_POST['warranty'];

    $sql = "INSERT INTO sanpham (name , image , price , warranty)
    VALUE('$name' , '$image' , '$price' , '$warranty')";

    mysqli_query($conn , $sql );

    // up hình ảnh
    move_uploaded_file($image_tmp_name , 'img/' .$image );
}
?>

<div><a href="product.php"> TRANG SẢN PHẨM </a></div>
<hr>
<form action="add_product.php" method="post" enctype="multipart/form-data">

    <p> name </p>
    <input type="text" name="name">

    <p> Image </p>
    <input type="file" name="hinhanh">

    <p> price </p>
    <input type="text" name="price">

    <p> warranty </p>
    <input type="text" name="warranty">
        </br>
    <button id="submit" name="btn"> Gửi </button>
</form>
