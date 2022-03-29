<?php
/// INTERFACE
// TẠO interface
// gia nhập interface dùng implement;
interface Phuongthucthanhtoan
{
    public function traTien(); // tạo luật chung
}

interface thanhtoanxong
{
    public function thanhtoanxong();
}

class Paypal implements Phuongthucthanhtoan, thanhtoanxong
{
    // implement   ->gia nhập interface  buộc phải có luật của interface;
    // class có thể gia nhập nhiều interface;
    public function dangnhap()
    {
        echo "đã đăng nhập : Paypal" . "</br>";
    }

    public function tratien()
    {
        echo "đã trả tiền bằng : Paypal" . "</br>";
    }

    public function thanhtoanxong()
    {
        echo "thanh toán thành công";
    }

    public function hinhthucchung()
    {
        $this->dangnhap();
        $this->tratien();
        $this->thanhtoanxong();
    }
}

class Visa implements Phuongthucthanhtoan
{
    public function dangnhap()
    {
        echo "đã đăng nhập : VISA" . "</br>";
    }

    public function tratien()
    {
        echo "đã trả tiền bằng : VISA";
    }

    public function hinhthucchung()
    {
        $this->dangnhap();
        $this->tratien();
    }
}

class tienmat implements Phuongthucthanhtoan
{
    public function tratien()
    {
        echo "trả tiền bằng : Tiền mặt";
    }

    public function hinhthucchung()
    {
        $this->tratien();
    }
}

class muahang
{
    public function thanhtoan($pttt)
    {
        $pttt->hinhthucchung();
    }
}

$muahang = new muahang();
$Paypal = new Paypal();
$Visa = new Visa();
$tienmat = new tienmat();

echo $muahang->thanhtoan($Paypal);

echo "<hr>";
//Sự khác biệt giữa Interface và Abstract trong PHP
//-interface là tạo ra 1 bản thiết kế.
//- còn Abstract tạo ra 1 class
//Thuộc tính: Abstract có thể khởi tạo hàm,biến,..., Interface ko thể khởi tạo chỉ ghi đè thuộc tính.
//- Công cụ truy cập: Abstract dùng protected và public, Interface chỉ dùng public.
// chú ý :-Các lớp vừa triển khai một Interface có thể kế thừa abstract và một lớp khác.
// ABSTRACT
// - abstract là một lớp có ít nhất một phương thức(hàm) abstract;
//  từ khóa truy cập : extends

// tạo ABSTRACT
abstract class Phuongthucthanhtoan2
{
    public abstract function tratien2();

    public function thanhtoanxong2()
    {
        echo "<br>"."thanh toán thành công";
    }
}

class Paypal2 extends Phuongthucthanhtoan2
{
    // ác class con kế thừa lớp Abstract bằng extend;
    // class có thể gia nhập nhiều abstract;
    public function dangnhap2()
    {
        echo "đã đăng nhập : Paypal2"."</br>";
    }

    public function tratien2()
    {
        echo "đã trả tiền bằng : Paypal2" . "</br>";
    }

    public function hinhthucchung2()
    {
        $this->dangnhap2();
        $this->tratien2();
        $this->thanhtoanxong2();
    }
}

class Visa2 extends Phuongthucthanhtoan2
{
    public function dangnhap2()
    {
        echo "đã đăng nhập : VISA2 " . "</br>";
    }

    public function tratien2()
    {
        echo "đã trả tiền bằng : VISA2";
    }

    public function hinhthucchung2()
    {
        $this->dangnhap2();
        $this->tratien2();
        $this->thanhtoanxong2();
    }
}

class tienmat2 extends Phuongthucthanhtoan2
{
    public function tratien2()
    {
        echo "trả tiền bằng : Tiền mặt2";
    }

    public function hinhthucchung2()
    {
        $this->tratien2();

    }
}

class muahang2
{
    public function thanhtoan2($pttt)
    {
        $pttt->hinhthucchung2();
    }
}

$muahang2 = new muahang2();
$Paypal2 = new Paypal2();
$Visa2 = new Visa2();
$tienmat2 = new tienmat2();

echo $muahang2->thanhtoan2($tienmat2);