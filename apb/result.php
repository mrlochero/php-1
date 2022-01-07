<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TRẮC NGHIỆM TÍNH CÁCH</title>
</head>
<body>
<?php

// đọc file question
  $data = file("question.txt") or die('not read file');

  $point = 0;


  array_shift($data);

  foreach ($data as $key => $value) {
      $tmp = explode("|",$value);
      $id = $tmp[0];
      if(isset($_POST[$id])) {
          $point = $point + $_POST[$id];
      }
  }

  // đọc file
 $data_1 = file("result.txt") or die("không đọc đc file result");
  $result ="";
  array_shift($data_1);
  foreach ($data_1 as $keyB => $valueB) {
        $tmp_1 = explode("|",$valueB);
        $min = $tmp_1[0];
        $max = $tmp_1[1];
        $content = $tmp_1[2];
        if($point >= $min && $point <= $max ) {
            $result = $content;
        }
  }
  ?>
 <div class="content">
        <h1>Kết quả trắc nghiêm tính cách</h1>
     <div style="width:400px"><p><b>Tổng số điểm của bạn là : </b><?php echo $point ?></p> <p style="margin-top:10px; text-align:justify"><b><?php echo $result ?></b></p></div>
      </div>

</body>