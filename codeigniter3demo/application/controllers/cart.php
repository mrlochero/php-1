<?php

class Cart extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('cart');
	}





	public function index()
	{
		$cart = array('id' => 8, 'qty' => 1, 'price' => 1200, 'name' => 'sản phẩm 01');
		$this->cart->insert($cart);

		$data['data'] = $this->cart->contents();
		$this->load->view('view_cart', $data);

		echo " thành công";
	}

}
