<?php

class M_cart extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

    }

    public function insertCart1($id)
    {
        $data = $this->shoppe_model->getSanpham($id);

        $this->insertCart2
        (
            $data[0]['id'],
            $data[0]['price_sale'],
            $data[0]['img_sp'],
            $data[0]['danh_muc']
        );

        //Show thong tin chi tiet gio hang
        $result['dataCart'] = $this->cart->contents();
        $this->load->view('public/head', $result);


    }

    public function insertCart2($id, $price, $img, $phanloai)
    {

        $data = array(
            "id" => "$id",
            "name" => "viet Nam Khong So Trung Quoc",
            "qty" => "1",
            "img" => $img,
            "price" => "$price",
            "phanloai" => "$phanloai",
            "option" => array("author" => "/shopedemo/V_sanpham/$id"),
        );
        // Them san pham vao gio hang
        if ($this->cart->insert($data)) {
            echo "Them san pham thanh cong";
//            $this->load->view('cartSp', $data);
        } else {
            echo "Them san pham that bai";
        }

    }

    public function showCart()
    {
        $data = $this->cart->contents();
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}
