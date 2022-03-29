<?php
class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//load dữ liệu từ database;
		$this->load->database();

		// load model;
		$this->load->model('Home_model');
	}

	public function index() {
		$result['data'] = $this->Home_model->display_records();
		$this->load->view('blog', $result);
	}
}
