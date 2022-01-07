<?php

$name = "   LE  vINH    loc  ";


function formatString($str, $type = "")
{
    //b1: chuyển all sang chữ thường
    $str = strtolower($str);
// b2: loại bỏ các khoảng trắng đầu và cuối chuỗi
    $str = trim($str);
//b3: loại bỏ các khoảng trắng ở giữa
    $arr = explode(" ", $str);

    foreach ($arr as $key => $value) {
        if (!trim($value)) {
            unset($arr[$key]);
            continue;
        }
        //b4: in hoa chữ cái đầu tên danh từ
        if ($type == "danh-tu")
            $arr[$key] = ucfirst($value);
    }
    $result = implode(" ", $arr);
    $result = ucfirst($result);
    return $result;

}
echo formatString($name,"danh-tu");
echo "<pre>";
echo "</pre>";



