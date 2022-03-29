<?php

class Cart extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library("cart");
        $this->load->helper("url");
    }

    public function insert(){
        $id_sp = $this->uri->segment(3);
        $data=array(
            "id" => "1",
                "id_sp" => "$id_sp",
                "name" => "viet Nam Khong So Trung Quoc",
            "qty" => "1",
            "price" => "100000",
            "option" => array("author" => "freetuts.net"),
        );
        // Them san pham vao gio hang
        if($this->cart->insert($data)){
            echo "Them san pham thanh cong";
        }else{
            echo "Them san pham that bai";
        }

    }

    public function show(){
        //Show thong tin chi tiet gio hang
        $data=$this->cart->contents();
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }

}