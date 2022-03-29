<?php

if(isset($_POST['btn']) ){
    if(!empty($_FILES['img-up']) ){
        if($_FILES['img-up']['size'] == 0 ) {
            echo "bạn chưa chọn hình ảnh";
        }else{
            move_uploaded_file($_FILES['img-up']['tmp_name'], './thu_muc_luu' . $_FILES['img-up']['name']);
            echo "up hình thành công";
        }                                       //lấy nguồn hình ảnh            lấy tên hình ảnh

    }
}
