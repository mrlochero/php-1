<?php

class HinhVuong{
    // thuoc tinh
    public $chieudai;
    // hanh dong
    function HinhVuong($x){
        $this->chieudai = $x;
    }
    function tinhchuvi(){
        return $this->chieudai * 4;
    }

    function tinhdientich(){
        return $this->chieudai * $this->chieudai;

    }
}
$hinh = new HinhVuong(30);
$hinh->chieudai = 30;
echo $chuvi = $hinh->tinhdientich();
?>
